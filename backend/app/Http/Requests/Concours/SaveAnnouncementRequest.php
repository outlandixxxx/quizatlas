<?php

namespace App\Http\Requests\Concours;

use App\Models\ConcoursAnnouncement;
use App\Rules\PdfSignature;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveAnnouncementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    protected function prepareForValidation(): void
    {
        if ($this->exists('preparation_option_ids') && $this->input('preparation_option_ids') === null) {
            $this->merge(['preparation_option_ids' => []]);
        }
    }

    public function rules(): array
    {
        $url = ['nullable', 'string', 'max:2048', 'url:http,https', function ($attribute, $value, $fail) {
            if (parse_url($value, PHP_URL_USER) !== null || parse_url($value, PHP_URL_PASS) !== null) {
                $fail('URLs must not contain credentials.');
            }
        }];
        $rules = [
            'concours_id' => ['required', 'integer', 'exists:concours,id'],
            'institution_id' => ['nullable', 'integer', 'exists:concours_institutions,id'],
            'slug' => ['sometimes', 'required', 'string', 'max:160', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', Rule::unique('concours_announcements', 'slug')->ignore($this->route('announcement'))],
            'version' => [$this->isMethod('POST') ? 'prohibited' : 'required', 'integer', 'min:1'],
            'file' => [$this->isMethod('POST') ? 'required_without:official_source_url' : 'sometimes', 'file', 'mimes:pdf', 'mimetypes:application/pdf', 'max:20480', new PdfSignature],
            'preparation_option_ids' => ['sometimes', 'array', 'max:100'],
            'preparation_option_ids.*' => ['required', 'integer', 'distinct', 'exists:concours_preparation_options,id'],
            'session_year' => ['nullable', 'integer', 'min:1990', 'max:2100'],
            'replaces_announcement_id' => ['nullable', 'integer', 'exists:concours_announcements,id'],
            'positions' => ['nullable', 'integer', 'min:1', 'max:10000000'],
            'official_decision' => ['nullable', Rule::in(['postponed', 'cancelled'])],
            'application_url' => $url, 'official_source_url' => $url,
            'specialties' => ['nullable', 'array', 'max:100'], 'specialties.*' => ['required', 'string', 'max:200', 'distinct'],
            'regions' => ['nullable', 'array', 'max:100'], 'regions.*' => ['required', 'string', 'max:200', 'distinct'],
        ];
        foreach (['fr', 'ar'] as $lang) {
            $rules['title_'.$lang] = ['nullable', 'string', 'max:255'];
            $rules['description_'.$lang] = ['nullable', 'string', 'max:20000'];
            foreach (['eligibility', 'required_documents'] as $field) {
                $rules[$field.'_'.$lang] = ['nullable', 'string', 'max:20000'];
            }
        }
        foreach (['official_publication_date', 'registration_opens_on', 'registration_deadline', 'examination_date'] as $field) {
            $rules[$field] = ['nullable', 'date_format:Y-m-d'];
        }
        // Date ordering is validated on the merged record under the service's row
        // lock, so omitted values and concurrent edits cannot bypass validation.
        if ($this->filled('official_publication_date')) {
            $rules['official_publication_date'][] = 'before_or_equal:'.ConcoursAnnouncement::today();
        }
        foreach (['verification_status', 'publication_status', 'verified_at', 'verified_by', 'published_at', 'first_published_at', 'archived_at', 'withdrawn_at', 'official_pdf_id', 'official_pdf_sha256', 'superseded_at'] as $field) {
            $rules[$field] = ['prohibited'];
        }

        return $rules;
    }
}
