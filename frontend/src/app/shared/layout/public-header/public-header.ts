import {
  ChangeDetectionStrategy,
  Component,
} from '@angular/core';

import { RouterLink, RouterLinkActive } from '@angular/router';
import { Logo } from '../../components/logo/logo';
import { ThemeSwitcher } from '../../components/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../components/language-switcher/language-switcher';



@Component({
  selector: 'app-public-header',
  standalone: true,
  imports: [
    RouterLink,
    RouterLinkActive,
    Logo,
    ThemeSwitcher,
    LanguageSwitcher,
  ],
  templateUrl: './public-header.html',
  styleUrl: './public-header.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PublicHeader {}