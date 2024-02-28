<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if user has any of the specified roles
        if (!$request->user() || !$this->checkUserRole($request->user(), $roles)) {
            abort(403, 'ANDA TIDAK MEMILIKI AKES KE HALAMAN INI!!!');
        }

        return $next($request);
    }

    private function checkUserRole($user, $roles)
    {
        return in_array($user->role, $roles);
    }
}
