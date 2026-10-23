import { TestBed } from '@angular/core/testing';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, throwError } from 'rxjs';
import { ProgressionShowcase } from './progression-showcase';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
const response = {
  data: {
    levels: [
      { level: 1, xp_start: 0, xp_end: 499 },
      { level: 7, xp_start: 10000, xp_end: 19999 },
    ],
    achievements: [
      {
        key: 'first',
        title: 'First milestone',
        description: 'Complete a quiz',
        icon: 'school',
        xp_reward: 35,
      },
    ],
  },
};
describe('Public progression catalog', () => {
  const api = { showcase: vi.fn() };
  beforeEach(async () => {
    api.showcase.mockReset().mockReturnValue(of(response));
    await TestBed.configureTestingModule({
      imports: [
        ProgressionShowcase,
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
      providers: [{ provide: PublicCatalogApi, useValue: api }],
    }).compileComponents();
  });
  async function render() {
    const fixture = TestBed.createComponent(ProgressionShowcase);
    await fixture.whenStable();
    fixture.detectChanges();
    return fixture;
  }
  it('renders actual thresholds and rewards without presenting personal progress', async () => {
    const fixture = await render();
    const ranges = fixture.nativeElement.querySelectorAll('.level-range');
    expect(ranges).toHaveLength(2);
    expect(ranges[1].textContent).toContain('10,000');
    expect(ranges[1].textContent).toContain('19,999');
    expect(fixture.nativeElement.querySelector('.badge-item').textContent).toContain(
      'First milestone',
    );
    expect(fixture.nativeElement.querySelector('.badge-reward').textContent).toContain('35 XP');
    expect(
      fixture.nativeElement.querySelector('.your-level-inline, .stat-main, .week-dots, .locked'),
    ).toBeNull();
  });
  it('reports a request error and reloads the live catalog on retry', async () => {
    api.showcase.mockReturnValue(throwError(() => new Error('offline')));
    const fixture = await render();
    expect(fixture.nativeElement.textContent).toContain('landing.redesign.load_error');
    api.showcase.mockReturnValue(of(response));
    fixture.nativeElement.querySelector('button').click();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelectorAll('.level-step')).toHaveLength(2);
    expect(fixture.componentInstance.hasError).toBe(false);
  });
  it('handles unpublished levels and achievements with translated empty states', async () => {
    api.showcase.mockReturnValue(of({ data: { levels: [], achievements: [] } }));
    const fixture = await render();
    expect(fixture.nativeElement.textContent).toContain('landing.redesign.no_levels');
    expect(fixture.nativeElement.textContent).toContain('landing.redesign.no_achievements');
  });
});
