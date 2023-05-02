<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckTokenMiddleware
{
    public function handle($request, Closure $next)
    {
        
        if ($request->session()->has('token')) {
            
            $token = $request->session()->get('token');
            if (!empty($token)) {
                return $next($request);
            } else {
                return redirect()->route('SignIn')->with('error', 'Invalid username or password');
            }
        } else {
            if (($request->route()->named('SignIn'))){
                return $next($request);
            } else {
                return redirect()->route('SignIn')->with('error', 'Please login to access this page');
            }
        }
    }
}
