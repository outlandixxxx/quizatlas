import { Logo } from '../../shared/components/ui/logo/logo';
import { Component, inject, HostListener, ElementRef, OnInit, OnDestroy } from '@angular/core';
import { CommonModule, DOCUMENT } from '@angular/common';
import { RouterOutlet, RouterLink, RouterLinkActive, Router } from '@angular/router';
import { finalize } from 'rxjs';

import { Token } from '../../core/services/token';
import { ThemeService } from '../../core/services/theme';
import { AuthState } from '../../features/auth/services/auth-state';
import { AuthApi } from '../../features/auth/services/auth-api';
import { LanguageService } from '../../core/services/language';

export interface AdminMenuItem {
  label: string;
  icon: string;
  route: string;
  roles: string[];
}

@Component({
  selector: 'app-admin-layout',
  standalone: true,
  imports: [Logo, CommonModule, RouterOutlet, RouterLink, RouterLinkActive],
  templateUrl: './admin-layout.html',
  styleUrl: './admin-layout.scss',
})
export class AdminLayout implements OnInit, OnDestroy {
  private readonly document = inject(DOCUMENT);
  private readonly language = inject(LanguageService);
  private elementRef = inject(ElementRef);
  private router = inject(Router);

  private authState = inject(AuthState);
  private authApi = inject(AuthApi);
  private token = inject(Token);

  private readonly themeService = inject(ThemeService);

  readonly user = this.authState.user;

  isProfileMenuOpen = false;
  isMobileSidebarOpen = false;

  get isDarkTheme(): boolean {
    return this.themeService.theme() === 'dark';
  }

  get role(): string | undefined {
    return this.user()?.role;
  }

  private readonly allMenuItems: AdminMenuItem[] = [
    { label: 'Dashboard', icon: 'dashboard', route: '/admin/dashboard', roles: ['admin'] },
    { label: 'Quizzes', icon: 'quiz', route: '/admin/quizzes', roles: ['admin'] },
    {
      label: 'YouTube Videos',
      icon: 'video_library',
      route: '/admin/youtube-videos',
      roles: ['admin'],
    },
    {
      label: 'Revision JSON',
      icon: 'data_object',
      route: '/admin/revision-json',
      roles: ['admin'],
    },
    { label: 'Majors', icon: 'school', route: '/admin/majors', roles: ['admin'] },
    { label: 'Subjects', icon: 'menu_book', route: '/admin/subjects', roles: ['admin'] },
    { label: 'SOCIAL PACK', icon: 'campaign', route: '/admin/social-pack', roles: ['admin'] },
    { label: 'FACTS', icon: 'lightbulb', route: '/admin/facts', roles: ['admin'] },
    { label: 'Exam PDFs', icon: 'picture_as_pdf', route: '/admin/exam-pdfs', roles: ['admin'] },
  ];

  get menuItems(): AdminMenuItem[] {
    const role = this.role;
    return this.allMenuItems.filter((item) => !!role && item.roles.includes(role));
  }

  ngOnInit(): void {
    this.document.documentElement.lang = 'en';
    this.document.documentElement.dir = 'ltr';
  }

  ngOnDestroy(): void {
    const language = this.language.language();
    this.document.documentElement.lang = language;
    this.document.documentElement.dir = language === 'ar' ? 'rtl' : 'ltr';
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

    if (!this.elementRef.nativeElement.querySelector('.user-profile-wrapper')?.contains(target)) {
      this.isProfileMenuOpen = false;
    }
  }

  toggleProfileMenu() {
    this.isProfileMenuOpen = !this.isProfileMenuOpen;
  }

  toggleTheme() {
    this.themeService.toggle();
  }

  toggleMobileSidebar() {
    this.isMobileSidebarOpen = !this.isMobileSidebarOpen;
  }

  closeMobileSidebar() {
    this.isMobileSidebarOpen = false;
  }

  backToApp(): void {
    this.router.navigate(['/app/dashboard']);
  }

  logout(): void {
    this.authState.startLoading();

    this.authApi
      .logout()
      .pipe(
        finalize(() => {
          this.token.clear();
          this.authState.clear();
          this.authState.stopLoading();
          this.router.navigate(['/login']);
        }),
      )
      .subscribe();
  }

  initials(name: string | undefined | null): string {
    if (!name) return '?';
    return name
      .split(' ')
      .map((p) => p[0])
      .slice(0, 2)
      .join('')
      .toUpperCase();
  }
}
