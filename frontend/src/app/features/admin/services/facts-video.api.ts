import { Injectable, inject } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from '../../../../environments/environment';

export type FactsLanguage = 'fr' | 'ar' | 'en';
export interface FactsMajor {
  id: number; name: string;
  subjects: Array<{ id: number; name: string; available: Record<FactsLanguage, number> }>;
}
export interface FactsVideoConfig {
  major_id: number; subject_id: number | null; language: FactsLanguage;
  profile: 'facts-short' | 'facts-long'; count: number;
}
export interface FactsDocument {
  format_version: string;
  type: 'facts-short' | 'facts-long';
  language: FactsLanguage;
  video: { title: string };
  major: { id: number; name: string };
  facts: Array<{ id: number; subject_id: number; subject_name: string; text: string; detail: string; source_url: string | null }>;
  meta: { available: number };
  render_options?: { quality: 'draft' | 'final'; orientation: 'vertical' | 'horizontal'; music: boolean; sfx: boolean; musicVolume: number };
}
@Injectable({ providedIn: 'root' })
export class FactsVideoApi {
  private readonly http = inject(HttpClient);
  private readonly base = environment.apiUrl.replace(/\/$/, '') + '/facts-video';
  options() { return this.http.get<{ data: FactsMajor[] }>(`${this.base}/options`); }
  export(config: FactsVideoConfig, ids?: number[]) {
    return this.http.post<{ data: FactsDocument }>(`${this.base}/export`, { ...config, ...(ids ? { fact_ids: ids } : {}) });
  }
}
