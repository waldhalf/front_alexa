<?php

namespace App\Http\Middleware;

use Closure;

class is_admin
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
        if (\Auth::user()== null) {
          return redirect('/forbidden');
        }
        else if (\Auth::user()->is_admin == TRUE) {
          return $next($request);
        } else {
          return redirect('/');
        }
    
    }
}
