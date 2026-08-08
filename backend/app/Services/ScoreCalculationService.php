<?php

namespace App\Services;

use App\Models\Bookmark;
use App\Models\QuizAttempt;

class ScoreCalculationService
{
    public function calculate(QuizAttempt $attempt): array
    {
        $attempt->load(['quiz.questions.choices', 'userAnswers']);

        $score = 0;

        foreach ($attempt->quiz->questions as $question) {
            $selectedChoices = $attempt->userAnswers
                ->where('question_id', $question->id)
                ->pluck('choice_id')
                ->sort()
                ->values();

            $correctChoices = $question->choices
                ->where('is_correct', true)
                ->pluck('id')
                ->sort()
                ->values();

            if ($selectedChoices->toArray() === $correctChoices->toArray()) {
                $score += $question->marks;
            }
        }

        $totalMarks = $attempt->quiz->questions->sum('marks');
        $percentage = $totalMarks > 0 ? round(($score / $totalMarks) * 100, 2) : 0;

        return [
            'score' => $score,
            'percentage' => $percentage,
            'passed' => $percentage >= $attempt->quiz->passing_score,
        ];
    }

    public function buildResult(QuizAttempt $attempt): array
    {
        $attempt->load([
            'quiz.subject',
            'quiz.questions' => fn ($q) => $q->orderBy('order'),
            'quiz.questions.choices' => fn ($q) => $q->orderBy('order'),
            'userAnswers',
        ]);

        $bookmarkedIds = Bookmark::where('user_id', $attempt->user_id)
            ->whereIn('question_id', $attempt->quiz->questions->pluck('id'))
            ->pluck('question_id');

        $questions = [];
        $correctCount = 0;
        $incorrectCount = 0;
        $unansweredCount = 0;

        foreach ($attempt->quiz->questions as $index => $question) {

            $selectedChoiceIds = $attempt->userAnswers
                ->where('question_id', $question->id)
                ->pluck('choice_id');

            $correctChoiceIds = $question->choices
                ->where('is_correct', true)
                ->pluck('id');

            $hasAnswer = $selectedChoiceIds->isNotEmpty();

            $isCorrect = $hasAnswer && $selectedChoiceIds->sort()->values()->toArray()
                === $correctChoiceIds->sort()->values()->toArray();

            if (!$hasAnswer) {
                $unansweredCount++;
            } elseif ($isCorrect) {
                $correctCount++;
            } else {
                $incorrectCount++;
            }

            $choicesList = $question->choices->values();

            $options = $choicesList->map(fn ($choice, $i) => [
                'key' => chr(65 + $i),
                'label' => $choice->choice_text,
            ]);

            $userChoice = $choicesList->firstWhere('id', $selectedChoiceIds->first());
            $correctChoice = $choicesList->firstWhere('id', $correctChoiceIds->first());

            $questions[] = [
                'id' => $question->id,
                'number' => $index + 1,
                'text' => $question->question,
                'marks' => $question->marks,
                'is_correct' => $isCorrect,
                'is_answered' => $hasAnswer,
                'options' => $options,
                'user_answer_key' => $userChoice ? chr(65 + $choicesList->search($userChoice)) : null,
                'correct_answer_key' => $correctChoice ? chr(65 + $choicesList->search($correctChoice)) : null,
                'explanation' => $question->explanation,
                'is_bookmarked' => $bookmarkedIds->contains($question->id),
            ];
        }

        $total = $attempt->quiz->questions->count();

        $timeSpentSeconds = $attempt->submitted_at
            ? $attempt->started_at->diffInSeconds($attempt->submitted_at)
            : null;

        return [
            'id' => $attempt->id,
            'quiz_id' => $attempt->quiz_id,
            'quiz_title' => $attempt->quiz->title,
            'subject_name' => $attempt->quiz->subject->name ?? null,
            'mode' => $attempt->mode,
            'status' => $attempt->status,
            'started_at' => $attempt->started_at,
            'submitted_at' => $attempt->submitted_at,
            'time_spent_seconds' => $timeSpentSeconds,
            'score' => $attempt->score,
            'percentage' => $attempt->percentage,
            'passed' => $attempt->passed,
            'total_questions' => $total,
            'total_marks' => $attempt->quiz->total_marks,
            'correct_count' => $correctCount,
            'incorrect_count' => $incorrectCount,
            'unanswered_count' => $unansweredCount,
            'rank' => $this->computeRank($attempt->user_id),
            'subject_breakdown' => $this->computeSubjectBreakdown($attempt->user_id),
            'questions' => $questions,
        ];
    }

    private function computeRank(int $userId): ?int
    {
        $averages = QuizAttempt::where('status', 'submitted')
            ->selectRaw('user_id, AVG(percentage) as avg_percentage')
            ->groupBy('user_id')
            ->orderByDesc('avg_percentage')
            ->get();

        $position = $averages->search(fn ($row) => (int) $row->user_id === $userId);

        return $position === false ? null : $position + 1;
    }

    private function computeSubjectBreakdown(int $userId): array
    {
        return QuizAttempt::where('quiz_attempts.user_id', $userId)
            ->where('quiz_attempts.status', 'submitted')
            ->join('quizzes', 'quizzes.id', '=', 'quiz_attempts.quiz_id')
            ->join('subjects', 'subjects.id', '=', 'quizzes.subject_id')
            ->selectRaw('subjects.id as subject_id, subjects.name as subject_name, AVG(quiz_attempts.percentage) as avg_percentage')
            ->groupBy('subjects.id', 'subjects.name')
            ->orderByDesc('avg_percentage')
            ->get()
            ->map(fn ($row) => [
                'subject_id' => $row->subject_id,
                'subject_name' => $row->subject_name,
                'percentage' => round((float) $row->avg_percentage, 1),
            ])
            ->values()
            ->all();
    }
}