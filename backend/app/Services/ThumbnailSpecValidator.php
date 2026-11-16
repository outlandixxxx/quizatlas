<?php

namespace App\Services;

use App\Models\Major;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

/** Presentation metadata only. No usage claims, sequence numbers, paths or external URLs. */
final class ThumbnailSpecValidator
{
    public const ASSETS = ['neutral', 'health', 'education', 'physics', 'mathematics', 'it', 'chemistry', 'finance', 'economy', 'svt', 'arabic', 'english', 'spanish', 'french'];

    public function validate(array $document): void
    {
        if (! isset($document['render_options']['thumbnail'])) return;
        $spec = $document['render_options']['thumbnail'];
        $facts = in_array($document['type'] ?? '', ['facts-short', 'facts-long'], true);
        $template = $facts ? $document['type'] : ($document['video']['template'] ?? 'quiz-long');
        if ($template === 'long') $template = 'quiz-long';
        $format = in_array($template, ['quiz-long', 'facts-long'], true) ? 'landscape' : 'portrait';
        $data = Validator::make(['thumbnail' => $spec], [
            'thumbnail' => ['required', 'array:version,format,template,template_label,locale,major,subject,display_number,palette,asset,layout,hook,supporting,seed'],
            'thumbnail.version' => ['required', 'integer', Rule::in([1])],
            'thumbnail.format' => ['required', Rule::in([$format])],
            'thumbnail.template' => ['required', Rule::in([$template]), Rule::in(['quiz-long', 'facts-long', 'facts-short', 'five-seconds', 'defi-du-jour', 'niveau-concours'])],
            'thumbnail.template_label' => ['required', 'string', 'max:120'],
            'thumbnail.locale' => ['required', Rule::in(['fr', 'en', 'ar'])],
            'thumbnail.display_number' => ['present', 'nullable', 'integer', 'min:1'],
            'thumbnail.layout' => ['required', Rule::in(['focus', 'split', 'editorial'])],
            'thumbnail.hook' => ['required', 'string', 'max:180'],
            'thumbnail.supporting' => ['present', 'string', 'max:180'],
            'thumbnail.seed' => ['required', 'string', 'regex:/^[A-Za-z0-9_-]{1,64}$/D'],
            'thumbnail.major' => ['required', 'array:id,slug,label'],
            'thumbnail.major.id' => ['required', 'integer', 'min:1'],
            'thumbnail.major.slug' => ['required', 'string', 'max:180', 'regex:/^[a-z0-9_-]+$/D'],
            'thumbnail.major.label' => ['required', 'string', 'max:140'],
            'thumbnail.subject' => ['present', 'nullable', 'array:id,slug,label'],
            'thumbnail.subject.id' => ['required_with:thumbnail.subject', 'integer', 'min:1'],
            'thumbnail.subject.slug' => ['required_with:thumbnail.subject', 'string', 'max:180', 'regex:/^[a-z0-9_-]+$/D'],
            'thumbnail.subject.label' => ['required_with:thumbnail.subject', 'string', 'max:140'],
            'thumbnail.asset' => ['required', 'array:id,sha256'],
            'thumbnail.asset.id' => ['required', Rule::in(self::ASSETS)],
            'thumbnail.asset.sha256' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/D'],
            'thumbnail.palette' => ['required', 'array:id,background,primary,secondary,text,muted,badge,badgeText'],
            'thumbnail.palette.id' => ['required', Rule::in(self::ASSETS)],
            ...collect(['background', 'primary', 'secondary', 'text', 'muted', 'badge', 'badgeText'])
                ->mapWithKeys(fn ($key) => ['thumbnail.palette.'.$key => ['required', 'string', 'regex:/^#[a-fA-F0-9]{6}$/D']])->all(),
        ])->validate()['thumbnail'];
        $major = Major::findOrFail($document['major']['id'] ?? null);
        $palette = ['health-competition' => 'health', 'teaching-competition' => 'education', 'computer-science-it' => 'it',
            'physics' => 'physics', 'mathematics' => 'mathematics', 'chemistry' => 'chemistry', 'finance' => 'finance',
            'economy' => 'economy', 'svt' => 'svt', 'arabic' => 'arabic', 'english' => 'english', 'spanish' => 'spanish', 'french' => 'french'][$major->slug] ?? 'neutral';
        $body = $facts ? ($document['facts'][0]['text'] ?? '') : ($document['questions'][0]['text'] ?? '');
        $arabic = preg_match_all('/\p{Arabic}/u', $body); $latin = preg_match_all('/\p{Latin}/u', $body);
        $locale = $facts ? ($document['language'] ?? null) : ($document['questions'][0]['language'] ?? $document['video']['language'] ?? ($arabic > $latin ? 'ar' : $data['locale']));
        $number = $facts ? null : ($document['video']['display_number'] ?? null);
        $valid = $data['display_number'] === $number && $data['major']['id'] === $major->id && $data['major']['slug'] === $major->slug
            && $data['palette']['id'] === $palette && in_array($data['asset']['id'], [$palette, 'neutral'], true)
            && $data['locale'] === $locale && ! ($latin > $arabic && $locale === 'ar');
        if ($facts) $valid = $valid && $data['subject'] === null;
        else $valid = $valid && ($data['subject']['id'] ?? null) === ($document['subject']['id'] ?? null)
            && ($data['subject']['slug'] ?? null) === ($document['subject']['slug'] ?? 'subject-'.($document['subject']['id'] ?? ''));
        if (! $valid) throw ValidationException::withMessages(['render_options.thumbnail' => 'Thumbnail classification must match the reviewed video and its Major.']);
        if ($this->contrast($data['palette']['text'], $data['palette']['background']) < 4.5
            || $this->contrast($data['palette']['muted'], $data['palette']['background']) < 4.5
            || $this->contrast($data['palette']['primary'], $data['palette']['background']) < 4.5
            || $this->contrast($data['palette']['badgeText'], $data['palette']['badge']) < 4.5) {
            throw ValidationException::withMessages(['render_options.thumbnail.palette' => 'Thumbnail text contrast must be at least 4.5:1.']);
        }
    }

    private function contrast(string $a, string $b): float
    {
        $luminance = function (string $hex): float {
            $sum = 0;
            foreach ([0.2126, 0.7152, 0.0722] as $index => $weight) {
                $value = hexdec(substr($hex, 1 + $index * 2, 2)) / 255;
                $sum += ($value <= 0.04045 ? $value / 12.92 : (($value + 0.055) / 1.055) ** 2.4) * $weight;
            }
            return $sum;
        };
        $values = [$luminance($a), $luminance($b)];
        return (max($values) + 0.05) / (min($values) + 0.05);
    }
}
