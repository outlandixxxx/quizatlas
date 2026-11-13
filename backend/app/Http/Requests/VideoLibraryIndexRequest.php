<?php

namespace App\Http\Requests;

use App\Models\VideoLibraryEntry;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VideoLibraryIndexRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'q' => ['nullable', 'string', 'max:150'],
            'format' => ['nullable', Rule::in(VideoLibraryEntry::FORMATS)],
            'category' => ['nullable', Rule::in(VideoLibraryEntry::CATEGORIES)],
            'template' => ['nullable', Rule::in(VideoLibraryEntry::TEMPLATES)],
            'language' => ['nullable', Rule::in(VideoLibraryEntry::LANGUAGES)],
            'status' => ['nullable', Rule::in(VideoLibraryEntry::STATUSES)],
            'page' => ['sometimes', 'integer', 'min:1', 'max:100000'],
            'per_page' => ['sometimes', 'integer', 'min:1', 'max:24'],
        ];
    }
}
