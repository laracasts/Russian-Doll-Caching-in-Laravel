<?php

namespace App\Http\Middleware;

use Cache;

class FlushViewCache
{
    /**
     * Handle the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     */
    public function handle($request, $next)
    {
        if (app()->environment() === 'local') {
            Cache::tags('views')->flush();
        }

        return $next($request); 
    }
}
