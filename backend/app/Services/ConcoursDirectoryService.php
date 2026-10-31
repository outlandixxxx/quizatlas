<?php

namespace App\Services;

use App\Http\Resources\ConcoursCategoryResource;
use App\Http\Resources\ConcoursInstitutionResource;
use App\Http\Resources\ConcoursResource;
use App\Models\Concours;
use App\Models\ConcoursCategory;
use App\Models\ConcoursInstitution;
use Illuminate\Database\Eloquent\Builder;

class ConcoursDirectoryService
{
    public function model(string $kind): string
    {
        return match ($kind) {
            'categories' => ConcoursCategory::class,
            'institutions' => ConcoursInstitution::class,
            'concours' => Concours::class,
        };
    }

    public function resource(string $kind): string
    {
        return match ($kind) {
            'categories' => ConcoursCategoryResource::class,
            'institutions' => ConcoursInstitutionResource::class,
            'concours' => ConcoursResource::class,
        };
    }

    public function listing(string $kind, array $filters, bool $public = true): array
    {
        $query = $this->model($kind)::query();
        if ($kind === 'concours') {
            $query->with(['category', 'institution', 'sessionAnnouncements', 'archivedSessionAnnouncements']);
            if (! $public) {
                $query->with('preparationOptions');
            }
            if ($filters['type'] ?? null) {
                $query->where('type', $filters['type']);
            }
            if ($filters['category_id'] ?? null) {
                // Selecting a category includes its descendants.
                $ids = [(int) $filters['category_id']];
                $nodes = ConcoursCategory::all(['id', 'parent_id']);
                do {
                    $before = count($ids);
                    $ids = array_values(array_unique(array_merge($ids, $nodes->whereIn('parent_id', $ids)->pluck('id')->all())));
                } while (count($ids) > $before);
                $query->whereIn('category_id', $ids);
            }
            if ($filters['institution_id'] ?? null) {
                $query->where('institution_id', $filters['institution_id']);
            }
        }
        if ($kind === 'categories') {
            if ($filters['roots'] ?? false) {
                $query->whereNull('parent_id');
            }
            if ($filters['parent_id'] ?? null) {
                $query->where('parent_id', $filters['parent_id']);
            }
        }
        if ($public) {
            $kind === 'institutions' ? $query->where('is_active', true) : $query->visible();
        } elseif (array_key_exists('is_active', $filters)) {
            $query->where('is_active', $filters['is_active']);
        }
        if ($search = trim($filters['q'] ?? '')) {
            $query->where(fn (Builder $q) => $q
                ->whereRaw('LOWER(name_fr) LIKE LOWER(?)', ['%'.$search.'%'])
                ->orWhere('name_ar', 'like', '%'.$search.'%')->orWhere('slug', 'like', '%'.$search.'%'));
        }
        if ($kind !== 'institutions') {
            $query->orderBy('display_order');
        }
        $page = $query->orderBy('id')->paginate($filters['per_page'] ?? 12);

        return [
            'items' => $this->resource($kind)::collection($page->items()),
            'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => $page->perPage(), 'total' => $page->total()],
        ];
    }
}
