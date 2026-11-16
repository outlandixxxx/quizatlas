<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Support\Facades\DB;
use RuntimeException;

trait ImportsMefQuiz
{
    protected function importMefQuiz(string $subjectSlug, array $data): void
    {
        if (empty($data['questions']) || empty($data['title'])) {
            throw new RuntimeException('Missing MEF quiz title or questions.');
        }

        foreach ($data['questions'] as $item) {
            $correct = count(array_filter($item['choices'], fn (array $choice): bool => $choice['is_correct'] === true));
            if (
                trim($item['question']) === ''
                || trim($item['explanation']) === ''
                || count($item['choices']) !== 4
                || $correct < 1
                || ! in_array($item['type'], ['single_choice', 'multiple_choice'], true)
                || ($item['type'] === 'single_choice' && $correct !== 1)
                || ($item['type'] === 'multiple_choice' && $correct < 2)
            ) {
                throw new RuntimeException("Invalid question in quiz '{$data['title']}'.");
            }
        }

        $created = DB::transaction(function () use ($subjectSlug, $data): bool {
            $major = Major::where('slug', 'ministere-economie-finances')->firstOrFail();
            // Serialize this pack's imports for the same subject.
            $subject = Subject::where('major_id', $major->id)
                ->where('slug', $subjectSlug)
                ->lockForUpdate()
                ->firstOrFail();

            // Use the underlying query to also detect soft-deleted quizzes.
            // Never recreate or overwrite an existing quiz with this identity.
            $exists = (new Quiz())->newQueryWithoutScopes()->toBase()
                ->where('subject_id', $subject->id)
                ->where('title', $data['title'])
                ->exists();

            if ($exists) {
                return false;
            }

            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $data['title'],
                'owner_id' => null,
                'description' => $data['description'],
                'duration' => $data['duration'],
                'passing_score' => 60,
                'total_marks' => count($data['questions']),
                'is_active' => true,
                'difficulty' => 'Intermediate',
            ]);

            foreach ($data['questions'] as $questionIndex => $item) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $item['question'],
                    'order' => $questionIndex + 1,
                    // Match the QCM type used by the existing application seeders.
                    'type' => 'multiple_choice',
                    'marks' => 1,
                    'explanation' => $item['explanation'],
                ]);

                foreach ($item['choices'] as $index => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $index + 1,
                    ]);
                }
            }

            return true;
        });

        $this->command?->info(
            $created
                ? "Created '{$data['title']}' (" . count($data['questions']) . ' questions).'
                : "Skipped existing quiz '{$data['title']}' (including any archived copy); no records changed."
        );
    }
}
