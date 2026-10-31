<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursCategory;
use App\Models\ConcoursDiscovery;
use App\Models\ConcoursInstitution;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\CandidateClassifier;
use App\Services\ConcoursDiscovery\DuplicateCandidates;
use App\Services\ConcoursDiscovery\FeedParser;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscovery\WadifaInfoNormalizer;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Tests\ConcoursTestCase;

class ConcoursWadifaInfoTest extends ConcoursTestCase
{
    private ConcoursAnnouncementSource $source;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->travelTo(now()->setDate(2026, 10, 27)->setTime(21, 0));
        Http::preventStrayRequests();
        Artisan::call('concours:register-sources');
        $this->source = ConcoursAnnouncementSource::where('key', 'wadifa-info')->firstOrFail();
        $this->source->update(['enabled' => true]);
        config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [WadifaInfoNormalizer::URL],
            'concours_notifications.enabled' => false, 'concours_notifications.push_enabled' => false]);
        $this->mock(PublicAddressResolver::class, fn ($m) => $m->shouldReceive('resolve')->andReturn('93.184.216.34'));
        $this->admin = User::create(['name' => 'Wadifa fixture', 'username' => 'wadifa-fixture', 'email' => 'wadifa@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
    }

    private function payload(): array
    {
        return json_decode(file_get_contents(base_path('artifacts/wadifa-info-evaluation/api-sample.json')), true, 32, JSON_THROW_ON_ERROR);
    }

    private function parsed(?array $data = null): array
    {
        return app(WadifaInfoNormalizer::class)->parse(json_encode($data ?? $this->payload(), JSON_THROW_ON_ERROR));
    }

    public function test_actual_saved_api_sample_normalizes_factual_fields_and_never_implies_verification(): void
    {
        $items = $this->parsed();
        $this->assertCount(5, $items);
        $this->assertSame('146623', $items[0]['source_identifier']);
        $this->assertSame('Bank Al-Maghrib', $items[0]['institution']);
        $this->assertSame(1, $items[0]['provider_metadata']['positions']);
        $this->assertSame('2026-11-10', $items[0]['application_deadline']);
        $this->assertFalse($items[0]['provider_metadata']['official_link_verified']);
        $this->assertArrayNotHasKey('official_url', $items[0]);
        foreach ($items as $item) {
            foreach (['session_year', 'specialty', 'description', 'content', 'image', 'registration_opens_on'] as $field) {
                $this->assertArrayNotHasKey($field, $item);
            }
        }
        $this->expectException(\RuntimeException::class);
        app(FeedParser::class)->parse(json_encode($this->payload()), 'json_feed');
    }

    public function test_bounded_hundred_item_window_paginates_without_fuzzy_merging_and_preserves_event_hints(): void
    {
        $data = $this->payload();
        $template = $data['items'][0];
        $data['items'] = [];
        for ($i = 1; $i <= 100; $i++) {
            $data['items'][] = array_replace($template, ['id' => $i, 'url' => 'https://www.wadifa-info.com/fr/'.$i.'/fixture']);
        }
        $data['count'] = 100;
        $data['items'][0]['url'] = 'https://www.wadifa-info.com/fr/1/resultats-concours';
        $items = $this->parsed($data);
        $this->assertSame('results', app(WadifaInfoNormalizer::class)->classification($items[0])['candidate_type']);
        $service = app(ConcoursDiscoveryService::class);
        $this->assertSame(100, $service->captureFeed($this->source, $items));
        $this->assertSame(100, $service->captureFeed($this->source, $items));
        $this->assertSame(100, DB::table('concours_discovery_revisions')->count());
        $this->getJson('/api/v1/admin/concours-discovery/discoveries?source_id='.$this->source->id.'&per_page=50&page=2')
            ->assertOk()->assertJsonPath('data.meta.total', 100)->assertJsonPath('data.meta.last_page', 2)->assertJsonCount(50, 'data.items');
        $this->assertSame([], app(DuplicateCandidates::class)->suggestions(ConcoursDiscovery::firstOrFail()));
    }

    public function test_optional_malformed_fields_become_unknown_without_copying_content(): void
    {
        $data = $this->payload();
        $data['items'][0] = array_replace($data['items'][0], ['employer' => ['bad'], 'grade' => '<script>bad</script>', 'posts' => -4,
            'published' => '2026-02-31', 'deadline' => 'tomorrow', 'official_notice' => 'https://127.0.0.1/private', 'description' => 'DO NOT IMPORT']);
        $item = $this->parsed($data)[0];
        foreach (['institution', 'grade', 'publication_date', 'application_deadline'] as $field) {
            $this->assertNull($item[$field]);
        }
        $this->assertNull($item['provider_metadata']['positions']);
        $this->assertNull($item['provider_metadata']['reported_official_url']);
        $this->assertSame('excluded', app(WadifaInfoNormalizer::class)->classification($item)['candidate_category']);
        $this->assertStringNotContainsString('DO NOT IMPORT', json_encode($item));
    }

    public function test_invalid_id_article_envelope_or_licence_aborts_before_ingestion(): void
    {
        foreach (['id', 'url', 'duplicate', 'license', 'count', 'items', 'depth', 'syntax'] as $case) {
            $data = $this->payload();
            if ($case === 'id') {
                $data['items'][0]['id'] = '146623';
            }
            if ($case === 'url') {
                $data['items'][0]['url'] = 'https://www.wadifa-info.com@evil.test/fr/146623/a';
            }
            if ($case === 'duplicate') {
                $data['items'][1] = $data['items'][0];
            }
            if ($case === 'license') {
                $data['attribution']['license'] = 'all rights reserved';
            }
            if ($case === 'count') {
                $data['count'] = 99;
            }
            if ($case === 'items') {
                $data['items'] = array_fill(0, 101, $data['items'][0]);
                $data['count'] = count($data['items']);
            }
            $body = $case === 'syntax' ? '{' : ($case === 'depth' ? str_repeat('[', 40).'0'.str_repeat(']', 40) : json_encode($data));
            try {
                app(WadifaInfoNormalizer::class)->parse($body);
                $this->fail($case.' accepted');
            } catch (\RuntimeException $e) {
                $this->assertNotEmpty(AuthorizedFeedClient::errorCode($e));
            }
        }
        $this->assertSame(0, ConcoursDiscovery::count());
    }

    public function test_source_and_http_security_gates_remain_mandatory(): void
    {
        $client = app(AuthorizedFeedClient::class);
        $this->assertTrue($client->eligible($this->source));
        foreach (['listing_url' => 'https://www.wadifa-info.com/rss', 'permission_evidence' => 'RSS is public', 'enabled' => false,
            'permission_status' => 'unknown', 'collection_method' => 'rss_atom', 'source_kind' => 'official'] as $field => $value) {
            $copy = clone $this->source;
            $copy->$field = $value;
            $this->assertFalse($client->eligible($copy), $field);
        }
        config(['concours_discovery.authorized_feed_urls' => []]);
        $this->assertFalse($client->eligible($this->source));
        $this->artisan('concours:discover', ['--source' => 'wadifa-info'])->assertSuccessful();
        Http::assertNothingSent();
    }

    public function test_command_uses_custom_normalizer_preserves_provenance_and_has_no_replay_duplicates(): void
    {
        Http::fake(function ($request, $options) {
            $this->assertSame(WadifaInfoNormalizer::URL, $request->url());
            $this->assertFalse($options['allow_redirects']);
            $this->assertSame('', $options['proxy']);
            $this->assertSame(15, $options['timeout']);
            $this->assertSame(5, $options['connect_timeout']);
            $this->assertSame(['www.wadifa-info.com:443:93.184.216.34'], $options['curl'][CURLOPT_RESOLVE]);

            return Http::response($this->payload(), 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'public, max-age=7200']);
        });
        $this->artisan('concours:discover', ['--source' => 'wadifa-info'])->assertSuccessful();
        $this->assertSame(4, ConcoursDiscovery::count());
        $this->assertSame(4, DB::table('concours_discovery_revisions')->count());
        $this->assertSame(4, app(ConcoursDiscoveryService::class)->captureFeed($this->source, $this->parsed()));
        $this->assertSame(4, DB::table('concours_discovery_revisions')->count());
        $response = $this->getJson('/api/v1/admin/concours-discovery/discoveries?source_id='.$this->source->id)->assertOk()->assertJsonPath('data.meta.total', 4);
        foreach ($response->json('data.items') as $row) {
            $this->assertSame('facts_only', $row['metadata_scope']);
            $this->assertSame('pending', $row['status']);
            $this->assertNull($row['official_url']);
            $this->assertNull($row['official_verified_at']);
            $this->assertNull($row['session_year']);
            $this->assertNull($row['announcement_id']);
            $this->assertSame('wadifa-info', $row['provider_metadata']['attribution']['provider']);
            $this->assertFalse($row['provider_metadata']['official_link_verified']);
        }
        $this->getJson('/api/v1/admin/concours-discovery/sources')->assertOk()->assertJsonFragment(['transport_format' => 'wadifa_info_json']);
        $this->assertSame(0, ConcoursAnnouncement::count());
        $this->assertSame(0, DB::table('notifications')->count());
        Http::assertSentCount(1);
    }

    public function test_deadline_positions_and_reported_notice_updates_preserve_old_revision_and_reset_proof(): void
    {
        $service = app(ConcoursDiscoveryService::class);
        $item = $this->parsed()[0];
        $first = $service->capture($this->source, $item);
        $first->update(['status' => 'rejected', 'official_url' => 'https://www.emploi-public.ma/verified', 'official_verified_at' => now()]);
        $item['application_deadline'] = '2026-11-20';
        $item['provider_metadata']['positions'] = 2;
        $item['provider_metadata']['reported_official_url'] = 'https://www.emploi-public.ma/changed';
        $changed = $service->capture($this->source, $item);
        $this->assertSame($first->id, $changed->id);
        $this->assertSame('pending', $changed->status);
        $this->assertNull($changed->official_url);
        $this->assertNull($changed->official_verified_at);
        $this->assertSame(2, $changed->version);
        $this->assertSame(1, $changed->revisions()->oldest('id')->first()->snapshot['provider_metadata']['positions']);
        $this->assertSame(2, $changed->fresh()->provider_metadata['positions']);
        $service->capture($this->source, $item);
        $this->assertSame(2, $changed->revisions()->count());
    }

    public function test_cache_is_at_least_hour_obeys_longer_headers_and_rate_limit_covers_direct_calls(): void
    {
        Http::fake([WadifaInfoNormalizer::URL => Http::response($this->payload(), 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'public, max-age=7200'])]);
        $client = app(AuthorizedFeedClient::class);
        $body = $client->fetch($this->source);
        $this->assertSame($body, $client->fetch($this->source));
        $this->travel(61)->minutes();
        $this->assertSame($body, $client->fetch($this->source));
        Http::assertSentCount(1);
        $this->travel(60)->minutes();
        $client->fetch($this->source);
        Http::assertSentCount(2);
        Cache::forget('concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL));
        try {
            $client->fetch($this->source);
            $this->fail('rate limit absent');
        } catch (\RuntimeException $e) {
            $this->assertSame('provider_rate_limited', $e->getMessage());
        }
        Http::assertSentCount(2);
    }

    public function test_short_provider_cache_header_does_not_reduce_minimum_hour(): void
    {
        Http::fake([WadifaInfoNormalizer::URL => Http::response($this->payload(), 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'max-age=120'])]);
        $client = app(AuthorizedFeedClient::class);
        $client->fetch($this->source);
        $this->travel(1)->minutes();
        $client->fetch($this->source);
        $this->travel(58)->minutes();
        try {
            $client->fetch($this->source);
            $this->fail('stale payload reused');
        } catch (\RuntimeException $e) {
            $this->assertSame('provider_cache_revalidation_deferred', $e->getMessage());
        }
        $this->assertNotNull(Cache::get('concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL)));
        Http::assertSentCount(1);
        $this->travel(2)->minutes();
        $client->fetch($this->source);
        Http::assertSentCount(2);
    }

    public function test_private_no_cache_response_can_be_ingested_once_but_not_reused_without_validation(): void
    {
        Http::fake([WadifaInfoNormalizer::URL => Http::response($this->payload(), 200, ['Content-Type' => 'application/json', 'Cache-Control' => 'no-cache, private'])]);
        $client = app(AuthorizedFeedClient::class);
        $body = $client->fetch($this->source);
        $this->assertCount(5, app(WadifaInfoNormalizer::class)->parse($body));
        try {
            $client->fetch($this->source);
            $this->fail('no-cache payload reused');
        } catch (\RuntimeException $e) {
            $this->assertSame('provider_cache_revalidation_deferred', $e->getMessage());
        }
        Http::assertSentCount(1);
        $this->travel(61)->minutes();
        $client->fetch($this->source);
        Http::assertSentCount(2);
    }

    public function test_provider_error_and_timeout_remain_visible_without_retry_or_import(): void
    {
        foreach ([403, 429, 500] as $status) {
            RateLimiter::clear('concours-wadifa-host:www.wadifa-info.com');
            RateLimiter::clear('concours-discovery-host:www.wadifa-info.com');
            $this->source->refresh()->update(['last_attempt_at' => null]);
            Http::swap(new Factory);
            Http::preventStrayRequests();
            Http::fake([WadifaInfoNormalizer::URL => Http::response('refused', $status, ['Content-Type' => 'text/html'])]);
            $this->artisan('concours:discover', ['--source' => 'wadifa-info'])->assertFailed();
            $this->assertSame('http_'.$status, $this->source->fresh()->last_error);
            $this->artisan('concours:discover', ['--source' => 'wadifa-info'])->assertSuccessful();
        }
        $this->travel(13)->hours();
        Http::swap(new Factory);
        Http::preventStrayRequests();
        Http::fake([WadifaInfoNormalizer::URL => Http::failedConnection()]);
        $this->artisan('concours:discover', ['--source' => 'wadifa-info'])->assertFailed();
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
        $this->getJson('/api/v1/admin/concours-discovery/sources')->assertOk()->assertJsonFragment(['last_error' => 'collection_failed']);
        $this->assertSame(0, ConcoursDiscovery::count());
    }

    public function test_cache_conflict_and_html_are_rejected_without_import_or_cache(): void
    {
        foreach (['text/html', 'application/json'] as $type) {
            RateLimiter::clear('concours-wadifa-host:www.wadifa-info.com');
            Http::fake([WadifaInfoNormalizer::URL => Http::response($this->payload(), 200, ['Content-Type' => $type, 'Cache-Control' => 'no-store'])]);
            try {
                app(AuthorizedFeedClient::class)->fetch($this->source);
                $this->fail('accepted conflict');
            } catch (\RuntimeException $e) {
                $this->assertContains($e->getMessage(), ['unsupported_feed_type', 'provider_cache_no_store']);
            }
            $this->assertNull(Cache::get('concours-wadifa-response:'.hash('sha256', WadifaInfoNormalizer::URL)));
        }
    }

    public function test_public_employer_hints_are_conservative_and_degree_requirements_are_not_admissions(): void
    {
        $classifier = app(CandidateClassifier::class);
        foreach (['Bank Al-Maghrib', 'Agence urbaine de Settat', 'Ministère des Finances', 'Centre hospitalier universitaire', 'Établissement public', 'Police DGSN', 'Office national', 'Université publique'] as $employer) {
            $this->assertSame('employment', $classifier->classify($employer.' concours de recrutement ingénieur titulaire Master')['candidate_category'], $employer);
        }
        foreach (['Atlas On Line /groupe RAM recrute Teleconseiller', 'Entreprise privée recrutement IT', 'Agence de publicité recrute', 'Formation continue Master', 'Société anonyme recrutement'] as $text) {
            $this->assertSame('excluded', $classifier->classify($text)['candidate_category'], $text);
        }
        $this->assertSame('academic', $classifier->classify('Université : concours accès Master')['candidate_category']);
        $this->assertSame('amendment', $classifier->classify('Bank Al-Maghrib : rectificatif concours de recrutement')['candidate_type']);
        $this->assertSame('results', $classifier->classify('Agence urbaine : résultats concours de recrutement')['candidate_type']);
    }

    public function test_saved_live_exclusions_only_change_for_reviewed_employer_names_in_isolated_capture(): void
    {
        $saved = json_decode(file_get_contents(base_path('artifacts/concours-phase5f-final-verification/response-summary.json')), true, 32, JSON_THROW_ON_ERROR);
        $reviewed = ['Office des Changes', 'Centre National pour la Recherche Scientifique et Technique',
            'Office de la Formation Professionnelle et de la Promotion du Travail', "AGENCE NATIONALE DE PROMOTION DE L'EMPLOI ET DES COMPETENCES",
            'Caisse de Dépôt et de Gestion', "Centre Régional d'Investissement Fès - Meknès", "Centre Régional d'Investissement Tanger Tétouan Al Hoceima",
            'Laboratoire Public des Essais et des Etudes (LPEE)', 'Ecole Nationale d’Agriculture de Meknès', 'Univesité Chouaïb Doukkali - El Jadida'];
        $items = [];
        $changed = 0;
        $remaining = 0;
        foreach ($saved['records'] as $entry) {
            $item = $entry['metadata'];
            $expected = $entry['accepted'] || in_array($item['institution'], $reviewed, true);
            $classification = app(WadifaInfoNormalizer::class)->classification($item);
            $this->assertSame($expected ? 'employment' : 'excluded', $classification['candidate_category'], $item['source_identifier']);
            if (! $entry['accepted']) {
                $expected ? $changed++ : $remaining++;
            }
            $items[] = $item;
        }
        $this->assertSame(48, $changed);
        $this->assertSame(16, $remaining);
        $this->assertCount(100, $items);
        $service = app(ConcoursDiscoveryService::class);
        $this->assertSame(84, $service->captureFeed($this->source, $items));
        $this->assertSame(84, $service->captureFeed($this->source, $items));
        $this->assertSame(84, ConcoursDiscovery::count());
        $this->assertSame(84, DB::table('concours_discovery_revisions')->count());
        foreach (ConcoursDiscovery::with('latestObservation')->get() as $record) {
            $original = collect($items)->firstWhere('source_identifier', $record->source_identifier);
            $this->assertSame($original['institution'], $record->institution);
            $this->assertSame($original['grade'], $record->grade);
            $this->assertSame(WadifaInfoNormalizer::bilingualMetadata($original['provider_metadata'], $original['source_article_url']), $record->provider_metadata);
            $this->assertSame('pending', $record->status);
            $this->assertSame(1, $record->version);
            $this->assertNull($record->official_verified_at);
            $this->assertNull($record->announcement_id);
        }
        $this->assertSame(0, ConcoursAnnouncement::count());
        $this->assertSame(0, DB::table('notifications')->count());
        Http::assertNothingSent();
    }

    public function test_institutional_promotion_exceptions_do_not_admit_advertising_private_or_unrelated_employers(): void
    {
        $classifier = app(CandidateClassifier::class);
        foreach (['Office de la Formation Professionnelle et de la Promotion du Travail : formation continue Master',
            "AGENCE NATIONALE DE PROMOTION DE L'EMPLOI ET DES COMPETENCES : concours de recrutement entreprise privée",
            'Office des Changes : publicité concours de recrutement',
            'CNRST : guide de recrutement', 'CNRST : promotion exclusive concours de recrutement',
            'Centre national de conseil privé : concours de recrutement', 'Société régionale multiservices : concours de recrutement',
            'Atlas On Line : concours de recrutement Teleconseiller'] as $text) {
            $this->assertSame('excluded', $classifier->classify($text)['candidate_category'], $text);
        }
        foreach (['Office des Changes', 'CNRST', 'Office de la Formation Professionnelle et de la Promotion du Travail'] as $employer) {
            $this->assertSame('employment', $classifier->classify($employer.' concours de recrutement ingénieur titulaire Master')['candidate_category']);
            $this->assertSame('results', $classifier->classify($employer.' résultats concours de recrutement')['candidate_type']);
            $this->assertSame('amendment', $classifier->classify($employer.' rectificatif concours de recrutement')['candidate_type']);
        }
    }

    public function test_verified_title_is_required_and_attribution_survives_draft_publish_and_later_edits(): void
    {
        $service = app(ConcoursDiscoveryService::class);
        $record = $service->capture($this->source, $this->parsed()[0]);
        $institution = ConcoursInstitution::create(['slug' => 'fixture-bank', 'name_fr' => 'Fixture bank', 'name_ar' => 'تجربة', 'is_active' => true]);
        $category = ConcoursCategory::create(['slug' => 'fixture-wadifa', 'name_fr' => 'Fixture', 'name_ar' => 'تجربة', 'is_active' => true]);
        $concours = Concours::create(['slug' => 'fixture-wadifa', 'name_fr' => 'Fixture bank', 'name_ar' => 'تجربة', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true]);
        $route = '/api/v1/admin/concours-discovery/discoveries/'.$record->id.'/review';
        $approval = ['version' => 1, 'action' => 'approve', 'source_checked' => true, 'concours_id' => $concours->id,
            'title_language' => 'fr', 'session_year' => null, 'preparation_option_ids' => [], 'verified_title' => 'Verified fixture title'];
        $this->postJson($route, $approval)->assertUnprocessable();
        $this->postJson($route, ['version' => 1, 'action' => 'verify_source', 'source_checked' => true,
            'official_url' => $record->provider_metadata['reported_official_url'], 'candidate_category' => 'employment', 'candidate_type' => 'opening'])->assertOk();
        $approval['version'] = 2;
        $this->postJson($route, array_replace($approval, ['verified_title' => null]))->assertUnprocessable();
        $this->postJson($route, array_replace($approval, ['verified_title' => $record->title]))->assertUnprocessable();
        $this->postJson($route, $approval)->assertOk();
        $draft = ConcoursAnnouncement::firstOrFail();
        $this->assertSame('draft', $draft->publication_status);
        $this->assertSame('Verified fixture title', $draft->title_fr);
        $this->assertNull($draft->registration_deadline);
        $this->assertNull($draft->positions);
        $credit = WadifaInfoNormalizer::credit($record->source_article_url);
        $this->assertSame($credit, $draft->source_attribution);
        $announcements = app(ConcoursAnnouncementService::class);
        $published = $announcements->transition($draft->id, $draft->version, 'verify-publish', $this->admin);
        $this->getJson('/api/v1/public/concours-announcements/'.$published->slug)->assertOk()->assertJsonPath('data.source_attribution', $credit);
        $withdrawn = $announcements->transition($published->id, $published->version, 'withdraw', $this->admin);
        $edited = $announcements->save(['version' => $withdrawn->version, 'title_fr' => 'Edited official title', 'concours_id' => $concours->id], $this->admin, $withdrawn->id);
        $announcements->transition($edited->id, $edited->version, 'verify-publish', $this->admin);
        $this->assertSame($credit, $edited->fresh()->source_attribution);
        foreach ($edited->revisions()->get() as $revision) {
            $this->assertSame($credit, $revision->snapshot['source_attribution']);
        }
        $this->assertSame(0, DB::table('notifications')->count());
        $this->assertSame(0, DB::table('exam_pdfs')->count());
        Http::assertNothingSent();
    }
}
