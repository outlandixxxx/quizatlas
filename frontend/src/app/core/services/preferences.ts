import { Injectable, PLATFORM_ID, inject } from '@angular/core';
import { isPlatformBrowser } from '@angular/common';

import { Theme } from '../models/theme';
import { Language } from '../models/language';

@Injectable({
  providedIn: 'root'
})
export class PreferencesService {

  private readonly THEME_KEY = 'quizatlas.theme';

  private readonly LANGUAGE_KEY = 'quizatlas.language';

  private readonly platformId = inject(PLATFORM_ID);
  private readonly isBrowser = isPlatformBrowser(this.platformId);

  getTheme(): Theme {

    if (!this.isBrowser) {
      return 'system';
    }

    return (localStorage.getItem(this.THEME_KEY) as Theme) ?? 'system';

  }

  setTheme(theme: Theme): void {

    if (!this.isBrowser) {
      return;
    }

    localStorage.setItem(this.THEME_KEY, theme);

  }

  getLanguage(): Language {

    if (!this.isBrowser) {
      return 'en';
    }

    return (localStorage.getItem(this.LANGUAGE_KEY) as Language) ?? 'en';

  }

  setLanguage(language: Language): void {

    if (!this.isBrowser) {
      return;
    }

    localStorage.setItem(this.LANGUAGE_KEY, language);

  }

}
