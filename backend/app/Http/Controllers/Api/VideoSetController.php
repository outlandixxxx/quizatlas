<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\VideoSet;
use App\Models\VideoSetQuestion;
use App\Services\VideoQuestionSelector;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VideoSetController extends Controller
{
    public function exportJson(VideoSet $videoSet): JsonResponse
    {
        return response()->json(app(\App\Services\VideoSetJsonExporter::class)->build($videoSet));
    }

    public function preview(VideoSet $videoSet): JsonResponse
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

        $questions = $videoSet->videoSetQuestions
            ->map(function ($assignment) {
                $question = $assignment->question;

                if (! $question) {
                    return [
                        'assignment_id' => (int) $assignment->id,
                        'order' => (int) $assignment->question_order,
                        'unavailable' => true,
                    ];
                }

                $choices = $question->choices->values();

                return [
                    'assignment_id' => (int) $assignment->id,
                    'id' => (int) $question->id,
                    'quiz_id' => (int) $question->quiz_id,
                    'order' => (int) $assignment->question_order,
                    'text' => (string) $question->question,
                    'type' => $question->type,
                    'marks' => $question->marks,
                    'difficulty' => $question->quiz?->difficulty,

                    // Admin-only review data; never included in video JSON.
                    'explanation' => $question->explanation,

                    'choices' => $choices->map(
                        fn ($choice, $index) => [
                            'id' => (int) $choice->id,
                            'label' => chr(65 + $index),
                            'text' => (string) $choice->choice_text,
                            'is_correct' => (bool) $choice->is_correct,
                        ]
                    )->all(),

                    'selection' => [
                        'score' => $assignment->selection_score,
                        'metadata' => $assignment->selection_metadata,
                    ],
                ];
            })
            ->values();

        return response()->json([
            'data' => [
                'id' => (int) $videoSet->id,
                'title' => $videoSet->title,
                'number' => (int) $videoSet->video_number,
                'status' => $videoSet->status,

                'major' => [
                    'id' => (int) $videoSet->subject->major->id,
                    'name' => $videoSet->subject->major->name,
                ],

                'subject' => [
                    'id' => (int) $videoSet->subject->id,
                    'name' => $videoSet->subject->name,
                ],

                'questions' => $questions,
                'question_count' => $questions->count(),
            ],
        ]);
    }

    public function replaceQuestion(
        VideoSet $videoSet,
        VideoSetQuestion $videoSetQuestion,
        VideoQuestionSelector $selector
    ): JsonResponse {
        if (
            (int) $videoSetQuestion->video_set_id
            !== (int) $videoSet->id
        ) {
            abort(404, 'Question assignment not found for this video.');
        }

        if ($videoSet->status !== 'draft') {
            abort(422, 'Only draft videos can have their questions replaced.');
        }

        $videoSet->load([
            'subject',
            'videoBatch',
            'videoSetQuestions.question',
        ]);

        if (! $videoSet->subject) {
            abort(422, 'The video Subject is unavailable.');
        }

        $assignments = $videoSet->videoSetQuestions;

        // Do not select a question already present in this video.
        $excludeQuestionIds = $assignments
            ->pluck('question_id')
            ->map(fn ($id) => (int) $id)
            ->all();

        // Keep the remaining questions unique by wording as well as ID.
        $excludeSimilarTexts = $assignments
            ->reject(fn ($assignment) =>
                (int) $assignment->id === (int) $videoSetQuestion->id
            )
            ->map(fn ($assignment) =>
                $assignment->question?->question
            )
            ->filter(fn ($text) =>
                is_string($text) && trim($text) !== ''
            )
            ->values()
            ->all();

        $selection = $selector->selectForSubject(
            subjectId: (int) $videoSet->subject_id,
            requestedCount: 30,
            difficulty: $videoSet->videoBatch?->difficulty_filter,
            allowReuse: false,
            ignoreVideoSetId: (int) $videoSet->id,
            excludeQuestionIds: $excludeQuestionIds,
            excludeSimilarTexts: $excludeSimilarTexts
        );

        $replacement = $selection['questions'][0] ?? null;

        if (! $replacement) {
            return response()->json([
                'message' =>
                    'No eligible, unused replacement question is available for this Subject.',
            ], 422);
        }

        $previousQuestionId = (int) $videoSetQuestion->question_id;

        DB::transaction(function () use (
            $videoSetQuestion,
            $replacement,
            $previousQuestionId
        ) {
            $videoSetQuestion->update([
                'question_id' => $replacement['id'],
                'selection_score' => $replacement['selection']['score'],
                'selection_metadata' => [
                    'breakdown' => $replacement['selection']['breakdown'],
                    'reasons' => $replacement['selection']['reasons'],
                    'replaced_question_id' => $previousQuestionId,
                    'replacement_reason' => 'Admin requested a replacement.',
                ],
            ]);
        });

        return response()->json([
            'message' => 'Question replaced successfully.',
            'data' => [
                'assignment_id' => (int) $videoSetQuestion->id,
                'previous_question_id' => $previousQuestionId,
                'question' => $replacement,
            ],
        ]);
    }
}
