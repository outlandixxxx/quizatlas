<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!app()->environment(['local', 'testing'])) {
            throw new \RuntimeException('Demo database seeding is restricted to local/testing. Production catalogue seeding is a separate release step.');
        }

        $this->call([
            UserSeeder::class,
            EducationSeeder::class,
        ]);
    }
}
