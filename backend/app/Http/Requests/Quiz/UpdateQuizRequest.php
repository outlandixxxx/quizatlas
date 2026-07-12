<?php

namespace App\Http\Requests\Quiz;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuizRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'subject_id' => [
                'required',
                'exists:subjects,id',
            ],

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'duration' => [
                'required',
                'integer',
                'min:1',
            ],

            'passing_score' => [
                'required',
                'integer',
                'min:0',
            ],

           

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}