<?php

namespace App\Http\Controllers\User;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamPdf\StoreExamPdfRequest;
use App\Http\Resources\ExamPdfResource;
use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursPreparationOption;
use App\Models\ExamPdf;
use App\Rules\PdfSignature;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ExamPdfController extends Controller
{
    public function index(Request $request)
    {
        $request->validate(['per_page' => ['sometimes', 'integer', 'min:1', 'max:100'], 'page' => ['sometimes', 'integer', 'min:1', 'max:100000'], 'search' => ['nullable', 'string', 'max:200']]);
        $query = ExamPdf::query()->where('is_active', true)->whereNull('document_type')->with(['subject', 'major']);

        if ($search = $request->string('search')->toString()) {
            $query->where('title', 'like', "%{$search}%");
        }

        if ($subjectId = $request->integer('subject_id')) {
            $query->where('subject_id', $subjectId);
        }

        if ($majorId = $request->integer('major_id')) {
            $query->where('major_id', $majorId);
        }

        $pdfs = $query->orderByDesc('year')->orderByDesc('id')->paginate($request->integer('per_page', 12));

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
        abort_unless($examPdf->is_active && $examPdf->document_type === null, 404);

        return $this->respond($examPdf);
    }

    public function adminIndex(Request $request)
    {
        $filters = $request->validate(['page' => ['sometimes', 'integer', 'between:1,100000'], 'per_page' => ['sometimes', 'integer', 'between:1,100'],
            'search' => ['nullable', 'string', 'max:200'], 'concours_id' => ['nullable', 'integer'],
            'document_type' => ['nullable', 'in:previous_exam,correction,summary,preparation_guide,legacy'],
            'published' => ['nullable', 'boolean']]);
        $query = ExamPdf::with(['subject', 'major', 'preparationOptions'])->where(fn ($q) => $q->whereNull('document_type')->orWhere('document_type', '<>', 'official_announcement'));
        if ($filters['search'] ?? '') {
            $query->whereRaw('LOWER(title) LIKE LOWER(?)', ['%'.$filters['search'].'%']);
        }
        if ($filters['concours_id'] ?? null) {
            $query->where('concours_id', $filters['concours_id']);
        }
        if ($type = $filters['document_type'] ?? null) {
            $type === 'legacy' ? $query->whereNull('document_type') : $query->where('document_type', $type);
        }
        if (isset($filters['published'])) {
            $filters['published'] ? $query->whereNotNull('approved_at') : $query->whereNull('approved_at');
        }
        $page = $query->orderByRaw('year IS NULL')->orderByDesc('year')->orderBy('id')->paginate($filters['per_page'] ?? 15);

        return ApiResponse::success(['items' => ExamPdfResource::collection($page->items()), 'meta' => [
            'current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => $page->perPage(), 'total' => $page->total()]]);
    }

    public function adminView(ExamPdf $examPdf)
    {
        abort_if($examPdf->document_type === 'official_announcement', 404);

        return $this->respond($examPdf);
    }

    public function publicView(ExamPdf $examPdf)
    {
        return $this->publicFile($examPdf);
    }

    public function publicDownload(ExamPdf $examPdf)
    {
        return $this->publicFile($examPdf, true);
    }

    private function publicFile(ExamPdf $pdf, bool $download = false)
    {
        abort_unless(ExamPdf::publicDocument()->whereKey($pdf->id)->exists(), 404);
        abort_if($download && $pdf->download_allowed === false, 403);

        return $this->respond($pdf, $download);
    }

    public function announcementPreview(int $announcement)
    {
        $record = ConcoursAnnouncement::findOrFail($announcement);
        $this->authorize('view', $record);
        abort_unless($record->officialPdf && $record->officialPdf->announcement_id === $record->id, 404);

        return $this->respond($record->officialPdf);
    }

    private function respond(ExamPdf $pdf, bool $download = false)
    {
        abort_unless($pdf->availableFile(), 404);
        $filename = substr(Str::slug($pdf->title), 0, 120) ?: 'document-'.$pdf->id;

        return Storage::disk('exam_pdfs')->response($pdf->file_path, $filename.'.pdf', [
            'Content-Type' => 'application/pdf', 'X-Content-Type-Options' => 'nosniff',
            'X-Robots-Tag' => 'noindex, nofollow, noarchive', 'Cache-Control' => 'private, no-store',
            'Content-Security-Policy' => "sandbox; default-src 'none'; base-uri 'none'; frame-ancestors 'none'",
            'X-Frame-Options' => 'DENY', 'Referrer-Policy' => 'no-referrer',
        ], $download ? 'attachment' : 'inline');
    }

    public function store(StoreExamPdfRequest $request)
    {
        return $this->save($request);
    }

    public function update(StoreExamPdfRequest $request, ExamPdf $examPdf)
    {
        return $this->save($request, $examPdf->id);
    }

    public function updatePreparationOptions(Request $request, ExamPdf $examPdf)
    {
        abort_unless($request->user()?->isAdmin(), 403);
        $data = $request->validate([
            'preparation_option_ids' => ['present', 'array', 'list', 'max:100'],
            'preparation_option_ids.*' => ['required', 'integer', 'distinct'],
            'version' => ['required', 'integer', 'min:1'],
            // This endpoint only changes associations, never PDF metadata or approvals.
            'file' => ['prohibited'], 'title' => ['prohibited'], 'concours_id' => ['prohibited'],
            'publish' => ['prohibited'], 'corrects_exam_pdf_id' => ['prohibited'],
        ]);
        $pdf = DB::transaction(function () use ($examPdf, $data) {
            $pdf = ExamPdf::lockForUpdate()->findOrFail($examPdf->id);
            abort_if($pdf->document_type === 'official_announcement' || $pdf->announcement_id !== null, 422);
            abort_if($pdf->version !== (int) $data['version'], 409, 'This document changed. Reload before saving.');
            $this->validatePreparationOptions($pdf, $data['preparation_option_ids']);
            $pdf->preparationOptions()->sync($data['preparation_option_ids']);
            $pdf->version++;
            $pdf->save();

            return $pdf;
        }, 3);

        return ApiResponse::success(new ExamPdfResource($pdf->load(['subject', 'major', 'preparationOptions'])));
    }

    private function validatePreparationOptions(ExamPdf $pdf, array $ids): void
    {
        if ($ids === []) {
            return;
        }
        $options = ConcoursPreparationOption::whereIn('id', $ids)->lockForUpdate()->get();
        if (! in_array($pdf->document_type, ['previous_exam', 'correction', 'summary', 'preparation_guide'], true) || ! $pdf->concours_id || $options->count() !== count($ids) || $options->contains(fn ($option) => $option->concours_id !== $pdf->concours_id)) {
            throw ValidationException::withMessages(['preparation_option_ids' => 'Choose preparation options belonging to this document’s permanent concours.']);
        }
    }

    private function save(StoreExamPdfRequest $request, ?int $id = null)
    {
        $data = $request->validated();
        $path = null;
        try {
            $pdf = DB::transaction(function () use ($request, $data, $id, &$path) {
                $pdf = $id ? ExamPdf::lockForUpdate()->findOrFail($id) : new ExamPdf;
                abort_if($pdf->document_type === 'official_announcement' || $pdf->announcement_id !== null, 422, 'Manage official PDFs in the announcement editor.');
                abort_if($id && $pdf->version !== (int) $data['version'], 409, 'This document changed. Reload before saving.');
                $pdf->fill(Arr::except($data, ['file', 'publish', 'distribution_confirmed', 'version', 'preparation_option_ids']));
                if ($pdf->document_type === null && ($pdf->concours_id || $pdf->corrects_exam_pdf_id)) {
                    throw ValidationException::withMessages(['document_type' => 'Choose a preparation document type before associating a concours.']);
                }
                if ($pdf->document_type !== null && ! $pdf->concours_id) {
                    throw ValidationException::withMessages(['concours_id' => 'A preparation document must belong to a permanent concours.']);
                }
                $this->validateCorrection($pdf);
                $optionIds = $data['preparation_option_ids'] ?? ($pdf->exists ? $pdf->preparationOptions()->pluck('concours_preparation_options.id')->all() : []);
                $this->validatePreparationOptions($pdf, $optionIds);
                if ($file = $request->file('file')) {
                    $hash = hash_file('sha256', $file->getRealPath());
                    if (DB::getDriverName() === 'pgsql') {
                        DB::select('SELECT pg_advisory_xact_lock(?)', [hexdec(substr($hash, 0, 15))]);
                    }
                    foreach (ExamPdf::where('sha256', $hash)->orWhereNull('sha256')->get() as $existing) {
                        if ($existing->availableFile() && hash_file('sha256', Storage::disk('exam_pdfs')->path($existing->file_path)) === $hash) {
                            throw ValidationException::withMessages(['file' => 'This file already exists as document #'.$existing->id.'. Review and edit that record instead.']);
                        }
                    }
                    $path ??= $file->storeAs('', Str::uuid().'.pdf', 'exam_pdfs');
                    $pdf->file_path = $path;
                    $pdf->file_size_bytes = $file->getSize();
                    $pdf->sha256 = $hash;
                }
                $pdf->approved_at = null;
                $pdf->approved_by = null;
                $pdf->distribution_permission = null;
                $pdf->distribution_confirmed_at = null;
                if ($data['publish'] ?? false) {
                    if (! ($data['distribution_confirmed'] ?? false) || ! $pdf->document_type || ! Concours::visible()->whereKey($pdf->concours_id)->exists() || ! $pdf->is_active || ! $pdf->availableFile()) {
                        throw ValidationException::withMessages(['publish' => 'Publication requires an active concours, an available PDF, a preparation classification, an active record and explicit distribution-rights confirmation.']);
                    }
                    if ($pdf->document_type === 'correction' && (! $pdf->corrects_exam_pdf_id || ! ExamPdf::publicDocument()->whereKey($pdf->corrects_exam_pdf_id)->exists())) {
                        throw ValidationException::withMessages(['corrects_exam_pdf_id' => 'Publish the corresponding previous exam before publishing its correction.']);
                    }
                    $stream = new UploadedFile(Storage::disk('exam_pdfs')->path($pdf->file_path), 'review.pdf', 'application/pdf', null, true);
                    Validator::make(['file' => $stream], ['file' => [new PdfSignature]])->validate();
                    $pdf->approved_at = now();
                    $pdf->approved_by = $request->user()->id;
                    $pdf->distribution_permission = 'admin_confirmed';
                    $pdf->distribution_confirmed_at = now();
                }
                $pdf->version = $id ? $pdf->version + 1 : 1;
                $pdf->save();
                if (array_key_exists('preparation_option_ids', $data)) {
                    $pdf->preparationOptions()->sync($optionIds);
                }

                return $pdf;
            }, 3);
        } catch (\Throwable $exception) {
            if ($path) {
                Storage::disk('exam_pdfs')->delete($path); // This failed NEW upload only.
            }
            throw $exception;
        }

        return ApiResponse::success(new ExamPdfResource($pdf->load(['subject', 'major', 'preparationOptions'])), 'Exam PDF saved.', $id ? 200 : 201);
    }

    private function validateCorrection(ExamPdf $pdf): void
    {
        if ($pdf->corrects_exam_pdf_id) {
            $exam = ExamPdf::lockForUpdate()->find($pdf->corrects_exam_pdf_id);
            if ($pdf->document_type !== 'correction' || ! $exam || $exam->id === $pdf->id || $exam->document_type !== 'previous_exam' || $exam->concours_id !== $pdf->concours_id || $exam->year !== $pdf->year || $exam->announcement_id !== null) {
                throw ValidationException::withMessages(['corrects_exam_pdf_id' => 'Link a correction to a previous exam of the same concours and year.']);
            }
        }
        if ($pdf->exists && $pdf->corrections()->exists() && ($pdf->document_type !== 'previous_exam' || $pdf->isDirty(['concours_id', 'year']))) {
            throw ValidationException::withMessages(['corrects_exam_pdf_id' => 'This exam has corrections. Its type, concours and year must remain consistent with them.']);
        }
    }
}
