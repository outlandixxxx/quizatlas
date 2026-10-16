<?php

namespace App\Services;

use App\Models\Question;
use App\Models\SocialPost;
use App\Models\SocialQuestionExclusion;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Picks the best questions for social media formats:
 * WhatsApp/Telegram "question du jour", Canva quiz short,
 * Facebook group mini-quiz.
 *
 * Separate from VideoQuestionSelector on purpose:
 * - social formats need stricter limits (short text, 4 choices,
 *   explanation required for the evening answer);
 * - their usage is tracked in social_posts, not video_set_questions,
 *   so long videos and social posts keep independent histories.
 *
 * Score out of 100 (questions under MINIMUM_SCORE are never published):
 *   20  short, readable question
 *   10  worded as a real question (ends with "?", or ":" / "…" for a QCM stem)
 *   20  answers of similar length
 *   15  explanation that fits a WhatsApp answer
 *   10  no "all / none of the above" answer
 *   25  real players' success rate (15 = neutral until enough data)
 *  -15  correct answer is clearly the longest (gives it away)
 *  -10  correct answer repeats words from the question (gives it away)
 */
class SocialQuestionSelector
{
    public const PROFILE_SHORT = 'short';
    public const PROFILE_GROUP = 'group';

    /**
     * Limits per format. Adjust here if too few questions qualify.
     */
    public const PROFILES = [
        // One question on a 9:16 video or in a WhatsApp message.
        self::PROFILE_SHORT => [
            'max_question_chars' => 110,
            'max_choice_chars' => 40,
            'exact_choices' => 4,
        ],
        // Text post in a Facebook group: more room to read.
        self::PROFILE_GROUP => [
            'max_question_chars' => 180,
            'max_choice_chars' => 90,
            'exact_choices' => null,
        ],
    ];

    /** Questions scoring below this are never published. */
    public const MINIMUM_SCORE = 60;

    /** Real-player rules: only applied once a question has enough answers. */
    public const MIN_ANSWERS_FOR_STATS = 20;
    public const TOO_EASY_RATE = 0.90;   // more than 90% right: skipped
    public const TOO_HARD_RATE = 0.25;   // less than 25% right: skipped
    private const IDEAL_RATE = 0.55;     // best engagement: people hesitate
    private const IDEAL_RATE_WIDTH = 0.35;
    private const NEUTRAL_STATS_POINTS = 15;

    /** When strict limits give too few questions, retry with this much more room. */
    private const RELAX_FACTOR = 1.3;

    private const DUPLICATE_THRESHOLD = 88.0;

    /** Answers that don't work in a 5-second video or a quick post. */
    private const WEAK_CHOICE_PATTERNS = [
        'toutes les réponses',
        'toutes ces réponses',
        'aucune de ces',
        'aucune des réponses',
        'all of the above',
        'none of the above',
        'جميع ما سبق',
        'لا شيء مما سبق',
    ];

    /** Common words ignored when checking if the answer repeats the question. */
    private const STOP_WORDS = [
        'dans', 'pour', 'avec', 'quel', 'quelle', 'quels', 'quelles', 'cette',
        'sont', 'leur', 'leurs', 'entre', 'comme', 'plus', 'moins', 'tout',
        'tous', 'toute', 'toutes', 'elle', 'elles', 'nous', 'vous', 'mais',
        'what', 'which', 'with', 'from', 'that', 'this', 'have', 'does',
        'when', 'where', 'there', 'their', 'they', 'into', 'than',
    ];

    /** Counters from the last select() call, useful when a subject runs dry. */
    private array $lastSkips = [];

