import { Component, inject, HostListener, OnInit, OnDestroy, ElementRef } from '@angular/core';
import { CommonModule,NgOptimizedImage } from '@angular/common';
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
import { TimeAgoPipe } from '../../core/services/time-ago.pipe';
import { ChatApi } from '../../core/services/chat-api';
   import { NotificationApi, ApiNotification } from '../../core/services/notification-api';


export interface MenuItem {
  labelKey: string;
  icon: string;
  route: string;
}

@Component({
  selector: 'app-user-layout',
  standalone: true,
  imports: [CommonModule,NgOptimizedImage, RouterOutlet, RouterLink, RouterLinkActive, TranslocoModule, AdSlotComponent,TimeAgoPipe],
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
  private readonly notificationApi = inject(NotificationApi);
    private readonly chatApi = inject(ChatApi);



  isLangDropdownOpen = false;
  isProfileMenuOpen = false;
  isMobileSidebarOpen = false;

  isNotifMenuOpen = false;
  unreadCount = 0;
  notifications: ApiNotification[] = [];
    unreadMessagesCount = 0;


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

 languages: { code: Language; label: string; flag: string }[] = [
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
    { labelKey: 'nav.LEADERBOARD', icon: 'leaderboard', route: '/app/leaderboard' },
    { labelKey: 'nav.PROFILE', icon: 'person', route: '/app/profile' },
    { labelKey: 'nav.SETTINGS', icon: 'settings', route: '/app/settings' },
  ];

  ngOnInit() {
    // ThemeService and LanguageService already initialize themselves
    // (called once at app bootstrap) — nothing to sync here anymore.
        this.refreshUnreadCount();
            this.refreshUnreadMessagesCount();


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

  if (!this.elementRef.nativeElement.querySelector('.notif-menu')?.contains(target)) {
    this.isNotifMenuOpen = false;
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


  private refreshUnreadCount(): void {
    this.notificationApi.unreadCount().subscribe({
      next: (res) => (this.unreadCount = res.data.count),
    });
  }

  toggleNotifMenu(): void {
    this.isNotifMenuOpen = !this.isNotifMenuOpen;
    if (this.isNotifMenuOpen && this.notifications.length === 0) {
      this.notificationApi.list().subscribe({
        next: (res) => (this.notifications = res.data),
      });
    }
  }

  onNotificationClick(n: ApiNotification): void {
    if (!n.read_at) {
      this.notificationApi.markRead(n.id).subscribe({
        next: () => {
          n.read_at = new Date().toISOString();
          this.unreadCount = Math.max(0, this.unreadCount - 1);
        },
      });
    }

    this.isNotifMenuOpen = false;

   if (n.type === 'blog_response' || n.type === 'blog_answer_accepted') {
  this.router.navigate(['/blog', n.data['ask_id']]);
} else if (n.type === 'friend_request' || n.type === 'friend_accepted') {
  this.router.navigate(['/app/users', n.data['from_user_id']]);
} else if (n.type === 'new_message') {
  this.router.navigate(['/app/messages', n.data['from_user_id']]);
}
  }

  markAllRead(): void {
    this.notificationApi.markAllRead().subscribe({
      next: () => {
        this.notifications.forEach((n) => (n.read_at = new Date().toISOString()));
        this.unreadCount = 0;
      },
    });
  }

    private refreshUnreadMessagesCount(): void {
    this.chatApi.unreadCount().subscribe({
      next: (res) => (this.unreadMessagesCount = res.data.count),
    });
  }

}