<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckTokenMiddleware
{
    public function handle($request, Closure $next)
    {
        // Verificar si el usuario está autenticado
        if (Auth::check()) {
            // Verificar si el token está presente en la sesión
            $token = $request->session()->get('token');
            if (!empty($token)) { // verificar si el token existe
                return $next($request);
            } else {
                return redirect()->route('SignIn')->with('error', 'Invalid username or password');
            }
        } else {
            // Redirigir al usuario al formulario de inicio de sesión solo si no está en la ruta SignIn
            if ($request->route()->named('SignIn')) {
                return $next($request);
            } else {
                return redirect()->route('SignIn')->with('error', 'Please login to access this page');
            }
        }
    }
}
