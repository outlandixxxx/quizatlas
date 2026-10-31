import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Http } from './http';
import { ApiResponse } from '../models/api-response';
import { DirectoryFilters } from '../models/concours';
import {
  AnnouncementSource,
  ConcoursDiscovery,
  DiscoveryPage,
  DiscoveryRevision,
  DiscoveryMatch,
} from '../models/concours-discovery';

@Injectable({ providedIn: 'root' })
export class ConcoursDiscoveryApi {
  private readonly http = inject(Http);
  private readonly path = '/admin/concours-discovery';
  sources() {
    return this.http.get<ApiResponse<AnnouncementSource[]>>(`${this.path}/sources`);
  }
  saveSource(payload: object, id?: number) {
    return id
      ? this.http.put<ApiResponse<AnnouncementSource>>(`${this.path}/sources/${id}`, payload)
      : this.http.post<ApiResponse<AnnouncementSource>>(`${this.path}/sources`, payload);
  }
  list(filters: DirectoryFilters) {
    let params = new HttpParams();
    for (const [key, value] of Object.entries(filters))
      if (value != null && value !== '') params = params.set(key, String(value));
    return this.http.get<ApiResponse<DiscoveryPage>>(`${this.path}/discoveries`, params);
  }
  add(payload: object) {
    return this.http.post<ApiResponse<ConcoursDiscovery>>(`${this.path}/discoveries`, payload);
  }
  show(id: number) {
    return this.http.get<ApiResponse<ConcoursDiscovery>>(`${this.path}/discoveries/${id}`);
  }
  review(record: ConcoursDiscovery, payload: object) {
    return this.http.post<ApiResponse<ConcoursDiscovery>>(
      `${this.path}/discoveries/${record.id}/review`,
      { ...payload, version: record.version },
    );
  }
  revisions(id: number, page = 1) {
    return this.http.get<ApiResponse<DiscoveryPage<DiscoveryRevision>>>(
      `${this.path}/discoveries/${id}/revisions`,
      new HttpParams().set('page', page),
    );
  }
  matches(id: number) {
    return this.http.get<ApiResponse<DiscoveryMatch[]>>(`${this.path}/discoveries/${id}/matches`);
  }
  decideMatch(record: ConcoursDiscovery, other: ConcoursDiscovery, decision: string, note: string) {
    return this.http.post<ApiResponse<ConcoursDiscovery>>(
      `${this.path}/discoveries/${record.id}/matches`,
      {
        version: record.version,
        other_id: other.id,
        other_version: other.version,
        decision,
        note,
        source_checked: true,
      },
    );
  }
}
