<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChoiceController;
use App\Http\Controllers\Api\MajorController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\QuizAttemptController;
use App\Http\Controllers\Api\QuizController;
use App\Http\Controllers\Api\SubjectController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */

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

    /*
    |--------------------------------------------------------------------------
    | Public Resources
    |--------------------------------------------------------------------------
    */

// Public (Read Only)
Route::apiResource('majors', MajorController::class)
    ->only(['index', 'show']);

Route::apiResource('subjects', SubjectController::class)
    ->only(['index', 'show']);

Route::apiResource('quizzes', QuizController::class)
    ->only(['index', 'show']);

Route::apiResource('questions', QuestionController::class)
    ->only(['index', 'show']);

Route::apiResource('choices', ChoiceController::class)
    ->only(['index', 'show']);

    /*
    |--------------------------------------------------------------------------
    | Quiz Attempts (Authenticated)
    |--------------------------------------------------------------------------
    */

    Route::middleware('auth:api')->group(function () {

        Route::post(
            'quizzes/{quiz}/start',
            [QuizAttemptController::class, 'start']
        );

        Route::post(
            'quiz-attempts/{quizAttempt}/answer',
            [QuizAttemptController::class, 'saveAnswer']
        );

        Route::post(
            'quiz-attempts/{quizAttempt}/submit',
            [QuizAttemptController::class, 'submit']
        );
    });


    Route::middleware('admin')->group(function () {

        Route::apiResource('majors', MajorController::class)
            ->except(['index', 'show']);

        Route::apiResource('subjects', SubjectController::class)
            ->except(['index', 'show']);

        Route::apiResource('quizzes', QuizController::class)
            ->except(['index', 'show']);

        Route::apiResource('questions', QuestionController::class)
            ->except(['index', 'show']);

        Route::apiResource('choices', ChoiceController::class)
            ->except(['index', 'show']);
    });

});