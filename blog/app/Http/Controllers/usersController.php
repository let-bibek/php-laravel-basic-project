<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    function getData(Request $req)
    {

        $req->validate(
            [
                "userId" => "required | min:5|",
                "password" => "required | min:7"
            ]
        );
        return $req->input();
    }
}
