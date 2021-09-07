<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureTokenIsValid
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
        if(auth()->user()->email == "aldo1rodrigo@gmail.com"){
            return $next($request);  
        }else{
            return redirect('no-autorizado');
        }
        
        //return $next($request);
        //return redirect('/');
    }
}
