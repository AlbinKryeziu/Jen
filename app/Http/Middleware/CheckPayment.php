<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {  
 
        if (auth()->check()) 
        {
        if (is_null(auth()->user()->paid)) {  
             
            
          }            
         }      
         return $next($request);   
       } 
}
