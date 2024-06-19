<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return "Hello php-world!";
});

Route::get('/about', function() {
    return view('about');
});
