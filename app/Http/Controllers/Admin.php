<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index($greet){
        echo $greet;
        echo "<br>Admin Controller Worked";
    }
}
