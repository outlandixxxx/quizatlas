import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router, RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { Subject, debounceTime, distinctUntilChanged } from 'rxjs';

import { ChatApi, ApiConversationSummary } from '../../../../core/services/chat-api';
import { TimeAgoPipe } from '../../../../core/services/time-ago.pipe';

@Component({
  selector: 'app-chat-inbox',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule, TimeAgoPipe, RouterLink],
  templateUrl: './chat-inbox.component.html',
  styleUrl: './chat-inbox.component.scss',
})
export class ChatInboxComponent implements OnInit {
  private readonly chatApi = inject(ChatApi);
  private readonly router = inject(Router);
  private readonly searchInput$ = new Subject<string>();

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

  conversations: ApiConversationSummary[] = [];
  searchQuery = '';
  isLoading = true;

  meta = { current_page: 1, last_page: 1, per_page: 20, total: 0 };

  ngOnInit(): void {
    this.load(1);

    this.searchInput$.pipe(
      debounceTime(300),
      distinctUntilChanged()
    ).subscribe(() => this.load(1));
  }

  private load(page: number): void {
    this.isLoading = true;
    this.chatApi.listConversations(page, this.searchQuery).subscribe({
      next: (res) => {
        this.conversations = res.data.items;
        this.meta = res.data.meta;
        this.isLoading = false;
      },
      error: () => (this.isLoading = false),
    });
  }

  onSearchInput(): void {
    this.searchInput$.next(this.searchQuery);
  }

  goToPage(page: number): void {
    if (page < 1 || page > this.meta.last_page) return;
    this.load(page);
  }

  openConversation(userId: number): void {
    this.router.navigate(['/app/messages', userId]);
  }
}