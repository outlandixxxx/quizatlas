import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { ApiResponse } from '../../../core/models/api-response';
import { Quiz, QuizPayload } from '../../../core/models/quiz';
import { Http } from '../../../core/services/http';

@Injectable({ providedIn: 'root' })
export class AdminQuizApi {
  private readonly http = inject(Http);

  list(): Observable<ApiResponse<Quiz[]>> {
    return this.http.get<ApiResponse<Quiz[]>>('/quizzes');
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
}