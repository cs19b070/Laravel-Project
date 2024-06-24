<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\EnsureTokenIsValid;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

    ->withRouting(
        api: __DIR__.'/../routes/api.php',
    )

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'auth' => EnsureTokenIsValid::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
