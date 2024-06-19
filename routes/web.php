<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about']);

/*
Route::get('/about', function() {
    return view('about');
});
*/