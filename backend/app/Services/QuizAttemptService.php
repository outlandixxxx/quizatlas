<?php

namespace App\Services;

use App\Exceptions\Quiz\QuizAlreadySubmittedException;
use App\Exceptions\Quiz\QuizAttemptExpiredException;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class QuizAttemptService
{
    public function __construct(
        protected ScoreCalculationService $scoreCalculationService,
        protected GamificationService $gamificationService
    ) {}

    public function start(Quiz $quiz, int $userId, string $mode = 'exam'): QuizAttempt
    {
        return DB::transaction(function () use ($quiz, $userId, $mode) {
            // A real user row exists even before an attempt does. Locking it
            // prevents concurrent starts and serializes this user's rewards.
            $user = User::whereKey($userId)->lockForUpdate()->firstOrFail();
            Gate::forUser($user)->authorize('participate', $quiz);
            abort_unless(in_array($mode, ['exam', 'tutor'], true), 422, 'Invalid quiz mode.');
            $existing = QuizAttempt::where('user_id', $userId)->where('quiz_id', $quiz->id)
                ->where('status', 'in_progress')->orderByDesc('id')->lockForUpdate()->first();
            if ($existing) {
                if ($existing->isDue()) return $this->finalize($existing, true)['attempt'];
                abort_if($existing->mode !== $mode, 409, 'The mode is fixed for this attempt. Resume the existing attempt.');
                return $existing;
            }
            return QuizAttempt::create([
                'user_id' => $userId, 'quiz_id' => $quiz->id, 'mode' => $mode,
                'status' => 'in_progress', 'started_at' => now(),
                'score' => 0, 'percentage' => 0, 'passed' => false,
            ]);
        });
    }

    /** All mutations lock in the same order: user, then attempt. */
    private function locked(QuizAttempt $attempt, Closure $action, bool $checkEligibility = true): mixed
    {
        return DB::transaction(function () use ($attempt, $action, $checkEligibility) {
            $user = User::whereKey($attempt->user_id)->lockForUpdate()->firstOrFail();
            $locked = QuizAttempt::whereKey($attempt->id)->lockForUpdate()->firstOrFail();
            if ($checkEligibility) {
                Gate::forUser($user)->authorize('participate', $locked->quiz);
            } else {
                $locked->load(['quiz' => fn ($q) => $q->withTrashed()]);
            }
            return $action($locked);
        });
    }

    public function refreshAndExpire(QuizAttempt $attempt, bool $checkEligibility = true): QuizAttempt
    {
        return $this->locked($attempt, fn (QuizAttempt $locked) => $locked->isDue()
            ? $this->finalize($locked, true)['attempt'] : $locked, $checkEligibility);
    }

    public function whileInProgress(QuizAttempt $attempt, Closure $action): mixed
    {
        $result = $this->locked($attempt, function (QuizAttempt $locked) use ($action) {
            if ($locked->isDue()) {
                $this->finalize($locked, true);
                return ['expired' => true];
            }
            if ($locked->status !== 'in_progress') return ['closed' => true];
            try {
                $value = DB::transaction(function () use ($locked, $action) {
                    $value = $action($locked);
                    // Roll back only the answer/mode action if processing crosses
                    // the deadline, then grade the previously committed answers.
                    if ($locked->isDue()) throw new QuizAttemptExpiredException();
                    return $value;
                });
                return ['value' => $value];
            } catch (QuizAttemptExpiredException $e) {
                $this->finalize($locked, true);
                return ['expired' => true];
            }
        });
        // Reject AFTER commit so a late answer cannot roll back expiration
        // together with its grading and one-time rewards.
        if (isset($result['expired'])) throw new QuizAttemptExpiredException();
        if (isset($result['closed'])) throw new QuizAlreadySubmittedException();
        return $result['value'];
    }

    public function submit(QuizAttempt $attempt): array
    {
        return $this->locked($attempt, function (QuizAttempt $locked) {
            if ($locked->status !== 'in_progress') throw new QuizAlreadySubmittedException();
            return $this->finalize($locked, $locked->isDue());
        });
    }

    /** Both locks are held; status, score and rewards commit atomically. */
    private function finalize(QuizAttempt $attempt, bool $expired): array
    {
        $result = $this->scoreCalculationService->calculate($attempt, $expired ? $attempt->deadline() : null);
        $attempt->update([
            'status' => $expired ? 'expired' : 'submitted',
            'submitted_at' => $expired ? $attempt->deadline() : now(),
            'score' => $result['score'], 'percentage' => $result['percentage'], 'passed' => $result['passed'],
        ]);
        $rewards = $this->gamificationService->awardForAttempt(
            $attempt->fresh()->load(['quiz' => fn ($q) => $q->withTrashed()])
        );
        return ['attempt' => $attempt->fresh()->load('quiz'), 'rewards' => $rewards];
    }
}
