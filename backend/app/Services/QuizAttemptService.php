<?php

namespace App\Services;

use App\Exceptions\Quiz\QuizAlreadySubmittedException;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Support\Facades\DB;

class QuizAttemptService
{
    public function __construct(
        protected ScoreCalculationService $scoreCalculationService,
        protected GamificationService $gamificationService

    ) {
    }

 public function start(Quiz $quiz, int $userId, string $mode = 'exam'): QuizAttempt
{
    return DB::transaction(function () use ($quiz, $userId, $mode) {

        // Lock any existing in_progress attempt row for this user+quiz so a
        // concurrent start() call blocks here instead of racing past this
        // check and creating a duplicate attempt.
        $existing = QuizAttempt::where('user_id', $userId)
            ->where('quiz_id', $quiz->id)
            ->where('status', 'in_progress')
            ->lockForUpdate()
            ->first();

        if ($existing) {
            return $existing;
        }

        return QuizAttempt::create([
            'user_id' => $userId,
            'quiz_id' => $quiz->id,
            'mode' => $mode,
            'status' => 'in_progress',
            'started_at' => now(),
            'score' => 0,
            'percentage' => 0,
            'passed' => false,
        ]);
    });
}

    public function submit(QuizAttempt $attempt): array
    {
        return DB::transaction(function () use ($attempt) {

            // Re-fetch with a row lock. If another request is already inside this
            // transaction for the same attempt, this blocks here until it commits,
            // then reads the post-commit status — so the check below is race-free.
            $locked = QuizAttempt::where('id', $attempt->id)
                ->lockForUpdate()
                ->firstOrFail();

            if ($locked->status !== 'in_progress') {
                throw new QuizAlreadySubmittedException();
            }

            $result = $this->scoreCalculationService->calculate($locked);

            $locked->update([
                'status' => 'submitted',
                'submitted_at' => now(),
                'score' => $result['score'],
                'percentage' => $result['percentage'],
                'passed' => $result['passed'],
            ]);

            $rewards = $this->gamificationService->awardForAttempt($locked->fresh());

            return [
                'attempt' => $locked->fresh()->load('quiz'),
                'rewards' => $rewards,
            ];
        });
    }
}