import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { ApiResponse } from '../../../core/models/api-response';
import { Choice, ChoicePayload } from '../../../core/models/question';
import { Http } from '../../../core/services/http';

@Injectable({ providedIn: 'root' })
export class AdminChoiceApi {
  private readonly http = inject(Http);

  create(payload: ChoicePayload): Observable<ApiResponse<Choice>> {
    return this.http.post<ApiResponse<Choice>>('/choices', payload);
  }

  update(id: number, payload: ChoicePayload): Observable<ApiResponse<Choice>> {
    return this.http.put<ApiResponse<Choice>>(`/choices/${id}`, payload);
  }

  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`/choices/${id}`);
  }
}