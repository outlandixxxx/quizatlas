<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;

class StreakService
{
    /**
     * @return array{streak: int, increased: bool}
     */
    public function updateStreak(User $user): array
    {
        $today = Carbon::today();
        $increased = false;

        if ($user->last_active_date === null) {
            $user->current_streak = 1;
            $increased = true;
        } elseif ($user->last_active_date->isSameDay($today)) {
            // already counted today
        } elseif ($user->last_active_date->isSameDay($today->copy()->subDay())) {
            $user->current_streak += 1;
            $increased = true;
        } else {
            $user->current_streak = 1;
            $increased = true;
        }

        $user->last_active_date = $today;
        $user->save();

        return ['streak' => $user->current_streak, 'increased' => $increased];
    }
}