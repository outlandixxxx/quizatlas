import { CommonModule } from '@angular/common';
import { HttpParams } from '@angular/common/http';
import { Component, DestroyRef, OnInit, computed, inject, signal } from '@angular/core';
import { takeUntilDestroyed, toSignal } from '@angular/core/rxjs-interop';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { Subject as RxSubject, Subscription, catchError, exhaustMap, firstValueFrom, from, map, mergeMap, of, switchMap, take, takeWhile, timer } from 'rxjs';
import { LocalRenderApi, RenderJob, RevisionOutputMode } from '../services/local-render.api';
import { MajorApi } from '../services/major.api';
import { SubjectApi } from '../services/subject.api';
import { AdminQuizApi, RevisionJsonResponse } from '../services/quiz.api';
import { collectReferencePages } from '../services/reference-pages';
import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';
import { Quiz } from '../../../core/models/quiz';
import {
  RevisionQuizEntry, RevisionQuizDraft, RevisionReviewBatch, approvalContent,
  consolidateParagraphs, coverage, createRevisionDraft, editRevisionDraft, revisionHash,
  RevisionContentMode, RevisionCorrectedQuestion, correctionProblems, originalRevisionSource,
} from '../../../core/models/revision-sheet';

@Component({
  selector: 'app-admin-revision-json', standalone: true,
  imports: [CommonModule, TranslocoModule], templateUrl: './revision-json.html', styleUrl: './revision-json.scss',
})
export class AdminRevisionJson implements OnInit {
  private readonly majorApi = inject(MajorApi);
  private readonly subjectApi = inject(SubjectApi);
  private readonly quizApi = inject(AdminQuizApi);
  private readonly destroyRef = inject(DestroyRef);
  private readonly i18n = inject(TranslocoService);
  readonly activeLanguage = toSignal(this.i18n.langChanges$, { initialValue: this.i18n.getActiveLang() });
  readonly renderer = inject(LocalRenderApi);
  private readonly sourceSettled = new RxSubject<void>();
  private polling?: Subscription;
  private imageRun = 0;
  readonly preparingImages = signal(false);
  readonly outputMode = signal<RevisionOutputMode>('png');
  readonly contentMode = signal<RevisionContentMode>('explanations');
  private readonly chosenDocumentLanguage = signal<string | null>(null);
  private readonly documentLabelsVersion = signal(0);
  private documentLabelsRequest?: Subscription;
  readonly documentLanguage = computed(() => this.chosenDocumentLanguage() || (['en', 'fr', 'ar'].includes(this.activeLanguage()) ? this.activeLanguage() : 'fr'));
  readonly correctedMode = computed(() => this.contentMode() === 'corrected-questions');
  readonly correctionProblems = correctionProblems;
  readonly generationLabel = computed(() => this.preparingImages() ? 'preparingImages' : this.outputMode() === 'pdf' ? 'generatePdf' : this.outputMode() === 'both' ? 'generateBoth' : 'generateImages');
  readonly imageJob = signal<RenderJob | null>(null);
  readonly imageBusy = computed(() => this.preparingImages() || ['queued', 'running'].includes(this.imageJob()?.status ?? ''));
  private subjectsRequest?: Subscription;
  private quizzesRequest?: Subscription;
  private sourceRequest?: Subscription;
  private jsonRequest?: Subscription;
  private epoch = 0;
  private sourceRun = 0;
  private jsonRun = 0;
  private copyTimer?: ReturnType<typeof setTimeout>;
  readonly majors = signal<Major[]>([]);
  readonly subjects = signal<Subject[]>([]);
  readonly quizzes = signal<Quiz[]>([]);
  readonly selectedMajorId = signal<number | null>(null);
  readonly selectedSubjectId = signal<number | null>(null);
  readonly selectedQuizId = signal<number | null>(null);
  readonly selectedQuizIds = signal<number[]>([]);
  readonly entries = signal<Record<number, RevisionQuizEntry>>({});
  readonly isLoadingMajors = signal(false);
  readonly isLoadingSubjects = signal(false);
  readonly isLoadingQuizzes = signal(false);
  readonly isLoadingSources = signal(false);
  readonly isGenerating = signal(false);
  readonly isApproving = signal(false);
  readonly errorMsg = signal<string | null>(null);
  readonly selectionNotice = signal<string | null>(null);
  readonly copied = signal(false);
  readonly revisionData = signal<RevisionJsonResponse | null>(null);
  readonly mergeIds = signal<string[]>([]);
  readonly reviewOpen = signal(false);
  readonly currentDraft = computed(() => this.entries()[this.selectedQuizId()!]?.draft ?? null);
  readonly currentCoverage = computed(() => this.currentDraft() ? coverage(this.currentDraft()!) : null);
  readonly batch = computed<RevisionReviewBatch>(() => ({
    formatVersion: 'revision-review-v1', majorId: this.selectedMajorId(), subjectId: this.selectedSubjectId(),
    quizIds: this.selectedQuizIds(), entries: this.selectedQuizIds().map(id => this.entries()[id] ?? this.idleEntry(id)),
  }));
  readonly counts = computed(() => {
    const entries = this.batch().entries;
    return {
      selected: entries.length, ready: entries.filter(e => e.state === 'ready').length,
      blocked: entries.filter(e => e.state === 'error' || this.correctedMode() && e.draft && correctionProblems(e.draft).length).length,
      pending: entries.filter(e => e.state === 'loading' || e.state === 'idle').length,
      explanations: entries.reduce((sum, e) => sum + (e.draft?.source.data.notes.length ?? 0), 0),
    };
  });
  readonly coverage = coverage;

