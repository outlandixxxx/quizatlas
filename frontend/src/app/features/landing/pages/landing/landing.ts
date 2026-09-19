import {
  Component,
  OnInit,
  inject,
} from '@angular/core';

import { RouterLink } from '@angular/router';

import { PublicHeader } from '../../../../layouts/public-layout/components/public-header/public-header';
import { TranslocoModule } from '@jsverse/transloco';
import { StatsRibbon } from '../../../public/stats-ribbon/stats-ribbon';
import { QuizDashboardGrid } from '../../../public/quiz-dashboard-grid/quiz-dashboard-grid';
import { MidPageSearch } from '../../../public/mid-page-search/mid-page-search';
import { Testimonials } from '../../../public/testimonials/testimonials';
import { ContactFeedbackPanels } from '../../../public/contact-feedback-panels/contact-feedback-panels';
import { MajorsSubjectsBrowser } from '../../../public/majors-subjects-browser/majors-subjects-browser';
import { ProgressionShowcase } from '../../../public/progression-showcase/progression-showcase';
import { Seo } from '../../../../core/services/seo';
import { CommonModule } from '@angular/common';

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
    MidPageSearch,
    Testimonials,
    ContactFeedbackPanels,
    CommonModule
],



  templateUrl: './landing.html',
  styleUrl: './landing.scss',
})
export class Landing implements OnInit {
  private readonly seo = inject(Seo);

  ngOnInit(): void {
const title = 'MaroQuiz — QCM, MCQ & Quiz d’entraînement corrigés';
const description = 'Practice QCMs and MCQs with corrected questions in programming, mathematics, finance, sciences, languages and more. Learn, practice and improve with MaroQuiz.';
    this.seo.setTitle(title);
    this.seo.setDescription(description);
    this.seo.setSocialTags({ title, description });

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
