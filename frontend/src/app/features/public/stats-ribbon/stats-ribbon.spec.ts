import { TestBed } from '@angular/core/testing';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import { StatsRibbon } from './stats-ribbon';
import { LandingApi } from '../../landing/services/landing-api';
const response = {
  data: {
    stats: {
      total_questions: 120,
      total_candidates: 23,
      total_quizzes_attempted: 48,
      passing_rate: 75.5,
    },
  },
};
describe('Landing statistics', () => {
  const api = { getLandingData: vi.fn() };
  beforeEach(async () => {
    api.getLandingData.mockReset().mockReturnValue(of(response));
    await TestBed.configureTestingModule({
      imports: [
        StatsRibbon,
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
      providers: [{ provide: LandingApi, useValue: api }],
    }).compileComponents();
  });
  async function render() {
    const fixture = TestBed.createComponent(StatsRibbon);
    await fixture.whenStable();
    fixture.detectChanges();
    return fixture;
  }
  it('renders the four actual API statistics without inflated plus signs', async () => {
    const fixture = await render();
    expect(
      Array.from(fixture.nativeElement.querySelectorAll('h3'), (el: any) => el.textContent.trim()),
    ).toEqual(['120', '23', '48', '75.5%']);
  });
  it('shows loading rather than zero statistics while waiting for data', async () => {
    const pending = new Subject<any>();
    api.getLandingData.mockReturnValue(pending);
    const fixture = await render();
    expect(fixture.nativeElement.querySelectorAll('.stat-item')).toHaveLength(0);
    expect(fixture.nativeElement.textContent).toContain('landing.redesign.loading');
    pending.next(response);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelectorAll('.stat-item')).toHaveLength(4);
  });
  it('distinguishes failed requests from zero values and supports retry', async () => {
    api.getLandingData.mockReturnValue(throwError(() => new Error('offline')));
    const fixture = await render();
    expect(fixture.nativeElement.querySelectorAll('h3')).toHaveLength(0);
    api.getLandingData.mockReturnValue(
      of({
        data: {
          stats: {
            total_questions: 0,
            total_candidates: 0,
            total_quizzes_attempted: 0,
            passing_rate: 0,
          },
        },
      }),
    );
    fixture.nativeElement.querySelector('button').click();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('h3').textContent).toBe('0');
    expect(fixture.componentInstance.hasError).toBe(false);
  });
});
