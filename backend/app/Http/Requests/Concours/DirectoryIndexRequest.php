<?php

namespace App\Http\Requests\Concours;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DirectoryIndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'q' => ['nullable', 'string', 'max:200'],
            'page' => ['sometimes', 'integer', 'min:1', 'max:100000'],
            'per_page' => ['sometimes', 'integer', 'min:1', 'max:100'],
            'type' => ['nullable', Rule::in(['recruitment', 'admission', 'examination'])],
            'category_id' => ['nullable', 'integer', 'min:1'],
            'institution_id' => ['nullable', 'integer', 'min:1'],
            'parent_id' => ['nullable', 'integer', 'min:1'],
            'roots' => ['sometimes', 'boolean'],
            'is_active' => ['sometimes', 'boolean'],
        ];
    }
}
