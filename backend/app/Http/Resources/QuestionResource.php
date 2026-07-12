<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'quiz_id' => $this->quiz_id,

            'question' => $this->question,

            'type' => $this->type,

            'marks' => $this->marks,

            'explanation' => $this->explanation,

            'order' => $this->order,

            'quiz' => new QuizResource(
                $this->whenLoaded('quiz')
            ),

             'choices' => ChoiceResource::collection(
                $this->whenLoaded('choices')
            ), 

            'created_at' => $this->created_at,

            'updated_at' => $this->updated_at,
        ];
    }
}