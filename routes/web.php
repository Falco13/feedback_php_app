<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::controller(MainController::class) -> group(function() {
    Route::get('/', 'home');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact/check', 'contact_check');
});
