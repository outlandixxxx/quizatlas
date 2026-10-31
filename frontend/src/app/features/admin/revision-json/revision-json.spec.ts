import { webcrypto } from 'node:crypto';
import { TestBed, ComponentFixture } from '@angular/core/testing';
import { of, Subject, throwError } from 'rxjs';
import { vi } from 'vitest';
import { TranslocoService } from '@jsverse/transloco';
import { AdminRevisionJson } from './revision-json';
import { MajorApi } from '../services/major.api';
import { SubjectApi } from '../services/subject.api';
import { AdminQuizApi } from '../services/quiz.api';
import { LocalRenderApi } from '../services/local-render.api';
import { ApiResponse } from '../../../core/models/api-response';
import { RevisionJsonResponse } from '../../../core/models/revision-sheet';
import { Quiz } from '../../../core/models/quiz';
import { componentTestConfig } from '../../../../testing/component-test';

const reply = <T>(data: T): ApiResponse<T> => ({ data, success: true, message: '' });
const major = { id: 7, name: 'SVT', slug: 'svt', description: null, is_active: true };
const subject = { id: 169, name: 'Biochemistry', slug: 'biochemistry', major, description: null, is_active: true };
const quiz = (id: number) => ({ id, title: `Quiz ${id}`, subject_id: 169, subject } as Quiz);
const source = (id = 1599): RevisionJsonResponse => ({ major, subject, quiz: { id, title: `Quiz ${id}`, difficulty: 'Beginner' }, notes: [{ question_id: id * 100 + 1, order: 1, explanation: 'Une enzyme conserve sa condition.' }, { question_id: id * 100 + 2, order: 2, explanation: 'Autre explication.' }], meta: { total_explanations: 2, exported_at: '2026-10-29T00:00:00Z', format_version: '1.1' } });
const correctedSource = (id = 1599): RevisionJsonResponse => {
  const data = source(id);
  data.correction = { format_version: 'corrected-questions-v1', issues: [], questions: data.notes.map((n, i) => ({
    question_id: n.question_id!, quiz_id: id, order: n.order, type: i === 0 ? 'single_choice' : 'multiple_choice', question: 'Question source française ' + (i + 1),
    correct_answers: Array.from({ length: i + 1 }, (_, a) => ({ choice_id: n.question_id! * 10 + a, question_id: n.question_id!, order: a + 1, text: 'Réponse exacte ' + a, truth_value: null })),
  })) }; return data;
};
let fixture: ComponentFixture<AdminRevisionJson>, page: AdminRevisionJson;
let majors: any, subjects: any, quizzes: any, renderer: any;
const change = (value: number | string) => ({ target: { value: String(value) } } as unknown as Event);
const settle = async () => { await vi.waitFor(() => expect(page.isLoadingSources()).toBe(false), { timeout: 10000 }); fixture.detectChanges(); };

beforeEach(async () => {
  vi.stubGlobal('crypto', webcrypto); sessionStorage.clear();
  majors = { listAll: vi.fn(() => of([major])) };
  subjects = { listAll: vi.fn(() => of([subject])) };
  quizzes = { list: vi.fn(() => of(reply([quiz(1599), quiz(1600)]))), getRevisionJson: vi.fn((id: number) => of(reply(source(id)))) };
  renderer = { start: vi.fn(() => of({ data: { id: '12345678-1234-1234-1234-123456789012', status: 'completed', accessKey: 'a'.repeat(64) } })), job: vi.fn(() => of({ data: { id: '12345678-1234-1234-1234-123456789012', status: 'completed' } })), cancel: vi.fn(), revisionArtifact: () => '', retry: vi.fn() };
  TestBed.configureTestingModule({ ...componentTestConfig(AdminRevisionJson), providers: [
    ...componentTestConfig(AdminRevisionJson).providers!, { provide: MajorApi, useValue: majors }, { provide: SubjectApi, useValue: subjects }, { provide: AdminQuizApi, useValue: quizzes }, { provide: LocalRenderApi, useValue: renderer },
  ] });
  fixture = TestBed.createComponent(AdminRevisionJson); page = fixture.componentInstance; fixture.detectChanges();
  page.onMajorChange(change(7)); page.onSubjectChange(change(169));
});
afterEach(() => { fixture.destroy(); TestBed.resetTestingModule(); vi.unstubAllGlobals(); });

