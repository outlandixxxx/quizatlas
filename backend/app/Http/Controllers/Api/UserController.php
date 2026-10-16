<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Helpers\ApiResponse;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    private const USERNAME_COOLDOWN_DAYS = 30; // set to 0 to remove the limit

    private function usernameChangeAvailableAt($user): ?string
    {
        if (self::USERNAME_COOLDOWN_DAYS <= 0 || ! $user->username_changed_at) {
            return null;
        }

        $at = $user->username_changed_at->copy()->addDays(self::USERNAME_COOLDOWN_DAYS);

        return $at->isFuture() ? $at->toIso8601String() : null;
    }

    /**
     * Shared shape for profile responses across profile/update/avatar endpoints.
     */
    private function toProfileArray($user): array
    {
        return [
            'id'               => $user->id,
            'name'             => $user->name,
            'username'         => $user->username,
            'username_change_available_at' => $this->usernameChangeAvailableAt($user),
            'email'            => $user->email,
            'role'             => $user->role,
            'university'       => $user->university,
            'major'            => $user->major,
            'academic_year'    => $user->academic_year,
            'target_exam_date' => $user->target_exam_date,
            'bio'              => $user->bio,
            'country'          => $user->country,
            'avatar_url'       => $user->avatarFullUrl(),
            'xp'               => $user->xp,
            'level'            => $user->level(),
            'current_streak'   => $user->current_streak,
            'preferences'      => $user->preferences,
            'created_at'       => $user->created_at,
            'updated_at'       => $user->updated_at,
        ];
    }

    /**
     * Get User Profile & Stats
     */
    public function profile(Request $request)
    {
        $user = $request->user();

        $submittedAttempts = $user->quizAttempts()->where('status', 'submitted');

        $totalQuizzesTaken = (clone $submittedAttempts)->count();

        $attemptIds = (clone $submittedAttempts)->pluck('id');

        $totalQuestionsSolved = DB::table('user_answers')
            ->whereIn('quiz_attempt_id', $attemptIds)
            ->select('quiz_attempt_id', 'question_id')
            ->distinct()
            ->count();

        $overallAccuracy = $totalQuizzesTaken > 0
            ? (int) round((clone $submittedAttempts)->avg('percentage'))
            : 0;

        $stats = [
            'totalQuizzesTaken' => $totalQuizzesTaken,
            'totalQuestionsSolved' => $totalQuestionsSolved,
            'overallAccuracy' => $overallAccuracy,
            'currentStreakDays' => $user->current_streak ?? 0,
        ];

        return ApiResponse::success(
            array_merge($this->toProfileArray($user), ['stats' => $stats]),
            'Profile retrieved successfully.'
        );
    }

    /**
     * Securely Update Profile Information
     */
    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $incomingUsername = $request->has('username')
            ? strtolower(trim((string) $request->input('username')))
            : null;

        $usernameChanged = $incomingUsername !== null && $incomingUsername !== $user->username;

        if ($incomingUsername !== null) {
            $request->merge(['username' => $incomingUsername]);
        }

        $rules = [
            'name' => 'required|string|max:255',
            'university' => 'nullable|string|max:255',
            'major' => 'nullable|string|max:255',
            'academic_year' => 'nullable|string|max:255',
            'target_exam_date' => 'nullable|date',
            'bio' => 'nullable|string|max:1000',
            'country' => 'nullable|string|max:100',
        ];

        // Username rules only apply when it actually changes, so saving other
        // fields never fails because of the current (possibly generated) username.
        if ($usernameChanged) {
            $rules['username'] = [
                'required',
                'string',
                'min:3',
                'max:20',
                'regex:/^[a-z0-9_]+$/',
                'not_regex:/^player_/',
                Rule::unique('users', 'username')->ignore($user->id),
                Rule::notIn(config('reserved.usernames')),
            ];
        }

        $validated = $request->validate($rules, [
            'username.required'  => 'Username is required.',
            'username.min'       => 'Username must contain at least 3 characters.',
            'username.max'       => 'Username must not exceed 20 characters.',
            'username.regex'     => 'Username can only contain letters, numbers and underscores.',
            'username.not_regex' => 'This username is not allowed.',
            'username.unique'    => 'This username is already taken.',
            'username.not_in'    => 'This username is not allowed.',
        ]);

        if ($usernameChanged) {
            $availableAt = $this->usernameChangeAvailableAt($user);

            if ($availableAt) {
                throw ValidationException::withMessages([
                    'username' => 'You can change your username again on '
                        . \Carbon\Carbon::parse($availableAt)->toDateString() . '.',
                ]);
            }

            $user->username_changed_at = now();
        }

        try {
            $user->fill($validated);
            $user->save();
        } catch (UniqueConstraintViolationException) {
            throw ValidationException::withMessages([
                'username' => 'This username is already taken.',
            ]);
        }

        return ApiResponse::success(
            $this->toProfileArray($user->fresh()),
            'Profile updated successfully.'
        );
    }

    /**
     * Update User Preferences (Theme, Notifications, Sound)
     */
    public function updatePreferences(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'emailNotifications' => 'required|boolean',
            'soundEffects' => 'required|boolean',
            'theme' => 'nullable|string|in:light,dark',
            'language' => 'nullable|string|in:en,fr,ar',
        ]);

        $currentPreferences = $user->preferences ?? [];
        $updatedPreferences = array_merge($currentPreferences, $validated);

        $user->update(['preferences' => $updatedPreferences]);

        return ApiResponse::success(
            $this->toProfileArray($user->fresh()),
            'Preferences updated successfully.'
        );
    }

    /**
     * Change Password securely verifying current password
     */
    public function changePassword(Request $request)
    {
        $validated = $request->validate([
            'currentPassword' => 'required|string',
            'newPassword' => [
                'required',
                'string',
                Password::min(12)->mixedCase()->numbers()->symbols()->uncompromised(),
            ],
        ]);

        $user = $request->user();

        if (!Hash::check($validated['currentPassword'], $user->password)) {
            return ApiResponse::error(
                'The provided current password does not match our records.',
                null,
                422
            );
        }

        $user->update([
            'password' => Hash::make($validated['newPassword']),
            'password_changed_at' => now(),
        ]);

        return ApiResponse::success(null, 'Password changed successfully.');
    }

    /**
     * Upload / Replace User Avatar (custom photo)
     */
    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120', // 5MB
        ]);

        $user = $request->user();

        // Only delete the old file if it was an uploaded avatar (not a preset asset)
        if ($user->avatar_url
            && str_starts_with($user->avatar_url, 'avatars/')
            && Storage::disk('public')->exists($user->avatar_url)) {
            Storage::disk('public')->delete($user->avatar_url);
        }

        // Store the RELATIVE path only — full URL is computed on read via avatarFullUrl()
        $path = $request->file('avatar')->store('avatars', 'public');

        $user->update(['avatar_url' => $path]);

        return ApiResponse::success(
            $this->toProfileArray($user->fresh()),
            'Avatar updated successfully.'
        );
    }

    /**
     * Select a Preset Avatar (from the built-in gallery shipped with the frontend)
     */
    public function selectAvatarPreset(Request $request)
    {
        $validated = $request->validate([
            // Must point at a shipped preset asset, e.g. "assets/avatars/avatar-03.png"
            'avatar_key' => [
                'required',
                'string',
                'regex:/^assets\/avatars\/avatar-[a-zA-Z0-9_-]+\.(png|jpg|jpeg|svg|webp)$/',
            ],
        ]);

        $user = $request->user();

        // If they're switching away from an uploaded avatar, clean up the old file
        if ($user->avatar_url
            && str_starts_with($user->avatar_url, 'avatars/')
            && Storage::disk('public')->exists($user->avatar_url)) {
            Storage::disk('public')->delete($user->avatar_url);
        }

        $user->update(['avatar_url' => $validated['avatar_key']]);

        return ApiResponse::success(
            $this->toProfileArray($user->fresh()),
            'Avatar updated successfully.'
        );
    }
}