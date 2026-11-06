import { AnnouncementSource } from './announcement-source';
import { Component, computed, inject, input } from '@angular/core';
import { RouterLink } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import {
  ConcoursAnnouncement,
  announcementText,
  calendarDate,
} from '../../../core/models/concours-announcement';
import { editorial } from '../../../core/models/concours';
import { LanguageService } from '../../../core/services/language';
import { PdfResourceCard } from './pdf-resource-card';

@Component({
  selector: 'app-announcement-card',
  standalone: true,
  imports: [RouterLink, TranslocoPipe, AnnouncementSource, PdfResourceCard],
  styleUrl: './announcement-card.scss',
  template: ` <article
    [class.detailed]="detailed()"
    [attr.aria-labelledby]="detailed() ? 'announcement-title-' + record().id : null"
  >
    <div class="card-top">
      @if (detailed() && mainOfficial()) {
        <span class="main-official-label">{{ 'concoursOfficial.mainLabel' | transloco }}</span>
      }
      <span
        class="registration-status"
        [attr.data-status]="record().announcement_status ?? record().registration_status"
        >{{
          'announcements.statuses.' + (record().announcement_status ?? record().registration_status)
            | transloco
        }}</span
      ><span class="verified-mark"
        ><span class="material-symbols-rounded" aria-hidden="true">verified</span
        >{{ 'announcements.verified' | transloco }}</span
      >
    </div>
    <h3 [attr.id]="detailed() ? 'announcement-title-' + record().id : null">
      <a
        [routerLink]="['/concours/annonces', record().slug]"
        [attr.lang]="title().lang"
        [attr.dir]="title().lang === 'ar' ? 'rtl' : 'ltr'"
        >{{ title().text }}</a
      >
    </h3>
    <p class="language-label">
      {{ 'concours.contentLanguage' | transloco }}:
      {{ 'concours.languages.' + title().lang | transloco }}
    </p>
    <p>
      <bdi>{{ name(record().concours).name }}</bdi>
    </p>
    @if (record().institution; as institution) {
      <p class="muted">
        <bdi>{{ name(institution).name }}</bdi>
      </p>
    }
    @if (record().concours.category; as category) {
      <p class="muted">
        <bdi>{{ name(category).name }}</bdi>
      </p>
    }
    @if (record().regions?.length) {
      <p class="tags">
        <strong>{{ 'announcements.regions' | transloco }}:</strong>
        <bdi>{{ record().regions?.join(' · ') }}</bdi>
      </p>
    }
    @if (record().specialties?.length) {
      <p class="tags">
        <strong>{{ 'announcements.specialties' | transloco }}:</strong>
        <bdi>{{ record().specialties?.join(' · ') }}</bdi>
      </p>
    }
    @if (detailed()) {
      @if (record().session_year; as year) {
        <p class="language-label">{{ 'concoursUi.sessionLabel' | transloco }}: {{ year }}</p>
      }
      @if (historical()) {
        <p class="historical-notice">{{ 'concoursUi.historicalNotice' | transloco }}</p>
      }
      @if (description().text) {
        <p
          class="official-description"
          [attr.lang]="description().lang"
          [attr.dir]="description().lang === 'ar' ? 'rtl' : 'ltr'"
          [textContent]="description().text"
        ></p>
      }
      @if (positions() || dateFields().length) {
        <div
          class="announcement-summary"
          role="group"
          [attr.aria-label]="'concoursUi.verifiedDetails' | transloco"
        >
          @if (positions(); as count) {
            <dl class="summary-card announcement-positions">
              <dt>{{ 'announcements.positions' | transloco }}</dt>
              <dd>{{ count }}</dd>
            </dl>
          }
          @if (dateFields().length) {
            <section class="summary-card announcement-dates">
              <h4>{{ 'concoursOfficial.importantDates' | transloco }}</h4>
              <dl>
                @for (field of dateFields(); track field) {
                  @if (record()[field]; as date) {
                    <div>
                      <dt>{{ 'announcements.dates.' + field | transloco }}</dt>
                      <dd>
                        <time [attr.datetime]="date">{{ dateLabel(date) }}</time>
                      </dd>
                    </div>
                  }
                }
              </dl>
            </section>
          }
        </div>
      }
    } @else {
      <div class="deadline">
        @if (record().registration_opens_on; as opens) {
          <span>{{ 'announcements.dates.registration_opens_on' | transloco }}</span
          ><time [attr.datetime]="opens">{{ dateLabel(opens) }}</time>
        }
        <span>{{ 'announcements.deadline' | transloco }}</span>
        @if (record().registration_deadline; as date) {
          <time [attr.datetime]="date">{{ dateLabel(date) }}</time>
        } @else {
          <strong>{{ 'announcements.unknownDate' | transloco }}</strong>
        }
      </div>
    }
    @for (pdf of documents(); track pdf.id) {
      <app-concours-pdf class="card-pdf" [document]="pdf" />
    }
    @if (
      record().application_url &&
      !record().superseded_at &&
      (record().announcement_status ?? record().registration_status) !== 'completed' &&
      record().registration_status !== 'closed' &&
      (record().announcement_status ?? record().registration_status) !== 'cancelled' &&
      (record().announcement_status ?? record().registration_status) !== 'postponed'
    ) {
      <a class="details" [href]="record().application_url" target="_blank" rel="noopener noreferrer"
        >{{ 'announcements.applicationWebsite' | transloco }}
        <span class="material-symbols-rounded" aria-hidden="true">open_in_new</span></a
      >
    }
    @if (record().official_source_url; as source) {
      <a class="details" [href]="source" target="_blank" rel="noopener noreferrer">
        {{ 'concoursResources.source' | transloco }}
      </a>
    }
    @if (detailed()) {
      @for (url of additionalUrls(); track url) {
        <a class="details" [href]="url" target="_blank" rel="noopener noreferrer"
          ><bdi>{{ url }}</bdi></a
        >
      }
    }
    <app-announcement-source [credit]="record().source_attribution" />
    <a class="details" [routerLink]="['/concours/annonces', record().slug]"
      >{{ 'announcements.details' | transloco }}
      <span class="direction-arrow" aria-hidden="true">→</span></a
    >
  </article>`,
})
export class AnnouncementCard {
  readonly record = input.required<ConcoursAnnouncement>();
  readonly detailed = input(false);
  readonly mainOfficial = input(false);
  readonly language = inject(LanguageService);
  readonly title = computed(() => announcementText(this.record(), this.language.language()));
  readonly description = computed(() =>
    announcementText(this.record(), this.language.language(), 'description'),
  );
  readonly positions = computed(() => {
    const count = this.record().positions;
    return count !== null && count > 0 ? count : null;
  });
  readonly dateFields = computed(() =>
    (
      [
        'official_publication_date',
        'registration_opens_on',
        'registration_deadline',
        'examination_date',
      ] as const
    ).filter((field) => !!this.record()[field]),
  );
  readonly documents = computed(() => {
    const primary = this.record().official_pdf;
    return (
      (this.detailed() ? this.record().official_pdfs : undefined) ?? (primary ? [primary] : [])
    );
  });
  readonly additionalUrls = computed(() =>
    [...new Set(this.record().additional_official_urls ?? [])].filter(
      (url) => url !== this.record().official_source_url,
    ),
  );
  readonly historical = computed(() =>
    ['closed', 'postponed', 'cancelled', 'completed'].includes(
      this.record().announcement_status ?? this.record().registration_status,
    ),
  );
  name = (record: Parameters<typeof editorial>[0]) => editorial(record, this.language.language());
  dateLabel = (value: string) => calendarDate(value, this.language.language());
}
