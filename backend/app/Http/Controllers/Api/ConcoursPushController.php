<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\ConcoursFollow;
use App\Models\ConcoursPushSubscription;
use App\Models\User;
use App\Services\ConcoursNotifications\ConcoursPushService;
use App\Services\ConcoursNotifications\PushEndpoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class ConcoursPushController extends Controller
{
    public function store(Request $request, PushEndpoint $endpoints)
    {
        abort_unless(config('concours_notifications.enabled') && config('concours_notifications.push_enabled')
            && config('concours_notifications.vapid.publicKey') && config('concours_notifications.vapid.privateKey'), 409, 'Browser push is not enabled.');
        $data = $request->validate(['endpoint' => 'required|string|max:2048', 'keys' => 'required|array:p256dh,auth',
            'keys.p256dh' => 'required|string|max:200', 'keys.auth' => 'required|string|max:100',
            'permission' => ['required', Rule::in(['granted'])], 'language' => ['required', Rule::in(['fr', 'en', 'ar'])]]);
        $endpoints->validate($data['endpoint']);
        if (! $endpoints->key($data['keys']['p256dh'], 65) || ! $endpoints->key($data['keys']['auth'], 16)) {
            throw ValidationException::withMessages(['keys' => 'Invalid browser push subscription keys.']);
        }
        $device = DB::transaction(function () use ($request, $data) {
            User::whereKey($request->user()->id)->lockForUpdate()->firstOrFail();
            $hash = hash('sha256', $data['endpoint']);
            $device = ConcoursPushSubscription::where('endpoint_hash', $hash)->lockForUpdate()->first();
            abort_if($device && $device->user_id !== $request->user()->id, 409, 'Create a new browser subscription for this account.');
            abort_if(! $device && ConcoursPushSubscription::where('user_id', $request->user()->id)->where('active', true)->count() >= 5, 422, 'At most five active browsers are supported.');
            $device ??= new ConcoursPushSubscription(['user_id' => $request->user()->id, 'endpoint_hash' => $hash]);
            if (! $device->exists || ! $device->active) {
                $device->consented_at = now();
                $device->generation = $device->exists ? $device->generation + 1 : 1;
            }
            $device->fill(['endpoint' => $data['endpoint'], 'keys' => $data['keys'], 'language' => $data['language'], 'active' => true]);
            $device->save();

            return $device;
        }, 3);

        return ApiResponse::success(['id' => $device->id, 'user_id' => $request->user()->id,
            'follow_ids' => ConcoursFollow::where('user_id', $request->user()->id)->where('active', true)->where('browser_push', true)->pluck('concours_id')]);
    }

    // Short-lived per-message capability: the service worker never stores a JWT.
    public function verify(Request $request, ConcoursPushService $push)
    {
        $data = $request->validate(['delivery_id' => 'required|integer|min:1', 'verification_token' => 'required|string|size:64|regex:/^[a-f0-9]+$/']);
        $allowed = $push->allowed($data['delivery_id'], $data['verification_token']);

        return response()->json(['data' => ['allowed' => $allowed]], $allowed ? 200 : 403)->header('Cache-Control', 'no-store');
    }

    public function destroy(Request $request, int $device)
    {
        $record = ConcoursPushSubscription::where('user_id', $request->user()->id)->findOrFail($device);
        $record->update(['active' => false]);

        return ApiResponse::success(['disabled' => true]);
    }
}
