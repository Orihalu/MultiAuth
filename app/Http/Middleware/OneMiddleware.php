<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class OneMiddleware
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
      if(Auth::guard('admin')) {
        return redirect('/home');
      }
      else
        return $next($request);
    }
}