    /**
     * @param  string[]  $difficulties            e.g. ['Beginner'] or ['Beginner', 'Intermediate']
     * @param  int[]     $excludeQuestionIds      questions already in the current pack
     * @param  string[]  $excludeNormalizedTexts  texts (normalized) already in the current pack
     * @return array{questions: array<int, array>, candidate_count: int, skipped: array<string, int>}
     */
    public function select(
        int $subjectId,
        string $profile,
        int $count,
        array $difficulties = ['Beginner'],
        array $excludeQuestionIds = [],
        array $excludeNormalizedTexts = [],
    ): array {
        $count = max(1, $count);
        $limits = self::PROFILES[$profile] ?? self::PROFILES[self::PROFILE_SHORT];

        $candidates = $this->loadCandidates(
            $subjectId,
            $difficulties,
            $excludeQuestionIds
        );

        $answerStats = $this->loadAnswerStats(
            $candidates->pluck('id')->map(fn ($id) => (int) $id)->all()
        );

        $this->lastSkips = [
            'not_suitable' => 0,
            'too_easy' => 0,
            'too_hard' => 0,
            'low_score' => 0,
        ];

        $selected = $this->pick(
            $candidates,
            $answerStats,
            $limits,
            $count,
            $excludeNormalizedTexts,
            [],
            false
        );

        if (count($selected) < $count) {
            $relaxedLimits = $limits;
            $relaxedLimits['max_question_chars'] = (int) ceil(
                $limits['max_question_chars'] * self::RELAX_FACTOR
            );
            $relaxedLimits['max_choice_chars'] = (int) ceil(
                $limits['max_choice_chars'] * self::RELAX_FACTOR
            );

            $selectedTexts = array_map(
                fn (array $question) => self::normalizeText($question['text']),
                $selected
            );

            $more = $this->pick(
                $candidates,
                $answerStats,
                $relaxedLimits,
                $count - count($selected),
                array_merge($excludeNormalizedTexts, $selectedTexts),
                array_column($selected, 'id'),
                true
            );

            $selected = array_merge($selected, $more);
        }

        return [
            'questions' => $selected,
            'candidate_count' => $candidates->count(),
            'skipped' => $this->lastSkips,
        ];
    }

    private function loadCandidates(
        int $subjectId,
        array $difficulties,
        array $excludeQuestionIds
    ): Collection {
        $usedOnSocial = SocialPost::query()
            ->whereNotNull('question_id')
            ->distinct()
            ->pluck('question_id')
            ->map(fn ($id) => (int) $id)
            ->all();

        $neverUse = SocialQuestionExclusion::query()
            ->pluck('question_id')
            ->map(fn ($id) => (int) $id)
            ->all();

        $exclude = array_values(array_unique(array_merge(
            $usedOnSocial,
            $neverUse,
            array_map('intval', $excludeQuestionIds)
        )));

        return Question::query()
            ->whereHas('quiz', function (Builder $query) use (
                $subjectId,
                $difficulties
            ) {
                $query->where('subject_id', $subjectId)
                    ->where('is_active', true)
                    // Never publish questions from teachers' own quizzes.
                    ->whereNull('owner_id');

                if ($difficulties !== []) {
                    $query->whereIn('difficulty', $difficulties);
                }
            })
            ->whereNotNull('explanation')
            ->when(
                $exclude !== [],
                fn (Builder $query) => $query->whereNotIn('id', $exclude)
            )
            ->with([
                'quiz:id,subject_id,title,difficulty',
                'choices' => fn ($query) => $query
                    ->orderBy('order')
                    ->orderBy('id'),
            ])
            ->orderBy('id')
            ->get();
    }

