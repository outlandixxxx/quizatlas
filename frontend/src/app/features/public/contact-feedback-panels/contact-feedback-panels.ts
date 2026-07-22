import { ChangeDetectionStrategy, Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { TranslocoModule } from '@jsverse/transloco';

@Component({
  selector: 'app-contact-feedback-panels',
  standalone: true,
  imports: [CommonModule, TranslocoModule],
  templateUrl: './contact-feedback-panels.html',
  styleUrl: './contact-feedback-panels.scss',
  changeDetection: ChangeDetectionStrategy.OnPush,
})
export class ContactFeedbackPanels {}