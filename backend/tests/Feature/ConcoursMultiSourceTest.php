<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursCategory;
use App\Models\ConcoursDiscovery;
use App\Models\ConcoursInstitution;
use App\Models\User;
use App\Services\ConcoursDiscovery\CandidateClassifier;
use App\Services\ConcoursDiscovery\PublicAddressResolver;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Testing\TestResponse;
use Tests\ConcoursTestCase;

class ConcoursMultiSourceTest extends ConcoursTestCase
{
    private const API = '/api/v1/admin/concours-discovery';

    private User $admin;

    private Concours $concours;

    private array $sources;

    protected function setUp(): void
    {
        parent::setUp();
        Http::preventStrayRequests();
        Artisan::call('concours:register-sources');
        $this->sources = ConcoursAnnouncementSource::whereIn('key', ['alwadifa-maroc', 'dreamjob', 'orientation-chabab'])->get()->keyBy('key')->all();
        $this->admin = User::create(['name' => 'Fixture admin', 'username' => 'multi-source', 'email' => 'multi@example.test', 'password' => 'FixtureOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
        $category = ConcoursCategory::create(['slug' => 'fixture', 'name_fr' => 'Fixture', 'name_ar' => 'تجربة', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'fixture', 'name_fr' => 'Fixture institution', 'name_ar' => 'تجربة', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'fixture', 'name_fr' => 'Existing fixture concours', 'name_ar' => 'تجربة', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true]);
    }

    private function capture(string $key, string $id = 'one', string $title = 'Ministère de l’Éducation: concours de recrutement'): ConcoursDiscovery
    {
        $source = $this->sources[$key];

        return app(ConcoursDiscoveryService::class)->capture($source, ['source_identifier' => $id, 'title' => $title,
            'official_url' => rtrim($source->official_url, '/').'/fixture/'.$id, 'publication_date' => now()->toDateString()]);
    }

    private function verify(ConcoursDiscovery $record, array $replace = []): ConcoursDiscovery
    {
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', array_replace([
            'version' => $record->version, 'action' => 'verify_source', 'source_checked' => true,
            'official_url' => 'https://www.emploi-public.ma/fr/notice?round=fixture',
            'candidate_category' => 'employment', 'candidate_type' => 'opening', 'verified_identity' => [],
        ], $replace))->assertOk();

