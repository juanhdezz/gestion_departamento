<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Middleware para asegurar que el usuario esté autenticado.
 * Si no está autenticado, redirige al login.
 */
class EnsureUserIsAuthenticated
{
    public function handle($request, Closure $next)
    {
        // Permitir acceso si el usuario está autenticado en el guard 'web' o 'trainee'
        if (Auth::guard('web')->check() || Auth::guard('trainee')->check()) {
            return $next($request);
        }

        // Si no está autenticado, redirigir al login
        return redirect()->route('login')->withErrors(['login' => 'Debes iniciar sesión para acceder.']);
    }
}
