<?php

use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BlogResponseController;
use App\Http\Controllers\Api\BlogAskController;
use App\Http\Controllers\Api\ChoiceController;
use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\LandingController;
use App\Http\Controllers\Api\MajorController;
use App\Http\Controllers\Api\NewsletterController;
use App\Http\Controllers\Api\ProgressionShowcaseController;
use App\Http\Controllers\Api\PublicCatalogController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\QuizController as ApiQuizController;
use App\Http\Controllers\Api\QuizRatingController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\TrialQuizController;
use App\Http\Controllers\Api\UserController; 
use App\Http\Controllers\User\AchievementController;
use App\Http\Controllers\User\BookmarkController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ExamPdfController;
use App\Http\Controllers\User\PracticeController;
use App\Http\Controllers\User\QuizAttemptController;
use App\Http\Controllers\User\QuizController;
use App\Http\Controllers\User\QuizJoinController;
use App\Http\Controllers\User\TeacherShareController;
use App\Http\Controllers\Api\VideoBatchController;
use App\Http\Controllers\Api\VideoSetController;
use App\Http\Controllers\Api\FactController;
use App\Http\Controllers\Api\SocialPackController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function () {

    Route::get('public/concours-pdfs/{examPdf}/view', [ExamPdfController::class, 'publicView'])->whereNumber('examPdf');
    Route::get('public/concours-pdfs/{examPdf}/download', [ExamPdfController::class, 'publicDownload'])->whereNumber('examPdf');
    Route::get('admin/concours-announcements/{announcement}/pdf/view', [ExamPdfController::class, 'announcementPreview'])->whereNumber('announcement')->middleware(['jwt.auth', 'fresh.token', 'admin']);

    Route::get('public/concours-announcements', [\App\Http\Controllers\Api\PublicConcoursAnnouncementController::class, 'index']);
    Route::get('public/concours-announcements/{slug}', [\App\Http\Controllers\Api\PublicConcoursAnnouncementController::class, 'show']);
    Route::get('public/concours-announcements/{slug}/attachments', [\App\Http\Controllers\Api\PublicConcoursAnnouncementController::class, 'attachments']);
    Route::middleware(['jwt.auth', 'fresh.token', 'admin'])->prefix('admin/concours-announcements')
        ->controller(\App\Http\Controllers\Api\AdminConcoursAnnouncementController::class)
        ->group(function () {
            Route::get('/', 'index');
            Route::post('/', 'store');
            Route::get('{announcement}', 'show')->whereNumber('announcement');
            Route::get('{announcement}/attachments', 'attachments')->whereNumber('announcement');
            Route::get('{announcement}/attachments/{examPdf}/view', 'previewAttachment')->whereNumber('announcement')->whereNumber('examPdf');
            Route::delete('{announcement}', 'destroy')->whereNumber('announcement');
            Route::put('{announcement}', 'update')->whereNumber('announcement');
            Route::get('{announcement}/revisions', 'revisions')->whereNumber('announcement');
            Route::post('{announcement}/designate-official', 'designateOfficial')->whereNumber('announcement');
            Route::post('{announcement}/{action}', 'transition')->whereNumber('announcement')
                ->whereIn('action', ['submit', 'verify', 'verify-publish', 'publish', 'archive', 'withdraw']);
        });

    Route::middleware(['jwt.auth', 'fresh.token', 'admin'])->prefix('admin/concours-discovery')
        ->controller(\App\Http\Controllers\Api\AdminConcoursDiscoveryController::class)->group(function () {
            Route::get('sources', 'sources');
            Route::post('sources', 'saveSource');
            Route::put('sources/{source}', 'saveSource')->whereNumber('source');
            Route::get('discoveries', 'index');
            Route::post('discoveries', 'store');
            Route::get('discoveries/{discovery}', 'show')->whereNumber('discovery');
            Route::get('discoveries/{discovery}/revisions', 'revisions')->whereNumber('discovery');
            Route::get('discoveries/{discovery}/matches', 'matches')->whereNumber('discovery');
            Route::post('discoveries/{discovery}/matches', 'decideMatch')->whereNumber('discovery');
            Route::post('discoveries/{discovery}/review', 'review')->whereNumber('discovery');
        });

    Route::post('public/concours-push/verify', [\App\Http\Controllers\Api\ConcoursPushController::class, 'verify']);

    Route::middleware(['jwt.auth', 'fresh.token'])->group(function () {
        Route::get('me/concours-follows', [\App\Http\Controllers\Api\ConcoursFollowController::class, 'index']);
        Route::get('me/concours-follows/configuration', [\App\Http\Controllers\Api\ConcoursFollowController::class, 'configuration']);
        Route::get('me/concours-follows/{concours}', [\App\Http\Controllers\Api\ConcoursFollowController::class, 'show'])->whereNumber('concours');
        Route::put('me/concours-follows/{concours}', [\App\Http\Controllers\Api\ConcoursFollowController::class, 'save'])->whereNumber('concours');
        Route::post('me/concours-push', [\App\Http\Controllers\Api\ConcoursPushController::class, 'store']);
        Route::delete('me/concours-push/{device}', [\App\Http\Controllers\Api\ConcoursPushController::class, 'destroy'])->whereNumber('device');
    });

    Route::get('public/concours-categories', [\App\Http\Controllers\Api\PublicConcoursController::class, 'categories']);
    Route::get('public/concours-institutions', [\App\Http\Controllers\Api\PublicConcoursController::class, 'institutions']);
    Route::get('public/concours', [\App\Http\Controllers\Api\PublicConcoursController::class, 'index']);
    Route::get('public/concours/{slug}', [\App\Http\Controllers\Api\PublicConcoursController::class, 'show']);
    Route::get('public/concours/{slug}/advice', [\App\Http\Controllers\Api\PublicConcoursController::class, 'advice']);
    Route::get('public/concours/{slug}/qcm', [\App\Http\Controllers\Api\PublicConcoursController::class, 'qcm']);

    Route::middleware(['jwt.auth', 'fresh.token', 'admin'])->prefix('admin/concours-wizard/{record}')
        ->where(['record' => '[1-9][0-9]{0,17}'])
        ->controller(\App\Http\Controllers\Api\AdminConcoursWizardController::class)->group(function () {
            Route::get('details', 'details');
            Route::put('advice', 'advice');
            Route::post('pdfs', 'attach');
            Route::post('pdfs/unlink', 'detach');
        });

    Route::middleware(['jwt.auth', 'fresh.token', 'admin'])->prefix('admin/concours-directory/concours/{record}')
        ->where(['record' => '[1-9][0-9]{0,17}'])
        ->controller(\App\Http\Controllers\Api\AdminConcoursQcmController::class)->group(function () {
            Route::get('qcm-candidates/{kind}', 'candidates')->whereIn('kind', ['majors', 'subjects', 'quizzes']);
            Route::get('qcm-links/{kind}', 'index')->whereIn('kind', ['majors', 'subjects', 'quizzes']);
            Route::post('qcm-links/{kind}/bulk', 'bulk')->whereIn('kind', ['majors', 'subjects', 'quizzes']);
            Route::put('qcm-links/{kind}/{target}', 'save')->whereIn('kind', ['majors', 'subjects', 'quizzes'])->where('target', '[1-9][0-9]{0,17}');
            Route::delete('qcm-links/{kind}/{target}', 'save')->whereIn('kind', ['majors', 'subjects', 'quizzes'])->where('target', '[1-9][0-9]{0,17}');
        });

    Route::middleware(['jwt.auth', 'fresh.token', 'admin'])->prefix('admin/concours-directory')
        ->controller(\App\Http\Controllers\Api\AdminConcoursDirectoryController::class)
        ->group(function () {
            Route::post('concours/{record}/preparation-options', 'savePreparationOption')->where('record', '[1-9][0-9]{0,17}');
            Route::put('concours/{record}/preparation-options/{option}', 'savePreparationOption')->where(['record' => '[1-9][0-9]{0,17}', 'option' => '[1-9][0-9]{0,17}']);
            Route::get('{kind}', 'index')->whereIn('kind', ['categories', 'institutions', 'concours']);
            Route::post('{kind}', 'store')->whereIn('kind', ['categories', 'institutions', 'concours']);
            Route::get('{kind}/{record}', 'show')->whereIn('kind', ['categories', 'institutions', 'concours'])->whereNumber('record');
            Route::put('{kind}/{record}', 'update')->whereIn('kind', ['categories', 'institutions', 'concours'])->whereNumber('record');
            Route::delete('{kind}/{record}', 'destroy')->whereIn('kind', ['categories', 'institutions', 'concours'])->whereNumber('record');
        });

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

Route::get('/email/verify/{id}/{hash}', 'verifyEmail')->middleware('signed')->name('verification.verify');
Route::post('/email/resend', 'resendVerificationEmailPublic')->middleware('throttle:email-resend');

            Route::middleware(['jwt.auth', 'fresh.token'])->group(function () {
                Route::get('/me', 'me');
                Route::post('/refresh', 'refresh');
                Route::post('/logout', 'logout');
                Route::post('/email/resend-authenticated', 'resendVerificationEmail')->middleware('throttle:email-resend');
            });
        });

      Route::post('/google', [\App\Http\Controllers\Api\SocialAuthController::class, 'google'])
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

    Route::get('users/search', [\App\Http\Controllers\User\UserSearchController::class, 'index'])
    ->middleware('throttle:20,1');


    /*
    |--------------------------------------------------------------------------
    | Authenticated User Routes
    |--------------------------------------------------------------------------
    */
