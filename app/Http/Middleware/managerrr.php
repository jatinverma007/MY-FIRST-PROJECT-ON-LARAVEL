<?php

namespace App\Http\Middleware;

use Closure;

class managerrr
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
     if(! $request->user()->isATeamManager())
     {
         return redirect('cerebro');
     }
        return $next($request);
    }
}