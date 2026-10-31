<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\ExamPdf;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use Carbon\CarbonImmutable;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\ConcoursTestCase;

class ConcoursSessionTest extends ConcoursTestCase
{
    private Concours $concours;

    private User $actor;

    private ConcoursAnnouncementService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->clock('2026-10-24');
        $category = ConcoursCategory::create(['slug' => 'test', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'test', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'permanent', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true, 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment']);
        $this->actor = User::create(['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $this->service = app(ConcoursAnnouncementService::class);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->actor));
    }

    protected function tearDown(): void
    {
        CarbonImmutable::setTestNow();
        parent::tearDown();
    }

    private function clock(string $date): void
    {
        CarbonImmutable::setTestNow(CarbonImmutable::parse($date.' 00:00:00', 'Africa/Casablanca'));
    }

    private function notice(array $extra = [], bool $publish = true): ConcoursAnnouncement
    {
        $notice = $this->service->save($extra + ['concours_id' => $this->concours->id, 'session_year' => 2026,
            'title_fr' => 'Original official title', 'official_source_url' => 'https://institution.example.test/notice'], $this->actor);
        if ($publish) {
            $notice = $this->service->transition($notice->id, $notice->version, 'verify', $this->actor);
            $notice = $this->service->transition($notice->id, $notice->version, 'publish', $this->actor);
        }

        return $notice;
    }

    private function publicPage(): array
    {
        return $this->getJson('/api/v1/public/concours/permanent')->assertOk()->json('data');
    }

    public function test_manual_policy_override_and_legacy_declared_year_never_assume_calendar_year(): void
    {
        $this->assertNull($this->publicPage()['displayed_session_year']);
        $legacy = $this->notice(['session_year' => 2025]);
        $this->assertSame(2025, $this->publicPage()['displayed_session_year']);
        $legacy = $this->service->transition($legacy->id, $legacy->version, 'archive', $this->actor);
        $this->assertSame(2025, $this->publicPage()['displayed_session_year']);
        $this->assertSame('archived', $this->publicPage()['session_announcement_state']);
        $this->service->transition($legacy->id, $legacy->version, 'publish', $this->actor);
        $this->notice(['session_year' => 2029], false); // draft cannot move the year
        $this->assertSame(2025, $this->publicPage()['displayed_session_year']);
        $this->concours->update(['session_year' => 2026]);
        $this->clock('2027-01-01');
        $this->assertSame(2026, $this->publicPage()['displayed_session_year']);
        $this->assertSame([], $this->publicPage()['current_announcements']);
        $this->concours->update(['session_year_override' => 2025]);
        $this->assertCount(1, $this->publicPage()['current_announcements']);
        $this->concours->update(['session_year_override' => null]);
        $this->assertSame(2026, $this->publicPage()['displayed_session_year']);
    }

    public function test_annual_policy_changes_only_at_approved_moroccan_boundary_and_anniversary(): void
    {
        $this->concours->update(['session_year' => 2026, 'session_policy' => 'annual', 'session_rollover_on' => '2027-09-01']);
        foreach (['2027-01-01' => 2026, '2027-08-31' => 2026, '2027-09-01' => 2027, '2028-08-31' => 2027, '2028-09-01' => 2028] as $date => $year) {
            $this->clock($date);
            $this->assertSame($year, $this->publicPage()['displayed_session_year'], $date);
            $this->assertSame([], $this->publicPage()['current_announcements']);
        }
        $this->concours->update(['session_year_override' => 2025]);
        $this->assertSame(2025, $this->publicPage()['displayed_session_year']);
        $this->concours->update(['session_year_override' => null]);
        $this->assertSame(2028, $this->publicPage()['displayed_session_year']);
        $this->assertSame(2026, $this->concours->fresh()->session_year); // derived, no scheduler writes
    }

    public function test_admin_policy_validation_merges_existing_values_and_permanent_slug_is_locked(): void
    {
        $url = '/api/v1/admin/concours-directory/concours/'.$this->concours->id;
        $base = $this->concours->only(['slug', 'name_fr', 'name_ar', 'category_id', 'institution_id', 'type', 'is_active']) + ['display_order' => 0];
        $this->putJson($url, $base + ['session_policy' => 'annual'])->assertUnprocessable();
        $this->putJson($url, $base + ['session_policy' => 'annual', 'session_year' => 2026, 'session_rollover_on' => '2028-02-29'])->assertUnprocessable();
        $this->putJson($url, $base + ['session_policy' => 'annual', 'session_year' => 2026, 'session_rollover_on' => '2027-09-01'])->assertOk()->assertJsonPath('data.displayed_session_year', 2026);
        $this->putJson($url, $base + ['session_year' => null])->assertUnprocessable();
        $this->putJson($url, array_replace($base, ['slug' => 'annual-page-2027']))->assertUnprocessable()->assertJsonValidationErrors('slug');
        $this->assertSame('permanent', $this->concours->fresh()->slug);
    }

    public function test_cross_year_dates_never_determine_session_and_explicit_year_and_titles_are_preserved(): void
    {
        $this->concours->update(['session_year' => 2027]);
        $notice = $this->service->save(['concours_id' => $this->concours->id, 'title_fr' => 'Titre officiel 2027',
            'registration_opens_on' => '2026-12-15', 'registration_deadline' => '2027-01-15'], $this->actor);
        $this->assertSame(2027, $notice->session_year);
        $this->assertSame('Titre officiel 2027', $notice->title_fr);
        $explicit = $this->notice(['session_year' => 2028, 'registration_opens_on' => '2026-12-15', 'registration_deadline' => '2027-01-15']);
        $this->assertSame(2028, $explicit->session_year);
        $this->assertSame([], $this->publicPage()['current_announcements']);
        $unknown = $this->service->save(['concours_id' => $this->concours->id, 'session_year' => null, 'registration_opens_on' => '2026-12-15'], $this->actor);
        $this->assertNull($unknown->session_year);
    }

    public function test_multiple_notices_current_selection_and_history_are_independent_of_feed_pagination(): void
    {
        $this->concours->update(['session_year' => 2026]);
        $old = $this->notice(['session_year' => 2025]);
        $first = $this->notice(['registration_opens_on' => '2026-10-25', 'registration_deadline' => '2026-11-01']);
        $second = $this->notice(['registration_opens_on' => '2026-10-01', 'registration_deadline' => '2026-10-24']);
        $future = $this->notice(['session_year' => 2027]);
        $old = $this->service->transition($old->id, $old->version, 'archive', $this->actor);
        $this->service->transition($old->id, $old->version, 'publish', $this->actor);
        $ids = array_column($this->publicPage()['current_announcements'], 'id');
        $this->assertEqualsCanonicalizing([$first->id, $second->id], $ids);
        $this->getJson('/api/v1/public/concours-announcements?concours_id='.$this->concours->id.'&session_scope=current&per_page=1&page=2')
            ->assertOk()->assertJsonPath('data.meta.total', 2)->assertJsonCount(1, 'data.items');
        $history = $this->getJson('/api/v1/public/concours-announcements?concours_id='.$this->concours->id.'&session_scope=history')->assertOk()->json('data.items');
        $this->assertEqualsCanonicalizing([$old->id, $future->id], array_column($history, 'id'));
    }

    public function test_replacement_is_explicit_atomic_and_historical_pdf_and_revision_identity_are_preserved(): void
    {
        $this->concours->update(['session_year' => 2026]);
        $old = $this->notice(['file' => UploadedFile::fake()->createWithContent('old.pdf', "%PDF-1.7\nold\n%%EOF\n")]);
        $pdf = $old->officialPdf;
        $identity = $pdf->only(['id', 'file_path', 'sha256', 'year', 'document_type']);
        $other = $this->notice();
        $replacement = $this->notice(['replaces_announcement_id' => $old->id], false);
        $this->assertCount(2, $this->publicPage()['current_announcements']);
        $replacement = $this->service->transition($replacement->id, $replacement->version, 'verify', $this->actor);
        $replacement = $this->service->transition($replacement->id, $replacement->version, 'publish', $this->actor);
        $this->assertEqualsCanonicalizing([$replacement->id, $other->id], array_column($this->publicPage()['current_announcements'], 'id'));
        $this->assertNotNull($old->fresh()->superseded_at);
        $this->assertSame('superseded', $old->fresh()->announcementStatus());
        $this->assertSame($identity, $pdf->fresh()->only(array_keys($identity)));
        Storage::disk('exam_pdfs')->assertExists($pdf->file_path);
        $this->assertSame('superseded', $old->revisions()->orderByDesc('version')->first()->action);
        $this->getJson('/api/v1/public/concours-announcements/'.$old->slug)->assertOk()->assertJsonPath('data.announcement_status', 'superseded');
        $this->get('/api/v1/public/concours-pdfs/'.$pdf->id.'/view')->assertOk();
        $this->service->transition($replacement->id, $replacement->version, 'withdraw', $this->actor);
        $this->assertSame([$other->id], array_column($this->publicPage()['current_announcements'], 'id')); // never silently revive superseded notices
        $old = $old->fresh();
        $old = $this->service->transition($old->id, $old->version, 'archive', $this->actor);
        $this->service->transition($old->id, $old->version, 'publish', $this->actor);
        $this->assertSame([$other->id], array_column($this->publicPage()['current_announcements'], 'id'));
    }

    public function test_invalid_replacements_and_replacement_link_edits_are_rejected(): void
    {
        $old = $this->notice();
        $url = '/api/v1/admin/concours-announcements/'.$old->id;
        $this->putJson($url, ['concours_id' => $old->concours_id, 'version' => $old->version, 'replaces_announcement_id' => $old->id])->assertUnprocessable();
        $draft = $this->notice([], false);
        $this->putJson('/api/v1/admin/concours-announcements/'.$draft->id, ['concours_id' => $draft->concours_id, 'version' => $draft->version, 'replaces_announcement_id' => $draft->id])->assertUnprocessable();
        $other = Concours::create(['slug' => 'other-concours', 'name_fr' => 'Other', 'name_ar' => 'أخرى',
            'category_id' => $this->concours->category_id, 'institution_id' => $this->concours->institution_id,
            'type' => 'recruitment', 'is_active' => true]);
        $foreignNotice = $this->notice(['concours_id' => $other->id]);
        $this->putJson('/api/v1/admin/concours-announcements/'.$draft->id, ['concours_id' => $draft->concours_id,
            'version' => $draft->version, 'replaces_announcement_id' => $foreignNotice->id])
            ->assertUnprocessable()->assertJsonValidationErrors('replaces_announcement_id');
        $replacement = $this->notice(['replaces_announcement_id' => $old->id]);
        $staleReplacement = $this->notice(['replaces_announcement_id' => $old->id, 'file' => UploadedFile::fake()->createWithContent('stale.pdf', "%PDF-1.7\nfixture\n%%EOF\n")], false);
        $this->postJson('/api/v1/admin/concours-announcements/'.$staleReplacement->id.'/verify-publish', ['version' => $staleReplacement->version, 'source_checked' => true])->assertUnprocessable()->assertJsonValidationErrors('replaces_announcement_id');
        $this->assertSame('draft', $staleReplacement->fresh()->verification_status);
        $this->assertNull($staleReplacement->officialPdf->fresh()->approved_at);
        $replacement = $this->service->transition($replacement->id, $replacement->version, 'withdraw', $this->actor);
        $this->putJson('/api/v1/admin/concours-announcements/'.$replacement->id, ['concours_id' => $replacement->concours_id, 'version' => $replacement->version, 'replaces_announcement_id' => null])->assertUnprocessable();
    }

    public function test_verified_lifecycle_labels_and_preparation_resources_survive_year_changes_and_archiving(): void
    {
        $this->concours->update(['session_year' => 2026]);
        $notice = $this->notice(['registration_opens_on' => '2026-10-25', 'registration_deadline' => '2026-10-27', 'examination_date' => '2026-10-29']);
        $this->assertSame('upcoming', $notice->announcementStatus());
        foreach (['2026-10-25' => 'open', '2026-10-28' => 'closed', '2026-10-30' => 'completed'] as $date => $status) {
            $this->clock($date);
            $this->assertSame($status, $notice->announcementStatus());
        }
        foreach (['previous_exam', 'correction', 'summary', 'preparation_guide'] as $type) {
            ExamPdf::create(['title' => $type, 'file_path' => $type.'.pdf', 'concours_id' => $this->concours->id, 'document_type' => $type,
                'is_active' => true, 'approved_at' => now(), 'approved_by' => $this->actor->id, 'distribution_permission' => 'admin_confirmed', 'distribution_confirmed_at' => now(), 'year' => 2024]);
        }
        $before = $this->publicPage()['resources'];
        $this->assertCount(4, $before);
        $notice = $this->service->transition($notice->id, $notice->version, 'archive', $this->actor);
        $this->assertSame('archived', $notice->announcementStatus());
        $this->assertSame('archived', $this->publicPage()['session_announcement_state']);
        $this->assertSame([], $this->publicPage()['current_announcements']);
        $this->getJson('/api/v1/public/concours-announcements/'.$notice->slug)->assertNotFound();
        $this->concours->update(['session_year' => 2027]);
        $this->assertSame([], $this->publicPage()['current_announcements']);
        $this->assertSame('not_announced', $this->publicPage()['session_announcement_state']);
        $this->assertSame($before, $this->publicPage()['resources']);
        $this->get('/sitemap.xml')->assertSee('/concours/permanent', false)->assertDontSee('/concours/permanent-2027', false);
        $this->assertSame(1, Concours::count());
        $this->assertSame(1, ConcoursAnnouncement::count());
    }
}
