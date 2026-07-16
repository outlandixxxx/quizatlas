import {
  ChangeDetectionStrategy,
  Component,
} from '@angular/core';

import { RouterLink } from '@angular/router';

import { PublicHeader } from '../../../../shared/layout/public-header/public-header';

@Component({
  selector: 'app-landing',
  standalone: true,
  imports: [
    RouterLink,
    PublicHeader,
  ],
  templateUrl: './landing.html',
  styleUrl: './landing.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Landing {}