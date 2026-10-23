import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpParams } from '@angular/common/http';
import { collectReferencePages } from './reference-pages';

import { ApiResponse } from '../../../core/models/api-response';
import { Subject, SubjectPayload } from '../../../core/models/subject';
import { Http } from '../../../core/services/http';

@Injectable({ providedIn: 'root' })
export class SubjectApi {
  private readonly http = inject(Http);

  list(): Observable<ApiResponse<Subject[]>> {
    return this.http.get<ApiResponse<Subject[]>>('/subjects');
  }

  listAll(): Observable<Subject[]> {
    const pageSize = 100;
    return collectReferencePages(page => this.http.get<ApiResponse<Subject[]>>(
      '/subjects', new HttpParams().set('page', page).set('per_page', pageSize),
    ), pageSize);
  }

  create(payload: SubjectPayload): Observable<ApiResponse<Subject>> {
    return this.http.post<ApiResponse<Subject>>('/subjects', payload);
  }

  update(id: number, payload: SubjectPayload): Observable<ApiResponse<Subject>> {
    return this.http.put<ApiResponse<Subject>>(`/subjects/${id}`, payload);
  }

  delete(id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`/subjects/${id}`);
  }
}
