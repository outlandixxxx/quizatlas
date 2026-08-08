<?php

namespace App\Services;

use App\Models\QuizAttempt;

class GamificationService
{
    public function __construct(
        protected XpService $xpService,
        protected StreakService $streakService,
        protected AchievementService $achievementService
    ) {
    }

    public function awardForAttempt(QuizAttempt $attempt): array
    {
        $user = $attempt->user;
        $levelBefore = $user->level();

        // XP: correct answers
        $correctCount = $attempt->userAnswers()
            ->whereHas('choice', fn ($q) => $q->where('is_correct', true))
            ->count();

        if ($correctCount > 0) {
            $this->xpService->award($user, $correctCount * 10, 'quiz_correct_answers', "{$correctCount} correct answers", $attempt->id);
        }

        // XP: flat completion bonus
        $this->xpService->award($user, 40, 'quiz_completion', 'Quiz completed', $attempt->id);

        // XP: score bonuses
        if ($attempt->percentage >= 100) {
            $this->xpService->award($user, 100, 'perfect_score', 'Perfect score', $attempt->id);
        } elseif ($attempt->percentage >= 80) {
            $this->xpService->award($user, 30, 'score_bonus', '80%+ score', $attempt->id);
        }

        $streakInfo = $this->streakService->updateStreak($user);

        $user->refresh();
        $newlyUnlocked = $this->achievementService->checkAndUnlock($user, $attempt);

        $user->refresh();
        $levelAfter = $user->level();

        return [
            'xp_earned' => $user->xpTransactions()->where('quiz_attempt_id', $attempt->id)->sum('amount'),
            'level_before' => $levelBefore,
            'level_after' => $levelAfter,
            'leveled_up' => $levelAfter > $levelBefore,
            'streak' => $streakInfo['streak'],
            'streak_increased' => $streakInfo['increased'],
            'newly_unlocked_achievements' => array_map(fn ($a) => [
                'title' => $a->title,
                'description' => $a->description,
                'icon' => $a->icon,
                'xp_reward' => $a->xp_reward,
            ], $newlyUnlocked),
        ];
    }
}