import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { LandingData } from '../../../core/models/landing';

@Injectable({ providedIn: 'root' })
export class LandingApi {
  private readonly http = inject(Http);

  getLandingData(): Observable<ApiResponse<LandingData>> {
    return this.http.get<ApiResponse<LandingData>>('/landing');
  }
}