<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequestRequest;
use App\Models\ProjectRequest;

class ProjectRequestController extends Controller
{
    public function create() {
        return view('client.request-form');
    }

    public function store(StoreProjectRequestRequest $request) {
        $project_request = ProjectRequest::create($request->all());
        return redirect()->route('web.request.create')->with('message', 'Thank you for submitting your new project request.<br><br>We are currently reviewing your request and someone will get in touch with you afterwards.');
    }
}
