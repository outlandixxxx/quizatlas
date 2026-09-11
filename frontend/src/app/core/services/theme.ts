import { DOCUMENT, isPlatformBrowser } from '@angular/common';
import { inject, Injectable, PLATFORM_ID, signal } from '@angular/core';

import { Theme } from '../models/theme';
import { PreferencesService } from './preferences';

@Injectable({
  providedIn: 'root'
})
export class ThemeService {

  private readonly document = inject(DOCUMENT);

  private readonly preferences = inject(PreferencesService);

  private readonly platformId = inject(PLATFORM_ID);

  private readonly isBrowser = isPlatformBrowser(this.platformId);

  readonly theme = signal<Theme>('system');

  init(): void {

    this.setTheme(this.preferences.getTheme());

  }

  setTheme(theme: Theme): void {

    this.theme.set(theme);

    this.preferences.setTheme(theme);

    if (!this.isBrowser) {
      return;
    }

    const html = this.document.documentElement;

    if (theme === 'system') {

      const dark = window.matchMedia('(prefers-color-scheme: dark)').matches;

      html.setAttribute('data-theme', dark ? 'dark' : 'light');

      return;

    }

    html.setAttribute('data-theme', theme);

  }

  toggle(): void {

    const current = this.theme();

    this.setTheme(current === 'dark' ? 'light' : 'dark');

  }

}
