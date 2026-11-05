<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ContentUsage\{Fingerprint, Registry, Sources};
use Illuminate\Http\{JsonResponse, Request};
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\Rule;

/** Short-lived, single-use capabilities; the browser never sends its JWT to Node. */
class LocalRenderController extends Controller
{
    public function ticket(Request $request, Sources $sources): JsonResponse
    {
        abort_unless(app()->environment(['local', 'testing']), 404);
        $input = $request->validate([
            'content' => ['required', 'string', 'max:2097152', 'json'],
            'purpose' => ['sometimes', Rule::in(['estimate', 'render'])],
            'operation_id' => ['required_if:purpose,render', 'nullable', 'uuid'],
            'parent_ids' => ['sometimes', 'array', 'max:1000'], 'parent_ids.*' => ['required', 'uuid', 'distinct'],
        ]);
        $document = json_decode($input['content'], true);
        abort_unless(is_array($document), 422, 'Invalid render JSON.');
        $selection = $sources->render($document);
        $purpose = $input['purpose'] ?? 'estimate';
        abort_unless($purpose !== 'estimate' || in_array($selection['kind'], ['facts-short', 'facts-long'], true), 422, 'Only facts support duration estimates.');
        $ticket = bin2hex(random_bytes(32));
        Cache::put('local-render:'.hash('sha256', $ticket), [
            'user_id' => $request->user()->id, 'hash' => hash('sha256', $input['content']),
            'purpose' => $purpose, 'document' => $document,
            'operation_id' => $input['operation_id'] ?? null, 'parents' => $input['parent_ids'] ?? [],
        ], 120);
        return response()->json(['data' => ['ticket' => $ticket]])->header('Cache-Control', 'no-store');
    }

    public function authorizeTicket(Request $request, Sources $sources, Registry $registry): JsonResponse
    {
        abort_unless(app()->environment(['local', 'testing']), 404);
        $data = $request->validate(['ticket' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/'],
            'content_hash' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/'],
            'purpose' => ['sometimes', Rule::in(['estimate', 'render'])]]);
        $key = 'local-render:'.hash('sha256', $data['ticket']);
        $capability = Cache::lock($key.':lock', 5)->block(3, fn () => Cache::pull($key));
        abort_unless($capability && hash_equals($capability['hash'], $data['content_hash'])
            && $capability['purpose'] === ($data['purpose'] ?? 'estimate'), 403, 'Render payload or purpose does not match its ticket.');
        $user = User::find($capability['user_id']);
        abort_unless($user?->isAdmin(), 403, 'Expired or invalid local render ticket.');
        $selection = $sources->render($capability['document']); // Revalidate after ticket issuance.
        $usage = null;
        if ($capability['purpose'] === 'render') {
            abort_unless($capability['operation_id'], 422, 'A render operation ID is required.');
            $op = $registry->reserve($user->id, $capability['operation_id'], $selection['kind'],
                Fingerprint::requestHash([$selection['kind'], $capability['document'], $capability['parents']]),
                $selection['sources'], $capability['parents']);
            $usage = $registry->credentials($op);
        }
        return response()->json(['data' => ['admin_id' => $user->id, 'usage' => $usage]])->header('Cache-Control', 'no-store');
    }
}
