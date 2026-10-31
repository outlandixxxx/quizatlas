import { Component, DestroyRef, computed, effect, inject, signal } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router, RouterLink } from '@angular/router';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import {
  Subject,
  catchError,
  combineLatest,
  distinctUntilChanged,
  forkJoin,
  map,
  of,
  scan,
  startWith,
  switchMap,
} from 'rxjs';
import { ConcoursApi } from '../../core/services/concours-api';
import { LanguageService } from '../../core/services/language';
import { Seo } from '../../core/services/seo';
import { seoTranslationsReady } from '../../core/seo/translations-ready';
import { positivePage } from '../../core/seo/urls';
import {
  announcementPageNumber,
  ConcoursAnnouncement,
} from '../../core/models/concours-announcement';
import {
  DirectoryFilters,
  DirectoryPage,
  DirectoryRecord,
  categoryIcon,
  currentAnnouncements,
  editorial,
} from '../../core/models/concours';
import { TextField } from '../../shared/components/ui/text-field/text-field';
import { PrimaryButton } from '../../shared/components/ui/primary-button/primary-button';
import { PublicPageError } from '../public/page-error/page-error';
import { ConcoursCard } from './components/concours-card';
import { ConcoursNotice } from './components/concours-notice';
import { AnnouncementList } from './components/announcement-list';

@Component({
  standalone: true,
  imports: [
    FormsModule,
    RouterLink,
    TranslocoPipe,
    TextField,
    PrimaryButton,
    PublicPageError,
    ConcoursCard,
    ConcoursNotice,
    AnnouncementList,
  ],
  templateUrl: './concours-directory.html',
  styleUrls: ['./concours.scss', './concours-public.scss'],
})
export class ConcoursDirectory {
  private readonly api = inject(ConcoursApi);
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly destroy = inject(DestroyRef);
  private readonly seo = inject(Seo);
  private readonly translations = inject(TranslocoService);
  private readonly ready = seoTranslationsReady();
  private readonly reload = new Subject<void>();
  readonly language = inject(LanguageService);
  readonly categories = signal<DirectoryRecord[]>([]);
  readonly institutions = signal<DirectoryRecord[]>([]);
  readonly roots = computed(() => this.categories().filter((item) => item.parent_id === null));
  readonly filters = signal<DirectoryFilters>({ page: 1 });
  readonly announcementPage = signal(1);
  readonly announcementPageInvalid = signal(false);
  readonly announcementFilters = computed(
    () => ({
      ...this.filters(),
      page: this.announcementPage(),
    }),
    { equal: (a, b) => JSON.stringify(a) === JSON.stringify(b) },
  );
  readonly data = signal<DirectoryPage | null>(null);
  readonly loading = signal(true);
  readonly error = signal<number | null>(null);
  readonly referenceError = signal(false);
  readonly isFiltered = computed(() =>
    ['q', 'type', 'category_id', 'institution_id', 'registration_status'].some(
      (key) => !!this.filters()[key],
    ),
  );
  readonly types = ['', 'recruitment', 'admission', 'examination'];
  readonly icon = categoryIcon;
  searchDraft = '';

  constructor() {
    this.loadReferences();
    combineLatest([
      this.route.queryParamMap,
      this.reload.pipe(
        startWith(undefined),
        scan((count) => count + 1, 0),
      ),
    ])
      .pipe(
        map(([params, reload]) => {
          const filters: DirectoryFilters = {
            page: positivePage(params.get('page')),
            q: (params.get('q') ?? '').trim().slice(0, 200),
            type: this.types.includes(params.get('type') ?? '') ? params.get('type') : '',
            category_id: /^\d+$/.test(params.get('category_id') ?? '')
              ? Number(params.get('category_id'))
              : null,
            institution_id: /^\d+$/.test(params.get('institution_id') ?? '')
              ? Number(params.get('institution_id'))
              : null,
            registration_status: ['open', 'upcoming', 'closed'].includes(
              params.get('registration_status') ?? '',
            )
              ? params.get('registration_status')
              : '',
          };
          this.announcementPage.set(announcementPageNumber(params.get('ann_page')));
          this.filters.set(filters);
          this.searchDraft = String(filters['q'] ?? '');
          return { filters, reload };
        }),
        distinctUntilChanged(
          (a, b) =>
            a.reload === b.reload && JSON.stringify(a.filters) === JSON.stringify(b.filters),
        ),
        switchMap(({ filters }) => {
          this.loading.set(true);
          this.error.set(null);
          this.data.set(null);
          return this.api.list('concours', { ...filters, per_page: 12 }).pipe(
            catchError((error) => {
              this.error.set(this.seo.setHttpError(error.status));
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
          if (Number(this.filters()['page']) > response.data.meta.last_page)
            this.error.set(this.seo.setHttpError(404));
        }
      });
    effect(() => {
      if (!this.ready() || this.error()) return;
      if (this.announcementPageInvalid()) {
        this.seo.setHttpError(404);
        return;
      }
      this.seo.beginPage(this.router.url);
      const page = Math.max(Number(this.filters()['page'] ?? 1), this.announcementPage());
      const base = this.translations.translate('concours.seoTitle');
      const title =
        page > 1 ? this.translations.translate('seo.page_title', { title: base, page }) : base;
      const description = this.translations.translate('concours.seoDescription');
      this.seo.setTitle(title);
      this.seo.setDescription(description);
      this.seo.setIndexable(!this.isFiltered());
      this.seo.setSocialTags({ title, description, url: this.router.url });
    });
  }

  loadReferences(): void {
    this.referenceError.set(false);
    forkJoin({
      categories: this.api.references('categories'),
      institutions: this.api.references('institutions'),
    })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (values) => {
          this.categories.set(values.categories);
          this.institutions.set(values.institutions);
        },
        error: () => this.referenceError.set(true),
      });
  }

  content(record: DirectoryRecord) {
    return editorial(record, this.language.language());
  }

  announcementFor(id: number): ConcoursAnnouncement | null {
    const record = this.data()?.items.find((item) => item.id === id);
    return record ? (currentAnnouncements(record)[0] ?? null) : null;
  }

  filter(key: string, value: string | number | null): void {
    this.router.navigate(['/concours'], {
      queryParams: { ...this.filters(), [key]: value || null, page: null, ann_page: null },
    });
  }

  reset(): void {
    this.router.navigate(['/concours']);
  }
  retry(): void {
    this.seo.beginPage(this.router.url);
    this.reload.next();
  }
}
