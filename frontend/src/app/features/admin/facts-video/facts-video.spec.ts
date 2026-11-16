import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TranslocoService } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import { vi } from 'vitest';
import { AdminFactsVideo } from './facts-video';
import { thumbnailFixture } from '../thumbnail-editor/testing/thumbnail-fixture';
import { FactsDocument, FactsVideoApi } from '../services/facts-video.api';
import { LocalRenderApi } from '../services/local-render.api';

const doc: FactsDocument = { format_version: 'facts-video-v1', type: 'facts-long', language: 'fr', video: { title: 'Sciences' }, major: { id: 1, name: 'Sciences' }, facts: [{ id: 3, text: 'Une observation.', detail: '', source_url: null }], meta: { available: 4 } };
const estimate = { estimatedDuration: 13.4, width: 360, height: 640, factIds: [3], shortTooLong: false, scenes: 3 };
afterEach(() => { vi.useRealTimers(); TestBed.resetTestingModule(); });

it('calculates estimates from exported facts and never asks for a target duration', async () => {
  vi.useFakeTimers();
  const api = { options: () => of({ data: [] }), export: vi.fn(() => of({ data: doc })) };
  const renderer = { estimate: vi.fn(() => of({ data: estimate })) };
  TestBed.configureTestingModule({ providers: [{ provide: FactsVideoApi, useValue: api }, { provide: LocalRenderApi, useValue: renderer }, { provide: TranslocoService, useValue: { translate: (key: string) => key } }] });
  const page = TestBed.runInInjectionContext(() => new AdminFactsVideo()); page.ngOnInit();
  page.form.patchValue({ major_id: 1, profile: 'facts-long', count: 1 });
  await vi.advanceTimersByTimeAsync(400);
  expect(page.estimate()?.estimatedDuration).toBe(13.4);
  expect(api.export.mock.calls[0]).toEqual([{ major_id: 1, language: 'fr', profile: 'facts-long', count: 1 }]);
  expect(Object.keys(page.form.controls)).not.toContain('subject_id');
  expect(Object.keys(page.form.controls)).not.toContain('duration');
  expect(Object.keys(page.form.controls)).not.toContain('target_duration');
  page.form.controls.count.setValue(13); expect(page.form.valid).toBe(true);
  page.form.controls.profile.setValue('facts-short'); expect(page.form.invalid).toBe(true);
});

it('invalidates the old estimate immediately and ignores stale selection responses', async () => {
  vi.useFakeTimers();
  const pending = new Subject<{ data: FactsDocument }>();
  const api = { options: () => of({ data: [] }), export: vi.fn(() => pending) };
  TestBed.configureTestingModule({ providers: [{ provide: FactsVideoApi, useValue: api }, { provide: LocalRenderApi, useValue: { estimate: () => of({ data: estimate }) } }, { provide: TranslocoService, useValue: { translate: (key: string) => key } }] });
  const page = TestBed.runInInjectionContext(() => new AdminFactsVideo()); page.ngOnInit();
  page.form.patchValue({ major_id: 1, count: 1 }); await vi.advanceTimersByTimeAsync(400);
  page.form.controls.language.setValue('ar'); pending.next({ data: doc });
  expect(page.estimate()).toBeNull(); expect(page.document()).toBeNull();
});

it('uses an admin ticket for the runner and keeps the API bearer out of local requests', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
  api.start(doc).subscribe();
  http.expectOne(request => request.url.endsWith('/local-render/ticket')).flush({ data: { ticket: 'a'.repeat(64) } });
  const start = http.expectOne('http://127.0.0.1:3777/jobs');
  expect(start.request.headers.get('Authorization')).toBeNull();
  expect(start.request.headers.get('X-Maroquiz-Render-Ticket')).toBe('a'.repeat(64));
  start.flush({ data: { id: '12345678-1234-1234-1234-123456789012', accessKey: 'b'.repeat(64), status: 'running' } });
  api.job('12345678-1234-1234-1234-123456789012').subscribe();
  const poll = http.expectOne('http://127.0.0.1:3777/jobs/12345678-1234-1234-1234-123456789012');
  expect(poll.request.headers.get('X-Maroquiz-Job-Key')).toBe('b'.repeat(64));
  poll.flush({ data: { status: 'completed' } }); http.verify();
});

