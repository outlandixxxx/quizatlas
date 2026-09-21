import {
  Component,
  OnInit,
  effect,
  inject,
} from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import {
  TranslocoModule,
  TranslocoService,
} from '@jsverse/transloco';

import { Seo } from '../../../core/services/seo';
import { LanguageService } from '../../../core/services/language';

@Component({
  selector: 'app-help',
  standalone: true,
  imports: [CommonModule, RouterLink, TranslocoModule],
  templateUrl: './help.html',
  styleUrl: './help.scss',
})
export class Help implements OnInit {
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService = inject(LanguageService);

  private readonly seoLanguageEffect = effect(() => {
    this.languageService.language();
    this.updateSeoMetadata();
  });

  ngOnInit(): void {
    this.updateSeoMetadata();
  }

  private updateSeoMetadata(): void {
    const title = this.transloco.translate('help.seo_title');
    const description = this.transloco.translate('help.seo_description');

    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: 'https://maroquiz.com/help',
    });
  }
}