<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Concours;
use App\Models\ExamPdf;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

/** Additional admin operations; the existing Concours and ExamPdf editors remain authoritative. */
class AdminConcoursWizardController extends Controller
{
    public function details(int $record): JsonResponse
    {
        $concours = Concours::findOrFail($record);
        $this->authorize('view', $concours);

        return ApiResponse::success([
            'advice_fr' => $concours->advice_fr,
            'advice_ar' => $concours->advice_ar,
            'pdfs' => $concours->resources()->whereIn('document_type', ['previous_exam', 'correction', 'summary', 'preparation_guide'])->get()
                ->concat($concours->linkedResources()->get())->unique('id')
                ->map(fn (ExamPdf $pdf) => $this->present($pdf))->values(),
        ]);
    }

    public function advice(Request $request, int $record): JsonResponse
    {
        $concours = Concours::findOrFail($record);
        $this->authorize('update', $concours);
        $values = $request->validate([
            'advice_fr' => ['nullable', 'string', 'max:20000'],
            'advice_ar' => ['nullable', 'string', 'max:20000'],
        ]);
        $concours->fill(['advice_fr' => $values['advice_fr'] ?? null, 'advice_ar' => $values['advice_ar'] ?? null])->save();

        return ApiResponse::success(['advice_fr' => $concours->advice_fr, 'advice_ar' => $concours->advice_ar]);
    }

    public function attach(Request $request, int $record): JsonResponse
    {
        $concours = Concours::findOrFail($record);
        $this->authorize('update', $concours);
        $ids = $this->ids($request);

        return DB::transaction(function () use ($concours, $ids) {
            $concours = Concours::lockForUpdate()->findOrFail($concours->id);
            $pdfs = ExamPdf::whereIn('id', $ids)->get();
            if ($pdfs->count() !== count($ids)) {
                throw ValidationException::withMessages(['ids' => 'Some PDFs no longer exist.']);
            }
            foreach ($pdfs as $pdf) {
                if (! in_array($pdf->document_type, ['previous_exam', 'correction', 'summary', 'preparation_guide'], true)
                    || $pdf->announcement_id !== null || ! $pdf->availableFile()) {
                    throw ValidationException::withMessages(['ids' => 'Select available preparation PDFs, not official announcement documents.']);
                }
            }
            // Corrections must accompany their source paper in this concours.
            $available = array_unique(array_merge($ids, $concours->resources()->pluck('id')->all(), $concours->linkedResources()->pluck('exam_pdfs.id')->all()));
            foreach ($pdfs as $pdf) {
                if ($pdf->document_type === 'correction' && $pdf->corrects_exam_pdf_id && ! in_array($pdf->corrects_exam_pdf_id, $available, true)) {
                    throw ValidationException::withMessages(['ids' => 'Link the corresponding original exam before linking its correction.']);
                }
            }
            if (count($available) > 1000) {
                throw ValidationException::withMessages(['ids' => 'Too many PDF associations for one concours.']);
            }
            $concours->linkedResources()->syncWithoutDetaching($ids);

            return ApiResponse::success(['linked' => $concours->linkedResources()->count()]);
        }, 3);
    }

    public function detach(Request $request, int $record): JsonResponse
    {
        $concours = Concours::findOrFail($record);
        $this->authorize('update', $concours);
        $ids = $this->ids($request);
        DB::transaction(function () use ($concours, $ids) {
            $locked = Concours::lockForUpdate()->findOrFail($concours->id);
            // Avoid orphan correction links when an original exam is unlinked.
            $dependent = $locked->linkedResources()->where('exam_pdfs.document_type', 'correction')
                ->whereNotIn('exam_pdfs.id', $ids)->whereIn('exam_pdfs.corrects_exam_pdf_id', $ids)->exists();
            if ($dependent) {
                throw ValidationException::withMessages(['ids' => 'Remove linked corrections before removing their original exam.']);
            }
            $locked->linkedResources()->detach($ids);
            // Never delete an ExamPdf record or its stored file here.
        }, 3);

        return ApiResponse::success(['removed' => count($ids)]);
    }

    private function ids(Request $request): array
    {
        $data = $request->validate([
            'ids' => ['required', 'array', 'list', 'min:1', 'max:100'],
            'ids.*' => ['required', 'integer', 'distinct', 'min:1'],
        ]);

        return array_map('intval', $data['ids']);
    }

    private function present(ExamPdf $pdf): array
    {
        return [
            'id' => $pdf->id,
            'title' => $pdf->title,
            'year' => $pdf->year,
            'document_type' => $pdf->document_type,
            'concours_id' => $pdf->concours_id,
            'published' => $pdf->approved_at !== null,
        ];
    }
}
