<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin') {

            return $next($request); 
        }   
        else {
           return response()->json(['message'=>'Current User is not a Admin']); 
        }
            
    }
}
