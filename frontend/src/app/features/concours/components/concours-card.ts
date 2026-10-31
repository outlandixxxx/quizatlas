import { ChangeDetectionStrategy, Component, inject, input } from '@angular/core';
import { RouterLink } from '@angular/router';
import { TranslocoPipe } from '@jsverse/transloco';
import { DirectoryRecord, editorial, categoryIcon } from '../../../core/models/concours';
import { LanguageService } from '../../../core/services/language';
import { ConcoursAnnouncement } from '../../../core/models/concours-announcement';

@Component({
  selector: 'app-concours-card',
  standalone: true,
  imports: [RouterLink, TranslocoPipe],
  changeDetection: ChangeDetectionStrategy.OnPush,
  template: `<article class="concours-card">
    <div class="card-top">
      <span class="material-symbols-rounded" aria-hidden="true">{{
        icon(record().category?.slug ?? '')
      }}</span>
      @if (announcement(); as notice) {
        <span
          class="type-pill notice-badge"
          [attr.data-status]="notice.announcement_status ?? notice.registration_status"
        >
          {{ 'concoursUi.notice' | transloco }} ·
          {{
            'announcements.statuses.' + (notice.announcement_status ?? notice.registration_status)
              | transloco
          }}
        </span>
      } @else if (record().session_announcement_state === 'archived') {
        <span class="type-pill">{{ 'announcements.statuses.archived' | transloco }}</span>
      } @else {}
    </div>
    <p
      class="card-category"
      [attr.lang]="content(record().category ?? record()).lang"
      [attr.dir]="content(record().category ?? record()).lang === 'ar' ? 'rtl' : 'ltr'"
    >
      {{ content(record().category ?? record()).name }}
    </p>
    <h3>
      <a
        [routerLink]="['/concours', record().slug]"
        [attr.lang]="content(record()).lang"
        [attr.dir]="content(record()).lang === 'ar' ? 'rtl' : 'ltr'"
        >{{ content(record()).name }}</a
      >
    </h3>
    @if (record().institution; as institution) {
      <p class="institution" [attr.lang]="content(institution).lang" dir="auto">
        {{ content(institution).name }}
      </p>
    }
    @if (content(record()).description) {
      <p
        class="card-description"
        [attr.lang]="content(record()).descriptionLang"
        [attr.dir]="content(record()).descriptionLang === 'ar' ? 'rtl' : 'ltr'"
      >
        {{ content(record()).description }}
      </p>
    }
    <div class="card-bottom">
      <span class="language-label"
        >{{ 'concours.types.' + record().type | transloco }} ·
        {{ 'concours.languages.' + content(record()).lang | transloco }}</span
      >
      <a [routerLink]="['/concours', record().slug]" class="text-link"
        >{{ 'concoursUi.prepare' | transloco }}
        <span aria-hidden="true" class="direction-arrow">→</span></a
      >
    </div>
  </article>`,
  styleUrl: './concours-card.scss',
})
export class ConcoursCard {
  readonly record = input.required<DirectoryRecord>();
  readonly announcement = input<ConcoursAnnouncement | null>(null);
  private readonly language = inject(LanguageService);
  readonly icon = categoryIcon;
  content(record: DirectoryRecord) {
    return editorial(record, this.language.language());
  }
}
