<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function list() {
        return view('admin.projects.list');
    }
}
