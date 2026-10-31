import { mergeApplicationConfig, ApplicationConfig, APP_INITIALIZER } from '@angular/core';
import { provideServerRendering, withRoutes } from '@angular/ssr';
import { appConfig } from './app.config';
import { serverRoutes } from './app.routes.server';
import { TRANSLOCO_LOADER, TranslocoService } from '@jsverse/transloco';
import { ServerTranslocoLoader } from './core/transloco/server-transloco-loader';
import { LanguageService } from './core/services/language';
import { firstValueFrom } from 'rxjs';
import { HTTP_TRANSFER_CACHE_ORIGIN_MAP } from '@angular/common/http';
import { API_BASE_URL } from './core/constants/api-base-url';
import { serverApi } from './core/config/server-api';
import { environment } from '../environments/environment';

const serverConfig: ApplicationConfig = {
  providers: [
    provideServerRendering(withRoutes(serverRoutes)),
    {
      provide: API_BASE_URL,
      useFactory: () => serverApi(environment.apiUrl, process.env['SSR_API_URL']).baseUrl,
    },
    {
      provide: HTTP_TRANSFER_CACHE_ORIGIN_MAP,
      useFactory: () => serverApi(environment.apiUrl, process.env['SSR_API_URL']).originMap,
    },
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
