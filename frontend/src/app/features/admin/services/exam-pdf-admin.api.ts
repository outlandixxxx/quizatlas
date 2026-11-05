import { Injectable, inject } from '@angular/core';
import { EMPTY, Observable, expand, reduce } from 'rxjs';
import { HttpClient, HttpEvent } from '@angular/common/http';
import { API_BASE_URL } from '../../../core/constants/api-base-url';

import { ApiResponse } from '../../../core/models/api-response';
import { AdminExamPdf, AdminExamPdfListMeta, PdfAction, PdfBatchResult } from '../../../core/models/exam-pdf-admin';
import { Http } from '../../../core/services/http';

export interface AdminExamPdfListData {
  items: AdminExamPdf[];
  meta: AdminExamPdfListMeta;
}

@Injectable({ providedIn: 'root' })
export class AdminExamPdfApi {
  private readonly http = inject(Http);
  private readonly client = inject(HttpClient);
  private readonly baseUrl = inject(API_BASE_URL);

  list(
    page = 1,
    search = '',
    filters: Record<string, string | number> = {},
  ): Observable<ApiResponse<AdminExamPdfListData>> {
    const query = new URLSearchParams({ page: String(page) });
    for (const [key, value] of Object.entries(filters)) query.set(key, String(value));
    if (search) query.set('search', search);
    return this.http.get<ApiResponse<AdminExamPdfListData>>(`/admin/exam-pdfs?${query.toString()}`);
  }

  candidates(concoursId: number): Observable<AdminExamPdf[]> {
    const filters = { concours_id: concoursId, document_type: 'previous_exam', per_page: 100 };
    return this.list(1, '', filters).pipe(
      expand((r) =>
        r.data.meta.current_page < r.data.meta.last_page
          ? this.list(r.data.meta.current_page + 1, '', filters)
          : EMPTY,
      ),
      reduce((all, r) => [...all, ...r.data.items], [] as AdminExamPdf[]),
    );
  }

  update(id: number, form: FormData): Observable<ApiResponse<AdminExamPdf>> {
    form.set('_method', 'PUT');
    return this.http.post<ApiResponse<AdminExamPdf>>(`/exam-pdfs/${id}`, form);
  }

  upload(formData: FormData): Observable<ApiResponse<AdminExamPdf>> {
    // FormData passed straight through — HttpClient sets the correct
    // multipart Content-Type + boundary automatically, so Http.post()
    // needs no changes to support this.
    return this.http.post<ApiResponse<AdminExamPdf>>('/exam-pdfs', formData);
  }

  uploadWithProgress(form: FormData): Observable<HttpEvent<ApiResponse<AdminExamPdf>>> {
    return this.client.post<ApiResponse<AdminExamPdf>>(`${this.baseUrl}/exam-pdfs`, form, {
      observe: 'events', reportProgress: true,
    });
  }

  transition(pdf: AdminExamPdf, action: PdfAction) {
    return this.http.post<ApiResponse<{ document: AdminExamPdf; skipped: boolean }>>(
      `/admin/exam-pdfs/${pdf.id}/${action}`,
      { version: pdf.version, distribution_confirmed: ['verify', 'verify-publish'].includes(action),
        publication_confirmed: ['publish', 'verify-publish'].includes(action) },
    );
  }

  batch(documents: AdminExamPdf[], action: Exclude<PdfAction, 'unpublish'>) {
    return this.http.post<ApiResponse<PdfBatchResult>>('/admin/exam-pdfs/batch', {
      action, items: documents.map(({ id, version }) => ({ id, version })),
      distribution_confirmed: ['verify', 'verify-publish'].includes(action),
      publication_confirmed: ['publish', 'verify-publish'].includes(action),
    });
  }

  remove(pdf: AdminExamPdf) {
    return this.client.delete<ApiResponse<{ id: number }>>(`${this.baseUrl}/admin/exam-pdfs/${pdf.id}`, {
      body: { version: pdf.version, confirmed: true },
    });
  }

  savePreparationOptions(pdf: AdminExamPdf, ids: number[]): Observable<ApiResponse<AdminExamPdf>> {
    return this.http.put<ApiResponse<AdminExamPdf>>(
      `/admin/exam-pdfs/${pdf.id}/preparation-options`,
      {
        version: pdf.version,
        preparation_option_ids: ids,
      },
    );
  }
}
