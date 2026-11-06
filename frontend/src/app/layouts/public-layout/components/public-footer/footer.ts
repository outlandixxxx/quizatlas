import { Component, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { TranslocoDirective, TranslocoPipe } from '@jsverse/transloco';

import { Logo } from '../../../../shared/components/ui/logo/logo';
import { NewsletterApi } from '../../../../core/services/newsletter-api';
import { SocialLinks } from '../../../../shared/components/social-links/social-links';

@Component({
  selector: 'app-public-footer',
  standalone: true,
  imports: [CommonModule, RouterModule, FormsModule, TranslocoDirective, TranslocoPipe, Logo, SocialLinks],
  templateUrl: './footer.html',
  styleUrl: './footer.scss',
})
export class PublicFooter {
  private readonly newsletterApi = inject(NewsletterApi);

  email = '';
  isSubmitting = false;
  feedbackMsg = '';

subscribe(): void {
  if (!this.email) return;

  this.isSubmitting = true;
  this.feedbackMsg = '';

  this.newsletterApi.subscribe(this.email).subscribe({
    next: () => {
      this.feedbackMsg = 'footer.subscribeSuccess';
      this.email = '';
      this.isSubmitting = false;
    },
    error: (err) => {
      this.feedbackMsg = err.status === 422
        ? 'footer.invalidEmail'
        : 'footer.subscribeError';
      this.isSubmitting = false;
    },
  });
}
}
