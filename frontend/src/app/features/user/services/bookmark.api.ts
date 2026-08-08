import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';

export interface ApiBookmarkItem {
  id: number;
  question_id: number;
  quiz_id: number;
  question_text: string;
  subject_name: string | null;
  saved_at: string;
}

export interface ApiBookmarkMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

@Injectable({
  providedIn: 'root',
})
export class BookmarkApi {
  private readonly http = inject(Http);

  list(page: number = 1, perPage: number = 10): Observable<ApiResponse<{ data: ApiBookmarkItem[]; meta: ApiBookmarkMeta }>> {
    return this.http.get<ApiResponse<{ data: ApiBookmarkItem[]; meta: ApiBookmarkMeta }>>(
      `/bookmarks?page=${page}&per_page=${perPage}`
    );
  }

  toggle(questionId: number): Observable<ApiResponse<{ bookmarked: boolean }>> {
    return this.http.post<ApiResponse<{ bookmarked: boolean }>>(
      `/bookmarks/questions/${questionId}/toggle`,
      {}
    );
  }
}