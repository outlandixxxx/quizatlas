import { Component, DestroyRef, inject, signal } from '@angular/core';
import { RouterLink } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { finalize, Subscription } from 'rxjs';
import { ConcoursFollowingApi } from '../../../core/services/concours-following-api';
import { LanguageService } from '../../../core/services/language';
import { FollowPage } from '../../../core/models/concours-follow';
import { ConcoursFollow } from '../../concours/components/concours-follow';
@Component({
  selector: 'app-followed-concours',
  standalone: true,
  imports: [RouterLink, TranslocoPipe, ConcoursFollow],
  templateUrl: './followed-concours.html',
  styleUrl: './followed-concours.scss',
})
export class FollowedConcours {
  private readonly api = inject(ConcoursFollowingApi);
  private readonly destroy = inject(DestroyRef);
  readonly language = inject(LanguageService);
  readonly data = signal<FollowPage | null>(null);
  readonly loading = signal(false);
  readonly error = signal(false);
  readonly selected = signal<number | null>(null);
  private request?: Subscription;
  constructor() {
    this.load();
  }
  load(page = 1) {
    this.request?.unsubscribe();
    this.loading.set(true);
    this.error.set(false);
    this.request = this.api
      .list(page)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.loading.set(false)),
      )
      .subscribe({
        next: (r) => this.data.set(r.data),
        error: () => {
          this.data.set(null);
          this.error.set(true);
        },
      });
  }
}
