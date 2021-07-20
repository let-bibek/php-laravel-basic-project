<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    //
    function loadView($data){
        return view('userName',["userData"=>$data]);
    }
}
