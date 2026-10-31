<?php

namespace App\Http\Requests\Concours;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveDirectoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    public function rules(): array
    {
        $kind = $this->route('kind');
        $table = ['categories' => 'concours_categories', 'institutions' => 'concours_institutions', 'concours' => 'concours'][$kind];
        $rules = [
            'slug' => ['required', 'string', 'max:160', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', Rule::unique($table, 'slug')->ignore($this->route('record')), Rule::notIn(['annonces'])],
            'name_fr' => ['required', 'string', 'max:255'],
            'name_ar' => ['required', 'string', 'max:255'],
            'is_active' => ['required', 'boolean'],
        ];
        if ($kind !== 'institutions') {
            $rules += [
                'description_fr' => ['nullable', 'string', 'max:20000'],
                'description_ar' => ['nullable', 'string', 'max:20000'],
                'display_order' => ['required', 'integer', 'min:0', 'max:100000'],
            ];
        }
        if ($kind === 'categories') {
            $rules['parent_id'] = ['nullable', 'integer', 'exists:concours_categories,id'];
        } elseif ($kind === 'institutions') {
            $rules['website_url'] = ['nullable', 'string', 'max:2048', 'url:http,https', function ($attribute, $value, $fail) {
                if (parse_url($value, PHP_URL_USER) !== null || parse_url($value, PHP_URL_PASS) !== null) {
                    $fail('The website URL must not contain credentials.');
                }
            }];
        } else {
            $rules += [
                'category_id' => ['required', 'integer', 'exists:concours_categories,id'],
                'institution_id' => ['nullable', 'integer', 'exists:concours_institutions,id'],
                'type' => ['required', Rule::in(['recruitment', 'admission', 'examination'])],
                'exam_formats' => ['nullable', 'array', 'max:4'],
                'exam_formats.*' => ['required', 'distinct', Rule::in(['qcm', 'written', 'oral', 'practical'])],
                'session_year' => ['nullable', 'integer', 'between:1990,2100'],
                'session_year_override' => ['nullable', 'integer', 'between:1990,2100'],
                'session_policy' => ['sometimes', 'required', Rule::in(['manual', 'annual'])],
                'session_rollover_on' => ['nullable', 'date_format:Y-m-d'],
            ];
        }

        return $rules;
    }
}
