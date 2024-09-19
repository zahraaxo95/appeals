<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->check() && !auth()->user()->hasRole('admin')) {
                auth()->logout();
                return redirect(route('system.messages','userIsNotAdmin'));
            }
        }
        return $next($request);
    }
}
