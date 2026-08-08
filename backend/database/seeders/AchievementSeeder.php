<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        $achievements = [
            ['key' => 'first_quiz', 'title' => 'First Quiz', 'description' => 'Complete your first quiz', 'icon' => 'track_changes', 'xp_reward' => 50],
            ['key' => 'quizzes_10', 'title' => 'Getting Serious', 'description' => 'Complete 10 quizzes', 'icon' => 'military_tech', 'xp_reward' => 100],
            ['key' => 'quizzes_100', 'title' => 'Quiz Master', 'description' => 'Complete 100 quizzes', 'icon' => 'workspace_premium', 'xp_reward' => 300],
            ['key' => 'perfect_score', 'title' => 'Perfect Precision', 'description' => 'Score 100% on a quiz', 'icon' => 'grade', 'xp_reward' => 100],
            ['key' => 'accuracy_90', 'title' => 'Sharp Shooter', 'description' => 'Maintain 90%+ average accuracy', 'icon' => 'target', 'xp_reward' => 150],
            ['key' => 'streak_3', 'title' => 'On Fire', 'description' => '3-day study streak', 'icon' => 'local_fire_department', 'xp_reward' => 50],
            ['key' => 'streak_7', 'title' => 'Consistent', 'description' => '7-day study streak', 'icon' => 'event_available', 'xp_reward' => 100],
            ['key' => 'streak_30', 'title' => 'Unstoppable', 'description' => '30-day study streak', 'icon' => 'bolt', 'xp_reward' => 400],
            ['key' => 'explorer', 'title' => 'Explorer', 'description' => 'Complete quizzes in 3 different subjects', 'icon' => 'explore', 'xp_reward' => 100],
            ['key' => 'night_owl', 'title' => 'Night Owl', 'description' => 'Complete a quiz between 10PM and 5AM', 'icon' => 'bedtime', 'xp_reward' => 50],
        ];

        foreach ($achievements as $a) {
            Achievement::updateOrCreate(['key' => $a['key']], $a);
        }
    }
}