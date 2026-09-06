import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { SubjectApi } from '../services/subject.api';
import { MajorApi } from '../services/major.api';
import { Subject } from '../../../core/models/subject';
import { Major } from '../../../core/models/major';

@Component({
  selector: 'app-admin-subjects',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, TranslocoModule],
  templateUrl: './subjects.html',
  styleUrl: './subjects.scss',
})
export class AdminSubjects implements OnInit {
  private readonly fb = inject(FormBuilder);
  private readonly subjectApi = inject(SubjectApi);
  private readonly majorApi = inject(MajorApi);

  readonly subjects = signal<Subject[]>([]);
  readonly majors = signal<Major[]>([]);
  readonly isLoading = signal(false);
  readonly errorMsg = signal<string | null>(null);

  readonly isModalOpen = signal(false);
  readonly editingId = signal<number | null>(null);
  readonly isSaving = signal(false);

  readonly deleteTarget = signal<Subject | null>(null);
  readonly isDeleting = signal(false);

  readonly form = this.fb.nonNullable.group({
    major_id: [null as number | null, [Validators.required]],
    name: ['', [Validators.required, Validators.maxLength(255)]],
    description: [''],
    is_active: [true],
  });

  ngOnInit(): void {
    this.fetchSubjects();
    this.fetchMajors();
  }

  fetchSubjects(): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.subjectApi.list().subscribe({
      next: (res) => {
        this.subjects.set(res.data);
        this.isLoading.set(false);
      },
      error: () => {
        this.errorMsg.set('Failed to load subjects.');
        this.isLoading.set(false);
      },
    });
  }

  fetchMajors(): void {
    this.majorApi.list().subscribe({
      next: (res) => this.majors.set(res.data),
    });
  }

  openCreateModal(): void {
    this.editingId.set(null);
    this.form.reset({ major_id: null, name: '', description: '', is_active: true });
    this.isModalOpen.set(true);
  }

  openEditModal(subject: Subject): void {
    this.editingId.set(subject.id);
    this.form.reset({
      major_id: subject.major?.id ?? null,
      name: subject.name,
      description: subject.description ?? '',
      is_active: subject.is_active,
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
    const payload = { ...raw, major_id: raw.major_id! };
    const id = this.editingId();

    const request$ = id
      ? this.subjectApi.update(id, payload)
      : this.subjectApi.create(payload);

    request$.subscribe({
      next: () => {
        this.isSaving.set(false);
        this.isModalOpen.set(false);
        this.fetchSubjects();
      },
      error: (err) => {
        this.isSaving.set(false);
        this.errorMsg.set(err?.error?.message || 'Failed to save subject.');
      },
    });
  }

  confirmDelete(subject: Subject): void {
    this.deleteTarget.set(subject);
  }

  cancelDelete(): void {
    this.deleteTarget.set(null);
  }

  deleteSubject(): void {
    const target = this.deleteTarget();
    if (!target) return;

    this.isDeleting.set(true);
    this.subjectApi.delete(target.id).subscribe({
      next: () => {
        this.isDeleting.set(false);
        this.deleteTarget.set(null);
        this.fetchSubjects();
      },
      error: () => {
        this.isDeleting.set(false);
        this.errorMsg.set('Failed to delete subject.');
      },
    });
  }
}