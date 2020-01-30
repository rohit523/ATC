<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::user()->Role == 1) {
            return $next($request);
            // return redirect()->route('admin');
        }
        if (Auth::user()->Role == 3) {
            // return $next($request);
            return redirect()->route('home');
        }
        if (Auth::user()->Role == 2) {
            return redirect()->route('atc');
        }
    }
}
