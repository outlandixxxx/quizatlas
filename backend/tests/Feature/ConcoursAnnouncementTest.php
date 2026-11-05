<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Http\UploadedFile;
use Tests\ConcoursTestCase;

class ConcoursAnnouncementTest extends ConcoursTestCase
{
    private const ADMIN = '/api/v1/admin/concours-announcements';

    private const PUBLIC = '/api/v1/public/concours-announcements';

    private array $payload;

    private Concours $concours;

    protected function setUp(): void
    {
        parent::setUp();
        CarbonImmutable::setTestNow(CarbonImmutable::parse('2026-10-24 12:00:00', 'Africa/Casablanca'));
        $category = ConcoursCategory::create(['slug' => 'education', 'name_fr' => 'Éducation', 'name_ar' => 'التعليم', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'test-institution', 'name_fr' => 'Institut fictif pour tests', 'name_ar' => 'معهد تجريبي', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'test-concours', 'name_fr' => 'Concours test', 'name_ar' => 'مباراة تجريبية', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true]);
        $this->payload = ['concours_id' => $this->concours->id, 'slug' => 'session-test-2026', 'title_fr' => 'Session fictive 2026', 'description_fr' => 'Uniquement pour les tests.', 'official_source_url' => 'https://institution.example.test/notice', 'registration_opens_on' => '2026-10-23', 'registration_deadline' => '2026-10-24'];
    }

    protected function tearDown(): void
    {
        CarbonImmutable::setTestNow();
        parent::tearDown();
    }

