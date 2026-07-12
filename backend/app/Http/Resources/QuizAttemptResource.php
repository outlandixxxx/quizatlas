<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizAttemptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'user_id'       => $this->user_id,
            'quiz_id'       => $this->quiz_id,
            'status'        => $this->status,
            'started_at'    => $this->started_at,
            'submitted_at'  => $this->submitted_at,
            'score'         => $this->score,
            'percentage'    => $this->percentage,
            'passed'        => $this->passed,

            'quiz' => new QuizResource(
                $this->whenLoaded('quiz')
            ),

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}