<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        $middleware->alias([
            //'Auth' =>Illuminate\Support\Facades\Auth,
            'user'=> App\Http\Middleware\UserCheckMiddleware::class,
            'admin'=>App\Http\Middleware\AdminCheckMiddleware::class,
            'editor'=>App\Http\Middleware\EditorCheckMiddleware::class,
            'superadmin'=>App\Http\Middleware\SuperAdminCheckMiddleware::class,

    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
