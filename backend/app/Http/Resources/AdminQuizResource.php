<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminQuizResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'subject_id' => $this->subject_id,
            'subject' => new SubjectResource($this->whenLoaded('subject')),
            'title' => $this->title,
            'description' => $this->description,
            'duration' => $this->duration,
            'passing_score' => $this->passing_score,
            'total_marks' => $this->total_marks,
            'difficulty' => $this->difficulty,
            'is_active' => $this->is_active,
            'questions_count' => $this->whenCounted('questions'),
        ];
    }
}