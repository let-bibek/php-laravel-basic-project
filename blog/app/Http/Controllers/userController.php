<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //

    function show(){
        return("<h1>Hello from user controller.</h1>");
    }

    function userDetails(){
        $names=['bibek','riya','sushil'];
       return view("hello",["name"=>$names]);
    }
}
