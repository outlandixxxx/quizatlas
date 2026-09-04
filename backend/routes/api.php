<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChoiceController;
use App\Http\Controllers\Api\MajorController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\User\QuizAttemptController;
use App\Http\Controllers\User\QuizController;
use App\Http\Controllers\Api\QuizController as ApiQuizController;

use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\UserController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PracticeController;
use App\Http\Controllers\User\BookmarkController;

use App\Http\Controllers\Api\LandingController;
use App\Http\Controllers\Api\QuizRatingController;
use App\Http\Controllers\Api\PublicCatalogController;
use App\Http\Controllers\Api\TrialQuizController;
use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\NewsletterController;
use App\Http\Controllers\User\AchievementController;
use App\Http\Controllers\Api\ProgressionShowcaseController;
use App\Http\Controllers\User\ExamPdfController;

use App\Http\Controllers\User\TeacherShareController;
use App\Http\Controllers\User\QuizJoinController;

Route::prefix('v1')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Authentication
    |--------------------------------------------------------------------------
    */
 Route::prefix('auth')
    ->group(function () {
        Route::controller(AuthController::class)->group(function () {
Route::post('/register', 'register')->middleware('throttle:register');
Route::post('/login', 'login')->middleware('throttle:login');
Route::post('/forgot-password', 'forgotPassword')->middleware('throttle:password-reset');
  Route::post('/reset-password', 'resetPassword')->middleware('throttle:password-reset');

            Route::middleware('jwt.auth')->group(function () {
                Route::get('/me', 'me');
                Route::post('/refresh', 'refresh');
                Route::post('/logout', 'logout');
            });
        });

      Route::post('/google', [\App\Http\Controllers\Api\SocialAuthController::class, 'google'])
    ->middleware('throttle:social-login');
Route::post('/facebook', [\App\Http\Controllers\Api\SocialAuthController::class, 'facebook'])
    ->middleware('throttle:social-login');
    });
        
    /*
    |--------------------------------------------------------------------------
    | Public Resources (Read Only)
    |--------------------------------------------------------------------------
    */
    


        Route::get('/trial/major/{slug}', [TrialQuizController::class, 'byMajor']);
Route::get('/trial/subject/{slug}', [TrialQuizController::class, 'bySubject']);
Route::post('/trial/grade', [TrialQuizController::class, 'grade'])->middleware('throttle:trial');

    Route::get('/landing', [LandingController::class, 'index']);
    Route::get('/public/majors', [PublicCatalogController::class, 'majors']);
    Route::get('/public/subjects', [PublicCatalogController::class, 'subjects']);

Route::post('/feedback', [FeedbackController::class, 'store'])->middleware('throttle:feedback');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->middleware('throttle:newsletter');
    Route::get('/progression/showcase', [ProgressionShowcaseController::class, 'index']);

    /*
    |--------------------------------------------------------------------------
    | Authenticated User Routes
    |--------------------------------------------------------------------------
    */
