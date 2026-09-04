import { ChangeDetectionStrategy, Component } from '@angular/core';
import { UpperCasePipe } from '@angular/common';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-divider',
  imports: [UpperCasePipe, TranslocoPipe],
  templateUrl: './divider.html',
  styleUrl: './divider.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Divider {}