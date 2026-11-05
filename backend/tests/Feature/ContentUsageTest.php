<?php

namespace Tests\Feature;

use App\Models\{Choice, ContentUsageItem, ContentUsageOperation, Fact, Major, Question, Quiz, Subject, User, VideoBatch, VideoSet, VideoSetQuestion};
use App\Services\ContentUsage\{Fingerprint, Registry};
use App\Services\{RevisionNotesJsonExporter, VideoSetJsonExporter};
use Illuminate\Support\Facades\{Artisan, DB, Storage};
use Illuminate\Support\Str;
use Tests\TestCase;

class ContentUsageTest extends TestCase
{
    private string $temporary;
    private User $admin;
    private Subject $subject;
    private Quiz $quiz;
    private Question $question;
    private Fact $fact;

    public static function migrations(): array
    {
        return ['0001_01_01_000000_create_users_table.php', '2026_07_27_193254_add_profile_fields_to_users_table.php',
            '2026_07_02_205142_create_majors_table.php', '2026_07_02_211641_create_subjects_table.php',
            '2026_07_02_225022_create_quizzes_table.php', '2026_07_30_155427_add_nullable_difficulty_to_quizzes.php',
            '2026_08_10_155759_add_owner_id_to_quizzes_table.php', '2026_07_05_232730_create_questions_table.php',
            '2026_07_06_211337_create_choices_table.php', '2026_10_16_100000_create_facts_table.php',
            '2026_10_10_160137_create_video_batches_table.php', '2026_10_10_160158_create_video_sets_table.php',
            '2026_10_10_160214_create_video_set_questions_table.php', '2026_10_16_100100_create_social_posts_table.php',
            '2026_10_16_100200_create_social_question_exclusions_table.php', '2026_11_04_100000_create_content_usage_registry.php'];
    }
    public function createApplication()
    {
        $_ENV['APP_CONFIG_CACHE'] = $_SERVER['APP_CONFIG_CACHE'] = '/tmp/content-usage-no-config.php';
        $_ENV['APP_ROUTES_CACHE'] = $_SERVER['APP_ROUTES_CACHE'] = '/tmp/content-usage-no-routes.php';
        $app = parent::createApplication();
        $app['config']->set(['app.env' => 'testing', 'app.key' => 'base64:'.base64_encode(str_repeat('x', 32)),
            'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null,
            'cache.default' => 'array', 'jwt.secret' => str_repeat('usage-test-', 8), 'jwt.blacklist_enabled' => false]);
        return $app;
    }
    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        foreach (self::migrations() as $file) Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
        $this->temporary = sys_get_temp_dir().'/maroquiz-usage-'.Str::uuid();
        config(['filesystems.disks.local' => ['driver' => 'local', 'root' => $this->temporary, 'throw' => true]]);
        Storage::forgetDisk('local');
        $this->admin = User::create(['name' => 'Usage tests', 'email' => 'usage@example.test', 'password' => 'Test-password-123!', 'role' => 'admin']);
        $major = Major::create(['name' => 'Science', 'slug' => 'science', 'is_active' => true]);
        $this->subject = Subject::create(['major_id' => $major->id, 'name' => 'Physics', 'slug' => 'physics', 'is_active' => true]);
        $this->quiz = Quiz::create(['subject_id' => $this->subject->id, 'title' => 'Quiz', 'duration' => 10, 'passing_score' => 50, 'total_marks' => 1, 'difficulty' => 'Beginner']);
        $this->question = $this->addQuestion('Which force attracts masses?');
        $this->fact = Fact::create(['subject_id' => $this->subject->id, 'text_fr' => 'La lumière se propage.', 'text_en' => 'Light travels.', 'text_ar' => 'ينتشر الضوء.', 'is_verified' => true]);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
    }
    protected function tearDown(): void
    {
        if (isset($this->temporary)) (new \Illuminate\Filesystem\Filesystem)->deleteDirectory($this->temporary);
        parent::tearDown();
    }
    private function addQuestion(string $text): Question
    {
        $q = Question::create(['quiz_id' => $this->quiz->id, 'question' => $text, 'explanation' => 'A stored explanation.', 'order' => Question::count() + 1]);
        foreach (['Gravity', 'Friction', 'Tension', 'Drag'] as $i => $text) Choice::create(['question_id' => $q->id, 'choice_text' => $text, 'is_correct' => $i === 0, 'order' => $i + 1]);
        return $q->refresh();
    }
    private function reserve(array $models, string $kind = 'quiz-video', ?string $id = null, array $parents = []): ContentUsageOperation
    {
        return app(Registry::class)->reserve($this->admin->id, $id ?? (string) Str::uuid(), $kind, hash('sha256', 'test payload'), array_map(fn ($m) => Fingerprint::source($m), $models), $parents);
    }
    private function event(ContentUsageOperation $op, string $event, array $output = []): array
    {
        return app(Registry::class)->credentials($op) + ['event' => $event, 'output' => $output];
    }
    private function receipt(string $kind = 'video', array $ids = []): array
    {
        return [['kind' => $kind, 'name' => $kind === 'video' ? 'video.mp4' : 'revision-manifest.json', 'sha256' => str_repeat('a', 64), 'bytes' => 32] + ($ids ? ['source_ids' => $ids] : [])];
    }
    private function factDocument(): array
    {
        return $this->postJson('/api/v1/facts-video/export', ['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id,
            'language' => 'fr', 'profile' => 'facts-short', 'count' => 1])->assertOk()->json('data');
    }
    private function ticket(array $document, string $purpose = 'render', array $parents = []): array
    {
        $content = json_encode($document);
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => $purpose,
            'operation_id' => (string) Str::uuid(), 'parent_ids' => $parents])->assertOk()->json('data.ticket');
        return ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => $purpose];
    }
    private function export(array $document, string $kind = 'revision-json', ?string $id = null)
    {
        return $this->postJson('/api/v1/content-usage/exports', ['operation_id' => $id ?? (string) Str::uuid(), 'kind' => $kind, 'content' => json_encode($document)]);
    }
    private function revisionDocument(): array
    {
        $source = app(RevisionNotesJsonExporter::class)->build($this->quiz);
        return ['type' => 'revision-batch', 'format_version' => 'revision-batch-v1', 'output_mode' => 'both', 'language' => 'fr',
            'major' => $source['major'], 'subject' => $source['subject'], 'quizzes' => [['source' => $source, 'version' => 1,
                'paragraphs' => array_map(fn ($note) => ['id' => 'p-'.$note['question_id'], 'text' => $note['explanation'], 'sourceQuestionIds' => [$note['question_id']]], $source['notes']), 'issues' => []]]];
    }

    public function test_reservation_completion_and_lost_ack_are_idempotent(): void
    {
        $id = (string) Str::uuid(); $op = $this->reserve([$this->question], id: $id);
        $this->reserve([$this->question], id: $id);
        $this->assertSame(1, ContentUsageOperation::count()); $this->assertSame(1, ContentUsageItem::count());
        $this->getJson('/api/v1/content-usage')->assertOk()->assertJsonPath('counts.reserved', 1);
        $event = $this->event($op, 'complete', $this->receipt());
        $this->postJson('/api/v1/local-render/usage', $event)->assertOk();
        $this->postJson('/api/v1/local-render/usage', $event)->assertOk();
        $this->getJson('/api/v1/content-usage?status=used')->assertJsonPath('counts.used', 1)->assertJsonPath('meta.total', 1);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'cancel'))->assertConflict();
        $this->assertSame(2, DB::table('content_usage_claims')->count());
    }
    public function test_same_prompt_in_another_quiz_and_reseeded_id_cannot_bypass_usage(): void
    {
        $other = $this->addQuestion("  WHICH force\n attracts masses?  ");
        $otherQuiz = $this->quiz->replicate(); $otherQuiz->title = 'Another quiz'; $otherQuiz->save();
        $original = $this->question->replicate(); $original->quiz_id = $otherQuiz->id; $original->save();
        $this->reserve([$this->question]);
        foreach ([$other, $original] as $duplicate) {
            try { $this->reserve([$duplicate]); $this->fail('A duplicate reserved twice.'); }
            catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(409, $e->getStatusCode()); }
        }
        $this->assertSame(1, ContentUsageOperation::count());
        $this->assertSame(Fingerprint::source($this->question)['fingerprint'], Fingerprint::source($other)['fingerprint']);
        $this->assertNotSame(Fingerprint::normalize('a + b'), Fingerprint::normalize('a - b'));
        $this->assertNotSame(Fingerprint::normalize('é'), Fingerprint::normalize('e'));
    }
    public function test_failure_cancel_recovery_and_retry_fence_old_completion(): void
    {
        $op = $this->reserve([$this->question]); $old = $this->event($op, 'complete', $this->receipt());
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail'))->assertOk();
        $retry = $this->postJson('/api/v1/local-render/usage', $this->event($op, 'retry'))->assertOk()->json('data');
        $this->assertSame(2, $retry['attempt']);
        $this->postJson('/api/v1/local-render/usage', $old)->assertConflict();
        $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'cancel'])->assertOk();
        $this->getJson('/api/v1/content-usage')->assertJsonPath('counts.available', 1);
        $this->assertSame(1, ContentUsageItem::count());
    }
    public function test_expired_lease_is_recovered_and_late_completion_is_rejected(): void
    {
        $op = $this->reserve([$this->question]);
        $this->travel(901)->seconds();
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt()))->assertConflict();
        $this->artisan('content-usage:recover', ['--dry-run' => true])->assertSuccessful();
        $this->assertSame('reserved', $op->fresh()->status);
        $this->postJson('/api/v1/content-usage/recover')->assertOk()->assertJsonPath('data.released', 1);
        $this->reserve([$this->question]);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt()))->assertConflict();
    }
    public function test_partial_revision_outputs_stay_used_and_only_unproduced_sources_release(): void
    {
        $second = $this->addQuestion('Which force opposes motion?');
        $op = $this->reserve([$this->question, $second], 'revision-media');
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'progress', $this->receipt('revision', [$this->question->id])))->assertOk();
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'cancel'))->assertOk();
        $this->getJson('/api/v1/content-usage')->assertJsonPath('counts.used', 1)->assertJsonPath('counts.available', 1);
        $this->assertSame(2, DB::table('content_usage_claims')->count());
        $this->assertSame('used', $op->items()->where('source_id', $this->question->id)->first()->status);
    }
    public function test_revision_completion_requires_every_assigned_source(): void
    {
        $second = $this->addQuestion('Which force opposes motion?');
        $op = $this->reserve([$this->question, $second], 'revision-media');
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt('revision', [$this->question->id])))->assertUnprocessable();
        $this->assertSame(0, $op->items()->where('status', 'used')->count());
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt('revision', [$this->question->id, $second->id])))->assertOk();
        $this->assertSame('used', $op->fresh()->status);
    }
    public function test_duplicate_authorization_renews_only_a_valid_reservation(): void
    {
        $op = $this->reserve([$this->question]);
        $this->travel(600)->seconds();
        $again = $this->reserve([$this->question], id: $op->id);
        $this->assertTrue($again->expires_at->greaterThan($op->expires_at));
        $this->assertSame(1, ContentUsageItem::count());
        $this->travel(901)->seconds();
        try { $this->reserve([$this->question], id: $op->id); $this->fail('Expired reservation was renewed.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(409, $e->getStatusCode()); }
    }
    public function test_lost_retry_response_can_be_replayed_without_reviving_an_expired_lease(): void
    {
        $op = $this->reserve([$this->question]);
        $retry = $this->event($op, 'retry');
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail'))->assertOk();
        $this->postJson('/api/v1/local-render/usage', $retry)->assertOk()->assertJsonPath('data.attempt', 2);
        $this->postJson('/api/v1/local-render/usage', $retry)->assertOk()->assertJsonPath('data.attempt', 2);
        $this->assertSame(1, ContentUsageItem::count());
        $this->travel(901)->seconds();
        $this->postJson('/api/v1/local-render/usage', $retry)->assertConflict();
    }
    public function test_malformed_posts_sources_fail_without_any_allocation(): void
    {
        foreach ([['days' => ['invalid']], ['days' => [['facebook_group' => ['questions' => 'invalid']]]], ['days' => [['fact_short' => ['fact' => 'invalid']]]]] as $document) {
            $this->export($document, 'posts-json')->assertUnprocessable();
        }
        $this->export(['quiz' => ['id' => []]], 'revision-json')->assertUnprocessable();
        $this->export(['video' => ['id' => []]], 'quiz-json')->assertUnprocessable();
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode(['video' => ['id' => []]]), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        $this->assertSame(0, ContentUsageOperation::count());
    }
    public function test_estimates_and_previews_do_not_reserve_or_consume_content(): void
    {
        $document = $this->factDocument();
        $ticket = $this->ticket($document, 'estimate');
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk()->assertJsonPath('data.usage', null);
        $this->getJson('/api/v1/quizzes/'.$this->quiz->id.'/revision-json')->assertOk();
        $this->assertSame(0, ContentUsageOperation::count());
    }
    public function test_real_render_reserves_and_capability_is_bound_to_source_purpose_and_operation(): void
    {
        $doc = $this->factDocument(); $ticket = $this->ticket($doc);
        $usage = $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk()->json('data.usage');
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertForbidden();
        $this->getJson('/api/v1/content-usage?type=fact&status=reserved')->assertJsonPath('counts.reserved', 1);
        $this->postJson('/api/v1/local-render/usage', array_replace($usage + ['event' => 'complete', 'output' => $this->receipt()], ['token' => str_repeat('0', 64)]))->assertForbidden();
        $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'complete', 'output' => $this->receipt()])->assertOk();
        $this->getJson('/api/v1/content-usage?type=fact')->assertJsonPath('counts.used', 1);
        $this->getJson('/api/v1/facts-video/options')->assertJsonPath('data', []);
    }
    public function test_fact_translation_aliases_block_identical_content_with_different_ids(): void
    {
        $other = Fact::create(['subject_id' => $this->subject->id, 'text_fr' => $this->fact->text_fr, 'text_en' => 'Another translation.', 'text_ar' => '', 'is_verified' => true]);
        $this->reserve([$this->fact], 'facts-short');
        try { $this->reserve([$other], 'facts-long'); $this->fail('Identical facts were allocated twice.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(409, $e->getStatusCode()); }
        $this->getJson('/api/v1/content-usage?type=fact')->assertJsonPath('counts.total', 2)->assertJsonPath('counts.reserved', 2);
    }
    public function test_revision_export_is_retained_idempotently_and_formats_share_its_claims(): void
    {
        $doc = $this->revisionDocument(); $id = (string) Str::uuid();
        $this->export($doc['quizzes'][0]['source'], id: $id)->assertOk()->assertJsonPath('data.operation.status', 'used');
        $this->export($doc['quizzes'][0]['source'], id: $id)->assertOk();
        $this->getJson('/api/v1/content-usage/operations/'.$id.'/export')->assertOk();
        $ticket = $this->ticket($doc, parents: [$id]);
        $usage = $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk()->json('data.usage');
        $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'complete', 'output' => $this->receipt('revision', [$this->question->id])])->assertOk();
        $this->assertSame(2, DB::table('content_usage_claims')->count());
        $this->getJson('/api/v1/content-usage')->assertJsonPath('counts.used', 1);
        $this->assertSame(2, ContentUsageOperation::count());
        $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc))->assertConflict();
    }
    public function test_quiz_json_and_mp4_share_only_an_explicit_authorized_export(): void
    {
        $batch = VideoBatch::create(['major_id' => $this->subject->major_id, 'target_video_count' => 1, 'questions_per_video' => 1, 'status' => 'draft']);
        $video = VideoSet::create(['video_batch_id' => $batch->id, 'subject_id' => $this->subject->id, 'video_number' => 1, 'title' => 'Test video', 'status' => 'draft']);
        VideoSetQuestion::create(['video_set_id' => $video->id, 'question_id' => $this->question->id, 'question_order' => 1]);
        $document = json_decode(json_encode(app(VideoSetJsonExporter::class)->build($video)), true);
        $id = $this->export($document, 'quiz-json')->assertOk()->json('data.operation.id');
        $ticket = $this->ticket($document, parents: [$id]);
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk();
        $this->assertSame(2, DB::table('content_usage_claims')->count());
        $document['questions'][0]['choices'][0]['text'] = 'Forged answer';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($document), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
    }
    public function test_posts_json_and_confirmation_share_one_use_and_confirmation_is_idempotent(): void
    {
        $fact = \App\Services\SocialFactSelector::format($this->fact->load('subject'));
        $document = ['days' => [['major' => ['id' => $this->subject->major_id], 'fact_short' => ['fact' => $fact]]]];
        $id = $this->export($document, 'posts-json')->assertOk()->json('data.operation.id');
        $payload = ['usage_operation_id' => $id, 'items' => [['post_date' => '2026-11-05', 'format' => 'fact_short', 'subject_id' => $this->subject->id, 'fact_id' => $this->fact->id]]];
        $this->postJson('/api/v1/social-packs/confirm', $payload)->assertOk()->assertJsonPath('data.created', 1);
        $this->postJson('/api/v1/social-packs/confirm', $payload)->assertOk()->assertJsonPath('data.created', 0);
        $this->assertSame(1, ContentUsageOperation::count());
        $this->getJson('/api/v1/content-usage?type=fact')->assertJsonPath('counts.used', 1);
    }
    public function test_direct_posts_confirmation_is_atomic_and_replays_without_another_use(): void
    {
        $payload = ['items' => [['post_date' => '2026-11-05', 'format' => 'fact_short', 'subject_id' => $this->subject->id, 'fact_id' => $this->fact->id]]];
        $this->postJson('/api/v1/social-packs/confirm', $payload)->assertOk()->assertJsonPath('data.created', 1);
        $this->postJson('/api/v1/social-packs/confirm', $payload)->assertOk()->assertJsonPath('data.created', 0);
        $this->assertSame(1, ContentUsageOperation::count());
        $this->assertSame('used', ContentUsageOperation::first()->status);
        $this->assertSame(1, \App\Models\SocialPost::count());
        $this->assertSame(4, DB::table('content_usage_claims')->count());
    }
    public function test_conflicting_batch_rolls_back_every_new_claim(): void
    {
        $second = $this->addQuestion('Which force opposes motion?');
        $this->reserve([$this->question]);
        try { $this->reserve([$second, $this->question]); $this->fail('The batch was not atomic.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(409, $e->getStatusCode()); }
        $this->assertSame(1, ContentUsageOperation::count());
        $this->assertSame(2, DB::table('content_usage_claims')->count());
        $this->getJson('/api/v1/content-usage?status=available')->assertJsonPath('counts.available', 1)->assertJsonPath('data.0.source_id', $second->id);
    }

    public function test_failed_export_does_not_consume_content(): void
    {
        $document = app(RevisionNotesJsonExporter::class)->build($this->quiz);
        $disk = \Mockery::mock(\Illuminate\Contracts\Filesystem\Filesystem::class);
        $disk->shouldReceive('put')->once()->andReturn(false);
        Storage::shouldReceive('disk')->with('local')->andReturn($disk);
        $this->export($document)->assertStatus(503);
        $this->assertSame('failed', ContentUsageOperation::first()->status);
        $this->assertSame(0, DB::table('content_usage_claims')->count());
    }
    public function test_changed_sources_arbitrary_ids_and_output_paths_are_rejected(): void
    {
        $doc = $this->factDocument(); $doc['facts'][0]['text'] = 'Forged content';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc)])->assertUnprocessable();
        $revision = app(RevisionNotesJsonExporter::class)->build($this->quiz); $revision['notes'][0]['question_id'] = 999999;
        $this->export($revision)->assertUnprocessable();
        $op = $this->reserve([$this->question]); $output = $this->receipt(); $output[0]['name'] = '../../secret.env';
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $output))->assertUnprocessable();
        $this->assertSame('reserved', $op->fresh()->status);
    }
    public function test_admin_boundaries_and_reporting_disabled_in_production(): void
    {
        $user = User::create(['name' => 'Student', 'email' => 'student@example.test', 'password' => 'Test-password-123!', 'role' => 'user']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user))->getJson('/api/v1/content-usage')->assertForbidden();
        $this->postJson('/api/v1/content-usage/exports')->assertForbidden();
        $this->postJson('/api/v1/content-usage/recover')->assertForbidden();
        $this->app->detectEnvironment(fn () => 'production');
        $this->postJson('/api/v1/local-render/usage')->assertNotFound();
    }
    public function test_ordinary_quizzes_questions_answers_and_educational_rows_are_preserved(): void
    {
        $before = [Question::withTrashed()->get()->toJson(), Choice::withTrashed()->get()->toJson(), Fact::withTrashed()->get()->toJson(), Quiz::withTrashed()->get()->toJson()];
        $this->export(app(RevisionNotesJsonExporter::class)->build($this->quiz))->assertOk();
        $this->assertTrue(Question::whereKey($this->question->id)->exists());
        $this->getJson('/api/v1/quizzes/'.$this->quiz->id.'/revision-json')->assertOk();
        $this->assertSame($before, [Question::withTrashed()->get()->toJson(), Choice::withTrashed()->get()->toJson(), Fact::withTrashed()->get()->toJson(), Quiz::withTrashed()->get()->toJson()]);
    }
}
