import { Component, DestroyRef, ElementRef, ViewChild, inject, signal } from '@angular/core';
import { FormBuilder, FormsModule, ReactiveFormsModule, Validators } from '@angular/forms';
import { ActivatedRoute } from '@angular/router';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { TranslocoPipe, TranslocoService } from '@jsverse/transloco';
import { Subscription, finalize, forkJoin } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import { ConcoursQcmEditor } from './concours-qcm-editor';
import {
  ConcoursType,
  DirectoryKind,
  DirectoryPage,
  DirectoryRecord,
  sessionYearPreview,
  ExamFormat,
  PreparationOption,
} from '../../../core/models/concours';

@Component({
  standalone: true,
  imports: [FormsModule, ReactiveFormsModule, TranslocoPipe, ConcoursQcmEditor],
  templateUrl: './concours-directory.html',
  styleUrl: './concours-directory.scss',
})
export class AdminConcoursDirectory {
  private readonly api = inject(ConcoursApi);
  private readonly fb = inject(FormBuilder);
  private readonly route = inject(ActivatedRoute);
  private readonly destroy = inject(DestroyRef);
  private readonly translations = inject(TranslocoService);
  readonly preparationOptions = signal<PreparationOption[]>([]);
  readonly editingOptionId = signal<number | undefined>(undefined);
  readonly optionSaving = signal(false);
  readonly optionError = signal('');
  readonly optionForm = this.fb.nonNullable.group({
    name_fr: ['', [Validators.required, Validators.maxLength(255)]],
    name_en: ['', Validators.maxLength(255)],
    name_ar: ['', Validators.maxLength(255)],
    parent_id: [null as number | null],
    display_order: [
      0,
      [Validators.required, Validators.min(0), Validators.max(100000), Validators.pattern(/^\d+$/)],
    ],
    is_active: [true],
  });
  private listRequest?: Subscription;
  @ViewChild('editor', { static: true }) editor!: ElementRef<HTMLDialogElement>;
  @ViewChild(ConcoursQcmEditor) qcmEditor?: ConcoursQcmEditor;
  @ViewChild('confirmation', { static: true }) confirmation!: ElementRef<HTMLDialogElement>;
  readonly kind = signal<DirectoryKind>('concours');
  readonly data = signal<DirectoryPage | null>(null);
  readonly categories = signal<DirectoryRecord[]>([]);
  readonly institutions = signal<DirectoryRecord[]>([]);
  readonly loading = signal(false);
  readonly saving = signal(false);
  readonly deleting = signal(false);
  readonly error = signal('');
  readonly formError = signal('');
  readonly fieldErrors = signal<Record<string, string[]>>({});
  readonly success = signal('');
  readonly referencesError = signal(false);
  readonly editingId = signal<number | undefined>(undefined);
  readonly deleteTarget = signal<DirectoryRecord | null>(null);
  readonly formats: ExamFormat[] = ['qcm', 'written', 'oral', 'practical'];
  readonly types: ConcoursType[] = ['recruitment', 'admission', 'examination'];
  readonly labels = {
    categories: 'Concours Categories',
    institutions: 'Official Institutions',
    concours: 'Concours',
  };
  search = '';
  active = '';
  type = '';
  readonly form = this.fb.nonNullable.group({
    slug: [
      '',
      [
        Validators.required,
        Validators.maxLength(160),
        Validators.pattern(/^[a-z0-9]+(?:-[a-z0-9]+)*$/),
      ],
    ],
    name_fr: ['', [Validators.required, Validators.maxLength(255)]],
    name_ar: ['', [Validators.required, Validators.maxLength(255)]],
    description_fr: ['', Validators.maxLength(20000)],
    description_ar: ['', Validators.maxLength(20000)],
    website_url: ['', [Validators.maxLength(2048), Validators.pattern(/^https?:\/\/[^\s]+$/)]],
    parent_id: [null as number | null],
    category_id: [null as number | null],
    institution_id: [null as number | null],
    type: ['recruitment' as ConcoursType, Validators.required],
    exam_formats: [[] as ExamFormat[]],
    display_order: [
      0,
      [Validators.required, Validators.min(0), Validators.max(100000), Validators.pattern(/^\d+$/)],
    ],
    is_active: [false],
    session_year: [
      null as number | null,
      [Validators.min(1990), Validators.max(2100), Validators.pattern(/^\d+$/)],
    ],
    session_policy: ['manual' as 'manual' | 'annual'],
    session_rollover_on: [''],
    session_year_override: [
      null as number | null,
      [Validators.min(1990), Validators.max(2100), Validators.pattern(/^\d+$/)],
    ],
  });

