import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { UserApi, FullUserProfile } from '../services/user-api';
import { AuthState } from '../../auth/services/auth-state';
import { User } from '../../../core/models/user';
import { FriendshipApi, ApiFriend, ApiPendingRequest } from '../../../core/services/friendship-api';

const DEFAULT_AVATAR = '';

@Component({
  selector: 'app-profile',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './profile.component.html',
  styleUrl: './profile.component.scss',
})
export class ProfileComponent implements OnInit {
  private authState = inject(AuthState);
  private userApi = inject(UserApi);
  private friendshipApi = inject(FriendshipApi);
  private router = inject(Router);

  readonly authUser = this.authState.user;

  isLoading = false;
  isEditing = false;

  isUploadingAvatar = false;
  avatarErrorMsg = '';

  showAvatarPicker = false;

  usernameError = '';

  presetAvatars: string[] = Array.from(
    { length: 12 },
    (_, i) => `assets/avatars/avatar-${String(i + 1).padStart(2, '0')}.webp`
  );

  userProfile: FullUserProfile = {
    id: 0,
    name: '',
    username: '',
    email: '',
    role: '',
    created_at: '',
    updated_at: '',
    preferences: {},
    avatar_url: DEFAULT_AVATAR,
    university: '',
    major: '',
    academic_year: '',
    target_exam_date: '',
    bio: '',
    country: '',
    stats: {
      totalQuizzesTaken: 0,
      totalQuestionsSolved: 0,
      overallAccuracy: 0,
      currentStreakDays: 0,
    },
  };

  editForm: Partial<FullUserProfile> = {};

  friends: ApiFriend[] = [];
  pendingRequests: ApiPendingRequest[] = [];
  isFriendsLoading = false;
  friendActionLoadingId: number | null = null;

  ngOnInit(): void {
    this.loadUserProfile();
    this.loadFriends();
  }

  /**
   * Date until which the username cannot be changed (null = can change now).
   * The 30-day rule lives on the backend; this only reads its answer.
   */
  get usernameLockedUntil(): Date | null {
    const value = this.userProfile.username_change_available_at;
    if (!value) return null;

    const date = new Date(value);
    return date > new Date() ? date : null;
  }

  loadFriends(): void {
    this.isFriendsLoading = true;

    this.friendshipApi.list().subscribe({
      next: (res) => {
        this.friends = res.data;
        this.isFriendsLoading = false;
      },
      error: () => (this.isFriendsLoading = false),
    });

    this.friendshipApi.pending().subscribe({
      next: (res) => (this.pendingRequests = res.data),
    });
  }

  respondToRequest(friendshipId: number, accept: boolean): void {
    this.friendActionLoadingId = friendshipId;

    this.friendshipApi.respond(friendshipId, accept).subscribe({
      next: () => {
        this.pendingRequests = this.pendingRequests.filter((r) => r.id !== friendshipId);
        if (accept) this.loadFriends();
        this.friendActionLoadingId = null;
      },
      error: () => (this.friendActionLoadingId = null),
    });
  }

  goToFriendProfile(userId: number): void {
    this.router.navigate(['/app/users', userId]);
  }

  private mergeIntoAuthUser(patch: Partial<User>): void {
    const current = this.authState.user();
    if (!current) return;
    this.authState.setUser({ ...current, ...patch });
  }

  loadUserProfile(): void {
    this.isLoading = true;
    this.userApi.getProfile().subscribe({
      next: (res: any) => {
        const profileData = res.data || res;

        if (profileData) {
          this.userProfile = {
            ...this.userProfile,
            ...profileData,
            stats: {
              ...this.userProfile.stats,
              ...(profileData.stats || {}),
            },
            avatar_url: profileData.avatar_url || this.userProfile.avatar_url,
          };

          this.mergeIntoAuthUser({
            name: profileData.name,
            username: profileData.username,
            email: profileData.email,
            avatar_url: profileData.avatar_url,
            university: profileData.university,
            major: profileData.major,
            academic_year: profileData.academic_year,
            target_exam_date: profileData.target_exam_date,
            bio: profileData.bio,
            country: profileData.country,
          });
        }
        this.isLoading = false;
      },
      error: () => {
        this.isLoading = false;
      }
    });
  }

