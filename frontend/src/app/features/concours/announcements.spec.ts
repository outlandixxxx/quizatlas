import { AnnouncementCard } from './components/announcement-card';
import { RESPONSE_INIT } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { RouterTestingHarness } from '@angular/router/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, throwError } from 'rxjs';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';
import { ConcoursAnnouncementsApi } from '../../core/services/concours-announcements-api';
import { ConcoursApi } from '../../core/services/concours-api';
import { ConcoursAnnouncement, announcementText } from '../../core/models/concours-announcement';
import { LanguageService } from '../../core/services/language';
import { Seo } from '../../core/services/seo';
import { canonicalUrl } from '../../core/seo/urls';
import { AnnouncementDetail } from './announcement-detail';
import { ConcoursOverview } from './concours-overview';
import { ExamPdfApi } from '../user/services/exam-pdf.api';
import { AnnouncementList } from './components/announcement-list';
import { PdfResourceCard } from './components/pdf-resource-card';
import { ConcoursCard } from './components/concours-card';
import { ConcoursPdf } from '../../core/models/concours-pdf';
import { environment } from '../../../environments/environment';
import { AdminConcoursAnnouncements } from '../admin/concours-announcements/concours-announcements';

const definition = {
  id: 1,
  slug: 'concours-test',
  name_fr: 'Concours de test',
  name_ar: 'مباراة تجريبية',
  is_active: true,
};
const pdf: ConcoursPdf = {
  id: 9,
  title: 'Annonce officielle',
  document_type: 'official_announcement',
  year: 2026,
  specialty: null,
  file_size: '12 KB',
  source_url: null,
  attribution: 'Institut de test',
  available: true,
  view_path: '/public/concours-pdfs/9/view',
  download_path: '/public/concours-pdfs/9/download',
};
const record: ConcoursAnnouncement = {
  official_pdf: pdf,
  id: 2,
  concours_id: 1,
  concours: definition,
  institution_id: null,
  institution: null,
  slug: 'session-test',
  title_fr: 'Session de test',
  title_ar: 'إعلان تجريبي',
  description_fr: 'Description française.',
  description_ar: 'وصف تجريبي.',
  eligibility_fr: 'Diplôme requis',
  eligibility_ar: null,
  required_documents_fr: null,
  required_documents_ar: null,
  specialties: ['Informatique'],
  regions: ['Rabat'],
  positions: 12,
  official_publication_date: '2026-10-01',
  registration_opens_on: '2026-10-15',
  registration_deadline: '2026-10-30',
  examination_date: null,
  application_url: 'https://institution.example.test/apply',
  official_source_url: 'https://institution.example.test/notice',
  registration_status: 'open',
  official_decision: null,
  verification_status: 'verified',
  publication_status: 'published',
  verified_at: '2026-10-24T12:00:00Z',
  published_at: '2026-10-24T13:00:00Z',
  version: 3,
};
const page = (items: ConcoursAnnouncement[] = [record]) => ({
  success: true,
  message: 'OK',
  data: { items, meta: { current_page: 1, last_page: 1, per_page: 12, total: items.length } },
});
const translations = () =>
  TranslocoTestingModule.forRoot({
    langs: { en, fr, ar },
    preloadLangs: true,
    translocoConfig: {
      availableLangs: ['en', 'fr', 'ar'],
      defaultLang: 'en',
      reRenderOnLangChange: true,
    },
  });

