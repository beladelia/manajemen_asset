<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();

        // kalau user tidak login
        if (!$user) {
            return redirect('/login');
        }

        // kalau role user tidak sesuai
        if (!in_array($user->role, $roles)) {
            abort(403, 'Akses ditolak.');
        }

        return $next($request);
    }
}
