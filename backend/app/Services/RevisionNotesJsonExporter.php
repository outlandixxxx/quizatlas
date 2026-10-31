<?php

namespace App\Services;

use App\Models\Quiz;
use Illuminate\Validation\ValidationException;

class RevisionNotesJsonExporter
{
    /**
     * Build the revision JSON data for one quiz.
     */
    public function build(Quiz $quiz, bool $includeCorrections = false): array
    {
        $quiz->load([
            'subject.major',
            'questions' => fn ($query) => $query->orderBy('order', 'asc')->orderBy('id', 'asc'),
        ]);
        if ($includeCorrections) {
            $quiz->questions->load(['choices' => fn ($query) => $query->orderBy('order')->orderBy('id')]);
        }

        if ($quiz->questions->isEmpty()) {
            throw ValidationException::withMessages([
                'quiz' => 'Cannot generate revision JSON: this quiz has no questions.',
            ]);
        }

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

        $data = [
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
                    'question_id' => $question->id,
                    'order' => $question->order,
                    'explanation' => $question->explanation,
                ]
            )->values()->all(),

            'meta' => [
                'total_explanations' => $quiz->questions->count(),
                'exported_at' => now()->utc()->toIso8601ZuluString(),
                'format_version' => '1.1',
            ],
        ];
        if ($includeCorrections) {
            $issues = [];
            $questions = $quiz->questions->map(function ($question) use (&$issues) {
                $problem = function (string $code, string $reason) use ($question, &$issues): void {
                    $issues[] = ['question_id' => $question->id, 'order' => $question->order, 'code' => $code,
                        'message' => "Question {$question->order} (#{$question->id}): {$reason}"];
                };
                if (! is_string($question->question) || trim($question->question) === '') $problem('missing_question', 'the question text is empty. Review it in quiz administration.');
                if (! in_array($question->type, ['single_choice', 'multiple_choice', 'true_false'], true)) $problem('unsupported_type', 'this question type is unsupported.');
                $choices = $question->choices;
                $correct = $choices->filter(fn ($choice) => (bool) $choice->is_correct)->values();
                if ($choices->isEmpty() || $correct->isEmpty()) $problem('missing_answer', 'no stored correct answer is available. Review the choices.');
                if (in_array($question->type, ['single_choice', 'true_false'], true) && $correct->count() !== 1) $problem('contradictory_answers', 'this type requires exactly one stored correct choice.');
                if ($correct->contains(fn ($choice) => ! is_string($choice->choice_text) || trim($choice->choice_text) === '')) $problem('missing_answer_text', 'a correct choice has empty text.');
                if ($question->type === 'true_false') {
                    $values = $choices->map(fn ($choice) => $this->truthValue($choice->choice_text))->all();
                    if (count($values) !== 2 || ! in_array(true, $values, true) || ! in_array(false, $values, true)) $problem('unsupported_truth_value', 'true/false requires two unambiguous True/False, Vrai/Faux or صحيح/خطأ choices. Choice positions are never used to guess truth.');
                }
                foreach (array_merge([$question->question, $question->explanation], $correct->pluck('choice_text')->all()) as $text) {
                    if ($this->hasEmbeddedMedia((string) $text)) { $problem('unsupported_media', 'embedded images, diagrams or media require an unsupported asset. This quiz cannot be exported as complete corrected questions.'); break; }
                }
                return ['question_id' => $question->id, 'quiz_id' => $question->quiz_id, 'order' => $question->order,
                    'type' => $question->type, 'question' => $question->question,
                    'correct_answers' => $correct->map(fn ($choice) => ['choice_id' => $choice->id, 'question_id' => $choice->question_id,
                        'order' => $choice->order, 'text' => $choice->choice_text,
                        'truth_value' => $question->type === 'true_false' ? $this->truthValue($choice->choice_text) : null])->all()];
            })->all();
            // Opt-in extension: original v1.1 fields and default JSON/copy contract are unchanged.
            $data['correction'] = ['format_version' => 'corrected-questions-v1', 'questions' => $questions, 'issues' => $issues];
        }
        return $data;
    }

    private function truthValue(?string $text): ?bool
    {
        return match (mb_strtolower(trim($text ?? ''), 'UTF-8')) {
            'true', 'vrai', 'صحيح' => true,
            'false', 'faux', 'خطأ' => false,
            default => null,
        };
    }

    private function hasEmbeddedMedia(string $text): bool
    {
        return preg_match('/!\[[^\]]*\]\s*\(|<(?:img|image|video|audio|iframe|object|embed)\b[^>]*(?:src|data|href)\s*=|<svg\b[^>]*>/iu', $text) === 1;
    }
}
