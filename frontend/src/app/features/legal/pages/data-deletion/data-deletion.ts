import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoPipe } from '@jsverse/transloco';

@Component({
  selector: 'app-data-deletion',
  standalone: true,
  imports: [
    CommonModule,
    TranslocoPipe,
  ],
  templateUrl: './data-deletion.html',
  styleUrl: './data-deletion.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class DataDeletion {}
