import { DOCUMENT } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { HttpClient, provideHttpClient, withInterceptors } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { Router } from '@angular/router';
import { Token } from '../services/token';
import { AuthState } from '../../features/auth/services/auth-state';
import { API_BASE_URL } from '../constants/api-base-url';
import { authInterceptor } from './auth-interceptor';
import { errorInterceptor } from './error-interceptor';

describe('Application authentication boundary', () => {
  const api = 'https://api.maroquiz.com/api/v1';
  let http: HttpClient, backend: HttpTestingController;
  const token = { get: vi.fn(), clear: vi.fn() };
  const state = { clear: vi.fn() };
  const router = { url: '/app/dashboard', navigate: vi.fn() };
  beforeEach(() => {
    vi.resetAllMocks();
    token.get.mockReturnValue('session-token');
    router.url = '/app/dashboard';
    vi.spyOn(console, 'error').mockImplementation(() => {});
    TestBed.configureTestingModule({
      providers: [
        provideHttpClient(withInterceptors([authInterceptor, errorInterceptor])),
        provideHttpClientTesting(),
        { provide: API_BASE_URL, useValue: api },
        { provide: DOCUMENT, useValue: { baseURI: 'https://maroquiz.com/' } },
        { provide: Token, useValue: token },
        { provide: AuthState, useValue: state },
        { provide: Router, useValue: router },
      ],
    });
    http = TestBed.inject(HttpClient);
    backend = TestBed.inject(HttpTestingController);
  });
  afterEach(() => {
    backend.verify();
    vi.restoreAllMocks();
  });
  it('passes anonymous SSR requests without reading a browser-only document URL', () => {
    token.get.mockReturnValue(null);
    Object.defineProperty(TestBed.inject(DOCUMENT), 'baseURI', {
      get: () => {
        throw new Error('Not implemented by the SSR document');
      },
    });
    http.get(api + '/public/concours').subscribe();
    const request = backend.expectOne(api + '/public/concours');
    expect(request.request.headers.has('Authorization')).toBe(false);
    request.flush({});
    expect(token.clear).not.toHaveBeenCalled();
  });
  for (const url of [
    api + '/auth/me',
    api + '/auth/refresh',
    api + '/auth/logout',
    api + '/admin/concours-discovery/discoveries',
  ]) {
    it('authenticates the intended protected API: ' + url, () => {
      http.get(url).subscribe();
      const request = backend.expectOne(url);
      expect(request.request.headers.get('Authorization')).toBe('Bearer session-token');
      request.flush({});
    });
  }
  for (const url of [
    'https://external.example/api/v1/auth/me',
    'https://api.maroquiz.com.evil.test/api/v1/auth/me',
    'https://sub.api.maroquiz.com/api/v1/auth/me',
    'http://api.maroquiz.com/api/v1/auth/me',
    'https://api.maroquiz.com:444/api/v1/auth/me',
    'https://api.maroquiz.com/api/v10/auth/me',
    'https://api.maroquiz.com/other?next=/api/v1/auth/me',
    'https://evil.test/?next=' + api,
    'https://api.maroquiz.com@evil.test/api/v1/auth/me',
    'https://evil@api.maroquiz.com/api/v1/auth/me',
    '/api/v1/auth/me',
    'api/v1/auth/me',
    '/assets/i18n/fr.json',
    api + '/public/concours',
    api + '/public/concours-announcements',
    api + '/auth/login',
    api + '/auth/register',
    api + '/auth/google',
    api + '/auth/forgot-password',
  ]) {
    it('neither adds credentials nor logs out for: ' + url, () => {
      http.get(url).subscribe({ error: () => {} });
      const request = backend.expectOne(url);
      expect(request.request.headers.has('Authorization')).toBe(false);
      request.flush({}, { status: 401, statusText: 'Unauthorized' });
      expect(token.clear).not.toHaveBeenCalled();
      expect(state.clear).not.toHaveBeenCalled();
      expect(router.navigate).not.toHaveBeenCalled();
    });
  }
  it('clears an invalid current authenticated session exactly once', () => {
    http.get(api + '/auth/me').subscribe({ error: () => {} });
    backend.expectOne(api + '/auth/me').flush({}, { status: 401, statusText: 'Unauthorized' });
    expect(token.clear).toHaveBeenCalledOnce();
    expect(state.clear).toHaveBeenCalledOnce();
    expect(router.navigate).toHaveBeenCalledExactlyOnceWith(['/login']);
  });
  it('does not invalidate a new token when an older request fails', () => {
    http.get(api + '/auth/me').subscribe({ error: () => {} });
    token.get.mockReturnValue('new-session-token');
    backend.expectOne(api + '/auth/me').flush({}, { status: 401, statusText: 'Unauthorized' });
    expect(token.clear).not.toHaveBeenCalled();
  });
  it('preserves explicit credentials and does not clear the application session for their failure', () => {
    http
      .get(api + '/auth/me', { headers: { Authorization: 'Bearer explicitly-scoped-token' } })
      .subscribe({ error: () => {} });
    const request = backend.expectOne(api + '/auth/me');
    expect(request.request.headers.get('Authorization')).toBe('Bearer explicitly-scoped-token');
    request.flush({}, { status: 401, statusText: 'Unauthorized' });
    expect(token.clear).not.toHaveBeenCalled();
  });
  for (const status of [0, 403, 429, 500]) {
    it('preserves the session after protected API status ' + status, () => {
      http.get(api + '/auth/me').subscribe({ error: () => {} });
      backend
        .expectOne(api + '/auth/me')
        .flush({}, { status, statusText: 'Temporary or authorization error' });
      expect(token.clear).not.toHaveBeenCalled();
      expect(router.navigate).not.toHaveBeenCalled();
    });
  }
  it('does not redirect again from the login page', () => {
    router.url = '/login?returnUrl=%2Fapp';
    http.get(api + '/auth/me').subscribe({ error: () => {} });
    backend.expectOne(api + '/auth/me').flush({}, { status: 401, statusText: 'Unauthorized' });
    expect(token.clear).toHaveBeenCalledOnce();
    expect(router.navigate).not.toHaveBeenCalled();
  });
});
