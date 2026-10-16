import { CommonModule } from '@angular/common';
import { Component, OnInit, computed, inject, signal } from '@angular/core';
import { RouterLink } from '@angular/router';

import { MajorApi } from '../services/major.api';
import { SubjectApi } from '../services/subject.api';
import {
  FactApi,
  FactImportItem,
  FactImportResult,
  FactItem,
  FactStat,
  FactStatusFilter,
} from '../services/fact.api';

import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';

/** Facts needed for one month of the plan: 12 fact videos x 30 + 28 fact shorts. */
const MONTHLY_NEED = 12 * 30 + 28;

@Component({
  selector: 'app-admin-facts',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './facts.html',
  styleUrl: './facts.scss',
})
export class AdminFacts implements OnInit {
  private readonly majorApi = inject(MajorApi);
  private readonly subjectApi = inject(SubjectApi);
  private readonly factApi = inject(FactApi);

  readonly monthlyNeed = MONTHLY_NEED;

  readonly majors = signal<Major[]>([]);
  readonly subjects = signal<Subject[]>([]);
  readonly stats = signal<FactStat[]>([]);

  // Import
  readonly importMajorId = signal<number | null>(null);
  readonly importSubjectId = signal<number | null>(null);
  readonly importText = signal('');
  readonly isImporting = signal(false);
  readonly importResult = signal<FactImportResult | null>(null);

  // List
  readonly filterMajorId = signal<number | null>(null);
  readonly filterSubjectId = signal<number | null>(null);
  readonly filterStatus = signal<FactStatusFilter>('unverified');
  readonly search = signal('');
  readonly page = signal(1);
  readonly lastPage = signal(1);
  readonly total = signal(0);
  readonly facts = signal<FactItem[]>([]);
  readonly selectedIds = signal<number[]>([]);

  readonly isLoading = signal(false);
  readonly busyId = signal<number | null>(null);
  readonly isBulkUpdating = signal(false);

  readonly errorMsg = signal<string | null>(null);
  readonly successMsg = signal<string | null>(null);

  readonly importSubjects = computed(() =>
    this.subjectsOf(this.importMajorId())
  );

  readonly filterSubjects = computed(() =>
    this.subjectsOf(this.filterMajorId())
  );

  readonly totals = computed(() =>
    this.stats().reduce(
      (sum, row) => ({
        total: sum.total + row.total,
        verified: sum.verified + row.verified,
        available: sum.available + row.available,
      }),
      { total: 0, verified: 0, available: 0 }
    )
  );

  readonly allOnPageSelected = computed(() => {
    const ids = this.facts().map(fact => fact.id);

    return ids.length > 0 && ids.every(id => this.selectedIds().includes(id));
  });

  ngOnInit(): void {
    this.majorApi.list().subscribe({
      next: response => this.majors.set(response.data),
      error: () => this.errorMsg.set('Failed to load Majors.'),
    });

    this.subjectApi.list().subscribe({
      next: response => this.subjects.set(response.data),
      error: () => this.errorMsg.set('Failed to load Subjects.'),
    });

    this.loadStats();
    this.loadFacts();
  }

  private subjectsOf(majorId: number | null): Subject[] {
    if (majorId === null) {
      return [];
    }

    return this.subjects().filter(
      subject => subject.major?.id === majorId && subject.is_active
    );
  }

  // ---------------------------------------------------------------------
  // Stats
  // ---------------------------------------------------------------------

  loadStats(): void {
    this.factApi.stats().subscribe({
      next: response => this.stats.set(response.data),
      error: () => this.errorMsg.set('Failed to load fact stats.'),
    });
  }

  // ---------------------------------------------------------------------
  // Import
  // ---------------------------------------------------------------------

  onImportMajorChange(value: string): void {
    this.importMajorId.set(value ? Number(value) : null);
    this.importSubjectId.set(null);
  }

  onImportSubjectChange(value: string): void {
    this.importSubjectId.set(value ? Number(value) : null);
  }

  onImportTextChange(value: string): void {
    this.importText.set(value);
  }

  importFacts(): void {
    const items = this.parseImport(this.importText());

    if (!items) {
      return;
    }

    this.isImporting.set(true);
    this.errorMsg.set(null);
    this.successMsg.set(null);
    this.importResult.set(null);

    this.factApi.import(items, this.importSubjectId()).subscribe({
      next: response => {
        this.isImporting.set(false);
        this.importResult.set(response.data);

        if (response.data.created > 0) {
          this.importText.set('');
          this.successMsg.set(
            `${response.data.created} fact(s) imported. Review and verify them below before they can be used.`
          );
        }

        this.filterStatus.set('unverified');
        this.page.set(1);
        this.loadStats();
        this.loadFacts();
      },
      error: error => {
        this.isImporting.set(false);
        this.errorMsg.set(
          this.firstValidationError(error) ?? 'Failed to import facts.'
        );
      },
    });
  }

