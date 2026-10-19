import { Injectable } from '@angular/core';
import {
  HttpBackend,
  HttpClient,
  HttpHeaders,
} from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from '../../../../environments/environment';

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
    status: string;
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
}

export interface LocalVideoJob {
  id: string;
  status: string;
  error?: string | null;
  title?: string;
  progress?: number;
  message?: string;
}

@Injectable({
  providedIn: 'root',
})
export class VideoBatchApi {
  private readonly baseUrl = environment.apiUrl.replace(/\/$/, '');

  private readonly localRunnerUrl = 'http://127.0.0.1:3777';

  // Bypass Angular interceptors for the local runner.
  // Do not send the Maroquiz authentication token to localhost.
  private readonly localHttp: HttpClient;

  constructor(
    private readonly http: HttpClient,
    backend: HttpBackend
  ) {
    this.localHttp = new HttpClient(backend);
  }

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
    subjectIds?: number[]
  ): Observable<{ data: VideoGenerationResult }> {
    const body = subjectIds
      ? { subject_ids: subjectIds }
      : {};

    return this.http.post<{ data: VideoGenerationResult }>(
      `${this.baseUrl}/video-batches/${batchId}/generate`,
      body
    );
  }

  exportJson(videoSetId: number): Observable<VideoExportDocument> {
    return this.http.get<VideoExportDocument>(
      `${this.baseUrl}/video-sets/${videoSetId}/export-json`
    );
  }

  previewVideo(
    videoSetId: number
  ): Observable<{ data: VideoSetPreview }> {
    return this.http.get<{ data: VideoSetPreview }>(
      `${this.baseUrl}/video-sets/${videoSetId}`
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
    options: VideoRenderOptions = { profile: 'draft' }
  ): Observable<{ data: LocalVideoJob }> {
    return this.localHttp.post<{ data: LocalVideoJob }>(
      `${this.localRunnerUrl}/jobs`,
      { ...document, render_options: options },
      {
        headers: new HttpHeaders({
          'X-Maroquiz-Local-Runner': '1',
        }),
      }
    );
  }

  // Check the rendering job's status.
  getLocalRenderJob(
    jobId: string
  ): Observable<{ data: LocalVideoJob }> {
    return this.localHttp.get<{ data: LocalVideoJob }>(
      `${this.localRunnerUrl}/jobs/${encodeURIComponent(jobId)}`
    );
  }

  // Download the finished MP4.
  getLocalDownloadUrl(jobId: string): string {
    return `${this.localRunnerUrl}/jobs/${encodeURIComponent(jobId)}/download`;
  }
}
