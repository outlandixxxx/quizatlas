<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Subject;
use App\Models\VideoBatch;
use App\Services\VideoBatchGenerator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class VideoBatchController extends Controller
{
    public function index(): JsonResponse
    {
        $batches = VideoBatch::query()
            ->with('major:id,name')
            ->withCount('videoSets')
            ->latest()
            ->paginate(15);

        return response()->json($batches);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'major_id' => ['required', 'integer', 'exists:majors,id'],
            'name' => ['nullable', 'string', 'max:255'],
            'target_video_count' => [
                'required', 'integer', 'min:1', 'max:60',
            ],
            'questions_per_video' => [
                'required', 'integer', 'min:1', 'max:30',
            ],
            'difficulty_filter' => [
                'nullable',
                Rule::in(['Beginner', 'Intermediate', 'Advanced', 'Professional',]),
            ],
            'subject_ids' => ['sometimes', 'array'],
            'subject_ids.*' => [
                'integer', 'distinct', 'exists:subjects,id',
            ],
        ]);

        $major = Major::query()
            ->where('is_active', true)
            ->findOrFail($data['major_id']);

        $subjectIds = $this->validateSubjectIds(
            (int) $major->id,
            $data['subject_ids'] ?? []
        );

        $batch = VideoBatch::create([
            'major_id' => $major->id,
            'name' => $data['name'] ?? (
                'Video batch ' . now()->format('Y-m-d H:i')
            ),
            'status' => 'draft',
            'target_video_count' => $data['target_video_count'],
            'questions_per_video' => $data['questions_per_video'],
            'difficulty_filter' => $data['difficulty_filter'] ?? null,
            'settings' => [
                'subject_ids' => $subjectIds,
            ],
        ]);

        return response()->json([
            'data' => $batch->load('major:id,name'),
        ], 201);
    }

    public function show(VideoBatch $videoBatch): JsonResponse
    {
        $videos = $videoBatch->videoSets()
            ->with('subject:id,name')
            ->withCount('videoSetQuestions')
            ->orderBy('id')
            ->get();

        return response()->json([
            'batch' => $videoBatch->load('major:id,name'),
            'videos' => $videos,
        ]);
    }

    public function generate(
        Request $request,
        VideoBatch $videoBatch,
        VideoBatchGenerator $generator
    ): JsonResponse {
        $data = $request->validate([
            'subject_ids' => ['sometimes', 'array'],
            'subject_ids.*' => [
                'integer', 'distinct', 'exists:subjects,id',
            ],
        ]);

        $subjectIds = $this->validateSubjectIds(
            (int) $videoBatch->major_id,
            $data['subject_ids']
                ?? ($videoBatch->settings['subject_ids'] ?? [])
        );

        $result = $generator->generate($videoBatch, $subjectIds);

        return response()->json([
            'data' => $result,
        ]);
    }

    private function validateSubjectIds(
        int $majorId,
        array $subjectIds
    ): array {
        $subjectIds = array_values(array_unique(
            array_map('intval', $subjectIds)
        ));

        if ($subjectIds === []) {
            return [];
        }

        $validCount = Subject::query()
            ->where('major_id', $majorId)
            ->where('is_active', true)
            ->whereIn('id', $subjectIds)
            ->count();

        if ($validCount !== count($subjectIds)) {
            throw ValidationException::withMessages([
                'subject_ids' =>
                    'Selected subjects must be active and belong to the selected Major.',
            ]);
        }

        return $subjectIds;
    }
}