<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookmarkResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'question_id'   => $this->question_id,
            'quiz_id'       => $this->question->quiz_id,
            'question_text' => $this->question->question,
            'subject_name'  => $this->question->quiz->subject->name ?? null,
            'saved_at'      => $this->created_at,
        ];
    }
}