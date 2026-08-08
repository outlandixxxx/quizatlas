import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink, ActivatedRoute, Router } from '@angular/router';

import { QuizAttemptApi, ApiQuizResult } from '../services/quiz-attempt.api';
import { BookmarkApi } from '../services/bookmark.api';

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
  title: string;
  description: string;
  route: any[];
}




@Component({
  selector: 'app-quiz-result',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './quiz-result.component.html',
  styleUrl: './quiz-result.component.scss'
})
export class QuizResultComponent implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly quizAttemptApi = inject(QuizAttemptApi);
  private readonly bookmarkApi = inject(BookmarkApi);

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

  

  ngOnInit(): void {
    this.attemptId = Number(this.route.snapshot.paramMap.get('id'));
    this.load();
  }

  private load(): void {
    this.quizAttemptApi.getResult(this.attemptId).subscribe({
      next: (res) => this.applyResult(res.data)
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
        title: 'Practice More',
        description: 'Focus on weak areas to improve your score',
        route: ['/app/quizzes'],
      });
    }

    steps.push({
      icon: 'menu_book',
      title: 'Study Guide',
      description: `Review ${data.subject_name ?? 'this subject'} fundamentals`,
      route: ['/app/quizzes'],
    });

    if (data.percentage >= 80) {
      steps.push({
        icon: 'trending_up',
        title: 'Take Advanced Quiz',
        description: 'Challenge yourself with harder questions',
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