it('uses all reference pages and selects every eligible quiz beyond the first 100', async () => {
  quizzes.list.mockImplementation((params: any) => of(reply(Number(params.get('page')) === 1 ? Array.from({ length: 100 }, (_, i) => quiz(i + 1)) : [quiz(101)])));
  page.onSubjectChange(change(169));
  expect(page.quizzes()).toHaveLength(101); expect(majors.listAll).toHaveBeenCalled(); expect(subjects.listAll).toHaveBeenCalled();
  page.selectAll(); await settle();
  expect(page.selectedQuizIds()).toHaveLength(101); expect(page.selectedQuizIds().at(-1)).toBe(101);
  expect(page.counts()).toMatchObject({ selected: 101, ready: 101, explanations: 202, pending: 0, blocked: 0 });
  expect(quizzes.list.mock.calls.at(-1)[0].get('sort')).toBe('id');
});

it('rejects a partial list when a later page fails', () => {
  quizzes.list.mockImplementation((params: any) => Number(params.get('page')) === 1 ? of(reply(Array.from({ length: 100 }, (_, i) => quiz(i + 1)))) : throwError(() => Error('late page')));
  page.onSubjectChange(change(169));
  expect(page.quizzes()).toEqual([]); expect(page.errorMsg()).toContain('every quiz page');
});

it('cancels stale subject, quiz and source responses on context changes', async () => {
  const oldSubjects = new Subject<any>(); subjects.listAll.mockReturnValueOnce(oldSubjects);
  page.onMajorChange(change(7)); page.onMajorChange(change(8)); oldSubjects.next([subject]);
  expect(page.subjects()).toEqual([]);
  page.onMajorChange(change(7));
  const oldQuizzes = new Subject<any>(); quizzes.list.mockReturnValueOnce(oldQuizzes);
  page.onSubjectChange(change(169)); page.onSubjectChange(change('')); oldQuizzes.next(reply([quiz(999)]));
  expect(page.quizzes()).toEqual([]);
  page.onSubjectChange(change(169));
  const oldSource = new Subject<any>(); quizzes.getRevisionJson.mockReturnValueOnce(oldSource);
  page.toggleQuiz(1599, true); page.onSubjectChange(change('')); oldSource.next(reply(source()));
  await Promise.resolve(); expect(page.entries()).toEqual({}); expect(page.revisionData()).toBeNull();
});

it('shows source failures, accurate partial counts, and explicit Select-all exclusions', async () => {
  quizzes.getRevisionJson.mockImplementation((id: number) => id === 1600 ? throwError(() => ({ error: { errors: { quiz: ['This quiz has no questions.'] } } })) : of(reply(source(id))));
  page.toggleQuiz(1599, true); page.toggleQuiz(1600, true); await settle();
  expect(page.counts()).toMatchObject({ selected: 2, ready: 1, blocked: 1, explanations: 2 });
  page.selectAll(); await settle();
  expect(page.selectedQuizIds()).toEqual([1599]); expect(page.entries()[1600].error).toContain('no questions'); expect(page.selectionNotice()).toContain('1 ineligible');
});

it('keeps per-quiz drafts and original JSON separate through editing and consolidation', async () => {
  page.selectAll(); await settle(); page.openQuiz(1599);
  const original = page.formattedJson; const draft = page.currentDraft()!;
  page.mergeIds.set(draft.paragraphs.map(p => p.id)); page.mergeParagraphs();
  expect(page.currentDraft()!.paragraphs[0].sourceQuestionIds).toHaveLength(2);
  page.editParagraph(page.currentDraft()!.paragraphs[0].id, '<script>unsafe()</script> Condition preserved.');
  page.openQuiz(1600); expect(page.currentDraft()!.paragraphs).toHaveLength(2);
  page.openQuiz(1599); fixture.detectChanges();
  expect(page.currentDraft()!.paragraphs).toHaveLength(1); expect(page.formattedJson).toBe(original);
  expect(fixture.nativeElement.querySelector('.notebook script')).toBeNull();
  expect(fixture.nativeElement.querySelector('.notebook').textContent).not.toContain('Beginner');
  page.generateJson(); expect(page.formattedJson).toBe(original);
  Object.defineProperty(navigator, 'clipboard', { configurable: true, value: { writeText: vi.fn().mockResolvedValue(undefined) } });
  await page.copyJson(); expect(navigator.clipboard.writeText).toHaveBeenCalledWith(original);
});

