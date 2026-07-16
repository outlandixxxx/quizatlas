import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-privacy',
  standalone: true,
  imports: [
    CommonModule,
    TranslocoPipe,
  ],
  templateUrl: './privacy.html',
  styleUrl: './privacy.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Privacy {}