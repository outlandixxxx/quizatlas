import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink, ActivatedRoute, Router } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';

import { QuizAttemptApi, ApiQuizResult } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';
import { FormsModule } from '@angular/forms';
import { QuizRatingApi } from '../../../core/services/quiz-rating-api';

export interface ResultQuestion {
  id: number;
  number: number;
  text: string;
  points: number;
  isCorrect: boolean;
  isAnswered: boolean;
  options: { key: string; label: string }[];
  userAnswerKey: string | null;
  correctAnswerKey: string | null;
  explanation: string;
  isBookmarked: boolean;
}

export interface NextStep {
  icon: string;
  titleKey: string;
  descriptionKey: string;
  descriptionParams?: Record<string, string>;
  route: any[];
}

@Component({
  selector: 'app-quiz-result',
  standalone: true,
  imports: [CommonModule, FormsModule, RouterLink, TranslocoModule],
  templateUrl: './quiz-result.component.html',
  styleUrl: './quiz-result.component.scss'
})
export class QuizResultComponent implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly quizAttemptApi = inject(QuizAttemptApi);
  private readonly bookmarkApi = inject(BookmarkApi);
  private readonly ratingApi = inject(QuizRatingApi);
  private readonly transloco = inject(TranslocoService);

  attemptId = 0;
  quizId = 0;
  subjectId: number | null = null;

  quizTitle = '';
  percentage = 0;
  passed = false;
  timeSpentLabel = '—';
  score = 0;
  totalMarks = 0;
  rank: number | null = null;

  totalQuestions = 0;
  correctCount = 0;
  incorrectCount = 0;
  unansweredCount = 0;

  subjectBreakdown: { subjectName: string; percentage: number }[] = [];
  questions: ResultQuestion[] = [];
  nextSteps: NextStep[] = [];

  expandedQuestionId: number | null = null;
  showAllQuestions = false;

  myRating = 0;
  hoverRating = 0;
  ratingComment = '';
  isSubmittingRating = false;
  ratingSubmitted = false;
  ratingErrorMsg = '';
  averageRating: number | null = null;
  ratingsCount = 0;

  ngOnInit(): void {
    this.attemptId = Number(this.route.snapshot.paramMap.get('id'));
    this.load();
  }

  private load(): void {
    this.quizAttemptApi.getResult(this.attemptId).subscribe({
      next: (res) => {
        this.applyResult(res.data);
        this.loadMyRating();
      }
    });
  }

  private loadMyRating(): void {
    this.ratingApi.getMyRating(this.quizId).subscribe({
      next: (res) => {
        if (res.data) {
          this.myRating = res.data.rating;
          this.ratingComment = res.data.comment ?? '';
          this.ratingSubmitted = true;
        }
      }
    });
  }

  setHoverRating(star: number): void {
    this.hoverRating = star;
  }

  clearHoverRating(): void {
    this.hoverRating = 0;
  }

  selectRating(star: number): void {
    this.myRating = star;
  }

  submitRating(): void {
    if (!this.myRating) return;

    this.isSubmittingRating = true;
    this.ratingErrorMsg = '';

    this.ratingApi.submitRating(this.quizId, {
      rating: this.myRating,
      comment: this.ratingComment.trim() || undefined,
    }).subscribe({
      next: (res) => {
        this.isSubmittingRating = false;
        this.ratingSubmitted = true;
        this.averageRating = res.data.average_rating;
        this.ratingsCount = res.data.ratings_count;
      },
      error: () => {
        this.isSubmittingRating = false;
        this.ratingErrorMsg = 'result.ratingError';
      }
    });
  }

  private applyResult(data: ApiQuizResult): void {
    this.quizId = data.quiz_id;
    this.quizTitle = data.quiz_title;
    this.percentage = data.percentage;
    this.passed = data.passed;
    this.score = data.score;
    this.totalMarks = data.total_marks;
    this.rank = data.rank;
    this.timeSpentLabel = this.formatDuration(data.time_spent_seconds);

    this.totalQuestions = data.total_questions;
    this.correctCount = data.correct_count;
    this.incorrectCount = data.incorrect_count;
    this.unansweredCount = data.unanswered_count;

    this.subjectBreakdown = data.subject_breakdown.map((s) => ({
      subjectName: s.subject_name,
      percentage: s.percentage,
    }));

    this.questions = data.questions.map((q) => ({
      id: q.id,
      number: q.number,
      text: q.text,
      points: q.marks,
      isCorrect: q.is_correct,
      isAnswered: q.is_answered,
      options: q.options,
      userAnswerKey: q.user_answer_key,
      correctAnswerKey: q.correct_answer_key,
      explanation: q.explanation,
      isBookmarked: q.is_bookmarked,
    }));

    this.nextSteps = this.buildNextSteps(data);
  }

  private buildNextSteps(data: ApiQuizResult): NextStep[] {
    const steps: NextStep[] = [];

    if (data.percentage < 80) {
      steps.push({
        icon: 'target',
        titleKey: 'result.stepPracticeMore',
        descriptionKey: 'result.stepPracticeMoreDesc',
        route: ['/app/quizzes'],
      });
    }

    steps.push({
      icon: 'menu_book',
      titleKey: 'result.stepStudyGuide',
      descriptionKey: 'result.stepStudyGuideDesc',
      descriptionParams: {
        subject: data.subject_name ?? this.transloco.translate('result.thisSubject'),
      },
      route: ['/app/quizzes'],
    });

    if (data.percentage >= 80) {
      steps.push({
        icon: 'trending_up',
        titleKey: 'result.stepAdvancedQuiz',
        descriptionKey: 'result.stepAdvancedQuizDesc',
        route: ['/app/quizzes'],
      });
    }

    return steps;
  }

  private formatDuration(seconds: number | null): string {
    if (seconds === null) return '—';
    const mins = Math.floor(seconds / 60);
    const secs = seconds % 60;
    return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
  }

  get visibleQuestions(): ResultQuestion[] {
    return this.showAllQuestions ? this.questions : this.questions.slice(0, 5);
  }

  toggleExpand(id: number): void {
    this.expandedQuestionId = this.expandedQuestionId === id ? null : id;
  }

  toggleBookmark(question: ResultQuestion, event: Event): void {
    event.stopPropagation();
    this.bookmarkApi.toggle(question.id).subscribe({
      next: (res) => {
        question.isBookmarked = res.data.bookmarked;
      }
    });
  }

  retakeQuiz(): void {
    this.router.navigate(['/app/quiz', this.quizId]);
  }

  backToQuizzes(): void {
    this.router.navigate(['/app/quizzes']);
  }

  copyShareLink(): void {
    const url = window.location.href;
    navigator.clipboard?.writeText(url);
  }
}