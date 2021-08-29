<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Users extends Controller
{
    function getView(Request $req){
        return $req->input();
    }
}
