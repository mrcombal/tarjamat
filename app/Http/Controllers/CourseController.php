<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    public function list() {
        $courses = Course::all();
        return view('admin.courses.list', compact('courses'));
    }

    public function create() {
        $method = 'post';
        $course = new Course();
        return view('admin.courses.course-form', compact('method', 'course'));
    }

    public function store(StoreCourseRequest $request) {
        $course = Course::create($request->all());
        return redirect()->route('course.list')->with('message', $course->name.' course has been added!');
    }

    public function edit($id) {
        $course = Course::find($id);
        if(!$course)
            abort(404);
        return view('admin.courses.course-form', [
            'course'     => $course,
            'method'    => 'put',
        ]);
    }

    public function update($id, UpdateCourseRequest $request) {
        $course = Course::find($id);
        if(!$course)
            abort(404);;
        $course->update($request->all());
        return redirect()->back()->with('message', "Course has been updated.");
    }

    public function view($id) {
        $course = Course::find($id);
        if(!$course) abort(404);
        return view('admin.courses.course', ['course' => $course]);
    }


    public function generateDescription(Request $request) {
        $messages = [
            ['role' => 'user', 'content' => 'I need a 50 words brief for a course about ' . $request->get('name')],
        ];
        $result = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages,
        ]);
        return Arr::get($result, 'choices.0.message');
    }
}
