<?php

namespace App\Services;

use App\Models\Major;
use App\Models\SocialPost;
use App\Models\Subject;
use Illuminate\Support\Collection;

/**
 * Builds a week (or any list of days) of social media content:
 * for each day, one Subject of the chosen Major and
 * - 1 "question du jour" (WhatsApp / Telegram)
 * - 1 Canva quiz short
 * - 3 questions for a Facebook group mini-quiz
 * - 1 fact (FR / EN / AR) for the fact shorts
 * - 30 facts for the long YouTube video on fact days
 *
 * Nothing is saved here: the admin reviews, replaces, then confirms.
 */
class SocialPackBuilder
{
    public const LONG_VIDEO_QUIZ = 'quiz';
    public const LONG_VIDEO_FACTS = 'facts';
    public const LONG_VIDEO_NONE = 'none';

    public const NUMBERED_FORMATS = [
        SocialPost::FORMAT_QUESTION_DU_JOUR,
        SocialPost::FORMAT_QUIZ_SHORT,
        SocialPost::FORMAT_FACT_SHORT,
        SocialPost::FORMAT_FACT_VIDEO,
    ];

    private const SHORT_QUESTIONS_PER_DAY = 2;  // question du jour + quiz short
    private const GROUP_QUESTIONS_PER_DAY = 3;

    public function __construct(
        private readonly SocialQuestionSelector $questions,
        private readonly SocialFactSelector $facts,
    ) {}

    /**
     * @param  array<int, array{date: string, major_id: ?int, long_video: string}>  $days
     * @param  string[]  $difficulties
     */
    public function build(
        array $days,
        array $difficulties,
        int $factsPerVideo = 30
    ): array {
        usort(
            $days,
            fn (array $a, array $b) => strcmp($a['date'], $b['date'])
        );

        $numbers = $this->currentNumbers();

        $usedQuestionIds = [];
        $usedTexts = [];
        $usedFactIds = [];
        $packSubjectUse = [];

        $majorIds = array_values(array_filter(array_map(
            fn (array $day) => isset($day['major_id']) ? (int) $day['major_id'] : null,
            $days
        )));

        $majors = Major::query()
            ->whereIn('id', $majorIds)
            ->get(['id', 'name'])
            ->keyBy('id');

        $result = [];

        foreach ($days as $day) {
            $entry = [
                'date' => $day['date'],
                'long_video' => $day['long_video'],
                'major' => null,
                'subject' => null,
                'question_du_jour' => null,
                'quiz_short' => null,
                'facebook_group' => null,
                'fact_short' => null,
                'fact_video' => null,
                'warnings' => [],
            ];

            $majorId = isset($day['major_id']) ? (int) $day['major_id'] : null;
            $major = $majorId !== null ? $majors->get($majorId) : null;

            if (! $major) {
                $entry['warnings'][] = 'No Major selected for this day.';
                $result[] = $entry;
                continue;
            }

            $entry['major'] = [
                'id' => (int) $major->id,
                'name' => $major->name,
            ];

            // 1. Subject + questions.
            [$subject, $short, $group] = $this->pickSubjectAndQuestions(
                (int) $major->id,
                $packSubjectUse,
                $difficulties,
                $usedQuestionIds,
                $usedTexts
            );

            if ($subject) {
                $entry['subject'] = [
                    'id' => (int) $subject->id,
                    'name' => $subject->name,
                ];

                $packSubjectUse[$subject->id] = ($packSubjectUse[$subject->id] ?? 0) + 1;
            } else {
                $entry['warnings'][] =
                    'No active Subject with suitable questions in this Major.';
            }

            foreach (array_merge($short, $group) as $question) {
                $usedQuestionIds[] = $question['id'];
                $usedTexts[] = SocialQuestionSelector::normalizeText($question['text']);
            }

            if (isset($short[0])) {
                $entry['question_du_jour'] = [
                    'number' => ++$numbers[SocialPost::FORMAT_QUESTION_DU_JOUR],
                    'question' => $short[0],
                ];
            } else {
                $entry['warnings'][] = 'No suitable question for the question du jour.';
            }

            if (isset($short[1])) {
                $entry['quiz_short'] = [
                    'number' => ++$numbers[SocialPost::FORMAT_QUIZ_SHORT],
                    'question' => $short[1],
                ];
            } else {
                $entry['warnings'][] = 'No suitable question for the Canva quiz short.';
            }

            if ($group !== []) {
                $entry['facebook_group'] = ['questions' => $group];
            }

            if (count($group) < self::GROUP_QUESTIONS_PER_DAY) {
                $entry['warnings'][] = sprintf(
                    'Only %d of %d questions found for the Facebook group post.',
                    count($group),
                    self::GROUP_QUESTIONS_PER_DAY
                );
            }

            // 2. Fact short (same fact in FR / EN / AR).
            $factShort = $this->facts->select(
                (int) $major->id,
                $subject?->id,
                1,
                $usedFactIds
            );

            if ($factShort !== []) {
                $entry['fact_short'] = [
                    'number' => ++$numbers[SocialPost::FORMAT_FACT_SHORT],
                    'fact' => $factShort[0],
                ];
                $usedFactIds[] = $factShort[0]['id'];
            } else {
                $entry['warnings'][] =
                    'No verified, unused fact for this Major. Import and verify facts first.';
            }

            // 3. Long fact video on fact days.
            if ($day['long_video'] === self::LONG_VIDEO_FACTS) {
                $videoFacts = $this->facts->select(
                    (int) $major->id,
                    $subject?->id,
                    $factsPerVideo,
                    $usedFactIds
                );

                if ($videoFacts !== []) {
                    $entry['fact_video'] = [
                        'number' => ++$numbers[SocialPost::FORMAT_FACT_VIDEO],
                        'facts' => $videoFacts,
                    ];
                    $usedFactIds = array_merge(
                        $usedFactIds,
                        array_column($videoFacts, 'id')
                    );
                }

                if (count($videoFacts) < $factsPerVideo) {
                    $entry['warnings'][] = sprintf(
                        'Only %d of %d facts available for the long fact video.',
                        count($videoFacts),
                        $factsPerVideo
                    );
                }
            }

            $result[] = $entry;
        }

        return [
            'days' => $result,
            'difficulties' => $difficulties,
            'facts_per_video' => $factsPerVideo,
            'generated_at' => now()->toIso8601String(),
        ];
    }

