<?php

namespace App\Services\ContentUsage;

use App\Models\Fact;
use App\Models\Question;
use Illuminate\Validation\ValidationException;

final class Fingerprint
{
    // Preserve punctuation, accents, digits, Arabic marks and mathematical signs.
    // Only canonical Unicode, case, HTML entities and whitespace are normalized.
    public static function normalize(string $text): string
    {
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = \Normalizer::normalize($text, \Normalizer::FORM_C) ?: $text;
        return mb_strtolower(trim(preg_replace('/[\p{Z}\s]+/u', ' ', $text) ?? $text), 'UTF-8');
    }

    public static function requestHash(mixed $value): string
    {
        $canonical = function ($v) use (&$canonical) {
            if ($v instanceof \Illuminate\Contracts\Support\Arrayable) $v = $v->toArray();
            if (! is_array($v)) return $v;
            if (! array_is_list($v)) {
                unset($v['exported_at'], $v['generated_at']);
                ksort($v);
            }
            return array_map($canonical, $v);
        };
        return hash('sha256', json_encode($canonical($value), JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }

    public static function source(Question|Fact $source): array
    {
        $type = $source instanceof Question ? 'question' : 'fact';
        $texts = $type === 'question' ? [$source->question] : [$source->text_fr, $source->text_ar, $source->text_en];
        $hashes = collect($texts)->map(fn ($v) => self::normalize((string) $v))->filter()
            ->map(fn ($v) => hash('sha256', 'text-v1:'.$v))->unique()->sort()->values()->all();
        if (! $hashes) throw ValidationException::withMessages(['content' => 'A selected source has no usable text.']);
        $source->loadMissing($type === 'question' ? ['choices', 'quiz.subject.major'] : ['subject.major']);
        $subject = $type === 'question' ? $source->quiz?->subject : $source->subject;
        $version = $type === 'question'
            ? [$source->question, $source->type, $source->explanation, $source->choices->sortBy('id')->map(fn ($c) => [$c->choice_text, (bool) $c->is_correct, $c->order])->all()]
            : [$source->text_fr, $source->text_ar, $source->text_en, $source->source_url, (bool) $source->is_verified];
        return ['source_type' => $type, 'source_id' => (int) $source->id,
            'fingerprint' => $hashes[0], 'source_hash' => self::requestHash($version),
            'identity_keys' => array_merge([$type.':id:'.$source->id], array_map(fn ($hash) => $type.':text:'.$hash, $hashes)),
            'label' => mb_substr(self::normalize((string) ($texts[0] ?: collect($texts)->filter()->first())), 0, 170),
            'subject_id' => $subject?->id];
    }
}
