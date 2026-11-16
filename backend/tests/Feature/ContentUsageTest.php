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
            '2026_10_16_100200_create_social_question_exclusions_table.php', '2026_11_04_100000_create_content_usage_registry.php', '2026_11_08_200000_associate_facts_with_majors.php'];
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
        $this->fact = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => 'La lumière se propage.', 'text_en' => 'Light travels.', 'text_ar' => 'ينتشر الضوء.', 'is_verified' => true]);
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
        return app(Registry::class)->reserve($this->admin->id, $id ?? (string) Str::uuid(), $kind, hash('sha256', 'test payload'), array_map(fn ($m) => $m instanceof Fact && in_array($kind, Fingerprint::FACT_VIDEO_TYPES, true) ? Fingerprint::factVideo($m, 'fr', $kind) : Fingerprint::source($m), $models), $parents);
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

    private function quizReset(bool $apply = false, array $options = []): array
    {
        $arguments = $apply ? ['--apply' => true, '--expect-database' => ':memory:', '--runner-stopped' => true,
            '--backup-dir' => $this->temporary.'/usage-backups'] : ['--dry-run' => true];
        $exit = Artisan::call('content-usage:reset-quiz-videos', array_replace($arguments, $options));
        $output = Artisan::output();
        $this->assertSame(0, $exit, $output);
        return json_decode(substr($output, strpos($output, '{'), strrpos($output, '}') - strpos($output, '{') + 1), true, flags: JSON_THROW_ON_ERROR);
    }

    private function quizResetAssignment(Question $question, bool $legacy = true): VideoSetQuestion
    {
        $batch = VideoBatch::create(['major_id' => $this->subject->major_id, 'target_video_count' => 1, 'questions_per_video' => 1, 'status' => 'draft']);
        $video = VideoSet::create(['video_batch_id' => $batch->id, 'subject_id' => $this->subject->id, 'video_number' => VideoSet::count() + 1, 'title' => 'Preserved video', 'status' => 'draft']);
        return VideoSetQuestion::create(['video_set_id' => $video->id, 'question_id' => $question->id, 'question_order' => 1,
            'selection_metadata' => ['reasons' => ['Original score reason']] + ($legacy ? [] : ['quiz_video_usage_lifecycle' => 'generation'])]);
    }

    public function test_quiz_video_reset_dry_run_guards_backup_and_repeat_are_safe(): void
    {
        $assignment = $this->quizResetAssignment($this->question);
        $op = $this->reserve([$this->question]);
        $before = $op->toArray();
        $dry = $this->quizReset();
        $this->assertFalse($dry['applied']); $this->assertSame(1, $dry['operations']); $this->assertSame(2, $dry['blocking_claims']);
        $this->assertSame($before, $op->refresh()->toArray());
        $this->assertDirectoryDoesNotExist($this->temporary.'/usage-backups');
        foreach ([['--apply' => true], ['--apply' => true, '--runner-stopped' => true, '--expect-database' => 'wrong']] as $unsafe) {
            $this->assertSame(1, Artisan::call('content-usage:reset-quiz-videos', $unsafe));
        }
        $this->app->instance('env', 'production');
        $this->assertSame(1, Artisan::call('content-usage:reset-quiz-videos', ['--dry-run' => true]));
        $this->app->instance('env', 'testing');
        foreach (['/', public_path().'/./usage-backup', storage_path('app/public').'/usage-backup'] as $unsafePath) {
            $this->assertSame(1, Artisan::call('content-usage:reset-quiz-videos', ['--apply' => true, '--runner-stopped' => true,
                '--expect-database' => ':memory:', '--backup-dir' => $unsafePath]));
        }
        $bad = $this->temporary.'/not-a-directory'; mkdir($this->temporary, 0700, true); file_put_contents($bad, 'preserve');
        $this->assertSame(1, Artisan::call('content-usage:reset-quiz-videos', ['--apply' => true, '--runner-stopped' => true,
            '--expect-database' => ':memory:', '--backup-dir' => $bad]));
        $this->assertSame($before, $op->refresh()->toArray()); $this->assertSame(1, VideoSetQuestion::restrictsVideoReuse()->count());
        $applied = $this->quizReset(true);
        $this->assertTrue($applied['applied']);
        $file = $applied['backup']['path'];
        $this->assertSame(hash_file('sha256', $file), $applied['backup']['sha256']);
        $this->assertStringStartsWith($applied['backup']['sha256'], file_get_contents($file.'.sha256'));
        $snapshot = json_decode(file_get_contents($file), true, flags: JSON_THROW_ON_ERROR);
        $this->assertSame($op->id, $snapshot['records']['content_usage_operations'][0]['id']);
        $this->assertSame('reserved', $snapshot['records']['content_usage_operations'][0]['status']);
        $this->assertSame($assignment->id, $snapshot['records']['video_set_questions'][0]['id']);
        $this->assertSame(['Original score reason'], $assignment->refresh()->selection_metadata['reasons']);
        $again = $this->quizReset(true);
        $this->assertFalse($again['applied']); $this->assertSame(0, $again['operations']); $this->assertSame(0, $again['legacy_assignments']);
        $this->assertCount(1, glob($this->temporary.'/usage-backups/*.json'));
    }

    public function test_quiz_video_reset_all_states_preserves_other_formats_and_historical_outputs(): void
    {
        $ops = []; $questions = [$this->question];
        foreach (['used', 'failed', 'released', 'reserved'] as $index => $state) {
            $q = $index === 0 ? $this->question : $this->addQuestion('Historical unique question '.$index.'?');
            if ($index) $questions[] = $q;
            $op = $this->reserve([$q]); $ops[] = $op;
            if ($state !== 'reserved') $this->postJson('/api/v1/local-render/usage', $this->event($op,
                match ($state) { 'used' => 'complete', 'released' => 'cancel', default => 'fail' },
                $state === 'used' ? $this->receipt() : []))->assertOk();
        }
        $partial = $this->addQuestion('Verified partial historical question?'); $unverified = $this->addQuestion('Unverified historical partial question?');
        $questions = array_merge($questions, [$partial, $unverified]);
        $op = $this->reserve([$partial, $unverified]); $ops[] = $op;
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail', $this->receipt('video', [$partial->id])))->assertOk();
        $jsonQuestion = $this->addQuestion('Question exported for the quiz renderer?'); $questions[] = $jsonQuestion;
        $root = $this->reserve([$jsonQuestion], 'quiz-json'); $ops[] = $root;
        $root->update(['status' => 'used', 'completed_at' => now(), 'output' => [['kind' => 'json', 'name' => 'preserved.json']]]);
        $root->items()->update(['status' => 'used', 'completed_at' => now()]);
        $revisionQuestion = $this->addQuestion('Preserved revision question?');
        $revision = $this->reserve([$revisionQuestion], 'revision-media');
        $this->postJson('/api/v1/local-render/usage', $this->event($revision, 'complete', $this->receipt('revision', [$revisionQuestion->id])))->assertOk();
        $fact = $this->reserve([$this->fact], 'facts-short');
        $this->postJson('/api/v1/local-render/usage', $this->event($fact, 'complete', $this->receipt()))->assertOk();
        $preserved = [$revision->refresh()->toArray(), $fact->refresh()->toArray()];
        $otherClaims = DB::table('content_usage_claims')->whereIn('operation_id', [$revision->id, $fact->id])->orderBy('identity_key')->get()->toJson();
        $used = $ops[0]->refresh(); $oldOutput = $used->output; $oldCompletedAt = $used->completed_at->toIso8601String();
        $counts = [Question::count(), Choice::count(), Quiz::count(), Subject::count(), Major::count()];
        $report = $this->quizReset(true);
        $this->assertSame(6, $report['operations']); $this->assertSame(7, $report['usage_items']);
        foreach ($ops as $op) { $this->assertSame('released', $op->refresh()->status); $this->assertTrue(\App\Services\ContentUsage\QuizVideoUsageReset::retired($op->output)); }
        $this->assertSame($oldOutput[0], $used->refresh()->output[0]); $this->assertSame($oldCompletedAt, $used->completed_at->toIso8601String());
        $this->assertSame($preserved, [$revision->refresh()->toArray(), $fact->refresh()->toArray()]);
        $this->assertSame($otherClaims, DB::table('content_usage_claims')->whereIn('operation_id', [$revision->id, $fact->id])->orderBy('identity_key')->get()->toJson());
        $this->assertSame($counts, [Question::count(), Choice::count(), Quiz::count(), Subject::count(), Major::count()]);
        $this->getJson('/api/v1/content-usage?type=question&status=available')->assertOk()->assertJsonPath('counts.available', 7)->assertJsonPath('counts.used', 1);
        $this->assertSame(7, app(Registry::class)->available(Question::whereIn('id', array_map(fn ($q) => $q->id, $questions))->get())->count());
    }

    public function test_quiz_video_reset_availability_pagination_crosses_chunks_without_changing_counts(): void
    {
        $last = null;
        for ($i = 0; $i < 260; $i++) $last = $this->addQuestion('Catalogue pagination question '.$i.'?');
        $op = $this->reserve([$last]);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt()))->assertOk();
        $this->getJson('/api/v1/content-usage?type=question&page=14')->assertOk()
            ->assertJsonPath('counts.total', 261)->assertJsonPath('counts.available', 260)->assertJsonPath('counts.used', 1)
            ->assertJsonPath('meta.last_page', 14)->assertJsonCount(1, 'data')->assertJsonPath('data.0.source_id', $last->id);
        $this->getJson('/api/v1/content-usage?type=question&status=used')->assertOk()
            ->assertJsonPath('counts.total', 261)->assertJsonPath('meta.total', 1)->assertJsonPath('data.0.source_id', $last->id);
        $this->getJson('/api/v1/content-usage?type=question&status=available&page=13')->assertOk()
            ->assertJsonPath('meta.total', 260)->assertJsonCount(20, 'data');
    }

    public function test_quiz_video_reset_api_selection_and_future_tracking_remain_enabled(): void
    {
        $assignment = $this->quizResetAssignment($this->question);
        $op = $this->reserve([$this->question]);
        $old = $this->event($op, 'complete', $this->receipt());
        $this->postJson('/api/v1/local-render/usage', $old)->assertOk();
        $this->quizReset(true);
        $this->assertSame($this->question->id, $assignment->refresh()->question_id);
        $this->assertSame(1, VideoSetQuestion::count());
        $this->getJson('/api/v1/content-usage?type=question&status=available')->assertOk()->assertJsonPath('counts.available', 1);
        $this->postJson('/api/v1/local-render/usage', $old)->assertConflict();
        $this->postJson('/api/v1/local-render/usage', array_replace($old, ['event' => 'retry']))->assertConflict();
        try { $this->reserve([$this->question], id: $op->id); $this->fail('Retired operation reused.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $error) { $this->assertSame(409, $error->getStatusCode()); }
        $batch = $this->postJson('/api/v1/video-batches', ['major_id' => $this->subject->major_id, 'target_video_count' => 1,
            'questions_per_video' => 1, 'subject_ids' => [$this->subject->id]])->assertCreated()->json('data.id');
        $this->postJson('/api/v1/video-batches/'.$batch.'/generate')->assertOk()->assertJsonPath('data.created_video_count', 1);
        $this->assertSame(2, VideoSetQuestion::where('question_id', $this->question->id)->count());
        $this->assertSame(0, VideoSetQuestion::restrictsVideoReuse()->count());
        $this->assertCount(1, app(\App\Services\VideoQuestionSelector::class)->selectForSubject($this->subject->id, 1)['questions']);
        $fresh = $this->reserve([$this->question]);
        $this->getJson('/api/v1/content-usage?type=question')->assertJsonPath('counts.reserved', 1);
        $this->postJson('/api/v1/local-render/usage', $this->event($fresh, 'fail'))->assertOk();
        $this->getJson('/api/v1/content-usage?type=question')->assertJsonPath('counts.available', 1);
        $this->assertSame(0, VideoSetQuestion::restrictsVideoReuse()->count());
        $this->assertCount(1, app(\App\Services\VideoQuestionSelector::class)->selectForSubject($this->subject->id, 1)['questions']);
        $next = $this->reserve([$this->question]);
        $this->postJson('/api/v1/local-render/usage', $this->event($next, 'complete', $this->receipt()))->assertOk();
        $this->getJson('/api/v1/content-usage?type=question')->assertJsonPath('counts.used', 1)->assertJsonPath('counts.available', 0);
        try { $this->reserve([$this->question]); $this->fail('Future duplicate was allowed.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $error) { $this->assertSame(409, $error->getStatusCode()); }
    }

    private function factVariant(string $language, string $profile, ?Fact $fact = null): array
    {
        return $this->postJson('/api/v1/facts-video/export', ['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id,
            'language' => $language, 'profile' => $profile, 'count' => 1, 'fact_ids' => [($fact ?? $this->fact)->id]])->assertOk()->json('data');
    }

    public function test_all_six_fact_video_combinations_are_independent_and_duplicate_safe(): void
    {
        // Scientific notation can legitimately be identical in all three translations.
        $this->fact->update(['text_fr' => 'H₂O', 'text_en' => 'H₂O', 'text_ar' => 'H₂O']);
        $used = []; $original = $this->fact->fresh()->getAttributes();
        foreach (Fingerprint::FACT_LANGUAGES as $language) foreach (Fingerprint::FACT_VIDEO_TYPES as $profile) {
            $doc = $this->factVariant($language, $profile);
            $usage = $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc))->assertOk()->json('data.usage');
            $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'complete', 'output' => $this->receipt('video', [$this->fact->id])])->assertOk();
            $used[$language.':'.$profile] = true;
            $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc))->assertConflict();
            foreach (Fingerprint::FACT_LANGUAGES as $checkLanguage) foreach (Fingerprint::FACT_VIDEO_TYPES as $checkProfile) {
                $isUsed = isset($used[$checkLanguage.':'.$checkProfile]);
                $this->getJson('/api/v1/content-usage?type=fact&language='.$checkLanguage.'&video_type='.$checkProfile)
                    ->assertOk()->assertJsonPath('counts.available', $isUsed ? 0 : 1)->assertJsonPath('counts.used', $isUsed ? 1 : 0);
            }
        }
        $this->assertSame(6, ContentUsageItem::where('status', 'used')->count());
        $this->assertSame(12, DB::table('content_usage_claims')->count());
        $this->assertSame($original, $this->fact->fresh()->getAttributes());
        $this->getJson('/api/v1/facts-video/options?profile=facts-short')->assertJsonPath('data', []);
    }

    public function test_different_fact_combinations_can_hold_simultaneous_reservations(): void
    {
        $operations = [];
        foreach (Fingerprint::FACT_LANGUAGES as $language) foreach (Fingerprint::FACT_VIDEO_TYPES as $profile) {
            $operations[$language.':'.$profile] = $this->postJson('/api/v1/local-render/authorize', $this->ticket($this->factVariant($language, $profile)))->assertOk()->json('data.usage');
        }
        $this->assertSame(6, ContentUsageOperation::where('status', 'reserved')->count());
        $this->postJson('/api/v1/local-render/usage', $operations['fr:facts-short'] + ['event' => 'fail'])->assertOk();
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-short')->assertJsonPath('counts.available', 1);
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-long')->assertJsonPath('counts.reserved', 1);
        $this->getJson('/api/v1/content-usage?type=fact&language=ar&video_type=facts-short')->assertJsonPath('counts.reserved', 1);
        $this->assertSame(10, DB::table('content_usage_claims')->count());
    }

    public function test_missing_fact_translation_and_invalid_scope_never_fall_back(): void
    {
        $this->fact->update(['text_ar' => '']);
        $this->getJson('/api/v1/facts-video/options?profile=facts-long')->assertJsonPath('data.0.available.ar', 0);
        $this->postJson('/api/v1/facts-video/export', ['major_id' => $this->subject->major_id, 'language' => 'ar', 'profile' => 'facts-long', 'count' => 1])->assertUnprocessable();
        $doc = $this->factVariant('fr', 'facts-long'); $doc['language'] = 'ar';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        foreach (['language=es&video_type=facts-long', 'language=fr&video_type=quiz-video', 'language=fr', 'video_type=facts-short'] as $query) {
            $this->getJson('/api/v1/content-usage?type=fact&'.$query)->assertUnprocessable();
        }
        $this->assertSame(0, ContentUsageOperation::count());
    }

    public function test_long_fact_batch_partial_export_failure_and_recovery_stay_in_one_combination(): void
    {
        $a = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => 'Autre fait', 'text_en' => 'Other fact', 'text_ar' => 'حقيقة أخرى', 'is_verified' => true]);
        $b = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => 'Dernier fait', 'text_en' => 'Last fact', 'text_ar' => 'حقيقة أخيرة', 'is_verified' => true]);
        $docs = [$this->factVariant('fr', 'facts-long'), $this->factVariant('fr', 'facts-long', $a), $this->factVariant('fr', 'facts-long', $b)];
        $docs[0]['facts'][] = $docs[1]['facts'][0];
        $usage = $this->postJson('/api/v1/local-render/authorize', $this->ticket(['type' => 'facts-batch', 'videos' => [$docs[0], $docs[2]]]))->assertOk()->json('data.usage');
        $partial = $this->receipt('video', [$this->fact->id, $a->id]);
        $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'progress', 'output' => $partial])->assertOk();
        $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'fail', 'output' => $partial])->assertOk();
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-long')->assertJsonPath('counts.used', 2)->assertJsonPath('counts.available', 1);
        foreach (['fr:facts-short', 'en:facts-short', 'en:facts-long', 'ar:facts-short', 'ar:facts-long'] as $scope) {
            [$lang, $profile] = explode(':', $scope);
            $this->getJson('/api/v1/content-usage?type=fact&language='.$lang.'&video_type='.$profile)->assertJsonPath('counts.available', 3)->assertJsonPath('counts.used', 0);
        }
        $this->fact->update(['text_ar' => 'ترجمة عربية محدثة']); // Another translation must not invalidate French recovery.
        $this->travel(901)->seconds();
        $retry = $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'retry'])->assertOk()->json('data');
        $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $this->receipt('video', [$this->fact->id, $a->id, $b->id])])->assertOk();
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-long')->assertJsonPath('counts.used', 3);
    }

    public function test_fact_text_fingerprints_are_scoped_to_language_and_format(): void
    {
        $alias = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => $this->fact->text_fr, 'text_en' => 'Distinct English', 'text_ar' => 'نص مختلف', 'is_verified' => true]);
        $this->reserve([$this->fact], 'facts-short');
        try { $this->reserve([$alias], 'facts-short'); $this->fail('Same-combination duplicate was accepted.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(409, $e->getStatusCode()); }
        $this->reserve([$alias], 'facts-long');
        $this->postJson('/api/v1/local-render/authorize', $this->ticket($this->factVariant('en', 'facts-short', $alias)))->assertOk();
        $this->assertNotSame(Fingerprint::factVideo($alias, 'fr', 'facts-short')['fingerprint'], Fingerprint::factVideo($alias, 'fr', 'facts-long')['fingerprint']);
        $this->assertNotSame(Fingerprint::factVideo($alias, 'fr', 'facts-short')['fingerprint'], Fingerprint::factVideo($alias, 'en', 'facts-short')['fingerprint']);
    }

    public function test_legacy_global_fact_claims_do_not_block_all_video_variants(): void
    {
        $op = $this->reserve([$this->fact], 'posts-json');
        $op->update(['kind' => 'facts-short']); // Fixture representing the old global implementation.
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt()))->assertOk();
        $this->getJson('/api/v1/content-usage?type=fact&language=ar&video_type=facts-long')->assertJsonPath('counts.available', 1);
        $this->factVariant('ar', 'facts-long');
        $this->assertSame(4, DB::table('content_usage_claims')->count());
    }

    public function test_evidenced_legacy_fact_scope_repair_preserves_history_and_is_idempotent(): void
    {
        $doc = $this->factVariant('fr', 'facts-short');
        $op = $this->reserve([$this->fact], 'posts-json'); $op->update(['kind' => 'facts-short']);
        $receipts = $this->receipt();
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $receipts))->assertOk();
        $before = $op->fresh()->getAttributes(); $beforeItems = $op->items()->first()->getAttributes();
        $quiz = $this->reserve([$this->question]);
        $otherClaims = DB::table('content_usage_claims')->where('operation_id', $quiz->id)->get()->toJson();
        $evidence = ['format' => 'maroquiz-fact-video-scope-evidence-v1', 'operations' => [['operation_id' => $op->id, 'documents' => [$doc], 'receipts' => $receipts]]];
        $repair = app(\App\Services\ContentUsage\FactVideoUsageScopeRepair::class);
        $dry = $repair->run($evidence, false, null, $this->temporary.'/scope-backups');
        $this->assertSame(1, $dry['operations']); $this->assertSame(4, $dry['old_claims']); $this->assertSame(2, $dry['scoped_claims']);
        $this->assertSame($beforeItems, $op->items()->first()->getAttributes());
        $result = $repair->run($evidence, true, ':memory:', $this->temporary.'/scope-backups');
        $this->assertTrue($result['applied']);
        $this->assertSame($result['backup']['sha256'], hash_file('sha256', $result['backup']['path']));
        $this->assertSame(0600, fileperms($result['backup']['path']) & 0777);
        $this->assertSame($before, $op->fresh()->getAttributes());
        $this->assertSame($beforeItems['completed_at'], $op->items()->first()->getAttributes()['completed_at']);
        $this->assertSame('used', $op->items()->first()->status);
        $this->assertSame($otherClaims, DB::table('content_usage_claims')->where('operation_id', $quiz->id)->get()->toJson());
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-short')->assertJsonPath('counts.used', 1);
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-long')->assertJsonPath('counts.available', 1);
        $repeat = $repair->run($evidence, true, ':memory:', $this->temporary.'/scope-backups');
        $this->assertFalse($repeat['applied']); $this->assertSame(1, $repeat['already_scoped']);
    }

    public function test_fact_scope_repair_skips_ambiguous_and_active_operations_without_changes(): void
    {
        $doc = $this->factVariant('fr', 'facts-short');
        $op = $this->reserve([$this->fact], 'posts-json'); $op->update(['kind' => 'facts-short']);
        $evidence = ['format' => 'maroquiz-fact-video-scope-evidence-v1', 'operations' => [['operation_id' => $op->id, 'documents' => [$doc], 'receipts' => []]]];
        $repair = app(\App\Services\ContentUsage\FactVideoUsageScopeRepair::class);
        $before = DB::table('content_usage_claims')->get()->toJson();
        $active = $repair->run($evidence, true, ':memory:', $this->temporary.'/scope-backups');
        $this->assertFalse($active['applied']); $this->assertArrayHasKey($op->id, $active['skipped']);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt()))->assertOk();
        $ambiguous = $repair->run($evidence, true, ':memory:', $this->temporary.'/scope-backups');
        $this->assertFalse($ambiguous['applied']); $this->assertArrayHasKey($op->id, $ambiguous['skipped']);
        $this->assertSame($before, DB::table('content_usage_claims')->get()->toJson());
        $this->assertDirectoryDoesNotExist($this->temporary.'/scope-backups');
    }

    public function test_fact_batch_proposal_replacement_and_canonical_source_validation(): void
    {
        $second = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => 'La gravité attire les masses.', 'text_en' => '', 'text_ar' => '', 'is_verified' => true]);
        $config = ['major_id' => $this->subject->major_id, 'language' => 'fr', 'profile' => 'facts-short', 'count' => 1, 'batch_size' => 2];
        $pool = $this->postJson('/api/v1/facts-video/export', $config)->assertOk()->assertJsonCount(2, 'data.facts')->json('data');
        $this->postJson('/api/v1/facts-video/export', array_replace($config, ['batch_size' => 1, 'exclude_ids' => [$this->fact->id]]))
            ->assertOk()->assertJsonPath('data.facts.0.id', $second->id);
        $doc = ['type' => 'facts-batch', 'videos' => array_map(fn ($fact) => array_replace($pool, ['facts' => [$fact]]), $pool['facts'])];
        $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc, 'estimate'))->assertOk();
        $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc))->assertOk();
        foreach ([['type' => 'facts-batch', 'videos' => [$doc['videos'][0], $doc['videos'][0]]],
            ['type' => 'facts-batch', 'videos' => [$doc]]] as $invalid) {
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($invalid), 'purpose' => 'estimate'])->assertUnprocessable();
        }
        $doc['videos'][0]['facts'][0]['text'] = 'Forged content';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'estimate'])->assertUnprocessable();
    }

    public function test_fact_batch_partial_usage_failure_retry_and_type_boundaries(): void
    {
        foreach (['facts-short', 'facts-long'] as $kind) {
            $a = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => 'Premier fait '.$kind, 'text_en' => '', 'text_ar' => '', 'is_verified' => true]);
            $b = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => 'Second fait '.$kind, 'text_en' => '', 'text_ar' => '', 'is_verified' => true]);
            $op = $this->reserve([$a, $b], $kind);
            $this->postJson('/api/v1/local-render/usage', $this->event($op, 'progress', $this->receipt('revision', [$a->id])))->assertUnprocessable();
            $this->postJson('/api/v1/local-render/usage', $this->event($op, 'progress', $this->receipt('video', [$this->fact->id])))->assertUnprocessable();
            $partial = $this->receipt('video', [$a->id]);
            $this->postJson('/api/v1/local-render/usage', $this->event($op, 'progress', $partial))->assertOk();
            $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail', $partial))->assertOk();
            $this->assertSame('used', $op->items()->where('source_id', $a->id)->first()->status);
            $available = app(Registry::class)->available(Fact::whereIn('id', [$a->id, $b->id])->get(), ['language' => 'fr', 'video_type' => $kind]);
            $this->assertSame([$b->id], $available->pluck('id')->all());
            $retry = $this->postJson('/api/v1/local-render/usage', $this->event($op, 'retry'))->assertOk()->json('data');
            $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $partial])->assertUnprocessable();
            $all = $this->receipt('video', [$a->id, $b->id]);
            $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $all])->assertOk();
            $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $all])->assertOk();
            $this->assertSame(2, $op->items()->where('status', 'used')->count());
            $this->assertSame(0, $op->items()->where('source_type', '!=', 'fact')->count());
        }
    }

    public function test_quiz_video_batch_partial_completion_retry_and_source_coverage(): void
    {
        $second = $this->addQuestion('Which force opposes movement?');
        $op = $this->reserve([$this->question, $second]);
        $partial = $this->receipt('video', [$this->question->id]);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'progress', $partial))->assertOk();
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail', $partial))->assertOk();
        $this->assertSame('used', $op->items()->where('source_id', $this->question->id)->first()->status);
        $retry = $this->postJson('/api/v1/local-render/usage', $this->event($op, 'retry'))->assertOk()->json('data');
        $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $partial])->assertUnprocessable();
        $all = $this->receipt('video', [$this->question->id, $second->id]);
        $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $all])->assertOk();
        $this->postJson('/api/v1/local-render/usage', $retry + ['event' => 'complete', 'output' => $all])->assertOk();
        $this->assertSame(2, $op->items()->where('status', 'used')->count());
    }

    public function test_quiz_batch_reuses_source_validation_and_rejects_nested_or_duplicate_videos(): void
    {
        $batch = VideoBatch::create(['major_id' => $this->subject->major_id, 'name' => 'Reviewed batch', 'target_video_count' => 1, 'questions_per_video' => 1, 'status' => 'draft']);
        $video = VideoSet::create(['video_batch_id' => $batch->id, 'subject_id' => $this->subject->id, 'video_number' => 18, 'title' => 'Reviewed video', 'status' => 'draft']);
        VideoSetQuestion::create(['video_set_id' => $video->id, 'question_id' => $this->question->id, 'question_order' => 1,
            'selection_metadata' => ['quiz_video_usage_lifecycle' => 'generation']]);
        $document = app(VideoSetJsonExporter::class)->build($video);
        $doc = ['type' => 'quiz-batch', 'videos' => [$document]];
        $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc))->assertOk();
        foreach ([['type' => 'quiz-batch', 'videos' => [$document, $document]], ['type' => 'quiz-batch', 'videos' => [$doc]]] as $invalid) {
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($invalid), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        }
        $doc['videos'][0]['questions'][0]['correct_answer']['label'] = 'D';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
    }

    public function test_short_display_numbers_are_read_only_until_final_authorization_and_collisions_are_atomic(): void
    {
        $assignment = $this->quizResetAssignment($this->question, legacy: false);
        $video = VideoSet::findOrFail($assignment->video_set_id);
        $video->update(['video_number' => 35]); // Abandoned proposals do not set the banner sequence.
        $base = '/api/v1/video-sets/'.$video->id;
        $this->getJson($base.'/short-numbers')->assertOk()->assertJsonPath('data.suggested', 1);
        $this->getJson($base.'/short-numbers')->assertOk()->assertJsonPath('data.suggested', 1);
        $this->assertNull($video->refresh()->settings);
        $doc = $this->getJson($base.'/export-json?template=defi-du-jour&language=fr')->assertOk()->json();
        $doc['video']['display_number'] = 11;
        $doc['render_options'] = ['profile' => 'final'];
        $this->assertCount(1, app(\App\Services\ContentUsage\Sources::class)->export('quiz-json', $doc));
        $ticket = $this->ticket($doc);
        $authorization = $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk()->json('data.usage');
        $this->assertSame(35, $video->refresh()->video_number);
        $this->getJson($base.'/short-numbers')->assertOk()->assertJsonPath('data.suggested', 12);
        $registry = app(Registry::class);
        $registry->report($authorization['operation_id'], $authorization['token'], $authorization['attempt'], 'fail');
        // Failed jobs retain metadata but free unused numbers; retry validates any intervening collision.
        DB::transaction(fn () => app(\App\Services\ShortDisplayNumbers::class)->reserve($doc, $authorization['operation_id']));
        $this->assertCount(1, $video->refresh()->settings['short_display_claims']);
        $other = $this->quizResetAssignment($this->question, legacy: false);
        $competing = $this->getJson('/api/v1/video-sets/'.$other->video_set_id.'/export-json?template=five-seconds&language=en')->assertOk()->json();
        $competing['video']['display_number'] = 11;
        $this->postJson('/api/v1/local-render/authorize', $this->ticket($competing))->assertOk();
        $this->assertSame(2, ContentUsageOperation::count());
        $this->assertCount(1, VideoSet::findOrFail($other->video_set_id)->settings['short_display_claims']);
        $tampered = $competing; $tampered['questions'][0]['choices'][0]['text'] = 'Not the approved source';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($tampered), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        foreach ([0, -1, 1.5, '11', 1000000] as $invalid) {
            $competing['video']['display_number'] = $invalid;
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($competing), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        }
    }

    public function test_short_draft_receipts_do_not_consume_display_numbers_and_all_short_locales_follow_the_question(): void
    {
        $assignment = $this->quizResetAssignment($this->question, legacy: false);
        $video = VideoSet::findOrFail($assignment->video_set_id);
        $base = '/api/v1/video-sets/'.$video->id;
        $doc = $this->getJson($base.'/export-json?template=defi-du-jour&language=fr')->assertOk()->json();
        $doc['video']['display_number'] = 24; $doc['render_options'] = ['profile' => 'draft'];
        $usage = $this->postJson('/api/v1/local-render/authorize', $this->ticket($doc))->assertOk()->json('data.usage');
        app(Registry::class)->report($usage['operation_id'], $usage['token'], $usage['attempt'], 'complete', $this->receipt());
        $this->getJson($base.'/short-numbers')->assertOk()->assertJsonPath('data.suggested', 1);
        $this->assertArrayNotHasKey('short_display_claims', $video->refresh()->settings);
        $this->question->update(['question' => 'ما القوة التي تجذب الأجسام نحو الأرض؟']);
        foreach (['five-seconds', 'defi-du-jour', 'niveau-concours'] as $template) {
            $this->getJson($base.'/export-json?template='.$template.'&language=fr')->assertOk()
                ->assertJsonPath('video.language', 'ar')->assertJsonPath('questions.0.language', 'ar');
            $this->getJson($base.'?template='.$template.'&language=fr')->assertOk()->assertJsonPath('data.questions.0.language', 'ar');
        }
    }

    public function test_five_second_short_exports_stored_explanation_and_binds_it_to_authorization(): void
    {
        $batch = VideoBatch::create(['major_id' => $this->subject->major_id, 'name' => 'Shorts', 'target_video_count' => 1, 'questions_per_video' => 1, 'status' => 'draft']);
        $video = VideoSet::create(['video_batch_id' => $batch->id, 'subject_id' => $this->subject->id, 'video_number' => 1, 'title' => 'Short', 'status' => 'draft']);
        VideoSetQuestion::create(['video_set_id' => $video->id, 'question_id' => $this->question->id, 'question_order' => 1, 'selection_metadata' => ['quiz_video_usage_lifecycle' => 'generation']]);
        $url = '/api/v1/video-sets/'.$video->id.'/export-json';
        $legacy = $this->getJson($url)->assertOk()->assertJsonPath('format_version', '1.0')->json();
        $this->assertArrayNotHasKey('explanation', $legacy['questions'][0]);
        $document = $this->getJson($url.'?template=five-seconds&language=fr')->assertOk()
            ->assertJsonPath('video.template', 'five-seconds')->assertJsonPath('video.language', 'fr')
            ->assertJsonPath('questions.0.explanation', $this->question->explanation)
            ->assertJsonPath('questions.0.quiz_title', $this->quiz->title)->json();
        $op = (string) Str::uuid();
        $doc = ['type' => 'quiz-batch', 'videos' => [$document]];
        $ticket = ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => $op];
        for ($i = 0; $i < 2; $i++) {
            $capability = $this->postJson('/api/v1/local-render/ticket', $ticket)->assertOk()->json('data.ticket');
            $this->postJson('/api/v1/local-render/authorize', ['ticket' => $capability, 'purpose' => 'render', 'content_hash' => hash('sha256', $ticket['content'])])->assertOk();
        }
        $this->assertSame(1, ContentUsageOperation::whereKey($op)->count());
        foreach (['explanation', 'text', 'quiz_title'] as $field) {
            $tampered = $doc; $tampered['videos'][0]['questions'][0][$field] = 'Fabricated source';
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($tampered), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        }
        $doc['videos'][0]['questions'][0]['correct_answer']['choice_id'] = 999999;
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        $this->getJson($url.'?template=five-seconds')->assertUnprocessable();
        $this->getJson($url.'?template=unknown&language=fr')->assertUnprocessable();
    }

    public function test_five_second_short_rejects_missing_explanation_or_non_four_choice_source(): void
    {
        $assignment = $this->quizResetAssignment($this->question, legacy: false);
        $url = '/api/v1/video-sets/'.$assignment->video_set_id.'/export-json?template=five-seconds&language=fr';
        $this->question->update(['explanation' => null]);
        $this->getJson($url)->assertUnprocessable();
        $this->question->update(['explanation' => 'Stored explanation.']);
        $this->question->choices()->where('is_correct', false)->first()->delete();
        $this->getJson($url)->assertUnprocessable();
    }

    public function test_daily_challenge_reuses_source_authorization_without_requiring_an_explanation(): void
    {
        $assignment = $this->quizResetAssignment($this->question, legacy: false);
        $this->question->update(['explanation' => null]);
        $url = '/api/v1/video-sets/'.$assignment->video_set_id.'/export-json?template=defi-du-jour&language=fr';
        $document = $this->getJson($url)->assertOk()->assertJsonPath('video.template', 'defi-du-jour')
            ->assertJsonPath('questions.0.correct_answer.label', 'A')->assertJsonPath('questions.0.explanation', '')->json();
        $doc = ['type' => 'quiz-batch', 'videos' => [$document]];
        $ticket = $this->ticket($doc);
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk();
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertForbidden(); // Tickets remain single-use.
        $this->assertSame(1, ContentUsageOperation::count());
        foreach (['text', 'quiz_title'] as $field) {
            $tampered = $doc; $tampered['videos'][0]['questions'][0][$field] = 'Invented';
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($tampered), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        }
        $doc['videos'][0]['questions'][0]['correct_answer']['choice_id'] = 99999;
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($doc), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        $this->question->choices()->where('is_correct', false)->first()->delete();
        $this->getJson($url)->assertUnprocessable();
    }

    public function test_niveau_concours_exports_and_previews_explicit_content_locale_with_source_authorization(): void
    {
        $assignment = $this->quizResetAssignment($this->question, legacy: false);
        $this->question->update(['question' => 'Quelle force attire les masses ?', 'explanation' => null]);
        $base = '/api/v1/video-sets/'.$assignment->video_set_id;
        $url = $base.'/export-json?template=niveau-concours&language=fr';
        $document = $this->getJson($url)->assertOk()->assertJsonPath('video.template', 'niveau-concours')
            ->assertJsonPath('video.language', 'fr')->assertJsonPath('questions.0.language', 'fr')
            ->assertJsonPath('questions.0.correct_answer.label', 'A')->json();
        $this->getJson($base.'?template=niveau-concours&language=fr')->assertOk()
            ->assertJsonPath('data.questions.0.language', 'fr');
        $document['render_options']['niveau'] = ['extra_animations' => true, 'narration' => false, 'music' => false, 'sfx' => true];
        $doc = ['type' => 'quiz-batch', 'videos' => [$document]];
        $ticket = $this->ticket($doc);
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertOk();
        $this->postJson('/api/v1/local-render/authorize', $ticket)->assertForbidden();
        $tampered = $doc; $tampered['videos'][0]['questions'][0]['language'] = 'en';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($tampered), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
        $this->getJson($base.'/export-json?template=niveau-concours')->assertUnprocessable();
        $this->getJson($base.'/export-json?template=niveau-concours&language=ar')->assertUnprocessable();
    }

    public function test_niveau_concours_uses_arabic_question_language_and_keeps_mixed_french_text_french(): void
    {
        $assignment = $this->quizResetAssignment($this->question, legacy: false);
        $base = '/api/v1/video-sets/'.$assignment->video_set_id;
        $this->question->update(['question' => 'ما القوة التي تجذب الأجسام نحو الأرض باستخدام النموذج العلمي؟']);
        foreach (['fr', 'en', 'ar'] as $selected) {
            $this->getJson($base.'/export-json?template=niveau-concours&language='.$selected)->assertOk()
                ->assertJsonPath('video.language', 'ar')->assertJsonPath('questions.0.language', 'ar');
            $this->getJson($base.'?template=niveau-concours&language='.$selected)->assertOk()
                ->assertJsonPath('data.questions.0.language', 'ar');
        }
        $this->question->update(['question' => 'Quelle lettre entend-on au début de « بيت » (maison) ?']);
        $this->getJson($base.'/export-json?template=niveau-concours&language=fr')->assertOk()->assertJsonPath('questions.0.language', 'fr');
        $legacy = $this->getJson($base.'/export-json')->assertOk()->json();
        $this->assertArrayNotHasKey('language', $legacy['questions'][0]);
        $this->question->choices()->where('is_correct', false)->first()->delete();
        $this->getJson($base.'/export-json?template=niveau-concours&language=fr')->assertUnprocessable();
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
    public function test_retry_recovers_only_its_expired_reservation_and_preserves_used_outputs(): void
    {
        foreach (['quiz-video', 'facts-short', 'facts-long'] as $kind) {
            $models = $kind === 'quiz-video'
                ? [$this->addQuestion('Used '.$kind), $this->addQuestion('Pending '.$kind)]
                : array_map(fn ($label) => Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => $label.' '.$kind, 'text_en' => '', 'text_ar' => '', 'is_verified' => true]), ['Used', 'Pending']);
            $op = $this->reserve($models, $kind);
            $old = $this->event($op, 'retry');
            $this->postJson('/api/v1/local-render/usage', $this->event($op, 'progress', $this->receipt('video', [$models[0]->id])))->assertOk();
            $this->travel(901)->seconds();
            $recovered = $this->postJson('/api/v1/local-render/usage', $old)->assertOk()->assertJsonPath('data.attempt', 2)->json('data');
            $this->assertSame('used', $op->items()->where('source_id', $models[0]->id)->first()->status);
            $this->assertSame('reserved', $op->items()->where('source_id', $models[1]->id)->first()->status);
            $this->postJson('/api/v1/local-render/usage', array_replace($old, ['event' => 'complete', 'output' => $this->receipt()]))->assertConflict();
            $this->postJson('/api/v1/local-render/usage', $recovered + ['event' => 'complete', 'output' => $this->receipt('video', array_map(fn ($m) => $m->id, $models))])->assertOk();
        }
    }

    public function test_retry_renews_a_live_reservation_but_rejects_changed_or_conflicting_sources(): void
    {
        $op = $this->reserve([$this->question]); $retry = $this->event($op, 'retry');
        $this->travel(600)->seconds();
        $this->postJson('/api/v1/local-render/usage', $retry)->assertOk()->assertJsonPath('data.attempt', 1);
        $this->assertTrue($op->fresh()->expires_at->greaterThan($op->expires_at));
        $original = $this->question->question;
        $this->question->update(['question' => 'Changed reviewed source']);
        $this->postJson('/api/v1/local-render/usage', $retry)->assertConflict();
        $this->question->update(['question' => $original]);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail'))->assertOk();
        $other = $this->reserve([$this->question]);
        $this->postJson('/api/v1/local-render/usage', $retry)->assertConflict();
        $this->assertSame('failed', $op->fresh()->status);
        $this->assertSame(1, $op->fresh()->attempt);
        $this->assertSame('reserved', $other->fresh()->status);
        $this->assertSame(2, DB::table('content_usage_claims')->where('operation_id', $other->id)->count());
        $invalid = array_replace($this->event($other, 'retry'), ['token' => str_repeat('0', 64)]);
        $this->postJson('/api/v1/local-render/usage', $invalid)->assertForbidden();
        $this->postJson('/api/v1/local-render/usage', $this->event($other, 'complete', $this->receipt()))->assertOk();
        $this->postJson('/api/v1/local-render/usage', $this->event($other, 'retry'))->assertOk()->assertJsonPath('data.status', 'used');
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
        $this->postJson('/api/v1/content-usage/recover')->assertOk()->assertJsonPath('data.released', 0);
        $this->assertSame('reserved', $op->fresh()->status); // Expiry alone cannot disprove a retained MP4.
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'retry'))->assertOk()->assertJsonPath('data.attempt', 2);
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
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-short&status=reserved')->assertJsonPath('counts.reserved', 1);
        $this->postJson('/api/v1/local-render/usage', array_replace($usage + ['event' => 'complete', 'output' => $this->receipt()], ['token' => str_repeat('0', 64)]))->assertForbidden();
        $this->postJson('/api/v1/local-render/usage', $usage + ['event' => 'complete', 'output' => $this->receipt()])->assertOk();
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-short')->assertJsonPath('counts.used', 1);
        $this->getJson('/api/v1/facts-video/options')->assertJsonPath('data.0.available.fr', 0)->assertJsonPath('data.0.available.ar', 1);
        $this->getJson('/api/v1/facts-video/options?profile=facts-long')->assertJsonPath('data.0.available.fr', 1);
    }
    public function test_fact_translation_aliases_block_identical_content_with_different_ids(): void
    {
        $other = Fact::create(['major_id' => $this->subject->major_id, 'subject_id' => $this->subject->id, 'text_fr' => $this->fact->text_fr, 'text_en' => 'Another translation.', 'text_ar' => '', 'is_verified' => true]);
        $this->reserve([$this->fact], 'facts-short');
        try { $this->reserve([$other], 'facts-short'); $this->fail('Identical facts were allocated twice in one combination.'); }
        catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(409, $e->getStatusCode()); }
        $this->getJson('/api/v1/content-usage?type=fact&language=fr&video_type=facts-short')->assertJsonPath('counts.total', 2)->assertJsonPath('counts.reserved', 2);
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
        VideoSetQuestion::create(['video_set_id' => $video->id, 'question_id' => $this->question->id, 'question_order' => 1,
            'selection_metadata' => ['quiz_video_usage_lifecycle' => 'generation']]);
        $document = json_decode(json_encode(app(VideoSetJsonExporter::class)->build($video)), true);
        $id = $this->export($document, 'quiz-json')->assertOk()->json('data.operation.id');
        $this->assertSame(0, DB::table('content_usage_claims')->count());
        $this->assertSame(0, ContentUsageItem::where('operation_id', $id)->count());
        $this->getJson('/api/v1/content-usage')->assertJsonPath('counts.available', 1);
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
    public function test_selective_quiz_repair_preserves_success_uncertain_active_other_purposes_and_snapshots(): void
    {
        config(['video_selection.duplicate_similarity_threshold' => 100]);
        $used = $this->quizResetAssignment($this->question);
        $op = $this->reserve([$this->question]);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'complete', $this->receipt()))->assertOk();
        $draft = $this->quizResetAssignment($this->addQuestion('Why do plants need sunlight for photosynthesis?'));
        $uncertain = $this->quizResetAssignment($this->addQuestion('How does the human heart circulate blood?'));
        $active = $this->quizResetAssignment($this->addQuestion('Which temperature unit measures thermodynamic energy?'));
        $activeOp = $this->reserve([$active->question]);
        $stale = $this->quizResetAssignment($this->addQuestion('How many triangular faces form a tetrahedron?'));
        $staleOp = $this->reserve([$stale->question]);
        $staleOp->update(['expires_at' => now()->subMinute()]);
        $other = $this->addQuestion('Which ocean covers the greatest surface area?');
        $otherOp = $this->reserve([$other], 'revision-media');
        $this->postJson('/api/v1/local-render/usage', $this->event($otherOp, 'complete', $this->receipt('revision', [$other->id])))->assertOk();
        mkdir($this->temporary, 0700, true);
        $file = $this->temporary.'/repair-inventory.json';
        file_put_contents($file, json_encode(['format' => 'maroquiz-quiz-usage-inventory-v1', 'generated_at' => now()->toIso8601String(),
            'runner_stopped' => true, 'unknown_records' => [], 'records' => [
                ['video_set_id' => $used->video_set_id, 'operation_id' => $op->id, 'status' => 'success', 'source_ids' => [$used->question_id]],
                ['video_set_id' => $uncertain->video_set_id, 'operation_id' => null, 'status' => 'uncertain', 'source_ids' => [$uncertain->question_id]],
                ['video_set_id' => $stale->video_set_id, 'operation_id' => $staleOp->id, 'status' => 'no_output', 'source_ids' => [$stale->question_id]],
            ]]));
        $repair = app(\App\Services\ContentUsage\QuizVideoUsageRepair::class);
        $options = ['inventory' => $file, 'backup_dir' => $this->temporary.'/repairs'];
        $before = $repair->run($options);
        $this->assertSame([$draft->id, $stale->id], $before['assignment_ids']);
        $this->assertSame([$staleOp->id], $before['operation_ids']);
        $this->assertNull($draft->fresh()->selection_metadata['quiz_video_usage_release'] ?? null);
        $existingReport = $this->temporary.'/existing-report.json';
        file_put_contents($existingReport, 'preserve');
        $this->assertSame(1, Artisan::call('content-usage:repair-quiz-videos', ['--inventory' => $file, '--apply' => true,
            '--expect-database' => ':memory:', '--expect-plan' => $before['plan'], '--runner-stopped' => true,
            '--inventory-complete' => true, '--report' => $existingReport]));
        $this->assertNull($draft->fresh()->selection_metadata['quiz_video_usage_release'] ?? null);
        $applied = $repair->run($options + ['apply' => true, 'expect_database' => ':memory:', 'expect_plan' => $before['plan'], 'runner_stopped' => true, 'inventory_complete' => true]);
        $this->assertTrue($applied['applied']);
        $this->assertSame($applied['backup']['sha256'], hash_file('sha256', $applied['backup']['path']));
        $backup = json_decode(file_get_contents($applied['backup']['path']), true);
        $this->assertArrayHasKey('previous_records', $backup);
        $this->assertSame(['Original score reason'], $draft->fresh()->selection_metadata['reasons']);
        $this->assertNull($used->fresh()->selection_metadata['quiz_video_usage_release'] ?? null);
        $this->assertNull($uncertain->fresh()->selection_metadata['quiz_video_usage_release'] ?? null);
        $this->assertNull($active->fresh()->selection_metadata['quiz_video_usage_release'] ?? null);
        $this->assertSame('reserved', $activeOp->fresh()->status);
        $this->assertSame('used', $otherOp->fresh()->status);
        $this->assertSame('released', $staleOp->fresh()->status);
        $again = $repair->run($options);
        $this->assertSame([], $again['assignment_ids']);
        $this->assertSame([], $again['operation_ids']);
        $this->assertSame($before['subjects'][0]['available_after'], $again['subjects'][0]['available_before']);
        $this->assertSame(6, Question::count());
        $this->postJson('/api/v1/local-render/usage', $this->event($staleOp->fresh(), 'retry'))->assertOk()->assertJsonPath('data.attempt', 2);
    }

    public function test_finalized_single_output_failure_receipt_consumes_only_its_approved_questions(): void
    {
        $op = $this->reserve([$this->question]);
        $this->postJson('/api/v1/local-render/usage', $this->event($op, 'fail', $this->receipt('video', [$this->question->id])))->assertOk();
        $this->assertSame('used', $op->items()->sole()->status);
        $this->getJson('/api/v1/content-usage')->assertJsonPath('counts.used', 1)->assertJsonPath('counts.available', 0);
        $this->postJson('/api/v1/local-render/usage', $this->event($op->fresh(), 'retry'))->assertOk()->assertJsonPath('data.attempt', 2);
        $this->assertSame('used', $op->items()->sole()->status);
    }

    public function test_selective_quiz_repair_rejects_changed_plan_and_preserves_unmapped_history(): void
    {
        $draft = $this->quizResetAssignment($this->question);
        mkdir($this->temporary, 0700, true);
        $file = $this->temporary.'/repair-unknown-inventory.json';
        file_put_contents($file, json_encode(['format' => 'maroquiz-quiz-usage-inventory-v1', 'generated_at' => now()->toIso8601String(),
            'runner_stopped' => true, 'records' => [], 'unknown_records' => [['created_at' => null]]]));
        $repair = app(\App\Services\ContentUsage\QuizVideoUsageRepair::class);
        $this->assertSame([], $repair->run(['inventory' => $file])['assignment_ids']);
        try {
            $repair->run(['inventory' => $file, 'apply' => true, 'expect_database' => ':memory:', 'runner_stopped' => true, 'inventory_complete' => true, 'expect_plan' => 'wrong']);
            $this->fail('Changed plan must not apply.');
        } catch (\RuntimeException $e) { $this->assertStringContainsString('expect-plan', $e->getMessage()); }
        $this->assertNull($draft->fresh()->selection_metadata['quiz_video_usage_release'] ?? null);
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
