import { ChangeDetectionStrategy, Component } from '@angular/core';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';
import { LoginForm } from '../../components/login-form/login-form';
import { AuthWelcome } from '../../components/auth-welcome/auth-welcome';
import { Logo } from '../../../../shared/components/logo/logo';

@Component({
  selector: 'app-login',
  standalone: true,
  imports: [
    GlassCard,
    LoginForm,
    AuthWelcome,
    Logo,
  ],
  templateUrl: './login.html',
  styleUrl: './login.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Login {}