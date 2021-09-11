<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    function utilizeAPI(){
        // return Http::get('https://restcountries.eu/rest/v2/name/pakistan');
        $collection =  Http::get('http://localhost:3000/User');
        $result = json_decode($collection, true);
        return view('users', ['collection'=> $result]);
    }
}
