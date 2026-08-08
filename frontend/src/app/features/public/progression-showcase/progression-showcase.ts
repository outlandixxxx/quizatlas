import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import { PublicLevelThreshold, PublicAchievementPreview } from '../../../core/models/public-progression';

interface LevelStep {
  number: number;
  name: string;
  range: string;
  locked: boolean;
}

const LEVEL_NAMES = ['Beginner', 'Explorer', 'Learner', 'Advanced', 'Expert', 'Master'];

@Component({
  selector: 'app-progression-showcase',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './progression-showcase.html',
  styleUrl: './progression-showcase.scss',
})
export class ProgressionShowcase implements OnInit {
  private readonly catalogApi = inject(PublicCatalogApi);

  levels: LevelStep[] = [];
  achievements: PublicAchievementPreview[] = [];
  isLoading = false;

  weekDays = [
    { label: 'Mon', done: true },
    { label: 'Tue', done: true },
    { label: 'Wed', done: true },
    { label: 'Thu', done: true },
    { label: 'Fri', done: true },
    { label: 'Sat', done: true },
    { label: 'Sun', done: false },
  ];

  ngOnInit(): void {
    this.isLoading = true;
    this.catalogApi.showcase().subscribe({
      next: (res) => {
        this.levels = res.data.levels.map((lvl) => this.mapLevel(lvl));
        this.achievements = res.data.achievements;
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; },
    });
  }

  private mapLevel(lvl: PublicLevelThreshold): LevelStep {
    return {
      number: lvl.level,
      name: LEVEL_NAMES[lvl.level - 1] ?? `Level ${lvl.level}`,
      range: `${lvl.xp_start.toLocaleString()} - ${lvl.xp_end.toLocaleString()} XP`,
      locked: lvl.level > 2,
    };
  }
}