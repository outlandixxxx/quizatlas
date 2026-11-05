<?php

namespace App\Services;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ExamPdf;
use App\Models\User;
use App\Rules\PdfSignature;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ExamPdfWorkflowService
{
    public function isVerified(ExamPdf $pdf): bool
    {
        return (bool) ($pdf->document_type && $pdf->approved_at && $pdf->approved_by
            && $pdf->distribution_permission && $pdf->distribution_confirmed_at);
    }

    public function deletionBlockedReason(ExamPdf $pdf): ?string
    {
        if ($pdf->document_type === 'official_announcement' || $pdf->announcement_id !== null
            || ConcoursAnnouncement::withTrashed()->where('official_pdf_id', $pdf->id)->exists()) {
            return 'This PDF belongs to an announcement. Manage it in the announcement editor.';
        }
        if ($pdf->approved_at || $pdf->approved_by || ($pdf->document_type === null && $pdf->is_active)) {
            return 'Published, verified or active library documents cannot be deleted. Unpublish to hide them; only unverified drafts may be deleted.';
        }
        if (DB::table('concours_exam_pdf_links')->where('exam_pdf_id', $pdf->id)->exists()) {
            return 'This PDF is shared with a Concours. Remove its shared associations in the Wizard first.';
        }
        if ($pdf->corrections()->exists()) {
            return 'Other corrections reference this exam. It cannot be deleted.';
        }

        return null;
    }

    /** Reused by the original save-and-publish endpoint and the row/batch actions. */
    public function approve(ExamPdf $pdf, User $actor, bool $confirmed, bool $publish): void
    {
        if (! $confirmed) {
            throw ValidationException::withMessages(['distribution_confirmed' => 'Review the PDF and explicitly confirm distribution rights.']);
        }
        $this->validateDocument($pdf, $publish);
        $pdf->approved_at = now();
        $pdf->approved_by = $actor->id;
        $pdf->distribution_permission = 'admin_confirmed';
        $pdf->distribution_confirmed_at = now();
        // Verification alone must never make a document public.
        $pdf->is_active = $publish;
    }

    private function validateDocument(ExamPdf $pdf, bool $publishing): void
    {
        if (! in_array($pdf->document_type, ['previous_exam', 'correction', 'summary', 'preparation_guide'], true)
            || $pdf->announcement_id !== null || ! Concours::visible()->whereKey($pdf->concours_id)->exists()
            || ! $pdf->availableFile()) {
            throw ValidationException::withMessages(['document' => 'An available preparation PDF and an active permanent Concours are required. Manage official PDFs in their announcement.']);
        }
        if ($pdf->document_type === 'correction') {
            $exam = $pdf->corrects_exam_pdf_id ? ExamPdf::lockForUpdate()->find($pdf->corrects_exam_pdf_id) : null;
            if (! $exam || $exam->document_type !== 'previous_exam' || $exam->announcement_id !== null
                || $exam->concours_id !== $pdf->concours_id || $exam->year !== $pdf->year
                || ($publishing && ! ExamPdf::publicDocument()->whereKey($exam->id)->exists())) {
                throw ValidationException::withMessages(['corrects_exam_pdf_id' => 'Link a previous exam of the same Concours and year. Publish that exam before its correction.']);
            }
        }
        $stream = new UploadedFile(Storage::disk('exam_pdfs')->path($pdf->file_path), 'review.pdf', 'application/pdf', null, true);
        Validator::make(['file' => $stream], ['file' => ['file', 'max:20480', 'mimes:pdf', 'mimetypes:application/pdf', new PdfSignature]])->validate();
        if ($pdf->sha256 && ! hash_equals($pdf->sha256, hash_file('sha256', $stream->getRealPath()))) {
            throw ValidationException::withMessages(['file' => 'The stored file changed. Review and restore the original PDF before continuing.']);
        }
    }

    /** Each item has its own transaction, so one failure cannot undo successful items. */
    public function transition(int $id, int $version, string $action, User $actor, bool $confirmed): array
    {
        abort_unless($actor->isAdmin(), 403);

        return DB::transaction(function () use ($id, $version, $action, $actor, $confirmed) {
            $pdf = ExamPdf::lockForUpdate()->findOrFail($id);
            abort_if($pdf->version !== $version, 409, 'This document changed. Reload before continuing.');
            abort_if($pdf->document_type === 'official_announcement' || $pdf->announcement_id !== null, 422, 'Manage official PDFs in the announcement editor.');
            $verified = $this->isVerified($pdf);
            if (($verified && $pdf->is_active && $action !== 'unpublish') || ($verified && $action === 'verify')
                || ($action === 'unpublish' && ! $pdf->is_active)) {
                return ['document' => $pdf, 'skipped' => true];
            }
            if ($action === 'unpublish') {
                $pdf->is_active = false;
            } elseif ($action === 'publish') {
                if (! $verified) {
                    throw ValidationException::withMessages(['document' => 'Verify the document before publishing it.']);
                }
                $this->validateDocument($pdf, true);
                $pdf->is_active = true;
            } elseif (in_array($action, ['verify', 'verify-publish'], true)) {
                if ($verified) {
                    $this->validateDocument($pdf, true);
                    $pdf->is_active = true;
                } else {
                    $this->approve($pdf, $actor, $confirmed, $action === 'verify-publish');
                }
            } else {
                abort(422, 'Unsupported PDF action.');
            }
            $pdf->version++;
            $pdf->save();

            return ['document' => $pdf, 'skipped' => false];
        }, 3);
    }

    public function delete(int $id, int $version, User $actor): void
    {
        abort_unless($actor->isAdmin(), 403);
        DB::transaction(function () use ($id, $version) {
            $pdf = ExamPdf::lockForUpdate()->findOrFail($id);
            abort_if($pdf->version !== $version, 409, 'This document changed. Reload before deleting it.');
            if ($reason = $this->deletionBlockedReason($pdf)) {
                abort(409, $reason);
            }
            $pdf->preparationOptions()->detach();
            $pdf->delete();
            // Retain the physical file, including when another row shares its path.
        }, 3);
    }
}
