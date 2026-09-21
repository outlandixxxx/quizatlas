import {
  Component,
  effect,
  inject,
  OnInit,
} from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
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
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService = inject(LanguageService);

  private readonly seoLanguageEffect = effect(() => {
    this.languageService.language();
    this.updateSeoMetadata();
  });

  readonly authenticated = this.authState.authenticated;

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

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
    this.loadAsks(1);

    this.blogApi.stats().subscribe({
      next: (res) => (this.stats = res.data),
    });

    this.blogApi.popularTags().subscribe({
      next: (res) => (this.popularTags = res.data),
    });

    this.blogApi.topContributors().subscribe({
      next: (res) => (this.topContributors = res.data),
    });
  }

  private updateSeoMetadata(): void {
    const title = this.transloco.translate('blog.seo_title');
    const description = this.transloco.translate('blog.seo_description');

    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: 'https://maroquiz.com/blog',
    });
  }

  private loadMajors(): void {
    this.catalogApi.getMajors({
      page: 1,
      per_page: 100,
    }).subscribe({
      next: (res) => {
        this.majors = res.data.items;
      },
    });
  }

  onMajorChange(): void {
    this.selectedSubjectId = null;
    this.subjects = [];

    if (this.selectedMajorId) {
      this.catalogApi.getSubjects({
        major_id: this.selectedMajorId,
        page: 1,
        per_page: 200,
      }).subscribe({
        next: (res) => {
          this.subjects = res.data.items;
        },
      });
    }

    this.applyFilters();
  }

  loadAsks(page: number): void {
    this.isLoading = true;

    this.blogApi.list({
      major_id: this.selectedMajorId ?? undefined,
      subject_id: this.selectedSubjectId ?? undefined,
      sort: this.sort,
      q: this.searchQuery || undefined,
      page,
      per_page: this.meta.per_page,
    }).subscribe({
      next: (res) => {
        this.asks = res.data.items;
        this.meta = res.data.meta;
        this.isLoading = false;
      },
      error: () => {
        this.isLoading = false;
      },
    });
  }

  applyFilters(): void {
    this.loadAsks(1);
  }

  goToPage(page: number): void {
    if (page < 1 || page > this.meta.last_page) {
      return;
    }

    this.loadAsks(page);
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
    this.loadAsks(1);
  }
}