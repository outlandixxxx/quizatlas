<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Concours\AnnouncementIndexRequest;
use App\Http\Resources\ConcoursAnnouncementResource;
use App\Http\Resources\ConcoursPdfResource;
use App\Models\ConcoursAnnouncement;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Http\JsonResponse;

class PublicConcoursAnnouncementController extends Controller
{
    public function index(AnnouncementIndexRequest $request, ConcoursAnnouncementService $service): JsonResponse
    {
        return ApiResponse::success($service->listing($request->validated()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function attachments(string $slug): JsonResponse
    {
        $record = ConcoursAnnouncement::visible()->where('slug', $slug)->firstOrFail();
        $pdfs = $record->officialPdfs()->publicDocument()->get();

        return ApiResponse::success(['pdfs' => ConcoursPdfResource::collection($pdfs),
            'official_urls' => $record->additional_official_urls ?? []])
            ->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function show(string $slug): JsonResponse
    {
        return ApiResponse::success(new ConcoursAnnouncementResource(ConcoursAnnouncement::visible()->with(['concours.category', 'concours.institution', 'institution', 'officialPdf'])->where('slug', $slug)->firstOrFail()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }
}
