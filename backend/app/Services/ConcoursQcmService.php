<?php

namespace App\Services;

use App\Models\Concours;
use App\Models\Major;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ConcoursQcmService
{
    public function majors(): Builder
    {
        return Major::query()->where('is_active', true);
    }

    public function subjects(): Builder
    {
        return Subject::query()->where('is_active', true)->whereHas('major', fn ($q) => $q->where('is_active', true));
    }

    public function quizzes(): Builder
    {
        return Quiz::query()->where('quizzes.is_active', true)->where('quizzes.duration', '>', 0)->where('quizzes.total_marks', '>', 0)
            ->whereHas('subject', fn ($q) => $q->where('is_active', true)->whereHas('major', fn ($m) => $m->where('is_active', true)))
            ->has('questions');
    }

    private function targets(string $kind): Builder
    {
        return match ($kind) {
            'majors' => $this->majors(),
            'subjects' => $this->subjects(),
            'quizzes' => $this->quizzes(),
        };
    }

    private function kind(string $kind): string
    {
        return match ($kind) {
            'majors' => 'major',
            'subjects' => 'subject',
            'quizzes' => 'quiz',
        };
    }

    private function page($page, callable $map): array
    {
        return ['items' => $page->getCollection()->map($map)->values(), 'meta' => [
            'current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => $page->perPage(), 'total' => $page->total()]];
    }

    public function candidates(string $kind, array $filters): array
    {
        $query = $this->targets($kind);
        $column = $kind === 'quizzes' ? 'title' : 'name';
        if ($search = trim($filters['q'] ?? '')) {
            $query->whereRaw('LOWER('.$column.') LIKE LOWER(?)', ['%'.$search.'%']);
        }
        if ($kind === 'quizzes') {
            $query->with('subject:id,name')->withCount('questions');
        }
        $page = $query->orderBy('id')->paginate($filters['per_page'] ?? 15, ['*'], 'page', $filters['page'] ?? 1);

        return $this->page($page, fn ($item) => ['id' => $item->id, 'title' => $item->{$column}, 'subject_name' => $kind === 'quizzes' ? $item->subject?->name : null]);
    }

    public function links(Concours $concours, string $kind, array $filters): array
    {
        $singular = $this->kind($kind);
        $table = 'concours_'.$singular.'_links';
        // Deleted/inactive targets stay manageable by admins, but never enter public results.
        $query = match ($kind) {
            'majors' => $concours->preparationMajors(),
            'subjects' => $concours->preparationSubjects()->withTrashed(),
            'quizzes' => $concours->preparationQuizzes()->withTrashed(),
        };
        $column = $kind === 'quizzes' ? 'title' : 'name';
        if ($search = trim($filters['q'] ?? '')) {
            $query->whereRaw('LOWER('.$column.') LIKE LOWER(?)', ['%'.$search.'%']);
        }
        $page = $query->orderBy($kind.'.id')->paginate($filters['per_page'] ?? 15, [$kind.'.*'], 'page', $filters['page'] ?? 1);
        $ids = $page->getCollection()->pluck('pivot.id');
        $options = DB::table('concours_'.$singular.'_link_options')->whereIn('link_id', $ids)->orderBy('preparation_option_id')->get()->groupBy('link_id');
        $available = $this->targets($kind)->whereIn('id', $page->getCollection()->pluck('id'))->pluck('id');

        return $this->page($page, fn ($item) => ['id' => $item->id, 'title' => $item->{$column}, 'version' => $item->pivot->version,
            'available' => $available->contains($item->id), 'preparation_option_ids' => ($options[$item->pivot->id] ?? collect())->pluck('preparation_option_id')->map(fn ($id) => (int) $id)->values()]);
    }

    public function save(Concours $concours, string $kind, int $target, array $data, bool $remove = false): void
    {
        DB::transaction(function () use ($concours, $kind, $target, $data, $remove) {
            Concours::lockForUpdate()->findOrFail($concours->id);
            $singular = $this->kind($kind);
            $table = 'concours_'.$singular.'_links';
            $link = DB::table($table)->where('concours_id', $concours->id)->where($singular.'_id', $target)->lockForUpdate()->first();
            abort_if((int) ($link?->version ?? 0) !== $data['version'], 409, 'This association changed. Refresh before saving.');
            if ($remove) {
                abort_unless($link, 404);
                DB::table($table)->where('id', $link->id)->delete();

                return;
            }
            if (! $this->targets($kind)->whereKey($target)->exists()) {
                throw ValidationException::withMessages(['target' => 'Choose an existing available major, subject or quiz.']);
            }
            $ids = $data['preparation_option_ids'];
            if ($concours->preparationOptions()->whereIn('id', $ids)->count() !== count($ids)) {
                throw ValidationException::withMessages(['preparation_option_ids' => 'Choose options from this permanent concours.']);
            }
            if ($link) {
                $id = $link->id;
                DB::table($table)->where('id', $id)->update(['version' => $link->version + 1, 'updated_at' => now()]);
            } else {
                $id = DB::table($table)->insertGetId(['concours_id' => $concours->id, $singular.'_id' => $target, 'version' => 1, 'created_at' => now(), 'updated_at' => now()]);
            }
            $options = 'concours_'.$singular.'_link_options';
            DB::table($options)->where('link_id', $id)->delete();
            if ($ids) {
                DB::table($options)->insert(array_map(fn ($option) => ['link_id' => $id, 'concours_id' => $concours->id, 'preparation_option_id' => $option], $ids));
            }
        }, 3);
    }


    /** Bulk-link up to 100 eligible majors/subjects/quizzes without changing existing links. */
    public function saveBulk(Concours $concours, string $kind, array $data): array
    {
        return DB::transaction(function () use ($concours, $kind, $data) {
            Concours::lockForUpdate()->findOrFail($concours->id);
            $singular = $this->kind($kind);
            $table = 'concours_'.$singular.'_links';
            $targetIds = $data['target_ids'];
            $optionIds = $data['preparation_option_ids'];

            if ($this->targets($kind)->whereKey($targetIds)->count() !== count($targetIds)) {
                throw ValidationException::withMessages(['target_ids' => 'Every selected target must be available.']);
            }
            if ($concours->preparationOptions()->whereIn('id', $optionIds)->count() !== count($optionIds)) {
                throw ValidationException::withMessages(['preparation_option_ids' => 'Choose options from this concours.']);
            }
            $existingIds = DB::table($table)->where('concours_id', $concours->id)
                ->whereIn($singular.'_id', $targetIds)->pluck($singular.'_id')->map(fn ($id) => (int) $id)->all();
            $newIds = array_diff($targetIds, $existingIds);
            foreach ($newIds as $targetId) {
                $linkId = DB::table($table)->insertGetId([
                    'concours_id' => $concours->id,
                    $singular.'_id' => $targetId,
                    'version' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
                if ($optionIds) {
                    DB::table('concours_'.$singular.'_link_options')->insert(array_map(
                        fn ($optionId) => ['link_id' => $linkId, 'concours_id' => $concours->id,
                            'preparation_option_id' => $optionId], $optionIds
                    ));
                }
            }

            return ['added' => count($newIds), 'already_linked' => count($existingIds)];
        }, 3);
    }

    public function publicListing(Concours $concours, array $filters = []): array
    {
        $optionIds = null;
        if ($id = $filters['preparation_option_id'] ?? null) {
            $option = $concours->preparationOptions()->available()->find($id);
            if (! $option) {
                throw ValidationException::withMessages(['preparation_option_id' => 'Choose an available option from this concours.']);
            }
            $optionIds = $concours->preparationOptions()->available()->where(fn ($q) => $q->whereKey($option->id)->orWhere('parent_id', $option->id))->pluck('id')->all();
        }
        $query = $this->quizzes()->where(function ($query) use ($concours, $optionIds) {
            foreach (['quiz' => 'quizzes.id', 'subject' => 'quizzes.subject_id', 'major' => null] as $kind => $column) {
                $method = $kind === 'quiz' ? 'whereExists' : 'orWhereExists';
                $query->{$method}(function ($links) use ($kind, $column, $concours, $optionIds) {
                    $table = 'concours_'.$kind.'_links';
                    $options = 'concours_'.$kind.'_link_options';
                    $links->selectRaw('1')->from($table)->where($table.'.concours_id', $concours->id);
                    if ($kind === 'major') {
                        $links->whereExists(fn ($subjects) => $subjects->selectRaw('1')
                            ->from('subjects as qcm_subjects')
                            ->whereColumn('qcm_subjects.id', 'quizzes.subject_id')
                            ->whereColumn('qcm_subjects.major_id', $table.'.major_id'));
                    } else {
                        $links->whereColumn($table.'.'.$kind.'_id', $column);
                    }
                    if ($optionIds !== null) {
                        $links->where(fn ($scope) => $scope->whereNotExists(fn ($o) => $o->selectRaw('1')->from($options)
                            ->whereColumn('link_id', $table.'.id'))
                            ->orWhereExists(fn ($o) => $o->selectRaw('1')->from($options)
                                ->whereColumn('link_id', $table.'.id')->whereIn('preparation_option_id', $optionIds)));
                    }
                });
            }
        });

        // Facets are based on all eligible linked quizzes, not only the current page.
        // Keep them stable while the visitor changes the Major, Subject or level filter.
        $facets = (clone $query)
            ->join('subjects as filter_subjects', 'filter_subjects.id', '=', 'quizzes.subject_id')
            ->join('majors as filter_majors', 'filter_majors.id', '=', 'filter_subjects.major_id')
            ->select([
                'filter_majors.id as major_id', 'filter_majors.name as major_name',
                'filter_subjects.id as subject_id', 'filter_subjects.name as subject_name',
            ])
            ->distinct()
            ->orderBy('filter_majors.name')
            ->orderBy('filter_subjects.name')
            ->get();
        $levels = (clone $query)->whereNotNull('quizzes.difficulty')
            ->where('quizzes.difficulty', '<>', '')
            ->distinct()->orderBy('quizzes.difficulty')->pluck('quizzes.difficulty')->values()->all();

        $majorId = $filters['major_id'] ?? null;
        $subjectId = $filters['subject_id'] ?? null;
        if ($majorId) {
            $query->whereHas('subject', fn ($subject) => $subject->where('major_id', $majorId));
        }
        if ($subjectId) {
            $query->where('quizzes.subject_id', $subjectId);
        }
        if ($difficulty = trim($filters['difficulty'] ?? '')) {
            $query->where('quizzes.difficulty', $difficulty);
        }
        if ($search = trim($filters['q'] ?? '')) {
            $query->whereRaw('LOWER(quizzes.title) LIKE LOWER(?)', ['%'.$search.'%']);
        }

        // EXISTS yields each quiz once, even when direct, subject and major links overlap.
        $page = $query->with('subject:id,name')->withCount('questions')
            ->orderBy('quizzes.id')->paginate($filters['per_page'] ?? 12, ['quizzes.*'], 'page', $filters['page'] ?? 1);

        return $this->page($page, fn ($quiz) => ['id' => $quiz->id, 'title' => $quiz->title, 'subject_name' => $quiz->subject->name,
            'questions_count' => $quiz->questions_count, 'duration' => $quiz->duration, 'difficulty' => $quiz->difficulty]) + [
                'filters' => [
                    'majors' => $facets->unique('major_id')->map(fn ($row) => [
                        'id' => (int) $row->major_id, 'name' => $row->major_name,
                    ])->values()->all(),
                    'subjects' => $facets->map(fn ($row) => [
                        'id' => (int) $row->subject_id, 'major_id' => (int) $row->major_id,
                        'name' => $row->subject_name,
                    ])->values()->all(),
                    'levels' => $levels,
                ],
            ];
    }
}
