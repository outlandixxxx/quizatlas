<?php

namespace App\Services;

use App\Models\Quiz;
use Illuminate\Validation\ValidationException;

class RevisionNotesJsonExporter
{
    /**
     * Build the revision JSON data for one quiz.
     */
    public function build(Quiz $quiz): array
    {
        $quiz->load([
            'subject.major',
            'questions' => fn ($query) => $query->orderBy('order', 'asc'),
        ]);

        foreach ($quiz->questions as $question) {
            if (
                $question->explanation === null ||
                trim($question->explanation) === ''
            ) {
                throw ValidationException::withMessages([
                    'quiz' => "Cannot generate revision JSON: question {$question->order} has no explanation.",
                ]);
            }
        }

        return [
            'major' => [
                'id' => $quiz->subject->major->id,
                'name' => $quiz->subject->major->name,
                'slug' => $quiz->subject->major->slug,
            ],

            'subject' => [
                'id' => $quiz->subject->id,
                'name' => $quiz->subject->name,
                'slug' => $quiz->subject->slug,
            ],

            'quiz' => [
                'id' => $quiz->id,
                'title' => $quiz->title,
                'difficulty' => $quiz->difficulty,
            ],

            'notes' => $quiz->questions->map(
                fn ($question) => [
                    'order' => $question->order,
                    'explanation' => $question->explanation,
                ]
            )->values()->all(),

            'meta' => [
                'total_explanations' => $quiz->questions->count(),
                'exported_at' => now()->utc()->toIso8601ZuluString(),
                'format_version' => '1.0',
            ],
        ];
    }
}