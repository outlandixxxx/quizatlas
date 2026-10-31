<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\ExamPdf;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use App\Models\User;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Tests\ConcoursTestCase;

class ConcoursQcmTest extends ConcoursTestCase
{
    private Concours $concours;

    private Subject $subject;

    private User $admin;

    protected function setUp(): void
    {
        parent::setUp();
        $category = ConcoursCategory::create(['slug' => 'education', 'name_fr' => 'Education', 'name_ar' => 'تعليم', 'is_active' => true]);
        $institution = ConcoursInstitution::create(['slug' => 'institution', 'name_fr' => 'Institution', 'name_ar' => 'مؤسسة', 'is_active' => true]);
        $this->concours = Concours::create(['slug' => 'permanent', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'category_id' => $category->id, 'institution_id' => $institution->id, 'type' => 'recruitment', 'is_active' => true, 'session_year' => 2026]);
        $major = Major::create(['name' => 'Major', 'slug' => 'major', 'is_active' => true]);
        $this->subject = Subject::create(['major_id' => $major->id, 'name' => 'Mathematics', 'is_active' => true]);
        $this->admin = User::create(['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $this->login($this->admin);
    }

    private function login(User $user): void
    {
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function quiz(array $extra = [], bool $questions = true): Quiz
    {
        $quiz = Quiz::create($extra + ['subject_id' => $this->subject->id, 'title' => 'Existing quiz', 'duration' => 20, 'passing_score' => 50, 'total_marks' => 1, 'is_active' => true]);
        if ($questions) {
            Question::create(['quiz_id' => $quiz->id, 'question' => 'Fixture only', 'type' => 'single_choice', 'marks' => 1, 'order' => 1]);
        }

        return $quiz;
    }

    private function base(): string
    {
        return '/api/v1/admin/concours-directory/concours/'.$this->concours->id;
    }

    private function link(string $kind, int $id, array $options = [], int $version = 0)
    {
        return $this->putJson($this->base().'/qcm-links/'.$kind.'/'.$id, ['version' => $version, 'preparation_option_ids' => $options]);
    }

    private function option(string $name)
    {
        return $this->concours->preparationOptions()->create(['name_fr' => $name, 'is_active' => true]);
    }

    private function publicPage(string $query = '')
    {
        return $this->getJson('/api/v1/public/concours/permanent/qcm'.$query);
    }

    public function test_direct_and_subject_links_are_deduplicated_with_stable_bounded_pagination(): void
    {
        $quizzes = collect(range(1, 14))->map(fn ($i) => $this->quiz(['title' => 'Quiz '.$i]));
        $this->link('subjects', $this->subject->id)->assertOk();
        $this->link('quizzes', $quizzes[0]->id)->assertOk();
        $this->withHeader('Authorization', '');
        $first = $this->publicPage()->assertOk()->assertHeader('X-Robots-Tag', 'noindex, nofollow')->assertJsonPath('data.meta.total', 14)->assertJsonCount(12, 'data.items')->json('data.items');
        $second = $this->publicPage('?page=2')->assertOk()->assertJsonCount(2, 'data.items')->json('data.items');
        $this->assertSame($quizzes->pluck('id')->all(), array_column(array_merge($first, $second), 'id'));
        foreach (['questions', 'choices', 'explanation', 'is_correct', 'owner_id'] as $field) {
            $this->assertArrayNotHasKey($field, $first[0]);
        }
        $this->getJson('/api/v1/public/concours/permanent')->assertOk()->assertJsonCount(12, 'data.preparation_qcm.items');
        $this->publicPage('?per_page=25')->assertUnprocessable();
        $this->publicPage('?page=0')->assertUnprocessable();
        $this->getJson('/api/v1/quizzes/'.$quizzes[0]->id.'/questions')->assertUnauthorized();
    }

    public function test_track_scopes_union_global_associations_and_filter_before_pagination(): void
    {
        $root = $this->option('Secondaire');
        $college = $this->option('College');
        $college->update(['parent_id' => $root->id]);
        $lycee = $this->option('Lycee');
        $quizzes = collect(range(1, 14))->map(fn () => $this->quiz());
        foreach ($quizzes as $quiz) {
            $this->link('quizzes', $quiz->id, [$lycee->id])->assertOk();
        }
        $this->link('quizzes', $quizzes->last()->id, [$college->id, $lycee->id], 1)->assertOk();
        $global = $this->quiz();
        $this->link('quizzes', $global->id)->assertOk();
        $this->withHeader('Authorization', '');
        $this->publicPage('?preparation_option_id='.$root->id)->assertJsonPath('data.meta.total', 2)->assertJsonPath('data.items.0.id', $quizzes->last()->id);
        $this->publicPage('?preparation_option_id='.$lycee->id)->assertJsonPath('data.meta.total', 15);
        $this->login($this->admin);
        $this->link('subjects', $this->subject->id, [$college->id])->assertOk();
        $this->withHeader('Authorization', '');
        $this->publicPage('?preparation_option_id='.$college->id)->assertJsonPath('data.meta.total', 15);
        $root->update(['is_active' => false]);
        $this->publicPage('?preparation_option_id='.$college->id)->assertUnprocessable();
        $this->publicPage()->assertJsonPath('data.meta.total', 15);
    }

    public function test_unavailable_deleted_empty_quizzes_and_inactive_catalog_parents_are_excluded(): void
    {
        $live = $this->quiz();
        $inactive = $this->quiz(['is_active' => false]);
        $deleted = $this->quiz();
        $deleted->delete();
        $empty = $this->quiz([], false);
        $zeroDuration = $this->quiz(['duration' => 0]);
        $zeroMarks = $this->quiz(['total_marks' => 0]);
        foreach ([$inactive, $deleted, $empty, $zeroDuration, $zeroMarks] as $quiz) {
            $this->link('quizzes', $quiz->id)->assertUnprocessable();
        }
        $this->link('subjects', $this->subject->id)->assertOk();
        $this->getJson($this->base().'/qcm-candidates/quizzes')->assertJsonCount(1, 'data.items')->assertJsonPath('data.items.0.id', $live->id);
        $live->questions()->delete();
        $this->publicPage()->assertJsonCount(0, 'data.items');
        $live = $this->quiz();
        $this->subject->update(['is_active' => false]);
        $this->publicPage()->assertJsonCount(0, 'data.items');
        $this->subject->update(['is_active' => true]);
        $this->subject->major->update(['is_active' => false]);
        $this->publicPage()->assertJsonCount(0, 'data.items');
        $this->subject->major->update(['is_active' => true]);
        $this->subject->delete();
        $this->publicPage()->assertJsonCount(0, 'data.items');
    }

    public function test_admin_permissions_scope_validation_duplicates_versions_and_unlinking(): void
    {
        $quiz = $this->quiz();
        $option = $this->option('College');
        $other = $this->concours->replicate();
        $other->slug = 'other';
        $other->save();
        $foreign = $other->preparationOptions()->create(['name_fr' => 'Other']);
        foreach ([[$foreign->id], [$option->id, $option->id], [9999], ['bad'], ['key' => $option->id]] as $invalid) {
            $this->link('quizzes', $quiz->id, $invalid)->assertUnprocessable();
        }
        $this->link('quizzes', $quiz->id, [$option->id])->assertOk();
        $this->link('quizzes', $quiz->id)->assertConflict();
        $this->link('quizzes', $quiz->id, [], 1)->assertOk();
        $this->deleteJson($this->base().'/qcm-links/quizzes/'.$quiz->id, ['version' => 1])->assertConflict();
        $quiz->update(['is_active' => false]);
        $this->getJson($this->base().'/qcm-links/quizzes')->assertJsonPath('data.items.0.available', false);
        $user = User::create(['name' => 'User', 'username' => 'user', 'email' => 'user@example.test', 'password' => 'TestOnly123!', 'role' => 'user']);
        $this->login($user);
        $this->link('quizzes', $quiz->id, [], 2)->assertForbidden();
        $this->getJson($this->base().'/qcm-candidates/subjects')->assertForbidden();
        $this->withHeader('Authorization', '');
        $this->link('quizzes', $quiz->id)->assertUnauthorized();
        $this->login($this->admin);
        $this->deleteJson($this->base().'/qcm-links/quizzes/'.$quiz->id.'?version=2')->assertOk();
        $this->assertSame(1, Quiz::count());
        $this->assertSame(0, DB::table('concours_quiz_links')->count());
    }

    public function test_searches_and_link_management_are_paginated_and_scoped(): void
    {
        foreach (range(1, 4) as $i) {
            $quiz = $this->quiz(['title' => 'Searchable '.$i]);
            $this->link('quizzes', $quiz->id)->assertOk();
        }
        $this->getJson($this->base().'/qcm-candidates/quizzes?q=Searchable&per_page=2&page=2')->assertJsonCount(2, 'data.items')->assertJsonPath('data.meta.total', 4);
        $this->getJson($this->base().'/qcm-links/quizzes?per_page=2&page=2')->assertJsonCount(2, 'data.items');
        $this->getJson($this->base().'/qcm-candidates/subjects?q=math')->assertJsonCount(1, 'data.items');
        $emptySubject = Subject::create(['major_id' => $this->subject->major_id, 'name' => 'Future preparation', 'is_active' => true]);
        $this->link('subjects', $emptySubject->id)->assertOk(); // An existing subject may receive available quizzes later.
        $this->getJson($this->base().'/qcm-candidates/quizzes?per_page=51')->assertUnprocessable();
        $this->getJson($this->base().'/qcm-candidates/quizzes?page=0')->assertUnprocessable();
        $this->publicPage('?preparation_option_id=9999')->assertUnprocessable();
        $this->concours->update(['is_active' => false]);
        $this->publicPage()->assertNotFound();
    }

    public function test_associations_preserve_content_pdfs_and_survive_session_rollover_and_archival(): void
    {
        $quiz = $this->quiz();
        Storage::disk('exam_pdfs')->put('existing.pdf', "%PDF-1.7\nPreserve\n%%EOF");
        ExamPdf::create(['title' => 'Historical PDF', 'file_path' => 'existing.pdf']);
        $before = [Quiz::all()->toArray(), Question::all()->toArray(), Subject::all()->toArray(), ExamPdf::all()->toArray(), Storage::disk('exam_pdfs')->get('existing.pdf')];
        $option = $this->option('College');
        $this->link('quizzes', $quiz->id, [$option->id])->assertOk();
        $this->link('subjects', $this->subject->id, [$option->id])->assertOk();
        $service = app(ConcoursAnnouncementService::class);
        $notice = $service->save(['concours_id' => $this->concours->id, 'session_year' => 2026, 'official_source_url' => 'https://official.example.test/notice'], $this->admin);
        foreach (['verify', 'publish', 'archive'] as $action) {
            $notice = $service->transition($notice->id, $notice->version, $action, $this->admin);
        }
        $this->concours->update(['session_year' => 2027]);
        $this->publicPage('?preparation_option_id='.$option->id)->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.id', $quiz->id);
        $this->getJson('/api/v1/public/concours/permanent')->assertJsonPath('data.displayed_session_year', 2027);
        $this->assertSame($before, [Quiz::all()->toArray(), Question::all()->toArray(), Subject::all()->toArray(), ExamPdf::all()->toArray(), Storage::disk('exam_pdfs')->get('existing.pdf')]);
    }
}