Route::middleware(['jwt.auth', 'fresh.token'])->group(function () {

                // Dashboard
                Route::get('user/dashboard', DashboardController::class);

                //visiting users' profile 
                Route::get('users/{user}', [\App\Http\Controllers\User\UserProfileController::class, 'show']);

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
                    Route::get('quiz-attempts/{quizAttempt}', [QuizAttemptController::class, 'show'])->whereNumber('quizAttempt');
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
Route::put('friends/requests/{friendship}/respond', [\App\Http\Controllers\User\FriendshipController::class, 'respond'])
    ->middleware('throttle:20,1');
                    Route::get('bookmarks', [BookmarkController::class, 'index']);
                    Route::post('bookmarks/questions/{question}/toggle', [BookmarkController::class, 'toggle']);


                    Route::prefix('chat')->group(function () {
                Route::get('conversations', [\App\Http\Controllers\Chat\ChatController::class, 'index']);
                Route::get('conversations/unread-count', [\App\Http\Controllers\Chat\ChatController::class, 'unreadCount']);
                Route::get('conversations/with/{user}', [\App\Http\Controllers\Chat\ChatController::class, 'show']);
Route::get('conversations/{conversation}/poll', [\App\Http\Controllers\Chat\ChatController::class, 'poll'])
    ->middleware('throttle:60,1');Route::post('conversations/{conversation}/messages', [\App\Http\Controllers\Chat\ChatController::class, 'store'])
    ->middleware('throttle:30,1');
    });
});

 





