import {
  ApplicationConfig,
  APP_INITIALIZER,
  provideBrowserGlobalErrorListeners,
  provideZoneChangeDetection,
} from '@angular/core';
import { provideRouter, withInMemoryScrolling } from '@angular/router';
import { provideHttpClient, withInterceptors } from '@angular/common/http';

import { routes } from './app.routes';
import { provideAppTransloco } from './core/transloco/transloco.config';
import { authInterceptor } from './core/interceptors/auth-interceptor';
import { errorInterceptor } from './core/interceptors/error-interceptor';
import { loadingInterceptor } from './core/interceptors/loading-interceptor';
import { Token } from './core/services/token';
import { AuthApi } from './features/auth/services/auth-api';
import { AuthState } from './features/auth/services/auth-state';
import { initializeAuth } from './core/initializers/auth.initializer';
import { provideClientHydration, withEventReplay } from '@angular/platform-browser';

export const appConfig: ApplicationConfig = {
  providers: [
    provideBrowserGlobalErrorListeners(),
    provideZoneChangeDetection({ eventCoalescing: true }), // <-- add this

    provideRouter(
      routes,
      withInMemoryScrolling({ anchorScrolling: 'enabled', scrollPositionRestoration: 'enabled' }),
    ),
    provideHttpClient(withInterceptors([authInterceptor, errorInterceptor, loadingInterceptor])),
    provideAppTransloco(),
    {
      provide: APP_INITIALIZER,
      useFactory: initializeAuth,
      deps: [Token, AuthApi, AuthState],
      multi: true,
    },
    provideClientHydration(withEventReplay()),
  ],
};
