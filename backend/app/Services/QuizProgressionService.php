<?php

namespace App\Services;

use App\Models\QuizAttempt;
use App\Models\User;

class QuizProgressionService
{
    public function forUser(User $user): array
    {
        return [
            'total_xp' => (int) $user->xp,
            'level' => $user->level(),
            'xp_into_current_level' => $user->xpIntoCurrentLevel(),
            'xp_for_next_level' => $user->xpForNextLevel(),
        ];
    }

    public function forAttempt(QuizAttempt $attempt): array
    {
        $user = $attempt->user()->firstOrFail();

        return [
            // Use the same attempt ledger as submission. Achievement bonuses
            // remain separate, and are already included in the user's total XP.
            'xp_earned' => (int) $user->xpTransactions()
                ->where('quiz_attempt_id', $attempt->id)->sum('amount'),
            ...$this->forUser($user),
        ];
    }
}
