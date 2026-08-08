import { Injectable, signal, computed } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class LoadingService {
  private readonly activeRequests = signal<number>(0);

  // Expose computed boolean signal
  readonly isLoading = computed(() => this.activeRequests() > 0);

  show(): void {
    // Schedule signal update outside the synchronous render tick to prevent NG0600
    queueMicrotask(() => {
      this.activeRequests.update((count) => count + 1);
    });
  }

  hide(): void {
    queueMicrotask(() => {
      this.activeRequests.update((count) => Math.max(0, count - 1));
    });
  }
}