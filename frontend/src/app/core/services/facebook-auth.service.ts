import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

declare const FB: any;

@Injectable({ providedIn: 'root' })
export class FacebookAuthService {

  login(): Observable<string> {
    return new Observable(subscriber => {
      FB.login((response: any) => {
        if (response.authResponse) {
          subscriber.next(response.authResponse.accessToken);
          subscriber.complete();
        } else {
          subscriber.error(new Error('Facebook login cancelled or failed.'));
        }
      }, { scope: 'email,public_profile' });
    });
  }
}