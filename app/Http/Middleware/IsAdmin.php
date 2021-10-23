<?php

namespace App\Http\Middleware;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Closure;

class IsAdmin
{
    /**
     * Check if auth user is an admin
     *
     * @return RedirectResponse|void
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return Redirect::route('user-side.auth.login');
        }

        if (!Auth::user()->isAdmin) {
            return Redirect::route('user-side.main-page');
        }


        return $next($request);
    }
}
