import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import { MajorsSubjectsBrowser } from './majors-subjects-browser';

const meta = { current_page: 1, last_page: 1, per_page: 6, total: 2 };
const majors = [
  { id: 1, name: 'Mathematics', slug: 'mathematics', description: null, subjects_count: 2 },
  { id: 2, name: 'Physics', slug: 'physics', description: null, subjects_count: 1 },
];
const subject = (majorId: number) => ({
  id: majorId * 10,
  name: majorId === 1 ? 'Algebra' : 'Mechanics',
  slug: majorId === 1 ? 'algebra' : 'mechanics',
  major_id: majorId,
  quizzes_count: 3,
});

describe('Landing major sections', () => {
  const api = { getMajors: vi.fn(), getSubjects: vi.fn() };

  beforeEach(async () => {
    api.getMajors.mockReset().mockReturnValue(of({ data: { items: majors, meta } }));
    api.getSubjects
      .mockReset()
      .mockImplementation(({ major_id }) => of({ data: { items: [subject(major_id)], meta } }));
    await TestBed.configureTestingModule({
      imports: [
        MajorsSubjectsBrowser,
        TranslocoTestingModule.forRoot({
          langs: { en: {} },
          preloadLangs: true,
          translocoConfig: {
            availableLangs: ['en'],
            defaultLang: 'en',
            missingHandler: { logMissingKey: false },
          },
        }),
      ],
      providers: [provideRouter([]), { provide: PublicCatalogApi, useValue: api }],
    }).compileComponents();
  });

  async function render() {
    const fixture = TestBed.createComponent(MajorsSubjectsBrowser);
    await fixture.whenStable();
    fixture.detectChanges();
    return fixture;
  }

  it('loads and renders subjects only inside their own major with existing trial routes', async () => {
    const fixture = await render();
    const sections: HTMLElement[] = Array.from(
      fixture.nativeElement.querySelectorAll('.major-section'),
    );
    expect(sections).toHaveLength(2);
    expect(sections[0].textContent).toContain('Algebra');
    expect(sections[0].textContent).not.toContain('Mechanics');
    expect(sections[1].querySelector('.subject-link')?.getAttribute('href')).toBe(
      '/trial/subject/mechanics',
    );
    expect(sections[0].querySelector('.major-link')?.getAttribute('href')).toBe(
      '/trial/major/mathematics',
    );
    expect(api.getSubjects.mock.calls.map(([params]) => params.major_id)).toEqual([1, 2]);
  });

  it('keeps pagination independent for each major', async () => {
    const fixture = await render();
    const [first, second] = fixture.componentInstance.sections;
    first.meta = { ...meta, last_page: 2 };
    fixture.componentInstance.loadSubjects(first, 2);
    expect(api.getSubjects).toHaveBeenLastCalledWith({ major_id: 1, page: 2, per_page: 6 });
    expect(second.subjects[0].name).toBe('Mechanics');
    const count = api.getSubjects.mock.calls.length;
    fixture.componentInstance.loadSubjects(second, 0);
    expect(api.getSubjects.mock.calls.length).toBe(count);
  });

  it('keeps icons matched to catalog identities when majors are filtered or reordered', async () => {
    const fixture = await render();
    const initial: HTMLElement[] = Array.from(
      fixture.nativeElement.querySelectorAll('.major-section'),
    );
    expect(initial[0].querySelector('.major-mark img')?.getAttribute('src')).toBe(
      'assets/icons/majors/mathematics.webp',
    );
    expect(initial[1].querySelector('.major-mark img')?.getAttribute('src')).toBe(
      'assets/icons/majors/physics.webp',
    );
    expect(initial[0].querySelector('.subject-symbol')?.textContent?.trim()).toBe('functions');
    expect(initial[1].querySelector('.subject-symbol')?.textContent?.trim()).toBe('settings');

    api.getMajors.mockReturnValue(
      of({ data: { items: [majors[1]], meta: { ...meta, total: 1 } } }),
    );
    fixture.componentInstance.loadMajors(1);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.major-mark img').getAttribute('src')).toBe(
      'assets/icons/majors/physics.webp',
    );

    fixture.componentInstance.subjectsSearch = 'algebra';
    api.getSubjects.mockReturnValue(
      of({ data: { items: [{ ...subject(1), major_name: 'Mathematics' }], meta } }),
    );
    fixture.componentInstance.searchAllSubjects(1);
    fixture.detectChanges();
    const result: HTMLElement = fixture.nativeElement.querySelector('.subject-search-results');
    expect(result.querySelector('.major-mark img')?.getAttribute('src')).toBe(
      'assets/icons/majors/mathematics.webp',
    );
    expect(result.querySelector('.subject-symbol')?.textContent?.trim()).toBe('functions');
  });

  it('searches all subjects, including majors outside the current page, and cancels stale responses', async () => {
    const fixture = await render();
    vi.useFakeTimers();
    try {
      const oldResponse = new Subject<any>();
      api.getSubjects.mockReturnValue(oldResponse);
      fixture.componentInstance.subjectsSearch = 'old';
      fixture.componentInstance.searchAllSubjects(1);
      fixture.componentInstance.subjectsSearch = 'history';
      fixture.componentInstance.onSubjectsSearchChange();
      api.getSubjects.mockReturnValue(
        of({
          data: { items: [{ ...subject(99), name: 'History', major_name: 'Humanities' }], meta },
        }),
      );
      vi.advanceTimersByTime(350);
      expect(api.getSubjects).toHaveBeenLastCalledWith({ search: 'history', page: 1, per_page: 6 });
      oldResponse.next({ data: { items: [{ ...subject(1), name: 'Stale result' }], meta } });
      expect(fixture.componentInstance.subjectResults[0].name).toBe('History');
      expect(fixture.componentInstance.subjectResultGroups[0].name).toBe('Humanities');
      expect(fixture.componentInstance.sections[0].subjects[0].name).toBe('Algebra');
    } finally {
      vi.useRealTimers();
    }
  });

  it('shows a recoverable subject error while keeping other majors available', async () => {
    api.getSubjects.mockImplementation(({ major_id }) =>
      major_id === 1
        ? throwError(() => new Error('offline'))
        : of({ data: { items: [subject(2)], meta } }),
    );
    const fixture = await render();
    expect(fixture.componentInstance.sections[0].error).toBe(true);
    expect(fixture.componentInstance.sections[1].subjects[0].name).toBe('Mechanics');
    api.getSubjects.mockReturnValue(of({ data: { items: [subject(1)], meta } }));
    fixture.componentInstance.loadSubjects(fixture.componentInstance.sections[0], 1);
    expect(fixture.componentInstance.sections[0].error).toBe(false);
    expect(fixture.componentInstance.sections[0].subjects[0].name).toBe('Algebra');
  });
});
