<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangeUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        var_dump($request);
        return $next($request);
    }
}
