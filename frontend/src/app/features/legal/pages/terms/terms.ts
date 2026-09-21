import {
  ChangeDetectionStrategy,
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

import { Seo } from '../../../../core/services/seo';
import { LanguageService } from '../../../../core/services/language';

@Component({
  selector: 'app-terms',
  standalone: true,
  imports: [
    CommonModule,
    TranslocoModule,
  ],
  templateUrl: './terms.html',
  styleUrl: './terms.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Terms implements OnInit {
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
    const title = this.transloco.translate('legal.terms.seo_title');
    const description = this.transloco.translate(
      'legal.terms.seo_description',
    );

    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: 'https://maroquiz.com/terms',
    });
  }
}