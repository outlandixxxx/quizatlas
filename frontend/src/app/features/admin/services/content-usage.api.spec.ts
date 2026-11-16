import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { provideHttpClientTesting, HttpTestingController } from '@angular/common/http/testing';
import { ContentUsageApi } from './content-usage.api';
import { LocalRenderApi } from './local-render.api';

let http: HttpTestingController, api: ContentUsageApi;
beforeEach(() => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  http = TestBed.inject(HttpTestingController); api = TestBed.inject(ContentUsageApi);
  sessionStorage.clear();
});
afterEach(() => { http.verify(); TestBed.resetTestingModule(); });

it('reuses operation IDs across retries and capture timestamps, but not educational changes', () => {
  const a = api.operationId('revision-json', { notes: ['A'], meta: { exported_at: 'first' } });
  expect(api.operationId('revision-json', { meta: { exported_at: 'later' }, notes: ['A'] })).toBe(a);
  expect(api.operationId('revision-json', { notes: ['B'] })).not.toBe(a);
});

it('keeps export writes separate from read-only counts and validates download IDs', () => {
  api.list('fact', 'used', 2).subscribe();
  const read = http.expectOne(req => req.url.endsWith('/content-usage'));
  expect(read.request.method).toBe('GET'); expect(read.request.params.get('type')).toBe('fact'); expect(read.request.params.get('status')).toBe('used'); read.flush({});
  api.export('revision-json', '{"notes":["stored"]}').subscribe();
  const write = http.expectOne(req => req.url.endsWith('/content-usage/exports'));
  expect(write.request.method).toBe('POST'); expect(write.request.body.kind).toBe('revision-json');
  expect(write.request.body.operation_id).toMatch(/^[a-f0-9-]{36}$/); write.flush({});
  expect(() => api.download('../../secret')).toThrow();
});

it('estimates without allocating usage and never sends an administrator token to the runner', () => {
  const renderer = TestBed.inject(LocalRenderApi);
  renderer.estimate({ type: 'facts-short' }).subscribe();
  const ticket = http.expectOne(req => req.url.endsWith('/local-render/ticket'));
  expect(ticket.request.body.purpose).toBe('estimate'); expect(ticket.request.body.operation_id).toBeUndefined();
  ticket.flush({ data: { ticket: 'a'.repeat(64) } });
  const local = http.expectOne('http://127.0.0.1:3777/estimate');
  expect(local.request.headers.has('Authorization')).toBe(false);
  expect(local.request.headers.get('X-Maroquiz-Render-Ticket')).toBe('a'.repeat(64)); local.flush({ data: {} });
});

it('binds repeated starts to one operation and passes explicit revision parents only to Laravel', () => {
  const renderer = TestBed.inject(LocalRenderApi), doc = { type: 'revision-batch', quizzes: [] };
  let operation: string | undefined;
  for (let attempt = 0; attempt < 2; attempt++) {
    renderer.start(doc, ['12345678-1234-1234-1234-123456789000']).subscribe();
    const ticket = http.expectOne(req => req.url.endsWith('/local-render/ticket'));
    expect(ticket.request.body.purpose).toBe('render');
    if (operation) expect(ticket.request.body.operation_id).toBe(operation); else operation = ticket.request.body.operation_id;
    expect(ticket.request.body.parent_ids).toHaveLength(1);
    ticket.flush({ data: { ticket: 'b'.repeat(64) } });
    const local = http.expectOne('http://127.0.0.1:3777/jobs');
    expect(JSON.parse(local.request.body)).toEqual(doc);
    expect(local.request.headers.has('Authorization')).toBe(false);
    local.flush({ data: { id: operation, accessKey: 'c'.repeat(64), status: 'running' } });
  }
});

it('passes both Fact video scope dimensions and keeps question requests unchanged', () => {
  api.list('fact', 'used', 1, { language: 'ar', video_type: 'facts-long' }).subscribe();
  const scoped = http.expectOne(req => req.url.endsWith('/content-usage'));
  expect(scoped.request.params.get('language')).toBe('ar');
  expect(scoped.request.params.get('video_type')).toBe('facts-long'); scoped.flush({});
  api.list('question', '', 1, { language: 'ar', video_type: 'facts-long' }).subscribe();
  const question = http.expectOne(req => req.url.endsWith('/content-usage'));
  expect(question.request.params.has('language')).toBe(false);
  expect(question.request.params.has('video_type')).toBe(false); question.flush({});
});

it('uses the opt-in quiz-video eligibility scope without leaking it into Fact requests', () => {
  const scope = { context: 'quiz-video' as const, major_id: 3, subject_ids: [2, 4],
    language: 'ar' as const, template: 'niveau-concours' as const, difficulty: 'Advanced' as const };
  api.list('question', 'legacy_restricted', 2, undefined, scope).subscribe();
  const request = http.expectOne(req => req.url.endsWith('/content-usage'));
  expect(request.request.params.get('context')).toBe('quiz-video');
  expect(request.request.params.getAll('subject_ids[]')).toEqual(['2', '4']);
  expect(request.request.params.get('language')).toBe('ar');
  expect(request.request.params.get('template')).toBe('niveau-concours');
  expect(request.request.params.get('difficulty')).toBe('Advanced');
  expect(request.request.params.get('status')).toBe('legacy_restricted');
  request.flush({});
  api.list('fact', '', 1, { language: 'fr', video_type: 'facts-short' }, scope).subscribe();
  const fact = http.expectOne(req => req.url.endsWith('/content-usage'));
  expect(fact.request.params.has('context')).toBe(false);
  expect(fact.request.params.has('subject_ids[]')).toBe(false);
  expect(fact.request.params.get('language')).toBe('fr');
  fact.flush({});
});

it('keeps availability requests and generation operation IDs separate for every quiz video template', () => {
  const ids = new Set<string>();
  for (const template of ['long', 'five-seconds', 'defi-du-jour', 'niveau-concours'] as const) {
    const document = { video: { id: 13, ...(template === 'long' ? {} : { template, language: 'fr' }) }, questions: [{ id: 8 }] };
    const operation = api.operationId('render', [document, []]);
    expect(api.operationId('render', [document, []])).toBe(operation);
    ids.add(operation);
    api.list('question', 'used', 1, undefined, { context: 'quiz-video', subject_id: 2, template }).subscribe();
    const request = http.expectOne(req => req.url.endsWith('/content-usage'));
    expect(request.request.params.get('template')).toBe(template);
    request.flush({});
  }
  expect(ids.size).toBe(4);
});
