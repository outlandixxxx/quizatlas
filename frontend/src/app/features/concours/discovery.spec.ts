import { TranslocoTestingModule } from '@jsverse/transloco';
import fr from '../../../assets/i18n/fr.json';
import en from '../../../assets/i18n/en.json';
import ar from '../../../assets/i18n/ar.json';
import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { Subject, of, throwError } from 'rxjs';
import { AdminConcoursDiscoveries } from '../admin/concours-discoveries/concours-discoveries';
import { ConcoursDiscoveryApi } from '../../core/services/concours-discovery-api';
import { ConcoursApi } from '../../core/services/concours-api';
import { ConcoursAnnouncementsApi } from '../../core/services/concours-announcements-api';
import { AdminConcoursAnnouncements } from '../admin/concours-announcements/concours-announcements';
import { ConcoursDiscovery } from '../../core/models/concours-discovery';
import { provideHttpClient } from '@angular/common/http';
import { provideHttpClientTesting, HttpTestingController } from '@angular/common/http/testing';
import { API_BASE_URL } from '../../core/constants/api-base-url';

const meta = { current_page: 1, last_page: 1, total: 1, per_page: 15 };
const source: any = {
  id: 1,
  key: 'official',
  name: 'Official source',
  official_url: 'https://www.emploi-public.ma/',
  listing_url: 'https://www.emploi-public.ma/fr/',
  collection_method: 'manual',
  permission_status: 'unknown',
  permission_evidence: null,
  permission_checked_at: null,
  enabled: false,
  check_interval_minutes: 720,
  version: 1,
  automated_ready: false,
  last_success_at: null,
  last_error: null,
};
const discovery: ConcoursDiscovery = {
  id: 5,
  source_id: 1,
  source,
  source_identifier: null,
  title: 'Original official title',
  official_url: 'https://www.emploi-public.ma/notice',
  publication_date: '2026-10-01',
  application_deadline: '2026-11-01',
  institution: 'Declared institution',
  session_year: null,
  grade: 'Grade A',
  specialty: null,
  status: 'pending',
  version: 3,
  announcement_id: null,
  review_note: null,
  first_seen_at: '2026-10-26T12:00:00Z',
  last_seen_at: '2026-10-26T12:00:00Z',
};
const course: any = {
  id: 7,
  name_fr: 'Permanent concours',
  name_ar: 'تجربة',
  slug: 'permanent',
  institution_id: 2,
  displayed_session_year: 2026,
  preparation_options: [
    { id: 10, name_fr: 'Grade A', concours_id: 7, parent_id: null, is_active: true },
  ],
};

