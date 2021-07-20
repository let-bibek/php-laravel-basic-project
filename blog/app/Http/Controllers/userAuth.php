<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userAuth extends Controller
{
    //
    function userLogin(Request $req)
    {
      
        $username= $req->input("userame");
        
        // $password= $req->input("password");

        $req->session()->put("userame",$username);

        // $req->session()->put("password",$password);




        return redirect("profile");

       
    }
}
