import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpParams } from '@angular/common/http';
import { collectReferencePages } from './reference-pages';

import { ApiResponse } from '../../../core/models/api-response';
import { Major, MajorPayload } from '../../../core/models/major';
import { Http } from '../../../core/services/http';

@Injectable({ providedIn: 'root' })
export class MajorApi {
  private readonly http = inject(Http);

  list(): Observable<ApiResponse<Major[]>> {
    return this.http.get<ApiResponse<Major[]>>('/majors');
  }

  listAll(): Observable<Major[]> {
    const pageSize = 100;
    return collectReferencePages(page => this.http.get<ApiResponse<Major[]>>(
      '/majors', new HttpParams().set('page', page).set('per_page', pageSize),
    ), pageSize);
  }

  create(payload: MajorPayload): Observable<ApiResponse<Major>> {
    return this.http.post<ApiResponse<Major>>('/majors', payload);
  }

  update(id: number, payload: MajorPayload): Observable<ApiResponse<Major>> {
    return this.http.put<ApiResponse<Major>>(`/majors/${id}`, payload);
  }

  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`/majors/${id}`);
  }
}
