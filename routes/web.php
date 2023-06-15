<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ClientController;
use App\Models\ProjectRequestController;



Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {

    Route::post('/clients/create', [ClientController::class, 'store'])->name('client.store');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('client.create');
    Route::get('/clients/{id}', [ClientController::class, 'profile'])->name('client.profile');
    Route::get('/clients', [ClientController::class, 'list'])->name('client.list');

    Route::post('/courses/generate', [CourseController::class, 'generateDescription'])->name('course.description.generate');
    Route::post('/courses/create', [CourseController::class, 'store'])->name('course.store');
    Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/courses/{id}/edit', [CourseController::class, 'update'])->name('course.update');
    Route::get('/courses/{id}/edit', [CourseController::class, 'edit'])->name('course.edit');
    Route::get('/courses/{id}', [CourseController::class, 'view'])->name('course.view');
    Route::get('/courses', [CourseController::class, 'list'])->name('course.list');


    Route::post('/skills/create', [SkillController::class, 'store'])->name('skill.store');
    Route::get('/skills/create', [SkillController::class, 'create'])->name('skill.create');
    Route::post('/skills/{id}/edit', [SkillController::class, 'update'])->name('skill.update');
    Route::get('/skills/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
    Route::get('/skills', [SkillController::class, 'list'])->name('skill.list');

    Route::post('/candidates/create', [CandidateController::class, 'store'])->name('candidate.store');
    Route::get('/candidates/create', [CandidateController::class, 'create'])->name('candidate.create');
    Route::get('/candidates/{id}', [CandidateController::class, 'profile'])->name('candidate.profile');
    Route::get('/candidates', [CandidateController::class, 'list'])->name('candidate.list');

    Route::post('/ajax/delete', [AjaxController::class, 'delete'])->name('ajax.delete');
    Route::get('/logout', [AdminController::class, 'getLogout'])->name('player.logout');
    Route::get('/', [AdminController::class, 'getIndex'])->name('index');
});

Route::get('admin/login', [AdminController::class, 'getLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'postLogin'])->name('admin.auth');

Route::post('request', [ProjectRequestController::class, 'store'])->name('request.store');
Route::get('request', [ProjectRequestController::class, 'create'])->name('request.create');