Route::middleware('jwt.auth')->group(function () {

    // Dashboard
    Route::get('user/dashboard', DashboardController::class);

    // Practice
Route::prefix('practice')
    ->controller(PracticeController::class)
    ->group(function () {
        Route::get('/majors', 'majors');
        Route::get('/majors/{major}/subjects', 'subjects');
        Route::get('/subjects/{subject}/chapters', 'chapters');
        Route::get('/subjects/{subject}/quizzes', 'quizzes');
        Route::get('/subjects-with-quizzes',  'subjectsWithQuizzes');
        
    });

// Exam PDFs
Route::get('/exam-pdfs', [ExamPdfController::class, 'index']);
Route::get('/exam-pdfs/{examPdf}/view', [ExamPdfController::class, 'view'])->name('exam-pdfs.view');




    // Quiz Attempt Routes
        Route::post('quizzes/{quiz}/start', [QuizAttemptController::class, 'start']);
        Route::post('quiz-attempts/{quizAttempt}/answer', [QuizAttemptController::class, 'saveAnswer']);
        Route::post('quiz-attempts/{quizAttempt}/submit', [QuizAttemptController::class, 'submit']);
        Route::get('quiz-attempts/{quizAttempt}/result', [QuizAttemptController::class, 'result']);
        Route::get('quiz-attempts/history', [QuizAttemptController::class, 'history']);
        Route::get('user/quizzes', [QuizController::class, 'index']);
        Route::get('quizzes/{quiz}/questions', [QuizController::class, 'show']);  
        Route::put('quiz-attempts/{quizAttempt}/mode', [QuizAttemptController::class, 'updateMode']);


        Route::post('/quizzes/{quiz}/ratings', [QuizRatingController::class, 'store']);
        Route::get('/quizzes/{quiz}/ratings/me', [QuizRatingController::class, 'show']);
  

    // Profile & Settings Routes
        Route::prefix('user')->controller(UserController::class)->group(function () {
        Route::get('/profile', 'profile');
        Route::put('/profile', 'updateProfile');
        Route::put('/preferences', 'updatePreferences');
        Route::put('/change-password', 'changePassword');
        Route::post('/avatar', 'uploadAvatar');
        Route::post('/avatar/preset', 'selectAvatarPreset');
    });

    Route::get('leaderboard', [\App\Http\Controllers\User\LeaderboardController::class, 'index']);
Route::get('leaderboard/me', [\App\Http\Controllers\User\LeaderboardController::class, 'myRank']);
Route::get('/achievements', [AchievementController::class, 'index']);

Route::get('friends', [\App\Http\Controllers\User\FriendshipController::class, 'index']);
Route::post('friends/{user}/request', [\App\Http\Controllers\User\FriendshipController::class, 'request'])->middleware('throttle:friend-request');
Route::get('friends/pending', [\App\Http\Controllers\User\FriendshipController::class, 'pending']);
Route::put('friends/requests/{friendship}/respond', [\App\Http\Controllers\User\FriendshipController::class, 'respond']);

        Route::get('bookmarks', [BookmarkController::class, 'index']);
        Route::post('bookmarks/questions/{question}/toggle', [BookmarkController::class, 'toggle']);
});

 
/*
|--------------------------------------------------------------------------
| Admin Routes (taxonomy — admin only)
|--------------------------------------------------------------------------
*/
Route::middleware(['jwt.auth', 'admin'])->group(function () {
    Route::apiResource('majors', MajorController::class)->except(['index', 'show']);
    Route::apiResource('subjects', SubjectController::class)->except(['index', 'show']);
});

/*
|--------------------------------------------------------------------------
| Admin + Manager Routes (quiz content — ownership enforced via policies)
|--------------------------------------------------------------------------
*/
Route::middleware(['jwt.auth', 'role:admin,manager'])->group(function () {
    Route::apiResource('quizzes', ApiQuizController::class)->except(['index', 'show']);
    Route::apiResource('questions', QuestionController::class)->except(['index', 'show']);
    Route::apiResource('choices', ChoiceController::class)->except(['index', 'show']);
});




/*
|--------------------------------------------------------------------------
| Quiz Sharing (Teacher/Professor + Student Join)
|--------------------------------------------------------------------------
*/
Route::middleware(['jwt.auth'])->group(function () {
Route::post('quiz-shares/join', [QuizJoinController::class, 'join'])->middleware('throttle:quiz-join');

    Route::middleware('role:admin,manager')->prefix('teacher')->group(function () {
        Route::get('quizzes', [TeacherShareController::class, 'myQuizzes']);  // moved here
        Route::get('shares', [TeacherShareController::class, 'index']);
        Route::post('shares', [TeacherShareController::class, 'store']);
        Route::get('shares/{shareId}/results', [TeacherShareController::class, 'results']);
        Route::get('quizzes/{quizId}/questions', [TeacherShareController::class, 'quizQuestions']);
    });
});








// Admin-only upload
Route::middleware(['jwt.auth', 'admin'])->group(function () {
    Route::post('/exam-pdfs', [ExamPdfController::class, 'store']);
});

});