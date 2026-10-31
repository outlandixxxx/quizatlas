<?php

namespace Tests\Feature;

use App\Models\Concours;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use App\Models\User;
use Database\Seeders\ConcoursCategorySeeder;
use Tests\ConcoursTestCase;

class ConcoursDirectoryTest extends ConcoursTestCase
{
    private function category(array $overrides = []): ConcoursCategory
    {
        return ConcoursCategory::create($overrides + ['slug' => 'education', 'name_fr' => 'Éducation', 'name_ar' => 'التعليم', 'is_active' => true, 'display_order' => 0]);
    }

    private function definition(ConcoursCategory $category, array $overrides = []): Concours
    {
        return Concours::create($overrides + ['category_id' => $category->id, 'slug' => 'test-concours', 'name_fr' => 'Concours de test', 'name_ar' => 'مباراة تجريبية', 'description_fr' => 'Description française.', 'type' => 'recruitment', 'is_active' => true]);
    }

    private function loginAsRole(string $role): void
    {
        $user = User::create(['name' => 'Test account', 'email' => $role.'@example.test', 'username' => 'test'.$role, 'password' => 'OnlyForIsolatedTests123!', 'role' => $role]);
        $this->withHeader('Authorization', 'Bearer '.auth('api')->login($user));
    }

    public function test_roots_are_idempotent_and_do_not_create_official_content(): void
    {
        $this->seed(ConcoursCategorySeeder::class);
        $first = ConcoursCategory::first();
        $first->update(['is_active' => false, 'name_fr' => 'Edited by administrator']);
        $this->seed(ConcoursCategorySeeder::class);
        $this->assertSame(6, ConcoursCategory::whereNull('parent_id')->count());
        $this->assertSame('Edited by administrator', $first->fresh()->name_fr);
        $this->assertFalse($first->fresh()->is_active);
        $this->assertSame(0, Concours::count());
        $this->assertSame(0, ConcoursInstitution::count());
    }

    public function test_public_directory_works_empty_and_validates_filters(): void
    {
        foreach (['concours', 'concours-categories', 'concours-institutions'] as $endpoint) {
            $this->getJson('/api/v1/public/'.$endpoint)->assertOk()->assertJsonPath('data.items', [])->assertJsonPath('data.meta.total', 0);
        }
        foreach (['per_page=1000', 'page=0', 'type=unknown', 'q='.str_repeat('a', 201), 'category_id=invalid'] as $query) {
            $this->getJson('/api/v1/public/concours?'.$query)->assertUnprocessable();
        }
    }

    public function test_public_visibility_includes_ancestors_and_institution_and_filters_descendants(): void
    {
        $root = $this->category();
        $child = $this->category(['slug' => 'teaching', 'parent_id' => $root->id]);
        $visible = $this->definition($child);
        $this->definition($root, ['slug' => 'inactive', 'is_active' => false]);
        $institution = ConcoursInstitution::create(['slug' => 'test-institution', 'name_fr' => 'Institut de test', 'name_ar' => 'معهد تجريبي', 'is_active' => false]);
        $this->definition($root, ['slug' => 'hidden-institution', 'institution_id' => $institution->id]);
        $this->getJson('/api/v1/public/concours?category_id='.$root->id.'&q=CONCOURS&type=recruitment&per_page=1')
            ->assertOk()->assertJsonPath('data.meta.total', 1)->assertJsonPath('data.items.0.id', $visible->id);
        $this->getJson('/api/v1/public/concours/test-concours')->assertOk()->assertJsonPath('data.name_ar', 'مباراة تجريبية');
        foreach (['inactive', 'hidden-institution', 'missing'] as $slug) {
            $this->getJson('/api/v1/public/concours/'.$slug)->assertNotFound();
        }
        $this->getJson('/api/v1/public/concours-institutions')->assertJsonPath('data.items', []);
        $root->update(['is_active' => false]);
        $this->getJson('/api/v1/public/concours')->assertJsonPath('data.items', []);
        $this->getJson('/api/v1/public/concours-categories')->assertJsonPath('data.items', []);
        $this->getJson('/api/v1/public/concours/test-concours')->assertNotFound();
    }

    public function test_sitemap_contains_only_visible_concours(): void
    {
        $root = $this->category();
        $this->definition($root);
        $this->definition($root, ['slug' => 'hidden-concours', 'is_active' => false]);
        $this->get('/sitemap.xml')->assertOk()->assertSee('https://maroquiz.com/concours/test-concours', false)->assertDontSee('hidden-concours');
        $root->update(['is_active' => false]);
        $this->get('/sitemap.xml')->assertDontSee('/concours/test-concours', false);
    }

