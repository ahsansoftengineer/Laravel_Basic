<?php
namespace App\Http\Controllers;
class UsersController extends Controller
{
    function funcName()
    {
        // return view('users', ['username' => "Ahsan"]);
        // return view('users', ['variable' => ['Ahsan', 'Asim', 'Mobin', 'Yousuf']]);
        $data3 =  [
            'user' =>
            [
                ['id' => '101', 'name' => 'Sam', 'gender' => 'male'],
                ['id' => '102', 'name' => 'Samina', 'gender' => 'female'],
                ['id' => '103', 'name' => 'Samera', 'gender' => 'female'],
                ['id' => '104', 'name' => 'Shubnam', 'gender' => 'gay'],
            ]
        ];
        return view('users', ['variable' => $data3]);
    }
}
