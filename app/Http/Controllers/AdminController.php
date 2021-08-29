<?php
namespace App\Http\Controllers;
class AdminController extends Controller
{
    public function loadView($name){
        return view('admins', ['name'=>$name]);
    }
}
