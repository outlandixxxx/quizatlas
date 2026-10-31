<?php

namespace App\Http\Requests\ExamPdf;

use App\Rules\PdfSignature;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreExamPdfRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        // Multipart uploads need an explicit representation for an empty association list.
        $value = $this->input('preparation_option_ids');
        if (is_string($value)) {
            $decoded = json_decode($value, true);
            if (is_array($decoded)) {
                $this->merge(['preparation_option_ids' => $decoded]);
            }
        }
    }

    public function authorize(): bool
    {
        // Route-level admin middleware is the primary gate; this is defense-in-depth.
        return $this->user()?->isAdmin() ?? false;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'subject_id' => ['nullable', 'integer', 'exists:subjects,id'],
            'major_id' => ['nullable', 'integer', 'exists:majors,id'],
            'year' => ['nullable', 'integer', 'min:1990', 'max:2100'],
            'questions_count' => ['nullable', 'integer', 'min:0', 'max:32767'],
            'is_active' => ['sometimes', 'boolean'],
            'file' => [$this->isMethod('POST') ? 'required' : 'prohibited', 'file', 'mimes:pdf', 'mimetypes:application/pdf', 'max:20480', new PdfSignature],
            'concours_id' => ['nullable', 'integer', 'exists:concours,id'],
            'document_type' => ['nullable', Rule::in(['previous_exam', 'correction', 'summary', 'preparation_guide'])],
            'corrects_exam_pdf_id' => ['nullable', 'integer', 'exists:exam_pdfs,id'],
            'preparation_option_ids' => ['sometimes', 'array', 'list', 'max:100'],
            'preparation_option_ids.*' => ['required', 'integer', 'distinct'],
            'specialty' => ['nullable', 'string', 'max:255'],
            'source_url' => ['nullable', 'string', 'max:2048', 'url:http,https', function ($attribute, $value, $fail) {
                if (parse_url($value, PHP_URL_USER) !== null || parse_url($value, PHP_URL_PASS) !== null) {
                    $fail('The source URL must not contain credentials.');
                }
            }],
            'attribution' => ['nullable', 'string', 'max:2000'],
            'download_allowed' => ['sometimes', 'boolean'],
            'publish' => ['sometimes', 'boolean'],
            'distribution_confirmed' => ['sometimes', 'boolean'],
            'version' => [$this->isMethod('POST') ? 'prohibited' : 'required', 'integer', 'min:1'],
            'announcement_id' => ['prohibited'], 'file_path' => ['prohibited'],
            'approved_at' => ['prohibited'], 'approved_by' => ['prohibited'],
            'distribution_permission' => ['prohibited'], 'distribution_confirmed_at' => ['prohibited'],
            'sha256' => ['prohibited'],
        ];
    }
}
