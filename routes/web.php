<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/page2', function () {
    return view('page2');
});

Route::get('/page3', function () {
    return view('page3');
});
