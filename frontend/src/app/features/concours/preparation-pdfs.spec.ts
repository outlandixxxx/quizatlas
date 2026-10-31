import { signal } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { Router, UrlTree, provideRouter } from '@angular/router';
import { RouterTestingHarness } from '@angular/router/testing';
import { provideHttpClient } from '@angular/common/http';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { Observable, firstValueFrom, of, throwError } from 'rxjs';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';
import { ConcoursOverview } from './concours-overview';
import { PdfResourceCard } from './components/pdf-resource-card';
import { ConcoursApi } from '../../core/services/concours-api';
import { ConcoursAnnouncementsApi } from '../../core/services/concours-announcements-api';
import { LanguageService } from '../../core/services/language';
import { ConcoursPdf } from '../../core/models/concours-pdf';
import { PreparationOption } from '../../core/models/concours';
import { AdminExamPdfs } from '../admin/exam-pdfs/exam-pdfs';
import { AdminExamPdfApi } from '../admin/services/exam-pdf-admin.api';
import { SubjectApi } from '../admin/services/subject.api';
import { ExamPdfApi } from '../user/services/exam-pdf.api';
import { legacyLibraryGuard } from '../user/library/legacy-library.guard';
import { UserLayout } from '../../layouts/user-layout/user-layout';
import { AuthState } from '../auth/services/auth-state';
import { AuthApi } from '../auth/services/auth-api';
import { Token } from '../../core/services/token';
import { ThemeService } from '../../core/services/theme';
import { ChatApi } from '../../core/services/chat-api';
import { NotificationApi } from '../../core/services/notification-api';
import { MajorApi } from '../admin/services/major.api';

const paper = (id: number, year = 2024, extra: Partial<ConcoursPdf> = {}): ConcoursPdf => ({
  id,
  year,
  title: `Paper ${id}`,
  document_type: 'previous_exam',
  specialty: null,
  file_size: '1 KB',
  source_url: null,
  attribution: null,
  available: true,
  view_path: `/public/concours-pdfs/${id}/view`,
  download_path: `/public/concours-pdfs/${id}/download`,
  ...extra,
});
const definition = {
  id: 1,
  slug: 'permanent',
  name_fr: 'Concours permanent',
  name_ar: 'مباراة دائمة',
  is_active: true,
  displayed_session_year: 2027,
};
const emptyPage = {
  data: { items: [], meta: { current_page: 1, last_page: 1, per_page: 12, total: 0 } },
};
const translations = () =>
  TranslocoTestingModule.forRoot({
    langs: { en, fr, ar },
    preloadLangs: true,
    translocoConfig: {
      availableLangs: ['fr', 'en', 'ar'],
      defaultLang: 'en',
      reRenderOnLangChange: true,
    },
  });

const track = (id: number, extra: Partial<PreparationOption> = {}): PreparationOption => ({
  id,
  concours_id: 1,
  name_fr: `Option ${id}`,
  name_en: `Track ${id}`,
  name_ar: `المسار ${id}`,
  parent_id: null,
  display_order: 0,
  is_active: true,
  ...extra,
});

