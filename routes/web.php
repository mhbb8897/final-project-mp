<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/loginmhs', function () {
    return view('loginmhs');
});
Route::get('/signup', function () {
    return view('signup');
});
