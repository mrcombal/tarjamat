<?php

use App\Http\Controllers\GenericContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProjectRequestController;
use App\Http\Controllers\ProjectController;

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {

    Route::resource('generic-content', GenericContentController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('users', UserController::class);
    Route::get('/logout', [AdminController::class, 'getLogout'])->name('player.logout');
    Route::get('/', [AdminController::class, 'getIndex'])->name('index');
});

Route::get('admin/login', [AdminController::class, 'getLogin'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'postLogin'])->name('admin.auth');
