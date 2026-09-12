import { ChangeDetectionStrategy, Component, computed, inject, signal } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';

type VerifyStatus = 'success' | 'already' | 'error';

@Component({
  selector: 'app-email-verified',
  standalone: true,
  imports: [
    CommonModule,
    RouterLink,
    GlassCard,
    PrimaryButton,
  ],
  templateUrl: './email-verified.html',
  styleUrl: './email-verified.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class EmailVerified {

  private readonly route = inject(ActivatedRoute);

  private readonly rawStatus = signal<string | null>(
    this.route.snapshot.queryParamMap.get('status')
  );

  readonly status = computed<VerifyStatus>(() => {
    const value = this.rawStatus();
    if (value === 'success' || value === 'already') {
      return value;
    }
    return 'error';
  });

  readonly title = computed(() => {
    switch (this.status()) {
      case 'success':
        return 'Email verified!';
      case 'already':
        return 'Already verified';
      default:
        return 'Verification failed';
    }
  });

  readonly message = computed(() => {
    switch (this.status()) {
      case 'success':
        return 'Your email address has been verified. You can now log in to your account.';
      case 'already':
        return 'This email address was already verified. You can log in to your account.';
      default:
        return 'This verification link is invalid or has expired. Please request a new one from the login page.';
    }
  });
}
