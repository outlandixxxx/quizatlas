import { TestBed } from '@angular/core/testing';
import { provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, throwError } from 'rxjs';
import { LandingApi } from '../../landing/services/landing-api';
import { QuizDashboardGrid } from './quiz-dashboard-grid';

const data = {
  new_quizzes: [{ id: 7, title: 'Fresh algebra', questions_count: 12, category: 'Mathematics' }],
  popular_quizzes: [{ id: 9, title: 'Popular physics', questions_count: 20, average_rating: 4.7 }],
  leaderboard_preview: [{ rank: 1, username: 'LearnerOne', points: 2450, avatar: null }],
};

describe('Landing activity tables', () => {
  const api = { getLandingData: vi.fn() };
  beforeEach(async () => {
    api.getLandingData.mockReset().mockReturnValue(of({ data }));
    await TestBed.configureTestingModule({
      imports: [
        QuizDashboardGrid,
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
      providers: [provideRouter([]), { provide: LandingApi, useValue: api }],
    }).compileComponents();
  });
  async function render() {
    const fixture = TestBed.createComponent(QuizDashboardGrid);
    await fixture.whenStable();
    fixture.detectChanges();
    return fixture;
  }

  it('renders three separate accessible tables using their API data and existing routes', async () => {
    const fixture = await render();
    const tables: HTMLTableElement[] = Array.from(fixture.nativeElement.querySelectorAll('table'));
    expect(tables).toHaveLength(3);
    tables.forEach((table) => {
      expect(table.querySelector('caption')).toBeTruthy();
      expect(table.querySelectorAll('thead th[scope="col"]').length).toBeGreaterThan(1);
    });
    expect(tables[0].textContent).toContain('Fresh algebra');
    expect(tables[1].textContent).toContain('Popular physics');
    expect(tables[2].textContent).toContain('LearnerOne');
    expect(tables[0].querySelector('a')?.getAttribute('href')).toBe('/app/quiz/7');
    expect(
      fixture.nativeElement.querySelector('.ranking-table .table-footer').getAttribute('href'),
    ).toBe('/app/leaderboard');
    expect(tables[2].textContent).toContain('2,450');
  });

  it('shows an error and can retry without presenting a failed request as an empty catalog', async () => {
    api.getLandingData.mockReturnValue(throwError(() => new Error('offline')));
    const fixture = await render();
    expect(fixture.componentInstance.hasError).toBe(true);
    expect(fixture.nativeElement.querySelector('.load-error button')).toBeTruthy();
    expect(fixture.nativeElement.textContent).toContain('landing.redesign.unavailable');
    api.getLandingData.mockReturnValue(of({ data }));
    fixture.nativeElement.querySelector('.load-error button').click();
    fixture.detectChanges();
    expect(fixture.componentInstance.hasError).toBe(false);
    expect(fixture.nativeElement.textContent).toContain('Fresh algebra');
  });

  it('handles empty tables and unrated quizzes', async () => {
    api.getLandingData.mockReturnValue(
      of({
        data: {
          ...data,
          new_quizzes: [],
          leaderboard_preview: [],
          popular_quizzes: [{ ...data.popular_quizzes[0], average_rating: null }],
        },
      }),
    );
    const fixture = await render();
    expect(fixture.nativeElement.querySelectorAll('.state-message')).toHaveLength(2);
    expect(fixture.nativeElement.querySelector('.rating').textContent).toContain('—');
  });
  it('filters actual quiz categories and switches the ranking preview without changing API data', async () => {
    api.getLandingData.mockReturnValue(
      of({
        data: {
          ...data,
          new_quizzes: [
            ...data.new_quizzes,
            { id: 8, title: 'Fresh mechanics', questions_count: 8, category: 'Physics' },
          ],
          leaderboard_preview: Array.from({ length: 4 }, (_, i) => ({
            rank: i + 1,
            username: 'Learner' + i,
            points: 100 - i,
            avatar: null,
          })),
        },
      }),
    );
    const fixture = await render();
    const filters: HTMLButtonElement[] = Array.from(
      fixture.nativeElement.querySelectorAll('.new-table .filter'),
    );
    filters.find((button) => button.textContent?.trim() === 'Physics')!.click();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.new-table tbody').textContent).toContain(
      'Fresh mechanics',
    );
    expect(fixture.nativeElement.querySelector('.new-table tbody').textContent).not.toContain(
      'Fresh algebra',
    );
    expect(fixture.componentInstance.newQuizzes).toHaveLength(2);
    fixture.nativeElement.querySelectorAll('.ranking-table .filter')[1].click();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelectorAll('.ranking-table tbody tr')).toHaveLength(3);
    expect(fixture.componentInstance.leaderboardPreview).toHaveLength(4);
    expect(api.getLandingData).toHaveBeenCalledTimes(1);
  });
});
