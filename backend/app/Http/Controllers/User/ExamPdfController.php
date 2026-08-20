<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExamPdfResource;
use App\Models\ExamPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        return Storage::disk('exam_pdfs')->response(
            $examPdf->file_path,
            $examPdf->title . '.pdf',
            ['Content-Disposition' => 'inline; filename="' . $examPdf->title . '.pdf"']
        );
    }
}