<?php

namespace App\Http\Middleware;

use Cache;

class FlushViewCache
{
    public function handle($request, $next)
    {
        if (app()->environment() === 'local') {
            Cache::tags('views')->flush();
        }

        return $next($request); 
    }
}
