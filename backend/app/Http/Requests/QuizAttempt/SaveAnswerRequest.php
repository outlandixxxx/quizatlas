<?php

namespace App\Http\Requests\QuizAttempt;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveAnswerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // ownership already checked via policy in the controller
    }

    protected function prepareForValidation(): void
    {
        if (!$this->has('choice_ids') && !$this->has('selected')) {
            $this->merge(['selected' => true]);
        }
    }

    public function rules(): array
    {
        return [
            'question_id' => ['required', 'integer', 'exists:questions,id'],
            'choice_id'   => [Rule::requiredIf(!$this->has('choice_ids')), Rule::prohibitedIf($this->has('choice_ids')), 'integer', 'exists:choices,id'],
            'choice_ids'  => ['sometimes', 'present', 'array', 'list', 'max:100'],
            'choice_ids.*' => ['required', 'integer', 'distinct', 'exists:choices,id'],
            'selected'    => [Rule::prohibitedIf($this->has('choice_ids')), 'boolean'],
        ];
    }
}
