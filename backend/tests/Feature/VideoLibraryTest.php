<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\VideoLibraryEntry;
use App\Services\YouTubeVideoUrl;
use Illuminate\Database\QueryException;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ThrottleRequestsWithRedis;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use Tests\TestCase;

class VideoLibraryTest extends TestCase
{
    private const ADMIN = '/api/v1/admin/video-library';
    private const PUBLIC = '/api/v1/public/videos';
    private const ID = 'dQw4w9WgXcQ';

    public function createApplication()
    {
        $old = [];
        foreach (['APP_ROUTES_CACHE', 'APP_CONFIG_CACHE'] as $key) {
            $old[$key] = [$_ENV[$key] ?? null, $_SERVER[$key] ?? null];
            $_ENV[$key] = $_SERVER[$key] = '/tmp/maroquiz-video-library-no-'.strtolower($key).'.php';
        }
        try {
            $app = parent::createApplication();
        } finally {
            foreach ($old as $key => [$env, $server]) {
                if ($env === null) { unset($_ENV[$key]); } else { $_ENV[$key] = $env; }
                if ($server === null) { unset($_SERVER[$key]); } else { $_SERVER[$key] = $server; }
            }
        }
        $app['config']->set(['app.env' => 'testing', 'database.default' => 'sqlite',
            'database.connections.sqlite.database' => ':memory:', 'database.connections.sqlite.url' => null,
            'cache.default' => 'array', 'jwt.secret' => str_repeat('video-library-test-', 4), 'jwt.blacklist_enabled' => false,
            'services.youtube.api_key' => null]);

        return $app;
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->assertSame('sqlite', DB::connection()->getDriverName());
        $this->assertSame(':memory:', DB::connection()->getDatabaseName());
        $this->withoutMiddleware([ThrottleRequests::class, ThrottleRequestsWithRedis::class]);
        // Only these two new in-memory tables; never touch the local educational DB.
        (require database_path('migrations/0001_01_01_000000_create_users_table.php'))->up();
        (require database_path('migrations/2026_11_13_000000_create_video_library_entries.php'))->up();
        Http::preventStrayRequests();
    }

