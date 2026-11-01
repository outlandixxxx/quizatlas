import { Component, DestroyRef, computed, effect, inject, signal } from '@angular/core';
import { ActivatedRoute, Router, RouterLink } from '@angular/router';
import { takeUntilDestroyed, toSignal } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subject, Subscription, catchError, combineLatest, of, startWith, switchMap } from 'rxjs';
import { ConcoursApi } from '../../core/services/concours-api';
import { LanguageService } from '../../core/services/language';
import { Seo } from '../../core/services/seo';
import { seoTranslationsReady } from '../../core/seo/translations-ready';
import {
  DirectoryRecord,
  editorial,
  categoryIcon,
  currentAnnouncements,
  PreparationOption,
  orderedPreparationOptions,
  preparationOptionName,
} from '../../core/models/concours';
import { PublicPageError } from '../public/page-error/page-error';
import { ConcoursFollow } from './components/concours-follow';
import { ConcoursNotice } from './components/concours-notice';
import { AnnouncementCard } from './components/announcement-card';
import { AnnouncementList } from './components/announcement-list';
import {
  announcementPageNumber,
  ConcoursAnnouncement,
  calendarDate,
} from '../../core/models/concours-announcement';
import { PdfResourceCard } from './components/pdf-resource-card';
import { ConcoursQcmList } from './components/concours-qcm-list';
import { ConcoursDocumentType, ConcoursPdf } from '../../core/models/concours-pdf';

@Component({
  standalone: true,
  imports: [
    RouterLink,
    TranslocoPipe,
    PublicPageError,
    ConcoursNotice,
    ConcoursFollow,
    AnnouncementList,
    AnnouncementCard,
    PdfResourceCard,
    ConcoursQcmList,
  ],
  templateUrl: './concours-overview.html',
  styleUrls: ['./concours.scss', './concours-public.scss', './concours-overview.scss'],
})
export class ConcoursOverview {
  private readonly api = inject(ConcoursApi);
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly destroy = inject(DestroyRef);
  private readonly seo = inject(Seo);
  private readonly translations = inject(TranslocoService);
  private readonly ready = seoTranslationsReady();
  private readonly fragment = toSignal(this.route.fragment);
  private readonly reload = new Subject<void>();
  private relatedRequest?: Subscription;
  readonly language = inject(LanguageService);
  readonly record = signal<DirectoryRecord | null>(null);
  readonly loading = signal(true);
  readonly error = signal<number | null>(null);
  readonly icon = categoryIcon;
  readonly announcementPage = signal(1);
  readonly announcementPageInvalid = signal(false);
  readonly currentAnnouncements = computed(() =>
    this.record() ? currentAnnouncements(this.record()!) : [],
  );
  readonly officialSources = computed(() => [
    ...new Set(
      this.currentAnnouncements()
        .map((notice) => notice.official_source_url)
        .filter((url): url is string => !!url),
    ),
  ]);
  readonly latestAnnouncement = computed<ConcoursAnnouncement | null>(
    () => this.currentAnnouncements()[0] ?? null,
  );
  readonly advice = signal<{ advice_fr: string | null; advice_ar: string | null }>({ advice_fr: null, advice_ar: null });
  readonly adviceText = computed(() => {
    const item = this.advice();
    return (this.language.language() === 'ar' ? item.advice_ar || item.advice_fr : item.advice_fr || item.advice_ar) ?? '';
  });
  readonly related = signal<DirectoryRecord[]>([]);
  readonly relatedLoading = signal(false);
  readonly relatedError = signal(false);

