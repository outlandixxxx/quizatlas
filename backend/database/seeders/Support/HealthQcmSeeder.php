<?php

namespace Database\Seeders\Support;

use Illuminate\Database\Seeder;

abstract class HealthQcmSeeder extends Seeder
{
    abstract public function definition(): array;

    public function run(): void
    {
        app(HealthQcmCatalogue::class)->seed(static::class);
    }
}
