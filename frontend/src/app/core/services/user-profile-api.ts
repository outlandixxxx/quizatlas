import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

export type FriendshipStatus = 'none' | 'pending_sent' | 'pending_received' | 'friends' | 'self';

export interface ApiUserPublicProfile {
  id: number;
  name: string;
  avatar_url: string | null;
  level: number;
  xp: number;
  quizzes_completed: number;
  friendship_status: FriendshipStatus;
  friendship_id: number | null;
}

@Injectable({ providedIn: 'root' })
export class UserProfileApi {
  private readonly http = inject(Http);

  show(userId: number): Observable<ApiResponse<ApiUserPublicProfile>> {
    return this.http.get<ApiResponse<ApiUserPublicProfile>>(`/users/${userId}`);
  }
}