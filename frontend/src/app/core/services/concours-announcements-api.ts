
import { Injectable, inject } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Http } from './http';
import { API_BASE_URL } from '../constants/api-base-url';
import { ApiResponse } from '../models/api-response';
import { DirectoryFilters } from '../models/concours';
import { ConcoursPdf } from '../models/concours-pdf';
import {
  AnnouncementAction,
  AnnouncementPage,
  AnnouncementRevision,
  ConcoursAnnouncement,
} from '../models/concours-announcement';

@Injectable({ providedIn: 'root' })
export class ConcoursAnnouncementsApi {
  private readonly http = inject(Http);
  private readonly client = inject(HttpClient);
  private readonly baseUrl = inject(API_BASE_URL);

  list(filters: DirectoryFilters = {}, admin = false) {
    let params = new HttpParams();

    for (const [key, value] of Object.entries(filters)) {
      if (value !== null && value !== undefined && value !== '') {
        params = params.set(key, String(value));
      }
    }

    return this.http.get<ApiResponse<AnnouncementPage>>(
      `/${admin ? 'admin' : 'public'}/concours-announcements`,
      params,
    );
  }

  show(slug: string) {
    return this.http.get<ApiResponse<ConcoursAnnouncement>>(
      `/public/concours-announcements/${encodeURIComponent(slug)}`,
    );
  }

  adminShow(id: number) {
    return this.http.get<ApiResponse<ConcoursAnnouncement>>(
      `/admin/concours-announcements/${id}`,
    );
  }

  save(payload: object, id?: number) {
    const path = '/admin/concours-announcements';

    if (payload instanceof FormData) {
      if (id) payload.set('_method', 'PUT');

      return this.http.post<ApiResponse<ConcoursAnnouncement>>(
        id ? `${path}/${id}` : path,
        payload,
      );
    }

    return id
      ? this.http.put<ApiResponse<ConcoursAnnouncement>>(`${path}/${id}`, payload)
      : this.http.post<ApiResponse<ConcoursAnnouncement>>(path, payload);
  }

  transition(
    record: ConcoursAnnouncement,
    action: AnnouncementAction,
    checked = false,
  ) {
    return this.http.post<ApiResponse<ConcoursAnnouncement>>(
      `/admin/concours-announcements/${record.id}/${action}`,
      {
        version: record.version,
        ...(['verify', 'verify-publish'].includes(action)
          ? { source_checked: checked }
          : {}),
      },
    );
  }

  attachments(slug: string) {
    return this.http.get<
      ApiResponse<{ pdfs: ConcoursPdf[]; official_urls: string[] }>
    >(
      `/public/concours-announcements/${encodeURIComponent(slug)}/attachments`,
    );
  }

  adminAttachments(id: number) {
    return this.http.get<
      ApiResponse<{ pdfs: ConcoursPdf[]; official_urls: string[] }>
    >(`/admin/concours-announcements/${id}/attachments`);
  }

  remove(record: ConcoursAnnouncement) {
    return this.http.delete<ApiResponse<{ id: number }>>(
      `/admin/concours-announcements/${record.id}?version=${record.version}`,
    );
  }

  previewExtraPdf(announcementId: number, pdfId: number) {
    return this.client.get(
      `${this.baseUrl}/admin/concours-announcements/${announcementId}/attachments/${pdfId}/view`,
      { responseType: 'blob' },
    );
  }

  previewPdf(id: number) {
    return this.client.get(
      `${this.baseUrl}/admin/concours-announcements/${id}/pdf/view`,
      { responseType: 'blob' },
    );
  }

  revisions(id: number, page = 1) {
    return this.http.get<
      ApiResponse<{
        items: AnnouncementRevision[];
        meta: AnnouncementPage['meta'];
      }>
    >(
      `/admin/concours-announcements/${id}/revisions`,
      new HttpParams().set('page', page),
    );
  }
}
