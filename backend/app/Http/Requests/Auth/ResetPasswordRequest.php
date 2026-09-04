<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
{
    $this->merge(['email' => strtolower(trim($this->email))]);
}

    public function rules(): array
    {
        return [
            'token' => [
                'required',
            ],

            'email' => [
                'required',
                'email',
            ],

            'password' => [
    'required',
    'confirmed',
    \Illuminate\Validation\Rules\Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised(),
],
        ];
    }



     public function messages(): array
    {
        return [
          

            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
        'password.uncompromised' => 'This password has been exposed in a known data breach. Please choose a different one.',

        ];
    }
}