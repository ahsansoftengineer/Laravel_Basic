<?php

use Illuminate\Support\Facades\Route;

// 1 Default & Pre define Routes of Laravel
Route::get('/', function () {
    return view('welcome');
});
// 2 Routes with Path
Route::get("_1", function () {
    return view('_1');
});
// 3 Short Hand Syntax
Route::view('_2', '_2');
// 4 Parameterized Routes
Route::get("/_3/{name}", function ($name) {
    // Echo in Route File
    echo $name;
    // Passing Data to View
    return view('_3', ['name' => $name]);
});
// 4 Redirect Page
Route::get("/_4", function () {
    return redirect('_5');
});
// 5 Redirect Page
Route::get("/_5", function () {
    return view('_5');
});
