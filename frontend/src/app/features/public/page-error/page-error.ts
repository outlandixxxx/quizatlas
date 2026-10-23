import { Component, effect, inject, input } from '@angular/core';
import { RouterLink } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { Seo } from '../../../core/services/seo';
import { seoTranslationsReady } from '../../../core/seo/translations-ready';

@Component({
  selector: 'app-public-page-error',
  standalone: true,
  imports: [RouterLink, TranslocoModule],
  template: `<section class="page-error" role="status" *transloco="let t">
    <h1>{{ t(status() === 404 || status() === 410 ? 'seo.not_found_title' : 'seo.unavailable_title') }}</h1>
    <p>{{ t(status() === 404 || status() === 410 ? 'seo.not_found_description' : 'seo.unavailable_description') }}</p>
    <a routerLink="/">{{ t('seo.home') }}</a>
    <a routerLink="/subjects">{{ t('seo.browse_subjects') }}</a>
  </section>`,
  styles: [`.page-error { margin: 3rem auto; padding: 2rem; max-width: 65rem; }
    h1 { margin-bottom: 1rem; } p { margin-bottom: 1.5rem; } a { margin-inline-end: 1.5rem; }`],
})
export class PublicPageError {
  readonly status = input(404);
  private readonly seo = inject(Seo);
  private readonly translations = inject(TranslocoService);
  private readonly ready = seoTranslationsReady();

  constructor() {
    effect(() => {
      if (!this.ready()) return;
      const missing = this.status() === 404 || this.status() === 410;
      const title = this.translations.translate(missing ? 'seo.not_found_title' : 'seo.unavailable_title');
      const description = this.translations.translate(missing ? 'seo.not_found_description' : 'seo.unavailable_description');
      this.seo.setTitle(`${title} — MaroQuiz`);
      this.seo.setDescription(description);
      this.seo.setSocialTags({ title, description });
      this.seo.setHttpError(this.status());
    });
  }
}
