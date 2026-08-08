import { Component, OnInit, OnDestroy, inject, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, Router, RouterLink } from '@angular/router';

import { QuizApi, ApiQuestion } from '../services/quiz.api';
import { QuizAttemptApi, ApiAnswerFeedback, ApiQuizRewards } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';
import { ResultsGateComponent } from '../quiz-result/results-gate.component';

export interface QuestionOption {
  key: string;
  label: string;
  text: string;
}

export interface Question {
  id: number;
  text: string;
  codeSnippet?: string;
  options: QuestionOption[];
  correctAnswer: string;
  explanation: string;
  points: number;
  difficulty: 'Beginner' | 'Intermediate' | 'Advanced' | null;
  category: string;
}

export interface NavigatorItem {
  number: number;
  status: 'answered' | 'current' | 'unanswered';
}

const LETTERS = ['A', 'B', 'C', 'D', 'E', 'F'];

@Component({
  selector: 'app-active-quiz',
  standalone: true,
  imports: [CommonModule, RouterLink, ResultsGateComponent],
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

  quizId = 0;
  attemptId: number | null = null;
  mode: 'tutor' | 'exam' = 'exam';
  quizTitle = '';

  currentIndex = 0;
  questions: Question[] = [];

  userAnswers: Record<number, string> = {};
  submittedState: Record<number, boolean> = {};

  timerSeconds = 1200;
  private timerInterval: any;
  private questionRefs: ApiQuestion[] = [];

  bookmarkedState: Record<number, boolean> = {};

  showRewards = false;
  rewards: ApiQuizRewards | null = null;

  showResultsGate = false;

  ngOnInit(): void {
    this.quizId = Number(this.route.snapshot.paramMap.get('id'));
    this.loadQuiz();
  }

  ngOnDestroy(): void {
    if (this.timerInterval) clearInterval(this.timerInterval);
  }

  private loadQuiz(): void {
    this.quizAttemptApi.start(this.quizId).subscribe({
      next: (attemptRes) => {
        this.attemptId = attemptRes.data.id;
        this.mode = attemptRes.data.mode;

        this.quizApi.getQuestions(this.quizId).subscribe({
          next: (quizRes) => {
            this.quizTitle = quizRes.data.title;
            this.timerSeconds = quizRes.data.duration * 60;

            this.questionRefs = quizRes.data.questions;
            this.questions = quizRes.data.questions.map((q) =>
              this.mapQuestion(q, quizRes.data.subject_name, quizRes.data.difficulty)
            );

            quizRes.data.questions.forEach((q, idx) => {
              if (q.selected_choice_ids?.length) {
                const choiceIndex = q.choices.findIndex((c) => c.id === q.selected_choice_ids[0]);
                if (choiceIndex >= 0) {
                  this.userAnswers[idx] = LETTERS[choiceIndex];
                }
              }
              this.bookmarkedState[idx] = q.is_bookmarked;
            });

            this.startTimer();
            this.cdr.detectChanges();
          }
        });
      }
    });
  }

  private mapQuestion(
    q: ApiQuestion,
    subjectName: string | null,
    difficulty: 'Beginner' | 'Intermediate' | 'Advanced' | null
  ): Question {
    return {
      id: q.id,
      text: q.question,
      options: q.choices.map((c, i) => ({
        key: LETTERS[i],
        label: `${LETTERS[i]}.`,
        text: c.choice_text
      })),
      correctAnswer: '',
      explanation: '',
      points: q.marks,
      difficulty,
      category: subjectName ?? ''
    };
  }

  get currentQuestion(): Question {
    return this.questions[this.currentIndex];
  }

  get selectedOption(): string | null {
    return this.userAnswers[this.currentIndex] || null;
  }

  get isSubmitted(): boolean {
    return !!this.submittedState[this.currentIndex];
  }

  get answeredCount(): number {
    return Object.keys(this.userAnswers).length;
  }

  get progressPercentage(): number {
    return this.questions.length
      ? Math.round((this.answeredCount / this.questions.length) * 100)
      : 0;
  }

  get timeRemaining(): string {
    const mins = Math.floor(this.timerSeconds / 60);
    const secs = this.timerSeconds % 60;
    return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
  }

  get navigatorGrid(): NavigatorItem[] {
    return this.questions.map((_, idx) => {
      let status: 'answered' | 'current' | 'unanswered' = 'unanswered';
      if (idx === this.currentIndex) {
        status = 'current';
      } else if (this.userAnswers[idx]) {
        status = 'answered';
      }
      return { number: idx + 1, status };
    });
  }

  get isCurrentBookmarked(): boolean {
    return !!this.bookmarkedState[this.currentIndex];
  }

  selectOption(key: string): void {
    if (!this.attemptId) return;

    const answeredIndex = this.currentIndex;
    const question = this.questions[answeredIndex];
    const optionIndex = question.options.findIndex((o) => o.key === key);
    const choiceId = this.questionRefs[answeredIndex]?.choices[optionIndex]?.id;
    if (choiceId === undefined) return;

    this.userAnswers[answeredIndex] = key;
    this.cdr.detectChanges();

    this.quizAttemptApi.saveAnswer(this.attemptId, {
      question_id: question.id,
      choice_id: choiceId,
      selected: true
    }).subscribe({
      next: (res) => {
        if (res.data) {
          this.applyFeedback(answeredIndex, res.data);
        }
        this.cdr.detectChanges();
      }
    });
  }

  private applyFeedback(index: number, feedback: ApiAnswerFeedback): void {
    this.submittedState[index] = true;

    const question = this.questions[index];
    const choices = this.questionRefs[index]?.choices ?? [];
    const correctIndex = choices.findIndex((c) => c.id === feedback.correct_choice_ids[0]);

    question.correctAnswer = correctIndex >= 0 ? LETTERS[correctIndex] : '';
    question.explanation = feedback.explanation;
  }

  goToQuestion(index: number): void {
    if (index >= 0 && index < this.questions.length) {
      this.currentIndex = index;
      this.cdr.detectChanges();
    }
  }

  nextQuestion(): void {
    if (this.currentIndex < this.questions.length - 1) {
      this.currentIndex++;
      this.cdr.detectChanges();
    }
  }

  prevQuestion(): void {
    if (this.currentIndex > 0) {
      this.currentIndex--;
      this.cdr.detectChanges();
    }
  }

  submitQuiz(): void {
    if (!this.attemptId) return;

    this.quizAttemptApi.submit(this.attemptId).subscribe({
      next: (res) => {
        this.rewards = res.rewards;
        this.showRewards = true;
        this.cdr.detectChanges();
      }
    });
  }

  continueToResults(): void {
    this.showResultsGate = true;
    this.cdr.detectChanges();
  }

  onGateFinished(): void {
    this.showResultsGate = false;
    this.router.navigate(['/app/results', this.attemptId]);
  }

  private startTimer(): void {
    this.timerInterval = setInterval(() => {
      if (this.timerSeconds > 0) {
        this.timerSeconds--;
      } else {
        clearInterval(this.timerInterval);
      }
      this.cdr.detectChanges();
    }, 1000);
  }

  toggleBookmark(): void {
    const question = this.currentQuestion;
    this.bookmarkApi.toggle(question.id).subscribe({
      next: (res) => {
        this.bookmarkedState[this.currentIndex] = res.data.bookmarked;
        this.cdr.detectChanges();
      }
    });
  }

  setMode(mode: 'tutor' | 'exam'): void {
    if (!this.attemptId || this.mode === mode) return;

    const previousMode = this.mode;
    this.mode = mode;
    this.cdr.detectChanges();

    this.quizAttemptApi.updateMode(this.attemptId, mode).subscribe({
      next: (res) => {
        this.mode = res.data.mode;

        if (mode === 'tutor' && this.userAnswers[this.currentIndex] && !this.submittedState[this.currentIndex]) {
          this.revealCurrentFeedback();
        } else {
          this.cdr.detectChanges();
        }
      },
      error: () => {
        this.mode = previousMode;
        this.cdr.detectChanges();
      }
    });
  }

  private revealCurrentFeedback(): void {
    if (!this.attemptId) return;

    const answeredIndex = this.currentIndex;
    const question = this.questions[answeredIndex];
    const key = this.userAnswers[answeredIndex];
    const optionIndex = question.options.findIndex((o) => o.key === key);
    const choiceId = this.questionRefs[answeredIndex]?.choices[optionIndex]?.id;
    if (choiceId === undefined) return;

    this.quizAttemptApi.saveAnswer(this.attemptId, {
      question_id: question.id,
      choice_id: choiceId,
      selected: true
    }).subscribe({
      next: (res) => {
        if (res.data) {
          this.applyFeedback(answeredIndex, res.data);
        }
        this.cdr.detectChanges();
      }
    });
  }
}