import { Injectable, inject } from '@angular/core';
import { EMPTY, Observable, expand, reduce } from 'rxjs';

import { ApiResponse } from '../../../core/models/api-response';
import { AdminExamPdf, AdminExamPdfListMeta } from '../../../core/models/exam-pdf-admin';
import { Http } from '../../../core/services/http';

export interface AdminExamPdfListData {
  items: AdminExamPdf[];
  meta: AdminExamPdfListMeta;
}

@Injectable({ providedIn: 'root' })
export class AdminExamPdfApi {
  private readonly http = inject(Http);

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
