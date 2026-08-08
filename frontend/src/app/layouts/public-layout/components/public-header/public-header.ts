import {
  ChangeDetectionStrategy,
  Component,
  ElementRef,
  HostListener,
  inject,
} from '@angular/core';

import { RouterLink, RouterLinkActive, Router } from '@angular/router';
import { finalize } from 'rxjs';
import { ThemeSwitcher } from '../../../../shared/components/ui/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../../../shared/components/ui/language-switcher/language-switcher';
import { Logo } from '../../../../shared/components/ui/logo/logo';
import { TranslocoModule } from '@jsverse/transloco';

import { Token } from '../../../../core/services/token';
import { AuthState } from '../../../../features/auth/services/auth-state';
import { AuthApi } from '../../../../features/auth/services/auth-api';

@Component({
  selector: 'app-public-header',
  standalone: true,
  imports: [
    RouterLink,
    RouterLinkActive,
    Logo,
    ThemeSwitcher,
    LanguageSwitcher,
    TranslocoModule,
  ],
  templateUrl: './public-header.html',
  styleUrl: './public-header.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PublicHeader {
  private readonly authState = inject(AuthState);
  private readonly authApi = inject(AuthApi);
  private readonly token = inject(Token);
  private readonly router = inject(Router);
  private readonly elementRef = inject(ElementRef);

  readonly user = this.authState.user;
  readonly authenticated = this.authState.authenticated;

  isProfileMenuOpen = false;

  @HostListener('document:click', ['$event'])
  onDocumentClick(event: MouseEvent) {
    const target = event.target as HTMLElement;
    if (!this.elementRef.nativeElement.querySelector('.profile-menu')?.contains(target)) {
      this.isProfileMenuOpen = false;
    }
  }

  toggleProfileMenu(): void {
    this.isProfileMenuOpen = !this.isProfileMenuOpen;
  }

  closeProfileMenu(): void {
    this.isProfileMenuOpen = false;
  }

  logout(): void {
    this.closeProfileMenu();
    this.authState.startLoading();

    this.authApi.logout().pipe(
      finalize(() => {
        this.token.clear();
        this.authState.clear();
        this.authState.stopLoading();
        this.router.navigate(['/']);
      })
    ).subscribe();
  }
}