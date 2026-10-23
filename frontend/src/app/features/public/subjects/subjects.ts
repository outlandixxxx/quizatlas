import { Component, DestroyRef, ChangeDetectorRef, effect, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { EMPTY, catchError, switchMap } from 'rxjs';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import { PublicSubject } from '../../../core/models/public-catalog';
import { Seo } from '../../../core/services/seo';
import { seoTranslationsReady } from '../../../core/seo/translations-ready';
import { positivePage } from '../../../core/seo/urls';
import { PublicPageError } from '../page-error/page-error';

@Component({
  standalone: true,
  imports: [CommonModule, RouterLink, TranslocoModule, PublicPageError],
  templateUrl: './subjects.html',
  styleUrl: './subjects.scss',
})
export class SubjectsDirectory {
  private readonly route = inject(ActivatedRoute);
  private readonly api = inject(PublicCatalogApi);
  private readonly seo = inject(Seo);
  private readonly translations = inject(TranslocoService);
  private readonly destroyRef = inject(DestroyRef);
  private readonly cdr = inject(ChangeDetectorRef);
  private readonly ready = seoTranslationsReady();
  subjects: PublicSubject[] = [];
  page = 1;
  lastPage = 1;
  isLoading = true;
  pageError: number | null = null;

  constructor() {
    effect(() => { if (this.ready() && !this.pageError) this.updateMetadata(); });
    this.route.queryParamMap.pipe(
      switchMap(params => {
        this.page = positivePage(params.get('page'));
        this.pageError = null;
        this.isLoading = true;
        return this.api.getSubjects({ page: this.page, per_page: 24 }).pipe(
          catchError(error => {
            this.isLoading = false;
            this.cdr.markForCheck();
            this.pageError = this.seo.setHttpError(error.status);
            return EMPTY;
          }),
        );
      }),
      takeUntilDestroyed(this.destroyRef),
    ).subscribe(response => {
      this.isLoading = false;
      this.cdr.markForCheck();
      this.lastPage = response.data.meta.last_page;
      if (this.page > this.lastPage) {
        this.pageError = this.seo.setHttpError(404);
        return;
      }
      this.subjects = response.data.items;
      if (this.ready()) this.updateMetadata();
    });
  }

  private updateMetadata(): void {
    const base = this.translations.translate('seo.subjects_title');
    const title = this.page > 1
      ? this.translations.translate('seo.page_title', { title: base, page: this.page }) : base;
    const description = this.translations.translate('seo.subjects_description');
    const url = `https://maroquiz.com/subjects${this.page > 1 ? '?page=' + this.page : ''}`;
    this.seo.setTitle(title);
    this.seo.setDescription(description);
    this.seo.setSocialTags({ title, description, url });
  }
}
