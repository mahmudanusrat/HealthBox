<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->utype == 'd'){
        return $next($request);
        }elseif (Auth::user()->utype == 'u'){
            return redirect()->route('userHome');
        }elseif (Auth::user()->utype == 'admin'){
            return redirect()->route('adminDashboard');
        }
        else{
            session()->flush();
            return redirect()->route('login');
        }
    }
}
