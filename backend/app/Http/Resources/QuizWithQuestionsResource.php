<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuizWithQuestionsResource extends JsonResource
{
    public function __construct($resource, protected array $selectedByQuestion = [], protected array $bookmarkedQuestionIds = [])
    {
        parent::__construct($resource);
    }

    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'description'   => $this->description,
            'duration'      => $this->duration,
            'passing_score' => $this->passing_score,
            'total_marks'   => $this->total_marks,
            'difficulty'    => $this->difficulty,
            'subject_name'  => $this->whenLoaded('subject', fn () => $this->subject->name),
            'questions'     => $this->questions->map(fn ($question) => new QuestionForAttemptResource(
                $question,
                $this->selectedByQuestion[$question->id] ?? [],
                in_array($question->id, $this->bookmarkedQuestionIds, true)
            ))->values()->all(),
        ];
    }
}