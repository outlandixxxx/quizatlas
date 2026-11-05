import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoService, TranslocoTestingModule } from '@jsverse/transloco';
import { BehaviorSubject, of, Subject, throwError } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import fr from '../../../../assets/i18n/fr.json';
import ar from '../../../../assets/i18n/ar.json';
import { QuizResultComponent } from './quiz-result.component';
import { QuizAttemptApi } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';
import { QuizRatingApi } from '../../../core/services/quiz-rating-api';

const data = {
  id: 9, quiz_id: 3, quiz_title: 'Fixture result', percentage: 0, score: 0, total_marks: 1, passed: false,
  status: 'expired', time_spent_seconds: 60, total_questions: 1, correct_count: 0, incorrect_count: 1, unanswered_count: 0,
  submitted_at: '2026-11-04T10:00:00Z',
  progression: { xp_earned: 40, total_xp: 110, level: 2, xp_into_current_level: 30, xp_for_next_level: 243 },
  rank: null, subject_breakdown: [], questions: [{
    id: 4, number: 1, text: 'Multi question', marks: 1, is_correct: false, is_answered: true,
    options: [{ key: 'A', label: 'First' }, { key: 'B', label: 'Second' }, { key: 'C', label: 'Third' }],
    user_answer_key: 'A', correct_answer_key: 'A', user_answer_keys: ['A', 'C'], correct_answer_keys: ['A', 'B'],
    explanation: 'Explanation', is_bookmarked: false,
  }],
};
describe('complete answer sets in result review', () => {
  const api = { getResult: vi.fn() };
  const ratings = { getMyRating: vi.fn() };
  let params: BehaviorSubject<ReturnType<typeof convertToParamMap>>;
  beforeEach(() => {
    api.getResult.mockReset().mockReturnValue(of({ success: true, data }));
    ratings.getMyRating.mockReset().mockReturnValue(of({ data: null }));
    params = new BehaviorSubject(convertToParamMap({ id: '9' }));
    TestBed.configureTestingModule({
      imports: [TranslocoTestingModule.forRoot({ langs: { en, fr, ar }, preloadLangs: true, translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en' } })],
      providers: [provideRouter([]), { provide: ActivatedRoute, useValue: { paramMap: params } },
        { provide: QuizAttemptApi, useValue: api }, { provide: BookmarkApi, useValue: {} },
        { provide: QuizRatingApi, useValue: ratings }],
    });
  });
  afterEach(() => { TestBed.resetTestingModule(); vi.useRealTimers(); });
  it('marks every correct and selected answer and distinguishes timeout', () => {
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    fixture.nativeElement.querySelector('.item-header').click();
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelectorAll('.correct-answer')).toHaveLength(2);
    expect(fixture.nativeElement.querySelectorAll('.option-badge.wrong')).toHaveLength(1);
    expect(fixture.nativeElement.querySelectorAll('.option-badge')).toHaveLength(4);
    expect(fixture.nativeElement.textContent).toContain('Time expired');
  });
  it('does not render an empty score sheet when the result is forbidden', () => {
    api.getResult.mockReturnValue(throwError(() => ({ status: 409 })));
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('[role="alert"]')).not.toBeNull();
    expect(fixture.nativeElement.querySelector('.result-container')).toBeNull();
  });
  it('renders the authoritative score when the result arrives after navigation', async () => {
    const pending = new Subject<unknown>();
    api.getResult.mockReturnValue(pending);
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.result-container')).toBeNull();
    expect(fixture.nativeElement.querySelector('[aria-busy="true"]').textContent).toContain(en.result.loading);
    fixture.componentInstance.loadResult();
    expect(api.getResult).toHaveBeenCalledTimes(1);
    expect(ratings.getMyRating).not.toHaveBeenCalled();
    pending.next({ success: true, data: { ...data, percentage: 100 } });
    await fixture.whenStable();
    expect(fixture.nativeElement.querySelector('.score-num').textContent).toContain('100%');
    expect(fixture.nativeElement.querySelector('[aria-busy="true"]')).toBeNull();
  });

  it('retries a failed GET once, disables concurrent retries and uses the new server values', () => {
    api.getResult.mockReturnValueOnce(throwError(() => ({ status: 503 })));
    const pending = new Subject<unknown>();
    api.getResult.mockReturnValueOnce(pending);
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    fixture.nativeElement.querySelector('[role="alert"] button').click();
    fixture.componentInstance.loadResult();
    fixture.detectChanges();
    expect(api.getResult).toHaveBeenCalledTimes(2);
    expect(fixture.nativeElement.querySelector('.result-container')).toBeNull();
    pending.next({ data: { ...data, progression: { ...data.progression, xp_earned: 73, total_xp: 987, level: 4, xp_into_current_level: 10, xp_for_next_level: 735 } } });
    fixture.detectChanges();
    const card = fixture.nativeElement.querySelector('.xp-card');
    expect(card.textContent).toContain('+73 XP');
    expect(card.textContent).toContain('987 XP');
    const progress = card.querySelector('progress');
    expect(progress.value).toBe(10);
    expect(progress.max).toBe(735);
  });

  it.each([
    { id: 10 }, { status: 'in_progress' }, { submitted_at: null },
  ])('rejects mismatched or unfinished result data: %j', changes => {
    api.getResult.mockReturnValue(of({ data: { ...data, ...changes } }));
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.result-container')).toBeNull();
    expect(fixture.nativeElement.querySelector('[role="alert"]')).not.toBeNull();
    expect(ratings.getMyRating).not.toHaveBeenCalled();
  });

  it('cancels stale result requests when the route changes and on destruction', () => {
    const first = new Subject<unknown>();
    const second = new Subject<unknown>();
    api.getResult.mockReturnValueOnce(first).mockReturnValueOnce(second);
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    params.next(convertToParamMap({ id: '10' }));
    expect(first.observed).toBe(false);
    first.next({ data });
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.result-container')).toBeNull();
    second.next({ data: { ...data, id: 10, quiz_title: 'Latest result' } });
    fixture.detectChanges();
    expect(fixture.componentInstance.quizTitle).toBe('Latest result');
    fixture.destroy();
    expect(second.observed).toBe(false);
  });

  it('offers a retry after a stalled result request times out', () => {
    vi.useFakeTimers();
    api.getResult.mockReturnValue(new Subject());
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    vi.advanceTimersByTime(30001);
    fixture.detectChanges();
    expect(fixture.componentInstance.loading).toBe(false);
    expect(fixture.nativeElement.querySelector('[role="alert"] button')).not.toBeNull();
  });

  it('keeps the completed result available if the optional rating request fails', () => {
    ratings.getMyRating.mockReturnValue(throwError(() => ({ status: 503 })));
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    expect(fixture.nativeElement.querySelector('.result-container')).not.toBeNull();
    expect(fixture.componentInstance.errorKey).toBe('');
  });

  it.each([['en', en], ['fr', fr], ['ar', ar]] as const)('renders translated XP and accessible progress for %s', async (lang, dictionary) => {
    TestBed.inject(TranslocoService).setActiveLang(lang);
    const fixture = TestBed.createComponent(QuizResultComponent);
    fixture.detectChanges();
    await fixture.whenStable();
    expect(fixture.nativeElement.querySelector('.xp-card').textContent).toContain(dictionary.result.quizXpEarned);
    expect(fixture.nativeElement.querySelector('label[for="result-xp-progress"]').textContent).toContain('3');
    expect(fixture.nativeElement.querySelector('#result-xp-progress').value).toBe(30);
  });
});
