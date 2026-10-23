import {
  ChangeDetectionStrategy,
  Component,
  OnInit,
  inject,
  ChangeDetectorRef,
  DestroyRef,
} from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { LandingApi } from '../../landing/services/landing-api';
import { LeaderboardPreviewUser, NewQuiz, PopularQuiz } from '../../../core/models/landing';

@Component({
  selector: 'app-quiz-dashboard-grid',
  standalone: true,
  imports: [CommonModule, TranslocoModule, RouterLink],
  templateUrl: './quiz-dashboard-grid.html',
  styleUrl: './quiz-dashboard-grid.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class QuizDashboardGrid implements OnInit {
  private readonly landingApi = inject(LandingApi);
  private readonly cdr = inject(ChangeDetectorRef);
  private readonly destroyRef = inject(DestroyRef);

  popularQuizzes: PopularQuiz[] = [];
  newQuizzes: NewQuiz[] = [];
  leaderboardPreview: LeaderboardPreviewUser[] = [];
  isLoading = false;
  hasError = false;
  newCategory = '';
  popularCategory = '';
  topThreeOnly = false;

  get newCategories(): string[] {
    return this.categories(this.newQuizzes);
  }
  get popularCategories(): string[] {
    return this.categories(this.popularQuizzes);
  }
  get visibleNewQuizzes(): NewQuiz[] {
    return this.newCategory
      ? this.newQuizzes.filter((quiz) => quiz.category === this.newCategory)
      : this.newQuizzes;
  }
  get visiblePopularQuizzes(): PopularQuiz[] {
    return this.popularCategory
      ? this.popularQuizzes.filter((quiz) => quiz.category === this.popularCategory)
      : this.popularQuizzes;
  }
  get visibleRankings(): LeaderboardPreviewUser[] {
    return this.topThreeOnly ? this.leaderboardPreview.slice(0, 3) : this.leaderboardPreview;
  }

  private categories(quizzes: { category: string | null }[]): string[] {
    return [
      ...new Set(
        quizzes.map((quiz) => quiz.category).filter((category): category is string => !!category),
      ),
    ];
  }

  ngOnInit(): void {
    this.loadData();
  }

  loadData(): void {
    this.isLoading = true;
    this.hasError = false;
    this.landingApi
      .getLandingData()
      .pipe(takeUntilDestroyed(this.destroyRef))
      .subscribe({
        next: (res) => {
          this.popularQuizzes = res.data.popular_quizzes;
          this.newQuizzes = res.data.new_quizzes;
          this.leaderboardPreview = res.data.leaderboard_preview;
          this.isLoading = false;
          this.cdr.markForCheck();
        },
        error: () => {
          this.hasError = true;
          this.isLoading = false;
          this.cdr.markForCheck();
        },
      });
  }

  initials(username: string): string {
    return Array.from(username).slice(0, 2).join('').toUpperCase();
  }
}
