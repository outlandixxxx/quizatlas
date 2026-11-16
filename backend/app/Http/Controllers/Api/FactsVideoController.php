<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use App\Services\SocialFactSelector;
use App\Services\SocialQuestionSelector;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class FactsVideoController extends Controller
{
    public function options(Request $request): JsonResponse
    {
        $profile = $request->validate(['profile' => ['sometimes', Rule::in(['facts-short', 'facts-long'])]])['profile'] ?? 'facts-short';
        $facts = $this->query()->get();
        $majors = $facts->groupBy('major_id')->map(function ($items) use ($profile) {
            $major = $items->first()->major;
            $counts = [];
            foreach (['fr', 'ar', 'en'] as $lang) {
                $counts[$lang] = $this->uniqueLanguage($items, $lang, $profile)->count();
            }
            return ['id' => $major->id, 'name' => $major->name, 'available' => $counts];
        })->filter(fn ($major) => array_sum($major['available']) > 0)->values();

        return response()->json(['data' => $majors]);
    }

    public function export(Request $request): JsonResponse
    {
        $data = $request->validate([
            'major_id' => ['required', 'integer', 'exists:majors,id'],
            'language' => ['required', Rule::in(['fr', 'ar', 'en'])],
            'profile' => ['required', Rule::in(['facts-short', 'facts-long'])],
            'count' => ['required', 'integer', 'min:1', 'max:300'],
            'batch_size' => ['sometimes', 'integer', 'min:1', 'max:60'],
            'exclude_ids' => ['sometimes', 'array', 'max:18000'],
            'exclude_ids.*' => ['integer', 'min:1', 'distinct'],
            'fact_ids' => ['sometimes', 'array', 'min:1', 'max:18000'],
            'fact_ids.*' => ['required', 'integer', 'distinct'],
            'duration' => ['prohibited'],
            'target_duration' => ['prohibited'],
        ]);
        if ($data['profile'] === 'facts-short' && $data['count'] > 12) {
            throw ValidationException::withMessages(['count' => 'Short/Reel supports up to 12 facts.']);
        }
        $total = $data['count'] * ($data['batch_size'] ?? 1);
        $rows = $this->query()->where('major_id', $data['major_id'])
            ->orderBy('verified_at')->orderBy('id')->get();
        $rows = $this->uniqueLanguage($rows, $data['language'], $data['profile']);
        $rows = $rows->whereNotIn('id', $data['exclude_ids'] ?? [])->values();
        $available = $rows->count();
        if (isset($data['fact_ids'])) {
            $byId = $rows->keyBy('id');
            $rows = collect($data['fact_ids'])->map(fn ($id) => $byId->get($id))->filter();
            if ($rows->count() !== count($data['fact_ids']) || $rows->count() !== $total) {
                throw ValidationException::withMessages(['fact_ids' => 'Selected facts are unavailable in this Major and language.']);
            }
        } elseif ($data['profile'] === 'facts-short') {
            // Prefer concise facts without truncating or rewriting their content.
            $rows = $rows->sortBy(fn ($fact) => mb_strlen($fact->{'text_'.$data['language']}))->values();
        }
        if ($rows->count() < $total) {
            throw ValidationException::withMessages(['count' => "Only {$available} verified, distinct facts are available in the selected language."]);
        }
        $selected = $rows->take($total);
        $major = $selected->first()->major;

        $majorName = config('fact_major_labels.'.$major->slug.'.'.$data['language'], $major->name);

        return response()->json(['data' => [
            'format_version' => 'facts-video-v1',
            'type' => $data['profile'],
            'language' => $data['language'],
            'video' => ['title' => $majorName.' · '.$selected->count().' · '.strtoupper($data['language'])],
            'major' => ['id' => $major->id, 'name' => $majorName, 'slug' => $major->slug],
            'facts' => $selected->map(function ($fact) use ($data) {
                $formatted = SocialFactSelector::format($fact);

                return [
                    'id' => $formatted['id'],
                    'text' => trim($formatted[$data['language']]),
                    // The facts table stores statements, not explanations. Never invent one.
                    'detail' => '', 'source_url' => $formatted['source_url'],
                ];
            })->values(),
            'meta' => ['available' => $available, 'exported_at' => now()->toIso8601String()],
        ]])->header('Cache-Control', 'no-store');
    }

    private function query()
    {
        return Fact::query()->with('major')->where('is_verified', true)
            ->whereHas('major', fn ($q) => $q->where('is_active', true));
    }

    private function uniqueLanguage($rows, string $language, string $profile)
    {
        return app(\App\Services\ContentUsage\Registry::class)->available($rows->filter(fn ($fact) => trim((string) $fact->{'text_'.$language}) !== ''), ['language' => $language, 'video_type' => $profile])
            ->unique(fn ($fact) => SocialQuestionSelector::normalizeText($fact->{'text_'.$language}))->values();
    }
}
