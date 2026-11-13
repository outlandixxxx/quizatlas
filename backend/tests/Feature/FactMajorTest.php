<?php

namespace Tests\Feature;

use App\Models\{Fact, Major, Subject, User};
use App\Services\ContentUsage\{Fingerprint, Sources};
use Illuminate\Support\Facades\{Artisan, DB, Schema};
use Tests\TestCase;

class FactMajorTest extends TestCase
{
    public function createApplication()
    {
        $_ENV['APP_CONFIG_CACHE'] = $_SERVER['APP_CONFIG_CACHE'] = '/tmp/fact-major-no-config.php';
        $_ENV['APP_ROUTES_CACHE'] = $_SERVER['APP_ROUTES_CACHE'] = '/tmp/fact-major-no-routes.php';
        $app = parent::createApplication();
        $app['config']->set(['app.env' => 'testing', 'database.default' => 'sqlite',
            'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null,
            'cache.default' => 'array', 'jwt.secret' => str_repeat('fact-major-test-', 8), 'jwt.blacklist_enabled' => false]);
        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        foreach (ContentUsageTest::migrations() as $file) {
            if ($file !== '2026_11_08_200000_associate_facts_with_majors.php') {
                Artisan::call('migrate', ['--path' => database_path('migrations/'.$file), '--realpath' => true]);
            }
        }
        $admin = User::create(['name' => 'Fact tests', 'email' => 'fact@example.test', 'password' => 'Local-test-123456!', 'role' => 'admin']);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($admin));
    }

    private function migration()
    {
        return require database_path('migrations/2026_11_08_200000_associate_facts_with_majors.php');
    }

    private function major(string $slug = 'physics'): Major
    {
        return Major::create(['name' => ucfirst($slug), 'slug' => $slug, 'is_active' => true]);
    }

    private function content(): array
    {
        return ['text_fr' => 'La lumière se propage.', 'text_en' => 'Light travels.', 'text_ar' => 'ينتشر الضوء.', 'source_url' => 'https://example.test/reference'];
    }

    public function test_backfill_preserves_ids_texts_timestamps_deleted_rows_and_usage_fingerprints(): void
    {
        $major = $this->major();
        $subject = Subject::create(['major_id' => $major->id, 'name' => 'Optics', 'slug' => 'optics', 'is_active' => true]);
        $fact = Fact::create($this->content() + ['subject_id' => $subject->id, 'is_verified' => true]);
        $hashes = [];
        foreach (Fingerprint::FACT_LANGUAGES as $lang) foreach (Fingerprint::FACT_VIDEO_TYPES as $type) {
            $hashes[$lang.$type] = Fingerprint::factVideo($fact, $lang, $type);
        }
        $fact->delete(); $subject->delete();
        $before = $fact->fresh()->getRawOriginal();
        $this->migration()->up();
        $stored = Fact::withTrashed()->findOrFail($fact->id);
        $this->assertSame($major->id, $stored->major_id);
        foreach ($before as $key => $value) {
            $this->assertSame($value, $stored->getRawOriginal($key));
        }
        foreach ($hashes as $key => $old) {
            [$lang, $type] = [substr($key, 0, 2), substr($key, 2)];
            $new = Fingerprint::factVideo($stored, $lang, $type);
            foreach (['identity_keys', 'fingerprint', 'source_hash'] as $field) $this->assertSame($old[$field], $new[$field]);
        }
        $this->assertNotNull($stored->deleted_at);
    }

    public function test_unmapped_fact_aborts_before_schema_change_and_major_only_rollback_refuses(): void
    {
        // Simulate an imported legacy row whose Subject FK had been disabled.
        Schema::disableForeignKeyConstraints();
        DB::table('facts')->insert($this->content() + ['subject_id' => 999]);
        Schema::enableForeignKeyConstraints();
        try { $this->migration()->up(); $this->fail('Expected explicit mapping error.'); }
        catch (\RuntimeException $e) { $this->assertStringContainsString('explicit Major mapping', $e->getMessage()); }
        $this->assertFalse(Schema::hasColumn('facts', 'major_id'));
    }

    public function test_major_only_create_edit_filter_validation_and_permissions(): void
    {
        $this->migration()->up(); $major = $this->major(); $other = $this->major('mathematics');
        $this->postJson('/api/v1/facts', $this->content())->assertUnprocessable()->assertJsonValidationErrors('major_id');
        $id = $this->postJson('/api/v1/facts', $this->content() + ['major_id' => $major->id])->assertCreated()
            ->assertJsonPath('data.major.id', $major->id)->assertJsonPath('data.is_verified', false)->json('data.id');
        $this->assertNull(Fact::findOrFail($id)->subject_id);
        $this->patchJson('/api/v1/facts/'.$id, ['major_id' => $other->id, 'text_ar' => 'ينتقل الضوء.'])->assertOk()
            ->assertJsonPath('data.major.id', $other->id)->assertJsonPath('data.text_fr', $this->content()['text_fr']);
        $this->getJson('/api/v1/facts?major_id='.$major->id)->assertOk()->assertJsonCount(0, 'data');
        $this->getJson('/api/v1/facts?major_id='.$other->id)->assertOk()->assertJsonPath('data.0.id', $id);
        $this->withHeader('Authorization', '')->postJson('/api/v1/facts', $this->content() + ['major_id' => $major->id])->assertUnauthorized();
        try { $this->migration()->down(); $this->fail('Rollback must preserve Major-only Facts.'); }
        catch (\RuntimeException $e) { $this->assertStringContainsString('Rollback refused', $e->getMessage()); }
        $this->assertNotNull(Fact::find($id));
    }

    public function test_import_and_shared_seeder_are_idempotent_without_any_subject(): void
    {
        $this->migration()->up(); $major = $this->major();
        $item = ['major_slug' => $major->slug, 'fr' => 'Un fait.', 'en' => 'A fact.', 'ar' => 'حقيقة.'];
        $this->postJson('/api/v1/facts/import', ['facts' => [$item]])->assertOk()->assertJsonPath('data.created', 1);
        $this->postJson('/api/v1/facts/import', ['default_major_id' => $major->id, 'facts' => [$item]])->assertOk()->assertJsonPath('data.skipped_duplicates', 1);
        $this->postJson('/api/v1/facts/import', ['default_major_id' => $major->id, 'facts' => [array_replace($item, ['major_slug' => 'missing'])]])->assertOk()->assertJsonPath('data.created', 0)->assertJsonCount(1, 'data.errors');
        $seeder = new class extends \Illuminate\Database\Seeder {
            use \Database\Seeders\ImportsFacts;
            public function seedFixture(array $items): void { $this->importFacts($items); }
        };
        $command = \Mockery::mock(\Illuminate\Console\Command::class);
        $command->shouldReceive('info')->twice();
        $seeder->setCommand($command);
        $seeder->seedFixture([$item]); $seeder->seedFixture([$item]);
        $this->assertSame(1, Fact::count());
        $this->assertSame($major->id, Fact::first()->major_id);
        $this->assertSame(0, Subject::count());
        Fact::first()->update(['is_verified' => true]);
        $selection = app(\App\Services\SocialFactSelector::class)->select($major->id, 1);
        $this->assertSame($major->id, $selection[0]['major_id']);
        $this->getJson('/api/v1/facts/stats')->assertOk()->assertJsonPath('data.0.total', 1)->assertJsonPath('data.0.available', 1);
        $this->postJson('/api/v1/social-packs/confirm', ['items' => [[
            'post_date' => '2026-11-08', 'format' => 'fact_short', 'major_id' => $major->id, 'fact_id' => Fact::first()->id,
        ]]])->assertOk()->assertJsonPath('data.created', 1);
    }

    public function test_mixed_legacy_topics_use_localized_major_and_retained_documents_still_authorize(): void
    {
        $major = $this->major(); $ids = [];
        foreach (['optics', 'mechanics'] as $topic) {
            $subject = Subject::create(['major_id' => $major->id, 'name' => $topic, 'slug' => $topic, 'is_active' => false]);
            $fact = Fact::create(array_replace($this->content(), ['subject_id' => $subject->id,
                'text_fr' => 'Fait '.$topic, 'text_en' => 'Fact '.$topic, 'text_ar' => 'حقيقة '.$topic, 'is_verified' => true]));
            $ids[] = $fact->id;
        }
        $this->migration()->up();
        foreach (['fr' => 'Physique', 'en' => 'Physics', 'ar' => 'الفيزياء'] as $lang => $label) {
            foreach (['facts-short', 'facts-long'] as $type) {
                $doc = $this->postJson('/api/v1/facts-video/export', ['major_id' => $major->id, 'language' => $lang, 'profile' => $type, 'count' => 2])->assertOk()
                    ->assertJsonPath('data.major.name', $label)->assertJsonCount(2, 'data.facts')->json('data');
                $this->assertArrayNotHasKey('subject_id', $doc['facts'][0]);
                $this->assertCount(2, app(Sources::class)->render($doc)['sources']);
                // Old approved snapshots remain valid without depending on the Subject.
                $doc['facts'][0] += ['subject_id' => 999, 'subject_name' => 'Legacy label'];
                $this->assertCount(2, app(Sources::class)->render($doc)['sources']);
                $doc['major']['id'] = 999;
                try { app(Sources::class)->render($doc); $this->fail('Cross-Major source accepted.'); }
                catch (\Symfony\Component\HttpKernel\Exception\HttpException $e) { $this->assertSame(422, $e->getStatusCode()); }
            }
        }
        $subject->forceDelete();
        $this->assertSame(2, Fact::count());
        $this->assertNull(Fact::find($ids[1])->subject_id);
        $this->getJson('/api/v1/facts-video/options')->assertOk()->assertJsonPath('data.0.available.fr', 2);
    }
}
