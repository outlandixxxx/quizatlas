import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../../environments/environment';

export type FactStatusFilter = 'all' | 'verified' | 'unverified';

export interface FactItem {
  id: number;
  subject_id: number;
  subject?: {
    id: number;
    name: string;
    major_id: number;
  } | null;
  text_fr: string;
  text_en: string;
  text_ar: string;
  source_url: string | null;
  is_verified: boolean;
  verified_at: string | null;
  created_at: string;
}

export interface FactPage {
  data: FactItem[];
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface FactListFilters {
  major_id?: number | null;
  subject_id?: number | null;
  status?: FactStatusFilter;
  search?: string;
  page?: number;
  per_page?: number;
}

export interface FactStat {
  major_id: number;
  major_name: string;
  total: number;
  verified: number;
  available: number;
}

export interface FactImportItem {
  subject_id?: number;
  subject_slug?: string;
  fr: string;
  en: string;
  ar: string;
  source_url?: string | null;
}

export interface FactImportResult {
  created: number;
  skipped_duplicates: number;
  errors: Array<{ index: number; message: string }>;
}

export interface FactUpdatePayload {
  text_fr?: string;
  text_en?: string;
  text_ar?: string;
  source_url?: string | null;
  is_verified?: boolean;
}

@Injectable({
  providedIn: 'root',
})
export class FactApi {
  private readonly baseUrl = `${environment.apiUrl.replace(/\/$/, '')}`;

  constructor(private readonly http: HttpClient) {}

  list(filters: FactListFilters): Observable<FactPage> {
    let params = new HttpParams();

    if (filters.major_id) {
      params = params.set('major_id', filters.major_id);
    }

    if (filters.subject_id) {
      params = params.set('subject_id', filters.subject_id);
    }

    if (filters.status && filters.status !== 'all') {
      params = params.set('status', filters.status);
    }

    if (filters.search?.trim()) {
      params = params.set('search', filters.search.trim());
    }

    params = params
      .set('page', filters.page ?? 1)
      .set('per_page', filters.per_page ?? 25);

    return this.http.get<FactPage>(`${this.baseUrl}/facts`, { params });
  }

  stats(): Observable<{ data: FactStat[] }> {
    return this.http.get<{ data: FactStat[] }>(`${this.baseUrl}/facts/stats`);
  }

  import(
    facts: FactImportItem[],
    defaultSubjectId: number | null
  ): Observable<{ data: FactImportResult }> {
    return this.http.post<{ data: FactImportResult }>(
      `${this.baseUrl}/facts/import`,
      { facts, default_subject_id: defaultSubjectId }
    );
  }

  update(id: number, payload: FactUpdatePayload): Observable<{ data: FactItem }> {
    return this.http.patch<{ data: FactItem }>(
      `${this.baseUrl}/facts/${id}`,
      payload
    );
  }

  verify(ids: number[], verified: boolean): Observable<{ data: { updated: number } }> {
    return this.http.post<{ data: { updated: number } }>(
      `${this.baseUrl}/facts/verify`,
      { ids, verified }
    );
  }

  remove(id: number): Observable<{ data: null }> {
    return this.http.delete<{ data: null }>(`${this.baseUrl}/facts/${id}`);
  }
}
