<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsManager
{
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->check() && !auth()->user()->hasRole('manager')) {
                auth()->logout();
                return redirect(route('system.messages','userIsNotManager'));
            }
        }
        return $next($request);
    }
}
