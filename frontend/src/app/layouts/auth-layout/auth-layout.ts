import {
  ChangeDetectionStrategy,
  Component
} from '@angular/core';

import { RouterOutlet } from '@angular/router';

import { CommonModule } from '@angular/common';

import { ThemeSwitcher } from '../../shared/components/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../shared/components/language-switcher/language-switcher';

@Component({
  selector: 'app-auth-layout',
  standalone: true,
  imports: [
    CommonModule,
    RouterOutlet,
    ThemeSwitcher,
    LanguageSwitcher
  ],
  templateUrl: './auth-layout.html',
  styleUrl: './auth-layout.scss',
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class AuthLayout {}