  constructor() {
    this.route.data.pipe(takeUntilDestroyed(this.destroy)).subscribe((data) => {
      this.kind.set(data['directoryKind'] as DirectoryKind);
      this.form.controls.category_id.setValidators(
        this.kind() === 'concours' ? [Validators.required] : [],
      );
      this.form.controls.category_id.updateValueAndValidity();
      this.fetch();
      this.loadReferences();
    });
  }

  fetch(page = 1): void {
    this.listRequest?.unsubscribe();
    this.loading.set(true);
    this.error.set('');
    this.listRequest = this.api
      .list(
        this.kind(),
        {
          q: this.search,
          page,
          per_page: 15,
          is_active: this.active,
          type: this.kind() === 'concours' ? this.type : '',
        },
        true,
      )
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.loading.set(false)),
      )
      .subscribe({
        next: (response) => this.data.set(response.data),
        error: () => {
          this.data.set(null);
          this.error.set('Unable to load records. Please retry.');
        },
      });
  }

  loadReferences(): void {
    this.referencesError.set(false);
    forkJoin({
      categories: this.api.references('categories', true),
      institutions: this.api.references('institutions', true),
    })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (values) => {
          this.categories.set(values.categories);
          this.institutions.set(values.institutions);
        },
        error: () => this.referencesError.set(true),
      });
  }

  open(record?: DirectoryRecord): void {
    this.editingId.set(record?.id);
    this.preparationOptions.set(record?.preparation_options ?? []);
    this.editOption();
    this.formError.set('');
    this.fieldErrors.set({});
    this.success.set('');
    this.form.reset({
      slug: record?.slug ?? '',
      name_fr: record?.name_fr ?? '',
      name_ar: record?.name_ar ?? '',
      description_fr: record?.description_fr ?? '',
      description_ar: record?.description_ar ?? '',
      website_url: record?.website_url ?? '',
      parent_id: record?.parent_id ?? null,
      category_id: record?.category_id ?? null,
      institution_id: record?.institution_id ?? null,
      type: record?.type ?? 'recruitment',
      exam_formats: record?.exam_formats ?? [],
      display_order: record?.display_order ?? 0,
      is_active: record?.is_active ?? false,
      session_year: record?.session_year ?? null,
      session_policy: record?.session_policy ?? 'manual',
      session_rollover_on: record?.session_rollover_on ?? '',
      session_year_override: record?.session_year_override ?? null,
    });
    this.editor.nativeElement.showModal();
  }

  sessionPreview(): number | null {
    const today = new Intl.DateTimeFormat('en-CA', {
      timeZone: 'Africa/Casablanca',
      year: 'numeric',
      month: '2-digit',
      day: '2-digit',
    }).format(new Date());
    return sessionYearPreview(this.form.getRawValue(), today);
  }

  close(): void {
    if (!this.saving() && !this.optionSaving() && !this.qcmEditor?.saving())
      this.editor.nativeElement.close();
  }
  cancelEditor(event: Event): void {
    if (this.saving() || this.optionSaving() || this.qcmEditor?.saving()) event.preventDefault();
  }
  cancelDelete(event: Event): void {
    if (this.deleting()) event.preventDefault();
  }
  errorEntries(): [string, string[]][] {
    return Object.entries(this.fieldErrors());
  }

  setFormat(format: ExamFormat, checked: boolean): void {
    const values = this.form.controls.exam_formats.value;
    this.form.controls.exam_formats.setValue(
      checked ? [...new Set([...values, format])] : values.filter((value) => value !== format),
    );
  }

  save(): void {
    if (this.saving() || this.optionSaving() || this.qcmEditor?.saving()) return;
    if (this.form.invalid) {
      this.form.markAllAsTouched();
      this.formError.set('Complete the required fields and correct the highlighted values.');
      return;
    }
    const raw = this.form.getRawValue();
    const common = {
      slug: raw.slug.trim(),
      name_fr: raw.name_fr.trim(),
      name_ar: raw.name_ar.trim(),
      is_active: raw.is_active,
    };
    const editorial = {
      description_fr: raw.description_fr.trim() || null,
      description_ar: raw.description_ar.trim() || null,
      display_order: raw.display_order,
    };
    const payload =
      this.kind() === 'institutions'
        ? { ...common, website_url: raw.website_url.trim() || null }
        : this.kind() === 'categories'
          ? { ...common, ...editorial, parent_id: raw.parent_id }
          : {
              ...common,
              ...editorial,
              category_id: raw.category_id,
              institution_id: raw.institution_id,
              type: raw.type,
              exam_formats: raw.exam_formats,
              session_year: raw.session_year,
              session_policy: raw.session_policy,
              session_rollover_on: raw.session_rollover_on || null,
              session_year_override: raw.session_year_override,
            };
    this.saving.set(true);
    this.formError.set('');
    this.fieldErrors.set({});
    this.api
      .save(this.kind(), payload, this.editingId())
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: () => {
          this.editor.nativeElement.close();
          this.success.set('Record saved successfully.');
          this.fetch();
          this.loadReferences();
        },
        error: (failure) => {
          this.formError.set(failure.error?.message ?? 'Unable to save this record.');
          this.fieldErrors.set(failure.error?.errors ?? {});
        },
      });
  }

  confirmDelete(record: DirectoryRecord): void {
    this.deleteTarget.set(record);
    this.error.set('');
    this.confirmation.nativeElement.showModal();
  }

  remove(): void {
    const record = this.deleteTarget();
    if (!record || this.deleting()) return;
    this.deleting.set(true);
    this.api
      .delete(this.kind(), record.id)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.deleting.set(false)),
      )
      .subscribe({
        next: () => {
          this.confirmation.nativeElement.close();
          this.deleteTarget.set(null);
          this.success.set('Record deleted successfully.');
          this.fetch();
          this.loadReferences();
        },
        error: (failure) => {
          this.confirmation.nativeElement.close();
          this.error.set(failure.error?.message ?? 'Unable to delete this record.');
        },
      });
  }

  closeConfirmation(): void {
    if (!this.deleting()) this.confirmation.nativeElement.close();
  }

  editOption(option?: PreparationOption): void {
    this.editingOptionId.set(option?.id);
    this.optionError.set('');
    this.optionForm.reset({
      name_fr: option?.name_fr ?? '',
      name_en: option?.name_en ?? '',
      name_ar: option?.name_ar ?? '',
      parent_id: option?.parent_id ?? null,
      display_order: option?.display_order ?? 0,
      is_active: option?.is_active ?? true,
    });
  }
  optionParents(): PreparationOption[] {
    if (this.preparationOptions().some((option) => option.parent_id === this.editingOptionId()))
      return [];
    return this.preparationOptions().filter(
      (option) => option.parent_id === null && option.id !== this.editingOptionId(),
    );
  }
  saveOption(): void {
    const concoursId = this.editingId();
    if (!concoursId || this.optionSaving() || this.saving()) return;
    if (this.optionForm.invalid) {
      this.optionForm.markAllAsTouched();
      return;
    }
    this.optionSaving.set(true);
    this.optionError.set('');
    const raw = this.optionForm.getRawValue();
    this.api
      .savePreparationOption(
        concoursId,
        {
          ...raw,
          name_fr: raw.name_fr.trim(),
          name_en: raw.name_en.trim() || null,
          name_ar: raw.name_ar.trim() || null,
        },
        this.editingOptionId(),
      )
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.optionSaving.set(false)),
      )
      .subscribe({
        next: (response) => {
          this.preparationOptions.set(response.data);
          this.editOption();
          this.fetch();
        },
        error: (error) =>
          this.optionError.set(
            Object.values(error.error?.errors ?? {})
              .flat()
              .join(' ') ||
              error.error?.message ||
              this.translations.translate('preparationFilters.saveError'),
          ),
      });
  }
}