it('shows the actual insufficient-language-content validation detail', async () => {
  vi.useFakeTimers();
  const api = { options: () => of({ data: [] }), export: () => throwError(() => ({ error: { message: 'Validation failed.', errors: { count: ['Only 10 verified facts are available in the selected language.'] } } })) };
  TestBed.configureTestingModule({ providers: [{ provide: FactsVideoApi, useValue: api }, { provide: LocalRenderApi, useValue: {} }, { provide: TranslocoService, useValue: { translate: (key: string) => key } }] });
  const page = TestBed.runInInjectionContext(() => new AdminFactsVideo()); page.ngOnInit();
  page.form.patchValue({ major_id: 1, count: 11 }); await vi.advanceTimersByTimeAsync(400);
  expect(page.error()).toContain('Only 10 verified facts');
  expect(page.estimate()).toBeNull();
});

function approve(page: AdminFactsVideo) {
  page.thumbnailReviews.set(Object.fromEntries(page.thumbnailVideos().map(video => [video.key, thumbnailFixture({ template: video.document.type, locale: video.document.language, subject: null })])));
  page.approved.set(true);
}

function batchPage(exported: FactsDocument = { ...doc, facts: [doc.facts[0], { ...doc.facts[0], id: 4, text: 'Autre fait.' }] }) {
  const api = { options: () => of({ data: [] }), export: vi.fn((_config: unknown, _ids?: number[], _excluded?: number[]) => of({ data: exported })) };
  const renderer = { estimate: vi.fn((_snapshot: { type: string; videos: FactsDocument[] }) => of({ data: estimate })), recentFactsBatch: () => null,
    start: vi.fn((_snapshot: { type: string; videos: FactsDocument[] }) => of({ data: { id: '12345678-1234-1234-1234-123456789012', accessKey: 'a'.repeat(64), type: 'facts-batch', status: 'running' } })),
    job: vi.fn(() => of({ data: { id: '12345678-1234-1234-1234-123456789012', status: 'completed' } })),
    retry: vi.fn(() => of({ data: { id: '12345678-1234-1234-1234-123456789012', status: 'running' } })),
    cancel: vi.fn(() => of({ data: { id: '12345678-1234-1234-1234-123456789012', status: 'cancelled' } })),
  };
  TestBed.configureTestingModule({ providers: [{ provide: FactsVideoApi, useValue: api }, { provide: LocalRenderApi, useValue: renderer }, { provide: TranslocoService, useValue: { translate: (key: string) => key } }] });
  const page = TestBed.runInInjectionContext(() => new AdminFactsVideo()); page.ngOnInit();
  page.form.patchValue({ major_id: 1, profile: 'facts-long', count: 1, video_count: 2 });
  return { page, api, renderer };
}

it('previews all fact videos, requires approval, revalidates IDs and prevents double-starts', async () => {
  vi.useFakeTimers(); const { page, api, renderer } = batchPage();
  await vi.advanceTimersByTimeAsync(400);
  expect(renderer.estimate.mock.calls[0][0]).toMatchObject({ type: 'facts-batch', videos: [{ facts: [{ id: 3 }] }, { facts: [{ id: 4 }] }] });
  await page.generate(); expect(renderer.start).not.toHaveBeenCalled();
  approve(page);
  await Promise.all([page.generate(), page.generate()]);
  expect(renderer.start).toHaveBeenCalledTimes(1);
  expect(api.export.mock.calls.at(-1)?.[1]).toEqual([3, 4]);
  expect(renderer.start.mock.calls[0][0].videos.map((v: FactsDocument) => v.facts[0].id)).toEqual([3, 4]);
});

it('replaces only the chosen fact, excludes the entire batch and invalidates approval', async () => {
  vi.useFakeTimers(); const { page, api } = batchPage(); await vi.advanceTimersByTimeAsync(400);
  approve(page);
  api.export.mockReturnValueOnce(of({ data: { ...doc, facts: [{ ...doc.facts[0], id: 9, text: 'Remplacement.' }] } }));
  await page.replace(1);
  expect(api.export.mock.calls.at(-1)?.[2]).toEqual([3, 4]);
  expect(page.document()?.facts.map(f => f.id)).toEqual([3, 9]);
  expect(page.approved()).toBe(false);
  approve(page); page.form.controls.language.setValue('ar');
  expect(page.approved()).toBe(false); expect(page.document()).toBeNull();
});

