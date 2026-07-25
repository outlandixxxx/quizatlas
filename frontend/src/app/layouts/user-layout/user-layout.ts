import { Component, inject, HostListener, OnInit, OnDestroy, ElementRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet, RouterLink, RouterLinkActive } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { Subscription } from 'rxjs';

export interface MenuItem {
  labelKey: string;
  icon: string;
  route: string;
}

@Component({
  selector: 'app-user-layout',
  standalone: true,
  imports: [CommonModule, RouterOutlet, RouterLink, RouterLinkActive, TranslocoModule],
  templateUrl: './user-layout.html',
  styleUrl: './user-layout.scss'
})
export class UserLayout implements OnInit, OnDestroy {
  private translocoService = inject(TranslocoService);
  private elementRef = inject(ElementRef);
  private langSubscription?: Subscription;

  isDarkTheme = false;
  currentLang = 'en';
  isLangDropdownOpen = false;
  isMobileSidebarOpen = false; // Responsive drawer state

  languages = [
    { code: 'en', label: 'English', flag: '🇬🇧', dir: 'ltr' },
    { code: 'fr', label: 'Français', flag: '🇫🇷', dir: 'ltr' },
    { code: 'ar', label: 'العربية', flag: '🇲🇦', dir: 'rtl' }
  ];

  // Keys match the lowercase "nav" structure in JSON files (e.g., en.json -> "nav": { "DASHBOARD": "Dashboard" })
  menuItems: MenuItem[] = [
    { labelKey: 'nav.DASHBOARD', icon: 'dashboard', route: '/app/dashboard' },
    { labelKey: 'nav.PRACTICE', icon: 'edit_note', route: '/app/practice' },
    { labelKey: 'nav.EXAM_LIBRARY', icon: 'picture_as_pdf', route: '/app/library' },
    { labelKey: 'nav.ANALYTICS', icon: 'insights', route: '/app/analytics' },
    { labelKey: 'nav.BOOKMARKS', icon: 'bookmark', route: '/app/bookmarks' },
    { labelKey: 'nav.HISTORY', icon: 'history', route: '/app/history' },
    { labelKey: 'nav.LEADERBOARD', icon: 'leaderboard', route: '/app/leaderboard' },
    { labelKey: 'nav.SETTINGS', icon: 'settings', route: '/app/settings' }
  ];

  ngOnInit() {
    this.currentLang = this.translocoService.getActiveLang() || 'en';
    this.updateDocumentDirection(this.currentLang);

    // Keep active language and HTML direction (RTL/LTR) synchronized reactively
    this.langSubscription = this.translocoService.langChanges$.subscribe(lang => {
      this.currentLang = lang;
      this.updateDocumentDirection(lang);
    });
  }

  ngOnDestroy() {
    this.langSubscription?.unsubscribe();
  }

  // Close mobile sidebar on window resize
  @HostListener('window:resize')
  onResize() {
    if (window.innerWidth > 992 && this.isMobileSidebarOpen) {
      this.isMobileSidebarOpen = false;
    }
  }

  // Close language dropdown when clicking outside
  @HostListener('document:click', ['$event'])
  onDocumentClick(event: MouseEvent) {
    const target = event.target as HTMLElement;
    if (!this.elementRef.nativeElement.querySelector('.lang-selector')?.contains(target)) {
      this.isLangDropdownOpen = false;
    }
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