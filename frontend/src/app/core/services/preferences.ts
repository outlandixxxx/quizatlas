import { Injectable } from '@angular/core';

import { Theme } from '../models/theme';
import { Language } from '../models/language';

@Injectable({
  providedIn: 'root'
})
export class PreferencesService {

  private readonly THEME_KEY = 'quizatlas.theme';

  private readonly LANGUAGE_KEY = 'quizatlas.language';

  getTheme(): Theme {

    return (localStorage.getItem(this.THEME_KEY) as Theme) ?? 'system';

  }

  setTheme(theme: Theme): void {

    localStorage.setItem(this.THEME_KEY, theme);

  }

  getLanguage(): Language {

    return (localStorage.getItem(this.LANGUAGE_KEY) as Language) ?? 'en';

  }

  setLanguage(language: Language): void {

    localStorage.setItem(this.LANGUAGE_KEY, language);

  }

}