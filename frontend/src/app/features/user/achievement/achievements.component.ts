import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';

import { AchievementApi } from '../services/achievement.api';
import { AchievementDetail } from '../models/achievement';

@Component({
  selector: 'app-achievements',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './achievements.component.html',
  styleUrl: './achievements.component.scss',
})
export class AchievementsComponent implements OnInit {
  private readonly achievementApi = inject(AchievementApi);

  achievements: AchievementDetail[] = [];
  isLoading = false;

  ngOnInit(): void {
    this.load();
  }

  private load(): void {
    this.isLoading = true;
    this.achievementApi.list().subscribe({
      next: (res) => {
        this.achievements = res.data;
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; }
    });
  }

  get unlockedCount(): number {
    return this.achievements.filter((a) => a.unlocked).length;
  }

badgeImage(key: string): string {
  return `assets/badges/${key}.jpeg`;
}
}