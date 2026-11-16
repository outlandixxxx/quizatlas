import { Injectable } from '@angular/core';
import {
  HttpClient,
} from '@angular/common/http';
import { Observable } from 'rxjs';
import { LocalRenderApi } from './local-render.api';
import { environment } from '../../../../environments/environment';
import { ThumbnailSpec } from './thumbnail.models';

export type VideoDifficulty =
  | 'Beginner'
  | 'Intermediate'
  | 'Advanced'
  | 'Professional';

export interface VideoBatchPayload {
  major_id: number;
  name?: string;
  target_video_count: number;
  questions_per_video: number;
  difficulty_filter?: VideoDifficulty | null;
  subject_ids?: number[];
  language?: 'fr' | 'ar' | 'en';
  template?: 'long' | 'five-seconds' | 'defi-du-jour' | 'niveau-concours';
}

export interface VideoBatch {
  id: number;
  major_id: number;
  name: string | null;
  status: string;
  target_video_count: number;
  questions_per_video: number;
  difficulty_filter: string | null;
  settings?: Record<string, unknown> | null;
  major?: {
    id: number;
    name: string;
  };
  video_sets_count?: number;
}

export interface VideoSetSummary {
  id: number;
  subject_id: number;
  video_number: number;
  title: string;
  status: string;
  video_set_questions_count?: number;
  subject?: {
    id: number;
    name: string;
  };
}

export interface VideoBatchDetails {
  batch: VideoBatch;
  videos: VideoSetSummary[];
}

export interface VideoGenerationResult {
  batch_id: number;
  target_video_count: number;
  previous_video_count: number;
  created_video_count: number;
  total_video_count: number;
  remaining_target: number;
  minimum_questions_per_video: number;
  created_videos: VideoSetSummary[];
  not_enough_questions: Array<{
    subject_id: number;
    subject_name: string;
    minimum_required: number;
    available_questions: number;
    stats: Record<string, number>;
  }>;
}

export interface VideoExportDocument {
  format_version: string;
  video: {
    id: number;
    title: string;
    number: number;
    display_number?: number;
    status: string;
    template?: 'five-seconds' | 'defi-du-jour' | 'niveau-concours';
    language?: 'fr' | 'en' | 'ar';
  };
  major: {
    id: number;
    name: string;
    slug: string;
  };
  subject: {
    id: number;
    name: string;
    slug: string;
  };
  questions: Array<{
    id: number;
    quiz_id: number;
    order: number;
    text: string;
    type: string;
    difficulty: string | null;
    language?: 'fr' | 'en' | 'ar';
    explanation?: string;
    quiz_title?: string;
    choices: Array<{
      id: number;
      label: string;
      text: string;
    }>;
    correct_answer: {
      choice_id: number;
      label: string;
      text: string;
    };
  }>;
  meta: {
    question_count: number;
    exported_at: string;
  };
  render_options?: VideoRenderOptions;
}

export interface VideoPreviewQuestion {
  id: number;
  assignment_id: number;
  unavailable?: false;
  quiz_id: number;
  order: number;
  text: string;
  type: string;
  marks: number | null;
  difficulty: string | null;
  language?: 'fr' | 'en' | 'ar';
  explanation: string | null;
  choices: Array<{
    id: number;
    label: string;
    text: string;
    is_correct: boolean;
  }>;
  selection: {
    score: string | number | null;
    metadata: Record<string, unknown> | null;
  };
}

export interface VideoSetPreview {
  id: number;
  title: string;
  assignment_id: number;
  number: number;
  status: string;
  major: {
    id: number;
    name: string;
  };
  subject: {
    id: number;
    name: string;
  };
  questions: Array<
    VideoPreviewQuestion | {
      order: number;
      unavailable: true;
    }
  >;
  question_count: number;
}

export interface VideoQuestionReplacementResult {
  message: string;
  data: {
    assignment_id: number;
    previous_question_id: number;
    question: {
      id: number;
      text: string;
      selection: {
        score: number;
        breakdown: Record<string, number>;
        reasons: string[];
      };
    };
  };
}

export interface VideoRenderOptions {
  profile?: 'draft' | 'final';
  fps?: number;
  niveau?: { extra_animations: boolean; narration: boolean; original_audio?: boolean; music: boolean; sfx: boolean };
  thumbnail?: ThumbnailSpec;
}