it('blocks approval for lost mappings and invalidates reviewed approval after an edit', async () => {
  page.toggleQuiz(1599, true); await settle();
  page.acknowledgeReview(true); await page.approveDraft(); expect(page.currentDraft()!.approval?.contentHash).toMatch(/^[a-f0-9]{64}$/);
  const id = page.currentDraft()!.paragraphs[0].id; page.editParagraph(id, 'Reviewed edit.');
  expect(page.currentDraft()!.approval).toBeNull(); expect(page.currentDraft()!.reviewedVersion).toBeNull();
  page.removeParagraph(id); expect(page.currentCoverage()!.unresolved).toBe(1);
  page.acknowledgeReview(true); await page.approveDraft(); expect(page.currentDraft()!.approval).toBeNull();
});

it('one click waits for sources and starts one frozen multi-quiz batch without approval', async () => {
  page.selectAll(); const generating = page.generateImages(); await generating;
  expect(renderer.start).toHaveBeenCalledTimes(1);
  const document = renderer.start.mock.calls[0][0];
  expect(document.type).toBe('revision-batch'); expect(document.quizzes).toHaveLength(2);
  expect(document.quizzes[0].paragraphs.map((p: any) => p.text)).toEqual(source().notes.map(n => n.explanation));
  page.editParagraph(page.currentDraft()!.paragraphs[0].id, 'Later edit.');
  expect(document.quizzes[0].paragraphs[0].text).toBe(source().notes[0].explanation);
});

it('localizes revision content and RTL without changing the existing admin shell', async () => {
  fixture.destroy();
  TestBed.inject(TranslocoService).setActiveLang('ar');
  fixture = TestBed.createComponent(AdminRevisionJson); page = fixture.componentInstance; fixture.detectChanges();
  page.onMajorChange(change(7)); page.onSubjectChange(change(169));
  await fixture.whenStable(); fixture.detectChanges();
  const root = fixture.nativeElement.querySelector('.admin-page');
  expect(root.getAttribute('dir')).toBe('rtl'); expect(root.getAttribute('lang')).toBe('ar');
  expect(root.textContent).toContain('إنشاء الصور');
});

it('submits PDF or both through the same frozen one-click contract and keeps PNG as the default', async () => {
  expect(page.outputMode()).toBe('png');
  page.toggleQuiz(1599, true); await settle();
  page.changeOutputMode(change('pdf')); fixture.detectChanges();
  expect(fixture.nativeElement.querySelector('.generate-images').textContent).toContain('PDF');
  await page.generateImages(); expect(renderer.start.mock.calls[0][0]).toMatchObject({ output_mode: 'pdf', language: 'en' });
  expect(renderer.start.mock.calls[0][0].quizzes).toHaveLength(1);
  page.imageJob.set(null); page.selectAll(); await settle(); page.changeOutputMode(change('both'));
  await page.generateImages(); expect(renderer.start.mock.calls[1][0].output_mode).toBe('both');
  expect(renderer.start.mock.calls[1][0].quizzes).toHaveLength(2);
});

it('shows PDF phases and verified preview/download links while retaining partial PNG results for retry', async () => {
  const job: any = { id: '12345678-1234-1234-1234-123456789012', status: 'running', stage: 'book_verify', revision: { mode: 'both', draft: true, totalQuizzes: 1, completedQuizzes: 1, totalImages: 1, completedImages: 1, partial: true, catalogueReady: true, book: { status: 'running', ready: false }, quizzes: [] } };
  page.imageJob.set(job); fixture.detectChanges();
  expect(fixture.nativeElement.textContent).toContain('Verifying PDF'); expect(fixture.nativeElement.querySelector('.download-pdf')).toBeNull();
  page.changeOutputMode(change('pdf')); expect(page.outputMode()).toBe('png');
  job.status = 'failed'; job.revision.book = { status: 'failed', ready: false, error: 'Readable A4 limit exceeded.' };
  page.imageJob.set(structuredClone(job)); fixture.detectChanges(); expect(fixture.nativeElement.textContent).toContain('Readable A4 limit');
  renderer.retry.mockReturnValue(of({ data: { ...job, status: 'completed', stage: 'completed', revision: { ...job.revision, partial: false, book: { status: 'completed', ready: true, pageCount: 3 } } } }));
  await page.retryImages(); fixture.detectChanges();
  expect(renderer.retry).toHaveBeenCalledWith(job.id); expect(fixture.nativeElement.querySelector('.download-pdf')).not.toBeNull();
  expect(fixture.nativeElement.querySelector('.preview-pdf').getAttribute('rel')).toContain('noopener');
});

