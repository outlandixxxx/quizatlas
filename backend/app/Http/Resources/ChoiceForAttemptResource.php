<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChoiceForAttemptResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'question_id' => $this->question_id,
            'choice_text' => $this->choice_text,
            'order'       => $this->order,
            // Exclude 'is_correct' so answers aren't leaked to the client
        ];
    }
}