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
  template: ` <article>
    <div class="card-top">
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
    <h3>
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
    @if (record().official_pdf; as pdf) {
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
    <app-announcement-source [credit]="record().source_attribution" />
    <a class="details" [routerLink]="['/concours/annonces', record().slug]"
      >{{ 'announcements.details' | transloco }}
      <span class="direction-arrow" aria-hidden="true">→</span></a
    >
  </article>`,
})
export class AnnouncementCard {
  readonly record = input.required<ConcoursAnnouncement>();
  readonly language = inject(LanguageService);
  readonly title = computed(() => announcementText(this.record(), this.language.language()));
  name = (record: Parameters<typeof editorial>[0]) => editorial(record, this.language.language());
  dateLabel = (value: string) => calendarDate(value, this.language.language());
}
