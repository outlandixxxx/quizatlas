import { ChangeDetectionStrategy, Component } from '@angular/core';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';
import { AuthWelcome } from '../../components/auth-welcome/auth-welcome';
import { ForgotPasswordForm } from '../../components/forgot-password-form/forgot-password-form';

@Component({
  selector: 'app-forgot-password',
  standalone: true,
  imports: [
    GlassCard,
    AuthWelcome,
    ForgotPasswordForm,
  ],
  templateUrl: './forgot-password.html',
  styleUrl: './forgot-password.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class ForgotPassword {}