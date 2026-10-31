import { Component, DestroyRef, inject, input, output, signal } from '@angular/core';
import { toObservable, takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { Router, RouterLink } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import { Subject, catchError, combineLatest, of, startWith, switchMap } from 'rxjs';
import { ConcoursAnnouncementsApi } from '../../../core/services/concours-announcements-api';
import { DirectoryFilters } from '../../../core/models/concours';
import { AnnouncementPage } from '../../../core/models/concours-announcement';
import { AnnouncementCard } from './announcement-card';
import { ConcoursNotice } from './concours-notice';

@Component({
  selector: 'app-announcement-list',
  standalone: true,
  imports: [RouterLink, TranslocoPipe, AnnouncementCard, ConcoursNotice],
  styleUrl: '../concours.scss',
  template: ` <div [attr.aria-busy]="loading()">
    @if (loading()) {
      <p role="status">{{ 'announcements.loading' | transloco }}</p>
      <div class="concours-grid skeleton-grid" aria-hidden="true">
        <div></div>
        <div></div>
        <div></div>
      </div>
    } @else if (error()) {
      <p role="alert">{{ 'announcements.loadError' | transloco }}</p>
      <button class="secondary-action" type="button" (click)="retry()">
        {{ 'concours.retry' | transloco }}
      </button>
    } @else if (outOfRange()) {
      <p role="alert">{{ 'seo.not_found_description' | transloco }}</p>
      <a [routerLink]="path()" [queryParams]="{ ann_page: null }" queryParamsHandling="merge">
        {{ 'concours.previous' | transloco }}
      </a>
    } @else {
      @if (featured() && data()?.items?.length && data()?.meta?.current_page === 1) {
        <div class="featured-announcement">
          <app-announcement-card [record]="data()!.items[0]" />
        </div>
      }
      @if (featured() && ((data()?.items?.length ?? 0) > 1 || (data()?.meta?.last_page ?? 1) > 1)) {
        <h3 class="older-announcements">
          {{ 'concoursResources.olderAnnouncements' | transloco }}
        </h3>
      }
      <div class="concours-grid">
        @for (item of data()?.items ?? []; track item.id) {
          @if (!(featured() && data()?.meta?.current_page === 1 && $first)) {
            <app-announcement-card [record]="item" />
          }
        }
      </div>
      @if (!data()?.items?.length) {
        <app-concours-notice
          icon="event_note"
          [titleKey]="emptyTitleKey()"
          [bodyKey]="emptyBodyKey()"
        />
      }
      @if ((data()?.meta?.last_page ?? 1) > 1) {
        <nav class="pagination" [attr.aria-label]="'announcements.pagination' | transloco">
          @if ((data()?.meta?.current_page ?? 1) > 1) {
            <a
              [routerLink]="path()"
              [queryParams]="{ ann_page: (data()?.meta?.current_page ?? 1) - 1 }"
              queryParamsHandling="merge"
              >{{ 'concours.previous' | transloco }}</a
            >
          }
          <span>{{
            'concours.pageOf'
              | transloco: { page: data()?.meta?.current_page, total: data()?.meta?.last_page }
          }}</span>
          @if ((data()?.meta?.current_page ?? 1) < (data()?.meta?.last_page ?? 1)) {
            <a
              [routerLink]="path()"
              [queryParams]="{ ann_page: (data()?.meta?.current_page ?? 1) + 1 }"
              queryParamsHandling="merge"
              >{{ 'concours.next' | transloco }}</a
            >
          }
        </nav>
      }
    }
  </div>`,
})
export class AnnouncementList {
  private readonly api = inject(ConcoursAnnouncementsApi);
  private readonly destroy = inject(DestroyRef);
  private readonly router = inject(Router);
  private readonly reload = new Subject<void>();
  readonly filters = input<DirectoryFilters>({});
  readonly featured = input(false);
  readonly invalidPage = output<boolean>();
  readonly loaded = output<AnnouncementPage>();
  readonly emptyTitleKey = input('announcements.emptyTitle');
  readonly emptyBodyKey = input('announcements.emptyBody');
  readonly data = signal<AnnouncementPage | null>(null);
  readonly loading = signal(true);
  readonly error = signal(false);
  readonly outOfRange = signal(false);
  path = () => this.router.url.split('?')[0];
  constructor() {
    combineLatest([toObservable(this.filters), this.reload.pipe(startWith(undefined))])
      .pipe(
        switchMap(([filters]) => {
          this.loading.set(true);
          this.error.set(false);
          this.data.set(null);
          this.outOfRange.set(false);
          const page = Number(filters['page'] ?? 1);
          if (!Number.isInteger(page) || page < 1 || page > 100000) {
            this.outOfRange.set(true);
            this.invalidPage.emit(true);
            return of(null);
          }
          this.invalidPage.emit(false);
          return this.api.list({ ...filters, per_page: 12 }).pipe(
            catchError(() => {
              this.error.set(true);
              return of(null);
            }),
          );
        }),
        takeUntilDestroyed(this.destroy),
      )
      .subscribe((response) => {
        this.loading.set(false);
        if (response) {
          this.data.set(response.data);
          this.outOfRange.set(response.data.meta.current_page > response.data.meta.last_page);
          this.invalidPage.emit(this.outOfRange());
          if (!this.outOfRange()) this.loaded.emit(response.data);
        }
      });
  }
  retry() {
    this.reload.next();
  }
}
