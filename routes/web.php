<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function() {
    return view('layout');
});

Route::get('/about', function() {
    return view('about');
});
