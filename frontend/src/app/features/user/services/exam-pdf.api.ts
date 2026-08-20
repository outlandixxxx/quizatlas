import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { ExamPdf, ExamPdfMeta } from '../../../core/models/exam-pdf';

@Injectable({ providedIn: 'root' })
export class ExamPdfApi {
  private readonly http = inject(Http);

  list(params: { search?: string; subject_id?: number; major_id?: number; page?: number; per_page?: number }):
    Observable<ApiResponse<{ items: ExamPdf[]; meta: ExamPdfMeta }>> {
    const query = new URLSearchParams();
    if (params.search) query.set('search', params.search);
    if (params.subject_id) query.set('subject_id', String(params.subject_id));
    if (params.major_id) query.set('major_id', String(params.major_id));

    if (params.page) query.set('page', String(params.page));
    if (params.per_page) query.set('per_page', String(params.per_page));

    return this.http.get<ApiResponse<{ items: ExamPdf[]; meta: ExamPdfMeta }>>(
      `/exam-pdfs?${query.toString()}`
    );
  }
}