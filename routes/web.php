<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\DatabaseController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('database',[DatabaseController::class, 'getData']);
Route::get('api',[APIController::class, 'utilizeAPI']);
