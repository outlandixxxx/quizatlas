import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';

import { LeaderboardApi, ApiLeaderboardEntry, ApiLeaderboardMeta, ApiMyRank } from '../services/leaderboard.api';
import { PracticeApi, ApiMajor } from '../services/practice.api';

export type LeaderboardScope = 'global' | 'friends' | 'country' | 'major' | 'subject';
export type TimePeriod = 'all' | 'week' | 'month';

export interface LeaderboardRow {
  rank: number;
  name: string;
  avatarUrl: string | null;
  level: number;
  xp: number;
  quizzesCompleted: number;
  accuracy: number;
}


@Component({
  selector: 'app-leaderboard',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './leaderboard.component.html',
  styleUrl: './leaderboard.component.scss'
})
export class LeaderboardComponent implements OnInit {
 private readonly leaderboardApi = inject(LeaderboardApi);
  private readonly practiceApi = inject(PracticeApi);
  private readonly transloco = inject(TranslocoService);

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

  private readonly levelTierPalette = ['tier-green', 'tier-blue', 'tier-purple', 'tier-amber', 'tier-pink'];

  activeTab: LeaderboardScope = 'global';
  period: TimePeriod = 'all';

  majors: ApiMajor[] = [];
  subjects: { id: number; name: string }[] = [];
  selectedMajorId: number | null = null;
  selectedSubjectId: number | null = null;

  topThree: LeaderboardRow[] = [];
  rows: LeaderboardRow[] = [];
  meta: ApiLeaderboardMeta = { current_page: 1, last_page: 1, per_page: 10, total: 0 };

  myRank: ApiMyRank | null = null;
  isLoading = false;

  ngOnInit(): void {
    this.loadMajors();
    this.loadMyRank();
    this.loadLeaderboard(1);
  }

  private loadMajors(): void {
    this.practiceApi.getMajors().subscribe({
      next: (res) => { this.majors = res.data; }
    });
  }

  loadSubjects(): void {
    this.practiceApi.getSubjectsWithQuizzes().subscribe({
      next: (res) => { this.subjects = res.data; }
    });
  }

  private loadMyRank(): void {
    this.leaderboardApi.myRank().subscribe({
      next: (res) => { this.myRank = res.data; }
    });
  }

  private mapEntry(e: ApiLeaderboardEntry): LeaderboardRow {
    return {
      rank: e.rank,
      name: e.name,
      avatarUrl: e.avatar_url,
      level: e.level,
      xp: e.xp,
      quizzesCompleted: e.quizzes_completed,
      accuracy: e.accuracy,
    };
  }

  loadLeaderboard(page: number): void {
    this.isLoading = true;

    const scope: 'global' | 'friends' | 'country' =
      this.activeTab === 'major' || this.activeTab === 'subject' ? 'global' : this.activeTab;

    this.leaderboardApi.list({
      scope,
      major_id: this.selectedMajorId ?? undefined,
      subject_id: this.selectedSubjectId ?? undefined,
      period: this.period,
      page,
      per_page: this.meta.per_page,
    }).subscribe({
      next: (res) => {
        const items = res.data.items.map((e) => this.mapEntry(e));
        this.topThree = page === 1 ? items.slice(0, 3) : this.topThree;
        this.rows = page === 1 ? items.slice(3) : items;
        this.meta = res.data.meta;
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; }
    });
  }

  selectTab(tab: LeaderboardScope): void {
    this.activeTab = tab;
    if (tab === 'subject' && this.subjects.length === 0) {
      this.loadSubjects();
    }
    this.loadLeaderboard(1);
  }

  applyFilters(): void {
    this.loadLeaderboard(1);
  }

  get selectedMajorName(): string {
    return this.majors.find((m) => m.id === this.selectedMajorId)?.name
      ?? this.transloco.translate('leaderboard.allMajors');
  }

  get selectedSubjectName(): string {
    return this.subjects.find((s) => s.id === this.selectedSubjectId)?.name
      ?? this.transloco.translate('leaderboard.allSubjects');
  }

  levelTierClass(level: number): string {
    const index = Math.max(0, level - 1) % this.levelTierPalette.length;
    return this.levelTierPalette[index];
  }

  get paginationItems(): (number | 'ellipsis')[] {
    const total = this.meta.last_page;
    const current = this.meta.current_page;

    if (total <= 6) {
      return Array.from({ length: total }, (_, i) => i + 1);
    }

    const windowStart = Math.max(1, Math.min(current - 1, total - 4));
    const windowEnd = Math.min(total, windowStart + 3);

    const items: (number | 'ellipsis')[] = [];

    if (windowStart > 1) {
      items.push(1);
      if (windowStart > 2) items.push('ellipsis');
    }

    for (let i = windowStart; i <= windowEnd; i++) items.push(i);

    if (windowEnd < total) {
      if (windowEnd < total - 1) items.push('ellipsis');
      items.push(total);
    }

    return items;
  }

  goToPage(page: number | 'ellipsis'): void {
    if (page === 'ellipsis') return;
    if (page < 1 || page > this.meta.last_page || page === this.meta.current_page) return;
    this.loadLeaderboard(page);
  }

  get podiumFirst(): LeaderboardRow | null {
    return this.topThree.find((r) => r.rank === 1) ?? null;
  }

  get podiumSecond(): LeaderboardRow | null {
    return this.topThree.find((r) => r.rank === 2) ?? null;
  }

  get podiumThird(): LeaderboardRow | null {
    return this.topThree.find((r) => r.rank === 3) ?? null;
  }

get progressToNextLevel(): number {
  if (!this.myRank) return 0;
  return Math.round((this.myRank.xp_into_current_level / this.myRank.xp_for_next_level) * 100);
}


}