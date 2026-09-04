<?php

namespace App\Http\Requests\ExamPdf;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamPdfRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Route-level admin middleware is the primary gate; this is defense-in-depth.
        return $this->user()?->isAdmin() ?? false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'subject_id' => ['nullable', 'exists:subjects,id'],
            'major_id' => ['nullable', 'exists:majors,id'],
            'year' => ['nullable', 'integer', 'min:1990', 'max:' . (date('Y') + 1)],
            'questions_count' => ['nullable', 'integer', 'min:0'],
            'is_active' => ['sometimes', 'boolean'],
            'file' => ['required', 'file', 'mimes:pdf', 'max:20480'], // 20MB
        ];
    }
}