import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TranslocoService } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import { vi } from 'vitest';
import { AdminFactsVideo } from './facts-video';
import { FactsDocument, FactsVideoApi } from '../services/facts-video.api';
import { LocalRenderApi } from '../services/local-render.api';

const doc: FactsDocument = { format_version: 'facts-video-v1', type: 'facts-long', language: 'fr', video: { title: 'Sciences' }, major: { id: 1, name: 'Sciences' }, facts: [{ id: 3, subject_id: 2, subject_name: 'Physique', text: 'Une observation.', detail: '', source_url: null }], meta: { available: 4 } };
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
  expect(api.export.mock.calls[0]).toEqual([{ major_id: 1, subject_id: null, language: 'fr', profile: 'facts-long', count: 1 }]);
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
