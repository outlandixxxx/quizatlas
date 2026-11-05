import { Injectable, inject } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { environment } from '../../../../environments/environment';

export type UsageType = 'question' | 'fact';
export type UsageStatus = 'available' | 'reserved' | 'used';
export interface UsageOutput { kind: string; name: string; sha256?: string; bytes?: number; records?: number; }
export interface UsageOperation { id: string; kind: string; status: string; output: UsageOutput[] | null; expires_at?: string; completed_at?: string; expired?: boolean; }
export interface UsageRow { source_type: UsageType; source_id: number; label: string; subject_id: number; fingerprint: string; status: UsageStatus; operation: UsageOperation | null; }
export interface UsagePage {
  data: UsageRow[];
  counts: { total: number; available: number; reserved: number; used: number };
  meta: { current_page: number; last_page: number; total: number };
}

/** Ignore capture timestamps, while keeping every educational field and its order. */
export function usageIdentity(value: unknown): string {
  const stable = (v: any): any => {
    if (Array.isArray(v)) return v.map(stable);
    if (v && typeof v === 'object') return Object.fromEntries(Object.keys(v).sort()
      .filter(k => k !== 'exported_at' && k !== 'generated_at').map(k => [k, stable(v[k])]));
    return v;
  };
  return JSON.stringify(stable(value));
}

@Injectable({ providedIn: 'root' })
export class ContentUsageApi {
  private readonly http = inject(HttpClient);
  private readonly base = environment.apiUrl.replace(/\/$/, '') + '/content-usage';
  private readonly operations = new Map<string, string>();
  operationId(kind: string, document: unknown): string {
    const identity = usageIdentity([kind, document]);
    const existing = this.operations.get(identity);
    if (existing) return existing;
    const id = crypto.randomUUID();
    if (this.operations.size >= 20) this.operations.delete(this.operations.keys().next().value!);
    this.operations.set(identity, id);
    return id;
  }
  export(kind: 'posts-json' | 'quiz-json' | 'revision-json', content: string) {
    const operation_id = this.operationId(kind, JSON.parse(content));
    return this.http.post<{ data: { operation: UsageOperation; content: string } }>(`${this.base}/exports`, { operation_id, kind, content });
  }
  list(type: UsageType, status: UsageStatus | '', page = 1) {
    let params = new HttpParams().set('type', type).set('page', page);
    if (status) params = params.set('status', status);
    return this.http.get<UsagePage>(this.base, { params });
  }
  recover() { return this.http.post<{ data: { released: number } }>(`${this.base}/recover`, {}); }
  download(id: string) {
    if (!/^[a-f0-9-]{36}$/.test(id)) throw Error('Invalid operation ID.');
    return this.http.get(`${this.base}/operations/${id}/export`, { responseType: 'blob' });
  }
}
