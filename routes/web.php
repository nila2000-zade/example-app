<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/instagram_signup', function () {
    return view('instagram_signup');
});

Route::get('/instagram_login', function () {
    return view('instagram_login');
});
