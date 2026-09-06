import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

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

  list(page = 1, search = ''): Observable<ApiResponse<AdminExamPdfListData>> {
    const query = new URLSearchParams({ page: String(page) });
    if (search) query.set('search', search);
    return this.http.get<ApiResponse<AdminExamPdfListData>>(`/exam-pdfs?${query.toString()}`);
  }

  upload(formData: FormData): Observable<ApiResponse<AdminExamPdf>> {
    // FormData passed straight through — HttpClient sets the correct
    // multipart Content-Type + boundary automatically, so Http.post()
    // needs no changes to support this.
    return this.http.post<ApiResponse<AdminExamPdf>>('/exam-pdfs', formData);
  }
}