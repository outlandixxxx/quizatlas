import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { vi } from 'vitest';
import { LocalRenderApi } from './local-render.api';
import { thumbnailFixture } from '../thumbnail-editor/testing/thumbnail-fixture';

it('authorizes the exact PDF snapshot and keeps preview/download capabilities scoped to one safe job', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    const id = '12345678-1234-1234-1234-123456789012';
    const snapshot = { type: 'revision-batch', output_mode: 'both', language: 'ar', quizzes: [] };
    api.start(snapshot).subscribe();
    const ticket = http.expectOne(r => r.url.endsWith('/local-render/ticket'));
    expect(JSON.parse(ticket.request.body.content)).toEqual(snapshot);
    ticket.flush({ data: { ticket: 'a'.repeat(64) } });
    const start = http.expectOne('http://127.0.0.1:3777/jobs');
    expect(start.request.body).toBe(JSON.stringify(snapshot));
    expect(start.request.headers.has('Authorization')).toBe(false);
    start.flush({ data: { id, accessKey: 'b'.repeat(64), status: 'running' } });
    expect(api.revisionArtifact(id, 'pdf')).toBe(`http://127.0.0.1:3777/jobs/${id}/revision/pdf?key=${'b'.repeat(64)}`);
    expect(api.revisionArtifact(id, 'pdf', true)).toContain('&preview=1');
    expect(api.revisionArtifact(id, 'catalogue', true)).not.toContain('preview');
    expect(() => api.revisionArtifact(id, '../input.json')).toThrow();
    expect(() => api.revisionArtifact('../input.json', 'pdf')).toThrow();
    http.verify();
  } finally { sessionStorage.clear(); TestBed.resetTestingModule(); }
});

it('retains the last quiz batch capability for refresh without sending administrator credentials to the runner', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const id = '12345678-1234-1234-1234-123456789012';
    const key = 'c'.repeat(64);
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    api.start({ type: 'quiz-batch', videos: [] }).subscribe();
    http.expectOne(r => r.url.endsWith('/local-render/ticket')).flush({ data: { ticket: 'a'.repeat(64) } });
    http.expectOne('http://127.0.0.1:3777/jobs').flush({ data: { id, accessKey: key, type: 'quiz-batch', status: 'running' } });
    expect(JSON.parse(localStorage.getItem('maroquiz-quiz-batch')!)).toEqual({ id, key });
    const restored = TestBed.runInInjectionContext(() => new LocalRenderApi());
    expect(restored.recentQuizBatch()).toBe(id);
    restored.job(id).subscribe();
    const request = http.expectOne('http://127.0.0.1:3777/jobs/' + id);
    expect(request.request.headers.get('X-Maroquiz-Job-Key')).toBe(key);
    expect(request.request.headers.has('Authorization')).toBe(false);
    request.flush({ data: { id, status: 'completed' } });
    localStorage.setItem('maroquiz-quiz-batch', '{invalid');
    expect(restored.recentQuizBatch()).toBeNull();
    http.verify();
  } finally { localStorage.removeItem('maroquiz-quiz-batch'); sessionStorage.clear(); TestBed.resetTestingModule(); }
});

it('retains Facts batches independently of the Quiz batch and restores the scoped capability', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const id = '22345678-1234-1234-1234-123456789012', key = 'd'.repeat(64);
    localStorage.setItem('maroquiz-quiz-batch', 'preserved-quiz');
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    api.start({ type: 'facts-batch', videos: [] }).subscribe();
    http.expectOne(r => r.url.endsWith('/local-render/ticket')).flush({ data: { ticket: 'a'.repeat(64) } });
    http.expectOne('http://127.0.0.1:3777/jobs').flush({ data: { id, accessKey: key, type: 'facts-batch', status: 'running' } });
    expect(localStorage.getItem('maroquiz-quiz-batch')).toBe('preserved-quiz');
    const restored = TestBed.runInInjectionContext(() => new LocalRenderApi());
    expect(restored.recentFactsBatch()).toBe(id);
    restored.job(id).subscribe();
    const request = http.expectOne('http://127.0.0.1:3777/jobs/' + id);
    expect(request.request.headers.get('X-Maroquiz-Job-Key')).toBe(key);
    expect(request.request.headers.has('Authorization')).toBe(false);
    request.flush({ data: { id, status: 'running' } }); http.verify();
  } finally { localStorage.removeItem('maroquiz-facts-batch'); localStorage.removeItem('maroquiz-quiz-batch'); sessionStorage.clear(); TestBed.resetTestingModule(); }
});

