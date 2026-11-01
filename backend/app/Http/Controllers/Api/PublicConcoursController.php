<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Concours\DirectoryIndexRequest;
use App\Http\Resources\ConcoursResource;
use App\Models\Concours;
use App\Services\ConcoursDirectoryService;
use App\Services\ConcoursQcmService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PublicConcoursController extends Controller
{
    public function __construct(private readonly ConcoursDirectoryService $directory, private readonly ConcoursQcmService $qcm) {}

    public function categories(DirectoryIndexRequest $request): JsonResponse
    {
        return ApiResponse::success($this->directory->listing('categories', $request->validated()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function institutions(DirectoryIndexRequest $request): JsonResponse
    {
        return ApiResponse::success($this->directory->listing('institutions', $request->validated()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function index(DirectoryIndexRequest $request): JsonResponse
    {
        return ApiResponse::success($this->directory->listing('concours', $request->validated()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function show(string $slug): JsonResponse
    {
        $concours = Concours::visible()
            ->with(['category', 'institution', 'sessionAnnouncements', 'archivedSessionAnnouncements', 'preparationOptions' => fn ($q) => $q->available(), 'resources' => fn ($q) => $q->publicDocument()->with(['subject', 'preparationOptions' => fn ($options) => $options->available()])
                ->whereIn('document_type', ['previous_exam', 'correction', 'summary', 'preparation_guide'])
                ->orderByRaw('year IS NULL')->orderByDesc('year')->orderBy('document_type')->orderBy('id'),
                'linkedResources' => fn ($q) => $q->publicDocument()->with(['subject', 'preparationOptions' => fn ($options) => $options->available()])
                    ->whereIn('document_type', ['previous_exam', 'correction', 'summary', 'preparation_guide'])])
            ->where('slug', $slug)->firstOrFail();
        // The same approved PDF may be referenced by several permanent concours.
        // Reused documents without track mappings are visible to all tracks.
        foreach ($concours->linkedResources as $pdf) {
            if ((int) $pdf->concours_id !== (int) $concours->id) {
                $pdf->setRelation('preparationOptions', collect());
            }
        }
        $concours->setRelation('resources', $concours->resources->concat($concours->linkedResources)->unique('id')->values());

        return ApiResponse::success((new ConcoursResource($concours))->withQcm($this->qcm->publicListing($concours)))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function advice(string $slug): JsonResponse
    {
        $concours = Concours::visible()->where('slug', $slug)->firstOrFail();

        return ApiResponse::success(['advice_fr' => $concours->advice_fr, 'advice_ar' => $concours->advice_ar])
            ->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function qcm(Request $request, string $slug): JsonResponse
    {
        $filters = $request->validate(['page' => ['sometimes', 'integer', 'between:1,100000'], 'per_page' => ['sometimes', 'integer', 'between:1,24'],
            'preparation_option_id' => ['nullable', 'integer', 'min:1'],
            'major_id' => ['nullable', 'integer', 'min:1'],
            'subject_id' => ['nullable', 'integer', 'min:1'],
            'difficulty' => ['nullable', 'string', 'max:64'],
            'q' => ['nullable', 'string', 'max:100']]);

        return ApiResponse::success($this->qcm->publicListing(Concours::visible()->where('slug', $slug)->firstOrFail(), $filters))
            ->header('X-Robots-Tag', 'noindex, nofollow')
            ->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }
}
