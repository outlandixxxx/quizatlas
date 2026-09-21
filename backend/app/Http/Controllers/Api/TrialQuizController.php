<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Crypt;

class TrialQuizController extends Controller
{
    private const QUESTION_COUNT = 20;

    public function byMajor(string $slug): JsonResponse
    {
        $major = Major::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $subjectIds = $major->subjects()
            ->where('is_active', true)
            ->pluck('id');

        $relatedSubjects = $major->subjects()
            ->where('is_active', true)
            ->orderBy('name')
            ->limit(6)
            ->get(['id', 'name', 'slug']);

        return $this->buildTrial(
            $subjectIds,
            $major->name,
            $major->description,
            $relatedSubjects
        );
    }

    public function bySubject(string $slug): JsonResponse
    {
        $subject = Subject::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $relatedSubjects = Subject::where('major_id', $subject->major_id)
            ->where('is_active', true)
            ->where('id', '!=', $subject->id)
            ->orderBy('name')
            ->limit(6)
            ->get(['id', 'name', 'slug']);

        return $this->buildTrial(
            collect([$subject->id]),
            $subject->name,
            $subject->description,
            $relatedSubjects
        );
    }

    private function buildTrial(
        Collection $subjectIds,
        string $label,
        ?string $description,
        Collection $relatedSubjects
    ): JsonResponse {
        /*
         * Public content statistics.
         *
         * Only active quizzes are counted.
         * Question count includes questions belonging to active quizzes.
         */
        $activeQuizQuery = Quiz::query()
            ->where('is_active', true)
            ->whereIn('subject_id', $subjectIds);

        $quizzesCount = (clone $activeQuizQuery)->count();

        $questionsCount = Question::whereHas('quiz', function ($q) use ($subjectIds) {
            $q->where('is_active', true)
                ->whereIn('subject_id', $subjectIds);
        })->count();

        /*
         * Get the actual difficulty levels available in the database.
         */
        $levelOrder = [
            'Beginner',
            'Intermediate',
            'Advanced',
            'Professional',
        ];

        $levels = (clone $activeQuizQuery)
            ->whereNotNull('difficulty')
            ->pluck('difficulty')
            ->map(function ($level) {
                return $level instanceof \BackedEnum
                    ? $level->value
                    : (string) $level;
            })
            ->unique()
            ->sortBy(function ($level) use ($levelOrder) {
                $position = array_search(
                    $level,
                    $levelOrder,
                    true
                );

                return $position === false
                    ? 999
                    : $position;
            })
            ->values()
            ->all();

        /*
         * Select the random trial questions.
         */
        $questions = Question::whereHas('quiz', function ($q) use ($subjectIds) {
            $q->where('is_active', true)
                ->whereIn('subject_id', $subjectIds);
        })
            ->with('choices')
            ->inRandomOrder()
            ->limit(self::QUESTION_COUNT)
            ->get();

        /*
         * Sign exactly the question IDs served in this trial.
         */
        $trialToken = Crypt::encryptString(
            $questions->pluck('id')->implode(',')
        );

        return response()->json([
            'success' => true,
            'data' => [
                'label' => $label,
                'description' => $description,

                'quizzes_count' => $quizzesCount,
                'questions_count' => $questionsCount,

                'levels' => $levels,
                'levels_count' => count($levels),

                'related_subjects' => $relatedSubjects->map(
                    fn (Subject $subject) => [
                        'id' => $subject->id,
                        'name' => $subject->name,
                        'slug' => $subject->slug,
                    ]
                )->values(),

                'trial_token' => $trialToken,

                'questions' => $questions->map(
                    fn (Question $q) => [
                        'id' => $q->id,
                        'question' => $q->question,
                        'marks' => $q->marks,
                        'choices' => $q->choices->map(
                            fn ($c) => [
                                'id' => $c->id,
                                'choice_text' => $c->choice_text,
                            ]
                        ),
                    ]
                ),
            ],
        ]);
    }

    /**
     * Stateless grading — no DB writes.
     *
     * Client sends:
     * {
     *   trial_token,
     *   answers: {
     *      question_id: choice_id
     *   }
     * }
     */
    public function grade(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'trial_token' => 'required|string',
            'answers' => 'required|array',
            'answers.*' => 'required|integer',
        ]);

        try {
            $allowedIds = array_filter(
                array_map(
                    'intval',
                    explode(
                        ',',
                        Crypt::decryptString(
                            $validated['trial_token']
                        )
                    )
                )
            );
        } catch (DecryptException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid or expired trial session. Please restart the trial.',
            ], 422);
        }

        $submittedIds = array_map(
            'intval',
            array_keys($validated['answers'])
        );

        $notAllowed = array_diff(
            $submittedIds,
            $allowedIds
        );

        if (!empty($notAllowed)) {
            return response()->json([
                'success' => false,
                'message' => 'One or more answers do not belong to this trial session.',
            ], 422);
        }

        $questions = Question::whereIn('id', $allowedIds)
            ->with('choices')
            ->get()
            ->keyBy('id');

        $results = [];
        $correctCount = 0;
        $totalMarks = 0;
        $score = 0;

        foreach ($validated['answers'] as $questionId => $choiceId) {
            $question = $questions->get((int) $questionId);

            if (!$question) {
                continue;
            }

            $correctChoice = $question->choices->firstWhere(
                'is_correct',
                true
            );

            $isCorrect =
                $correctChoice &&
                (int) $correctChoice->id === (int) $choiceId;

            if ($isCorrect) {
                $correctCount++;
                $score += $question->marks;
            }

            $totalMarks += $question->marks;

            $results[] = [
                'question_id' => $question->id,
                'is_correct' => $isCorrect,
                'correct_choice_id' => $correctChoice?->id,
                'explanation' => $question->explanation,
            ];
        }

        $total = count($results);

        $percentage = $total > 0
            ? round(($correctCount / $total) * 100)
            : 0;

        return response()->json([
            'success' => true,
            'data' => [
                'results' => $results,
                'correct_count' => $correctCount,
                'total_questions' => $total,
                'score' => $score,
                'total_marks' => $totalMarks,
                'percentage' => $percentage,
            ],
        ]);
    }
}