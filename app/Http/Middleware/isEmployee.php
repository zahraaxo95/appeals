<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsEmployee
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->check() && !auth()->user()->hasRole('employee')) {
                auth()->logout();
                return redirect(route('system.messages','userIsNotEmployee'));
            }
        }
        return $next($request);
    }
}
