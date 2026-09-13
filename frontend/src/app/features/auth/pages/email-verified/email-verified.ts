import { ChangeDetectionStrategy, Component, computed, inject, signal } from '@angular/core';
import { ActivatedRoute, RouterLink } from '@angular/router';
import { CommonModule } from '@angular/common';
import { TranslocoPipe } from '@jsverse/transloco';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';
import { PrimaryButton } from '../../../../shared/components/ui/primary-button/primary-button';

type VerifyStatus = 'success' | 'already' | 'error';

@Component({
  selector: 'app-email-verified',
  standalone: true,
  imports: [
    CommonModule,
    RouterLink,
    TranslocoPipe,
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
        return 'auth.verifyPage.successTitle';
      case 'already':
        return 'auth.verifyPage.alreadyTitle';
      default:
        return 'auth.verifyPage.errorTitle';
    }
  });

  readonly message = computed(() => {
    switch (this.status()) {
      case 'success':
        return 'auth.verifyPage.successMessage';
      case 'already':
        return 'auth.verifyPage.alreadyMessage';
      default:
        return 'auth.verifyPage.errorMessage';
    }
  });
}