it('loads corrected context once, keeps original JSON copy compatible and submits either content mode with independent formats', async () => {
  quizzes.getRevisionJson.mockImplementation((id: number) => of(reply(correctedSource(id))));
  page.toggleQuiz(1599, true); await settle();
  expect(quizzes.getRevisionJson).toHaveBeenCalledWith(1599, true);
  const original = page.formattedJson; expect(original).not.toContain('correction');
  page.changeContentMode(change('corrected-questions')); page.changeOutputMode(change('pdf')); page.changeDocumentLanguage(change('fr'));
  fixture.detectChanges(); expect(fixture.nativeElement.querySelectorAll('.corrected-preview')).toHaveLength(2);
  expect(fixture.nativeElement.querySelector('.notebook').textContent).toContain('Réponse exacte 1');
  expect(fixture.nativeElement.querySelector('.notebook').textContent).toContain('Réponses correctes');
  const sourceBefore = structuredClone(page.currentDraft()!.source.data.correction);
  page.editParagraph(page.currentDraft()!.paragraphs[0].id, 'Explication explicitement modifiée.');
  await page.generateImages(); const payload = renderer.start.mock.calls[0][0];
  expect(payload).toMatchObject({ content_mode: 'corrected-questions', output_mode: 'pdf', language: 'fr' });
  expect(payload.quizzes[0].source.correction).toEqual(sourceBefore); expect(payload.quizzes[0].paragraphs[0].text).toContain('modifiée');
  expect(page.formattedJson).toBe(original); expect(quizzes.getRevisionJson).toHaveBeenCalledTimes(1);
  page.imageJob.set(null); page.changeContentMode(change('explanations')); page.changeOutputMode(change('both')); await page.generateImages();
  expect(renderer.start.mock.calls[1][0]).toMatchObject({ content_mode: 'explanations', output_mode: 'both' });
  expect(renderer.start.mock.calls[1][0].quizzes[0].source.correction).toBeUndefined();
});

it('blocks ambiguous merged mappings for corrected mode without discarding edits or blocking explanation notebooks', async () => {
  quizzes.getRevisionJson.mockImplementation((id: number) => of(reply(correctedSource(id))));
  page.toggleQuiz(1599, true); await settle();
  page.mergeIds.set(page.currentDraft()!.paragraphs.map(p => p.id)); page.mergeParagraphs(); const merged = page.currentDraft()!.paragraphs[0].text;
  page.changeContentMode(change('corrected-questions')); await page.generateImages();
  expect(renderer.start).not.toHaveBeenCalled(); expect(page.counts().blocked).toBe(1); expect(page.errorMsg()).toContain('invalid');
  expect(page.currentDraft()!.paragraphs[0].text).toBe(merged);
  page.changeContentMode(change('explanations')); await page.generateImages(); expect(renderer.start).toHaveBeenCalledTimes(1);
});

it('reports invalid corrected sources and makes select-all exclusions explicit', async () => {
  quizzes.getRevisionJson.mockImplementation((id: number) => { const data = correctedSource(id); if (id === 1600) data.correction!.issues.push({ question_id: 160001, order: 1, code: 'missing_answer', message: 'Question 1 has no stored correct answer.' }); return of(reply(data)); });
  page.changeContentMode(change('corrected-questions')); page.selectAll(); await settle();
  expect(page.selectedQuizIds()).toEqual([1599]); expect(page.selectionNotice()).toContain('1 ineligible');
  fixture.detectChanges(); expect(fixture.nativeElement.textContent).toContain('no stored correct answer');
});

it('localizes document labels and true/false independently of interface language without translating source text', async () => {
  quizzes.getRevisionJson.mockImplementation((id: number) => {
    const data = correctedSource(id); const q = data.correction!.questions[0]; q.type = 'true_false'; q.correct_answers[0].text = 'Faux'; q.correct_answers[0].truth_value = false;
    return of(reply(data));
  });
  page.toggleQuiz(1599, true); await settle(); page.changeContentMode(change('corrected-questions')); page.changeDocumentLanguage(change('ar')); fixture.detectChanges();
  expect(page.activeLanguage()).toBe('en'); expect(fixture.nativeElement.querySelector('.notebook').textContent).toContain('خطأ');
  expect(fixture.nativeElement.querySelector('.notebook').textContent).toContain('Question source française');
  expect(page.currentDraft()!.source.data.subject.slug).toBe('biochemistry');
});
