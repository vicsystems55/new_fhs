<?php

namespace App\Http\Middleware;

use Closure;

class AccountsMiddleware
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
        if(Auth::check() && Auth::user()->role == "Accounts"){

            return $next($request); 
            }

            else{

                abort(403);
            }
    }
}