  readonly paperYear = signal('');
  readonly paperSearch = signal('');
  readonly paperPage = signal(1);
  readonly paperPageSize = 12;
  readonly preparationOption = signal('');
  readonly preparationOptions = computed(() =>
    orderedPreparationOptions(
      (this.record()?.preparation_options ?? []).filter(
        (option) =>
          option.is_active &&
          (option.parent_id === null ||
            this.record()?.preparation_options?.some(
              (parent) => parent.id === option.parent_id && parent.is_active,
            )),
      ),
    ),
  );
  optionName(option: PreparationOption): string {
    const name = preparationOptionName(option, this.language.language());
    const parent = this.preparationOptions().find((item) => item.id === option.parent_id);
    return parent ? `${preparationOptionName(parent, this.language.language())} › ${name}` : name;
  }
  selectPreparationOption(value: string): void {
    this.preparationOption.set(
      this.preparationOptions().some((option) => String(option.id) === value) ? value : '',
    );
    this.paperPage.set(1);
  }
  matchesPreparationOption(pdf: ConcoursPdf): boolean {
    if (!this.preparationOption()) return true;
    const selected = Number(this.preparationOption());
    const ids = new Set([
      selected,
      ...this.preparationOptions()
        .filter((option) => option.parent_id === selected)
        .map((option) => option.id),
    ]);
    const assigned = pdf.preparation_option_ids ?? [];
    return assigned.length === 0 || assigned.some((id) => ids.has(id));
  }
  readonly paperYears = computed(() =>
    [
      ...new Set(
        (this.record()?.resources ?? [])
          .filter((pdf) => ['previous_exam', 'correction'].includes(pdf.document_type))
          .map((pdf) => pdf.year),
      ),
    ].sort((a, b) => (b ?? 0) - (a ?? 0)),
  );
  readonly papers = computed(() => {
    const q = this.paperSearch().trim().toLocaleLowerCase();
    return (this.record()?.resources ?? [])
      .filter(
        (pdf) =>
          pdf.document_type === 'previous_exam' ||
          (pdf.document_type === 'correction' && !pdf.corrects_exam_pdf_id),
      )
      .filter((pdf) => this.matchesPreparationOption(pdf) || this.correctionsFor(pdf).length > 0)
      .filter((pdf) => !this.paperYear() || String(pdf.year ?? 'unknown') === this.paperYear())
      .filter(
        (pdf) =>
          !q ||
          [
            pdf.title,
            pdf.subject,
            pdf.specialty,
            ...this.correctionsFor(pdf).map((item) => item.title),
          ]
            .join(' ')
            .toLocaleLowerCase()
            .includes(q),
      )
      .sort((a, b) => (b.year ?? 0) - (a.year ?? 0) || a.id - b.id);
  });
  readonly paperPages = computed(() =>
    Math.max(1, Math.ceil(this.papers().length / this.paperPageSize)),
  );
  readonly paperGroups = computed(() => {
    const groups = new Map<number | null, ConcoursPdf[]>();
    for (const pdf of this.papers().slice(
      (this.paperPage() - 1) * this.paperPageSize,
      this.paperPage() * this.paperPageSize,
    )) {
      groups.set(pdf.year, [...(groups.get(pdf.year) ?? []), pdf]);
    }
    return [...groups.entries()].map(([year, items]) => ({ year, items }));
  });
  correctionsFor(pdf: ConcoursPdf): ConcoursPdf[] {
    return (this.record()?.resources ?? [])
      .filter(
        (item) =>
          item.document_type === 'correction' &&
          item.corrects_exam_pdf_id === pdf.id &&
          this.matchesPreparationOption(item),
      )
      .sort((a, b) => a.id - b.id);
  }
  filterPapers(kind: 'year' | 'search', value: string): void {
    (kind === 'year' ? this.paperYear : this.paperSearch).set(value);
    this.paperPage.set(1);
  }
  pagePapers(page: number): void {
    if (Number.isInteger(page) && page >= 1 && page <= this.paperPages()) this.paperPage.set(page);
  }

