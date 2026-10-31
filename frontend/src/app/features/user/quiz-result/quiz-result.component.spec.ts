import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { of, Subject, throwError } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import { QuizResultComponent } from './quiz-result.component';
import { QuizAttemptApi } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';
import { QuizRatingApi } from '../../../core/services/quiz-rating-api';

const data = {
  id: 9, quiz_id: 3, quiz_title: 'Fixture result', percentage: 0, score: 0, total_marks: 1, passed: false,
  status: 'expired', time_spent_seconds: 60, total_questions: 1, correct_count: 0, incorrect_count: 1, unanswered_count: 0,
  rank: null, subject_breakdown: [], questions: [{
    id: 4, number: 1, text: 'Multi question', marks: 1, is_correct: false, is_answered: true,
    options: [{ key: 'A', label: 'First' }, { key: 'B', label: 'Second' }, { key: 'C', label: 'Third' }],
    user_answer_key: 'A', correct_answer_key: 'A', user_answer_keys: ['A', 'C'], correct_answer_keys: ['A', 'B'],
    explanation: 'Explanation', is_bookmarked: false,
  }],
};
describe('complete answer sets in result review', () => {
  const api = { getResult: vi.fn() };
  beforeEach(() => {
    api.getResult.mockReturnValue(of({ success: true, data }));
    TestBed.configureTestingModule({
      imports: [TranslocoTestingModule.forRoot({ langs: { en }, preloadLangs: true, translocoConfig: { availableLangs: ['en'], defaultLang: 'en' } })],
      providers: [provideRouter([]), { provide: ActivatedRoute, useValue: { snapshot: { paramMap: convertToParamMap({ id: '9' }) } } },
        { provide: QuizAttemptApi, useValue: api }, { provide: BookmarkApi, useValue: {} },
        { provide: QuizRatingApi, useValue: { getMyRating: () => of({ data: null }) } }],
    });
  });
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
    pending.next({ success: true, data: { ...data, percentage: 100 } });
    await fixture.whenStable();
    expect(fixture.nativeElement.querySelector('.score-num').textContent).toContain('100%');
  });
});
