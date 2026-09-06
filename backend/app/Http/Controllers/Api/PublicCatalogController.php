<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Subject;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PublicCatalogController extends Controller
{
    public function majors(Request $request): JsonResponse
    {
        $perPage = (int) $request->input('per_page', 5);
        $search = $request->input('search');

        $majors = Major::where('is_active', true)
            ->withCount('subjects')
            ->when($search, fn ($q) => $q->where('name', 'LIKE', "%{$search}%"))
            ->orderBy('name')
            ->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => [
                'items' => $majors->getCollection()->map(fn (Major $major) => [
                    'id' => $major->id,
                    'name' => $major->name,
                    'slug' => $major->slug,
                    'icon' => $major->icon,
                    'description' => $major->description,
                    'subjects_count' => $major->subjects_count,
                ]),
                'meta' => [
                    'current_page' => $majors->currentPage(),
                    'last_page' => $majors->lastPage(),
                    'per_page' => $majors->perPage(),
                    'total' => $majors->total(),
                ],
            ],
        ]);
    }

   public function subjects(Request $request): JsonResponse
{
    $perPage = (int) $request->input('per_page', 5);
    $search = $request->input('search');
    $majorId = $request->input('major_id');

    $subjects = Subject::where('is_active', true)
        ->withCount('quizzes')
        ->with('major:id,name')
        ->when($search, fn ($q) => $q->where('name', 'LIKE', "%{$search}%"))
        ->when($majorId, fn ($q) => $q->where('major_id', $majorId))
        ->orderBy('name')
        ->paginate($perPage);

    return response()->json([
        'success' => true,
        'data' => [
            'items' => $subjects->getCollection()->map(fn (Subject $subject) => [
                'id' => $subject->id,
                'name' => $subject->name,
                'slug' => $subject->slug,
                'description' => $subject->description,
                'major_id' => $subject->major_id,
                'major_name' => $subject->major?->name,
                'quizzes_count' => $subject->quizzes_count,
            ]),
            'meta' => [
                'current_page' => $subjects->currentPage(),
                'last_page' => $subjects->lastPage(),
                'per_page' => $subjects->perPage(),
                'total' => $subjects->total(),
            ],
        ],
    ]);
}
}