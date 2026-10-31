<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\ExamPdf;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\ConcoursTestCase;

class ConcoursPdfTest extends ConcoursTestCase
{
    private const ADMIN = '/api/v1/admin/concours-announcements';

    private const PDF = "%PDF-1.7\nOfficial fixture, not application data.\n%%EOF\n";

    private Concours $concours;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $category = ConcoursCategory::create(['slug' => 'education', 'name_fr' => 'Éducation', 'name_ar' => 'التعليم', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'institution-test', 'name_fr' => 'Institut de test', 'name_ar' => 'معهد تجريبي', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'test-concours', 'name_fr' => 'Concours de test', 'name_ar' => 'مباراة تجريبية', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true]);
        $this->admin = User::create(['name' => 'Test admin', 'username' => 'testadmin', 'email' => 'testadmin@example.test', 'password' => 'TestsOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
    }

    private function file(string $content = self::PDF): UploadedFile
    {
        return UploadedFile::fake()->createWithContent('../../hostile-name.pdf', $content);
    }

    private function create(array $extra = []): array
    {
        return $this->postJson(self::ADMIN, $extra + ['concours_id' => $this->concours->id, 'file' => $this->file()])->assertCreated()->json('data');
    }

    private function publish(array $record): array
    {
        return $this->postJson(self::ADMIN.'/'.$record['id'].'/verify-publish', ['version' => $record['version'], 'source_checked' => true])->assertOk()->json('data');
    }

    private function url(int $id, string $action = 'view'): string
    {
        return '/api/v1/public/concours-pdfs/'.$id.'/'.$action;
    }

    public function test_minimal_creation_generates_titles_and_keeps_unknown_dates_and_pdf_private(): void
    {
        $record = $this->create(['session_year' => 2026]);
        $this->assertSame('Concours de test — 2026', $record['title_fr']);
        $this->assertSame('مباراة تجريبية — 2026', $record['title_ar']);
        $this->assertSame($this->concours->institution_id, $record['institution_id']);
        $this->assertNull($record['description_fr']);
        $this->assertNull($record['registration_deadline']);
        $pdf = ExamPdf::findOrFail($record['official_pdf']['id']);
        $this->assertSame($record['id'], $pdf->announcement_id);
        $this->assertMatchesRegularExpression('#^concours/announcements/[a-f0-9-]{36}\.pdf$#', $pdf->file_path);
        Storage::disk('exam_pdfs')->assertExists($pdf->file_path);
        $this->assertSame(hash('sha256', self::PDF), $pdf->sha256);
        $this->assertArrayNotHasKey('file_path', $record['official_pdf']);
        $this->get(self::ADMIN.'/'.$record['id'].'/pdf/view')->assertOk()->assertHeader('Content-Type', 'application/pdf');
        $this->withHeader('Authorization', '');
        $this->get($this->url($pdf->id))->assertNotFound();
        $this->get($this->url($pdf->id, 'download'))->assertNotFound();
        $this->getJson('/api/v1/public/concours-announcements/'.$record['slug'])->assertNotFound();
    }

    public function test_one_explicit_confirmation_publishes_a_pdf_without_requiring_a_source_url(): void
    {
        $record = $this->create();
        $this->postJson(self::ADMIN.'/'.$record['id'].'/verify-publish', ['version' => 1])->assertUnprocessable();
        $record = $this->publish($record);
        $this->assertSame('published', $record['publication_status']);
        $this->assertSame('verified', $record['verification_status']);
        $this->assertSame('unknown', $record['registration_status']);
        $this->assertSame(3, $record['version']);
        $pdf = ExamPdf::find($record['official_pdf']['id']);
        $this->assertSame('admin_confirmed', $pdf->distribution_permission);
        $this->assertNotNull($pdf->distribution_confirmed_at);
        $this->assertNotNull($pdf->approved_at);
        $this->assertSame($this->admin->id, $pdf->approved_by);
        $this->assertStringContainsString('Institut de test', $pdf->attribution);
        $this->withHeader('Authorization', '');
        $view = $this->get($this->url($pdf->id))->assertOk()->assertHeader('Content-Type', 'application/pdf')->assertHeader('X-Content-Type-Options', 'nosniff')->assertHeader('X-Robots-Tag', 'noindex, nofollow, noarchive');
        $this->assertStringStartsWith('inline;', $view->headers->get('Content-Disposition'));
        $view->assertStreamedContent(self::PDF);
        $this->get($this->url($pdf->id, 'download'))->assertOk()->assertDownload();
        $this->getJson('/api/v1/public/concours-announcements/'.$record['slug'])->assertOk()->assertJsonPath('data.official_pdf.id', $pdf->id)->assertJsonPath('data.registration_deadline', null);
    }

    public function test_file_validation_rejects_wrong_type_signature_truncation_and_size(): void
    {
        $files = [$this->file('<html>not a PDF</html>'), $this->file("%PDF-1.9\ninvalid version\n%%EOF\n"), $this->file("%PDF-1.7\ntruncated"), $this->file()->size(20481)];
        foreach ($files as $file) {
            $this->postJson(self::ADMIN, ['concours_id' => $this->concours->id, 'file' => $file])->assertUnprocessable()->assertJsonValidationErrors('file');
        }
        $this->postJson(self::ADMIN, ['concours_id' => $this->concours->id])->assertUnprocessable()->assertJsonValidationErrors('file');
        $this->assertSame(0, ExamPdf::count());
        $this->assertSame([], Storage::disk('exam_pdfs')->allFiles());
    }

    public function test_upload_and_private_preview_require_administrator_authorization(): void
    {
        $record = $this->create();
        $this->withHeader('Authorization', '');
        $this->postJson(self::ADMIN, ['concours_id' => $this->concours->id, 'file' => $this->file()])->assertUnauthorized();
        $this->get(self::ADMIN.'/'.$record['id'].'/pdf/view', ['Accept' => 'application/json'])->assertUnauthorized();
        foreach (['user', 'manager'] as $role) {
            $user = User::create(['name' => 'Test', 'username' => $role.'test', 'email' => $role.'@example.test', 'password' => 'TestsOnly123!', 'role' => $role]);
            $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
            $this->postJson(self::ADMIN, ['concours_id' => $this->concours->id, 'file' => $this->file()])->assertForbidden();
            $this->get(self::ADMIN.'/'.$record['id'].'/pdf/view', ['Accept' => 'application/json'])->assertForbidden();
        }
    }

    public function test_replacement_and_failed_stale_upload_preserve_old_files_and_revisions(): void
    {
        $record = $this->publish($this->create(['eligibility_fr' => 'Existing detailed content']));
        $old = ExamPdf::findOrFail($record['official_pdf']['id']);
        $this->postJson(self::ADMIN.'/'.$record['id'].'/withdraw', ['version' => 3])->assertOk();
        $filesBefore = Storage::disk('exam_pdfs')->allFiles();
        $this->putJson(self::ADMIN.'/'.$record['id'], ['concours_id' => $this->concours->id, 'version' => 1, 'file' => $this->file()])->assertConflict();
        $this->assertSame($filesBefore, Storage::disk('exam_pdfs')->allFiles());
        $record = $this->putJson(self::ADMIN.'/'.$record['id'], ['concours_id' => $this->concours->id, 'version' => 4, 'file' => $this->file("%PDF-1.7\nReplacement notice\n%%EOF\n")])->assertOk()->assertJsonPath('data.eligibility_fr', 'Existing detailed content')->json('data');
        $this->assertNotSame($old->id, $record['official_pdf']['id']);
        $record = $this->publish($record);
        $this->get($this->url($old->id))->assertNotFound();
        $this->get($this->url($record['official_pdf']['id']))->assertOk();
        Storage::disk('exam_pdfs')->assertExists($old->file_path);
        $this->assertSame(self::PDF, Storage::disk('exam_pdfs')->get($old->file_path));
        $this->assertSame($old->id, ConcoursAnnouncement::find($record['id'])->revisions()->where('version', 1)->first()->snapshot['official_pdf_id']);
    }

    public function test_combined_verification_rolls_back_if_publication_fails_and_withdrawal_hides_pdf(): void
    {
        $record = $this->create();
        $this->concours->update(['is_active' => false]);
        $this->postJson(self::ADMIN.'/'.$record['id'].'/verify-publish', ['version' => 1, 'source_checked' => true])->assertUnprocessable();
        $this->assertSame('draft', ConcoursAnnouncement::find($record['id'])->verification_status);
        $this->assertNull(ExamPdf::find($record['official_pdf']['id'])->approved_at);
        $this->assertSame(1, ConcoursAnnouncement::find($record['id'])->revisions()->count());
        $this->concours->update(['is_active' => true]);
        $record = $this->publish($record);
        $this->postJson(self::ADMIN.'/'.$record['id'].'/withdraw', ['version' => $record['version']])->assertOk();
        $this->get($this->url($record['official_pdf']['id']))->assertNotFound();
    }

    public function test_reusable_papers_stay_with_the_concours_and_legacy_library_stays_authenticated(): void
    {
        Storage::disk('exam_pdfs')->put('legacy.pdf', self::PDF);
        $legacy = ExamPdf::create(['title' => 'Existing library PDF', 'file_path' => 'legacy.pdf', 'is_active' => true]);
        $paper = ExamPdf::create(['title' => 'Previous paper 2024', 'file_path' => 'legacy.pdf', 'year' => 2024, 'document_type' => 'previous_exam', 'concours_id' => $this->concours->id, 'is_active' => true, 'approved_at' => now(), 'approved_by' => $this->admin->id, 'distribution_permission' => 'admin_confirmed', 'distribution_confirmed_at' => now()]);
        $this->create(['title_fr' => 'Session suivante']);
        $this->getJson('/api/v1/public/concours/test-concours')->assertOk()->assertJsonPath('data.resources.0.id', $paper->id)->assertJsonCount(1, 'data.resources');
        $this->getJson('/api/v1/exam-pdfs')->assertOk()->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.id', $legacy->id);
        $this->get('/api/v1/exam-pdfs/'.$legacy->id.'/view')->assertOk();
        $this->withHeader('Authorization', '');
        $this->get($this->url($paper->id))->assertOk();
        $this->get($this->url($legacy->id))->assertNotFound();
        $this->get('/api/v1/exam-pdfs/'.$legacy->id.'/view', ['Accept' => 'application/json'])->assertUnauthorized();
        $paper->update(['approved_at' => null]);
        $this->get($this->url($paper->id))->assertNotFound();
        $this->getJson('/api/v1/public/concours/test-concours')->assertJsonPath('data.resources', []);
    }

    public function test_existing_library_uploads_still_use_the_same_private_disk(): void
    {
        $record = $this->postJson('/api/v1/exam-pdfs', ['title' => 'Existing library upload', 'file' => $this->file()])->assertCreated()->json('data');
        $pdf = ExamPdf::findOrFail($record['id']);
        $this->assertNull($pdf->document_type);
        Storage::disk('exam_pdfs')->assertExists($pdf->file_path);
        $this->get('/api/v1/exam-pdfs/'.$pdf->id.'/view')->assertOk();
        $this->get($this->url($pdf->id))->assertNotFound();
    }

    public function test_unavailable_files_have_no_public_download_and_edits_cannot_assign_another_pdf(): void
    {
        $record = $this->publish($this->create());
        $pdf = ExamPdf::findOrFail($record['official_pdf']['id']);
        Storage::disk('exam_pdfs')->delete($pdf->file_path); // Isolated fake disk only.
        $this->get($this->url($pdf->id))->assertNotFound();
        $this->getJson('/api/v1/public/concours-announcements/'.$record['slug'])->assertOk()->assertJsonPath('data.official_pdf.available', false);
        $this->putJson(self::ADMIN.'/'.$record['id'], ['concours_id' => $this->concours->id, 'version' => 3, 'official_pdf_id' => 999])->assertUnprocessable()->assertJsonValidationErrors('official_pdf_id');
    }

    public function test_generated_titles_fit_database_limits_and_uploaded_replacements_accept_multipart_override(): void
    {
        $this->concours->update(['name_fr' => str_repeat('x', 255)]);
        $record = $this->create(['session_year' => 2026]);
        $this->assertSame(255, mb_strlen($record['title_fr']));
        $this->assertStringEndsWith(' — 2026', $record['title_fr']);
        $record = $this->post(self::ADMIN.'/'.$record['id'], ['_method' => 'PUT', 'version' => $record['version'], 'concours_id' => $this->concours->id, 'file' => $this->file()], ['Accept' => 'application/json'])->assertOk()->json('data');
        $this->assertSame(2, $record['version']);
    }

    public function test_title_and_year_edits_sync_only_current_pdf_metadata_and_preserve_document_identity(): void
    {
        $record = $this->publish($this->create(['title_fr' => 'Original title', 'session_year' => 2025]));
        $pdf = ExamPdf::findOrFail($record['official_pdf']['id']);
        $identity = $pdf->only(['id', 'file_path', 'sha256', 'concours_id', 'announcement_id', 'document_type']);
        $url = self::ADMIN.'/'.$record['id'];
        $edit = ['concours_id' => $this->concours->id, 'title_fr' => 'Corrected title', 'session_year' => 2026];
        $this->putJson($url, $edit + ['version' => $record['version']])->assertUnprocessable();
        $this->assertSame('Original title', $pdf->fresh()->title);
        $record = $this->postJson($url.'/withdraw', ['version' => $record['version']])->assertOk()->json('data');
        $record = $this->putJson($url, $edit + ['version' => $record['version']])->assertOk()
            ->assertJsonPath('data.official_pdf.title', 'Corrected title')->assertJsonPath('data.official_pdf.year', 2026)->json('data');
        $this->assertSame($identity, $pdf->fresh()->only(array_keys($identity)));
        $this->assertSame(self::PDF, Storage::disk('exam_pdfs')->get($pdf->file_path));
        $this->assertSame(1, ExamPdf::count());
        $snapshot = ConcoursAnnouncement::find($record['id'])->revisions()->where('version', 1)->first()->snapshot;
        $this->assertSame('Original title', $snapshot['title_fr']);
        $this->assertSame(2025, $snapshot['session_year']);
        $this->assertSame($pdf->id, $snapshot['official_pdf_id']);
        $this->putJson($url, $edit + ['version' => 1])->assertConflict();
        $historical = $pdf->fresh()->getAttributes();
        $record = $this->putJson($url, ['concours_id' => $this->concours->id, 'version' => $record['version'], 'file' => $this->file()])->assertOk()->json('data');
        $this->putJson($url, ['concours_id' => $this->concours->id, 'version' => $record['version'], 'title_fr' => null,
            'title_ar' => 'عنوان مصحح', 'session_year' => null])->assertOk()
            ->assertJsonPath('data.official_pdf.title', 'عنوان مصحح')->assertJsonPath('data.official_pdf.year', null);
        $this->assertSame($historical, $pdf->fresh()->getAttributes());
        Storage::disk('exam_pdfs')->assertExists($pdf->file_path);
        $this->assertSame(2, ExamPdf::count());
    }

    public function test_verification_repairs_stale_current_pdf_labels_without_replacing_the_file(): void
    {
        $record = $this->create(['title_fr' => 'Current title', 'session_year' => 2026]);
        $pdf = ExamPdf::findOrFail($record['official_pdf']['id']);
        $pdf->update(['title' => 'Stale title', 'year' => 2025]);
        $this->publish($record);
        $this->assertSame('Current title', $pdf->fresh()->title);
        $this->assertSame(2026, $pdf->fresh()->year);
        $this->assertSame(1, ExamPdf::count());
        $this->assertSame(self::PDF, Storage::disk('exam_pdfs')->get($pdf->file_path));
    }

    public function test_library_pagination_covers_equal_year_documents_without_exposing_concours_pdfs(): void
    {
        $ids = [];
        for ($i = 0; $i < 25; $i++) {
            $ids[] = ExamPdf::create(['title' => 'Library fixture '.$i, 'file_path' => 'library-fixture.pdf', 'year' => 2025, 'is_active' => true])->id;
        }
        $this->create();
        $seen = [];
        foreach ([1 => 12, 2 => 12, 3 => 1] as $page => $count) {
            $data = $this->getJson('/api/v1/exam-pdfs?page='.$page)->assertOk()
                ->assertJsonPath('data.meta.current_page', $page)->assertJsonPath('data.meta.total', 25)
                ->assertJsonPath('data.meta.last_page', 3)->assertJsonCount($count, 'data.items')->json('data.items');
            $seen = array_merge($seen, array_column($data, 'id'));
        }
        $this->assertSame(array_reverse($ids), $seen);
    }
}
