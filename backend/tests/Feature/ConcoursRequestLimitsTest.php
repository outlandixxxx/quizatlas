<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursCategory;
use Illuminate\Http\Middleware\TrustProxies;
use Illuminate\Http\Request;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ThrottleRequestsWithRedis;
use Illuminate\Support\Facades\Http;
use Tests\ConcoursTestCase;

class ConcoursRequestLimitsTest extends ConcoursTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        Http::preventStrayRequests();
        // ConcoursTestCase disables quotas for business tests; this suite tests the real quota.
        $this->withMiddleware([ThrottleRequests::class, ThrottleRequestsWithRedis::class]);
        $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.35']);
    }

    public function test_anonymous_limit_is_unchanged_and_forwarded_ip_spoofing_does_not_bypass_it(): void
    {
        TrustProxies::flushState();
        $this->travelTo(now()->startOfMinute()->addSeconds(5));
        for ($i = 1; $i <= 30; $i++) {
            $this->withHeaders(['X-Forwarded-For' => '203.0.113.'.$i, 'X-Real-IP' => '203.0.113.'.$i])
                ->getJson('/api/v1/public/concours-categories')->assertOk()->assertHeader('X-RateLimit-Limit', '30');
        }
        $response = $this->withHeaders(['X-Forwarded-For' => '203.0.113.200'])->getJson('/api/v1/public/concours-categories');
        $response->assertStatus(429)->assertHeader('Retry-After')->assertJsonPath('success', false);
        $this->assertGreaterThan(0, (int) $response->headers->get('Retry-After'));
        $this->assertStringContainsString('private', $response->headers->get('Cache-Control'));
        $this->assertSame([], Request::getTrustedProxies());
        $this->travel(61)->seconds();
        $this->getJson('/api/v1/public/concours-categories')->assertOk();
        Http::assertNothingSent();
    }

    public function test_distinct_direct_client_ips_have_independent_buckets_but_one_ssr_ip_shares_a_bucket(): void
    {
        $this->travelTo(now()->startOfMinute()->addSeconds(5));
        for ($i = 1; $i <= 30; $i++) {
            $this->getJson('/api/v1/public/concours')->assertOk();
        }
        $this->getJson('/api/v1/public/concours-announcements')->assertStatus(429);
        $this->withServerVariables(['REMOTE_ADDR' => '198.51.100.36'])
            ->getJson('/api/v1/public/concours')->assertOk();
        Http::assertNothingSent();
    }

    public function test_only_successful_public_metadata_allows_hydration_reuse_without_freshness_or_private_data(): void
    {
        $category = ConcoursCategory::create(['slug' => 'cache-fixture', 'name_fr' => 'Fixture', 'name_ar' => 'اختبار', 'is_active' => true]);
        Concours::create(['slug' => 'cache-fixture', 'name_fr' => 'Fixture', 'name_ar' => 'اختبار', 'category_id' => $category->id, 'type' => 'recruitment', 'is_active' => true]);
        foreach (['concours-categories', 'concours-institutions', 'concours', 'concours/cache-fixture', 'concours/cache-fixture/qcm', 'concours-announcements'] as $path) {
            $response = $this->getJson('/api/v1/public/'.$path)->assertOk();
            $this->assertSame('max-age=0, must-revalidate, public', $response->headers->get('Cache-Control'));
        }
        $missing = $this->getJson('/api/v1/public/concours-announcements/missing')->assertNotFound();
        $this->assertStringContainsString('private', $missing->headers->get('Cache-Control'));
        $private = $this->getJson('/api/v1/admin/concours-discovery/discoveries')->assertUnauthorized();
        $this->assertStringContainsString('private', $private->headers->get('Cache-Control'));
        Http::assertNothingSent();
    }
}
