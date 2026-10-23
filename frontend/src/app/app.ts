import { Component, inject, PLATFORM_ID } from '@angular/core';
import { isPlatformBrowser } from '@angular/common';
import { NavigationEnd, NavigationStart, Router, RouterOutlet } from '@angular/router';
import { filter } from 'rxjs/operators';

import { ThemeService } from './core/services/theme';
import { LanguageService } from './core/services/language';
import { Seo } from './core/services/seo';
import { canonicalUrl, isPrivatePath } from './core/seo/urls';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet],
  templateUrl: './app.html',
  styleUrl: './app.scss',
})
export class App {

  private readonly theme = inject(ThemeService);
  private readonly language = inject(LanguageService);
  private readonly platformId = inject(PLATFORM_ID);
  private readonly router = inject(Router);
  private readonly seo = inject(Seo);

  constructor() {
    this.seo.beginPage(this.router.url);

    this.router.events.pipe(filter(event => event instanceof NavigationStart))
      .subscribe(event => {
        if (!isPrivatePath(new URL(event.url, 'https://maroquiz.com').pathname)) this.language.readUrl(event.url);
        this.seo.beginPage(event.url);
      });

    this.router.events
      .pipe(filter((event) => event instanceof NavigationEnd))
      .subscribe((event) => {
        this.setCanonicalFromUrl(event.urlAfterRedirects);
      });

    if (isPlatformBrowser(this.platformId)) {
      this.theme.init();
      this.language.init();
    }
  }

  private setCanonicalFromUrl(url: string): void {
    this.seo.setCanonical(canonicalUrl(url));
  }
}