/*
|--------------------------------------------------------------------------
| Quiz Sharing (Teacher/Professor + Student Join)
|--------------------------------------------------------------------------
*/
Route::middleware(['jwt.auth', 'fresh.token'])->group(function () {
Route::post('quiz-shares/join', [QuizJoinController::class, 'join'])->middleware('throttle:quiz-join');

    Route::middleware('role:admin,manager')->prefix('teacher')->group(function () {
        Route::get('subjects', [\App\Http\Controllers\User\TeacherQuizController::class, 'subjects']);
        Route::post('quizzes', [\App\Http\Controllers\User\TeacherQuizController::class, 'store']);
        Route::get('quizzes/{quiz}', [\App\Http\Controllers\User\TeacherQuizController::class, 'show'])->whereNumber('quiz');
        Route::put('quizzes/{quiz}', [\App\Http\Controllers\User\TeacherQuizController::class, 'update']);
        Route::delete('quizzes/{quiz}', [\App\Http\Controllers\User\TeacherQuizController::class, 'destroy']);
        Route::post('questions', [\App\Http\Controllers\User\TeacherQuestionController::class, 'store']);
        Route::put('questions/{question}', [\App\Http\Controllers\User\TeacherQuestionController::class, 'update']);
        Route::delete('questions/{question}', [\App\Http\Controllers\User\TeacherQuestionController::class, 'destroy']);
        Route::get('quizzes', [TeacherShareController::class, 'myQuizzes']);  
        Route::get('shares', [TeacherShareController::class, 'index']);
        Route::post('shares', [TeacherShareController::class, 'store']);
        Route::get('shares/{shareId}/results', [TeacherShareController::class, 'results']);
        Route::get('quizzes/{quizId}/questions', [TeacherShareController::class, 'quizQuestions']);
    });
});






Route::prefix('blog')->middleware('throttle:120,1')->group(function () {
    Route::get('asks', [BlogAskController::class, 'index']);
    Route::get('asks/stats', [BlogAskController::class, 'stats']);
    Route::get('asks/popular-tags', [BlogAskController::class, 'popularTags']);
    Route::get('asks/top-contributors', [BlogAskController::class, 'topContributors']);
    Route::get('asks/{ask}', [BlogAskController::class, 'show']);
    Route::post('asks', [BlogAskController::class, 'store'])
        ->middleware(['jwt.auth', 'fresh.token', 'throttle:10,1']);
    Route::post('asks/{ask}/responses', [BlogResponseController::class, 'store'])
        ->middleware(['jwt.auth', 'fresh.token', 'throttle:10,1']);
    Route::post('asks/{ask}/responses/{response}/accept', [BlogResponseController::class, 'accept'])
        ->middleware(['jwt.auth', 'fresh.token']);
});


Route::prefix('notifications')->middleware(['jwt.auth', 'fresh.token'])->group(function () {
    Route::get('/', [NotificationController::class, 'index']);
    Route::get('unread-count', [NotificationController::class, 'unreadCount']);
    Route::post('{notification}/read', [NotificationController::class, 'markRead']);
    Route::post('read-all', [NotificationController::class, 'markAllRead']);
});



Route::middleware(['jwt.auth', 'fresh.token', 'admin'])->group(function () {
   
    
});

