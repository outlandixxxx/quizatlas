import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../../environments/environment';

export type SocialFormat =
  | 'question_du_jour'
  | 'quiz_short'
  | 'facebook_group'
  | 'fact_short'
  | 'fact_video';

export type LongVideoType = 'quiz' | 'facts' | 'none';

export interface SocialChoice {
  id: number;
  label: string;
  text: string;
  is_correct: boolean;
}

export interface SocialQuestion {
  id: number;
  quiz_id: number;
  quiz_title: string | null;
  subject_id: number;
  text: string;
  difficulty: string | null;
  explanation: string;
  choices: SocialChoice[];
  correct: {
    label: string | null;
    text: string | null;
  };
  score: number;
  reasons: string[];
  /** Real players' answers; success_rate stays null until enough answers. */
  player_stats: {
    answers: number;
    success_rate: number | null;
  };
  /** Picked with relaxed length limits: check it fits the template. */
  relaxed: boolean;
}

export interface SocialFact {
  id: number;
  subject_id: number;
  subject_name: string | null;
  fr: string;
  en: string;
  ar: string;
  source_url: string | null;
}

export interface SocialPackDay {
  date: string;
  long_video: LongVideoType;
  major: { id: number; name: string } | null;
  subject: { id: number; name: string } | null;
  question_du_jour: { number: number; question: SocialQuestion } | null;
  quiz_short: { number: number; question: SocialQuestion } | null;
  facebook_group: { questions: SocialQuestion[] } | null;
  fact_short: { number: number; fact: SocialFact } | null;
  fact_video: { number: number; facts: SocialFact[] } | null;
  warnings: string[];
}

export interface SocialPack {
  days: SocialPackDay[];
  difficulties: string[];
  facts_per_video: number;
  generated_at: string;
}

export interface SocialPackDayRequest {
  date: string;
  major_id: number | null;
  long_video: LongVideoType;
}

export interface SocialPackPreviewPayload {
  days: SocialPackDayRequest[];
  difficulties: string[];
  facts_per_video?: number;
}

export interface SocialReplacePayload {
  format: SocialFormat;
  major_id: number | null;
  subject_id: number | null;
  count: number;
  difficulties: string[];
  exclude_question_ids: number[];
  exclude_texts: string[];
  exclude_fact_ids: number[];
}

export interface SocialReplaceResult {
  questions?: SocialQuestion[];
  facts?: SocialFact[];
}

export interface SocialConfirmItem {
  post_date: string;
  format: SocialFormat;
  subject_id: number | null;
  question_id?: number | null;
  fact_id?: number | null;
  series_number?: number | null;
  position?: number;
}

export interface SocialConfirmResult {
  created: number;
  skipped: Array<{ index: number; reason: string }>;
}

@Injectable({
  providedIn: 'root',
})
export class SocialPackApi {
  private readonly baseUrl = `${environment.apiUrl.replace(/\/$/, '')}`;

  constructor(private readonly http: HttpClient) {}

  preview(payload: SocialPackPreviewPayload): Observable<{ data: SocialPack }> {
    return this.http.post<{ data: SocialPack }>(
      `${this.baseUrl}/social-packs/preview`,
      payload
    );
  }

  replace(payload: SocialReplacePayload): Observable<{ data: SocialReplaceResult }> {
    return this.http.post<{ data: SocialReplaceResult }>(
      `${this.baseUrl}/social-packs/replace`,
      payload
    );
  }

  confirm(items: SocialConfirmItem[]): Observable<{ data: SocialConfirmResult }> {
    return this.http.post<{ data: SocialConfirmResult }>(
      `${this.baseUrl}/social-packs/confirm`,
      { items }
    );
  }

  /** "Never use": the question is never picked again for social media. */
  exclude(questionId: number, reason?: string): Observable<{ data: unknown }> {
    return this.http.post<{ data: unknown }>(
      `${this.baseUrl}/social-packs/exclusions`,
      { question_id: questionId, reason: reason ?? null }
    );
  }

  unexclude(questionId: number): Observable<{ data: null }> {
    return this.http.delete<{ data: null }>(
      `${this.baseUrl}/social-packs/exclusions/${questionId}`
    );
  }
}
