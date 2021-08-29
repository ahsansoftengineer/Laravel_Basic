<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Calling View Directly from Route
Route::get('users', function () {
    return view('users');
});
// Short Syntax of Returning View
// This Syntax has Limitation cannot Pass Parameters
Route::view('user', 'users');

// Route::get('users', [Users.class, 'index'])