Route::post('local-render/usage', \App\Http\Controllers\Api\ContentUsageReportController::class)->middleware('throttle:120,1');

Route::post('local-render/authorize', [\App\Http\Controllers\Api\LocalRenderController::class, 'authorizeTicket'])->middleware('throttle:60,1');

Route::middleware(['jwt.auth', 'fresh.token', 'role:admin'])->group(function () {
    Route::get('content-usage', [\App\Http\Controllers\Api\ContentUsageController::class, 'index']);
    Route::post('content-usage/exports', [\App\Http\Controllers\Api\ContentUsageController::class, 'export'])->middleware('throttle:30,1');
    Route::get('content-usage/operations/{operation}/export', [\App\Http\Controllers\Api\ContentUsageController::class, 'download'])->whereUuid('operation');
    Route::post('content-usage/recover', [\App\Http\Controllers\Api\ContentUsageController::class, 'recover'])->middleware('throttle:6,1');
    Route::post('local-render/ticket', [\App\Http\Controllers\Api\LocalRenderController::class, 'ticket'])->middleware('throttle:60,1');
    Route::get('facts-video/options', [\App\Http\Controllers\Api\FactsVideoController::class, 'options']);
    Route::post('facts-video/export', [\App\Http\Controllers\Api\FactsVideoController::class, 'export']);
    Route::apiResource('majors', MajorController::class);
    Route::apiResource('subjects', SubjectController::class);
    Route::apiResource('quizzes', ApiQuizController::class);
    Route::apiResource('questions', QuestionController::class);
    Route::apiResource('choices', ChoiceController::class);
    Route::get(
        'quizzes/{quiz}/revision-json',
        [ApiQuizController::class, 'revisionJson']
    )->name('quizzes.revision-json');

    // YouTube video preparation — separate from image JSON export
Route::get('video-batches', [VideoBatchController::class, 'index']);

Route::post('video-batches', [VideoBatchController::class, 'store']);

Route::get('video-batches/{videoBatch}', [VideoBatchController::class, 'show']);

Route::post(
    'video-batches/{videoBatch}/generate',
    [VideoBatchController::class, 'generate']
);

Route::get(
    'video-sets/{videoSet}/export-json',
    [VideoSetController::class, 'exportJson']
);

Route::get(
    'video-sets/{videoSet}',
    [VideoSetController::class, 'preview']
);

Route::post(
    'video-sets/{videoSet}/questions/{videoSetQuestion}/replace',
    [VideoSetController::class, 'replaceQuestion']
);


// Facts library (FR / EN / AR) for fact shorts and "30 faits" videos
Route::get('facts/stats', [FactController::class, 'stats']);
Route::post('facts/import', [FactController::class, 'import']);
Route::post('facts/verify', [FactController::class, 'verify']);
Route::get('facts', [FactController::class, 'index']);
Route::patch('facts/{fact}', [FactController::class, 'update']);
Route::delete('facts/{fact}', [FactController::class, 'destroy']);

// Weekly social media pack
Route::post('social-packs/preview', [SocialPackController::class, 'preview']);
Route::post('social-packs/replace', [SocialPackController::class, 'replace']);
Route::post('social-packs/confirm', [SocialPackController::class, 'confirm']);
Route::post('social-packs/exclusions', [SocialPackController::class, 'exclude']);
Route::delete('social-packs/exclusions/{questionId}', [SocialPackController::class, 'unexclude'])
    ->whereNumber('questionId');

// Admin-only upload

    Route::get('/admin/exam-pdfs', [ExamPdfController::class, 'adminIndex']);
    Route::post('/admin/exam-pdfs/batch', [\App\Http\Controllers\Api\AdminExamPdfWorkflowController::class, 'batch']);
    Route::post('/admin/exam-pdfs/{examPdf}/{action}', [\App\Http\Controllers\Api\AdminExamPdfWorkflowController::class, 'transition'])
        ->whereNumber('examPdf')->whereIn('action', ['verify', 'publish', 'verify-publish', 'unpublish']);
    Route::delete('/admin/exam-pdfs/{examPdf}', [\App\Http\Controllers\Api\AdminExamPdfWorkflowController::class, 'destroy'])->whereNumber('examPdf');
    Route::get('/admin/exam-pdfs/{examPdf}/view', [ExamPdfController::class, 'adminView'])->whereNumber('examPdf');
    Route::put('/exam-pdfs/{examPdf}', [ExamPdfController::class, 'update'])->whereNumber('examPdf');
    Route::put('/admin/exam-pdfs/{examPdf}/preparation-options', [ExamPdfController::class, 'updatePreparationOptions'])->whereNumber('examPdf');
    Route::post('/exam-pdfs', [ExamPdfController::class, 'store']);

});



});
