import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

@Injectable({ providedIn: 'root' })
export class NewsletterApi {
  private readonly http = inject(Http);

  subscribe(email: string): Observable<ApiResponse<null>> {
    return this.http.post<ApiResponse<null>>('/newsletter/subscribe', { email });
  }
}