import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-terms',
  standalone: true,
  imports: [
    CommonModule,
    TranslocoPipe,
  ],
  templateUrl: './terms.html',
  styleUrl: './terms.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Terms {}