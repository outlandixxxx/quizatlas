<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\RoleMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function (): void {
            \Illuminate\Support\Facades\Route::get(
                '/sitemap.xml',
                \App\Http\Controllers\SitemapController::class
            )->name('sitemap');
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // CORS must run before the response leaves Laravel — added explicitly
        // because auto-registration via config/cors.php isn't happening in
        // this setup.
        $middleware->prepend(\Illuminate\Http\Middleware\HandleCors::class);

        $middleware->throttleApi();

        $middleware->alias([
            'fresh.token' => \App\Http\Middleware\EnsureTokenIssuedAfterPasswordChange::class,
            'admin' => AdminMiddleware::class,
            'role'  => RoleMiddleware::class,
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

        // Generic HTTP Exceptions (covers plain abort($code, $message) calls,
        // e.g. AuthService::login() and AuthService::resetPassword())
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\HttpExceptionInterface $e, $request) {
            if ($request->is('api/*') || $request->expectsJson()) {
                return \App\Helpers\ApiResponse::error(
                    $e->getMessage() ?: 'Error.',
                    null,
                    $e->getStatusCode()
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
