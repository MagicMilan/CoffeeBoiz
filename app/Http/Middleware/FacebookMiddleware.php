<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class FacebookMiddleware
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
        if (Auth::check())
            if ($request->user()->address != null)
                return $next($request);

        return redirect('/facebook/register');
    }
}
