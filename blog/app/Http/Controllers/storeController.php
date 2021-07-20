<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    //
    function storeUser(Request $req)
    {
        $data = $req->input("username");
        $req->session()->flash("username", $data);
        return redirect("storeuser");
    }
}
