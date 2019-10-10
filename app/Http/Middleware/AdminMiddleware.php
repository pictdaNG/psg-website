<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

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
        // 1. User Should be authenticated first
        
        // 2. Authenticated User should be an Admin
        
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin') {
            return $next($request);
        }else {
            return redirect()->route('get_login');
        }
    }
}
