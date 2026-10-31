<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursCategory;
use App\Models\ConcoursDiscovery;
use App\Models\ConcoursInstitution;
use App\Models\User;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursWadifaBilingualTest extends ConcoursTestCase
{
    private ConcoursAnnouncementSource $source;

    protected function setUp(): void
    {
        parent::setUp();
        Http::preventStrayRequests();
        Artisan::call('concours:register-sources');
        $this->source = ConcoursAnnouncementSource::where('key', WadifaInfoNormalizer::KEY)->firstOrFail();
        $this->source->update(['enabled' => true]);
        $admin = User::create(['name' => 'Bilingual fixture', 'username' => 'bilingual-fixture', 'email' => 'bilingual@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($admin));
    }

    private function payload(string $language, int $count = 3): array
    {
        // Explicitly synthetic language values, never AI translations of real official names.
        $base = json_decode(file_get_contents(base_path('artifacts/wadifa-info-evaluation/api-sample.json')), true, 32, JSON_THROW_ON_ERROR);
        $base['items'] = [];
        for ($id = 1; $id <= $count; $id++) {
            $base['items'][] = ['id' => $id, 'employer' => $language === 'ar' ? 'مؤسسة اختبار معزولة' : 'Établissement public de test',
                'grade' => $language === 'ar' ? 'منصب اختبار' : 'Ingénieur de test', 'posts' => 2,
                'published' => '2026-10-27', 'deadline' => '2026-11-10',
                'url' => 'https://www.wadifa-info.com/'.$language.'/'.$id.'/fixture',
                'official_notice' => 'https://www.emploi-public.ma/fixture-'.$id];
        }
        $base['count'] = count($base['items']);

        return $base;
    }

    private function parsed(string $language, ?array $payload = null): array
    {
        return app(WadifaInfoNormalizer::class)->parse(json_encode($payload ?? $this->payload($language), JSON_THROW_ON_ERROR), $language);
    }

    public function test_languages_match_only_by_provider_id_and_leave_missing_arabic_explicit(): void
    {
        $french = $this->parsed('fr');
        $arabic = $this->parsed('ar', $this->payload('ar', 2));
        $items = app(WadifaInfoNormalizer::class)->bilingual($french, array_reverse($arabic));
        $this->assertCount(3, $items);
        $this->assertSame(['1', '2', '3'], array_column($items, 'source_identifier'));
        foreach ($items as $index => $item) {
            $this->assertSame($french[$index]['institution'], $item['institution']);
            $this->assertSame($french[$index]['grade'], $item['grade']);
            $this->assertSame($french[$index]['source_article_url'], $item['source_article_url']);
            $this->assertArrayNotHasKey('registration_opens_on', $item);
        }
        $this->assertSame('مؤسسة اختبار معزولة', $items[0]['provider_metadata']['employer_ar']);
        $this->assertSame('منصب اختبار', $items[0]['provider_metadata']['grade_ar']);
        $this->assertSame('available', $items[0]['provider_metadata']['arabic_status']);
        $this->assertSame('missing', $items[2]['provider_metadata']['arabic_status']);
        $this->assertNull($items[2]['provider_metadata']['employer_ar']);
        Http::assertNothingSent();
    }

    public function test_latin_fallback_is_not_misrepresented_as_an_arabic_translation_and_conflicting_facts_do_not_merge(): void
    {
        $payload = $this->payload('ar');
        $payload['items'][0]['grade'] = 'Ingénieur non traduit';
        $payload['items'][1]['deadline'] = '2026-11-11';
        $items = app(WadifaInfoNormalizer::class)->bilingual($this->parsed('fr'), $this->parsed('ar', $payload));
        $this->assertSame('partial', $items[0]['provider_metadata']['arabic_status']);
        $this->assertNull($items[0]['provider_metadata']['grade_ar']);
        $this->assertSame('conflict', $items[1]['provider_metadata']['arabic_status']);
        $this->assertNull($items[1]['provider_metadata']['employer_ar']);
        $this->assertSame('2026-11-10', $items[1]['application_deadline']);
    }

    public function test_duplicate_or_mismatched_bilingual_ids_are_rejected_without_database_writes(): void
    {
        $arabic = $this->parsed('ar');
        $arabic[1]['provider_metadata']['provider_id'] = '999';
        try {
            app(WadifaInfoNormalizer::class)->bilingual($this->parsed('fr'), $arabic);
            $this->fail('Mismatched ID accepted.');
        } catch (\RuntimeException $error) {
            $this->assertSame('invalid_bilingual_identity', $error->getMessage());
        }
        $this->expectExceptionMessage('invalid_bilingual_identity');
        app(WadifaInfoNormalizer::class)->bilingual($this->parsed('fr'), [$this->parsed('ar')[0], $this->parsed('ar')[0]]);
    }

    public function test_enrichment_is_additive_idempotent_and_preserves_rejections_proof_french_fingerprints_and_old_revisions(): void
    {
        $service = app(ConcoursDiscoveryService::class);
        $french = $this->parsed('fr');
        $service->captureFeed($this->source, $french);
        $record = ConcoursDiscovery::where('source_identifier', '1')->firstOrFail();
        $this->postJson('/api/v1/admin/concours-discovery/discoveries/'.$record->id.'/review', ['action' => 'reject', 'version' => $record->version, 'review_note' => 'Fixture out of editorial scope'])
            ->assertOk()->assertJsonPath('data.status', 'rejected');
        $proof = ConcoursDiscovery::where('source_identifier', '2')->firstOrFail();
        $proof->update(['official_url' => 'https://www.emploi-public.ma/fixture-2', 'official_verified_at' => now(), 'review_note' => 'Preserve fixture proof']);
        $protected = ConcoursDiscovery::orderBy('id')->get()->mapWithKeys(fn ($row) => [$row->id => Arr::except($row->getRawOriginal(), ['version', 'updated_at'])])->all();
        $old = DB::table('concours_discovery_revisions')->orderBy('id')->get()->toArray();
        $items = app(WadifaInfoNormalizer::class)->bilingual($french, $this->parsed('ar'));
        $this->assertSame(3, $service->enrichBilingual($this->source, $items)['enriched']);
        $this->assertSame(3, $service->enrichBilingual($this->source, $items)['unchanged']);
        $this->assertSame(3, ConcoursDiscovery::count());
        $this->assertEquals($old, DB::table('concours_discovery_revisions')->whereIn('id', array_column($old, 'id'))->orderBy('id')->get()->toArray());
        foreach (ConcoursDiscovery::orderBy('id')->get() as $row) {
            $this->assertSame($protected[$row->id], Arr::except($row->getRawOriginal(), ['version', 'updated_at']));
            $this->assertSame('available', $row->provider_metadata['arabic_status']);
        }
        $count = DB::table('concours_discovery_revisions')->count();
        $service->captureFeed($this->source, $french);
        $this->assertSame($count, DB::table('concours_discovery_revisions')->count());
        $this->assertSame('rejected', $record->fresh()->status);
        $this->assertSame(0, ConcoursAnnouncement::count());
        Http::assertNothingSent();
    }

    public function test_legacy_french_replay_does_not_create_spurious_revisions_and_arabic_only_capture_is_forbidden(): void
    {
        $service = app(ConcoursDiscoveryService::class);
        $old = $this->parsed('fr')[0];
        $old['provider_metadata'] = Arr::only($old['provider_metadata'], ['provider_id', 'employer', 'grade', 'positions', 'reported_official_url', 'official_link_verified', 'attribution']);
        $first = $service->capture($this->source, $old);
        $service->capture($this->source, $this->parsed('fr')[0]);
        $this->assertSame(1, $first->revisions()->count());
        $this->assertSame('missing', $first->fresh()->provider_metadata['arabic_status']);
        $this->expectExceptionMessage('french_provider_record_required');
        $service->capture($this->source, $this->parsed('ar')[0]);
    }

    public function test_enrichment_never_inserts_unknown_ids_and_filters_use_arabic_employer_and_declared_deadline(): void
    {
        $service = app(ConcoursDiscoveryService::class);
        $service->captureFeed($this->source, $this->parsed('fr', $this->payload('fr', 1)));
        $items = app(WadifaInfoNormalizer::class)->bilingual($this->parsed('fr'), $this->parsed('ar'));
        $result = $service->enrichBilingual($this->source, $items);
        $this->assertSame(1, $result['enriched']);
        $this->assertSame(2, $result['not_existing']);
        $this->assertSame(1, ConcoursDiscovery::count());
        $this->getJson('/api/v1/admin/concours-discovery/discoveries?institution='.rawurlencode('مؤسسة اختبار').'&deadline_from=2026-11-10&deadline_to=2026-11-10')->assertOk()->assertJsonPath('data.meta.total', 1);
        $this->getJson('/api/v1/admin/concours-discovery/discoveries?deadline_from=2026-11-11')->assertOk()->assertJsonPath('data.meta.total', 0);
        $this->getJson('/api/v1/admin/concours-discovery/discoveries?deadline_from=2026-11-11&deadline_to=2026-11-10')->assertUnprocessable();
    }

    public function test_bilingual_review_creates_one_draft_and_publication_remains_explicit_without_an_invented_opening_date(): void
    {
        $category = ConcoursCategory::create(['slug' => 'bilingual-fixture', 'name_fr' => 'Fixture', 'name_ar' => 'اختبار', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'bilingual-fixture', 'name_fr' => 'Fixture', 'name_ar' => 'اختبار', 'is_active' => true]);
        $course = Concours::create(['slug' => 'bilingual-fixture', 'name_fr' => 'Fixture', 'name_ar' => 'اختبار', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true]);
        $items = app(WadifaInfoNormalizer::class)->bilingual($this->parsed('fr'), $this->parsed('ar'));
        $record = app(ConcoursDiscoveryService::class)->capture($this->source, $items[0]);
        $route = '/api/v1/admin/concours-discovery/discoveries/'.$record->id.'/review';
        $this->postJson($route, ['action' => 'verify_source', 'version' => $record->version, 'source_checked' => true,
            'official_url' => 'https://www.emploi-public.ma/fixture-1', 'candidate_category' => 'employment', 'candidate_type' => 'opening'])->assertOk();
        $record->refresh();
        $this->postJson($route, ['action' => 'approve', 'version' => $record->version, 'source_checked' => true,
            'concours_id' => $course->id, 'preparation_option_ids' => [], 'session_year' => null, 'title_language' => 'fr',
            'verified_title_fr' => 'Titre de test vérifié', 'verified_title_ar' => 'عنوان اختبار متحقق منه', 'positions' => 2,
            'official_publication_date' => '2026-10-27', 'registration_deadline' => '2026-11-10'])->assertOk();
        $notice = ConcoursAnnouncement::firstOrFail();
        $this->assertSame('draft', $notice->publication_status);
        $this->assertSame('Titre de test vérifié', $notice->title_fr);
        $this->assertSame('عنوان اختبار متحقق منه', $notice->title_ar);
        $this->assertNull($notice->registration_opens_on);
        $this->assertSame('https://www.wadifa-info.com/ar/1/fixture', $notice->source_attribution['url_ar']);
        $this->getJson('/api/v1/public/concours-announcements/'.$notice->slug)->assertNotFound();
        $this->postJson('/api/v1/admin/concours-announcements/'.$notice->id.'/verify-publish', ['version' => $notice->version, 'source_checked' => true])->assertOk();
        $this->getJson('/api/v1/public/concours-announcements/'.$notice->slug)->assertOk()->assertJsonPath('data.title_ar', 'عنوان اختبار متحقق منه')->assertJsonPath('data.registration_opens_on', null);
        $this->assertSame(1, ConcoursDiscovery::count());
        Http::assertNothingSent();
    }

    public function test_arabic_endpoint_is_exact_separately_authorized_cached_and_shares_the_host_rate_limit(): void
    {
        config(['concours_discovery.authorized_feed_urls' => [WadifaInfoNormalizer::URL, WadifaInfoNormalizer::ARABIC_SAMPLE_URL]]);
        $this->mock(PublicAddressResolver::class, fn ($mock) => $mock->shouldReceive('resolve')->andReturn('93.184.216.34'));
        Http::fake([WadifaInfoNormalizer::URL => Http::response($this->payload('fr'), 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'max-age=7200']),
            WadifaInfoNormalizer::ARABIC_SAMPLE_URL => Http::response($this->payload('ar'), 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'private, max-age=7200'])]);
        $client = app(AuthorizedFeedClient::class);
        $client->fetch($this->source);
        try {
            $client->fetch($this->source, 'ar', 5);
            $this->fail('Shared host rate limiter was bypassed.');
        } catch (\RuntimeException $error) {
            $this->assertSame('provider_rate_limited', $error->getMessage());
        }
        $this->travel(61)->seconds();
        $first = $client->fetch($this->source, 'ar', 5);
        $this->assertSame($first, $client->fetch($this->source, 'ar', 5));
        Http::assertSentCount(2);
        $this->expectExceptionMessage('unsupported_provider_language');
        WadifaInfoNormalizer::endpoint('ar', 10);
    }

    public function test_client_retains_only_documented_metadata_and_discards_unrequested_content(): void
    {
        config(['concours_discovery.authorized_feed_urls' => [WadifaInfoNormalizer::URL]]);
        $this->mock(PublicAddressResolver::class, fn ($mock) => $mock->shouldReceive('resolve')->andReturn('93.184.216.34'));
        $data = $this->payload('fr');
        $data['items'][0]['description'] = 'UNREQUESTED ARTICLE BODY MUST NOT BE STORED';
        $data['items'][0]['image'] = 'https://example.test/unrequested-image';
        Http::fake([WadifaInfoNormalizer::URL => Http::response($data, 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'max-age=3600'])]);
        $body = app(AuthorizedFeedClient::class)->fetch($this->source);
        $this->assertStringNotContainsString('UNREQUESTED', $body);
        $this->assertStringNotContainsString('unrequested-image', $body);
        $this->assertSame($body, Cache::get('concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL)));
        $this->assertCount(3, app(WadifaInfoNormalizer::class)->parse($body));
        Http::assertSentCount(1);
    }
}
