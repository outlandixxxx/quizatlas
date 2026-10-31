import { Component, DestroyRef, effect, inject, input, signal } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { RouterLink } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import { Subscription } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import { ConcoursQcm, QcmPage, emptyQcmPage } from '../../../core/models/concours-qcm';
import { ConcoursNotice } from './concours-notice';

@Component({
  selector: 'app-concours-qcm-list',
  standalone: true,
  imports: [RouterLink, TranslocoPipe, ConcoursNotice],
  templateUrl: './concours-qcm-list.html',
  styleUrls: ['./pdf-resource-card.scss', './concours-qcm-list.scss'],
})
export class ConcoursQcmList {
  private readonly api = inject(ConcoursApi);
  private readonly destroy = inject(DestroyRef);
  readonly slug = input.required<string>();
  readonly option = input('');
  readonly initial = input<QcmPage<ConcoursQcm>>();
  readonly data = signal(emptyQcmPage<ConcoursQcm>());
  readonly loading = signal(false);
  readonly failed = signal(false);
  private request?: Subscription;
  private previousSlug = '';
  constructor() {
    effect(() => {
      const slug = this.slug(),
        option = this.option(),
        initial = this.initial();
      this.request?.unsubscribe();
      this.failed.set(false);
      const first = slug !== this.previousSlug;
      this.previousSlug = slug;
      if (!initial) {
        this.data.set(emptyQcmPage());
        this.loading.set(false);
        return;
      }
      if (first && !option) {
        this.data.set(initial);
        this.loading.set(false);
        return;
      }
      this.load(1, slug, option);
    });
  }
  load(page = 1, slug = this.slug(), option = this.option()): void {
    this.request?.unsubscribe();
    this.loading.set(true);
    this.failed.set(false);
    this.data.set(emptyQcmPage());
    this.request = this.api
      .qcm(slug, option, page)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (response) => {
          this.data.set(response.data);
          this.loading.set(false);
        },
        error: () => {
          this.failed.set(true);
          this.loading.set(false);
        },
      });
  }
  go(page: number): void {
    if (!this.loading() && page >= 1 && page <= this.data().meta.last_page) this.load(page);
  }
}
