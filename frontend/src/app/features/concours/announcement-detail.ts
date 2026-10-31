import { AnnouncementSource } from './components/announcement-source';
import { Component, DestroyRef, computed, effect, inject, signal } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subject, catchError, combineLatest, of, startWith, switchMap } from 'rxjs';
import { ConcoursAnnouncementsApi } from '../../core/services/concours-announcements-api';
import {
  ConcoursAnnouncement,
  announcementText,
  calendarDate,
} from '../../core/models/concours-announcement';
import { DirectoryRecord, editorial } from '../../core/models/concours';
import { LanguageService } from '../../core/services/language';
import { Seo } from '../../core/services/seo';
import { seoTranslationsReady } from '../../core/seo/translations-ready';
import { PdfResourceCard } from './components/pdf-resource-card';
import { PublicPageError } from '../public/page-error/page-error';

@Component({
  standalone: true,
  imports: [RouterLink, TranslocoPipe, AnnouncementSource, PublicPageError, PdfResourceCard],
  templateUrl: './announcement-detail.html',
  styleUrls: ['./concours.scss', './announcement-detail.scss'],
})
export class AnnouncementDetail {
  private readonly api = inject(ConcoursAnnouncementsApi);
  private readonly route = inject(ActivatedRoute);
  private readonly destroy = inject(DestroyRef);
  private readonly seo = inject(Seo);
  private readonly translations = inject(TranslocoService);
  private readonly ready = seoTranslationsReady();
  private readonly reload = new Subject<void>();
  readonly language = inject(LanguageService);
  readonly record = signal<ConcoursAnnouncement | null>(null);
  readonly error = signal<number | null>(null);
  readonly loading = signal(true);
  readonly title = computed(() => (this.record() ? this.text(this.record()!) : null));
  readonly dateFields = ['registration_opens_on', 'registration_deadline'] as const;
  constructor() {
    combineLatest([this.route.paramMap, this.reload.pipe(startWith(undefined))])
      .pipe(
        switchMap(([params]) => {
          this.record.set(null);
          this.error.set(null);
          this.loading.set(true);
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
        if (response) this.record.set(response.data);
      });
    effect(() => {
      const record = this.record();
      if (!this.ready() || !record || this.error()) return;
      const title = `${this.text(record).text} — MaroQuiz`;
      const description = (
        this.text(record, 'description').text ||
        this.translations.translate('announcements.pdfSeoDescription', {
          title: this.text(record).text,
        })
      )
        .replace(/\s+/g, ' ')
        .slice(0, 180);
      const url = `https://maroquiz.com/concours/annonces/${encodeURIComponent(record.slug)}`;
      this.seo.setTitle(title);
      this.seo.setDescription(description);
      this.seo.setCanonical(url);
      this.seo.setIndexable(true);
      this.seo.setSocialTags({ title, description, url, language: this.text(record).lang });
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
          {
            '@type': 'ListItem',
            position: 3,
            name: this.name(record.concours).name,
            item: `https://maroquiz.com/concours/${record.concours.slug}`,
          },
          { '@type': 'ListItem', position: 4, name: this.text(record).text, item: url },
        ],
      });
    });
  }
  text = (record: ConcoursAnnouncement, field: Parameters<typeof announcementText>[2] = 'title') =>
    announcementText(record, this.language.language(), field);
  name = (record: DirectoryRecord) => editorial(record, this.language.language());
  dateLabel = (value: string) => calendarDate(value, this.language.language());
  verifiedLabel(value: string) {
    return new Intl.DateTimeFormat(this.language.language(), {
      dateStyle: 'long',
      timeZone: 'Africa/Casablanca',
    }).format(new Date(value));
  }
  retry() {
    this.seo.beginPage('/concours/annonces/' + this.route.snapshot.paramMap.get('slug'));
    this.reload.next();
  }
}
