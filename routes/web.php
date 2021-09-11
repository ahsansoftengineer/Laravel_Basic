<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::view('noaccess', 'noaccess');

// Utilizing Route Middleware
Route::view('home', 'home')->middleware('protectedPage');
Route::view('users', 'users')->middleware('protectedPage');
