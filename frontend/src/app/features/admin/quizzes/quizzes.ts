import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { AdminQuizApi } from '../services/quiz.api';
import { SubjectApi } from '../services/subject.api';
import { Quiz, QuizDifficulty } from '../../../core/models/quiz';
import { Subject } from '../../../core/models/subject';

@Component({
  selector: 'app-admin-quizzes',
  standalone: true,
  imports: [CommonModule, RouterLink, ReactiveFormsModule, TranslocoModule],
  templateUrl: './quizzes.html',
  styleUrl: './quizzes.scss',
})
export class AdminQuizzes implements OnInit {
  private readonly fb = inject(FormBuilder);
  private readonly quizApi = inject(AdminQuizApi);
  private readonly subjectApi = inject(SubjectApi);

  readonly quizzes = signal<Quiz[]>([]);
  readonly subjects = signal<Subject[]>([]);
  readonly isLoading = signal(false);
  readonly errorMsg = signal<string | null>(null);

  readonly isModalOpen = signal(false);
  readonly editingId = signal<number | null>(null);
  readonly isSaving = signal(false);

  readonly deleteTarget = signal<Quiz | null>(null);
  readonly isDeleting = signal(false);

  readonly difficulties: QuizDifficulty[] = ['Beginner', 'Intermediate', 'Advanced'];

  readonly form = this.fb.nonNullable.group({
    subject_id: [null as number | null, [Validators.required]],
    title: ['', [Validators.required, Validators.maxLength(255)]],
    description: [''],
    duration: [30, [Validators.required, Validators.min(1)]],
    passing_score: [50, [Validators.required, Validators.min(0)]],
    difficulty: ['Beginner' as QuizDifficulty | null],
    is_active: [true],
  });

  ngOnInit(): void {
    this.fetchQuizzes();
    this.fetchSubjects();
  }

  fetchQuizzes(): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.quizApi.list().subscribe({
      next: (res) => {
        this.quizzes.set(res.data);
        this.isLoading.set(false);
      },
      error: () => {
        this.errorMsg.set('Failed to load quizzes.');
        this.isLoading.set(false);
      },
    });
  }

  fetchSubjects(): void {
    this.subjectApi.list().subscribe({
      next: (res) => this.subjects.set(res.data),
    });
  }

  openCreateModal(): void {
    this.editingId.set(null);
    this.form.reset({
      subject_id: null,
      title: '',
      description: '',
      duration: 30,
      passing_score: 50,
      difficulty: 'Beginner',
      is_active: true,
    });
    this.isModalOpen.set(true);
  }

  openEditModal(quiz: Quiz): void {
    this.editingId.set(quiz.id);
    this.form.reset({
      subject_id: quiz.subject_id,
      title: quiz.title,
      description: quiz.description ?? '',
      duration: quiz.duration,
      passing_score: quiz.passing_score,
      difficulty: quiz.difficulty,
      is_active: quiz.is_active,
    });
    this.isModalOpen.set(true);
  }

  closeModal(): void {
    this.isModalOpen.set(false);
  }

  save(): void {
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }

    this.isSaving.set(true);
    const raw = this.form.getRawValue();
    const payload = { ...raw, subject_id: raw.subject_id! };
    const id = this.editingId();

    const request$ = id
      ? this.quizApi.update(id, payload)
      : this.quizApi.create(payload);

    request$.subscribe({
      next: () => {
        this.isSaving.set(false);
        this.isModalOpen.set(false);
        this.fetchQuizzes();
      },
      error: (err) => {
        this.isSaving.set(false);
        this.errorMsg.set(err?.error?.message || 'Failed to save quiz.');
      },
    });
  }

  confirmDelete(quiz: Quiz): void {
    this.deleteTarget.set(quiz);
  }

  cancelDelete(): void {
    this.deleteTarget.set(null);
  }

  deleteQuiz(): void {
    const target = this.deleteTarget();
    if (!target) return;

    this.isDeleting.set(true);
    this.quizApi.delete(target.id).subscribe({
      next: () => {
        this.isDeleting.set(false);
        this.deleteTarget.set(null);
        this.fetchQuizzes();
      },
      error: () => {
        this.isDeleting.set(false);
        this.errorMsg.set('Failed to delete quiz.');
      },
    });
  }
}