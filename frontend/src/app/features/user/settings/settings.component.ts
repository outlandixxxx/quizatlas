import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { UserApi } from '../services/user-api';
import { AuthState } from '../../auth/services/auth-state';

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

    this.userApi.updateProfile({
      name: this.userProfile.fullName,
      bio: this.userProfile.bio,
    }).subscribe({
      next: (res) => {
        if (res.data) {
          this.authState.setUser(res.data);
        }
        this.profileSuccessMsg = 'Profile updated successfully!';
      },
      error: (err) => {
        this.profileErrorMsg = err.error?.message || 'Failed to update profile.';
      },
    });
  }

  savePreferences(): void {
    this.userApi.updatePreferences(this.preferences).subscribe({
      next: (res) => {
        if (res.data) {
          this.authState.setUser(res.data);
        }
      },
    });
  }

  changePassword(): void {
    this.passwordSuccessMsg = '';
    this.passwordErrorMsg = '';

    if (!this.security.currentPassword) {
      this.passwordErrorMsg = 'Please enter your current password.';
      return;
    }

    if (this.security.newPassword.length < 8) {
      this.passwordErrorMsg = 'New password must be at least 8 characters long.';
      return;
    }

    if (this.security.newPassword !== this.security.confirmPassword) {
      this.passwordErrorMsg = 'New passwords do not match.';
      return;
    }

    this.userApi.changePassword({
      currentPassword: this.security.currentPassword,
      newPassword: this.security.newPassword,
    }).subscribe({
      next: (res) => {
        if (res.success) {
          this.passwordSuccessMsg = 'Password updated successfully!';
          this.security = { currentPassword: '', newPassword: '', confirmPassword: '' };
        }
      },
      error: (err) => {
        this.passwordErrorMsg = err.error?.message || 'Failed to update password.';
      },
    });
  }
}