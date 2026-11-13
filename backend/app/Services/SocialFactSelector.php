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
     * @param  int[]     $excludeFactIds      facts already in the current pack
     */
    public function select(
        int $majorId,
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
            ->with('major:id,name')
            ->where('is_verified', true)
            ->where('major_id', $majorId)
            ->whereHas('major', fn (Builder $query) => $query->where('is_active', true))
            ->when(
                $exclude !== [],
                fn (Builder $query) => $query->whereNotIn('id', $exclude)
            );

        return app(\App\Services\ContentUsage\Registry::class)->available($query
            ->orderBy('verified_at')
            ->orderBy('id')
            ->get())->take(max(1, $count))
            ->map(fn (Fact $fact) => self::format($fact))
            ->all();
    }

    public static function format(Fact $fact): array
    {
        return [
            'id' => (int) $fact->id,
            'major_id' => (int) $fact->major_id,
            'major_name' => $fact->major?->name,
            'fr' => (string) $fact->text_fr,
            'en' => (string) $fact->text_en,
            'ar' => (string) $fact->text_ar,
            'source_url' => $fact->source_url,
        ];
    }
}
