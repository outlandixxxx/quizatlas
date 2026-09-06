import { Component, EventEmitter, Input, Output, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { BlogApi } from '../../../../../core/services/blog-api';
import { ApiMajor, ApiSubject, PracticeApi } from '../../../../user/services/practice.api';

@Component({
  selector: 'app-ask-question-modal',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './ask-question-modal.html',
  styleUrl: './ask-question-modal.scss',
})
export class AskQuestionModal {
  private readonly blogApi = inject(BlogApi);
  private readonly practiceApi = inject(PracticeApi);

  @Input() majors: ApiMajor[] = [];
  @Output() close = new EventEmitter<void>();
  @Output() created = new EventEmitter<void>();

  title = '';
  body = '';
  selectedMajorId: number | null = null;
  selectedSubjectId: number | null = null;
  subjects: ApiSubject[] = [];

  isSubmitting = false;
  errorMessage = '';

  onMajorChange(): void {
    this.selectedSubjectId = null;
    this.subjects = [];
    if (this.selectedMajorId) {
      this.practiceApi.getSubjects(this.selectedMajorId).subscribe({
        next: (res) => (this.subjects = res.data),
      });
    }
  }

  onBackdropClick(): void {
    this.close.emit();
  }

  submit(): void {
    if (!this.title.trim() || !this.body.trim()) {
      this.errorMessage = 'blog.askValidationRequired';
      return;
    }

    this.isSubmitting = true;
    this.errorMessage = '';

    this.blogApi.create({
      title: this.title.trim(),
      body: this.body.trim(),
      major_id: this.selectedMajorId,
      subject_id: this.selectedSubjectId,
    }).subscribe({
      next: () => {
        this.isSubmitting = false;
        this.created.emit();
      },
      error: (err) => {
        this.isSubmitting = false;
        this.errorMessage = err?.error?.message || 'blog.askSubmitError';
      },
    });
  }
}