  /** Accepts either an array of facts or {"facts": [...]}. */
  private parseImport(text: string): FactImportItem[] | null {
    if (!text.trim()) {
      this.errorMsg.set('Paste the facts JSON first.');
      return null;
    }

    let parsed: unknown;

    try {
      parsed = JSON.parse(text);
    } catch {
      this.errorMsg.set('This is not valid JSON. Check commas and quotes.');
      return null;
    }

    const list = Array.isArray(parsed)
      ? parsed
      : (parsed as { facts?: unknown })?.facts;

    if (!Array.isArray(list) || list.length === 0) {
      this.errorMsg.set('The JSON must be a list of facts, or {"facts": [...]}.');
      return null;
    }

    return list as FactImportItem[];
  }

  // ---------------------------------------------------------------------
  // List and filters
  // ---------------------------------------------------------------------

  onFilterMajorChange(value: string): void {
    this.filterMajorId.set(value ? Number(value) : null);
    this.filterSubjectId.set(null);
    this.reloadFromFirstPage();
  }

  onFilterSubjectChange(value: string): void {
    this.filterSubjectId.set(value ? Number(value) : null);
    this.reloadFromFirstPage();
  }

  onFilterStatusChange(value: string): void {
    this.filterStatus.set(
      value === 'verified' || value === 'unverified' ? value : 'all'
    );
    this.reloadFromFirstPage();
  }

  onSearchChange(value: string): void {
    this.search.set(value);
  }

  reloadFromFirstPage(): void {
    this.page.set(1);
    this.loadFacts();
  }

  goToPage(page: number): void {
    if (page < 1 || page > this.lastPage()) {
      return;
    }

    this.page.set(page);
    this.loadFacts();
  }

  loadFacts(): void {
    this.isLoading.set(true);
    this.selectedIds.set([]);

    this.factApi.list({
      major_id: this.filterMajorId(),
      subject_id: this.filterSubjectId(),
      status: this.filterStatus(),
      search: this.search(),
      page: this.page(),
      per_page: 25,
    }).subscribe({
      next: response => {
        this.facts.set(response.data);
        this.lastPage.set(response.last_page || 1);
        this.total.set(response.total);
        this.isLoading.set(false);
      },
      error: () => {
        this.isLoading.set(false);
        this.errorMsg.set('Failed to load facts.');
      },
    });
  }

  // ---------------------------------------------------------------------
  // Verify, delete
  // ---------------------------------------------------------------------

  toggleSelected(id: number, checked: boolean): void {
    this.selectedIds.update(ids =>
      checked
        ? (ids.includes(id) ? ids : [...ids, id])
        : ids.filter(item => item !== id)
    );
  }

  toggleSelectAll(checked: boolean): void {
    this.selectedIds.set(checked ? this.facts().map(fact => fact.id) : []);
  }

  setVerified(fact: FactItem, verified: boolean): void {
    this.busyId.set(fact.id);
    this.errorMsg.set(null);

    this.factApi.update(fact.id, { is_verified: verified }).subscribe({
      next: response => {
        this.busyId.set(null);
        this.facts.update(list =>
          list.map(item => (item.id === fact.id ? response.data : item))
        );
        this.loadStats();
      },
      error: () => {
        this.busyId.set(null);
        this.errorMsg.set('Failed to update this fact.');
      },
    });
  }

  verifySelected(verified: boolean): void {
    const ids = this.selectedIds();

    if (!ids.length) {
      return;
    }

    this.isBulkUpdating.set(true);
    this.errorMsg.set(null);
    this.successMsg.set(null);

    this.factApi.verify(ids, verified).subscribe({
      next: response => {
        this.isBulkUpdating.set(false);
        this.successMsg.set(
          `${response.data.updated} fact(s) ${verified ? 'verified' : 'marked as not verified'}.`
        );
        this.loadStats();
        this.loadFacts();
      },
      error: () => {
        this.isBulkUpdating.set(false);
        this.errorMsg.set('Failed to update the selected facts.');
      },
    });
  }

  deleteFact(fact: FactItem): void {
    if (!confirm('Delete this fact? It will no longer be used in videos.')) {
      return;
    }

    this.busyId.set(fact.id);
    this.errorMsg.set(null);

    this.factApi.remove(fact.id).subscribe({
      next: () => {
        this.busyId.set(null);
        this.loadStats();
        this.loadFacts();
      },
      error: () => {
        this.busyId.set(null);
        this.errorMsg.set('Failed to delete this fact.');
      },
    });
  }

  private firstValidationError(error: unknown): string | null {
    const body = (error as { error?: { errors?: Record<string, string[]>; message?: string } })?.error;
    const first = body?.errors ? Object.values(body.errors)[0]?.[0] : null;

    return first ?? body?.message ?? null;
  }
}
