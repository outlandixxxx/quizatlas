import { ChangeDetectionStrategy, Component } from '@angular/core';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-logo',
  standalone: true,
  imports: [
    TranslocoPipe,
  ],
  templateUrl: './logo.html',
  styleUrl: './logo.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Logo {}