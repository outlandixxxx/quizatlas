<?php

namespace Tests\Feature;

use App\Models\{Choice, ContentUsageOperation, Major, Question, Quiz, Subject, User, VideoBatch, VideoSet, VideoSetQuestion};
use App\Services\{ShortDisplayNumbers, VideoBatchGenerator, VideoQuestionSelector};
use App\Services\ContentUsage\{Fingerprint, Registry};
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\{Artisan, DB};
use Illuminate\Support\Str;
use Tests\TestCase;

class VideoPreparationUsageTest extends TestCase
{
    private Subject $subject;
    private Quiz $quiz;
    private User $admin;
    private array $questions = [];

    public function createApplication()
    {
        $_ENV['APP_CONFIG_CACHE'] = $_SERVER['APP_CONFIG_CACHE'] = '/tmp/video-prepare-no-config.php';
        $_ENV['APP_ROUTES_CACHE'] = $_SERVER['APP_ROUTES_CACHE'] = '/tmp/video-prepare-no-routes.php';
        $app = parent::createApplication();
        $app['config']->set(['app.env' => 'testing', 'app.key' => 'base64:'.base64_encode(str_repeat('q', 32)),
            'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null,
            'cache.default' => 'array', 'jwt.secret' => str_repeat('prepare-test-', 8), 'jwt.blacklist_enabled' => false]);
        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        $this->withoutMiddleware(ThrottleRequests::class);
        foreach (ContentUsageTest::migrations() as $file) Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
        config(['video_selection.duplicate_similarity_threshold' => 100]);
        $this->admin = User::create(['name' => 'Prepare tests', 'email' => 'prepare@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $major = Major::create(['name' => 'Sciences', 'slug' => 'prepare-science', 'is_active' => true]);
        $this->subject = Subject::create(['major_id' => $major->id, 'name' => 'Physique', 'slug' => 'prepare-physics', 'is_active' => true]);
        $this->quiz = Quiz::create(['subject_id' => $this->subject->id, 'title' => 'Stored quiz', 'duration' => 10, 'passing_score' => 50, 'total_marks' => 8, 'difficulty' => 'Beginner']);
        foreach (['Quelle force attire les corps vers le centre de la Terre ?',
            'Comment le cœur distribue-t-il le sang dans notre organisme ?',
            'Pourquoi les plantes utilisent-elles la lumière pour produire du glucose ?',
            'ما القوة التي تجذب الأجسام نحو الأرض حسب القانون العلمي؟',
            'Quelle unité permet de mesurer une température thermodynamique ?'] as $text) $this->questions[] = $this->addQuestion($text);
        $this->questions[4]->update(['explanation' => null]);
        $this->addQuestion('Combien de faces possède un cube géométrique ?', 3);
        $invalid = $this->addQuestion('Pourquoi cette question comporte-t-elle deux choix déclarés corrects ?');
        $invalid->choices()->where('order', 2)->update(['is_correct' => true]);
        $this->addQuestion($this->questions[0]->question);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($this->admin));
    }

    private function addQuestion(string $text, int $choices = 4): Question
    {
        $question = Question::create(['quiz_id' => $this->quiz->id, 'question' => $text, 'explanation' => 'Explication source conservée.', 'order' => Question::count() + 1]);
        foreach (array_slice(['Première proposition', 'Deuxième proposition', 'Troisième proposition', 'Quatrième proposition'], 0, $choices) as $index => $choice) {
            Choice::create(['question_id' => $question->id, 'choice_text' => $choice, 'is_correct' => $index === 0, 'order' => $index + 1]);
        }
        return $question->refresh();
    }

    private function batch(int $count = 3, string $template = 'niveau-concours', ?string $language = 'fr', int $perVideo = 1): VideoBatch
    {
        return VideoBatch::create(['major_id' => $this->subject->major_id, 'target_video_count' => $count, 'questions_per_video' => $perVideo,
            'status' => 'draft', 'settings' => ['template' => $template, 'language' => $language, 'subject_ids' => [$this->subject->id]]]);
    }

    private function pool(?string $language = 'fr', string $template = 'niveau-concours'): array
    {
        return app(VideoQuestionSelector::class)->eligibilityForSubject($this->subject->id, language: $language, template: $template);
    }

    private function reserve(Question $question): ContentUsageOperation
    {
        return app(Registry::class)->reserve($this->admin->id, (string) Str::uuid(), 'quiz-video', hash('sha256', (string) Str::uuid()), [Fingerprint::source($question)]);
    }

    private function documentForTemplate(string $template, ?Question $question = null, bool $historical = false): array
    {
        $batch = $this->batch(1, $template);
        $video = $batch->videoSets()->create(['subject_id' => $this->subject->id, 'video_number' => VideoSet::count() + 1, 'title' => 'Reviewed source', 'status' => 'draft']);
        $video->videoSetQuestions()->create(['question_id' => ($question ?? $this->questions[0])->id, 'question_order' => 1,
            'selection_metadata' => $historical ? null : ['quiz_video_usage_lifecycle' => 'generation']]);
        return app(\App\Services\VideoSetJsonExporter::class)->build($video, $template === 'long' ? null : $template, $template === 'long' ? null : 'fr');
    }

    private function authorizeDocument(array $document, ?string $operationId = null): \Illuminate\Testing\TestResponse
    {
        $content = json_encode($document);
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => 'render', 'operation_id' => $operationId ?? (string) Str::uuid()])
            ->assertOk()->json('data.ticket');
        return $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => 'render']);
    }

    private function finishOperation(ContentUsageOperation $operation, string $event = 'complete'): void
    {
        $output = $event === 'complete' ? [['kind' => 'video', 'name' => 'verified.mp4', 'sha256' => str_repeat('a', 64), 'bytes' => 100,
            'source_ids' => $operation->items->pluck('source_id')->all()]] : [];
        app(Registry::class)->report($operation->id, app(Registry::class)->credentials($operation)['token'], $operation->attempt, $event, $output);
    }

    public function test_normal_generation_is_independent_for_long_and_each_short_template(): void
    {
        $documents = [];
        foreach (Fingerprint::QUIZ_VIDEO_TEMPLATES as $template) $documents[$template] = $this->documentForTemplate($template);
        $initial = [];
        foreach (Fingerprint::QUIZ_VIDEO_TEMPLATES as $template) $initial[$template] = $this->pool('fr', $template)['stats']['available'];
        foreach ($documents as $template => $document) {
            $id = (string) Str::uuid();
            $this->authorizeDocument($document, $id)->assertOk()->assertJsonPath('data.usage.status', 'reserved');
            $this->authorizeDocument($document)->assertConflict();
            $operation = ContentUsageOperation::findOrFail($id);
            $this->assertSame($template, Fingerprint::quizVideoTemplate($operation->items->first()->identity_keys));
            $this->assertSame(1, $this->pool('fr', $template)['stats']['reserved']);
            $this->finishOperation($operation);
            $this->authorizeDocument($document, $id)->assertOk()->assertJsonPath('data.usage.status', 'used');
            $this->authorizeDocument($document)->assertConflict();
            $this->assertSame($initial[$template] - 1, $this->pool('fr', $template)['stats']['available']);
            $this->getJson('/api/v1/content-usage?context=quiz-video&subject_id='.$this->subject->id.'&language=fr&template='.$template)
                ->assertOk()->assertJsonPath('counts.consumed', 1)->assertJsonPath('counts.available', $initial[$template] - 1);
        }
        $this->assertSame(4, ContentUsageOperation::where('status', 'used')->count());
        $this->assertSame(8, DB::table('content_usage_claims')->count());
        $duplicate = Question::orderByDesc('id')->firstOrFail();
        $this->authorizeDocument($this->documentForTemplate('niveau-concours', $duplicate))->assertConflict();
        $english = $documents['niveau-concours']; $english['video']['language'] = $english['questions'][0]['language'] = 'en';
        $this->authorizeDocument($english)->assertConflict(); // Changing the confirmed Latin locale cannot evade this template's usage.
    }

    public function test_failed_scoped_retry_keeps_its_scope_and_competing_template_remains_independent(): void
    {
        $document = $this->documentForTemplate('niveau-concours'); $id = (string) Str::uuid();
        $this->authorizeDocument($document, $id)->assertOk();
        $op = ContentUsageOperation::findOrFail($id); $credentials = app(Registry::class)->credentials($op);
        $this->finishOperation($op, 'fail');
        $this->assertSame(4, $this->pool()['stats']['available']);
        $other = $this->documentForTemplate('defi-du-jour');
        $this->authorizeDocument($other)->assertOk();
        $retried = app(Registry::class)->report($id, $credentials['token'], $credentials['attempt'], 'retry');
        $this->assertSame(2, $retried->attempt);
        $this->assertSame('niveau-concours', Fingerprint::quizVideoTemplate($retried->items->first()->identity_keys));
        $this->assertSame(Fingerprint::requestHash($document), Fingerprint::requestHash(app(\App\Services\VideoSetJsonExporter::class)->build(VideoSet::findOrFail($document['video']['id']), 'niveau-concours', 'fr')));
        $this->finishOperation($retried, 'cancel');
        $this->assertSame(4, $this->pool()['stats']['available']);
        $this->assertSame(1, $this->pool('fr', 'defi-du-jour')['stats']['reserved']);
    }

    public function test_batch_scope_and_preparation_use_the_same_template_specific_availability(): void
    {
        $long = $this->documentForTemplate('long'); $id = (string) Str::uuid();
        $this->authorizeDocument($long, $id)->assertOk(); $this->finishOperation(ContentUsageOperation::findOrFail($id));
        foreach (['five-seconds', 'defi-du-jour', 'niveau-concours'] as $template) {
            $batch = $this->batch(2, $template); app(VideoBatchGenerator::class)->generate($batch);
            $documents = $batch->videoSets()->get()->map(fn ($video) => app(\App\Services\VideoSetJsonExporter::class)->build($video, $template, 'fr'))->all();
            $this->assertContains($this->questions[0]->id, array_column(array_merge(...array_column($documents, 'questions')), 'id'));
            $this->authorizeDocument(['type' => 'quiz-batch', 'videos' => $documents])->assertOk();
            $this->assertSame(2, $this->pool('fr', $template)['stats']['reserved']);
        }
        $mixed = ['type' => 'quiz-batch', 'videos' => [$long, $this->documentForTemplate('defi-du-jour')]];
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($mixed), 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])->assertUnprocessable();
    }

    public function test_legacy_scope_reclassification_preserves_success_and_is_backed_up_and_repeatable(): void
    {
        $documents = []; $operations = [];
        foreach (['long', 'five-seconds', 'defi-du-jour', 'niveau-concours'] as $index => $template) {
            // The fixture supplies only three translated questions with explanations.
            $question = $this->questions[$index < 3 ? $index : 0];
            if ($index === 3) $question = $this->addQuestion('Quelle particule transporte une charge électrique négative ?');
            $doc = $this->documentForTemplate($template, $question, true);
            $op = app(Registry::class)->reserve($this->admin->id, (string) Str::uuid(), 'quiz-video', Fingerprint::requestHash(['quiz-video', $doc, []]), [Fingerprint::source($question)]);
            $this->finishOperation($op); $operations[] = $op->fresh(); $documents[] = ['operation_id' => $op->id, 'document' => $doc];
        }
        $evidence = ['format' => 'maroquiz-quiz-video-scope-v1', 'operations' => $documents];
        $repair = app(\App\Services\ContentUsage\QuizVideoScopeRepair::class);
        $directory = sys_get_temp_dir().'/quiz-scope-test-'.Str::uuid();
        $beforeOps = ContentUsageOperation::orderBy('id')->get()->map->getAttributes()->all();
        $beforeSources = Question::orderBy('id')->get()->toArray();
        try {
            $dry = $repair->run($evidence, false, null, $directory);
            $this->assertSame(4, $dry['operations']); $this->assertSame(8, $dry['claims']);
            $this->assertFileDoesNotExist($directory);
            $this->assertSame($beforeOps, ContentUsageOperation::orderBy('id')->get()->map->getAttributes()->all());
            $this->authorizeDocument($this->documentForTemplate('defi-du-jour'))->assertConflict();
            $applied = $repair->run($evidence, true, ':memory:', $directory);
            $this->assertTrue($applied['applied']);
            $this->assertSame(hash_file('sha256', $applied['backup']['path']), $applied['backup']['sha256']);
            $this->assertSame(0600, fileperms($applied['backup']['path']) & 0777);
            $this->assertCount(4, json_decode(file_get_contents($applied['backup']['path']), true)['records']['items']);
            $this->assertSame($beforeOps, ContentUsageOperation::orderBy('id')->get()->map->getAttributes()->all());
            $this->assertSame($beforeSources, Question::orderBy('id')->get()->toArray());
            $this->assertSame(8, DB::table('content_usage_claims')->count());
            foreach ($operations as $index => $op) {
                $template = Fingerprint::QUIZ_VIDEO_TEMPLATES[$index];
                $this->assertSame($template, Fingerprint::quizVideoTemplate($op->items()->first()->identity_keys));
                $this->assertSame('used', $op->items()->first()->status);
                $this->authorizeDocument($documents[$index]['document'])->assertConflict();
            }
            $this->authorizeDocument($this->documentForTemplate('defi-du-jour'))->assertOk();
            // Complete that extra operation before re-running the repair.
            $extra = ContentUsageOperation::where('status', 'reserved')->firstOrFail(); $this->finishOperation($extra, 'cancel');
            $again = $repair->run($evidence, true, ':memory:', $directory);
            $this->assertSame(0, $again['operations']); $this->assertSame(4, $again['already_scoped']);
        } finally { if (is_dir($directory)) (new \Illuminate\Filesystem\Filesystem)->deleteDirectory($directory); }
    }

    public function test_legacy_classification_refuses_modified_evidence_and_active_jobs(): void
    {
        $doc = $this->documentForTemplate('long');
        $op = app(Registry::class)->reserve($this->admin->id, (string) Str::uuid(), 'quiz-video', Fingerprint::requestHash(['quiz-video', $doc, []]), [Fingerprint::source($this->questions[0])]);
        $this->finishOperation($op);
        $doc['video']['template'] = 'niveau-concours';
        $evidence = ['format' => 'maroquiz-quiz-video-scope-v1', 'operations' => [['operation_id' => $op->id, 'document' => $doc]]];
        $report = app(\App\Services\ContentUsage\QuizVideoScopeRepair::class)->run($evidence, false, null, '/tmp/unused-quiz-scope-test');
        $this->assertSame(0, $report['operations']); $this->assertArrayHasKey($op->id, $report['skipped']);
        $this->assertNull(Fingerprint::quizVideoTemplate($op->items()->first()->identity_keys));
        $this->reserve($this->questions[1]);
        $this->expectExceptionMessage('Finish or reconcile reserved quiz video jobs');
        app(\App\Services\ContentUsage\QuizVideoScopeRepair::class)->run($evidence, true, ':memory:', '/tmp/unused-quiz-scope-test');
    }

    public function test_legacy_sanitized_input_recovers_only_hash_proven_worker_options(): void
    {
        $doc = $this->documentForTemplate('defi-du-jour');
        $authorized = $doc + ['render_options' => ['profile' => 'final', 'fps' => 30]];
        $op = app(Registry::class)->reserve($this->admin->id, (string) Str::uuid(), 'quiz-video', Fingerprint::requestHash(['quiz-video', $authorized, []]), [Fingerprint::source($this->questions[0])]);
        $this->finishOperation($op);
        $evidence = ['format' => 'maroquiz-quiz-video-scope-v1', 'operations' => [['operation_id' => $op->id, 'document' => $doc]]];
        $report = app(\App\Services\ContentUsage\QuizVideoScopeRepair::class)->run($evidence, false, null, '/tmp/unused-quiz-scope-test');
        $this->assertSame(1, $report['operations']); $this->assertSame([], $report['skipped']);
        $this->assertSame($doc, $evidence['operations'][0]['document']);
        $this->assertNull(Fingerprint::quizVideoTemplate($op->items()->first()->identity_keys));
    }

    public function test_other_usage_purposes_do_not_consume_a_quiz_template(): void
    {
        app(Registry::class)->reserve($this->admin->id, (string) Str::uuid(), 'revision-media', hash('sha256', 'revision'), [Fingerprint::source($this->questions[0])]);
        $this->authorizeDocument($this->documentForTemplate('niveau-concours'))->assertOk();
        $this->assertSame(1, $this->pool()['stats']['reserved']);
        $this->assertSame(1, DB::table('content_usage_operations')->where('kind', 'revision-media')->where('status', 'reserved')->count());
    }

    public function test_preparing_independent_batches_does_not_consume_and_siblings_remain_unique(): void
    {
        $before = $this->pool()['stats'];
        $first = $this->batch();
        app(VideoBatchGenerator::class)->generate($first);
        $second = $this->batch();
        app(VideoBatchGenerator::class)->generate($second);
        foreach ([$first, $second] as $batch) {
            $assignments = VideoSetQuestion::whereHas('videoSet', fn ($q) => $q->where('video_batch_id', $batch->id))->get();
            $this->assertCount(3, $assignments);
            $this->assertCount(3, $assignments->pluck('question_id')->unique());
            foreach ($assignments as $assignment) $this->assertSame('generation', $assignment->selection_metadata['quiz_video_usage_lifecycle']);
        }
        $this->assertSame($before, $this->pool()['stats']);
        $this->assertSame(0, ContentUsageOperation::count());
        $this->assertSame(0, VideoSetQuestion::restrictsVideoReuse()->count());
        $this->assertSame(0, app(VideoBatchGenerator::class)->generate($first)['created_video_count']);
    }

    public function test_resuming_partial_short_preparation_preserves_proposals_and_builds_one_pool_per_subject(): void
    {
        foreach (range(1, 8) as $number) $this->addQuestion('Quelle est la propriété physique du matériau numéro '.$number.' dans cette expérience ?');
        $batch = $this->batch(4, 'five-seconds');
        app(VideoBatchGenerator::class)->generate($batch);
        $existing = $batch->videoSets()->with('videoSetQuestions')->orderBy('id')->get()->toArray();
        $batch->update(['target_video_count' => 10]);
        $selector = \Mockery::mock(VideoQuestionSelector::class)->makePartial();
        $selector->shouldReceive('eligibilityForSubject')->once()->passthru();
        app()->instance(VideoQuestionSelector::class, $selector);
        $result = app(VideoBatchGenerator::class)->generate($batch);
        $this->assertSame(6, $result['created_video_count']);
        $this->assertSame(10, $result['total_video_count']);
        $this->assertSame($existing, $batch->videoSets()->whereIn('id', array_column($existing, 'id'))->with('videoSetQuestions')->orderBy('id')->get()->toArray());
        $this->assertSame(10, VideoSetQuestion::distinct()->count('question_id'));
        $this->assertSame(0, ContentUsageOperation::count());
    }

    public function test_cached_preparation_pool_matches_fresh_selection_with_batch_exclusions(): void
    {
        config(['video_selection.duplicate_similarity_threshold' => 88]);
        $selector = app(VideoQuestionSelector::class);
        $pool = $selector->eligibilityForSubject($this->subject->id, language: 'fr', template: 'niveau-concours');
        $ids = []; $texts = [];
        foreach (range(1, 3) as $index) {
            $cached = $selector->selectFromPool($pool, 1, $ids, $texts);
            $fresh = $selector->selectForSubject($this->subject->id, 1, excludeQuestionIds: $ids, excludeSimilarTexts: $texts, language: 'fr', template: 'niveau-concours');
            $this->assertSame($fresh, $cached);
            $ids[] = $cached['questions'][0]['id']; $texts[] = $cached['questions'][0]['text'];
        }
    }

    public function test_failed_preparation_rolls_back_new_proposals_and_can_be_retried(): void
    {
        $batch = $this->batch(3); $inserts = 0;
        VideoSetQuestion::creating(function () use (&$inserts) { if (++$inserts === 2) throw new \RuntimeException('Simulated preparation write failure.'); });
        try {
            app(VideoBatchGenerator::class)->generate($batch);
            $this->fail('Preparation unexpectedly succeeded.');
        } catch (\RuntimeException $error) {
            $this->assertSame('Simulated preparation write failure.', $error->getMessage());
        } finally { VideoSetQuestion::flushEventListeners(); }
        $this->assertSame(0, $batch->videoSets()->count());
        $this->assertSame(0, VideoSetQuestion::count());
        $this->assertSame(0, ContentUsageOperation::count());
        $this->assertSame(3, app(VideoBatchGenerator::class)->generate($batch)['created_video_count']);
    }

    public function test_replace_preview_and_json_export_do_not_claim_content_or_lose_batch_uniqueness(): void
    {
        $batch = $this->batch(); app(VideoBatchGenerator::class)->generate($batch);
        $assignment = VideoSetQuestion::whereHas('videoSet', fn ($q) => $q->where('video_batch_id', $batch->id))->firstOrFail();
        $before = $this->pool()['stats'];
        $base = '/api/v1/video-sets/'.$assignment->video_set_id;
        $this->getJson($base.'?template=niveau-concours&language=fr')->assertOk();
        $this->getJson($base.'/export-json?template=niveau-concours&language=fr')->assertOk();
        $this->postJson($base.'/questions/'.$assignment->id.'/replace')->assertOk();
        $assigned = VideoSetQuestion::whereHas('videoSet', fn ($q) => $q->where('video_batch_id', $batch->id))->get();
        $this->assertCount(3, $assigned->pluck('question_id')->unique());
        $this->assertSame('generation', $assignment->fresh()->selection_metadata['quiz_video_usage_lifecycle']);
        $this->assertSame($before, $this->pool()['stats']);
        $this->assertSame(0, ContentUsageOperation::count());
    }

    public function test_long_preparation_is_nonconsuming_and_keeps_every_batch_question_unique(): void
    {
        $batch = $this->batch(2, 'long', null, 3);
        $before = $this->pool(null, 'long')['stats'];
        $result = app(VideoBatchGenerator::class)->generate($batch);
        $this->assertSame(2, $result['created_video_count']);
        $this->assertSame(6, VideoSetQuestion::count());
        $this->assertSame(6, VideoSetQuestion::distinct()->count('question_id'));
        $this->assertSame($before, $this->pool(null, 'long')['stats']);
        $this->assertSame(0, ContentUsageOperation::count());
    }

    public function test_scoped_counts_share_language_template_and_duplicate_eligibility(): void
    {
        $base = '/api/v1/content-usage?type=question&context=quiz-video&subject_id='.$this->subject->id;
        $fr = $this->pool()['stats'];
        $this->assertSame(4, $fr['available']);
        $this->assertSame(1, $fr['skipped_duplicates']);
        $this->getJson($base.'&language=fr&template=niveau-concours')->assertOk()->assertJsonPath('counts.available', 4)
            ->assertJsonPath('counts.total_eligible', 4)->assertJsonPath('counts.consumed', 0)->assertJsonPath('counts.reserved', 0);
        $this->getJson($base.'&language=ar&template=niveau-concours')->assertOk()->assertJsonPath('counts.available', 1);
        $this->getJson($base.'&language=en&template=niveau-concours')->assertOk()->assertJsonPath('counts.available', 4);
        $this->getJson($base.'&language=fr&template=five-seconds')->assertOk()->assertJsonPath('counts.available', 3);
        $this->getJson($base.'&template=long')->assertOk()->assertJsonPath('counts.available', 6);
    }

    public function test_unreviewed_old_assignments_remain_held_until_explicit_reclassification(): void
    {
        $batch = $this->batch();
        $video = $batch->videoSets()->create(['subject_id' => $this->subject->id, 'video_number' => 1, 'title' => 'Historical proposal', 'status' => 'draft']);
        $assignment = $video->videoSetQuestions()->create(['question_id' => $this->questions[0]->id, 'question_order' => 1]);
        $this->assertSame(1, $this->pool()['stats']['legacy_restricted']);
        $this->assertSame(3, $this->pool()['stats']['available']);
        $this->assertSame(0, $this->pool()['stats']['consumed']);
        $this->getJson('/api/v1/content-usage?context=quiz-video&subject_id='.$this->subject->id.'&language=fr&template=niveau-concours&status=legacy_restricted')
            ->assertOk()->assertJsonPath('data.0.status', 'legacy_restricted')->assertJsonPath('data.0.operation', null);
        $assignment->update(['selection_metadata' => ['quiz_video_usage_release' => ['reason' => 'Explicit local evidence review fixture']]]);
        $this->assertSame(4, $this->pool()['stats']['available']);
    }

    public function test_active_reservation_and_success_are_distinct_from_prepared_drafts(): void
    {
        app(VideoBatchGenerator::class)->generate($this->batch());
        $operation = $this->reserve($this->questions[0]);
        $this->assertSame(1, $this->pool()['stats']['reserved']);
        $this->assertSame(0, $this->pool()['stats']['consumed']);
        $operation->items()->update(['status' => 'used', 'completed_at' => now()]);
        $operation->update(['status' => 'used', 'completed_at' => now(), 'output' => [['kind' => 'video', 'name' => 'existing-success.mp4', 'sha256' => str_repeat('a', 64), 'bytes' => 32, 'source_ids' => [$this->questions[0]->id]]]]);
        $this->assertSame(0, $this->pool()['stats']['reserved']);
        $this->assertSame(1, $this->pool()['stats']['consumed']);
        $this->assertSame(3, $this->pool()['stats']['available']);
        $this->assertSame(3, app(VideoQuestionSelector::class)->eligibilityForSubject($this->subject->id, language: 'fr', template: 'niveau-concours',
            ignoreOperationIds: [$operation->id])['stats']['available']);
        $this->getJson('/api/v1/content-usage?context=quiz-video&subject_id='.$this->subject->id.'&language=fr&template=niveau-concours')
            ->assertOk()->assertJsonPath('counts.reserved', 0)->assertJsonPath('counts.consumed', 1);
    }

    public function test_repair_projection_recomputes_duplicate_groups_without_mutating_history(): void
    {
        $batch = $this->batch(); $assignments = [];
        foreach ([$this->questions[0], Question::orderByDesc('id')->firstOrFail()] as $index => $question) {
            $video = $batch->videoSets()->create(['subject_id' => $this->subject->id, 'video_number' => $index + 1, 'title' => 'Historical proposal', 'status' => 'draft']);
            $assignments[] = $video->videoSetQuestions()->create(['question_id' => $question->id, 'question_order' => 1]);
        }
        $selector = app(VideoQuestionSelector::class);
        $one = $selector->eligibilityForSubject($this->subject->id, language: 'fr', template: 'niveau-concours', ignoreAssignmentIds: [$assignments[0]->id]);
        $both = $selector->eligibilityForSubject($this->subject->id, language: 'fr', template: 'niveau-concours', ignoreAssignmentIds: array_map(fn ($assignment) => $assignment->id, $assignments));
        $this->assertSame(3, $one['stats']['available']);
        $this->assertSame(4, $both['stats']['available']);
        $this->assertSame(2, VideoSetQuestion::restrictsVideoReuse()->count());
        $this->assertNull($assignments[0]->fresh()->selection_metadata);
    }

    public function test_failed_numbers_release_but_retry_cannot_steal_a_reassigned_number(): void
    {
        $batch = $this->batch(); app(VideoBatchGenerator::class)->generate($batch);
        $videos = $batch->videoSets()->get();
        $first = $this->reserve($this->questions[0]);
        $videos[0]->update(['settings' => ['short_numbering_managed' => true, 'short_display_claims' => [['number' => 10, 'operation_id' => $first->id]]]]);
        $this->assertSame(11, app(ShortDisplayNumbers::class)->inspect($this->subject->id)['suggested']);
        $first->items()->update(['status' => 'failed']); $first->update(['status' => 'failed']);
        DB::table('content_usage_claims')->where('operation_id', $first->id)->delete();
        $this->assertSame(1, app(ShortDisplayNumbers::class)->inspect($this->subject->id)['suggested']);
        $second = $this->reserve($this->questions[1]);
        $videos[1]->update(['settings' => ['short_numbering_managed' => true, 'short_display_claims' => [['number' => 10, 'operation_id' => $second->id]]]]);
        try {
            DB::transaction(fn () => app(ShortDisplayNumbers::class)->assertRetryNumbers($first->id));
            $this->fail('A retained number was reassigned without review.');
        } catch (\Symfony\Component\HttpKernel\Exception\HttpException $exception) {
            $this->assertSame(409, $exception->getStatusCode());
        }
        $this->assertSame(10, $videos[0]->fresh()->settings['short_display_claims'][0]['number']);
    }

    public function test_old_approved_snapshot_cannot_bypass_unreviewed_legacy_usage(): void
    {
        $batch = $this->batch();
        $video = $batch->videoSets()->create(['subject_id' => $this->subject->id, 'video_number' => 1, 'title' => 'Historical proposal', 'status' => 'draft']);
        $assignment = $video->videoSetQuestions()->create(['question_id' => $this->questions[0]->id, 'question_order' => 1]);
        $document = app(\App\Services\VideoSetJsonExporter::class)->build($video, 'niveau-concours', 'fr');
        $content = json_encode($document);
        $operationId = (string) Str::uuid();
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => 'render', 'operation_id' => $operationId])
            ->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => 'render'])
            ->assertConflict();
        $this->assertSame(0, ContentUsageOperation::count());
        $this->assertSame(0, DB::table('content_usage_claims')->count());
        $this->assertSame($this->questions[0]->id, $assignment->fresh()->question_id);
        $this->assertNull($assignment->fresh()->selection_metadata);
        $assignment->update(['selection_metadata' => ['quiz_video_usage_release' => ['reason' => 'Explicit reviewed no-output fixture']]]);
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => 'render', 'operation_id' => $operationId])
            ->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => 'render'])
            ->assertOk()->assertJsonPath('data.usage.status', 'reserved');
        $this->assertSame(1, ContentUsageOperation::count());
    }

    public function test_duplicate_question_id_cannot_bypass_global_legacy_prompt_identity(): void
    {
        $batch = $this->batch(); app(VideoBatchGenerator::class)->generate($batch);
        $video = $batch->videoSets()->whereHas('videoSetQuestions', fn ($q) => $q->where('question_id', $this->questions[0]->id))->firstOrFail();
        $duplicate = Question::orderByDesc('id')->firstOrFail();
        $this->assertNotSame($this->questions[0]->id, $duplicate->id);
        $otherSubject = Subject::create(['major_id' => $this->subject->major_id, 'name' => 'Autre discipline', 'slug' => 'other-discipline', 'is_active' => true]);
        $otherQuiz = $this->quiz->replicate(); $otherQuiz->subject_id = $otherSubject->id; $otherQuiz->save();
        $duplicate->update(['quiz_id' => $otherQuiz->id]);
        $legacyBatch = $this->batch(1);
        $legacy = $legacyBatch->videoSets()->create(['subject_id' => $otherSubject->id, 'video_number' => 1, 'title' => 'Historical duplicate', 'status' => 'draft']);
        $assignment = $legacy->videoSetQuestions()->create(['question_id' => $duplicate->id, 'question_order' => 1]);
        $this->assertSame(1, $this->pool()['stats']['legacy_restricted']);
        $this->assertSame(3, $this->pool()['stats']['available']);
        $this->assertSame(4, app(VideoQuestionSelector::class)->eligibilityForSubject($this->subject->id, language: 'fr', template: 'niveau-concours',
            ignoreAssignmentIds: [$assignment->id])['stats']['available']);
        $content = json_encode(app(\App\Services\VideoSetJsonExporter::class)->build($video, 'niveau-concours', 'fr'));
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => 'render', 'operation_id' => (string) Str::uuid()])
            ->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => 'render'])
            ->assertConflict();
        $this->assertSame(0, ContentUsageOperation::count());
        $this->assertSame(0, DB::table('content_usage_claims')->count());
        $this->assertSame('generation', $video->videoSetQuestions()->firstOrFail()->selection_metadata['quiz_video_usage_lifecycle']);
    }
}
