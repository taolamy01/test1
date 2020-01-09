<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Checkadmin
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
        if (auth()->user()->name != 'admin') {
            Auth::logout();
            return redirect('/login');
        }
        return $next($request);
    }
}
