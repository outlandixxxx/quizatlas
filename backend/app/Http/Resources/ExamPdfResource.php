<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExamPdfResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
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
    }
}