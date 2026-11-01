import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { EMPTY, Observable, expand, reduce } from 'rxjs';
import { Http } from './http';
import { ApiResponse } from '../models/api-response';
import { ConcoursQcmPage, ConcoursQcmSelection, QcmCandidate, QcmKind, QcmLink, QcmPage } from '../models/concours-qcm';
import {
  DirectoryFilters,
  DirectoryKind,
  DirectoryPage,
  DirectoryRecord,
  PreparationOption,
} from '../models/concours';

export interface WizardPdfLink {
  id: number;
  title: string;
  year: number | null;
  document_type: 'previous_exam' | 'correction' | 'summary' | 'preparation_guide';
  concours_id: number | null;
  published: boolean;
}

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

  wizardDetails(id: number): Observable<ApiResponse<{ advice_fr: string | null; advice_ar: string | null; pdfs: WizardPdfLink[] }>> {
    return this.http.get<ApiResponse<{ advice_fr: string | null; advice_ar: string | null; pdfs: WizardPdfLink[] }>>(`/admin/concours-wizard/${id}/details`);
  }

  saveAdvice(id: number, adviceFr: string, adviceAr: string): Observable<ApiResponse<{ advice_fr: string | null; advice_ar: string | null }>> {
    return this.http.put<ApiResponse<{ advice_fr: string | null; advice_ar: string | null }>>(`/admin/concours-wizard/${id}/advice`, {
      advice_fr: adviceFr.trim() || null, advice_ar: adviceAr.trim() || null,
    });
  }

  attachPdfs(id: number, ids: number[]): Observable<ApiResponse<{ linked: number }>> {
    return this.http.post<ApiResponse<{ linked: number }>>(`/admin/concours-wizard/${id}/pdfs`, { ids });
  }

  unlinkPdfs(id: number, ids: number[]): Observable<ApiResponse<{ removed: number }>> {
    return this.http.post<ApiResponse<{ removed: number }>>(`/admin/concours-wizard/${id}/pdfs/unlink`, { ids });
  }

  publicAdvice(slug: string): Observable<ApiResponse<{ advice_fr: string | null; advice_ar: string | null }>> {
    return this.http.get<ApiResponse<{ advice_fr: string | null; advice_ar: string | null }>>(`/public/concours/${encodeURIComponent(slug)}/advice`);
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

  qcm(
    slug: string,
    option = '',
    page = 1,
    selection: ConcoursQcmSelection = {},
  ): Observable<ApiResponse<ConcoursQcmPage>> {
    let params = new HttpParams().set('page', page);
    if (option) params = params.set('preparation_option_id', option);
    if (selection.major_id) params = params.set('major_id', selection.major_id);
    if (selection.subject_id) params = params.set('subject_id', selection.subject_id);
    if (selection.difficulty) params = params.set('difficulty', selection.difficulty);
    if (selection.q?.trim()) params = params.set('q', selection.q.trim());
    return this.http.get<ApiResponse<ConcoursQcmPage>>(
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
  bulkQcmLinks(
    id: number,
    kind: QcmKind,
    targetIds: number[],
    preparationOptionIds: number[],
  ): Observable<ApiResponse<{ added: number; already_linked: number }>> {
    return this.http.post<ApiResponse<{ added: number; already_linked: number }>>(
      `/admin/concours-directory/concours/${id}/qcm-links/${kind}/bulk`,
      { target_ids: targetIds, preparation_option_ids: preparationOptionIds },
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
