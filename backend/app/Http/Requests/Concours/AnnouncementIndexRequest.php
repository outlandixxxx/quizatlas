<?php

namespace App\Http\Requests\Concours;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AnnouncementIndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ['q' => ['nullable', 'string', 'max:200'], 'page' => ['sometimes', 'integer', 'min:1', 'max:100000'],
            'per_page' => ['sometimes', 'integer', 'min:1', 'max:100'],
            'concours_id' => ['nullable', 'integer', 'min:1'], 'category_id' => ['nullable', 'integer', 'min:1'],
            'session_year' => ['nullable', 'integer', 'between:1990,2100'],
            'session_scope' => ['nullable', Rule::in(['current', 'history'])],
            'institution_id' => ['nullable', 'integer', 'min:1'],
            'type' => ['nullable', Rule::in(['recruitment', 'admission', 'examination'])],
            'registration_status' => ['nullable', Rule::in(['upcoming', 'open', 'closed'])],
            'verification_status' => ['nullable', Rule::in(['draft', 'unverified', 'verified'])],
            'publication_status' => ['nullable', Rule::in(['draft', 'published', 'archived', 'withdrawn'])]];
    }
}
