<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Users extends Controller
{
    function getView(Request $req){
        $req->validate([
            'name' => 'required | max:15 | min:7',
            'password' => 'required | min:8 | max:21'
        ]);
        return $req->input();

    }
}
