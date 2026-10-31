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
            'mode'          => $this->mode,
            'status'        => $this->status,
            'started_at'    => $this->started_at,
            'submitted_at'  => $this->submitted_at,
            'server_time'   => now()->toISOString(),
            'deadline_at'   => $this->resource->deadline()?->toISOString(),
            'remaining_seconds' => $this->status === 'in_progress' && $this->resource->deadline()
                ? max(0, (int) ceil(now()->diffInSeconds($this->resource->deadline(), false))) : null,
            'score'         => $this->score,
            'percentage'    => $this->percentage,
            'passed'        => $this->passed,

            'quiz' => new QuizListResource($this->whenLoaded('quiz')),

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
