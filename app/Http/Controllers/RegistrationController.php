<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateRegistrationRequest;
use App\Models\Candidate;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Skill;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Webpatser\Countries\Countries;

class RegistrationController extends Controller
{
    public function create() {
        $countries = Countries::all();
        $skills = Skill::all();
        $courses = Course::all();
        $certificates = Certificate::all();
        return view('client.cv-form', compact('countries', 'skills', 'courses', 'certificates'));
    }

    public function store(StoreCandidateRegistrationRequest $request) {
        $candidate = Candidate::create($request->all());
        $candidate->skills()->attach($request->skills);

        $courses_data = [];
        $counter = 0;
        foreach($request->get('courses') as $course_id) {
            if($course_id) {
                $courses_data[$course_id] = [
                    'experience'    => $request->get('experiences')[$counter],
                ];
                $counter++;
            }
        }
        $candidate->courses()->sync($courses_data);

        $certificates_data = [];
        $counter = 0;
        foreach($request->get('certificates') as $certificate_id) {
            if($certificate_id) {
                $certificates_data[$certificate_id] = [
                    'certified_at' => $request->get('certification_dates')[$counter]
                ];
                $counter++;
            }
        }
        $candidate->certificates()->sync($certificates_data);

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

        return redirect()->route('web.candidate.create')->with('message', 'Thank you for submitting your CV. Our team is currently reviewing your submission and will get back to you shortly.');

    }
}
