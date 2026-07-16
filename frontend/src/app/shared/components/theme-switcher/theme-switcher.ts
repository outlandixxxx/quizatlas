import {
  ChangeDetectionStrategy,
  Component,
  inject
} from '@angular/core';

import { CommonModule } from '@angular/common';

import { ThemeService } from '../../../core/services/theme';

@Component({
  selector: 'app-theme-switcher',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './theme-switcher.html',
  styleUrl: './theme-switcher.scss',
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class ThemeSwitcher {

  private readonly themeService = inject(ThemeService);

  get icon(): string {

    switch (this.themeService.theme()) {

      case 'light':
        return 'light_mode';

      case 'dark':
        return 'dark_mode';

      default:
        return 'computer';

    }

  }

  toggle(): void {

    const current = this.themeService.theme();

    switch (current) {

      case 'light':
        this.themeService.setTheme('dark');
        break;

      case 'dark':
        this.themeService.setTheme('system');
        break;

      default:
        this.themeService.setTheme('light');

    }

  }

}