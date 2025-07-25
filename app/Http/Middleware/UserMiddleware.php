<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() and Auth::user()->user_role == "user"){
            return $next($request);
        }
        else{
            return redirect()->route('single.dashboard');
        }
    }
}
