<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Manager
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
        if (Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'manager') {
            return $next($request);
        } else {
            return response()->json(['Current User is not a Manager']);
        }
        
    }
}
