<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursCategory;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscovery\AuthorizedFeedClient;
use App\Services\ConcoursDiscovery\FactualMetadataPolicy;
use App\Services\ConcoursDiscovery\FeedParser;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscoveryService;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursFactualMetadataTest extends ConcoursTestCase
{
    private const API = '/api/v1/admin/concours-discovery';

    private ConcoursAnnouncementSource $source;

    protected function setUp(): void
    {
        parent::setUp();
        $this->travelTo(now()->setDate(2026, 10, 27)->setTime(12, 0));
        Http::preventStrayRequests();
        Artisan::call('concours:register-sources');
        $this->source = ConcoursAnnouncementSource::where('key', 'alwadifa-maroc')->firstOrFail();
        $this->source->update(['enabled' => true, 'permission_status' => 'allowed',
            'permission_evidence' => config('concours_discovery.factual_metadata_reviews.alwadifa-maroc.evidence'), 'permission_checked_at' => now()]);
        config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [$this->source->listing_url]]);
        $admin = User::create(['name' => 'Factual fixture admin', 'username' => 'facts-fixture', 'email' => 'facts@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($admin));
        $this->mock(PublicAddressResolver::class, fn ($m) => $m->shouldReceive('resolve')->andReturn('93.184.216.34'));
    }

    private function item(string $id = 'one', string $title = 'Ministère de la Santé: concours de recrutement ORIGINAL WORDING'): array
    {
        return ['source_identifier' => $id, 'title' => $title, 'official_url' => 'https://alwadifa-maroc.com/offre/show/id/'.$id,
            'publication_date' => '2026-10-27', 'application_deadline' => '2026-12-01', 'session_year' => 2027, 'institution' => 'DO NOT COPY', 'grade' => 'DO NOT COPY', 'specialty' => 'DO NOT COPY', 'description' => 'DO NOT COPY'];
    }

    public function test_bounded_checks_reach_older_items_then_revisit_updates_without_duplicates(): void
    {
        $items = [];
        for ($i = 0; $i < 25; $i++) {
            $items[] = $this->item((string) $i);
        }
        $service = app(ConcoursDiscoveryService::class);
        for ($i = 0; $i < 3; $i++) {
            $this->assertSame(10, $service->captureFeed($this->source, $items));
            $this->travel(12)->hours();
        }
        $this->assertSame(25, ConcoursDiscovery::count());
        $this->assertSame(25, DB::table('concours_discovery_revisions')->count());
        $items[24]['title'] = 'Ministère de la Santé: résultats du concours de recrutement';
        for ($i = 0; $i < 3; $i++) {
            $service->captureFeed($this->source, $items);
            $this->travel(12)->hours();
        }
        $record = ConcoursDiscovery::where('source_identifier', 'sha256:'.hash('sha256', '24'))->firstOrFail();
        $this->assertSame('results', $record->candidate_type);
        $this->assertSame('pending', $record->status);
        $this->assertStringContainsString('Résultats', $record->title);
        $this->assertStringContainsString('Santé', $record->title);
        $this->assertSame(2, $record->revisions()->count());
        $this->assertSame(25, ConcoursDiscovery::count());
        Http::fake([$this->source->listing_url => Http::response('', 403)]);
        $this->artisan('concours:discover', ['--source' => $this->source->key])->assertFailed();
        $this->assertSame(25, ConcoursDiscovery::count());
        $this->assertSame('http_403', $this->source->fresh()->last_error);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login(User::where('role', 'admin')->firstOrFail()));
        $this->getJson(self::API.'/sources')->assertOk()->assertJsonFragment(['last_error' => 'http_403', 'enabled' => false]);
    }

    public function test_orientation_double_timezone_is_unknown_and_valid_entries_still_parse(): void
    {
        // Two contradictory offsets cannot safely identify the author's intended timezone.
        $xml = '<rss version="2.0"><channel>';
        foreach (['2026-10-16T23:51:29-04:00+00:00', '2026-10-17T00:01:00+01:00+00:00', 'Tue, 27 Oct 2026 12:00:00 +0100'] as $i => $date) {
            $xml .= '<item><guid>'.$i.'</guid><title>Concours accès Master</title><link>https://orientation-chabab.com/example/'.$i.'</link><pubDate>'.$date.'</pubDate></item>';
        }
        $items = app(FeedParser::class)->parse($xml.'</channel></rss>', 'rss_atom');
        $this->assertCount(3, $items);
        $this->assertSame([null, null, '2026-10-27'], array_column($items, 'publication_date'));
        $source = ConcoursAnnouncementSource::where('key', 'orientation-chabab')->firstOrFail();
        $this->assertFalse(app(AuthorizedFeedClient::class)->eligible($source));
        Http::assertNothingSent();
    }

    public function test_factual_assessment_preserves_every_existing_gate_and_is_not_a_written_licence(): void
    {
        $client = app(AuthorizedFeedClient::class);
        $this->assertTrue($client->eligible($this->source));
        $this->getJson(self::API.'/sources')->assertOk()->assertJsonFragment(['collection_scope' => 'facts_only', 'publisher_written_authorization' => false]);
        foreach (['enabled' => false, 'permission_status' => 'unknown', 'permission_evidence' => 'factual-metadata:invented', 'check_interval_minutes' => 60] as $field => $value) {
            $copy = clone $this->source;
            $copy->$field = $value;
            $this->assertFalse($client->eligible($copy), $field);
        }
        $copy = clone $this->source;
        $copy->permission_evidence = 'Public RSS, therefore unrestricted';
        $this->assertFalse($client->eligible($copy));
        config(['concours_discovery.authorized_feed_urls' => []]);
        $this->assertFalse($client->eligible($this->source));
        config(['concours_discovery.authorized_feed_urls' => [$this->source->listing_url], 'concours_discovery.automation_enabled' => false]);
        $this->artisan('concours:discover')->assertSuccessful();
        Http::assertNothingSent();
    }

    public function test_minimized_records_appear_in_the_real_admin_listing_and_repeated_ingestion_is_idempotent(): void
    {
        $items = [];
        for ($i = 0; $i < 15; $i++) {
            $items[] = $this->item((string) $i);
        }
        array_unshift($items, $this->item('private', 'Entreprise privée recrute un ingénieur'));
        $service = app(ConcoursDiscoveryService::class);
        $this->assertSame(10, $service->captureFeed($this->source, $items));
        $this->assertSame(10, $service->captureFeed($this->source, $items));
        $this->assertSame(15, ConcoursDiscovery::count());
        $this->assertSame(15, DB::table('concours_discovery_revisions')->count());
        $response = $this->getJson(self::API.'/discoveries?source_id='.$this->source->id.'&status=pending&candidate_category=employment')->assertOk()->assertJsonPath('data.meta.total', 15);
        foreach ($response->json('data.items') as $row) {
            $this->assertSame('facts_only', $row['metadata_scope']);
            $this->assertStringStartsWith(FactualMetadataPolicy::TITLE_PREFIX, $row['title']);
            $this->assertStringStartsWith('sha256:', $row['source_identifier']);
            $this->assertNull($row['official_url']);
            foreach (['application_deadline', 'session_year', 'institution', 'grade', 'specialty'] as $field) {
                $this->assertNull($row[$field]);
            }
        }
        $snapshots = json_encode(DB::table('concours_discovery_revisions')->pluck('snapshot'));
        $this->assertStringNotContainsString('ORIGINAL WORDING', $snapshots);
        $this->assertStringNotContainsString('DO NOT COPY', $snapshots);
        $this->assertSame(0, ConcoursAnnouncement::count());
        $this->assertSame(0, DB::table('concours_notification_events')->count());
        Http::assertNothingSent();
    }

    public function test_transient_headline_changes_reopen_review_without_storing_the_wording(): void
    {
        $service = app(ConcoursDiscoveryService::class);
        $first = $service->capture($this->source, $this->item());
        $urlOnly = $this->item();
        unset($urlOnly['source_identifier']);
        $observed = $service->capture($this->source, $urlOnly);
        $this->assertSame($first->id, $observed->id);
        $this->assertSame($first->source_identifier, $observed->source_identifier);
        $this->assertSame(1, $observed->version);
        $this->assertSame(1, ConcoursDiscovery::count());
        $first->update(['status' => 'rejected', 'official_url' => 'https://www.emploi-public.ma/fixture', 'official_verified_at' => now()]);
        $changed = $service->capture($this->source, $this->item('one', 'Ministère de la Santé: concours de recrutement NEW WORDING'));
        $this->assertSame($first->id, $changed->id);
        $this->assertSame('pending', $changed->status);
        $this->assertSame(2, $changed->version);
        $this->assertNull($changed->official_verified_at);
        $this->assertNull($changed->official_url);
        $this->assertStringNotContainsString('NEW WORDING', json_encode($changed->revisions()->get()));
    }

    public function test_access_refusal_stops_the_factual_source_and_is_visible_without_another_request(): void
    {
        $wrapped = new RequestException('An error occurred in on_headers', new Request('GET', $this->source->listing_url), null, new \RuntimeException('http_403'));
        $this->assertSame('http_403', AuthorizedFeedClient::errorCode($wrapped));
        $this->assertSame('collection_failed', AuthorizedFeedClient::errorCode(new \RuntimeException('Untrusted body or URL with secret text')));
        Http::fake([$this->source->listing_url => Http::response('Access denied', 403, ['Content-Type' => 'text/html'])]);
        $this->artisan('concours:discover')->assertFailed();
        $this->assertFalse($this->source->fresh()->enabled);
        $this->assertSame('http_403', $this->source->fresh()->last_error);
        $this->getJson(self::API.'/sources')->assertOk()->assertJsonFragment(['collection_assessment' => 'unavailable_access', 'automated_ready' => false]);
        $this->travel(13)->hours();
        $this->artisan('concours:discover')->assertSuccessful();
        Http::assertSentCount(1);
        $this->assertSame(0, ConcoursDiscovery::count());
    }

    public function test_restricted_sources_and_expired_reviews_cannot_use_the_factual_basis(): void
    {
        $policy = app(FactualMetadataPolicy::class);
        foreach (['dreamjob', 'orientation-chabab'] as $key) {
            $source = ConcoursAnnouncementSource::where('key', $key)->firstOrFail();
            $source->fill(['enabled' => true, 'permission_status' => 'allowed', 'permission_evidence' => $this->source->permission_evidence, 'permission_checked_at' => now()]);
            $this->assertFalse($policy->eligible($source));
        }
        $this->travel(31)->days();
        $this->assertFalse(app(AuthorizedFeedClient::class)->eligible($this->source));
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login(User::firstOrFail()));
        $this->getJson(self::API.'/sources')->assertOk()->assertJsonFragment(['collection_assessment' => 'unavailable_review_expired']);
        $this->artisan('concours:discover')->assertSuccessful();
        Http::assertNothingSent();
    }

    public function test_factual_draft_requires_independent_official_evidence_and_an_official_title(): void
    {
        $record = app(ConcoursDiscoveryService::class)->capture($this->source, $this->item());
        $category = ConcoursCategory::create(['slug' => 'facts', 'name_fr' => 'Fixture', 'name_ar' => 'تجربة', 'is_active' => true]);
        $concours = Concours::create(['slug' => 'facts', 'name_fr' => 'Existing fixture', 'name_ar' => 'تجربة', 'category_id' => $category->id, 'type' => 'recruitment', 'is_active' => true]);
        $payload = ['version' => 1, 'action' => 'approve', 'source_checked' => true, 'concours_id' => $concours->id,
            'title_language' => 'fr', 'session_year' => null, 'preparation_option_ids' => [], 'verified_title' => 'Official fixture title'];
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $payload)->assertUnprocessable();
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', ['version' => 1, 'action' => 'verify_source', 'source_checked' => true,
            'official_url' => 'https://www.emploi-public.ma/fixture', 'candidate_category' => 'employment', 'candidate_type' => 'opening'])->assertOk();
        $payload['version'] = 2;
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', array_replace($payload, ['verified_title' => null]))->assertUnprocessable();
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', array_replace($payload, ['verified_title' => $record->title]))->assertUnprocessable();
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $payload)->assertOk();
        $draft = ConcoursAnnouncement::firstOrFail();
        $this->assertSame('draft', $draft->publication_status);
        $this->assertSame('Official fixture title', $draft->title_fr);
        $this->assertSame(0, DB::table('exam_pdfs')->count());
        $this->assertSame(0, DB::table('concours_notification_events')->count());
    }
}
