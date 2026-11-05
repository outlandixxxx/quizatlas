import { DOCUMENT } from '@angular/common';
import { PLATFORM_ID, signal } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { ActivatedRouteSnapshot, NavigationEnd, Router } from '@angular/router';
import { Subject } from 'rxjs';
import { analyticsPage, GA4_ID, GOOGLE_CONSENT_KEY, GOOGLE_TRACKING_ENABLED, GoogleTracking } from './google-tracking';

const snapshot = (path: string, children: ActivatedRouteSnapshot[] = [], title?: string): ActivatedRouteSnapshot =>
  ({ routeConfig: { path, title }, children, outlet: 'primary' }) as ActivatedRouteSnapshot;
const choice = (analytics = true, advertising = false) => ({ version: 1, analytics, advertising, expiresAt: Date.now() + 60000 });

describe('Google tracking and Consent Mode v2', () => {
  let events: Subject<NavigationEnd>;
  let router: any;
  let browser: any;
  let doc: any;
  let storage: Map<string, string>;
  let listeners: Map<string, (event: any) => void>;
  let cookies: string[];
  let enabled: boolean;
  beforeEach(() => {
    events = new Subject();
    storage = new Map();
    listeners = new Map();
    cookies = [];
    enabled = true;
    browser = { location: { hostname: 'maroquiz.com', reload: vi.fn() },
      localStorage: { getItem: vi.fn(key => storage.get(key) ?? null), setItem: vi.fn((key, value) => storage.set(key, value)) },
      addEventListener: vi.fn((type, handler) => listeners.set(type, handler)), removeEventListener: vi.fn(),
    };
    doc = { defaultView: browser, head: document.head, get scripts() { return document.scripts; },
      createElement: document.createElement.bind(document), set cookie(value: string) { cookies.push(value); } };
    router = { events, navigated: false, lastSuccessfulNavigation: signal(null),
      routerState: { snapshot: { root: snapshot('', [snapshot('about', [], 'About — MaroQuiz')]) } } };
  });
  afterEach(() => {
    TestBed.resetTestingModule();
    document.querySelectorAll('script[data-analytics-test], #maroquiz-ga4, #maroquiz-adsense').forEach(script => script.remove());
  });
  const mount = (platform = 'browser') => {
    TestBed.configureTestingModule({ providers: [
      { provide: DOCUMENT, useValue: doc }, { provide: PLATFORM_ID, useValue: platform },
      { provide: Router, useValue: router }, { provide: GOOGLE_TRACKING_ENABLED, useValue: enabled },
    ] });
    const service = TestBed.inject(GoogleTracking);
    service.start();
    return service;
  };
  const commands = () => (browser.dataLayer ?? []).map((args: ArrayLike<unknown>) => Array.from(args));
  const views = () => commands().filter((args: unknown[]) => args[0] === 'event' && args[1] === 'page_view');
  const navigate = (id: number, path = 'about') => {
    router.routerState.snapshot.root = snapshot('', [snapshot(path, [], 'Static title — MaroQuiz')]);
    events.next(new NavigationEnd(id, '/ignored?email=private@example.test#token', '/ignored?answer=private'));
  };

  it('denies all four consent types before any measurement and loads no scripts before consent', () => {
    const service = mount();
    navigate(1);
    expect(commands()[0]).toEqual(['consent', 'default', {
      analytics_storage: 'denied', ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied',
    }]);
    expect(views()).toHaveLength(0);
    expect(document.querySelector('#maroquiz-ga4, #maroquiz-adsense')).toBeNull();
    expect(service.panelOpen()).toBe(true);
  });

  it('tracks only the current page on acceptance, then one view per completed navigation', () => {
    const service = mount();
    navigate(1, 'about');
    navigate(2, 'privacy');
    service.choose(true, false);
    expect(views()).toHaveLength(1);
    expect(views()[0][2]).toMatchObject({ page_location: 'https://maroquiz.com/privacy', send_to: GA4_ID, page_referrer: '' });
    navigate(2, 'privacy');
    expect(views()).toHaveLength(1);
    navigate(3, 'faq');
    expect(views()).toHaveLength(2);
    expect(JSON.stringify(commands())).not.toMatch(/private@example|answer=|#token/);
    expect(commands().find((args: unknown[]) => args[0] === 'config')).toEqual(['config', GA4_ID,
      expect.objectContaining({ send_page_view: false, allow_google_signals: false, allow_ad_personalization_signals: false, ignore_referrer: true })]);
    expect(document.querySelectorAll('#maroquiz-ga4')).toHaveLength(1);
    expect(document.querySelector<HTMLScriptElement>('#maroquiz-ga4')?.referrerPolicy).toBe('no-referrer');
  });

  it('restores consent and counts the initial hydrated page once even if startup is repeated', () => {
    storage.set(GOOGLE_CONSENT_KEY, JSON.stringify(choice()));
    router.navigated = true;
    router.lastSuccessfulNavigation.set({ id: 1 });
    const service = mount();
    service.start();
    navigate(1);
    expect(views()).toHaveLength(1);
    expect(commands().filter((args: unknown[]) => args[0] === 'config')).toHaveLength(1);
    expect(service.panelOpen()).toBe(false);
  });

  it.each(['null', 'invalid', JSON.stringify({ ...choice(), expiresAt: 0 }),
    JSON.stringify({ ...choice(), version: 0 }), JSON.stringify({ ...choice(), analytics: 'true' })])('fails closed for missing, invalid or expired consent: %s', saved => {
    storage.set(GOOGLE_CONSENT_KEY, saved);
    const service = mount();
    navigate(1);
    expect(service.consent()).toBeNull();
    expect(service.panelOpen()).toBe(true);
    expect(views()).toHaveLength(0);
  });

  it('preserves an explicit rejection across reloads', () => {
    storage.set(GOOGLE_CONSENT_KEY, JSON.stringify(choice(false)));
    const service = mount();
    navigate(1);
    expect(service.panelOpen()).toBe(false);
    expect(views()).toHaveLength(0);
    expect(document.querySelector('#maroquiz-ga4')).toBeNull();
  });

  it('reuses an existing Google tag and gtag function', () => {
    const script = document.createElement('script');
    script.dataset['analyticsTest'] = '';
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-EXISTING';
    document.head.appendChild(script);
    const existing = browser.gtag = vi.fn();
    const service = mount();
    navigate(1);
    service.choose(true, false);
    expect(browser.gtag).toBe(existing);
    expect(existing).toHaveBeenCalledWith('config', GA4_ID, expect.objectContaining({ send_page_view: false }));
    expect(document.querySelectorAll('script[src*="googletagmanager.com/gtag/js"]')).toHaveLength(1);
  });

  it('supports independent, non-personalized advertising consent without enabling GA', () => {
    const service = mount();
    navigate(1);
    service.choose(false, true);
    service.choose(false, true);
    expect(document.querySelectorAll('#maroquiz-adsense')).toHaveLength(1);
    expect(document.querySelector('#maroquiz-ga4')).toBeNull();
    expect(browser.adsbygoogle.requestNonPersonalizedAds).toBe(1);
    expect(commands()).toContainEqual(['consent', 'update', {
      analytics_storage: 'denied', ad_storage: 'granted', ad_user_data: 'denied', ad_personalization: 'denied',
    }]);
  });

  it('disables GA immediately, clears its cookies and stops future views on withdrawal', () => {
    const service = mount();
    navigate(1);
    service.choose(true, false);
    service.choose(false, false);
    navigate(2);
    expect(views()).toHaveLength(1);
    expect(browser[`ga-disable-${GA4_ID}`]).toBe(true);
    expect(cookies.some(value => value.startsWith('_ga_KWRJXMVGW4=; Max-Age=0;'))).toBe(true);
    expect(browser.location.reload).not.toHaveBeenCalled();
  });

  it('saves advertising withdrawal before reloading to unload ad code', () => {
    const service = mount();
    service.choose(false, true);
    service.choose(false, false);
    expect(JSON.parse(storage.get(GOOGLE_CONSENT_KEY)!).advertising).toBe(false);
    expect(browser.location.reload).toHaveBeenCalledTimes(1);
  });

  it('synchronizes revocation from another tab and removes its listener on destruction', () => {
    const service = mount();
    navigate(1);
    service.choose(true, false);
    storage.delete(GOOGLE_CONSENT_KEY);
    listeners.get('storage')!({ key: GOOGLE_CONSENT_KEY });
    navigate(2);
    expect(views()).toHaveLength(1);
    expect(service.panelOpen()).toBe(true);
    TestBed.resetTestingModule();
    expect(browser.removeEventListener).toHaveBeenCalledWith('storage', expect.any(Function));
  });

  it('allows an explicit session-only choice when localStorage is blocked', () => {
    browser.localStorage.getItem.mockImplementation(() => { throw Error('Blocked'); });
    browser.localStorage.setItem.mockImplementation(() => { throw Error('Blocked'); });
    const service = mount();
    navigate(1);
    expect(service.panelOpen()).toBe(true);
    expect(() => service.choose(true, false)).not.toThrow();
    expect(views()).toHaveLength(1);
  });

  it.each(['localhost', '127.0.0.1', 'maroquiz.com.evil.test'])('never sends development or lookalike-host traffic from %s', host => {
    browser.location.hostname = host;
    const service = mount();
    navigate(1);
    service.choose(true, true);
    expect(views()).toHaveLength(0);
    expect(document.querySelector('#maroquiz-ga4, #maroquiz-adsense')).toBeNull();
  });

  it('keeps tracking off in a development build even on the production hostname', () => {
    enabled = false;
    const service = mount();
    navigate(1);
    service.choose(true, true);
    expect(views()).toHaveLength(0);
    expect(browser[`ga-disable-${GA4_ID}`]).toBe(true);
  });

  it('never reads browser globals, storage or DOM scripts on the server', () => {
    const getWindow = vi.fn(() => { throw Error('SSR browser access'); });
    Object.defineProperty(doc, 'defaultView', { get: getWindow });
    const service = mount('server');
    service.choose(true, true);
    expect(service.ready()).toBe(false);
    expect(getWindow).not.toHaveBeenCalled();
    expect(browser.localStorage.getItem).not.toHaveBeenCalled();
  });
});

it('uses static route patterns and titles instead of user data or resolved SEO metadata', () => {
  const leaf = snapshot('results/:id');
  Object.assign(leaf, { params: { id: 'private-attempt' }, data: { title: 'student@example.test', answers: ['private'] }, title: 'Student name' });
  expect(analyticsPage(snapshot('', [snapshot('app', [leaf])]))).toEqual({
    page_location: 'https://maroquiz.com/app/results/:id', page_title: 'MaroQuiz', page_referrer: '',
  });
  expect(analyticsPage(snapshot('', [snapshot('**')]))['page_location']).toBe('https://maroquiz.com/not-found');
});
