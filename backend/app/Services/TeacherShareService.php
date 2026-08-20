<?php

namespace App\Services;

use App\Models\Quiz;
use App\Models\QuizShare;
use App\Models\QuizShareEnrollment;
use App\Models\User;

class TeacherShareService
{
    public function share(User $professor, int $quizId, ?string $title = null): QuizShare
    {
        $quiz = Quiz::findOrFail($quizId);

        if (!$professor->isAdmin() && $quiz->owner_id !== $professor->id) {
            abort(403, 'You can only share quizzes you own.');
        }

        return QuizShare::create([
            'professor_id' => $professor->id,
            'quiz_id' => $quiz->id,
            'join_code' => QuizShare::generateJoinCode(),
            'title' => $title,
        ]);
    }

    public function join(User $student, string $joinCode): QuizShare
    {
        $share = QuizShare::where('join_code', strtoupper($joinCode))
            ->where('is_active', true)
            ->firstOrFail();

        QuizShareEnrollment::firstOrCreate(
            ['quiz_share_id' => $share->id, 'student_id' => $student->id],
            ['joined_at' => now()]
        );

        return $share;
    }

    public function results(User $professor, int $shareId): array
    {
        $share = QuizShare::where('professor_id', $professor->id)->findOrFail($shareId);

        $studentIds = $share->enrollments()->pluck('student_id');

        $attempts = \App\Models\QuizAttempt::whereIn('user_id', $studentIds)
            ->where('quiz_id', $share->quiz_id)
            ->where('status', 'submitted')
            ->with('user:id,name,avatar_url')
            ->get();

        return [
            'share' => $share,
            'enrolled_count' => $studentIds->count(),
            'submitted_count' => $attempts->count(),
            'attempts' => $attempts->map(fn ($a) => [
                'student_name' => $a->user->name,
                'student_avatar' => $a->user->avatarFullUrl(),
                'score' => $a->score,
                'percentage' => $a->percentage,
                'passed' => $a->passed,
                'submitted_at' => $a->submitted_at,
            ])->values(),
        ];
    }
}