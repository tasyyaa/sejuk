<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (auth()->getDefaultDriver() == 'rentals' && !Auth::guard('rentals')->check()) {
                return route('loginvendor');
            } elseif (!Auth::guard('web')->check()) {
                return route('login');
            }
        }
        return route('login');
    }
}
