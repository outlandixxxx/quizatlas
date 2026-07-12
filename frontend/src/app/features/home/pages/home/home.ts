import { ChangeDetectionStrategy, Component } from '@angular/core';

import { GlassCard } from '../../../../shared/components/ui/glass-card/glass-card';

@Component({
  selector: 'app-home',
  imports: [GlassCard],
  templateUrl: './home.html',
  styleUrl: './home.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class Home {}