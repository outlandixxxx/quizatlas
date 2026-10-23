import { ChangeDetectionStrategy, Component, Input } from '@angular/core';

@Component({
  selector: 'app-primary-button',
  imports: [],
  templateUrl: './primary-button.html',
  styleUrl: './primary-button.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class PrimaryButton {
  @Input() type: 'button' | 'submit' | 'reset' = 'button';
  @Input() disabled = false;
}
