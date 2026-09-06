import { Component, OnInit, OnDestroy, ElementRef, ViewChild, AfterViewChecked, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router, RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { Subscription, interval, filter, switchMap } from 'rxjs';

import { ChatApi, ApiChatMessage, ChatUser } from '../../../../core/services/chat-api';
import { AuthState } from '../../../auth/services/auth-state';

interface DayGroup {
  label: string;
  messages: ApiChatMessage[];
}

@Component({
  selector: 'app-chat-thread',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule, RouterLink],
  templateUrl: './chat-thread.component.html',
  styleUrl: './chat-thread.component.scss',
})
export class ChatThreadComponent implements OnInit, OnDestroy, AfterViewChecked {
  @ViewChild('scrollAnchor') scrollAnchor!: ElementRef<HTMLDivElement>;

  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly chatApi = inject(ChatApi);
  private readonly authState = inject(AuthState);

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

  readonly myId = this.authState.user()?.id;

  otherUser: ChatUser | null = null;
  conversationId: number | null = null;
  canSend = true;
  messages: ApiChatMessage[] = [];
  isLoading = true;

  composerText = '';
  isSending = false;

  private pollSub?: Subscription;
  private shouldScrollToBottom = false;

  ngOnInit(): void {
    const userId = Number(this.route.snapshot.paramMap.get('userId'));

    if (!userId) {
      this.router.navigate(['/app/messages']);
      return;
    }

    this.chatApi.openWith(userId).subscribe({
      next: (res) => {
        this.conversationId = res.data.conversation_id;
        this.otherUser = res.data.user;
        this.canSend = res.data.can_send;
        this.messages = res.data.messages;
        this.isLoading = false;
        this.shouldScrollToBottom = true;
        this.startPolling();
      },
      error: () => {
        this.isLoading = false;
        this.router.navigate(['/app/messages']);
      },
    });
  }

  ngAfterViewChecked(): void {
    if (this.shouldScrollToBottom) {
      this.scrollAnchor?.nativeElement?.scrollIntoView({ behavior: 'smooth' });
      this.shouldScrollToBottom = false;
    }
  }

  ngOnDestroy(): void {
    this.pollSub?.unsubscribe();
  }

  private startPolling(): void {
    if (!this.conversationId) return;

    this.pollSub = interval(4000)
      .pipe(
        filter(() => document.visibilityState === 'visible'),
        switchMap(() => {
          const lastId = this.messages.at(-1)?.id ?? 0;
          return this.chatApi.poll(this.conversationId!, lastId);
        })
      )
      .subscribe((res) => {
        if (res.data.length > 0) {
          this.messages = [...this.messages, ...res.data];
          this.shouldScrollToBottom = true;
        }
      });
  }

  get dayGroups(): DayGroup[] {
    const groups: DayGroup[] = [];
    let currentLabel = '';

    for (const m of this.messages) {
      const label = new Date(m.created_at).toLocaleDateString(undefined, {
        day: 'numeric', month: 'short', year: 'numeric',
      });

      if (label !== currentLabel) {
        groups.push({ label, messages: [m] });
        currentLabel = label;
      } else {
        groups[groups.length - 1].messages.push(m);
      }
    }

    return groups;
  }

  isFirstOfRun(dayMessages: ApiChatMessage[], index: number): boolean {
    if (index === 0) return true;
    return dayMessages[index - 1].sender_id !== dayMessages[index].sender_id;
  }

  formatTime(dateStr: string): string {
    return new Date(dateStr).toLocaleTimeString(undefined, { hour: '2-digit', minute: '2-digit' });
  }

  sendMessage(): void {
    const body = this.composerText.trim();
    if (!body || !this.conversationId || this.isSending) return;

    this.isSending = true;

    // Optimistic append
    const optimisticMessage: ApiChatMessage = {
      id: -Date.now(),
      conversation_id: this.conversationId,
      sender_id: this.myId!,
      sender: { id: this.myId!, name: '', avatar_url: null },
      body,
      read_at: null,
      created_at: new Date().toISOString(),
    };

    this.messages = [...this.messages, optimisticMessage];
    this.composerText = '';
    this.shouldScrollToBottom = true;

    this.chatApi.sendMessage(this.conversationId, body).subscribe({
      next: (res) => {
        this.messages = this.messages.map((m) => (m.id === optimisticMessage.id ? res.data : m));
        this.isSending = false;
      },
      error: () => {
        this.messages = this.messages.filter((m) => m.id !== optimisticMessage.id);
        this.composerText = body;
        this.isSending = false;
      },
    });
  }

  onComposerKeydown(event: KeyboardEvent): void {
    if (event.key === 'Enter' && !event.shiftKey) {
      event.preventDefault();
      this.sendMessage();
    }
  }
}