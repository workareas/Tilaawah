<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Member
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
        if((Auth::check() && Auth::user()->role==3)&&((Auth::check() && Auth::user()->role!==1))){

            return $next($request);
        }
        else {
            return redirect('/');
        }
        
    }
}
