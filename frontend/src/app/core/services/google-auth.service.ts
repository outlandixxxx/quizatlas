import { Injectable, NgZone } from '@angular/core';
import { Observable } from 'rxjs';

declare const google: any;

@Injectable({ providedIn: 'root' })
export class GoogleAuthService {

  private initialized = false;

  constructor(private zone: NgZone) {}

  private init(onCredential: (credential: string) => void): void {
    if (this.initialized) return;

    google.accounts.id.initialize({
      client_id: 'YOUR_GOOGLE_CLIENT_ID', // move to environment.ts
      callback: (response: { credential: string }) => {
        this.zone.run(() => onCredential(response.credential));
      },
    });

    this.initialized = true;
  }

  /**
   * Renders the official Google button into the given container element.
   */
  renderButton(container: HTMLElement): Observable<string> {
    return new Observable(subscriber => {
      this.init(credential => {
        subscriber.next(credential);
        subscriber.complete();
      });

      google.accounts.id.renderButton(container, {
        theme: 'outline',
        size: 'large',
        width: container.offsetWidth,
      });
    });
  }
}