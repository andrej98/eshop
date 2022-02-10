<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()&&Auth::user()->admin == 1) {
            return redirect()->intended('/admin');
        }
        if (Auth::guard($guard)->check()&&Auth::user()->admin == 0) {
            return redirect()->intended('/');
        }
        return $next($request);
    }
}
