<?php

namespace Tests\Feature;

use App\Models\Fact;
use App\Models\Major;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class FactsVideoTest extends TestCase
{
    public function createApplication()
    {
        $_ENV['APP_CONFIG_CACHE'] = $_SERVER['APP_CONFIG_CACHE'] = '/tmp/facts-video-no-config-cache.php';
        $_ENV['APP_ROUTES_CACHE'] = $_SERVER['APP_ROUTES_CACHE'] = '/tmp/facts-video-no-route-cache.php';
        $app = parent::createApplication();
        $app['config']->set(['app.env' => 'testing', 'database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null, 'cache.default' => 'array', 'jwt.secret' => str_repeat('facts-test-secret-', 4), 'jwt.blacklist_enabled' => false]);

        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        $paths = ['0001_01_01_000000_create_users_table.php', '2026_07_27_193254_add_profile_fields_to_users_table.php', '2026_07_02_205142_create_majors_table.php', '2026_07_02_211641_create_subjects_table.php', '2026_10_16_100000_create_facts_table.php'];
        foreach ($paths as $file) Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
    }

    private function login(string $role = 'admin'): void
    {
        $user = User::create(['name' => 'Render tests', 'email' => $role.'@example.test', 'password' => 'Local-test-123456!', 'role' => $role]);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function facts(): array
    {
        $major = Major::create(['name' => 'Science', 'slug' => 'science', 'is_active' => true]);
        $subject = Subject::create(['major_id' => $major->id, 'name' => 'Physics', 'slug' => 'physics', 'is_active' => true]);
        $fact = Fact::create(['subject_id' => $subject->id, 'text_fr' => 'La lumière se propage.', 'text_ar' => 'ينتشر الضوء.', 'text_en' => 'Light travels.', 'is_verified' => true, 'source_url' => 'https://example.test/reference']);

        return [$major, $subject, $fact];
    }

    public function test_admin_boundary_and_local_only_ticket(): void
    {
        $this->getJson('/api/v1/facts-video/options')->assertUnauthorized();
        $this->postJson('/api/v1/local-render/ticket')->assertUnauthorized();
        $this->login('user');
        $this->getJson('/api/v1/facts-video/options')->assertForbidden();
        $this->postJson('/api/v1/local-render/ticket')->assertForbidden();
    }

    public function test_ticket_is_single_use_and_expires_and_is_disabled_in_production(): void
    {
        $this->login();
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => '{}'])->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', '{}')])->assertOk();
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', '{}')])->assertForbidden();
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => '{}'])->json('data.ticket');
        $this->travel(121)->seconds();
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', '{}')])->assertForbidden();
        $this->app->detectEnvironment(fn () => 'production');
        $this->postJson('/api/v1/local-render/ticket')->assertNotFound();
    }

    public function test_real_language_filter_duplicate_prevention_and_reproducibility(): void
    {
        $this->login();
        [$major, $subject, $fact] = $this->facts();
        Fact::create(['subject_id' => $subject->id, 'text_fr' => $fact->text_fr, 'text_en' => '', 'text_ar' => '', 'is_verified' => true]);
        Fact::create(['subject_id' => $subject->id, 'text_fr' => 'Non vérifié.', 'text_en' => 'Unverified.', 'text_ar' => '', 'is_verified' => false]);
        $this->getJson('/api/v1/facts-video/options')->assertOk()->assertJsonPath('data.0.subjects.0.available.fr', 1)->assertJsonPath('data.0.subjects.0.available.ar', 1);
        $config = ['major_id' => $major->id, 'subject_id' => $subject->id, 'language' => 'fr', 'profile' => 'facts-long', 'count' => 1];
        $this->postJson('/api/v1/facts-video/export', $config)->assertOk()->assertJsonPath('data.facts.0.text', $fact->text_fr)->assertJsonPath('data.facts.0.detail', '')->assertJsonPath('data.facts.0.source_url', $fact->source_url);
        $this->postJson('/api/v1/facts-video/export', $config + ['fact_ids' => [$fact->id]])->assertOk()->assertJsonPath('data.facts.0.id', $fact->id);
        $this->postJson('/api/v1/facts-video/export', array_replace($config, ['count' => 2]))->assertUnprocessable();
        $this->postJson('/api/v1/facts-video/export', $config + ['target_duration' => 1200])->assertUnprocessable();
        $fact->update(['is_verified' => false]);
        $this->postJson('/api/v1/facts-video/export', $config + ['fact_ids' => [$fact->id]])->assertUnprocessable();
    }

    public function test_subject_scope_missing_language_and_inactive_content_are_rejected(): void
    {
        $this->login(); [$major, $subject, $fact] = $this->facts();
        $config = ['major_id' => $major->id, 'language' => 'en', 'profile' => 'facts-short', 'count' => 1];
        $fact->update(['text_en' => '']);
        $this->postJson('/api/v1/facts-video/export', $config)->assertUnprocessable();
        $this->postJson('/api/v1/facts-video/export', array_replace($config, ['language' => 'es']))->assertUnprocessable();
        $other = Major::create(['name' => 'Other', 'slug' => 'other', 'is_active' => true]);
        $this->postJson('/api/v1/facts-video/export', array_replace($config, ['major_id' => $other->id, 'language' => 'fr', 'fact_ids' => [$fact->id]]))->assertUnprocessable();
        $subject->update(['is_active' => false]);
        $this->getJson('/api/v1/facts-video/options')->assertOk()->assertJsonPath('data', []);
    }

    public function test_render_tickets_bind_payload_and_recheck_stored_source(): void
    {
        $this->login(); [$major, $subject, $fact] = $this->facts();
        $document = $this->postJson('/api/v1/facts-video/export', ['major_id' => $major->id, 'language' => 'fr', 'profile' => 'facts-long', 'count' => 1])->json('data');
        $content = json_encode($document);
        $ticket = $this->postJson('/api/v1/local-render/ticket', ['content' => $content])->assertOk()->json('data.ticket');
        $this->postJson('/api/v1/local-render/authorize', ['ticket' => $ticket, 'content_hash' => hash('sha256', 'different payload')])->assertForbidden();
        $document['facts'][0]['text'] = 'Altered fact';
        $this->postJson('/api/v1/local-render/ticket', ['content' => json_encode($document)])->assertUnprocessable();
        $fact->update(['is_verified' => false]);
        $this->postJson('/api/v1/local-render/ticket', ['content' => $content])->assertUnprocessable();
    }
}
