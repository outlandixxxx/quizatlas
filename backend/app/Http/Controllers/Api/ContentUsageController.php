<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\{ContentUsageOperation, Fact, Question, Subject};
use App\Services\VideoQuestionSelector;
use App\Services\ContentUsage\{Exports, Fingerprint, Registry};
use Illuminate\Http\{JsonResponse, Request};
use Illuminate\Validation\Rule;

class ContentUsageController extends Controller
{
    public function index(Request $request, Registry $registry): JsonResponse
    {
        $data = $request->validate(['type' => ['sometimes', Rule::in(['question', 'fact'])],
            'language' => ['required_with:video_type', Rule::in(Fingerprint::FACT_LANGUAGES)],
            'video_type' => [Rule::requiredIf(($request->input('type') ?? 'question') === 'fact' && $request->filled('language')), Rule::in(Fingerprint::FACT_VIDEO_TYPES)],
            'context' => ['sometimes', Rule::in(['quiz-video'])],
            'template' => ['nullable', Rule::in(['long', 'five-seconds', 'defi-du-jour', 'niveau-concours'])],
            'difficulty' => ['nullable', Rule::in(['Beginner', 'Intermediate', 'Advanced', 'Professional'])],
            'subject_ids' => ['sometimes', 'array', 'max:100'], 'subject_ids.*' => ['integer', 'min:1'],
            'status' => ['nullable', Rule::in(['available', 'reserved', 'used', 'legacy_restricted'])],
            'page' => ['sometimes', 'integer', 'min:1'], 'major_id' => ['nullable', 'integer', 'min:1'], 'subject_id' => ['nullable', 'integer', 'min:1']]);
        $type = $data['type'] ?? 'question';
        if (($data['context'] ?? null) === 'quiz-video') {
            abort_unless($type === 'question', 422, 'Quiz-video availability is for questions.');
            return $this->quizVideos($data);
        }
        abort_if(($data['status'] ?? null) === 'legacy_restricted', 422, 'Legacy restrictions require quiz-video context.');
        $scope = $type === 'fact' && isset($data['language'], $data['video_type']) ? ['language' => $data['language'], 'video_type' => $data['video_type']] : null;
        $models = $type === 'question' ? Question::with(['choices', 'quiz.subject.major'])
            ->whereHas('quiz', fn ($q) => $q->where('is_active', true)->whereHas('subject', fn ($s) => $s->where('is_active', true)->whereHas('major', fn ($m) => $m->where('is_active', true))))
            : Fact::with('major')->where('is_verified', true)->whereHas('major', fn ($m) => $m->where('is_active', true));
        if (isset($data['subject_id'])) {
            if ($type === 'question') $models->whereHas('quiz', fn ($q) => $q->where('subject_id', $data['subject_id']));

        }
        if ($type === 'fact' && isset($data['major_id'])) $models->where('major_id', $data['major_id']);
        $counts = ['total' => 0, 'available' => 0, 'reserved' => 0, 'used' => 0];
        $rows = []; $matching = 0; $page = $data['page'] ?? 1; $offset = ($page - 1) * 20;
        // Catalogue-wide counts need every source, not every Eloquent model held
        // in memory at once. Retain only the requested page's response rows.
        $models->orderBy('id')->chunkById(250, function ($models) use ($registry, $data, $scope, $offset, &$counts, &$rows, &$matching) {
            $sources = $models->filter(fn ($m) => $m instanceof Fact
                ? ($scope ? trim((string) $m->{'text_'.$scope['language']}) !== '' : collect([$m->text_fr, $m->text_ar, $m->text_en])->contains(fn ($text) => trim((string) $text) !== ''))
                : trim((string) $m->question) !== '')->map(fn ($m) => $m instanceof Fact && $scope
                    ? Fingerprint::factVideo($m, $scope['language'], $scope['video_type']) : Fingerprint::source($m))->values()->all();
            $blockers = $registry->blockers($sources);
            foreach ($sources as $source) {
                $blocker = null;
                foreach ($source['identity_keys'] as $key) if (isset($blockers[$key])) {
                    if (! $blocker || $blockers[$key]->status === 'used') $blocker = $blockers[$key];
                }
                $status = $blocker?->status ?? 'available'; $counts['total']++; $counts[$status]++;
                if (($data['status'] ?? null) && $status !== $data['status']) continue;
                $index = $matching++;
                if ($index < $offset || $index >= $offset + 20) continue;
                $rows[] = array_intersect_key($source, array_flip(['source_type', 'source_id', 'label', 'subject_id', 'major_id', 'fingerprint'])) + [
                    'status' => $status, 'operation' => $blocker ? [
                        'id' => $blocker->id, 'kind' => $blocker->kind, 'expires_at' => $blocker->expires_at,
                        'completed_at' => $blocker->completed_at, 'output' => json_decode($blocker->output ?? '[]', true),
                        'expired' => $status === 'reserved' && \Carbon\Carbon::parse($blocker->expires_at)->lessThanOrEqualTo(now()),
                    ] : null,
                ];
            }
        });
        return response()->json(['data' => $rows, 'counts' => $counts,
            'meta' => ['current_page' => $page, 'last_page' => max(1, (int) ceil($matching / 20)), 'total' => $matching]])->header('Cache-Control', 'no-store');
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

    private function quizVideos(array $data): JsonResponse
    {
        $subjects = Subject::where('is_active', true)->whereHas('major', fn ($q) => $q->where('is_active', true));
        if (isset($data['major_id'])) $subjects->where('major_id', $data['major_id']);
        if (isset($data['subject_id'])) $subjects->whereKey($data['subject_id']);
        if (! empty($data['subject_ids'])) $subjects->whereIn('id', $data['subject_ids']);
        $counts = ['total' => 0, 'total_eligible' => 0, 'available' => 0, 'reserved' => 0, 'used' => 0, 'consumed' => 0, 'legacy_restricted' => 0];
        $stats = ['skipped_invalid' => 0, 'skipped_low_score' => 0, 'skipped_language' => 0, 'skipped_template' => 0, 'skipped_duplicates' => 0];
        $rows = []; $matching = 0; $page = $data['page'] ?? 1; $offset = ($page - 1) * 20;
        foreach ($subjects->orderBy('id')->cursor() as $subject) {
            $pool = app(VideoQuestionSelector::class)->eligibilityForSubject($subject->id, $data['difficulty'] ?? null, $data['language'] ?? null, $data['template'] ?? null);
            foreach (['total_eligible', 'available', 'reserved', 'consumed', 'legacy_restricted'] as $key) $counts[$key] += $pool['stats'][$key];
            foreach (array_keys($stats) as $key) $stats[$key] += $pool['stats'][$key];
            foreach ($pool['eligibility'] as $item) {
                $status = $item['status'];
                if (($data['status'] ?? null) && $status !== $data['status']) continue;
                $index = $matching++;
                if ($index < $offset || $index >= $offset + 20) continue;
                $source = Fingerprint::source($item['question']);
                $blocker = $item['operation'];
                $rows[] = array_intersect_key($source, array_flip(['source_type', 'source_id', 'label', 'subject_id', 'major_id', 'fingerprint'])) + [
                    'status' => $status, 'restriction_reason' => $status === 'legacy_restricted' ? 'legacy_restricted' : null,
                    'operation' => $blocker ? ['id' => $blocker->id, 'kind' => $blocker->kind, 'expires_at' => $blocker->expires_at,
                        'completed_at' => $blocker->completed_at, 'output' => json_decode($blocker->output ?? '[]', true),
                        'expired' => $status === 'reserved' && \Carbon\Carbon::parse($blocker->expires_at)->lessThanOrEqualTo(now())] : null,
                ];
            }
        }
        $counts['total'] = $counts['total_eligible']; $counts['used'] = $counts['consumed'];
        return response()->json(['data' => $rows, 'counts' => $counts, 'selection_stats' => $stats,
            'meta' => ['current_page' => $page, 'last_page' => max(1, (int) ceil($matching / 20)), 'total' => $matching]])->header('Cache-Control', 'no-store');
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
