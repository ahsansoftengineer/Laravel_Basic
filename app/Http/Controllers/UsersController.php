<?php
namespace App\Http\Controllers;
class UsersController extends Controller
{
    public function loadView(){
        echo "View Loaded By Controller";
        return view('users');
    }
}
