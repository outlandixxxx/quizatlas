<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use App\Models\Major;
use App\Models\SocialPost;
use App\Services\SocialQuestionSelector;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class FactController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $data = $request->validate([
            'major_id' => ['nullable', 'integer', Rule::exists('majors', 'id')->whereNull('deleted_at')],
            'status' => ['nullable', Rule::in(['all', 'verified', 'unverified'])],
            'search' => ['nullable', 'string', 'max:200'],
            'per_page' => ['nullable', 'integer', 'min:5', 'max:100'],
        ]);

        $search = trim((string) ($data['search'] ?? ''));

        $facts = Fact::query()
            ->with('major:id,name,slug')
            ->when(! empty($data['major_id']), fn (Builder $query) => $query->where('major_id', $data['major_id']))
            ->when(
                ($data['status'] ?? 'all') === 'verified',
                fn (Builder $query) => $query->where('is_verified', true)
            )
            ->when(
                ($data['status'] ?? 'all') === 'unverified',
                fn (Builder $query) => $query->where('is_verified', false)
            )
            ->when($search !== '', function (Builder $query) use ($search) {
                $like = '%' . $search . '%';

                // ILIKE = case-insensitive search on PostgreSQL.
                $query->where(function (Builder $inner) use ($like) {
                    $inner->where('text_fr', 'ilike', $like)
                        ->orWhere('text_en', 'ilike', $like)
                        ->orWhere('text_ar', 'ilike', $like);
                });
            })
            ->orderByDesc('id')
            ->paginate((int) ($data['per_page'] ?? 25));

        return response()->json($facts);
    }

    /**
     * How many facts each Major has, and how many can still be published.
     */
    public function stats(): JsonResponse
    {
        $usedFactIds = SocialPost::query()
            ->whereNotNull('fact_id')
            ->distinct()
            ->pluck('fact_id')
            ->all();

        $rows = Major::query()
            ->orderBy('name')
            ->get(['id', 'name'])
            ->map(function (Major $major) use ($usedFactIds) {
                $base = Fact::query()->where('major_id', $major->id);

                return [
                    'major_id' => (int) $major->id,
                    'major_name' => $major->name,
                    'total' => (clone $base)->count(),
                    'verified' => (clone $base)->where('is_verified', true)->count(),
                    'available' => (clone $base)
                        ->where('is_verified', true)
                        ->when(
                            $usedFactIds !== [],
                            fn (Builder $query) => $query->whereNotIn('id', $usedFactIds)
                        )
                        ->count(),
                ];
            })
            ->values();

        return response()->json(['data' => $rows]);
    }

    /**
     * Imports facts generated outside the app (unverified by default).
     *
     * Body: {"default_major_id": 12, "facts": [
     *   {"major_slug": "computer-science-it", "fr": "...", "en": "...", "ar": "...", "source_url": "https://..."}
     * ]}
     */
    public function import(Request $request): JsonResponse
    {
        $data = $request->validate([
            'default_major_id' => ['nullable', 'integer', Rule::exists('majors', 'id')->whereNull('deleted_at')],
            'facts' => ['required', 'array', 'min:1', 'max:500'],
            'facts.*.major_id' => ['nullable', 'integer', Rule::exists('majors', 'id')->whereNull('deleted_at')],
            'facts.*.major_slug' => ['nullable', 'string', 'max:255'],
            'facts.*.fr' => ['required', 'string', 'max:1000'],
            'facts.*.en' => ['required', 'string', 'max:1000'],
            'facts.*.ar' => ['required', 'string', 'max:1000'],
            'facts.*.source_url' => ['nullable', 'url', 'max:1000'],
        ]);

        $slugs = collect($data['facts'])
            ->pluck('major_slug')
            ->filter()
            ->unique()
            ->values();

        $majorIdsBySlug = $slugs->isEmpty()
            ? collect()
            : Major::query()->whereIn('slug', $slugs)->pluck('id', 'slug');

        // Existing French texts per Major, to skip duplicates.
        $existingTexts = [];

        $created = 0;
        $skippedDuplicates = 0;
        $errors = [];

        DB::transaction(function () use (
            $data,
            $majorIdsBySlug,
            &$existingTexts,
            &$created,
            &$skippedDuplicates,
            &$errors
        ) {
            foreach ($data['facts'] as $index => $item) {
                if (!empty($item['major_slug']) && !$majorIdsBySlug->has($item['major_slug'])) {
                    $errors[] = ['index' => $index, 'message' => 'Unknown Major slug.'];
                    continue;
                }
                $majorId = $item['major_id']
                    ?? (isset($item['major_slug'])
                        ? $majorIdsBySlug->get($item['major_slug'])
                        : null)
                    ?? $data['default_major_id']
                    ?? null;

                if (! $majorId) {
                    $errors[] = [
                        'index' => $index,
                        'message' => 'Unknown Major: give major_id, a valid major_slug, or choose a default Major.',
                    ];
                    continue;
                }

                $majorId = (int) $majorId;

                if (! isset($existingTexts[$majorId])) {
                    $existingTexts[$majorId] = Fact::withTrashed()
                        ->where('major_id', $majorId)
                        ->pluck('text_fr')
                        ->map(fn ($text) => SocialQuestionSelector::normalizeText((string) $text))
                        ->flip()
                        ->all();
                }

                $normalized = SocialQuestionSelector::normalizeText($item['fr']);

                if ($normalized === '' || isset($existingTexts[$majorId][$normalized])) {
                    $skippedDuplicates++;
                    continue;
                }

                Fact::create([
                    'major_id' => $majorId,
                    'text_fr' => trim($item['fr']),
                    'text_en' => trim($item['en']),
                    'text_ar' => trim($item['ar']),
                    'source_url' => $item['source_url'] ?? null,
                    'is_verified' => false,
                ]);

                $existingTexts[$majorId][$normalized] = true;
                $created++;
            }
        });

        return response()->json([
            'data' => [
                'created' => $created,
                'skipped_duplicates' => $skippedDuplicates,
                'errors' => $errors,
            ],
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $data = $request->validate([
            'major_id' => ['required', 'integer', Rule::exists('majors', 'id')->whereNull('deleted_at')],
            'text_fr' => ['required', 'string', 'max:1000'],
            'text_en' => ['required', 'string', 'max:1000'],
            'text_ar' => ['required', 'string', 'max:1000'],
            'source_url' => ['nullable', 'url', 'max:1000'],
        ]);

        return response()->json(['data' => Fact::create($data + ['is_verified' => false])->load('major:id,name,slug')], 201);
    }

    public function update(Request $request, Fact $fact): JsonResponse
    {
        $data = $request->validate([
            'major_id' => ['sometimes', 'required', 'integer', Rule::exists('majors', 'id')->whereNull('deleted_at')],
            'text_fr' => ['sometimes', 'string', 'max:1000'],
            'text_en' => ['sometimes', 'string', 'max:1000'],
            'text_ar' => ['sometimes', 'string', 'max:1000'],
            'source_url' => ['sometimes', 'nullable', 'url', 'max:1000'],
            'is_verified' => ['sometimes', 'boolean'],
        ]);

        if (array_key_exists('is_verified', $data)) {
            $data['verified_at'] = $data['is_verified']
                ? ($fact->verified_at ?? now())
                : null;
        }

        $fact->update($data);

        return response()->json([
            'data' => $fact->fresh('major:id,name,slug'),
        ]);
    }

    /**
     * Verifies or un-verifies several facts at once.
     */
    public function verify(Request $request): JsonResponse
    {
        $data = $request->validate([
            'ids' => ['required', 'array', 'min:1', 'max:200'],
            'ids.*' => ['integer'],
            'verified' => ['required', 'boolean'],
        ]);

        $query = Fact::query()->whereIn('id', $data['ids']);

        $updated = $data['verified']
            ? $query->where('is_verified', false)->update([
                'is_verified' => true,
                'verified_at' => now(),
            ])
            : $query->update([
                'is_verified' => false,
                'verified_at' => null,
            ]);

        return response()->json(['data' => ['updated' => $updated]]);
    }

    public function destroy(Fact $fact): JsonResponse
    {
        $fact->delete();

        return response()->json(['data' => null]);
    }
}
