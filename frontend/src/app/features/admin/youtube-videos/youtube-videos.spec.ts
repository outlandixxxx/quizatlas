import { LocalRenderApi } from '../services/local-render.api';
import { of, Subject as RxSubject, throwError } from 'rxjs';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TestBed } from '@angular/core/testing';
import { TranslocoService } from '@jsverse/transloco';
import { AdminYoutubeVideos } from './youtube-videos';
import { thumbnailFixture } from '../thumbnail-editor/testing/thumbnail-fixture';
import { VideoBatchApi } from '../services/video-batch.api';
import { SubjectApi } from '../services/subject.api';
import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';

const major = (id: number): Major => ({
  id, name: `Major ${id}`, slug: `major-${id}`, description: null, is_active: true,
});
const subject = (id: number, majorId = 101, active = true): Subject => ({
  id, major: major(majorId), name: `Subject ${id}`, slug: `subject-${id}`,
  description: null, is_active: active,
});
const response = <T>(data: T[]) => ({ success: true, message: 'OK', data });

let http: HttpTestingController;
beforeEach(() => {
  TestBed.configureTestingModule({
    providers: [provideHttpClient(), provideHttpClientTesting(),
      { provide: TranslocoService, useValue: { getActiveLang: () => 'ar', langChanges$: of('ar'), translate: (key: string) => key === 'niveauConcours.generate' ? 'توليد' : key } },
      { provide: VideoBatchApi, useValue: {} },
      { provide: LocalRenderApi, useValue: { recentQuizBatch: () => null, job: () => of({ data: { id: 'retained', status: 'completed' } }) } }],
  });
  http = TestBed.inject(HttpTestingController);
});
afterEach(() => http.verify());

// Existing workflow cases start with a previously reviewed thumbnail; thumbnail cases below verify its gate.
function approve(component: AdminYoutubeVideos) {
  const ids = component.videos().map(video => video.id);
  component.thumbnailReviews.set(Object.fromEntries((ids.length ? ids : [19]).map(id => [id, thumbnailFixture()])));
  component.approved.set(true);
}

function page(endpoint: string, number: number) {
  return http.expectOne(request => request.url.endsWith(`/${endpoint}`)
    && request.params.get('page') === String(number)
    && request.params.get('per_page') === '100');
}

it('loads later pages of majors and subjects before Select all filters by major and active status', () => {
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.ngOnInit();
  page('majors', 1).flush(response(Array.from({ length: 100 }, (_, i) => major(i + 1))));
  page('subjects', 1).flush(response(Array.from({ length: 100 }, (_, i) => subject(i + 1))));
  page('subjects', 2).flush(response([subject(101), subject(102, 101, false), subject(103, 1)]));
  expect(component.isLoading()).toBe(true);
  page('majors', 2).flush(response([major(101)]));

  expect(component.isLoading()).toBe(false);
  expect(component.majors()).toHaveLength(101);
  component.onMajorChange('101');
  component.selectAllSubjects();
  expect(component.selectedSubjectIds()).toEqual(Array.from({ length: 101 }, (_, i) => i + 1));

  component.onMajorChange('1');
  expect(component.selectedSubjectIds()).toEqual([]);
  component.selectAllSubjects();
  expect(component.selectedSubjectIds()).toEqual([103]);
  component.clearSubjects();
  expect(component.selectedSubjectIds()).toEqual([]);
});

it('checks for an empty next page when the total is an exact multiple of the page size', () => {
  let result: Subject[] | undefined;
  TestBed.inject(SubjectApi).listAll().subscribe(subjects => result = subjects);
  page('subjects', 1).flush(response(Array.from({ length: 100 }, (_, i) => subject(i + 1))));
  expect(result).toBeUndefined();
  page('subjects', 2).flush(response<Subject>([]));
  expect(result).toHaveLength(100);
});

it('reports a later page failure instead of exposing an incomplete subject picker', () => {
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.ngOnInit();
  page('majors', 1).flush(response([major(101)]));
  page('subjects', 1).flush(response(Array.from({ length: 100 }, (_, i) => subject(i + 1))));
  page('subjects', 2).flush({}, { status: 500, statusText: 'Server error' });
  expect(component.isLoading()).toBe(false);
  expect(component.subjects()).toEqual([]);
  expect(component.errorMsg()).toContain('Refresh to try again');
});