        return $record->fresh();
    }

    private function approve(ConcoursDiscovery $record): TestResponse
    {
        return $this->postJson(self::API.'/discoveries/'.$record->id.'/review', [
            'version' => $record->version, 'action' => 'approve', 'source_checked' => true,
            'concours_id' => $this->concours->id, 'title_language' => 'fr', 'session_year' => null, 'preparation_option_ids' => [],
        ]);
    }

    private function decide(ConcoursDiscovery $a, ConcoursDiscovery $b, string $decision): TestResponse
    {
        return $this->postJson(self::API.'/discoveries/'.$a->id.'/matches', ['version' => $a->version,
            'other_id' => $b->id, 'other_version' => $b->version, 'decision' => $decision,
            'source_checked' => true, 'note' => 'Compared independently verified official evidence.']);
    }

    public function test_registered_candidates_remain_disabled_unknown_and_do_not_become_official_hosts(): void
    {
        $this->assertCount(3, $this->sources);
        config(['concours_discovery.automation_enabled' => true]);
        Artisan::call('concours:discover');
        foreach ($this->sources as $source) {
            $this->assertFalse($source->enabled);
            $this->assertSame('unknown', $source->permission_status);
            $this->assertSame('rss_atom', $source->collection_method);
            $this->assertNotContains(parse_url($source->listing_url, PHP_URL_HOST), config('concours_discovery.official_hosts'));
        }
        Http::assertNothingSent();
    }

    public function test_three_controlled_feed_shapes_filter_noise_keep_attribution_and_never_invent_official_metadata(): void
    {
        $fixtures = ['alwadifa-maroc' => 'alwadifa.xml', 'dreamjob' => 'dreamjob.xml', 'orientation-chabab' => 'orientation-synthetic.xml'];
        config(['concours_discovery.automation_enabled' => true,
            // Controlled independently authorized fixtures, not a live-site use assessment.
            'concours_discovery.factual_metadata_reviews' => [],
            'concours_discovery.authorized_feed_urls' => array_map(fn ($s) => $s->listing_url, $this->sources)]);
        $this->mock(PublicAddressResolver::class, fn ($m) => $m->shouldReceive('resolve')->andReturn('93.184.216.34'));
        $responses = [];
        foreach ($fixtures as $key => $file) {
            $source = $this->sources[$key];
            $source->update(['enabled' => true, 'permission_status' => 'allowed', 'permission_evidence' => 'TEST FIXTURE ONLY', 'permission_checked_at' => now()]);
            $responses[$source->listing_url] = Http::response(file_get_contents(__DIR__.'/../Fixtures/concours-discovery/'.$file), 200,
                ['Content-Type' => $key === 'alwadifa-maroc' ? 'text/xml' : ($key === 'dreamjob' ? 'application/rss+xml' : 'application/xml')]);
        }
        Http::fake($responses);
        $this->assertSame(0, Artisan::call('concours:discover'));
        $this->assertSame(6, ConcoursDiscovery::count());
        $this->assertSame(4, ConcoursDiscovery::where('candidate_category', 'employment')->count());
        $this->assertSame(2, ConcoursDiscovery::where('candidate_category', 'academic')->count());
        foreach (ConcoursDiscovery::all() as $record) {
            $this->assertNull($record->official_url);
            $this->assertNotNull($record->source_article_url);
            $this->assertNull($record->session_year);
            $this->assertNull($record->application_deadline);
            $this->assertNull($record->institution);
            $this->assertStringNotContainsString('DO NOT IMPORT', json_encode($record->revisions()->first()->snapshot));
        }
        $this->assertSame(0, ConcoursAnnouncement::count());
        $this->assertSame(0, DB::table('concours_notification_events')->count());
        $this->travel(13)->hours();
        $this->assertSame(0, Artisan::call('concours:discover'));
        $this->assertSame(6, ConcoursDiscovery::count());
        $this->assertSame(6, DB::table('concours_discovery_revisions')->count());
        Http::assertSentCount(6);
    }

    public function test_classifier_distinguishes_academic_recruitment_and_non_openings_without_parsing_factual_fields(): void
    {
        $classifier = app(CandidateClassifier::class);
        foreach ([
            ['Concours de recrutement DGSN police', 'employment', 'opening'],
            ['FAR: résultats du concours de recrutement', 'employment', 'results'],
            ['Gendarmerie: présélection concours', 'employment', 'preselection'],
            ['Ministère de la Santé: prolongation du concours', 'employment', 'amendment'],
            ['Concours accès cycle ingénieur ENSA', 'academic', 'opening'],
            ['Université: concours admission Licence', 'academic', 'opening'],
            ['نتائج مباراة ولوج الماستر', 'academic', 'results'],
            ['Entreprise privée recrute un ingénieur', 'excluded', 'unknown'],
            ['Entreprise: concours de recrutement pour titulaires Master', 'excluded', 'unknown'],
            ['وزارة التربية الوطنية: مباراة توظيف أساتذة', 'employment', 'opening'],
            ['Commune: concours de recrutement ingénieurs et techniciens', 'employment', 'opening'],
            ['Concours admission Master universitaire', 'academic', 'opening'],
            ['Actualités générales et offres de formation', 'excluded', 'unknown'],
            ['Actualités du Ministère: nouvelles conditions du concours', 'excluded', 'unknown'],
            ['Al Akhawayn University recrute des assistants', 'excluded', 'unknown'],
            ['Université privée recrute des assistants', 'excluded', 'unknown'],
            ['المؤسسة: مرشحي مباراة توظيف أطر', 'excluded', 'unknown'],
            ['وزارة الصحة: مرشحي مباراة توظيف أطباء', 'employment', 'preselection'],
            ['Concours de recrutement Police', 'employment', 'opening'],
            ['Office national: concours de recrutement pour titulaires Master', 'employment', 'opening'],
            ['جامعة: مباراة توظيف حاملي الماستر', 'employment', 'opening'],
        ] as [$title, $category, $type]) {
            $result = $classifier->classify($title);
            $this->assertSame($category, $result['candidate_category'], $title);
            $this->assertSame($type, $result['candidate_type'], $title);
            $this->assertArrayNotHasKey('session_year', $result);
        }
    }

    public function test_duplicate_suggestions_require_verified_evidence_and_confirmed_sources_share_one_existing_draft(): void
    {
        $a = $this->capture('alwadifa-maroc');
        $b = $this->capture('dreamjob');
        $this->getJson(self::API.'/discoveries/'.$a->id.'/matches')->assertOk()->assertJsonCount(0, 'data');
        $this->approve($a)->assertUnprocessable();
        $a = $this->verify($a);
        $b = $this->verify($b);
        $this->getJson(self::API.'/discoveries/'.$a->id.'/matches')->assertOk()->assertJsonPath('data.0.reason', 'verified_official_url');
        $this->approve($a)->assertUnprocessable();
        $this->decide($a, $b, 'confirmed')->assertOk();
        $this->decide($a, $b, 'confirmed')->assertConflict();
        $a = $a->fresh();
        $b = $b->fresh();
        $this->approve($a)->assertOk();
        $this->approve($b)->assertOk();
        $this->assertSame(1, ConcoursAnnouncement::count());
        $this->assertSame($a->fresh()->announcement_id, $b->fresh()->announcement_id);
        $announcement = ConcoursAnnouncement::sole();
        $this->assertSame('draft', $announcement->publication_status);
        $this->assertNull($announcement->official_pdf_id);
        $this->assertStringContainsString('emploi-public.ma', $announcement->official_source_url);
        $this->postJson('/api/v1/admin/concours-announcements/'.$announcement->id.'/verify-publish',
            ['version' => $announcement->version, 'source_checked' => true])->assertOk();
        $this->getJson('/api/v1/public/concours-announcements')->assertJsonPath('data.meta.total', 1);
        $this->assertSame(2, ConcoursDiscovery::count());
        $this->assertSame(1, Concours::count());
        Http::assertNothingSent();
    }

    public function test_rejected_match_is_retained_and_source_changes_invalidate_proof_and_reopen_review(): void
    {
        $a = $this->verify($this->capture('alwadifa-maroc'));
        $b = $this->verify($this->capture('dreamjob'));
        $this->decide($a, $b, 'rejected')->assertOk();
        $this->getJson(self::API.'/discoveries/'.$a->id.'/matches')->assertJsonPath('data.0.decision', 'rejected');
        $changed = $this->capture('dreamjob', 'one', 'Ministère de l’Éducation: concours de recrutement modifié');
        $this->assertSame($b->id, $changed->id);
        $this->assertSame('pending', $changed->status);
        $this->assertNull($changed->official_verified_at);
        $this->assertNull($changed->official_url);
        $this->assertSame(1, DB::table('concours_discovery_matches')->count());
        $this->getJson(self::API.'/discoveries/'.$a->id.'/matches')->assertJsonCount(0, 'data');
    }

    public function test_transitive_confirmed_groups_cannot_claim_a_pair_is_separate_while_still_sharing_a_draft(): void
    {
        $a = $this->verify($this->capture('alwadifa-maroc'));
        $b = $this->verify($this->capture('dreamjob'));
        $c = $this->verify($this->capture('orientation-chabab'));
        $this->decide($a, $b, 'confirmed')->assertOk();
        $this->decide($b->fresh(), $c, 'confirmed')->assertOk();
        $this->decide($a->fresh(), $c->fresh(), 'rejected')->assertUnprocessable();
        $this->assertSame(0, DB::table('concours_discovery_matches')->where('decision', 'rejected')->count());
        foreach ([$a, $b, $c] as $record) {
            $this->approve($record->fresh())->assertOk();
        }
        $this->assertSame(1, ConcoursAnnouncement::count());
        $this->assertSame(1, collect([$a, $b, $c])->map(fn ($r) => $r->fresh()->announcement_id)->unique()->count());
    }

    public function test_distinct_rounds_institutions_deadlines_and_notice_types_do_not_group(): void
    {
        $a = $this->verify($this->capture('alwadifa-maroc'), ['verified_identity' => ['institution' => 'Verified A', 'round' => 'round-one', 'deadline' => '2026-11-01']]);
        foreach ([['round' => 'round-two'], ['institution' => 'Verified B'], ['deadline' => '2026-11-02']] as $conflict) {
            $b = $this->verify($this->capture('dreamjob', md5(json_encode($conflict))),
                ['verified_identity' => array_replace(['institution' => 'Verified A', 'round' => 'round-one', 'deadline' => '2026-11-01'], $conflict)]);
            $this->decide($a, $b, 'confirmed')->assertUnprocessable();
        }
        $b = $this->verify($this->capture('dreamjob', 'result'), ['candidate_type' => 'results']);
        $this->decide($a, $b, 'confirmed')->assertUnprocessable();
        $this->approve($b)->assertUnprocessable();
        $this->getJson(self::API.'/discoveries/'.$a->id.'/matches')->assertJsonCount(0, 'data');
    }

    public function test_explicit_complete_identity_suggests_a_match_but_incomplete_or_title_only_identity_does_not(): void
    {
        $identity = ['institution' => 'Verified Institution', 'round' => 'Autumn-round-A', 'grade' => 'Grade A', 'specialty' => 'Math', 'session_year' => 2027];
        $a = $this->verify($this->capture('alwadifa-maroc'), ['official_url' => 'https://www.emploi-public.ma/a', 'verified_identity' => $identity]);
        $b = $this->verify($this->capture('dreamjob'), ['official_url' => 'https://www.men.gov.ma/b', 'verified_identity' => $identity]);
        $this->getJson(self::API.'/discoveries/'.$a->id.'/matches')->assertJsonPath('data.0.reason', 'explicit_verified_identity');
        $c = $this->verify($this->capture('orientation-chabab'), ['official_url' => 'https://www.men.gov.ma/c', 'verified_identity' => ['institution' => 'Verified Institution']]);
        $this->getJson(self::API.'/discoveries/'.$c->id.'/matches')->assertJsonCount(0, 'data');
    }

    public function test_third_party_urls_never_pass_as_official_and_old_results_do_not_create_openings(): void
    {
        $record = $this->capture('orientation-chabab', 'old', 'Résultats concours Master Université');
        $record->update(['publication_date' => '2024-01-01']);
        $this->postJson(self::API.'/discoveries/'.$record->id.'/review', ['version' => $record->version, 'action' => 'verify_source',
            'source_checked' => true, 'official_url' => 'https://orientation-chabab.com/not-official',
            'candidate_category' => 'academic', 'candidate_type' => 'results'])->assertUnprocessable();
        $record = $this->verify($record, ['candidate_category' => 'academic', 'candidate_type' => 'results']);
        $this->assertTrue($record->is_stale);
        $this->approve($record)->assertUnprocessable();
        $this->getJson(self::API.'/discoveries?candidate_category=academic&candidate_type=results')->assertJsonPath('data.meta.total', 1);
        $this->getJson(self::API.'/discoveries?candidate_category=employment')->assertJsonPath('data.meta.total', 0);
        $this->assertSame(0, ConcoursAnnouncement::count());
    }
}
