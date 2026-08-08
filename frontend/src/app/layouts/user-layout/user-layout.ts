import { Component, inject, HostListener, OnInit, OnDestroy, ElementRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet, RouterLink, RouterLinkActive, Router } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { Subscription, finalize } from 'rxjs';

// Core & Feature Services
import { Token } from '../../core/services/token';
import { AuthState } from '../../features/auth/services/auth-state';
import { AuthApi } from '../../features/auth/services/auth-api';
import { AdSlotComponent } from '../../features/ad-slot/ad-slot.component';

export interface MenuItem {
  labelKey: string;
  icon: string;
  route: string;

}

@Component({
  selector: 'app-user-layout',
  standalone: true,
  imports: [CommonModule, RouterOutlet, RouterLink, RouterLinkActive, TranslocoModule,AdSlotComponent],
  templateUrl: './user-layout.html',
  styleUrl: './user-layout.scss'
})
export class UserLayout implements OnInit, OnDestroy {
  private translocoService = inject(TranslocoService);
  private elementRef = inject(ElementRef);
  private router = inject(Router);
  
  private authState = inject(AuthState);
  private authApi = inject(AuthApi);
  private token = inject(Token);

  // Expose reactive Auth state user signal directly to template
  readonly user = this.authState.user;

  private langSubscription?: Subscription;

  isDarkTheme = false;
  currentLang = 'en';
  isLangDropdownOpen = false;
  isProfileMenuOpen = false;
  isMobileSidebarOpen = false;

  languages = [
    { code: 'en', label: 'English', flag: '🇬🇧', dir: 'ltr' },
    { code: 'fr', label: 'Français', flag: '🇫🇷', dir: 'ltr' },
    { code: 'ar', label: 'العربية', flag: '🇲🇦', dir: 'rtl' }
  ];

menuItems: MenuItem[] = [
    { labelKey: 'nav.DASHBOARD', icon: 'dashboard', route: '/app/dashboard' },
    { labelKey: 'nav.QUIZZES', icon: 'quiz', route: '/app/quizzes' },
    { labelKey: 'nav.PRACTICE', icon: 'edit_note', route: '/app/practice' },
    { labelKey: 'nav.EXAM_LIBRARY', icon: 'picture_as_pdf', route: '/app/library' },
    { labelKey: 'nav.BOOKMARKS', icon: 'bookmark', route: '/app/bookmarks' },
    { labelKey: 'nav.ANALYSIS', icon: 'insights', route: '/app/analytics' },
    { labelKey: 'nav.LEADERBOARD', icon: 'leaderboard', route: '/app/leaderboard' },
    { labelKey: 'nav.PROFILE', icon: 'person', route: '/app/profile' },
    { labelKey: 'nav.SETTINGS', icon: 'settings', route: '/app/settings' },
  ];

  ngOnInit() {
    this.currentLang = this.translocoService.getActiveLang() || 'en';
    this.updateDocumentDirection(this.currentLang);

    this.langSubscription = this.translocoService.langChanges$.subscribe(lang => {
      this.currentLang = lang;
      this.updateDocumentDirection(lang);
    });
  }

  ngOnDestroy() {
    this.langSubscription?.unsubscribe();
  }

  @HostListener('window:resize')
  onResize() {
    if (window.innerWidth > 1024 && this.isMobileSidebarOpen) {
      this.isMobileSidebarOpen = false;
    }
  }

  @HostListener('document:click', ['$event'])
  onDocumentClick(event: MouseEvent) {
    const target = event.target as HTMLElement;
    
    if (!this.elementRef.nativeElement.querySelector('.lang-selector')?.contains(target)) {
      this.isLangDropdownOpen = false;
    }

    if (!this.elementRef.nativeElement.querySelector('.user-profile-wrapper')?.contains(target)) {
      this.isProfileMenuOpen = false;
    }
  }

  toggleProfileMenu() {
    this.isProfileMenuOpen = !this.isProfileMenuOpen;
  }

  logout(): void {
    this.authState.startLoading();

    this.authApi.logout().pipe(
      finalize(() => {
        this.token.clear();
        this.authState.clear();
        this.authState.stopLoading();
        this.router.navigate(['/login']);
      })
    ).subscribe();
  }

  toggleTheme() {
    this.isDarkTheme = !this.isDarkTheme;
    const root = document.documentElement;
    if (this.isDarkTheme) {
      root.classList.add('dark');
      root.setAttribute('data-theme', 'dark');
    } else {
      root.classList.remove('dark');
      root.setAttribute('data-theme', 'light');
    }
  }

  changeLanguage(langCode: string) {
    this.translocoService.setActiveLang(langCode);
    this.isLangDropdownOpen = false;
  }

  private updateDocumentDirection(langCode: string) {
    const selectedLang = this.languages.find(l => l.code === langCode);
    const dir = selectedLang?.dir || 'ltr';
    document.documentElement.setAttribute('dir', dir);
    document.documentElement.setAttribute('lang', langCode);
  }

  toggleLangDropdown() {
    this.isLangDropdownOpen = !this.isLangDropdownOpen;
  }

  toggleMobileSidebar() {
    this.isMobileSidebarOpen = !this.isMobileSidebarOpen;
  }

  closeMobileSidebar() {
    this.isMobileSidebarOpen = false;
  }
}