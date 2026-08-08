<?php

namespace App\Services;

use App\Exceptions\Quiz\InvalidQuizAnswerException;
use App\Exceptions\Quiz\QuizAlreadySubmittedException;
use App\Models\Choice;
use App\Models\Question;
use App\Models\QuizAttempt;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\DB;

class UserAnswerService
{
    public function saveAnswer(
        QuizAttempt $attempt,
        array $data
    ): ?UserAnswer {
        return DB::transaction(function () use ($attempt, $data) {

            if ($attempt->status !== 'in_progress') {
                throw new QuizAlreadySubmittedException();
            }

            $question = Question::with('quiz')
                ->findOrFail($data['question_id']);

            if ($question->quiz_id !== $attempt->quiz_id) {
                throw new InvalidQuizAnswerException();
            }

            $choice = Choice::findOrFail($data['choice_id']);

            if ($choice->question_id !== $question->id) {
                throw new InvalidQuizAnswerException();
            }

            switch ($question->type) {

                case 'single_choice':
                case 'true_false':

                    UserAnswer::where('quiz_attempt_id', $attempt->id)
                        ->where('question_id', $question->id)
                        ->delete();

                    return UserAnswer::create([
                        'quiz_attempt_id' => $attempt->id,
                        'question_id' => $question->id,
                        'choice_id' => $choice->id,
                    ]);

                case 'multiple_choice':

                    if ($data['selected']) {
                        return UserAnswer::firstOrCreate([
                            'quiz_attempt_id' => $attempt->id,
                            'question_id' => $question->id,
                            'choice_id' => $choice->id,
                        ]);
                    }

                    UserAnswer::where('quiz_attempt_id', $attempt->id)
                        ->where('question_id', $question->id)
                        ->where('choice_id', $choice->id)
                        ->delete();

                    return null;

                default:
                    throw new InvalidQuizAnswerException();
            }
        });
    }

    public function getFeedback(QuizAttempt $attempt, int $questionId): array
    {
        $question = Question::with('choices')->findOrFail($questionId);

        $correctChoiceIds = $question->choices
            ->where('is_correct', true)
            ->pluck('id')
            ->sort()
            ->values();

        $selectedChoiceIds = UserAnswer::where('quiz_attempt_id', $attempt->id)
            ->where('question_id', $questionId)
            ->pluck('choice_id')
            ->sort()
            ->values();

        return [
            'question_id' => $question->id,
            'correct_choice_ids' => $correctChoiceIds->toArray(),
            'selected_choice_ids' => $selectedChoiceIds->toArray(),
            'is_correct' => $correctChoiceIds->toArray() === $selectedChoiceIds->toArray(),
            'explanation' => $question->explanation,
        ];
    }
}