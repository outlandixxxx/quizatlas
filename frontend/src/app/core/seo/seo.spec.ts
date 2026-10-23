import { RESPONSE_INIT } from '@angular/core';
import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { RouterTestingHarness } from '@angular/router/testing';
import { provideHttpClient } from '@angular/common/http';
import { TranslocoTestingModule, TranslocoService, provideTransloco } from '@jsverse/transloco';
import { Subject, of, throwError } from 'rxjs';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';
import { canonicalUrl } from './urls';
import { Seo } from '../services/seo';
import { LanguageService } from '../services/language';
import { About } from '../../features/public/about/about';
import { TrialQuiz } from '../../features/public/trial-quiz/trial-quiz';
import { TrialQuizApi } from '../services/trial-quiz-api';
import { BlogApi } from '../services/blog-api';
import { Blog } from '../../features/public/blog/blog';
import { BlogDetail } from '../../features/public/blog/blog-detail/blog-detail';
import { NotFound } from '../../features/public/page-error/not-found';
import { SubjectsDirectory } from '../../features/public/subjects/subjects';
import { PublicCatalogApi } from '../services/public-catalog-api';

const initialLanguage = document.documentElement.lang;
afterEach(() => { document.documentElement.lang = initialLanguage; vi.restoreAllMocks(); });

it.each([
  ['/blog?page=2&utm_source=test', 'https://maroquiz.com/blog?page=2'],
  ['/subjects?page=3', 'https://maroquiz.com/subjects?page=3'],
  ['/about?lang=fr#team', 'https://maroquiz.com/about'],
  ['/trial/subject/algorithms?lang=en', 'https://maroquiz.com/trial/subject/algorithms'],
  ['/trial/major/computer-science?lang=ar', 'https://maroquiz.com/trial/major/computer-science'],
  ['/blog?page=2&q=algebra', 'https://maroquiz.com/blog'],
  ['/subjects?page=-4&lang=xx', 'https://maroquiz.com/subjects'],
])('canonicalizes %s without losing indexable pagination or changing existing slugs', (value, expected) => {
  expect(canonicalUrl(value)).toBe(expected);
});

it('keeps existing slugs and consolidates interface preference parameters', () => {
  expect(canonicalUrl('/about?lang=ar')).toBe('https://maroquiz.com/about');
  expect(canonicalUrl('/trial/subject/database-sql?lang=ar')).toBe('https://maroquiz.com/trial/subject/database-sql');
});

describe('translated metadata', () => {
  it('waits for the translation response and then updates title, description, and language changes', async () => {
    const translations = new Subject<Record<string, unknown>>();
    const french = new Subject<Record<string, unknown>>();
    class DeferredLoader { getTranslation(language: string) { return language === 'fr' ? french : translations; } }
    TestBed.configureTestingModule({
      imports: [About],
      providers: [provideRouter([]), provideTransloco({
        config: { availableLangs: ['en', 'fr'], defaultLang: 'en', reRenderOnLangChange: true, prodMode: true },
        loader: DeferredLoader,
      })],
    });
    TestBed.inject(Seo).beginPage('/about');
    const fixture = TestBed.createComponent(About);
    fixture.detectChanges();
    expect(document.title).not.toBe('about.seo_title');
    translations.next(en);
    translations.complete();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(document.title).toBe(en.about.seo_title);
    expect(document.querySelector<HTMLMetaElement>('meta[name=description]')?.content).toBe(en.about.seo_description);
    const service = TestBed.inject(TranslocoService);
    service.setActiveLang('fr');
    french.next(fr);
    french.complete();
    await fixture.whenStable();
    fixture.detectChanges();
    expect(document.title).toBe(fr.about.seo_title);
  });
});

