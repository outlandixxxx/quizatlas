import {
  ChangeDetectionStrategy,
  Component,
  ElementRef,
  HostListener,
  OnInit,
  inject,
} from '@angular/core';

import { NotificationApi, ApiNotification } from '../../../../core/services/notification-api';
import { TimeAgoPipe } from '../../../../core/services/time-ago.pipe';

import { RouterLink, RouterLinkActive, Router } from '@angular/router';
import { finalize, Subject, debounceTime, distinctUntilChanged, switchMap, of } from 'rxjs';
import { FormsModule } from '@angular/forms';
import { ThemeSwitcher } from '../../../../shared/components/ui/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../../../shared/components/ui/language-switcher/language-switcher';
import { Logo } from '../../../../shared/components/ui/logo/logo';
import { TranslocoModule } from '@jsverse/transloco';

import { Token } from '../../../../core/services/token';
import { AuthState } from '../../../../features/auth/services/auth-state';
import { AuthApi } from '../../../../features/auth/services/auth-api';

import { UserSearchApi, ApiUserSearchResult } from '../../../../core/services/user-search-api';
import { ChatApi } from '../../../../core/services/chat-api';


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
    TimeAgoPipe,
    FormsModule,
  ],
  templateUrl: './public-header.html',
  styleUrl: './public-header.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PublicHeader implements OnInit {
  private readonly authState = inject(AuthState);
  private readonly authApi = inject(AuthApi);
  private readonly token = inject(Token);
  private readonly notificationApi = inject(NotificationApi);
  private readonly userSearchApi = inject(UserSearchApi);
  private readonly router = inject(Router);
  private readonly elementRef = inject(ElementRef);

  readonly user = this.authState.user;
  readonly authenticated = this.authState.authenticated;
  private readonly chatApi = inject(ChatApi);

  isProfileMenuOpen = false;
  isNotifMenuOpen = false;
  isMobileMenuOpen = false;

  unreadCount = 0;
  notifications: ApiNotification[] = [];

  private readonly searchInput$ = new Subject<string>();
  searchQuery = '';
  searchResults: ApiUserSearchResult[] = [];
  isSearchOpen = false;
  unreadMessagesCount = 0;

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

  ngOnInit(): void {
    if (this.authenticated()) {
      this.refreshUnreadCount();
      this.refreshUnreadMessagesCount();
    }

    this.searchInput$
      .pipe(
        debounceTime(300),
        distinctUntilChanged(),
        switchMap((q) => q.trim().length >= 2 ? this.userSearchApi.search(q.trim()) : of({ data: [] } as any))
      )
      .subscribe((res) => {
        this.searchResults = res.data;
        this.isSearchOpen = this.searchResults.length > 0;
      });
  }

  private refreshUnreadCount(): void {
    this.notificationApi.unreadCount().subscribe({
      next: (res) => (this.unreadCount = res.data.count),
    });
  }

  @HostListener('document:click', ['$event'])
  onDocumentClick(event: MouseEvent) {
    const target = event.target as HTMLElement;

    if (!this.elementRef.nativeElement.querySelector('.profile-menu')?.contains(target)) {
      this.isProfileMenuOpen = false;
    }

    if (!this.elementRef.nativeElement.querySelector('.notif-menu')?.contains(target)) {
      this.isNotifMenuOpen = false;
    }

    if (!this.elementRef.nativeElement.querySelector('.search')?.contains(target)) {
      this.isSearchOpen = false;
    }

    if (
      !this.elementRef.nativeElement.querySelector('.nav')?.contains(target) &&
      !this.elementRef.nativeElement.querySelector('.mobile-menu-btn')?.contains(target)
    ) {
      this.isMobileMenuOpen = false;
    }
  }

  toggleMobileMenu(): void {
    this.isMobileMenuOpen = !this.isMobileMenuOpen;
  }

  closeMobileMenu(): void {
    this.isMobileMenuOpen = false;
  }

  toggleProfileMenu(): void {
    this.isProfileMenuOpen = !this.isProfileMenuOpen;
  }

  closeProfileMenu(): void {
    this.isProfileMenuOpen = false;
  }

  toggleNotifMenu(): void {
    this.isNotifMenuOpen = !this.isNotifMenuOpen;

    if (this.isNotifMenuOpen && this.notifications.length === 0) {
      this.notificationApi.list().subscribe({
        next: (res) => (this.notifications = res.data),
      });
    }
  }

  closeNotifMenu(): void {
    this.isNotifMenuOpen = false;
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

    this.closeNotifMenu();

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

  onSearchInput(): void {
    this.searchInput$.next(this.searchQuery);
  }

  goToSearchResult(userId: number): void {
    this.isSearchOpen = false;
    this.searchQuery = '';

    const targetUrl = `/app/users/${userId}`;

    if (!this.authenticated()) {
      this.router.navigate(['/login'], { queryParams: { returnUrl: targetUrl } });
      return;
    }

    this.router.navigate([targetUrl]);
  }

  closeSearch(): void {
    this.isSearchOpen = false;
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

  private refreshUnreadMessagesCount(): void {
    this.chatApi.unreadCount().subscribe({
      next: (res) => (this.unreadMessagesCount = res.data.count),
    });
  }
}