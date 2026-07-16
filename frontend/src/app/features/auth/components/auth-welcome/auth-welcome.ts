import { ChangeDetectionStrategy, Component } from '@angular/core';
import { Logo } from '../../../../shared/components/logo/logo';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-auth-welcome',
  standalone: true,
  imports: [
    Logo,
    TranslocoPipe,
  ],
  templateUrl: './auth-welcome.html',
  styleUrl: './auth-welcome.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class AuthWelcome {}