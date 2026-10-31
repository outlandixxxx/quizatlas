<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ConcoursAnnouncement;
use App\Models\ConcoursAnnouncementSource;
use App\Models\ConcoursDiscovery;
use App\Services\ConcoursDiscovery\DuplicateCandidates;
use App\Services\ConcoursDiscovery\OfficialUrl;
use App\Services\ConcoursDiscovery\SourceStatus;
use App\Services\ConcoursDiscoveryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

// All endpoints sit behind the existing jwt.auth + admin middleware and policy.
class AdminConcoursDiscoveryController extends Controller
{
    public function sources(SourceStatus $status): JsonResponse
    {
        $this->authorize('viewAny', ConcoursAnnouncement::class);

        return ApiResponse::success(ConcoursAnnouncementSource::withCount(['discoveries as pending_discoveries_count' => fn ($q) => $q->where('status', 'pending')])
            ->orderBy('name')->limit(100)->get()->map(fn ($source) => $source->toArray() + $status->describe($source)));
    }

    public function saveSource(Request $request, OfficialUrl $urls, ?int $source = null): JsonResponse
    {
        $this->authorize('create', ConcoursAnnouncement::class);
        $data = $request->validate([
            'key' => ['required', 'string', 'max:100', 'regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/', Rule::unique('concours_announcement_sources', 'key')->ignore($source)],
            'name' => 'required|string|max:255', 'official_url' => 'required|string|max:2048', 'listing_url' => 'required|string|max:2048',
            'source_kind' => ['sometimes', Rule::in(['official', 'third_party'])],
            'collection_method' => ['required', Rule::in(['manual', 'json_feed', 'rss_atom'])],
            'enabled' => 'required|boolean', 'permission_status' => ['required', Rule::in(['unknown', 'allowed', 'denied'])],
            'permission_evidence' => 'nullable|string|max:2048', 'permission_checked_at' => 'nullable|date|before_or_equal:now',
            'check_interval_minutes' => 'required|integer|between:60,10080', 'version' => [$source ? 'required' : 'prohibited', 'integer', 'min:1'],
        ]);
        $data['source_kind'] ??= $source ? ConcoursAnnouncementSource::findOrFail($source)->source_kind : 'official';
        $candidate = new ConcoursAnnouncementSource($data);
        $urls->normalizeSource($data['official_url'], $candidate);
        $urls->normalizeSource($data['listing_url'], $candidate);
        if ($data['permission_status'] === 'allowed') {
            $request->validate(['permission_evidence' => 'required|string', 'permission_checked_at' => 'required|date']);
        }
        $record = DB::transaction(function () use ($data, $source) {
            $record = $source ? ConcoursAnnouncementSource::lockForUpdate()->findOrFail($source) : new ConcoursAnnouncementSource;
            abort_if($source && $record->version !== $data['version'], 409, 'This source changed. Reload first.');
            $record->fill(collect($data)->except('version')->all());
            $record->version = $source ? $record->version + 1 : 1;
            $record->save();

            return $record;
        }, 3);

        return ApiResponse::success($record, 'Source saved.', $source ? 200 : 201);
    }