    /**
     * Real answers from players, per question, on submitted attempts only.
     * An attempt counts as right when exactly one choice was picked and it
     * is the correct one.
     *
     * @param  int[]  $questionIds
     * @return array<int, array{answers: int, correct: int}>
     */
    private function loadAnswerStats(array $questionIds): array
    {
        $stats = [];

        foreach (array_chunk($questionIds, 1000) as $chunk) {
            $perAttempt = DB::table('user_answers as ua')
                ->join('choices as c', 'c.id', '=', 'ua.choice_id')
                ->join('quiz_attempts as qa', 'qa.id', '=', 'ua.quiz_attempt_id')
                ->where('qa.status', 'submitted')
                ->whereIn('ua.question_id', $chunk)
                ->groupBy('ua.question_id', 'ua.quiz_attempt_id')
                ->selectRaw(
                    'ua.question_id, '
                    . 'CASE WHEN BOOL_AND(c.is_correct) AND COUNT(*) = 1 THEN 1 ELSE 0 END AS is_right'
                );

            $rows = DB::query()
                ->fromSub($perAttempt, 't')
                ->groupBy('question_id')
                ->selectRaw('question_id, COUNT(*) AS answers, SUM(is_right) AS correct')
                ->get();

            foreach ($rows as $row) {
                $stats[(int) $row->question_id] = [
                    'answers' => (int) $row->answers,
                    'correct' => (int) $row->correct,
                ];
            }
        }

        return $stats;
    }

    private function pick(
        Collection $candidates,
        array $answerStats,
        array $limits,
        int $count,
        array $excludeNormalizedTexts,
        array $excludeIds,
        bool $relaxed
    ): array {
        if ($count <= 0) {
            return [];
        }

        $excludeLookup = array_fill_keys(
            array_map('intval', $excludeIds),
            true
        );

        $scored = [];

        foreach ($candidates as $question) {
            if (isset($excludeLookup[$question->id])) {
                continue;
            }

            $analysis = $this->analyze(
                $question,
                $limits,
                $answerStats[(int) $question->id] ?? null
            );

            if (isset($analysis['skip'])) {
                // Count each question once, on the strict pass only.
                if (! $relaxed) {
                    $this->lastSkips[$analysis['skip']]++;
                }

                continue;
            }

            $scored[] = ['question' => $question] + $analysis;
        }

        // Best score first; ID as a stable tie-breaker.
        usort($scored, function (array $a, array $b): int {
            $comparison = $b['score'] <=> $a['score'];

            return $comparison !== 0
                ? $comparison
                : ($a['question']->id <=> $b['question']->id);
        });

        $selected = [];
        $texts = $excludeNormalizedTexts;

        foreach ($scored as $item) {
            $normalized = self::normalizeText(
                (string) $item['question']->question
            );

            if (self::hasNearDuplicate($normalized, $texts)) {
                continue;
            }

            $selected[] = $this->format($item, $relaxed);
            $texts[] = $normalized;

            if (count($selected) >= $count) {
                break;
            }
        }

        return $selected;
    }

