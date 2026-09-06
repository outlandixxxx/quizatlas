import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { ApiResponse } from '../../../core/models/api-response';
import { Question, QuestionPayload } from '../../../core/models/question';
import { Http } from '../../../core/services/http';

@Injectable({ providedIn: 'root' })
export class AdminQuestionApi {
  private readonly http = inject(Http);

  // per_page=100 — this is a builder view for one quiz, not a paginated
  // browse list; a quiz with more than 100 questions is not a realistic case.
  list(quizId: number): Observable<ApiResponse<Question[]>> {
    return this.http.get<ApiResponse<Question[]>>(`/questions?quiz_id=${quizId}&per_page=100`);
  }

  create(payload: QuestionPayload): Observable<ApiResponse<Question>> {
    return this.http.post<ApiResponse<Question>>('/questions', payload);
  }

  update(id: number, payload: QuestionPayload): Observable<ApiResponse<Question>> {
    return this.http.put<ApiResponse<Question>>(`/questions/${id}`, payload);
  }

  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`/questions/${id}`);
  }
}