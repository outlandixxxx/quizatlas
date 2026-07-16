import { provideTransloco } from '@jsverse/transloco';
import { AppTranslocoLoader } from './transloco-loader';

export function provideAppTransloco() {

  return provideTransloco({
    config: {
      availableLangs: ['en', 'fr', 'ar'],
      defaultLang: 'en',
      fallbackLang: 'en',
      reRenderOnLangChange: true,
      prodMode: false
    },
    loader: AppTranslocoLoader
  });

}