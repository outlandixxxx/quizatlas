import { ChangeDetectionStrategy, Component } from '@angular/core';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';
import { AuthWelcome } from '../../components/auth-welcome/auth-welcome';
import { ResetPasswordForm } from '../../components/reset-password-form/reset-password-form';

@Component({
  selector: 'app-reset-password',
  standalone: true,
  imports: [
    GlassCard,
    AuthWelcome,
    ResetPasswordForm,
  ],
  templateUrl: './reset-password.html',
  styleUrl: './reset-password.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class ResetPassword {}