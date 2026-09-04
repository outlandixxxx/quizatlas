import { Injectable } from '@angular/core';
import { environment } from '../../../environments/environment';

declare global {
  interface Window {
    FB: any;
    fbAsyncInit: () => void;
  }
}

@Injectable({ providedIn: 'root' })
export class FacebookAuthService {
  private initialized = false;

  /** Called once, early in app bootstrap (see app.config.ts below). */
  init(): void {
    window.fbAsyncInit = () => {
      window.FB.init({
        appId: environment.facebookAppId,
        cookie: true,
        xfbml: false,
        version: 'v21.0',
      });
      this.initialized = true;
    };
  }

  login(): Promise<string> {
    return new Promise((resolve, reject) => {
      if (!window.FB) {
        reject(new Error('Facebook SDK not loaded yet.'));
        return;
      }
      window.FB.login(
        (response: any) => {
          if (response.authResponse?.accessToken) {
            resolve(response.authResponse.accessToken);
          } else {
            reject(new Error('Facebook login cancelled or failed.'));
          }
        },
        { scope: 'public_profile,email' }
      );
    });
  }
}