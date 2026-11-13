<?php

namespace Database\Seeders;

use App\Models\Fact;
use App\Models\Major;
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

        $majorIds = [];

        foreach (array_unique(array_column($facts, 'major_slug')) as $slug) {
            $major = Major::query()
                ->where('slug', $slug)
                ->first();

            if (! $major) {
                throw new RuntimeException(
                    "Major '{$slug}' does not exist. No facts were inserted."
                );
            }

            $majorIds[$slug] = (int) $major->id;
        }

        $created = 0;
        $skipped = 0;

        DB::transaction(function () use (
            $facts,
            $majorIds,
            &$created,
            &$skipped
        ) {
            $existingTexts = [];

            foreach ($facts as $item) {
                $majorId = $majorIds[$item['major_slug']];

                if (! isset($existingTexts[$majorId])) {
                    $existingTexts[$majorId] = Fact::withTrashed()
                        ->where('major_id', $majorId)
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
                    || isset($existingTexts[$majorId][$normalized])
                ) {
                    $skipped++;
                    continue;
                }

                Fact::create([
                    'major_id' => $majorId,
                    'text_fr' => trim($item['fr']),
                    'text_en' => trim($item['en']),
                    'text_ar' => trim($item['ar']),
                    'source_url' => $item['source_url'] ?? null,
                    'is_verified' => false,
                ]);

                $existingTexts[$majorId][$normalized] = true;
                $created++;
            }
        });

        $this->command->info(
            "Created: {$created}; skipped duplicates: {$skipped}."
        );
    }
}
