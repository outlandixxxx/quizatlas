import { afterNextRender, ChangeDetectorRef, Component, effect, ElementRef, inject, Injector, signal, viewChild } from '@angular/core';
import { RouterLink } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { GoogleTracking } from '../../../core/services/google-tracking';

@Component({
  selector: 'app-cookie-consent',
  imports: [TranslocoModule, RouterLink],
  templateUrl: './cookie-consent.html',
  styleUrl: './cookie-consent.scss',
})
export class CookieConsent {
  readonly tracking = inject(GoogleTracking);
  readonly translations = inject(TranslocoService);
  readonly analytics = signal(false);
  readonly advertising = signal(false);
  readonly preferencesOpen = signal(false);
  private readonly injector = inject(Injector);
  private readonly changeDetector = inject(ChangeDetectorRef);
  private readonly heading = viewChild<ElementRef<HTMLElement>>('heading');
  private readonly preferences = viewChild<ElementRef<HTMLDialogElement>>('preferences');
  private readonly customize = viewChild<ElementRef<HTMLButtonElement>>('customize');
  private readonly settings = viewChild<ElementRef<HTMLButtonElement>>('settings');

  constructor() {
    effect(() => {
      if (this.tracking.panelOpen()) {
        this.analytics.set(this.tracking.consent()?.analytics ?? false);
        this.advertising.set(this.tracking.consent()?.advertising ?? false);
      } else if (this.preferencesOpen()) {
        // A choice in another tab can close the panel through the existing service.
        this.hidePreferences();
        afterNextRender(() => this.focusReturnControl(), { injector: this.injector });
      }
    });
  }

  open(): void {
    this.analytics.set(this.tracking.consent()?.analytics ?? false);
    this.advertising.set(this.tracking.consent()?.advertising ?? false);
    this.tracking.panelOpen.set(true);
    this.preferencesOpen.set(true);
    // Render Transloco's conditional view before using its native dialog.
    // Opening preferences must not wait for a service state change or navigation.
    this.changeDetector.detectChanges();
    this.preferences()?.nativeElement.showModal();
    this.heading()?.nativeElement.focus();
  }

  closePreferences(event?: Event): void {
    event?.preventDefault();
    this.hidePreferences();
    this.tracking.panelOpen.set(!this.tracking.consent());
    this.changeDetector.detectChanges();
    this.focusReturnControl();
  }

  choose(analytics: boolean, advertising: boolean): void {
    this.hidePreferences();
    this.tracking.choose(analytics, advertising);
    this.changeDetector.detectChanges();
    this.focusReturnControl();
  }

  save(): void { this.choose(this.analytics(), this.advertising()); }

  private hidePreferences(): void {
    this.preferences()?.nativeElement.close();
    this.preferencesOpen.set(false);
    this.changeDetector.markForCheck();
  }

  private focusReturnControl(): void {
    (this.customize() ?? this.settings())?.nativeElement.focus();
  }
}
