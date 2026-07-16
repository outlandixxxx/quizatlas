import { DOCUMENT } from '@angular/common';
import { inject, Injectable, signal } from '@angular/core';

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

  readonly language = signal<Language>('en');

  init(): void {

    this.setLanguage(this.preferences.getLanguage());

  }

  setLanguage(language: Language): void {

    this.language.set(language);

    this.preferences.setLanguage(language);

    this.transloco.setActiveLang(language);

    const html = this.document.documentElement;

    html.lang = language;

    html.dir = language === 'ar' ? 'rtl' : 'ltr';

  }

}