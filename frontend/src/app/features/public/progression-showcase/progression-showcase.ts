import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';

import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import { PublicLevelThreshold, PublicAchievementPreview } from '../../../core/models/public-progression';

interface LevelStep {
  number: number;
  name: string;
  range: string;
  locked: boolean;
}

const LEVEL_NAME_KEYS = [
  'landing.progression.level_beginner',
  'landing.progression.level_explorer',
  'landing.progression.level_learner',
  'landing.progression.level_advanced',
  'landing.progression.level_expert',
  'landing.progression.level_master',
];

@Component({
  selector: 'app-progression-showcase',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './progression-showcase.html',
  styleUrl: './progression-showcase.scss',
})
export class ProgressionShowcase implements OnInit {
  private readonly catalogApi = inject(PublicCatalogApi);
  private readonly transloco = inject(TranslocoService);

  levels: LevelStep[] = [];
  achievements: PublicAchievementPreview[] = [];
  isLoading = false;

  weekDays = [
    { labelKey: 'landing.progression.day_mon', done: true },
    { labelKey: 'landing.progression.day_tue', done: true },
    { labelKey: 'landing.progression.day_wed', done: true },
    { labelKey: 'landing.progression.day_thu', done: true },
    { labelKey: 'landing.progression.day_fri', done: true },
    { labelKey: 'landing.progression.day_sat', done: true },
    { labelKey: 'landing.progression.day_sun', done: false },
  ];

  ngOnInit(): void {
    this.isLoading = true;

    this.catalogApi.showcase().subscribe({
      next: (res) => {
        this.levels = res.data.levels.map((lvl) => this.mapLevel(lvl));
        this.achievements = res.data.achievements;
        this.isLoading = false;
      },
      error: () => {
        this.isLoading = false;
      },
    });
  }

  private mapLevel(lvl: PublicLevelThreshold): LevelStep {
    const key = LEVEL_NAME_KEYS[lvl.level - 1];

    return {
      number: lvl.level,
      name: key ? this.transloco.translate(key) : `Level ${lvl.level}`,
      range: `${lvl.xp_start.toLocaleString()} - ${lvl.xp_end.toLocaleString()} XP`,
      locked: lvl.level > 2,
    };
  }
}