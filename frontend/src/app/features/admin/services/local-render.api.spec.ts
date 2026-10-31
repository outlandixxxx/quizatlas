import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { LocalRenderApi } from './local-render.api';

it('authorizes the exact PDF snapshot and keeps preview/download capabilities scoped to one safe job', () => {
  TestBed.configureTestingModule({ providers: [provideHttpClient(), provideHttpClientTesting()] });
  try {
    const api = TestBed.inject(LocalRenderApi), http = TestBed.inject(HttpTestingController);
    const id = '12345678-1234-1234-1234-123456789012';
    const snapshot = { type: 'revision-batch', output_mode: 'both', language: 'ar', quizzes: [] };
    api.start(snapshot).subscribe();
    const ticket = http.expectOne(r => r.url.endsWith('/local-render/ticket'));
    expect(JSON.parse(ticket.request.body.content)).toEqual(snapshot);
    ticket.flush({ data: { ticket: 'a'.repeat(64) } });
    const start = http.expectOne('http://127.0.0.1:3777/jobs');
    expect(start.request.body).toBe(JSON.stringify(snapshot));
    expect(start.request.headers.has('Authorization')).toBe(false);
    start.flush({ data: { id, accessKey: 'b'.repeat(64), status: 'running' } });
    expect(api.revisionArtifact(id, 'pdf')).toBe(`http://127.0.0.1:3777/jobs/${id}/revision/pdf?key=${'b'.repeat(64)}`);
    expect(api.revisionArtifact(id, 'pdf', true)).toContain('&preview=1');
    expect(api.revisionArtifact(id, 'catalogue', true)).not.toContain('preview');
    expect(() => api.revisionArtifact(id, '../input.json')).toThrow();
    expect(() => api.revisionArtifact('../input.json', 'pdf')).toThrow();
    http.verify();
  } finally { sessionStorage.clear(); TestBed.resetTestingModule(); }
});
