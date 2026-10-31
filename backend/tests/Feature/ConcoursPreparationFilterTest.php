<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\ConcoursPreparationOption;
use App\Models\ExamPdf;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Tests\ConcoursTestCase;

class ConcoursPreparationFilterTest extends ConcoursTestCase
{
    private Concours $concours;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $category = ConcoursCategory::create(['slug' => 'education', 'name_fr' => 'Éducation', 'name_ar' => 'تعليم', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'institution', 'name_fr' => 'Institution', 'name_ar' => 'مؤسسة', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'education-preparation', 'name_fr' => 'Enseignement', 'name_ar' => 'التعليم', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true, 'session_year' => 2026]);
        $this->admin = User::create(['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
    }

    private function option(string $name, array $extra = []): ConcoursPreparationOption
    {
        return $this->concours->preparationOptions()->create($extra + ['name_fr' => $name, 'is_active' => true]);
    }

    private function pdf(array $extra = []): ExamPdf
    {
        $path = 'test-'.bin2hex(random_bytes(8)).'.pdf';
        Storage::disk('exam_pdfs')->put($path, "%PDF-1.7\nIsolated fixture\n%%EOF");

        return ExamPdf::create($extra + ['title' => 'Mathématiques', 'file_path' => $path, 'concours_id' => $this->concours->id, 'year' => 2023,
            'document_type' => 'previous_exam', 'is_active' => true, 'approved_at' => now(), 'approved_by' => $this->admin->id,
            'distribution_permission' => 'admin_confirmed', 'distribution_confirmed_at' => now()])->refresh();
    }

    private function optionUrl(?int $id = null, ?int $course = null): string
    {
        return '/api/v1/admin/concours-directory/concours/'.($course ?? $this->concours->id).'/preparation-options'.($id ? '/'.$id : '');
    }

    private function assign(ExamPdf $pdf, array $ids)
    {
        return $this->putJson('/api/v1/admin/exam-pdfs/'.$pdf->id.'/preparation-options', ['preparation_option_ids' => $ids, 'version' => $pdf->version]);
    }

    public function test_options_are_configurable_translated_scoped_and_have_only_one_optional_parent_level(): void
    {
        $payload = ['name_fr' => 'Secondaire', 'name_en' => 'Secondary', 'name_ar' => 'ثانوي', 'is_active' => true, 'display_order' => 0, 'parent_id' => null];
        $root = $this->postJson($this->optionUrl(), $payload)->assertCreated()->json('data.0.id');
        $child = $this->postJson($this->optionUrl(), ['name_fr' => 'Collège', 'parent_id' => $root] + $payload)->assertCreated()->json('data.1.id');
        $this->postJson($this->optionUrl(), ['parent_id' => $child] + $payload)->assertUnprocessable()->assertJsonValidationErrors('parent_id');
        $this->putJson($this->optionUrl($root), ['parent_id' => $root] + $payload)->assertUnprocessable();
        $this->putJson($this->optionUrl($root), ['parent_id' => $child] + $payload)->assertUnprocessable();
        $other = $this->concours->replicate();
        $other->slug = 'another';
        $other->save();
        $foreign = $other->preparationOptions()->create(['name_fr' => 'Other']);
        $this->putJson($this->optionUrl($child), ['parent_id' => $foreign->id] + $payload)->assertUnprocessable();
        $this->putJson($this->optionUrl($foreign->id), $payload)->assertNotFound();
        $this->putJson($this->optionUrl($child), ['name_fr' => 'Renommé', 'parent_id' => $root] + $payload)->assertOk();
        $this->getJson('/api/v1/admin/concours-directory/concours')->assertJsonCount(2, 'data.items.0.preparation_options');
        $this->withHeader('Authorization', '');
        $this->getJson('/api/v1/public/concours/education-preparation')->assertOk()->assertJsonCount(2, 'data.preparation_options')->assertJsonPath('data.preparation_options.0.name_en', 'Secondary');
        $this->assertSame(1, ConcoursCategory::count());
    }

    public function test_multiple_assignments_preserve_approval_identity_bytes_subject_metadata_and_correction_links(): void
    {
        $college = $this->option('Collège');
        $lycee = $this->option('Lycée');
        $exam = $this->pdf(['specialty' => 'Legacy grade text', 'download_allowed' => false]);
        $correction = $this->pdf(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam->id]);
        $unclassified = $this->pdf(['specialty' => 'Collège']);
        $before = $exam->toArray();
        $beforeCorrection = $correction->toArray();
        $files = Storage::disk('exam_pdfs')->allFiles();
        $bytes = Storage::disk('exam_pdfs')->get($exam->file_path);
        $this->assign($exam, [$college->id, $lycee->id])->assertOk()->assertJsonPath('data.published', true)->assertJsonCount(2, 'data.preparation_option_ids');
        $this->assign($correction, [$lycee->id])->assertOk();
        foreach ([[$exam, $before], [$correction, $beforeCorrection]] as [$pdf, $old]) {
            $this->assertSame(Arr::except($old, ['version', 'updated_at']), Arr::except($pdf->fresh()->toArray(), ['version', 'updated_at']));
        }
        $this->assertSame($files, Storage::disk('exam_pdfs')->allFiles());
        $this->assertSame($bytes, Storage::disk('exam_pdfs')->get($exam->file_path));
        $this->withHeader('Authorization', '');
        $resources = collect($this->getJson('/api/v1/public/concours/education-preparation')->assertOk()->assertJsonCount(3, 'data.resources')->json('data.resources'))->keyBy('id');
        $this->assertSame([$college->id, $lycee->id], $resources[$exam->id]['preparation_option_ids']);
        $this->assertSame([], $resources[$unclassified->id]['preparation_option_ids']);
        $this->assertSame($exam->id, $resources[$correction->id]['corrects_exam_pdf_id']);
        $this->get('/api/v1/public/concours-pdfs/'.$correction->id.'/view')->assertOk();
        $this->get('/api/v1/public/concours-pdfs/'.$exam->id.'/download')->assertForbidden();
    }

