<?php

namespace App\Services\ContentUsage;

use App\Models\Fact;
use App\Models\Question;
use Illuminate\Validation\ValidationException;

final class Fingerprint
{
    public const FACT_LANGUAGES = ['fr', 'en', 'ar'];
    public const FACT_VIDEO_TYPES = ['facts-short', 'facts-long'];

    public static function factVideo(Fact $fact, string $language, string $videoType): array
    {
        abort_unless(in_array($language, self::FACT_LANGUAGES, true) && in_array($videoType, self::FACT_VIDEO_TYPES, true), 422, 'Unsupported fact video language or format.');
        $text = trim((string) $fact->{'text_'.$language});
        abort_unless($text !== '', 422, 'This fact has no translation in the selected language.');
        $source = self::source($fact);
        $prefix = 'fact:video:'.$language.':'.$videoType.':';
        $textHash = hash('sha256', 'text-v1:'.self::normalize($text));
        return array_replace($source, [
            'fingerprint' => hash('sha256', $prefix.'text:'.$textHash),
            'source_hash' => self::requestHash([$language, $videoType, $fact->{'text_'.$language}, $fact->source_url, (bool) $fact->is_verified]),
            'identity_keys' => [$prefix.'id:'.$fact->id, $prefix.'text:'.$textHash],
            'label' => mb_substr(self::normalize($text), 0, 170),
        ]);
    }

    public static function factVideoScope(array $keys): ?array
    {
        foreach ($keys as $key) {
            if (preg_match('/^fact:video:(fr|en|ar):(facts-short|facts-long):id:[1-9][0-9]*$/D', $key, $match)) {
                return ['language' => $match[1], 'video_type' => $match[2]];
            }
        }
        return null;
    }

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
        $source->loadMissing($type === 'question' ? ['choices', 'quiz.subject.major'] : ['major']);
        $subject = $type === 'question' ? $source->quiz?->subject : null;
        $version = $type === 'question'
            ? [$source->question, $source->type, $source->explanation, $source->choices->sortBy('id')->map(fn ($c) => [$c->choice_text, (bool) $c->is_correct, $c->order])->all()]
            : [$source->text_fr, $source->text_ar, $source->text_en, $source->source_url, (bool) $source->is_verified];
        return ['source_type' => $type, 'source_id' => (int) $source->id,
            'fingerprint' => $hashes[0], 'source_hash' => self::requestHash($version),
            'identity_keys' => array_merge([$type.':id:'.$source->id], array_map(fn ($hash) => $type.':text:'.$hash, $hashes)),
            'label' => mb_substr(self::normalize((string) ($texts[0] ?: collect($texts)->filter()->first())), 0, 170),
            'subject_id' => $subject?->id] + ($type === 'fact' ? ['major_id' => $source->major_id] : []);
    }
}
