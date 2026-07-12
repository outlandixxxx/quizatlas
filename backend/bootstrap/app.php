<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {

        // Business Exceptions
        $exceptions->render(function (\App\Exceptions\ApiException $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    $e->getMessage(),
                    null,
                    $e->status()
                );
            }
        });

        // Validation Exceptions
        $exceptions->render(function (\Illuminate\Validation\ValidationException $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    'Validation failed.',
                    $e->errors(),
                    422
                );
            }
        });

        // Authentication Exceptions
        $exceptions->render(function (\Illuminate\Auth\AuthenticationException $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    'Unauthenticated.',
                    null,
                    401
                );
            }
        });

        // Authorization Exceptions
        $exceptions->render(function (\Illuminate\Auth\Access\AuthorizationException $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    'This action is unauthorized.',
                    null,
                    403
                );
            }
        });

        // Model Not Found
        $exceptions->render(function (\Illuminate\Database\Eloquent\ModelNotFoundException $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    'Resource not found.',
                    null,
                    404
                );
            }
        });

        // Route Not Found
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    'Endpoint not found.',
                    null,
                    404
                );
            }
        });

        // Fallback for Unexpected Exceptions
        $exceptions->render(function (\Throwable $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {

                report($e);

                return \App\Helpers\ApiResponse::error(
                    config('app.debug')
                        ? $e->getMessage()
                        : 'Internal server error.',
                    null,
                    500
                );
            }
        });
    })
    ->create();