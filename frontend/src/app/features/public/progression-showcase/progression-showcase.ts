import { ChangeDetectorRef, Component, DestroyRef, OnInit, inject } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import {
  PublicLevelThreshold,
  PublicAchievementPreview,
} from '../../../core/models/public-progression';

@Component({
  selector: 'app-progression-showcase',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './progression-showcase.html',
  styleUrl: './progression-showcase.scss',
})
export class ProgressionShowcase implements OnInit {
  private readonly catalogApi = inject(PublicCatalogApi);
  private readonly destroyRef = inject(DestroyRef);
  private readonly cdr = inject(ChangeDetectorRef);
  readonly levelNameKeys = [
    'landing.progression.level_beginner',
    'landing.progression.level_explorer',
    'landing.progression.level_learner',
    'landing.progression.level_advanced',
    'landing.progression.level_expert',
    'landing.progression.level_master',
  ];
  levels: PublicLevelThreshold[] = [];
  achievements: PublicAchievementPreview[] = [];
  isLoading = true;
  hasError = false;

  ngOnInit(): void {
    this.loadData();
  }

  loadData(): void {
    this.isLoading = true;
    this.hasError = false;
    this.catalogApi
      .showcase()
      .pipe(takeUntilDestroyed(this.destroyRef))
      .subscribe({
        next: (res) => {
          this.levels = res.data.levels;
          this.achievements = res.data.achievements;
          this.isLoading = false;
          this.cdr.markForCheck();
        },
        error: () => {
          this.isLoading = false;
          this.hasError = true;
          this.cdr.markForCheck();
        },
      });
  }
}
