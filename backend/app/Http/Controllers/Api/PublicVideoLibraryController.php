<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoLibraryIndexRequest;
use App\Models\VideoLibraryEntry;
use App\Services\VideoLibraryService;
use App\Services\YouTubeLibraryThumbnail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Throwable;

class PublicVideoLibraryController extends Controller
{
    public function index(VideoLibraryIndexRequest $request, VideoLibraryService $service): JsonResponse
    {
        return ApiResponse::success($service->listing($request->validated()))
            ->header('Cache-Control', 'public, max-age=0, must-revalidate');
    }

    public function options(): JsonResponse
    {
        return ApiResponse::success(['formats' => VideoLibraryEntry::FORMATS, 'categories' => VideoLibraryEntry::CATEGORIES,
            'templates' => VideoLibraryEntry::TEMPLATES, 'languages' => VideoLibraryEntry::LANGUAGES]);
    }

    public function thumbnail(int $entry, YouTubeLibraryThumbnail $thumbnail): Response
    {
        // Check publication before reading the shared image cache, including after unpublication.
        $record = VideoLibraryEntry::published()->findOrFail($entry);
        try {
            $body = $thumbnail->fetch($record->youtube_id);
        } catch (Throwable) {
            abort(503, 'Thumbnail temporarily unavailable.');
        }

        return response($body, 200, ['Content-Type' => 'image/jpeg', 'X-Content-Type-Options' => 'nosniff',
            'Cache-Control' => 'public, max-age=3600', 'ETag' => '"'.hash('sha256', $body).'"']);
    }
}
