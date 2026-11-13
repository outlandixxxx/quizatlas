import { ContentUsageApi } from '../services/content-usage.api';
import { ContentUsage } from '../content-usage/content-usage';
import { CommonModule } from '@angular/common';
import { TranslocoService } from '@jsverse/transloco';
import { Component, DestroyRef, OnInit, computed, inject, signal } from '@angular/core';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { EMPTY, Subscription, catchError, exhaustMap, firstValueFrom, forkJoin, timer } from 'rxjs';
import { LocalRenderApi, RenderJob } from '../services/local-render.api';
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
} from '../services/video-batch.api';

import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';

@Component({
  selector: 'app-admin-youtube-videos',
  standalone: true,
  imports: [ContentUsage, CommonModule, ReactiveFormsModule],
  templateUrl: './youtube-videos.html',
  styleUrl: './youtube-videos.scss',
})
export class AdminYoutubeVideos implements OnInit {
  private readonly renderer = inject(LocalRenderApi);
  private readonly destroyRef = inject(DestroyRef);
  private polling?: Subscription;
  readonly approved = signal(false);
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

  setNiveauOption(key: 'extra' | 'music' | 'sfx', enabled: boolean): void {
    if (key !== 'music') return; // Reference animation and original Canva audio only.
    if (this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null) return;
    ({ extra: this.niveauExtraAnimations, music: this.niveauMusic, sfx: this.niveauSfx })[key].set(enabled);
    this.approved.set(false); this.jsonText.set('');
  }

  setContentLanguage(language: string): void {
    if (!['fr', 'en', 'ar'].includes(language) || this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null) return;
    this.videoLanguage.set(language as 'fr' | 'en' | 'ar');
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
    this.displayNumbers.update(current => ({ ...current, [id]: Number(value) })); this.approved.set(false); this.jsonText.set('');
  }
  setStartingNumber(value: string): void {
    if (this.batchBusy() || this.renderingVideoId() !== null || this.isExporting()) return;
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
  readonly batchBusy = computed(() => this.batchStarting() || ['running', 'queued'].includes(this.localBatch()?.status || ''));
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

  readonly isLoading = signal(false);
  readonly isGenerating = signal(false);
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
    this.videoTemplate.set(value === 'five-seconds' || value === 'defi-du-jour' || value === 'niveau-concours' ? value : 'long');
    this.approved.set(false);
    this.numberingReady.set(false); this.displayNumbers.set({});
    this.batch.set(null); this.videos.set([]); this.videoPreview.set(null); this.jsonText.set('');
    this.form.controls.questions_per_video.setValue(value !== 'long' ? 1 : 20);
  }

  prepareVideos(): void {
    if (this.batchBusy() || this.isGenerating()) return;
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

  private generateBatch(batchId: number): void {
    const subjectIds = this.selectedSubjectIds();

    this.videoApi.generate(
      batchId,
      subjectIds.length ? subjectIds : undefined
    ).subscribe({
      next: response => {
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
        this.isGenerating.set(false);
        this.errorMsg.set(
          error?.error?.message ?? 'Failed to generate video sets.'
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
    if ((this.videoTemplate() !== 'long' && (!this.numberingReady() || this.numberWarning())) || !this.approved() || !this.videos().length || this.batchBusy() || this.isGenerating() || this.isExporting() || this.renderingVideoId() !== null || this.isReplacingQuestion()) return;
    this.batchStarting.set(true);
    this.renderError.set('');
    try {
      // Export the reviewed assignments, preserving proposal order and manual replacements.
      const documents = (await firstValueFrom(forkJoin(this.videos().map(video => this.videoApi.exportJson(video.id, this.videoTemplate(), this.videoLanguage()))))).map(document => this.snapshotOptions(document));
      const parents = this.videos().flatMap(video => this.jsonParents.has(video.id) ? [this.jsonParents.get(video.id)!] : []);
      const { data } = await firstValueFrom(this.renderer.start({ type: 'quiz-batch', videos: documents, render_options: { profile: 'final' } }, parents));
      this.localBatch.set(data);
      this.approved.set(false);
      this.observeBatch(data.id);
    } catch (error: unknown) { this.renderError.set(this.batchError(error)); }
    finally { this.batchStarting.set(false); }
  }

  private observeBatch(id: string): void {
    this.polling?.unsubscribe();
    this.polling = timer(0, 2000).pipe(exhaustMap(() => this.renderer.job(id).pipe(
      catchError(error => { this.renderError.set(this.batchError(error)); return EMPTY; }),
    ))).subscribe(({ data }) => {
      this.localBatch.set(data);
      this.renderError.set('');
      if (['completed', 'failed', 'cancelled'].includes(data.status)) this.polling?.unsubscribe();
    });
  }

  async batchAction(action: 'retry' | 'cancel'): Promise<void> {
    const job = this.localBatch();
    if (!job || this.batchActionPending()) return;
    this.batchActionPending.set(true);
    try {
      const { data } = await firstValueFrom(action === 'retry' ? this.renderer.retry(job.id) : this.renderer.cancel(job.id));
      this.localBatch.set(data); this.renderError.set(''); this.observeBatch(job.id);
    } catch (error: unknown) { this.renderError.set(this.batchError(error)); }
    finally { this.batchActionPending.set(false); }
  }

  private batchError(error: unknown): string {
    const http = error as { status?: number; error?: { message?: string } };
    return http?.status === 0 ? 'Local renderer unavailable. Start the local launcher; retained batches can then resume.'
      : http?.error?.message || (error instanceof Error ? error.message : 'The local batch could not continue.');
  }

  // Normal Shorts are final jobs. Explicit previews retain the existing draft profile.
  async generateMp4(
    video: VideoSetSummary,
    profile: 'draft' | 'final' = this.videoTemplate() === 'long' ? 'draft' : 'final'
  ): Promise<void> {
    if (this.renderingVideoId() !== null || this.batchBusy() || (this.videoTemplate() !== 'long' && (!this.approved() || !this.numberingReady() || this.numberWarning()))) return;

    this.renderingVideoId.set(video.id);
    this.renderStatus.set('Preparing video JSON...');
    this.renderError.set('');
    this.renderDownloadUrl.set(null);

    try {
      const document = await firstValueFrom(
        this.videoApi.exportJson(video.id, this.videoTemplate(), this.videoLanguage())
      );

      this.renderStatus.set('Starting video renderer...');

      const started = await firstValueFrom(
        this.videoApi.startLocalRender(this.snapshotOptions(document), { profile }, this.jsonParents.has(video.id) ? [this.jsonParents.get(video.id)!] : [])
      );

      const jobId = started.data.id;
      const deadline = Date.now() + 3 * 60 * 60 * 1000; // 3 hours

      while (Date.now() < deadline) {
        const { data: job } = await firstValueFrom(
          this.videoApi.getLocalRenderJob(jobId)
        );

        if (job.status === 'completed') {
          this.renderDownloadUrl.set(
            this.videoApi.getLocalDownloadUrl(jobId)
          );
          this.renderStatus.set('MP4 ready!');
          return;
        }

        if (job.status === 'failed') {
          throw new Error(job.error || 'Video rendering failed.');
        }

        this.renderStatus.set(
          job.progress
            ? `Rendering ${profile} video... ${job.progress}%`
            : (job.message ?? `Rendering ${profile} video...`)
        );

        await new Promise(resolve => setTimeout(resolve, 2000));
      }

      throw new Error('Rendering timed out. Check the local runner terminal.');
    } catch (error: unknown) {
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
