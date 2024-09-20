<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenericContentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function() {
    Route::resource('generic-content', GenericContentController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('users', UserController::class);

});

