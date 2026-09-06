import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

export interface ApiUserSearchResult {
  id: number;
  name: string;
  avatar_url: string | null;
}

@Injectable({ providedIn: 'root' })
export class UserSearchApi {
  private readonly http = inject(Http);

  search(query: string): Observable<ApiResponse<ApiUserSearchResult[]>> {
    const params = new HttpParams().set('q', query);
    return this.http.get<ApiResponse<ApiUserSearchResult[]>>('/users/search', params);
  }
}