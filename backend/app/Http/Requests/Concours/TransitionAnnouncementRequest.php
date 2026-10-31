<?php

namespace App\Http\Requests\Concours;

use Illuminate\Foundation\Http\FormRequest;

class TransitionAnnouncementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isAdmin() ?? false;
    }

    public function rules(): array
    {
        return ['version' => ['required', 'integer', 'min:1'],
            'source_checked' => [in_array($this->route('action'), ['verify', 'verify-publish'], true) ? 'required' : 'sometimes', 'accepted']];
    }
}
