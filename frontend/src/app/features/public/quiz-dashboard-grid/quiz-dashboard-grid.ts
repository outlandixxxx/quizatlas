import { ChangeDetectionStrategy, Component, OnInit, inject, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { LandingApi } from '../../landing/services/landing-api';
import { LeaderboardPreviewUser, NewQuiz, PopularQuiz } from '../../../core/models/landing';

const SUBJECT_ICONS = ['functions', 'science', 'calculate', 'biotech', 'terminal', 'gavel', 'lan', 'trending_up'];

@Component({
  selector: 'app-quiz-dashboard-grid',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './quiz-dashboard-grid.html',
  styleUrl: './quiz-dashboard-grid.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class QuizDashboardGrid implements OnInit {
  private readonly landingApi = inject(LandingApi);
  private readonly cdr = inject(ChangeDetectorRef);

  popularQuizzes: PopularQuiz[] = [];
  newQuizzes: NewQuiz[] = [];
  leaderboardPreview: LeaderboardPreviewUser[] = [];
  isLoading = false;

  ngOnInit(): void {
    this.isLoading = true;
    this.landingApi.getLandingData().subscribe({
      next: (res) => {
        this.popularQuizzes = res.data.popular_quizzes;
        this.newQuizzes = res.data.new_quizzes;
        this.leaderboardPreview = res.data.leaderboard_preview;
        this.isLoading = false;
        this.cdr.markForCheck();
      },
      error: () => {
        this.isLoading = false;
        this.cdr.markForCheck();
      }
    });
  }

  iconClass(index: number, palette: string[]): string {
    return palette[index % palette.length];
  }

  iconName(index: number): string {
    return SUBJECT_ICONS[index % SUBJECT_ICONS.length];
  }

  initials(name: string): string {
    return name.split(' ').map(p => p[0]).slice(0, 2).join('').toUpperCase();
  }

  rankClass(rank: number): string {
    if (rank === 1) return 'gold-rank';
    if (rank === 2) return 'silver-rank';
    if (rank === 3) return 'bronze-rank';
    return 'light-rank';
  }
}