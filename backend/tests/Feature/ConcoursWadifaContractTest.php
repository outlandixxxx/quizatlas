<?php

namespace Tests\Feature;

use App\Models\ConcoursDiscovery;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursWadifaContractTest extends ConcoursTestCase
{
    private function payload(): array
    {
        return json_decode(file_get_contents(base_path('artifacts/wadifa-info-evaluation/api-sample.json')), true, 32, JSON_THROW_ON_ERROR);
    }

    public function test_reviewed_localized_credit_obligations_do_not_change_immutable_licence_or_item_identity(): void
    {
        Http::preventStrayRequests();
        $original = $this->payload();
        // Synthetic text, not a claim about the failed live Arabic envelope or translations.
        foreach ([$original['attribution']['required'],
            'Affichez « Source : Wadifa Info » avec un lien visible et cliquable vers le champ url de chaque élément.',
            'اعرض «المصدر: Wadifa Info» مع رابط مرئي إلى عنوان URL لكل عنصر (حقل url).',
            'اعرض «المصدر: Wadifa Info» مع رابط واضح وقابل للنقر إلى حقل url لكل عنصر.',
            'اعرض «Source : Wadifa Info» مع رابط مرئي إلى عنوان URL لكل عنصر (حقل url).',
            str_replace([' : ', "'"], ["\u{00A0}:\u{00A0}", '’'], $original['attribution']['required'])] as $required) {
            $payload = $original;
            $payload['attribution']['required'] = $required;
            foreach (['fr', 'ar'] as $language) {
                $items = app(WadifaInfoNormalizer::class)->parse(json_encode($payload), $language);
                $this->assertCount(5, $items);
                $this->assertSame('146623', $items[0]['source_identifier']);
                $this->assertSame('CC BY 4.0', $items[0]['provider_metadata']['attribution']['license']);
                $this->assertSame($original['items'][0]['url'], $items[0]['source_article_url']);
                if ($language === 'ar') {
                    $this->assertSame('missing', $items[0]['provider_metadata']['arabic_status']);
                }
            }
        }
        $this->assertSame(0, ConcoursDiscovery::count());
        Http::assertNothingSent();
    }

    public function test_missing_changed_or_additional_contract_conditions_remain_blocked_before_ingestion(): void
    {
        Http::preventStrayRequests();
        $original = $this->payload()['attribution'];
        foreach ([
            null, [], array_diff_key($original, ['required' => true]),
            array_replace($original, ['required' => null]), array_replace($original, ['required' => ['Source: Wadifa Info']]),
            array_replace($original, ['license' => 'CC-BY-NC-4.0']),
            array_replace($original, ['license_url' => 'https://creativecommons.org/licenses/by-nc/4.0/']),
            array_replace($original, ['license_url' => 'http://creativecommons.org/licenses/by/4.0/']),
            array_replace($original, ['docs' => 'https://www.wadifa-info.com.evil.test/developpeurs']),
            array_replace($original, ['required' => str_replace('Wadifa Info', 'Other Provider', $original['required'])]),
            array_replace($original, ['required' => 'Source : Wadifa Info']),
            array_replace($original, ['required' => $original['required'].' Usage non commercial uniquement.']),
            array_replace($original, ['required' => 'لا تعرض المصدر: Wadifa Info']),
            array_replace($original, ['required' => 'اعرض «المصدر: Wadifa Info» مع رابط واضح وقابل للنقر إلى حقل url لكل عنصر. للاستخدام غير التجاري فقط.']),
            array_replace($original, ['required' => '<a>Source : Wadifa Info</a>']),
            $original + ['additional_terms' => 'No commercial reuse'],
        ] as $credit) {
            $payload = $this->payload();
            $payload['attribution'] = $credit;
            try {
                app(WadifaInfoNormalizer::class)->parse(json_encode($payload), 'ar');
                $this->fail('Changed or incomplete contract was accepted.');
            } catch (\RuntimeException $error) {
                $this->assertSame('provider_license_changed', $error->getMessage());
            }
        }
        $this->assertSame(0, ConcoursDiscovery::count());
        Http::assertNothingSent();
    }
}
