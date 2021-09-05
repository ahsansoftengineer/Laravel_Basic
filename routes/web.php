<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::view('noaccess', 'noaccess');

// I think this is the old way of describing Group Middleware
Route::group(['middleware' => ['protectPage']], function(){
    Route::view('about', 'about');
    Route::view('home', 'home');
});
// I think the Latest is this
// Route::prefix('admin')->group(function () {

// });
