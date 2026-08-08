import { Component, Input, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AuthState } from '../auth/services/auth-state';


export type AdFormat = 'banner' | 'rectangle';

@Component({
  selector: 'app-ad-slot',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './ad-slot.component.html',
  styleUrl: './ad-slot.component.scss',
})
export class AdSlotComponent {
  private readonly authState = inject(AuthState);

  @Input({ required: true }) format!: AdFormat;
  @Input() placement = '';

  get isPremium(): boolean {
    return !!this.authState.user()?.is_premium;
  }
}