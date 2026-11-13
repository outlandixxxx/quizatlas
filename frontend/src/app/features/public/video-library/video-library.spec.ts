import { PLATFORM_ID, signal } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, NavigationEnd, NavigationStart, Router, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import { BehaviorSubject, Subject, of, throwError } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';
import { VideoLibraryPage, VideoLibraryVideo } from '../../../core/models/video-library';
import { GoogleConsent, GoogleTracking } from '../../../core/services/google-tracking';
import { LanguageService } from '../../../core/services/language';
import { Seo } from '../../../core/services/seo';
import { VideoLibraryApi } from '../../../core/services/video-library-api';
import { VideoLibrary } from './video-library';

const video = (id: number, format: 'short' | 'long' = 'short'): VideoLibraryVideo => ({
  id, youtube_id: id === 1 ? 'dQw4w9WgXcQ' : 'aqz-KE-bpKQ', url: 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
  title: `Stored video ${id}`, format, category: 'quiz', template: 'niveau-concours', language: 'fr', status: 'published',
  thumbnail_url: `/api/v1/public/videos/${id}/thumbnail`, duration_seconds: 83, embeddable: true,
});
const page = (items: VideoLibraryVideo[], current = 1): VideoLibraryPage => ({ items,
  meta: { current_page: current, last_page: 2, per_page: 12, total: 20 } });
const response = (data: VideoLibraryPage) => ({ success: true, message: 'OK', data });