describe('concours discovery admin review', () => {
  const api = {
    list: vi.fn(),
    sources: vi.fn(),
    add: vi.fn(),
    review: vi.fn(),
    show: vi.fn(),
    revisions: vi.fn(),
    saveSource: vi.fn(),
    matches: vi.fn(),
    decideMatch: vi.fn(),
  };
  beforeEach(() => {
    for (const mock of Object.values(api)) mock.mockReset();
    api.list.mockReturnValue(of({ data: { items: [discovery], meta } }));
    api.sources.mockReturnValue(of({ data: [source] }));
    api.revisions.mockReturnValue(of({ data: { items: [], meta } }));
    api.show.mockReturnValue(of({ data: { ...discovery, version: 4 } }));
    api.review.mockReturnValue(
      of({ data: { ...discovery, status: 'approved', announcement_id: 8, version: 4 } }),
    );
    api.add.mockReturnValue(of({ data: discovery }));
    api.saveSource.mockReturnValue(of({ data: source }));
    api.matches.mockReturnValue(of({ data: [] }));
    api.decideMatch.mockReturnValue(of({ data: { ...discovery, version: 4 } }));
    TestBed.configureTestingModule({
      imports: [
        TranslocoTestingModule.forRoot({
          langs: { fr, en, ar },
          preloadLangs: true,
          translocoConfig: { availableLangs: ['fr', 'en', 'ar'], defaultLang: 'fr' },
        }),
      ],
      providers: [
        provideRouter([]),
        { provide: ConcoursDiscoveryApi, useValue: api },
        {
          provide: ConcoursApi,
          useValue: { references: (kind: string) => of(kind === 'concours' ? [course] : []) },
        },
      ],
    });
  });
  function setup() {
    const fixture = TestBed.createComponent(AdminConcoursDiscoveries);
    fixture.detectChanges();
    for (const dialog of fixture.nativeElement.querySelectorAll('dialog')) {
      dialog.showModal = vi.fn();
      dialog.close = vi.fn();
    }
    return { fixture, component: fixture.componentInstance };
  }
  it('shows provider facts and reported official link separately from verification', () => {
    const article = 'https://www.wadifa-info.com/fr/146623/fixture';
    const reported = 'https://www.emploi-public.ma/fixture';
    api.list.mockReturnValue(
      of({
        data: {
          items: [
            {
              ...discovery,
              official_url: null,
              source_article_url: article,
              institution: 'Bank Al-Maghrib',
              grade: 'Architecte',
              metadata_scope: 'facts_only',
              provider_metadata: {
                grade: 'Architecte',
                positions: 1,
                reported_official_url: reported,
                official_link_verified: false,
                attribution: { name: 'Wadifa Info', url: article },
              },
            },
          ],
          meta,
        },
      }),
    );
    const { fixture } = setup();
    const element: HTMLElement = fixture.nativeElement;
    expect(element.textContent).toContain('Bank Al-Maghrib');
    expect(element.textContent).toContain('Architecte');
    expect(element.textContent).toContain(fr.announcements.attribution.reportedNotice);
    const link = element.querySelector(`a[href="${reported}"]`)!;
    expect(link.textContent).toContain('non vérifié');
    expect(element.querySelector(`a[href="${article}"]`)).not.toBeNull();
  });
  it('renders original metadata and safe original links with a manual-source empty check state', () => {
    const { fixture } = setup();
    expect(fixture.nativeElement.textContent).toContain('Annonces détectées');
    expect(fixture.nativeElement.textContent).toContain('Original official title');
    const link = fixture.nativeElement.querySelector('tbody a');
    expect(link.getAttribute('href')).toBe(discovery.official_url);
    expect(link.getAttribute('rel')).toBe('noopener noreferrer');
    expect(fixture.nativeElement.textContent).toContain('Saisie manuelle disponible');
    expect(api.review).not.toHaveBeenCalled();
  });
  it('shows French and Arabic provider values safely and leaves verified editorial titles empty', () => {
    const item: ConcoursDiscovery = {
      ...discovery,
      metadata_scope: 'facts_only',
      provider_metadata: {
        provider_id: '1',
        employer: 'Établissement de test',
        grade: 'Poste de test',
        employer_fr: 'Établissement de test',
        grade_fr: 'Poste de test',
        employer_ar: 'مؤسسة اختبار',
        grade_ar: '<img src=x onerror=alert(1)>',
        arabic_status: 'available',
        positions: 2,
        reported_official_url: null,
        official_link_verified: false,
        attribution: {
          provider: 'wadifa-info',
          name: 'Wadifa Info',
          url: 'https://www.wadifa-info.com/fr/1/fixture',
          license: 'CC BY 4.0',
          license_url: 'https://creativecommons.org/licenses/by/4.0/',
          changes: 'selected_verified_adapted',
        },
      },
    };
    api.list.mockReturnValue(of({ data: { items: [item], meta } }));
    const { fixture, component } = setup();
    expect(fixture.nativeElement.textContent).toContain('مؤسسة اختبار');
    expect(fixture.nativeElement.textContent).toContain('<img src=x onerror=alert(1)>');
    expect(fixture.nativeElement.querySelector('.bilingual-provider img')).toBeNull();
    expect(
      fixture.nativeElement.querySelector('.bilingual-provider [lang=ar]').getAttribute('dir'),
    ).toBe('rtl');
    component.open(item);
    expect(component.reviewForm.controls.verified_title.value).toBe('');
    expect(component.reviewForm.controls.verified_title_ar.value).toBe('');
    expect(component.reviewForm.controls.verified_positions.value).toBeNull();
    expect(component.reviewForm.controls.registration_deadline.value).toBe('');
    expect(api.review).not.toHaveBeenCalled();
  });
  it('sends both explicitly checked titles and positions to a draft without inventing an opening date', () => {
    const item = {
      ...discovery,
      metadata_scope: 'facts_only' as const,
      candidate_category: 'employment' as const,
      candidate_type: 'opening' as const,
    };
    const { component } = setup();
    component.open(item);
    component.reviewForm.patchValue({
      concours_id: 7,
      verified_title: 'Titre de test vérifié',
      verified_title_ar: 'عنوان اختبار متحقق منه',
      verified_positions: 2,
      source_checked: true,
    });
    component.review('approve');
    expect(api.review).toHaveBeenCalledWith(
      item,
      expect.objectContaining({
        verified_title_fr: 'Titre de test vérifié',
        verified_title_ar: 'عنوان اختبار متحقق منه',
        positions: 2,
        action: 'approve',
      }),
    );
    expect(api.review.mock.calls[0][1]).not.toHaveProperty('registration_opens_on');
  });
  it('rejects an irrelevant candidate with a note while retaining source history and without claiming official verification', () => {
    const { component } = setup();
    component.open(discovery);
    component.reviewForm.patchValue({
      review_note: 'Hors périmètre éditorial',
      source_checked: false,
    });
    component.review('reject');
    expect(api.review).toHaveBeenCalledWith(discovery, {
      action: 'reject',
      review_note: 'Hors périmètre éditorial',
    });
  });
  it('sends source, date, institution and search filters to bounded server pagination', () => {
    const { component } = setup();
    component.filters = {
      q: 'original',
      institution: 'Ministry',
      source_id: '1',
      candidate_category: '',
      candidate_type: '',
      status: 'pending',
      from: '2026-10-01',
      to: '2026-10-26',
      deadline_from: '2026-11-01',
      deadline_to: '2026-11-30',
    };
    component.fetch(2);
    expect(api.list).toHaveBeenLastCalledWith({ ...component.filters, page: 2, per_page: 15 });
  });
  it('cancels stale search requests and drops stale results on errors', () => {
    const { component } = setup();
    const first = new Subject<any>(),
      second = new Subject<any>();
    api.list.mockReturnValueOnce(first).mockReturnValueOnce(second);
    component.fetch();
    component.fetch();
    first.next({ data: { items: [], meta } });
    second.error({ status: 503 });
    expect(component.data()).toBeNull();
    expect(component.error()).toContain('Chargement impossible');
  });
  it('requires explicit association and confirmation, never copies declared dates or the concours base year', () => {
    const { component } = setup();
    component.open(discovery);
    expect(component.reviewForm.controls.session_year.value).toBeNull();
    expect(component.reviewForm.controls.registration_deadline.value).toBe('');
    component.review('approve');
    expect(api.review).not.toHaveBeenCalled();
    component.reviewForm.controls.concours_id.setValue(7);
    component.changeConcours();
    component.reviewForm.controls.preparation_option_ids.setValue([10]);
    component.reviewForm.controls.source_checked.setValue(true);
    component.review('approve');
    expect(api.review).toHaveBeenCalledWith(
      discovery,
      expect.objectContaining({
        action: 'approve',
        concours_id: 7,
        preparation_option_ids: [10],
        session_year: null,
        official_publication_date: null,
        registration_deadline: null,
        source_checked: true,
      }),
    );
    expect(component.success()).toContain('Annonce liée');
  });
  it('clears confirmation and incompatible tracks when association changes', () => {
    const { component } = setup();
    component.open(discovery);
    component.reviewForm.patchValue({ preparation_option_ids: [10], source_checked: true });
    component.reviewForm.controls.concours_id.setValue(7);
    component.changeConcours();
    expect(component.reviewForm.controls.preparation_option_ids.value).toEqual([]);
    expect(component.reviewForm.controls.source_checked.value).toBe(false);
  });
  it('preserves edits on a 409 and requires a fresh review after reload', () => {
    const { component } = setup();
    component.open(discovery);
    component.reviewForm.patchValue({
      concours_id: 7,
      review_note: 'Retain this note',
      source_checked: true,
    });
    api.review.mockReturnValueOnce(throwError(() => ({ status: 409 })));
    component.review('approve');
    expect(component.formError()).toContain('version a changé');
    expect(component.reviewForm.controls.review_note.value).toBe('Retain this note');
    component.reloadSelected();
    expect(component.selected()?.version).toBe(4);
    expect(component.reviewForm.controls.source_checked.value).toBe(false);
  });
  it('requires a rejection reason and lets administrators acknowledge source updates linked to existing announcements', () => {
    const { component } = setup();
    component.open({ ...discovery, announcement_id: 8 });
    component.reviewForm.controls.source_checked.setValue(true);
    component.review('reject');
    expect(api.review).not.toHaveBeenCalled();
    component.reviewForm.controls.review_note.setValue('Compared in existing editor');
    component.reviewForm.controls.source_checked.setValue(true);
    component.review('acknowledge');
    expect(api.review).toHaveBeenCalledWith(expect.objectContaining({ announcement_id: 8 }), {
      action: 'acknowledge',
      source_checked: true,
      review_note: 'Compared in existing editor',
    });
  });
  it('adds manual links without creating or publishing an announcement', () => {
    const { component } = setup();
    component.openManual();
    component.manualForm.patchValue({
      source_id: 1,
      title: 'Official title',
      official_url: discovery.official_url,
    });
    component.addManual();
    expect(api.add).toHaveBeenCalledWith(
      expect.objectContaining({
        source_id: 1,
        official_url: discovery.official_url,
        session_year: null,
      }),
    );
    expect(api.review).not.toHaveBeenCalled();
  });
  it('loads history pages and creates new source settings with automation disabled', () => {
    const { component } = setup();
    component.open(discovery);
    component.loadHistory(2);
    expect(api.revisions).toHaveBeenLastCalledWith(5, 2);
    component.openSource();
    expect(component.sourceForm.controls.enabled.value).toBe(false);
    expect(component.sourceForm.controls.permission_status.value).toBe('unknown');
    component.sourceForm.patchValue({
      key: 'new-official',
      name: 'New',
      official_url: source.official_url,
      listing_url: source.listing_url,
    });
    component.saveSource();
    expect(api.saveSource).toHaveBeenCalledWith(
      expect.objectContaining({
        enabled: false,
        collection_method: 'manual',
        permission_checked_at: null,
      }),
      undefined,
    );
  });
  it('labels RSS articles as third-party sources and leaves unverified official links absent', () => {
    const item: ConcoursDiscovery = {
      ...discovery,
      official_url: null,
      source_article_url: 'https://www.dreamjob.ma/emploi-public/fixture/',
      source: { ...source, source_kind: 'third_party' },
      candidate_category: 'employment',
      candidate_type: 'results',
    };
    api.list.mockReturnValue(of({ data: { items: [item], meta } }));
    const { fixture, component } = setup();
    expect(fixture.nativeElement.querySelector('tbody a').getAttribute('href')).toBe(
      item.source_article_url,
    );
    expect(fixture.nativeElement.textContent).toContain('Article RSS (tiers)');
    component.open(item);
    fixture.detectChanges();
    const reviewDialog: HTMLElement = fixture.nativeElement.querySelector(
      'dialog[aria-labelledby="review-title"]',
    );
    expect(reviewDialog.textContent).toContain('Article original');
    expect([...reviewDialog.querySelectorAll('a')].map((a) => a.getAttribute('href'))).toEqual([
      item.source_article_url,
    ]);
    expect(component.reviewForm.controls.official_url.value).toBe('');
    expect(component.matches()).toEqual([]);
  });
  it('sends explicit category/type filters without inferring an institution or session', () => {
    const { component } = setup();
    component.filters.candidate_category = 'academic';
    component.filters.candidate_type = 'preselection';
    component.fetch();
    expect(api.list).toHaveBeenLastCalledWith(
      expect.objectContaining({
        candidate_category: 'academic',
        candidate_type: 'preselection',
        institution: '',
      }),
    );
  });
  it('verifies an independently supplied official URL and retains unknown identity fields', () => {
    const { component } = setup();
    const item = {
      ...discovery,
      official_url: null,
      source: { ...source, source_kind: 'third_party' as const },
    };
    component.open(item);
    component.verifyOfficial();
    expect(api.review).not.toHaveBeenCalled();
    component.reviewForm.patchValue({
      official_url: discovery.official_url,
      candidate_category: 'academic',
      candidate_type: 'opening',
      source_checked: true,
    });
    component.verifyOfficial();
    expect(api.review).toHaveBeenCalledWith(
      item,
      expect.objectContaining({
        action: 'verify_source',
        official_url: discovery.official_url,
        verified_identity: {
          institution: null,
          round: null,
          grade: null,
          specialty: null,
          session_year: null,
          deadline: null,
        },
      }),
    );
    expect(component.reviewForm.controls.source_checked.value).toBe(false);
  });
  it('requires a duplicate note and confirmation and preserves input on stale decisions', () => {
    const match: any = {
      discovery: { ...discovery, id: 6, version: 8 },
      reason: 'verified_official_url',
      decision: null,
    };
    api.matches.mockReturnValue(of({ data: [match] }));
    const { component } = setup();
    component.open(discovery);
    component.decideMatch(match, 'confirmed');
    expect(api.decideMatch).not.toHaveBeenCalled();
    component.duplicateNote = 'Compared both official notices';
    component.reviewForm.controls.source_checked.setValue(true);
    api.decideMatch.mockReturnValueOnce(throwError(() => ({ status: 409 })));
    component.decideMatch(match, 'confirmed');
    expect(api.decideMatch).toHaveBeenCalledWith(
      discovery,
      match.discovery,
      'confirmed',
      component.duplicateNote,
    );
    expect(component.formError()).toContain('version a changé');
    expect(component.duplicateNote).toBe('Compared both official notices');
    component.decideMatch(match, 'rejected');
    expect(component.selected()?.version).toBe(4);
    expect(component.reviewForm.controls.source_checked.value).toBe(false);
  });
  it('blocks approval when official proof fields were changed without saving their verification', () => {
    const { component } = setup();
    component.open(discovery);
    component.reviewForm.patchValue({
      concours_id: 7,
      official_url: 'https://www.emploi-public.ma/different',
      source_checked: true,
    });
    component.review('approve');
    expect(api.review).not.toHaveBeenCalled();
    expect(component.formError()).toContain('vérification officielle modifiée');
  });
  it('keeps manual third-party article links separate from official announcement URLs', () => {
    const { component } = setup();
    component.sources.set([{ ...source, source_kind: 'third_party' }]);
    component.openManual();
    component.manualForm.patchValue({
      source_id: 1,
      title: 'RSS title',
      official_url: 'https://www.dreamjob.ma/fixture/',
    });
    component.addManual();
    expect(api.add).toHaveBeenCalledWith(
      expect.objectContaining({ source_article_url: 'https://www.dreamjob.ma/fixture/' }),
    );
    expect(api.add.mock.calls[0][0]).not.toHaveProperty('official_url');
  });
  it('shows match-loading failures and retains review inputs for a retry', () => {
    api.matches.mockReturnValueOnce(throwError(() => ({ status: 503 })));
    const { component, fixture } = setup();
    component.open(discovery);
    component.reviewForm.controls.review_note.setValue('Retain my review');
    fixture.detectChanges();
    expect(component.matchesError()).toBe(true);
    expect(fixture.nativeElement.textContent).toContain('Rapprochements indisponibles');
    component.loadMatches();
    expect(component.matchesError()).toBe(false);
    expect(component.reviewForm.controls.review_note.value).toBe('Retain my review');
  });
  it('labels unavailable sources and distinguishes an internal factual assessment from a publisher licence', () => {
    api.sources.mockReturnValue(
      of({
        data: [
          {
            ...source,
            collection_assessment: 'unavailable_terms',
            collection_assessment_note: 'Indisponible : conditions de réutilisation restrictives.',
            publisher_written_authorization: false,
          },
        ],
      }),
    );
    const { fixture } = setup();
    const text = fixture.nativeElement.textContent;
    expect(text).toContain('Indisponible : conditions');
    expect(text).toContain('aucune autorisation écrite éditeur');
    expect(text).not.toContain('Flux autorisé et configuré');
  });
  it('shows all three sources with dated access, separate eligibility, activation and pending counts', () => {
    api.sources.mockReturnValue(
      of({
        data: [
          {
            ...source,
            id: 8,
            key: 'alwadifa-maroc',
            name: 'Alwadifa Maroc',
            enabled: true,
            usage_eligible: true,
            automatic_collection_active: false,
            pending_discoveries_count: 10,
            technical_access: {
              status: 'confirmed_rss',
              checked_at: '2026-10-27T18:21:21Z',
              http_status: 200,
              format: 'RSS 2.0',
              items: 55,
              dates: 'valid',
            },
          },
          {
            ...source,
            id: 9,
            key: 'dreamjob',
            name: 'Dreamjob',
            usage_eligible: false,
            automatic_collection_active: false,
            pending_discoveries_count: 0,
            collection_assessment_note: 'Conditions de réutilisation restrictives',
            technical_access: {
              status: 'confirmed_rss',
              checked_at: '2026-10-26T23:24:04Z',
              http_status: 200,
              format: 'RSS 2.0',
              items: 30,
              dates: 'valid',
            },
          },
          {
            ...source,
            id: 10,
            key: 'orientation-chabab',
            name: 'Orientation Chabab',
            usage_eligible: false,
            automatic_collection_active: false,
            pending_discoveries_count: 0,
            technical_access: {
              status: 'confirmed_rss',
              checked_at: '2026-10-27T17:55:18Z',
              http_status: 200,
              format: 'RSS 2.0',
              items: 100,
              dates: 'unknown_malformed_offsets',
            },
          },
        ],
      }),
    );
    const { fixture } = setup();
    const rows: HTMLElement[] = Array.from(
      fixture.nativeElement.querySelectorAll('details.sources tbody tr'),
    );
    expect(rows).toHaveLength(3);
    expect(rows[0].textContent).toContain('Alwadifa Maroc');
    expect(rows[0].textContent).toContain('Base de collecte compatible');
    expect(rows[0].textContent).toContain('Activée');
    expect(rows[0].querySelectorAll('td')[5].textContent?.trim()).toBe('10');
    for (const row of rows) {
      expect(row.textContent).toContain('RSS accessible lors du contrôle');
      expect(row.textContent).toContain('Collecte automatique inactive');
      expect(row.textContent).toContain('HTTP 200');
    }
    expect(rows[1].textContent).toContain('Collecte non éligible');
    expect(rows[1].textContent).toContain('Désactivée');
    expect(rows[2].textContent).toContain('Dates RSS malformées');
  });
  it('shows access refusal separately from collection policy and renders errors as text', () => {
    api.sources.mockReturnValue(
      of({
        data: [
          {
            ...source,
            technical_access: {
              status: 'access_refused',
              checked_at: '2026-10-27T20:00:00Z',
              http_status: 403,
              format: null,
            },
            last_error: '<img src=x onerror=alert(1)>',
            pending_discoveries_count: 0,
          },
        ],
      }),
    );
    const { fixture } = setup();
    expect(fixture.nativeElement.textContent).toContain(
      'Accès refusé lors de la dernière tentative',
    );
    expect(fixture.nativeElement.textContent).toContain('HTTP 403');
    expect(fixture.nativeElement.textContent).toContain('<img src=x onerror=alert(1)>');
    expect(fixture.nativeElement.querySelector('details.sources img')).toBeNull();
  });
  it('requires an independently verified title before converting a factual technical label', () => {
    const item = {
      ...discovery,
      metadata_scope: 'facts_only' as const,
      title: 'RSS metadata · Emploi public · Ouverture · Santé · réf. 12345',
      official_verified_at: '2026-10-27T12:00:00Z',
      candidate_category: 'employment' as const,
      candidate_type: 'opening' as const,
    };
    api.list.mockReturnValue(of({ data: { items: [item], meta } }));
    const { fixture, component } = setup();
    component.open(item);
    component.reviewForm.patchValue({ concours_id: 7, source_checked: true });
    fixture.detectChanges();
    expect(fixture.nativeElement.textContent).toContain('titre éditeur non conservé');
    expect(fixture.nativeElement.textContent).toContain('Santé · réf. 12345');
    expect(fixture.nativeElement.textContent).toContain('Secteur et type suggérés');
    expect(
      fixture.nativeElement.querySelector('input[formControlName="verified_title"]'),
    ).toBeTruthy();
    component.review('approve');
    expect(api.review).not.toHaveBeenCalled();
    component.reviewForm.patchValue({
      verified_title: 'Titre officiel contrôlé',
      source_checked: true,
    });
    component.review('approve');
    expect(api.review).toHaveBeenCalledWith(
      item,
      expect.objectContaining({ verified_title: 'Titre officiel contrôlé' }),
    );
  });
});

