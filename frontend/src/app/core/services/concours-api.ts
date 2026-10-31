import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { EMPTY, Observable, expand, reduce } from 'rxjs';
import { Http } from './http';
import { ApiResponse } from '../models/api-response';
import { ConcoursQcm, QcmCandidate, QcmKind, QcmLink, QcmPage } from '../models/concours-qcm';
import {
  DirectoryFilters,
  DirectoryKind,
  DirectoryPage,
  DirectoryRecord,
  PreparationOption,
} from '../models/concours';

@Injectable({ providedIn: 'root' })
export class ConcoursApi {
  private readonly http = inject(Http);

  list(
    kind: DirectoryKind,
    filters: DirectoryFilters = {},
    admin = false,
  ): Observable<ApiResponse<DirectoryPage>> {
    let params = new HttpParams();
    for (const [key, value] of Object.entries(filters)) {
      if (value !== null && value !== undefined && value !== '')
        params = params.set(key, String(value));
    }
    const path = admin
      ? `/admin/concours-directory/${kind}`
      : `/public/${kind === 'concours' ? 'concours' : 'concours-' + kind}`;
    return this.http.get<ApiResponse<DirectoryPage>>(path, params);
  }

  references(kind: DirectoryKind, admin = false): Observable<DirectoryRecord[]> {
    return this.list(kind, { per_page: 100 }, admin).pipe(
      expand((response) =>
        response.data.meta.current_page < response.data.meta.last_page
          ? this.list(kind, { per_page: 100, page: response.data.meta.current_page + 1 }, admin)
          : EMPTY,
      ),
      reduce((all, response) => [...all, ...response.data.items], [] as DirectoryRecord[]),
    );
  }

  show(slug: string): Observable<ApiResponse<DirectoryRecord>> {
    return this.http.get<ApiResponse<DirectoryRecord>>(
      `/public/concours/${encodeURIComponent(slug)}`,
    );
  }

  save(
    kind: DirectoryKind,
    payload: object,
    id?: number,
  ): Observable<ApiResponse<DirectoryRecord>> {
    const path = `/admin/concours-directory/${kind}`;
    return id
      ? this.http.put<ApiResponse<DirectoryRecord>>(`${path}/${id}`, payload)
      : this.http.post<ApiResponse<DirectoryRecord>>(path, payload);
  }

  delete(kind: DirectoryKind, id: number): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(`/admin/concours-directory/${kind}/${id}`);
  }

  savePreparationOption(
    concoursId: number,
    payload: object,
    optionId?: number,
  ): Observable<ApiResponse<PreparationOption[]>> {
    const path = `/admin/concours-directory/concours/${concoursId}/preparation-options`;
    return optionId
      ? this.http.put<ApiResponse<PreparationOption[]>>(`${path}/${optionId}`, payload)
      : this.http.post<ApiResponse<PreparationOption[]>>(path, payload);
  }

  qcm(slug: string, option = '', page = 1): Observable<ApiResponse<QcmPage<ConcoursQcm>>> {
    let params = new HttpParams().set('page', page);
    if (option) params = params.set('preparation_option_id', option);
    return this.http.get<ApiResponse<QcmPage<ConcoursQcm>>>(
      `/public/concours/${encodeURIComponent(slug)}/qcm`,
      params,
    );
  }

  qcmCandidates(
    id: number,
    kind: QcmKind,
    search = '',
    page = 1,
  ): Observable<ApiResponse<QcmPage<QcmCandidate>>> {
    return this.http.get<ApiResponse<QcmPage<QcmCandidate>>>(
      `/admin/concours-directory/concours/${id}/qcm-candidates/${kind}`,
      new HttpParams().set('q', search).set('page', page),
    );
  }
  qcmLinks(
    id: number,
    kind: QcmKind,
    search = '',
    page = 1,
  ): Observable<ApiResponse<QcmPage<QcmLink>>> {
    return this.http.get<ApiResponse<QcmPage<QcmLink>>>(
      `/admin/concours-directory/concours/${id}/qcm-links/${kind}`,
      new HttpParams().set('q', search).set('page', page),
    );
  }
  saveQcmLink(
    id: number,
    kind: QcmKind,
    target: number,
    version: number,
    options: number[],
  ): Observable<ApiResponse<null>> {
    return this.http.put<ApiResponse<null>>(
      `/admin/concours-directory/concours/${id}/qcm-links/${kind}/${target}`,
      { version, preparation_option_ids: options },
    );
  }
  removeQcmLink(id: number, kind: QcmKind, link: QcmLink): Observable<ApiResponse<null>> {
    return this.http.delete<ApiResponse<null>>(
      `/admin/concours-directory/concours/${id}/qcm-links/${kind}/${link.id}?version=${link.version}`,
    );
  }
}
