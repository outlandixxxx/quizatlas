import { ChangeDetectorRef, Component, DestroyRef, OnInit, inject } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
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

  private readonly destroyRef = inject(DestroyRef);
  private readonly cdr = inject(ChangeDetectorRef);
  stats: LandingStats | null = null;
  isLoading = true;
  hasError = false;

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
          this.stats = res.data.stats;
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
}
