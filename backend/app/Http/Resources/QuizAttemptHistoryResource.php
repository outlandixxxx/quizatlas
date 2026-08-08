<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizAttemptHistoryResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'               => $this->id,
            'session_title'    => $this->quiz_id ? $this->quiz->title : $this->title,
            'type'             => match ($this->source) {
                'quiz' => 'Topic',
                'random' => 'Random',
                'weak_areas' => 'Weak Areas',
                'custom' => 'Custom',
                default => 'Topic',
            },
            'questions_count'  => $this->quiz_id ? $this->quiz->questions_count : 0,
            'score_percentage' => $this->percentage,
            'submitted_at'     => $this->submitted_at,
        ];
    }
}