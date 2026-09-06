import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';
import { ApiResponse } from '../models/api-response';
import { Http } from './http';
import { PublicMajorsResponse, PublicSubjectsResponse } from '../models/public-catalog';
import { PublicProgressionShowcase } from '../models/public-progression';



@Injectable({ providedIn: 'root' })
export class PublicCatalogApi {
  private readonly http = inject(Http);

  getMajors(params: { search?: string; page?: number; per_page?: number }): Observable<ApiResponse<PublicMajorsResponse>> {
    const parts: string[] = [];
    if (params.search) parts.push(`search=${encodeURIComponent(params.search)}`);
    if (params.page) parts.push(`page=${params.page}`);
    if (params.per_page) parts.push(`per_page=${params.per_page}`);
    const query = parts.length ? `?${parts.join('&')}` : '';

    return this.http.get<ApiResponse<PublicMajorsResponse>>(`/public/majors${query}`);
  }

  getSubjects(params: { search?: string; major_id?: number; page?: number; per_page?: number }): Observable<ApiResponse<PublicSubjectsResponse>> {
    const parts: string[] = [];
    if (params.search) parts.push(`search=${encodeURIComponent(params.search)}`);
    if (params.major_id != null) parts.push(`major_id=${params.major_id}`);
    if (params.page) parts.push(`page=${params.page}`);
    if (params.per_page) parts.push(`per_page=${params.per_page}`);
    const query = parts.length ? `?${parts.join('&')}` : '';

    return this.http.get<ApiResponse<PublicSubjectsResponse>>(`/public/subjects${query}`);
  }

  showcase(): Observable<ApiResponse<PublicProgressionShowcase>> {
    return this.http.get<ApiResponse<PublicProgressionShowcase>>('/progression/showcase');
  }
}