<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
         Gate::policy(Quiz::class, QuizPolicy::class);
    Gate::policy(Question::class, QuestionPolicy::class);
    Gate::policy(Choice::class, ChoicePolicy::class);
    }
}