    public function index(Request $request): JsonResponse
    {
        $this->authorize('viewAny', ConcoursAnnouncement::class);
        $data = $request->validate(['q' => 'nullable|string|max:200', 'institution' => 'nullable|string|max:255',
            'source_id' => 'nullable|integer|min:1', 'status' => ['nullable', Rule::in(['pending', 'approved', 'rejected'])],
            'candidate_category' => ['nullable', Rule::in(['employment', 'academic', 'unknown', 'excluded'])],
            'candidate_type' => ['nullable', Rule::in(['opening', 'results', 'preselection', 'amendment', 'unknown'])],
            'from' => 'nullable|date_format:Y-m-d', 'to' => 'nullable|date_format:Y-m-d'.($request->filled('from') ? '|after_or_equal:from' : ''),
            'deadline_from' => 'nullable|date_format:Y-m-d', 'deadline_to' => 'nullable|date_format:Y-m-d'.($request->filled('deadline_from') ? '|after_or_equal:deadline_from' : ''),
            'page' => 'sometimes|integer|between:1,100000', 'per_page' => 'sometimes|integer|between:1,50']);
        $query = ConcoursDiscovery::with(['source', 'latestObservation']);
        foreach (['source_id', 'status', 'candidate_category', 'candidate_type'] as $field) {
            if ($data[$field] ?? null) {
                $query->where($field, $data[$field]);
            }
        }
        foreach (['from' => '>=', 'to' => '<='] as $field => $operator) {
            if ($data[$field] ?? null) {
                $query->whereDate('first_seen_at', $operator, $data[$field]);
            }
        }
        foreach (['deadline_from' => '>=', 'deadline_to' => '<='] as $field => $operator) {
            if ($data[$field] ?? null) {
                $query->whereDate('application_deadline', $operator, $data[$field]);
            }
        }
        if ($q = trim($data['q'] ?? '')) {
            $query->where(fn ($b) => $b->whereRaw('LOWER(title) LIKE LOWER(?)', ['%'.$q.'%'])->orWhere('official_url', 'like', '%'.$q.'%')->orWhere('source_article_url', 'like', '%'.$q.'%'));
        }
        if ($q = trim($data['institution'] ?? '')) {
            $query->where(function ($builder) use ($q) {
                $builder->whereRaw('LOWER(institution) LIKE LOWER(?)', ['%'.$q.'%'])
                    ->orWhereHas('latestObservation', fn ($revision) => $revision->where('snapshot->provider_metadata->employer_ar', 'like', '%'.$q.'%'));
            });
        }
        $page = $query->orderByDesc('first_seen_at')->orderByDesc('id')->paginate($data['per_page'] ?? 15);

        return ApiResponse::success(['items' => $page->items(), 'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => $page->perPage(), 'total' => $page->total()]]);
    }

    public function store(Request $request, ConcoursDiscoveryService $service): JsonResponse
    {
        $this->authorize('create', ConcoursAnnouncement::class);
        $data = $request->validate(['source_id' => 'required|integer|exists:concours_announcement_sources,id',
            'title' => 'required|string|max:255', 'official_url' => 'nullable|required_without:source_article_url|string|max:2048',
            'source_article_url' => 'nullable|required_without:official_url|string|max:2048',
            'source_identifier' => 'nullable|string|max:255', 'publication_date' => 'nullable|date_format:Y-m-d',
            'application_deadline' => 'nullable|date_format:Y-m-d', 'institution' => 'nullable|string|max:255',
            'session_year' => 'nullable|integer|between:1990,2100', 'grade' => 'nullable|string|max:255', 'specialty' => 'nullable|string|max:255']);

        return ApiResponse::success($service->capture(ConcoursAnnouncementSource::findOrFail($data['source_id']), $data, $request->user())->load('source'), 'Source link added for review.', 201);
    }

    public function matches(int $discovery, DuplicateCandidates $duplicates): JsonResponse
    {
        $this->authorize('viewAny', ConcoursAnnouncement::class);

        return ApiResponse::success($duplicates->suggestions(ConcoursDiscovery::findOrFail($discovery)));
    }

    public function decideMatch(Request $request, int $discovery, DuplicateCandidates $duplicates): JsonResponse
    {
        $this->authorize('create', ConcoursAnnouncement::class);
        $data = $request->validate(['version' => 'required|integer|min:1', 'other_id' => 'required|integer|exists:concours_discoveries,id',
            'other_version' => 'required|integer|min:1', 'decision' => ['required', Rule::in(['confirmed', 'rejected'])],
            'source_checked' => 'required|accepted', 'note' => 'required|string|max:1000']);
        $duplicates->decide($discovery, $data, $request->user());

        return ApiResponse::success(ConcoursDiscovery::with(['source', 'latestObservation'])->findOrFail($discovery), 'Duplicate decision recorded. Original discoveries retained.');
    }

    public function show(Request $request, int $discovery): JsonResponse
    {
        $this->authorize('viewAny', ConcoursAnnouncement::class);

        return ApiResponse::success(ConcoursDiscovery::with(['source', 'latestObservation'])->findOrFail($discovery));
    }

    public function revisions(Request $request, int $discovery): JsonResponse
    {
        $this->authorize('viewAny', ConcoursAnnouncement::class);
        $request->validate(['page' => 'sometimes|integer|between:1,100000']);
        $page = ConcoursDiscovery::findOrFail($discovery)->revisions()->orderByDesc('version')->paginate(15);

        return ApiResponse::success(['items' => $page->items(), 'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => 15, 'total' => $page->total()]]);
    }

    public function review(Request $request, int $discovery, ConcoursDiscoveryService $service): JsonResponse
    {
        $this->authorize('create', ConcoursAnnouncement::class);
        $data = $request->validate(['version' => 'required|integer|min:1', 'action' => ['required', Rule::in(['approve', 'reject', 'acknowledge', 'verify_source'])],
            'source_checked' => 'exclude_if:action,reject|required|accepted', 'review_note' => 'nullable|required_if:action,reject,acknowledge|string|max:1000',
            'official_url' => 'nullable|required_if:action,verify_source|string|max:2048',
            'official_identifier' => 'nullable|string|max:255',
            'candidate_category' => ['required_if:action,verify_source', Rule::in(['employment', 'academic', 'unknown', 'excluded'])],
            'candidate_type' => ['required_if:action,verify_source', Rule::in(['opening', 'results', 'preselection', 'amendment', 'unknown'])],
            'verified_identity' => 'sometimes|array:institution,round,grade,specialty,session_year,deadline',
            'verified_identity.institution' => 'nullable|string|max:255', 'verified_identity.round' => 'nullable|string|max:255',
            'verified_identity.grade' => 'nullable|string|max:255', 'verified_identity.specialty' => 'nullable|string|max:255',
            'verified_identity.session_year' => 'nullable|integer|between:1990,2100', 'verified_identity.deadline' => 'nullable|date_format:Y-m-d',
            'concours_id' => 'required_if:action,approve|integer|exists:concours,id',
            'institution_id' => 'nullable|integer|exists:concours_institutions,id',
            'title_language' => ['required_if:action,approve', Rule::in(['fr', 'ar'])],
            'verified_title' => 'nullable|string|max:255',
            'verified_title_fr' => 'nullable|string|max:255', 'verified_title_ar' => 'nullable|string|max:255',
            'positions' => 'nullable|integer|between:1,1000000',
            // Present null is intentional: unknown years must never inherit calendar/base years.
            'session_year' => 'present_if:action,approve|nullable|integer|between:1990,2100',
            'preparation_option_ids' => 'present_if:action,approve|array|max:100',
            'preparation_option_ids.*' => 'required|integer|distinct|exists:concours_preparation_options,id',
            'official_publication_date' => 'nullable|date_format:Y-m-d|before_or_equal:'.ConcoursAnnouncement::today(),
            'registration_deadline' => 'nullable|date_format:Y-m-d']);

        return ApiResponse::success($service->review($discovery, $data, $request->user())->load('source'), 'Discovery reviewed. Publication remains a separate verified action.');
    }
}
