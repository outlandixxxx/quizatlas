import { ContentUsageApi, QuizVideoScope } from '../services/content-usage.api';
import { ContentUsage } from '../content-usage/content-usage';
import { CommonModule } from '@angular/common';
import { TranslocoService } from '@jsverse/transloco';
import { Component, DestroyRef, OnInit, computed, inject, signal } from '@angular/core';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { EMPTY, Subscription, catchError, exhaustMap, firstValueFrom, forkJoin, map, of, timer } from 'rxjs';
import { LocalRenderApi, RenderJob } from '../services/local-render.api';
import { ThumbnailEditor } from '../thumbnail-editor/thumbnail-editor';
import { ThumbnailReview, thumbnailDocument, thumbnailPreviewDataUrl } from '../services/thumbnail.models';
import { MajorApi } from '../services/major.api';
import { SubjectApi } from '../services/subject.api';
import {
  VideoBatchApi,
  VideoBatch,
  VideoSetSummary,
  VideoDifficulty,
  VideoBatchPayload,
  VideoGenerationResult,
  VideoSetPreview,
  VideoExportDocument,
  LocalVideoJob,
} from '../services/video-batch.api';

import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';

interface PreparationRetry {
  batchId: number;
  subjectIds?: number[];
  options: { template: NonNullable<VideoBatchPayload['template']>; language?: 'fr' | 'en' | 'ar' };
}

@Component({
  selector: 'app-admin-youtube-videos',
  standalone: true,
  imports: [ContentUsage, CommonModule, ReactiveFormsModule, ThumbnailEditor],
  templateUrl: './youtube-videos.html',
  styleUrl: './youtube-videos.scss',
})
export class AdminYoutubeVideos implements OnInit {
  readonly renderer = inject(LocalRenderApi);
  private readonly destroyRef = inject(DestroyRef);
  private polling?: Subscription;
  readonly approved = signal(false);
  readonly reservationConflict = signal(false);
  readonly usageRefresh = signal(0);
  readonly thumbnailPreparing = signal(false);
  readonly thumbnailReviews = signal<Record<number, ThumbnailReview>>({});
  readonly thumbnailDocuments = signal<Record<number, VideoExportDocument>>({});
  readonly singleRenderJob = signal<LocalVideoJob | null>(null);
  readonly singleThumbnailRetrying = signal(false);
  private readonly reviewedSnapshots = new Map<number, VideoExportDocument>();
  private reviewedSettings = '';
  private destroyed = false;
  readonly videoTemplate = signal<'long' | 'five-seconds' | 'defi-du-jour' | 'niveau-concours'>('long');
  readonly videoLanguage = signal<'fr' | 'en' | 'ar'>('fr');
  private readonly translations = inject(TranslocoService, { optional: true });
  readonly interfaceLanguage = signal(this.translations?.getActiveLang() || 'fr');
  readonly niveauExtraAnimations = signal(false);
  readonly niveauMusic = signal(true);
  readonly niveauSfx = signal(false);

  nc(key: string): string {
    return this.translations?.translate('niveauConcours.' + key, {}, this.interfaceLanguage()) || key;
  }

  vu(key: string, params: Record<string, unknown> = {}): string {
    return this.translations?.translate('quizVideoUsage.' + key, params, this.interfaceLanguage()) || key;
  }
  th(key: string): string { return this.translations?.translate('thumbnailEditor.' + key) || key; }
  thumbnailsReady(): boolean {
    return this.videos().length > 0 && this.videos().every(video => this.thumbnailReviews()[video.id]?.ready === true);
  }
  confirmThumbnailLocale(id: number): boolean {
    const document = this.thumbnailDocuments()[id];
    return this.videoTemplate() === 'long' && !!document && !document.video.language
      && !document.questions.some(question => question.language) && this.thumbnailReviews()[id]?.spec.locale !== 'ar';
  }

  private clearThumbnails(): void {
    this.thumbnailReviews.set({}); this.thumbnailDocuments.set({});
  }

