import {
  ChangeDetectionStrategy,
  Component
} from '@angular/core';

import { RouterOutlet } from '@angular/router';

import { CommonModule } from '@angular/common';
import { ThemeSwitcher } from '../../shared/components/ui/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../shared/components/ui/language-switcher/language-switcher';



@Component({
selector: 'app-user-layout',
  standalone: true,
  imports: [
    CommonModule,
    RouterOutlet,
    ThemeSwitcher,
    LanguageSwitcher
  ],
  templateUrl: './user-layout.html',
styleUrl: './user-layout.scss',
  changeDetection: ChangeDetectionStrategy.OnPush
})
export class UserLayout {}