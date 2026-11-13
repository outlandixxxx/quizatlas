import { DOCUMENT, isPlatformBrowser } from '@angular/common';
import { ChangeDetectorRef, Component, DestroyRef, ElementRef, PLATFORM_ID, computed, effect, inject, signal, viewChild } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { DomSanitizer } from '@angular/platform-browser';
import { ActivatedRoute, NavigationEnd, NavigationStart, Router, RouterLink } from '@angular/router';
import { takeUntilDestroyed, toObservable } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subject, catchError, combineLatest, distinctUntilChanged, filter, map, of, startWith, switchMap } from 'rxjs';
import { BRANDING } from '../../../core/constants/branding';
import { VIDEO_CATEGORIES, VIDEO_LANGUAGES, VIDEO_TEMPLATES, VideoLibraryFilters, VideoLibraryFormat, VideoLibraryPage, VideoLibraryVideo } from '../../../core/models/video-library';
import { GoogleTracking } from '../../../core/services/google-tracking';
import { LanguageService } from '../../../core/services/language';
import { Seo } from '../../../core/services/seo';
import { VideoLibraryApi } from '../../../core/services/video-library-api';
import { seoTranslationsReady } from '../../../core/seo/translations-ready';
import { positivePage } from '../../../core/seo/urls';

interface LibraryFilters {
  format: '' | VideoLibraryFormat;
  q: string;
  category: string;
  template: string;
  language: string;
  short_page: number;
  long_page: number;
}

@Component({
  standalone: true,
  imports: [FormsModule, RouterLink, TranslocoPipe],
  templateUrl: './video-library.html',
  styleUrl: './video-library.scss',
})
export class VideoLibrary {
  readonly api = inject(VideoLibraryApi);
  readonly language = inject(LanguageService);
  readonly tracking = inject(GoogleTracking);
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly seo = inject(Seo);
  private readonly translations = inject(TranslocoService);
  private readonly ready = seoTranslationsReady();
  private readonly destroy = inject(DestroyRef);
  private readonly detector = inject(ChangeDetectorRef);
  private readonly sanitizer = inject(DomSanitizer);
  private readonly document = inject(DOCUMENT);
  private readonly browser = isPlatformBrowser(inject(PLATFORM_ID));
  readonly categories = VIDEO_CATEGORIES;
  readonly templates = VIDEO_TEMPLATES;
  readonly languages = VIDEO_LANGUAGES;
  readonly filters = signal<LibraryFilters>({ format: '', q: '', category: '', template: '', language: '', short_page: 1, long_page: 1 });
  readonly filtersOpen = signal(false);
  readonly shorts = signal<VideoLibraryPage | null>(null);
  readonly longs = signal<VideoLibraryPage | null>(null);
  readonly shortLoading = signal(true);
  readonly longLoading = signal(true);
  readonly shortError = signal(false);
  readonly longError = signal(false);
  readonly selected = signal<VideoLibraryVideo | null>(null);
  readonly playerError = signal(false);
  readonly carousel = viewChild<ElementRef<HTMLElement>>('carousel');
  private readonly player = viewChild<ElementRef<HTMLDialogElement>>('player');
  private readonly closeButton = viewChild<ElementRef<HTMLButtonElement>>('closeButton');
  private readonly retries = { short: new Subject<void>(), long: new Subject<void>() };
  private readonly consentTick = signal(0);
  private readonly navigationTick = signal(0);
  private returnFocus: HTMLElement | null = null;
  search = '';
  readonly showShorts = computed(() => this.filters().format !== 'long');
  readonly showLongs = computed(() => this.filters().format !== 'short');
  readonly filtered = computed(() => Object.entries(this.filters()).some(([key, value]) =>
    key.endsWith('_page') ? Number(value) > 1 : !!value));
  readonly canEmbed = computed(() => {
    this.consentTick();
    return this.browser && this.tracking.videoAllowed();
  });
  readonly embedUrl = computed(() => {
    const id = this.selected()?.youtube_id;
    if (!id || !/^[A-Za-z0-9_-]{11}$/.test(id) || !this.canEmbed()) return null;
    return this.sanitizer.bypassSecurityTrustResourceUrl(
      `https://www.youtube-nocookie.com/embed/${id}?autoplay=0&controls=1&playsinline=1`,
    );
  });