  constructor() {
    this.destroyRef.onDestroy(() => { if (this.copyTimer) clearTimeout(this.copyTimer); });
  }

  get formattedJson(): string { return this.revisionData() ? JSON.stringify(originalRevisionSource(this.revisionData()!), null, 2) : ''; }

  ngOnInit(): void {
    this.isLoadingMajors.set(true);
    this.majorApi.listAll().pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: majors => { this.majors.set(majors); this.isLoadingMajors.set(false); },
      error: () => { this.isLoadingMajors.set(false); this.errorMsg.set(this.t('loadMajorsError')); },
    });
    if (typeof sessionStorage !== 'undefined') {
      const id = sessionStorage.getItem('maroquiz-revision-current-job');
      if (id && /^[a-f0-9-]{36}$/.test(id)) this.pollImages(id);
    }
  }

  private t(key: string, params?: Record<string, unknown>): string { return this.i18n.translate(`revisionReview.${key}`, params); }
  private idleEntry(quizId: number): RevisionQuizEntry { return { quizId, state: 'idle', imageCount: null, renderStatus: 'not_started' }; }
  private setEntry(id: number, entry: RevisionQuizEntry): void { this.entries.update(all => ({ ...all, [id]: entry })); }

  private resetContext(): void {
    this.epoch++;
    this.subjectsRequest?.unsubscribe(); this.quizzesRequest?.unsubscribe();
    this.cancelSources(); this.clearJson();
    this.quizzes.set([]); this.entries.set({}); this.selectedQuizIds.set([]); this.selectedQuizId.set(null);
    this.mergeIds.set([]); this.isLoadingSubjects.set(false); this.isLoadingQuizzes.set(false);
    this.isApproving.set(false); this.errorMsg.set(null); this.selectionNotice.set(null);
  }

  onMajorChange(event: Event): void {
    const id = Number((event.target as HTMLSelectElement).value) || null;
    this.resetContext(); this.selectedMajorId.set(id); this.selectedSubjectId.set(null); this.subjects.set([]);
    if (!id) return;
    const epoch = this.epoch;
    this.isLoadingSubjects.set(true);
    this.subjectsRequest = this.subjectApi.listAll().pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: subjects => {
        if (epoch !== this.epoch) return;
        this.subjects.set(subjects.filter(s => s.major?.id === id)); this.isLoadingSubjects.set(false);
      },
      error: () => { if (epoch === this.epoch) { this.isLoadingSubjects.set(false); this.errorMsg.set(this.t('loadSubjectsError')); } },
    });
  }

  onSubjectChange(event: Event): void {
    const id = Number((event.target as HTMLSelectElement).value) || null;
    this.resetContext(); this.selectedSubjectId.set(id);
    if (!id) return;
    const epoch = this.epoch;
    this.isLoadingQuizzes.set(true);
    const pageSize = 100;
    this.quizzesRequest = collectReferencePages(page => this.quizApi.list(new HttpParams()
      .set('subject_id', id).set('per_page', pageSize).set('page', page).set('sort', 'id')), pageSize)
      .pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
        next: quizzes => {
          if (epoch !== this.epoch) return;
          this.quizzes.set([...new Map(quizzes.map(q => [q.id, q])).values()].sort((a, b) => a.id - b.id));
          this.isLoadingQuizzes.set(false);
        },
        error: () => { if (epoch === this.epoch) { this.quizzes.set([]); this.isLoadingQuizzes.set(false); this.errorMsg.set(this.t('loadQuizzesError')); } },
      });
  }

  onQuizChange(event: Event): void {
    const id = Number((event.target as HTMLSelectElement).value) || null;
    if (id && !this.selectedQuizIds().includes(id)) this.setSelection([...this.selectedQuizIds(), id]);
    this.openQuiz(id);
  }

  openQuiz(id: number | null, edit = false): void {
    this.clearJson(); this.errorMsg.set(null); this.selectedQuizId.set(id); this.mergeIds.set([]);
    this.reviewOpen.set(edit);
    this.revisionData.set(id ? this.entries()[id]?.draft?.source.data ?? null : null);
  }

  toggleQuiz(id: number, checked: boolean): void {
    this.setSelection(checked ? [...this.selectedQuizIds(), id] : this.selectedQuizIds().filter(q => q !== id));
  }

  private setSelection(ids: number[], selectAll = false): void {
    this.cancelSources(); this.errorMsg.set(null); this.selectionNotice.set(null);
    const chosen = new Set(ids);
    const ordered = this.quizzes().filter(q => chosen.has(q.id)).map(q => q.id);
    this.selectedQuizIds.set(ordered);
    if (!ordered.includes(this.selectedQuizId()!)) this.openQuiz(ordered[0] ?? null);
    this.loadSources(selectAll);
  }

  selectAll(): void { if (!this.isLoadingQuizzes() && !this.isLoadingSources()) this.setSelection(this.quizzes().map(q => q.id), true); }
  clearSelection(): void { this.setSelection([]); }

  private cancelSources(): void {
    this.sourceRun++; this.sourceRequest?.unsubscribe(); this.isLoadingSources.set(false);
    this.entries.update(all => Object.fromEntries(Object.entries(all).map(([id, entry]) => [id, entry.state === 'loading' ? this.idleEntry(entry.quizId) : entry])));
    this.sourceSettled.next();
  }

  private loadSources(selectAll: boolean): void {
    const run = ++this.sourceRun, epoch = this.epoch;
    const ids = this.selectedQuizIds().filter(id => !['ready', 'error'].includes(this.entries()[id]?.state ?? 'idle'));
    const finish = () => {
      if (run !== this.sourceRun || epoch !== this.epoch) return;
      this.isLoadingSources.set(false);
      if (selectAll) {
        const blocked = this.selectedQuizIds().filter(id => this.entries()[id]?.state === 'error' || this.correctedMode() && this.entries()[id]?.draft && correctionProblems(this.entries()[id].draft!).length);
        if (blocked.length) {
          this.selectedQuizIds.update(selected => selected.filter(id => !blocked.includes(id)));
          this.selectionNotice.set(this.t('excluded', { count: blocked.length }));
          if (!this.selectedQuizIds().includes(this.selectedQuizId()!)) this.openQuiz(this.selectedQuizIds()[0] ?? null);
        }
      }
      this.sourceSettled.next();
    };
    this.isLoadingSources.set(ids.length > 0);
    this.sourceRequest = from(ids).pipe(
      mergeMap(id => {
        this.setEntry(id, { ...this.idleEntry(id), state: 'loading' });
        return this.quizApi.getRevisionJson(id, true).pipe(
          switchMap(({ data }) => {
            if (data.quiz.id !== id || data.subject.id !== this.selectedSubjectId() || data.major.id !== this.selectedMajorId()) {
              throw new Error('revisionReview.wrongSource');
            }
            return from(createRevisionDraft(data));
          }),
          map(draft => ({ ...this.idleEntry(id), state: 'ready' as const, draft })),
          catchError(error => of({ ...this.idleEntry(id), state: 'error' as const, error: this.message(error) })),
        );
      }, 2), takeUntilDestroyed(this.destroyRef),
    ).subscribe({
      next: entry => {
        if (run !== this.sourceRun || epoch !== this.epoch) return;
        this.setEntry(entry.quizId, entry);
        if (this.selectedQuizId() === entry.quizId && !this.revisionData()) this.revisionData.set(entry.draft?.source.data ?? null);
      },
      complete: finish,
    });
  }

  retrySource(id: number): void {
    this.setEntry(id, this.idleEntry(id));
    this.setSelection([...this.selectedQuizIds(), id]);
  }

  private updateDraft(update: (draft: RevisionQuizDraft) => RevisionQuizDraft): void {
    const id = this.selectedQuizId(), entry = this.entries()[id!];
    if (id && entry?.draft) this.setEntry(id, { ...entry, draft: update(entry.draft) });
  }

  editParagraph(id: string, text: string): void {
    this.updateDraft(d => editRevisionDraft(d, d.paragraphs.map(p => p.id === id ? { ...p, text } : p)));
  }

  mapParagraph(id: string, event: Event): void {
    const sourceQuestionIds = Array.from((event.target as HTMLSelectElement).selectedOptions, o => Number(o.value));
    this.updateDraft(d => editRevisionDraft(d, d.paragraphs.map(p => p.id === id ? { ...p, sourceQuestionIds } : p)));
  }

  addParagraph(): void {
    this.updateDraft(d => editRevisionDraft(d, [...d.paragraphs, { id: `manual-${d.version + 1}`, text: '', sourceQuestionIds: [] }]));
  }

  removeParagraph(id: string): void {
    this.updateDraft(d => editRevisionDraft(d, d.paragraphs.filter(p => p.id !== id)));
    this.mergeIds.update(ids => ids.filter(value => value !== id));
  }

  toggleMerge(id: string, checked: boolean): void { this.mergeIds.update(ids => checked ? [...ids, id] : ids.filter(value => value !== id)); }
  mergeParagraphs(): void { this.updateDraft(d => consolidateParagraphs(d, this.mergeIds())); this.mergeIds.set([]); }

  flagSource(id: number, flagged: boolean): void {
    this.updateDraft(d => editRevisionDraft(d, d.paragraphs, flagged
      ? [...d.issues.filter(i => i.questionId !== id), { questionId: id, reason: '' }]
      : d.issues.filter(i => i.questionId !== id)));
  }

  issueReason(id: number, reason: string): void {
    this.updateDraft(d => editRevisionDraft(d, d.paragraphs, d.issues.map(i => i.questionId === id ? { ...i, reason } : i)));
  }

  isFlagged(draft: RevisionQuizDraft, id: number | undefined): boolean { return draft.issues.some(i => i.questionId === id); }
  acknowledgeReview(checked: boolean): void { this.updateDraft(d => ({ ...d, reviewedVersion: checked ? d.version : null, approval: null })); }

  async approveDraft(): Promise<void> {
    const id = this.selectedQuizId(), draft = this.currentDraft(), epoch = this.epoch;
    if (!id || !draft || !coverage(draft).canApprove || draft.reviewedVersion !== draft.version || this.isApproving()) return;
    this.isApproving.set(true);
    try {
      const contentHash = await revisionHash(approvalContent(draft));
      const entry = this.entries()[id];
      if (epoch === this.epoch && entry?.draft === draft) {
        this.setEntry(id, { ...entry, draft: { ...draft, approval: { version: draft.version, contentHash, approvedAt: new Date().toISOString() } } });
      }
    } catch { if (epoch === this.epoch) this.errorMsg.set(this.t('approvalError')); }
    finally { if (epoch === this.epoch) this.isApproving.set(false); }
  }

  private clearJson(): void {
    this.jsonRun++; this.jsonRequest?.unsubscribe(); this.isGenerating.set(false); this.revisionData.set(null); this.copied.set(false);
  }

  generateJson(): void {
    const id = this.selectedQuizId();
    if (!id) return;
    this.clearJson(); this.isGenerating.set(true); this.errorMsg.set(null);
    const run = this.jsonRun, epoch = this.epoch;
    this.jsonRequest = this.quizApi.getRevisionJson(id).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => { if (epoch === this.epoch && run === this.jsonRun) { this.revisionData.set(data); this.isGenerating.set(false); } },
      error: error => { if (epoch === this.epoch && run === this.jsonRun) { this.errorMsg.set(this.message(error)); this.isGenerating.set(false); } },
    });
  }

  async copyJson(): Promise<void> {
    const json = this.formattedJson, run = this.jsonRun;
    if (!json) return;
    try {
      await navigator.clipboard.writeText(json);
      if (run !== this.jsonRun) return;
      this.copied.set(true);
      if (this.copyTimer) clearTimeout(this.copyTimer);
      this.copyTimer = setTimeout(() => this.copied.set(false), 1500);
    } catch { if (run === this.jsonRun) this.errorMsg.set(this.t('copyError')); }
  }

  async generateImages(): Promise<void> {
    if (this.imageBusy() || !this.selectedQuizIds().length) return;
    this.preparingImages.set(true); this.errorMsg.set(null);
    const run = ++this.imageRun, epoch = this.epoch, outputMode = this.outputMode(), contentMode = this.contentMode();
    const language = this.documentLanguage();
    try {
      if (this.isLoadingSources()) await firstValueFrom(this.sourceSettled.pipe(take(1)));
      else if (this.counts().pending) {
        const done = firstValueFrom(this.sourceSettled.pipe(take(1)));
        this.loadSources(false); await done;
      }
      if (run !== this.imageRun || epoch !== this.epoch) return;
      const batch = this.batch();
      if (!batch.entries.length || batch.entries.some(e => !e.draft || e.state !== 'ready')) throw Error('revisionReview.sourcesBlocked');
      const drafts = batch.entries.map(e => e.draft!);
      if (contentMode === 'corrected-questions' && drafts.some(d => correctionProblems(d).length)) throw Error('revisionReview.correctedBlocked');
      if (drafts.some(d => coverage(d).unmapped.length || d.paragraphs.some(p => !p.text.trim() || !p.sourceQuestionIds.length))) throw Error('revisionReview.mappingBlocked');
      // Immutable copy: edits during processing belong to a later batch. Approval is deliberately not required.
      const document = structuredClone({ type: 'revision-batch', format_version: 'revision-batch-v1',
        output_mode: outputMode, content_mode: contentMode, language,
        major: drafts[0].source.data.major, subject: drafts[0].source.data.subject,
        quizzes: drafts.map(d => ({ source: contentMode === 'corrected-questions' ? d.source.data : originalRevisionSource(d.source.data), version: d.version, paragraphs: d.paragraphs, issues: d.issues })),
      });
      const { data } = await firstValueFrom(this.renderer.start(document));
      if (run !== this.imageRun) { await firstValueFrom(this.renderer.cancel(data.id)); return; }
      this.imageJob.set(data);
      sessionStorage.setItem('maroquiz-revision-current-job', data.id);
      this.pollImages(data.id);
    } catch (error) { if (run === this.imageRun) this.errorMsg.set(this.message(error) + ' ' + this.t('runnerHelp')); }
    finally { if (run === this.imageRun) this.preparingImages.set(false); }
  }

  changeOutputMode(event: Event): void {
    const mode = (event.target as HTMLSelectElement).value;
    if (!this.imageBusy() && (mode === 'png' || mode === 'pdf' || mode === 'both')) this.outputMode.set(mode);
  }

  changeContentMode(event: Event): void {
    const mode = (event.target as HTMLSelectElement).value;
    if (!this.imageBusy() && (mode === 'explanations' || mode === 'corrected-questions')) this.contentMode.set(mode);
  }

  changeDocumentLanguage(event: Event): void {
    const language = (event.target as HTMLSelectElement).value;
    if (!this.imageBusy() && ['en', 'fr', 'ar'].includes(language)) {
      this.chosenDocumentLanguage.set(language); this.documentLabelsRequest?.unsubscribe();
      this.documentLabelsRequest = this.i18n.load(language).pipe(take(1), takeUntilDestroyed(this.destroyRef)).subscribe({
        next: () => this.documentLabelsVersion.update(n => n + 1),
        error: () => this.errorMsg.set(this.t('documentLabelsError')),
      });
    }
  }

  answerText(question: RevisionCorrectedQuestion, answer: RevisionCorrectedQuestion['correct_answers'][number]): string {
    return question.type === 'true_false' && typeof answer.truth_value === 'boolean'
      ? this.documentTranslation(`truth.${answer.truth_value}`) : answer.text;
  }

  correctedExplanation(draft: RevisionQuizDraft, id: number): string {
    return draft.paragraphs.find(p => p.sourceQuestionIds.length === 1 && p.sourceQuestionIds[0] === id)?.text ?? this.t('correctedMappings');
  }

  correctionMessage(message: string): string { return message.startsWith('revisionReview.') ? this.i18n.translate(message) : message; }
  documentLabel(key: string): string { return this.documentTranslation(`correctedLabels.${key}`); }
  private documentTranslation(key: string): string {
    this.documentLabelsVersion();
    const language = Object.keys(this.i18n.getTranslation(this.documentLanguage())).length ? this.documentLanguage() : this.activeLanguage();
    return this.i18n.translate(`revisionReview.${key}`, {}, language);
  }

  revisionStage(stage?: string): string {
    return ['book_layout', 'book_print', 'book_verify', 'book_ready', 'book_failed', 'images', 'completed', 'failed', 'initializing'].includes(stage || '') ? stage! : 'initializing';
  }

  private pollImages(id: string): void {
    this.polling?.unsubscribe();
    this.polling = timer(0, 1200).pipe(exhaustMap(() => this.renderer.job(id)), takeWhile(({ data }) => ['queued', 'running'].includes(data.status), true), takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => this.imageJob.set(data),
      error: () => this.errorMsg.set(this.t('pollError') + ' ' + this.t('runnerHelp')),
    });
  }

  async cancelImages(): Promise<void> {
    this.imageRun++; this.preparingImages.set(false);
    const job = this.imageJob();
    if (job && ['queued', 'running'].includes(job.status)) {
      try { const { data } = await firstValueFrom(this.renderer.cancel(job.id)); this.imageJob.set(data); }
      catch (error) { this.errorMsg.set(this.message(error)); }
    } else this.cancelSources();
  }

  async retryImages(): Promise<void> {
    const job = this.imageJob(); if (!job || this.imageBusy()) return;
    try { const { data } = await firstValueFrom(this.renderer.retry(job.id)); this.imageJob.set(data); this.pollImages(job.id); }
    catch (error) { this.errorMsg.set(this.message(error) + ' ' + this.t('runnerHelp')); }
  }

  private message(error: any): string {
    if (error instanceof Error && error.message.startsWith('revisionReview.')) return this.i18n.translate(error.message);
    const details = error?.error?.errors;
    return (details && Object.values(details).flat().find(value => typeof value === 'string')) as string
      || error?.error?.message || this.t('sourceError');
  }
}
