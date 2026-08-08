<?php

namespace App\Http\Requests\QuizAttempt;

use Illuminate\Foundation\Http\FormRequest;

class SaveAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // ownership already checked via policy in the controller
    }

    protected function prepareForValidation(): void
    {
        if (!$this->has('selected')) {
            $this->merge(['selected' => true]);
        }
    }

    public function rules(): array
    {
        return [
            'question_id' => ['required', 'integer', 'exists:questions,id'],
            'choice_id'   => ['required', 'integer', 'exists:choices,id'],
            'selected'    => ['boolean'],
        ];
    }
}