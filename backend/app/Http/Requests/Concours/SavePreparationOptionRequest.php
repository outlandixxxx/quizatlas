<?php

namespace App\Http\Requests\Concours;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SavePreparationOptionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    public function rules(): array
    {
        return [
            'name_fr' => ['required', 'string', 'max:255'],
            'name_en' => ['nullable', 'string', 'max:255'],
            'name_ar' => ['nullable', 'string', 'max:255'],
            'parent_id' => ['nullable', 'integer', Rule::exists('concours_preparation_options', 'id')->where('concours_id', $this->route('record'))],
            'is_active' => ['required', 'boolean'],
            'display_order' => ['required', 'integer', 'between:0,100000'],
        ];
    }
}
