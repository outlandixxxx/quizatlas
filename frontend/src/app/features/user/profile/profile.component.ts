import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { UserApi, FullUserProfile } from '../services/user-api';
import { AuthState } from '../../auth/services/auth-state';

const DEFAULT_AVATAR =
  'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=250';

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

  isLoading = false;
  isEditing = false;

  isUploadingAvatar = false;
  avatarErrorMsg = '';

  showAvatarPicker = false;

  // Update this list once your preset files are actually added under
  // src/assets/avatars/ — filenames must match the backend regex:
  // assets/avatars/avatar-XX.(png|jpg|jpeg|svg|webp)
  presetAvatars: string[] = Array.from(
    { length: 12 },
    (_, i) => `assets/avatars/avatar-${String(i + 1).padStart(2, '0')}.png`
  );

  userProfile: FullUserProfile = {
    id: 0,
    name: '',
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

  ngOnInit(): void {
    this.loadUserProfile();
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

          this.authState.setUser(this.userProfile);
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
      email: this.userProfile.email,
      university: this.userProfile.university,
      major: this.userProfile.major,
      academic_year: this.userProfile.academic_year,
      target_exam_date: this.userProfile.target_exam_date,
      bio: this.userProfile.bio,
      country: this.userProfile.country,
    };
    this.isEditing = true;
  }

  cancelEdit(): void {
    this.isEditing = false;
    this.editForm = {};
    this.showAvatarPicker = false;
  }

  saveProfile(): void {
    this.isLoading = true;
    this.userApi.updateProfile(this.editForm).subscribe({
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

          this.authState.setUser(this.userProfile);
        }

        this.isEditing = false;
        this.isLoading = false;
      },
      error: () => {
        this.isLoading = false;
      }
    });
  }

  toggleAvatarPicker(): void {
    this.showAvatarPicker = !this.showAvatarPicker;
  }

  onAvatarImgError(): void {
    // A preset or uploaded file failed to load — fall back rather than
    // showing the browser's broken-image icon.
    this.userProfile.avatar_url = DEFAULT_AVATAR;
  }

  selectPresetAvatar(avatarKey: string): void {
    this.isUploadingAvatar = true;
    this.avatarErrorMsg = '';

    this.userApi.selectAvatarPreset(avatarKey).subscribe({
      next: (res: any) => {
        const updatedData = res.data || res;
        if (updatedData?.avatar_url) {
          this.userProfile.avatar_url = updatedData.avatar_url;
          this.authState.setUser(this.userProfile);
        }
        this.isUploadingAvatar = false;
        this.showAvatarPicker = false;
      },
      error: (err) => {
        this.avatarErrorMsg = err.error?.message || 'Failed to set avatar.';
        this.isUploadingAvatar = false;
      },
    });
  }

  onAvatarSelected(event: Event): void {
    const input = event.target as HTMLInputElement;
    const file = input.files?.[0];
    if (!file) return;

    this.avatarErrorMsg = '';

    const maxSizeBytes = 5 * 1024 * 1024; // 5MB
    if (!file.type.startsWith('image/')) {
      this.avatarErrorMsg = 'Please select an image file.';
      input.value = '';
      return;
    }
    if (file.size > maxSizeBytes) {
      this.avatarErrorMsg = 'Image must be smaller than 5MB.';
      input.value = '';
      return;
    }

    this.isUploadingAvatar = true;
    this.userApi.uploadAvatar(file).subscribe({
      next: (res: any) => {
        const updatedData = res.data || res;
        if (updatedData?.avatar_url) {
          this.userProfile.avatar_url = updatedData.avatar_url;
          this.authState.setUser(this.userProfile);
        }
        this.isUploadingAvatar = false;
        this.showAvatarPicker = false;
        input.value = '';
      },
      error: (err) => {
        this.avatarErrorMsg = err.error?.message || 'Failed to upload avatar.';
        this.isUploadingAvatar = false;
        input.value = '';
      },
    });
  }
}