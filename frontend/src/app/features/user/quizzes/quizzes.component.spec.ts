import { TestBed } from '@angular/core/testing';
import { ActivatedRoute, Router, provideRouter } from '@angular/router';
import { QuizzesComponent, QuizCard } from './quizzes.component';
import { QuizApi } from '../services/quiz.api';
import { PracticeApi } from '../services/practice.api';

describe('finalized timeout quiz actions', () => {
  beforeEach(() => TestBed.configureTestingModule({ providers: [provideRouter([]),
    { provide: ActivatedRoute, useValue: {} }, { provide: QuizApi, useValue: {} }, { provide: PracticeApi, useValue: {} }] }));
  const card = (isCompleted: boolean): QuizCard => ({ id: 3, title: 'Fixture', difficulty: null, questionsCount: 2,
    status: 'expired', progressPercentage: 100, latestAttemptId: 9, isCompleted });
  it('opens the final result for a graded timeout', () => {
    const navigate = vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    const component = TestBed.runInInjectionContext(() => new QuizzesComponent());
    expect(component.actionLabel(card(true))).toBe('quizzes.actionViewResults');
    component.onQuizAction(card(true));
    expect(navigate).toHaveBeenCalledWith(['/app/results', 9]);
  });
  it('keeps historical ungraded expirations on the start flow', () => {
    const navigate = vi.spyOn(TestBed.inject(Router), 'navigate').mockResolvedValue(true);
    const component = TestBed.runInInjectionContext(() => new QuizzesComponent());
    component.onQuizAction(card(false));
    expect(navigate).toHaveBeenCalledWith(['/app/quiz', 3]);
  });
});
