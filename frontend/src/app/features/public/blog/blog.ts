import { DestroyRef, ChangeDetectorRef } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { Subscription } from 'rxjs';
import { positivePage } from '../../../core/seo/urls';
import { PublicPageError } from '../page-error/page-error';
import { seoTranslationsReady } from '../../../core/seo/translations-ready';
import {
  Component,
  effect,
  inject,
  OnInit,
} from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router, RouterLink } from '@angular/router';
import {
  TranslocoModule,
  TranslocoService,
} from '@jsverse/transloco';

import { TimeAgoPipe } from '../../../core/services/time-ago.pipe';
import { BlogApi } from '../../../core/services/blog-api';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import {
  PublicMajor,
  PublicSubject,
} from '../../../core/models/public-catalog';
import { AskQuestionModal } from './components/ask-question-modal/ask-question-modal';
import { AuthState } from '../../auth/services/auth-state';
import { Seo } from '../../../core/services/seo';
import { LanguageService } from '../../../core/services/language';

@Component({
  selector: 'app-blog',
  standalone: true,
  imports: [
    CommonModule,
    RouterLink,
    PublicPageError,
    FormsModule,
    TranslocoModule,
    TimeAgoPipe,
    AskQuestionModal,
  ],
  templateUrl: './blog.html',
  styleUrl: './blog.scss',
})
export class Blog implements OnInit {
  private readonly blogApi = inject(BlogApi);
  private readonly catalogApi = inject(PublicCatalogApi);
  private readonly authState = inject(AuthState);
  private readonly router = inject(Router);
  private readonly route = inject(ActivatedRoute);
  private readonly destroyRef = inject(DestroyRef);
  private readonly cdr = inject(ChangeDetectorRef);
  private asksRequest?: Subscription;
  private subjectsRequest?: Subscription;
  private loadedMajorId: number | null = null;
  pageError: number | null = null;
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService = inject(LanguageService);

  private readonly seoTranslations = seoTranslationsReady();

  private readonly seoLanguageEffect = effect(() => {
    this.languageService.language();
    this.updateSeoMetadata();
  });

  readonly authenticated = this.authState.authenticated;

  readonly fallbackAvatar =
    '/assets/avatars/default.webp';

  asks: any[] = [];
  majors: PublicMajor[] = [];
  subjects: PublicSubject[] = [];
  popularTags: any[] = [];
  stats: any = null;
  topContributors: any[] = [];

  selectedMajorId: number | null = null;
  selectedSubjectId: number | null = null;
  sort = 'newest';
  searchQuery = '';

  meta = {
    current_page: 1,
    last_page: 1,
    per_page: 10,
    total: 0,
  };

  isLoading = false;
  isAskModalOpen = false;

  ngOnInit(): void {
    this.updateSeoMetadata();

    this.loadMajors();
    this.route.queryParamMap.pipe(takeUntilDestroyed(this.destroyRef)).subscribe(params => {
      this.selectedMajorId = this.readId(params.get('major_id'));
      if (this.loadedMajorId !== this.selectedMajorId) this.loadSubjectOptions();
      this.selectedSubjectId = this.readId(params.get('subject_id'));
      this.searchQuery = params.get('q')?.trim() || '';
      const sort = params.get('sort');
      this.sort = sort === 'most_answered' || sort === 'unanswered' ? sort : 'newest';
      this.loadAsks(positivePage(params.get('page')));
    });

    this.blogApi.stats().subscribe({
      next: (res) => (this.stats = res.data), error: () => {},
    });

    this.blogApi.popularTags().subscribe({
      next: (res) => (this.popularTags = res.data), error: () => {},
    });

    this.blogApi.topContributors().subscribe({
      next: (res) => (this.topContributors = res.data), error: () => {},
    });
  }

