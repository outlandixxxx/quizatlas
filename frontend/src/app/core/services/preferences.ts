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

  private read(key: string): string | null {
    if (!this.isBrowser) return null;
    try {
      return localStorage.getItem(key);
    } catch {
      return null;
    }
  }

  private write(key: string, value: string): void {
    if (!this.isBrowser) return;
    try {
      localStorage.setItem(key, value);
    } catch {
      // Optional display preferences must not prevent the application from opening.
    }
  }

  getTheme(): Theme {

    if (!this.isBrowser) {
      return 'system';
    }

    const theme = this.read(this.THEME_KEY);
    return theme === 'light' || theme === 'dark' || theme === 'system' ? theme : 'system';

  }

  setTheme(theme: Theme): void {

    if (!this.isBrowser) {
      return;
    }

    this.write(this.THEME_KEY, theme);

  }

  getLanguage(): Language {

    if (!this.isBrowser) {
      return 'en';
    }

    const language = this.read(this.LANGUAGE_KEY);
    return language === 'en' || language === 'fr' || language === 'ar' ? language : 'en';

  }

  setLanguage(language: Language): void {

    if (!this.isBrowser) {
      return;
    }

    this.write(this.LANGUAGE_KEY, language);

  }

}
