import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

import { LandingApi } from '../../landing/services/landing-api';
import { LandingStats } from '../../../core/models/landing';

@Component({
  selector: 'app-stats-ribbon',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './stats-ribbon.html',
  styleUrl: './stats-ribbon.scss',
})
export class StatsRibbon implements OnInit {
  private readonly landingApi = inject(LandingApi);

  stats: LandingStats = {
    total_questions: 0,
    total_quizzes_attempted: 0,
    total_candidates: 0,
    passing_rate: 0,
  };

  ngOnInit(): void {
    this.landingApi.getLandingData().subscribe({
      next: (res) => {
        this.stats = res.data.stats;
      },
    });
  }
}