<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Subject;
use App\Models\VideoSetQuestion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class VideoQuestionSelector
{
    /** Bounded, request-local text metadata; never caches live usage claims. */
    private array $textSignatures = [];
    /** Read-only pool shared by preparation, availability counts and local reconciliation. */
    public function eligibilityForSubject(int $subjectId, ?string $difficulty = null, ?string $language = null, ?string $template = null,
        array $ignoreAssignmentIds = [], array $ignoreOperationIds = []): array
    {
        return $this->selectForSubject($subjectId, difficulty: $difficulty, language: $language, template: $template,
            includeEligibility: true, ignoreAssignmentIds: $ignoreAssignmentIds, ignoreOperationIds: $ignoreOperationIds);
    }

    public function selectForSubject(
        int $subjectId,
        int $requestedCount = 20,
        ?string $difficulty = null,
        bool $allowReuse = false,
        ?int $ignoreVideoSetId = null,
        array $excludeQuestionIds = [],
        array $excludeSimilarTexts = [],
        ?string $language = null,
        ?string $template = null,
        bool $includeEligibility = false,
        array $ignoreAssignmentIds = [],
        array $ignoreOperationIds = [],
    ): array {
        Subject::query()->where('is_active', true)->whereHas('major', fn ($q) => $q->where('is_active', true))->findOrFail($subjectId);
        abort_unless($language === null || in_array($language, ['fr', 'en', 'ar'], true), 422, 'Unsupported content language.');
        abort_unless($template === null || in_array($template, ['long', 'five-seconds', 'defi-du-jour', 'niveau-concours'], true), 422, 'Unsupported quiz template.');
        $difficulty = trim((string) $difficulty) ?: null;
        $short = $template !== null && $template !== 'long';
        $usageTemplate = $template ?? 'long';
        $legacyAssignments = VideoSetQuestion::restrictsVideoReuse($usageTemplate)
            ->when($ignoreAssignmentIds !== [], fn ($q) => $q->whereNotIn('id', $ignoreAssignmentIds))
            ->when($ignoreVideoSetId !== null, fn ($q) => $q->where('video_set_id', '!=', $ignoreVideoSetId))
            ->with(['videoSet:id,subject_id', 'question:id,question'])->get(['id', 'video_set_id', 'question_id']);
        $legacyLookup = []; $legacyTexts = [];
        if (! $allowReuse) foreach ($legacyAssignments as $assignment) {
            // Exact and historical wording exclusions share the selected template.
            $legacyLookup[\App\Services\ContentUsage\Fingerprint::quizVideoKey('question:id:'.$assignment->question_id, $usageTemplate)] = true;
            if (! $assignment->question) continue;
            $text = (string) $assignment->question->question;
            $key = 'question:text:'.hash('sha256', 'text-v1:'.\App\Services\ContentUsage\Fingerprint::normalize($text));
            $legacyLookup[\App\Services\ContentUsage\Fingerprint::quizVideoKey($key, $usageTemplate)] = true;
            if ((int) $assignment->videoSet?->subject_id === $subjectId) $legacyTexts[] = $this->normalizeText($text);
        }
        $candidates = Question::query()->whereHas('quiz', function (Builder $query) use ($subjectId, $difficulty) {
            $query->where('subject_id', $subjectId)->where('is_active', true);
            if ($difficulty !== null) $query->where('difficulty', $difficulty);
        })->with(['quiz.subject.major', 'choices' => fn ($q) => $q->orderBy('order')->orderBy('id')])->orderBy('id')->get();
        $sources = $candidates->filter(fn ($q) => trim((string) $q->question) !== '')
            ->mapWithKeys(fn ($q) => [$q->id => \App\Services\ContentUsage\Fingerprint::quizVideo($q, $usageTemplate)])->all();
        $blockers = app(\App\Services\ContentUsage\Registry::class)->blockers(array_values($sources));
        // Read-only repair projections may release nominated stale reservations,
        // but must never project away successfully consumed content.
        $ignoredOperations = array_fill_keys($ignoreOperationIds, true);
        $blockers = array_filter($blockers, fn ($blocker) => $blocker->status === 'used' || ! isset($ignoredOperations[$blocker->id]));
        $stats = ['total_candidates' => $candidates->count(), 'skipped_used' => 0, 'skipped_invalid' => 0,
            'skipped_low_score' => 0, 'skipped_language' => 0, 'skipped_template' => 0,
            'skipped_duplicates' => 0, 'skipped_batch' => 0, 'consumed' => 0, 'reserved' => 0, 'legacy_restricted' => 0];
        $minimumScore = (int) config('video_selection.minimum_selection_score', 45);
        $scored = [];
        foreach ($candidates as $question) {
            if ($language !== null && ! app(VideoSetJsonExporter::class)->matchesContentLanguage((string) $question->question, $language)) {
                $stats['skipped_language']++; continue;
            }
            $analysis = $this->scoreQuestion($question);
            if ($analysis === null) { $stats['skipped_invalid']++; continue; }
            if ($short && ($question->choices->count() !== 4 || ($template === 'five-seconds' && trim((string) $question->explanation) === ''))) {
                $stats['skipped_template']++; continue;
            }
            if ($analysis['score'] < $minimumScore) { $stats['skipped_low_score']++; continue; }
            $blocker = null;
            foreach ($sources[$question->id]['identity_keys'] ?? [] as $key) {
                if (isset($blockers[$key]) && ($blocker === null || $blockers[$key]->status === 'used')) $blocker = $blockers[$key];
            }
            $legacyBlocked = array_filter($sources[$question->id]['identity_keys'] ?? [], fn ($key) => isset($legacyLookup[$key])) !== [];
            $status = $blocker?->status ?? ($legacyBlocked ? 'legacy_restricted' : 'available');
            if ($status === 'available' && $this->hasNearDuplicate($this->normalizeText((string) $question->question), $legacyTexts,
                min(100, max(0, (float) config('video_selection.duplicate_similarity_threshold', 88))))) $status = 'legacy_restricted';
            $scored[] = ['question' => $question, 'score' => $analysis['score'], 'breakdown' => $analysis['breakdown'],
                'reasons' => $analysis['reasons'], 'status' => $status, 'operation' => $blocker];
        }
        // Blocking evidence takes precedence within a near-duplicate group. Drafts
        // never supply global blocking evidence; exclusions below are batch-local.
        $priority = ['used' => 0, 'reserved' => 1, 'legacy_restricted' => 2, 'available' => 3];
        usort($scored, fn ($a, $b) => ($priority[$a['status']] <=> $priority[$b['status']])
            ?: ($b['score'] <=> $a['score']) ?: ($a['question']->id <=> $b['question']->id));
        $threshold = min(100, max(0, (float) config('video_selection.duplicate_similarity_threshold', 88)));
        $seenTexts = [];
        $pool = [];
        $available = [];
        foreach ($scored as $item) {
            $normalized = $this->normalizeText((string) $item['question']->question);
            if ($this->hasNearDuplicate($normalized, $seenTexts, $threshold)) { $stats['skipped_duplicates']++; continue; }
            $seenTexts[] = $normalized;
            $pool[] = $item;
            if ($item['status'] === 'available') $available[] = $item;
            elseif ($item['status'] === 'used') $stats['consumed']++;
            elseif ($item['status'] === 'reserved') $stats['reserved']++;
            else $stats['legacy_restricted']++;
        }
        $stats['skipped_used'] = $stats['consumed'] + $stats['reserved'] + $stats['legacy_restricted'];
        $stats += ['available' => count($available), 'eligible_unused' => count($available), 'total_eligible' => count($pool)];
        $result = ['subject_id' => $subjectId, 'difficulty' => $difficulty, 'allow_reuse' => $allowReuse,
            'stats' => $stats, 'eligibility' => $pool];
        return $this->selectFromPool($result, $requestedCount, $excludeQuestionIds, $excludeSimilarTexts, $includeEligibility);
    }

    /** Reuse one validated pool within a preparation request. Actual generation
     * still atomically revalidates/reserves the approved snapshot in the registry.
     */
    public function selectFromPool(array $pool, int $requestedCount, array $excludeQuestionIds = [],
        array $excludeSimilarTexts = [], bool $includeEligibility = false): array
    {
        $limit = min(max(1, $requestedCount), max(1, (int) config('video_selection.max_questions_per_video', 30)));
        $batchLookup = array_fill_keys(array_map('intval', $excludeQuestionIds), true);
        $excludedTexts = array_values(array_filter(array_map(fn ($text) => $this->normalizeText((string) $text), $excludeSimilarTexts)));
        $threshold = min(100, max(0, (float) config('video_selection.duplicate_similarity_threshold', 88)));
        $eligible = []; $available = []; $stats = $pool['stats'];
        foreach ($pool['eligibility'] as $item) {
            if ($item['status'] === 'available' && (isset($batchLookup[$item['question']->id])
                || $this->hasNearDuplicate($this->normalizeText((string) $item['question']->question), $excludedTexts, $threshold))) {
                $stats['skipped_batch']++; continue;
            }
            $eligible[] = $item;
            if ($item['status'] === 'available') $available[] = $item;
        }
        $questions = [];
        foreach (array_slice($available, 0, $limit) as $item) {
            $question = $item['question'];
            $questions[] = ['id' => (int) $question->id, 'quiz_id' => (int) $question->quiz_id,
                'quiz_title' => $question->quiz?->title, 'text' => (string) $question->question,
                'type' => $question->type, 'marks' => $question->marks, 'difficulty' => $question->quiz?->difficulty,
                'choices' => $question->choices->values()->map(fn ($choice, $index) => ['id' => (int) $choice->id,
                    'label' => chr(65 + $index), 'text' => (string) $choice->choice_text,
                    'is_correct' => (bool) $choice->is_correct, 'order' => (int) $choice->order])->all(),
                'selection' => ['score' => $item['score'], 'breakdown' => $item['breakdown'], 'reasons' => $item['reasons']]];
        }
        $stats = array_replace($stats, ['available' => count($available), 'eligible_unused' => count($available), 'total_eligible' => count($eligible),
            'selected_count' => count($questions), 'shortfall' => max(0, $limit - count($questions))]);
        $result = array_diff_key($pool, ['eligibility' => true]);
        $result = array_replace($result, ['requested_count' => $requestedCount, 'limit_applied' => $limit, 'stats' => $stats, 'questions' => $questions]);
        if ($includeEligibility) $result['eligibility'] = $eligible;
        return $result;
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
        $a = $this->textSignature($normalizedText);
        foreach ($otherNormalizedTexts as $other) {
            if ($normalizedText === $other) {
                return true;
            }

            $b = $this->textSignature($other);
            $lengthA = $a['length'];
            $lengthB = $b['length'];

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

            // similar_text works on bytes. Even its best possible match cannot
            // contain more occurrences of a byte than either input supplies.
            // This exact upper bound skips expensive comparisons without changing
            // the existing similarity threshold or Arabic normalization rules.
            $common = 0;
            foreach ($a['bytes'] as $byte => $count) $common += min($count, $b['bytes'][$byte] ?? 0);
            if ((200 * $common / ($a['size'] + $b['size'])) + 1e-9 < $threshold) continue;

            similar_text($normalizedText, $other, $similarity);

            if ($similarity >= $threshold) {
                return true;
            }
        }

        return false;
    }

    private function textSignature(string $text): array
    {
        if (isset($this->textSignatures[$text])) return $this->textSignatures[$text];
        $signature = ['length' => Str::length($text), 'size' => strlen($text), 'bytes' => count_chars($text, 1)];
        if (count($this->textSignatures) < 2048) $this->textSignatures[$text] = $signature;
        return $signature;
    }
}