  async prepareThumbnails(only?: VideoSetSummary): Promise<void> {
    if (this.batchBusy() || this.renderingVideoId() !== null || this.isExporting() || this.isReplacingQuestion()) return;
    if (this.videoTemplate() !== 'long' && (!this.numberingReady() || this.numberWarning())) return;
    this.thumbnailPreparing.set(true); this.approved.set(false); this.errorMsg.set(null);
    try {
      for (const video of only ? [only] : this.videos()) {
        if (this.destroyed) break;
        if (!only && this.thumbnailReviews()[video.id]?.ready) continue;
        const retained = this.thumbnailReviews()[video.id];
        const exported = this.thumbnailDocuments()[video.id]
          || await firstValueFrom(this.videoApi.exportJson(video.id, this.videoTemplate(), this.videoLanguage()));
        const document = JSON.parse(JSON.stringify(this.snapshotOptions(exported))) as VideoExportDocument;
        const proposal = retained?.proposal || (await firstValueFrom(this.renderer.thumbnailOptions(document))).data;
        const spec = retained?.spec || proposal.spec;
        const blob = await firstValueFrom(this.renderer.thumbnailPreview(thumbnailDocument(document, spec)));
        if (this.destroyed) break;
        const previewUrl = await thumbnailPreviewDataUrl(blob);
        if (this.destroyed) break;
        this.thumbnailDocuments.update(current => ({ ...current, [video.id]: document }));
        this.thumbnailChanged(video.id, { spec: JSON.parse(JSON.stringify(spec)), proposal, previewUrl, ready: true });
      }
    } catch (error: any) { this.errorMsg.set(error?.error?.message || this.th('previewError')); }
    finally { this.thumbnailPreparing.set(false); }
  }

  thumbnailChanged(id: number, review: ThumbnailReview): void {
    this.thumbnailReviews.update(current => Object.fromEntries([
      ...Object.entries(current).filter(([key]) => Number(key) !== id).map(([key, value]) => [key, { ...value, previewUrl: review.previewUrl ? '' : value.previewUrl }]),
      [id, review],
    ]));
    this.clearReviewedSnapshots(false); this.approved.set(false);
  }

  private clearReviewedSnapshots(thumbnails = true): void {
    this.reviewedSnapshots.clear(); this.reviewedSettings = ''; this.reservationConflict.set(false);
    if (thumbnails) this.clearThumbnails();
  }

  private reviewedExport(video: VideoSetSummary) {
    const signature = JSON.stringify({
      ids: this.videos().map(item => item.id), template: this.videoTemplate(), language: this.videoLanguage(),
      numbers: this.displayNumbers(), originalAudio: this.niveauMusic(),
    });
    if (signature !== this.reviewedSettings) {
      this.reviewedSnapshots.clear(); this.reviewedSettings = signature;
    }
    const retained = this.reviewedSnapshots.get(video.id);
    if (retained) return of(retained);
    const prepared = this.thumbnailDocuments()[video.id];
    return (prepared ? of(prepared) : this.videoApi.exportJson(video.id, this.videoTemplate(), this.videoLanguage())).pipe(map(document => {
      // Keep the exact reviewed question, answer IDs, language, number and options on a start conflict.
      const options = this.snapshotOptions(document);
      const review = this.thumbnailReviews()[video.id];
      const snapshot: VideoExportDocument = JSON.parse(JSON.stringify(review ? thumbnailDocument(options, review.spec) : options));
      this.reviewedSnapshots.set(video.id, snapshot);
      return snapshot;
    }));
  }

  reviewConflict(): void {
    const first = this.videos()[0];
    if (first) this.loadVideoPreview(first.id);
  }

  shortageReasons(stats: Record<string, number>): { label: string; count: number }[] {
    return ['consumed', 'reserved', 'legacy_restricted', 'skipped_language', 'skipped_template', 'skipped_invalid', 'skipped_low_score', 'skipped_duplicates']
      .filter(key => Number(stats[key]) > 0)
      .map(key => ({ label: this.vu('reasons.' + key), count: stats[key] }));
  }

