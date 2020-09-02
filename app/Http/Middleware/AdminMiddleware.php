<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
       if(!auth::check()||(Auth::check() && Auth::user()->is_admin !== 1)){
           return redirect('home');
       }

        return $next($request);
    }
}
