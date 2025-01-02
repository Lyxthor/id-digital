<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckOfficerAuthority
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $authority): Response
    {
        if($request->user()->userable->authorities->where('type', $authority)->count() > 0)
        {
            return $next($request);
        }
        return '/unauthenticated';
    }
}
