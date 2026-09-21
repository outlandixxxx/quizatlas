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

interface FaqItem {
  key: string;
  open: boolean;
}

@Component({
  selector: 'app-faq',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './faq.html',
  styleUrl: './faq.scss',
})
export class Faq implements OnInit {
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly languageService = inject(LanguageService);

  private readonly seoLanguageEffect = effect(() => {
    this.languageService.language();
    this.updateSeoMetadata();
  });

  items: FaqItem[] = [
    { key: 'q1', open: false },
    { key: 'q2', open: false },
    { key: 'q3', open: false },
    { key: 'q4', open: false },
    { key: 'q5', open: false },
    { key: 'q6', open: false },
  ];

  ngOnInit(): void {
    this.updateSeoMetadata();
  }

  private updateSeoMetadata(): void {
    const title = this.transloco.translate('faq.seo_title');
    const description = this.transloco.translate('faq.seo_description');

    this.seo.setTitle(title);
    this.seo.setDescription(description);

    this.seo.setSocialTags({
      title,
      description,
      url: 'https://maroquiz.com/faq',
    });
  }

  toggle(item: FaqItem): void {
    item.open = !item.open;
  }
}