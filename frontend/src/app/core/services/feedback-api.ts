import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

@Injectable({ providedIn: 'root' })
export class FeedbackApi {
  private readonly http = inject(Http);

  submit(data: { email: string; type: string; message: string }): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>('/feedback', data);
  }
}