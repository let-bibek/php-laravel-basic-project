<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\httpController;
use App\Http\Controllers\httpApiController;
use App\Http\Controllers\userAuth;
use App\Http\Controllers\storeController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/",function(){
            return view("welcome");
        });


// Route::get('/', function () {
//     return view("welcome");  

     // redirecting

    // return redirect("home");
    
    
// });
// Route::get("hello",[userController::class,"userDetails"]);

// Route::get('/home', function () {
//     return view('home');
    
// });

// Route::view('/home', 'home');

// Route::get('/about', function () {
//     return view("about");
// });

// Route::get('/contact', function () {
//     return view("contact");
// });

// Route::get('/{name}', function ($name) {

// //    echo $name;
//     return view("name",["name"=>$name]);
    
// });


// this is about controller


// Route::get("/username/{name}",function($name){
    //     return view("userName",["user"=>$name]);
    // });
    
    // Route::get("user",[userController::class,"show"]);
    
    // Route::get("userDetails/{userName}",[userController::class,"userDetails"]);
    
    
    // Route::get('users', function () {
        //     return view("users");        
        // });
        
        // Route::view('aboutus', 'aboutUs');
        
        // Route::view('inner', 'inner');
        
        
        // Route::get("/users/{data}",[viewController::class,"loadView"]);

        

        // form and form validation
        // Route::post('usercontroler', [usersController::class,"getData"]);
        // Route::view('login', 'UsersName');


        //  ========This is all about Global middleware==========

        // Route::get("userpage",function(){
        //     return view("userpage");
        // });
        // Route::view('mdwHome', 'gmdwHome');
        // Route::view('noaccess', 'noaccess');

        // ====this  is grouped middleware
        // Route::group(["middleware"=>["protectedPage"]],function(){
            
        //     Route::view('check', 'check');
        // });

        // ===this is routed middleware

        // Route::view("routedHome","routedMid");
        //  Route::view("noaccess","noaccess");
        //   Route::view("routeuser","routedMidUser")->middleware("protectedpage");


        // =========http==================

        // Route::get("httpuser",[httpController::class,'httpfunc']);
        // Route::view('httphome', 'httphome');

        // =========http methods=============
        // =====post method====
        //     Route::post('submit', [httpApiController::class,"testRequest"]);

        //     // ========put method=======
        //     Route::put('submit', [httpApiController::class,"testRequest"]);

        //      // ========delete method=======
        //     Route::delete('submit', [httpApiController::class,"testRequest"]);
        // Route::view('login', 'httppApi');




        // ==========SESSIONS===============//=====important for login system=============//



        // Route::post('user', [userAuth::class,"userLogin"]);    
        // Route::view('login', 'login');
        // Route::view('profile', 'profile');

        // // ===delete==logout====
        // Route::get('logout', function () {
        //     if(session()->has("userame")){
        //         session()->pull("userame",null);
        //     }
        //     return redirect("login");
        // });
        
        // Route::get('login', function () {
        //     if(session()->has("userame")){
        //         return redirect("profile");
        //     }
        //     return view("login");
        // });



// ======================end session====================================//


// ======flash Session======//

// Route::view('storeuser', 'storeUser');
// Route::post('storemember',  [storeController::class,"storeUser"]);


// =============end flash session===============//


// ==============Laravel Localiation=====//====Language Change========//

// Route::view('profile', 'welcomeProfile');

Route::get("profile/{uage}",function($lang){
    if($lang)
    {
    App::setlocale($lang);
    
    return view("welcomeProfile");
    }
    else
    {
        return view("welcomeProfile");
    }
    
});






        