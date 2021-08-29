<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonObject extends Controller
{
    public function index(){
        return ['name'=> 'Ahsan', 'age' => '30', 'gender' => 'Male'];
    }
}
