<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamPdfResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->id,
            'title' => $this->title,
            'subject' => $this->subject?->name,
            'major' => $this->major?->name,
            'year' => $this->year,
            'file_size' => $this->fileSizeHuman(),
            'page_count' => $this->page_count,
            'questions_count' => $this->questions_count,
            'view_url' => route('exam-pdfs.view', $this->id),
        ];
        if ($request->user()?->isAdmin()) {
            $workflow = app(\App\Services\ExamPdfWorkflowService::class);
            $verified = $workflow->isVerified($this->resource);
            $available = $this->availableFile();
            $blocked = $workflow->deletionBlockedReason($this->resource);
            $actions = ['edit'];
            if ($available) $actions[] = 'preview';
            $reviewable = $available && in_array($this->document_type, ['previous_exam', 'correction', 'summary', 'preparation_guide'], true)
                && \App\Models\Concours::visible()->whereKey($this->concours_id)->exists();
            if ($reviewable && $this->document_type === 'correction') {
                $reviewable = $this->corrects_exam_pdf_id && \App\Models\ExamPdf::whereKey($this->corrects_exam_pdf_id)
                    ->where('document_type', 'previous_exam')->where('concours_id', $this->concours_id)->where('year', $this->year)->exists();
            }
            if ($reviewable && ! $verified) $actions[] = 'verify';
            $publishable = $reviewable && ($this->document_type !== 'correction'
                || \App\Models\ExamPdf::publicDocument()->whereKey($this->corrects_exam_pdf_id)->exists());
            if ($publishable && ! $verified) $actions[] = 'verify-publish';
            if ($publishable && $verified && ! $this->is_active) $actions[] = 'publish';
            if ($verified && $this->is_active) $actions[] = 'unpublish';
            if ($blocked === null) $actions[] = 'delete';
            $data['preparation_option_ids'] = $this->whenLoaded('preparationOptions', fn () => $this->preparationOptions->pluck('id')->values());
            $data += $this->resource->only(['subject_id', 'major_id', 'concours_id', 'document_type', 'corrects_exam_pdf_id', 'specialty', 'source_url', 'attribution', 'is_active', 'download_allowed', 'version']);
            $data += ['published' => $verified && $this->is_active, 'verified' => $verified,
                'workflow_status' => $verified ? ($this->is_active ? 'published' : 'verified') : 'draft',
                'allowed_actions' => $actions, 'delete_blocked_reason' => $blocked,
                'updated_at' => $this->updated_at?->toISOString()];
            $data['view_url'] = url('/api/v1/admin/exam-pdfs/'.$this->id.'/view');
        }

        return $data;
    }
}
