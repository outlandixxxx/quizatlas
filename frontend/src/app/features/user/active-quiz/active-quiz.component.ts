import { Component, OnInit, OnDestroy, inject, ChangeDetectorRef, DestroyRef } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, Router, RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { QuizApi, ApiQuestion, ApiQuizWithQuestions } from '../services/quiz.api';
import { QuizAttemptApi, ApiAnswerFeedback, ApiQuizRewards, ApiQuizAttempt } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';
import { ResultsGateComponent } from '../quiz-result/results-gate.component';
import { ChoiceShuffler } from '../../../core/services/choice-shuffler';

export interface QuestionOption {
  choiceId: number;
  key: string;
  label: string;
  text: string;
}

export interface Question {
  id: number;
  type: ApiQuestion['type'];
  text: string;
  codeSnippet?: string;
  options: QuestionOption[];
  correctAnswers: string[];
  explanation: string;
  points: number;
  difficulty: 'Beginner' | 'Intermediate' | 'Advanced' | 'Professional' | null;
  category: string;
}

export interface NavigatorItem {
  number: number;
  status: 'answered' | 'current' | 'unanswered';
}

const DIFFICULTY_LABEL_KEYS = {
  Beginner: 'quiz.difficultyBeginner', Intermediate: 'quiz.difficultyIntermediate',
  Advanced: 'quiz.difficultyAdvanced', Professional: 'quiz.difficultyProfessional',
};

@Component({
  selector: 'app-active-quiz',
  standalone: true,
  imports: [CommonModule, RouterLink, ResultsGateComponent, TranslocoModule],
  templateUrl: './active-quiz.component.html',
  styleUrl: './active-quiz.component.scss'
})
export class ActiveQuizComponent implements OnInit, OnDestroy {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly quizApi = inject(QuizApi);
  private readonly quizAttemptApi = inject(QuizAttemptApi);
  private readonly bookmarkApi = inject(BookmarkApi);
  private readonly cdr = inject(ChangeDetectorRef);
  private readonly destroyRef = inject(DestroyRef);
  private readonly choiceShuffler = inject(ChoiceShuffler);
  private timerInterval?: ReturnType<typeof setInterval>;
  private deadlineTick: number | null = null;
  private expiryRequested = false;
  private syncing = false;
  private tickCount = 0;
  private readonly resumeSync = () => {
    if (document.visibilityState === 'visible') this.syncAttempt();
  };

  quizId = 0;
  attemptId: number | null = null;
  lastResultId: number | null = null;
  lastAttemptExpired = false;
  mode: 'tutor' | 'exam' = 'exam';
  quizTitle = '';
  currentIndex = 0;
  questions: Question[] = [];
  userAnswers: Record<number, string[]> = {};
  submittedState: Record<number, boolean> = {};
  timerSeconds = 0;
  loading = true;
  answerSaving = false;
  submitting = false;
  completed = false;
  errorKey = '';
  bookmarkedState: Record<number, boolean> = {};
  showRewards = false;
  rewards: ApiQuizRewards | null = null;
  showResultsGate = false;

  ngOnInit(): void {
    this.quizId = Number(this.route.snapshot.paramMap.get('id'));
    this.loadQuiz();
    document.addEventListener('visibilitychange', this.resumeSync);
    window.addEventListener('online', this.resumeSync);
  }

  ngOnDestroy(): void {
    clearInterval(this.timerInterval);
    document.removeEventListener('visibilitychange', this.resumeSync);
    window.removeEventListener('online', this.resumeSync);
  }

