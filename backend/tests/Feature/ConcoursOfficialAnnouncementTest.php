<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Http\UploadedFile;
use Tests\ConcoursTestCase;

class ConcoursOfficialAnnouncementTest extends ConcoursTestCase
{
    private Concours $concours;
    private User $actor;
    private ConcoursAnnouncementService $service;

    protected function setUp(): void
    {
        parent::setUp();
        $category = ConcoursCategory::create(['slug' => 'test', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'test', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'bac-libre-test', 'name_fr' => 'Bac libre', 'name_ar' => 'باك حر',
            'is_active' => true, 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'examination', 'session_year' => 2027]);
        $this->actor = User::create(['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $this->service = app(ConcoursAnnouncementService::class);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->actor));
    }

    private function notice(array $extra = [], bool $publish = true): ConcoursAnnouncement
    {
        $record = $this->service->save($extra + ['concours_id' => $this->concours->id, 'session_year' => 2027,
            'title_fr' => 'Annonce officielle', 'title_ar' => 'إعلان رسمي',
            'description_fr' => "Conditions\n\nDocuments", 'description_ar' => "الشروط\n\nالوثائق",
            'registration_opens_on' => '2026-12-01', 'registration_deadline' => '2026-12-31',
            'official_source_url' => 'https://institution.example.test/notice',
            'file' => UploadedFile::fake()->createWithContent('notice.pdf', "%PDF-1.7\nTest\n%%EOF\n")], $this->actor);

        return $publish ? $this->service->transition($record->id, $record->version, 'verify-publish', $this->actor) : $record;
    }

    private function choose(ConcoursAnnouncement $notice, ?int $expected = null, array $extra = [])
    {
        return $this->postJson('/api/v1/admin/concours-announcements/'.$notice->id.'/designate-official', $extra + [
            'concours_id' => $this->concours->id, 'version' => $notice->version, 'session_year' => 2027,
            'expected_official_announcement_id' => $expected, 'confirmed' => true,
        ]);
    }

    private function page(): array
    {
        return $this->getJson('/api/v1/public/concours/'.$this->concours->slug)->assertOk()->json('data');
    }

    public function test_explicit_selection_after_deletion_preserves_editorial_data_documents_and_history(): void
    {
        $deleted = $this->notice();
        $this->service->delete($deleted->id, $deleted->version, $this->actor);
        $history = $this->notice(['session_year' => 2026]);
        $replacement = $this->notice();
        $other = $this->notice();
        $before = $replacement->fresh()->getAttributes();
        $pdfIds = $replacement->officialPdfs()->pluck('id')->all();
        $this->assertFalse($this->page()['official_announcement_configured']);
        $this->assertNull($this->page()['official_announcement']);

        $this->choose($replacement)->assertOk()
            ->assertJsonPath('data.concours.official_announcement_id', $replacement->id);
        $public = $this->page();
        $this->assertSame($replacement->id, $public['official_announcement']['id']);
        $this->assertTrue($public['official_announcement_configured']);
        $this->assertArrayNotHasKey('official_announcement_id', $public);
        $this->assertEqualsCanonicalizing([$replacement->id, $other->id], array_column($public['current_announcements'], 'id'));
        $after = $replacement->fresh()->getAttributes();
        unset($before['version'], $before['updated_at'], $after['version'], $after['updated_at']);
        $this->assertSame($before, $after);
        $this->assertSame($pdfIds, $replacement->officialPdfs()->pluck('id')->all());
        $this->assertSame(2026, $history->fresh()->session_year);
        $this->assertNotNull(ConcoursAnnouncement::withTrashed()->findOrFail($deleted->id)->deleted_at);
        $revision = $replacement->revisions()->where('action', 'designated_official')->sole();
        $this->assertSame($this->actor->id, $revision->actor_id);
        $this->assertSame($replacement->id, $revision->snapshot['official_announcement_id']);
        $this->assertSame(['from' => null, 'to' => $replacement->id], $revision->changes['official_announcement_id']);
    }

    public function test_switching_official_notice_keeps_previous_notice_and_is_idempotent(): void
    {
        $first = $this->notice();
        $second = $this->notice();
        $this->choose($first)->assertOk();
        $previous = $first->fresh()->getAttributes();
        $this->choose($second, $first->id)->assertOk();
        $this->assertSame(['from' => $first->id, 'to' => $second->id], $second->revisions()->where('action', 'designated_official')->sole()->changes['official_announcement_id']);
        $this->assertSame($second->id, $this->page()['official_announcement']['id']);
        $this->assertSame($previous, $first->fresh()->getAttributes());
        $second->refresh();
        $version = $second->version;
        $this->choose($second, $second->id)->assertOk()->assertJsonPath('data.version', $version);
        $this->assertSame(1, $second->revisions()->where('action', 'designated_official')->count());
        $this->assertCount(2, $this->page()['current_announcements']);
    }

    public function test_session_response_keeps_each_notice_and_its_public_attachments_separate(): void
    {
        $main = $this->notice(['positions' => 75, 'additional_official_urls' => ['https://institution.example.test/main-extra'],
            'files' => array_map(fn ($name) => UploadedFile::fake()->createWithContent($name.'.pdf', "%PDF-1.7\n{$name}\n%%EOF\n"), ['extra', 'inactive', 'unapproved'])]);
        $other = $this->notice(['positions' => 150, 'description_fr' => 'Autre annonce',
            'registration_opens_on' => null, 'registration_deadline' => null,
            'additional_official_urls' => ['https://institution.example.test/other-extra']]);
        $extra = $main->officialPdfs()->where('id', '!=', $main->official_pdf_id)->orderBy('id')->get();
        $extra[1]->update(['is_active' => false]);
        $extra[2]->update(['approved_at' => null]);
        $this->choose($main)->assertOk();
        $public = $this->page();
        $items = collect($public['current_announcements'])->keyBy('id');
        $this->assertCount(2, $items);
        $this->assertSame($main->id, $public['official_announcement']['id']);
        $this->assertSame(75, $items[$main->id]['positions']);
        $this->assertSame(150, $items[$other->id]['positions']);
        $this->assertSame('2026-12-31', $items[$main->id]['registration_deadline']);
        $this->assertNull($items[$other->id]['registration_deadline']);
        $this->assertSame('Autre annonce', $items[$other->id]['description_fr']);
        $this->assertSame(['https://institution.example.test/main-extra'], $items[$main->id]['additional_official_urls']);
        $this->assertSame(['https://institution.example.test/other-extra'], $items[$other->id]['additional_official_urls']);
        $this->assertSame([$main->official_pdf_id, $extra[0]->id], array_column($items[$main->id]['official_pdfs'], 'id'));
        $this->assertSame([$other->official_pdf_id], array_column($items[$other->id]['official_pdfs'], 'id'));
        foreach ($items as $item) {
            foreach ($item['official_pdfs'] as $pdf) {
                $this->get('/api/v1'.$pdf['view_path'])->assertOk();
            }
        }
        $this->get('/api/v1/public/concours-pdfs/'.$extra[1]->id.'/view')->assertNotFound();
        $this->get('/api/v1/public/concours-pdfs/'.$extra[2]->id.'/view')->assertNotFound();
    }

    public function test_only_eligible_notices_enter_the_active_session_response(): void
    {
        $eligible = $this->notice();
        $this->notice(['session_year' => 2026]);
        $this->notice([], false);
        foreach (['withdraw', 'archive', 'delete', 'supersede'] as $action) {
            $notice = $this->notice();
            if ($action === 'delete') $this->service->delete($notice->id, $notice->version, $this->actor);
            elseif ($action === 'supersede') $notice->forceFill(['superseded_at' => now()])->save();
            else $this->service->transition($notice->id, $notice->version, $action, $this->actor);
        }
        $unverified = $this->notice();
        $unverified->forceFill(['verification_status' => 'unverified', 'verified_at' => null])->save();
        $this->assertSame([$eligible->id], array_column($this->page()['current_announcements'], 'id'));
    }

    public function test_stale_choices_and_session_changes_fail_without_overwriting_another_admin(): void
    {
        $first = $this->notice();
        $second = $this->notice();
        $this->choose($first)->assertOk();
        $this->choose($second)->assertConflict();
        $this->choose($first, $first->id)->assertConflict(); // stale announcement version
        $this->concours->update(['session_year' => 2028]);
        $this->choose($second, $first->id)->assertConflict();
        $this->assertSame($first->id, $this->concours->fresh()->official_announcement_id);
    }

    public function test_only_visible_current_session_notices_of_the_same_concours_are_eligible(): void
    {
        foreach ([['session_year' => 2026], ['session_year' => null], ['superseded_at' => now()]] as $extra) {
            $notice = $this->notice();
            $notice->forceFill($extra)->save();
            $this->choose($notice)->assertUnprocessable();
        }
        $draft = $this->notice([], false);
        $this->choose($draft)->assertUnprocessable();
        $published = $this->notice();
        $other = $this->concours->replicate();
        $other->slug = 'other';
        $other->save();
        $this->choose($published, extra: ['concours_id' => $other->id])->assertUnprocessable();
        $this->concours->category->update(['is_active' => false]);
        $this->choose($published)->assertUnprocessable();
        $this->assertNull($this->concours->fresh()->official_announcement_id);
    }

    public function test_withdrawal_deletion_and_rollover_do_not_promote_another_notice(): void
    {
        $selected = $this->notice();
        $other = $this->notice();
        $this->choose($selected)->assertOk();
        $selected->refresh();
        $selected = $this->service->transition($selected->id, $selected->version, 'withdraw', $this->actor);
        $this->assertNull($this->page()['official_announcement']);
        $this->assertTrue($this->page()['official_announcement_configured']);
        $this->service->delete($selected->id, $selected->version, $this->actor);
        $this->assertNull($this->page()['official_announcement']);
        $this->assertCount(1, $this->page()['current_announcements']);
        $this->choose($other, $selected->id)->assertOk();
        $this->notice(['session_year' => 2028]);
        $this->concours->update(['session_year' => 2028]);
        $this->assertNull($this->page()['official_announcement']);
        $this->assertTrue($this->page()['official_announcement_configured']);
        $this->assertCount(1, $this->page()['current_announcements']);
        $this->getJson('/api/v1/public/concours-announcements?concours_id='.$this->concours->id.'&session_scope=history')
            ->assertOk()->assertJsonPath('data.items.0.id', $other->id);
    }

    public function test_designation_requires_admin_authorization_and_explicit_confirmation(): void
    {
        $record = $this->notice();
        $this->choose($record, extra: ['confirmed' => false])->assertUnprocessable();
        $this->withHeader('Authorization', '')->choose($record)->assertUnauthorized();
        $user = User::create(['name' => 'User', 'username' => 'user', 'email' => 'user@example.test', 'password' => 'TestOnly123!', 'role' => 'user']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
        $this->choose($record)->assertForbidden();
        $this->assertNull($this->concours->fresh()->official_announcement_id);
    }
}
