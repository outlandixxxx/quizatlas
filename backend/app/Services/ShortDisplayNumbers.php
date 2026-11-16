<?php

namespace App\Services;

use App\Models\{ContentUsageOperation, Subject, VideoSet};

/** Banner numbers only. Internal video_number, filenames and usage claims stay intact. */
final class ShortDisplayNumbers
{
    public function inspect(int $subjectId): array
    {
        $assigned = [];
        foreach (VideoSet::where('subject_id', $subjectId)->get(['id', 'settings']) as $video) {
            foreach ($video->settings['short_display_claims'] ?? [] as $claim) {
                $operation = ContentUsageOperation::find($claim['operation_id'] ?? null);
                // Preparation/approval has no claim. Failed/cancelled jobs with no
                // validated output release numbers; expired jobs stay held for reconciliation.
                $usedItems = $operation?->items()->where('source_type', 'question')->where('status', 'used')->exists() ?? false;
                $used = $usedItems && $this->hasVideoReceipt($operation->output ?? []);
                if ($operation && ! in_array($operation->status, ['reserved', 'used'], true) && ! $usedItems) continue;
                $assigned[] = ['number' => $claim['number'], 'video_id' => $video->id, 'operation_id' => $claim['operation_id'],
                    'legacy' => ! $operation || ($operation->status !== 'reserved' && ! $used)];
            }
        }
        // Old records did not store template or completion on VideoSet. Used
        // source receipts give a conservative baseline, NOT proof of publication.
        // Unrendered proposals, failed reservations and later assignments do not count.
        $legacy = VideoSet::where('subject_id', $subjectId)
            ->whereHas('videoSetQuestions', fn ($q) => $q->restrictsVideoReuse())
            ->whereExists(function ($q) {
                $q->selectRaw('1')->from('video_set_questions as vq')
                    ->join('content_usage_items as ui', 'ui.source_id', '=', 'vq.question_id')
                    ->join('content_usage_operations as uo', 'uo.id', '=', 'ui.operation_id')
                    ->whereColumn('vq.video_set_id', 'video_sets.id')
                    ->whereColumn('vq.created_at', '<=', 'uo.reserved_at')
                    ->where('ui.source_type', 'question')->where('ui.status', 'used')->where('uo.kind', 'quiz-video');
            })->get(['id', 'video_number', 'settings']);
        foreach ($legacy as $video) {
            if (!empty($video->settings['short_display_claims']) || !empty($video->settings['short_numbering_managed'])) continue;
            $assigned[] = ['number' => $video->video_number, 'video_id' => $video->id, 'legacy' => true];
        }
        return ['scope' => 'subject', 'subject_id' => $subjectId, 'assigned' => $assigned,
            'suggested' => max([0, ...array_column($assigned, 'number')]) + 1,
            'legacy_review_required' => collect($assigned)->contains('legacy', true)];
    }

    /** Called inside the SAME transaction as usage authorization. Subject locks
     * serialize different questions/jobs in one scope, including batch requests.
     * Failed jobs retain their approved number metadata; a retry checks it again.
     */
    public function reserve(array $document, string $operationId): void
    {
        $documents = ($document['type'] ?? '') === 'quiz-batch' ? $document['videos'] : [$document];
        $shorts = array_values(array_filter($documents, fn ($d) => isset($d['video']['display_number'])
            && in_array($d['video']['template'] ?? null, ['five-seconds', 'defi-du-jour', 'niveau-concours'], true)
            ));
        $subjects = array_unique(array_column(array_column($shorts, 'subject'), 'id')); sort($subjects);
        foreach ($subjects as $subjectId) Subject::whereKey($subjectId)->lockForUpdate()->firstOrFail();
        $batchNumbers = [];
        foreach ($shorts as $doc) {
            $number = $doc['video']['display_number'];
            abort_unless(is_int($number) && $number > 0 && $number <= 999999, 422, 'Use a positive QCM number, at most 999999.');
            $video = VideoSet::whereKey($doc['video']['id'])->lockForUpdate()->firstOrFail();
            $settings = $video->settings ?? [];
            $claims = $settings['short_display_claims'] ?? [];
            if (($document['render_options']['profile'] ?? $doc['render_options']['profile'] ?? 'final') === 'draft') {
                $settings['short_numbering_managed'] = true;
                $video->update(['settings' => $settings]);
                continue;
            }
            $key = $video->subject_id.':'.$number;
            abort_if(isset($batchNumbers[$key]), 409, 'A QCM number appears twice in this approved batch. Review the retained proposal.');
            $batchNumbers[$key] = true;
            foreach ($this->inspect($video->subject_id)['assigned'] as $assigned) {
                abort_if($assigned['number'] === $number && ($assigned['operation_id'] ?? null) !== $operationId,
                    409, 'This QCM number is already assigned for this Subject. Review the retained proposal before approving another number.');
            }
            $own = collect($claims)->firstWhere('operation_id', $operationId);
            if ($own) {
                abort_unless($own['number'] === $number, 409, 'Retry the approved QCM number.');
                continue;
            }
            $claims[] = ['number' => $number, 'operation_id' => $operationId, 'template' => $doc['video']['template'], 'language' => $doc['video']['language']];
            $settings['short_display_claims'] = $claims;
            $video->update(['settings' => $settings]);
        }
    }

    /** Called inside the registry retry transaction, before reacquiring questions. */
    public function assertRetryNumbers(string $operationId): void
    {
        $retained = [];
        foreach (VideoSet::whereNotNull('settings->short_display_claims')->get(['id', 'subject_id', 'settings']) as $video) {
            foreach ($video->settings['short_display_claims'] ?? [] as $claim) {
                if (($claim['operation_id'] ?? null) === $operationId) $retained[] = ['subject_id' => $video->subject_id, 'number' => $claim['number']];
            }
        }
        $subjects = array_values(array_unique(array_column($retained, 'subject_id'))); sort($subjects);
        foreach ($subjects as $subjectId) Subject::whereKey($subjectId)->lockForUpdate()->firstOrFail();
        foreach ($retained as $claim) {
            foreach ($this->inspect($claim['subject_id'])['assigned'] as $assigned) {
                abort_if($assigned['number'] === $claim['number'] && ($assigned['operation_id'] ?? null) !== $operationId,
                    409, 'The retained QCM number is held by another job. Review the original proposal before retrying.');
            }
        }
    }

    private function hasVideoReceipt(array $output): bool
    {
        return collect($output)->contains(fn ($receipt) => is_array($receipt) && ($receipt['kind'] ?? null) === 'video'
            && is_string($receipt['name'] ?? null) && basename($receipt['name']) === $receipt['name']
            && str_ends_with(strtolower($receipt['name']), '.mp4')
            && preg_match('/^[a-f0-9]{64}$/D', $receipt['sha256'] ?? '')
            && is_int($receipt['bytes'] ?? null) && $receipt['bytes'] > 0);
    }
}
