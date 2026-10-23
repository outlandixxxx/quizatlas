import { TestBed } from '@angular/core/testing';
import { PLATFORM_ID } from '@angular/core';
import { environment } from '../../../environments/environment';
import { logClientError } from './client-error';
import { Seo } from '../services/seo';
import { PreferencesService } from '../services/preferences';

const productionBeforeTest = environment.production;

beforeEach(() => {
  TestBed.configureTestingModule({});
  localStorage.clear();
});
afterEach(() => {
  environment.production = productionBeforeTest;
  vi.restoreAllMocks();
  localStorage.clear();
});

it('does not log backend error details in production', () => {
  environment.production = true;
  const log = vi.spyOn(console, 'error').mockImplementation(() => {});
  logClientError('Request failed', { message: 'internal server details', token: 'private' });
  expect(log).not.toHaveBeenCalled();
});

it('retains error diagnostics during development', () => {
  environment.production = false;
  const error = new Error('development diagnostic');
  const log = vi.spyOn(console, 'error').mockImplementation(() => {});
  logClientError('Request failed', error);
  expect(log).toHaveBeenCalledWith('Request failed', error);
});

it('keeps JSON-LD values intact and prevents script breakouts in serialized HTML', () => {
  const seo = TestBed.inject(Seo);
  const data = { name: '</script><img src=x onerror="alert(1)">', description: 'A < B & C' };
  try {
    seo.setJsonLd(data);
    const script = document.head.querySelector('script[type="application/ld+json"]')!;
    const serialized = document.createElement('div');
    serialized.innerHTML = script.outerHTML;
    expect(serialized.querySelector('img')).toBeNull();
    expect(serialized.querySelectorAll('script')).toHaveLength(1);
    expect(JSON.parse(serialized.querySelector('script')!.textContent!)).toEqual(data);
  } finally {
    seo.removeJsonLd();
  }
});

it.each(['en', 'fr', 'ar'] as const)(
  'preserves the supported %s language preference',
  (language) => {
    const preferences = TestBed.inject(PreferencesService);
    preferences.setLanguage(language);
    expect(localStorage.getItem('quizatlas.language')).toBe(language);
    expect(preferences.getLanguage()).toBe(language);
  },
);

it.each(['light', 'dark', 'system'] as const)(
  'preserves the supported %s theme preference',
  (theme) => {
    const preferences = TestBed.inject(PreferencesService);
    preferences.setTheme(theme);
    expect(localStorage.getItem('quizatlas.theme')).toBe(theme);
    expect(preferences.getTheme()).toBe(theme);
  },
);

it('rejects invalid saved display values before they reach translation/resource loading', () => {
  localStorage.setItem('quizatlas.language', '../../invalid');
  localStorage.setItem('quizatlas.theme', 'invalid');
  const preferences = TestBed.inject(PreferencesService);
  expect(preferences.getLanguage()).toBe('en');
  expect(preferences.getTheme()).toBe('system');
});

it('keeps optional preferences usable when the browser blocks localStorage', () => {
  vi.spyOn(Storage.prototype, 'getItem').mockImplementation(() => {
    throw new Error('Blocked');
  });
  vi.spyOn(Storage.prototype, 'setItem').mockImplementation(() => {
    throw new Error('Blocked');
  });
  const preferences = TestBed.inject(PreferencesService);
  expect(preferences.getLanguage()).toBe('en');
  expect(preferences.getTheme()).toBe('system');
  expect(() => preferences.setLanguage('fr')).not.toThrow();
  expect(() => preferences.setTheme('dark')).not.toThrow();
});

it('does not access browser storage during server rendering', () => {
  TestBed.resetTestingModule();
  TestBed.configureTestingModule({ providers: [{ provide: PLATFORM_ID, useValue: 'server' }] });
  const read = vi.spyOn(Storage.prototype, 'getItem');
  const write = vi.spyOn(Storage.prototype, 'setItem');
  const preferences = TestBed.inject(PreferencesService);
  expect(preferences.getLanguage()).toBe('en');
  expect(preferences.getTheme()).toBe('system');
  preferences.setLanguage('ar');
  preferences.setTheme('light');
  expect(read).not.toHaveBeenCalled();
  expect(write).not.toHaveBeenCalled();
});
