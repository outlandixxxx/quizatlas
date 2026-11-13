import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { API_BASE_URL } from '../constants/api-base-url';
import { VideoLibraryVideo } from '../models/video-library';
import { VideoLibraryApi, videoThumbnailUrl } from './video-library-api';
import { environment } from '../../../environments/environment';

describe('VideoLibraryApi', () => {
  let api: VideoLibraryApi;
  let http: HttpTestingController;
  beforeEach(() => {
    TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting(),
      { provide: API_BASE_URL, useValue: 'https://api.maroquiz.example/api/v1' }] });
    api = TestBed.inject(VideoLibraryApi);
    http = TestBed.inject(HttpTestingController);
  });
  afterEach(() => http.verify());

  it('encodes filters, separates public/admin queries and omits empty values', () => {
    api.list({ q: 'Math & logic', format: 'short', category: '', language: 'ar', page: 2, per_page: 12 }).subscribe();
    const request = http.expectOne((req) => req.url === 'https://api.maroquiz.example/api/v1/public/videos');
    expect(request.request.params.get('q')).toBe('Math & logic');
    expect(request.request.params.get('language')).toBe('ar');
    expect(request.request.params.has('category')).toBe(false);
    request.flush({ data: { items: [], meta: {} } });
    api.list({ status: 'draft' }, true).subscribe();
    http.expectOne('https://api.maroquiz.example/api/v1/admin/video-library?status=draft').flush({ data: { items: [], meta: {} } });
  });

  it('resolves only same-backend published thumbnail proxy URLs', () => {
    const video = { thumbnail_url: '/api/v1/public/videos/31/thumbnail' } as VideoLibraryVideo;
    expect(api.thumbnail(video)).toBe(`${new URL(environment.apiUrl).origin}/api/v1/public/videos/31/thumbnail`);
    expect(api.thumbnail(video)).not.toContain('api.maroquiz.example');
    expect(api.thumbnail({ ...video, thumbnail_url: 'https://i.ytimg.com/vi/id/hqdefault.jpg' })).toBe('');
    expect(api.thumbnail({ ...video, thumbnail_url: '//attacker.example/api/v1/public/videos/31/thumbnail' })).toBe('');
    expect(api.thumbnail({ ...video, thumbnail_url: '/api/v1/admin/secret' })).toBe('');
    expect(api.thumbnail({ ...video, thumbnail_url: 'http://backend/api/v1/public/videos/31/thumbnail' })).toBe('');
    expect(videoThumbnailUrl(video, 'https://maroquiz.com/api/v1')).toBe('https://maroquiz.com/api/v1/public/videos/31/thumbnail');
    expect(videoThumbnailUrl(video, 'javascript:alert(1)')).toBe('');
  });

  it('sends only editable fields on updates, preserving immutable YouTube identity', () => {
    api.update(31, { url: 'https://youtu.be/M7lc1UVf-VE', title: 'Updated title',
      format: 'short', category: 'quiz', template: 'general', language: 'fr', status: 'published' }).subscribe();
    const request = http.expectOne('https://api.maroquiz.example/api/v1/admin/video-library/31');
    expect(request.request.method).toBe('PUT');
    expect(request.request.body.title).toBe('Updated title');
    expect(request.request.body.url).toBeUndefined();
    expect(request.request.body.youtube_id).toBeUndefined();
    request.flush({ data: {} });
  });
});