export interface LocalVideoJob {
  id: string;
  status: string;
  error?: string | null;
  title?: string;
  progress?: number | null;
  message?: string;
  thumbnailStatus?: string;
  thumbnailError?: string | null;
  thumbnailRunning?: boolean;
  thumbnailUrl?: string | null;
}

@Injectable({
  providedIn: 'root',
})
export class VideoBatchApi {
  private readonly baseUrl = environment.apiUrl.replace(/\/$/, '');

  constructor(
    private readonly http: HttpClient,
    private readonly renderer: LocalRenderApi,
  ) {}

  list(page = 1): Observable<{
    data: VideoBatch[];
    current_page: number;
    last_page: number;
    total: number;
  }> {
    return this.http.get<{
      data: VideoBatch[];
      current_page: number;
      last_page: number;
      total: number;
    }>(`${this.baseUrl}/video-batches?page=${page}`);
  }

  create(payload: VideoBatchPayload): Observable<{
    data: VideoBatch;
  }> {
    return this.http.post<{ data: VideoBatch }>(
      `${this.baseUrl}/video-batches`,
      payload
    );
  }

  show(batchId: number): Observable<VideoBatchDetails> {
    return this.http.get<VideoBatchDetails>(
      `${this.baseUrl}/video-batches/${batchId}`
    );
  }

  generate(
    batchId: number,
    subjectIds?: number[],
    selection?: Pick<VideoBatchPayload, 'language' | 'template'>,
  ): Observable<{ data: VideoGenerationResult }> {
    const body = { ...(subjectIds ? { subject_ids: subjectIds } : {}), ...selection };

    return this.http.post<{ data: VideoGenerationResult }>(
      `${this.baseUrl}/video-batches/${batchId}/generate`,
      body
    );
  }

  shortNumbers(videoSetId: number): Observable<{ data: { scope: string; suggested: number; legacy_review_required: boolean; assigned: { number: number; video_id: number; legacy: boolean }[] } }> {
    return this.http.get<{ data: { scope: string; suggested: number; legacy_review_required: boolean; assigned: { number: number; video_id: number; legacy: boolean }[] } }>(`${this.baseUrl}/video-sets/${videoSetId}/short-numbers`);
  }

  exportJson(videoSetId: number, template: 'long' | 'five-seconds' | 'defi-du-jour' | 'niveau-concours' = 'long', language: 'fr' | 'en' | 'ar' = 'fr'): Observable<VideoExportDocument> {
    return this.http.get<VideoExportDocument>(
      `${this.baseUrl}/video-sets/${videoSetId}/export-json`,
      { params: template !== 'long' ? { template, language } : {} },
    );
  }

  previewVideo(
    videoSetId: number,
    template?: 'five-seconds' | 'defi-du-jour' | 'niveau-concours',
    language: 'fr' | 'en' | 'ar' = 'fr',
  ): Observable<{ data: VideoSetPreview }> {
    return this.http.get<{ data: VideoSetPreview }>(
      `${this.baseUrl}/video-sets/${videoSetId}`,
      { params: template ? { template, language } : {} },
    );
  }

  replaceQuestion(
    videoSetId: number,
    assignmentId: number
  ): Observable<VideoQuestionReplacementResult> {
    return this.http.post<VideoQuestionReplacementResult>(
      `${this.baseUrl}/video-sets/${videoSetId}/questions/${assignmentId}/replace`,
      {}
    );
  }

  // Start MP4 rendering on the local computer.
  // Draft is the default: fast, no motion blur. Use 'final' for publishing.
  startLocalRender(
    document: VideoExportDocument,
    options: VideoRenderOptions = { profile: 'draft' },
    parents: string[] = [],
  ): Observable<{ data: LocalVideoJob }> {
    return this.renderer.start({ ...document, render_options: { ...document.render_options, ...options } }, parents);
  }

  // Check the rendering job's status.
  getLocalRenderJob(
    jobId: string
  ): Observable<{ data: LocalVideoJob }> {
    return this.renderer.job(jobId);
  }

  // Download the finished MP4.
  getLocalDownloadUrl(jobId: string): string {
    return this.renderer.artifact(jobId, 'download');
  }
}
