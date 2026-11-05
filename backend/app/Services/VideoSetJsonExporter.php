<?php

namespace App\Services;

use App\Models\VideoSet;
use Illuminate\Support\Str;

class VideoSetJsonExporter
{
    public function build(VideoSet $videoSet): array
    {
        $videoSet->load([
            'subject.major',
            'videoSetQuestions' => fn ($query) =>
                $query->orderBy('question_order'),
            'videoSetQuestions.question.quiz',
            'videoSetQuestions.question.choices' => fn ($query) =>
                $query->orderBy('order')->orderBy('id'),
        ]);

        if (! $videoSet->subject || ! $videoSet->subject->major) {
            abort(422, 'The video Subject or its Major is unavailable.');
        }

        if ($videoSet->videoSetQuestions->isEmpty()) {
            abort(422, 'This video has no assigned questions.');
        }

        $questions = [];

        foreach ($videoSet->videoSetQuestions as $assignment) {
            $question = $assignment->question;

            if (! $question) {
                abort(422, 'An assigned question is unavailable.');
            }

            $choices = $question->choices->values();

            if ($choices->count() < 2) {
                abort(
                    422,
                    "Question {$question->id} has fewer than two available choices."
                );
            }

            $correctChoices = $choices
                ->filter(fn ($choice) => (bool) $choice->is_correct)
                ->values();

            if ($correctChoices->count() !== 1) {
                abort(
                    422,
                    "Question {$question->id} must have exactly one correct answer."
                );
            }

            $normalizedChoices = [];

            foreach ($choices as $choice) {
                $text = trim((string) $choice->choice_text);
                $normalized = Str::lower($text);

                if (
                    $text === ''
                    || isset($normalizedChoices[$normalized])
                ) {
                    abort(
                        422,
                        "Question {$question->id} has blank or duplicate choices."
                    );
                }

                $normalizedChoices[$normalized] = true;
            }

            $formattedChoices = $choices
                ->map(fn ($choice, $index) => [
                    'id' => (int) $choice->id,
                    'label' => chr(65 + $index),
                    'text' => (string) $choice->choice_text,
                ])
                ->values();

            $correctChoice = $correctChoices->first();

            $correctIndex = $choices->search(
                fn ($choice) =>
                    (int) $choice->id === (int) $correctChoice->id
            );

            $questions[] = [
                'id' => (int) $question->id,
                'quiz_id' => (int) $question->quiz_id,
                'order' => (int) $assignment->question_order,
                'text' => (string) $question->question,
                'type' => $question->type,
                'difficulty' => $question->quiz?->difficulty,

                // Explanations intentionally excluded from video JSON.
                'choices' => $formattedChoices,

                'correct_answer' => [
                    'choice_id' => (int) $correctChoice->id,
                    'label' => chr(65 + $correctIndex),
                    'text' => (string) $correctChoice->choice_text,
                ],
            ];
        }

        return [
            'format_version' => '1.0',

            'video' => [
                'id' => (int) $videoSet->id,
                'title' => $videoSet->title,
                'number' => (int) $videoSet->video_number,
                'status' => $videoSet->status,
            ],

            'major' => [
                'id' => (int) $videoSet->subject->major->id,
                'name' => $videoSet->subject->major->name,
                'slug' => $videoSet->subject->major->slug,
            ],

            'subject' => [
                'id' => (int) $videoSet->subject->id,
                'name' => $videoSet->subject->name,
                'slug' => $videoSet->subject->slug,
            ],

            'questions' => $questions,

            'meta' => [
                'question_count' => count($questions),
                'exported_at' => now()->toIso8601String(),
            ],
        ];
    }
}
