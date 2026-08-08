import { ChangeDetectionStrategy, Component, OnInit, inject, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { FeedbackModal } from './feedback-modal';


@Component({
  selector: 'app-contact-feedback-panels',
  standalone: true,
  imports: [CommonModule, TranslocoModule, FeedbackModal],
  templateUrl: './contact-feedback-panels.html',
  styleUrl: './contact-feedback-panels.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class ContactFeedbackPanels implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly cdr = inject(ChangeDetectorRef);

  showFeedbackModal = false;

  ngOnInit(): void {
    this.route.queryParams.subscribe((params) => {
      if (params['action'] === 'feedback') {
        this.showFeedbackModal = true;
        this.cdr.detectChanges();
      }
    });
  }

  openFeedbackModal(): void {
    this.showFeedbackModal = true;
  }

  closeFeedbackModal(): void {
    this.showFeedbackModal = false;
  }
}