describe('existing announcement editor accepts verified URL-only drafts', () => {
  it('publishes through the existing explicit verify-publish action without requiring a new PDF', () => {
    const api = {
      list: vi.fn().mockReturnValue(of({ data: { items: [], meta } })),
      save: vi.fn().mockReturnValue(of({ data: { id: 8, version: 2 } })),
      transition: vi.fn().mockReturnValue(of({ data: { id: 8, version: 3 } })),
      revisions: vi.fn().mockReturnValue(of({ data: { items: [], meta } })),
    };
    TestBed.configureTestingModule({
      imports: [
        TranslocoTestingModule.forRoot({
          langs: { fr, en, ar },
          preloadLangs: true,
          translocoConfig: { availableLangs: ['fr', 'en', 'ar'], defaultLang: 'fr' },
        }),
      ],
      providers: [
        provideRouter([]),
        { provide: ConcoursAnnouncementsApi, useValue: api },
        { provide: ConcoursApi, useValue: { references: () => of([course]) } },
      ],
    });
    const fixture = TestBed.createComponent(AdminConcoursAnnouncements);
    fixture.detectChanges();
    const c = fixture.componentInstance;
    c.form.patchValue({
      concours_id: 7,
      official_source_url: discovery.official_url,
      preparation_option_ids: [10],
    });
    c.save(true);
    expect(api.save).not.toHaveBeenCalled();
    c.sourceChecked = true;
    c.save(true);
    expect(api.save).toHaveBeenCalledWith(
      expect.objectContaining({ preparation_option_ids: [10] }),
      undefined,
    );
    expect(api.transition).toHaveBeenCalledWith({ id: 8, version: 2 }, 'verify-publish', true);
  });
});
