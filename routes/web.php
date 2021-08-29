<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\JsonObject;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Old Way of Defining Controller
// Route::get('users', "Users@index"); // Working Before Laravel 8
// 1. Calling a Controller
Route::get('users', [Users::class, "index"]);
// 2. Calling Parameterized Controller
Route::get('admins/{greet}', [Admin::class, "index"]);
// 3. Controller That Returns Object
Route::get('jsonobject', [JsonObject::class, "index"]);

