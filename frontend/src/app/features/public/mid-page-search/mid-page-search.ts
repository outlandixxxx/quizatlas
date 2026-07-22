import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-mid-page-search',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './mid-page-search.html',
  styleUrl: './mid-page-search.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class MidPageSearch {}