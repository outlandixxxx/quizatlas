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
use App\Services\ConcoursDiscovery\FeedParser;
use App\Services\ConcoursDiscovery\OfficialUrl;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursDiscoveryTest extends ConcoursTestCase
{
    private const API = '/api/v1/admin/concours-discovery';

    private ConcoursAnnouncementSource $source;

    private Concours $concours;

    private User $actor;

    protected function setUp(): void
    {
        parent::setUp();
        Http::preventStrayRequests();
        $this->source = ConcoursAnnouncementSource::create(['key' => 'fixture', 'name' => 'Official fixture',
            'official_url' => 'https://www.emploi-public.ma/', 'listing_url' => 'https://www.emploi-public.ma/feed.json']);
        $category = ConcoursCategory::create(['slug' => 'fixture', 'name_fr' => 'Fixture', 'name_ar' => 'تجربة', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'fixture', 'name_fr' => 'Fixture institution', 'name_ar' => 'تجربة', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'fixture', 'name_fr' => 'Concours fixture', 'name_ar' => 'تجربة', 'category_id' => $category->id,
            'institution_id' => $institution->id, 'is_active' => true, 'type' => 'recruitment', 'session_year' => 2026]);
        $this->actor = User::create(['name' => 'Test admin', 'username' => 'discovery-admin', 'email' => 'discovery@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
    }

    private function login(): void
    {
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->actor));
    }

    private function metadata(array $replace = []): array
    {
        return array_replace(['title' => 'Original concours title', 'official_url' => 'https://www.emploi-public.ma/fr/notice?round=1',
            'publication_date' => '2026-10-01', 'application_deadline' => '2026-11-01', 'institution' => 'Official institution', 'grade' => 'Grade A'], $replace);
    }

    private function capture(array $replace = []): ConcoursDiscovery
    {
        return app(ConcoursDiscoveryService::class)->capture($this->source, $this->metadata($replace));
    }

    private function reviewPayload(ConcoursDiscovery $record, array $replace = []): array
    {
        return array_replace(['version' => $record->version, 'action' => 'approve', 'source_checked' => true, 'concours_id' => $this->concours->id,
            'title_language' => 'fr', 'preparation_option_ids' => [], 'session_year' => null], $replace);
    }

    private function enable(): void
    {
        config(['concours_discovery.automation_enabled' => true, 'concours_discovery.authorized_feed_urls' => [$this->source->listing_url]]);
        $this->source->update(['collection_method' => 'json_feed', 'enabled' => true, 'permission_status' => 'allowed',
            'permission_evidence' => 'TEST FIXTURE permission reference', 'permission_checked_at' => now()]);
        $this->mock(PublicAddressResolver::class, fn ($mock) => $mock->shouldReceive('resolve')->andReturn('93.184.216.34'));
    }

    public function test_all_discovery_endpoints_require_existing_admin_authorization(): void
    {
        $calls = [['GET', '/sources'], ['POST', '/sources'], ['PUT', '/sources/1'], ['GET', '/discoveries'], ['POST', '/discoveries'],
            ['GET', '/discoveries/1'], ['GET', '/discoveries/1/revisions'], ['POST', '/discoveries/1/review'], ['GET', '/discoveries/1/matches'], ['POST', '/discoveries/1/matches']];
        foreach ($calls as [$method, $path]) {
            $this->json($method, self::API.$path)->assertUnauthorized();
        }
        foreach (['user', 'manager'] as $role) {
            $this->actor->update(['role' => $role]);
            $this->login();
            foreach ($calls as [$method, $path]) {
                $this->json($method, self::API.$path)->assertForbidden();
            }
        }
    }

    public function test_manual_entry_deduplicates_marketing_urls_without_http_or_public_announcements(): void
    {
        $this->login();
        $payload = ['source_id' => $this->source->id] + $this->metadata();
        $first = $this->postJson(self::API.'/discoveries', $payload)->assertCreated()->json('data');
        $payload['official_url'] .= '&utm_source=fixture#section';
        $this->postJson(self::API.'/discoveries', $payload)->assertCreated()->assertJsonPath('data.id', $first['id'])->assertJsonPath('data.version', 1);
        $this->assertSame(1, ConcoursDiscovery::count());
        $this->assertSame(0, ConcoursAnnouncement::count());
        Http::assertNothingSent();
        $this->getJson('/api/v1/public/concours-announcements')->assertJsonPath('data.meta.total', 0);
    }

    public function test_url_validation_blocks_untrusted_and_unsafe_manual_links(): void
    {
        $this->login();
        foreach (['http://www.emploi-public.ma/a', 'https://evil.test/a', 'https://www.emploi-public.ma.evil.test/a',
            'https://127.0.0.1/a', 'https://[::1]/a', 'https://localhost/a', 'https://2130706433/a', 'file:///etc/passwd',
            'https://user:secret@www.emploi-public.ma/a', 'https://www.emploi-public.ma:8443/a', 'https://www.emploi-public.ma/a\\b'] as $url) {
            $this->postJson(self::API.'/discoveries', ['source_id' => $this->source->id] + $this->metadata(['official_url' => $url]))->assertUnprocessable();
        }
        $normalizer = app(OfficialUrl::class);
        $this->assertNotSame($normalizer->normalize('https://www.emploi-public.ma/a?round=1'), $normalizer->normalize('https://www.emploi-public.ma/a?round=2'));
        Http::assertNothingSent();
    }

    public function test_stable_ids_preserve_updates_history_and_distinct_amendments_even_on_same_url(): void
    {
        $record = $this->capture(['source_identifier' => 'round-A']);
        $updated = $this->capture(['source_identifier' => 'round-A', 'title' => 'Deadline amended', 'official_url' => 'https://www.emploi-public.ma/moved', 'application_deadline' => '2026-11-10']);
        $this->assertSame($record->id, $updated->id);
        $this->assertSame(2, $updated->version);
        $this->assertSame('2026-11-01', $updated->revisions()->oldest('version')->first()->snapshot['application_deadline']);
        $round = $this->capture(['source_identifier' => 'round-B', 'official_url' => 'https://www.emploi-public.ma/moved']);
        $this->assertNotSame($round->id, $record->id);
        $this->assertSame(2, ConcoursDiscovery::count());
    }

    public function test_explicit_review_creates_existing_draft_with_tracks_unknown_year_and_confirmed_dates_only(): void
    {
        $this->login();
        $option = $this->concours->preparationOptions()->create(['name_fr' => 'Grade A']);
        $record = $this->capture();
        $response = $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $this->reviewPayload($record, ['preparation_option_ids' => [$option->id]]))
            ->assertOk()->assertJsonPath('data.status', 'approved');
        $announcement = ConcoursAnnouncement::findOrFail($response->json('data.announcement_id'));
        $this->assertSame('draft', $announcement->publication_status);
        $this->assertSame('draft', $announcement->verification_status);
        $this->assertSame('Original concours title', $announcement->title_fr);
        $this->assertNull($announcement->session_year);
        $this->assertNull($announcement->registration_deadline);
        $this->assertNull($announcement->official_publication_date);
        $this->assertNull($announcement->official_pdf_id);
        $this->assertSame([$option->id], $announcement->preparationOptions->pluck('id')->all());
        $this->assertSame([$option->id], $announcement->revisions()->first()->snapshot['preparation_option_ids']);
        $this->assertSame(1, Concours::count());
        $this->getJson('/api/v1/public/concours-announcements')->assertJsonPath('data.meta.total', 0);
        $this->postJson('/api/v1/admin/concours-announcements/'.$announcement->id.'/verify-publish', ['version' => 1])->assertUnprocessable();
        $this->postJson('/api/v1/admin/concours-announcements/'.$announcement->id.'/verify-publish', ['version' => 1, 'source_checked' => true])
            ->assertOk()->assertJsonPath('data.publication_status', 'published')->assertJsonPath('data.official_pdf', null);
        $this->getJson('/api/v1/public/concours-announcements')->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.official_source_url', $record->official_url);
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $this->reviewPayload($record))->assertConflict();
        $this->assertSame(1, ConcoursAnnouncement::count());
        Http::assertNothingSent();
    }

    public function test_review_rejects_guessed_associations_cross_concours_tracks_stale_versions_and_missing_confirmation(): void
    {
        $this->login();
        $other = $this->concours->replicate();
        $other->slug = 'other';
        $other->save();
        $foreign = $other->preparationOptions()->create(['name_fr' => 'Other grade']);
        $record = $this->capture();
        foreach ([['source_checked' => false], ['concours_id' => 999999], ['preparation_option_ids' => [$foreign->id]], ['official_publication_date' => '2099-01-01'], ['session_year' => 1800]] as $bad) {
            $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $this->reviewPayload($record, $bad))->assertUnprocessable();
        }
        $payload = $this->reviewPayload($record);
        unset($payload['session_year']);
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $payload)->assertUnprocessable();
        $this->capture(['title' => 'Changed']);
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $this->reviewPayload($record))->assertConflict();
        $this->assertSame(0, ConcoursAnnouncement::count());
    }

    public function test_rejected_duplicates_stay_rejected_but_changed_metadata_reopens_review(): void
    {
        $this->login();
        $record = $this->capture();
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', ['version' => 1, 'action' => 'reject', 'source_checked' => true, 'review_note' => 'Unrelated official round'])->assertOk();
        $this->assertSame('rejected', $this->capture()->status);
        $updated = $this->capture(['application_deadline' => '2026-11-15']);
        $this->assertSame('pending', $updated->status);
        $this->assertSame(3, $updated->revisions()->count());
    }

    public function test_updates_after_conversion_never_overwrite_or_duplicate_the_existing_announcement(): void
    {
        $this->login();
        $record = $this->capture(['source_identifier' => 'stable']);
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', $this->reviewPayload($record))->assertOk();
        $before = ConcoursAnnouncement::first()->getAttributes();
        $updated = $this->capture(['source_identifier' => 'stable', 'title' => 'Official amendment']);
        $this->assertSame('pending', $updated->status);
        $this->assertSame($before, ConcoursAnnouncement::first()->getAttributes());
        $this->postJson(self::API.'/discoveries/'.$updated->id.'/review', $this->reviewPayload($updated))->assertUnprocessable();
        $this->postJson(self::API.'/discoveries/'.$updated->id.'/review', ['version' => $updated->version, 'action' => 'acknowledge', 'source_checked' => true, 'review_note' => 'Reviewed in the existing announcement editor'])->assertOk();
        $this->assertSame(1, ConcoursAnnouncement::count());
        $this->assertSame($before, ConcoursAnnouncement::first()->getAttributes());
    }

    public function test_listing_search_date_institution_filters_and_revision_pagination(): void
    {
        $this->login();
        $record = $this->capture();
        $this->getJson(self::API.'/discoveries?q=Original&institution=official&source_id='.$this->source->id.'&from='.now()->toDateString().'&to='.now()->toDateString())->assertOk()->assertJsonPath('data.meta.total', 1);
        $this->getJson(self::API.'/discoveries?institution=missing')->assertJsonPath('data.meta.total', 0);
        $this->getJson(self::API.'/discoveries?to='.now()->toDateString())->assertOk()->assertJsonPath('data.meta.total', 1);
        $this->getJson(self::API.'/discoveries?per_page=999')->assertUnprocessable();
        $this->getJson(self::API.'/discoveries/'.$record->id.'/revisions')->assertJsonPath('data.items.0.snapshot.title', $record->title);
    }

    public function test_source_registry_defaults_and_permission_gates_require_exact_reviewed_endpoints(): void
    {
        $this->login();
        Artisan::call('concours:register-sources');
        Artisan::call('concours:register-sources');
        $this->assertSame(count(config('concours_discovery.sources')) + 1, ConcoursAnnouncementSource::count());
        $this->getJson(self::API.'/sources')->assertOk();
        $this->assertSame(0, ConcoursAnnouncementSource::where('enabled', true)->count());
        $this->enable();
        config(['concours_discovery.authorized_feed_urls' => []]);
        Artisan::call('concours:discover');
        Http::assertNothingSent();
        $payload = $this->source->fresh()->only(['key', 'name', 'official_url', 'listing_url', 'collection_method', 'enabled', 'permission_status', 'check_interval_minutes', 'version']);
        $this->putJson(self::API.'/sources/'.$this->source->id, $payload)->assertUnprocessable();
        $payload += ['permission_evidence' => 'Documented permission', 'permission_checked_at' => now()->toDateString()];
        $this->putJson(self::API.'/sources/'.$this->source->id, $payload)->assertOk();
        $this->putJson(self::API.'/sources/'.$this->source->id, $payload)->assertConflict();
        Http::assertNothingSent();
    }

    public function test_scheduler_is_disabled_by_default_and_lock_prevents_overlap(): void
    {
        Artisan::call('concours:discover');
        Http::assertNothingSent();
        $this->enable();
        $lock = Cache::lock('concours-discovery-command', 600);
        $lock->get();
        try {
            Artisan::call('concours:discover');
            Http::assertNothingSent();
        } finally {
            $lock->release();
        }
    }

    public function test_mocked_feed_import_is_bounded_due_aware_and_never_downloads_documents(): void
    {
        $this->enable();
        $feed = ['version' => 'https://jsonfeed.org/version/1.1', 'items' => [['id' => 'fixture-id', 'title' => 'Fixture 2028',
            'url' => 'https://www.emploi-public.ma/official-notice.pdf', 'date_published' => '2026-10-01T12:00:00Z',
            'content_html' => '<p>DO NOT STORE ARTICLE</p>', '_maroquiz' => ['institution' => 'Institution', 'application_deadline' => '2026-11-05', 'session_year' => 2027, 'grade' => 'A']]]];
        Http::fake(function ($request, $options) use ($feed) {
            $this->assertSame($this->source->listing_url, $request->url());
            $this->assertFalse($options['allow_redirects']);
            $this->assertSame('', $options['proxy']);
            $this->assertSame(15, $options['timeout']);
            $this->assertSame(5, $options['connect_timeout']);
            $this->assertSame(['www.emploi-public.ma:443:93.184.216.34'], $options['curl'][CURLOPT_RESOLVE]);

            return Http::response($feed, 200, ['Content-Type' => 'application/feed+json']);
        });
        $this->assertSame(0, Artisan::call('concours:discover'));
        $record = ConcoursDiscovery::firstOrFail();
        $this->assertSame(2027, $record->session_year); // Never parse 2028 from the title.
        $this->assertSame('2026-10-01', $record->publication_date->toDateString());
        $this->assertStringNotContainsString('DO NOT STORE ARTICLE', json_encode($record->revisions()->first()->snapshot));
        $this->assertSame(0, ConcoursAnnouncement::count());
        $this->assertNotNull($this->source->fresh()->last_success_at);
        Artisan::call('concours:discover');
        Http::assertSentCount(1);
        Http::assertSent(fn ($request) => $request->url() === $this->source->listing_url);
    }

    public function test_mocked_automatic_collection_repeats_updates_review_and_errors_through_the_existing_admin_workflow(): void
    {
        $this->enable();
        $this->login();
        $option = $this->concours->preparationOptions()->create(['name_fr' => 'Existing preparation grade']);
        $concoursBefore = $this->concours->fresh()->getAttributes();
        $optionBefore = $option->fresh()->getAttributes();
        $title = 'Controlled original announcement';
        $fail = false;
        Http::fake(function ($request) use (&$title, &$fail) {
            $this->assertSame($this->source->listing_url, $request->url());

            return $fail ? Http::response('Private upstream failure body', 403) : Http::response([
                'version' => 'https://jsonfeed.org/version/1.1',
                'items' => [['id' => 'controlled-stable-id', 'title' => $title,
                    'url' => 'https://www.emploi-public.ma/fr/controlled-notice', 'date_published' => '2026-10-01T12:00:00Z']],
            ], 200, ['Content-Type' => 'application/feed+json']);
        });

        $this->assertSame(0, Artisan::call('concours:discover'));
        $record = ConcoursDiscovery::sole();
        $this->assertSame('pending', $record->status);
        $this->assertSame($this->source->id, $record->source_id);
        $this->assertSame('TEST FIXTURE permission reference', $record->revisions()->sole()->snapshot['source']['permission_evidence']);
        $firstSeen = $record->last_seen_at;

        // A genuinely due second check, rather than an immediate interval skip.
        $this->travel(13)->hours();
        $this->assertSame(0, Artisan::call('concours:discover'));
        $this->assertSame(1, ConcoursDiscovery::count());
        $this->assertSame(1, $record->revisions()->count());
        $this->assertTrue($record->fresh()->last_seen_at->greaterThan($firstSeen));

        $this->login(); // The due interval exceeds the JWT lifetime.
        $response = $this->postJson(self::API.'/discoveries/'.$record->id.'/review',
            $this->reviewPayload($record, ['preparation_option_ids' => [$option->id]]))->assertOk();
        $announcement = ConcoursAnnouncement::findOrFail($response->json('data.announcement_id'));
        $this->assertSame('draft', $announcement->publication_status);
        $this->assertNull($announcement->official_pdf_id);
        $this->getJson('/api/v1/public/concours-announcements')->assertJsonPath('data.meta.total', 0);
        $this->postJson('/api/v1/admin/concours-announcements/'.$announcement->id.'/verify-publish',
            ['version' => $announcement->version, 'source_checked' => true])->assertOk();
        $this->getJson('/api/v1/public/concours-announcements')->assertJsonPath('data.meta.total', 1)
            ->assertJsonPath('data.items.0.official_source_url', $record->official_url);

        $title = 'Controlled official amendment';
        $this->travel(13)->hours();
        $this->assertSame(0, Artisan::call('concours:discover'));
        $this->assertSame('pending', $record->fresh()->status);
        $this->assertSame($announcement->id, $record->fresh()->announcement_id);
        $this->assertSame('Controlled original announcement', $announcement->fresh()->title_fr);
        $this->assertSame(1, ConcoursDiscovery::count());
        $this->assertSame(1, ConcoursAnnouncement::count());

        $fail = true;
        $this->travel(13)->hours();
        $this->assertSame(1, Artisan::call('concours:discover'));
        $this->login();
        $this->getJson(self::API.'/sources')->assertOk()->assertJsonPath('data.0.last_error', 'http_403');
        $this->assertSame($concoursBefore, $this->concours->fresh()->getAttributes());
        $this->assertSame($optionBefore, $option->fresh()->getAttributes());
        $this->assertSame([$option->id], $announcement->fresh()->preparationOptions->pluck('id')->all());
        Http::assertSentCount(4);
    }

    public function test_failures_are_sanitized_and_do_not_stop_other_sources_or_retry_restricted_responses(): void
    {
        $this->enable();
        $other = ConcoursAnnouncementSource::create(['key' => 'second', 'name' => 'Second', 'official_url' => 'https://www.men.gov.ma/',
            'listing_url' => 'https://www.men.gov.ma/feed.json', 'collection_method' => 'json_feed', 'enabled' => true,
            'permission_status' => 'allowed', 'permission_evidence' => 'Fixture', 'permission_checked_at' => now()]);
        config(['concours_discovery.authorized_feed_urls' => [$this->source->listing_url, $other->listing_url]]);
        Http::fake([$this->source->listing_url => Http::response('Do not store this secret response', 403, ['Content-Type' => 'application/json']),
            $other->listing_url => Http::response(['version' => 'https://jsonfeed.org/version/1', 'items' => []], 200, ['Content-Type' => 'application/json'])]);
        $this->assertSame(1, Artisan::call('concours:discover'));
        $this->assertSame('http_403', $this->source->fresh()->last_error);
        $this->assertNotNull($other->fresh()->last_success_at);
        Http::assertSentCount(2);
        Artisan::call('concours:discover');
        Http::assertSentCount(2);
    }

    public function test_feed_parser_keeps_only_explicit_metadata_and_rejects_entities_and_oversized_input(): void
    {
        $parser = app(FeedParser::class);
        $unknown = $this->capture(['session_year' => '', 'source_identifier' => '']);
        $this->assertNull($unknown->session_year);
        $this->assertNull($unknown->source_identifier);
        $rss = '<rss version="2.0"><channel><item><guid>stable</guid><title>Concours 2030</title><link>https://www.emploi-public.ma/notice</link><pubDate>Mon, 26 Oct 2026 12:00:00 +0000</pubDate><description>Ignored article</description></item></channel></rss>';
        $result = $parser->parse($rss, 'rss_atom');
        $this->assertSame('2026-10-26', $result[0]['publication_date']);
        $this->assertArrayNotHasKey('session_year', $result[0]);
        $atom = '<feed xmlns="http://www.w3.org/2005/Atom"><entry><id>atom-id</id><title>Concours</title><link href="https://www.emploi-public.ma/atom"/><published>2026-10-25T13:00:00Z</published></entry></feed>';
        $this->assertSame('atom-id', $parser->parse($atom, 'rss_atom')[0]['source_identifier']);
        foreach (['<!DOCTYPE rss [<!ENTITY x SYSTEM "file:///etc/passwd">]><rss/>', str_repeat('x', 1048577)] as $bad) {
            try {
                $parser->parse($bad, 'rss_atom');
                $this->fail('Unsafe XML was accepted');
            } catch (\RuntimeException $e) {
                $this->assertNotEmpty($e->getMessage());
            }
        }
    }

    public function test_actual_address_validation_rejects_private_reserved_and_mixed_dns_answers_without_network(): void
    {
        $resolver = new PublicAddressResolver;
        $this->assertSame('93.184.216.34', $resolver->validateAddresses(['93.184.216.34']));
        foreach ([[], ['127.0.0.1'], ['10.1.1.1'], ['172.16.1.1'], ['192.168.1.1'], ['169.254.169.254'], ['100.100.100.200'],
            ['0.0.0.0'], ['::1'], ['::ffff:127.0.0.1'], ['93.184.216.34', '10.0.0.1']] as $addresses) {
            try {
                $resolver->validateAddresses($addresses);
                $this->fail('Unsafe DNS answer was accepted');
            } catch (\RuntimeException $exception) {
                $this->assertContains($exception->getMessage(), ['dns_unavailable', 'unsafe_dns_address']);
            }
        }
    }

    public function test_redirect_html_oversized_response_and_private_dns_fail_closed(): void
    {
        $this->enable();
        foreach ([[302, 'application/json', ''], [200, 'text/html', '<html>captcha</html>'], [200, 'application/json', str_repeat('x', 1048577)]] as [$status, $type, $body]) {
            Http::swap(new Factory);
            Http::preventStrayRequests();
            Http::fake([$this->source->listing_url => Http::response($body, $status, ['Content-Type' => $type, 'Location' => 'http://127.0.0.1/secret'])]);
            try {
                app(AuthorizedFeedClient::class)->fetch($this->source->fresh());
                $this->fail('Unsafe response was accepted');
            } catch (\RuntimeException $e) {
                $this->assertNotEmpty($e->getMessage());
            }
        }
        Http::swap(new Factory);
        Http::preventStrayRequests();
        $this->mock(PublicAddressResolver::class, fn ($mock) => $mock->shouldReceive('resolve')->andThrow(new \RuntimeException('unsafe_dns_address')));
        $this->assertSame(1, Artisan::call('concours:discover'));
        Http::assertNothingSent();
        $this->assertSame('unsafe_dns_address', $this->source->fresh()->last_error);
    }
}
