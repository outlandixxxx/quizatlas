<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Concours\AnnouncementIndexRequest;
use App\Http\Resources\ConcoursAnnouncementResource;
use App\Models\ConcoursAnnouncement;
use App\Services\ConcoursAnnouncementService;
use Illuminate\Http\JsonResponse;

class PublicConcoursAnnouncementController extends Controller
{
    public function index(AnnouncementIndexRequest $request, ConcoursAnnouncementService $service): JsonResponse
    {
        return ApiResponse::success($service->listing($request->validated()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function show(string $slug): JsonResponse
    {
        return ApiResponse::success(new ConcoursAnnouncementResource(ConcoursAnnouncement::visible()->with(['concours.category', 'concours.institution', 'institution', 'officialPdf'])->where('slug', $slug)->firstOrFail()))->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }
}
