import { DestroyRef, ChangeDetectorRef } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { EMPTY, catchError, distinctUntilChanged, map, switchMap } from 'rxjs';
import { PublicPageError } from '../../page-error/page-error';
import { seoTranslationsReady } from '../../../../core/seo/translations-ready';
import {
  Component,
  OnInit,
  effect,
  inject,
} from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import {
  TranslocoModule,
  TranslocoService,
} from '@jsverse/transloco';

import {
  BlogApi,
  ApiBlogAskDetail,
} from '../../../../core/services/blog-api';
import { TimeAgoPipe } from '../../../../core/services/time-ago.pipe';
import { AuthState } from '../../../auth/services/auth-state';
import { Seo } from '../../../../core/services/seo';
import { LanguageService } from '../../../../core/services/language';

@Component({
  selector: 'app-blog-detail',
  standalone: true,
  imports: [
    CommonModule,
    PublicPageError,
    FormsModule,
    TranslocoModule,
    TimeAgoPipe,
  ],
  templateUrl: './blog-detail.html',
  styleUrl: './blog-detail.scss',
})
export class BlogDetail implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly blogApi = inject(BlogApi);
  private readonly authState = inject(AuthState);
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService = inject(LanguageService);

  private readonly seoTranslations = seoTranslationsReady();

  private readonly seoLanguageEffect = effect(() => {
    this.languageService.language();
    this.updateSeoMetadata();
  });

  private readonly destroyRef = inject(DestroyRef);
  private readonly cdr = inject(ChangeDetectorRef);
  pageError: number | null = null;

  readonly fallbackAvatar =
    '/assets/avatars/default.webp';

  readonly user = this.authState.user;
  readonly authenticated = this.authState.authenticated;

  ask: ApiBlogAskDetail | null = null;

  isLoading = true;
  replyBody = '';
  isSubmittingReply = false;
  errorMessage = '';

  ngOnInit(): void {
    this.route.paramMap.pipe(
      map(params => params.get('id')),
      distinctUntilChanged(),
      switchMap(rawId => {
        const id = Number(rawId);
        this.ask = null;
        this.replyBody = '';
        this.isSubmittingReply = false;
        this.errorMessage = '';
        this.pageError = null;
        this.isLoading = true;
        this.cdr.markForCheck();
        if (!rawId || !/^\d+$/.test(rawId) || !Number.isSafeInteger(id) || id <= 0) {
          this.isLoading = false;
          this.pageError = this.seo.setHttpError(404);
          this.cdr.markForCheck();
          return EMPTY;
        }
        return this.blogApi.show(id).pipe(catchError(error => {
          this.isLoading = false;
          this.pageError = this.seo.setHttpError(error.status);
          this.cdr.markForCheck();
          return EMPTY;
        }));
      }),
      takeUntilDestroyed(this.destroyRef),
    ).subscribe(res => {
      this.ask = res.data;
      this.isLoading = false;
      this.cdr.markForCheck();
      this.updateSeoMetadata();
    });
  }

  private updateSeoMetadata(): void {
    if (!this.seoTranslations()) return;
    if (!this.ask) {
      return;
    }

    const title = `${this.ask.title} — MaroQuiz`;

    const description =
      this.ask.body
        ?.trim()
        .replace(/\s+/g, ' ')
        .slice(0, 160) ||
      this.transloco.translate(
        'blog.detail_seo_description_fallback',
      );

    const url = `https://maroquiz.com/blog/${this.ask.id}`;

    this.seo.setTitle(title);
    this.seo.setDescription(description);
    this.seo.setCanonical(url);

    this.seo.setSocialTags({
      title,
      description,
      type: 'article',
      url,
    });
  }

  get isAuthor(): boolean {
    return !!this.ask && this.ask.author.id === this.user()?.id;
  }

  goToProfile(userId: number): void {
    this.router.navigate([
      '/app/users',
      userId,
    ]);
  }

  submitReply(): void {
    if (!this.ask || !this.replyBody.trim()) {
      return;
    }

    const askId = this.ask.id;
    this.isSubmittingReply = true;
    this.errorMessage = '';

    this.blogApi
      .respond(
        this.ask.id,
        this.replyBody.trim(),
      )
      .subscribe({
        next: (res) => {
          if (this.ask?.id !== askId) return;
          this.ask.responses.unshift(res.data);
          this.ask.responses_count++;
          this.updateSeoMetadata();

          this.replyBody = '';
          this.isSubmittingReply = false;
        },

        error: () => {
          if (this.ask?.id !== askId) return;
          this.errorMessage =
            'blog.replySubmitError';

          this.isSubmittingReply = false;
        },
      });
  }

  acceptAnswer(responseId: number): void {
    if (!this.ask) {
      return;
    }

    const askId = this.ask.id;
    this.blogApi
      .acceptResponse(
        this.ask.id,
        responseId,
      )
      .subscribe({
        next: () => {
          if (this.ask?.id !== askId) return;
          this.ask.responses.forEach(
            (response) => {
              response.is_accepted =
                response.id === responseId;
            },
          );

          this.updateSeoMetadata();
          this.ask.responses.sort(
            (a, b) =>
              Number(b.is_accepted) -
              Number(a.is_accepted),
          );
        },
      });
  }
}