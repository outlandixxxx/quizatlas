import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, Router, convertToParamMap, provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { Subject, of, throwError } from 'rxjs';
import en from '../../../../assets/i18n/en.json';
import { ActiveQuizComponent } from './active-quiz.component';
import { QuizApi } from '../services/quiz.api';
import { QuizAttemptApi, ApiQuizAttempt } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';

const response = <T>(data: T) => ({ success: true, message: 'OK', data });
const attempt = (changes: Partial<ApiQuizAttempt> = {}): ApiQuizAttempt => ({
  id: 9, quiz_id: 3, mode: 'exam', status: 'in_progress', score: 0, percentage: 0, passed: false,
  started_at: '2026-10-31T10:00:00Z', server_time: '2026-10-31T10:00:40Z',
  deadline_at: '2026-10-31T10:01:00Z', remaining_seconds: 20, submitted_at: null, ...changes,
});
const question = (type = 'multiple_choice', selected: number[] = []) => ({
  id: 4, question: 'Fixture question', type, marks: 1, order: 1, selected_choice_ids: selected, is_bookmarked: false,
  choices: [{ id: 10, choice_text: 'First', order: 1 }, { id: 11, choice_text: 'Second', order: 2 }, { id: 12, choice_text: 'Third', order: 3 }],
});
const quiz = (current: ApiQuizAttempt | null = attempt(), type = 'multiple_choice', selected: number[] = []) => response({
  id: 3, title: 'Fixture quiz', duration: 1, difficulty: null, subject_name: 'Fixture', attempt: current, questions: [question(type, selected)],
});

