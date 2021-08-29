<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::post('users', [Users::class, 'getView']);
Route::view("login", "login");
