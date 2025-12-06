<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $roleRequired)
    {
        $userRole = $request->query('role');

        if ($userRole !== $roleRequired) {
            return response("ACCESS DENIED: admins only.", 403);
        }

        return $next($request);
    }
}
