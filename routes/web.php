<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/writers', function () {
    return view('writers');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/popular', function () {
    return view('popular');
});

Route::get('/category/interactive-multimedia', function () {
    return view('category/multimedia');
});

Route::get('/category/software-engineering', function () {
    return view('category/software-engineering');
});
