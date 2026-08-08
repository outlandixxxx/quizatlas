<?php

namespace App\Services;

use App\Models\Friendship;
use App\Models\User;
use Illuminate\Support\Carbon;

class LeaderboardService
{
    public function list(array $filters, int $userId): array
    {
        $query = User::query()->where('xp', '>', 0);

        if ($filters['scope'] === 'friends') {
            $friendIds = Friendship::where('status', 'accepted')
                ->where(fn ($q) => $q->where('user_id', $userId)->orWhere('friend_id', $userId))
                ->get()
                ->map(fn ($f) => $f->user_id === $userId ? $f->friend_id : $f->user_id)
                ->push($userId);

            $query->whereIn('id', $friendIds);
        }

       if ($filters['scope'] === 'country') {
            $myCountry = User::find($userId)?->country;
            if ($myCountry) {
                $query->where('country', $myCountry);
            }
        }

        if (!empty($filters['major_id']) || !empty($filters['subject_id'])) {
            $query->whereHas('quizAttempts', function ($q) use ($filters) {
                $q->where('status', 'submitted')
                    ->whereHas('quiz', function ($qq) use ($filters) {
                        if (!empty($filters['subject_id'])) {
                            $qq->where('subject_id', $filters['subject_id']);
                        }
                        if (!empty($filters['major_id'])) {
                            $qq->whereHas('subject', fn ($s) => $s->where('major_id', $filters['major_id']));
                        }
                    });
            });
        }

        if (!empty($filters['period']) && $filters['period'] !== 'all') {
            $from = match ($filters['period']) {
                'week' => Carbon::now()->subWeek(),
                'month' => Carbon::now()->startOfMonth(),
                default => null,
            };
            if ($from) {
                $query->whereHas('quizAttempts', fn ($q) => $q->where('status', 'submitted')->where('submitted_at', '>=', $from));
            }
        }

        $paginated = $query->orderByDesc('xp')
            ->withCount(['quizAttempts as quizzes_completed_count' => fn ($q) => $q->where('status', 'submitted')])
            ->paginate($filters['per_page'] ?? 10);

        $rank = 0;
        $items = collect($paginated->items())->map(function ($user) use (&$rank, $paginated) {
            $rank = ($paginated->currentPage() - 1) * $paginated->perPage() + array_search($user, $paginated->items()) + 1;
            $avgAccuracy = $user->quizAttempts()->where('status', 'submitted')->avg('percentage');

            return [
                'rank' => $rank,
                'id' => $user->id,
                'name' => $user->name,
                'avatar_url' => $user->avatar_url,
                'level' => $user->level(),
                'xp' => $user->xp,
                'quizzes_completed' => $user->quizzes_completed_count,
                'accuracy' => $avgAccuracy ? round($avgAccuracy) : 0,
            ];
        });

        return [
            'items' => $items->values()->all(),
            'meta' => [
                'current_page' => $paginated->currentPage(),
                'last_page' => $paginated->lastPage(),
                'per_page' => $paginated->perPage(),
                'total' => $paginated->total(),
            ],
        ];
    }

    public function myRank(int $userId): ?array
{
    $user = User::find($userId);
    if (!$user || $user->xp === 0) return null;

    $rank = User::where('xp', '>', $user->xp)->count() + 1;

    return [
        'rank' => $rank,
        'level' => $user->level(),
        'xp' => $user->xp,
        'xp_into_current_level' => $user->xpIntoCurrentLevel(),
        'xp_for_next_level' => $user->xpForNextLevel(),
        'name' => $user->name,
        'avatar_url' => $user->avatar_url,
    ];
}
}