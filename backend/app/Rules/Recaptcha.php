<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Closure;

class Recaptcha implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (empty($value)) {
            $fail('Verification failed. Please try again.');
            return;
        }

        try {
            $response = Http::asForm()
                ->timeout(5)
                ->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => config('services.recaptcha.secret_key'),
                    'response' => $value,
                ])
                ->json();
        } catch (\Throwable $e) {
            Log::error('reCAPTCHA verification request failed', ['error' => $e->getMessage()]);
            $fail('Verification service is unavailable. Please try again shortly.');
            return;
        }

        if (! ($response['success'] ?? false)) {
            $fail('Verification failed. Please try again.');
            return;
        }

        $score = $response['score'] ?? 0;

        if ($score < 0.5) {
            $fail('Verification failed. Please try again.');
        }
    }
}