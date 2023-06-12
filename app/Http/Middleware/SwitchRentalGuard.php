<?php

namespace App\Http\Middleware;

use App\Models\Rentals;
use Closure;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class SwitchRentalGuard
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param  \Closure(Request): (Response|RedirectResponse)  $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->getDefaultDriver() == 'web') {

            auth()->setDefaultDriver('rentals');
            Config::set("auth. defaults.passwords","rentals");

            ResetPassword::createUrlUsing(function (Rentals $user, string $token) {
                return url(route('password.reset.vendor', [
                    'token' => $token,
                    'email' => $user->getEmailForPasswordReset(),
                ], false));
            });
        }

        return $next($request);
    }
}
