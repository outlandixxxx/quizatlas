<?php

namespace App\Services;

use App\Models\User;
use App\Models\XpTransaction;

class XpService
{
    public function award(User $user, int $amount, string $type, ?string $description = null, ?int $quizAttemptId = null): void
    {
        if ($amount <= 0) return;

        XpTransaction::create([
            'user_id' => $user->id,
            'quiz_attempt_id' => $quizAttemptId,
            'amount' => $amount,
            'type' => $type,
            'description' => $description,
        ]);

        $user->xp += $amount;
        $user->save();
    }
}