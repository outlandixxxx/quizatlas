<?php

namespace App\Services;

use App\Exceptions\Quiz\InvalidQuizAnswerException;
use App\Models\Question;
use App\Models\QuizAttempt;
use App\Models\UserAnswer;

class UserAnswerService
{
    public function __construct(protected QuizAttemptService $attemptService) {}

    public function saveAnswer(QuizAttempt $attempt, array $data): ?array
    {
        return $this->attemptService->whileInProgress($attempt, function (QuizAttempt $locked) use ($data) {
            $question = Question::with('choices')->findOrFail($data['question_id']);
            if ((int) $question->quiz_id !== (int) $locked->quiz_id
                || !in_array($question->type, ['single_choice', 'true_false', 'multiple_choice'], true)) {
                throw new InvalidQuizAnswerException();
            }
            $answers = $locked->userAnswers()->where('question_id', $question->id);
            if (array_key_exists('choice_ids', $data)) {
                $ids = array_map('intval', $data['choice_ids']);
            } else {
                // Retain the scalar API, including deselection, for existing clients.
                $ids = $answers->pluck('choice_id')->map(fn ($id) => (int) $id)->all();
                $choiceId = (int) $data['choice_id'];
                if (!$question->choices->contains('id', $choiceId)) throw new InvalidQuizAnswerException();
                if ($data['selected'] ?? true) {
                    $ids = $question->type === 'multiple_choice' ? array_unique([...$ids, $choiceId]) : [$choiceId];
                } else {
                    $ids = array_values(array_diff($ids, [$choiceId]));
                }
            }
            if (count($ids) !== count(array_unique($ids))
                || ($question->type !== 'multiple_choice' && count($ids) > 1)
                || array_diff($ids, $question->choices->pluck('id')->all())) {
                throw new InvalidQuizAnswerException();
            }
            // The parent attempt lock serializes whole-set replacements and submit.
            $answers->delete();
            foreach ($ids as $id) {
                UserAnswer::create(['quiz_attempt_id' => $locked->id, 'question_id' => $question->id, 'choice_id' => $id]);
            }
            return $locked->mode === 'tutor' ? $this->getFeedback($locked, $question->id) : null;
        });
    }

    public function getFeedback(QuizAttempt $attempt, int $questionId): array
    {
        $attempt = $attempt->fresh();
        abort_unless($attempt->mode === 'tutor' && $attempt->status === 'in_progress', 409, 'Tutor feedback is unavailable for this attempt.');
        $question = Question::where('quiz_id', $attempt->quiz_id)->with('choices')->findOrFail($questionId);
        $correctIds = $question->choices->where('is_correct', true)->pluck('id')->sort()->values()->all();
        $selectedIds = $attempt->userAnswers()->where('question_id', $questionId)->pluck('choice_id')->sort()->values()->all();
        return ['question_id' => $question->id, 'correct_choice_ids' => $correctIds,
            'selected_choice_ids' => $selectedIds, 'is_correct' => $selectedIds === $correctIds,
            'explanation' => $question->explanation];
    }
}
