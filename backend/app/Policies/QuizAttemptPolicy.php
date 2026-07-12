<?php

namespace App\Policies;

use App\Models\QuizAttempt;
use App\Models\User;

class QuizAttemptPolicy
{
    /**
     * Determine whether the user can view the quiz attempt.
     */
    public function view(User $user, QuizAttempt $quizAttempt): bool
    {
        return $user->id === $quizAttempt->user_id;
    }

    /**
     * Determine whether the user can update the quiz attempt.
     */
    public function update(User $user, QuizAttempt $quizAttempt): bool
    {
        return $user->id === $quizAttempt->user_id;
    }

    /**
     * Determine whether the user can submit the quiz attempt.
     */
    public function submit(User $user, QuizAttempt $quizAttempt): bool
    {
        return $user->id === $quizAttempt->user_id;
    }
}