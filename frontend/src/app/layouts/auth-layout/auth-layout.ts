import { ChangeDetectionStrategy, Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';

// Adjust relative import paths to point to your switcher component files
import { ThemeSwitcher } from '../../shared/components/ui/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../shared/components/ui/language-switcher/language-switcher';

@Component({
  selector: 'app-auth-layout',
  standalone: true,
  imports: [
    RouterOutlet,
    ThemeSwitcher,
    LanguageSwitcher
  ],
  templateUrl: './auth-layout.html',
  styleUrl: './auth-layout.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class AuthLayout {}