import { Component, DestroyRef, OnInit, inject, signal } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subscription } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import {
  DirectoryRecord,
  PreparationOption,
  orderedPreparationOptions,
  preparationOptionName,
} from '../../../core/models/concours';
import { CommonModule } from '@angular/common';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';

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
  imports: [CommonModule, ReactiveFormsModule, TranslocoPipe],
  templateUrl: './exam-pdfs.html',
  styleUrl: './exam-pdfs.scss',
})
export class AdminExamPdfs implements OnInit {
  private readonly destroy = inject(DestroyRef);
  private readonly directory = inject(ConcoursApi);
  private readonly translations = inject(TranslocoService);
  private request?: Subscription;
  private candidateRequest?: Subscription;
  private blobUrl?: string;
  readonly concours = signal<DirectoryRecord[]>([]);
  readonly candidates = signal<AdminExamPdf[]>([]);
  readonly editing = signal<AdminExamPdf | null>(null);
  readonly referenceError = signal(false);
  readonly fieldErrors = signal<Record<string, string[]>>({});
  readonly types = ['previous_exam', 'correction', 'summary', 'preparation_guide'] as const;
  readonly selectedOptionIds = signal<number[]>([]);
  optionsForPdf(): PreparationOption[] {
    return orderedPreparationOptions(
      this.concours().find((item) => item.id === this.form.controls.concours_id.value)
        ?.preparation_options ?? [],
    );
  }
  optionName(option: PreparationOption): string {
    const parent = this.optionsForPdf().find((item) => item.id === option.parent_id);
    const language = this.translations.getActiveLang();
    return (
      (parent ? preparationOptionName(parent, language) + ' › ' : '') +
      preparationOptionName(option, language)
    );
  }
  toggleOption(id: number, checked: boolean): void {
    this.selectedOptionIds.update((ids) =>
      checked ? [...new Set([...ids, id])] : ids.filter((value) => value !== id),
    );
  }
  saveOptionAssignments(): void {
    const pdf = this.editing();
    if (!pdf || this.isSaving() || this.form.dirty) return;
    this.isSaving.set(true);
    this.errorMsg.set(null);
    this.fieldErrors.set({});
    this.examPdfApi
      .savePreparationOptions(pdf, this.selectedOptionIds())
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: () => {
          this.isSaving.set(false);
          this.isModalOpen.set(false);
          this.fetchPdfs(1);
        },
        error: (error) => {
          this.isSaving.set(false);
          this.errorMsg.set(
            error.error?.message ?? this.translations.translate('preparationFilters.saveError'),
          );
          this.fieldErrors.set(error.error?.errors ?? {});
        },
      });
  }
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
    concours_id: [null as number | null],
    document_type: [null as AdminExamPdf['document_type']],
    corrects_exam_pdf_id: [null as number | null],
    specialty: [''],
    source_url: [''],
    attribution: [''],
    download_allowed: [true],
    publish: [false],
    distribution_confirmed: [false],
  });

  ngOnInit(): void {
    this.fetchPdfs(1);
    this.loadReferences();
    this.destroy.onDestroy(() => {
      if (this.blobUrl) URL.revokeObjectURL(this.blobUrl);
    });
  }
  loadReferences(): void {
    this.referenceError.set(false);
    this.directory
      .references('concours', true)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (rows) => this.concours.set(rows),
        error: () => this.referenceError.set(true),
      });
    this.subjectApi
      .listAll()
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (rows) => this.subjects.set(rows),
        error: () => this.referenceError.set(true),
      });
    this.majorApi
      .listAll()
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (rows) => this.majors.set(rows),
        error: () => this.referenceError.set(true),
      });
  }

  fetchPdfs(page: number): void {
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.request?.unsubscribe();
    this.request = this.examPdfApi
      .list(page, this.search())
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (res) => {
          this.pdfs.set(res.data.items);
          this.meta.set(res.data.meta);
          this.isLoading.set(false);
        },
        error: () => {
          this.errorMsg.set(this.translations.translate('concoursPdfs.loadError'));
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

  openUploadModal(record?: AdminExamPdf): void {
    this.editing.set(record ?? null);
    this.selectedOptionIds.set(record?.preparation_option_ids ?? []);
    this.fieldErrors.set({});
    this.errorMsg.set(null);
    this.form.reset({
      title: record?.title ?? '',
      subject_id: record?.subject_id ?? null,
      major_id: record?.major_id ?? null,
      year: record?.year ?? null,
      questions_count: record?.questions_count ?? null,
      is_active: record?.is_active ?? true,
      concours_id: record?.concours_id ?? null,
      document_type: record?.document_type ?? null,
      corrects_exam_pdf_id: record?.corrects_exam_pdf_id ?? null,
      specialty: record?.specialty ?? '',
      source_url: record?.source_url ?? '',
      attribution: record?.attribution ?? '',
      download_allowed: record?.download_allowed ?? true,
      publish: false,
      distribution_confirmed: false,
    });
    this.selectedFile.set(null);
    this.isModalOpen.set(true);
    this.loadCandidates();
  }
  loadCandidates(): void {
    this.candidateRequest?.unsubscribe();
    this.candidates.set([]);
    const id = this.form.controls.concours_id.value;
    if (!id) return;
    this.candidateRequest = this.examPdfApi
      .candidates(id)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (rows) => this.candidates.set(rows.filter((row) => row.id !== this.editing()?.id)),
        error: () => this.errorMsg.set(this.translations.translate('concoursPdfs.loadError')),
      });
  }
  matchingCandidates(): AdminExamPdf[] {
    return this.candidates().filter((row) => row.year === this.form.controls.year.value);
  }
  errorEntries = () => Object.entries(this.fieldErrors());

  closeModal(): void {
    if (!this.isSaving()) this.isModalOpen.set(false);
  }

  onFileSelected(event: Event): void {
    const input = event.target as HTMLInputElement;
    this.selectedFile.set(input.files?.[0] ?? null);
  }

  upload(): void {
    if (this.isSaving()) return;
    const current = this.editing();
    const ids = (values: number[]) => JSON.stringify([...values].sort((a, b) => a - b));
    if (
      current &&
      this.form.pristine &&
      ids(this.selectedOptionIds()) !== ids(current.preparation_option_ids ?? [])
    ) {
      this.saveOptionAssignments();
      return;
    }
    if (this.form.invalid || (!this.editing() && !this.selectedFile())) {
      this.form.markAllAsTouched();
      if (!this.selectedFile()) {
        this.errorMsg.set(this.translations.translate('concoursPdfs.fileRequired'));
      }
      return;
    }

    this.isSaving.set(true);
    const raw = this.form.getRawValue();

    const formData = new FormData();
    formData.append('title', raw.title);
    formData.append('preparation_option_ids', JSON.stringify(this.selectedOptionIds()));
    if (raw.subject_id != null) formData.append('subject_id', String(raw.subject_id));
    if (raw.major_id != null) formData.append('major_id', String(raw.major_id));
    if (raw.year != null) formData.append('year', String(raw.year));
    if (raw.questions_count != null)
      formData.append('questions_count', String(raw.questions_count));
    formData.append('is_active', raw.is_active ? '1' : '0');
    if (this.selectedFile()) formData.append('file', this.selectedFile()!);
    for (const key of [
      'concours_id',
      'document_type',
      'corrects_exam_pdf_id',
      'specialty',
      'source_url',
      'attribution',
      'download_allowed',
      'publish',
      'distribution_confirmed',
    ] as const) {
      const value = raw[key];
      formData.append(
        key,
        value == null ? '' : typeof value === 'boolean' ? (value ? '1' : '0') : String(value),
      );
    }
    // Explicit nulls clear metadata, without replacing or moving the PDF.
    for (const key of ['subject_id', 'major_id', 'year', 'questions_count'] as const)
      if (raw[key] == null) formData.set(key, '');
    const existing = this.editing();
    if (existing) formData.set('version', String(existing.version));

    (existing ? this.examPdfApi.update(existing.id, formData) : this.examPdfApi.upload(formData))
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: () => {
          this.isSaving.set(false);
          this.isModalOpen.set(false);
          this.fetchPdfs(1);
        },
        error: (err) => {
          this.isSaving.set(false);
          this.errorMsg.set(
            err?.error?.message || this.translations.translate('concoursPdfs.saveError'),
          );
          this.fieldErrors.set(err?.error?.errors ?? {});
        },
      });
  }

  // The view_url from the backend requires the JWT bearer token, so a plain
  // link/window.open() would 401 — fetch it as a blob through HttpClient
  // (which the authInterceptor attaches the token to) and open that instead.
  viewPdf(pdf: AdminExamPdf): void {
    this.viewingId.set(pdf.id);
    this.errorMsg.set(null);

    const endpoint = `${environment.apiUrl}/admin/exam-pdfs/${pdf.id}/view`;
    this.httpClient.get(endpoint, { responseType: 'blob' }).subscribe({
      next: (blob) => {
        if (this.blobUrl) URL.revokeObjectURL(this.blobUrl);
        this.blobUrl = URL.createObjectURL(blob);
        window.open(this.blobUrl, '_blank', 'noopener,noreferrer');
        this.viewingId.set(null);
      },
      error: () => {
        this.errorMsg.set(this.translations.translate('concoursPdfs.viewError'));
        this.viewingId.set(null);
      },
    });
  }
}
