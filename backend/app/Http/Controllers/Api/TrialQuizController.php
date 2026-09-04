<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Question;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class TrialQuizController extends Controller
{
    private const QUESTION_COUNT = 20;

    public function byMajor(string $slug): JsonResponse
    {
        $major = Major::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $subjectIds = $major->subjects()->where('is_active', true)->pluck('id');

        return $this->buildTrial($subjectIds, $major->name);
    }

    public function bySubject(string $slug): JsonResponse
    {
        $subject = Subject::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return $this->buildTrial(collect([$subject->id]), $subject->name);
    }

    private function buildTrial($subjectIds, string $label): JsonResponse
    {
        $questions = Question::whereHas('quiz', function ($q) use ($subjectIds) {
            $q->where('is_active', true)->whereIn('subject_id', $subjectIds);
        })
            ->with('choices')
            ->inRandomOrder()
            ->limit(self::QUESTION_COUNT)
            ->get();

        // Sign exactly the question IDs served in this trial. grade() will only
        // accept answers for IDs listed in this token — nothing else, ever.
        $trialToken = Crypt::encryptString(
            $questions->pluck('id')->implode(',')
        );

        return response()->json([
            'success' => true,
            'data' => [
                'label' => $label,
                'trial_token' => $trialToken,
                'questions' => $questions->map(fn (Question $q) => [
                    'id' => $q->id,
                    'question' => $q->question,
                    'marks' => $q->marks,
                    'choices' => $q->choices->map(fn ($c) => [
                        'id' => $c->id,
                        'choice_text' => $c->choice_text,
                    ]),
                ]),
            ],
        ]);
    }

    /**
     * Stateless grading — no DB writes. Client sends { trial_token, answers: { question_id: choice_id } }.
     * trial_token must be the exact token returned by byMajor/bySubject for this trial —
     * only question IDs listed inside it can be graded, closing off the enumeration
     * of arbitrary question IDs across the whole database.
     */
    public function grade(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'trial_token' => 'required|string',
            'answers' => 'required|array',
            'answers.*' => 'required|integer',
        ]);

        try {
            $allowedIds = array_filter(array_map(
                'intval',
                explode(',', Crypt::decryptString($validated['trial_token']))
            ));
        } catch (DecryptException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid or expired trial session. Please restart the trial.',
            ], 422);
        }

        $submittedIds = array_map('intval', array_keys($validated['answers']));
        $notAllowed = array_diff($submittedIds, $allowedIds);

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
            if (!$question) continue;

            $correctChoice = $question->choices->firstWhere('is_correct', true);
            $isCorrect = $correctChoice && (int) $correctChoice->id === (int) $choiceId;

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
        $percentage = $total > 0 ? round(($correctCount / $total) * 100) : 0;

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