  setNiveauOption(key: 'extra' | 'music' | 'sfx', enabled: boolean): void {
    if (key !== 'music') return; // Reference animation and original Canva audio only.
    if (this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null) return;
    ({ extra: this.niveauExtraAnimations, music: this.niveauMusic, sfx: this.niveauSfx })[key].set(enabled);
    this.clearReviewedSnapshots();
    this.approved.set(false); this.jsonText.set('');
  }

  setContentLanguage(language: string): void {
    if (!['fr', 'en', 'ar'].includes(language) || this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null) return;
    this.preparationRetry.set(null);
    this.videoLanguage.set(language as 'fr' | 'en' | 'ar');
    this.clearReviewedSnapshots();
    this.approved.set(false); this.jsonText.set('');
    if (this.videoPreview()) this.loadVideoPreview(this.videoPreview()!.id);
  }

  readonly displayNumbers = signal<Record<number, number>>({});
  readonly assignedNumbers = signal<Record<number, number[]>>({});
  readonly numberingLoading = signal(false);
  readonly numberingReady = signal(false);
  readonly startingNumber = signal(1);
  readonly numberWarning = computed(() => this.videoTemplate() !== 'long' && this.videos().some((video, index, videos) => {
    const number = this.displayNumbers()[video.id];
    return !Number.isInteger(number) || number < 1 || number > 999999
      || this.assignedNumbers()[video.subject_id]?.includes(number)
      || videos.slice(0, index).some(other => other.subject_id === video.subject_id && this.displayNumbers()[other.id] === number);
  }));
  sn(key: string): string { return this.translations?.translate('shortNumbers.' + key, {}, this.interfaceLanguage()) || key; }
  private loadShortNumbers(): void {
    this.numberingReady.set(false);
    if (this.videoTemplate() === 'long' || !this.videos().length) return;
    this.numberingLoading.set(true);
    const representatives = this.videos().filter((video, index, all) => all.findIndex(v => v.subject_id === video.subject_id) === index);
    forkJoin(representatives.map(video => this.videoApi.shortNumbers(video.id))).subscribe({
      next: responses => {
        const next: Record<number, number> = {}, assigned: Record<number, number[]> = {}, values: Record<number, number> = {};
        representatives.forEach((video, index) => { next[video.subject_id] = responses[index].data.suggested; assigned[video.subject_id] = responses[index].data.assigned.map(v => v.number); });
        this.videos().forEach(video => { values[video.id] = next[video.subject_id]++; });
        this.assignedNumbers.set(assigned); this.displayNumbers.set(values);
        this.startingNumber.set(values[this.videos()[0].id]); this.numberingLoading.set(false); this.numberingReady.set(true);
      },
      error: () => { this.numberingLoading.set(false); this.errorMsg.set(this.sn('unavailable')); },
    });
  }
  setDisplayNumber(id: number, value: string): void {
    if (this.batchBusy() || this.renderingVideoId() !== null || this.isExporting()) return;
    this.clearReviewedSnapshots();
    this.displayNumbers.update(current => ({ ...current, [id]: Number(value) })); this.approved.set(false); this.jsonText.set('');
  }
  setStartingNumber(value: string): void {
    if (this.batchBusy() || this.renderingVideoId() !== null || this.isExporting()) return;
    this.clearReviewedSnapshots();
    const start = Number(value), offsets: Record<number, number> = {};
    this.startingNumber.set(start);
    this.displayNumbers.set(Object.fromEntries(this.videos().map(video => {
      const offset = offsets[video.subject_id] || 0; offsets[video.subject_id] = offset + 1;
      return [video.id, start + offset];
    })));
    this.approved.set(false); this.jsonText.set('');
  }

