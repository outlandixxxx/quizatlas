import {
  ChangeDetectionStrategy,
  Component,
} from '@angular/core';

import { RouterLink } from '@angular/router';

import { PublicHeader } from '../../../../layouts/public-layout/components/public-header/public-header';
import { TranslocoModule } from '@jsverse/transloco'; 
import { StatsRibbon } from '../../../public/stats-ribbon/stats-ribbon';
import { QuizDashboardGrid } from '../../../public/quiz-dashboard-grid/quiz-dashboard-grid';
import { MidPageSearch } from '../../../public/mid-page-search/mid-page-search';
import { Testimonials } from '../../../public/testimonials/testimonials';
import { ContactFeedbackPanels } from '../../../public/contact-feedback-panels/contact-feedback-panels';
import { PublicFooter } from '../../../../layouts/public-layout/components/public-footer/footer';

@Component({
  selector: 'app-landing',
  standalone: true,
  imports: [
    RouterLink,
    PublicHeader,
    TranslocoModule,
    StatsRibbon,
    QuizDashboardGrid,
    MidPageSearch,
    Testimonials,
    ContactFeedbackPanels, 
    PublicFooter,   
  ],
  templateUrl: './landing.html',
  styleUrl: './landing.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Landing {}