describe('SEO routes and public content', () => {
  const trialApi = { getBySubject: vi.fn(), getByMajor: vi.fn(), grade: vi.fn() };
  const blogApi = { show: vi.fn(), list: vi.fn(), stats: vi.fn(() => of({ data: {} })), popularTags: vi.fn(() => of({ data: [] })), topContributors: vi.fn(() => of({ data: [] })) };
  const catalog = { getSubjects: vi.fn(), getMajors: vi.fn(() => of({ data: { items: [] } })) };
  const response = { status: 200 };
  function trial(label: string, token: string) {
    return { data: { label, description: `Practice ${label}`, quizzes_count: 2, questions_count: 10,
      levels: ['Beginner'], related_subjects: [], trial_token: token,
      questions: [{ id: 1, question: 'Une question en français ?', marks: 1, choices: [{ id: 1, choice_text: 'Oui' }] }] } };
  }
  beforeEach(() => {
    response.status = 200;
    trialApi.getBySubject.mockReset();
    blogApi.show.mockReset();
    catalog.getSubjects.mockReset();
    document.documentElement.lang = 'en';
    TestBed.configureTestingModule({
      imports: [TranslocoTestingModule.forRoot({ langs: { en, fr, ar }, preloadLangs: true,
        translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en' } })],
      providers: [provideHttpClient(), provideRouter([
        { path: 'trial/subject/:subjectSlug', component: TrialQuiz },
        { path: 'blog', component: Blog },
        { path: 'blog/:id', component: BlogDetail },
        { path: 'subjects', component: SubjectsDirectory },
        { path: '**', component: NotFound },
      ]), { provide: RESPONSE_INIT, useValue: response },
      { provide: TrialQuizApi, useValue: trialApi }, { provide: BlogApi, useValue: blogApi },
      { provide: PublicCatalogApi, useValue: catalog }],
    });
    TestBed.inject(Seo).beginPage('/');
  });

  it('uses French SEO on a quiz and resets answers when Angular reuses it for another English slug', async () => {
    trialApi.getBySubject.mockImplementation(slug => of(trial(slug === 'algorithms' ? 'Algorithmique' : 'Bases de données', slug)));
    const harness = await RouterTestingHarness.create();
    const first = await harness.navigateByUrl('/trial/subject/algorithms', TrialQuiz);
    first.selectChoice(1);
    first.isFinished = true;
    expect(document.title).toContain('Algorithmique');
    const next = await harness.navigateByUrl('/trial/subject/database-sql', TrialQuiz);
    expect(next).toBe(first);
    expect(next.userAnswers).toEqual({});
    expect(next.isFinished).toBe(false);
    expect(next.trialToken).toBe('database-sql');
    expect(document.title).toContain('Bases de données');
    expect(document.title).toBe(fr.trial.seo_title.replace('{{topic}}', 'Bases de données'));
    expect(document.querySelector<HTMLLinkElement>('link[rel=canonical]')?.href).toBe('https://maroquiz.com/trial/subject/database-sql');
    expect(document.querySelectorAll('link[hreflang]')).toHaveLength(0);
  });

  it('cancels an obsolete subject request so it cannot overwrite the current subject', async () => {
    const old = new Subject<ReturnType<typeof trial>>();
    trialApi.getBySubject.mockImplementation(slug => slug === 'old' ? old : of(trial('Nouvelle matière', 'new')));
    const harness = await RouterTestingHarness.create();
    await harness.navigateByUrl('/trial/subject/old', TrialQuiz);
    const current = await harness.navigateByUrl('/trial/subject/new', TrialQuiz);
    old.next(trial('Ancienne matière', 'old'));
    expect(current.label).toBe('Nouvelle matière');
    expect(current.trialToken).toBe('new');
  });

  it.each([404, 503])('returns a %s page status for failed public trial content', async status => {
    trialApi.getBySubject.mockReturnValue(throwError(() => ({ status })));
    const harness = await RouterTestingHarness.create();
    await harness.navigateByUrl('/trial/subject/missing', TrialQuiz);
    expect(response.status).toBe(status);
    expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toContain('noindex');
    expect(harness.routeNativeElement?.querySelector('app-public-page-error')).not.toBeNull();
  });

  it('returns 404 and a usable error page for unknown routes', async () => {
    const harness = await RouterTestingHarness.create();
    await harness.navigateByUrl('/does-not-exist');
    expect(response.status).toBe(404);
    expect(harness.routeNativeElement?.textContent).toContain(en.seo.not_found_title);
  });

  it('renders crawlable subject links and pagination from a direct page URL', async () => {
    catalog.getSubjects.mockReturnValue(of({ data: { items: [{ id: 1, name: 'Algorithmique', slug: 'algorithms', major_name: 'Informatique', quizzes_count: 4 }], meta: { current_page: 2, last_page: 3, total: 60, per_page: 24 } } }));
    const harness = await RouterTestingHarness.create();
    await harness.navigateByUrl('/subjects?page=2');
    expect(catalog.getSubjects).toHaveBeenCalledWith({ page: 2, per_page: 24 });
    expect(harness.routeNativeElement?.querySelector('h2 a')?.getAttribute('href')).toBe('/trial/subject/algorithms');
    expect(harness.routeNativeElement?.querySelector('a[rel=next]')?.getAttribute('href')).toBe('/subjects?page=3');
  });

  it('renders direct blog pagination and crawlable article links', async () => {
    blogApi.list.mockReturnValue(of({ data: {
      items: [{ id: 12, title: 'Une question', body: 'Texte', author: { id: 1, username: 'Author' }, responses_count: 0, created_at: new Date().toISOString() }],
      meta: { current_page: 2, last_page: 3, total: 30, per_page: 10 },
    } }));
    const harness = await RouterTestingHarness.create();
    await harness.navigateByUrl('/blog?page=2');
    expect(blogApi.list).toHaveBeenCalledWith(expect.objectContaining({ page: 2 }));
    expect(harness.routeNativeElement?.querySelector('.ask-title a')?.getAttribute('href')).toBe('/blog/12');
    expect(harness.routeNativeElement?.querySelector('a[aria-label="Next page"]')?.getAttribute('href')).toBe('/blog?page=3');
  });

  it('updates a reused blog detail component when the article ID changes', async () => {
    blogApi.show.mockImplementation(id => of({ data: {
      id, title: `Question ${id}`, body: 'Une question en français', author: { id: 1, username: 'Author' },
      responses: [], responses_count: 0, created_at: new Date().toISOString(),
    } }));
    const harness = await RouterTestingHarness.create();
    const first = await harness.navigateByUrl('/blog/1', BlogDetail);
    first.replyBody = 'Old draft';
    const second = await harness.navigateByUrl('/blog/2', BlogDetail);
    expect(second).toBe(first);
    expect(second.ask?.id).toBe(2);
    expect(second.replyBody).toBe('');
    expect(document.title).toBe('Question 2 — MaroQuiz');
  });

  it('uses noindex for private routes without adding untranslated language variants', () => {
    const language = TestBed.inject(LanguageService);
    language.setLanguage('ar');
    const seo = TestBed.inject(Seo);
    seo.beginPage('/about?lang=ar');
    expect(document.documentElement.lang).toBe('ar');
    expect(document.querySelectorAll('link[hreflang]')).toHaveLength(0);
    seo.beginPage('/login');
    expect(document.querySelector<HTMLMetaElement>('meta[name=robots]')?.content).toContain('noindex');
    expect(document.querySelectorAll('link[hreflang]')).toHaveLength(0);
    language.setLanguage('en');
    expect(language.language()).toBe('en');
  });
});
