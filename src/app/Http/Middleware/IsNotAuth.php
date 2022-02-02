<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsNotAuth
{
    /**
     * Get the path the user should be redirected to when they are authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->expectsJson()) {
            return route('dashboard');
        }
        return $next($request);
    }
}
