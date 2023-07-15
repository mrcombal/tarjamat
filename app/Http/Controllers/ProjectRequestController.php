<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequestRequest;

class ProjectRequestController extends Controller
{
    public function create() {
        return view('client.request-form');
    }

    public function store(StoreProjectRequestRequest $request) {
        return $request->all();
    }
}
