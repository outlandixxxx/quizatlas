import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

import { ApiResponse } from '../../../core/models/api-response';
import { Quiz, QuizPayload } from '../../../core/models/quiz';
import { Http } from '../../../core/services/http';
import { RevisionJsonResponse } from '../../../core/models/revision-sheet';
export type { RevisionJsonResponse } from '../../../core/models/revision-sheet';

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
    id: number, includeCorrections = false
  ): Observable<ApiResponse<RevisionJsonResponse>> {
    return this.http.get<ApiResponse<RevisionJsonResponse>>(
      `/quizzes/${id}/revision-json`, includeCorrections ? new HttpParams().set('include', 'corrected_questions') : undefined
    );
  }
}
