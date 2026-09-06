import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { ActivatedRoute, Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { UserProfileApi, ApiUserPublicProfile } from '../../../core/services/user-profile-api';
import { FriendshipApi } from '../../../core/services/friendship-api';

@Component({
  selector: 'app-user-public-profile',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './user-public-profile.component.html',
  styleUrl: './user-public-profile.component.scss',
})
export class UserPublicProfileComponent implements OnInit {
  private readonly route = inject(ActivatedRoute);
  private readonly router = inject(Router);
  private readonly userProfileApi = inject(UserProfileApi);
  private readonly friendshipApi = inject(FriendshipApi);

  readonly fallbackAvatar =
    'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=200';

  profile: ApiUserPublicProfile | null = null;
  isLoading = true;
  isActionLoading = false;

  ngOnInit(): void {
    const id = Number(this.route.snapshot.paramMap.get('id'));

    if (!id) {
      this.router.navigate(['/app/dashboard']);
      return;
    }

    this.load(id);
  }

  private load(id: number): void {
    this.isLoading = true;
    this.userProfileApi.show(id).subscribe({
      next: (res) => {
        this.profile = res.data;
        this.isLoading = false;

        // Own profile? redirect to the editable one instead
        if (this.profile.friendship_status === 'self') {
          this.router.navigate(['/app/profile']);
        }
      },
      error: () => (this.isLoading = false),
    });
  }

  sendRequest(): void {
    if (!this.profile) return;

    this.isActionLoading = true;
    this.friendshipApi.request(this.profile.id).subscribe({
      next: (res) => {
        this.profile!.friendship_status = res.data.status === 'accepted' ? 'friends' : 'pending_sent';
        this.isActionLoading = false;
      },
      error: () => (this.isActionLoading = false),
    });
  }

  respondToRequest(accept: boolean): void {
    if (!this.profile?.friendship_id) return;

    this.isActionLoading = true;
    this.friendshipApi.respond(this.profile.friendship_id, accept).subscribe({
      next: () => {
        this.profile!.friendship_status = accept ? 'friends' : 'none';
        this.isActionLoading = false;
      },
      error: () => (this.isActionLoading = false),
    });
  }

  goToMessages(): void {
  if (!this.profile) return;
  this.router.navigate(['/app/messages', this.profile.id]);
}
}