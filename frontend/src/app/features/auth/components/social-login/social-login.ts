import {
  ChangeDetectionStrategy,
  Component,
  EventEmitter,
  Output
} from '@angular/core';
import { CommonModule } from '@angular/common';

export type SocialProvider = 'google' | 'facebook' | 'apple';

@Component({
  selector: 'app-social-login',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './social-login.html',
  styleUrl: './social-login.scss',
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class SocialLoginComponent {

  @Output()
  socialLogin = new EventEmitter<SocialProvider>();

  login(provider: SocialProvider): void {
    this.socialLogin.emit(provider);
  }

}