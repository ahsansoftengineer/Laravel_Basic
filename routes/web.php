<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
// User Consumming Header Component
Route::view('users', 'users');
// About Consumming Header Component
Route::view('about', 'about');
// Passing Data from Parent to Child
Route::view('admin', 'admin');


