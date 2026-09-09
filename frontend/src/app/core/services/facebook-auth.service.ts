import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { environment } from '../../../environments/environment';

declare global {
  interface Window {
    FB?: any;
    fbAsyncInit?: () => void;
  }
}

@Injectable({ providedIn: 'root' })
export class FacebookAuthService {
  private sdkPromise?: Promise<void>;

  private loadSdk(): Promise<void> {
    if (window.FB) {
      return Promise.resolve();
    }

    if (this.sdkPromise) {
      return this.sdkPromise;
    }

    this.sdkPromise = new Promise<void>((resolve, reject) => {
      const existingScript = document.getElementById(
        'facebook-jssdk'
      ) as HTMLScriptElement | null;

      const initialize = () => {
        if (!window.FB) {
          reject(new Error('Facebook SDK failed to initialize.'));
          return;
        }

        window.FB.init({
          appId: environment.facebookAppId,
          cookie: true,
          xfbml: false,
          version: 'v21.0',
        });

        resolve();
      };

      window.fbAsyncInit = initialize;

      if (existingScript) {
        return;
      }

      const script = document.createElement('script');

      script.id = 'facebook-jssdk';
      script.src = 'https://connect.facebook.net/en_US/sdk.js';
      script.async = true;
      script.defer = true;

      script.onerror = () => {
        reject(new Error('Unable to load Facebook SDK.'));
      };

      document.head.appendChild(script);
    });

    return this.sdkPromise;
  }

  login(): Observable<string> {
    return new Observable(subscriber => {
      this.loadSdk()
        .then(() => {
          if (!window.FB) {
            throw new Error('Facebook SDK is unavailable.');
          }

          window.FB.login(
            (response: any) => {
              if (response.authResponse?.accessToken) {
                subscriber.next(response.authResponse.accessToken);
                subscriber.complete();
              } else {
                subscriber.error(
                  new Error('Facebook login cancelled or failed.')
                );
              }
            },
            {
              scope: 'email,public_profile',
            }
          );
        })
        .catch(error => {
          subscriber.error(error);
        });
    });
  }
}
