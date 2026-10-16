import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

import { ApiResponse } from '../../../core/models/api-response';
import { Quiz, QuizPayload } from '../../../core/models/quiz';
import { Http } from '../../../core/services/http';

export interface RevisionJsonResponse {
  major: {
    id: number;
    name: string;
    slug: string;
  };

  subject: {
    id: number;
    name: string;
    slug: string;
  };

  quiz: {
    id: number;
    title: string;
    difficulty: string | null;
  };

  notes: {
    order: number;
    explanation: string;
  }[];

  meta: {
    total_explanations: number;
    exported_at: string;
    format_version: string;
  };
}

@Injectable({ providedIn: 'root' })
export class AdminQuizApi {
  private readonly http = inject(Http);

  list(params?: HttpParams): Observable<ApiResponse<Quiz[]>> {
    return this.http.get<ApiResponse<Quiz[]>>(
      '/quizzes',
      params
    );
  }

  create(payload: QuizPayload): Observable<ApiResponse<Quiz>> {
    return this.http.post<ApiResponse<Quiz>>('/quizzes', payload);
  }

  update(id: number, payload: QuizPayload): Observable<ApiResponse<Quiz>> {
    return this.http.put<ApiResponse<Quiz>>(`/quizzes/${id}`, payload);
  }

  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`/quizzes/${id}`);
  }

  getRevisionJson(
    id: number
  ): Observable<ApiResponse<RevisionJsonResponse>> {
    return this.http.get<ApiResponse<RevisionJsonResponse>>(
      `/quizzes/${id}/revision-json`
    );
  }
}