    public function test_guests_cannot_access_any_admin_operation(): void
    {
        foreach (['categories', 'institutions', 'concours'] as $kind) {
            $url = '/api/v1/admin/concours-directory/'.$kind;
            $this->getJson($url)->assertUnauthorized();
            $this->getJson($url.'/1')->assertUnauthorized();
            $this->postJson($url, [])->assertUnauthorized();
            $this->putJson($url.'/1', [])->assertUnauthorized();
            $this->deleteJson($url.'/1')->assertUnauthorized();
        }
    }

    public function test_users_and_managers_cannot_manage_directory(): void
    {
        foreach (['user', 'manager'] as $role) {
            $this->loginAsRole($role);
            foreach (['categories', 'institutions', 'concours'] as $kind) {
                $url = '/api/v1/admin/concours-directory/'.$kind;
                $this->getJson($url)->assertForbidden();
                $this->postJson($url, [])->assertForbidden();
                $this->putJson($url.'/1', [])->assertForbidden();
                $this->deleteJson($url.'/1')->assertForbidden();
            }
        }
    }

    public function test_admin_crud_validation_and_referenced_records(): void
    {
        $this->loginAsRole('admin');
        $base = '/api/v1/admin/concours-directory/';
        $root = $this->postJson($base.'categories', ['slug' => 'education', 'name_fr' => 'Éducation', 'name_ar' => 'التعليم', 'display_order' => 0, 'is_active' => true])
            ->assertCreated()->json('data');
        $this->postJson($base.'categories', $root)->assertUnprocessable()->assertJsonValidationErrors('slug');
        $this->putJson($base.'categories/'.$root['id'], array_replace($root, ['parent_id' => (string) $root['id']]))->assertUnprocessable();
        $child = $this->postJson($base.'categories', ['slug' => 'teaching', 'name_fr' => 'Enseignement', 'name_ar' => 'التدريس', 'display_order' => 1, 'is_active' => true, 'parent_id' => $root['id']])->assertCreated()->json('data');
        $this->putJson($base.'categories/'.$root['id'], array_replace($root, ['parent_id' => $child['id']]))->assertUnprocessable();
        $this->deleteJson($base.'categories/'.$root['id'])->assertConflict();
        $institution = ['slug' => 'test-institution', 'name_fr' => 'Institut de test', 'name_ar' => 'معهد تجريبي', 'website_url' => 'https://example.test', 'is_active' => true];
        $this->postJson($base.'institutions', array_replace($institution, ['website_url' => 'javascript:alert(1)']))->assertUnprocessable();
        $this->postJson($base.'institutions', array_replace($institution, ['website_url' => 'https://user:pass@example.test']))->assertUnprocessable();
        $institution = $this->postJson($base.'institutions', $institution)->assertCreated()->json('data');
        $payload = ['category_id' => $child['id'], 'institution_id' => $institution['id'], 'slug' => 'test-concours', 'name_fr' => 'Test', 'name_ar' => 'اختبار', 'type' => 'recruitment', 'exam_formats' => ['qcm', 'oral'], 'display_order' => 0, 'is_active' => true];
        $this->postJson($base.'concours', array_replace($payload, ['exam_formats' => ['essay-grading']]))->assertUnprocessable();
        $this->postJson($base.'concours', array_replace($payload, ['slug' => 'annonces']))->assertUnprocessable();
        $record = $this->postJson($base.'concours', $payload)->assertCreated()->assertJsonPath('data.category.id', $child['id'])->json('data');
        $this->deleteJson($base.'institutions/'.$institution['id'])->assertConflict();
        $this->deleteJson($base.'categories/'.$child['id'])->assertConflict();
        $this->putJson($base.'concours/'.$record['id'], array_replace($payload, ['is_active' => false]))->assertOk()->assertJsonPath('data.is_active', false);
        $this->getJson($base.'concours?is_active=0')->assertOk()->assertJsonPath('data.meta.total', 1);
        $this->getJson($base.'concours/'.$record['id'])->assertOk();
        $this->deleteJson($base.'concours/'.$record['id'])->assertOk();
        $this->deleteJson($base.'categories/'.$child['id'])->assertOk();
        $this->deleteJson($base.'categories/'.$root['id'])->assertOk();
        $this->deleteJson($base.'institutions/'.$institution['id'])->assertOk();
    }
}
