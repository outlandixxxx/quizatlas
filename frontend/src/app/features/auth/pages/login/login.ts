import { Logo } from '../../../../shared/components/ui/logo/logo';
import { ChangeDetectionStrategy, Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { LoginForm } from '../../components/login-form/login-form';

@Component({
  selector: 'app-login',
  host: { id: 'maroquiz-login' },
  standalone: true,
  imports: [Logo, RouterLink, TranslocoModule, LoginForm],
  templateUrl: './login.html',
  styleUrl: './login.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Login {}
