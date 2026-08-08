import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';

export interface ApiLeaderboardEntry {
  rank: number;
  id: number;
  name: string;
  avatar_url: string | null;
  level: number;
  xp: number;
  quizzes_completed: number;
  accuracy: number;
}

export interface ApiLeaderboardMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface ApiLeaderboardResponse {
  items: ApiLeaderboardEntry[];
  meta: ApiLeaderboardMeta;
}

export interface ApiMyRank {
  rank: number;
  level: number;
  xp: number;
  xp_into_current_level: number;   
  xp_for_next_level: number;
  name: string;
  avatar_url: string | null;
}

@Injectable({ providedIn: 'root' })
export class LeaderboardApi {
  private readonly http = inject(Http);

  list(params: {
    scope?: 'global' | 'friends' | 'country';
    major_id?: number;
    subject_id?: number;
    period?: 'all' | 'week' | 'month';
    page?: number;
    per_page?: number;
  }): Observable<ApiResponse<ApiLeaderboardResponse>> {
    const parts: string[] = [];
    if (params.scope) parts.push(`scope=${params.scope}`);
    if (params.major_id) parts.push(`major_id=${params.major_id}`);
    if (params.subject_id) parts.push(`subject_id=${params.subject_id}`);
    if (params.period) parts.push(`period=${params.period}`);
    if (params.page) parts.push(`page=${params.page}`);
    if (params.per_page) parts.push(`per_page=${params.per_page}`);
    const query = parts.length ? `?${parts.join('&')}` : '';

    return this.http.get<ApiResponse<ApiLeaderboardResponse>>(`/leaderboard${query}`);
  }

  myRank(): Observable<ApiResponse<ApiMyRank | null>> {
    return this.http.get<ApiResponse<ApiMyRank | null>>('/leaderboard/me');
  }
}