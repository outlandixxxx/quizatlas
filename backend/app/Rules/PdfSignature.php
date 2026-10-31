<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\UploadedFile;

class PdfSignature implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! $value instanceof UploadedFile || ! $value->isValid()) {
            $fail('Upload a valid PDF file.');

            return;
        }
        $stream = fopen($value->getRealPath(), 'rb');
        if ($stream === false) {
            $fail('Unable to read the uploaded PDF.');

            return;
        }
        try {
            $head = fread($stream, 8);
            fseek($stream, max(0, $value->getSize() - 1024));
            $tail = stream_get_contents($stream);
            if (! preg_match('/^%PDF-(?:1\.[0-7]|2\.0)/', $head) || ! preg_match('/%%EOF\s*$/', $tail)) {
                $fail('The file must have a valid PDF signature and end marker.');
            }
        } finally {
            fclose($stream);
        }
    }
}