  constructor() {
    this.route.queryParamMap.pipe(takeUntilDestroyed(this.destroy)).subscribe(params => {
      const allowed = (value: string | null, options: readonly string[]) => options.includes(value ?? '') ? value! : '';
      const q = (params.get('q') ?? '').trim().slice(0, 200);
      this.search = q;
      this.filters.set({
        format: allowed(params.get('format'), ['short', 'long']) as '' | VideoLibraryFormat,
        q,
        category: allowed(params.get('category'), this.categories),
        template: allowed(params.get('template'), this.templates),
        language: allowed(params.get('language'), this.languages),
        short_page: positivePage(params.get('short_page')),
        long_page: positivePage(params.get('long_page')),
      });
    });
    this.loadSection('short');
    this.loadSection('long');
    this.router.events.pipe(filter(event => event instanceof NavigationStart || event instanceof NavigationEnd), takeUntilDestroyed(this.destroy))
      .subscribe(event => {
        if (event instanceof NavigationStart) this.close();
        else this.navigationTick.update(value => value + 1);
      });
    effect(onCleanup => {
      this.consentTick();
      const consent = this.tracking.consent();
      if (!this.browser || !this.selected() || !consent?.externalVideo) return;
      const remaining = consent.expiresAt - Date.now();
      if (remaining <= 0) return;
      const timer = setTimeout(() => this.consentTick.update(value => value + 1), Math.min(remaining, 2147000000));
      onCleanup(() => clearTimeout(timer));
    });
    effect(() => {
      if (!this.ready()) return;
      // App resets SEO at NavigationStart and Router applies its static title at
      // completion. Refresh after each navigation, including filtered-to-filtered.
      this.navigationTick();
      this.filters();
      this.language.language();
      this.seo.beginPage('/videos');
      this.seo.setIndexable(!this.filtered() && this.route.snapshot.queryParamMap.keys.length === 0);
      const title = this.translations.translate('videoLibrary.seoTitle');
      const description = this.translations.translate('videoLibrary.description');
      this.seo.setTitle(title);
      this.seo.setDescription(description);
      this.seo.setSocialTags({ title, description, url: '/videos', language: this.language.language() });
      if (this.shortError() || this.longError()) this.seo.setHttpError(503);
      else this.seo.setJsonLd({ '@context': 'https://schema.org', '@type': 'CollectionPage', name: title, description, url: 'https://maroquiz.com/videos' });
    });
    this.destroy.onDestroy(() => {
      this.player()?.nativeElement.close();
      this.retries.short.complete();
      this.retries.long.complete();
    });
  }

  private loadSection(format: VideoLibraryFormat): void {
    const selection = computed(() => {
      const filters = this.filters();
      if (filters.format && filters.format !== format) return null;
      return { format, q: filters.q, category: filters.category, template: filters.template,
        language: filters.language, page: filters[`${format}_page`], per_page: 12 } as VideoLibraryFilters;
    });
    const loading = format === 'short' ? this.shortLoading : this.longLoading;
    const error = format === 'short' ? this.shortError : this.longError;
    const data = format === 'short' ? this.shorts : this.longs;
    combineLatest([
      toObservable(selection).pipe(distinctUntilChanged((a, b) => JSON.stringify(a) === JSON.stringify(b))),
      this.retries[format].pipe(startWith(undefined)),
    ]).pipe(
      switchMap(([params]) => {
        data.set(null);
        error.set(false);
        loading.set(!!params);
        if (!params) return of(null);
        return this.api.list(params).pipe(map(response => response.data), catchError(() => {
          error.set(true);
          return of(null);
        }));
      }),
      takeUntilDestroyed(this.destroy),
    ).subscribe(response => {
      loading.set(false);
      data.set(response);
    });
  }

  change(key: 'format' | 'category' | 'template' | 'language' | 'q', value: string): void {
    const filters = this.filters();
    void this.router.navigate(['/videos'], { queryParams: {
      format: filters.format || null, category: filters.category || null, template: filters.template || null,
      language: filters.language || null, q: filters.q || null, [key]: value || null,
    } });
  }

  page(format: VideoLibraryFormat, page: number): void {
    void this.router.navigate(['/videos'], { queryParams: { [`${format}_page`]: page > 1 ? page : null }, queryParamsHandling: 'merge' });
  }
  reset(): void { void this.router.navigate(['/videos']); }
  retry(format: VideoLibraryFormat): void { this.retries[format].next(); }

  scroll(direction: number): void {
    const element = this.carousel()?.nativeElement;
    element?.scrollBy({ left: direction * (this.language.language() === 'ar' ? -1 : 1) * element.clientWidth * .85, behavior: 'auto' });
  }

  carouselKey(event: KeyboardEvent): void {
    if (!['ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(event.key)) return;
    const buttons = Array.from(this.carousel()?.nativeElement.querySelectorAll<HTMLButtonElement>('.video-card-play') ?? []);
    if (!buttons.length) return;
    event.preventDefault();
    const index = buttons.indexOf(this.document.activeElement as HTMLButtonElement);
    const step = (event.key === 'ArrowRight' ? 1 : -1) * (this.language.language() === 'ar' ? -1 : 1);
    const next = event.key === 'Home' ? 0 : event.key === 'End' ? buttons.length - 1 : Math.max(0, Math.min(buttons.length - 1, index + step));
    buttons[next].focus();
  }

  open(video: VideoLibraryVideo, event: Event): void {
    if (!this.browser) return;
    this.returnFocus = event.currentTarget as HTMLElement;
    this.playerError.set(false);
    this.selected.set(video);
    this.detector.detectChanges();
    this.player()?.nativeElement.showModal();
    this.closeButton()?.nativeElement.focus();
  }

  close(event?: Event): void {
    event?.preventDefault();
    this.player()?.nativeElement.close();
    this.selected.set(null);
    if (this.returnFocus?.isConnected) this.returnFocus.focus({ preventScroll: true });
    this.returnFocus = null;
  }

  allowVideo(): void {
    const consent = this.tracking.consent();
    const current = !!consent && consent.expiresAt > Date.now();
    this.tracking.choose(current && consent.analytics === true, current && consent.advertising === true, true);
  }

  duration(seconds: number | null | undefined): string {
    if (!seconds || !Number.isFinite(seconds) || seconds <= 0) return '';
    return `${Math.floor(seconds / 60)}:${String(Math.floor(seconds % 60)).padStart(2, '0')}`;
  }

  thumbnailError(event: Event): void {
    const image = event.target as HTMLImageElement;
    image.onerror = null;
    if (image.dataset['fallback']) return;
    image.dataset['fallback'] = 'true';
    image.src = BRANDING.logoPath;
    image.classList.add('thumbnail-fallback');
  }
}
