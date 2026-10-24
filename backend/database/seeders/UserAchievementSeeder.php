<?php

namespace Database\Seeders;

use App\Models\User;
use App\Services\AchievementService;
use Database\Seeders\Support\SeededCommunity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/** Backfill only achievements supported by the fixture users' recorded activity. */
class UserAchievementSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AchievementSeeder::class);
        $emails = array_column(SeededCommunity::students(), 'email');
        foreach (User::where('role', 'user')->whereIn('email', $emails)->get() as $user) {
            DB::transaction(function () use ($user): void {
                $user = User::whereKey($user->id)->lockForUpdate()->firstOrFail();
                $attempts = $user->quizAttempts()->where('status', 'submitted')->orderBy('submitted_at')->get();
                $latest = $attempts->last();
                if (! $latest) {
                    return;
                }

                // Other badges use recorded history; perfect_score uses this attempt.
                $qualifyingAttempt = $attempts->first(fn ($attempt) => $attempt->percentage >= 100) ?? $latest;
                app(AchievementService::class)->checkAndUnlock($user, $qualifyingAttempt);
            });
        }
    }
}
