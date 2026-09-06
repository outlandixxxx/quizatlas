import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { MajorApi } from '../services/major.api';
import { Major } from '../../../core/models/major';

@Component({
  selector: 'app-admin-majors',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, TranslocoModule],
  templateUrl: './majors.html',
  styleUrl: './majors.scss',
})
export class AdminMajors implements OnInit {
  private readonly fb = inject(FormBuilder);
  private readonly majorApi = inject(MajorApi);

  readonly majors = signal<Major[]>([]);
  readonly isLoading = signal(false);
  readonly errorMsg = signal<string | null>(null);

  // Modal state
  readonly isModalOpen = signal(false);
  readonly editingId = signal<number | null>(null);
  readonly isSaving = signal(false);

  // Delete confirmation state
  readonly deleteTarget = signal<Major | null>(null);
  readonly isDeleting = signal(false);

  readonly form = this.fb.nonNullable.group({
    name: ['', [Validators.required, Validators.maxLength(255)]],
    description: [''],
    is_active: [true],
  });

  ngOnInit(): void {
    this.fetchMajors();
  }

  fetchMajors(): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.majorApi.list().subscribe({
      next: (res) => {
        this.majors.set(res.data);
        this.isLoading.set(false);
      },
      error: () => {
        this.errorMsg.set('Failed to load majors.');
        this.isLoading.set(false);
      },
    });
  }

  openCreateModal(): void {
    this.editingId.set(null);
    this.form.reset({ name: '', description: '', is_active: true });
    this.isModalOpen.set(true);
  }

  openEditModal(major: Major): void {
    this.editingId.set(major.id);
    this.form.reset({
      name: major.name,
      description: major.description ?? '',
      is_active: major.is_active,
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
    const payload = this.form.getRawValue();
    const id = this.editingId();

    const request$ = id
      ? this.majorApi.update(id, payload)
      : this.majorApi.create(payload);

    request$.subscribe({
      next: () => {
        this.isSaving.set(false);
        this.isModalOpen.set(false);
        this.fetchMajors();
      },
      error: (err) => {
        this.isSaving.set(false);
        this.errorMsg.set(err?.error?.message || 'Failed to save major.');
      },
    });
  }

  confirmDelete(major: Major): void {
    this.deleteTarget.set(major);
  }

  cancelDelete(): void {
    this.deleteTarget.set(null);
  }

  deleteMajor(): void {
    const target = this.deleteTarget();
    if (!target) return;

    this.isDeleting.set(true);
    this.majorApi.delete(target.id).subscribe({
      next: () => {
        this.isDeleting.set(false);
        this.deleteTarget.set(null);
        this.fetchMajors();
      },
      error: () => {
        this.isDeleting.set(false);
        this.errorMsg.set('Failed to delete major.');
      },
    });
  }
}