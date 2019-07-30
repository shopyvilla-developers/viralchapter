<?php

namespace CloudCMS\Http\Middleware;

use Closure;
use CloudCMS\Updater;
use Illuminate\Support\Facades\File;

class RunUpdater
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (File::exists(storage_path('app/update'))) {
            Updater::run();
        }

        return $next($request);
    }
}
