<?php

namespace App\Http\Middleware;

use Closure;

class DebugBarMiddleware
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
        $admin_id   = 1;
        $creator_id = 16;
        $client_id  = 14;

        /*if(\Auth::check() && in_array(\Auth::user()->id,[$admin_id,$creator_id,$client_id])) {
            \Debugbar::enable();
        }else{
            \Debugbar::disable();
        }*/
        return $next($request);
    }
}
