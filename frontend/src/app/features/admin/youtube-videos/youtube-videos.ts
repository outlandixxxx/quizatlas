import { CommonModule } from '@angular/common';
import { Component, OnInit, computed, inject, signal } from '@angular/core';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { firstValueFrom, forkJoin } from 'rxjs';
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
} from '../services/video-batch.api';

import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';

@Component({
  selector: 'app-admin-youtube-videos',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './youtube-videos.html',
  styleUrl: './youtube-videos.scss',
})
export class AdminYoutubeVideos implements OnInit {
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
    this.loadReferenceData();
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

  prepareVideos(): void {
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
      questions_per_video: raw.questions_per_video,
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
            this.isGenerating.set(false);

            this.successMsg.set(
              `${response.data.created_video_count} draft video(s) prepared.`
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
    this.isExporting.set(true);
    this.errorMsg.set(null);
    this.jsonText.set('');

    this.videoApi.exportJson(video.id).subscribe({
      next: document => {
        this.jsonText.set(JSON.stringify(document, null, 2));
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
      await navigator.clipboard.writeText(json);
      this.successMsg.set('Video JSON copied to clipboard.');
    } catch {
      this.errorMsg.set(
        'Clipboard access failed. Select and copy the JSON manually.'
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

    this.videoApi.previewVideo(videoSetId).subscribe({
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

    if (!preview || this.isReplacingQuestion()) {
      return;
    }

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

  // Draft by default (fast, no motion blur). Use 'final' for publishing.
  async generateMp4(
    video: VideoSetSummary,
    profile: 'draft' | 'final' = 'draft'
  ): Promise<void> {
    if (this.renderingVideoId() !== null) return;

    this.renderingVideoId.set(video.id);
    this.renderStatus.set('Preparing video JSON...');
    this.renderError.set('');
    this.renderDownloadUrl.set(null);

    try {
      const document = await firstValueFrom(
        this.videoApi.exportJson(video.id)
      );

      this.renderStatus.set('Starting video renderer...');

      const started = await firstValueFrom(
        this.videoApi.startLocalRender(document, { profile })
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
