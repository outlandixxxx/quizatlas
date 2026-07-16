import { Component, inject } from '@angular/core';
import { RouterOutlet } from '@angular/router';

import { ThemeService } from './core/services/theme';
import { LanguageService } from './core/services/language';

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

  constructor() {
    this.theme.init();
    this.language.init();
  }

}