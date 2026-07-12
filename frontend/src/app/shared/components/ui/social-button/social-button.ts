import {
  ChangeDetectionStrategy,
  Component,
  Input,
} from '@angular/core';

@Component({
  selector: 'app-social-button',
  standalone: true,
  templateUrl: './social-button.html',
  styleUrl: './social-button.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class SocialButton {

  @Input() icon='';

  @Input() text='';

}