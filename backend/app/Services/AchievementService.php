<?php

namespace App\Services;

use App\Models\Achievement;
use App\Models\QuizAttempt;
use App\Models\User;
use App\Models\UserAchievement;

class AchievementService
{
    public function __construct(protected XpService $xpService)
    {
    }

    /**
     * @return \App\Models\Achievement[] newly unlocked achievements
     */
    public function checkAndUnlock(User $user, QuizAttempt $latestAttempt): array
    {
        $unlockedKeys = $user->userAchievements()->pluck('achievement_id');
        $alreadyUnlocked = Achievement::whereIn('id', $unlockedKeys)->pluck('key')->all();

        $submittedAttempts = $user->quizAttempts()->where('status', 'submitted')->with('quiz')->get();
        $totalQuizzes = $submittedAttempts->count();
        $avgAccuracy = $totalQuizzes > 0 ? $submittedAttempts->avg('percentage') : 0;
        $distinctSubjects = $submittedAttempts->pluck('quiz.subject_id')->filter()->unique()->count();

        $hasNightAttempt = $submittedAttempts->contains(function (QuizAttempt $a) {
            $hour = (int) ($a->started_at?->format('H') ?? -1);
            return $hour >= 22 || $hour < 5;
        });

        $candidates = [
            'first_quiz' => $totalQuizzes >= 1,
            'quizzes_10' => $totalQuizzes >= 10,
            'quizzes_100' => $totalQuizzes >= 100,
            'perfect_score' => $latestAttempt->percentage >= 100,
            'accuracy_90' => $totalQuizzes >= 5 && $avgAccuracy >= 90,
            'streak_3' => $user->current_streak >= 3,
            'streak_7' => $user->current_streak >= 7,
            'streak_30' => $user->current_streak >= 30,
            'explorer' => $distinctSubjects >= 3,
            'night_owl' => $hasNightAttempt,
        ];

        $newlyUnlocked = [];

        foreach ($candidates as $key => $earned) {
            if (!$earned || in_array($key, $alreadyUnlocked, true)) continue;

            $achievement = Achievement::where('key', $key)->first();
            if (!$achievement) continue;

            UserAchievement::create([
                'user_id' => $user->id,
                'achievement_id' => $achievement->id,
                'unlocked_at' => now(),
            ]);

            $this->xpService->award($user, $achievement->xp_reward, 'achievement', $achievement->title);

            $newlyUnlocked[] = $achievement;
        }

        return $newlyUnlocked;
    }
    

    public function listForUser(User $user): array
{
    $unlockedByKey = $user->userAchievements()
        ->with('achievement')
        ->get()
        ->keyBy(fn ($ua) => $ua->achievement->key);

    return Achievement::all()->map(function (Achievement $achievement) use ($unlockedByKey) {
        $unlocked = $unlockedByKey->get($achievement->key);

        return [
            'id' => $achievement->id,
            'key' => $achievement->key,
            'title' => $achievement->title,
            'description' => $achievement->description,
            'icon' => $achievement->icon,
            'xp_reward' => $achievement->xp_reward,
            'unlocked' => $unlocked !== null,
            'unlocked_at' => $unlocked?->unlocked_at,
        ];
    })->values()->all();
}
}