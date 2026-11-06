import { RESPONSE_INIT } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { RouterTestingHarness } from '@angular/router/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { ActivatedRoute } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { Subject, of, throwError } from 'rxjs';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';
import { ConcoursApi } from '../../core/services/concours-api';
import { ConcoursAnnouncementsApi } from '../../core/services/concours-announcements-api';
import { API_BASE_URL } from '../../core/constants/api-base-url';
import { serverApi } from '../../core/config/server-api';
import { environment } from '../../../environments/environment';
import { DirectoryRecord, editorial, sessionYearPreview } from '../../core/models/concours';
import { LanguageService } from '../../core/services/language';
import { Seo } from '../../core/services/seo';
import { canonicalUrl } from '../../core/seo/urls';
import { ConcoursDirectory } from './concours-directory';
import { ConcoursOverview } from './concours-overview';
import { AdminConcoursDirectory } from '../admin/concours-directory/concours-directory';

const category: DirectoryRecord = {
  id: 1,
  slug: 'education',
  name_fr: 'Éducation',
  name_ar: 'التعليم',
  parent_id: null,
  is_active: true,
};
const record: DirectoryRecord = {
  id: 7,
  slug: 'test-concours',
  name_fr: 'Concours de test',
  name_ar: 'مباراة تجريبية',
  description_fr: 'Description française.',
  description_ar: 'وصف عربي.',
  category_id: 1,
  category,
  institution: null,
  type: 'recruitment',
  exam_formats: ['qcm'],
  display_order: 0,
  is_active: true,
};
const page = (items: DirectoryRecord[] = [record], current = 1, last = 1) => ({
  success: true,
  message: 'Success',
  data: {
    items,
    meta: { current_page: current, last_page: last, per_page: 12, total: items.length },
  },
});

