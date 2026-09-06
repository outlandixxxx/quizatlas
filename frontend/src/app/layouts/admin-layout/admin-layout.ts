import { Component, inject, HostListener, ElementRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet, RouterLink, RouterLinkActive, Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { finalize } from 'rxjs';

import { Token } from '../../core/services/token';
import { ThemeService } from '../../core/services/theme';
import { AuthState } from '../../features/auth/services/auth-state';
import { AuthApi } from '../../features/auth/services/auth-api';

export interface AdminMenuItem {
  labelKey: string;
  icon: string;
  route: string;
  roles: string[]; // which roles see this item
}

@Component({
  selector: 'app-admin-layout',
  standalone: true,
  imports: [CommonModule, RouterOutlet, RouterLink, RouterLinkActive, TranslocoModule],
  templateUrl: './admin-layout.html',
  styleUrl: './admin-layout.scss',
})
export class AdminLayout {
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
    { labelKey: 'admin.nav.DASHBOARD', icon: 'dashboard', route: '/admin/dashboard', roles: ['admin'] },
    { labelKey: 'admin.nav.QUIZZES', icon: 'quiz', route: '/admin/quizzes', roles: ['admin'] },
    { labelKey: 'admin.nav.MAJORS', icon: 'school', route: '/admin/majors', roles: ['admin'] },
    { labelKey: 'admin.nav.SUBJECTS', icon: 'menu_book', route: '/admin/subjects', roles: ['admin'] },
    { labelKey: 'admin.nav.EXAM_PDFS', icon: 'picture_as_pdf', route: '/admin/exam-pdfs', roles: ['admin'] },
  ];

  get menuItems(): AdminMenuItem[] {
    const role = this.role;
    return this.allMenuItems.filter((item) => !!role && item.roles.includes(role));
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

    this.authApi.logout().pipe(
      finalize(() => {
        this.token.clear();
        this.authState.clear();
        this.authState.stopLoading();
        this.router.navigate(['/login']);
      })
    ).subscribe();
  }
}