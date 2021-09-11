<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('users', [UserController::class, 'getData']);
Route::get('employees', [EmployeeController::class, 'getData']);
