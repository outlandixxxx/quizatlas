import { seoTranslationsReady } from '../../../core/seo/translations-ready';
import {
  Component,
  OnInit,
  effect,
  inject,
} from '@angular/core';
import { CommonModule } from '@angular/common';
import {
  TranslocoModule,
  TranslocoService,
} from '@jsverse/transloco';

import { Seo } from '../../../core/services/seo';
import { LanguageService } from '../../../core/services/language';

@Component({
  selector: 'app-about',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './about.html',
  styleUrl: './about.scss',
})
export class About implements OnInit {
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService = inject(LanguageService);

  private readonly seoTranslations = seoTranslationsReady();

  private readonly seoLanguageEffect = effect(() => {
    this.languageService.language();
    this.updateSeoMetadata();
  });

  ngOnInit(): void {
    this.updateSeoMetadata();
  }

  private updateSeoMetadata(): void {
    if (!this.seoTranslations()) return;
    const title = this.transloco.translate('about.seo_title');
    const description = this.transloco.translate('about.seo_description');

    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: 'https://maroquiz.com/about',
    });
  }
}