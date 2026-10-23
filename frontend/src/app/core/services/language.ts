import { DOCUMENT } from '@angular/common';
import { inject, Injectable, signal, REQUEST, PLATFORM_ID } from '@angular/core';
import { isPlatformBrowser } from '@angular/common';

import { TranslocoService } from '@jsverse/transloco';

import { Language } from '../models/language';
import { PreferencesService } from './preferences';

@Injectable({
  providedIn: 'root'
})
export class LanguageService {

  private readonly document = inject(DOCUMENT);

  private readonly transloco = inject(TranslocoService);

  private readonly preferences = inject(PreferencesService);
  private readonly request = inject(REQUEST, { optional: true });
  private readonly isBrowser = isPlatformBrowser(inject(PLATFORM_ID));

  readonly language = signal<Language>('en');

  init(): void {

    this.readUrl(this.request?.url ?? this.document.location?.href ?? '/');

  }

  readUrl(value: string): Language {
    const url = new URL(value, 'https://maroquiz.com');
    const language = !this.isBrowser && url.pathname.startsWith('/trial/')
      ? 'fr' : this.preferences.getLanguage();
    this.apply(language);
    return language;
  }

  setLanguage(language: Language): void {
    this.apply(language);
  }

  private apply(language: Language): void {

    this.language.set(language);

    this.preferences.setLanguage(language);

    this.transloco.setActiveLang(language);

    const html = this.document.documentElement;

    html.lang = language;

    html.dir = language === 'ar' ? 'rtl' : 'ltr';

  }

}
