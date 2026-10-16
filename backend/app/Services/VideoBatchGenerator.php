<?php

namespace App\Services;

use App\Models\Subject;
use App\Models\VideoBatch;
use App\Models\VideoSet;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class VideoBatchGenerator
{
    public function __construct(
        private readonly VideoQuestionSelector $selector
    ) {}

    public function generate(
        VideoBatch $batch,
        array $subjectIds = []
    ): array {
        $settings = $batch->settings ?? [];

        if (empty($subjectIds)) {
            $subjectIds = $settings['subject_ids'] ?? [];
        }

        $subjectIds = array_values(array_unique(
            array_map('intval', $subjectIds)
        ));

        $subjectQuery = Subject::query()
            ->where('major_id', $batch->major_id)
            ->where('is_active', true);

        if ($subjectIds !== []) {
            $validIds = (clone $subjectQuery)
                ->whereIn('id', $subjectIds)
                ->pluck('id')
                ->map(fn ($id) => (int) $id)
                ->all();

            if (count($validIds) !== count($subjectIds)) {
                throw new InvalidArgumentException(
                    'Every selected Subject must be active and belong to the batch Major.'
                );
            }

            $subjectQuery->whereIn('id', $subjectIds);
        }

        $subjects = $subjectQuery->orderBy('id')->get();

        if ($subjects->isEmpty()) {
            throw new InvalidArgumentException(
                'No active Subjects were found for this Major.'
            );
        }

        $subjectIds = $subjects
            ->pluck('id')
            ->map(fn ($id) => (int) $id)
            ->all();

        $targetVideoCount = max(
            1,
            (int) $batch->target_video_count
        );

        $existingVideoCount = $batch->videoSets()->count();

        $videosStillNeeded = max(
            0,
            $targetVideoCount - $existingVideoCount
        );

        $maximumQuestions = (int) config(
            'video_selection.max_questions_per_video',
            30
        );

        $questionsPerVideo = min(
            max(1, (int) $batch->questions_per_video),
            max(1, $maximumQuestions)
        );

        $fillRatio = (float) config(
            'video_selection.minimum_fill_ratio',
            0.75
        );

        $fillRatio = min(1, max(0.1, $fillRatio));

        $minimumQuestions = max(
            1,
            (int) ceil($questionsPerVideo * $fillRatio)
        );

        $difficulty = trim((string) $batch->difficulty_filter);
        $difficulty = $difficulty !== '' ? $difficulty : null;

        $createdVideoIds = [];
        $blockedSubjects = [];
        $shortages = [];

        while (count($createdVideoIds) < $videosStillNeeded) {
            $madeProgress = false;

            // Round-robin: distribute videos across the selected Subjects.
            foreach ($subjects as $subject) {
                if (count($createdVideoIds) >= $videosStillNeeded) {
                    break;
                }

                if (isset($blockedSubjects[$subject->id])) {
                    continue;
                }

                $selection = $this->selector->selectForSubject(
                    subjectId: (int) $subject->id,
                    requestedCount: $questionsPerVideo,
                    difficulty: $difficulty
                );

                $questions = $selection['questions'];
                $selectedCount = count($questions);

                if ($selectedCount < $minimumQuestions) {
                    $blockedSubjects[$subject->id] = true;

                    $shortages[] = [
                        'subject_id' => (int) $subject->id,
                        'subject_name' => $subject->name,
                        'minimum_required' => $minimumQuestions,
                        'available_questions' => $selectedCount,
                        'stats' => $selection['stats'],
                    ];

                    continue;
                }

                // Number videos consecutively for each Subject
                // across all batches.
                $videoNumber = (int) VideoSet::query()
                    ->where('subject_id', $subject->id)
                    ->max('video_number') + 1;

                $videoSet = DB::transaction(function () use (
                    $batch,
                    $subject,
                    $videoNumber,
                    $questionsPerVideo,
                    $questions,
                    $selection,
                    $difficulty
                ) {
                    $video = VideoSet::create([
                        'video_batch_id' => $batch->id,
                        'subject_id' => $subject->id,
                        'video_number' => $videoNumber,
                        'title' => sprintf(
                            '%s — Vidéo %03d',
                            $subject->name,
                            $videoNumber
                        ),
                        'status' => 'draft',
                        'settings' => [
                            'target_questions' => $questionsPerVideo,
                            'selected_questions' => count($questions),
                            'question_shortfall' => max(
                                0,
                                $questionsPerVideo - count($questions)
                            ),
                            'difficulty_filter' => $difficulty,
                            'selection_stats' => $selection['stats'],
                        ],
                    ]);

                    foreach ($questions as $index => $item) {
                        $video->videoSetQuestions()->create([
                            'question_id' => $item['id'],
                            'question_order' => $index + 1,
                            'selection_score' => $item['selection']['score'],
                            'selection_metadata' => [
                                'breakdown' => $item['selection']['breakdown'],
                                'reasons' => $item['selection']['reasons'],
                            ],
                        ]);
                    }

                    return $video;
                });

                $createdVideoIds[] = $videoSet->id;
                $madeProgress = true;
            }

            // Stop when no Subject has enough eligible unused questions.
            if (! $madeProgress) {
                break;
            }
        }

        $settings['subject_ids'] = $subjectIds;
        $settings['last_generation'] = [
            'requested_video_count' => $targetVideoCount,
            'created_video_count' => count($createdVideoIds),
            'not_enough_questions' => $shortages,
            'generated_at' => now()->toIso8601String(),
        ];

        $batch->settings = $settings;
        $batch->save();

        $createdVideos = VideoSet::query()
            ->with('subject:id,name')
            ->withCount('videoSetQuestions')
            ->whereIn('id', $createdVideoIds)
            ->get()
            ->map(fn (VideoSet $video) => [
                'id' => $video->id,
                'subject_id' => $video->subject_id,
                'subject_name' => $video->subject?->name,
                'video_number' => $video->video_number,
                'title' => $video->title,
                'status' => $video->status,
                'question_count' => $video->video_set_questions_count,
            ])
            ->values()
            ->all();

        return [
            'batch_id' => $batch->id,
            'target_video_count' => $targetVideoCount,
            'previous_video_count' => $existingVideoCount,
            'created_video_count' => count($createdVideoIds),
            'total_video_count' => $existingVideoCount
                + count($createdVideoIds),
            'remaining_target' => max(
                0,
                $targetVideoCount
                    - $existingVideoCount
                    - count($createdVideoIds)
            ),
            'minimum_questions_per_video' => $minimumQuestions,
            'created_videos' => $createdVideos,
            'not_enough_questions' => $shortages,
        ];
    }
}