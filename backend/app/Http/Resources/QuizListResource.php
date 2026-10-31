<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizListResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $latestAttempt = $this->resource->relationLoaded('quizAttempts')
            ? $this->quizAttempts->where('user_id', auth()->id())->sortByDesc('id')->first()
            : $this->quizAttempts()->where('user_id', auth()->id())->orderByDesc('id')->first();

        return [
            'id'                  => $this->id,
            'title'               => $this->title,
            'subject_name'        => $this->subject->name ?? null,
            'difficulty'          => $this->difficulty,
            'questions_count'     => $this->questions_count,
            'status'              => $latestAttempt?->status ?? 'not_started',
            'is_completed'        => in_array($latestAttempt?->status, ['submitted', 'expired'], true) && $latestAttempt?->submitted_at !== null,
            'progress_percentage' => in_array($latestAttempt?->status, ['submitted', 'expired'], true)
                ? 100
                : ($latestAttempt?->status === 'in_progress' ? $this->answeredPercentage($latestAttempt) : 0),
            'latest_attempt_id'   => $latestAttempt?->id ?? null,
        ];
    }

    private function answeredPercentage($attempt): int
    {
        if (!$this->questions_count) {
            return 0;
        }

        $answered = $attempt->userAnswers->pluck('question_id')->unique()->count();

        return (int) round(($answered / $this->questions_count) * 100);
    }
}
