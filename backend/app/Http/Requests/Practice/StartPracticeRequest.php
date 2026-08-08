<?php

namespace App\Http\Requests\Practice;

use Illuminate\Foundation\Http\FormRequest;

class StartPracticeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'quiz_id' => [
                'required',
                'integer',
                'exists:quizzes,id',
            ],
        ];
    }
}