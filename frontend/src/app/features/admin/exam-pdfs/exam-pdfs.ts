import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { AdminExamPdfApi } from '../services/exam-pdf-admin.api';
import { SubjectApi } from '../services/subject.api';
import { MajorApi } from '../services/major.api';
import { AdminExamPdf, AdminExamPdfListMeta } from '../../../core/models/exam-pdf-admin';
import { Subject } from '../../../core/models/subject';
import { Major } from '../../../core/models/major';
import { environment } from '../../../../environments/environment';

@Component({
  selector: 'app-admin-exam-pdfs',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule, TranslocoModule],
  templateUrl: './exam-pdfs.html',
  styleUrl: './exam-pdfs.scss',
})
export class AdminExamPdfs implements OnInit {
  private readonly fb = inject(FormBuilder);
  private readonly examPdfApi = inject(AdminExamPdfApi);
  private readonly subjectApi = inject(SubjectApi);
  private readonly majorApi = inject(MajorApi);
  private readonly httpClient = inject(HttpClient); // raw client, only for blob viewing

  readonly pdfs = signal<AdminExamPdf[]>([]);
  readonly meta = signal<AdminExamPdfListMeta | null>(null);
  readonly subjects = signal<Subject[]>([]);
  readonly majors = signal<Major[]>([]);
  readonly isLoading = signal(false);
  readonly errorMsg = signal<string | null>(null);
  readonly search = signal('');

  readonly isModalOpen = signal(false);
  readonly isSaving = signal(false);
  readonly selectedFile = signal<File | null>(null);
  readonly viewingId = signal<number | null>(null); // which PDF is currently opening

  readonly form = this.fb.nonNullable.group({
    title: ['', [Validators.required, Validators.maxLength(255)]],
    subject_id: [null as number | null],
    major_id: [null as number | null],
    year: [null as number | null],
    questions_count: [null as number | null],
    is_active: [true],
  });

  ngOnInit(): void {
    this.fetchPdfs(1);
    this.subjectApi.list().subscribe({ next: (res) => this.subjects.set(res.data) });
    this.majorApi.list().subscribe({ next: (res) => this.majors.set(res.data) });
  }

  fetchPdfs(page: number): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.examPdfApi.list(page, this.search()).subscribe({
      next: (res) => {
        this.pdfs.set(res.data.items);
        this.meta.set(res.data.meta);
        this.isLoading.set(false);
      },
      error: () => {
        this.errorMsg.set('Failed to load exam PDFs.');
        this.isLoading.set(false);
      },
    });
  }

  onSearchChange(value: string): void {
    this.search.set(value);
    this.fetchPdfs(1);
  }

  goToPage(page: number): void {
    this.fetchPdfs(page);
  }

  openUploadModal(): void {
    this.form.reset({
      title: '',
      subject_id: null,
      major_id: null,
      year: null,
      questions_count: null,
      is_active: true,
    });
    this.selectedFile.set(null);
    this.isModalOpen.set(true);
  }

  closeModal(): void {
    this.isModalOpen.set(false);
  }

  onFileSelected(event: Event): void {
    const input = event.target as HTMLInputElement;
    this.selectedFile.set(input.files?.[0] ?? null);
  }

  upload(): void {
    if (this.form.invalid || !this.selectedFile()) {
      this.form.markAllAsTouched();
      if (!this.selectedFile()) {
        this.errorMsg.set('Please select a PDF file.');
      }
      return;
    }

    this.isSaving.set(true);
    const raw = this.form.getRawValue();

    const formData = new FormData();
    formData.append('title', raw.title);
    if (raw.subject_id != null) formData.append('subject_id', String(raw.subject_id));
    if (raw.major_id != null) formData.append('major_id', String(raw.major_id));
    if (raw.year != null) formData.append('year', String(raw.year));
    if (raw.questions_count != null) formData.append('questions_count', String(raw.questions_count));
    formData.append('is_active', raw.is_active ? '1' : '0');
    formData.append('file', this.selectedFile()!);

    this.examPdfApi.upload(formData).subscribe({
      next: () => {
        this.isSaving.set(false);
        this.isModalOpen.set(false);
        this.fetchPdfs(1);
      },
      error: (err) => {
        this.isSaving.set(false);
        this.errorMsg.set(err?.error?.message || 'Failed to upload PDF.');
      },
    });
  }

  // The view_url from the backend requires the JWT bearer token, so a plain
  // link/window.open() would 401 — fetch it as a blob through HttpClient
  // (which the authInterceptor attaches the token to) and open that instead.
  viewPdf(pdf: AdminExamPdf): void {
    this.viewingId.set(pdf.id);
    this.errorMsg.set(null);

    this.httpClient.get(pdf.view_url, { responseType: 'blob' }).subscribe({
      next: (blob) => {
        const url = window.URL.createObjectURL(blob);
        window.open(url, '_blank');
        this.viewingId.set(null);
      },
      error: () => {
        this.errorMsg.set('Failed to open PDF.');
        this.viewingId.set(null);
      },
    });
  }
}