<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // here we make the midlleware
        // echo("This is global middleware.");//this is visible in every page
        // if($request->age && $request->age<18){
        //     return redirect("noaccess");
        // }
        // if($request->age && $request->age>=18){
        //     return redirect("userpage");
        // };
        return $next($request);
    }
}
