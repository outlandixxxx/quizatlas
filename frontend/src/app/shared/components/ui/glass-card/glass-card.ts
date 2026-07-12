import {
  ChangeDetectionStrategy,
  Component,
  HostBinding,
  input,
  computed
} from '@angular/core';

@Component({
  selector: 'app-glass-card',
  imports: [],
  templateUrl: './glass-card.html',
  styleUrl: './glass-card.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class GlassCard {

  readonly hover = input(true);

  readonly padding = input(true);

  readonly clickable = input(false);

  readonly elevation = input<'sm' | 'md' | 'lg'>('md');

  @HostBinding('class')
  get hostClasses(): string {

    return [
      'qa-glass-card',
      this.hover() ? 'hover' : '',
      this.padding() ? 'padding' : '',
      this.clickable() ? 'clickable' : '',
      `elevation-${this.elevation()}`
    ]
      .filter(Boolean)
      .join(' ');
  }

}