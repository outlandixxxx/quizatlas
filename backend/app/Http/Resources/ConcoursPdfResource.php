<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConcoursPdfResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return ['id' => $this->id, 'title' => $this->title, 'document_type' => $this->document_type,
            'year' => $this->year, 'specialty' => $this->specialty, 'file_size' => $this->fileSizeHuman(),
            'source_url' => $this->source_url, 'attribution' => $this->attribution,
            'available' => $this->availableFile(),
            'corrects_exam_pdf_id' => $this->corrects_exam_pdf_id,
            'preparation_option_ids' => $this->whenLoaded('preparationOptions', fn () => $this->preparationOptions->pluck('id')->values()),
            'subject' => $this->subject?->name,
            'download_allowed' => $this->download_allowed ?? true,
            'view_path' => '/public/concours-pdfs/'.$this->id.'/view',
            'download_path' => '/public/concours-pdfs/'.$this->id.'/download'];
    }
}