describe('concours public UI', () => {
  const api = { list: vi.fn(), references: vi.fn(), show: vi.fn(),
    publicAdvice: vi.fn(() => of({ data: { advice_fr: null, advice_ar: null } })),
  };
  const announcementsApi = { list: vi.fn() };
  const response = { status: 200 };
  beforeEach(() => {
    api.list.mockReset().mockReturnValue(of(page()));
    api.references
      .mockReset()
      .mockImplementation((kind) => of(kind === 'categories' ? [category] : []));
    api.show.mockReset().mockReturnValue(of({ data: record }));
    announcementsApi.list.mockReset().mockReturnValue(of(page([])));
    response.status = 200;
    TestBed.configureTestingModule({
      imports: [
        TranslocoTestingModule.forRoot({
          langs: { en, fr, ar },
          preloadLangs: true,
          translocoConfig: {
            availableLangs: ['en', 'fr', 'ar'],
            defaultLang: 'en',
            reRenderOnLangChange: true,
          },
        }),
      ],
      providers: [
        provideHttpClient(),
        provideRouter([
          { path: 'concours', component: ConcoursDirectory },
          { path: 'concours/:slug', component: ConcoursOverview },
        ]),
        { provide: ConcoursApi, useValue: api },
        { provide: ConcoursAnnouncementsApi, useValue: announcementsApi },
        { provide: RESPONSE_INIT, useValue: response },
      ],
    });
    TestBed.inject(LanguageService).setLanguage('en');
    TestBed.inject(Seo).beginPage('/concours');
  });

  it('renders useful empty sections and available follow guidance without inventing PDF controls', async () => {
    api.list.mockReturnValue(of(page([])));
    const harness = await RouterTestingHarness.create('/concours');
    const element = harness.routeNativeElement!;
    expect(element.textContent).toContain(en.concours.emptyDirectoryTitle);
    expect(element.querySelector('.notification-promotion')?.textContent).toContain(
      en.concoursFollowing.available,
    );
    expect(element.querySelector('.notification-promotion button')).toBeNull();
    expect(element.querySelector('[download]')).toBeNull();
    expect(element.querySelector('#exam-library')?.textContent).toContain(
      en.concoursUi.papersDirectoryTitle,
    );
    expect(element.querySelectorAll('a[href="/subjects"]').length).toBeGreaterThan(0);
  });

  it.each(['en', 'fr', 'ar'] as const)(
    'renders the %s interface while respecting editorial language and direction',
    async (language) => {
      TestBed.inject(LanguageService).setLanguage(language);
      const harness = await RouterTestingHarness.create('/concours/test-concours');
      const dictionary = { en, fr, ar }[language];
      expect(harness.routeNativeElement?.textContent).toContain(
        dictionary.concoursSessions.officialTitle,
      );
      const heading = harness.routeNativeElement!.querySelector('h1')!;
      expect(heading.textContent?.trim()).toBe(language === 'ar' ? record.name_ar : record.name_fr);
      expect(heading.getAttribute('lang')).toBe(language === 'ar' ? 'ar' : 'fr');
      expect(heading.getAttribute('dir')).toBe(language === 'ar' ? 'rtl' : 'ltr');
      expect(document.documentElement.lang).toBe(language);
      expect(document.documentElement.dir).toBe(language === 'ar' ? 'rtl' : 'ltr');
      expect(document.title).toContain(language === 'ar' ? record.name_ar : record.name_fr);
    },
  );

  it('keeps French fallback content separate from English interface preferences', () => {
    expect(editorial(record, 'en')).toMatchObject({
      name: record.name_fr,
      lang: 'fr',
      description: record.description_fr,
    });
    expect(editorial({ ...record, description_ar: null }, 'ar')).toMatchObject({
      lang: 'ar',
      descriptionLang: 'fr',
    });
  });

  it('preserves pagination and query filters and excludes filtered pages from indexing', async () => {
    api.list.mockReturnValue(of(page([record], 2, 3)));
    const harness = await RouterTestingHarness.create(
      '/concours?page=2&type=admission&category_id=1&q=test',
    );
    expect(api.list).toHaveBeenCalledWith(
      'concours',
      expect.objectContaining({ page: 2, type: 'admission', category_id: 1, q: 'test' }),
    );
    expect(
      harness.routeNativeElement?.querySelector('a[rel="next"]')?.getAttribute('href'),
    ).toContain('page=3');
    expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toContain(
      'noindex',
    );
    expect(canonicalUrl('/concours?page=2')).toBe('https://maroquiz.com/concours?page=2');
    expect(canonicalUrl('/concours?page=2&type=admission')).toBe('https://maroquiz.com/concours');
  });

  it('cancels an old detail request when navigating to another concours', async () => {
    const old = new Subject<{ data: DirectoryRecord }>();
    api.show.mockImplementation((slug) =>
      slug === 'old' ? old : of({ data: { ...record, slug: 'new', name_fr: 'Nouveau concours' } }),
    );
    const harness = await RouterTestingHarness.create();
    await harness.navigateByUrl('/concours/old', ConcoursOverview);
    await harness.navigateByUrl('/concours/new', ConcoursOverview);
    old.next({ data: { ...record, name_fr: 'Ancien concours' } });
    expect(harness.routeNativeElement?.querySelector('h1')?.textContent?.trim()).toBe(
      'Nouveau concours',
    );
  });

  it.each([404, 429, 503])(
    'returns a proper %s status and noindex for unavailable detail content',
    async (status) => {
      api.show.mockReturnValue(throwError(() => ({ status })));
      const harness = await RouterTestingHarness.create('/concours/unavailable');
      expect(response.status).toBe(status === 429 ? 503 : status);
      expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toContain(
        'noindex',
      );
      expect(harness.routeNativeElement?.querySelector('app-public-page-error')).not.toBeNull();
    },
  );

  it('loads only the changed pagination stream and keeps explicit retries functional', async () => {
    api.list.mockReturnValue(of(page([record], 1, 3)));
    announcementsApi.list.mockImplementation((filters) => of(page([], filters.page, 5)));
    const harness = await RouterTestingHarness.create();
    let component = await harness.navigateByUrl('/concours', ConcoursDirectory);
    await harness.fixture.whenStable();
    expect(api.list).toHaveBeenCalledTimes(1);
    expect(announcementsApi.list).toHaveBeenCalledTimes(1);
    component = await harness.navigateByUrl('/concours?ann_page=2', ConcoursDirectory);
    await harness.fixture.whenStable();
    expect(api.list).toHaveBeenCalledTimes(1);
    expect(announcementsApi.list).toHaveBeenCalledTimes(2);
    component = await harness.navigateByUrl('/concours?page=2&ann_page=2', ConcoursDirectory);
    await harness.fixture.whenStable();
    expect(api.list).toHaveBeenCalledTimes(2);
    expect(announcementsApi.list).toHaveBeenCalledTimes(2);
    component.retry();
    harness.detectChanges();
    await harness.fixture.whenStable();
    expect(api.list).toHaveBeenCalledTimes(3);
    expect(announcementsApi.list).toHaveBeenCalledTimes(2);
  });

  it('recovers a temporary detail failure on retry without navigation', async () => {
    api.show
      .mockReturnValueOnce(throwError(() => ({ status: 503 })))
      .mockReturnValue(of({ data: record }));
    const harness = await RouterTestingHarness.create();
    const component = await harness.navigateByUrl('/concours/test-concours', ConcoursOverview);
    expect(response.status).toBe(503);
    component.retry();
    harness.detectChanges();
    await harness.fixture.whenStable();
    expect(component.record()?.id).toBe(record.id);
    expect(response.status).toBe(200);
  });

  it('renders editorial markup as text rather than executable HTML', async () => {
    api.show.mockReturnValue(
      of({
        data: {
          ...record,
          name_fr: '<img src=x onerror=alert(1)>',
          description_fr: '<script>alert(1)</script>',
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/test-concours');
    expect(harness.routeNativeElement?.querySelector('h1 img')).toBeNull();
    expect(harness.routeNativeElement?.querySelector('.editorial-description script')).toBeNull();
    expect(harness.routeNativeElement?.querySelector('h1')?.textContent).toContain('<img');
  });

  it.each(['/concours', '/concours/test-concours'])(
    'returns 404/noindex for out-of-range announcement pages on %s and recovers on page one',
    async (path) => {
      announcementsApi.list.mockImplementation((filters) =>
        of({
          data: {
            items: [],
            meta: { current_page: filters.page, last_page: 1, per_page: 12, total: 0 },
          },
        }),
      );
      const harness = await RouterTestingHarness.create(path + '?ann_page=4');
      expect(response.status).toBe(404);
      expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toContain(
        'noindex',
      );
      expect(document.querySelector('#structured-data')).toBeNull();
      const recovery = harness.routeNativeElement!.querySelector('app-announcement-list a')!;
      expect(recovery.getAttribute('href')).not.toContain('ann_page=4');
      await harness.navigateByUrl(path);
      expect(response.status).toBe(200);
      expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toBe(
        'index, follow',
      );
    },
  );

  it.each(['0', '-1', 'nope', '100001', '01', ''])(
    'does not fetch or index invalid announcement pagination ann_page=%s',
    async (value) => {
      await RouterTestingHarness.create('/concours/test-concours?ann_page=' + value);
      expect(announcementsApi.list).not.toHaveBeenCalled();
      expect(response.status).toBe(404);
      expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toContain(
        'noindex',
      );
    },
  );

  it.each(['en', 'fr', 'ar'] as const)(
    'keeps the official empty state and working section anchors in %s',
    async (lang) => {
      TestBed.inject(LanguageService).setLanguage(lang);
      const harness = await RouterTestingHarness.create('/concours/test-concours');
      const dom = harness.routeNativeElement!;
      expect(dom.querySelector('#official-announcement')?.textContent).toContain(
        { en, fr, ar }[lang].concoursUi.notAnnounced,
      );
      expect(dom.querySelector('.alternate-title')?.textContent?.trim()).toBe(
        lang === 'ar' ? record.name_fr : record.name_ar,
      );
      for (const link of Array.from(
        dom.querySelectorAll<HTMLAnchorElement>('.section-nav a, .quick-grid a'),
      )) {
        expect(dom.querySelector('#' + link.getAttribute('href')!.split('#')[1])).not.toBeNull();
      }
      expect(dom.querySelector('.session-summary')).toBeNull();
    },
  );

  it('loads related concours from the existing category endpoint and excludes the current record', async () => {
    api.list.mockReturnValue(
      of(page([record, { ...record, id: 8, slug: 'related', name_fr: 'Autre concours' }])),
    );
    const harness = await RouterTestingHarness.create('/concours/test-concours');
    expect(api.list).toHaveBeenCalledWith('concours', {
      category_id: record.category_id,
      per_page: 4,
    });
    const related = harness.routeNativeElement!.querySelectorAll('.related-link');
    expect(related.length).toBe(1);
    expect(related[0].getAttribute('href')).toBe('/concours/related');
  });

  it('restores structured metadata after navigating between page sections', async () => {
    const harness = await RouterTestingHarness.create('/concours/test-concours');
    TestBed.inject(Seo).beginPage('/concours/test-concours#past-papers');
    expect(document.querySelector('#structured-data')).toBeNull();
    await harness.navigateByUrl('/concours/test-concours#past-papers');
    expect(JSON.parse(document.querySelector('#structured-data')!.textContent!)['@type']).toBe(
      'BreadcrumbList',
    );
    expect(document.querySelector<HTMLLinkElement>('link[rel="canonical"]')?.href).toBe(
      'https://maroquiz.com/concours/test-concours',
    );
  });

  it('keeps related-concours failures separate from the permanent page and supports retry', async () => {
    api.list.mockReturnValueOnce(throwError(() => ({ status: 503 }))).mockReturnValue(of(page([])));
    const harness = await RouterTestingHarness.create('/concours/test-concours');
    expect(harness.routeNativeElement!.querySelector('h1')?.textContent).toContain(record.name_fr);
    expect(response.status).toBe(200);
    expect(
      harness.routeNativeElement!.querySelector('#related-concours-title')?.parentElement
        ?.textContent,
    ).toContain(en.concours.retry);
    (
      harness
        .routeNativeElement!.querySelector('#related-concours-title')
        ?.parentElement?.querySelector('button') as HTMLButtonElement
    ).click();
    harness.detectChanges();
    expect(
      harness.routeNativeElement!.querySelector('#related-concours-title')?.parentElement
        ?.textContent,
    ).toContain(en.concoursUi.relatedEmpty);
  });
});

describe('concours API adapter', () => {
  beforeEach(() =>
    TestBed.configureTestingModule({
      providers: [provideHttpClient(), provideHttpClientTesting()],
    }),
  );
  afterEach(() => TestBed.inject(HttpTestingController).verify());

  it('collects every reference page and encodes search parameters', () => {
    const api = TestBed.inject(ConcoursApi);
    const http = TestBed.inject(HttpTestingController);
    let values: DirectoryRecord[] = [];
    api.references('categories', true).subscribe((items) => (values = items));
    const first = http.expectOne((request) =>
      request.url.endsWith('/admin/concours-directory/categories'),
    );
    expect(first.request.params.get('per_page')).toBe('100');
    first.flush(page([category], 1, 2));
    const next = http.expectOne((request) => request.params.get('page') === '2');
    next.flush(page([{ ...category, id: 2 }], 2, 2));
    expect(values.map((value) => value.id)).toEqual([1, 2]);
    api.list('concours', { q: 'a&b', category_id: 1 }).subscribe();
    const list = http.expectOne((request) => request.url.endsWith('/public/concours'));
    expect(list.request.params.get('q')).toBe('a&b');
    list.flush(page());
  });
});

describe('server and browser API routing', () => {
  beforeEach(() =>
    TestBed.configureTestingModule({
      providers: [provideHttpClient(), provideHttpClientTesting()],
    }),
  );
  afterEach(() => TestBed.inject(HttpTestingController).verify());

  it('keeps the public browser address and preserves the production default', () => {
    expect(TestBed.inject(API_BASE_URL)).toBe(environment.apiUrl);
    expect(serverApi('https://api.maroquiz.com/api/v1')).toEqual({
      baseUrl: 'https://api.maroquiz.com/api/v1',
      originMap: {},
    });
  });

  it('uses the Docker address only through a server override and maps hydration to the browser origin', () => {
    const config = serverApi('http://localhost:8000/api/v1', 'http://nginx/api/v1/');
    expect(config.originMap).toEqual({ 'http://nginx': 'http://localhost:8000' });
    TestBed.overrideProvider(API_BASE_URL, { useValue: config.baseUrl });
    TestBed.inject(ConcoursApi).list('concours').subscribe();
    TestBed.inject(HttpTestingController)
      .expectOne('http://nginx/api/v1/public/concours')
      .flush(page([]));
  });

  it('rejects invalid server URLs and incompatible API paths', () => {
    for (const value of [
      'ftp://nginx/api/v1',
      'http://user:pass@nginx/api/v1',
      'http://nginx/another-api',
      'http://nginx/api/v1?token=example',
    ]) {
      expect(() => serverApi('http://localhost:8000/api/v1', value)).toThrow();
    }
  });
});

describe('concours admin editor', () => {
  const api = {
    wizardDetails: vi.fn(() => of({ data: { advice_fr: null, advice_ar: null } })),
    list: vi.fn(),
    references: vi.fn(),
    save: vi.fn(),
    delete: vi.fn(),
    savePreparationOption: vi.fn(),
    qcmCandidates: vi.fn(() =>
      of({ data: { items: [], meta: { current_page: 1, last_page: 1, per_page: 15, total: 0 } } }),
    ),
    qcmLinks: vi.fn(() =>
      of({ data: { items: [], meta: { current_page: 1, last_page: 1, per_page: 15, total: 0 } } }),
    ),
  };
  beforeEach(() => {
    api.list.mockReturnValue(of(page([category])));
    api.references.mockReturnValue(of([category]));
    api.save.mockReset().mockReturnValue(of({ data: category }));
    api.savePreparationOption.mockReset().mockReturnValue(of({ data: [] }));
    TestBed.configureTestingModule({
      imports: [
        AdminConcoursDirectory,
        TranslocoTestingModule.forRoot({
          langs: { en, fr, ar },
          preloadLangs: true,
          translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en' },
        }),
      ],
      providers: [
        { provide: ConcoursApi, useValue: api },
        { provide: ActivatedRoute, useValue: { data: of({ directoryKind: 'categories' }) } },
      ],
    });
  });

  it('saves category edits without sending unrelated entity fields', () => {
    const fixture = TestBed.createComponent(AdminConcoursDirectory);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.editor.nativeElement.showModal = vi.fn();
    component.editor.nativeElement.close = vi.fn();
    component.open(category);
    component.form.controls.name_fr.setValue('Nouveau nom');
    component.save();
    expect(api.save).toHaveBeenCalledWith(
      'categories',
      expect.objectContaining({ parent_id: null, name_fr: 'Nouveau nom' }),
      category.id,
    );
    expect(api.save.mock.calls[0][1]).not.toHaveProperty('institution_id');
    expect(component.success()).toContain('saved');
  });

  it('keeps server validation errors visible inside the editor', () => {
    api.save.mockReturnValue(
      throwError(() => ({
        error: {
          message: 'Validation failed.',
          errors: { parent_id: ['A category cannot be its own ancestor.'] },
        },
      })),
    );
    const fixture = TestBed.createComponent(AdminConcoursDirectory);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.editor.nativeElement.showModal = vi.fn();
    component.editor.nativeElement.close = vi.fn();
    component.open(category);
    component.save();
    fixture.detectChanges();
    expect(component.fieldErrors()['parent_id'][0]).toContain('ancestor');
    expect(component.editor.nativeElement.close).not.toHaveBeenCalled();
    expect(component.saving()).toBe(false);
  });

  it('manages optional preparation options independently of category and session edits', () => {
    const fixture = TestBed.createComponent(AdminConcoursDirectory);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.editor.nativeElement.showModal = vi.fn();
    component.kind.set('concours');
    component.open({ ...record, session_year: 2027 });
    component.optionForm.patchValue({
      name_fr: 'Collège',
      name_en: 'Middle school',
      name_ar: 'إعدادي',
    });
    component.saveOption();
    expect(api.savePreparationOption).toHaveBeenCalledWith(
      record.id,
      expect.objectContaining({ name_fr: 'Collège', parent_id: null, is_active: true }),
      undefined,
    );
    expect(api.save).not.toHaveBeenCalled();
    expect(component.form.controls.session_year.value).toBe(2027);
  });
});

describe('session policy admin preview', () => {
  const annual = {
    session_year: 2026,
    session_policy: 'annual' as const,
    session_rollover_on: '2027-09-01',
  };
  for (const [date, year] of [
    ['2027-01-01', 2026],
    ['2027-08-31', 2026],
    ['2027-09-01', 2027],
    ['2028-08-31', 2027],
    ['2028-09-01', 2028],
  ] as const) {
    it(`advances at the configured boundary for ${date}`, () => {
      expect(sessionYearPreview(annual, date)).toBe(year);
    });
  }
  it('prioritizes an override and resumes the policy after it is cleared', () => {
    expect(sessionYearPreview({ ...annual, session_year_override: 2025 }, '2028-09-01')).toBe(2025);
    expect(sessionYearPreview({ ...annual, session_year_override: null }, '2028-09-01')).toBe(2028);
  });
  it('retains a manual year and leaves unknown years empty', () => {
    expect(sessionYearPreview({ session_year: 2026, session_policy: 'manual' }, '2028-01-01')).toBe(
      2026,
    );
    expect(sessionYearPreview({}, '2028-01-01')).toBeNull();
  });
});
