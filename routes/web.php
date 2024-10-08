<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenericContentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenericPageController;

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

Route::get('/contact', [GenericPageController::class, 'contact'])->name('website.contact');
Route::get('/services', [GenericPageController::class, 'services'])->name('website.services');
Route::get('/about', [GenericPageController::class, 'about'])->name('website.about');
Route::get('/', [GenericPageController::class, 'index'])->name('website.index');

