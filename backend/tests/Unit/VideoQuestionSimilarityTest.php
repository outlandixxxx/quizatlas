<?php

namespace Tests\Unit;

use App\Services\VideoQuestionSelector;
use Illuminate\Support\Str;
use PHPUnit\Framework\TestCase;

class VideoQuestionSimilarityTest extends TestCase
{
    public function test_fast_upper_bound_preserves_existing_unicode_and_mixed_text_similarity_results(): void
    {
        $selector = new VideoQuestionSelector();
        $compare = new \ReflectionMethod($selector, 'hasNearDuplicate');
        $texts = ['', 'quelle force attire les corps vers la terre', 'quelle force attire les corps vers mars',
            'quelle unité mesure une température', 'why does light change direction', 'why does sound change direction',
            'ما القوة التي تجذب الأجسام نحو الأرض', 'ما القوة التي تجذب الأجسام نحو المريخ',
            'كيف يحافظ جسم الإنسان على درجة حرارته الطبيعية', 'الضغط 120 mmhg والقوة 50 newton',
            'الضغط 120 mmhg والقوة 55 newton', 'énergie énergie 20 20', 'énergie 20 énergie 20',
            'abc', 'cba', str_repeat('ab', 50), str_repeat('ba', 50)];
        foreach ([0.0, 50.0, 88.0, 100.0] as $threshold) foreach ($texts as $a) foreach ($texts as $b) {
            $expected = $a === $b;
            if (!$expected && Str::length($a) > 0 && Str::length($b) > 0
                && 200 * min(Str::length($a), Str::length($b)) / (Str::length($a) + Str::length($b)) >= $threshold) {
                similar_text($a, $b, $similarity); $expected = $similarity >= $threshold;
            }
            $this->assertSame($expected, $compare->invoke($selector, $a, [$b], $threshold), $a.' / '.$b.' at '.$threshold);
        }
    }

    public function test_request_local_signature_cache_is_bounded(): void
    {
        $selector = new VideoQuestionSelector(); $compare = new \ReflectionMethod($selector, 'hasNearDuplicate');
        foreach (range(1, 2100) as $number) $compare->invoke($selector, 'question '.$number, [], 88.0);
        $cache = new \ReflectionProperty($selector, 'textSignatures');
        $this->assertCount(2048, $cache->getValue($selector));
    }
}
