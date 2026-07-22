import { Component } from '@angular/core';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-stats-ribbon',
  imports: [
    TranslocoModule
  ],
  templateUrl: './stats-ribbon.html',
  styleUrl: './stats-ribbon.scss',
})
export class StatsRibbon {}
