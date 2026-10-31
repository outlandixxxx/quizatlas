import { Component, computed, inject, input } from '@angular/core';
import { TranslocoPipe } from '@jsverse/transloco';
import { ConcoursAnnouncement } from '../../../core/models/concours-announcement';
import { LanguageService } from '../../../core/services/language';

@Component({
  selector: 'app-announcement-source',
  standalone: true,
  imports: [TranslocoPipe],
  template: `@if (credit(); as source) {
    <p class="source-credit">
      {{ 'announcements.attribution.source' | transloco }}
      <a [href]="article()" target="_blank" rel="noopener noreferrer"
        ><bdi>{{ source.name }}</bdi></a
      >
    </p>
  }`,
  styles: [
    ':host { display: block; } .source-credit { font-size: .875rem; margin-block: .65rem; overflow-wrap: anywhere; } a { color: inherit; text-decoration: underline; text-underline-offset: .15em; }',
  ],
})
export class AnnouncementSource {
  readonly credit = input<ConcoursAnnouncement['source_attribution']>();
  private readonly language = inject(LanguageService);
  readonly article = computed(() =>
    this.language.language() === 'ar'
      ? this.credit()?.url_ar || this.credit()?.url
      : this.credit()?.url,
  );
}
