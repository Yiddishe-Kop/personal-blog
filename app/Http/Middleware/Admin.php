<?php

namespace App\Http\Middleware;

use Closure;

class Admin {
    public function handle($request, Closure $next) {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            return abort(403, 'Unauthorized. Police is on their way 🚔');
        } else {
            return $next($request);
        }
    }
}
