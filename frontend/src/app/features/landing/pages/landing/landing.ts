import {
  Component,
  DestroyRef,
  OnInit,
  inject,
} from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';

import { RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';

import { StatsRibbon } from '../../../public/stats-ribbon/stats-ribbon';
import { QuizDashboardGrid } from '../../../public/quiz-dashboard-grid/quiz-dashboard-grid';
import { MidPageSearch } from '../../../public/mid-page-search/mid-page-search';
import { Testimonials } from '../../../public/testimonials/testimonials';
import { ContactFeedbackPanels } from '../../../public/contact-feedback-panels/contact-feedback-panels';
import { MajorsSubjectsBrowser } from '../../../public/majors-subjects-browser/majors-subjects-browser';
import { ProgressionShowcase } from '../../../public/progression-showcase/progression-showcase';
import { TeacherPromo } from '../../../public/teacher-promo/teacher-promo';
import { Seo } from '../../../../core/services/seo';

@Component({
  selector: 'app-landing',
  standalone: true,
  imports: [
    RouterLink,
    TranslocoModule,
    StatsRibbon,
    MajorsSubjectsBrowser,
    ProgressionShowcase,
    QuizDashboardGrid,
    TeacherPromo,
    MidPageSearch,
    Testimonials,
    ContactFeedbackPanels,
    CommonModule,
  ],
  templateUrl: './landing.html',
  styleUrl: './landing.scss',
})
export class Landing implements OnInit {
  private readonly seo = inject(Seo);
  private readonly transloco = inject(TranslocoService);
  private readonly destroyRef = inject(DestroyRef);

  ngOnInit(): void {
    this.transloco
      .selectTranslate('landing.seo_title')
      .pipe(takeUntilDestroyed(this.destroyRef))
      .subscribe((title) => {
        const description = this.transloco.translate(
          'landing.seo_description'
        );

        this.seo.setTitle(title);
        this.seo.setDescription(description);

        this.seo.setSocialTags({
          title,
          description,
          url: 'https://maroquiz.com/',
        });
      });

    this.seo.setJsonLd([
      {
        '@context': 'https://schema.org',
        '@type': 'Organization',
        name: 'MaroQuiz',
        url: 'https://maroquiz.com/',
        logo: 'https://maroquiz.com/assets/images/logo-en.png',
      },
      {
        '@context': 'https://schema.org',
        '@type': 'WebSite',
        name: 'MaroQuiz',
        url: 'https://maroquiz.com/',
      },
    ]);
  }
}
