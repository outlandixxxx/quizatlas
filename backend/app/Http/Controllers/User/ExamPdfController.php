<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamPdf\StoreExamPdfRequest;
use App\Http\Resources\ExamPdfResource;
use App\Models\ExamPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ExamPdfController extends Controller
{
    public function index(Request $request)
    {
        $query = ExamPdf::query()->where('is_active', true)->with('subject');

        if ($search = $request->string('search')->toString()) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($subjectId = $request->integer('subject_id')) {
            $query->where('subject_id', $subjectId);
        }

        if ($majorId = $request->integer('major_id')) {
            $query->where('major_id', $majorId);
        }

        $pdfs = $query->orderByDesc('year')->paginate($request->integer('per_page', 12));

        return ApiResponse::success([
            'items' => ExamPdfResource::collection($pdfs->items()),
            'meta' => [
                'current_page' => $pdfs->currentPage(),
                'last_page' => $pdfs->lastPage(),
                'per_page' => $pdfs->perPage(),
                'total' => $pdfs->total(),
            ],
        ]);
    }

    public function view(ExamPdf $examPdf)
    {
        abort_unless($examPdf->is_active, 404);
        abort_unless(Storage::disk('exam_pdfs')->exists($examPdf->file_path), 404);

        $safeTitle = str_replace(['"', "\r", "\n"], '', $examPdf->title);

        return Storage::disk('exam_pdfs')->response(
            $examPdf->file_path,
            $safeTitle . '.pdf',
            ['Content-Disposition' => 'inline; filename="' . $safeTitle . '.pdf"']
        );
    }

    public function store(StoreExamPdfRequest $request)
    {
        $validated = $request->validated();
        $file = $request->file('file');

        // Store under a random, non-guessable filename — the real title/metadata
        // live in the DB, not the filename, so this avoids leaking anything via
        // the stored path and sidesteps filename collisions entirely.
        $storedName = Str::uuid()->toString() . '.pdf';
        $path = $file->storeAs('', $storedName, 'exam_pdfs');

        $examPdf = ExamPdf::create([
            'title' => $validated['title'],
            'subject_id' => $validated['subject_id'] ?? null,
            'major_id' => $validated['major_id'] ?? null,
            'year' => $validated['year'] ?? null,
            'file_path' => $path,
            'file_size_bytes' => $file->getSize(),
            'questions_count' => $validated['questions_count'] ?? null,
            'is_active' => $validated['is_active'] ?? true,
        ]);

        return ApiResponse::success(new ExamPdfResource($examPdf), 'Exam PDF uploaded successfully.', 201);
    }
}