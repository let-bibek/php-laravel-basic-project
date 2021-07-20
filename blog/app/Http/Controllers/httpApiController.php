<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class httpApiController extends Controller
{
    //
    function testRequest(Request $req)
    {
        $req->validate([
            "username"=>"required||min:5",
            "password"=>"required||min:7",
        ]);
        // return view("Welcome");
        return $req->input();

    }
}