    public function test_invalid_assignments_and_stale_versions_fail_without_changing_documents(): void
    {
        $option = $this->option('Collège');
        $exam = $this->pdf();
        $other = $this->concours->replicate();
        $other->slug = 'other';
        $other->save();
        $foreign = $other->preparationOptions()->create(['name_fr' => 'Other']);
        foreach ([[$foreign->id], [99999], [$option->id, $option->id], ['bad'], ['unexpected-key' => $option->id]] as $invalid) {
            $this->assign($exam, $invalid)->assertUnprocessable();
        }
        $this->assertSame([], $exam->preparationOptions()->pluck('concours_preparation_options.id')->all());
        $this->assign($exam, [$option->id])->assertOk();
        $this->assign($exam, [])->assertConflict();
        $exam->refresh();
        $this->assign($exam, [])->assertOk()->assertJsonPath('data.preparation_option_ids', [])->assertJsonPath('data.published', true);
        $legacy = $this->pdf(['concours_id' => null, 'document_type' => null, 'approved_at' => null]);
        $this->assign($legacy, [$option->id])->assertUnprocessable();
        $this->assign($this->pdf(['document_type' => 'official_announcement']), [])->assertUnprocessable();
    }

    public function test_filtering_never_grants_access_and_deactivation_preserves_all_documents(): void
    {
        $root = $this->option('Secondaire');
        $child = $this->option('Collège', ['parent_id' => $root->id]);
        $public = $this->pdf();
        $private = $this->pdf(['approved_at' => null]);
        $this->assign($public, [$child->id])->assertOk();
        $this->assign($private, [$child->id])->assertOk()->assertJsonPath('data.published', false);
        $root->update(['is_active' => false]);
        $this->withHeader('Authorization', '');
        $this->getJson('/api/v1/public/concours/education-preparation')->assertJsonCount(0, 'data.preparation_options')->assertJsonCount(1, 'data.resources')->assertJsonPath('data.resources.0.preparation_option_ids', []);
        $this->get('/api/v1/public/concours-pdfs/'.$private->id.'/view')->assertNotFound();
        $this->get('/api/v1/public/concours-pdfs/'.$public->id.'/view')->assertOk();
        $this->assertSame(2, ExamPdf::count());
        $this->assertSame(2, DB::table('exam_pdf_preparation_option')->count());
        $this->assertNull($private->fresh()->approved_at);
    }

