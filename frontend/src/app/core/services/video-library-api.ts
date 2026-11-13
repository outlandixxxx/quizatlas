import { Injectable, inject } from '@angular/core';
import { HttpParams } from '@angular/common/http';
import { Http } from './http';
import { ApiResponse } from '../models/api-response';
import { environment } from '../../../environments/environment';
import {
  VideoLibraryFilters, VideoLibraryImportResult, VideoLibraryInput, VideoLibraryPage,
  VideoLibraryReviewRow, VideoLibraryVideo,
} from '../models/video-library';

export function videoThumbnailUrl(video: Pick<VideoLibraryVideo, 'thumbnail_url'>, publicApiUrl = environment.apiUrl): string {
  try {
    const base = new URL(publicApiUrl);
    const url = new URL(video.thumbnail_url, base);
    // Browser-visible URLs must use the public origin even when SSR HTTP uses an internal host.
    return ['https:', 'http:'].includes(base.protocol) && url.origin === base.origin
      && /^\/api\/v1\/public\/videos\/[1-9]\d*\/thumbnail$/.test(url.pathname) ? url.href : '';
  } catch { return ''; }
}

@Injectable({ providedIn: 'root' })
export class VideoLibraryApi {
  private readonly http = inject(Http);

  thumbnail(video: VideoLibraryVideo): string {
    return videoThumbnailUrl(video);
  }

  list(filters: VideoLibraryFilters = {}, admin = false) {
    let params = new HttpParams();
    for (const [key, value] of Object.entries(filters)) {
      if (value !== undefined && value !== null && value !== '') params = params.set(key, String(value));
    }
    return this.http.get<ApiResponse<VideoLibraryPage>>(
      admin ? '/admin/video-library' : '/public/videos', params,
    );
  }

  review(urls: string[], defaults: Partial<Omit<VideoLibraryInput, 'url'>> = {}) {
    return this.http.post<ApiResponse<{ rows: VideoLibraryReviewRow[] }>>(
      '/admin/video-library/review', { urls, defaults },
    );
  }

  import(rows: VideoLibraryInput[]) {
    return this.http.post<ApiResponse<{ rows: VideoLibraryImportResult[] }>>(
      '/admin/video-library/import', { rows },
    );
  }

  update(id: number, payload: VideoLibraryInput) {
    const { url: _url, ...editable } = payload;
    return this.http.put<ApiResponse<VideoLibraryVideo>>(`/admin/video-library/${id}`, editable);
  }

  remove(id: number) {
    return this.http.delete<ApiResponse<{ deleted: boolean }>>(`/admin/video-library/${id}`);
  }
}
