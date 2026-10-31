import { Component, DestroyRef, ElementRef, ViewChild, inject, signal } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { JsonPipe } from '@angular/common';
import { FormBuilder, FormsModule, ReactiveFormsModule, Validators } from '@angular/forms';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { EMPTY, Subscription, expand, reduce, finalize, forkJoin, of, switchMap } from 'rxjs';
import { ConcoursApi } from '../../../core/services/concours-api';
import { ConcoursAnnouncementsApi } from '../../../core/services/concours-announcements-api';
import { DirectoryRecord } from '../../../core/models/concours';
import {
  AnnouncementPage,
  AnnouncementRevision,
  ConcoursAnnouncement,
} from '../../../core/models/concours-announcement';

@Component({
  standalone: true,
  imports: [FormsModule, ReactiveFormsModule, JsonPipe],
  templateUrl: './concours-announcements.html',
  styleUrl: './concours-announcements.scss',
})
export class AdminConcoursAnnouncements {
  private readonly route = inject(ActivatedRoute);
  private readonly api = inject(ConcoursAnnouncementsApi);
  private readonly directory = inject(ConcoursApi);
  private readonly fb = inject(FormBuilder);
  private readonly destroy = inject(DestroyRef);
  private request?: Subscription;
  private revisionRequest?: Subscription;
  private replacementRequest?: Subscription;
  private generatedTitles = { fr: '', ar: '' };
  private previewUrl?: string;
  @ViewChild('editor', { static: true }) editor!: ElementRef<HTMLDialogElement>;
  @ViewChild('confirmation', { static: true }) confirmation!: ElementRef<HTMLDialogElement>;
  @ViewChild('pdfFile') pdfFile?: ElementRef<HTMLInputElement>;
  readonly data = signal<AnnouncementPage | null>(null);
  readonly categories = signal<DirectoryRecord[]>([]);
  readonly concours = signal<DirectoryRecord[]>([]);
  readonly institutions = signal<DirectoryRecord[]>([]);
  readonly selected = signal<ConcoursAnnouncement | null>(null);
  readonly replacementCandidates = signal<ConcoursAnnouncement[]>([]);
  readonly replacementError = signal(false);
  readonly selectedFile = signal<File | null>(null);
  readonly revisions = signal<AnnouncementRevision[]>([]);
  readonly revisionMeta = signal<AnnouncementPage['meta'] | null>(null);
  readonly revisionError = signal(false);
  readonly referencesError = signal(false);
  readonly loading = signal(false);
  readonly saving = signal(false);
  readonly previewing = signal(false);
  readonly error = signal('');
  readonly formError = signal('');
  readonly fieldErrors = signal<Record<string, string[]>>({});
  readonly success = signal('');
  readonly pendingAction = signal<'archive' | 'withdraw' | null>(null);
  readonly publicationStates = ['draft', 'published', 'archived', 'withdrawn'];
  search = '';
  category = '';
  concoursFilter = '';
  publication = '';
  registration = '';
  sourceChecked = false;
  readonly form = this.fb.group({
    preparation_option_ids: [[] as number[]],
    concours_id: [null as number | null, Validators.required],
    institution_id: [null as number | null],
    title_fr: ['', Validators.maxLength(255)],
    title_ar: ['', Validators.maxLength(255)],
    replaces_announcement_id: [null as number | null],
    official_publication_date: [''],
    examination_date: [''],
    session_year: [null as number | null, [Validators.min(1990), Validators.max(2100)]],
    registration_opens_on: [''],
    registration_deadline: [''],
    application_url: ['', [Validators.maxLength(2048), Validators.pattern(/^https?:\/\/[^\s]+$/)]],
    official_source_url: [
      '',
      [Validators.maxLength(2048), Validators.pattern(/^https?:\/\/[^\s]+$/)],
    ],
    slug: ['', [Validators.maxLength(160), Validators.pattern(/^[a-z0-9]+(?:-[a-z0-9]+)*$/)]],
    official_decision: [null as 'postponed' | 'cancelled' | null],
  });
  constructor() {
    this.form.valueChanges
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe(() => (this.sourceChecked = false));
    this.destroy.onDestroy(() => {
      if (this.previewUrl) URL.revokeObjectURL(this.previewUrl);
    });
    this.fetch();
    this.loadReferences();
  }
  ngAfterViewInit() {
    const id = this.route.snapshot.queryParamMap.get('announcement');
    if (id && /^[1-9]\d*$/.test(id))
      this.api
        .adminShow(Number(id))
        .pipe(takeUntilDestroyed(this.destroy))
        .subscribe({
          next: (response) => this.open(response.data),
          error: () => this.error.set('Unable to open the announcement. Reload the list.'),
        });
  }
  fetch(page = 1) {
    this.request?.unsubscribe();
    this.loading.set(true);
    this.error.set('');
    this.request = this.api
      .list(
        {
          q: this.search,
          category_id: this.category,
          concours_id: this.concoursFilter,
          publication_status: this.publication,
          registration_status: this.registration,
          page,
          per_page: 15,
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
          this.error.set('Unable to load announcements. Please retry.');
        },
      });
  }
  loadReferences() {
    this.referencesError.set(false);
    forkJoin({
      categories: this.directory.references('categories', true),
      concours: this.directory.references('concours', true),
      institutions: this.directory.references('institutions', true),
    })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (data) => {
          this.categories.set(data.categories);
          this.concours.set(data.concours);
          this.institutions.set(data.institutions);
        },
        error: () => this.referencesError.set(true),
      });
  }
  selectedConcours() {
    return this.concours().find((item) => item.id === this.form.controls.concours_id.value);
  }
  selectConcours() {
    const record = this.selectedConcours();
    this.form.controls.preparation_option_ids.setValue([]);
    this.form.controls.institution_id.setValue(record?.institution_id ?? null);
    if (!this.selected())
      this.form.controls.session_year.setValue(record?.displayed_session_year ?? null);
    this.form.controls.replaces_announcement_id.setValue(null);
    this.loadReplacementCandidates();
    this.generateTitle();
  }
  loadReplacementCandidates() {
    this.replacementRequest?.unsubscribe();
    this.replacementCandidates.set([]);
    this.replacementError.set(false);
    const id = this.form.controls.concours_id.value;
    if (!id) return;
    this.replacementRequest = this.api
      .list({ concours_id: id, per_page: 100 }, true)
      .pipe(
        expand((response) =>
          response.data.meta.current_page < response.data.meta.last_page
            ? this.api.list(
                { concours_id: id, per_page: 100, page: response.data.meta.current_page + 1 },
                true,
              )
            : EMPTY,
        ),
        reduce(
          (items, response) => [...items, ...response.data.items],
          [] as ConcoursAnnouncement[],
        ),
        takeUntilDestroyed(this.destroy),
      )
      .subscribe({
        next: (items) =>
          this.replacementCandidates.set(
            items.filter(
              (item) =>
                item.id !== this.selected()?.id &&
                item.verification_status === 'verified' &&
                ['published', 'archived'].includes(item.publication_status) &&
                !item.superseded_at,
            ),
          ),
        error: () => this.replacementError.set(true),
      });
  }
  publicPreview() {
    const values = this.form.getRawValue();
    const displayedYear = this.selectedConcours()?.displayed_session_year;
    const today = new Intl.DateTimeFormat('en-CA', {
      timeZone: 'Africa/Casablanca',
      year: 'numeric',
      month: '2-digit',
      day: '2-digit',
    }).format(new Date());
    const status =
      values.official_decision ||
      (values.examination_date && values.examination_date < today
        ? 'completed'
        : values.registration_deadline && values.registration_deadline < today
          ? 'registration closed'
          : values.registration_opens_on && values.registration_opens_on > today
            ? 'before registration'
            : values.registration_opens_on && values.registration_deadline
              ? 'registration open'
              : 'published — registration dates unconfirmed');
    return {
      status,
      matches: displayedYear != null && values.session_year === displayedYear,
      displayedYear,
    };
  }
  generateTitle() {
    const record = this.selectedConcours();
    if (!record) return;
    const suffix = this.form.controls.session_year.value
      ? ` — ${this.form.controls.session_year.value}`
      : '';
    for (const lang of ['fr', 'ar'] as const) {
      const control = this.form.controls[`title_${lang}`];
      if (!control.value || control.value === this.generatedTitles[lang]) {
        this.generatedTitles[lang] = record[`name_${lang}`].slice(0, 255 - suffix.length) + suffix;
        control.setValue(this.generatedTitles[lang]);
      }
    }
  }
  open(record?: ConcoursAnnouncement) {
    this.selected.set(record ?? null);
    this.form.reset({ preparation_option_ids: [] });
    this.formError.set('');
    this.fieldErrors.set({});
    this.selectedFile.set(null);
    if (this.pdfFile) this.pdfFile.nativeElement.value = '';
    this.sourceChecked = false;
    this.generatedTitles = { fr: '', ar: '' };
    this.revisions.set([]);
    this.revisionMeta.set(null);
    this.revisionRequest?.unsubscribe();
    if (record) {
      this.fill(record);
      this.loadRevisions();
      this.loadReplacementCandidates();
    }
    this.editor.nativeElement.showModal();
  }
  private fill(record: ConcoursAnnouncement) {
    this.form.patchValue(record);
    this.form.markAsPristine();
  }
  onFile(event: Event) {
    const input = event.target as HTMLInputElement;
    const file = input.files?.[0] ?? null;
    this.sourceChecked = false;
    if (
      file &&
      (file.size > 20 * 1024 * 1024 ||
        !/\.pdf$/i.test(file.name) ||
        (file.type && file.type !== 'application/pdf'))
    ) {
      this.selectedFile.set(null);
      input.value = '';
      this.formError.set('Choose a PDF file up to 20 MiB.');
      return;
    }
    this.formError.set('');
    this.selectedFile.set(file);
  }
  save(publish = false) {
    if (this.saving() || this.selected()?.publication_status === 'published') return;
    this.form.markAllAsTouched();
    if (this.form.invalid) {
      this.formError.set('Check the concours, dates, optional title and URLs.');
      return;
    }
    if (
      !this.selectedFile() &&
      !this.selected()?.official_pdf &&
      !this.form.controls.official_source_url.value
    ) {
      this.formError.set(
        'Provide the official source URL or upload the official announcement PDF.',
      );
      return;
    }
    if (publish && !this.sourceChecked) {
      this.formError.set(
        'Confirm the official source and verified metadata; confirm distribution permission when uploading a PDF.',
      );
      return;
    }
    const checked = this.sourceChecked;
    const payload: Record<string, unknown> = Object.fromEntries(
      Object.entries(this.form.getRawValue()).map(([key, value]) => [
        key,
        value === '' ? null : value,
      ]),
    );
    if (!payload['slug']) delete payload['slug'];
    if (this.selected()) payload['version'] = this.selected()!.version;
    let body: object = payload;
    const file = this.selectedFile();
    if (file) {
      const form = new FormData();
      for (const [key, value] of Object.entries(payload)) {
        if (Array.isArray(value)) {
          if (!value.length) form.append(key, '');
          value.forEach((item) => form.append(`${key}[]`, String(item)));
        } else form.append(key, value == null ? '' : String(value));
      }
      form.append('file', file);
      body = form;
    }
    this.saving.set(true);
    this.formError.set('');
    this.fieldErrors.set({});
    this.api
      .save(body, this.selected()?.id)
      .pipe(
        switchMap((response) => {
          // Save succeeded even if the separate publication request later fails.
          this.selected.set(response.data);
          this.fill(response.data);
          this.selectedFile.set(null);
          if (this.pdfFile) this.pdfFile.nativeElement.value = '';
          return publish
            ? this.api.transition(response.data, 'verify-publish', checked)
            : of(response);
        }),
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (response) => {
          this.selected.set(response.data);
          this.fill(response.data);
          this.sourceChecked = false;
          this.success.set(
            publish
              ? 'Official announcement verified and published.'
              : 'Draft saved. You can publish it after verifying the official source and metadata.',
          );
          this.loadRevisions();
          this.fetch(this.data()?.meta.current_page);
        },
        error: (error) => {
          this.showError(error);
          this.loadRevisions();
          this.fetch(this.data()?.meta.current_page);
        },
      });
  }
  confirm(action: 'archive' | 'withdraw') {
    this.pendingAction.set(action);
    this.confirmation.nativeElement.showModal();
  }
  act() {
    const record = this.selected();
    const action = this.pendingAction();
    if (!record || !action || this.saving()) return;
    this.saving.set(true);
    this.formError.set('');
    this.fieldErrors.set({});
    this.api
      .transition(record, action)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (response) => {
          this.selected.set(response.data);
          this.fill(response.data);
          this.confirmation.nativeElement.close();
          this.pendingAction.set(null);
          this.success.set('Announcement status updated.');
          this.loadRevisions();
          this.fetch(this.data()?.meta.current_page);
        },
        error: (error) => {
          this.confirmation.nativeElement.close();
          this.showError(error);
        },
      });
  }
  previewPdf() {
    const file = this.selectedFile();
    if (file) {
      this.openPdf(new Blob([file], { type: 'application/pdf' }));
      return;
    }
    const id = this.selected()?.id;
    if (!id || this.previewing()) return;
    this.previewing.set(true);
    this.api
      .previewPdf(id)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.previewing.set(false)),
      )
      .subscribe({
        next: (blob) => this.openPdf(blob),
        error: () =>
          this.formError.set('The PDF is unavailable. Please select a replacement file.'),
      });
  }
  private openPdf(blob: Blob) {
    if (this.previewUrl) URL.revokeObjectURL(this.previewUrl);
    this.previewUrl = URL.createObjectURL(blob);
    window.open(this.previewUrl, '_blank', 'noopener,noreferrer');
  }
  reloadEditor() {
    const id = this.selected()?.id;
    if (!id || this.saving()) return;
    this.saving.set(true);
    this.api
      .adminShow(id)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (response) => {
          this.selected.set(response.data);
          this.fill(response.data);
          this.selectedFile.set(null);
          if (this.pdfFile) this.pdfFile.nativeElement.value = '';
          this.formError.set('');
          this.fieldErrors.set({});
          this.loadRevisions();
        },
        error: (error) => this.showError(error),
      });
  }
  loadRevisions(page = 1) {
    const id = this.selected()?.id;
    if (!id) return;
    this.revisionRequest?.unsubscribe();
    this.revisionError.set(false);
    this.revisionRequest = this.api
      .revisions(id, page)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (response) => {
          this.revisions.set(response.data.items);
          this.revisionMeta.set(response.data.meta);
        },
        error: () => this.revisionError.set(true),
      });
  }
  private showError(error: {
    status?: number;
    error?: { message?: string; errors?: Record<string, string[]> };
  }) {
    this.formError.set(
      error.status === 409
        ? 'Another administrator changed this announcement. Reload before continuing. Your current form has been kept.'
        : (error.error?.message ?? 'Unable to save or publish. Check the fields and retry.'),
    );
    this.fieldErrors.set(error.error?.errors ?? {});
  }
  errorEntries = () => Object.entries(this.fieldErrors());
  changeEntries = (revision: AnnouncementRevision) => Object.entries(revision.changes);
  close() {
    if (!this.saving()) this.editor.nativeElement.close();
  }
  cancel(event: Event) {
    if (this.saving()) event.preventDefault();
  }
}