    public function test_assignments_are_admin_only_and_do_not_change_pagination(): void
    {
        $option = $this->option('Collège');
        $exam = $this->pdf();
        $this->pdf();
        $this->assign($exam, [$option->id])->assertOk();
        $this->getJson('/api/v1/admin/exam-pdfs?per_page=1')->assertJsonPath('data.meta.total', 2)->assertJsonPath('data.items.0.id', $exam->id);
        $this->getJson('/api/v1/admin/exam-pdfs?per_page=1&page=2')->assertJsonCount(1, 'data.items');
        $user = User::create(['name' => 'User', 'username' => 'user', 'email' => 'user@example.test', 'password' => 'TestOnly123!', 'role' => 'user']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
        $this->assign($exam->fresh(), [])->assertForbidden();
        $this->postJson($this->optionUrl(), [])->assertForbidden();
        $this->withHeader('Authorization', '');
        $this->assign($exam->fresh(), [])->assertUnauthorized();
        $this->postJson($this->optionUrl(), [])->assertUnauthorized();
    }

    public function test_upload_and_explicit_metadata_updates_validate_and_retain_associations(): void
    {
        $option = $this->option('Collège');
        $data = $this->postJson('/api/v1/exam-pdfs', ['title' => 'Test upload', 'concours_id' => $this->concours->id, 'document_type' => 'summary', 'file' => UploadedFile::fake()->createWithContent('exam.pdf', "%PDF-1.7\nUpload fixture\n%%EOF"), 'preparation_option_ids' => json_encode([$option->id])])->assertCreated()->assertJsonPath('data.preparation_option_ids', [$option->id])->json('data');
        $exam = ExamPdf::findOrFail($data['id']);
        $other = $this->concours->replicate();
        $other->slug = 'other';
        $other->save();
        $this->putJson('/api/v1/exam-pdfs/'.$exam->id, ['title' => 'No move', 'version' => $exam->version, 'concours_id' => $other->id])->assertUnprocessable();
        $this->putJson('/api/v1/exam-pdfs/'.$exam->id, ['title' => 'Explicit clear', 'version' => $exam->version, 'preparation_option_ids' => '[]'])->assertOk()->assertJsonPath('data.preparation_option_ids', []);
        $this->assertSame($exam->file_path, $exam->fresh()->file_path);
    }

    public function test_session_year_and_announcement_archival_leave_options_and_assignments_unchanged(): void
    {
        $option = $this->option('Collège');
        $exam = $this->pdf();
        $correction = $this->pdf(['document_type' => 'correction', 'corrects_exam_pdf_id' => $exam->id]);
        $this->assign($exam, [$option->id])->assertOk();
        $this->assign($correction, [$option->id])->assertOk();
        $before = ExamPdf::orderBy('id')->get()->toArray();
        $options = $this->concours->preparationOptions()->get()->toArray();
        $service = app(ConcoursAnnouncementService::class);
        $notice = $service->save(['concours_id' => $this->concours->id, 'session_year' => 2026, 'official_source_url' => 'https://official.example.test/notice'], $this->admin);
        foreach (['verify', 'publish', 'archive'] as $action) {
            $notice = $service->transition($notice->id, $notice->version, $action, $this->admin);
        }
        $this->concours->update(['session_year' => 2027]);
        $this->getJson('/api/v1/public/concours/education-preparation')->assertJsonPath('data.displayed_session_year', 2027)->assertJsonCount(2, 'data.resources')->assertJsonPath('data.resources.0.preparation_option_ids', [$option->id]);
        $this->assertSame($before, ExamPdf::orderBy('id')->get()->toArray());
        $this->assertSame($options, $this->concours->preparationOptions()->get()->toArray());
        $this->assertSame(2, $option->pdfs()->count());
    }
}
