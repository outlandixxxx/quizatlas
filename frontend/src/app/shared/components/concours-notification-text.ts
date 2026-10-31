import { Component, computed, inject, input } from '@angular/core';
import { TranslocoPipe } from '@jsverse/transloco';
import { ApiNotification } from '../../core/services/notification-api';
import { LanguageService } from '../../core/services/language';
@Component({
  selector: 'app-concours-notification-text',
  standalone: true,
  imports: [TranslocoPipe],
  template: `
    <span
      >{{ 'concoursFollowing.events.' + notification().type.slice(9) | transloco }} ·
      <bdi>{{ title() }}</bdi></span
    >
    @if (notification().type === 'concours_deadline') {
      <small>{{
        'concoursFollowing.daysBefore' | transloco: { days: notification().data['days_before'] }
      }}</small>
    }
  `,
  styles: [
    `
      :host {
        display: inline;
      }
      small {
        display: block;
      }
    `,
  ],
})
export class ConcoursNotificationText {
  readonly notification = input.required<ApiNotification>();
  private readonly language = inject(LanguageService);
  readonly title = computed(
    () =>
      (this.language.language() === 'ar'
        ? this.notification().data['title_ar']
        : this.notification().data['title_fr']) ||
      this.notification().data['title_fr'] ||
      this.notification().data['title_ar'] ||
      '',
  );
}
