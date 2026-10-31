<?php

namespace App\Console\Commands;

use App\Models\QuizAttempt;
use App\Services\QuizAttemptService;
use Illuminate\Console\Command;

class ExpireQuizAttempts extends Command
{
    protected $signature = 'quiz-attempts:expire';
    protected $description = 'Finalize timed-out exams and award their completion rewards once';

    public function handle(QuizAttemptService $service): int
    {
        $count = 0;
        QuizAttempt::where('status', 'in_progress')->where('mode', 'exam')
            ->whereHas('quiz', fn ($q) => $q->withTrashed())
            ->with(['quiz' => fn ($q) => $q->withTrashed()])->chunkById(100, function ($attempts) use ($service, &$count) {
                foreach ($attempts as $attempt) {
                    if ($attempt->isDue()) {
                        $service->refreshAndExpire($attempt, checkEligibility: false);
                        $count++;
                    }
                }
            });
        $this->info("Processed {$count} overdue exam attempts.");
        return self::SUCCESS;
    }
}
