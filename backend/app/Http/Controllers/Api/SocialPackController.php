<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialPost;
use App\Models\SocialQuestionExclusion;
use App\Services\SocialFactSelector;
use App\Services\SocialPackBuilder;
use App\Services\SocialQuestionSelector;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SocialPackController extends Controller
{
    private const DIFFICULTIES = ['Beginner', 'Intermediate', 'Advanced', 'Professional'];

    public function __construct(
        private readonly SocialPackBuilder $builder,
        private readonly SocialQuestionSelector $questions,
        private readonly SocialFactSelector $facts,
    ) {}

    /**
     * Builds a pack for the given days. Nothing is saved.
     */
    public function preview(Request $request): JsonResponse
    {
        $data = $request->validate([
            'days' => ['required', 'array', 'min:1', 'max:14'],
            'days.*.date' => ['required', 'date_format:Y-m-d'],
            'days.*.major_id' => ['nullable', 'integer', 'exists:majors,id'],
            'days.*.long_video' => [
                'required',
                Rule::in([
                    SocialPackBuilder::LONG_VIDEO_QUIZ,
                    SocialPackBuilder::LONG_VIDEO_FACTS,
                    SocialPackBuilder::LONG_VIDEO_NONE,
                ]),
            ],
            'difficulties' => ['sometimes', 'array'],
            'difficulties.*' => [Rule::in(self::DIFFICULTIES)],
            'facts_per_video' => ['sometimes', 'integer', 'min:5', 'max:60'],
        ]);

        $pack = $this->builder->build(
            $data['days'],
            $data['difficulties'] ?? ['Beginner'],
            $data['facts_per_video'] ?? 30
        );

        return response()->json(['data' => $pack]);
    }

    /**
     * Returns the next best question(s) or fact(s) for one slot,
     * excluding everything already in the pack.
     */
    public function replace(Request $request): JsonResponse
    {
        $data = $request->validate([
            'format' => ['required', Rule::in(SocialPost::allFormats())],
            'major_id' => ['nullable', 'integer', 'exists:majors,id'],
            'subject_id' => ['nullable', 'integer', 'exists:subjects,id'],
            'count' => ['sometimes', 'integer', 'min:1', 'max:60'],
            'difficulties' => ['sometimes', 'array'],
            'difficulties.*' => [Rule::in(self::DIFFICULTIES)],
            'exclude_question_ids' => ['sometimes', 'array'],
            'exclude_question_ids.*' => ['integer'],
            'exclude_texts' => ['sometimes', 'array'],
            'exclude_texts.*' => ['nullable', 'string', 'max:2000'],
            'exclude_fact_ids' => ['sometimes', 'array'],
            'exclude_fact_ids.*' => ['integer'],
        ]);

        $format = $data['format'];

        if (in_array($format, SocialPost::QUESTION_FORMATS, true)) {
            if (empty($data['subject_id'])) {
                throw ValidationException::withMessages([
                    'subject_id' => 'A Subject is required to replace a question.',
                ]);
            }

            $isGroup = $format === SocialPost::FORMAT_FACEBOOK_GROUP;

            $texts = array_map(
                fn ($text) => SocialQuestionSelector::normalizeText((string) $text),
                $data['exclude_texts'] ?? []
            );

            $selection = $this->questions->select(
                (int) $data['subject_id'],
                $isGroup
                    ? SocialQuestionSelector::PROFILE_GROUP
                    : SocialQuestionSelector::PROFILE_SHORT,
                (int) ($data['count'] ?? ($isGroup ? 3 : 1)),
                $data['difficulties'] ?? ['Beginner'],
                $data['exclude_question_ids'] ?? [],
                $texts
            );

            if ($selection['questions'] === []) {
                return response()->json([
                    'message' => 'No other suitable, unused question in this Subject.',
                ], 422);
            }

            return response()->json([
                'data' => ['questions' => $selection['questions']],
            ]);
        }

        if (empty($data['major_id'])) {
            throw ValidationException::withMessages([
                'major_id' => 'A Major is required to replace a fact.',
            ]);
        }

        $facts = $this->facts->select(
            (int) $data['major_id'],
            isset($data['subject_id']) ? (int) $data['subject_id'] : null,
            (int) ($data['count'] ?? ($format === SocialPost::FORMAT_FACT_VIDEO ? 30 : 1)),
            $data['exclude_fact_ids'] ?? []
        );

        if ($facts === []) {
            return response()->json([
                'message' => 'No other verified, unused fact for this Major.',
            ], 422);
        }

        return response()->json(['data' => ['facts' => $facts]]);
    }

    /**
     * "Never use": the question will never be picked for social media.
     */
    public function exclude(Request $request): JsonResponse
    {
        $data = $request->validate([
            'question_id' => ['required', 'integer', 'exists:questions,id'],
            'reason' => ['nullable', 'string', 'max:255'],
        ]);

        $exclusion = SocialQuestionExclusion::query()->updateOrCreate(
            ['question_id' => $data['question_id']],
            ['reason' => $data['reason'] ?? null]
        );

        return response()->json(['data' => $exclusion]);
    }

    /**
     * Undo "Never use".
     */
    public function unexclude(int $questionId): JsonResponse
    {
        SocialQuestionExclusion::query()
            ->where('question_id', $questionId)
            ->delete();

        return response()->json(['data' => null]);
    }

    /**
     * Marks the reviewed pack as published so it is never picked again.
     */
    public function confirm(Request $request): JsonResponse
    {
        $data = $request->validate([
            'items' => ['required', 'array', 'min:1', 'max:1000'],
            'items.*.post_date' => ['required', 'date_format:Y-m-d'],
            'items.*.format' => ['required', Rule::in(SocialPost::allFormats())],
            'items.*.subject_id' => ['nullable', 'integer', 'exists:subjects,id'],
            'items.*.question_id' => ['nullable', 'integer', 'exists:questions,id'],
            'items.*.fact_id' => ['nullable', 'integer', 'exists:facts,id'],
            'items.*.series_number' => ['nullable', 'integer', 'min:1'],
            'items.*.position' => ['nullable', 'integer', 'min:1'],
        ]);

        $items = collect($data['items']);

        $usedQuestions = SocialPost::query()
            ->whereIn('question_id', $items->pluck('question_id')->filter()->values())
            ->pluck('question_id')
            ->map(fn ($id) => (int) $id)
            ->flip()
            ->all();

        $usedFacts = SocialPost::query()
            ->whereIn('fact_id', $items->pluck('fact_id')->filter()->values())
            ->pluck('fact_id')
            ->map(fn ($id) => (int) $id)
            ->flip()
            ->all();

        $created = 0;
        $skipped = [];

        DB::transaction(function () use (
            $data,
            &$created,
            &$skipped,
            &$usedQuestions,
            &$usedFacts
        ) {
            foreach ($data['items'] as $index => $item) {
                $questionId = isset($item['question_id']) ? (int) $item['question_id'] : null;
                $factId = isset($item['fact_id']) ? (int) $item['fact_id'] : null;

                if (($questionId === null) === ($factId === null)) {
                    $skipped[] = [
                        'index' => $index,
                        'reason' => 'Each item needs exactly one question_id or fact_id.',
                    ];
                    continue;
                }

                $isQuestionFormat = in_array($item['format'], SocialPost::QUESTION_FORMATS, true);

                if ($isQuestionFormat !== ($questionId !== null)) {
                    $skipped[] = [
                        'index' => $index,
                        'reason' => 'The format does not match the item type.',
                    ];
                    continue;
                }

                if ($questionId !== null && isset($usedQuestions[$questionId])) {
                    $skipped[] = [
                        'index' => $index,
                        'reason' => "Question {$questionId} was already published.",
                    ];
                    continue;
                }

                if ($factId !== null && isset($usedFacts[$factId])) {
                    $skipped[] = [
                        'index' => $index,
                        'reason' => "Fact {$factId} was already published.",
                    ];
                    continue;
                }

                SocialPost::create([
                    'post_date' => $item['post_date'],
                    'format' => $item['format'],
                    'subject_id' => $item['subject_id'] ?? null,
                    'question_id' => $questionId,
                    'fact_id' => $factId,
                    'series_number' => $item['series_number'] ?? null,
                    'position' => $item['position'] ?? 1,
                ]);

                if ($questionId !== null) {
                    $usedQuestions[$questionId] = true;
                }

                if ($factId !== null) {
                    $usedFacts[$factId] = true;
                }

                $created++;
            }
        });

        return response()->json([
            'data' => [
                'created' => $created,
                'skipped' => $skipped,
            ],
        ]);
    }
}
