import { Type } from '@angular/core';
import { TestModuleMetadata } from '@angular/core/testing';
import { provideHttpClient } from '@angular/common/http';
import { provideHttpClientTesting } from '@angular/common/http/testing';
import { provideRouter } from '@angular/router';
import { TranslocoTestingModule } from '@jsverse/transloco';
import { NEVER } from 'rxjs';
import en from '../assets/i18n/en.json';
import fr from '../assets/i18n/fr.json';
import ar from '../assets/i18n/ar.json';
import { GoogleAuthService } from '../app/core/services/google-auth.service';
import { RecaptchaService } from '../app/core/services/recaptcha.service';

// Real templates/router/translation providers, with HTTP and external identity SDKs offline.
// Imported by component specs only; this is not an application bootstrap configuration.
export function componentTestConfig(component: Type<unknown>): TestModuleMetadata {
  return {
    imports: [
      component,
      TranslocoTestingModule.forRoot({
        langs: { en, fr, ar },
        preloadLangs: true,
        translocoConfig: { availableLangs: ['en', 'fr', 'ar'], defaultLang: 'en' },
      }),
    ],
    providers: [
      provideRouter([]),
      provideHttpClient(),
      provideHttpClientTesting(),
      { provide: GoogleAuthService, useValue: { renderButton: () => NEVER } },
      { provide: RecaptchaService, useValue: { execute: async () => 'CONTROLLED_TEST_TOKEN' } },
    ],
  };
}
