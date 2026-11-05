<?php

namespace App\Services;

use App\Helpers\ApiResponse;
use App\Http\Resources\ConcoursAnnouncementResource;
use App\Models\Concours;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursCategory;
use App\Models\ExamPdf;
use App\Models\User;
use App\Services\ConcoursNotifications\ConcoursEventService;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ConcoursAnnouncementService
{
    public function listing(array $filters, bool $public = true): array
    {
        $query = ConcoursAnnouncement::with(['concours.category', 'concours.institution', 'institution', 'officialPdf', 'preparationOptions']);
        if ($public) {
            $query->visible();
        } else {
            foreach (['verification_status', 'publication_status'] as $field) {
                if ($filters[$field] ?? null) {
                    $query->where($field, $filters[$field]);
                }
            }
        }
        if ($filters['concours_id'] ?? null) {
            $query->where('concours_id', $filters['concours_id']);
        }
        if ($filters['session_year'] ?? null) {
            $query->where('session_year', $filters['session_year']);
        }
        if ($scope = $filters['session_scope'] ?? null) {
            $concours = isset($filters['concours_id']) ? Concours::visible()->find($filters['concours_id']) : null;
            $year = $concours?->displayedSessionYear();
            if ($scope === 'current') {
                $year === null ? $query->whereRaw('1 = 0') : $query->where('session_year', $year)->whereNull('superseded_at');
            } elseif ($concours && $year !== null) {
                $query->where(fn ($q) => $q->whereNull('session_year')->orWhere('session_year', '<>', $year)->orWhereNotNull('superseded_at'));
            } elseif (! $concours) {
                $query->whereRaw('1 = 0');
            }
        }
        if ($filters['category_id'] ?? null) {
            $ids = [(int) $filters['category_id']];
            $nodes = ConcoursCategory::all(['id', 'parent_id']);
            do {
                $before = count($ids);
                $ids = array_values(array_unique(array_merge($ids, $nodes->whereIn('parent_id', $ids)->pluck('id')->all())));
            } while (count($ids) > $before);
            $query->whereHas('concours', fn ($q) => $q->whereIn('category_id', $ids));
        }
        if ($filters['type'] ?? null) {
            $query->whereHas('concours', fn ($q) => $q->where('type', $filters['type']));
        }
        if ($filters['institution_id'] ?? null) {
            $query->where(fn ($q) => $q->where('institution_id', $filters['institution_id'])->orWhere(fn ($q) => $q->whereNull('institution_id')->whereHas('concours', fn ($c) => $c->where('institution_id', $filters['institution_id']))));
        }
        if ($filters['registration_status'] ?? null) {
            $query->registration($filters['registration_status']);
        }
        if ($search = trim($filters['q'] ?? '')) {
            $query->where(fn ($q) => $q->whereRaw('LOWER(title_fr) LIKE LOWER(?)', ['%'.$search.'%'])
                ->orWhere('title_ar', 'like', '%'.$search.'%')->orWhere('slug', 'like', '%'.$search.'%')
                ->orWhereHas('concours', fn ($c) => $c->whereRaw('LOWER(name_fr) LIKE LOWER(?)', ['%'.$search.'%'])->orWhere('name_ar', 'like', '%'.$search.'%')));
        }
        if ($public) {
            // Prefer the declared session, with original publication as the legacy
            // fallback. Republishing must not promote an older session.
            $query->orderByRaw('COALESCE(session_year, CAST(SUBSTR(COALESCE(CAST(official_publication_date AS TEXT), CAST(first_published_at AS TEXT)), 1, 4) AS INTEGER)) DESC')
                ->orderByRaw('COALESCE(official_publication_date, first_published_at) DESC')
                ->orderByDesc('first_published_at');
        } else {
            $query->orderByDesc('updated_at');
        }
        $page = $query->orderByDesc('id')->paginate($filters['per_page'] ?? 12);

        return ['items' => ConcoursAnnouncementResource::collection($page->items()), 'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => $page->perPage(), 'total' => $page->total()]];
    }

    public function save(array $data, User $actor, ?int $id = null): ConcoursAnnouncement
    {
        // Preserve the legacy single-file input while also accepting a bounded batch.
        $files = array_values(array_merge(isset($data['file']) ? [$data['file']] : [], $data['files'] ?? []));
        unset($data['file'], $data['files']);
        $stored = [];
        try {
            foreach ($files as $file) {
                $stored[] = ['file' => $file, 'path' => $file->storeAs('concours/announcements', Str::uuid().'.pdf', 'exam_pdfs')];
            }
            return DB::transaction(function () use ($data, $actor, $id, $stored) {
                $record = $id ? $this->locked($id, $data['version']) : new ConcoursAnnouncement;
                $before = $this->snapshot($record);
                // The lightweight editor sends only its fields. Preserve older detailed content.
                $record->fill(Arr::only($data, array_diff(ConcoursAnnouncement::EDITORIAL_FIELDS, ['official_pdf_id', 'official_pdf_sha256'])));
                $this->validateDates($record);
                $concours = Concours::findOrFail($record->concours_id);
                if (! $id && ! $record->institution_id) {
                    $record->institution_id = $concours->institution_id;
                }
                if (! $id && ! array_key_exists('session_year', $data)) {
                    $record->session_year = $concours->session_year !== null || $concours->session_year_override !== null ? $concours->displayedSessionYear() : null;
                }
                $optionIds = $data['preparation_option_ids'] ?? ($id ? $record->preparationOptions()->pluck('concours_preparation_options.id')->all() : []);
                if ($concours->preparationOptions()->whereIn('id', $optionIds)->count() !== count($optionIds)) {
                    $this->invalid('preparation_option_ids', 'Select preparation tracks belonging to this concours.');
                }
                $currentOptions = $id ? $record->preparationOptions()->pluck('concours_preparation_options.id')->all() : [];
                $optionsChanged = array_diff($optionIds, $currentOptions) || array_diff($currentOptions, $optionIds);
                $this->validateReplacement($record);
                if (! $record->title_fr && ! $record->title_ar) {
                    $suffix = $record->session_year ? ' — '.$record->session_year : '';
                    foreach (['fr', 'ar'] as $lang) {
                        $record->{'title_'.$lang} = Str::limit($concours->{'name_'.$lang}, 255 - Str::length($suffix), '').$suffix;
                    }
                }
                if (! $record->slug) {
                    $record->slug = substr($concours->slug, 0, 120).($record->session_year ? '-'.$record->session_year : '').'-'.strtolower(Str::ulid());
                }
                if ($id && ! $stored && ! $record->isDirty() && ! $optionsChanged) {
                    return $record;
                }
                if ($id && $record->publication_status === 'published') {
                    $this->invalid('publication_status', 'Withdraw this announcement before changing its verified content.');
                }
                if (! $id) {
                    $record->verification_status = 'draft';
                    $record->publication_status = 'draft';
                    $record->version = 1;
                } else {
                    if ($record->verification_status === 'verified') {
                        $record->verification_status = 'unverified';
                    }
                    $record->verified_at = null;
                    $record->verified_by = null;
                    $record->version++;
                }
                $record->save();
                foreach ($stored as $upload) {
                    $file = $upload['file'];
                    $hash = hash_file('sha256', $file->getRealPath());
                    if ($record->officialPdfs()->where('sha256', $hash)->exists()) {
                        // Ignore identical documents in this notice without creating a second entry.
                        Storage::disk('exam_pdfs')->delete($upload['path']);
                        continue;
                    }
                    $pdf = ExamPdf::create(['title' => $record->title_fr ?: $record->title_ar, 'concours_id' => $record->concours_id,
                        'announcement_id' => $record->id, 'document_type' => 'official_announcement', 'year' => $record->session_year,
                        'file_path' => $upload['path'], 'file_size_bytes' => $file->getSize(), 'sha256' => $hash,
                        'source_url' => $record->official_source_url, 'is_active' => false]);
                    if (! $record->official_pdf_id) {
                        // Keep the first official PDF as the stable legacy primary.
                        $record->official_pdf_id = $pdf->id;
                        $record->official_pdf_sha256 = $pdf->sha256;
                        $record->save();
                    }
                }
                if (! $stored && $record->official_pdf_id) {
                    $record->officialPdfs()->update(['title' => $record->title_fr ?: $record->title_ar, 'year' => $record->session_year]);
                }
                $record->preparationOptions()->syncWithPivotValues($optionIds, ['concours_id' => $concours->id]);
                $this->revision($record, $actor, $id ? 'updated' : 'created', $before, sourceAttribution: $id ? null : ($data['_source_attribution'] ?? null));

                return $record;
            }, 3);
        } catch (\Throwable $exception) {
            // Clean up only this failed NEW upload, never an existing file or record.
            foreach ($stored as $upload) {
                Storage::disk('exam_pdfs')->delete($upload['path']);
            }
            throw $exception;
        }
    }

    public function transition(int $id, int $version, string $action, User $actor): ConcoursAnnouncement
    {
        if ($action === 'verify-publish') {
            return DB::transaction(function () use ($id, $version, $actor) {
                $record = $this->locked($id, $version);
                if (! $record->official_pdf_id && ! $record->official_source_url) {
                    $this->invalid('official_source_url', 'Provide an official source URL or upload the official PDF before publishing.');
                }
                if ($record->verification_status !== 'verified') {
                    $record = $this->transition($id, $version, 'verify', $actor);
                }

                return $this->transition($id, $record->version, 'publish', $actor);
            }, 3);
        }

        return DB::transaction(function () use ($id, $version, $action, $actor) {
            $record = $this->locked($id, $version);
            $before = $this->snapshot($record);
            $events = [];
            $verifiedChanges = null;
            if ($action === 'submit') {
                if ($record->verification_status !== 'draft' || $record->publication_status === 'published') {
                    $this->invalid('verification_status', 'Only a draft can be submitted for verification.');
                }
                $record->verification_status = 'unverified';
            } elseif ($action === 'verify') {
                if ($record->verification_status === 'verified' || $record->publication_status === 'published') {
                    $this->invalid('verification_status', 'This version is already verified.');
                }
                if (! $record->official_source_url && ! $record->official_pdf_id) {
                    $this->invalid('file', 'An official PDF or an existing official source URL is required before verification.');
                }
                $institution = $record->institution ?? $record->concours->institution;
                if (! $institution) {
                    $this->invalid('institution_id', 'Identify the official institution before verification.');
                }
                // Freeze the responsible institution for this verified session. Later
                // edits to a reusable concours must not silently replace it.
                $record->institution_id = $institution->id;
                $previous = $record->revisions()->where('action', 'verified')->orderByDesc('version')->first();
                $verifiedChanges = $this->changes($previous?->snapshot ?? [], $this->snapshot($record), array_merge(ConcoursAnnouncement::EDITORIAL_FIELDS, ['preparation_option_ids']));
                $oldDeadline = $previous?->snapshot['registration_deadline'] ?? null;
                $newDeadline = $record->registration_deadline?->toDateString();
                if ($oldDeadline && $newDeadline && $newDeadline > $oldDeadline) {
                    $events[] = 'deadline_extended';
                }
                if (isset($verifiedChanges['registration_opens_on'])) {
                    $events[] = 'registration_opening_changed';
                }
                $record->verification_status = 'verified';
                $record->verified_at = now();
                $record->verified_by = $actor->id;
                foreach ($record->officialPdfs()->get() as $pdf) {
                    if ((int) $pdf->concours_id !== (int) $record->concours_id || ! Storage::disk('exam_pdfs')->exists($pdf->file_path)) {
                        $this->invalid('files', 'Every official PDF must belong to this concours and be available before verification.');
                    }
                    $pdf->update(['title' => $record->title_fr ?: $record->title_ar, 'year' => $record->session_year,
                        'approved_at' => now(), 'approved_by' => $actor->id, 'is_active' => true,
                        'distribution_permission' => 'admin_confirmed', 'distribution_confirmed_at' => now(),
                        'source_url' => $record->official_source_url, 'attribution' => $institution->name_fr.' / '.$institution->name_ar]);
                }
            } elseif ($action === 'publish') {
                if ($record->verification_status !== 'verified' || $record->publication_status === 'published') {
                    $this->invalid('publication_status', 'Only a verified, unpublished announcement can be published.');
                }
                if (! Concours::visible()->whereKey($record->concours_id)->exists() || ($record->institution_id && ! $record->institution->is_active)) {
                    $this->invalid('concours_id', 'The concours, its category ancestors and the institution must be active before publication.');
                }
                if ($record->official_pdf_id && ! ExamPdf::whereKey($record->official_pdf_id)->where('announcement_id', $record->id)->where('concours_id', $record->concours_id)->where('is_active', true)->whereNotNull('approved_at')->whereNotNull('distribution_confirmed_at')->exists()) {
                    $this->invalid('file', 'Verify the official PDF before publishing.');
                }
                if ($record->officialPdfs()->where(fn ($q) => $q->where('is_active', false)
                    ->orWhereNull('approved_at')->orWhereNull('distribution_confirmed_at'))->exists()) {
                    $this->invalid('files', 'Verify all attached official PDFs before publication.');
                }
                // Only an explicit replacement retires another notice. Simultaneous
                // recruitment notices remain independent; republishing changes no rank.
                if ($record->replaces_announcement_id && ! $record->first_published_at) {
                    $old = ConcoursAnnouncement::lockForUpdate()->findOrFail($record->replaces_announcement_id);
                    $this->validateReplacement($record);
                    if ($old->superseded_at || ! $old->first_published_at || $old->verification_status !== 'verified') {
                        $this->invalid('replaces_announcement_id', 'Choose a verified, previously published notice that has not already been replaced.');
                    }
                    $oldBefore = $this->snapshot($old);
                    $old->superseded_at = now();
                    $old->version++;
                    $old->save();
                    $this->revision($old, $actor, 'superseded', $oldBefore, ['replaced_by:'.$record->id]);
                    $events[] = 'replaces:'.$old->id;
                }
                $events[] = $record->first_published_at ? 'republished' : 'first_publication';
                $record->first_published_at ??= now();
                $record->published_at = now();
                $record->publication_status = 'published';
                $record->archived_at = null;
                $record->withdrawn_at = null;
            } elseif ($action === 'archive') {
                if ($record->publication_status !== 'published') {
                    $this->invalid('publication_status', 'Only a published announcement can be archived.');
                }
                $record->publication_status = 'archived';
                $record->archived_at = now();
            } elseif ($action === 'withdraw') {
                if (! in_array($record->publication_status, ['published', 'archived'], true)) {
                    $this->invalid('publication_status', 'Only published or archived announcements can be withdrawn.');
                }
                $record->publication_status = 'withdrawn';
                $record->withdrawn_at = now();
            } else {
                abort(404);
            }
            $record->version++;
            $record->save();
            $this->revision($record, $actor, match ($action) {
                'submit' => 'submitted', 'verify' => 'verified', 'publish' => 'published', 'archive' => 'archived', 'withdraw' => 'withdrawn'
            }, $before, $events, $verifiedChanges);
            if ($action === 'publish') {
                app(ConcoursEventService::class)->published($record, ! ($before['first_published_at'] ?? null));
            }

            return $record;
        }, 3);
    }

    /** Presentation designation only: never edit content, session, verification or PDFs. */
    public function designateOfficial(int $concoursId, int $id, int $version, int $sessionYear, ?int $expectedOfficialId, User $actor): ConcoursAnnouncement
    {
        abort_unless($actor->isAdmin(), 403);

        return DB::transaction(function () use ($concoursId, $id, $version, $sessionYear, $expectedOfficialId, $actor) {
            // Serialize competing choices for this permanent page, then check both versions.
            $concours = Concours::lockForUpdate()->findOrFail($concoursId);
            $record = $this->locked($id, $version);
            if ($record->concours_id !== $concours->id) {
                $this->invalid('concours_id', 'Choose an announcement belonging to this Concours.');
            }
            if ($concours->displayedSessionYear() !== $sessionYear) {
                abort(409, 'The displayed session changed. Reload before choosing its official announcement.');
            }
            if ($concours->official_announcement_id !== $expectedOfficialId) {
                abort(409, 'Another administrator changed the official announcement. Reload before continuing.');
            }
            if ($record->session_year !== $sessionYear || ! ConcoursAnnouncement::visible()->whereKey($id)->whereNull('superseded_at')->exists()) {
                $this->invalid('announcement', 'Choose a verified, published, current-session announcement. Correct a missing or incorrect session separately; designation never changes it.');
            }
            if ($concours->official_announcement_id === $id) return $record;

            $before = $this->snapshot($record) + ['official_announcement_id' => $concours->official_announcement_id];
            $concours->official_announcement_id = $id;
            $concours->save();
            $record->version++;
            $record->save();
            $this->revision($record, $actor, 'designated_official', $before, context: ['official_announcement_id' => $id]);

            return $record;
        }, 3);
    }

    /** Logical deletion preserves revision history, references and hosted files. */
    public function delete(int $id, int $version, User $actor): void
    {
        DB::transaction(function () use ($id, $version, $actor) {
            $record = $this->locked($id, $version);
            $before = $this->snapshot($record);
            $record->version++;
            $record->save();
            $this->revision($record, $actor, 'deleted', $before);
            $record->delete();
        }, 3);
    }

    private function locked(int $id, int $version): ConcoursAnnouncement
    {
        $record = ConcoursAnnouncement::lockForUpdate()->findOrFail($id);
        if ($record->version !== $version) {
            throw new HttpResponseException(ApiResponse::error('This announcement changed since you opened it. Reload before saving or changing its status.', null, 409));
        }

        return $record;
    }

    private function validateDates(ConcoursAnnouncement $record): void
    {
        $dates = Arr::only($record->attributesToArray(), ['registration_opens_on', 'registration_deadline']);
        $rules = array_fill_keys(array_keys($dates), ['nullable', 'date_format:Y-m-d']);
        if ($dates['registration_opens_on'] ?? null) {
            $rules['registration_deadline'][] = 'after_or_equal:registration_opens_on';
        }
        Validator::make($dates, $rules)->validate();
    }

    private function validateReplacement(ConcoursAnnouncement $record): void
    {
        if ($record->exists && $record->first_published_at && $record->isDirty('replaces_announcement_id')) {
            $this->invalid('replaces_announcement_id', 'The replacement link is permanent after first publication.');
        }
        if (! $record->replaces_announcement_id) {
            return;
        }
        $old = ConcoursAnnouncement::find($record->replaces_announcement_id);
        if (! $old || $old->id === $record->id || $old->concours_id !== $record->concours_id || ! $old->first_published_at) {
            $this->invalid('replaces_announcement_id', 'Choose a previously published announcement belonging to this concours.');
        }
    }

    private function changes(array $before, array $after, ?array $fields = null): array
    {
        $changes = [];
        foreach ($fields ?? array_keys($after) as $key) {
            if (! in_array($key, ['created_at', 'updated_at'], true) && ($before[$key] ?? null) !== ($after[$key] ?? null)) {
                $changes[$key] = ['from' => $before[$key] ?? null, 'to' => $after[$key] ?? null];
            }
        }

        return $changes;
    }

    private function revision(ConcoursAnnouncement $record, User $actor, string $action, array $before, array $events = [], ?array $verifiedChanges = null, ?array $sourceAttribution = null, array $context = []): void
    {
        $snapshot = $this->snapshot($record) + $context;
        if ($sourceAttribution !== null) {
            $snapshot['source_attribution'] = $sourceAttribution;
        }
        $record->revisions()->create(['version' => $record->version, 'actor_id' => $actor->id, 'action' => $action,
            'changes' => $this->changes($before, $snapshot), 'snapshot' => $snapshot, 'events' => $events,
            'verified_changes' => $verifiedChanges, 'created_at' => now()]);
        $record->unsetRelation('originRevision');
    }

    private function snapshot(ConcoursAnnouncement $record): array
    {
        return $record->attributesToArray() + ['source_attribution' => $record->exists ? $record->source_attribution : null, 'official_pdf_ids' => $record->exists ? $record->officialPdfs()->pluck('id')->all() : [], 'preparation_option_ids' => $record->exists
            ? $record->preparationOptions()->pluck('concours_preparation_options.id')->all() : []];
    }

    private function invalid(string $field, string $message): never
    {
        throw ValidationException::withMessages([$field => $message]);
    }
}
