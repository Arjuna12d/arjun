<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (!session()->has('username')) {
            return redirect('/login');
        }

        return $next($request);
    }
}
