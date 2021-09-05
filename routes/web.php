<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
// Routing for the Middleware
Route::view('prompt', 'prompt');
Route::view('users', 'users');
Route::view('home', 'home');
Route::view('noaccess', 'noaccess');
