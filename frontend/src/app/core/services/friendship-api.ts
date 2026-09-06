import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

export interface ApiFriend {
  id: number;
  name: string;
  avatar_url: string | null;
}

export interface ApiPendingRequest {
  id: number;
  from_user_id: number;
  from_user_name: string;
}

@Injectable({ providedIn: 'root' })
export class FriendshipApi {
  private readonly http = inject(Http);

  list(): Observable<ApiResponse<ApiFriend[]>> {
    return this.http.get<ApiResponse<ApiFriend[]>>('/friends');
  }

  pending(): Observable<ApiResponse<ApiPendingRequest[]>> {
    return this.http.get<ApiResponse<ApiPendingRequest[]>>('/friends/pending');
  }

  request(userId: number): Observable<ApiResponse<{ status: string }>> {
    return this.http.post<ApiResponse<{ status: string }>>(`/friends/${userId}/request`, {});
  }

  respond(friendshipId: number, accept: boolean): Observable<ApiResponse<{ status: string }>> {
    return this.http.put<ApiResponse<{ status: string }>>(`/friends/requests/${friendshipId}/respond`, { accept });
  }
}