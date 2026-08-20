import { ChangeDetectorRef, Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink, ActivatedRoute } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { TrialQuestion, TrialGradeResult } from '../../../core/models/trial-quiz';
import { TrialQuizApi } from '../../../core/services/trial-quiz-api';

const LETTERS = ['A', 'B', 'C', 'D', 'E', 'F'];

@Component({
  selector: 'app-trial-quiz',
  standalone: true,
  imports: [CommonModule, RouterLink, TranslocoModule],
  templateUrl: './trial-quiz.html',
  styleUrl: './trial-quiz.scss',
})
export class TrialQuiz implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly trialApi = inject(TrialQuizApi);
  private readonly cdr = inject(ChangeDetectorRef);

  readonly letters = LETTERS;

  label = '';
  questions: TrialQuestion[] = [];
  currentIndex = 0;
  mode: 'tutor' | 'exam' = 'exam';
  submittedState: Record<number, boolean> = {};

  userAnswers: Record<number, number> = {}; // questionId -> choiceId
  isLoading = false;
  isFinished = false;
  gradeResults: Record<number, TrialGradeResult> = {};
  finalScore = { correct: 0, total: 0, percentage: 0 };

  ngOnInit(): void {
    const majorSlug = this.route.snapshot.paramMap.get('majorSlug');
    const subjectSlug = this.route.snapshot.paramMap.get('subjectSlug');

    this.isLoading = true;
    const request$ = majorSlug
      ? this.trialApi.getByMajor(majorSlug)
      : this.trialApi.getBySubject(subjectSlug!);

    request$.subscribe({
      next: (res) => {
        this.label = res.data.label;
        this.questions = res.data.questions;
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; },
    });
  }

  get currentQuestion(): TrialQuestion {
    return this.questions[this.currentIndex];
  }

  get answeredCount(): number {
    return Object.keys(this.userAnswers).length;
  }

get isCurrentSubmitted(): boolean {
  return !!this.submittedState[this.currentQuestion.id];
}

selectChoice(choiceId: number): void {
  const question = this.currentQuestion;
  this.userAnswers[question.id] = choiceId;
  this.cdr.detectChanges();

  if (this.mode === 'tutor') {
    this.trialApi.grade({ [question.id]: choiceId }).subscribe({
      next: (res) => {
        const result = res.data.results[0];
        if (result) {
          this.gradeResults[question.id] = result;
          this.submittedState[question.id] = true;
        }
        this.cdr.detectChanges();
      },
    });
  }
}

  nextQuestion(): void {
    if (this.currentIndex < this.questions.length - 1) this.currentIndex++;
  }

  prevQuestion(): void {
    if (this.currentIndex > 0) this.currentIndex--;
  }

  goToQuestion(i: number): void {
    this.currentIndex = i;
  }

  setMode(mode: 'tutor' | 'exam'): void {
    this.mode = mode;
  }

  submitTrial(): void {
    this.trialApi.grade(this.userAnswers).subscribe({
      next: (res) => {
        res.data.results.forEach((r) => {
          this.gradeResults[r.question_id] = r;
        });
        this.finalScore = {
          correct: res.data.correct_count,
          total: res.data.total_questions,
          percentage: res.data.percentage,
        };
        this.isFinished = true;
      },
    });
  }
}