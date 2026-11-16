<?php

namespace Tests\Feature;

use App\Models\{Choice, ContentUsageOperation, Major, Question, Quiz, Subject, User, VideoBatch, VideoSet};
use App\Services\VideoSetJsonExporter;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Support\Facades\{Artisan, DB};
use Tests\TestCase;

class ThumbnailPreviewTest extends TestCase
{
    private array $document;
    private VideoSet $video;

    public function createApplication()
    {
        $_ENV['APP_CONFIG_CACHE'] = $_SERVER['APP_CONFIG_CACHE'] = '/tmp/thumbnail-no-config.php';
        $_ENV['APP_ROUTES_CACHE'] = $_SERVER['APP_ROUTES_CACHE'] = '/tmp/thumbnail-no-routes.php';
        $app = parent::createApplication();
        $app['config']->set(['app.env' => 'testing', 'app.key' => 'base64:'.base64_encode(str_repeat('t', 32)),
            'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null,
            'cache.default' => 'array', 'jwt.secret' => str_repeat('thumbnail-test-', 8), 'jwt.blacklist_enabled' => false]);
        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        $this->withoutMiddleware(ThrottleRequests::class);
        foreach (ContentUsageTest::migrations() as $file) Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
        $admin = User::create(['name' => 'Thumbnail tests', 'email' => 'thumbnail@example.test', 'password' => 'TestOnly123!', 'role' => 'admin']);
        $major = Major::create(['name' => 'Physique', 'slug' => 'physics', 'is_active' => true]);
        $subject = Subject::create(['major_id' => $major->id, 'name' => 'Mécanique', 'slug' => 'mechanics', 'is_active' => true]);
        $quiz = Quiz::create(['subject_id' => $subject->id, 'title' => 'Stored quiz', 'duration' => 10, 'passing_score' => 50, 'total_marks' => 1, 'difficulty' => 'Beginner']);
        $question = Question::create(['quiz_id' => $quiz->id, 'question' => 'Quelle force attire les corps vers la Terre ?', 'explanation' => 'Explication conservée.', 'order' => 1]);
        foreach (['Gravité', 'Friction', 'Tension', 'Traînée'] as $index => $text) Choice::create(['question_id' => $question->id, 'choice_text' => $text, 'is_correct' => $index === 0, 'order' => $index + 1]);
        $batch = VideoBatch::create(['major_id' => $major->id, 'target_video_count' => 1, 'questions_per_video' => 1, 'status' => 'draft']);
        $this->video = $batch->videoSets()->create(['subject_id' => $subject->id, 'video_number' => 1, 'title' => 'Stored video', 'status' => 'draft']);
        $this->video->videoSetQuestions()->create(['question_id' => $question->id, 'question_order' => 1, 'selection_metadata' => ['quiz_video_usage_lifecycle' => 'generation']]);
        $this->document = app(VideoSetJsonExporter::class)->build($this->video, 'niveau-concours', 'fr');
        $this->document['render_options']['thumbnail'] = [
            'version' => 1, 'format' => 'portrait', 'template' => 'niveau-concours', 'template_label' => 'Niveau concours', 'locale' => 'fr',
            'display_number' => $this->document['video']['display_number'] ?? null,
            'major' => ['id' => $major->id, 'slug' => 'physics', 'label' => 'Physique'],
            'subject' => ['id' => $subject->id, 'slug' => 'mechanics', 'label' => 'Mécanique'],
            'palette' => ['id' => 'physics', 'background' => '#3E291C', 'primary' => '#FFA53A', 'secondary' => '#FFD33D',
                'text' => '#FFFDF5', 'muted' => '#E7E0D8', 'badge' => '#FFD33D', 'badgeText' => '#242123'],
            'asset' => ['id' => 'physics', 'sha256' => str_repeat('a', 64)], 'layout' => 'focus',
            'hook' => $question->question, 'supporting' => 'Une question de cette vidéo', 'seed' => 'thumbnail-test',
        ];
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($admin));
    }

    public function test_thumbnail_capability_never_reserves_content_or_numbers_and_is_single_use(): void
    {
        $before = $this->video->settings;
        $content = json_encode($this->document);
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => 'thumbnail'])->assertOk()->json('data.ticket');
        $input = ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => 'thumbnail'];
        $this->postJson('/api/v1/local-render/authorize', $input)->assertOk()->assertJsonPath('data.usage', null);
        $this->postJson('/api/v1/local-render/authorize', $input)->assertForbidden();
        $this->assertSame(0, ContentUsageOperation::count());
        $this->assertSame(0, DB::table('content_usage_claims')->count());
        $this->assertSame($before, $this->video->fresh()->settings);
    }

    public function test_thumbnail_options_allow_missing_spec_but_still_bind_source_content(): void
    {
        $document = $this->document; unset($document['render_options']['thumbnail']);
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($document), 'purpose' => 'thumbnail'])->assertOk();
        $document['questions'][0]['text'] = 'Invented replacement question';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($document), 'purpose' => 'thumbnail'])->assertUnprocessable();
    }

    public function test_unsafe_paths_css_wrong_major_and_planned_templates_are_rejected(): void
    {
        foreach (['path', 'css', 'major', 'locale', 'planned', 'number'] as $kind) {
            $document = $this->document;
            if ($kind === 'path') $document['render_options']['thumbnail']['asset']['path'] = '/tmp/private.png';
            if ($kind === 'css') $document['render_options']['thumbnail']['palette']['background'] = 'url(https://evil.test/x)';
            if ($kind === 'major') $document['render_options']['thumbnail']['asset']['id'] = 'health';
            if ($kind === 'locale') $document['render_options']['thumbnail']['locale'] = 'ar';
            if ($kind === 'planned') $document['render_options']['thumbnail']['template'] = 'language-day';
            if ($kind === 'number') $document['render_options']['thumbnail']['display_number'] = 98765;
            $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($document), 'purpose' => 'thumbnail'])->assertUnprocessable();
        }
        $this->assertSame(0, ContentUsageOperation::count());
    }

    public function test_thumbnail_ticket_cannot_be_replayed_as_a_video_reservation(): void
    {
        $content = json_encode($this->document);
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content, 'purpose' => 'thumbnail'])->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', $content), 'purpose' => 'render'])->assertForbidden();
        $this->assertSame(0, ContentUsageOperation::count());
    }
}