  private snapshotOptions(document: VideoExportDocument): VideoExportDocument {
    if (document.video.template) {
      const number = this.displayNumbers()[document.video.id];
      if (!this.numberingReady() || !Number.isInteger(number) || number < 1 || number > 999999 || this.numberWarning()) throw Error(this.sn('conflict'));
      document = { ...document, video: { ...document.video, display_number: number } };
    }
    if (document.video.template !== 'niveau-concours') return document;
    return { ...document, render_options: { ...document.render_options, niveau: {
      extra_animations: false, narration: false,
      original_audio: this.niveauMusic(), music: false, sfx: false,
    } } };
  }
  readonly batchStarting = signal(false);
  readonly batchActionPending = signal(false);
  readonly localBatch = signal<RenderJob | null>(null);
  readonly singleThumbnailPending = computed(() => {
    const job = this.singleRenderJob();
    return job?.status === 'completed' && (job.thumbnailRunning === true || ['waiting', 'running'].includes(job.thumbnailStatus || ''));
  });
  readonly batchBusy = computed(() => this.thumbnailPreparing() || this.singleThumbnailRetrying() || (this.renderingVideoId() !== null && this.singleThumbnailPending()) || this.batchStarting() || this.localBatch()?.thumbnailRunning === true || ['running', 'queued'].includes(this.localBatch()?.status || ''));
  private readonly usage = inject(ContentUsageApi);
  private readonly jsonParents = new Map<number, string>();
  private readonly fb = inject(FormBuilder);
  private readonly majorApi = inject(MajorApi);
  private readonly subjectApi = inject(SubjectApi);
  private readonly videoApi = inject(VideoBatchApi);

  readonly majors = signal<Major[]>([]);
  readonly subjects = signal<Subject[]>([]);
  readonly selectedMajorId = signal<number | null>(null);
  readonly selectedSubjectIds = signal<number[]>([]);
  readonly quizUsageScope = computed<QuizVideoScope | undefined>(() => {
    const majorId = this.selectedMajorId();
    if (!majorId) return undefined;
    const chosen = this.selectedSubjectIds(), all = this.availableSubjects();
    const selectedAll = chosen.length === all.length && all.every(subject => chosen.includes(subject.id));
    const ids = selectedAll ? [] : chosen;
    return { context: 'quiz-video', major_id: majorId, template: this.videoTemplate(),
      ...(ids.length === 1 ? { subject_id: ids[0] } : ids.length > 1 ? { subject_ids: ids } : {}),
      ...(this.videoTemplate() !== 'long' ? { language: this.videoLanguage() } : {}),
      ...(this.usageDifficulty() ? { difficulty: this.usageDifficulty() as VideoDifficulty } : {}) };
  });
  private readonly usageDifficulty = signal('');

  readonly isLoading = signal(false);
  readonly isGenerating = signal(false);
  readonly preparationRetry = signal<PreparationRetry | null>(null);
  readonly isExporting = signal(false);
  readonly errorMsg = signal<string | null>(null);
  readonly successMsg = signal<string | null>(null);

  readonly batch = signal<VideoBatch | null>(null);
  readonly videos = signal<VideoSetSummary[]>([]);
  readonly generationResult = signal<VideoGenerationResult | null>(null);
  readonly jsonText = signal('');
  readonly isReplacingQuestion = signal(false);

  readonly renderingVideoId = signal<number | null>(null);
  readonly renderStatus = signal('');
  readonly renderError = signal('');
  readonly renderDownloadUrl = signal<string | null>(null);

  readonly availableSubjects = computed(() => {
    const majorId = this.selectedMajorId();

    if (majorId === null) {
      return [];
    }

    return this.subjects().filter(
      subject =>
        subject.major?.id === majorId && subject.is_active
    );
  });

  readonly form = this.fb.nonNullable.group({
    major_id: [null as number | null, Validators.required],
    name: [''],
    target_video_count: [10, [Validators.required, Validators.min(1), Validators.max(60)]],
    questions_per_video: [20, [Validators.required, Validators.min(1), Validators.max(30)]],
    difficulty_filter: [''],
  });

  readonly videoPreview = signal<VideoSetPreview | null>(null);
  readonly isPreviewLoading = signal(false);

