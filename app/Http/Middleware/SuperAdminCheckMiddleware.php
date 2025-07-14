<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdminCheckMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->user_role =='super_admin'){
            return $next($request);
        }
        else {
            return redirect()->route('dashboard');
        }
    }
}
