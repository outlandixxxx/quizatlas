<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class LeaderboardSeeder extends Seeder
{
    /**
     * Assigns XP, streaks, last-active dates and countries to all seeded
     * students so the leaderboard has a full podium and a long ranking.
     *
     * Run this AFTER UserSeeder, e.g. in DatabaseSeeder:
     *   $this->call([UserSeeder::class, LeaderboardSeeder::class]);
     */
    public function run(): void
    {
        mt_srand(1991); // same random values on every run

        // The 10 original students keep their hand-picked profiles.
        // email => [xp, current_streak, last_active_date, country]
        $profiles = [
            'ahmed@maroquiz.test'   => [12850, 21, now(),             'Morocco'],
            'sara@maroquiz.test'    => [11230, 14, now(),             'Morocco'],
            'youssef@maroquiz.test' => [9870,  9,  now()->subDay(),   'Morocco'],
            'fatima@maroquiz.test'  => [8450,  7,  now()->subDay(),   'France'],
            'omar@maroquiz.test'    => [7920,  5,  now()->subDays(2), 'Morocco'],
            'meryem@maroquiz.test'  => [6780,  3,  now()->subDays(2), 'Morocco'],
            'hassan@maroquiz.test'  => [6240,  2,  now()->subDays(3), 'Spain'],
            'salma@maroquiz.test'   => [5680,  1,  now()->subDays(4), 'Morocco'],
            'khalid@maroquiz.test'  => [5210,  7,  now(),             'Morocco'],
            'aya@maroquiz.test'     => [4890,  0,  now()->subDays(10),'Morocco'],
        ];

        foreach ($profiles as $email => [$xp, $streak, $lastActive, $country]) {
            User::where('email', $email)->update([
                'xp'               => $xp,
                'current_streak'   => $streak,
                'last_active_date' => $lastActive,
                'country'          => $country,
            ]);
        }

        // The other 90 students: XP goes down from about 4700 to about 250,
        // all below the original top 10, with a little random variation.
        $countries = [
            'Morocco', 'Morocco', 'Morocco', 'Morocco', 'Morocco', 'Morocco',
            'France', 'France', 'Spain', 'Algeria', 'Tunisia', 'Canada',
        ];

        $others = User::where('role', 'user')
            ->where('email', 'like', '%@maroquiz.test')
            ->whereNotIn('email', array_keys($profiles))
            ->orderBy('id')
            ->get()
            ->values();

        foreach ($others as $i => $user) {
            $xp = max(50, 4700 - ($i * 50) + mt_rand(-20, 20));
            $streak = mt_rand(0, 12);

            $lastActive = $streak > 0
                ? now()->subDays(mt_rand(0, 1))
                : now()->subDays(mt_rand(5, 30));

            $user->forceFill([
                'xp'               => $xp,
                'current_streak'   => $streak,
                'last_active_date' => $lastActive,
                'country'          => $countries[array_rand($countries)],
            ])->save();
        }
    }
}