    /**
     * Returns ['skip' => reason] when the question can't be used,
     * otherwise its score, the reasons behind it and the player stats.
     */
    private function analyze(Question $question, array $limits, ?array $stat): array
    {
        $text = trim((string) $question->question);
        $length = Str::length($text);

        if ($length < 10 || $length > $limits['max_question_chars']) {
            return ['skip' => 'not_suitable'];
        }

        $explanation = trim((string) $question->explanation);

        if ($explanation === '') {
            return ['skip' => 'not_suitable'];
        }

        $choices = $question->choices->values();
        $choiceCount = $choices->count();

        if ($choiceCount < 2 || $choiceCount > 5) {
            return ['skip' => 'not_suitable'];
        }

        if (
            $limits['exact_choices'] !== null
            && $choiceCount !== $limits['exact_choices']
        ) {
            return ['skip' => 'not_suitable'];
        }

        $correctChoices = $choices->filter(fn ($choice) => (bool) $choice->is_correct);

        if ($correctChoices->count() !== 1) {
            return ['skip' => 'not_suitable'];
        }

        $seen = [];
        $correctLength = 0;
        $otherLengths = [];
        $hasWeakChoice = false;

        foreach ($choices as $choice) {
            $choiceText = trim((string) $choice->choice_text);
            $normalized = self::normalizeText($choiceText);

            if ($normalized === '' || isset($seen[$normalized])) {
                return ['skip' => 'not_suitable'];
            }

            $seen[$normalized] = true;
            $choiceLength = Str::length($choiceText);

            if ($choiceLength > $limits['max_choice_chars']) {
                return ['skip' => 'not_suitable'];
            }

            if ($choice->is_correct) {
                $correctLength = max(1, $choiceLength);
            } else {
                $otherLengths[] = max(1, $choiceLength);
            }

            $lower = Str::lower($choiceText);

            foreach (self::WEAK_CHOICE_PATTERNS as $pattern) {
                if (Str::contains($lower, $pattern)) {
                    $hasWeakChoice = true;
                }
            }
        }

        // Real players: skip questions that are clearly too easy or too hard.
        $playerStats = [
            'answers' => (int) ($stat['answers'] ?? 0),
            'success_rate' => null,
        ];

        if ($playerStats['answers'] >= self::MIN_ANSWERS_FOR_STATS) {
            $rate = $stat['correct'] / $stat['answers'];
            $playerStats['success_rate'] = round($rate, 3);

            if ($rate > self::TOO_EASY_RATE) {
                return ['skip' => 'too_easy'];
            }

            if ($rate < self::TOO_HARD_RATE) {
                return ['skip' => 'too_hard'];
            }
        }

        $score = 0;
        $reasons = [];

        // 20 pts: shorter questions are easier to read in 5 seconds.
        $shortness = 1 - ($length / $limits['max_question_chars']);
        $points = (int) round(20 * max(0, $shortness));

        if ($length < 20) {
            $points = min($points, 10);
        }

        $score += $points;
        $reasons[] = "Readable length, {$length} characters (+{$points})";

        // 10 pts: worded as a real question ("…?", or a QCM stem ending with ":" / "…").
        if (preg_match('/[?؟]|[:…]\s*$/u', $text) === 1) {
            $score += 10;
            $reasons[] = 'Worded as a question (+10)';
        }

        // 20 pts: answers of similar length.
        $allLengths = array_merge([$correctLength], $otherLengths);
        $balance = min($allLengths) / max($allLengths);
        $points = (int) round(20 * $balance);
        $score += $points;
        $reasons[] = "Answers of similar length (+{$points})";

        // 15 pts: explanation that fits the 20:30 WhatsApp answer.
        $explanationLength = Str::length($explanation);

        if ($explanationLength >= 30 && $explanationLength <= 280) {
            $score += 15;
            $reasons[] = 'Explanation fits a WhatsApp answer (+15)';
        } else {
            $score += 5;
            $reasons[] = 'Explanation available (+5)';
        }

        // 10 pts: no "all / none of the above" answer.
        if (! $hasWeakChoice) {
            $score += 10;
            $reasons[] = 'No "all/none of the above" answer (+10)';
        }

        // 25 pts: real players' success rate, closest to 55% is best.
        if ($playerStats['success_rate'] !== null) {
            $distance = abs($playerStats['success_rate'] - self::IDEAL_RATE);
            $points = (int) round(25 * max(0, 1 - $distance / self::IDEAL_RATE_WIDTH));
            $percent = (int) round($playerStats['success_rate'] * 100);
            $score += $points;
            $reasons[] = "{$percent}% of {$playerStats['answers']} players got it right (+{$points})";
        } else {
            $score += self::NEUTRAL_STATS_POINTS;
            $reasons[] = 'Not enough player answers yet (+' . self::NEUTRAL_STATS_POINTS . ' neutral)';
        }

        // -15: the correct answer is clearly the longest one.
        $longestOther = $otherLengths === [] ? 0 : max($otherLengths);

        if (
            $longestOther > 0
            && $correctLength >= 1.3 * $longestOther
            && $correctLength - $longestOther >= 5
        ) {
            $score -= 15;
            $reasons[] = 'Correct answer is clearly the longest (-15)';
        }

        // -10: the correct answer repeats words from the question.
        $questionWords = array_flip(self::significantWords($text));
        $correctOverlap = 0;
        $maxOtherOverlap = 0;

        foreach ($choices as $choice) {
            $overlap = count(array_filter(
                self::significantWords((string) $choice->choice_text),
                fn (string $word) => isset($questionWords[$word])
            ));

            if ($choice->is_correct) {
                $correctOverlap = $overlap;
            } else {
                $maxOtherOverlap = max($maxOtherOverlap, $overlap);
            }
        }

        if ($correctOverlap >= 1 && $correctOverlap > $maxOtherOverlap) {
            $score -= 10;
            $reasons[] = 'Correct answer repeats words from the question (-10)';
        }

        $score = max(0, min(100, $score));

        if ($score < self::MINIMUM_SCORE) {
            return ['skip' => 'low_score'];
        }

        return [
            'score' => $score,
            'reasons' => $reasons,
            'player_stats' => $playerStats,
        ];
    }

