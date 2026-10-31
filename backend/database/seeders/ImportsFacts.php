<?php

namespace Database\Seeders;

use App\Models\Fact;
use App\Models\Major;
use App\Models\Subject;
use App\Services\SocialQuestionSelector;
use Illuminate\Support\Facades\DB;
use RuntimeException;

trait ImportsFacts
{
    protected function importFacts(array $facts): void
    {
        if ($facts === []) {
            return;
        }

        $subjectIds = [];

        foreach (array_unique(array_column($facts, 'major_slug')) as $slug) {
            $major = Major::query()
                ->where('slug', $slug)
                ->first();

            if (! $major) {
                throw new RuntimeException(
                    "Major '{$slug}' does not exist. No facts were inserted."
                );
            }

            $subjects = Subject::query()
                ->where('major_id', $major->id)
                ->orderBy('id')
                ->get(['id', 'name', 'slug']);

            if ($subjects->isEmpty()) {
                throw new RuntimeException(
                    "Major '{$slug}' has no subjects. No facts were inserted."
                );
            }

            if ($subjects->count() === 1) {
                $subjectIds[$slug] = (int) $subjects->first()->id;

                $this->command->info(
                    "{$slug}: using subject {$subjects->first()->slug}"
                );

                continue;
            }

          

            $choices = $subjects
                ->mapWithKeys(fn (Subject $subject) => [
                    (int) $subject->id => "{$subject->id}: {$subject->slug}",
                ])
                ->all();

            $selected = $this->command->choice(
                "Choose the default subject for '{$slug}' facts",
                array_values($choices)
            );

            $subjectId = array_search($selected, $choices, true);

            if ($subjectId === false) {
                throw new RuntimeException('Invalid subject selection.');
            }

            $subjectIds[$slug] = (int) $subjectId;
        }

        $created = 0;
        $skipped = 0;

        DB::transaction(function () use (
            $facts,
            $subjectIds,
            &$created,
            &$skipped
        ) {
            $existingTexts = [];

            foreach ($facts as $item) {
                $subjectId = $subjectIds[$item['major_slug']];

                if (! isset($existingTexts[$subjectId])) {
                    $existingTexts[$subjectId] = Fact::query()
                        ->where('subject_id', $subjectId)
                        ->pluck('text_fr')
                        ->map(fn ($text) =>
                            SocialQuestionSelector::normalizeText((string) $text)
                        )
                        ->flip()
                        ->all();
                }

                $normalized = SocialQuestionSelector::normalizeText($item['fr']);

                if (
                    $normalized === ''
                    || isset($existingTexts[$subjectId][$normalized])
                ) {
                    $skipped++;
                    continue;
                }

                Fact::create([
                    'subject_id' => $subjectId,
                    'text_fr' => trim($item['fr']),
                    'text_en' => trim($item['en']),
                    'text_ar' => trim($item['ar']),
                    'source_url' => $item['source_url'] ?? null,
                    'is_verified' => false,
                ]);

                $existingTexts[$subjectId][$normalized] = true;
                $created++;
            }
        });

        $this->command->info(
            "Created: {$created}; skipped duplicates: {$skipped}."
        );
    }
}