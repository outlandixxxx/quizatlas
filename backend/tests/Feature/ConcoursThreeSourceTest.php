<?php

namespace Tests\Feature;

use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Models\User;
use App\Services\ConcoursDiscovery\FeedParser;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscovery\SourceStatus;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursThreeSourceTest extends ConcoursTestCase
{
    private const API = '/api/v1/admin/concours-discovery';

    private array $expected = ['alwadifa-maroc' => 3, 'dreamjob' => 4, 'orientation-chabab' => 7];

    protected function setUp(): void
    {
        parent::setUp();
        $this->travelTo(now()->setDate(2026, 10, 27)->setTime(20, 0));
        Http::preventStrayRequests();
        Artisan::call('concours:register-sources');
        $admin = User::create(['name' => 'Three-source fixture', 'username' => 'three-source', 'email' => 'three-source@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($admin));
    }

    public function test_reviewed_terms_block_live_collection_even_when_generic_permission_is_claimed(): void
    {
        config(['concours_discovery.automation_enabled' => true]);
        $urls = [];
        foreach (['dreamjob', 'orientation-chabab'] as $key) {
            $source = ConcoursAnnouncementSource::where('key', $key)->firstOrFail();
            $source->update(['enabled' => true, 'permission_status' => 'allowed', 'permission_checked_at' => now(), 'permission_evidence' => 'Public RSS with attribution']);
            $urls[] = $source->listing_url;
            $status = app(SourceStatus::class)->describe($source);
            $this->assertSame('confirmed_rss', $status['technical_access']['status']);
            $this->assertFalse($status['usage_eligible']);
            $this->assertFalse($status['automatic_collection_active']);
        }
        config(['concours_discovery.authorized_feed_urls' => $urls]);
        $this->artisan('concours:discover')->assertSuccessful();
        Http::assertNothingSent();
        $this->assertSame(0, ConcoursDiscovery::count());
    }

    public function test_three_realistic_synthetic_feeds_use_minimal_metadata_and_idempotent_command_checks(): void
    {
        // This override exists ONLY in SQLite fixtures. It makes no claim about live-site rights.
        $urls = [];
        foreach ($this->expected as $key => $count) {
            $source = ConcoursAnnouncementSource::where('key', $key)->firstOrFail();
            $evidence = 'factual-metadata:fixture-only-'.$key.'; synthetic test data; no publisher authorization';
            config(['concours_discovery.factual_metadata_reviews.'.$key => [
                'disposition' => 'limited_factual_review', 'feed_url' => $source->listing_url,
                'reviewed_at' => now()->startOfDay()->toIso8601String(), 'expires_at' => now()->addDays(2)->toIso8601String(),
                'evidence' => $evidence, 'note' => 'Synthetic fixture only; never a live activation.']]);
            $source->update(['enabled' => true, 'permission_status' => 'allowed', 'permission_evidence' => $evidence, 'permission_checked_at' => now()]);
            $urls[] = $source->listing_url;
            $xml = file_get_contents(__DIR__.'/../Fixtures/concours-discovery/phase5e/'.$key.'.xml');
            $parsed = app(FeedParser::class)->parse($xml, 'rss_atom');
            if ($key === 'orientation-chabab') {
                $this->assertCount(100, $parsed);
                $this->assertNull($parsed[0]['publication_date']);
                $this->assertSame('2026-10-27', $parsed[99]['publication_date']);
            }
            Http::fake([$source->listing_url => Http::response($xml, 200, ['Content-Type' => $key === 'dreamjob' ? 'application/rss+xml' : 'application/xml'])]);
        }
        $this->mock(PublicAddressResolver::class, fn ($mock) => $mock->shouldReceive('resolve')->andReturn('93.184.216.34'));
        config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => $urls]);
        $this->artisan('concours:discover')->assertSuccessful();
        Http::assertSentCount(3);
        $this->artisan('concours:discover')->assertSuccessful(); // Not due: no new requests.
        Http::assertSentCount(3);
        $this->travel(13)->hours();
        $this->artisan('concours:discover')->assertSuccessful();
        Http::assertSentCount(6);
        $this->assertSame(14, ConcoursDiscovery::count());
        $this->assertSame(14, DB::table('concours_discovery_revisions')->count());
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login(User::where('role', 'admin')->firstOrFail()));
        $sources = $this->getJson(self::API.'/sources')->assertOk()->json('data');
        foreach ($this->expected as $key => $count) {
            $source = collect($sources)->firstWhere('key', $key);
            $this->assertSame($count, $source['pending_discoveries_count']);
            $rows = $this->getJson(self::API.'/discoveries?source_id='.$source['id'])->assertOk()->assertJsonPath('data.meta.total', $count)->json('data.items');
            foreach ($rows as $row) {
                $this->assertSame('facts_only', $row['metadata_scope']);
                $this->assertSame('pending', $row['status']);
                $this->assertNull($row['official_url']);
                $this->assertNull($row['announcement_id']);
                $this->assertStringStartsWith('sha256:', $row['source_identifier']);
                foreach (['institution', 'grade', 'specialty', 'session_year', 'application_deadline'] as $field) {
                    $this->assertNull($row[$field]);
                }
                if ($key === 'orientation-chabab') {
                    $this->assertNull($row['publication_date']);
                }
            }
        }
        $orientation = ConcoursAnnouncementSource::where('key', 'orientation-chabab')->firstOrFail();
        $this->assertSame(6, $orientation->discoveries()->where('candidate_category', 'academic')->count());
        $this->assertSame(1, $orientation->discoveries()->where('candidate_category', 'employment')->count());
        $this->assertSame(0, DB::table('concours_announcements')->count());
        $this->assertSame(0, DB::table('notifications')->count());
        $snapshots = json_encode(DB::table('concours_discovery_revisions')->pluck('snapshot'));
        foreach (['DO_NOT_STORE_DESCRIPTION', 'DO_NOT_STORE_BODY', 'titulaires Master', 'مباراة ولوج الإجازة'] as $content) {
            $this->assertStringNotContainsString($content, $snapshots);
        }
        $evidence = ['scope' => 'Synthetic SQLite-only fixtures; mocked HTTP/DNS; not live-source retrieval or publisher authorization',
            'source_counts' => $this->expected, 'total' => 14, 'repeat_new_records' => 0, 'repeat_new_revisions' => 0,
            'orientation_academic' => 6, 'orientation_employment' => 1, 'orientation_unknown_dates' => 7,
            'actual_authenticated_admin_kernel' => true];
        if (! is_dir(base_path('artifacts/concours-phase5e'))) {
            mkdir(base_path('artifacts/concours-phase5e'), 0755, true);
        }
        file_put_contents(base_path('artifacts/concours-phase5e/isolated-fixtures.json'), json_encode($evidence, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR)."\n");
    }

    public function test_admin_status_separates_access_eligibility_global_gate_and_pending_counts(): void
    {
        $source = ConcoursAnnouncementSource::where('key', 'orientation-chabab')->firstOrFail();
        $status = app(SourceStatus::class)->describe($source);
        $this->assertSame(200, $status['technical_access']['http_status']);
        $this->assertSame('unknown_malformed_offsets', $status['technical_access']['dates']);
        $this->assertSame('unavailable_terms', $status['collection_assessment']);
        $this->assertFalse($status['usage_eligible']);
        $this->assertFalse($status['automatic_collection_active']);
        $source->listing_url = 'https://orientation-chabab.com/other-feed';
        $this->assertSame('unverified', app(SourceStatus::class)->describe($source)['technical_access']['status']);
        $source->listing_url = 'https://orientation-chabab.com/feed';
        $source->last_attempt_at = now();
        $source->last_error = 'http_403';
        $refused = app(SourceStatus::class)->describe($source);
        $this->assertSame('access_refused', $refused['technical_access']['status']);
        $this->assertSame(403, $refused['technical_access']['http_status']);
        $this->assertNull($refused['technical_access']['format']);
        $this->assertNull($refused['technical_access']['dates']);
        $this->getJson(self::API.'/sources')->assertOk()->assertJsonFragment(['pending_discoveries_count' => 0]);
        Http::assertNothingSent();
    }
}
