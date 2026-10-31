import { Injectable, inject } from '@angular/core';
import { HttpBackend, HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, switchMap, tap, timeout } from 'rxjs';
import { environment } from '../../../../environments/environment';
export type RevisionOutputMode = 'png' | 'pdf' | 'both';

export interface RenderJob {
  id: string;
  accessKey: string;
  status: 'queued' | 'running' | 'completed' | 'failed' | 'cancelled';
  title?: string;
  stage?: string;
  progress?: number | null;
  message?: string;
  error?: string | null;
  estimatedDuration?: number;
  actualDuration?: number;
  width?: number;
  height?: number;
  thumbnailUrl?: string | null;
  type?: string;
  revision?: {
    contentMode?: 'explanations' | 'corrected-questions';
    mode?: RevisionOutputMode;
    book?: { status: string; error?: string | null; pageCount?: number | null; plannedPages?: number; ready: boolean; bytes?: number } | null;
    draft: boolean; totalQuizzes: number; completedQuizzes: number; totalImages: number | null; completedImages: number;
    catalogueReady: boolean; partial: boolean;
    quizzes: { quizId: number; title: string; status: string; error?: string | null; sourceCount: number; imageCount: number | null; zipReady: boolean;
      images: { page: number; status: string; error?: string | null }[] }[];
  } | null;
}
export interface DurationEstimate {
  estimatedDuration: number;
  shortTooLong: boolean;
  width: number;
  height: number;
  factIds: number[];
  scenes: number;
}
@Injectable({ providedIn: 'root' })
export class LocalRenderApi {
  private readonly http = inject(HttpClient);
  private readonly localHttp = new HttpClient(inject(HttpBackend));
  private readonly api = environment.apiUrl.replace(/\/$/, '');
  readonly base = 'http://127.0.0.1:3777';
  private readonly keys = new Map<string, string>();

  private authorized<T>(endpoint: string, document: unknown): Observable<T> {
    const content = JSON.stringify(document);
    return this.http.post<{ data: { ticket: string } }>(`${this.api}/local-render/ticket`, { content }).pipe(
      switchMap(response => this.localHttp.post<T>(`${this.base}/${endpoint}`, content, {
        headers: new HttpHeaders({ 'Content-Type': 'application/json', 'X-Maroquiz-Render-Ticket': response.data.ticket }),
      })), timeout((document as { type?: string })?.type === 'revision-batch' ? 120000 : 20000),
    );
  }
  estimate(document: unknown): Observable<{ data: DurationEstimate }> {
    return this.authorized('estimate', document);
  }
  start(document: unknown): Observable<{ data: RenderJob }> {
    return this.authorized<{ data: RenderJob }>('jobs', document).pipe(tap(({ data }) => {
      this.keys.set(data.id, data.accessKey);
      if (typeof sessionStorage !== 'undefined') sessionStorage.setItem('maroquiz-render-' + data.id, data.accessKey);
    }));
  }
  private key(id: string): string {
    if (!/^[a-f0-9-]{36}$/.test(id)) throw new Error('Invalid job ID.');
    return this.keys.get(id) || (typeof sessionStorage !== 'undefined' ? sessionStorage.getItem('maroquiz-render-' + id) : '') || '';
  }
  job(id: string): Observable<{ data: RenderJob }> {
    return this.localHttp.get<{ data: RenderJob }>(`${this.base}/jobs/${id}`, { headers: { 'X-Maroquiz-Job-Key': this.key(id) } }).pipe(timeout(15000));
  }
  cancel(id: string): Observable<{ data: RenderJob }> {
    return this.localHttp.post<{ data: RenderJob }>(`${this.base}/jobs/${id}/cancel`, {}, { headers: { 'X-Maroquiz-Job-Key': this.key(id) } }).pipe(timeout(15000));
  }
  retry(id: string): Observable<{ data: RenderJob }> {
    return this.localHttp.post<{ data: RenderJob }>(`${this.base}/jobs/${id}/retry`, {}, { headers: { 'X-Maroquiz-Job-Key': this.key(id) } }).pipe(timeout(15000));
  }
  revisionArtifact(id: string, kind: string, preview = false): string {
    if (!/^(pdf|catalogue|index|quiz-\d+|image-\d+-\d+)$/.test(kind)) throw new Error('Invalid revision artifact.');
    return `${this.base}/jobs/${id}/revision/${kind}?key=${encodeURIComponent(this.key(id))}${preview && kind === 'pdf' ? '&preview=1' : ''}`;
  }
  artifact(id: string, kind: 'download' | 'thumbnail' | 'metadata', preview = false): string {
    return `${this.base}/jobs/${id}/${kind}?key=${encodeURIComponent(this.key(id))}${preview ? '&preview=1' : ''}`;
  }
}
