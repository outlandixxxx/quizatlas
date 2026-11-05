import { Component, DestroyRef, OnInit, inject, signal } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Observable, Subscription, filter, firstValueFrom, tap } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import {
  DirectoryRecord,
  PreparationOption,
  orderedPreparationOptions,
  preparationOptionName,
} from '../../../core/models/concours';
import { CommonModule } from '@angular/common';
import { HttpClient, HttpEventType, HttpResponse } from '@angular/common/http';
import { FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';

import { AdminExamPdfApi } from '../services/exam-pdf-admin.api';
import { SubjectApi } from '../services/subject.api';
import { MajorApi } from '../services/major.api';
import { AdminExamPdf, AdminExamPdfListMeta, PdfAction, PdfBatchResult } from '../../../core/models/exam-pdf-admin';
import { ApiResponse } from '../../../core/models/api-response';
import { Subject } from '../../../core/models/subject';
import { Major } from '../../../core/models/major';
import { environment } from '../../../../environments/environment';

interface PdfUpload {
  id: number;
  file: File;
  title: string;
  state: 'pending' | 'uploading' | 'succeeded' | 'failed' | 'invalid';
  progress: number | null;
  error: string;
}

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
  private readonly route = inject(ActivatedRoute);
  private readonly translations = inject(TranslocoService);
  private request?: Subscription;
  private candidateRequest?: Subscription;
  private blobUrl?: string;
  private uploadId = 0;
  private disposed = false;
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
  readonly uploadQueue = signal<PdfUpload[]>([]);
  readonly selectedIds = signal<number[]>([]);
  readonly processing = signal(false);
  readonly results = signal<PdfBatchResult | null>(null);
  readonly confirmation = signal<{ action: PdfAction | 'delete'; documents: AdminExamPdf[]; bulk: boolean } | null>(null);
  readonly confirmationError = signal('');
  readonly reviewed = signal(false);
  readonly filters = signal<Record<string, string>>({});
  readonly viewingId = signal<number | null>(null); // which PDF is currently opening

  readonly form = this.fb.nonNullable.group({
    title: ['', [Validators.required, Validators.maxLength(255)]],
    subject_id: [null as number | null],
    major_id: [null as number | null],
    year: [null as number | null],
    is_active: [true],
    concours_id: [null as number | null],
    document_type: [null as AdminExamPdf['document_type']],
    corrects_exam_pdf_id: [null as number | null],
    specialty: [''],
    download_allowed: [true],
    publish: [false],
    distribution_confirmed: [false],
  });

  ngOnInit(): void {
    this.fetchPdfs(1);
    this.loadReferences();
    const concoursId = this.route.snapshot.queryParamMap.get('concours_id');
    const kind = this.route.snapshot.queryParamMap.get('document_type');
    if (concoursId && /^[1-9]\d*$/.test(concoursId) &&
        ['previous_exam', 'correction', 'summary', 'preparation_guide'].includes(kind ?? '')) {
      this.openUploadModal();
      this.form.controls.concours_id.setValue(Number(concoursId));
      this.form.controls.document_type.setValue(kind as AdminExamPdf['document_type']);
      this.loadCandidates();
    }
    this.destroy.onDestroy(() => {
      this.disposed = true;
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
    this.selectedIds.set([]);
    this.isLoading.set(true);
    this.errorMsg.set(null);

    this.request?.unsubscribe();
    this.request = this.examPdfApi
      .list(page, this.search(), this.filters())
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
    if (this.processing()) return;
    this.fetchPdfs(page);
  }

  setFilter(key: string, value: string): void {
    this.filters.update((filters) => ({ ...filters, [key]: value }));
    this.fetchPdfs(1);
  }

  can(pdf: AdminExamPdf, action: PdfAction | 'preview' | 'edit' | 'delete'): boolean {
    return pdf.allowed_actions?.includes(action) ?? ['edit', 'preview'].includes(action);
  }
  toggleSelection(id: number, checked: boolean): void {
    if (this.processing() || !this.pdfs().some((pdf) => pdf.id === id)) return;
    this.selectedIds.update((ids) => checked ? [...new Set([...ids, id])] : ids.filter((value) => value !== id));
  }
  selectPage(checked: boolean): void {
    if (!this.processing()) this.selectedIds.set(checked ? this.pdfs().map((pdf) => pdf.id) : []);
  }
  allSelected(): boolean {
    return this.pdfs().length > 0 && this.pdfs().every((pdf) => this.selectedIds().includes(pdf.id));
  }
  requestAction(action: PdfAction | 'delete', pdf?: AdminExamPdf): void {
    if (this.processing() || this.isSaving()) return;
    const documents = pdf ? [pdf] : this.pdfs().filter((item) => this.selectedIds().includes(item.id));
    if (!documents.length || (!pdf && ['delete', 'unpublish'].includes(action))) return;
    if (pdf && !this.can(pdf, action)) {
      this.errorMsg.set(pdf.delete_blocked_reason || this.translations.translate('pdfBank.actionUnavailable'));
      return;
    }
    this.reviewed.set(false);
    this.confirmationError.set('');
    this.confirmation.set({ action, documents, bulk: !pdf });
  }
  needsReview(): boolean {
    return ['verify', 'verify-publish'].includes(this.confirmation()?.action ?? '');
  }
  confirmAction(): void {
    const pending = this.confirmation();
    if (!pending || this.processing() || (this.needsReview() && !this.reviewed())) return;
    this.processing.set(true);
    this.confirmationError.set('');
    const { action, documents, bulk } = pending;
    const operation: Observable<ApiResponse<PdfBatchResult | { id: number } | { document: AdminExamPdf; skipped: boolean }>> = action === 'delete'
      ? this.examPdfApi.remove(documents[0])
      : bulk
        ? this.examPdfApi.batch(documents, action as Exclude<PdfAction, 'unpublish'>)
        : this.examPdfApi.transition(documents[0], action);
    operation.pipe(takeUntilDestroyed(this.destroy)).subscribe({
      next: (response) => {
        if (bulk) this.results.set(response.data as PdfBatchResult);
        else {
          const skipped = 'skipped' in response.data && response.data.skipped;
          this.results.set({ counts: { succeeded: skipped ? 0 : 1, skipped: skipped ? 1 : 0, failed: 0 },
            results: [{ id: documents[0].id, status: skipped ? 'skipped' : 'succeeded' }] });
        }
        this.processing.set(false);
        this.confirmation.set(null);
        this.fetchPdfs(this.meta()?.current_page ?? 1);
      },
      error: (error) => {
        this.processing.set(false);
        this.confirmationError.set(error.error?.message || this.translations.translate('concoursPdfs.saveError'));
      },
    });
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
      is_active: record?.is_active ?? true,
      concours_id: record?.concours_id ?? null,
      document_type: record?.document_type ?? null,
      corrects_exam_pdf_id: record?.corrects_exam_pdf_id ?? null,
      specialty: record?.specialty ?? '',
      download_allowed: record?.download_allowed ?? true,
      publish: false,
      distribution_confirmed: false,
    });
    if (record) this.form.controls.title.enable();
    else this.form.controls.title.disable();
    this.uploadQueue.set([]);
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
    if (this.isSaving()) return;
    const rows = [...this.uploadQueue()];
    let duplicate = false;
    for (const file of Array.from(input.files ?? [])) {
      if (rows.some((row) => row.file.name === file.name && row.file.size === file.size && row.file.lastModified === file.lastModified)) {
        duplicate = true;
        continue;
      }
      const invalid = file.size === 0 || file.size > 20 * 1024 * 1024 || !/\.pdf$/i.test(file.name) || (file.type && file.type !== 'application/pdf');
      rows.push({ id: ++this.uploadId, file, title: file.name.replace(/\.pdf$/i, '').slice(0, 255),
        state: invalid ? 'invalid' : 'pending', progress: null,
        error: invalid ? this.translations.translate('pdfBank.invalidFile') : '' });
    }
    this.uploadQueue.set(rows);
    this.errorMsg.set(duplicate ? this.translations.translate('pdfBank.duplicateFile') : null);
    input.value = '';
  }
  setUploadTitle(id: number, title: string): void {
    this.uploadQueue.update((rows) => rows.map((row) => row.id === id && !['uploading', 'succeeded'].includes(row.state) ? { ...row, title } : row));
  }
  removeUpload(id: number): void {
    if (!this.isSaving()) this.uploadQueue.update((rows) => rows.filter((row) => row.id !== id));
  }
  private updateUpload(id: number, values: Partial<PdfUpload>): void {
    this.uploadQueue.update((rows) => rows.map((row) => row.id === id ? { ...row, ...values } : row));
  }
  private async uploadFiles(): Promise<void> {
    const pending = this.uploadQueue().filter((row) => ['pending', 'failed'].includes(row.state));
    if (!pending.length) {
      this.errorMsg.set(this.translations.translate('concoursPdfs.fileRequired'));
      return;
    }
    this.isSaving.set(true);
    let saved = false;
    for (const row of pending) {
      if (this.disposed) break;
      if (!row.title.trim() || row.title.length > 255) {
        this.updateUpload(row.id, { state: 'failed', error: this.translations.translate('pdfBank.titleRequired') });
        continue;
      }
      const form = this.metadata();
      form.set('title', row.title.trim());
      form.set('publish', '0');
      form.set('distribution_confirmed', '0');
      form.set('file', row.file, row.file.name);
      this.updateUpload(row.id, { state: 'uploading', progress: null, error: '' });
      try {
        await firstValueFrom(this.examPdfApi.uploadWithProgress(form).pipe(
          takeUntilDestroyed(this.destroy),
          tap((event) => {
            if (event.type === HttpEventType.UploadProgress && event.total)
              this.updateUpload(row.id, { progress: Math.min(99, Math.round(event.loaded * 100 / event.total)) });
          }),
          filter((event): event is HttpResponse<ApiResponse<AdminExamPdf>> => event.type === HttpEventType.Response),
        ));
        saved = true;
        this.updateUpload(row.id, { state: 'succeeded', progress: 100 });
      } catch (error: any) {
        const details = Object.values(error.error?.errors ?? {}).flat().join(' ');
        this.updateUpload(row.id, { state: 'failed', progress: null, error: details || error.error?.message || this.translations.translate('concoursPdfs.saveError') });
      }
    }
    this.isSaving.set(false);
    if (saved && !this.disposed) this.fetchPdfs(1);
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
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      return;
    }

    if (!current) {
      void this.uploadFiles();
      return;
    }

    this.isSaving.set(true);
    this.examPdfApi.update(current.id, this.metadata())
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: () => {
          this.isSaving.set(false);
          this.isModalOpen.set(false);
          this.fetchPdfs(this.meta()?.current_page ?? 1);
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

  private metadata(): FormData {
    const form = new FormData();
    for (const [key, value] of Object.entries(this.form.getRawValue())) {
      form.set(key, value == null ? '' : typeof value === 'boolean' ? (value ? '1' : '0') : String(value));
    }
    form.set('preparation_option_ids', JSON.stringify(this.selectedOptionIds()));
    if (this.editing()) form.set('version', String(this.editing()!.version));
    // Omit hidden legacy metadata so the API retains its historical values.
    return form;
  }

  // The view_url from the backend requires the JWT bearer token, so a plain
  // link/window.open() would 401 — fetch it as a blob through HttpClient
  // (which the authInterceptor attaches the token to) and open that instead.
  viewPdf(pdf: AdminExamPdf): void {
    this.viewingId.set(pdf.id);
    this.errorMsg.set(null);

    const endpoint = `${environment.apiUrl}/admin/exam-pdfs/${pdf.id}/view`;
    this.httpClient.get(endpoint, { responseType: 'blob' }).pipe(takeUntilDestroyed(this.destroy)).subscribe({
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
