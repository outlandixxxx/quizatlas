<?php

namespace App\Services;

use App\Models\QuizAttempt;

class ScoreCalculationService
{
    public function calculate(QuizAttempt $attempt): array
    {
        $attempt->load([
            'quiz.questions.choices',
            'userAnswers'
        ]);

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

        $percentage = $totalMarks > 0
            ? round(($score / $totalMarks) * 100, 2)
            : 0;

        return [
            'score' => $score,
            'percentage' => $percentage,
            'passed' => $percentage >= $attempt->quiz->passing_score,
        ];
    }
}