<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
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

// Without Parameter Controller and View
Route::get('users', [UsersController::class, 'loadView']);

// Parameterized Controller and View
Route::get('admins/{name}', [AdminController::class, 'loadView']);
