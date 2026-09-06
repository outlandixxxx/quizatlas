import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { QuizApi, ApiQuizListItem, ApiPaginationMeta } from '../services/quiz.api';
import { PracticeApi, ApiMajor, ApiSubject } from '../services/practice.api';

export interface Major {
  id: number;
  name: string;
  icon: string;
  description: string | null;
}

export interface Subject {
  id: number;
  name: string;
  year: string;
  code: string | null;
}

export interface QuizCard {
  id: number;
  title: string;
  difficulty: 'Beginner' | 'Intermediate' | 'Advanced' |'Professional'| null;
  questionsCount: number;
  status: 'not_started' | 'in_progress' | 'submitted' | 'expired';
  progressPercentage: number;
  latestAttemptId: number | null;
}

export type StatusTab = 'all' | 'not_started' | 'in_progress' | 'submitted';

const DIFFICULTY_LABEL_KEYS: Record<string, string> = {
  Beginner: 'quizzes.difficultyBeginner',
  Intermediate: 'quizzes.difficultyIntermediate',
  Advanced: 'quizzes.difficultyAdvanced',
  Professional: 'quizzes.difficultyProfessional',
};

const ACTION_LABEL_KEYS: Record<string, string> = {
  submitted: 'quizzes.actionViewResults',
  in_progress: 'quizzes.actionContinue',
  not_started: 'quizzes.actionStart',
  expired: 'quizzes.actionStart',
};

@Component({
  selector: 'app-quizzes',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './quizzes.component.html',
  styleUrl: './quizzes.component.scss'
})
export class QuizzesComponent implements OnInit {
  private readonly quizApi = inject(QuizApi);
  private readonly practiceApi = inject(PracticeApi);
  private readonly router = inject(Router);
  private readonly route = inject(ActivatedRoute);

  currentStep: 1 | 2 | 3 = 1;

  majors: Major[] = [];
  subjects: Subject[] = [];
  selectedMajor: Major | null = null;
  selectedSubject: Subject | null = null;

  searchQuery = '';
  selectedDifficulty: string | null = null;
  activeTab: StatusTab = 'all';

  // Raw values unchanged — sent directly as the API filter param.
  difficulties = ['Beginner', 'Intermediate', 'Advanced'];

  quizzes: QuizCard[] = [];
  meta: ApiPaginationMeta = { current_page: 1, last_page: 1, per_page: 9, total: 0 };
  isLoading = false;

  private searchDebounce: any;

  ngOnInit(): void {
    this.loadMajors();
  }

  difficultyLabel(level: string): string {
    return DIFFICULTY_LABEL_KEYS[level] ?? level;
  }

  private loadMajors(): void {
    this.practiceApi.getMajors().subscribe({
      next: (res) => {
        this.majors = res.data.map((m: ApiMajor) => ({
          id: m.id, name: m.name, icon: m.icon, description: m.description
        }));
      }
    });
  }

  private loadSubjects(majorId: number): void {
    this.practiceApi.getSubjects(majorId).subscribe({
      next: (res) => {
        this.subjects = res.data.map((s: ApiSubject) => ({
          id: s.id, name: s.name, year: s.year, code: s.code
        }));
      }
    });
  }

  chooseMajor(major: Major): void {
    this.selectedMajor = major;
    this.selectedSubject = null;
    this.loadSubjects(major.id);
    this.currentStep = 2;
  }

  chooseSubject(subject: Subject): void {
    this.selectedSubject = subject;
    this.currentStep = 3;
    this.searchQuery = '';
    this.selectedDifficulty = null;
    this.activeTab = 'all';
    this.loadQuizzes(1);
  }

  backToMajors(): void {
    this.currentStep = 1;
    this.selectedSubject = null;
  }

  backToSubjects(): void {
    this.currentStep = 2;
  }

  private mapQuiz(q: ApiQuizListItem): QuizCard {
    return {
      id: q.id,
      title: q.title,
      difficulty: q.difficulty,
      questionsCount: q.questions_count,
      status: q.status,
      progressPercentage: q.progress_percentage,
      latestAttemptId: q.latest_attempt_id,
    };
  }

  loadQuizzes(page: number): void {
    if (!this.selectedSubject) return;

    this.isLoading = true;

    this.quizApi.getQuizzes({
      subject_id: this.selectedSubject.id,
      search: this.searchQuery || undefined,
      difficulty: this.selectedDifficulty ?? undefined,
      status: this.activeTab === 'all' ? undefined : this.activeTab,
      page,
      per_page: this.meta.per_page,
    }).subscribe({
      next: (res) => {
        this.quizzes = res.data.data.map((q) => this.mapQuiz(q));
        this.meta = res.data.meta;
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; }
    });
  }

  onSearchChange(): void {
    clearTimeout(this.searchDebounce);
    this.searchDebounce = setTimeout(() => this.loadQuizzes(1), 400);
  }

  selectDifficulty(level: string | null): void {
    this.selectedDifficulty = level;
    this.loadQuizzes(1);
  }

  selectTab(tab: StatusTab): void {
    this.activeTab = tab;
    this.loadQuizzes(1);
  }

  get pageNumbers(): number[] {
    const total = this.meta.last_page;
    const current = this.meta.current_page;
    const start = Math.max(1, current - 2);
    const end = Math.min(total, current + 2);
    const range: number[] = [];
    for (let i = start; i <= end; i++) range.push(i);
    return range;
  }

  goToPage(page: number): void {
    if (page < 1 || page > this.meta.last_page || page === this.meta.current_page) return;
    this.loadQuizzes(page);
  }

  actionLabel(quiz: QuizCard): string {
    return ACTION_LABEL_KEYS[quiz.status] ?? 'quizzes.actionStart';
  }

  onQuizAction(quiz: QuizCard): void {
    if (quiz.status === 'submitted' && quiz.latestAttemptId) {
      this.router.navigate(['/app/results', quiz.latestAttemptId]);
      return;
    }
    this.router.navigate(['/app/quiz', quiz.id]);
  }
}