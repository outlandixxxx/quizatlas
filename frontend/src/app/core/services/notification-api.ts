import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

export interface ApiNotification {
  id: number;
  type: 'blog_response' | 'blog_answer_accepted' | 'friend_request' | 'friend_accepted' | 'new_message';
  data: Record<string, any>;
  read_at: string | null;
  created_at: string;
}

@Injectable({ providedIn: 'root' })
export class NotificationApi {
  private readonly http = inject(Http);

  list(): Observable<ApiResponse<ApiNotification[]>> {
    return this.http.get<ApiResponse<ApiNotification[]>>('/notifications');
  }

  unreadCount(): Observable<ApiResponse<{ count: number }>> {
    return this.http.get<ApiResponse<{ count: number }>>('/notifications/unread-count');
  }

  markRead(id: number): Observable<ApiResponse<{ status: string }>> {
    return this.http.post<ApiResponse<{ status: string }>>(`/notifications/${id}/read`, {});
  }

  markAllRead(): Observable<ApiResponse<{ status: string }>> {
    return this.http.post<ApiResponse<{ status: string }>>('/notifications/read-all', {});
  }
}