  enableEdit(): void {
    this.editForm = {
      name: this.userProfile.name,
      username: this.userProfile.username,
      email: this.userProfile.email,
      university: this.userProfile.university,
      major: this.userProfile.major,
      academic_year: this.userProfile.academic_year,
      target_exam_date: this.userProfile.target_exam_date,
      bio: this.userProfile.bio,
      country: this.userProfile.country,
    };
    this.usernameError = '';
    this.isEditing = true;
  }

  cancelEdit(): void {
    this.isEditing = false;
    this.editForm = {};
    this.usernameError = '';
    this.showAvatarPicker = false;
  }

  saveProfile(): void {
    this.isLoading = true;
    this.usernameError = '';

    const payload: Partial<FullUserProfile> = { ...this.editForm };

    if (payload.username) {
      payload.username = payload.username.trim().toLowerCase();
    }

    this.userApi.updateProfile(payload).subscribe({
      next: (res: any) => {
        const updatedData = res.data || res;

        if (updatedData) {
          this.userProfile = {
            ...this.userProfile,
            ...updatedData,
            stats: {
              ...this.userProfile.stats,
              ...(updatedData.stats || {}),
            }
          };

          this.mergeIntoAuthUser({
            name: updatedData.name,
            username: updatedData.username,
            email: updatedData.email,
            university: updatedData.university,
            major: updatedData.major,
            academic_year: updatedData.academic_year,
            target_exam_date: updatedData.target_exam_date,
            bio: updatedData.bio,
            country: updatedData.country,
          });
        }

        this.isEditing = false;
        this.isLoading = false;
      },
      error: (err) => {
        this.usernameError = err?.error?.errors?.username?.[0] ?? '';
        this.isLoading = false;
      }
    });
  }

  toggleAvatarPicker(): void {
    this.showAvatarPicker = !this.showAvatarPicker;
  }

  onAvatarImgError(): void {
    this.userProfile.avatar_url = '';
  }

  selectPresetAvatar(avatarKey: string): void {
    this.isUploadingAvatar = true;
    this.avatarErrorMsg = '';

    this.userApi.selectAvatarPreset(avatarKey).subscribe({
      next: (res: any) => {
        const updatedData = res.data || res;
        if (updatedData?.avatar_url) {
          this.userProfile.avatar_url = updatedData.avatar_url;
          this.mergeIntoAuthUser({ avatar_url: updatedData.avatar_url });
        }
        this.isUploadingAvatar = false;
        this.showAvatarPicker = false;
      },
      error: () => {
        this.avatarErrorMsg = 'profile.avatarSetError';
        this.isUploadingAvatar = false;
      },
    });
  }

  onAvatarSelected(event: Event): void {
    const input = event.target as HTMLInputElement;
    const file = input.files?.[0];
    if (!file) return;

    this.avatarErrorMsg = '';

    const maxSizeBytes = 5 * 1024 * 1024;
    if (!file.type.startsWith('image/')) {
      this.avatarErrorMsg = 'profile.avatarNotImage';
      input.value = '';
      return;
    }
    if (file.size > maxSizeBytes) {
      this.avatarErrorMsg = 'profile.avatarTooLarge';
      input.value = '';
      return;
    }

    this.isUploadingAvatar = true;
    this.userApi.uploadAvatar(file).subscribe({
      next: (res: any) => {
        const updatedData = res.data || res;
        if (updatedData?.avatar_url) {
          this.userProfile.avatar_url = updatedData.avatar_url;
          this.mergeIntoAuthUser({ avatar_url: updatedData.avatar_url });
        }
        this.isUploadingAvatar = false;
        this.showAvatarPicker = false;
        input.value = '';
      },
      error: () => {
        this.avatarErrorMsg = 'profile.avatarUploadError';
        this.isUploadingAvatar = false;
        input.value = '';
      },
    });
  }

  /**
   * Works for both real names ("Ali Khan" -> "AK") and usernames ("ali_k" -> "AL").
   */
  initials(value: string | undefined | null): string {
    if (!value) return '?';

    const parts = value.trim().split(/\s+/);

    return parts.length > 1
      ? (parts[0][0] + parts[1][0]).toUpperCase()
      : value.slice(0, 2).toUpperCase();
  }
}