import { Injectable, NgZone } from '@angular/core';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';

declare const google: any;

@Injectable({ providedIn: 'root' })
export class GoogleAuthService {

  private initialized = false;
  private scriptPromise: Promise<void> | null = null;

  constructor(private zone: NgZone) {}

  /**
   * Loads Google Identity Services only when Google Login is actually needed.
   */
  private loadGoogleScript(): Promise<void> {
    if (typeof google !== 'undefined' && google?.accounts?.id) {
      return Promise.resolve();
    }

    if (this.scriptPromise) {
      return this.scriptPromise;
    }

    this.scriptPromise = new Promise<void>((resolve, reject) => {
      const existingScript = document.querySelector(
        'script[data-google-gsi="true"]'
      ) as HTMLScriptElement | null;

      if (existingScript) {
        existingScript.addEventListener('load', () => resolve(), { once: true });
        existingScript.addEventListener('error', () => {
          reject(new Error('Failed to load Google Identity Services.'));
        }, { once: true });
        return;
      }

      const script = document.createElement('script');

      script.src = 'https://accounts.google.com/gsi/client';
      script.async = true;
      script.defer = true;
      script.dataset['googleGsi'] = 'true';

      script.onload = () => resolve();

      script.onerror = () => {
        this.scriptPromise = null;
        reject(new Error('Failed to load Google Identity Services.'));
      };

      document.head.appendChild(script);
    });

    return this.scriptPromise;
  }

  private init(onCredential: (credential: string) => void): void {
    if (this.initialized) return;

    google.accounts.id.initialize({
      client_id: environment.googleClientId,
      callback: (response: { credential: string }) => {
        this.zone.run(() => onCredential(response.credential));
      },
      use_fedcm_for_prompt: false,
    });

    this.initialized = true;
  }

  /**
   * Renders the official Google button.
   * Google Identity Services is loaded lazily only when this method is called.
   */
  renderButton(container: HTMLElement): Observable<string> {
    return new Observable(subscriber => {
      this.loadGoogleScript()
        .then(() => {
          this.init(credential => {
            subscriber.next(credential);
            subscriber.complete();
          });

          google.accounts.id.renderButton(container, {
            theme: 'outline',
            size: 'large',
            width: 400,
          });
        })
        .catch(error => {
          subscriber.error(error);
        });
    });
  }
}
