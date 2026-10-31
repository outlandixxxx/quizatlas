<?php

namespace App\Services\ConcoursNotifications;

use Illuminate\Validation\ValidationException;

class PushEndpoint
{
    public function validate(string $url): string
    {
        $parts = parse_url($url);
        $host = $parts['host'] ?? '';
        if (! filter_var($url, FILTER_VALIDATE_URL) || strlen($url) > 2048 || ($parts['scheme'] ?? '') !== 'https'
            || isset($parts['user']) || isset($parts['pass']) || isset($parts['port']) || isset($parts['fragment'])
            || ! in_array($host, ['fcm.googleapis.com', 'updates.push.services.mozilla.com', 'web.push.apple.com'], true)) {
            throw ValidationException::withMessages(['endpoint' => 'Use a supported HTTPS browser push endpoint.']);
        }

        return $host;
    }

    public function key(string $value, int $length): bool
    {
        if (! preg_match('/^[A-Za-z0-9_-]+={0,2}$/D', $value)) {
            return false;
        }
        $decoded = base64_decode(strtr($value, '-_', '+/'), true);

        return $decoded !== false && strlen($decoded) === $length && ($length !== 65 || $decoded[0] === "\x04");
    }
}
