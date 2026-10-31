<?php

namespace App\Services;

use App\Models\Concours;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ConcoursQcmService
{
    public function subjects(): Builder
    {
        return Subject::query()->where('is_active', true)->whereHas('major', fn ($q) => $q->where('is_active', true));
    }

    public function quizzes(): Builder
    {
        return Quiz::query()->where('is_active', true)->where('duration', '>', 0)->where('total_marks', '>', 0)
            ->whereHas('subject', fn ($q) => $q->where('is_active', true)->whereHas('major', fn ($m) => $m->where('is_active', true)))
            ->has('questions');
    }

    private function targets(string $kind): Builder
    {
        return $kind === 'quizzes' ? $this->quizzes() : $this->subjects();
    }

    private function kind(string $kind): string
    {
        return $kind === 'quizzes' ? 'quiz' : 'subject';
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
        $query = ($kind === 'quizzes' ? $concours->preparationQuizzes() : $concours->preparationSubjects())->withTrashed();
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
                throw ValidationException::withMessages(['target' => 'Choose an existing available subject or quiz.']);
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
            foreach (['quiz' => 'quizzes.id', 'subject' => 'quizzes.subject_id'] as $kind => $column) {
                $method = $kind === 'quiz' ? 'whereExists' : 'orWhereExists';
                $query->{$method}(function ($links) use ($kind, $column, $concours, $optionIds) {
                    $table = 'concours_'.$kind.'_links';
                    $options = 'concours_'.$kind.'_link_options';
                    $links->selectRaw('1')->from($table)->where('concours_id', $concours->id)->whereColumn($kind.'_id', $column);
                    if ($optionIds !== null) {
                        $links->where(fn ($scope) => $scope->whereNotExists(fn ($o) => $o->selectRaw('1')->from($options)->whereColumn('link_id', $table.'.id'))
                            ->orWhereExists(fn ($o) => $o->selectRaw('1')->from($options)->whereColumn('link_id', $table.'.id')->whereIn('preparation_option_id', $optionIds)));
                    }
                });
            }
        })->with('subject:id,name')->withCount('questions');
        // EXISTS yields each quiz once, even when direct and subject associations overlap.
        $page = $query->orderBy('quizzes.id')->paginate($filters['per_page'] ?? 12, ['quizzes.*'], 'page', $filters['page'] ?? 1);

        return $this->page($page, fn ($quiz) => ['id' => $quiz->id, 'title' => $quiz->title, 'subject_name' => $quiz->subject->name,
            'questions_count' => $quiz->questions_count, 'duration' => $quiz->duration, 'difficulty' => $quiz->difficulty]);
    }
}