it('preserves the approved selection on start failure and retries retained exports without starting again', async () => {
  vi.useFakeTimers(); const { page, renderer } = batchPage(); await vi.advanceTimersByTimeAsync(400);
  renderer.start.mockReturnValueOnce(throwError(() => new Error('Drive unavailable')));
  approve(page); await page.generate();
  expect(page.error()).toContain('Drive unavailable'); expect(page.document()?.facts).toHaveLength(2);
  page.job.set({ id: '12345678-1234-1234-1234-123456789012', accessKey: 'a'.repeat(64), status: 'failed', type: 'facts-batch' });
  await Promise.all([page.retry(), page.retry()]);
  expect(renderer.retry).toHaveBeenCalledTimes(1); expect(renderer.start).toHaveBeenCalledTimes(1);
});

it('recalculates proposal availability and options when language or format changes', async () => {
  vi.useFakeTimers();
  const api = { options: vi.fn(() => of({ data: [] })), export: vi.fn((_config: unknown) => of({ data: doc })) };
  const renderer = { estimate: () => of({ data: estimate }), recentFactsBatch: () => null };
  TestBed.configureTestingModule({ providers: [{ provide: FactsVideoApi, useValue: api }, { provide: LocalRenderApi, useValue: renderer }, { provide: TranslocoService, useValue: { translate: (key: string) => key } }] });
  const page = TestBed.runInInjectionContext(() => new AdminFactsVideo()); page.ngOnInit();
  page.form.patchValue({ major_id: 1, count: 1, language: 'fr', profile: 'facts-short' }); await vi.advanceTimersByTimeAsync(400);
  expect(api.export.mock.calls.at(-1)?.[0]).toMatchObject({ language: 'fr', profile: 'facts-short' });
  page.form.controls.language.setValue('ar'); await vi.advanceTimersByTimeAsync(400);
  expect(api.export.mock.calls.at(-1)?.[0]).toMatchObject({ language: 'ar', profile: 'facts-short' });
  page.form.controls.profile.setValue('facts-long'); await vi.advanceTimersByTimeAsync(400);
  expect(api.export.mock.calls.at(-1)?.[0]).toMatchObject({ language: 'ar', profile: 'facts-long' });
  expect(api.options).toHaveBeenLastCalledWith('facts-long');
});

it('freezes a distinct major-only thumbnail for each Facts video and retains it on thumbnail-only retries', async () => {
  vi.useFakeTimers();
  const { page, renderer } = batchPage(); await vi.advanceTimersByTimeAsync(400);
  page.approved.set(true); await page.generate();
  expect(renderer.start).not.toHaveBeenCalled();
  const videos = page.thumbnailVideos();
  page.thumbnailReviews.set(Object.fromEntries(videos.map((video, index) => [video.key,
    thumbnailFixture({ template: video.document.type, subject: null, hook: `Accroche ${index + 1}`, seed: `facts-${index}` })])));
  page.approved.set(true);
  await page.generate();
  const batch = renderer.start.mock.calls[0][0];
  expect(batch.videos[0].render_options?.thumbnail?.hook).toBe('Accroche 1');
  expect(batch.videos[1].render_options?.thumbnail?.hook).toBe('Accroche 2');
  expect(batch.videos[0].render_options?.thumbnail?.subject).toBeNull();
  page.job.set({ id: '12345678-1234-1234-1234-123456789012', accessKey: 'key', status: 'completed', thumbnailStatus: 'failed' });
  const retry = vi.fn(() => of({ data: { id: page.job()!.id, status: 'completed', thumbnailRunning: false } }));
  (renderer as any).retryThumbnails = retry;
  const starts = renderer.start.mock.calls.length;
  await page.retryThumbnails();
  expect(retry).toHaveBeenCalledWith('12345678-1234-1234-1234-123456789012');
  expect(renderer.start).toHaveBeenCalledTimes(starts);
});
