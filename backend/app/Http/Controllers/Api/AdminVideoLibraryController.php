<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoLibraryIndexRequest;
use App\Models\VideoLibraryEntry;
use App\Services\VideoLibraryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AdminVideoLibraryController extends Controller
{
    public function index(VideoLibraryIndexRequest $request, VideoLibraryService $service): JsonResponse
    {
        return ApiResponse::success($service->listing($request->validated(), true))->header('Cache-Control', 'no-store');
    }

    public function review(Request $request, VideoLibraryService $service): JsonResponse
    {
        $rules = ['urls' => ['required', 'array', 'min:1', 'max:50'], 'urls.*' => ['present', 'string', 'max:8192'],
            'defaults' => ['sometimes', 'array']];
        foreach (VideoLibraryService::classificationRules(false) as $field => $rule) {
            $rules['defaults.'.$field] = $rule;
        }
        $input = $request->validate($rules);
        // Only the allowlisted defaults can enter a row; no user-provided metadata/URLs.
        $defaults = array_intersect_key($input['defaults'] ?? [], VideoLibraryService::classificationRules(false));

        return ApiResponse::success($service->review($input['urls'], $defaults))->header('Cache-Control', 'no-store');
    }

    public function import(Request $request, VideoLibraryService $service): JsonResponse
    {
        $input = $request->validate(['rows' => ['required', 'array', 'min:1', 'max:50'], 'rows.*' => ['required', 'array']]);

        return ApiResponse::success($service->import($input['rows']))->header('Cache-Control', 'no-store');
    }

    // Resolve IDs inside the action so authentication precedes record-existence disclosure.
    public function update(Request $request, int $entry, VideoLibraryService $service): JsonResponse
    {
        $input = $request->validate(array_merge(VideoLibraryService::classificationRules(), [
            'title' => ['required', 'string', 'max:250', 'regex:/\S/u'],
            // Identity cannot silently change while editing classification/publication.
            'youtube_id' => ['prohibited'], 'url' => ['prohibited'],
        ]));

        $record = VideoLibraryEntry::findOrFail($entry);

        return ApiResponse::success($service->resource($service->update($record, $input)))->header('Cache-Control', 'no-store');
    }

    public function destroy(int $entry): JsonResponse
    {
        VideoLibraryEntry::findOrFail($entry)->delete();

        return ApiResponse::success(['deleted' => true])->header('Cache-Control', 'no-store');
    }
}
