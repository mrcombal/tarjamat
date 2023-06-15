<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Course;
use App\Models\Skill;
use App\Http\Requests\StoreCandidateRequest;
use Webpatser\Countries\Countries;
use Intervention\Image\Facades\Image;


class CandidateController extends Controller
{
    public function list() {
        $candidates = Candidate::all();
        return view('admin.candidates.list', compact('candidates'));
    }

    public function create() {
        $method = 'post';
        $candidate = new Candidate();
        $countries = Countries::all();
        $skills = Skill::all();
        $courses = Course::all();
        return view('admin.candidates.candidate-form', compact('method', 'candidate', 'countries', 'skills', 'courses'));
    }

    public function store(StoreCandidateRequest $request) {
        $candidate = Candidate::create($request->all());
        $candidate->skills()->attach($request->skills);

        $courses_data = [];
        $counter = 0;
        foreach($request->get('courses') as $course_id) {
            $courses_data[$course_id] = [
                'experience'    => $request->get('experiences')[$counter],
                'tier'          => $request->get('tiers')[$counter]
            ];
            $counter++;
        }
        $candidate->courses()->sync($courses_data);

        if ($request->hasFile('image_file')) {
            $image = $request->file('image_file');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image_file = Image::make($image->getRealPath());
            $image_file->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('images/candidates/' . $image_name);
            $candidate->image_file = $image_name;
            $candidate->save();
        }

        if($request->hasFile('resume_file')) {
            $file_name = time().'.'.$request->file('resume_file')->getClientOriginalExtension();
            $request->file('resume_file')->move('resumes/', $file_name);
            $candidate->resume_file = $file_name;
            $candidate->save();
        }

        return redirect()->route('candidate.list')->with('message', $candidate->name.'  has been added!');
    }

    public function profile($id) {
        $candidate = Candidate::find($id);
        if(!$candidate) abort(404);
        return view('admin.candidates.profile', compact('candidate'));
    }
}
