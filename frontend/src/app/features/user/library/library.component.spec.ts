import { TestBed } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { HttpTestingController, provideHttpClientTesting } from '@angular/common/http/testing';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { Subject, of } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';
import { LibraryComponent } from './library.component';
import { ExamPdfApi } from '../services/exam-pdf.api';

const result = (page: number) => ({
  success: true,
  message: 'OK',
  data: {
    items: [
      {
        id: page,
        title: `PDF page ${page}`,
        subject: null,
        major: null,
        year: 2025,
        file_size: '12 KB',
        page_count: null,
        questions_count: null,
        view_url: '/unused',
      },
    ],
    meta: { current_page: page, last_page: 3, per_page: 12, total: 25 },
  },
});

describe('authenticated PDF library pagination', () => {
  const api = { list: vi.fn(), view: vi.fn() };
  beforeEach(() => {
    api.list.mockReset().mockImplementation(({ page }) => of(result(page)));
    TestBed.configureTestingModule({
      imports: [
        TranslocoTestingModule.forRoot({
          langs: { en, fr, ar },
          preloadLangs: true,
          translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en' },
        }),
      ],
      providers: [{ provide: ExamPdfApi, useValue: api }],
    });
  });
  afterEach(() => vi.useRealTimers());

  it('reaches later pages, keeps the search filter and disables navigation at each boundary', async () => {
    const fixture = TestBed.createComponent(LibraryComponent);
    fixture.componentInstance.searchQuery = 'math';
    fixture.detectChanges();
    await fixture.whenStable();
    fixture.detectChanges();
    const buttons = () =>
      fixture.nativeElement.querySelectorAll(
        '.library-pagination button',
      ) as NodeListOf<HTMLButtonElement>;
    expect(buttons()[0].disabled).toBe(true);
    buttons()[1].click();
    fixture.detectChanges();
    expect(api.list).toHaveBeenLastCalledWith({ search: 'math', page: 2 });
    expect(fixture.nativeElement.textContent).toContain('PDF page 2');
    buttons()[1].click();
    fixture.detectChanges();
    expect(fixture.componentInstance.meta?.current_page).toBe(3);
    expect(buttons()[1].disabled).toBe(true);
    buttons()[0].click();
    fixture.detectChanges();
    expect(fixture.componentInstance.meta?.current_page).toBe(2);
    fixture.componentInstance.goToPage(0);
    fixture.componentInstance.goToPage(4);
    expect(api.list).toHaveBeenCalledTimes(4);
  });

  it('starts a changed search at page one and cancels obsolete list responses', async () => {
    const fixture = TestBed.createComponent(LibraryComponent);
    fixture.detectChanges();
    await fixture.whenStable();
    const component = fixture.componentInstance;
    component.goToPage(2);
    const obsolete = new Subject<ReturnType<typeof result>>();
    api.list.mockReturnValueOnce(obsolete);
    component.goToPage(3);
    vi.useFakeTimers();
    component.searchQuery = 'physics';
    component.onSearchChange();
    obsolete.next(result(3));
    expect(component.isLoading).toBe(true);
    expect(component.meta).toBeNull();
    vi.advanceTimersByTime(350);
    expect(api.list).toHaveBeenLastCalledWith({ search: 'physics', page: 1 });
    expect(component.meta?.current_page).toBe(1);
    expect(component.pdfList[0].title).toBe('PDF page 1');
  });
});

describe('PDF library API pagination contract', () => {
  beforeEach(() =>
    TestBed.configureTestingModule({
      providers: [provideHttpClient(), provideHttpClientTesting()],
    }),
  );
  afterEach(() => TestBed.inject(HttpTestingController).verify());

  it('encodes search and sends the requested page through the existing endpoint', () => {
    TestBed.inject(ExamPdfApi).list({ search: 'a&b', page: 2 }).subscribe();
    const request = TestBed.inject(HttpTestingController).expectOne((req) =>
      req.url.includes('/exam-pdfs?'),
    );
    const url = new URL(request.request.url, 'https://example.test');
    expect(url.searchParams.get('search')).toBe('a&b');
    expect(url.searchParams.get('page')).toBe('2');
    request.flush(result(2));
  });
});