    private function login(string $role = 'admin'): void
    {
        $user = User::create(['name' => 'Test', 'username' => 'test'.$role, 'email' => $role.'@example.test', 'password' => 'TestOnly123!', 'role' => $role]);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function create(array $overrides = []): array
    {
        return $this->postJson(self::ADMIN, array_replace($this->payload, ['file' => UploadedFile::fake()->createWithContent('notice.pdf', "%PDF-1.7\nTest notice\n%%EOF\n")], $overrides))->assertCreated()->json('data');
    }

    private function action(array $record, string $action): array
    {
        return $this->postJson(self::ADMIN.'/'.$record['id'].'/'.$action, ['version' => $record['version'], 'source_checked' => true])->assertOk()->json('data');
    }

    public function test_authentication_and_role_authorization_cover_all_announcement_endpoints(): void
    {
        $calls = [['GET', self::ADMIN], ['GET', self::ADMIN.'/1'], ['POST', self::ADMIN], ['PUT', self::ADMIN.'/1'], ['GET', self::ADMIN.'/1/revisions']];
        foreach (['submit', 'verify', 'publish', 'archive', 'withdraw'] as $action) {
            $calls[] = ['POST', self::ADMIN.'/1/'.$action];
        }
        foreach ($calls as [$method, $url]) {
            $this->json($method, $url)->assertUnauthorized();
        }
        foreach (['user', 'manager'] as $role) {
            $this->login($role);
            foreach ($calls as [$method, $url]) {
                $this->json($method, $url)->assertForbidden();
            }
        }
    }

    public function test_publication_is_explicit_and_public_visibility_is_fail_closed(): void
    {
        $this->login();
        $record = $this->create();
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items', []);
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertNotFound();
        $this->postJson(self::ADMIN.'/'.$record['id'].'/publish', ['version' => 1])->assertUnprocessable();
        $record = $this->action($record, 'submit');
        $this->postJson(self::ADMIN.'/'.$record['id'].'/verify', ['version' => $record['version']])->assertUnprocessable();
        $record = $this->action($record, 'verify');
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items', []);
        $this->assertNotNull($record['verified_at']);
        $this->assertNotNull($record['verified_by']);
        $this->assertSame($this->concours->institution_id, $record['institution_id']);
        $record = $this->action($record, 'publish');
        $this->getJson(self::PUBLIC.'?publication_status=draft&verification_status=unverified')->assertOk()->assertJsonPath('data.meta.total', 1);
        $public = $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertOk()->assertJsonPath('data.registration_status', 'open')->json('data');
        $this->assertArrayNotHasKey('verified_by', $public);
        $this->assertArrayNotHasKey('version', $public);
        $this->get('/sitemap.xml')->assertSee('/concours/annonces/'.$record['slug'], false);
        $this->concours->category->update(['is_active' => false]);
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items', []);
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertNotFound();
        $this->concours->category->update(['is_active' => true]);
        $this->concours->institution->update(['is_active' => false]);
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items', []);
        $this->concours->institution->update(['is_active' => true]);
        $record = $this->action($record, 'archive');
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertNotFound();
        $this->get('/sitemap.xml')->assertDontSee('/concours/annonces/'.$record['slug'], false);
        $this->assertNotNull($record['archived_at']);
        $record = $this->action($record, 'publish');
        $record = $this->action($record, 'withdraw');
        $this->assertNotNull($record['withdrawn_at']);
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertNotFound();
    }

    public function test_editorial_form_validation_and_calendar_date_precision(): void
    {
        $this->login();
        foreach ([['concours_id' => 999999], ['institution_id' => 999999], ['positions' => -1], ['regions' => ['A', 'A']], ['official_source_url' => 'javascript:alert(1)'], ['application_url' => 'https://user:password@example.test'], ['registration_deadline' => '2026-10-24T15:00:00Z'], ['registration_deadline' => '2026-02-30'], ['registration_opens_on' => '2026-10-25'], ['examination_date' => '2026-10-20'], ['official_publication_date' => '2027-01-01'], ['publication_status' => 'published'], ['verification_status' => 'verified']] as $invalid) {
            $this->postJson(self::ADMIN, array_replace($this->payload, ['file' => UploadedFile::fake()->createWithContent('notice.pdf', "%PDF-1.7\nTest notice\n%%EOF\n")], $invalid))->assertUnprocessable();
        }
        $record = $this->create(['registration_opens_on' => null, 'registration_deadline' => null, 'title_fr' => null, 'description_fr' => null, 'title_ar' => 'إعلان تجريبي', 'description_ar' => 'وصف تجريبي']);
        $this->assertNull($record['registration_deadline']);
        $this->assertSame('unknown', $record['registration_status']);
        $this->postJson(self::ADMIN, $this->payload)->assertUnprocessable()->assertJsonValidationErrors('slug');
        $record = $this->action($record, 'verify');
        $record = $this->action($record, 'publish');
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertJsonPath('data.registration_deadline', null)->assertJsonPath('data.registration_status', 'unknown');
    }

    public function test_bilingual_descriptions_and_positions_round_trip_through_admin_and_public_apis(): void
    {
        $this->login();
        $fields = [
            'description_fr' => "Conditions de participation\n\nDocuments requis\n<img src=x onerror=alert(1)>",
            'description_ar' => "شروط المشاركة\n\nالوثائق المطلوبة\n<script>alert(1)</script>",
            'positions' => 42,
        ];
        $record = $this->create($fields);
        $this->assertDatabaseHas('concours_announcements', ['id' => $record['id']] + $fields);
        foreach ($fields as $field => $value) {
            $this->assertSame($value, $record[$field]);
        }
        $admin = $this->getJson(self::ADMIN.'/'.$record['id'])->assertOk();
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertNotFound();
        $record = $this->action($record, 'verify-publish');
        $public = $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertOk();
        $listing = $this->getJson(self::PUBLIC)->assertOk();
        foreach ($fields as $field => $value) {
            $admin->assertJsonPath('data.'.$field, $value);
            $public->assertJsonPath('data.'.$field, $value);
            $listing->assertJsonPath('data.items.0.'.$field, $value);
        }
    }

    public function test_editing_announcement_details_preserves_existing_content_and_requires_reverification(): void
    {
        $this->login();
        $record = $this->action($this->create([
            'description_ar' => 'الوصف الأصلي', 'positions' => 12,
            'eligibility_fr' => 'Anciennes conditions conservées',
            'required_documents_ar' => 'الوثائق المحفوظة',
            'specialties' => ['Informatique'], 'regions' => ['Rabat'],
            'additional_official_urls' => ['https://institution.example.test/addendum'],
        ]), 'verify');
        $fields = ['description_fr' => "Session corrigée\n\nPièces à fournir", 'description_ar' => "الدورة المصححة\n\nالوثائق المطلوبة", 'positions' => 25];
        $url = self::ADMIN.'/'.$record['id'];
        $saved = $this->putJson($url, ['concours_id' => $this->concours->id, 'version' => $record['version']] + $fields)
            ->assertOk()->assertJsonPath('data.verification_status', 'unverified')
            ->assertJsonPath('data.verified_at', null)->json('data');
        $this->assertSame($record['official_pdf_id'], $saved['official_pdf_id']);
        foreach (['eligibility_fr', 'required_documents_ar', 'specialties', 'regions', 'additional_official_urls', 'official_source_url', 'slug'] as $field) {
            $this->assertSame($record[$field], $saved[$field]);
        }
        $this->assertDatabaseHas('concours_announcements', ['id' => $record['id']] + $fields);
        $admin = $this->getJson($url)->assertOk();
        foreach ($fields as $field => $value) {
            $admin->assertJsonPath('data.'.$field, $value);
        }
        $this->putJson($url, ['concours_id' => $this->concours->id, 'version' => $record['version'], 'positions' => 99])->assertConflict();
        $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertNotFound();
        $this->postJson($url.'/publish', ['version' => $saved['version']])->assertUnprocessable();
        $published = $this->action($saved, 'verify-publish');
        $public = $this->getJson(self::PUBLIC.'/'.$published['slug'])->assertOk();
        foreach ($fields as $field => $value) {
            $public->assertJsonPath('data.'.$field, $value);
        }
    }

    public function test_announcement_details_validate_and_can_be_explicitly_cleared(): void
    {
        $this->login();
        foreach ([['positions' => 0], ['positions' => -1], ['positions' => 1.5], ['positions' => 10000001], ['positions' => 'many'], ['description_fr' => str_repeat('a', 20001)], ['description_ar' => ['not text']]] as $invalid) {
            $this->postJson(self::ADMIN, array_replace($this->payload, $invalid))
                ->assertUnprocessable()->assertJsonValidationErrors(array_keys($invalid));
        }
        $record = $this->create(['description_ar' => 'وصف تجريبي', 'positions' => 1]);
        $fields = ['description_fr' => null, 'description_ar' => null, 'positions' => null];
        $saved = $this->putJson(self::ADMIN.'/'.$record['id'], ['concours_id' => $this->concours->id, 'version' => $record['version']] + $fields)
            ->assertOk()->json('data');
        $this->assertDatabaseHas('concours_announcements', ['id' => $record['id']] + $fields);
        $admin = $this->getJson(self::ADMIN.'/'.$record['id'])->assertOk();
        $this->action($saved, 'verify-publish');
        $public = $this->getJson(self::PUBLIC.'/'.$record['slug'])->assertOk();
        foreach ($fields as $field => $value) {
            $admin->assertJsonPath('data.'.$field, $value);
            $public->assertJsonPath('data.'.$field, $value);
        }
    }

    public function test_status_derivation_and_filters_agree_at_moroccan_date_boundaries(): void
    {
        $this->login();
        foreach ([['open', '2026-10-23', '2026-10-24', null], ['upcoming', '2026-10-25', '2026-11-01', null], ['closed', '2026-10-01', '2026-10-23', null], ['unknown', null, '2026-10-25', null], ['postponed', '2026-10-23', '2026-10-24', 'postponed'], ['cancelled', '2026-10-23', '2026-10-24', 'cancelled']] as [$status, $opens, $deadline, $decision]) {
            $record = $this->create(['slug' => 'test-'.$status, 'registration_opens_on' => $opens, 'registration_deadline' => $deadline, 'official_decision' => $decision]);
            $record = $this->action($this->action($record, 'verify'), 'publish');
            $this->assertSame($status, $record['registration_status']);
        }
        foreach (['open', 'upcoming', 'closed'] as $status) {
            $this->getJson(self::PUBLIC.'?registration_status='.$status)->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.registration_status', $status);
        }
        CarbonImmutable::setTestNow(CarbonImmutable::parse('2026-10-25 00:30:00', 'Africa/Casablanca')->setTimezone('UTC')); // Cross local midnight without assuming a fixed UTC offset.
        $this->getJson(self::PUBLIC.'/test-open')->assertJsonPath('data.registration_status', 'closed');
    }

    public function test_revisions_require_fresh_versions_and_reverification_after_edits(): void
    {
        $this->login();
        $record = $this->create();
        $record = $this->action($this->action($record, 'verify'), 'publish');
        $url = self::ADMIN.'/'.$record['id'];
        $payload = array_replace($this->payload, ['version' => $record['version'], 'registration_deadline' => '2026-11-01']);
        $this->putJson($url, $payload)->assertUnprocessable();
        $this->postJson($url.'/withdraw', ['version' => 1])->assertConflict();
        $record = $this->action($record, 'withdraw');
        $record = $this->putJson($url, array_replace($payload, ['version' => $record['version']]))->assertOk()->assertJsonPath('data.verification_status', 'unverified')->assertJsonPath('data.verified_at', null)->json('data');
        $this->postJson($url.'/publish', ['version' => $record['version']])->assertUnprocessable();
        $this->putJson($url, $payload)->assertConflict();
        $record = $this->action($record, 'verify');
        $record = $this->action($record, 'publish');
        $this->getJson($url.'/revisions')->assertOk()->assertJsonPath('data.meta.total', 7);
        $revision = ConcoursAnnouncement::findOrFail($record['id'])->revisions()->where('action', 'verified')->orderByDesc('version')->first();
        $this->assertContains('deadline_extended', $revision->events);
        $this->assertSame(['from' => '2026-10-24', 'to' => '2026-11-01'], $revision->verified_changes['registration_deadline']);
        $this->assertSame('2026-11-01', $record['registration_deadline']);
        $this->assertSame('2026-10-24', ConcoursAnnouncement::find($record['id'])->revisions()->where('version', 2)->first()->snapshot['registration_deadline']);
    }

    public function test_relationships_and_source_checks_block_invalid_publication(): void
    {
        $this->login();
        // Legacy URL-only drafts remain valid records, but need a source before verification.
        $legacy = ConcoursAnnouncement::create(array_replace($this->payload, ['official_source_url' => null]));
        $record = $this->getJson(self::ADMIN.'/'.$legacy->id)->assertOk()->json('data');
        $this->postJson(self::ADMIN.'/'.$record['id'].'/verify', ['version' => 1, 'source_checked' => true])->assertUnprocessable();
        $record = $this->putJson(self::ADMIN.'/'.$record['id'], $this->payload + ['version' => 1])->assertOk()->json('data');
        $record = $this->action($record, 'verify');
        $this->concours->update(['is_active' => false]);
        $this->postJson(self::ADMIN.'/'.$record['id'].'/publish', ['version' => $record['version']])->assertUnprocessable();
        $this->concours->update(['is_active' => true]);
        $record = $this->action($record, 'publish');
        $this->getJson(self::PUBLIC.'?category_id='.$this->concours->category_id.'&concours_id='.$this->concours->id.'&q=FICTIVE')->assertJsonPath('data.meta.total', 1);
        $this->getJson(self::PUBLIC.'?concours_id=999999')->assertJsonPath('data.items', []);
        $this->getJson(self::PUBLIC.'?per_page=1000')->assertUnprocessable();
        $this->deleteJson('/api/v1/admin/concours-directory/concours/'.$this->concours->id)->assertConflict();
    }

    public function test_noop_edits_preserve_versions_and_source_edits_invalidate_verification(): void
    {
        $this->login();
        $record = $this->create();
        $url = self::ADMIN.'/'.$record['id'];
        $this->putJson($url, $this->payload + ['version' => 1])->assertOk()->assertJsonPath('data.version', 1);
        $this->assertSame(1, ConcoursAnnouncement::find($record['id'])->revisions()->count());
        $record = $this->action($record, 'submit');
        $this->postJson($url.'/submit', ['version' => 2])->assertUnprocessable();
        $this->postJson($url.'/archive', ['version' => 2])->assertUnprocessable();
        $record = $this->action($record, 'verify');
        $this->putJson($url, array_replace($this->payload, ['version' => $record['version'], 'official_source_url' => 'https://institution.example.test/corrected-notice']))->assertOk()->assertJsonPath('data.verification_status', 'unverified')->assertJsonPath('data.verified_by', null);
    }

    public function test_partial_date_edits_validate_retained_values_without_changing_the_record(): void
    {
        $this->login();
        $record = $this->create(['examination_date' => '2026-10-28']);
        $url = self::ADMIN.'/'.$record['id'];
        $base = ['concours_id' => $this->concours->id, 'version' => 1];
        foreach ([
            [['registration_opens_on' => '2026-10-25'], 'registration_deadline'],
            [['registration_deadline' => '2026-10-29'], 'examination_date'],
            [['registration_deadline' => '2026-10-22'], 'registration_deadline'],
            [['examination_date' => '2026-10-20'], 'examination_date'],
        ] as [$edit, $field]) {
            $this->putJson($url, $edit + $base)->assertUnprocessable()->assertJsonValidationErrors($field);
            $this->getJson($url)->assertJsonPath('data.version', 1)
                ->assertJsonPath('data.registration_opens_on', '2026-10-23')
                ->assertJsonPath('data.registration_deadline', '2026-10-24')
                ->assertJsonPath('data.examination_date', '2026-10-28');
        }
        $this->assertSame(1, ConcoursAnnouncement::find($record['id'])->revisions()->count());
        $this->putJson($url, ['registration_opens_on' => '2026-10-22'] + $base)->assertOk()
            ->assertJsonPath('data.registration_deadline', '2026-10-24')->assertJsonPath('data.examination_date', '2026-10-28');
        $this->putJson($url, ['concours_id' => $this->concours->id, 'version' => 2,
            'registration_opens_on' => null, 'registration_deadline' => '2026-10-20', 'examination_date' => null])->assertOk()
            ->assertJsonPath('data.registration_opens_on', null)->assertJsonPath('data.examination_date', null);
    }

    public function test_republishing_does_not_promote_old_sessions_or_old_notices_within_a_session(): void
    {
        $this->login();
        $old = $this->action($this->action($this->create(['session_year' => 2025, 'official_publication_date' => '2025-01-01']), 'verify'), 'publish');
        $current = $this->action($this->action($this->create(['slug' => 'current-session', 'session_year' => 2026, 'official_publication_date' => '2026-10-10']), 'verify'), 'publish');
        $newNotice = $this->action($this->action($this->create(['slug' => 'new-notice', 'session_year' => 2026, 'official_publication_date' => '2026-10-20']), 'verify'), 'publish');
        $this->action($this->action($old, 'archive'), 'publish');
        $this->action($this->action($current, 'archive'), 'publish');
        $this->getJson(self::PUBLIC.'?concours_id='.$this->concours->id.'&per_page=1')->assertOk()
            ->assertJsonPath('data.items.0.id', $newNotice['id'])->assertJsonPath('data.meta.last_page', 3);
        $this->getJson(self::PUBLIC.'?concours_id='.$this->concours->id.'&per_page=1&page=2')->assertOk()->assertJsonPath('data.items.0.id', $current['id']);
        // Legacy records without session years use their original publication,
        // never the mutable republish timestamp, including across calendar years.
        ConcoursAnnouncement::find($old['id'])->forceFill(['session_year' => null, 'official_publication_date' => null, 'first_published_at' => '2024-01-01 12:00:00'])->save();
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items.2.id', $old['id']);
        ConcoursAnnouncement::find($old['id'])->forceFill(['first_published_at' => '2027-01-01 12:00:00'])->save();
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items.0.id', $old['id']);
    }
}
