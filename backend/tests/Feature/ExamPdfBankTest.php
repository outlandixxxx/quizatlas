<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursCategory;
use App\Models\ExamPdf;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\ConcoursTestCase;

class ExamPdfBankTest extends ConcoursTestCase
{
    private const BANK = '/api/v1/admin/exam-pdfs';
    private User $admin;
    private Concours $concours;
    private int $number = 0;

    protected function setUp(): void
    {
        parent::setUp();
        $category = ConcoursCategory::create(['slug' => 'bank-tests', 'name_fr' => 'Tests', 'name_ar' => 'اختبار', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'bank-test', 'name_fr' => 'Concours test', 'name_ar' => 'اختبار', 'category_id' => $category->id, 'is_active' => true, 'type' => 'recruitment']);
        $this->admin = User::create(['name' => 'Bank admin', 'username' => 'bank-admin', 'email' => 'bank@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $this->login($this->admin);
    }

    private function login(User $user): void
    {
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function create(array $overrides = []): array
    {
        return $this->postJson('/api/v1/exam-pdfs', $overrides + [
            'title' => 'PDF '.(++$this->number), 'document_type' => 'previous_exam', 'concours_id' => $this->concours->id,
            'year' => 2024, 'is_active' => true,
            'file' => UploadedFile::fake()->createWithContent('document.pdf', "%PDF-1.7\nBank file {$this->number}\n%%EOF\n"),
        ])->assertCreated()->json('data');
    }

    private function action(array $pdf, string $action): array
    {
        return $this->postJson(self::BANK.'/'.$pdf['id'].'/'.$action, ['version' => $pdf['version'],
            'distribution_confirmed' => true, 'publication_confirmed' => true])->assertOk()->json('data.document');
    }

    public function test_single_review_publication_unpublish_and_stale_versions_preserve_file_identity(): void
    {
        $pdf = $this->create();
        $original = ExamPdf::findOrFail($pdf['id'])->only(['file_path', 'sha256']);
        $this->postJson(self::BANK.'/'.$pdf['id'].'/publish', ['version' => 1, 'publication_confirmed' => true])->assertUnprocessable();
        $this->postJson(self::BANK.'/'.$pdf['id'].'/verify', ['version' => 1])->assertUnprocessable();
        $verified = $this->action($pdf, 'verify');
        $this->assertTrue($verified['verified']);
        $this->assertFalse($verified['published']);
        $this->assertFalse($verified['is_active']);
        $this->assertSame('verified', $verified['workflow_status']);
        $this->get('/api/v1/public/concours-pdfs/'.$pdf['id'].'/view')->assertNotFound();
        $this->postJson(self::BANK.'/'.$pdf['id'].'/publish', ['version' => $pdf['version'], 'publication_confirmed' => true])->assertConflict();
        $published = $this->action($verified, 'publish');
        $this->assertTrue($published['published']);
        $this->get('/api/v1/public/concours-pdfs/'.$pdf['id'].'/view')->assertOk();
        $this->postJson(self::BANK.'/'.$pdf['id'].'/verify-publish', ['version' => $published['version'], 'distribution_confirmed' => true, 'publication_confirmed' => true])
            ->assertOk()->assertJsonPath('data.skipped', true)->assertJsonPath('data.document.version', $published['version']);
        $withdrawn = $this->action($published, 'unpublish');
        $this->assertTrue($withdrawn['verified']);
        $this->get('/api/v1/public/concours-pdfs/'.$pdf['id'].'/view')->assertNotFound();
        $this->assertSame($original, ExamPdf::findOrFail($pdf['id'])->only(['file_path', 'sha256']));
        $this->assertCount(1, Storage::disk('exam_pdfs')->allFiles());
    }

    public function test_batch_reports_mixed_states_and_errors_and_publishes_originals_before_corrections(): void
    {
        $published = $this->action($this->create(), 'verify-publish');
        $verified = $this->action($this->create(['document_type' => 'summary']), 'verify');
        ExamPdf::whereKey($verified['id'])->update(['approved_at' => '2025-01-01 12:00:00']);
        $review = ExamPdf::findOrFail($verified['id'])->only(['approved_at', 'approved_by', 'distribution_confirmed_at']);
        $exam = $this->create();
        $correction = $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id']]);
        $legacy = $this->create(['document_type' => null, 'concours_id' => null]);
        $items = array_map(fn ($pdf) => ['id' => $pdf['id'], 'version' => $pdf['version']], [$correction, $published, $verified, $legacy, $exam]);
        $items[] = ['id' => 999999, 'version' => 1];
        $this->postJson(self::BANK.'/batch', ['action' => 'verify-publish', 'items' => $items])->assertUnprocessable();
        $result = $this->postJson(self::BANK.'/batch', ['action' => 'verify-publish', 'items' => $items,
            'distribution_confirmed' => true, 'publication_confirmed' => true])->assertOk()
            ->assertJsonPath('data.counts.succeeded', 3)->assertJsonPath('data.counts.skipped', 1)->assertJsonPath('data.counts.failed', 2)->json('data');
        foreach (array_filter($result['results'], fn ($item) => $item['status'] === 'failed') as $failure) {
            $this->assertNotEmpty($failure['message']);
        }
        $this->assertSame($published['version'], ExamPdf::findOrFail($published['id'])->version);
        $this->assertEquals($review, ExamPdf::findOrFail($verified['id'])->only(['approved_at', 'approved_by', 'distribution_confirmed_at']));
        $this->get('/api/v1/public/concours-pdfs/'.$correction['id'].'/view')->assertOk();
    }

    public function test_bulk_verify_is_private_and_bulk_publish_requires_existing_verification(): void
    {
        $one = $this->create();
        $two = $this->create(['document_type' => 'summary']);
        $items = array_map(fn ($pdf) => ['id' => $pdf['id'], 'version' => 1], [$one, $two]);
        $this->postJson(self::BANK.'/batch', ['action' => 'publish', 'items' => $items, 'publication_confirmed' => true])
            ->assertOk()->assertJsonPath('data.counts.failed', 2);
        $this->postJson(self::BANK.'/batch', ['action' => 'verify', 'items' => $items, 'distribution_confirmed' => true])
            ->assertOk()->assertJsonPath('data.counts.succeeded', 2);
        foreach ([$one, $two] as $pdf) {
            $this->get('/api/v1/public/concours-pdfs/'.$pdf['id'].'/view')->assertNotFound();
        }
        $items = array_map(fn ($item) => ['id' => $item['id'], 'version' => 2], $items);
        $this->postJson(self::BANK.'/batch', ['action' => 'publish', 'items' => $items, 'publication_confirmed' => true])
            ->assertOk()->assertJsonPath('data.counts.succeeded', 2);
        $this->getJson('/api/v1/public/concours/bank-test')->assertJsonCount(2, 'data.resources');
    }

    public function test_review_rechecks_file_integrity_parent_publication_and_active_concours(): void
    {
        $exam = $this->create();
        $correction = $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id']]);
        $this->postJson(self::BANK.'/'.$correction['id'].'/verify-publish', ['version' => 1, 'distribution_confirmed' => true, 'publication_confirmed' => true])
            ->assertUnprocessable()->assertJsonValidationErrors('corrects_exam_pdf_id');
        $verified = $this->action($exam, 'verify');
        $path = ExamPdf::findOrFail($exam['id'])->file_path;
        Storage::disk('exam_pdfs')->put($path, "%PDF-1.7\nChanged\n%%EOF\n");
        $this->postJson(self::BANK.'/'.$exam['id'].'/publish', ['version' => $verified['version'], 'publication_confirmed' => true])
            ->assertUnprocessable()->assertJsonValidationErrors('file');
        $this->concours->update(['is_active' => false]);
        $this->postJson(self::BANK.'/'.$correction['id'].'/verify', ['version' => 1, 'distribution_confirmed' => true])->assertUnprocessable();
    }

    public function test_deletion_retains_shared_physical_files_and_blocks_public_or_referenced_records(): void
    {
        $draft = $this->create(['questions_count' => 12, 'source_url' => 'https://official.example.test', 'attribution' => 'Historical attribution']);
        $path = ExamPdf::findOrFail($draft['id'])->file_path;
        $other = ExamPdf::create(['title' => 'Another file reference', 'file_path' => $path, 'is_active' => false]);
        $this->deleteJson(self::BANK.'/'.$draft['id'], ['version' => 99, 'confirmed' => true])->assertConflict();
        $this->deleteJson(self::BANK.'/'.$draft['id'], ['version' => 1])->assertUnprocessable();
        $this->deleteJson(self::BANK.'/'.$draft['id'], ['version' => 1, 'confirmed' => true])->assertOk();
        $this->assertDatabaseMissing('exam_pdfs', ['id' => $draft['id']]);
        $this->assertNotNull($other->fresh());
        Storage::disk('exam_pdfs')->assertExists($path);
        $shared = $this->create(['document_type' => 'summary']);
        $this->concours->linkedResources()->attach($shared['id']);
        $this->concours->update(['is_active' => false]);
        $this->deleteJson(self::BANK.'/'.$shared['id'], ['version' => 1, 'confirmed' => true])->assertConflict();
        $this->concours->update(['is_active' => true]);
        $exam = $this->create();
        $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id']]);
        $this->deleteJson(self::BANK.'/'.$exam['id'], ['version' => 1, 'confirmed' => true])->assertConflict();
        $published = $this->action($this->create(), 'verify-publish');
        $this->deleteJson(self::BANK.'/'.$published['id'], ['version' => $published['version'], 'confirmed' => true])->assertConflict();
        $notice = ConcoursAnnouncement::create(['slug' => 'retained-notice', 'concours_id' => $this->concours->id, 'title_fr' => 'Notice', 'official_pdf_id' => $shared['id']]);
        $notice->delete();
        $this->concours->linkedResources()->detach($shared['id']);
        $this->deleteJson(self::BANK.'/'.$shared['id'], ['version' => 1, 'confirmed' => true])->assertConflict();
    }

    public function test_individual_uploads_keep_titles_and_successes_when_another_file_fails(): void
    {
        $one = $this->create(['title' => 'Titre du premier PDF']);
        $this->postJson('/api/v1/exam-pdfs', ['title' => 'Invalid', 'file' => UploadedFile::fake()->create('too-large.pdf', 20481, 'application/pdf')])
            ->assertUnprocessable()->assertJsonValidationErrors('file');
        $this->postJson('/api/v1/exam-pdfs', ['title' => '', 'file' => UploadedFile::fake()->createWithContent('bad.pdf', 'Not a PDF')])
            ->assertUnprocessable()->assertJsonValidationErrors(['title', 'file']);
        $two = $this->create(['title' => 'عنوان الوثيقة الثانية']);
        $this->assertSame('Titre du premier PDF', ExamPdf::findOrFail($one['id'])->title);
        $this->assertSame('عنوان الوثيقة الثانية', ExamPdf::findOrFail($two['id'])->title);
        $this->assertSame(2, ExamPdf::count());
        $this->assertCount(2, Storage::disk('exam_pdfs')->allFiles());
        $this->assertFalse($one['published']);
        $this->assertFalse($two['published']);
    }

    public function test_new_endpoints_are_admin_only_and_reject_unbounded_or_duplicate_batches(): void
    {
        $pdf = $this->create();
        foreach (['user', 'manager'] as $role) {
            $user = User::create(['name' => $role, 'username' => $role, 'email' => $role.'@example.test', 'password' => 'TestOnly123!', 'role' => $role]);
            $this->login($user);
            $this->postJson(self::BANK.'/batch', [])->assertForbidden();
            foreach (['verify', 'publish', 'verify-publish', 'unpublish'] as $action) {
                $this->postJson(self::BANK.'/'.$pdf['id'].'/'.$action, ['version' => 1])->assertForbidden();
            }
            $this->deleteJson(self::BANK.'/'.$pdf['id'], ['version' => 1, 'confirmed' => true])->assertForbidden();
        }
        $this->withHeader('Authorization', '');
        $this->postJson(self::BANK.'/batch', [])->assertUnauthorized();
        $this->postJson(self::BANK.'/'.$pdf['id'].'/verify', [])->assertUnauthorized();
        $this->deleteJson(self::BANK.'/'.$pdf['id'], [])->assertUnauthorized();
        $this->login($this->admin);
        foreach ([[], array_fill(0, 101, ['id' => $pdf['id'], 'version' => 1]), [['id' => $pdf['id'], 'version' => 1], ['id' => $pdf['id'], 'version' => 1]]] as $items) {
            $this->postJson(self::BANK.'/batch', ['action' => 'verify', 'items' => $items, 'distribution_confirmed' => true])->assertUnprocessable();
        }
        $this->postJson(self::BANK.'/batch', ['action' => 'delete', 'items' => [['id' => $pdf['id'], 'version' => 1]]])->assertUnprocessable();
        $this->postJson(self::BANK.'/batch', ['action' => [], 'items' => [['id' => $pdf['id'], 'version' => 1]]])->assertUnprocessable();
        foreach (['invalid', str_repeat('9', 100), '999999'] as $id) {
            $this->postJson(self::BANK.'/'.$id.'/verify', ['version' => 1, 'distribution_confirmed' => true])->assertNotFound();
            $this->deleteJson(self::BANK.'/'.$id, ['version' => 1, 'confirmed' => true])->assertNotFound();
        }
    }

    public function test_hidden_metadata_filters_and_page_order_are_preserved(): void
    {
        $draft = $this->create(['questions_count' => 12, 'source_url' => 'https://official.example.test', 'attribution' => 'Keep me']);
        $this->putJson('/api/v1/exam-pdfs/'.$draft['id'], ['title' => 'Edited title', 'version' => 1])->assertOk();
        $this->assertDatabaseHas('exam_pdfs', ['id' => $draft['id'], 'questions_count' => 12, 'source_url' => 'https://official.example.test', 'attribution' => 'Keep me']);
        $verified = $this->action($this->create(), 'verify');
        $published = $this->action($this->create(), 'verify-publish');
        foreach (['draft' => $draft, 'verified' => $verified, 'published' => $published] as $status => $record) {
            $this->getJson(self::BANK.'?status='.$status)->assertOk()->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.id', $record['id']);
        }
        $this->getJson(self::BANK.'?per_page=2&page=1')->assertJsonPath('data.items.0.id', $draft['id'])->assertJsonPath('data.items.1.id', $verified['id']);
        $this->getJson(self::BANK.'?per_page=2&page=2')->assertJsonPath('data.items.0.id', $published['id']);
    }

    public function test_wizard_shared_pdfs_use_bank_review_and_official_notices_stay_protected(): void
    {
        $pdf = $this->create(['document_type' => 'summary', 'publish' => false]);
        $linked = Concours::create(['slug' => 'shared-bank-test', 'name_fr' => 'Partagé', 'name_ar' => 'مشترك',
            'category_id' => $this->concours->category_id, 'type' => 'recruitment', 'is_active' => true]);
        $this->postJson('/api/v1/admin/concours-wizard/'.$linked->id.'/pdfs', ['ids' => [$pdf['id']]])->assertOk();
        $this->getJson('/api/v1/public/concours/shared-bank-test')->assertJsonCount(0, 'data.resources');
        $this->deleteJson(self::BANK.'/'.$pdf['id'], ['version' => 1, 'confirmed' => true])->assertConflict();
        $this->postJson(self::BANK.'/batch', ['action' => 'verify-publish', 'items' => [['id' => $pdf['id'], 'version' => 1]],
            'distribution_confirmed' => true, 'publication_confirmed' => true])->assertOk()->assertJsonPath('data.counts.succeeded', 1);
        $this->getJson('/api/v1/public/concours/shared-bank-test')->assertJsonCount(1, 'data.resources');
        $notice = ConcoursAnnouncement::create(['slug' => 'official-bank-test', 'concours_id' => $this->concours->id, 'title_fr' => 'Avis']);
        $official = ExamPdf::create(['title' => 'Avis officiel', 'concours_id' => $this->concours->id, 'announcement_id' => $notice->id,
            'document_type' => 'official_announcement', 'file_path' => ExamPdf::findOrFail($pdf['id'])->file_path]);
        $this->postJson(self::BANK.'/'.$official->id.'/verify', ['version' => 1, 'distribution_confirmed' => true])->assertUnprocessable();
        $this->deleteJson(self::BANK.'/'.$official->id, ['version' => 1, 'confirmed' => true])->assertConflict();
        $this->getJson(self::BANK)->assertJsonPath('data.meta.total', 1);
    }
}
