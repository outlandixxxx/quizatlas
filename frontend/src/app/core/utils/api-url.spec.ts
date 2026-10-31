import { apiRequestPath, isPublicApiPath } from './api-url';

describe('Configured API URL boundary', () => {
  const api = 'https://api.maroquiz.com/api/v1';
  for (const [url, document, expected] of [
    [api + '/auth/me?next=https://other.test', 'https://maroquiz.com/', '/auth/me'],
    ['https://API.MAROQUIZ.COM:443/api/v1/auth/me', 'https://maroquiz.com/', '/auth/me'],
    ['//api.maroquiz.com/api/v1/auth/me', 'https://maroquiz.com/', '/auth/me'],
    ['/api/v1/auth/me', 'https://api.maroquiz.com/', '/auth/me'],
    ['api/v1/auth/me', 'https://api.maroquiz.com/', '/auth/me'],
    ['/api/v1/auth/me', 'https://maroquiz.com/', null],
    ['api/v1/auth/me', 'https://maroquiz.com/', null],
    ['../auth/me', 'https://api.maroquiz.com/api/v1/page', null],
    ['https://api.maroquiz.com/api/v1%2fauth/me', 'https://maroquiz.com/', null],
    ['https://api.maroquiz.com/api/v1/..%2fauth/me', 'https://maroquiz.com/', null],
    ['https://api.maroquiz.com/api/v1/%2e%2e/auth/me', 'https://maroquiz.com/', null],
    ['https://api.maroquiz.com/api/v1/../auth/me', 'https://maroquiz.com/', null],
    ['https://api.maroquiz.com\\@evil.test/api/v1/auth/me', 'https://maroquiz.com/', null],
    ['javascript:alert(1)', 'https://maroquiz.com/', null],
    [' https://api.maroquiz.com/api/v1/auth/me', 'https://maroquiz.com/', null],
  ] as const) {
    it('resolves safely: ' + url + ' from ' + document, () => {
      expect(apiRequestPath(url, api, document)).toBe(expected);
    });
  }
  it('uses the configured server endpoint without implicitly trusting the browser API origin', () => {
    expect(
      apiRequestPath('http://nginx/api/v1/auth/me', 'http://nginx/api/v1', 'about:blank'),
    ).toBe('/auth/me');
    expect(apiRequestPath(api + '/auth/me', 'http://nginx/api/v1', 'about:blank')).toBeNull();
    expect(apiRequestPath('/api/v1/auth/me', '/api/v1', 'https://maroquiz.com/')).toBe('/auth/me');
  });
  it('keeps authenticated resend and lookalike public paths protected', () => {
    expect(isPublicApiPath('/auth/email/resend-authenticated')).toBe(false);
    expect(isPublicApiPath('/publication/edit')).toBe(false);
    expect(isPublicApiPath('/auth/refresh')).toBe(false);
  });
});
