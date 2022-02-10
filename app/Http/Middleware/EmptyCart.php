<?php

namespace App\Http\Middleware;

use Closure;

class EmptyCart
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
        if ($request->session()->has('cart') && $request->session()->get('cart')->quantity != 0) {
            return $next($request);
        }
        return redirect()->route('cart1');

    }
}
