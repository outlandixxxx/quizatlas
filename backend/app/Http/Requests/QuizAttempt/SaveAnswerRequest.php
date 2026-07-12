<?php

namespace App\Http\Requests\QuizAttempt;

use Illuminate\Foundation\Http\FormRequest;

class SaveAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'question_id' => [
                'required',
                'exists:questions,id',
            ],

            'choice_id' => [
                'required',
                'exists:choices,id',
            ],

            'selected' => [
                'required',
                'boolean',
            ],
        ];
    }
}