  ngOnInit(): void {
    this.destroyRef.onDestroy(() => { this.destroyed = true; this.clearThumbnails(); });
    const difficultySubscription = this.form.controls.difficulty_filter.valueChanges.subscribe(value => this.usageDifficulty.set(value));
    this.destroyRef.onDestroy(() => difficultySubscription.unsubscribe());
    const languageSubscription = this.translations?.langChanges$.subscribe(language => this.interfaceLanguage.set(language));
    this.destroyRef.onDestroy(() => languageSubscription?.unsubscribe());
    this.loadReferenceData();
    const recent = this.renderer.recentQuizBatch();
    if (recent) this.observeBatch(recent);
    this.destroyRef.onDestroy(() => this.polling?.unsubscribe());
  }

  private loadReferenceData(): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    forkJoin({
      majors: this.majorApi.listAll(),
      subjects: this.subjectApi.listAll(),
    }).subscribe({
      next: ({ majors, subjects }) => {
        this.majors.set(majors);
        this.subjects.set(subjects);
        this.isLoading.set(false);
      },
      error: () => {
        this.errorMsg.set('Failed to load Majors and Subjects. Refresh to try again.');
        this.isLoading.set(false);
      },
    });
  }

  onMajorChange(value: string): void {
    this.preparationRetry.set(null);
    this.clearReviewedSnapshots();
    this.approved.set(false);
    const majorId = value ? Number(value) : null;

    this.selectedMajorId.set(majorId);
    this.form.controls.major_id.setValue(majorId);
    this.selectedSubjectIds.set([]);
    this.batch.set(null);
    this.videos.set([]);
    this.jsonText.set('');
    this.generationResult.set(null);
    this.errorMsg.set(null);
    this.successMsg.set(null);
  }

  toggleSubject(subjectId: number, checked: boolean): void {
    this.selectedSubjectIds.update(current => {
      if (checked) {
        return current.includes(subjectId)
          ? current
          : [...current, subjectId];
      }

      return current.filter(id => id !== subjectId);
    });
  }

  selectAllSubjects(): void {
    this.selectedSubjectIds.set(
      this.availableSubjects().map(subject => subject.id)
    );
  }

  clearSubjects(): void {
    this.selectedSubjectIds.set([]);
  }

  selectTemplate(value: string): void {
    if (this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null) return;
    this.preparationRetry.set(null);
    this.clearReviewedSnapshots();
    this.videoTemplate.set(value === 'five-seconds' || value === 'defi-du-jour' || value === 'niveau-concours' ? value : 'long');
    this.approved.set(false);
    this.numberingReady.set(false); this.displayNumbers.set({});
    this.batch.set(null); this.videos.set([]); this.videoPreview.set(null); this.jsonText.set('');
    this.form.controls.questions_per_video.setValue(value !== 'long' ? 1 : 20);
  }

  prepareVideos(): void {
    if (this.batchBusy() || this.isGenerating()) return;
    this.preparationRetry.set(null);
    this.clearReviewedSnapshots();
    this.approved.set(false);
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }

    if (this.availableSubjects().length === 0) {
      this.errorMsg.set('Choose a Major with active Subjects.');
      return;
    }

    this.isGenerating.set(true);
    this.errorMsg.set(null);
    this.successMsg.set(null);
    this.jsonText.set('');
    this.generationResult.set(null);

    const raw = this.form.getRawValue();

    const payload: VideoBatchPayload = {
      major_id: raw.major_id!,
      name: raw.name.trim() || undefined,
      target_video_count: raw.target_video_count,
      questions_per_video: this.videoTemplate() !== 'long' ? 1 : raw.questions_per_video,
      difficulty_filter: raw.difficulty_filter
        ? raw.difficulty_filter as VideoDifficulty
        : null,
      // Empty selection means all active Subjects for this Major.
      subject_ids: this.selectedSubjectIds().length
        ? this.selectedSubjectIds()
        : undefined,
      template: this.videoTemplate(),
      ...(this.videoTemplate() !== 'long' ? { language: this.videoLanguage() } : {}),
    };

    this.videoApi.create(payload).subscribe({
      next: response => {
        this.batch.set(response.data);
        this.generateBatch(response.data.id);
      },
      error: error => {
        this.isGenerating.set(false);
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to create the video batch.'
        );
      },
    });
  }

  retryPreparation(): void {
    const retry = this.preparationRetry();
    if (!retry || this.isGenerating() || this.batchBusy()) return;
    this.isGenerating.set(true);
    this.errorMsg.set(null);
    this.generateBatch(retry.batchId, retry);
  }

  private generateBatch(batchId: number, retained?: PreparationRetry): void {
    const subjectIds = this.selectedSubjectIds();
    const request: PreparationRetry = retained ?? { batchId, subjectIds: subjectIds.length ? [...subjectIds] : undefined,
      options: { template: this.videoTemplate(), ...(this.videoTemplate() !== 'long' ? { language: this.videoLanguage() } : {}) } };

    this.videoApi.generate(
      batchId,
      request.subjectIds,
      request.options,
    ).subscribe({
      next: response => {
        this.preparationRetry.set(null);
        this.generationResult.set(response.data);

        this.videoApi.show(batchId).subscribe({
          next: details => {
            this.batch.set(details.batch);
            this.videos.set(details.videos);
            this.loadShortNumbers();
            this.isGenerating.set(false);

            this.successMsg.set(
              `${response.data.created_video_count} video(s) prepared.`
            );
          },
          error: () => {
            this.isGenerating.set(false);
            this.errorMsg.set(
              'Videos were prepared, but the video list could not be loaded.'
            );
          },
        });
      },
      error: error => {
        this.preparationRetry.set(request);
        this.isGenerating.set(false);
        this.errorMsg.set(
          error?.error?.message ?? this.vu('preparationFailed', { batch: batchId })
        );
      },
    });
  }

  exportJson(video: VideoSetSummary): void {
    if (this.videoTemplate() !== 'long' && (!this.numberingReady() || this.numberWarning())) { this.errorMsg.set(this.sn('conflict')); return; }
    this.isExporting.set(true);
    this.errorMsg.set(null);
    this.jsonText.set('');

    this.videoApi.exportJson(video.id, this.videoTemplate(), this.videoLanguage()).subscribe({
      next: document => {
        this.jsonText.set(JSON.stringify(this.snapshotOptions(document), null, 2));
        this.isExporting.set(false);
        this.successMsg.set(`JSON prepared for "${video.title}".`);
      },
      error: error => {
        this.isExporting.set(false);
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to export this video JSON.'
        );
      },
    });
  }

  async copyJson(): Promise<void> {
    const json = this.jsonText();

    if (!json) {
      return;
    }

    try {
      const { data } = await firstValueFrom(this.usage.export('quiz-json', json));
      this.jsonParents.set(JSON.parse(data.content).video.id, data.operation.id);
      await navigator.clipboard.writeText(data.content);
      this.successMsg.set('Video JSON copied to clipboard.');
    } catch (error: any) {
      this.errorMsg.set(
        error?.error?.message || 'Export or clipboard access failed. Review content availability and retry.'
      );
    }
  }

  previewVideo(video: VideoSetSummary): void {
    this.loadVideoPreview(video.id);
  }

  private loadVideoPreview(videoSetId: number): void {
    this.isPreviewLoading.set(true);
    this.errorMsg.set(null);
    this.videoPreview.set(null);

    this.videoApi.previewVideo(videoSetId, this.videoTemplate() === 'long' ? undefined : this.videoTemplate() as 'five-seconds' | 'defi-du-jour' | 'niveau-concours', this.videoLanguage()).subscribe({
      next: response => {
        this.videoPreview.set(response.data);
        this.isPreviewLoading.set(false);
      },
      error: error => {
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to load video preview.'
        );
        this.isPreviewLoading.set(false);
      },
    });
  }

  replaceQuestion(assignmentId: number): void {
    const preview = this.videoPreview();

    if (!preview || this.isReplacingQuestion() || this.batchBusy()) {
      return;
    }

    this.approved.set(false);
    this.isReplacingQuestion.set(true);
    this.errorMsg.set(null);
    this.successMsg.set(null);

    this.videoApi.replaceQuestion(
      preview.id,
      assignmentId
    ).subscribe({
      next: response => {
        this.isReplacingQuestion.set(false);
        this.clearReviewedSnapshots();

        this.successMsg.set(
          `Question #${response.data.previous_question_id} was replaced with question #${response.data.question.id}.`
        );

        // Reload the updated video review.
        this.loadVideoPreview(preview.id);
      },
      error: error => {
        this.isReplacingQuestion.set(false);
        this.errorMsg.set(
          error?.error?.message
            ?? 'No eligible replacement question could be selected.'
        );
      },
    });
  }

  async generateAll(): Promise<void> {
    if ((this.videoTemplate() !== 'long' && (!this.numberingReady() || this.numberWarning())) || !this.thumbnailsReady() || !this.approved() || !this.videos().length || this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null || this.isReplacingQuestion()) return;
    this.batchStarting.set(true);
    this.renderError.set('');
    try {
      // Export the reviewed assignments, preserving proposal order and manual replacements.
      const documents = await firstValueFrom(forkJoin(this.videos().map(video => this.reviewedExport(video))));
      const parents = this.videos().flatMap(video => this.jsonParents.has(video.id) ? [this.jsonParents.get(video.id)!] : []);
      const { data } = await firstValueFrom(this.renderer.start({ type: 'quiz-batch', videos: documents, render_options: { profile: 'final' } }, parents));
      this.localBatch.set(data);
      this.reservationConflict.set(false);
      this.usageRefresh.update(value => value + 1);
      this.approved.set(false);
      this.observeBatch(data.id);
    } catch (error: unknown) {
      this.reservationConflict.set((error as { status?: number })?.status === 409);
      if (this.reservationConflict()) this.usageRefresh.update(value => value + 1);
      this.renderError.set(this.batchError(error));
    }
    finally { this.batchStarting.set(false); }
  }

  private observeBatch(id: string): void {
    this.polling?.unsubscribe();
    this.polling = timer(0, 2000).pipe(exhaustMap(() => this.renderer.job(id).pipe(
      catchError(error => { this.renderError.set(this.batchError(error)); return EMPTY; }),
    ))).subscribe(({ data }) => {
      const previous = this.localBatch();
      if (previous?.status !== data.status || previous?.batch?.rendered !== data.batch?.rendered || previous?.batch?.failed !== data.batch?.failed) this.usageRefresh.update(value => value + 1);
      this.localBatch.set(data);
      this.renderError.set('');
      if (['completed', 'failed', 'cancelled'].includes(data.status) && !data.thumbnailRunning) this.polling?.unsubscribe();
    });
  }

  async batchAction(action: 'retry' | 'cancel'): Promise<void> {
    const job = this.localBatch();
    if (!job || this.batchActionPending()) return;
    this.batchActionPending.set(true);
    try {
      const { data } = await firstValueFrom(action === 'retry' ? this.renderer.retry(job.id) : this.renderer.cancel(job.id));
      this.localBatch.set(data); this.renderError.set(''); this.observeBatch(job.id);
      this.usageRefresh.update(value => value + 1);
    } catch (error: unknown) { this.renderError.set(this.batchError(error)); }
    finally { this.batchActionPending.set(false); }
  }

  private batchError(error: unknown): string {
    const http = error as { status?: number; error?: { message?: string } };
    return http?.status === 0 ? 'Local renderer unavailable. Start the local launcher; retained batches can then resume.'
      : http?.error?.message || (error instanceof Error ? error.message : 'The local batch could not continue.');
  }

  async retryThumbnails(single = false): Promise<void> {
    const job = single ? this.singleRenderJob() : this.localBatch();
    if (!job || this.batchBusy() || this.renderingVideoId() !== null || this.singleThumbnailRetrying()) return;
    this.singleThumbnailRetrying.set(true); this.renderError.set('');
    try {
      const { data } = await firstValueFrom(this.renderer.retryThumbnails(job.id));
      if (!single) { this.localBatch.set(data); this.observeBatch(data.id); return; }
      this.singleRenderJob.set(data);
      const deadline = Date.now() + 5 * 60 * 1000;
      while (this.singleRenderJob()?.thumbnailRunning && Date.now() < deadline) {
        await new Promise(resolve => setTimeout(resolve, 2000));
        this.singleRenderJob.set((await firstValueFrom(this.renderer.job(job.id))).data);
      }
    } catch (error) { this.renderError.set(this.batchError(error)); }
    finally { this.singleThumbnailRetrying.set(false); }
  }

  // Normal Shorts are final jobs. Explicit previews retain the existing draft profile.
  async generateMp4(
    video: VideoSetSummary,
    profile: 'draft' | 'final' = this.videoTemplate() === 'long' ? 'draft' : 'final'
  ): Promise<void> {
    if (this.renderingVideoId() !== null || this.batchBusy() || !this.thumbnailReviews()[video.id]?.ready || !this.approved() || (this.videoTemplate() !== 'long' && (!this.numberingReady() || this.numberWarning()))) return;

    this.renderingVideoId.set(video.id);
    this.renderStatus.set('Preparing video JSON...');
    this.renderError.set('');
    this.renderDownloadUrl.set(null);
    this.singleRenderJob.set(null);

    try {
      const document = await firstValueFrom(
        this.reviewedExport(video)
      );

      this.renderStatus.set('Starting video renderer...');

      const started = await firstValueFrom(
        this.videoApi.startLocalRender(document, { profile }, this.jsonParents.has(video.id) ? [this.jsonParents.get(video.id)!] : [])
      );

      const jobId = started.data.id;
      this.reservationConflict.set(false);
      this.usageRefresh.update(value => value + 1);
      const deadline = Date.now() + 3 * 60 * 60 * 1000; // 3 hours

      while (!this.destroyed && Date.now() < deadline) {
        const { data: job } = await firstValueFrom(
          this.videoApi.getLocalRenderJob(jobId)
        );
        this.singleRenderJob.set(job);

        if (job.status === 'completed') {
          if (!this.renderDownloadUrl()) this.usageRefresh.update(value => value + 1);
          this.renderDownloadUrl.set(
            this.videoApi.getLocalDownloadUrl(jobId)
          );
          this.renderStatus.set(this.singleThumbnailPending() ? this.th('previewing') : 'MP4 ready!');
          // The runner stays occupied until its separate thumbnail work ends.
          // Keep polling and blocking another render while retaining MP4 access.
          if (!this.singleThumbnailPending()) return;
        }

        if (job.status === 'failed') {
          this.usageRefresh.update(value => value + 1);
          throw new Error(job.error || 'Video rendering failed.');
        }

        if (job.status !== 'completed') this.renderStatus.set(
          job.progress
            ? `Rendering ${profile} video... ${job.progress}%`
            : (job.message ?? `Rendering ${profile} video...`)
        );

        await new Promise(resolve => setTimeout(resolve, 2000));
      }

      if (this.destroyed) return; // Leave the retained local job running.
      throw new Error('Rendering timed out. Check the local runner terminal.');
    } catch (error: unknown) {
      this.reservationConflict.set((error as { status?: number })?.status === 409);
      if (this.reservationConflict()) this.usageRefresh.update(value => value + 1);
      this.renderStatus.set('');

      const http = error as { status?: number; error?: { message?: string } };

      if (http?.status === 0) {
        this.renderError.set(
          'The local runner is not reachable. Start it with: node local-runner.js'
        );
      } else if (http?.error?.message) {
        this.renderError.set(http.error.message);
      } else {
        this.renderError.set(
          error instanceof Error ? error.message : 'Could not render MP4.'
        );
      }
    } finally {
      this.renderingVideoId.set(null);
    }
  }
}
