import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { QuizShare } from '../../../core/models/teacher';

@Injectable({ providedIn: 'root' })
export class QuizJoinApi {
  private readonly http = inject(Http);

  join(joinCode: string): Observable<ApiResponse<QuizShare>> {
    return this.http.post<ApiResponse<QuizShare>>('/quiz-shares/join', { join_code: joinCode });
  }
}