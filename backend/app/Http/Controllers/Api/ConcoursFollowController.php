<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\ConcoursResource;
use App\Models\Concours;
use App\Models\ConcoursFollow;
use App\Services\ConcoursFollowService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ConcoursFollowController extends Controller
{
    public function index(Request $request, ConcoursFollowService $service)
    {
        $data = $request->validate(['page' => 'sometimes|integer|between:1,10000']);
        $page = ConcoursFollow::where('user_id', $request->user()->id)->where('active', true)
            ->with(['preparationOptions', 'concours.category', 'concours.institution', 'concours.preparationOptions'])->orderByDesc('id')->paginate(10);

        return ApiResponse::success(['items' => $page->getCollection()->map(fn ($follow) => $service->dto($follow) + ['concours' => new ConcoursResource($follow->concours),
            'available' => Concours::visible()->whereKey($follow->concours_id)->exists()]),
            'meta' => ['current_page' => $page->currentPage(), 'last_page' => $page->lastPage(), 'per_page' => 10, 'total' => $page->total()]]);
    }

    public function show(Request $request, int $concours, ConcoursFollowService $service)
    {
        Concours::visible()->findOrFail($concours);

        return ApiResponse::success($service->dto(ConcoursFollow::with('preparationOptions')->where('user_id', $request->user()->id)->where('concours_id', $concours)->first()));
    }

    public function save(Request $request, int $concours, ConcoursFollowService $service)
    {
        $data = $request->validate(['version' => 'required|integer|min:0', 'active' => 'required|boolean', 'in_app' => 'required|boolean', 'browser_push' => 'required|boolean',
            'announcements' => 'required|boolean', 'updates' => 'required|boolean', 'deadlines' => 'required|boolean',
            'reminder_days' => 'present|array|max:10', 'reminder_days.*' => ['required', 'integer', 'distinct', Rule::in(config('concours_notifications.reminder_days'))],
            'preparation_option_ids' => 'present|array|max:100', 'preparation_option_ids.*' => 'required|integer|distinct']);
        $record = Concours::findOrFail($concours);
        // Users can still stop following a concours that was later hidden.
        if ($data['active']) {
            Concours::visible()->findOrFail($concours);
        }

        return ApiResponse::success($service->dto($service->save($request->user(), $record, $data)));
    }

    public function configuration()
    {
        return ApiResponse::success(['delivery_enabled' => (bool) config('concours_notifications.enabled'),
            'reminder_days' => config('concours_notifications.reminder_days'),
            'push_available' => (bool) (config('concours_notifications.enabled') && config('concours_notifications.push_enabled') && config('concours_notifications.vapid.publicKey') && config('concours_notifications.vapid.privateKey')),
            'vapid_public_key' => config('concours_notifications.push_enabled') ? config('concours_notifications.vapid.publicKey') : null]);
    }
}
