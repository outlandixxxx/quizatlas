<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Fact;
use Illuminate\Validation\ValidationException;
use App\Services\RevisionImageSourceValidator;

/** Short lived, single use capabilities: the browser never sends its JWT to Node. */
class LocalRenderController extends Controller
{
    public function ticket(Request $request, RevisionImageSourceValidator $revisionSources): JsonResponse
    {
        abort_unless(app()->environment(['local', 'testing']), 404);
        $input = $request->validate(['content' => ['required', 'string', 'max:2097152']]);
        $document = json_decode($input['content'], true);
        abort_unless(is_array($document), 422, 'Invalid render JSON.');
        if (($document['type'] ?? null) === 'revision-batch') {
            $revisionSources->validate($document);
        }
        if (in_array($document['type'] ?? null, ['facts-short', 'facts-long'], true)) {
            $language = $document['language'] ?? '';
            abort_unless(in_array($language, ['fr', 'ar', 'en'], true), 422);
            $items = $document['facts'] ?? [];
            abort_unless(is_array($items) && count($items) >= 1 && count($items) <= 300, 422);
            $facts = Fact::with('subject.major')->where('is_verified', true)->whereIn('id', array_column($items, 'id'))->get()->keyBy('id');
            foreach ($items as $item) {
                $fact = $facts->get($item['id'] ?? null);
                if (! $fact || ! $fact->subject?->is_active || ! $fact->subject?->major?->is_active
                    || $fact->subject->major_id !== ($document['major']['id'] ?? null)
                    || $fact->subject_id !== ($item['subject_id'] ?? null)
                    || $fact->subject->name !== ($item['subject_name'] ?? null)
                    || trim($fact->{'text_'.$language}) !== ($item['text'] ?? null)
                    || ($item['detail'] ?? '') !== '' || $fact->source_url !== ($item['source_url'] ?? null)) {
                    throw ValidationException::withMessages(['content' => 'A selected fact is unavailable or differs from its stored source. Refresh the selection.']);
                }
            }
        }
        $ticket = bin2hex(random_bytes(32));
        Cache::put('local-render:'.hash('sha256', $ticket), ['user_id' => $request->user()->id, 'hash' => hash('sha256', $input['content'])], 120);

        return response()->json(['data' => ['ticket' => $ticket]])->header('Cache-Control', 'no-store');
    }

    public function authorizeTicket(Request $request): JsonResponse
    {
        abort_unless(app()->environment(['local', 'testing']), 404);
        $data = $request->validate(['ticket' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/'], 'content_hash' => ['required', 'string', 'regex:/^[a-f0-9]{64}$/']]);
        $key = 'local-render:'.hash('sha256', $data['ticket']);
        $capability = Cache::lock($key.':lock', 5)->block(3, fn () => Cache::pull($key));
        abort_unless($capability && hash_equals($capability['hash'], $data['content_hash']), 403, 'Render payload does not match its ticket.');
        $user = User::find($capability['user_id']);
        abort_unless($user?->isAdmin(), 403, 'Expired or invalid local render ticket.');

        return response()->json(['data' => ['admin_id' => $user->id]])->header('Cache-Control', 'no-store');
    }
}
