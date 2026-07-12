<?php

namespace App\Services;

use App\Exceptions\Quiz\QuizAlreadySubmittedException;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Support\Facades\DB;

class QuizAttemptService
{
    public function __construct(
        protected ScoreCalculationService $scoreCalculationService
    ) {
    }

    public function start(Quiz $quiz, int $userId): QuizAttempt
    {
        return QuizAttempt::create([
            'user_id' => $userId,
            'quiz_id' => $quiz->id,
            'status' => 'in_progress',
            'started_at' => now(),
            'score' => 0,
            'percentage' => 0,
            'passed' => false,
        ]);
    }

    public function submit(QuizAttempt $attempt): QuizAttempt
    {
        return DB::transaction(function () use ($attempt) {

            if ($attempt->status !== 'in_progress') {
                throw new QuizAlreadySubmittedException();
            }

            $result = $this->scoreCalculationService->calculate($attempt);

            $attempt->update([
                'status' => 'submitted',
                'submitted_at' => now(),
                'score' => $result['score'],
                'percentage' => $result['percentage'],
                'passed' => $result['passed'],
            ]);

            return $attempt->fresh()->load('quiz');
        });
    }
}