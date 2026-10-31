import { TranslocoPipe } from '@jsverse/transloco';
import { Component, DestroyRef, ElementRef, ViewChild, inject, signal } from '@angular/core';
import { JsonPipe } from '@angular/common';
import { FormsModule, FormBuilder, ReactiveFormsModule, Validators } from '@angular/forms';
import { RouterLink } from '@angular/router';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { Observable, Subscription, finalize, forkJoin } from 'rxjs';
import { ConcoursDiscoveryApi } from '../../../core/services/concours-discovery-api';
import { ConcoursApi } from '../../../core/services/concours-api';
import {
  AnnouncementSource,
  ConcoursDiscovery,
  DiscoveryPage,
  DiscoveryRevision,
  DiscoveryMatch,
} from '../../../core/models/concours-discovery';
import { DirectoryRecord } from '../../../core/models/concours';

@Component({
  standalone: true,
  imports: [TranslocoPipe, FormsModule, ReactiveFormsModule, RouterLink, JsonPipe],
  templateUrl: './concours-discoveries.html',
  styleUrl: './concours-discoveries.scss',
})
export class AdminConcoursDiscoveries {
  private readonly api = inject(ConcoursDiscoveryApi);
  private readonly directory = inject(ConcoursApi);
  private readonly fb = inject(FormBuilder);
  private readonly destroy = inject(DestroyRef);
  private request?: Subscription;
  private historyRequest?: Subscription;
  private matchesRequest?: Subscription;
  @ViewChild('reviewDialog', { static: true }) reviewDialog!: ElementRef<HTMLDialogElement>;
  @ViewChild('manualDialog', { static: true }) manualDialog!: ElementRef<HTMLDialogElement>;
  @ViewChild('sourceDialog', { static: true }) sourceDialog!: ElementRef<HTMLDialogElement>;
  readonly sources = signal<AnnouncementSource[]>([]);
  readonly concours = signal<DirectoryRecord[]>([]);
  readonly institutions = signal<DirectoryRecord[]>([]);
  readonly data = signal<DiscoveryPage | null>(null);
  readonly selected = signal<ConcoursDiscovery | null>(null);
  readonly selectedSource = signal<AnnouncementSource | null>(null);
  readonly history = signal<DiscoveryPage<DiscoveryRevision> | null>(null);
  readonly historyError = signal(false);
  readonly referencesError = signal(false);
  readonly error = signal('');
  readonly formError = signal('');
  readonly success = signal('');
  readonly saving = signal(false);
  readonly loading = signal(false);
  readonly matches = signal<DiscoveryMatch[]>([]);
  readonly matchesError = signal(false);
  duplicateNote = '';
  filters: {
    q: string;
    institution: string;
    source_id: string;
    candidate_category: string;
    candidate_type: string;
    status: string;
    from: string;
    to: string;
    deadline_from?: string;
    deadline_to?: string;
  } = {
    q: '',
    institution: '',
    source_id: '',
    candidate_category: '',
    candidate_type: '',
    status: 'pending',
    from: '',
    to: '',
    deadline_from: '',
    deadline_to: '',
  };
  readonly reviewForm = this.fb.group({
    concours_id: [null as number | null, Validators.required],
    institution_id: [null as number | null],
    preparation_option_ids: [[] as number[]],
    session_year: [null as number | null, [Validators.min(1990), Validators.max(2100)]],
    title_language: ['fr'],
    verified_title: ['', Validators.maxLength(255)],
    verified_title_ar: ['', Validators.maxLength(255)],
    verified_positions: [null as number | null, [Validators.min(1), Validators.max(1000000)]],
    official_publication_date: [''],
    registration_deadline: [''],
    source_checked: [false, Validators.requiredTrue],
    review_note: ['', Validators.maxLength(1000)],
    official_url: ['', Validators.maxLength(2048)],
    official_identifier: [''],
    candidate_category: ['unknown'],
    candidate_type: ['unknown'],
    verified_institution: [''],
    verified_round: [''],
    verified_grade: [''],
    verified_specialty: [''],
    verified_session_year: [null as number | null],
    verified_deadline: [''],
  });
  readonly manualForm = this.fb.group({
    source_id: [null as number | null, Validators.required],
    title: ['', [Validators.required, Validators.maxLength(255)]],
    official_url: ['', [Validators.required, Validators.maxLength(2048)]],
    source_identifier: [''],
    publication_date: [''],
    application_deadline: [''],
    institution: [''],
    session_year: [null as number | null],
    grade: [''],
    specialty: [''],
  });
  readonly sourceForm = this.fb.group({
    key: ['', Validators.required],
    name: ['', Validators.required],
    official_url: ['', Validators.required],
    listing_url: ['', Validators.required],
    collection_method: ['manual'],
    source_kind: ['official'],
    enabled: [false],
    permission_status: ['unknown'],
    permission_evidence: [''],
    permission_checked_at: [''],
    check_interval_minutes: [720, [Validators.required, Validators.min(60), Validators.max(10080)]],
  });
  constructor() {
    for (const [name, control] of Object.entries(this.reviewForm.controls)) {
      if (name !== 'source_checked') {
        const changes: Observable<unknown> = control.valueChanges;
        changes
          .pipe(takeUntilDestroyed(this.destroy))
          .subscribe(() =>
            this.reviewForm.controls.source_checked.setValue(false, { emitEvent: false }),
          );
      }
    }
    this.fetch();
    this.loadReferences();
  }
  fetch(page = 1) {
    this.request?.unsubscribe();
    this.loading.set(true);
    this.error.set('');
    this.request = this.api
      .list({ ...this.filters, page, per_page: 15 })
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.loading.set(false)),
      )
      .subscribe({
        next: (r) => this.data.set(r.data),
        error: () => {
          this.data.set(null);
          this.error.set('Chargement impossible. Réessayez.');
        },
      });
  }
  loadReferences() {
    this.referencesError.set(false);
    forkJoin({
      sources: this.api.sources(),
      concours: this.directory.references('concours', true),
      institutions: this.directory.references('institutions', true),
    })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (r) => {
          this.sources.set(r.sources.data);
          this.concours.set(r.concours);
          this.institutions.set(r.institutions);
        },
        error: () => this.referencesError.set(true),
      });
  }
  chosenConcours() {
    return this.concours().find((c) => c.id === this.reviewForm.controls.concours_id.value);
  }
  changeConcours() {
    this.reviewForm.patchValue({
      institution_id: this.chosenConcours()?.institution_id ?? null,
      preparation_option_ids: [],
      source_checked: false,
    });
  }
  open(record: ConcoursDiscovery) {
    this.selected.set(record);
    this.formError.set('');
    this.history.set(null);
    this.reviewForm.reset({
      concours_id: null,
      institution_id: null,
      preparation_option_ids: [],
      session_year: record.session_year,
      title_language: 'fr',
      verified_title: '',
      verified_title_ar: '',
      verified_positions: null,
      source_checked: false,
      official_publication_date: '',
      registration_deadline: '',
      review_note: '',
      official_url: record.official_url ?? '',
      official_identifier: record.official_identifier ?? '',
      candidate_category: record.candidate_category ?? 'unknown',
      candidate_type: record.candidate_type ?? 'unknown',
      verified_institution: String(record.verified_identity?.['institution'] ?? ''),
      verified_round: String(record.verified_identity?.['round'] ?? ''),
      verified_grade: String(record.verified_identity?.['grade'] ?? ''),
      verified_specialty: String(record.verified_identity?.['specialty'] ?? ''),
      verified_session_year:
        record.verified_identity?.['session_year'] == null
          ? null
          : Number(record.verified_identity['session_year']),
      verified_deadline: String(record.verified_identity?.['deadline'] ?? ''),
    });
    this.duplicateNote = '';
    this.loadHistory();
    this.loadMatches();
    this.reviewDialog.nativeElement.showModal();
  }
  reloadSelected() {
    const record = this.selected();
    if (!record || this.saving()) return;
    this.api
      .show(record.id)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (r) => {
          this.selected.set(r.data);
          this.reviewForm.controls.source_checked.setValue(false);
          this.formError.set('Version rechargée. Vérifiez les changements avant de continuer.');
          this.loadHistory();
          this.loadMatches();
        },
        error: (e) => this.showError(e),
      });
  }
  loadHistory(page = 1) {
    const id = this.selected()?.id;
    if (!id) return;
    this.historyRequest?.unsubscribe();
    this.historyError.set(false);
    this.historyRequest = this.api
      .revisions(id, page)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (r) => this.history.set(r.data),
        error: () => {
          this.history.set(null);
          this.historyError.set(true);
        },
      });
  }
  loadMatches() {
    const id = this.selected()?.id;
    if (!id) return;
    this.matchesRequest?.unsubscribe();
    this.matches.set([]);
    this.matchesError.set(false);
    this.matchesRequest = this.api
      .matches(id)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (r) => this.matches.set(r.data),
        error: () => this.matchesError.set(true),
      });
  }
  verifyOfficial() {
    const record = this.selected();
    const raw = this.reviewForm.getRawValue();
    if (!record || this.saving()) return;
    if (!raw.source_checked || !raw.official_url?.trim()) {
      this.formError.set('Ouvrez et vérifiez l’annonce officielle, puis confirmez la source.');
      return;
    }
    this.saving.set(true);
    this.api
      .review(record, {
        action: 'verify_source',
        source_checked: true,
        official_url: raw.official_url,
        official_identifier: raw.official_identifier || null,
        candidate_category: raw.candidate_category,
        candidate_type: raw.candidate_type,
        verified_identity: {
          institution: raw.verified_institution || null,
          round: raw.verified_round || null,
          grade: raw.verified_grade || null,
          specialty: raw.verified_specialty || null,
          session_year: raw.verified_session_year ?? null,
          deadline: raw.verified_deadline || null,
        },
      })
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (r) => {
          this.selected.set(r.data);
          this.reviewForm.controls.source_checked.setValue(false);
          this.formError.set('');
          this.success.set(
            'Source officielle vérifiée. Examinez les doublons avant de créer le brouillon.',
          );
          this.loadHistory();
          this.loadMatches();
          this.fetch();
        },
        error: (e) => this.showError(e),
      });
  }
  decideMatch(match: DiscoveryMatch, decision: 'confirmed' | 'rejected') {
    const record = this.selected();
    if (!record || this.saving()) return;
    if (!this.duplicateNote.trim() || !this.reviewForm.controls.source_checked.value) {
      this.formError.set(
        'Vérifiez les deux sources officielles, confirmez la source et ajoutez une note sur le rapprochement.',
      );
      return;
    }
    this.saving.set(true);
    this.api
      .decideMatch(record, match.discovery, decision, this.duplicateNote.trim())
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (r) => {
          this.selected.set(r.data);
          this.duplicateNote = '';
          this.reviewForm.controls.source_checked.setValue(false);
          this.formError.set('');
          this.loadHistory();
          this.loadMatches();
          this.fetch();
        },
        error: (e) => this.showError(e),
      });
  }
  review(action: 'approve' | 'reject' | 'acknowledge') {
    const record = this.selected();
    if (!record || this.saving() || record.status !== 'pending') return;
    const raw = this.reviewForm.getRawValue();
    if (
      action === 'approve' &&
      record.metadata_scope === 'facts_only' &&
      !raw.verified_title?.trim() &&
      !raw.verified_title_ar?.trim()
    ) {
      this.formError.set(
        'Saisissez le titre vérifié dans l’annonce officielle. Le libellé RSS est technique.',
      );
      return;
    }
    if (action === 'approve' && this.officialProofDirty()) {
      this.formError.set('Enregistrez d’abord la vérification officielle modifiée.');
      return;
    }
    if (
      (action !== 'reject' && !raw.source_checked) ||
      (action === 'approve' && this.reviewForm.invalid) ||
      (action !== 'approve' && !raw.review_note?.trim())
    ) {
      this.formError.set(
        'Confirmez la source. Pour créer un brouillon, choisissez le concours et vérifiez les champs. Pour rejeter ou confirmer une révision, ajoutez une note.',
      );
      return;
    }
    const payload =
      action === 'approve'
        ? {
            ...raw,
            action,
            verified_title_fr: raw.verified_title || null,
            verified_title_ar: raw.verified_title_ar || null,
            positions: raw.verified_positions,
            session_year: raw.session_year ?? null,
            preparation_option_ids: raw.preparation_option_ids ?? [],
            official_publication_date: raw.official_publication_date || null,
            registration_deadline: raw.registration_deadline || null,
          }
        : {
            action,
            ...(action === 'reject' ? {} : { source_checked: true }),
            review_note: raw.review_note,
          };
    this.saving.set(true);
    this.formError.set('');
    this.api
      .review(record, payload)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: (r) => {
          this.selected.set(r.data);
          this.success.set(
            action === 'approve'
              ? 'Annonce liée. Ouvrez-la pour vérifier son état et son contenu avant publication.'
              : 'Décision enregistrée.',
          );
          this.loadHistory();
          this.loadMatches();
          this.fetch();
        },
        error: (e) => this.showError(e),
      });
  }
  officialProofDirty() {
    const record = this.selected();
    if (!record) return false;
    const raw = this.reviewForm.getRawValue();
    const text = (value: unknown) => String(value ?? '').trim();
    if (
      text(raw.official_url) !== text(record.official_url) ||
      text(raw.official_identifier) !== text(record.official_identifier) ||
      raw.candidate_category !== (record.candidate_category ?? 'unknown') ||
      raw.candidate_type !== (record.candidate_type ?? 'unknown')
    )
      return true;
    return Object.entries({
      institution: raw.verified_institution,
      round: raw.verified_round,
      grade: raw.verified_grade,
      specialty: raw.verified_specialty,
      session_year: raw.verified_session_year,
      deadline: raw.verified_deadline,
    }).some(([key, value]) => text(value) !== text(record.verified_identity?.[key]));
  }
  openManual() {
    this.manualForm.reset();
    this.formError.set('');
    this.manualDialog.nativeElement.showModal();
  }
  addManual() {
    if (this.saving() || this.manualForm.invalid) return;
    this.saving.set(true);
    this.formError.set('');
    const payload = Object.fromEntries(
      Object.entries(this.manualForm.getRawValue()).map(([k, v]) => [k, v === '' ? null : v]),
    );
    if (this.sources().find((s) => s.id === payload['source_id'])?.source_kind === 'third_party') {
      payload['source_article_url'] = payload['official_url'];
      delete payload['official_url'];
    }
    this.api
      .add(payload)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: () => {
          this.manualDialog.nativeElement.close();
          this.success.set('Lien ajouté à la liste des annonces à examiner.');
          this.filters.status = 'pending';
          this.fetch();
        },
        error: (e) => this.showError(e),
      });
  }
  openSource(source?: AnnouncementSource) {
    this.selectedSource.set(source ?? null);
    this.formError.set('');
    this.sourceForm.reset({
      key: '',
      name: '',
      official_url: '',
      listing_url: '',
      collection_method: 'manual',
      source_kind: 'official',
      enabled: false,
      permission_status: 'unknown',
      permission_evidence: '',
      permission_checked_at: '',
      check_interval_minutes: 720,
    });
    if (source)
      this.sourceForm.patchValue({
        ...source,
        permission_evidence: source.permission_evidence ?? '',
        permission_checked_at: source.permission_checked_at?.slice(0, 10) ?? '',
      });
    this.sourceDialog.nativeElement.showModal();
  }
  saveSource() {
    if (this.saving() || this.sourceForm.invalid) return;
    this.saving.set(true);
    this.formError.set('');
    const payload = {
      ...this.sourceForm.getRawValue(),
      permission_checked_at: this.sourceForm.controls.permission_checked_at.value || null,
      ...(this.selectedSource() ? { version: this.selectedSource()!.version } : {}),
    };
    this.api
      .saveSource(payload, this.selectedSource()?.id)
      .pipe(
        takeUntilDestroyed(this.destroy),
        finalize(() => this.saving.set(false)),
      )
      .subscribe({
        next: () => {
          this.sourceDialog.nativeElement.close();
          this.loadReferences();
          this.success.set('Source enregistrée.');
        },
        error: (e) => this.showError(e),
      });
  }
  private showError(e: {
    status?: number;
    error?: { message?: string; errors?: Record<string, string[]> };
  }) {
    this.formError.set(
      e.status === 409
        ? 'Cette version a changé. Rechargez avant de continuer.'
        : Object.values(e.error?.errors ?? {})
            .flat()
            .join(' ') ||
            e.error?.message ||
            'Enregistrement impossible. Vérifiez les champs.',
    );
  }
  close(dialog: HTMLDialogElement) {
    if (!this.saving()) dialog.close();
  }
  cancel(event: Event) {
    if (this.saving()) event.preventDefault();
  }
}
