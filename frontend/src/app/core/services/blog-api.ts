import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';

import { Http } from './http';
import { ApiResponse } from '../models/api-response';

export interface ApiBlogAuthor {
  id: number;
  name: string;
  avatar_url: string | null;
  xp: number;
}

export interface ApiBlogAsk {
  id: number;
  title: string;
  body: string;
  author: ApiBlogAuthor;
  major: { id: number; name: string } | null;
  subject: { id: number; name: string } | null;
  responses_count: number;
  views_count: number;
  created_at: string;
}

export interface ApiBlogResponse {
  id: number;
  body: string;
  is_accepted: boolean;
  author: ApiBlogAuthor;
  created_at: string;
}

export interface ApiBlogAskDetail extends ApiBlogAsk {
  responses: ApiBlogResponse[];
}

export interface ApiBlogMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface ApiBlogStats {
  questions_asked: number;
  answers_given: number;
  members: number;
  answered_pct: number;
}

export interface ApiBlogTag {
  id: number;
  name: string;
  blog_asks_count: number;
}

export interface ApiBlogContributor {
  user: ApiBlogAuthor;
  accepted_count: number;
}

export interface BlogListParams {
  major_id?: number;
  subject_id?: number;
  sort?: string;
  q?: string;
  page?: number;
  per_page?: number;
}

@Injectable({ providedIn: 'root' })
export class BlogApi {
  private readonly http = inject(Http);

  list(params: BlogListParams): Observable<ApiResponse<{ items: ApiBlogAsk[]; meta: ApiBlogMeta }>> {
    let httpParams = new HttpParams();

    if (params.major_id != null) httpParams = httpParams.set('major_id', params.major_id);
    if (params.subject_id != null) httpParams = httpParams.set('subject_id', params.subject_id);
    if (params.sort) httpParams = httpParams.set('sort', params.sort);
    if (params.q) httpParams = httpParams.set('q', params.q);
    if (params.page != null) httpParams = httpParams.set('page', params.page);
    if (params.per_page != null) httpParams = httpParams.set('per_page', params.per_page);

    return this.http.get<ApiResponse<{ items: ApiBlogAsk[]; meta: ApiBlogMeta }>>('/blog/asks', httpParams);
  }

  show(id: number): Observable<ApiResponse<ApiBlogAskDetail>> {
    return this.http.get<ApiResponse<ApiBlogAskDetail>>(`/blog/asks/${id}`);
  }

  create(payload: { title: string; body: string; major_id?: number | null; subject_id?: number | null }): Observable<ApiResponse<ApiBlogAsk>> {
    return this.http.post<ApiResponse<ApiBlogAsk>>('/blog/asks', payload);
  }

  respond(askId: number, body: string): Observable<ApiResponse<ApiBlogResponse>> {
    return this.http.post<ApiResponse<ApiBlogResponse>>(`/blog/asks/${askId}/responses`, { body });
  }

  acceptResponse(askId: number, responseId: number): Observable<ApiResponse<ApiBlogResponse>> {
    return this.http.post<ApiResponse<ApiBlogResponse>>(`/blog/asks/${askId}/responses/${responseId}/accept`, {});
  }

  stats(): Observable<ApiResponse<ApiBlogStats>> {
    return this.http.get<ApiResponse<ApiBlogStats>>('/blog/asks/stats');
  }

  popularTags(): Observable<ApiResponse<ApiBlogTag[]>> {
    return this.http.get<ApiResponse<ApiBlogTag[]>>('/blog/asks/popular-tags');
  }

  topContributors(): Observable<ApiResponse<ApiBlogContributor[]>> {
    return this.http.get<ApiResponse<ApiBlogContributor[]>>('/blog/asks/top-contributors');
  }
}