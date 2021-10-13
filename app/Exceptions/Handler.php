<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;
class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('master') || $request->is('master/*')) {
            return redirect()->guest('/login/master');
        }
        if ($request->is('champion') || $request->is('champion/*')) {
            return redirect()->guest('/login/champion');
        }
        return redirect()->guest(route('login'));
    }
}