describe('public announcements', () => {
  const api = { list: vi.fn(), show: vi.fn() };
  const directoryApi = { show: vi.fn() };
  const response = { status: 200 };
  beforeEach(() => {
    directoryApi.show.mockReset().mockReturnValue(
      of({
        data: {
          ...definition,
          displayed_session_year: 2026,
          current_announcements: [{ ...record, session_year: 2026 }],
        },
      }),
    );
    api.list.mockReset().mockReturnValue(of(page()));
    api.show.mockReset().mockReturnValue(of({ data: record }));
    response.status = 200;
    TestBed.configureTestingModule({
      imports: [translations()],
      providers: [
        provideHttpClient(),
        provideRouter([
          { path: 'concours/annonces/:slug', component: AnnouncementDetail },
          { path: 'concours/:slug', component: ConcoursOverview },
        ]),
        { provide: ConcoursAnnouncementsApi, useValue: api },
        { provide: ConcoursApi, useValue: directoryApi },
        { provide: RESPONSE_INIT, useValue: response },
      ],
    });
    TestBed.inject(LanguageService).setLanguage('en');
    TestBed.inject(Seo).beginPage('/concours/annonces/session-test');
  });
  it.each(['fr', 'en', 'ar'] as const)(
    'keeps %s Wadifa credit short on cards and licence discreet on details',
    async (lang) => {
      const credit: NonNullable<ConcoursAnnouncement['source_attribution']> = {
        provider: 'wadifa-info',
        name: 'Wadifa Info',
        url: 'https://www.wadifa-info.com/fr/146623/fixture',
        url_ar: 'https://www.wadifa-info.com/ar/146623/fixture',
        license: 'CC BY 4.0',
        license_url: 'https://creativecommons.org/licenses/by/4.0/',
        changes: 'selected_verified_adapted',
      };
      TestBed.inject(LanguageService).setLanguage(lang);
      const item = { ...record, source_attribution: credit };
      const card = TestBed.createComponent(AnnouncementCard);
      card.componentRef.setInput('record', item);
      card.detectChanges();
      const cardDom: HTMLElement = card.nativeElement;
      const link = cardDom.querySelector('app-announcement-source a')!;
      expect(link.getAttribute('href')).toBe(lang === 'ar' ? credit.url_ar : credit.url);
      expect(link.getAttribute('rel')).not.toContain('nofollow');
      expect(cardDom.querySelector('app-announcement-source')?.textContent).toContain(
        { fr, en, ar }[lang].announcements.attribution.source,
      );
      expect(cardDom.textContent).not.toContain('CC BY 4.0');
      expect(cardDom.textContent).not.toContain(
        { fr, en, ar }[lang].announcements.attribution.changes,
      );
      api.show.mockReturnValue(of({ data: item }));
      const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
      const detail = harness.routeNativeElement!;
      expect(detail.querySelector('app-announcement-source a')?.getAttribute('href')).toBe(
        lang === 'ar' ? credit.url_ar : credit.url,
      );
      expect(detail.querySelector('.official-source a')?.getAttribute('href')).toBe(
        record.official_source_url,
      );
      expect(detail.querySelector('.official-source a')?.textContent).toContain(
        { fr, en, ar }[lang].announcements.attribution.officialNotice,
      );
      expect(detail.querySelector('.source-information a')?.getAttribute('href')).toBe(
        credit.license_url,
      );
      expect(detail.querySelector('.source-information')?.textContent).toContain(
        { fr, en, ar }[lang].announcements.attribution.changes,
      );
      expect(detail.querySelectorAll('.source-information')).toHaveLength(1);
      expect(document.documentElement.dir).toBe(lang === 'ar' ? 'rtl' : 'ltr');
    },
  );
  it('omits Wadifa credit and licence for unrelated announcements', async () => {
    const card = TestBed.createComponent(AnnouncementCard);
    card.componentRef.setInput('record', record);
    card.detectChanges();
    expect(card.nativeElement.querySelector('app-announcement-source')?.textContent.trim()).toBe(
      '',
    );
    const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
    expect(harness.routeNativeElement?.querySelector('.source-information')).toBeNull();
    expect(harness.routeNativeElement?.textContent).not.toContain('Wadifa Info');
  });
  it.each(['en', 'fr', 'ar'] as const)(
    'renders %s labels and independent editorial direction with complete SEO',
    async (lang) => {
      TestBed.inject(LanguageService).setLanguage(lang);
      const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
      const dom = harness.routeNativeElement!;
      const dictionary = { en, fr, ar }[lang];
      expect(dom.textContent).toContain(dictionary.announcements.statuses.open);
      expect(dom.querySelector('h1')?.getAttribute('lang')).toBe(lang === 'ar' ? 'ar' : 'fr');
      expect(dom.querySelector('h1')?.getAttribute('dir')).toBe(lang === 'ar' ? 'rtl' : 'ltr');
      expect(document.documentElement.dir).toBe(lang === 'ar' ? 'rtl' : 'ltr');
      expect(dom.querySelector('.registration-cta')?.getAttribute('href')).toBe(
        record.application_url,
      );
      expect(document.title).toContain(lang === 'ar' ? record.title_ar : record.title_fr);
      expect(document.querySelector('meta[name=description]')?.getAttribute('content')).toBe(
        lang === 'ar' ? record.description_ar : record.description_fr,
      );
      expect(document.querySelector('link[rel=canonical]')?.getAttribute('href')).toBe(
        'https://maroquiz.com/concours/annonces/session-test',
      );
      expect(document.querySelector('meta[property="og:title"]')?.getAttribute('content')).toBe(
        document.title,
      );
      const schema = JSON.parse(document.querySelector('#structured-data')!.textContent!);
      expect(schema['@type']).toBe('BreadcrumbList');
      expect(schema.itemListElement).toHaveLength(4);
    },
  );
  it('shows unknown deadlines without inventing dates or suggesting registration is open', async () => {
    api.show.mockReturnValue(
      of({
        data: {
          ...record,
          registration_status: 'unknown',
          registration_deadline: null,
          registration_opens_on: null,
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
    expect(harness.routeNativeElement?.querySelector('.overview-metadata time')).toBeNull();
    expect(harness.routeNativeElement?.querySelector('.registration-cta')).toBeNull();
    expect(harness.routeNativeElement?.querySelector('.status-label')?.textContent).toContain(
      en.announcements.statuses.unknown,
    );
  });
  it.each(['upcoming', 'closed', 'postponed', 'cancelled', 'unknown'] as const)(
    'renders %s without an active registration CTA',
    async (status) => {
      api.show.mockReturnValue(of({ data: { ...record, registration_status: status } }));
      const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
      expect(harness.routeNativeElement?.querySelector('.status-label')?.textContent).toContain(
        en.announcements.statuses[status],
      );
      expect(harness.routeNativeElement?.querySelector('.registration-cta')).toBeNull();
    },
  );
  it('labels Arabic-only fallback within an English interface and renders hostile markup as text', async () => {
    api.show.mockReturnValue(
      of({
        data: {
          ...record,
          title_fr: null,
          title_ar: '<img src=x onerror=alert(1)>',
          description_fr: null,
          description_ar: '<script>alert(1)</script>',
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
    expect(harness.routeNativeElement?.querySelector('h1 img')).toBeNull();
    expect(harness.routeNativeElement?.querySelector('.editorial-description script')).toBeNull();
    expect(harness.routeNativeElement?.querySelector('h1')?.getAttribute('lang')).toBe('ar');
    expect(document.documentElement.lang).toBe('en');
    expect(announcementText(record, 'ar', 'eligibility')).toEqual({
      lang: 'fr',
      text: 'Diplôme requis',
    });
  });
  it.each([404, 503])(
    'returns %s and noindex for inaccessible announcement details',
    async (status) => {
      api.show.mockReturnValue(throwError(() => ({ status })));
      const harness = await RouterTestingHarness.create('/concours/annonces/missing');
      expect(response.status).toBe(status);
      expect(document.querySelector('meta[name=robots]')?.getAttribute('content')).toContain(
        'noindex',
      );
      expect(harness.routeNativeElement?.querySelector('app-public-page-error')).not.toBeNull();
    },
  );
  it('recovers a failed announcement detail on retry', async () => {
    api.show
      .mockReturnValueOnce(throwError(() => ({ status: 503 })))
      .mockReturnValue(of({ data: record }));
    const harness = await RouterTestingHarness.create();
    const component = await harness.navigateByUrl(
      '/concours/annonces/session-test',
      AnnouncementDetail,
    );
    component.retry();
    harness.detectChanges();
    await harness.fixture.whenStable();
    expect(response.status).toBe(200);
    expect(component.record()?.id).toBe(record.id);
  });
  it('loads announcement cards using concours and status filters', async () => {
    const fixture = TestBed.createComponent(AnnouncementList);
    fixture.componentRef.setInput('filters', {
      concours_id: 1,
      registration_status: 'open',
      q: 'test',
    });
    fixture.detectChanges();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(api.list).toHaveBeenCalledWith(
      expect.objectContaining({ concours_id: 1, registration_status: 'open', q: 'test' }),
    );
    expect(fixture.nativeElement.querySelector('app-announcement-card').textContent).toContain(
      record.title_fr,
    );
    expect(
      fixture.nativeElement.querySelector('time[datetime="2026-10-30"]').getAttribute('datetime'),
    ).toBe('2026-10-30');
  });
  it('presents the official PDF without detailed empty or legacy metadata sections', async () => {
    const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
    const dom = harness.routeNativeElement!;
    expect(dom.querySelector('app-concours-pdf')).not.toBeNull();
    expect(dom.querySelector(`a[href="${environment.apiUrl}${pdf.view_path}"]`)).not.toBeNull();
    expect(dom.querySelector('#eligibility-title')).toBeNull();
    expect(dom.querySelector('#required_documents-title')).toBeNull();
    expect(dom.textContent).not.toContain('Number of positions');
    expect(dom.textContent).not.toContain('Diplôme requis');
  });
  it('keeps permanent paper, guide, specific QCM and related QCM sections separate', async () => {
    directoryApi.show.mockReturnValue(
      of({
        data: {
          ...definition,
          displayed_session_year: 2026,
          current_announcements: [{ ...record, session_year: 2026 }],
          resources: [
            { ...pdf, id: 10, title: 'Sujet 2023', document_type: 'previous_exam', year: 2023 },
            { ...pdf, id: 11, title: 'Corrigé 2024', document_type: 'correction', year: 2024 },
            { ...pdf, id: 12, title: 'Méthode', document_type: 'preparation_guide', year: null },
          ],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/concours-test');
    const dom = harness.routeNativeElement!;
    const text = dom.textContent!;
    expect(text.indexOf('Corrigé 2024')).toBeLessThan(text.indexOf('Sujet 2023'));
    expect(dom.querySelector('.featured-announcement app-announcement-card')).not.toBeNull();
    expect(dom.querySelector('#guides-title')?.parentElement?.parentElement?.textContent).toContain(
      'Méthode',
    );
    expect(
      dom.querySelector('#specific-qcm-title')?.parentElement?.parentElement?.querySelector('a'),
    ).toBeNull();
    expect(
      dom.querySelector('#related-qcm-title')?.parentElement?.parentElement?.querySelector('a'),
    ).toBeNull();
  });

  it('labels expired announcements as historical and shows only their verified session data', async () => {
    directoryApi.show.mockReturnValue(
      of({
        data: {
          ...definition,
          displayed_session_year: 2025,
          current_announcements: [{ ...record, registration_status: 'closed', session_year: 2025 }],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/concours-test');
    const dom = harness.routeNativeElement!;
    expect(dom.querySelector('.historical-notice')?.textContent).toContain(
      en.concoursUi.historicalNotice,
    );
    expect(dom.querySelector('.status-pill')?.getAttribute('data-status')).toBe('closed');
    expect(dom.querySelector('.session-label')?.textContent).toContain('2025');
    expect(dom.querySelector('.session-summary time')?.getAttribute('datetime')).toBe(
      record.registration_deadline,
    );
    expect(dom.querySelector('.registration-cta')).toBeNull();
    expect(dom.querySelector('h1')?.textContent?.trim()).toBe(definition.name_fr + ' 2025');
  });

  for (const lang of ['fr', 'en', 'ar']) {
    it(`keeps the displayed session and honest empty state independent of old notices in ${lang}`, async () => {
      TestBed.inject(LanguageService).setLanguage(lang as 'fr' | 'en' | 'ar');
      directoryApi.show.mockReturnValue(
        of({
          data: {
            ...definition,
            displayed_session_year: 2027,
            current_announcements: [],
            resources: [
              { ...pdf, document_type: 'previous_exam', title: 'Historical paper', year: 2024 },
            ],
          },
        }),
      );
      api.list.mockReturnValue(of(page([{ ...record, session_year: 2026 }])));
      const harness = await RouterTestingHarness.create('/concours/concours-test');
      const dom = harness.routeNativeElement!;
      expect(dom.querySelector('h1')?.textContent).toContain('2027');
      expect(dom.querySelector('#official-announcement app-announcement-card')).toBeNull();
      expect(dom.querySelector('#official-announcement app-concours-notice')).not.toBeNull();
      expect(dom.querySelector('.session-summary')).toBeNull();
      expect(dom.querySelector('#past-papers')?.textContent).toContain('Historical paper');
      expect(document.querySelector('link[rel=canonical]')?.getAttribute('href')).toBe(
        'https://maroquiz.com/concours/concours-test',
      );
      expect(document.title).toContain('2027');
      expect(api.list).toHaveBeenCalledWith(expect.objectContaining({ session_scope: 'history' }));
    });
  }

  it('distinguishes an archived session from a session that has never been announced', async () => {
    directoryApi.show.mockReturnValue(
      of({
        data: {
          ...definition,
          displayed_session_year: 2026,
          session_announcement_state: 'archived',
          current_announcements: [],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/concours-test');
    const section = harness.routeNativeElement!.querySelector('#official-announcement')!;
    expect(section.textContent).toContain(en.announcements.statuses.archived);
    expect(section.textContent).toContain(en.concoursSessions.archivedBody);
    expect(section.textContent).not.toContain(en.concoursUi.notAnnounced);
    expect(section.querySelector('app-announcement-card')).toBeNull();
  });

  it('renders simultaneous current notices without using one notice for combined statistics', async () => {
    directoryApi.show.mockReturnValue(
      of({
        data: {
          ...definition,
          displayed_session_year: 2027,
          current_announcements: [
            { ...record, session_year: 2027 },
            { ...record, id: 3, title_fr: 'Second official notice', session_year: 2027 },
            { ...record, id: 4, session_year: 2026 },
            { ...record, id: 5, session_year: 2027, superseded_at: '2026-10-25T12:00:00Z' },
          ],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/concours-test?ann_page=1');
    const dom = harness.routeNativeElement!;
    expect(dom.querySelectorAll('#official-announcement app-announcement-card')).toHaveLength(2);
    expect(dom.querySelector('.session-summary')).toBeNull();
    expect(
      dom.querySelectorAll(
        '#official-announcement a[href="https://institution.example.test/notice"]',
      ),
    ).toHaveLength(2);
  });

  it('labels superseded notices and suppresses their application action while retaining the PDF', async () => {
    api.show.mockReturnValue(
      of({
        data: {
          ...record,
          superseded_at: '2026-10-25T12:00:00Z',
          announcement_status: 'superseded',
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/annonces/session-test');
    const dom = harness.routeNativeElement!;
    expect(dom.querySelector('.status-label')?.getAttribute('data-status')).toBe('superseded');
    expect(dom.querySelector('.registration-cta')).toBeNull();
    expect(dom.querySelector('app-concours-pdf')).not.toBeNull();
  });

  it('uses sourced announcement statuses on cards and keeps unknown status neutral', async () => {
    const fixture = TestBed.createComponent(ConcoursCard);
    fixture.componentRef.setInput('record', { ...definition, type: 'recruitment' });
    fixture.componentRef.setInput('announcement', { ...record, registration_status: 'closed' });
    fixture.detectChanges();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.notice-badge')?.getAttribute('data-status')).toBe(
      'closed',
    );
    expect(fixture.nativeElement.textContent).toContain(en.announcements.statuses.closed);
    fixture.componentRef.setInput('announcement', null);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.notice-badge')).toBeNull();
    expect(fixture.nativeElement.querySelector('.type-pill')).toBeNull();
    expect(fixture.nativeElement.textContent).not.toContain(en.concoursUi.notAnnounced);
  });
  it('keeps empty and retryable list-error states distinct', async () => {
    api.list.mockReturnValueOnce(throwError(() => ({ status: 503 }))).mockReturnValue(of(page([])));
    const fixture = TestBed.createComponent(AnnouncementList);
    fixture.detectChanges();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(fixture.nativeElement.textContent).toContain(en.announcements.loadError);
    fixture.componentInstance.retry();
    fixture.detectChanges();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(fixture.nativeElement.textContent).toContain(en.announcements.emptyTitle);
  });
  it('canonicalizes registration filters and preserves crawlable announcement pagination', () => {
    expect(canonicalUrl('/concours?registration_status=open&ann_page=2')).toBe(
      'https://maroquiz.com/concours',
    );
    expect(canonicalUrl('/concours?ann_page=2')).toBe('https://maroquiz.com/concours?ann_page=2');
    expect(canonicalUrl('/concours/concours-test?ann_page=3')).toBe(
      'https://maroquiz.com/concours/concours-test?ann_page=3',
    );
  });
  it('provides matching translation keys for every announcement state and interface message', () => {
    const keys = (value: object, prefix = ''): string[] =>
      Object.entries(value)
        .flatMap(([key, val]) =>
          typeof val === 'string' ? [prefix + key] : keys(val, prefix + key + '.'),
        )
        .sort();
    expect(keys(fr.announcements)).toEqual(keys(en.announcements));
    expect(keys(ar.announcements)).toEqual(keys(en.announcements));
  });
});

describe('announcement admin workflow', () => {
  const api = {
    list: vi.fn(),
    save: vi.fn(),
    transition: vi.fn(),
    revisions: vi.fn(),
    adminShow: vi.fn(),
  };
  beforeEach(() => {
    api.list.mockReturnValue(of(page()));
    api.save.mockReset().mockReturnValue(of({ data: { ...record, publication_status: 'draft' } }));
    api.transition.mockReset().mockReturnValue(of({ data: record }));
    api.revisions.mockReturnValue(of({ data: { items: [], meta: page().data.meta } }));
    TestBed.configureTestingModule({
      imports: [AdminConcoursAnnouncements],
      providers: [
        provideRouter([]),
        { provide: ConcoursAnnouncementsApi, useValue: api },
        { provide: ConcoursApi, useValue: { references: () => of([definition]) } },
      ],
    });
  });
  function editor() {
    const fixture = TestBed.createComponent(AdminConcoursAnnouncements);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.editor.nativeElement.showModal = vi.fn();
    component.editor.nativeElement.close = vi.fn();
    component.confirmation.nativeElement.showModal = vi.fn();
    component.confirmation.nativeElement.close = vi.fn();
    component.open({ ...record, verification_status: 'unverified', publication_status: 'draft' });
    return { fixture, component };
  }
  it('requires a source and distribution confirmation before saving and publishing', () => {
    const { component } = editor();
    api.save.mockClear();
    component.save(true);
    expect(api.save).not.toHaveBeenCalled();
    expect(api.transition).not.toHaveBeenCalled();
    component.sourceChecked = true;
    component.save(true);
    expect(api.transition).toHaveBeenCalledWith(
      expect.objectContaining({ version: 3 }),
      'verify-publish',
      true,
    );
  });
  it('saves editorial fields with the version without sending forged lifecycle state', () => {
    const { component } = editor();
    component.form.controls.title_fr.setValue('Titre corrigé');
    component.save();
    expect(api.save).toHaveBeenCalledWith(
      expect.objectContaining({
        version: 3,
        title_fr: 'Titre corrigé',
        registration_deadline: '2026-10-30',
      }),
      record.id,
    );
    expect(api.save.mock.calls[0][0]).not.toHaveProperty('verification_status');
    expect(api.save.mock.calls[0][0]).not.toHaveProperty('publication_status');
  });
  it('uses the configured session for editable titles without inferring it from registration dates', () => {
    const { component } = editor();
    component.open();
    component.concours.set([{ ...definition, institution_id: 8, displayed_session_year: 2027 }]);
    component.form.controls.concours_id.setValue(1);
    component.selectConcours();
    expect(component.form.controls.institution_id.value).toBe(8);
    component.form.controls.registration_opens_on.setValue('2026-12-20');
    component.generateTitle();
    expect(component.form.controls.title_fr.value).toBe('Concours de test — 2027');
    component.form.controls.title_fr.setValue('Mon titre');
    component.generateTitle();
    expect(component.form.controls.title_fr.value).toBe('Mon titre');
  });
  it('uploads a PDF and publishes through one confirmed creation action', () => {
    const { component } = editor();
    component.open();
    component.form.controls.concours_id.setValue(1);
    const file = new File(['%PDF-1.7\nfixture\n%%EOF\n'], 'notice.pdf', {
      type: 'application/pdf',
    });
    component.onFile({ target: { files: [file], value: '' } } as unknown as Event);
    component.sourceChecked = true;
    component.save(true);
    const body = api.save.mock.calls[0][0] as FormData;
    expect(body).toBeInstanceOf(FormData);
    expect(body.get('file')).toBe(file);
    expect(body.has('eligibility_fr')).toBe(false);
    expect(body.has('description_fr')).toBe(false);
    expect(api.transition).toHaveBeenCalledWith(expect.anything(), 'verify-publish', true);
  });
  it('keeps unsaved content when a stale update is rejected', () => {
    api.save.mockReturnValue(throwError(() => ({ status: 409 })));
    const { component } = editor();
    component.form.controls.title_fr.setValue('My local edit');
    component.save();
    expect(component.formError()).toContain('Reload');
    expect(component.form.controls.title_fr.value).toBe('My local edit');
    expect(component.editor.nativeElement.close).not.toHaveBeenCalled();
  });
});

describe('announcement API version contract', () => {
  beforeEach(() =>
    TestBed.configureTestingModule({
      providers: [provideHttpClient(), provideHttpClientTesting()],
    }),
  );
  afterEach(() => TestBed.inject(HttpTestingController).verify());
  it('uses parsed multipart POST with method override for replacement uploads', () => {
    const api = TestBed.inject(ConcoursAnnouncementsApi);
    const http = TestBed.inject(HttpTestingController);
    const body = new FormData();
    body.set('file', new Blob(['PDF'], { type: 'application/pdf' }), 'notice.pdf');
    body.set('version', '3');
    api.save(body, 2).subscribe();
    const request = http.expectOne((req) => req.url.endsWith('/admin/concours-announcements/2'));
    expect(request.request.method).toBe('POST');
    expect(request.request.body.get('_method')).toBe('PUT');
    request.flush({ data: record });
  });
  it('uses authenticated HTTP blob fetching for the legacy library', () => {
    TestBed.inject(ExamPdfApi).view(4).subscribe();
    const request = TestBed.inject(HttpTestingController).expectOne((req) =>
      req.url.endsWith('/exam-pdfs/4/view'),
    );
    expect(request.request.responseType).toBe('blob');
    request.flush(new Blob(['PDF'], { type: 'application/pdf' }));
  });
  it('passes versions to explicit publication and keeps search text encoded', () => {
    const api = TestBed.inject(ConcoursAnnouncementsApi);
    const http = TestBed.inject(HttpTestingController);
    api.transition(record, 'publish').subscribe();
    const request = http.expectOne((req) =>
      req.url.endsWith('/admin/concours-announcements/2/publish'),
    );
    expect(request.request.body).toEqual({ version: 3 });
    request.flush({ data: record });
    api.list({ q: 'test&a', registration_status: 'open' }).subscribe();
    const list = http.expectOne((req) => req.url.endsWith('/public/concours-announcements'));
    expect(list.request.params.get('q')).toBe('test&a');
    expect(list.request.params.get('registration_status')).toBe('open');
    list.flush(page());
  });
});

describe('public PDF resource presentation', () => {
  beforeEach(() => TestBed.configureTestingModule({ imports: [translations()] }));
  it('opens public preview and download links without credentials or application tokens', () => {
    const fixture = TestBed.createComponent(PdfResourceCard);
    fixture.componentRef.setInput('document', pdf);
    fixture.detectChanges();
    const links = [
      ...fixture.nativeElement.querySelectorAll('.pdf-actions a'),
    ] as HTMLAnchorElement[];
    expect(links.map((link) => link.getAttribute('href'))).toEqual([
      environment.apiUrl + pdf.view_path,
      environment.apiUrl + pdf.download_path,
    ]);
    expect(
      links.every((link) => link.rel.includes('noopener') && !link.href.includes('token=')),
    ).toBe(true);
  });
  it('shows an unavailable state instead of a broken preview/download button', () => {
    const fixture = TestBed.createComponent(PdfResourceCard);
    fixture.componentRef.setInput('document', { ...pdf, available: false });
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.pdf-actions')).toBeNull();
    expect(fixture.nativeElement.textContent).toContain(en.concoursResources.unavailable);
  });
  it('provides resource translations in French and Arabic', () => {
    expect(Object.keys(fr.concoursResources).sort()).toEqual(
      Object.keys(en.concoursResources).sort(),
    );
    expect(Object.keys(ar.concoursResources).sort()).toEqual(
      Object.keys(en.concoursResources).sort(),
    );
  });
});
