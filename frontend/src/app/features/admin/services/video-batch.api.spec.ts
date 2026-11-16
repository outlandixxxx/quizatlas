import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TestBed } from '@angular/core/testing';
import { LocalRenderApi } from './local-render.api';
import { VideoBatchApi } from './video-batch.api';

beforeEach(() => TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting(), { provide: LocalRenderApi, useValue: {} }] }));
afterEach(() => TestBed.inject(HttpTestingController).verify());
it('requests the stored Short explanation in the selected source language without changing legacy exports', () => {
  const api = TestBed.inject(VideoBatchApi), http = TestBed.inject(HttpTestingController);
  api.exportJson(12).subscribe();
  http.expectOne(r => r.url.endsWith('/video-sets/12/export-json') && r.params.keys().length === 0).flush({});
  api.exportJson(13, 'five-seconds', 'ar').subscribe();
  http.expectOne(r => r.url.endsWith('/video-sets/13/export-json') && r.params.get('template') === 'five-seconds' && r.params.get('language') === 'ar').flush({});
  api.exportJson(14, 'defi-du-jour', 'fr').subscribe();
  http.expectOne(r => r.url.endsWith('/video-sets/14/export-json') && r.params.get('template') === 'defi-du-jour' && r.params.get('language') === 'fr').flush({});
  api.exportJson(15, 'niveau-concours', 'en').subscribe();
  http.expectOne(r => r.url.endsWith('/video-sets/15/export-json') && r.params.get('template') === 'niveau-concours' && r.params.get('language') === 'en').flush({});
});

it('carries confirmed content language into the new template preview without changing legacy preview requests', () => {
  const api = TestBed.inject(VideoBatchApi), http = TestBed.inject(HttpTestingController);
  api.previewVideo(15, 'niveau-concours', 'ar').subscribe();
  http.expectOne(r => r.url.endsWith('/video-sets/15') && r.params.get('template') === 'niveau-concours' && r.params.get('language') === 'ar').flush({});
  api.previewVideo(15).subscribe();
  http.expectOne(r => r.url.endsWith('/video-sets/15') && r.params.keys().length === 0).flush({});
});

it('preserves per-template settings when single render options are added', () => {
  const renderer = TestBed.inject(LocalRenderApi) as any;
  renderer.start = vi.fn(() => ({ subscribe() {} }));
  const document = { video: { template: 'niveau-concours' }, render_options: { niveau: { extra_animations: true, narration: false, music: false, sfx: true } } };
  TestBed.inject(VideoBatchApi).startLocalRender(document as any, { profile: 'final' });
  expect(renderer.start.mock.calls[0][0].render_options).toEqual({ ...document.render_options, profile: 'final' });
});

it('sends confirmed template and source language to preparation rather than filtering after selection', () => {
  const api = TestBed.inject(VideoBatchApi), http = TestBed.inject(HttpTestingController);
  api.create({ major_id: 3, target_video_count: 5, questions_per_video: 1, template: 'niveau-concours', language: 'ar' }).subscribe();
  const create = http.expectOne(r => r.url.endsWith('/video-batches'));
  expect(create.request.body.template).toBe('niveau-concours');
  expect(create.request.body.language).toBe('ar'); create.flush({});
  api.generate(7, [2, 4], { template: 'niveau-concours', language: 'ar' }).subscribe();
  const generate = http.expectOne(r => r.url.endsWith('/video-batches/7/generate'));
  expect(generate.request.body).toEqual({ subject_ids: [2, 4], template: 'niveau-concours', language: 'ar' });
  generate.flush({});
});
