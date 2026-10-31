import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Observable, shareReplay } from 'rxjs';
import { Http } from './http';
import { ApiResponse } from '../models/api-response';
import {
  ConcoursFollow,
  FollowPage,
  ConcoursNotificationConfiguration,
} from '../models/concours-follow';
@Injectable({ providedIn: 'root' })
export class ConcoursFollowingApi {
  private readonly http = inject(Http);
  private config$?: Observable<ApiResponse<ConcoursNotificationConfiguration>>;
  configuration() {
    return (this.config$ ??= this.http
      .get<ApiResponse<ConcoursNotificationConfiguration>>('/me/concours-follows/configuration')
      .pipe(shareReplay({ bufferSize: 1, refCount: true })));
  }
  list(page = 1) {
    return this.http.get<ApiResponse<FollowPage>>(
      '/me/concours-follows',
      new HttpParams().set('page', page),
    );
  }
  show(id: number) {
    return this.http.get<ApiResponse<ConcoursFollow>>(`/me/concours-follows/${id}`);
  }
  save(id: number, follow: ConcoursFollow) {
    return this.http.put<ApiResponse<ConcoursFollow>>(`/me/concours-follows/${id}`, follow);
  }
  registerPush(payload: object) {
    return this.http.post<ApiResponse<{ id: number; user_id: number; follow_ids: number[] }>>(
      '/me/concours-push',
      payload,
    );
  }
  disablePush(id: number) {
    return this.http.delete<ApiResponse<{ disabled: boolean }>>(`/me/concours-push/${id}`);
  }
}