describe('public previous-exam collection', () => {
  const directory = { show: vi.fn(), list: vi.fn() };
  beforeEach(() => {
    directory.show.mockReset().mockReturnValue(of({ data: { ...definition, resources: [] } }));
    directory.list.mockReset().mockReturnValue(of(emptyPage));
    TestBed.configureTestingModule({
      imports: [translations()],
      providers: [
        provideHttpClient(),
        provideRouter([{ path: 'concours/:slug', component: ConcoursOverview }]),
        { provide: ConcoursApi, useValue: directory },
        { provide: ConcoursAnnouncementsApi, useValue: { list: () => of(emptyPage) } },
      ],
    });
    TestBed.inject(LanguageService).setLanguage('en');
  });

  for (const language of ['fr', 'en', 'ar'] as const) {
    it(`filters all preparation sections with optional hierarchy and multiple assignments in ${language}`, async () => {
      TestBed.inject(LanguageService).setLanguage(language);
      directory.show.mockReturnValue(
        of({
          data: {
            ...definition,
            preparation_options: [track(10), track(11, { parent_id: 10 }), track(12)],
            resources: [
              paper(1, 2024, { preparation_option_ids: [11, 12] }),
              paper(2, 2024, {
                document_type: 'correction',
                corrects_exam_pdf_id: 1,
                preparation_option_ids: [11],
              }),
              paper(3),
              paper(4, 2024, { document_type: 'summary', preparation_option_ids: [12] }),
              paper(5, 2024, { document_type: 'preparation_guide', preparation_option_ids: [11] }),
            ],
          },
        }),
      );
      const harness = await RouterTestingHarness.create('/concours/permanent');
      const component = harness.routeDebugElement!.componentInstance as ConcoursOverview;
      expect(component.papers().map((pdf) => pdf.id)).toEqual([1, 3]);
      expect(
        harness.routeNativeElement!.querySelector('#preparation-option')!.textContent,
      ).toContain(
        track(10)[language === 'ar' ? 'name_ar' : language === 'en' ? 'name_en' : 'name_fr'],
      );
      component.selectPreparationOption('10');
      harness.detectChanges();
      expect(component.papers().map((pdf) => pdf.id)).toEqual([1]);
      expect(component.correctionsFor(component.papers()[0]).map((pdf) => pdf.id)).toEqual([2]);
      expect(component.resourceGroups(['summary'])).toHaveLength(0);
      expect(component.resourceGroups(['preparation_guide'])).toHaveLength(1);
      component.selectPreparationOption('12');
      harness.detectChanges();
      expect(component.papers()).toHaveLength(1);
      expect(component.correctionsFor(component.papers()[0])).toEqual([]);
      expect(component.resourceGroups(['summary'])).toHaveLength(1);
      component.selectPreparationOption('');
      harness.detectChanges();
      expect(component.papers().map((pdf) => pdf.id)).toEqual([1, 3]);
      expect(component.resourceGroups(['preparation_guide'])).toHaveLength(1);
    });
  }

  it('filters before stable pagination, resets the page, and combines year and subject search', async () => {
    directory.show.mockReturnValue(
      of({
        data: {
          ...definition,
          preparation_options: [track(11), track(12)],
          resources: [
            ...Array.from({ length: 13 }, (_, i) =>
              paper(i + 1, 2024, { preparation_option_ids: [11] }),
            ),
            paper(14, 2023, { subject: 'Biologie' }),
          ],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/permanent');
    const component = harness.routeDebugElement!.componentInstance as ConcoursOverview;
    component.pagePapers(2);
    component.selectPreparationOption('11');
    harness.detectChanges();
    expect(component.paperPage()).toBe(1);
    expect(component.paperPages()).toBe(2);
    component.pagePapers(2);
    expect(component.paperGroups()[0].items.map((pdf) => pdf.id)).toEqual([13]);
    component.filterPapers('year', '2023');
    expect(component.papers()).toEqual([]);
    component.selectPreparationOption('');
    component.filterPapers('search', 'biologie');
    expect(component.papers().map((pdf) => pdf.id)).toEqual([14]);
    component.selectPreparationOption('12');
    expect(component.papers()).toEqual([]);
    component.selectPreparationOption('99999');
    expect(component.preparationOption()).toBe('');
  });

  it('keeps the exam as labeled context when only its correction matches without inventing an assignment', async () => {
    directory.show.mockReturnValue(
      of({
        data: {
          ...definition,
          preparation_options: [track(11)],
          resources: [
            paper(1),
            paper(2, 2024, {
              document_type: 'correction',
              corrects_exam_pdf_id: 1,
              preparation_option_ids: [11],
            }),
          ],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/permanent');
    const component = harness.routeDebugElement!.componentInstance as ConcoursOverview;
    component.selectPreparationOption('11');
    harness.detectChanges();
    expect(component.papers().map((pdf) => pdf.id)).toEqual([1]);
    expect(component.matchesPreparationOption(component.papers()[0])).toBe(false);
    expect(harness.routeNativeElement!.querySelector('#past-papers')!.textContent).toContain(
      en.preparationFilters.correctionContext,
    );
    expect(
      harness.routeNativeElement!.querySelectorAll('#past-papers app-concours-pdf'),
    ).toHaveLength(2);
  });

  it('omits inactive options and their descendants and resets a filter when navigating to another concours', async () => {
    directory.show.mockReturnValue(
      of({
        data: {
          ...definition,
          preparation_options: [
            track(10, { is_active: false }),
            track(11, { parent_id: 10 }),
            track(12),
          ],
          resources: [paper(1)],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/permanent');
    const component = harness.routeDebugElement!.componentInstance as ConcoursOverview;
    expect(component.preparationOptions().map((option) => option.id)).toEqual([12]);
    component.selectPreparationOption('12');
    harness.detectChanges();
    expect(component.papers()).toEqual([]);
    await harness.navigateByUrl('/concours/another');
    expect(component.preparationOption()).toBe('');
    expect(component.papers()).toHaveLength(1);
  });

  for (const language of ['en', 'fr', 'ar'] as const) {
    it(`groups multiple corrections beneath the corresponding exam in ${language}`, async () => {
      TestBed.inject(LanguageService).setLanguage(language);
      directory.show.mockReturnValue(
        of({
          data: {
            ...definition,
            resources: [
              paper(3, 2024, {
                title: 'Correction B',
                document_type: 'correction',
                corrects_exam_pdf_id: 1,
              }),
              paper(1, 2024, { subject: 'Mathématiques', specialty: 'Grade A' }),
              paper(2, 2024, {
                title: 'Correction A',
                document_type: 'correction',
                corrects_exam_pdf_id: 1,
              }),
            ],
          },
        }),
      );
      const harness = await RouterTestingHarness.create('/concours/permanent');
      const dom = harness.routeNativeElement!.querySelector('#past-papers')!;
      expect(dom.querySelectorAll('.exam-with-corrections')).toHaveLength(1);
      expect(dom.querySelectorAll('app-concours-pdf')).toHaveLength(3);
      expect(dom.textContent).toContain('Mathématiques');
      expect(dom.textContent).toContain('Grade A');
      expect(dom.textContent!.indexOf('Correction A')).toBeLessThan(
        dom.textContent!.indexOf('Correction B'),
      );
      expect(dom.querySelector('a[href$="/2/view"]')).not.toBeNull();
      expect(dom.querySelector('a[href*="/app/library"]')).toBeNull();
    });
  }

  it('paginates all exams stably and resets pagination when year or subject filters change', async () => {
    directory.show.mockReturnValue(
      of({
        data: {
          ...definition,
          resources: [
            ...Array.from({ length: 13 }, (_, index) => paper(index + 1)),
            paper(14, 2023, { specialty: 'Biologie' }),
          ],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/permanent');
    const component = harness.routeDebugElement!.componentInstance as ConcoursOverview;
    expect(component.paperPages()).toBe(2);
    expect(component.paperGroups()[0].items.map((pdf) => pdf.id)).toEqual(
      Array.from({ length: 12 }, (_, i) => i + 1),
    );
    component.pagePapers(2);
    harness.detectChanges();
    expect(component.paperGroups().map((g) => g.year)).toEqual([2024, 2023]);
    component.filterPapers('year', '2023');
    harness.detectChanges();
    expect(component.paperPage()).toBe(1);
    expect(component.paperGroups()[0].items.map((pdf) => pdf.id)).toEqual([14]);
    component.filterPapers('year', '');
    component.filterPapers('search', 'biologie');
    harness.detectChanges();
    expect(component.papers().map((pdf) => pdf.id)).toEqual([14]);
    component.pagePapers(99);
    expect(component.paperPage()).toBe(1);
    component.filterPapers('search', 'missing');
    harness.detectChanges();
    expect(component.paperGroups()).toEqual([]);
    expect(
      harness.routeNativeElement!.querySelector('#past-papers app-concours-notice'),
    ).not.toBeNull();
  });

  it('keeps historical standalone approved corrections visible without fabricating parent links', async () => {
    directory.show.mockReturnValue(
      of({
        data: {
          ...definition,
          resources: [paper(1), paper(2, 2023, { document_type: 'correction' })],
        },
      }),
    );
    const harness = await RouterTestingHarness.create('/concours/permanent');
    const dom = harness.routeNativeElement!.querySelector('#past-papers')!;
    expect(dom.querySelectorAll('.exam-with-corrections')).toHaveLength(2);
    expect(dom.textContent).toContain(en.concoursPdfs.noCorrection);
  });

  it('omits the download action when permission is disabled while retaining anonymous viewing', () => {
    const fixture = TestBed.createComponent(PdfResourceCard);
    fixture.componentRef.setInput('document', paper(1, 2024, { download_allowed: false }));
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('a[href$="/1/view"]')).not.toBeNull();
    expect(fixture.nativeElement.querySelector('a[href$="/download"]')).toBeNull();
  });
});

describe('existing PDF admin editor', () => {
  const api = {
    list: vi.fn(),
    candidates: vi.fn(),
    update: vi.fn(),
    upload: vi.fn(),
    savePreparationOptions: vi.fn(),
  };
  const existing = {
    id: 1,
    title: 'Private historical PDF',
    year: 2024,
    subject_id: null,
    major_id: null,
    questions_count: null,
    version: 2,
    is_active: true,
    document_type: null,
    concours_id: null,
  };
  beforeEach(() => {
    api.savePreparationOptions.mockReset().mockReturnValue(of({ data: existing }));
    api.list.mockReset().mockReturnValue(of({ data: { ...emptyPage.data, items: [existing] } }));
    api.candidates.mockReset().mockReturnValue(of([]));
    api.update.mockReset().mockReturnValue(of({ data: existing }));
    api.upload.mockReset().mockReturnValue(of({ data: existing }));
    TestBed.configureTestingModule({
      imports: [translations(), AdminExamPdfs],
      providers: [
        provideHttpClient(),
        { provide: AdminExamPdfApi, useValue: api },
        { provide: ConcoursApi, useValue: { references: () => of([definition]) } },
        { provide: SubjectApi, useValue: { listAll: () => of([]) } },
        { provide: MajorApi, useValue: { listAll: () => of([]) } },
      ],
    });
  });

  it('reviews the existing record in place with private defaults and no file copy', () => {
    const fixture = TestBed.createComponent(AdminExamPdfs);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.openUploadModal(existing as never);
    fixture.detectChanges();
    expect(component.form.controls.publish.value).toBe(false);
    expect(component.form.controls.distribution_confirmed.value).toBe(false);
    expect(fixture.nativeElement.querySelector('input[type=file]')).toBeNull();
    component.form.patchValue({
      concours_id: 1,
      document_type: 'previous_exam',
      publish: true,
      distribution_confirmed: true,
    });
    component.upload();
    const body = api.update.mock.calls[0][1] as FormData;
    expect(api.update.mock.calls[0][0]).toBe(1);
    expect(body.get('version')).toBe('2');
    expect(body.get('publish')).toBe('1');
    expect(body.get('document_type')).toBe('previous_exam');
    expect(body.has('file')).toBe(false);
    expect(api.upload).not.toHaveBeenCalled();
  });

  it('retains form data after a stale or invalid edit and reports field errors', () => {
    api.update.mockReturnValue(
      throwError(() => ({
        error: {
          message: 'Reload before saving.',
          errors: { corrects_exam_pdf_id: ['Wrong exam.'] },
        },
      })),
    );
    const fixture = TestBed.createComponent(AdminExamPdfs);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.openUploadModal(existing as never);
    component.form.controls.title.setValue('Reviewed title');
    component.upload();
    expect(component.isModalOpen()).toBe(true);
    expect(component.form.controls.title.value).toBe('Reviewed title');
    expect(component.fieldErrors()['corrects_exam_pdf_id']).toEqual(['Wrong exam.']);
  });

  it('saves filter assignments without metadata, file uploads, reapproval or correction-link changes', () => {
    const fixture = TestBed.createComponent(AdminExamPdfs);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.openUploadModal({ ...existing, preparation_option_ids: [11] } as never);
    component.toggleOption(12, true);
    component.upload(); // The normal submit must preserve approval for filter-only changes too.
    expect(api.savePreparationOptions).toHaveBeenCalledWith(
      expect.objectContaining({ id: 1, version: 2 }),
      [11, 12],
    );
    expect(api.update).not.toHaveBeenCalled();
    expect(api.upload).not.toHaveBeenCalled();
    expect(component.isModalOpen()).toBe(false);
  });

  it('prevents an assignment-only save from discarding unsaved metadata edits', () => {
    const fixture = TestBed.createComponent(AdminExamPdfs);
    fixture.detectChanges();
    const component = fixture.componentInstance;
    component.openUploadModal(existing as never);
    component.form.controls.title.setValue('Unsaved');
    component.form.markAsDirty();
    component.saveOptionAssignments();
    expect(api.savePreparationOptions).not.toHaveBeenCalled();
    expect(component.isModalOpen()).toBe(true);
  });
});

describe('legacy private library compatibility route', () => {
  const api = { list: vi.fn() };
  beforeEach(() =>
    TestBed.configureTestingModule({
      providers: [provideRouter([]), { provide: ExamPdfApi, useValue: api }],
    }),
  );
  async function check() {
    return firstValueFrom(
      TestBed.runInInjectionContext(() =>
        legacyLibraryGuard({} as never, {} as never),
      ) as Observable<boolean | UrlTree>,
    );
  }
  it('redirects an empty legacy library to public concours preparation', async () => {
    api.list.mockReturnValue(of(emptyPage));
    const result = await check();
    expect((result as UrlTree).toString()).toBe('/concours');
    expect(api.list).toHaveBeenCalledWith({ page: 1, per_page: 1 });
  });
  it('retains private access while legacy files still exist', async () => {
    api.list.mockReturnValue(
      of({ data: { ...emptyPage.data, meta: { ...emptyPage.data.meta, total: 1 } } }),
    );
    expect(await check()).toBe(true);
  });
  it('retains the fallback during API failures so documents are not stranded', async () => {
    api.list.mockReturnValue(throwError(() => ({ status: 503 })));
    expect(await check()).toBe(true);
  });
});

describe('legacy library menu transition', () => {
  const api = { list: vi.fn() };
  beforeEach(() =>
    TestBed.configureTestingModule({
      imports: [translations()],
      providers: [
        provideRouter([]),
        { provide: ExamPdfApi, useValue: api },
        { provide: AuthState, useValue: { user: signal(null) } },
        { provide: AuthApi, useValue: {} },
        { provide: Token, useValue: {} },
        { provide: ThemeService, useValue: { theme: signal('light') } },
        { provide: LanguageService, useValue: { language: signal('en') } },
        { provide: NotificationApi, useValue: { unreadCount: () => of({ data: { count: 0 } }) } },
        { provide: ChatApi, useValue: { unreadCount: () => of({ data: { count: 0 } }) } },
      ],
    }),
  );
  it('removes the obsolete entry when empty and keeps a public concours link', () => {
    api.list.mockReturnValue(of(emptyPage));
    const fixture = TestBed.createComponent(UserLayout);
    fixture.componentInstance.ngOnInit();
    expect(
      fixture.componentInstance.visibleMenuItems().some((item) => item.route === '/app/library'),
    ).toBe(false);
    expect(
      fixture.componentInstance.visibleMenuItems().some((item) => item.route === '/concours'),
    ).toBe(true);
  });
  it('keeps private library navigation when the count cannot be established', () => {
    api.list.mockReturnValue(throwError(() => ({ status: 503 })));
    const fixture = TestBed.createComponent(UserLayout);
    fixture.componentInstance.ngOnInit();
    expect(
      fixture.componentInstance.visibleMenuItems().some((item) => item.route === '/app/library'),
    ).toBe(true);
  });
});
