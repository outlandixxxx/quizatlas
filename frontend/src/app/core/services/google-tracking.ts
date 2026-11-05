import { DOCUMENT, isPlatformBrowser } from '@angular/common';
import { DestroyRef, Injectable, InjectionToken, PLATFORM_ID, inject, signal } from '@angular/core';
import { ActivatedRouteSnapshot, NavigationEnd, PRIMARY_OUTLET, Router } from '@angular/router';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { filter } from 'rxjs';
import { environment } from '../../../environments/environment';

export const GA4_ID = 'G-KWRJXMVGW4';
export const GOOGLE_CONSENT_KEY = 'maroquiz.google-consent.v1';
export const GOOGLE_TRACKING_ENABLED = new InjectionToken<boolean>('GOOGLE_TRACKING_ENABLED', {
  providedIn: 'root', factory: () => environment.production,
});
const CONSENT_LIFETIME = 180 * 24 * 60 * 60 * 1000;
const DENIED = { analytics_storage: 'denied', ad_storage: 'denied', ad_user_data: 'denied', ad_personalization: 'denied' };

export interface GoogleConsent {
  version: 1;
  analytics: boolean;
  advertising: boolean;
  expiresAt: number;
}

type GoogleWindow = Window & {
  dataLayer?: unknown[];
  gtag?: (...args: unknown[]) => void;
  adsbygoogle?: unknown[] & { requestNonPersonalizedAds?: number };
  [key: `ga-disable-${string}`]: boolean;
};

// Route configuration contains static patterns, never actual IDs, slugs,
// searches, reset tokens, usernames, quiz content or dynamic SEO titles.
export function analyticsPage(root: ActivatedRouteSnapshot): Record<string, string> {
  const segments: string[] = [];
  let title = 'MaroQuiz';
  let route: ActivatedRouteSnapshot | undefined = root;
  while (route) {
    const config = route.routeConfig;
    if (config?.path === '**') segments.push('not-found');
    else if (config?.path) segments.push(config.path);
    if (typeof config?.title === 'string') title = config.title;
    route = route.children.find(child => child.outlet === PRIMARY_OUTLET);
  }
  return { page_location: `https://maroquiz.com/${segments.join('/')}`, page_title: title, page_referrer: '' };
}

@Injectable({ providedIn: 'root' })
export class GoogleTracking {
  private readonly document = inject(DOCUMENT);
  private readonly platform = inject(PLATFORM_ID);
  private readonly router = inject(Router);
  private readonly destroyRef = inject(DestroyRef);
  private readonly enabled = inject(GOOGLE_TRACKING_ENABLED);
  readonly ready = signal(false);
  readonly panelOpen = signal(false);
  readonly consent = signal<GoogleConsent | null>(null);
  private browser: GoogleWindow | null = null;
  private configured = false;
  private adsLoaded = false;
  private navigationId: number | null = null;
  private lastTrackedNavigation: number | null = null;
  private page: Record<string, string> | null = null;

  start(): void {
    if (!isPlatformBrowser(this.platform) || this.ready()) return;
    this.browser = this.document.defaultView as GoogleWindow | null;
    if (!this.browser) return;
    this.browser.dataLayer ??= [];
    const browser = this.browser;
    browser.gtag ??= function () { browser.dataLayer!.push(arguments); };
    browser[`ga-disable-${GA4_ID}`] = true;
    this.command('consent', 'default', { ...DENIED });
    this.command('set', 'ads_data_redaction', true);
    this.command('set', 'url_passthrough', false);
    this.ready.set(true);
    this.restore();

    this.router.events.pipe(filter(event => event instanceof NavigationEnd), takeUntilDestroyed(this.destroyRef))
      .subscribe(event => {
        this.navigationId = event.id;
        this.page = analyticsPage(this.router.routerState.snapshot.root);
        this.trackPage();
      });
    if (this.router.navigated) {
      this.navigationId = this.router.lastSuccessfulNavigation()?.id ?? 0;
      this.page = analyticsPage(this.router.routerState.snapshot.root);
      this.trackPage();
    }
    const sync = (event: StorageEvent) => {
      if (event.key === GOOGLE_CONSENT_KEY || event.key === null) this.restore();
    };
    browser.addEventListener('storage', sync);
    this.destroyRef.onDestroy(() => browser.removeEventListener('storage', sync));
  }

