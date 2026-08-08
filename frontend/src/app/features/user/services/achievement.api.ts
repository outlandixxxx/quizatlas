import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { AchievementDetail } from '../models/achievement';

@Injectable({
  providedIn: 'root',
})
export class AchievementApi {
  private readonly http = inject(Http);

  list(): Observable<ApiResponse<AchievementDetail[]>> {
    return this.http.get<ApiResponse<AchievementDetail[]>>('/achievements');
  }
}