  loadQuiz(): void {
    this.loading = true;
    this.errorKey = '';
    this.quizApi.getQuestions(this.quizId).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => {
        this.quizTitle = data.title;
        if (data.attempt?.status === 'in_progress') {
          this.acceptAttempt(data.attempt);
        } else if (data.attempt?.submitted_at) {
          this.lastResultId = data.attempt.id;
          this.lastAttemptExpired = data.attempt.status === 'expired';
        }
        this.applyQuestions(data);
        this.loading = false;
        this.cdr.detectChanges();
      },
      error: () => {
        this.loading = false;
        this.errorKey = 'quiz.loadError';
        this.cdr.detectChanges();
      }
    });
  }

  startQuiz(): void {
    if (this.attemptId || this.loading) return;
    this.loading = true;
    this.errorKey = '';
    this.quizAttemptApi.start(this.quizId, this.mode).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => {
        if (data.status !== 'in_progress') {
          this.router.navigate(['/app/results', data.id]);
          return;
        }
        this.acceptAttempt(data);
        this.loadQuiz();
      },
      error: () => {
        this.loading = false;
        this.errorKey = 'quiz.loadError';
        this.cdr.detectChanges();
      }
    });
  }

  private applyQuestions(data: ApiQuizWithQuestions): void {
    this.userAnswers = {};
    this.questions = data.questions.map(q => this.mapQuestion(q, data.subject_name, data.difficulty));
    data.questions.forEach((q, index) => {
      this.userAnswers[index] = this.questions[index].options
        .filter(option => q.selected_choice_ids?.includes(option.choiceId)).map(option => option.key);
      this.bookmarkedState[index] = q.is_bookmarked;
    });
  }

  private acceptAttempt(attempt: ApiQuizAttempt): void {
    this.attemptId = attempt.id;
    this.mode = attempt.mode;
    this.expiryRequested = false;
    // Anchor to a monotonic browser clock using the server's deadline/time.
    // A refresh or suspended interval never reconstructs a full quiz duration.
    this.deadlineTick = attempt.deadline_at
      ? performance.now() + Math.max(0, Date.parse(attempt.deadline_at) - Date.parse(attempt.server_time))
      : null;
    this.updateCountdown();
    clearInterval(this.timerInterval);
    if (this.deadlineTick !== null) {
      this.timerInterval = setInterval(() => {
        this.updateCountdown();
        if (++this.tickCount % 30 === 0) this.syncAttempt();
        this.cdr.detectChanges();
      }, 1000);
    }
  }

  private updateCountdown(): void {
    this.timerSeconds = this.deadlineTick === null ? 0 : Math.max(0, Math.ceil((this.deadlineTick - performance.now()) / 1000));
    if (this.deadlineTick !== null && this.timerSeconds === 0 && !this.expiryRequested) {
      this.expiryRequested = true;
      this.syncAttempt();
    }
  }

  private syncAttempt(): void {
    if (!this.attemptId || this.completed || this.syncing) return;
    this.syncing = true;
    this.quizAttemptApi.getAttempt(this.attemptId).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => {
        this.syncing = false;
        if (data.status !== 'in_progress') {
          this.completed = true;
          clearInterval(this.timerInterval);
          this.router.navigate(['/app/results', data.id]);
        } else {
          this.acceptAttempt(data);
        }
        this.cdr.detectChanges();
      },
      error: () => {
        this.syncing = false;
        this.errorKey = 'quiz.connectionError';
        this.cdr.detectChanges();
      }
    });
  }

  private mapQuestion(q: ApiQuestion, subjectName: string | null, difficulty: ApiQuizWithQuestions['difficulty']): Question {
    return {
      id: q.id, type: q.type, text: q.question,
      options: this.choiceShuffler.shuffle(q.choices, `attempt:${this.attemptId}:${q.id}`).map((choice, i) => ({
        choiceId: choice.id, key: String.fromCharCode(65 + i), label: `${String.fromCharCode(65 + i)}.`, text: choice.choice_text
      })),
      correctAnswers: [], explanation: '', points: q.marks, difficulty, category: subjectName ?? ''
    };
  }

  get currentQuestion(): Question { return this.questions[this.currentIndex]; }
  get selectedOptions(): string[] { return this.userAnswers[this.currentIndex] ?? []; }
  get isSubmitted(): boolean { return !!this.submittedState[this.currentIndex]; }
  get answeredCount(): number { return Object.values(this.userAnswers).filter(answers => answers.length > 0).length; }
  get progressPercentage(): number { return this.questions.length ? Math.round(this.answeredCount / this.questions.length * 100) : 0; }
  get answersDisabled(): boolean {
    return !this.attemptId || this.loading || this.answerSaving || this.submitting || this.completed
      || (this.mode === 'exam' && this.timerSeconds === 0);
  }
  get timeRemaining(): string {
    if (this.mode === 'tutor') return '—';
    return `${Math.floor(this.timerSeconds / 60).toString().padStart(2, '0')}:${(this.timerSeconds % 60).toString().padStart(2, '0')}`;
  }
  get navigatorGrid(): NavigatorItem[] {
    return this.questions.map((_, index) => ({ number: index + 1,
      status: index === this.currentIndex ? 'current' : this.userAnswers[index]?.length ? 'answered' : 'unanswered' }));
  }
  get isCurrentBookmarked(): boolean { return !!this.bookmarkedState[this.currentIndex]; }

  selectOption(key: string): void {
    if (this.answersDisabled || !this.attemptId) return;
    const index = this.currentIndex;
    const question = this.questions[index];
    if (!question.options.some(option => option.key === key)) return;
    const previous = this.userAnswers[index] ?? [];
    const next = previous.includes(key) ? previous.filter(value => value !== key)
      : question.type === 'multiple_choice' ? [...previous, key] : [key];
    this.userAnswers[index] = next;
    this.answerSaving = true;
    this.errorKey = '';
    this.submittedState[index] = false;
    const choiceIds = question.options.filter(option => next.includes(option.key)).map(option => option.choiceId);
    this.quizAttemptApi.saveAnswer(this.attemptId, { question_id: question.id, choice_ids: choiceIds })
      .pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
        next: ({ data }) => {
          this.answerSaving = false;
          if (data) this.applyFeedback(index, data);
          if (this.mode === 'exam' && this.timerSeconds === 0) this.syncAttempt();
          this.cdr.detectChanges();
        },
        error: (error) => {
          this.answerSaving = false;
          this.userAnswers[index] = previous;
          this.errorKey = 'quiz.saveError';
          if (error.status === 409) this.syncAttempt();
          this.cdr.detectChanges();
        }
      });
  }

  private applyFeedback(index: number, feedback: ApiAnswerFeedback): void {
    this.submittedState[index] = true;
    const question = this.questions[index];
    question.correctAnswers = question.options.filter(option => feedback.correct_choice_ids.includes(option.choiceId)).map(option => option.key);
    question.explanation = feedback.explanation;
  }

  goToQuestion(index: number): void {
    if (index >= 0 && index < this.questions.length) this.currentIndex = index;
  }
  nextQuestion(): void { this.goToQuestion(this.currentIndex + 1); }
  prevQuestion(): void { this.goToQuestion(this.currentIndex - 1); }

  submitQuiz(): void {
    if (!this.attemptId || this.submitting || this.answerSaving || this.completed) return;
    this.submitting = true;
    this.errorKey = '';
    this.quizAttemptApi.submit(this.attemptId).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: (res) => {
        this.submitting = false;
        if (res.data.status === 'in_progress') {
          this.acceptAttempt(res.data);
          return;
        }
        this.completed = true;
        this.lastAttemptExpired = res.data.status === 'expired';
        clearInterval(this.timerInterval);
        this.rewards = res.rewards;
        this.showRewards = true;
        this.cdr.detectChanges();
      },
      error: (error) => {
        this.submitting = false;
        this.errorKey = 'quiz.submitError';
        if (error.status === 409) this.syncAttempt();
        this.cdr.detectChanges();
      }
    });
  }

  continueToResults(): void { this.showResultsGate = true; }
  onGateFinished(): void {
    this.showResultsGate = false;
    this.router.navigate(['/app/results', this.attemptId]);
  }
  toggleBookmark(): void {
    const index = this.currentIndex;
    this.bookmarkApi.toggle(this.currentQuestion.id).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: ({ data }) => { this.bookmarkedState[index] = data.bookmarked; this.cdr.detectChanges(); }
    });
  }
  setMode(mode: 'tutor' | 'exam'): void {
    if (!this.attemptId && !this.loading) this.mode = mode;
  }
  get difficultyClass(): string { return this.currentQuestion.difficulty?.toLowerCase() ?? ''; }
  get difficultyLabel(): string { return this.currentQuestion.difficulty ? DIFFICULTY_LABEL_KEYS[this.currentQuestion.difficulty] : ''; }
}