describe('quiz answer sets and server deadlines', () => {
  const api = { start: vi.fn(), saveAnswer: vi.fn(), submit: vi.fn(), getAttempt: vi.fn(), updateMode: vi.fn() };
  const quizzes = { getQuestions: vi.fn() };
  beforeEach(() => {
    for (const mock of Object.values(api)) mock.mockReset();
    quizzes.getQuestions.mockReset().mockReturnValue(of(quiz()));
    api.start.mockReturnValue(of(response(attempt())));
    api.saveAnswer.mockReturnValue(of(response(null)));
    api.submit.mockReturnValue(of({ ...response(attempt({ status: 'expired' })), rewards: { xp_earned: 40, newly_unlocked_achievements: [] } }));
    api.getAttempt.mockReturnValue(of(response(attempt())));
    TestBed.configureTestingModule({
      imports: [TranslocoTestingModule.forRoot({ langs: { en }, preloadLangs: true, translocoConfig: { availableLangs: ['en'], defaultLang: 'en' } })],
      providers: [provideRouter([]), { provide: ActivatedRoute, useValue: { snapshot: { paramMap: convertToParamMap({ id: '3' }) } } },
        { provide: QuizApi, useValue: quizzes }, { provide: QuizAttemptApi, useValue: api },
        { provide: BookmarkApi, useValue: { toggle: vi.fn() } }],
    });
  });
  afterEach(() => { TestBed.resetTestingModule(); vi.useRealTimers(); vi.restoreAllMocks(); });
  const mount = () => {
    const fixture = TestBed.createComponent(ActiveQuizComponent);
    fixture.detectChanges();
    return { fixture, component: fixture.componentInstance };
  };

  it('chooses the mode before starting and never changes it during an attempt', () => {
    quizzes.getQuestions.mockReturnValue(of(quiz(null)));
    api.start.mockReturnValue(of(response(attempt({ mode: 'tutor', deadline_at: null, remaining_seconds: null }))));
    const { component, fixture } = mount();
    expect(api.start).not.toHaveBeenCalled();
    expect(fixture.nativeElement.querySelectorAll('.option-item')).toHaveLength(0);
    component.setMode('tutor');
    component.startQuiz();
    expect(api.start).toHaveBeenCalledWith(3, 'tutor');
    component.setMode('exam');
    expect(component.mode).toBe('tutor');
    expect(api.updateMode).not.toHaveBeenCalled();
  });

  it('selects, deselects and clears a multiple-choice set without hidden choices', () => {
    const { component } = mount();
    const keys = component.currentQuestion.options.map(o => o.key);
    component.selectOption(keys[0]);
    component.selectOption(keys[1]);
    expect(api.saveAnswer.mock.lastCall?.[1].choice_ids).toHaveLength(2);
    component.selectOption(keys[0]);
    expect(api.saveAnswer.mock.lastCall?.[1].choice_ids).toEqual([component.currentQuestion.options[1].choiceId]);
    component.selectOption(keys[1]);
    expect(api.saveAnswer.mock.lastCall?.[1].choice_ids).toEqual([]);
    expect(component.answeredCount).toBe(0);
  });

  it.each(['single_choice', 'true_false'])('replaces and clears %s selections', type => {
    quizzes.getQuestions.mockReturnValue(of(quiz(attempt(), type)));
    const { component } = mount();
    const options = component.currentQuestion.options;
    component.selectOption(options[0].key);
    component.selectOption(options[1].key);
    expect(api.saveAnswer.mock.lastCall?.[1].choice_ids).toEqual([options[1].choiceId]);
    component.selectOption(options[1].key);
    expect(api.saveAnswer.mock.lastCall?.[1].choice_ids).toEqual([]);
  });

  it('restores every saved choice on refresh and keeps only the server remaining time', () => {
    quizzes.getQuestions.mockReturnValue(of(quiz(attempt(), 'multiple_choice', [10, 11])));
    const { component, fixture } = mount();
    expect(component.selectedOptions).toHaveLength(2);
    expect(fixture.nativeElement.querySelectorAll('.option-item.selected')).toHaveLength(2);
    expect(component.timerSeconds).toBeLessThanOrEqual(20);
    expect(component.timerSeconds).toBeGreaterThan(18);
    expect(api.start).not.toHaveBeenCalled();
  });

  it('blocks overlapping saves, rolls back an unconfirmed selection and displays an error', () => {
    const pending = new Subject<ReturnType<typeof response>>();
    api.saveAnswer.mockReturnValue(pending);
    const { component, fixture } = mount();
    component.selectOption('A');
    component.selectOption('B');
    component.submitQuiz();
    expect(api.saveAnswer).toHaveBeenCalledTimes(1);
    expect(api.submit).not.toHaveBeenCalled();
    pending.error({ status: 503 });
    fixture.detectChanges();
    expect(component.selectedOptions).toEqual([]);
    expect(fixture.nativeElement.querySelector('[role="alert"]').textContent).toContain('could not be confirmed');
  });

  it('shows all tutor corrections and permits untimed tutor answers', () => {
    quizzes.getQuestions.mockReturnValue(of(quiz(attempt({ mode: 'tutor', deadline_at: null, remaining_seconds: null }))));
    api.saveAnswer.mockReturnValue(of(response({ question_id: 4, correct_choice_ids: [10, 11], selected_choice_ids: [10], is_correct: false, explanation: 'Tutor explanation' })));
    const { component, fixture } = mount();
    component.selectOption('A');
    fixture.detectChanges();
    expect(component.currentQuestion.correctAnswers).toHaveLength(2);
    expect(fixture.nativeElement.querySelectorAll('.option-item.correct')).toHaveLength(2);
    expect(component.timeRemaining).toBe('—');
    expect(api.submit).not.toHaveBeenCalled();
  });

  it('uses elapsed time across a delayed interval and lets the server finalize at zero', () => {
    vi.useFakeTimers({ toFake: ['setInterval', 'clearInterval', 'performance'] });
    api.getAttempt.mockReturnValue(of(response(attempt({ status: 'expired' }))));
    vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    const { component } = mount();
    vi.advanceTimersByTime(21000);
    expect(component.timerSeconds).toBe(0);
    expect(api.getAttempt).toHaveBeenCalledTimes(1);
    expect(api.submit).not.toHaveBeenCalled();
    expect(component.completed).toBe(true);
    expect(component.answersDisabled).toBe(true);
    vi.advanceTimersByTime(10000);
    expect(api.getAttempt).toHaveBeenCalledTimes(1);
  });

  it('checks server state on returning to the page and opens an expired result', () => {
    api.getAttempt.mockReturnValue(of(response(attempt({ status: 'expired' }))));
    const navigate = vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    mount();
    document.dispatchEvent(new Event('visibilitychange'));
    expect(api.getAttempt).toHaveBeenCalledWith(9);
    expect(navigate).toHaveBeenCalledWith(['/app/results', 9]);
  });

  it('handles a late-answer conflict by reading the final server state', () => {
    api.saveAnswer.mockReturnValue(throwError(() => ({ status: 409 })));
    api.getAttempt.mockReturnValue(of(response(attempt({ status: 'expired' }))));
    const navigate = vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    const { component } = mount();
    component.selectOption('A');
    expect(navigate).toHaveBeenCalledWith(['/app/results', 9]);
  });

  it('offers the last expired result without automatically creating a new attempt', () => {
    quizzes.getQuestions.mockReturnValue(of(quiz(attempt({ status: 'expired', submitted_at: '2026-10-31T10:01:00Z' }))));
    const { component, fixture } = mount();
    expect(component.attemptId).toBeNull();
    expect(component.lastResultId).toBe(9);
    expect(fixture.nativeElement.textContent).toContain('Time expired');
    expect(api.start).not.toHaveBeenCalled();
  });

  it('resynchronizes if the browser reaches zero before the server deadline', () => {
    vi.useFakeTimers({ toFake: ['setInterval', 'clearInterval', 'performance'] });
    api.getAttempt.mockReturnValue(of(response(attempt({ server_time: '2026-10-31T10:00:50Z' }))));
    const { component } = mount();
    vi.advanceTimersByTime(20000);
    expect(component.timerSeconds).toBe(10);
    expect(component.completed).toBe(false);
    expect(api.submit).not.toHaveBeenCalled();
  });

  it('preserves an ungraded historical expired state without promising a completed result', () => {
    quizzes.getQuestions.mockReturnValue(of(quiz(attempt({ status: 'expired', submitted_at: null }))));
    const { component } = mount();
    expect(component.lastResultId).toBeNull();
    expect(api.start).not.toHaveBeenCalled();
  });
});
