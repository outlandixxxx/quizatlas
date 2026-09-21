import {
  ChangeDetectionStrategy,
  Component,
  OnInit,
  effect,
  inject,
} from '@angular/core';

import { CommonModule } from '@angular/common';

import {
  TranslocoPipe,
  TranslocoService,
} from '@jsverse/transloco';

import { Seo } from '../../../../core/services/seo';
import { LanguageService } from '../../../../core/services/language';

@Component({
  selector: 'app-data-deletion',
  standalone: true,
  imports: [
    CommonModule,
    TranslocoPipe,
  ],
  templateUrl: './data-deletion.html',
  styleUrl: './data-deletion.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class DataDeletion implements OnInit {
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
    const title = this.transloco.translate(
      'legal.dataDeletion.seo_title',
    );

    const description = this.transloco.translate(
      'legal.dataDeletion.seo_description',
    );

    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: 'https://maroquiz.com/data-deletion',
    });
  }
}