import { Component, EventEmitter, Output, inject, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { FeedbackApi } from '../../../core/services/feedback-api';

@Component({
  selector: 'app-feedback-modal',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './feedback-modal.html',
  styleUrl: './feedback-modal.scss',
})
export class FeedbackModal {
  private readonly feedbackApi = inject(FeedbackApi);
  private readonly cdr = inject(ChangeDetectorRef);

  @Output() closed = new EventEmitter<void>();

  email = '';
  type: 'bug' | 'suggestion' | 'other' = 'suggestion';
  message = '';

  isSubmitting = false;
  isSuccess = false;
  errorMsg = '';

  close(): void {
    this.closed.emit();
  }

  submit(): void {
    if (!this.email || !this.message) return;

    this.isSubmitting = true;
    this.errorMsg = '';

    this.feedbackApi.submit({ email: this.email, type: this.type, message: this.message }).subscribe({
      next: () => {
        this.isSubmitting = false;
        this.isSuccess = true;
        this.cdr.detectChanges();
      },
      error: (err) => {
        this.isSubmitting = false;
        this.errorMsg = err.status === 422
          ? 'feedback.validationError'
          : 'feedback.genericError';
        this.cdr.detectChanges();
      },
    });
  }
}