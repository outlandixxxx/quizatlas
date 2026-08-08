<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LeaderboardSeeder extends Seeder
{
    /**
     * Assigns XP, streaks, last-active dates, and countries to existing
     * seeded users so the leaderboard page has enough data to render
     * the podium (top 3) and the "your rank" card.
     *
     * Run this AFTER UserSeeder, e.g. in DatabaseSeeder:
     *   $this->call([UserSeeder::class, LeaderboardSeeder::class]);
     */
    public function run(): void
    {
        // email => [xp, current_streak, last_active_date, country]
        $profiles = [
            'ahmed@quizatlas.test'   => [12850, 21, now(),                 'Morocco'],
            'sara@quizatlas.test'    => [11230, 14, now(),                 'Morocco'],
            'youssef@quizatlas.test' => [9870,  9,  now()->subDay(),       'Morocco'],
            'fatima@quizatlas.test'  => [8450,  7,  now()->subDay(),       'France'],
            'omar@quizatlas.test'    => [7920,  5,  now()->subDays(2),     'Morocco'],
            'meryem@quizatlas.test'  => [6780,  3,  now()->subDays(2),     'Morocco'],
            'hassan@quizatlas.test'  => [6240,  2,  now()->subDays(3),     'Spain'],
            'salma@quizatlas.test'   => [5680,  1,  now()->subDays(4),     'Morocco'],
            'khalid@quizatlas.test'  => [5210,  7,  now(),                 'Morocco'], // "logged in test user"
            'aya@quizatlas.test'     => [4890,  0,  now()->subDays(10),    'Morocco'],
        ];

        foreach ($profiles as $email => [$xp, $streak, $lastActive, $country]) {
            User::where('email', $email)->update([
                'xp'                => $xp,
                'current_streak'    => $streak,
                'last_active_date'  => $lastActive,
                'country'           => $country,
            ]);
        }
    }
}