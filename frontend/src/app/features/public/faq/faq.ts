import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { Seo } from '../../../core/services/seo';

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

  items: FaqItem[] = [
    { key: 'q1', open: false },
    { key: 'q2', open: false },
    { key: 'q3', open: false },
    { key: 'q4', open: false },
    { key: 'q5', open: false },
    { key: 'q6', open: false },
  ];

  ngOnInit(): void {
    const title = 'FAQ — Questions fréquentes | MaroQuiz';
    const description = 'Trouvez les réponses aux questions fréquentes sur MaroQuiz : inscription, quiz, progression et plus.';

    this.seo.setTitle(title);
    this.seo.setDescription(description);
    this.seo.setSocialTags({ title, description });
  }

  toggle(item: FaqItem): void {
    item.open = !item.open;
  }
}
