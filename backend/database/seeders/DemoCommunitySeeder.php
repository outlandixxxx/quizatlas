<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/** Run after the curriculum/quiz seeders: php artisan db:seed --class=DemoCommunitySeeder */
class DemoCommunitySeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LeaderboardSeeder::class,
            UserAchievementSeeder::class,
        ]);
    }
}