  private updateSeoMetadata(): void {
    if (!this.seoTranslations()) return;
    const baseTitle = this.transloco.translate('blog.seo_title');
    const title = this.meta.current_page > 1 ? this.transloco.translate('seo.page_title', { title: baseTitle, page: this.meta.current_page }) : baseTitle;
    const description = this.transloco.translate('blog.seo_description');

    this.seo.setIndexable(!this.pageError && !this.hasFilters);
    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: `/blog${!this.hasFilters && this.meta.current_page > 1 ? '?page=' + this.meta.current_page : ''}`,
    });
  }

  private loadMajors(): void {
    this.catalogApi.getMajors({
      page: 1,
      per_page: 100,
    }).subscribe({
      next: (res) => {
        this.majors = res.data.items;
        this.cdr.markForCheck();
      },
      error: () => {},
    });
  }

  onMajorChange(): void {
    this.selectedSubjectId = null;
    this.applyFilters();
  }

  private loadSubjectOptions(): void {
    this.subjectsRequest?.unsubscribe();
    this.loadedMajorId = this.selectedMajorId;
    this.subjects = [];
    if (this.selectedMajorId) {
      this.subjectsRequest = this.catalogApi.getSubjects({
        major_id: this.selectedMajorId, page: 1, per_page: 200,
      }).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
        next: response => { this.subjects = response.data.items; this.cdr.markForCheck(); },
        error: () => {},
      });
    }
  }

  loadAsks(page: number): void {
    this.asksRequest?.unsubscribe();
    this.isLoading = true;
    this.pageError = null;

    this.asksRequest = this.blogApi.list({
      major_id: this.selectedMajorId ?? undefined,
      subject_id: this.selectedSubjectId ?? undefined,
      sort: this.sort,
      q: this.searchQuery || undefined,
      page,
      per_page: this.meta.per_page,
    }).pipe(takeUntilDestroyed(this.destroyRef)).subscribe({
      next: (res) => {
        if (page > res.data.meta.last_page) {
          this.isLoading = false;
          this.cdr.markForCheck();
          this.pageError = this.seo.setHttpError(404);
          return;
        }
        this.asks = res.data.items;
        this.meta = res.data.meta;
        this.isLoading = false;
        this.cdr.markForCheck();
        this.updateSeoMetadata();
      },
      error: error => {
        this.asks = [];
        this.isLoading = false;
        this.cdr.markForCheck();
        this.pageError = this.seo.setHttpError(error.status);
      },
    });
  }

  private readId(value: string | null): number | null {
    return value && /^[1-9]\d{0,9}$/.test(value) ? Number(value) : null;
  }

  get hasFilters(): boolean {
    return !!(this.selectedMajorId || this.selectedSubjectId || this.searchQuery || this.sort !== 'newest');
  }

  pageParams(page: number) {
    return {
      page: page > 1 ? page : null,
      major_id: this.selectedMajorId, subject_id: this.selectedSubjectId,
      q: this.searchQuery || null, sort: this.sort === 'newest' ? null : this.sort,
    };
  }

  applyFilters(): void {
    void this.router.navigate(['/blog'], { queryParams: this.pageParams(1) });
  }

  goToPage(page: number): void {
    if (page < 1 || page > this.meta.last_page) {
      return;
    }

    void this.router.navigate(['/blog'], { queryParams: this.pageParams(page) });
  }

  get paginationItems(): (number | 'ellipsis')[] {
    const total = this.meta.last_page;
    const current = this.meta.current_page;

    if (total <= 6) {
      return Array.from(
        { length: total },
        (_, i) => i + 1,
      );
    }

    const start = Math.max(
      1,
      Math.min(current - 1, total - 4),
    );

    const end = Math.min(
      total,
      start + 3,
    );

    const items: (number | 'ellipsis')[] = [];

    if (start > 1) {
      items.push(1);

      if (start > 2) {
        items.push('ellipsis');
      }
    }

    for (let i = start; i <= end; i++) {
      items.push(i);
    }

    if (end < total) {
      if (end < total - 1) {
        items.push('ellipsis');
      }

      items.push(total);
    }

    return items;
  }

  goToAsk(id: number): void {
    this.router.navigate(['/blog', id]);
  }

  goToProfile(
    userId: number,
    event: Event,
  ): void {
    event.stopPropagation();

    if (!this.authenticated()) {
      this.router.navigate(['/login'], {
        queryParams: {
          returnUrl: this.router.url,
        },
      });

      return;
    }

    this.router.navigate([
      '/app/users',
      userId,
    ]);
  }

  filterByTag(tag: any): void {
    this.selectedSubjectId = tag.id;
    this.applyFilters();
  }

  openAskModal(): void {
    if (!this.authenticated()) {
      this.router.navigate(['/login'], {
        queryParams: {
          returnUrl: this.router.url,
        },
      });

      return;
    }

    this.isAskModalOpen = true;
  }

  onAskCreated(): void {
    this.isAskModalOpen = false;
    if (this.meta.current_page === 1) this.loadAsks(1);
    else this.goToPage(1);
  }
}