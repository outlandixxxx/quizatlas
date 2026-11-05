<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\{ContentUsageOperation, Fact, Question};
use App\Services\ContentUsage\{Exports, Fingerprint, Registry};
use Illuminate\Http\{JsonResponse, Request};
use Illuminate\Validation\Rule;

class ContentUsageController extends Controller
{
    public function index(Request $request, Registry $registry): JsonResponse
    {
        $data = $request->validate(['type' => ['sometimes', Rule::in(['question', 'fact'])],
            'status' => ['nullable', Rule::in(['available', 'reserved', 'used'])],
            'page' => ['sometimes', 'integer', 'min:1'], 'subject_id' => ['nullable', 'integer', 'min:1']]);
        $type = $data['type'] ?? 'question';
        $models = $type === 'question' ? Question::with(['choices', 'quiz.subject.major'])
            ->whereHas('quiz', fn ($q) => $q->where('is_active', true)->whereHas('subject', fn ($s) => $s->where('is_active', true)->whereHas('major', fn ($m) => $m->where('is_active', true))))
            : Fact::with('subject.major')->where('is_verified', true)->whereHas('subject', fn ($q) => $q->where('is_active', true)->whereHas('major', fn ($m) => $m->where('is_active', true)));
        if (isset($data['subject_id'])) {
            if ($type === 'question') $models->whereHas('quiz', fn ($q) => $q->where('subject_id', $data['subject_id']));
            else $models->where('subject_id', $data['subject_id']);
        }
        $sources = $models->orderBy('id')->get()->filter(fn ($m) => $m instanceof Fact
            ? collect([$m->text_fr, $m->text_ar, $m->text_en])->contains(fn ($text) => trim((string) $text) !== '')
            : trim((string) $m->question) !== '')
            ->map(fn ($m) => Fingerprint::source($m))->values()->all();
        $blockers = $registry->blockers($sources);
        $counts = ['total' => count($sources), 'available' => 0, 'reserved' => 0, 'used' => 0];
        $rows = [];
        foreach ($sources as $source) {
            $blocker = null;
            foreach ($source['identity_keys'] as $key) if (isset($blockers[$key])) {
                if (! $blocker || $blockers[$key]->status === 'used') $blocker = $blockers[$key];
            }
            $status = $blocker?->status ?? 'available'; $counts[$status]++;
            if (($data['status'] ?? null) && $status !== $data['status']) continue;
            $rows[] = array_intersect_key($source, array_flip(['source_type', 'source_id', 'label', 'subject_id', 'fingerprint'])) + [
                'status' => $status, 'operation' => $blocker ? [
                    'id' => $blocker->id, 'kind' => $blocker->kind, 'expires_at' => $blocker->expires_at,
                    'completed_at' => $blocker->completed_at, 'output' => json_decode($blocker->output ?? '[]', true),
                    'expired' => $status === 'reserved' && \Carbon\Carbon::parse($blocker->expires_at)->lessThanOrEqualTo(now()),
                ] : null,
            ];
        }
        $page = $data['page'] ?? 1;
        return response()->json(['data' => array_slice($rows, ($page - 1) * 20, 20), 'counts' => $counts,
            'meta' => ['current_page' => $page, 'last_page' => max(1, (int) ceil(count($rows) / 20)), 'total' => count($rows)]])->header('Cache-Control', 'no-store');
    }

    public function export(Request $request, Exports $exports): JsonResponse
    {
        $data = $request->validate(['operation_id' => ['required', 'uuid'],
            'kind' => ['required', Rule::in(['posts-json', 'quiz-json', 'revision-json'])],
            'content' => ['required', 'string', 'max:2097152', 'json']]);
        $document = json_decode($data['content'], true);
        abort_unless(is_array($document), 422);
        $result = $exports->create($request->user()->id, $data['operation_id'], $data['kind'], $document);
        return response()->json(['data' => ['operation' => $this->resource($result['operation']), 'content' => $result['content']]])->header('Cache-Control', 'no-store');
    }

    public function download(ContentUsageOperation $operation, Exports $exports)
    {
        $result = $exports->read($operation);
        return response($result['content'])->header('Content-Type', 'application/json')
            ->header('Content-Disposition', 'attachment; filename="'.$operation->output[0]['name'].'"')->header('Cache-Control', 'no-store');
    }
    public function recover(Registry $registry): JsonResponse { return response()->json(['data' => ['released' => $registry->recover()]]); }
    private function resource(ContentUsageOperation $op): array
    {
        return $op->only(['id', 'kind', 'status', 'reserved_at', 'completed_at', 'output']);
    }
}
