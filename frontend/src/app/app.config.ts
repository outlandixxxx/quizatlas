import { ApplicationConfig, APP_INITIALIZER, provideBrowserGlobalErrorListeners, provideZoneChangeDetection } from '@angular/core';
import { provideRouter, withInMemoryScrolling } from '@angular/router';
import { provideHttpClient, withInterceptors  } from '@angular/common/http';
import { of } from 'rxjs';
import { catchError, tap } from 'rxjs/operators';

import { routes } from './app.routes';
import { provideAppTransloco } from './core/transloco/transloco.config';
import { authInterceptor } from './core/interceptors/auth-interceptor';
import { errorInterceptor } from './core/interceptors/error-interceptor';
import { loadingInterceptor } from './core/interceptors/loading-interceptor';
import { Token } from './core/services/token';
import { AuthApi } from './features/auth/services/auth-api';
import { AuthState } from './features/auth/services/auth-state';


/**
 * Hydrates AuthState on browser reload if token exists
 */
function initializeApp(token: Token, authApi: AuthApi, authState: AuthState) {
  return () => {
    if (token.has()) {
      authState.startLoading();
      authApi.me().pipe(
        tap((response) => {
          authState.setUser(response.data);
        }),
        catchError(() => {
          token.clear();
          authState.clear();
          return of(null);
        })
      ).subscribe({
        complete: () => authState.stopLoading(),
      });
    }
    return Promise.resolve();
  };
}

/**
 * Registers window.fbAsyncInit so FB.init() runs with the app's own
 * facebookAppId (from environment.ts) as soon as the Facebook SDK
 * script (loaded in index.html) finishes loading.
 */


export const appConfig: ApplicationConfig = {
  providers: [
    provideBrowserGlobalErrorListeners(),
    provideZoneChangeDetection({ eventCoalescing: true }), // <-- add this

    provideRouter(routes,
        withInMemoryScrolling({ anchorScrolling: 'enabled', scrollPositionRestoration: 'enabled' })
    ),
    provideHttpClient(
        
      withInterceptors([
        authInterceptor,
        errorInterceptor,
        loadingInterceptor,
      ])
    ),
    provideAppTransloco(),
    {
      provide: APP_INITIALIZER,
      useFactory: initializeApp,
      deps: [Token, AuthApi, AuthState],
      multi: true,
    },
    
  ],
};
