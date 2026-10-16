<?php

namespace App\Services;

use App\Models\Fact;
use App\Models\SocialPost;
use Illuminate\Database\Eloquent\Builder;

/**
 * Picks verified, never-published facts for fact shorts and
 * "30 faits" long videos.
 */
class SocialFactSelector
{
    /**
     * @param  int|null  $preferredSubjectId  facts from this Subject come first
     * @param  int[]     $excludeFactIds      facts already in the current pack
     */
    public function select(
        int $majorId,
        ?int $preferredSubjectId,
        int $count,
        array $excludeFactIds = []
    ): array {
        $usedOnSocial = SocialPost::query()
            ->whereNotNull('fact_id')
            ->distinct()
            ->pluck('fact_id')
            ->map(fn ($id) => (int) $id)
            ->all();

        $exclude = array_values(array_unique(array_merge(
            $usedOnSocial,
            array_map('intval', $excludeFactIds)
        )));

        $query = Fact::query()
            ->with('subject:id,name')
            ->where('is_verified', true)
            ->whereHas(
                'subject',
                fn (Builder $query) => $query->where('major_id', $majorId)
            )
            ->when(
                $exclude !== [],
                fn (Builder $query) => $query->whereNotIn('id', $exclude)
            );

        if ($preferredSubjectId !== null) {
            $query->orderByRaw(
                'CASE WHEN subject_id = ? THEN 0 ELSE 1 END',
                [$preferredSubjectId]
            );
        }

        return $query
            ->orderBy('verified_at')
            ->orderBy('id')
            ->limit(max(1, $count))
            ->get()
            ->map(fn (Fact $fact) => self::format($fact))
            ->all();
    }

    public static function format(Fact $fact): array
    {
        return [
            'id' => (int) $fact->id,
            'subject_id' => (int) $fact->subject_id,
            'subject_name' => $fact->subject?->name,
            'fr' => (string) $fact->text_fr,
            'en' => (string) $fact->text_en,
            'ar' => (string) $fact->text_ar,
            'source_url' => $fact->source_url,
        ];
    }
}
