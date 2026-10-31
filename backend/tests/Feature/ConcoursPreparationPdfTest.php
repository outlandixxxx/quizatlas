<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\ExamPdf;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\ConcoursTestCase;

class ConcoursPreparationPdfTest extends ConcoursTestCase
{
    private Concours $concours;

    private User $admin;

    private int $fileNumber = 0;

    protected function setUp(): void
    {
        parent::setUp();
        $category = ConcoursCategory::create(['slug' => 'test', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'test', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'permanent', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true]);
        $this->admin = User::create(['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $this->login($this->admin);
    }

    private function login(User $user): void
    {
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function file(?string $bytes = null): UploadedFile
    {
        return UploadedFile::fake()->createWithContent('../external-name.pdf', $bytes ?? "%PDF-1.7\nDocument ".(++$this->fileNumber)."\n%%EOF\n");
    }

    private function create(array $extra = []): array
    {
        return $this->postJson('/api/v1/exam-pdfs', $extra + ['title' => 'Sujet réel dans un test isolé', 'concours_id' => $this->concours->id,
            'document_type' => 'previous_exam', 'year' => 2024, 'is_active' => true, 'publish' => true,
            'distribution_confirmed' => true, 'file' => $this->file()])->assertCreated()->json('data');
    }

    private function edit(array $pdf, array $extra = [])
    {
        return $this->putJson('/api/v1/exam-pdfs/'.$pdf['id'], $extra + ['title' => $pdf['title'], 'version' => $pdf['version']]);
    }

    private function publicUrl(int $id, string $action = 'view'): string
    {
        return '/api/v1/public/concours-pdfs/'.$id.'/'.$action;
    }

    public function test_publication_requires_explicit_classification_and_distribution_approval(): void
    {
        $legacy = $this->create(['concours_id' => null, 'document_type' => null, 'publish' => false]);
        $private = $this->create(['publish' => false]);
        $public = $this->create();
        $before = ExamPdf::find($legacy['id'])->file_path;
        $this->withHeader('Authorization', '');
        foreach ([$legacy, $private] as $pdf) {
            $this->get($this->publicUrl($pdf['id']))->assertNotFound();
            $this->get($this->publicUrl($pdf['id'], 'download'))->assertNotFound();
        }
        $this->get($this->publicUrl($public['id']))->assertOk()->assertHeader('Content-Type', 'application/pdf')->assertHeader('X-Content-Type-Options', 'nosniff')->assertHeader('X-Robots-Tag', 'noindex, nofollow, noarchive');
        $this->get($this->publicUrl($public['id'], 'download'))->assertOk()->assertDownload();
        $data = $this->getJson('/api/v1/public/concours/permanent')->assertOk()->assertJsonCount(1, 'data.resources')->json('data.resources.0');
        $this->assertArrayNotHasKey('file_path', $data);
        $this->assertArrayNotHasKey('sha256', $data);
        $this->assertSame($before, ExamPdf::find($legacy['id'])->file_path);
        $this->login($this->admin);
        $this->postJson('/api/v1/exam-pdfs', ['title' => 'No permission', 'concours_id' => $this->concours->id, 'document_type' => 'summary', 'is_active' => true, 'publish' => true, 'file' => $this->file()])->assertUnprocessable();
        $this->assertSame(3, ExamPdf::count());
    }

    public function test_existing_private_records_can_be_reviewed_and_published_without_copying_files(): void
    {
        $legacy = $this->create(['concours_id' => null, 'document_type' => null, 'publish' => false]);
        $original = ExamPdf::find($legacy['id'])->only(['id', 'file_path', 'sha256', 'file_size_bytes']);
        $files = Storage::disk('exam_pdfs')->allFiles();
        $reviewed = $this->edit($legacy, ['concours_id' => $this->concours->id, 'document_type' => 'previous_exam', 'publish' => true, 'distribution_confirmed' => true])->assertOk()->json('data');
        $this->assertSame($original, ExamPdf::find($legacy['id'])->only(array_keys($original)));
        $this->assertSame($files, Storage::disk('exam_pdfs')->allFiles());
        $this->assertSame(1, ExamPdf::count());
        $this->edit($legacy, ['title' => 'Stale'])->assertConflict();
        $this->get($this->publicUrl($legacy['id']))->assertOk();
        $draft = $this->edit($reviewed, ['specialty' => 'Grade A'])->assertOk()->json('data');
        $this->assertFalse($draft['published']);
        $this->get($this->publicUrl($legacy['id']))->assertNotFound();
        $this->get('/api/v1/admin/exam-pdfs/'.$legacy['id'].'/view')->assertOk();
    }

    public function test_one_exam_can_have_multiple_public_corrections_and_no_correction_is_required(): void
    {
        $exam = $this->create();
        $one = $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id'], 'title' => 'Corrigé A']);
        $two = $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id'], 'title' => 'Corrigé B']);
        $this->assertSame(2, ExamPdf::find($exam['id'])->corrections()->count());
        $this->getJson('/api/v1/public/concours/permanent')->assertJsonCount(3, 'data.resources');
        foreach ([$exam, $one, $two] as $pdf) {
            $this->get($this->publicUrl($pdf['id']))->assertOk();
        }
        $this->edit($exam)->assertOk(); // withdraw parent approval, retain all files/records
        foreach ([$one, $two] as $pdf) {
            $this->get($this->publicUrl($pdf['id']))->assertNotFound();
        }
        $this->assertSame(3, ExamPdf::count());
        $this->assertCount(3, Storage::disk('exam_pdfs')->allFiles());
    }

    public function test_invalid_correction_links_and_parent_reclassification_are_rejected(): void
    {
        $exam = $this->create();
        $correction = $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id']]);
        foreach ([['year' => 2023], ['document_type' => 'summary'], ['concours_id' => null]] as $invalid) {
            $this->edit($exam, $invalid)->assertUnprocessable();
        }
        foreach ([['corrects_exam_pdf_id' => $correction['id']], ['year' => 2025], ['document_type' => 'summary', 'corrects_exam_pdf_id' => $exam['id']]] as $invalid) {
            $this->edit($correction, $invalid)->assertUnprocessable();
        }
        $other = Concours::create(['slug' => 'other', 'name_fr' => 'Other', 'name_ar' => 'أخرى', 'category_id' => $this->concours->category_id, 'type' => 'recruitment', 'is_active' => true]);
        $this->edit($correction, ['concours_id' => $other->id])->assertUnprocessable();
        $this->postJson('/api/v1/exam-pdfs', ['title' => 'Unlinked correction', 'concours_id' => $this->concours->id, 'document_type' => 'correction', 'year' => 2024, 'is_active' => true, 'publish' => true, 'distribution_confirmed' => true, 'file' => $this->file()])->assertUnprocessable();
        $this->assertSame(2, ExamPdf::count());
    }

    public function test_duplicate_upload_is_rejected_even_for_legacy_files_without_a_checksum(): void
    {
        $bytes = "%PDF-1.7\nOriginal\n%%EOF\n";
        $pdf = $this->create(['file' => $this->file($bytes), 'publish' => false]);
        ExamPdf::whereKey($pdf['id'])->update(['sha256' => null]);
        $this->postJson('/api/v1/exam-pdfs', ['title' => 'Duplicate', 'file' => $this->file($bytes)])->assertUnprocessable()->assertJsonValidationErrors('file');
        $this->assertSame(1, ExamPdf::count());
        $this->assertCount(1, Storage::disk('exam_pdfs')->allFiles());
        $this->edit($pdf, ['file' => $this->file()])->assertUnprocessable(); // existing file identity is immutable
        $this->assertCount(1, Storage::disk('exam_pdfs')->allFiles());
    }

    public function test_download_permissions_invalid_ids_and_unsafe_paths_are_enforced(): void
    {
        $pdf = $this->create(['download_allowed' => false]);
        $this->withHeader('Authorization', '');
        $this->get($this->publicUrl($pdf['id']))->assertOk();
        $this->get($this->publicUrl($pdf['id'], 'download'))->assertForbidden();
        $this->get($this->publicUrl(999999))->assertNotFound();
        $this->get('/api/v1/public/concours-pdfs/invalid/view')->assertNotFound();
        $this->get('/api/v1/public/concours-pdfs/'.str_repeat('9', 100).'/view')->assertNotFound();
        foreach (['../secret.pdf', '/etc/passwd', 'C:\\secret.pdf', "bad\0path.pdf", 'nested/../../secret.pdf'] as $path) {
            ExamPdf::whereKey($pdf['id'])->update(['file_path' => $path]);
            $this->get($this->publicUrl($pdf['id']))->assertNotFound();
        }
        $outside = tempnam(sys_get_temp_dir(), 'concours-path-test-');
        try {
            file_put_contents($outside, "%PDF-1.7\nOutside private root\n%%EOF\n");
            symlink($outside, Storage::disk('exam_pdfs')->path('escape.pdf'));
            ExamPdf::whereKey($pdf['id'])->update(['file_path' => 'escape.pdf']);
            $this->get($this->publicUrl($pdf['id']))->assertNotFound();
        } finally {
            unlink($outside);
        }
    }

    public function test_admin_endpoints_are_protected_and_legacy_user_access_remains_available(): void
    {
        $legacy = $this->create(['concours_id' => null, 'document_type' => null, 'publish' => false]);
        $user = User::create(['name' => 'User', 'username' => 'user', 'email' => 'user@example.test', 'password' => 'TestOnly123!', 'role' => 'user']);
        $this->login($user);
        $this->getJson('/api/v1/exam-pdfs')->assertOk()->assertJsonPath('data.items.0.id', $legacy['id']);
        $this->get('/api/v1/exam-pdfs/'.$legacy['id'].'/view')->assertOk();
        $this->getJson('/api/v1/admin/exam-pdfs')->assertForbidden();
        $this->get('/api/v1/admin/exam-pdfs/'.$legacy['id'].'/view')->assertForbidden();
        $this->edit($legacy)->assertForbidden();
        $this->withHeader('Authorization', '');
        $this->getJson('/api/v1/admin/exam-pdfs')->assertUnauthorized();
        $this->get('/api/v1/exam-pdfs/'.$legacy['id'].'/view')->assertUnauthorized();
    }

    public function test_admin_pagination_is_stable_and_includes_private_inactive_records_for_review(): void
    {
        $records = [];
        for ($i = 0; $i < 4; $i++) {
            $records[] = $this->create(['publish' => false, 'is_active' => $i !== 3]);
        }
        foreach ([1, 2] as $page) {
            $items = $this->getJson('/api/v1/admin/exam-pdfs?per_page=2&page='.$page)->assertOk()->assertJsonPath('data.meta.total', 4)->json('data.items');
            $this->assertSame(array_column(array_slice($records, ($page - 1) * 2, 2), 'id'), array_column($items, 'id'));
        }
        $this->getJson('/api/v1/admin/exam-pdfs?page=0')->assertUnprocessable();
        $this->getJson('/api/v1/admin/exam-pdfs?document_type=summary')->assertJsonPath('data.meta.total', 0);
    }

    public function test_session_rollover_and_archival_do_not_change_preparation_records_or_files(): void
    {
        $exam = $this->create();
        $this->create(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam['id']]);
        $before = ExamPdf::orderBy('id')->get()->toArray();
        $files = Storage::disk('exam_pdfs')->allFiles();
        $service = app(ConcoursAnnouncementService::class);
        $notice = $service->save(['concours_id' => $this->concours->id, 'official_source_url' => 'https://official.example.test/notice', 'session_year' => 2026], $this->admin);
        $notice = $service->transition($notice->id, $notice->version, 'verify', $this->admin);
        $notice = $service->transition($notice->id, $notice->version, 'publish', $this->admin);
        $service->transition($notice->id, $notice->version, 'archive', $this->admin);
        $this->concours->update(['session_year' => 2027]);
        $this->getJson('/api/v1/public/concours/permanent')->assertOk()->assertJsonCount(2, 'data.resources')->assertJsonPath('data.displayed_session_year', 2027);
        $this->assertSame($before, ExamPdf::orderBy('id')->get()->toArray());
        $this->assertSame($files, Storage::disk('exam_pdfs')->allFiles());
        $this->get($this->publicUrl($exam['id']))->assertOk();
    }
}
