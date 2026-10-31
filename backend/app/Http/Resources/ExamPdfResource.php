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
            $data['preparation_option_ids'] = $this->whenLoaded('preparationOptions', fn () => $this->preparationOptions->pluck('id')->values());
            $data += $this->resource->only(['subject_id', 'major_id', 'concours_id', 'document_type', 'corrects_exam_pdf_id', 'specialty', 'source_url', 'attribution', 'is_active', 'download_allowed', 'version']);
            $data += ['published' => (bool) ($this->approved_at && $this->approved_by && $this->distribution_permission && $this->distribution_confirmed_at && $this->document_type),
                'updated_at' => $this->updated_at?->toISOString()];
            $data['view_url'] = url('/api/v1/admin/exam-pdfs/'.$this->id.'/view');
        }

        return $data;
    }
}
