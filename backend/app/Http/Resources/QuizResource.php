<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
       return [
    'id' => $this->id,
    'subject_id' => $this->subject_id,
    'title' => $this->title,
    'description' => $this->description,
    'duration' => $this->duration,
    'passing_score' => $this->passing_score,
    'total_marks' => $this->total_marks,
    'is_active' => $this->is_active,

    'subject' => new SubjectResource($this->whenLoaded('subject')),

    'created_at' => $this->created_at,
    'updated_at' => $this->updated_at,
];
    }
}