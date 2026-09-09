import { Injectable } from '@angular/core';
import { environment } from '../../../environments/environment';

declare global {
  interface Window {
    grecaptcha?: {
      ready: (callback: () => void) => void;
      execute: (
        siteKey: string,
        options: { action: string }
      ) => Promise<string>;
    };
  }
}

@Injectable({
  providedIn: 'root',
})
export class RecaptchaService {
  private loadPromise?: Promise<void>;

  private loadScript(): Promise<void> {
    if (window.grecaptcha) {
      return Promise.resolve();
    }

    if (this.loadPromise) {
      return this.loadPromise;
    }

    this.loadPromise = new Promise<void>((resolve, reject) => {
      const existingScript = document.getElementById(
        'recaptcha-script'
      ) as HTMLScriptElement | null;

      const finish = () => {
        if (window.grecaptcha) {
          resolve();
        } else {
          reject(new Error('reCAPTCHA failed to initialize.'));
        }
      };

      if (existingScript) {
        existingScript.addEventListener('load', finish, { once: true });
        existingScript.addEventListener(
          'error',
          () => reject(new Error('Unable to load reCAPTCHA.')),
          { once: true }
        );
        return;
      }

      const script = document.createElement('script');

      script.id = 'recaptcha-script';
      script.src =
        `https://www.google.com/recaptcha/api.js?render=${encodeURIComponent(
          environment.recaptchaSiteKey
        )}`;
      script.async = true;
      script.defer = true;

      script.onload = finish;
      script.onerror = () =>
        reject(new Error('Unable to load reCAPTCHA.'));

      document.head.appendChild(script);
    });

    return this.loadPromise;
  }

  execute(action: string): Promise<string> {
    return this.loadScript().then(
      () =>
        new Promise<string>((resolve, reject) => {
          if (!window.grecaptcha) {
            reject(new Error('reCAPTCHA is unavailable.'));
            return;
          }

          window.grecaptcha.ready(() => {
            window.grecaptcha!
              .execute(environment.recaptchaSiteKey, { action })
              .then(resolve)
              .catch(reject);
          });
        })
    );
  }
}
