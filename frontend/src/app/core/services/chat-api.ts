import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

export interface ChatUser {
  id: number;
  name: string;
  avatar_url: string | null;
}

export interface ApiConversationSummary {
  id: number;
  user: ChatUser;
  last_message_preview: string | null;
  last_message_at: string | null;
  unread_count: number;
}

export interface ApiConversationsMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface ApiConversationsPage {
  items: ApiConversationSummary[];
  meta: ApiConversationsMeta;
}

export interface ApiChatMessage {
  id: number;
  conversation_id: number;
  sender_id: number;
  sender: ChatUser;
  body: string;
  read_at: string | null;
  created_at: string;
}

export interface ApiConversationThread {
  conversation_id: number;
  user: ChatUser;
  can_send: boolean;
  messages: ApiChatMessage[];
}

@Injectable({ providedIn: 'root' })
export class ChatApi {
  private readonly http = inject(Http);

listConversations(page: number = 1, search?: string): Observable<ApiResponse<ApiConversationsPage>> {
  const params = new URLSearchParams({ page: String(page) });
  if (search?.trim()) params.set('search', search.trim());
  return this.http.get<ApiResponse<ApiConversationsPage>>(`/chat/conversations?${params.toString()}`);
}

  unreadCount(): Observable<ApiResponse<{ count: number }>> {
    return this.http.get<ApiResponse<{ count: number }>>('/chat/conversations/unread-count');
  }

  openWith(userId: number): Observable<ApiResponse<ApiConversationThread>> {
    return this.http.get<ApiResponse<ApiConversationThread>>(`/chat/conversations/with/${userId}`);
  }

  poll(conversationId: number, sinceId: number): Observable<ApiResponse<ApiChatMessage[]>> {
    return this.http.get<ApiResponse<ApiChatMessage[]>>(`/chat/conversations/${conversationId}/poll?since_id=${sinceId}`);
  }

  sendMessage(conversationId: number, body: string): Observable<ApiResponse<ApiChatMessage>> {
    return this.http.post<ApiResponse<ApiChatMessage>>(`/chat/conversations/${conversationId}/messages`, { body });
  }
}