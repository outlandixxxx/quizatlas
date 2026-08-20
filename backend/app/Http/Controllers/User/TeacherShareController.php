<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\QuizShareResource;
use App\Models\QuizShare;
use App\Services\TeacherShareService;
use Illuminate\Http\Request;

class TeacherShareController extends Controller
{
    public function __construct(protected TeacherShareService $service) {}

    public function index()
    {
        $shares = QuizShare::where('professor_id', auth()->id())
            ->withCount('enrollments')
            ->with('quiz')
            ->latest()
            ->get();

        return ApiResponse::success(QuizShareResource::collection($shares));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'title' => 'nullable|string|max:255',
        ]);

        $share = $this->service->share(auth()->user(), $data['quiz_id'], $data['title'] ?? null);

        return ApiResponse::success(new QuizShareResource($share), 'Quiz shared successfully.', 201);
    }

    public function results(int $shareId)
    {
        return ApiResponse::success($this->service->results(auth()->user(), $shareId));
    }

    public function myQuizzes()
{
    $quizzes = \App\Models\Quiz::where('owner_id', auth()->id())
        ->orderByDesc('created_at')
        ->get(['id', 'title', 'subject_id']);

    return ApiResponse::success($quizzes);
}

public function quizQuestions(int $quizId)
{
    $quiz = \App\Models\Quiz::findOrFail($quizId);
    $this->authorize('update', $quiz);

    $questions = $quiz->questions()->with('choices')->orderBy('order')->get();

    return ApiResponse::success($questions);
}
}