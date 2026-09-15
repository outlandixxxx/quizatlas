import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { Seo } from '../../../core/services/seo';

@Component({
  selector: 'app-about',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './about.html',
  styleUrl: './about.scss',
})
export class About implements OnInit {
  private readonly seo = inject(Seo);

  ngOnInit(): void {
    const title = 'À propos — MaroQuiz';
    const description = 'Découvrez MaroQuiz, la plateforme marocaine de quiz et exercices corrigés pour réviser efficacement.';

    this.seo.setTitle(title);
    this.seo.setDescription(description);
    this.seo.setSocialTags({ title, description });
  }
}
