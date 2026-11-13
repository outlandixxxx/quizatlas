<?php

namespace App\Services;

use App\Http\Resources\VideoLibraryEntryResource;
use App\Models\VideoLibraryEntry;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use InvalidArgumentException;

class VideoLibraryService
{
    public function __construct(private readonly YouTubeLibraryMetadata $metadata) {}

    public static function classificationRules(bool $required = true): array
    {
        $presence = $required ? 'required' : 'sometimes';

        return [
            'format' => [$presence, Rule::in(VideoLibraryEntry::FORMATS)],
            'category' => [$presence, Rule::in(VideoLibraryEntry::CATEGORIES)],
            'template' => [$presence, Rule::in(VideoLibraryEntry::TEMPLATES)],
            'language' => [$presence, Rule::in(VideoLibraryEntry::LANGUAGES)],
            'status' => [$presence, Rule::in(VideoLibraryEntry::STATUSES)],
        ];
    }

    public function listing(array $filters, bool $admin = false): array
    {
        $query = VideoLibraryEntry::query();
        if (! $admin) {
            $query->published();
        } elseif (! empty($filters['status'])) {
            $query->where('status', $filters['status']);
        }
        foreach (['format', 'category', 'template', 'language'] as $field) {
            if (! empty($filters[$field])) {
                $query->where($field, $filters[$field]);
            }
        }
        if (($search = trim($filters['q'] ?? '')) !== '') {
            $literal = str_replace(['!', '%', '_'], ['!!', '!%', '!_'], mb_strtolower($search));
            $query->whereRaw("LOWER(title) LIKE ? ESCAPE '!'", ['%'.$literal.'%']);
        }
        $page = $query->orderByRaw('published_at IS NULL')->orderByDesc('published_at')->orderByDesc('id')
            ->paginate((int) ($filters['per_page'] ?? 12), ['*'], 'page', (int) ($filters['page'] ?? 1));

        return ['items' => $page->getCollection()->map(fn ($entry) => $this->resource($entry))->all(),
            'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(),
                'per_page' => $page->perPage(), 'total' => $page->total()]];
    }

    public function review(array $urls, array $defaults): array
    {
        $rows = [];
        $seen = [];
        foreach ($urls as $index => $url) {
            $row = array_merge(['title' => '', 'format' => null, 'category' => null, 'template' => 'general', 'language' => null, 'status' => 'draft'], $defaults,
                ['index' => $index, 'url' => $url, 'existing' => null, 'errors' => []]);
            try {
                $id = YouTubeVideoUrl::id($url);
                $row['youtube_id'] = $id;
                $row['duplicate_in_batch'] = isset($seen[$id]);
                $seen[$id] = true;
            } catch (InvalidArgumentException $exception) {
                $row['errors']['url'] = [$exception->getMessage()];
            }
            $rows[] = $row;
        }
        $metadata = $this->metadata->fetch(array_keys($seen));
        $existing = VideoLibraryEntry::whereIn('youtube_id', array_keys($seen))->get()->keyBy('youtube_id');
        foreach ($rows as &$row) {
            if (! isset($row['youtube_id'])) {
                continue;
            }
            $id = $row['youtube_id'];
            $row['title'] = $metadata[$id]['title'] ?? '';
            $row['metadata_error'] = $metadata[$id]['error'] ?? null;
            if (isset($existing[$id])) {
                $row['existing'] = $this->resource($existing[$id]);
            }
        }
        unset($row);

        return ['rows' => $rows];
    }

    public function import(array $rows): array
    {
        $results = [];
        foreach ($rows as $index => $row) {
            $row = array_replace(['status' => 'draft', 'template' => 'general'], $row);
            $validator = Validator::make($row, array_merge(self::classificationRules(), [
                'url' => ['required', 'string', 'max:2048'], 'title' => ['required', 'string', 'max:250'],
            ]));
            if ($validator->fails()) {
                $results[] = ['index' => $index, 'status' => 'invalid', 'errors' => $validator->errors()->messages()];
                continue;
            }
            try {
                $id = YouTubeVideoUrl::id($row['url']);
            } catch (InvalidArgumentException $exception) {
                $results[] = ['index' => $index, 'status' => 'invalid', 'errors' => ['url' => [$exception->getMessage()]]];
                continue;
            }
            $values = $validator->validated();
            unset($values['url']);
            $values['title'] = trim($values['title']);
            if ($values['title'] === '') {
                $results[] = ['index' => $index, 'status' => 'invalid', 'errors' => ['title' => ['Enter a video title.']]];
                continue;
            }
            // Optional API metadata stays in the expiring cache, never in persistent records.
            $values['published_at'] = $values['status'] === 'published' ? now() : null;
            // createOrFirst catches the UNIQUE violation inside a savepoint and reads the
            // winning row. Concurrent submissions never update/publish an existing entry.
            try {
                $entry = VideoLibraryEntry::query()->createOrFirst(['youtube_id' => $id], $values);
            } catch (QueryException) {
                $results[] = ['index' => $index, 'status' => 'invalid', 'errors' => ['row' => ['Video could not be saved. Retry this row.']]];
                continue;
            }
            $results[] = ['index' => $index, 'status' => $entry->wasRecentlyCreated ? 'created' : 'existing',
                'video' => $this->resource($entry), 'errors' => []];
        }

        return ['rows' => $results];
    }

    public function update(VideoLibraryEntry $entry, array $values): VideoLibraryEntry
    {
        return DB::transaction(function () use ($entry, $values) {
            $record = VideoLibraryEntry::whereKey($entry->id)->lockForUpdate()->firstOrFail();
            $values['title'] = trim($values['title']);
            if ($values['status'] === 'published') {
                $values['published_at'] = $record->published_at ?? now();
            } else {
                $values['published_at'] = null;
            }
            $record->update($values);

            return $record->fresh();
        });
    }

    public function resource(VideoLibraryEntry $entry): array
    {
        return (new VideoLibraryEntryResource($entry))->resolve(request());
    }
}
