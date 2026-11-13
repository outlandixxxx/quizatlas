<?php

namespace App\Services;

use App\Models\VideoSet;
use Illuminate\Support\Str;

class VideoSetJsonExporter
{
    /** Existing questions have no locale column. Arabic script is authoritative;
     * the admin confirms FR/EN for Latin text, without translating stored text.
     * A French question quoting a short Arabic term remains French.
     */
    public function contentLanguage(string $text, ?string $confirmed): string
    {
        abort_unless(in_array($confirmed, ['fr', 'en', 'ar'], true), 422, 'Confirm the source content language.');
        $arabic = preg_match_all('/\p{Arabic}/u', $text);
        $latin = preg_match_all('/\p{Latin}/u', $text);
        if ($arabic > $latin) {
            return 'ar';
        }
        abort_if($latin > $arabic && $confirmed === 'ar', 422, 'This question uses Latin text. Confirm French or English before approval.');
        return $confirmed;
    }

    public function build(VideoSet $videoSet, ?string $template = null, ?string $language = null): array
    {
        abort_unless($template === null || in_array($template, ['five-seconds', 'defi-du-jour', 'niveau-concours'], true), 422, 'Unsupported quiz template.');
        $short = $template !== null;
        abort_unless(! $short || in_array($language, ['fr', 'ar', 'en'], true), 422, 'Choose the Short language.');
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
        abort_unless(! $short || $videoSet->videoSetQuestions->count() === 1, 422, 'Prepare one question per video for this Short.');

        $questions = [];

        foreach ($videoSet->videoSetQuestions as $assignment) {
            $question = $assignment->question;

            if (! $question) {
                abort(422, 'An assigned question is unavailable.');
            }

            if ($short) {
                $language = $this->contentLanguage((string) $question->question, $language);
            }

            $choices = $question->choices->values();
            abort_unless(! $short || $choices->count() === 4, 422, 'This Short requires four stored choices. Preview and replace an unsuitable question.');
            abort_unless($template !== 'five-seconds' || trim((string) $question->explanation) !== '', 422, '5 Secondes requires an existing explanation. Preview and replace an unsuitable question.');

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
                ...($short ? ['language' => $language] : []),

                // Portrait templates opt into stored source metadata; the legacy shape stays intact.
                ...($short ? ['explanation' => (string) $question->explanation, 'quiz_title' => $question->quiz->title] : []),
                'choices' => $formattedChoices,

                'correct_answer' => [
                    'choice_id' => (int) $correctChoice->id,
                    'label' => chr(65 + $correctIndex),
                    'text' => (string) $correctChoice->choice_text,
                ],
            ];
        }

        return [
            'format_version' => $short ? '1.1' : '1.0',

            'video' => [
                'id' => (int) $videoSet->id,
                'title' => $videoSet->title,
                'number' => (int) $videoSet->video_number,
                'status' => $videoSet->status,
                ...($short ? ['template' => $template, 'language' => $language] : []),
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
