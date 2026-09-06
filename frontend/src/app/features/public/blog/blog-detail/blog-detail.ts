import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { BlogApi, ApiBlogAskDetail } from '../../../../core/services/blog-api';
import { TimeAgoPipe } from '../../../../core/services/time-ago.pipe';
import { AuthState } from '../../../auth/services/auth-state';

@Component({
  selector: 'app-blog-detail',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule, TimeAgoPipe],
  templateUrl: './blog-detail.html',
  styleUrl: './blog-detail.scss',
})
export class BlogDetail implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly blogApi = inject(BlogApi);
  private readonly authState = inject(AuthState);

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=100';

  readonly user = this.authState.user;
  readonly authenticated = this.authState.authenticated;

  ask: ApiBlogAskDetail | null = null;
  isLoading = true;
  replyBody = '';
  isSubmittingReply = false;
  errorMessage = '';

  ngOnInit(): void {
    const id = Number(this.route.snapshot.paramMap.get('id'));
    this.load(id);
  }

  private load(id: number): void {
    this.isLoading = true;
    this.blogApi.show(id).subscribe({
      next: (res) => {
        this.ask = res.data;
        this.isLoading = false;
      },
      error: () => (this.isLoading = false),
    });
  }

  get isAuthor(): boolean {
    return !!this.ask && this.ask.author.id === this.user()?.id;
  }

  goToProfile(userId: number): void {
    this.router.navigate(['/app/users', userId]);
  }

  submitReply(): void {
    if (!this.ask || !this.replyBody.trim()) return;

    this.isSubmittingReply = true;
    this.errorMessage = '';

    this.blogApi.respond(this.ask.id, this.replyBody.trim()).subscribe({
      next: (res) => {
        this.ask!.responses.unshift(res.data);
        this.ask!.responses_count++;
        this.replyBody = '';
        this.isSubmittingReply = false;
      },
      error: () => {
        this.errorMessage = 'blog.replySubmitError';
        this.isSubmittingReply = false;
      },
    });
  }

  acceptAnswer(responseId: number): void {
    if (!this.ask) return;

    this.blogApi.acceptResponse(this.ask.id, responseId).subscribe({
      next: () => {
        this.ask!.responses.forEach((r) => (r.is_accepted = r.id === responseId));
        this.ask!.responses.sort((a, b) => Number(b.is_accepted) - Number(a.is_accepted));
      },
    });
  }
}