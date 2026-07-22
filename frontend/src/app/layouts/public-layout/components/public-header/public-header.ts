import {
  ChangeDetectionStrategy,
  Component,
} from '@angular/core';

import { RouterLink, RouterLinkActive } from '@angular/router';
import { ThemeSwitcher } from '../../../../shared/components/ui/theme-switcher/theme-switcher';
import { LanguageSwitcher } from '../../../../shared/components/ui/language-switcher/language-switcher';
import { Logo } from '../../../../shared/components/ui/logo/logo';
import { TranslocoModule } from '@jsverse/transloco';




@Component({
  selector: 'app-public-header',
  standalone: true,
  imports: [
    RouterLink,
    RouterLinkActive,
    Logo,
    ThemeSwitcher,
    LanguageSwitcher,
    TranslocoModule, // Added this to fix NG8004
  ],
  templateUrl: './public-header.html',
  styleUrl: './public-header.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PublicHeader {}