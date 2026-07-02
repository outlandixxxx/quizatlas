<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MajorController;

Route::prefix('v1')->group(function () {

    Route::prefix('auth')
        ->controller(AuthController::class)
        ->group(function () {

            Route::post('/register', 'register');
            Route::post('/login', 'login');

            Route::middleware('auth:api')->group(function () {
                Route::get('/me', 'me');
                Route::post('/refresh', 'refresh');
                Route::post('/logout', 'logout');
            });

        });

        Route::apiResource('majors', MajorController::class);

});