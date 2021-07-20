<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;//=====added============

class httpController extends Controller
{
    //
    function httpfunc(){
        return Http::get("https://reqres.in/api/users?page=1");
        // return view("httphome",["collection"=>$data()]);
    }
}
