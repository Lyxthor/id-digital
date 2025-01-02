<?php

use App\Http\Middleware\CheckOfficerAuthority;
use App\Http\Middleware\SubmissionAccess;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "not_auth"=>\App\Http\Middleware\NotAuth::class,
            "user_type_auth"=>\App\Http\Middleware\UserTypeAuth::class,
            "officerAuthority"=>CheckOfficerAuthority::class,
            "submission.access"=>SubmissionAccess::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {

    })->create();
