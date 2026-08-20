import { Component, inject, HostListener, OnInit, OnDestroy, ElementRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet, RouterLink, RouterLinkActive, Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { finalize } from 'rxjs';

import { Token } from '../../core/services/token';
import { ThemeService } from '../../core/services/theme';
import { LanguageService } from '../../core/services/language';
import { Language } from '../../core/models/language';
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
  imports: [CommonModule, RouterOutlet, RouterLink, RouterLinkActive, TranslocoModule, AdSlotComponent],
  templateUrl: './user-layout.html',
  styleUrl: './user-layout.scss'
})
export class UserLayout implements OnInit, OnDestroy {
  private elementRef = inject(ElementRef);
  private router = inject(Router);

  private authState = inject(AuthState);
  private authApi = inject(AuthApi);
  private token = inject(Token);

  private readonly themeService = inject(ThemeService);
  private readonly languageService = inject(LanguageService);

  readonly user = this.authState.user;

  isLangDropdownOpen = false;
  isProfileMenuOpen = false;
  isMobileSidebarOpen = false;

  get isTeacher(): boolean {
    const role = this.user()?.role;
    return role === 'admin' || role === 'manager';
  }

  get isDarkTheme(): boolean {
    return this.themeService.theme() === 'dark';
  }

  get currentLang(): string {
    return this.languageService.language();
  }

  languages = [
    { code: 'en', label: 'English', flag: '🇬🇧' },
    { code: 'fr', label: 'Français', flag: '🇫🇷' },
    { code: 'ar', label: 'العربية', flag: '🇲🇦' }
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
    // ThemeService and LanguageService already initialize themselves
    // (called once at app bootstrap) — nothing to sync here anymore.
  }

  ngOnDestroy() {}

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
    this.themeService.toggle();
  }

  changeLanguage(langCode: Language) {
    this.languageService.setLanguage(langCode);
    this.isLangDropdownOpen = false;
  }

  get xpProgressPercent(): number {
    const u = this.user();
    if (!u || !u.xp_for_next_level) return 0;
    return Math.round(((u.xp_into_current_level ?? 0) / u.xp_for_next_level) * 100);
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