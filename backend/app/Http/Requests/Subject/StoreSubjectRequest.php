<?php

namespace App\Http\Requests\Subject;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSubjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'major_id' => [
                'required',
                'exists:majors,id',
            ],

            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('subjects')
                    ->where(fn ($query) => $query->where('major_id', $this->major_id)),
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}