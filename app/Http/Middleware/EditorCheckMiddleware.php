<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class EditorCheckMiddleware
{
 
    public function handle(Request $request, Closure $next): Response
    {
        if(in_array(Auth::user()->user_role, ['admin','editor','super_admin'])){
            return $next($request);
        }
        else {
            return redirect()->route('dashboard');
        }
    }
}