it('keeps a retained batch retry authenticated and permits integrity checks longer than 15 seconds', async () => {
  vi.useFakeTimers();
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const id = '32345678-1234-1234-1234-123456789012', key = 'e'.repeat(64);
    sessionStorage.setItem('maroquiz-render-' + id, key);
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    const failed = vi.fn(), done = vi.fn();
    api.retry(id).subscribe({ next: done, error: failed });
    const retry = http.expectOne('http://127.0.0.1:3777/jobs/' + id + '/retry');
    expect(retry.request.body).toEqual({});
    expect(retry.request.headers.get('X-Maroquiz-Job-Key')).toBe(key);
    expect(retry.request.headers.has('Authorization')).toBe(false);
    await vi.advanceTimersByTimeAsync(16000);
    expect(failed).not.toHaveBeenCalled();
    retry.flush({ data: { id, status: 'running' } });
    expect(done).toHaveBeenCalledOnce(); http.verify();
  } finally { vi.useRealTimers(); sessionStorage.clear(); TestBed.resetTestingModule(); }
});

it('authorizes thumbnail options and JPEG previews without allocating usage or QCM numbers', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    const snapshot = { video: { id: 19 }, render_options: { thumbnail: thumbnailFixture().spec } };
    api.thumbnailOptions(snapshot).subscribe();
    const optionsTicket = http.expectOne(req => req.url.endsWith('/local-render/ticket'));
    expect(optionsTicket.request.body).toEqual({ content: JSON.stringify(snapshot), purpose: 'thumbnail' });
    optionsTicket.flush({ data: { ticket: 'a'.repeat(64) } });
    const options = http.expectOne('http://127.0.0.1:3777/thumbnails/options');
    expect(options.request.headers.has('Authorization')).toBe(false);
    options.flush({ data: thumbnailFixture().proposal });
    api.thumbnailPreview(snapshot).subscribe();
    const previewTicket = http.expectOne(req => req.url.endsWith('/local-render/ticket'));
    expect(previewTicket.request.body.operation_id).toBeUndefined();
    expect(previewTicket.request.body.parent_ids).toBeUndefined();
    expect(previewTicket.request.body.purpose).toBe('thumbnail');
    previewTicket.flush({ data: { ticket: 'b'.repeat(64) } });
    const preview = http.expectOne('http://127.0.0.1:3777/thumbnails/preview');
    expect(preview.request.responseType).toBe('blob');
    expect(preview.request.body).toBe(JSON.stringify(snapshot));
    expect(preview.request.headers.has('Authorization')).toBe(false);
    preview.flush(new Blob(['jpeg-fixture'], { type: 'image/jpeg' }));
    http.expectNone(req => /content-usage|short-numbers/.test(req.url));
    http.verify();
  } finally { TestBed.resetTestingModule(); }
});

it('retries only missing thumbnails with the retained job capability and no render ticket', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const id = '42345678-1234-1234-1234-123456789012', key = 'f'.repeat(64);
    sessionStorage.setItem('maroquiz-render-' + id, key);
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    api.retryThumbnails(id).subscribe();
    const request = http.expectOne(`http://127.0.0.1:3777/jobs/${id}/thumbnail-retry`);
    expect(request.request.headers.get('X-Maroquiz-Job-Key')).toBe(key);
    expect(request.request.headers.has('Authorization')).toBe(false);
    request.flush({ data: { id, status: 'completed', thumbnailRunning: true } });
    http.expectNone(req => req.url.endsWith('/local-render/ticket'));
    http.verify();
  } finally { sessionStorage.clear(); TestBed.resetTestingModule(); }
});
