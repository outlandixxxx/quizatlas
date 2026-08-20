import { Component, EventEmitter, Output, OnInit, OnDestroy, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';
import { AdSlotComponent } from '../../ad-slot/ad-slot.component';
import { AuthState } from '../../auth/services/auth-state';

@Component({
  selector: 'app-results-gate',
  standalone: true,
  imports: [CommonModule, AdSlotComponent, TranslocoModule],
  templateUrl: './results-gate.component.html',
  styleUrl: './results-gate.component.scss',
})
export class ResultsGateComponent implements OnInit, OnDestroy {
  private readonly authState = inject(AuthState);
  private interval: any;

  @Output() finished = new EventEmitter<void>();

  private readonly waitSeconds = 5;
  secondsLeft = this.waitSeconds;

  get isPremium(): boolean {
    return !!this.authState.user()?.is_premium;
  }

  ngOnInit(): void {
    if (this.isPremium) {
      this.finished.emit();
      return;
    }

    this.interval = setInterval(() => {
      this.secondsLeft--;
      if (this.secondsLeft <= 0) {
        clearInterval(this.interval);
        this.finished.emit();
      }
    }, 1000);
  }

  ngOnDestroy(): void {
    if (this.interval) clearInterval(this.interval);
  }

  get progressPercent(): number {
    return Math.round(((this.waitSeconds - this.secondsLeft) / this.waitSeconds) * 100);
  }
}