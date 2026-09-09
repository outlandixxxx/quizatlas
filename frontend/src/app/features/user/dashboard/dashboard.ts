import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { Router } from '@angular/router';

import {
  Dashboard as DashboardModel,
  InProgressQuiz,
  RecommendedQuiz,
  RecentResult,
  Achievement,
  LeaderboardUser,
} from '../models/dashboard';
import { UserApi } from '../services/user-api';
import { ExamPdfApi } from '../services/exam-pdf.api';
import { ExamPdf } from '../../../core/models/exam-pdf';

const DEFAULT_AVATAR =
  'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

  const LEVEL_LABEL_KEYS: Record<string, string> = {
  beginner: 'DASHBOARD.LEVEL.BEGINNER',
  intermediate: 'DASHBOARD.LEVEL.INTERMEDIATE',
  advanced: 'DASHBOARD.LEVEL.ADVANCED',
  professional: 'DASHBOARD.LEVEL.PROFESSIONAL',
};

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './dashboard.html',
  styleUrl: './dashboard.scss',
})
export class Dashboard implements OnInit {
  private readonly userApi = inject(UserApi);
  private readonly router = inject(Router);

  readonly defaultAvatar = DEFAULT_AVATAR;
  private readonly examPdfApi = inject(ExamPdfApi);


  activeTab: 'inProgress' | 'recommended' | 'recent' = 'inProgress';

  isLoading = false;
  dashboard: DashboardModel | null = null;

  inProgressQuizzes: InProgressQuiz[] = [];
  recommendedQuizzes: RecommendedQuiz[] = [];
  recentResults: RecentResult[] = [];
  achievements: Achievement[] = [];
  leaderboard: LeaderboardUser[] = [];

recentPdfs: ExamPdf[] = [];
pdfsLoaded = false;

  ngOnInit(): void {
    this.loadDashboard();
  }

  private loadDashboard(): void {
    this.isLoading = true;

    this.userApi.getDashboard().subscribe({
      next: ({ data }) => {
        this.dashboard = data;

        this.inProgressQuizzes = data.in_progress_quizzes;
        this.recommendedQuizzes = data.recommended_quizzes;
        this.recentResults = data.recent_results;
        this.achievements = data.achievements;
        this.leaderboard = data.leaderboard;

        this.isLoading = false;
      },
      error: (error) => {
        console.error('Failed to load dashboard.', error);
        this.isLoading = false;
      },
    });
  }

  onAvatarError(user: LeaderboardUser): void {
    user.avatar = this.defaultAvatar;
  }

  goToLeaderboard(): void {
    this.router.navigate(['/app/leaderboard']);
  }

  continueHeroQuiz(): void {
    const quizId = this.dashboard?.hero?.quiz_id;
    if (quizId) {
      this.router.navigate(['/app/quiz', quizId]);
    }
  }

  continueQuiz(item: InProgressQuiz): void {
    this.router.navigate(['/app/quiz', item.quiz_id]);
  }

  startRecommendedQuiz(item: RecommendedQuiz): void {
    this.router.navigate(['/app/quiz', item.id]);
  }

  reviewResult(result: RecentResult): void {
    this.router.navigate(['/app/results', result.id]);
  }

  goToQuizzes(): void {
    this.router.navigate(['/app/quizzes']);
  }

  goToPracticeHistory(): void {
  this.router.navigate(['/app/practice'], { fragment: 'history' });
}

goToAchievements(): void {
  this.router.navigate(['/app/achievements']);
}

badgeImage(key: string): string {
  return `assets/badges/${key}.webp`;
}

setActiveTab(tab: 'inProgress' | 'recommended' | 'recent'): void {
  this.activeTab = tab;
  if (tab === 'recent' && !this.pdfsLoaded) {
    this.loadRecentPdfs();
  }
}

private loadRecentPdfs(): void {
  this.examPdfApi.list({ per_page: 5 }).subscribe({
    next: (res) => {
      this.recentPdfs = res.data.items;
      this.pdfsLoaded = true;
    }
  });
}

viewPdf(pdf: ExamPdf): void {
  window.open(pdf.view_url, '_blank', 'noopener');
}

levelClass(level: string): string {
  return level?.toLowerCase() ?? '';
}

levelLabel(level: string): string {
  return LEVEL_LABEL_KEYS[level?.toLowerCase()] ?? level;
}
}