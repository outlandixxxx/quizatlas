import { ChangeDetectionStrategy, Component } from '@angular/core';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';
import { RegisterForm } from '../../components/register-form/register-form';
import { AuthWelcome } from '../../components/auth-welcome/auth-welcome';
import { Logo } from '../../../../shared/components/logo/logo';

@Component({
  selector: 'app-register',
  standalone: true,
  imports: [
    GlassCard,
    RegisterForm,
    AuthWelcome,
    Logo,
  ],
  templateUrl: './register.html',
  styleUrl: './register.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Register {}