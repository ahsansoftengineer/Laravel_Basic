<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
class UsersController extends BaseController
{
    function getView(){
        echo "getView Called";
        return view('users', ['data' => ['Ahsan', 'Asim', 'Mobin']]);
    }
}
