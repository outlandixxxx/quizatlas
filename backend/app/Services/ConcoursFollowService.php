<?php

namespace App\Services;

use App\Models\Concours;
use App\Models\ConcoursFollow;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class ConcoursFollowService
{
    public function save(User $user, Concours $concours, array $data): ConcoursFollow
    {
        $data['preparation_option_ids'] = array_map('intval', $data['preparation_option_ids']);
        $data['reminder_days'] = array_map('intval', $data['reminder_days']);

        return DB::transaction(function () use ($user, $concours, $data) {
            // Serialize creation for this user; the DB uniqueness remains authoritative.
            User::whereKey($user->id)->lockForUpdate()->firstOrFail();
            $follow = ConcoursFollow::where('user_id', $user->id)->where('concours_id', $concours->id)->lockForUpdate()->first();
            abort_if(($follow?->version ?? 0) !== (int) $data['version'], 409, 'Reload this follow before saving.');
            $ids = $data['preparation_option_ids'];
            if ($concours->preparationOptions()->when($data['active'], fn ($q) => $q->available())->whereIn('id', $ids)->count() !== count($ids)) {
                throw ValidationException::withMessages(['preparation_option_ids' => 'Choose active tracks belonging to this concours.']);
            }
            if ($data['active'] && (! $follow || ! $follow->active) && ConcoursFollow::where('user_id', $user->id)->where('active', true)->count() >= 100) {
                throw ValidationException::withMessages(['concours_id' => 'At most 100 concours may be followed.']);
            }
            $active = $data['active'];
            $follow ??= new ConcoursFollow(['user_id' => $user->id, 'concours_id' => $concours->id, 'version' => 0]);
            if ($active && (! $follow->exists || ! $follow->active)) {
                $follow->followed_at = now();
            }
            $follow->followed_at ??= now();
            $follow->fill(collect($data)->only(['active', 'in_app', 'browser_push', 'announcements', 'updates', 'deadlines', 'reminder_days'])->all());
            $follow->version++;
            $follow->save();
            $follow->preparationOptions()->syncWithPivotValues($ids, ['concours_id' => $concours->id]);

            return $follow->load('preparationOptions');
        }, 3);
    }

    public function dto(?ConcoursFollow $follow): array
    {
        return $follow ? $follow->only(['id', 'concours_id', 'active', 'in_app', 'browser_push', 'announcements', 'updates', 'deadlines', 'reminder_days', 'version'])
            + ['preparation_option_ids' => $follow->preparationOptions->pluck('id')->all()]
            : ['active' => false, 'version' => 0, 'in_app' => true, 'browser_push' => false, 'announcements' => true,
                'updates' => true, 'deadlines' => true, 'reminder_days' => config('concours_notifications.reminder_days'), 'preparation_option_ids' => []];
    }
}
