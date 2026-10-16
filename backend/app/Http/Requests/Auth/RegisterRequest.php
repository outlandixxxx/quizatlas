<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Recaptcha;
use Illuminate\Validation\Rule;


class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized.
     */
    public function authorize(): bool
    {
        return true;
    }


protected function prepareForValidation(): void
{
    $this->merge([
        'email'    => strtolower(trim((string) $this->email)),
        'username' => strtolower(trim((string) $this->username)),
    ]);
}


    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:100',
            ],

            'username' => [
            'required',
            'string',
            'min:3',
            'max:20',
            'regex:/^[a-z0-9_]+$/',
            'not_regex:/^player_/',
            'unique:users,username',
            Rule::notIn(config('reserved.usernames')),
        ],

            'email' => [
                'required',
                'email',
                'max:150',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'confirmed',
                \Illuminate\Validation\Rules\Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised(),
            ],

            'recaptcha_token' => ['required', 'string', new Recaptcha],
            'role' => ['nullable', 'string', 'in:user,manager'],
        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must contain at least 3 characters.',

            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'This email is already registered.',
        'password.uncompromised' => 'This password has been exposed in a known data breach. Please choose a different one.',

            'password.required' => 'Password is required.',
            'password.confirmed' => 'Password confirmation does not match.',

              'username.required' => 'Username is required.',
        'username.min'      => 'Username must contain at least 3 characters.',
        'username.max'      => 'Username must not exceed 20 characters.',
        'username.regex'    => 'Username can only contain letters, numbers and underscores.',
        'username.unique'   => 'This username is already taken.',
        'username.not_in'   => 'This username is not allowed.',
        ];
    }
}