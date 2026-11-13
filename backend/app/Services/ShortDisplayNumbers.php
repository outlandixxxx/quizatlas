<?php

namespace App\Services;

use App\Models\{Subject, VideoSet};

/** Banner numbers only. Internal video_number, filenames and usage claims stay intact. */
final class ShortDisplayNumbers
{
    public function inspect(int $subjectId): array
    {
        $assigned = [];
        foreach (VideoSet::where('subject_id', $subjectId)->get(['id', 'settings']) as $video) {
            foreach ($video->settings['short_display_claims'] ?? [] as $claim) {
                $assigned[] = ['number' => $claim['number'], 'video_id' => $video->id, 'operation_id' => $claim['operation_id'], 'legacy' => false];
            }
        }
        // Old records did not store template or completion on VideoSet. Used
        // source receipts give a conservative baseline, NOT proof of publication.
        // Unrendered proposals, failed reservations and later assignments do not count.
        $legacy = VideoSet::where('subject_id', $subjectId)
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
     * Failed jobs keep their approved reservation so a retry cannot collide.
     */
    public function reserve(array $document, string $operationId): void
    {
        $documents = ($document['type'] ?? '') === 'quiz-batch' ? $document['videos'] : [$document];
        $shorts = array_values(array_filter($documents, fn ($d) => isset($d['video']['display_number'])
            && in_array($d['video']['template'] ?? null, ['five-seconds', 'defi-du-jour', 'niveau-concours'], true)
            ));
        $subjects = array_unique(array_column(array_column($shorts, 'subject'), 'id')); sort($subjects);
        foreach ($subjects as $subjectId) Subject::whereKey($subjectId)->lockForUpdate()->firstOrFail();
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
            $own = collect($claims)->firstWhere('operation_id', $operationId);
            if ($own) {
                abort_unless($own['number'] === $number, 409, 'Retry the approved QCM number.');
                continue;
            }
            foreach ($this->inspect($video->subject_id)['assigned'] as $assigned) {
                abort_if($assigned['number'] === $number, 409, 'This QCM number is already assigned for this Subject. Refresh the proposed numbers before approving.');
            }
            $claims[] = ['number' => $number, 'operation_id' => $operationId, 'template' => $doc['video']['template'], 'language' => $doc['video']['language']];
            $settings['short_display_claims'] = $claims;
            $video->update(['settings' => $settings]);
        }
    }
}