  choose(analytics: boolean, advertising: boolean): void {
    if (!this.browser) return;
    const choice: GoogleConsent = { version: 1, analytics, advertising, expiresAt: Date.now() + CONSENT_LIFETIME };
    try { this.browser.localStorage.setItem(GOOGLE_CONSENT_KEY, JSON.stringify(choice)); } catch { /* Session-only choice. */ }
    this.apply(choice);
    this.panelOpen.set(false);
  }

  private restore(): void {
    let choice: GoogleConsent | null = null;
    try {
      const value = JSON.parse(this.browser!.localStorage.getItem(GOOGLE_CONSENT_KEY) ?? 'null');
      if (value?.version === 1 && typeof value.analytics === 'boolean' && typeof value.advertising === 'boolean'
        && typeof value.expiresAt === 'number' && value.expiresAt > Date.now()
        && value.expiresAt <= Date.now() + CONSENT_LIFETIME) choice = value;
    } catch { /* Missing, invalid or unavailable storage means no consent. */ }
    this.apply(choice);
    this.panelOpen.set(!choice);
  }

  private apply(choice: GoogleConsent | null): void {
    const analytics = choice?.analytics === true;
    const advertising = choice?.advertising === true;
    this.consent.set(choice);
    this.browser![`ga-disable-${GA4_ID}`] = !analytics || !this.canLoadTags();
    this.command('consent', 'update', { ...DENIED,
      analytics_storage: analytics ? 'granted' : 'denied', ad_storage: advertising ? 'granted' : 'denied' });
    if (!analytics) {
      this.lastTrackedNavigation = null;
      this.clearAnalyticsCookies();
    }
    this.trackPage();
    if (advertising && this.canLoadTags()) {
      this.browser!.adsbygoogle ??= [];
      this.browser!.adsbygoogle.requestNonPersonalizedAds = 1;
      this.loadScript('maroquiz-adsense', 'https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7773857592636107');
      this.adsLoaded = true;
    } else if (!advertising && this.adsLoaded) {
      // Removing a script cannot unload its executing code or auto-ad frames.
      // A reload restores the denied state before any advertising code loads.
      this.browser!.location.reload();
    }
  }

  private canLoadTags(): boolean {
    return this.enabled && ['maroquiz.com', 'www.maroquiz.com'].includes(this.browser?.location.hostname ?? '');
  }

  private trackPage(): void {
    if (!this.consent()?.analytics || !this.canLoadTags() || !this.page || this.navigationId === null
      || this.lastTrackedNavigation === this.navigationId) return;
    if (!this.configured) {
      this.command('js', new Date());
      this.command('config', GA4_ID, { ...this.page, send_page_view: false,
        allow_google_signals: false, allow_ad_personalization_signals: false, ignore_referrer: true });
      this.configured = true;
      this.loadScript('maroquiz-ga4', `https://www.googletagmanager.com/gtag/js?id=${GA4_ID}`);
    }
    this.command('set', this.page);
    this.command('event', 'page_view', { ...this.page, send_to: GA4_ID });
    this.lastTrackedNavigation = this.navigationId;
  }

  private command(...args: unknown[]): void { this.browser?.gtag?.(...args); }

  private loadScript(id: string, url: string): void {
    const expected = new URL(url);
    // Reuse a pre-existing Google tag, including one using a different tag ID.
    if (Array.from(this.document.scripts).some(script => {
      if (!script.src) return false;
      const source = new URL(script.src, 'https://maroquiz.com');
      return source.origin === expected.origin && source.pathname === expected.pathname;
    })) return;
    const script = this.document.createElement('script');
    script.id = id;
    script.async = true;
    script.src = url;
    script.referrerPolicy = 'no-referrer';
    if (id === 'maroquiz-adsense') script.crossOrigin = 'anonymous';
    this.document.head.appendChild(script);
  }

  private clearAnalyticsCookies(): void {
    for (const name of ['_ga', `_ga_${GA4_ID.slice(2)}`]) {
      for (const domain of ['', this.browser!.location.hostname, '.maroquiz.com']) {
        this.document.cookie = `${name}=; Max-Age=0; Path=/; SameSite=Lax${domain ? `; Domain=${domain}` : ''}`;
      }
    }
  }
}
