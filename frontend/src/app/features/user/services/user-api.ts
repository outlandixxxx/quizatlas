import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { User } from '../../../core/models/user';
import { Dashboard } from '../models/dashboard';


export interface UserStats {
  totalQuizzesTaken: number;
  totalQuestionsSolved: number;
  overallAccuracy: number;
  currentStreakDays: number;
}

export interface FullUserProfile extends User {
  stats?: UserStats;
}

@Injectable({
  providedIn: 'root',
})
export class UserApi {
  private readonly http = inject(Http);

  // Dashboard

  getDashboard(): Observable<ApiResponse<Dashboard>> {
    return this.http.get<ApiResponse<Dashboard>>('/user/dashboard');
  }

  // Profile

  getProfile(): Observable<ApiResponse<FullUserProfile>> {
    return this.http.get<ApiResponse<FullUserProfile>>('/user/profile');
  }

  updateProfile(
    data: Partial<FullUserProfile>
  ): Observable<ApiResponse<FullUserProfile>> {
    return this.http.put<ApiResponse<FullUserProfile>>('/user/profile', data);
  }

  updatePreferences(
    preferences: Record<string, unknown>
  ): Observable<ApiResponse<FullUserProfile>> {
    return this.http.put<ApiResponse<FullUserProfile>>(
      '/user/preferences',
      preferences
    );
  }

  changePassword(data: {
    currentPassword: string;
    newPassword: string;
  }): Observable<ApiResponse<null>> {
    return this.http.put<ApiResponse<null>>(
      '/user/change-password',
      data
    );
  }

  uploadAvatar(file: File): Observable<ApiResponse<{ avatar_url: string }> > {
    const formData = new FormData();
    formData.append('avatar', file);

    return this.http.post<ApiResponse<{ avatar_url: string }>>(
      '/user/avatar',
      formData
    );
  }

  selectAvatarPreset(avatarKey: string): Observable<ApiResponse<FullUserProfile>> {
  return this.http.post<ApiResponse<FullUserProfile>>('/user/avatar/preset', {
    avatar_key: avatarKey,
  });
}
}