    private function login(string $role = 'admin'): void
    {
        $user = User::create(['name' => 'Library '.$role, 'email' => $role.'@example.test', 'password' => 'TestOnly123!', 'role' => $role]);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    private function row(array $replace = []): array
    {
        return array_replace(['url' => 'https://youtu.be/'.self::ID, 'title' => 'Une vidéo réelle', 'format' => 'short',
            'category' => 'quiz', 'template' => 'niveau-concours', 'language' => 'fr', 'status' => 'draft'], $replace);
    }

    private function entry(array $replace = []): VideoLibraryEntry
    {
        $values = $this->row($replace);
        unset($values['url']);

        return VideoLibraryEntry::create(array_merge(['youtube_id' => self::ID], $values));
    }

    public function test_admin_endpoints_require_authentication_and_admin_role(): void
    {
        $entry = $this->entry();
        $requests = [['GET', ''], ['POST', '/review'], ['POST', '/import'],
            ['PUT', '/'.$entry->id], ['DELETE', '/'.$entry->id], ['PUT', '/999999'], ['DELETE', '/999999']];
        foreach ($requests as [$verb, $suffix]) {
            $this->json($verb, self::ADMIN.$suffix)->assertUnauthorized();
        }
        $this->login('user');
        foreach ($requests as [$verb, $suffix]) {
            $this->json($verb, self::ADMIN.$suffix)->assertForbidden();
        }
        $this->assertSame(1, VideoLibraryEntry::count());
        $this->assertSame('Une vidéo réelle', $entry->fresh()->title);
        $this->assertSame('draft', $entry->fresh()->status);
    }

    public function test_url_normalization_accepts_official_equivalent_forms(): void
    {
        foreach ([
            'https://www.youtube.com/watch?v='.self::ID.'&list=abc',
            'https://youtu.be/'.self::ID.'?si=abc',
            'https://youtube.com/shorts/'.self::ID,
            'https://m.youtube.com/watch?v='.self::ID,
            'https://www.youtube.com/embed/'.self::ID,
            'https://www.youtube-nocookie.com/embed/'.self::ID,
        ] as $url) {
            $this->assertSame(self::ID, YouTubeVideoUrl::id($url));
        }
    }

    public function test_url_parser_rejects_ambiguous_and_non_youtube_urls(): void
    {
        foreach ([
            'https://youtube.com.evil.test/watch?v='.self::ID, 'https://evil.test/youtu.be/'.self::ID,
            'https://youtube.com@evil.test/watch?v='.self::ID, 'https://user@youtube.com/watch?v='.self::ID,
            'https://youtu.be:443/'.self::ID, 'file:///'.self::ID, '//youtube.com/watch?v='.self::ID,
            'https://youtube.com/watch?v=short', 'https://youtube.com/watch?v[]=x',
            'https://youtube.com/watch?v='.self::ID.'&v=abcdefghijk',
            'https://youtube.com/shorts/'.self::ID.'/extra', 'https://youtu.be/%64Qw4w9WgXcQ',
            'https://www.youtube-nocookie.com/watch?v='.self::ID,
            "https://youtu.be/".self::ID."\n.evil.test", 'https://youtu.be\\@evil.test/'.self::ID,
        ] as $url) {
            try {
                YouTubeVideoUrl::id($url);
                $this->fail('Accepted unsafe URL: '.$url);
            } catch (InvalidArgumentException) {
                $this->assertTrue(true);
            }
        }
        Http::assertNothingSent();
    }

    public function test_review_preserves_rows_errors_defaults_and_existing_matches_without_a_key(): void
    {
        $existing = $this->entry();
        $this->login();
        $this->postJson(self::ADMIN.'/review', ['urls' => ['https://youtu.be/'.self::ID, 'https://evil.test/video', 'https://youtube.com/shorts/'.self::ID],
            'defaults' => ['format' => 'long', 'category' => 'facts', 'template' => 'general', 'language' => 'ar', 'status' => 'draft']])
            ->assertOk()->assertJsonCount(3, 'data.rows')
            ->assertJsonPath('data.rows.0.youtube_id', self::ID)->assertJsonPath('data.rows.0.existing.id', $existing->id)
            ->assertJsonPath('data.rows.0.metadata_error', 'metadata_not_configured')
            ->assertJsonPath('data.rows.0.language', 'ar')->assertJsonPath('data.rows.0.format', 'long')
            ->assertJsonPath('data.rows.1.url', 'https://evil.test/video')->assertJsonStructure(['data' => ['rows' => [1 => ['errors' => ['url']]]]])
            ->assertJsonPath('data.rows.2.duplicate_in_batch', true);
        $this->assertSame(1, VideoLibraryEntry::count());
        Http::assertNothingSent();
    }

    public function test_import_is_idempotent_and_reports_each_invalid_row(): void
    {
        $this->login();
        $response = $this->postJson(self::ADMIN.'/import', ['rows' => [
            $this->row(), $this->row(['url' => 'https://www.youtube.com/watch?v='.self::ID, 'title' => 'Must not overwrite', 'status' => 'published']),
            $this->row(['url' => 'https://evil.test/watch?v='.self::ID]), $this->row(['title' => '', 'language' => 'de']),
        ]])->assertOk()->assertJsonPath('data.rows.0.status', 'created')->assertJsonPath('data.rows.1.status', 'existing')
            ->assertJsonPath('data.rows.2.status', 'invalid')->assertJsonPath('data.rows.3.status', 'invalid');
        $this->assertSame($response->json('data.rows.0.video.id'), $response->json('data.rows.1.video.id'));
        $this->assertSame(1, VideoLibraryEntry::count());
        $this->assertSame('Une vidéo réelle', VideoLibraryEntry::sole()->title);
        $this->assertSame('draft', VideoLibraryEntry::sole()->status);
        $this->postJson(self::ADMIN.'/import', ['rows' => [$this->row()]])->assertJsonPath('data.rows.0.status', 'existing');
    }

    public function test_database_unique_constraint_is_the_final_duplicate_boundary(): void
    {
        $this->entry();
        try {
            $this->entry();
            $this->fail('Missing database UNIQUE boundary.');
        } catch (QueryException $exception) {
            $this->assertStringContainsString('UNIQUE', strtoupper($exception->getMessage()));
        }
        $this->assertSame(1, VideoLibraryEntry::count());
    }

    public function test_publication_editing_and_library_only_deletion_are_explicit(): void
    {
        $entry = $this->entry();
        $this->getJson(self::PUBLIC)->assertOk()->assertJsonPath('data.meta.total', 0);
        $this->login();
        $values = $this->row(['title' => 'المراجعة بالعربية', 'language' => 'ar', 'status' => 'published']);
        unset($values['url']);
        $this->putJson(self::ADMIN.'/'.$entry->id, $values)->assertOk()->assertJsonPath('data.title', 'المراجعة بالعربية');
        $this->getJson(self::PUBLIC)->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.language', 'ar');
        $this->putJson(self::ADMIN.'/'.$entry->id, array_merge($values, ['youtube_id' => 'abcdefghijk']))->assertUnprocessable();
        $this->putJson(self::ADMIN.'/'.$entry->id, array_merge($values, ['status' => 'draft']))->assertOk()->assertJsonPath('data.published_at', null);
        $this->getJson(self::PUBLIC)->assertJsonPath('data.meta.total', 0);
        $this->deleteJson(self::ADMIN.'/'.$entry->id)->assertOk();
        $this->assertSame(0, VideoLibraryEntry::count());
        $this->assertSame(1, User::count());
    }

    public function test_public_filters_pagination_search_and_future_publications(): void
    {
        $this->entry(['status' => 'published', 'published_at' => now(), 'title' => 'Sciences 100% exact']);
        $this->entry(['youtube_id' => 'abcdefghijk', 'status' => 'published', 'published_at' => now(), 'format' => 'long', 'category' => 'facts', 'language' => 'en', 'template' => 'facts-long', 'title' => 'Science review']);
        $this->entry(['youtube_id' => 'lmnopqrstuv', 'status' => 'published', 'published_at' => now()->addDay()]);
        $this->entry(['youtube_id' => 'wxyzABCDEFG']);
        $this->getJson(self::PUBLIC.'?per_page=1')->assertJsonPath('data.meta.total', 2)->assertJsonPath('data.meta.last_page', 2)->assertJsonCount(1, 'data.items');
        $this->getJson(self::PUBLIC.'?per_page=1&page=2')->assertJsonPath('data.meta.current_page', 2)->assertJsonCount(1, 'data.items');
        $this->getJson(self::PUBLIC.'?format=long&category=facts&language=en&template=facts-long')->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.youtube_id', 'abcdefghijk');
        $this->getJson(self::PUBLIC.'?q='.urlencode('100%'))->assertJsonPath('data.meta.total', 1);
        $this->getJson(self::PUBLIC.'?q=missing')->assertJsonPath('data.meta.total', 0);
        $this->getJson(self::PUBLIC.'?status=draft')->assertJsonPath('data.meta.total', 2);
        $this->getJson(self::PUBLIC.'?per_page=25')->assertUnprocessable();
        $this->getJson(self::PUBLIC.'?format=unknown')->assertUnprocessable();
        $this->getJson(self::PUBLIC.'/options')->assertJsonFragment(['templates' => VideoLibraryEntry::TEMPLATES]);
    }

    public function test_official_metadata_is_one_bounded_cached_request_and_never_overrides_classification(): void
    {
        config(['services.youtube.api_key' => 'test-key']);
        Http::fake(['www.googleapis.com/youtube/v3/videos*' => Http::response(['items' => [[
            'id' => self::ID, 'snippet' => ['title' => 'Official &amp; safe title'],
            'contentDetails' => ['duration' => 'PT1M23S'], 'status' => ['embeddable' => false],
        ]]], 200)]);
        $this->login();
        $body = ['urls' => ['https://youtu.be/'.self::ID, 'https://youtube.com/shorts/'.self::ID], 'defaults' => ['format' => 'long', 'language' => 'en']];
        $this->postJson(self::ADMIN.'/review', $body)->assertOk()->assertJsonPath('data.rows.0.title', 'Official & safe title')
            ->assertJsonPath('data.rows.0.format', 'long')->assertJsonPath('data.rows.0.language', 'en');
        $this->postJson(self::ADMIN.'/review', $body)->assertOk();
        Http::assertSentCount(1);
        Http::assertSent(fn ($request) => str_starts_with($request->url(), 'https://www.googleapis.com/youtube/v3/videos?') && $request['id'] === self::ID);
        $this->postJson(self::ADMIN.'/import', ['rows' => [$this->row(['title' => 'Editorial title', 'status' => 'published'])]])
            ->assertOk()->assertJsonPath('data.rows.0.video.duration_seconds', 83)->assertJsonPath('data.rows.0.video.embeddable', false)
            ->assertJsonPath('data.rows.0.video.metadata_source', 'youtube-data-api-v3');
        $this->travel(31)->days();
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items.0.duration_seconds', null)->assertJsonPath('data.items.0.embeddable', null)
            ->assertJsonPath('data.items.0.title', 'Editorial title');
    }

    public function test_metadata_redirect_or_failure_keeps_manual_entry_usable_and_credentials_private(): void
    {
        config(['services.youtube.api_key' => 'private-test-key']);
        Http::fake(['www.googleapis.com/youtube/v3/videos*' => Http::response('', 302, ['Location' => 'https://evil.test/key'])]);
        $this->login();
        $response = $this->postJson(self::ADMIN.'/review', ['urls' => ['https://youtu.be/'.self::ID]])
            ->assertOk()->assertJsonPath('data.rows.0.metadata_error', 'metadata_unavailable');
        $this->assertStringNotContainsString('private-test-key', $response->getContent());
        $this->postJson(self::ADMIN.'/import', ['rows' => [$this->row()]])->assertOk()->assertJsonPath('data.rows.0.status', 'created');
        Http::assertSentCount(1);
    }

    public function test_thumbnail_proxy_is_published_only_cached_and_never_uses_entered_urls(): void
    {
        $entry = $this->entry();
        $jpeg = "\xff\xd8\xff\xe0safe-image\xff\xd9";
        Http::fake(['https://i.ytimg.com/vi/'.self::ID.'/hqdefault.jpg' => Http::response($jpeg, 200, ['Content-Type' => 'image/jpeg'])]);
        $this->get(self::PUBLIC.'/'.$entry->id.'/thumbnail')->assertNotFound();
        Http::assertNothingSent();
        $entry->update(['status' => 'published', 'published_at' => now()]);
        $this->getJson(self::PUBLIC)->assertJsonPath('data.items.0.thumbnail_url', self::PUBLIC.'/'.$entry->id.'/thumbnail');
        $this->get(self::PUBLIC.'/'.$entry->id.'/thumbnail')->assertOk()->assertHeader('Content-Type', 'image/jpeg')->assertContent($jpeg);
        $this->get(self::PUBLIC.'/'.$entry->id.'/thumbnail')->assertOk();
        Http::assertSentCount(1);
        $entry->update(['status' => 'draft']);
        $this->get(self::PUBLIC.'/'.$entry->id.'/thumbnail')->assertNotFound();
        Http::assertSentCount(1);
    }

    public function test_thumbnail_proxy_rejects_redirects_non_jpeg_and_oversized_bodies(): void
    {
        $entry = $this->entry(['status' => 'published', 'published_at' => now()]);
        Http::fake(['i.ytimg.com/*' => Http::sequence()
            ->push('', 302, ['Location' => 'https://evil.test'])
            ->push('<svg/>', 200, ['Content-Type' => 'image/svg+xml'])
            ->push("\xff\xd8\xffdata", 200, ['Content-Type' => 'image/jpeg', 'Content-Length' => '1048577'])
            ->push(str_repeat('x', 1048577), 200, ['Content-Type' => 'image/jpeg'])]);
        for ($attempt = 0; $attempt < 4; $attempt++) {
            Cache::flush();
            $this->get(self::PUBLIC.'/'.$entry->id.'/thumbnail')->assertStatus(503);
        }
    }

    public function test_bulk_bounds_and_classification_validation(): void
    {
        $this->login();
        $this->postJson(self::ADMIN.'/review', ['urls' => array_fill(0, 51, 'https://youtu.be/'.self::ID)])->assertUnprocessable();
        $this->postJson(self::ADMIN.'/import', ['rows' => array_fill(0, 51, $this->row())])->assertUnprocessable();
        $this->postJson(self::ADMIN.'/import', ['rows' => [$this->row(['format' => 'other', 'category' => 'other', 'template' => 'unsafe', 'status' => 'archived'])]])
            ->assertOk()->assertJsonPath('data.rows.0.status', 'invalid');
        $this->assertSame(0, VideoLibraryEntry::count());
    }
}