describe('Public video library', () => {
  let params: BehaviorSubject<ReturnType<typeof convertToParamMap>>;
  let route: any;
  let router: Router;
  let tracking: any;
  let api: any;
  let language: any;
  let seo: any;
  const descriptors = ['showModal', 'close'].map(method => Object.getOwnPropertyDescriptor(HTMLDialogElement.prototype, method));

  beforeEach(() => {
    params = new BehaviorSubject(convertToParamMap({}));
    route = { queryParamMap: params, snapshot: { queryParamMap: params.value } };
    tracking = { ready: signal(true), consent: signal<GoogleConsent | null>(null),
      videoAllowed: vi.fn(() => tracking.consent()?.externalVideo === true && tracking.consent().expiresAt > Date.now()),
      choose: vi.fn((analytics, advertising, externalVideo) => tracking.consent.set({
        version: 1, analytics, advertising, externalVideo, expiresAt: Date.now() + 60000,
      })),
    };
    api = { list: vi.fn((filters: any) => of(response(page(filters.format === 'short' ? [video(1), video(2)] : [video(3, 'long')])))),
      thumbnail: vi.fn((v: VideoLibraryVideo) => `https://api.maroquiz.com${v.thumbnail_url}`) };
    language = { language: signal('en') };
    seo = { beginPage: vi.fn(), setIndexable: vi.fn(), setTitle: vi.fn(), setDescription: vi.fn(), setSocialTags: vi.fn(), setJsonLd: vi.fn(), setHttpError: vi.fn() };
    TestBed.configureTestingModule({ imports: [VideoLibrary, TranslocoTestingModule.forRoot({
      langs: { en, fr, ar }, preloadLangs: true,
      translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en', reRenderOnLangChange: true },
    })], providers: [provideRouter([]), { provide: ActivatedRoute, useValue: route },
      { provide: VideoLibraryApi, useValue: api }, { provide: GoogleTracking, useValue: tracking },
      { provide: LanguageService, useValue: language }, { provide: Seo, useValue: seo }] });
    ['showModal', 'close'].forEach(method => Object.defineProperty(HTMLDialogElement.prototype, method, {
      configurable: true, value: function (this: HTMLDialogElement) {
        if (method === 'showModal') this.setAttribute('open', ''); else this.removeAttribute('open');
      },
    }));
  });
  afterEach(() => {
    TestBed.resetTestingModule();
    ['showModal', 'close'].forEach((method, index) => {
      if (descriptors[index]) Object.defineProperty(HTMLDialogElement.prototype, method, descriptors[index]!);
      else Reflect.deleteProperty(HTMLDialogElement.prototype, method);
    });
    vi.useRealTimers();
  });
  async function mount() {
    router = TestBed.inject(Router);
    vi.spyOn(router, 'navigate').mockResolvedValue(true);
    const fixture = TestBed.createComponent(VideoLibrary);
    fixture.detectChanges();
    await fixture.whenStable();
    return { fixture, component: fixture.componentInstance, element: fixture.nativeElement as HTMLElement };
  }
  async function setParams(fixture: any, values: Record<string, string>) {
    route.snapshot.queryParamMap = convertToParamMap(values);
    params.next(route.snapshot.queryParamMap);
    fixture.detectChanges();
    await fixture.whenStable();
  }

  it('loads bounded published catalogue pages and displays both formats without an iframe', async () => {
    const { element } = await mount();
    expect(api.list).toHaveBeenCalledTimes(2);
    expect(api.list).toHaveBeenCalledWith(expect.objectContaining({ format: 'short', page: 1, per_page: 12 }));
    expect(element.querySelectorAll('.short-card')).toHaveLength(2);
    expect(element.querySelectorAll('.long-card')).toHaveLength(1);
    expect(element.querySelector('iframe')).toBeNull();
    expect(element.querySelector<HTMLImageElement>('.short-card img')?.getAttribute('height')).toBe('960');
    expect(element.querySelector<HTMLImageElement>('.long-card img')?.getAttribute('height')).toBe('360');
  });

  it('Short and Long filters render only the selected section without duplicating unchanged API queries', async () => {
    const { fixture, element } = await mount();
    await setParams(fixture, { format: 'long' });
    expect(element.querySelector('#shorts-heading')).toBeNull();
    expect(element.querySelector('#longs-heading')).not.toBeNull();
    expect(api.list).toHaveBeenCalledTimes(2);
    await setParams(fixture, { format: 'short' });
    expect(element.querySelector('#longs-heading')).toBeNull();
    expect(element.querySelector('#shorts-heading')).not.toBeNull();
    expect(api.list).toHaveBeenCalledTimes(3);
  });

  it('filters content language separately from UI language, searches and replaces paginated results', async () => {
    const { component, fixture } = await mount();
    await setParams(fixture, { format: 'short', language: 'ar', q: 'Science', category: 'facts', template: 'facts-short', short_page: '2' });
    expect(language.language()).toBe('en');
    expect(api.list).toHaveBeenLastCalledWith(expect.objectContaining({ format: 'short', language: 'ar', q: 'Science', category: 'facts', template: 'facts-short', page: 2 }));
    expect(component.shorts()?.items).toHaveLength(2);
    component.change('language', 'fr');
    expect(router.navigate).toHaveBeenLastCalledWith(['/videos'], { queryParams: expect.objectContaining({ language: 'fr', q: 'Science' }) });
    expect(router.navigate).toHaveBeenLastCalledWith(['/videos'], { queryParams: expect.not.objectContaining({ short_page: 2 }) });
    component.page('short', 2);
    expect(router.navigate).toHaveBeenLastCalledWith(['/videos'], { queryParams: { short_page: 2 }, queryParamsHandling: 'merge' });
  });

  it('shows loading, discards stale requests and offers safe retry and empty states', async () => {
    const pending = new Subject<any>();
    api.list.mockImplementation((filters: any) => filters.format === 'short' ? pending : of(response(page([]))));
    const { fixture, component, element } = await mount();
    expect(component.shortLoading()).toBe(true);
    expect(element.textContent).toContain(en.videoLibrary.loading);
    api.list.mockReturnValue(throwError(() => ({ status: 503 })));
    await setParams(fixture, { format: 'short', q: 'new' });
    pending.next(response(page([video(99)])));
    expect(component.shorts()).toBeNull();
    expect(component.shortError()).toBe(true);
    expect(element.querySelector('[role="alert"]')).not.toBeNull();
    api.list.mockReturnValue(of(response(page([]))));
    component.retry('short');
    fixture.detectChanges();
    await fixture.whenStable();
    expect(component.shortError()).toBe(false);
    expect(element.textContent).toContain(en.videoLibrary.emptyShorts);
  });

  it.each([['fr', fr], ['en', en], ['ar', ar]] as const)('localizes the %s interface while preserving stored titles and content badges', async (locale, dictionary) => {
    TestBed.inject(TranslocoService).setActiveLang(locale);
    language.language.set(locale);
    const { element } = await mount();
    expect(element.querySelector('h1')?.textContent).toBe(dictionary.videoLibrary.heading);
    expect(element.querySelector('.video-library')?.getAttribute('dir')).toBe(locale === 'ar' ? 'rtl' : 'ltr');
    expect(element.querySelector('.language-badge')?.textContent).toBe('FR');
    expect(element.textContent).toContain('Stored video 1');
  });

  it('supports RTL/LTR carousel keyboard order and accessible previous/next scrolling', async () => {
    const { component, element } = await mount();
    const buttons = Array.from(element.querySelectorAll<HTMLButtonElement>('.short-card button'));
    buttons[0].focus();
    component.carouselKey(new KeyboardEvent('keydown', { key: 'ArrowRight', cancelable: true }));
    expect(document.activeElement).toBe(buttons[1]);
    language.language.set('ar');
    component.carouselKey(new KeyboardEvent('keydown', { key: 'ArrowRight', cancelable: true }));
    expect(document.activeElement).toBe(buttons[0]);
    const carousel = element.querySelector<HTMLElement>('.shorts-carousel')!;
    const scroll = vi.fn();
    carousel.scrollBy = scroll;
    Object.defineProperty(carousel, 'clientWidth', { value: 300 });
    component.scroll(1);
    expect(scroll).toHaveBeenCalledWith({ left: -255, behavior: 'auto' });
  });

  it('requires explicit independent YouTube consent, retains native controls and restores focus on close', async () => {
    const { component, fixture, element } = await mount();
    const button = element.querySelector<HTMLButtonElement>('.short-card button')!;
    button.click();
    fixture.detectChanges();
    expect(element.querySelector('dialog[open]')).not.toBeNull();
    expect(element.querySelector('iframe')).toBeNull();
    expect(document.activeElement).toBe(element.querySelector('.close-player'));
    component.allowVideo();
    fixture.detectChanges();
    await fixture.whenStable();
    expect(tracking.choose).toHaveBeenCalledWith(false, false, true);
    const iframe = element.querySelector<HTMLIFrameElement>('iframe')!;
    expect(iframe.src).toBe('https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?autoplay=0&controls=1&playsinline=1');
    expect(iframe.getAttribute('referrerpolicy')).toBe('strict-origin-when-cross-origin');
    expect(iframe.title).toBe('Stored video 1');
    component.close();
    fixture.detectChanges();
    expect(element.querySelector('iframe, dialog')).toBeNull();
    expect(document.activeElement).toBe(button);
  });

  it('removes the only active iframe on withdrawal and route navigation', async () => {
    const { component, fixture, element } = await mount();
    tracking.choose(false, false, true);
    element.querySelector<HTMLButtonElement>('.short-card button')!.click();
    fixture.detectChanges();
    expect(element.querySelectorAll('iframe')).toHaveLength(1);
    tracking.choose(false, false, false);
    fixture.detectChanges();
    expect(element.querySelector('iframe')).toBeNull();
    tracking.choose(false, false, true);
    fixture.detectChanges();
    (router.events as Subject<any>).next(new NavigationStart(1, '/about'));
    fixture.detectChanges();
    expect(element.querySelector('dialog')).toBeNull();
  });

  it('removes an active iframe when saved video consent expires', async () => {
    const { component, fixture, element } = await mount();
    vi.useFakeTimers();
    tracking.consent.set({ version: 1, analytics: false, advertising: false, externalVideo: true, expiresAt: Date.now() + 1000 });
    element.querySelector<HTMLButtonElement>('.short-card button')!.click();
    fixture.detectChanges();
    await vi.advanceTimersByTimeAsync(1001);
    fixture.detectChanges();
    expect(component.canEmbed()).toBe(false);
    expect(element.querySelector('iframe')).toBeNull();
  });

  it('does not renew expired Analytics or advertising grants when allowing only YouTube', async () => {
    const { component } = await mount();
    tracking.consent.set({ version: 1, analytics: true, advertising: true, externalVideo: false, expiresAt: Date.now() - 1 });
    component.allowVideo();
    expect(tracking.choose).toHaveBeenCalledWith(false, false, true);
  });

  it('provides an unavailable-video fallback and renders unsafe titles only as text', async () => {
    const { component, fixture, element } = await mount();
    component.open({ ...video(1), title: '<img src=x onerror=alert(1)>', embeddable: false }, { currentTarget: element.querySelector('button') } as unknown as Event);
    fixture.detectChanges();
    expect(element.querySelector('iframe')).toBeNull();
    expect(element.querySelector('#video-player-title')?.textContent).toContain('<img src=x');
    expect(element.querySelector('#video-player-title img')).toBeNull();
    expect(element.querySelector<HTMLAnchorElement>('.player-fallback a')?.href).toBe('https://www.youtube.com/watch?v=dQw4w9WgXcQ');
  });

  it('canonicalizes filters to the base catalogue and marks filtered pages noindex', async () => {
    const { fixture } = await mount();
    expect(seo.beginPage).toHaveBeenCalledWith('/videos');
    expect(seo.setIndexable).toHaveBeenLastCalledWith(true);
    await setParams(fixture, { language: 'fr' });
    expect(seo.setIndexable).toHaveBeenLastCalledWith(false);
    await setParams(fixture, { language: 'fr', category: 'quiz' });
    expect(seo.setIndexable).toHaveBeenLastCalledWith(false);
    seo.setIndexable.mockClear();
    (router.events as Subject<any>).next(new NavigationEnd(2, '/videos?language=fr&category=quiz', '/videos?language=fr&category=quiz'));
    fixture.detectChanges();
    expect(seo.setIndexable).toHaveBeenLastCalledWith(false);
    expect(seo.setTitle).toHaveBeenLastCalledWith(en.videoLibrary.seoTitle);
  });

  it('never creates a browser player during SSR even with stored video consent', async () => {
    TestBed.overrideProvider(PLATFORM_ID, { useValue: 'server' });
    tracking.choose(false, false, true);
    const { component, element } = await mount();
    component.open(video(1), new Event('click'));
    expect(component.canEmbed()).toBe(false);
    expect(element.querySelector('iframe, dialog')).toBeNull();
  });
});