    /**
     * Tries the Major's Subjects, least recently used first, and keeps
     * the first one that fills every slot (or the best one found).
     *
     * @return array{0: ?Subject, 1: array, 2: array}
     */
    private function pickSubjectAndQuestions(
        int $majorId,
        array $packSubjectUse,
        array $difficulties,
        array $usedQuestionIds,
        array $usedTexts
    ): array {
        $best = [null, [], []];
        $bestTotal = -1;

        foreach ($this->orderedSubjects($majorId, $packSubjectUse) as $subject) {
            $short = $this->questions->select(
                (int) $subject->id,
                SocialQuestionSelector::PROFILE_SHORT,
                self::SHORT_QUESTIONS_PER_DAY,
                $difficulties,
                $usedQuestionIds,
                $usedTexts
            )['questions'];

            $shortTexts = array_map(
                fn (array $question) => SocialQuestionSelector::normalizeText($question['text']),
                $short
            );

            $group = $this->questions->select(
                (int) $subject->id,
                SocialQuestionSelector::PROFILE_GROUP,
                self::GROUP_QUESTIONS_PER_DAY,
                $difficulties,
                array_merge($usedQuestionIds, array_column($short, 'id')),
                array_merge($usedTexts, $shortTexts)
            )['questions'];

            $total = count($short) + count($group);

            if ($total > $bestTotal) {
                $best = [$subject, $short, $group];
                $bestTotal = $total;
            }

            if (
                count($short) === self::SHORT_QUESTIONS_PER_DAY
                && count($group) === self::GROUP_QUESTIONS_PER_DAY
            ) {
                break;
            }
        }

        return $bestTotal > 0 ? $best : [null, [], []];
    }

    /**
     * Active Subjects of the Major: not yet used in this pack first,
     * then the one posted longest ago (never posted = first).
     */
    private function orderedSubjects(int $majorId, array $packSubjectUse): Collection
    {
        $subjects = Subject::query()
            ->where('major_id', $majorId)
            ->where('is_active', true)
            ->orderBy('id')
            ->get(['id', 'name', 'major_id']);

        if ($subjects->isEmpty()) {
            return $subjects;
        }

        $lastUsed = SocialPost::query()
            ->whereIn('subject_id', $subjects->pluck('id'))
            ->groupBy('subject_id')
            ->selectRaw('subject_id, MAX(post_date) AS last_used')
            ->pluck('last_used', 'subject_id');

        return $subjects
            ->sortBy(function (Subject $subject) use ($packSubjectUse, $lastUsed) {
                $timesInPack = $packSubjectUse[$subject->id] ?? 0;
                $last = (string) ($lastUsed[$subject->id] ?? '0000-00-00');

                return sprintf('%03d|%s|%010d', $timesInPack, substr($last, 0, 10), $subject->id);
            })
            ->values();
    }

    /** Last number used for each numbered series ("Question du jour #12"). */
    private function currentNumbers(): array
    {
        $numbers = [];

        foreach (self::NUMBERED_FORMATS as $format) {
            $numbers[$format] = (int) (SocialPost::query()
                ->where('format', $format)
                ->max('series_number') ?? 0);
        }

        return $numbers;
    }
}
