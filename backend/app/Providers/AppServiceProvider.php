<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use App\Policies\QuizPolicy;
use App\Policies\QuestionPolicy;
use App\Policies\ChoicePolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


       RateLimiter::for('api', function (Request $request) {
        return $request->user()
            ? Limit::perMinute(120)->by($request->user()->id)
            : Limit::perMinute(30)->by($request->ip());
    });

    RateLimiter::for('login', fn (Request $request) =>
        Limit::perMinute(5)->by($request->ip().'|'.$request->input('email'))
    );

    RateLimiter::for('register', fn (Request $request) =>
        Limit::perMinute(3)->by($request->ip())
    );

    RateLimiter::for('password-reset', fn (Request $request) =>
        Limit::perMinute(3)->by($request->ip().'|'.$request->input('email'))
    );

    RateLimiter::for('email-resend', fn (Request $request) =>
        Limit::perMinute(3)->by(
            $request->ip().'|'.($request->input('email') ?: $request->user()?->id)
        )
    );

    RateLimiter::for('quiz-join', fn (Request $request) =>
        Limit::perMinute(10)->by($request->user()?->id ?: $request->ip())
    );

    RateLimiter::for('trial', fn (Request $request) =>
        Limit::perMinute(20)->by($request->ip())
    );

    RateLimiter::for('newsletter', fn (Request $request) =>
    Limit::perMinute(5)->by($request->ip())
    );

    RateLimiter::for('social-login', fn (Request $request) =>
    Limit::perMinute(10)->by($request->ip())
    );

    // L5 — friend requests are authenticated-only, so key by user id;
    // 10/min is generous for real use but blocks a spam-request script.
    RateLimiter::for('friend-request', fn (Request $request) =>
        Limit::perMinute(10)->by($request->user()->id)
    );

    // L6 — feedback endpoint is public (no auth required), so key by IP.
    RateLimiter::for('feedback', fn (Request $request) =>
        Limit::perMinute(5)->by($request->ip())
    );

    Gate::policy(Quiz::class, QuizPolicy::class);
    Gate::policy(Question::class, QuestionPolicy::class);
    Gate::policy(Choice::class, ChoicePolicy::class);
}


}
