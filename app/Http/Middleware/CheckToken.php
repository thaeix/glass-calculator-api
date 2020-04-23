<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->header('Authorization') !== 'Bearer ' . env('API_TOKEN')) {
            abort(403, 'Unauthenticated');
        }
        return $next($request);
    }
}