  constructor() {
    this.route.queryParamMap
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe((params) =>
        this.announcementPage.set(announcementPageNumber(params.get('ann_page'))),
      );
    combineLatest([this.route.paramMap, this.reload.pipe(startWith(undefined))])
      .pipe(
        switchMap(([params]) => {
          this.record.set(null);
          this.advice.set({ advice_fr: null, advice_ar: null });
          this.preparationOption.set('');
          this.paperYear.set('');
          this.paperSearch.set('');
          this.paperPage.set(1);
          this.relatedRequest?.unsubscribe();
          this.related.set([]);
          this.relatedLoading.set(false);
          this.relatedError.set(false);
          this.loading.set(true);
          this.error.set(null);
          return this.api.show(params.get('slug') ?? '').pipe(
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
          this.record.set(response.data);
          const slug = response.data.slug;
          this.api.publicAdvice(slug).pipe(takeUntilDestroyed(this.destroy)).subscribe({
            next: (advice) => {
              if (this.record()?.slug === slug) this.advice.set(advice.data);
            },
            // A missing optional advice record must never block the Concours page.
            error: () => {
              if (this.record()?.slug === slug) this.advice.set({ advice_fr: null, advice_ar: null });
            },
          });
          this.loadRelated();
        }
      });
    effect(() => {
      // Section navigation also starts a router navigation and clears page SEO.
      this.fragment();
      const record = this.record();
      if (!this.ready() || !record || this.error()) return;
      if (this.announcementPageInvalid()) {
        this.seo.setHttpError(404);
        return;
      }
      this.seo.beginPage(this.router.url);
      const content = this.content(record);
      const baseTitle = `${content.name}${record.displayed_session_year ? ` — ${record.displayed_session_year}` : ''} — MaroQuiz`;
      const title =
        this.announcementPage() > 1
          ? this.translations.translate('seo.page_title', {
              title: baseTitle,
              page: this.announcementPage(),
            })
          : baseTitle;
      const description = (
        content.description || this.translations.translate('concours.overviewDescription')
      ).slice(0, 180);
      const url = `https://maroquiz.com/concours/${encodeURIComponent(record.slug)}`;
      this.seo.setTitle(title);
      this.seo.setDescription(description);
      this.seo.setIndexable(true);
      this.seo.setSocialTags({ title, description, url: this.router.url, language: content.lang });
      this.seo.setJsonLd({
        '@context': 'https://schema.org',
        '@type': 'BreadcrumbList',
        itemListElement: [
          {
            '@type': 'ListItem',
            position: 1,
            name: this.translations.translate('concours.home'),
            item: 'https://maroquiz.com/',
          },
          {
            '@type': 'ListItem',
            position: 2,
            name: this.translations.translate('concours.title'),
            item: 'https://maroquiz.com/concours',
          },
          { '@type': 'ListItem', position: 3, name: content.name, item: url },
        ],
      });
    });
  }

  content(record: DirectoryRecord) {
    return editorial(record, this.language.language());
  }
  dateLabel(value: string): string {
    return calendarDate(value, this.language.language());
  }
  loadRelated(): void {
    const record = this.record();
    if (!record?.category_id) return;
    this.relatedRequest?.unsubscribe();
    this.relatedLoading.set(true);
    this.relatedError.set(false);
    this.relatedRequest = this.api
      .list('concours', { category_id: record.category_id, per_page: 4 })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (response) => {
          this.related.set(response.data.items.filter((item) => item.id !== record.id).slice(0, 3));
          this.relatedLoading.set(false);
        },
        error: () => {
          this.related.set([]);
          this.relatedLoading.set(false);
          this.relatedError.set(true);
        },
      });
  }
  resourceGroups(types: ConcoursDocumentType[]) {
    const groups = new Map<number | null, ConcoursPdf[]>();
    for (const pdf of this.record()?.resources ?? []) {
      if (!types.includes(pdf.document_type) || !this.matchesPreparationOption(pdf)) continue;
      const items = groups.get(pdf.year) ?? [];
      items.push(pdf);
      groups.set(pdf.year, items);
    }
    return [...groups.entries()]
      .sort(([a], [b]) => (b ?? 0) - (a ?? 0))
      .map(([year, items]) => ({ year, items }));
  }
  retry(): void {
    this.seo.beginPage('/concours/' + this.route.snapshot.paramMap.get('slug'));
    this.reload.next();
  }
}
