import { Component, input } from '@angular/core';
import { TranslocoPipe } from '@jsverse/transloco';
import { ConcoursPdf } from '../../../core/models/concours-pdf';
import { environment } from '../../../../environments/environment';

@Component({
  selector: 'app-concours-pdf',
  standalone: true,
  imports: [TranslocoPipe],
  styleUrl: './pdf-resource-card.scss',
  template: ` <article class="pdf-resource">
    <div class="pdf-heading">
      <span class="material-symbols-rounded" aria-hidden="true">picture_as_pdf</span>
      <div>
        <p class="resource-type">
          {{ 'concoursResources.types.' + document().document_type | transloco }}
          @if (document().year) {
            · <bdi>{{ document().year }}</bdi>
          }
        </p>
        <h3 dir="auto">{{ document().title }}</h3>
        <p class="resource-meta">
          {{ document().file_size }}
          @if (document().subject) {
            · <bdi>{{ document().subject }}</bdi>
          }
          @if (document().specialty) {
            · <bdi>{{ document().specialty }}</bdi>
          }
        </p>
      </div>
    </div>
    @if (document().attribution) {
      <p class="attribution">
        <bdi>{{ document().attribution }}</bdi>
      </p>
    }
    @if (document().available) {
      <div class="pdf-actions">
        <a [href]="url(document().view_path)" target="_blank" rel="noopener noreferrer"
          >{{
            (document().document_type === 'official_announcement'
              ? 'concoursResources.viewOfficial'
              : 'concoursResources.preview'
            ) | transloco
          }}
          <span class="material-symbols-rounded" aria-hidden="true">open_in_new</span></a
        >
        @if (document().download_allowed !== false) {
          <a [href]="url(document().download_path)" target="_blank" rel="noopener noreferrer"
            >{{ 'concoursResources.download' | transloco }}
            <span class="material-symbols-rounded" aria-hidden="true">download</span></a
          >
        }
      </div>
    } @else {
      <p class="unavailable" role="status">{{ 'concoursResources.unavailable' | transloco }}</p>
    }
    @if (document().source_url) {
      <a
        class="source-link"
        [href]="document().source_url"
        target="_blank"
        rel="noopener noreferrer"
        >{{ 'concoursResources.source' | transloco }}</a
      >
    }
  </article>`,
})
export class PdfResourceCard {
  readonly document = input.required<ConcoursPdf>();
  // Public URLs must use the browser API origin, including when rendered inside Docker.
  url(path: string) {
    return /^\/public\/concours-pdfs\/\d+\/(view|download)$/.test(path)
      ? environment.apiUrl + path
      : null;
  }
}
