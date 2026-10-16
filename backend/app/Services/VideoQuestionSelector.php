<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Subject;
use App\Models\VideoSetQuestion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class VideoQuestionSelector
{
    public function selectForSubject(
        int $subjectId,
        int $requestedCount = 20,
        ?string $difficulty = null,
        bool $allowReuse = false,
        ?int $ignoreVideoSetId = null,
        array $excludeQuestionIds = [],
        array $excludeSimilarTexts = [],
    ): array {
        Subject::query()->findOrFail($subjectId);

        $maximum = max(
            1,
            (int) config('video_selection.max_questions_per_video', 30)
        );

        $limit = min(max(1, $requestedCount), $maximum);

        $difficulty = $difficulty !== null && trim($difficulty) !== ''
            ? trim($difficulty)
            : null;

        $usedQuestionIds = [];
        $previousUsedTexts = [];

        if (!$allowReuse) {
            $usedQuery = VideoSetQuestion::query();

            if ($ignoreVideoSetId !== null) {
                $usedQuery->where(
                    'video_set_id',
                    '!=',
                    $ignoreVideoSetId
                );
            }

            $usedQuestionIds = $usedQuery
                ->distinct()
                ->pluck('question_id')
                ->map(fn ($id) => (int) $id)
                ->all();

            $usedSubjectQuestionIds = VideoSetQuestion::query()
                ->whereHas('videoSet', function (Builder $query) use ($subjectId) {
                    $query->where('subject_id', $subjectId);
                })
                ->when(
                    $ignoreVideoSetId !== null,
                    fn (Builder $query) => $query->where(
                        'video_set_id',
                        '!=',
                        $ignoreVideoSetId
                    )
                )
                ->distinct()
                ->pluck('question_id');

            $previousUsedTexts = Question::query()
                ->whereIn('id', $usedSubjectQuestionIds)
                ->pluck('question')
                ->map(fn ($text) => $this->normalizeText((string) $text))
                ->filter()
                ->values()
                ->all();
        }

        // Exclude specific question IDs, such as questions already
        // assigned to the video currently being edited.
        $usedIdLookup = array_fill_keys($usedQuestionIds, true);

        foreach ($excludeQuestionIds as $excludedId) {
            $usedIdLookup[(int) $excludedId] = true;
        }

        // Normalize texts that must not appear again in the same video.
        $excludedNormalizedTexts = [];

        foreach ($excludeSimilarTexts as $excludedText) {
            $normalized = $this->normalizeText((string) $excludedText);

            if ($normalized !== '') {
                $excludedNormalizedTexts[] = $normalized;
            }
        }

        $candidates = Question::query()
            ->whereHas('quiz', function (Builder $query) use (
                $subjectId,
                $difficulty
            ) {
                $query->where('subject_id', $subjectId)
                    ->where('is_active', true);

                if ($difficulty !== null) {
                    $query->where('difficulty', $difficulty);
                }
            })
            ->with([
                'quiz:id,subject_id,title,difficulty',
                'choices' => fn ($query) => $query
                    ->orderBy('order')
                    ->orderBy('id'),
            ])
            ->orderBy('id')
            ->get();

        $scored = [];
        $skippedUsed = 0;
        $skippedInvalid = 0;
        $skippedLowScore = 0;

        $minimumScore = (int) config(
            'video_selection.minimum_selection_score',
            45
        );

        foreach ($candidates as $question) {
            if (isset($usedIdLookup[$question->id])) {
                $skippedUsed++;
                continue;
            }

            $analysis = $this->scoreQuestion($question);

            if ($analysis === null) {
                $skippedInvalid++;
                continue;
            }

            if ($analysis['score'] < $minimumScore) {
                $skippedLowScore++;
                continue;
            }

            $scored[] = [
                'question' => $question,
                'score' => $analysis['score'],
                'breakdown' => $analysis['breakdown'],
                'reasons' => $analysis['reasons'],
            ];
        }

        // Highest score first; use ID as a deterministic tie-breaker.
        usort($scored, function (array $a, array $b): int {
            $comparison = $b['score'] <=> $a['score'];

            return $comparison !== 0
                ? $comparison
                : ($a['question']->id <=> $b['question']->id);
        });

        $threshold = (float) config(
            'video_selection.duplicate_similarity_threshold',
            88
        );

        $threshold = min(100, max(0, $threshold));

        $selected = [];
        $selectedTexts = [];
        $skippedDuplicates = 0;

        foreach ($scored as $item) {
            $normalized = $this->normalizeText(
                (string) $item['question']->question
            );

            $duplicatesPreviouslyUsed = !$allowReuse
                && $this->hasNearDuplicate(
                    $normalized,
                    $previousUsedTexts,
                    $threshold
                );

            $duplicatesInCurrentVideo = $this->hasNearDuplicate(
                $normalized,
                $excludedNormalizedTexts,
                $threshold
            );

            $duplicatesSelected = $this->hasNearDuplicate(
                $normalized,
                $selectedTexts,
                $threshold
            );

            if (
                $duplicatesPreviouslyUsed
                || $duplicatesInCurrentVideo
                || $duplicatesSelected
            ) {
                $skippedDuplicates++;
                continue;
            }

            $selected[] = $item;
            $selectedTexts[] = $normalized;

            if (count($selected) >= $limit) {
                break;
            }
        }

        $formattedQuestions = [];

        foreach ($selected as $item) {
            /** @var Question $question */
            $question = $item['question'];

            $choices = $question->choices
                ->values()
                ->map(function ($choice, int $index): array {
                    return [
                        'id' => (int) $choice->id,
                        'label' => chr(65 + $index),
                        'text' => (string) $choice->choice_text,
                        'is_correct' => (bool) $choice->is_correct,
                        'order' => (int) $choice->order,
                    ];
                })
                ->all();

            $formattedQuestions[] = [
                'id' => (int) $question->id,
                'quiz_id' => (int) $question->quiz_id,
                'quiz_title' => $question->quiz?->title,
                'text' => (string) $question->question,
                'type' => $question->type,
                'marks' => $question->marks,
                'difficulty' => $question->quiz?->difficulty,
                'choices' => $choices,
                'selection' => [
                    'score' => $item['score'],
                    'breakdown' => $item['breakdown'],
                    'reasons' => $item['reasons'],
                ],
            ];
        }

        return [
            'subject_id' => $subjectId,
            'requested_count' => $requestedCount,
            'limit_applied' => $limit,
            'difficulty' => $difficulty,
            'allow_reuse' => $allowReuse,

            'stats' => [
                'total_candidates' => $candidates->count(),
                'skipped_used' => $skippedUsed,
                'skipped_invalid' => $skippedInvalid,
                'skipped_low_score' => $skippedLowScore,
                'eligible_unused' => count($scored),
                'skipped_duplicates' => $skippedDuplicates,
                'selected_count' => count($formattedQuestions),
                'shortfall' => max(
                    0,
                    $limit - count($formattedQuestions)
                ),
            ],

            'questions' => $formattedQuestions,
        ];
    }

    private function scoreQuestion(Question $question): ?array
    {
        $text = trim((string) $question->question);
        $length = Str::length($text);

        $minimumLength = (int) config(
            'video_selection.minimum_question_characters',
            8
        );

        $maximumLength = (int) config(
            'video_selection.maximum_question_characters',
            500
        );

        if (
            $text === ''
            || $length < $minimumLength
            || $length > $maximumLength
        ) {
            return null;
        }

        if ($this->normalizeText($text) === '') {
            return null;
        }

        $choices = $question->choices;

        if (
            $choices->count()
            < (int) config('video_selection.minimum_choices', 2)
        ) {
            return null;
        }

        $correctCount = $choices
            ->filter(fn ($choice) => (bool) $choice->is_correct)
            ->count();

        if (
            config('video_selection.require_exactly_one_correct_choice', true)
            && $correctCount !== 1
        ) {
            return null;
        }

        $rejectDuplicates = (bool) config(
            'video_selection.reject_duplicate_choice_texts',
            true
        );

        $seenChoiceTexts = [];

        foreach ($choices as $choice) {
            $choiceText = trim((string) $choice->choice_text);
            $normalizedChoice = $this->normalizeText($choiceText);

            if ($choiceText === '' || $normalizedChoice === '') {
                return null;
            }

            if (
                $rejectDuplicates
                && isset($seenChoiceTexts[$normalizedChoice])
            ) {
                return null;
            }

            $seenChoiceTexts[$normalizedChoice] = true;
        }

        $score = 0;
        $breakdown = [];
        $reasons = [];

        $weights = config('video_selection.weights', []);

        $addBonus = function (
            string $key,
            string $reason
        ) use (&$score, &$breakdown, &$reasons, $weights): void {
            $points = (int) ($weights[$key] ?? 0);

            if ($points <= 0) {
                return;
            }

            $score += $points;
            $breakdown[$key] = $points;
            $reasons[] = "{$reason} (+{$points})";
        };

        if ($correctCount === 1) {
            $addBonus(
                'one_correct_answer',
                'Exactly one correct answer'
            );
        }

        $addBonus(
            'distinct_choices',
            'All answer choices are distinct'
        );

        $choiceWeight = match ($choices->count()) {
            4 => 'four_choices',
            3 => 'three_choices',
            2 => 'two_choices',
            default => 'other_choice_count',
        };

        $addBonus(
            $choiceWeight,
            $choices->count() . ' answer choices'
        );

        $ideal = config('video_selection.ideal_question_length', [
            'min' => 30,
            'max' => 180,
        ]);

        $acceptable = config('video_selection.acceptable_question_length', [
            'min' => 8,
            'max' => 300,
        ]);

        if ($length >= $ideal['min'] && $length <= $ideal['max']) {
            $addBonus(
                'ideal_question_length',
                'Question length is in the preferred range'
            );
        } elseif (
            $length >= $acceptable['min']
            && $length <= $acceptable['max']
        ) {
            $addBonus(
                'acceptable_question_length',
                'Question length is acceptable'
            );
        }

        $lowerText = Str::lower($text);
        $hasQuestionSignal = preg_match('/[?؟]/u', $text) === 1;

        if (!$hasQuestionSignal) {
            foreach (config('video_selection.question_starters', []) as $starter) {
                $starter = Str::lower(trim((string) $starter));

                if ($starter !== '' && Str::startsWith($lowerText, $starter)) {
                    $hasQuestionSignal = true;
                    break;
                }
            }
        }

        if ($hasQuestionSignal) {
            $addBonus(
                'question_mark_or_starter',
                'Recognizable question wording'
            );
        }

        foreach (config('video_selection.reasoning_keywords', []) as $keyword) {
            $keyword = Str::lower(trim((string) $keyword));

            if ($keyword !== '' && Str::contains($lowerText, $keyword)) {
                $addBonus(
                    'reasoning_signal',
                    'Contains a reasoning-related keyword'
                );

                break;
            }
        }

        if (trim((string) $question->explanation) !== '') {
            $addBonus(
                'has_explanation',
                'An explanation is available on Maroquiz'
            );
        }

        return [
            'score' => min(100, $score),
            'breakdown' => $breakdown,
            'reasons' => $reasons,
        ];
    }

    private function normalizeText(string $text): string
    {
        $text = Str::lower(trim($text));

        // Remove common Arabic diacritics before comparison.
        $text = preg_replace(
            '/[\x{064B}-\x{065F}\x{0670}]/u',
            '',
            $text
        ) ?? $text;

        $text = preg_replace('/[^\p{L}\p{N}]+/u', ' ', $text) ?? $text;
        $text = preg_replace('/\s+/u', ' ', $text) ?? $text;

        return trim($text);
    }

    private function hasNearDuplicate(
        string $normalizedText,
        array $otherNormalizedTexts,
        float $threshold
    ): bool {
        foreach ($otherNormalizedTexts as $other) {
            if ($normalizedText === $other) {
                return true;
            }

            $lengthA = Str::length($normalizedText);
            $lengthB = Str::length($other);

            if ($lengthA === 0 || $lengthB === 0) {
                continue;
            }

            // Skip comparisons that cannot reach the threshold.
            $maximumPossible = (
                2 * min($lengthA, $lengthB)
                / ($lengthA + $lengthB)
            ) * 100;

            if ($maximumPossible < $threshold) {
                continue;
            }

            similar_text($normalizedText, $other, $similarity);

            if ($similarity >= $threshold) {
                return true;
            }
        }

        return false;
    }
}
