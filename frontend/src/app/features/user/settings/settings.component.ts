import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';
import { finalize } from 'rxjs';

import { UserApi } from '../services/user-api';
import { AuthState } from '../../auth/services/auth-state';

const PASSWORD_PATTERN =
  /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{12,}$/;

@Component({
  selector: 'app-settings',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './settings.component.html',
  styleUrl: './settings.component.scss',
})
export class SettingsComponent implements OnInit {
  private readonly userApi = inject(UserApi);
  private readonly authState = inject(AuthState);

  userProfile = {
    fullName: '',
    email: '',
    bio: '',
  };

  preferences = {
    emailNotifications: true,
    soundEffects: false,
  };

  security = {
    currentPassword: '',
    newPassword: '',
    confirmPassword: '',
  };

  showCurrentPassword = false;
  showNewPassword = false;
  showConfirmPassword = false;

  passwordSuccessMsg = '';
  passwordErrorMsg = '';

  profileSuccessMsg = '';
  profileErrorMsg = '';
  preferencesErrorMsg = '';

  readonly profileSaving = signal(false);
  readonly passwordSaving = signal(false);

  ngOnInit(): void {
    const user = this.authState.user();
    if (user) {
      this.userProfile.fullName = user.name;
      this.userProfile.email = user.email;
      this.userProfile.bio = user.bio || '';

      if (user.preferences) {
        this.preferences = {
          emailNotifications: user.preferences.emailNotifications ?? true,
          soundEffects: user.preferences.soundEffects ?? false,
        };
      }
    }
  }

  saveSettings(): void {
    this.profileSuccessMsg = '';
    this.profileErrorMsg = '';
    this.profileSaving.set(true);

    this.userApi.updateProfile({
      name: this.userProfile.fullName,
      bio: this.userProfile.bio,
    })
      .pipe(finalize(() => this.profileSaving.set(false)))
      .subscribe({
        next: (res) => {
          if (res.data) {
            this.authState.setUser(res.data);
          }
          this.profileSuccessMsg = 'settings.profileUpdateSuccess';
        },
        error: (error) => {
          const validationErrors = error?.error?.errors;
          if (validationErrors?.name?.[0]) {
            this.profileErrorMsg = validationErrors.name[0];
          } else if (validationErrors?.bio?.[0]) {
            this.profileErrorMsg = validationErrors.bio[0];
          } else if (error?.error?.message) {
            this.profileErrorMsg = error.error.message;
          } else {
            this.profileErrorMsg = 'settings.profileUpdateError';
          }
        },
      });
  }

  savePreferences(): void {
    this.preferencesErrorMsg = '';

    const previous = { ...this.preferences };

    this.userApi.updatePreferences(this.preferences).subscribe({
      next: (res) => {
        if (res.data) {
          this.authState.setUser(res.data);
        }
      },
      error: (error) => {
        // Roll back the optimistic toggle so the UI reflects reality
        this.preferences = previous;
        this.preferencesErrorMsg =
          error?.error?.message || 'settings.preferencesUpdateError';
      },
    });
  }

 changePassword(): void {
  this.passwordSuccessMsg = '';
  this.passwordErrorMsg = '';

  if (!this.security.currentPassword) {
    this.passwordErrorMsg = 'settings.currentPasswordRequired';
    return;
  }

  if (!PASSWORD_PATTERN.test(this.security.newPassword)) {
    this.passwordErrorMsg = 'settings.newPasswordRequirements';
    return;
  }

  if (this.security.newPassword !== this.security.confirmPassword) {
    this.passwordErrorMsg = 'settings.passwordsDoNotMatch';
    return;
  }

  this.passwordSaving.set(true);

  this.userApi.changePassword({
    currentPassword: this.security.currentPassword,
    newPassword: this.security.newPassword,
  })
    .pipe(finalize(() => this.passwordSaving.set(false)))
    .subscribe({
      next: (res) => {
        if (res.success) {
          this.passwordSuccessMsg = 'settings.passwordUpdateSuccess';
          this.security = { currentPassword: '', newPassword: '', confirmPassword: '' };
        }
      },
      error: (error) => {
        if (error?.error?.message) {
          this.passwordErrorMsg = error.error.message;
        } else {
          this.passwordErrorMsg = 'settings.passwordUpdateError';
        }
      },
    });
}
}