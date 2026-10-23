import { Injectable } from '@angular/core';
import { TranslocoLoader } from '@jsverse/transloco';
import { of } from 'rxjs';
import en from '../../../assets/i18n/en.json';
import fr from '../../../assets/i18n/fr.json';
import ar from '../../../assets/i18n/ar.json';

// SSR reads bundled translations, avoiding a network round trip to its own host.
@Injectable()
export class ServerTranslocoLoader implements TranslocoLoader {
  getTranslation(lang: string) {
    return of(({ en, fr, ar })[lang as 'en' | 'fr' | 'ar'] ?? en);
  }
}
