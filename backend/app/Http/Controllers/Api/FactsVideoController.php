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
    public function options(): JsonResponse
    {
        $facts = app(\App\Services\ContentUsage\Registry::class)->available($this->query()->get());
        $majors = $facts->groupBy(fn ($fact) => $fact->subject->major_id)->map(function ($items) {
            $major = $items->first()->subject->major;

            return ['id' => $major->id, 'name' => $major->name, 'subjects' =>
                $items->groupBy('subject_id')->map(function ($rows) {
                    $subject = $rows->first()->subject;
                    $counts = [];
                    foreach (['fr', 'ar', 'en'] as $lang) {
                        $counts[$lang] = $this->uniqueLanguage($rows, $lang)->count();
                    }

                    return ['id' => $subject->id, 'name' => $subject->name, 'available' => $counts];
                })->values()];
        })->values();

        return response()->json(['data' => $majors]);
    }

    public function export(Request $request): JsonResponse
    {
        $data = $request->validate([
            'major_id' => ['required', 'integer', 'exists:majors,id'],
            'subject_id' => ['nullable', 'integer', 'exists:subjects,id'],
            'language' => ['required', Rule::in(['fr', 'ar', 'en'])],
            'profile' => ['required', Rule::in(['facts-short', 'facts-long'])],
            'count' => ['required', 'integer', 'min:1', 'max:300'],
            'fact_ids' => ['sometimes', 'array', 'min:1', 'max:300'],
            'fact_ids.*' => ['required', 'integer', 'distinct'],
            'duration' => ['prohibited'],
            'target_duration' => ['prohibited'],
        ]);
        if ($data['profile'] === 'facts-short' && $data['count'] > 12) {
            throw ValidationException::withMessages(['count' => 'Short/Reel supports up to 12 facts.']);
        }
        $rows = $this->query()->whereHas('subject', fn ($q) => $q->where('major_id', $data['major_id']))
            ->when($data['subject_id'] ?? null, fn ($q, $id) => $q->where('subject_id', $id))
            ->orderBy('subject_id')->orderBy('verified_at')->orderBy('id')->get();
        $rows = $this->uniqueLanguage($rows, $data['language']);
        $available = $rows->count();
        if (isset($data['fact_ids'])) {
            $byId = $rows->keyBy('id');
            $rows = collect($data['fact_ids'])->map(fn ($id) => $byId->get($id))->filter();
            if ($rows->count() !== count($data['fact_ids']) || $rows->count() !== $data['count']) {
                throw ValidationException::withMessages(['fact_ids' => 'Selected facts are unavailable in this subject and language.']);
            }
        } elseif ($data['profile'] === 'facts-short') {
            // Prefer concise facts without truncating or rewriting their content.
            $rows = $rows->sortBy(fn ($fact) => mb_strlen($fact->{'text_'.$data['language']}))->values();
        }
        if ($rows->count() < $data['count']) {
            throw ValidationException::withMessages(['count' => "Only {$available} verified, distinct facts are available in the selected language."]);
        }
        $selected = $rows->take($data['count']);
        $major = $selected->first()->subject->major;

        return response()->json(['data' => [
            'format_version' => 'facts-video-v1',
            'type' => $data['profile'],
            'language' => $data['language'],
            'video' => ['title' => $major->name.' · '.$selected->count().' · '.strtoupper($data['language'])],
            'major' => ['id' => $major->id, 'name' => $major->name],
            'facts' => $selected->map(function ($fact) use ($data) {
                $formatted = SocialFactSelector::format($fact);

                return [
                    'id' => $formatted['id'], 'subject_id' => $formatted['subject_id'],
                    'subject_name' => $formatted['subject_name'],
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
        return Fact::query()->with('subject.major')->where('is_verified', true)
            ->whereHas('subject', fn ($q) => $q->where('is_active', true)
                ->whereHas('major', fn ($m) => $m->where('is_active', true)));
    }

    private function uniqueLanguage($rows, string $language)
    {
        return app(\App\Services\ContentUsage\Registry::class)->available($rows->filter(fn ($fact) => trim((string) $fact->{'text_'.$language}) !== ''))
            ->unique(fn ($fact) => SocialQuestionSelector::normalizeText($fact->{'text_'.$language}))->values();
    }
}
