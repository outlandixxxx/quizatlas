import { mergeApplicationConfig, ApplicationConfig, APP_INITIALIZER } from '@angular/core';
import { provideServerRendering, withRoutes } from '@angular/ssr';
import { appConfig } from './app.config';
import { serverRoutes } from './app.routes.server';
import { TRANSLOCO_LOADER, TranslocoService } from '@jsverse/transloco';
import { ServerTranslocoLoader } from './core/transloco/server-transloco-loader';
import { LanguageService } from './core/services/language';
import { firstValueFrom } from 'rxjs';

const serverConfig: ApplicationConfig = {
  providers: [
    provideServerRendering(withRoutes(serverRoutes)),
    { provide: TRANSLOCO_LOADER, useClass: ServerTranslocoLoader },
    {
      provide: APP_INITIALIZER,
      multi: true,
      deps: [LanguageService, TranslocoService],
      useFactory: (language: LanguageService, translations: TranslocoService) => () => {
        language.init();
        return firstValueFrom(translations.load(language.language()));
      },
    },
  ],
};

export const config = mergeApplicationConfig(appConfig, serverConfig);
