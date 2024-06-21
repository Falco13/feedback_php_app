<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact/check', [MainController::class, 'contact_check']);
