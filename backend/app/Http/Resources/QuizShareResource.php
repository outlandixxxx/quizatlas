<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizShareResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'join_code' => $this->join_code,
            'title' => $this->title ?? $this->quiz?->title,
            'quiz_id' => $this->quiz_id,
            'quiz_title' => $this->quiz?->title,
            'is_active' => $this->is_active,
            'enrolled_count' => $this->whenCounted('enrollments'),
            'created_at' => $this->created_at,
        ];
    }
}