it('submits all approved proposals once in their original order and blocks double-clicks', async () => {
  const api = TestBed.inject(VideoBatchApi) as any;
  const renderer = TestBed.inject(LocalRenderApi) as any;
  const pending = new RxSubject<any>();
  api.exportJson = vi.fn((id: number) => of({ video: { id, number: id } }));
  renderer.start = vi.fn(() => pending);
  renderer.job = vi.fn(() => of({ data: { id: 'batch', status: 'completed' } }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.videos.set([{ id: 19 }, { id: 18 }] as any);
  await component.generateAll();
  expect(api.exportJson).not.toHaveBeenCalled();
  approve(component);
  component.isGenerating.set(true);
  await component.generateAll();
  expect(api.exportJson).not.toHaveBeenCalled();
  component.isGenerating.set(false);
  const first = component.generateAll();
  await Promise.resolve();
  await component.generateAll();
  expect(renderer.start).toHaveBeenCalledTimes(1);
  expect(renderer.start.mock.calls[0][0].videos.map((v: any) => v.video.id)).toEqual([19, 18]);
  expect(renderer.start.mock.calls[0][0].render_options.profile).toBe('final');
  pending.next({ data: { id: 'batch', type: 'quiz-batch', status: 'running' } });
  await first;
  expect(component.approved()).toBe(false);
  expect(component.batchStarting()).toBe(false);
});

it.each(['five-seconds', 'defi-du-jour', 'niveau-concours'])('selects %s, invalidates approval and sends the language to the existing export and batch APIs', async template => {
  const api = TestBed.inject(VideoBatchApi) as any, renderer = TestBed.inject(LocalRenderApi) as any;
  api.exportJson = vi.fn((id: number, template: string, language: string) => of({ video: { id, template, language } }));
  renderer.start = vi.fn(() => of({ data: { id: 'shorts', type: 'quiz-batch', status: 'completed' } }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  approve(component); component.videos.set([{ id: 1 }] as any);
  component.selectTemplate(template);
  expect(component.form.controls.questions_per_video.value).toBe(1);
  expect(component.approved()).toBe(false); expect(component.videos()).toEqual([]);
  component.numberingReady.set(true); component.displayNumbers.set({19: 11, 20: 12});
  component.videoLanguage.set('ar'); component.videos.set([{ id: 19 }, { id: 20 }] as any); approve(component);
  await component.generateAll();
  expect(api.exportJson.mock.calls).toEqual([[19, template, 'ar'], [20, template, 'ar']]);
  expect(renderer.start.mock.calls[0][0].videos[0].video.template).toBe(template);
  expect(renderer.start.mock.calls[0][0].type).toBe('quiz-batch');
  component.selectTemplate('long'); expect(component.form.controls.questions_per_video.value).toBe(20);
});

it('snapshots animation/audio options with Arabic narration off and invalidates approval when settings change', async () => {
  const api = TestBed.inject(VideoBatchApi) as any, renderer = TestBed.inject(LocalRenderApi) as any;
  api.exportJson = vi.fn(() => of({ video: { id: 19, template: 'niveau-concours', language: 'ar' }, questions: [{ language: 'ar' }] }));
  renderer.start = vi.fn(() => of({ data: { id: 'niveau', status: 'completed' } }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.selectTemplate('niveau-concours');
  expect(component.niveauExtraAnimations()).toBe(false); expect(component.nc('generate')).toBe('توليد');
  approve(component); component.setNiveauOption('extra', true);
  expect(component.niveauExtraAnimations()).toBe(false);
  component.setNiveauOption('music', false); expect(component.approved()).toBe(false);
  component.setNiveauOption('music', true);
  component.numberingReady.set(true); component.displayNumbers.set({19: 11});
  component.videos.set([{ id: 19 }] as any); approve(component);
  await component.generateAll();
  const snapshot = renderer.start.mock.calls[0][0].videos[0];
  expect(snapshot.render_options.niveau).toEqual({ extra_animations: false, narration: false, original_audio: true, music: false, sfx: false });
  expect(snapshot.questions[0].language).toBe('ar');
  component.setNiveauOption('music', false);
  expect(snapshot.render_options.niveau.original_audio).toBe(true);
  renderer.retry = vi.fn(() => of({ data: { id: 'niveau', status: 'running' } }));
  component.localBatch.set({ id: 'niveau', status: 'failed', accessKey: 'key' });
  await component.batchAction('retry');
  expect(renderer.retry).toHaveBeenCalledWith('niveau');
  expect(renderer.start).toHaveBeenCalledTimes(1);
  expect(api.exportJson).toHaveBeenCalledTimes(1);
  expect(snapshot.render_options.niveau.original_audio).toBe(true);
});

it('requires approval for a single Niveau render and carries its frozen options into the existing API', async () => {
  const api = TestBed.inject(VideoBatchApi) as any;
  api.exportJson = vi.fn(() => of({ video: { id: 19, template: 'niveau-concours', language: 'fr' }, questions: [{ language: 'fr' }] }));
  api.startLocalRender = vi.fn(() => of({ data: { id: 'single-niveau' } }));
  api.getLocalRenderJob = () => of({ data: { status: 'completed' } });
  api.getLocalDownloadUrl = () => 'http://localhost/example';
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.selectTemplate('niveau-concours');
  await component.generateMp4({ id: 19 } as any);
  expect(api.exportJson).not.toHaveBeenCalled();
  component.numberingReady.set(true); component.displayNumbers.set({19: 11});
  component.setNiveauOption('extra', true); approve(component);
  await component.generateMp4({ id: 19 } as any);
  expect(api.startLocalRender.mock.calls[0][0].render_options.niveau).toEqual({ extra_animations: false, narration: false, original_audio: true, music: false, sfx: false });
  expect(api.startLocalRender.mock.calls[0][1]).toEqual({profile: 'final'});
  expect(component.renderDownloadUrl()).toBe('http://localhost/example');
});

it.each(['completed', 'failed'] as const)('keeps single Short generation blocked until thumbnail work is %s while preserving the ready MP4', async thumbnailStatus => {
  vi.useFakeTimers();
  try {
    const api = TestBed.inject(VideoBatchApi) as any;
    api.exportJson = vi.fn(() => of({ video: { id: 19, template: 'niveau-concours', language: 'fr' }, questions: [{ language: 'fr' }] }));
    api.startLocalRender = vi.fn(() => of({ data: { id: 'single-short' } }));
    api.getLocalRenderJob = vi.fn()
      .mockReturnValueOnce(of({ data: { id: 'single-short', status: 'completed', thumbnailRunning: true, thumbnailStatus: 'running' } }))
      .mockReturnValueOnce(of({ data: { id: 'single-short', status: 'completed', thumbnailRunning: false, thumbnailStatus,
        thumbnailError: thumbnailStatus === 'failed' ? 'Retry the thumbnail only' : null } }));
    api.getLocalDownloadUrl = () => 'http://localhost/ready.mp4';
    const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
    component.selectTemplate('niveau-concours');
    component.numberingReady.set(true); component.displayNumbers.set({ 19: 11 }); approve(component);
    const first = component.generateMp4({ id: 19 } as any);
    await vi.advanceTimersByTimeAsync(0);
    expect(component.renderDownloadUrl()).toBe('http://localhost/ready.mp4');
    expect(component.singleThumbnailPending()).toBe(true);
    expect(component.batchBusy()).toBe(true);
    expect(component.renderingVideoId()).toBe(19);
    await component.generateMp4({ id: 19 } as any);
    expect(api.startLocalRender).toHaveBeenCalledTimes(1);
    await vi.advanceTimersByTimeAsync(2000);
    await first;
    expect(api.getLocalRenderJob).toHaveBeenCalledTimes(2);
    expect(component.singleThumbnailPending()).toBe(false);
    expect(component.batchBusy()).toBe(false);
    expect(component.renderingVideoId()).toBeNull();
    expect(component.singleRenderJob()?.thumbnailStatus).toBe(thumbnailStatus);
    expect(component.renderDownloadUrl()).toBe('http://localhost/ready.mp4');
    expect(component.renderError()).toBe('');
  } finally { vi.useRealTimers(); }
});

it('preserves the ready MP4 and permits recovery if observation disconnects during thumbnail work', async () => {
  vi.useFakeTimers();
  try {
    const api = TestBed.inject(VideoBatchApi) as any;
    api.exportJson = vi.fn(() => of({ video: { id: 19, template: 'niveau-concours', language: 'fr' }, questions: [{ language: 'fr' }] }));
    api.startLocalRender = vi.fn(() => of({ data: { id: 'retained-short' } }));
    api.getLocalRenderJob = vi.fn()
      .mockReturnValueOnce(of({ data: { id: 'retained-short', status: 'completed', thumbnailRunning: true, thumbnailStatus: 'running' } }))
      .mockReturnValueOnce(throwError(() => ({ status: 0 })));
    api.getLocalDownloadUrl = () => 'http://localhost/retained.mp4';
    const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
    component.selectTemplate('niveau-concours');
    component.numberingReady.set(true); component.displayNumbers.set({ 19: 11 }); approve(component);
    const started = component.generateMp4({ id: 19 } as any);
    await vi.advanceTimersByTimeAsync(2000); await started;
    expect(component.renderingVideoId()).toBeNull();
    expect(component.batchBusy()).toBe(false);
    expect(component.renderDownloadUrl()).toBe('http://localhost/retained.mp4');
    expect(component.renderError()).toContain('not reachable');
    expect(api.startLocalRender).toHaveBeenCalledTimes(1);
  } finally { vi.useRealTimers(); }
});

it('restores observation without starting a new job and shows failures for a safe retry', async () => {
  const renderer = TestBed.inject(LocalRenderApi) as any;
  renderer.recentQuizBatch = () => 'retained';
  renderer.start = vi.fn();
  renderer.retry = vi.fn(() => of({ data: { id: 'retained', status: 'running' } }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.ngOnInit();
  page('majors', 1).flush(response([])); page('subjects', 1).flush(response([]));
  await new Promise(resolve => setTimeout(resolve, 20));
  expect(component.localBatch()?.status).toBe('completed');
  expect(renderer.start).not.toHaveBeenCalled();
  component.localBatch.set({ id: 'retained', status: 'failed', accessKey: 'key' });
  await component.batchAction('retry');
  expect(renderer.retry).toHaveBeenCalledWith('retained');
});

it('edits positive banner numbers independently, proposes consecutive numbers per subject and warns on collisions', () => {
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.selectTemplate('five-seconds');
  component.videos.set([{ id: 19, subject_id: 2, video_number: 35 }, { id: 20, subject_id: 2 }, { id: 21, subject_id: 3 }] as any);
  component.numberingReady.set(true); component.assignedNumbers.set({2: [1, 10]}); approve(component);
  component.setStartingNumber('11');
  expect(component.displayNumbers()).toEqual({19: 11, 20: 12, 21: 11}); expect(component.approved()).toBe(false);
  expect(component.numberWarning()).toBe(false); expect(component.videos()[0].video_number).toBe(35);
  component.setDisplayNumber(20, '11'); expect(component.numberWarning()).toBe(true);
  component.setDisplayNumber(20, '10'); expect(component.numberWarning()).toBe(true);
  for (const invalid of ['0', '-1', '1.5', '1000000', '']) { component.setDisplayNumber(20, invalid); expect(component.numberWarning()).toBe(true); }
  component.setDisplayNumber(20, '13'); expect(component.numberWarning()).toBe(false);
  const source = {video: {id: 19, number: 35, template: 'five-seconds'}} as any;
  const snapshot = (component as any).snapshotOptions(source);
  component.setDisplayNumber(19, '14');
  expect(snapshot.video.display_number).toBe(11); expect(snapshot.video.number).toBe(35); expect(source.video.display_number).toBeUndefined();
});

it('loads number suggestions without allocating them and blocks approval when availability is unavailable', () => {
  const api = TestBed.inject(VideoBatchApi) as any;
  api.shortNumbers = vi.fn(() => of({ data: {suggested: 11, assigned: [{number: 10}], scope: 'subject'} }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.selectTemplate('defi-du-jour');
  component.videos.set([{id: 1, subject_id: 2}, {id: 2, subject_id: 2}] as any);
  (component as any).loadShortNumbers();
  expect(api.shortNumbers).toHaveBeenCalledTimes(1); expect(component.displayNumbers()).toEqual({1: 11, 2: 12});
  expect(component.numberingReady()).toBe(true); expect(component.approved()).toBe(false);
});

it('scopes preparation and generation to the confirmed Short template and content language', () => {
  const api = TestBed.inject(VideoBatchApi) as any;
  api.create = vi.fn(() => of({ data: { id: 7 } }));
  api.generate = vi.fn(() => of({ data: { created_video_count: 0 } }));
  api.show = vi.fn(() => of({ batch: { id: 7 }, videos: [] }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.subjects.set([subject(2), subject(4)]);
  component.onMajorChange('101');
  component.selectTemplate('niveau-concours');
  component.setContentLanguage('ar');
  component.selectedSubjectIds.set([2]);
  component.prepareVideos();
  expect(api.create).toHaveBeenCalledWith(expect.objectContaining({ template: 'niveau-concours', language: 'ar', questions_per_video: 1, subject_ids: [2] }));
  expect(api.generate).toHaveBeenCalledWith(7, [2], { template: 'niveau-concours', language: 'ar' });
  expect(component.quizUsageScope()).toEqual({ context: 'quiz-video', major_id: 101, subject_id: 2, template: 'niveau-concours', language: 'ar' });
  component.selectTemplate('long');
  expect(component.quizUsageScope()?.language).toBeUndefined();
});

it('retries interrupted preparation in the same batch with its original settings and prevents duplicate clicks', () => {
  const api = TestBed.inject(VideoBatchApi) as any;
  const pending = new RxSubject<any>();
  api.create = vi.fn(() => of({ data: { id: 40 } }));
  api.generate = vi.fn().mockReturnValueOnce(throwError(() => ({ status: 0 }))).mockReturnValueOnce(pending);
  api.show = vi.fn(() => of({ batch: { id: 40 }, videos: [] }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.subjects.set([subject(2)]); component.onMajorChange('101');
  component.selectTemplate('five-seconds'); component.setContentLanguage('ar'); component.selectedSubjectIds.set([2]);
  component.prepareVideos();
  expect(component.errorMsg()).toBe('quizVideoUsage.preparationFailed');
  expect(component.preparationRetry()?.batchId).toBe(40);
  expect(component.isGenerating()).toBe(false);
  component.selectedSubjectIds.set([4]);
  component.retryPreparation(); component.retryPreparation();
  expect(component.isGenerating()).toBe(true);
  expect(api.create).toHaveBeenCalledTimes(1);
  expect(api.generate).toHaveBeenCalledTimes(2);
  expect(api.generate.mock.calls[1]).toEqual([40, [2], { template: 'five-seconds', language: 'ar' }]);
  pending.next({ data: { created_video_count: 6 } }); pending.complete();
  expect(component.preparationRetry()).toBeNull();
  expect(component.isGenerating()).toBe(false);
  expect(api.show).toHaveBeenCalledWith(40);
});

it('retains the exact approved snapshot after a reservation conflict instead of silently reselecting or reexporting', async () => {
  const api = TestBed.inject(VideoBatchApi) as any, renderer = TestBed.inject(LocalRenderApi) as any;
  const original = { video: { id: 19, number: 1, language: 'fr' }, questions: [
    { id: 42, text: 'Original approved question', choices: [{ id: 81, text: 'Answer A' }, { id: 82, text: 'Answer B' }], correct_answer: { choice_id: 82 } },
  ] };
  api.exportJson = vi.fn(() => of(original));
  renderer.start = vi.fn().mockReturnValueOnce(throwError(() => ({ status: 409, error: { message: 'Another render reserved this question.' } })))
    .mockReturnValueOnce(of({ data: { id: 'retained-snapshot', status: 'completed' } }));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.videos.set([{ id: 19 }] as any); approve(component);
  await component.generateAll();
  expect(component.reservationConflict()).toBe(true);
  expect(component.approved()).toBe(true);
  expect(component.videos().map(video => video.id)).toEqual([19]);
  original.questions[0].text = 'Changed elsewhere after approval';
  await component.generateAll();
  expect(api.exportJson).toHaveBeenCalledTimes(1);
  const retried = renderer.start.mock.calls[1][0].videos[0];
  expect(retried.questions[0].text).toBe('Original approved question');
  expect(retried.questions[0].correct_answer.choice_id).toBe(82);
  expect(retried.questions[0].choices.map((choice: any) => choice.id)).toEqual([81, 82]);
  expect(component.reservationConflict()).toBe(false);
});

it('invalidates a retained proposal only after an explicit content setting change and shows separate shortage reasons', async () => {
  const api = TestBed.inject(VideoBatchApi) as any, renderer = TestBed.inject(LocalRenderApi) as any;
  api.exportJson = vi.fn(() => of({ video: { id: 19 }, questions: [] }));
  renderer.start = vi.fn(() => throwError(() => ({ status: 409 })));
  const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
  component.videos.set([{ id: 19 }] as any); approve(component);
  await component.generateAll();
  component.setContentLanguage('en');
  expect(component.approved()).toBe(false);
  expect(component.reservationConflict()).toBe(false);
  approve(component);
  await component.generateAll();
  expect(api.exportJson).toHaveBeenCalledTimes(2);
  expect(api.exportJson).toHaveBeenLastCalledWith(19, 'long', 'en');
  expect(component.shortageReasons({ consumed: 2, reserved: 3, legacy_restricted: 4, skipped_duplicates: 5, skipped_invalid: 0 }))
    .toEqual([
      { label: 'quizVideoUsage.reasons.consumed', count: 2 }, { label: 'quizVideoUsage.reasons.reserved', count: 3 },
      { label: 'quizVideoUsage.reasons.legacy_restricted', count: 4 }, { label: 'quizVideoUsage.reasons.skipped_duplicates', count: 5 },
    ]);
});

it('requires per-video thumbnail previews, prepares them sequentially and freezes edited specs with the reviewed questions', async () => {
  const api = TestBed.inject(VideoBatchApi) as any, renderer = TestBed.inject(LocalRenderApi) as any;
  const calls: string[] = [];
  api.exportJson = vi.fn((id: number) => { calls.push('export:' + id); return of({ video: { id }, questions: [{ id: id * 10 }] }); });
  renderer.thumbnailOptions = vi.fn((document: any) => { calls.push('options:' + document.video.id); return of({ data: thumbnailFixture().proposal }); });
  renderer.thumbnailPreview = vi.fn((document: any) => { calls.push('preview:' + document.video.id); return of(new Blob(['jpeg'], { type: 'image/jpeg' })); });
  renderer.start = vi.fn(() => of({ data: { id: 'thumbnail-batch', status: 'completed' } }));
  {
    const component = TestBed.runInInjectionContext(() => new AdminYoutubeVideos());
    component.videos.set([{ id: 19 }, { id: 20 }] as any); component.approved.set(true);
    await component.generateAll(); expect(renderer.start).not.toHaveBeenCalled();
    await component.prepareThumbnails();
    expect(calls).toEqual(['export:19', 'options:19', 'preview:19', 'export:20', 'options:20', 'preview:20']);
    expect(component.thumbnailsReady()).toBe(true); expect(component.approved()).toBe(false);
    expect(Object.values(component.thumbnailReviews()).filter(review => !!review.previewUrl)).toHaveLength(1);
    const edited = { ...component.thumbnailReviews()[19], spec: { ...component.thumbnailReviews()[19].spec, hook: 'Accroche vérifiée' }, ready: false };
    component.thumbnailChanged(19, edited);
    expect(component.thumbnailsReady()).toBe(false);
    component.thumbnailChanged(19, { ...edited, ready: true });
    component.approved.set(true);
    await component.generateAll();
    const frozen = renderer.start.mock.calls[0][0].videos[0];
    expect(frozen.render_options.thumbnail.hook).toBe('Accroche vérifiée');
    expect(frozen.questions[0].id).toBe(190);
    expect(api.exportJson).toHaveBeenCalledTimes(2);
    component.thumbnailReviews()[19].spec.hook = 'Later local edit';
    expect(frozen.render_options.thumbnail.hook).toBe('Accroche vérifiée');
  }
});