    private function format(array $item, bool $relaxed): array
    {
        /** @var Question $question */
        $question = $item['question'];

        $choices = $question->choices
            ->values()
            ->map(fn ($choice, int $index) => [
                'id' => (int) $choice->id,
                'label' => chr(65 + $index),
                'text' => trim((string) $choice->choice_text),
                'is_correct' => (bool) $choice->is_correct,
            ])
            ->all();

        $correct = collect($choices)->firstWhere('is_correct', true);

        return [
            'id' => (int) $question->id,
            'quiz_id' => (int) $question->quiz_id,
            'quiz_title' => $question->quiz?->title,
            'subject_id' => (int) $question->quiz?->subject_id,
            'text' => trim((string) $question->question),
            'difficulty' => $question->quiz?->difficulty,
            'explanation' => trim((string) $question->explanation),
            'choices' => $choices,
            'correct' => [
                'label' => $correct['label'] ?? null,
                'text' => $correct['text'] ?? null,
            ],
            'score' => $item['score'],
            'reasons' => $item['reasons'],
            // answers = number of players; success_rate = null until enough answers.
            'player_stats' => $item['player_stats'],
            // true = picked with relaxed length limits; check it fits your template.
            'relaxed' => $relaxed,
        ];
    }

    /** @return string[] */
    private static function significantWords(string $text): array
    {
        $words = explode(' ', self::normalizeText($text));

        return array_values(array_unique(array_filter(
            $words,
            fn (string $word) => Str::length($word) >= 4
                && ! in_array($word, self::STOP_WORDS, true)
        )));
    }

    public static function normalizeText(string $text): string
    {
        $text = Str::lower(trim($text));

        // Remove common Arabic diacritics before comparison.
        $text = preg_replace('/[\x{064B}-\x{065F}\x{0670}]/u', '', $text) ?? $text;
        $text = preg_replace('/[^\p{L}\p{N}]+/u', ' ', $text) ?? $text;
        $text = preg_replace('/\s+/u', ' ', $text) ?? $text;

        return trim($text);
    }

    public static function hasNearDuplicate(
        string $normalizedText,
        array $otherNormalizedTexts,
        float $threshold = self::DUPLICATE_THRESHOLD
    ): bool {
        if ($normalizedText === '') {
            return false;
        }

        foreach ($otherNormalizedTexts as $other) {
            if ($normalizedText === $other) {
                return true;
            }

            $lengthA = Str::length($normalizedText);
            $lengthB = Str::length((string) $other);

            if ($lengthA === 0 || $lengthB === 0) {
                continue;
            }

            // Skip comparisons that cannot reach the threshold.
            $maximumPossible = (2 * min($lengthA, $lengthB) / ($lengthA + $lengthB)) * 100;

            if ($maximumPossible < $threshold) {
                continue;
            }

            similar_text($normalizedText, (string) $other, $similarity);

            if ($similarity >= $threshold) {
                return true;
            }
        }

        return false;
    }
}
