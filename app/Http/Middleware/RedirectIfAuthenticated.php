<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "master" && Auth::guard($guard)->check()) {
            return redirect('/master');
        }
        if ($guard == "champion" && Auth::guard($guard)->check()) {
            return redirect('/champion');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }

        return $next($request);
    }
}