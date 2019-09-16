<?php

namespace App\Http\Middleware;

use Closure;

class localizationMiddleware
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
        if (session()->has('local')){
            app()->setLocale(session()->get('local'));
        }
        return $next($request);
    }
}
