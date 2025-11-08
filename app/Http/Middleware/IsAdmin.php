<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Make sure user is logged in and is admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        return redirect('/home'); // or wherever you want non-admins to go
    }

}
