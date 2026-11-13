import { CommonModule } from '@angular/common';
import { Component, OnInit, computed, inject, signal } from '@angular/core';
import { RouterLink } from '@angular/router';

import { MajorApi } from '../services/major.api';
import {
  FactApi,
  FactImportItem,
  FactImportResult,
  FactItem,
  FactStat,
  FactStatusFilter,
} from '../services/fact.api';

import { Major } from '../../../core/models/major';

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
  private readonly factApi = inject(FactApi);

  readonly editing = signal<FactItem | null>(null);
  readonly creating = signal(false);
  readonly editMajorId = signal<number | null>(null);
  readonly editFr = signal('');
  readonly editEn = signal('');
  readonly editAr = signal('');
  readonly editSource = signal('');

  readonly monthlyNeed = MONTHLY_NEED;

  readonly majors = signal<Major[]>([]);
  readonly stats = signal<FactStat[]>([]);

  // Import
  readonly importMajorId = signal<number | null>(null);
  readonly importText = signal('');
  readonly isImporting = signal(false);
  readonly importResult = signal<FactImportResult | null>(null);

  // List
  readonly filterMajorId = signal<number | null>(null);
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
    this.majorApi.listAll().subscribe({
      next: majors => this.majors.set(majors),
      error: () => this.errorMsg.set('Failed to load Majors.'),
    });

    this.loadStats();
    this.loadFacts();
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

    this.factApi.import(items, this.importMajorId()).subscribe({
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

  editFact(fact: FactItem): void {
    this.creating.set(false);
    this.editing.set(fact); this.editMajorId.set(fact.major_id);
    this.editFr.set(fact.text_fr); this.editEn.set(fact.text_en);
    this.editAr.set(fact.text_ar); this.editSource.set(fact.source_url ?? '');
  }

  newFact(): void {
    this.editing.set(null); this.creating.set(true); this.editMajorId.set(null);
    this.editFr.set(''); this.editEn.set(''); this.editAr.set(''); this.editSource.set('');
  }

  saveFact(): void {
    const fact = this.editing();
    if ((!fact && !this.creating()) || this.busyId() !== null || !this.editMajorId()) return;
    this.busyId.set(fact?.id ?? 0); this.errorMsg.set(null);
    const payload = { major_id: this.editMajorId()!, text_fr: this.editFr(),
      text_en: this.editEn(), text_ar: this.editAr(), source_url: this.editSource().trim() || null };
    (fact ? this.factApi.update(fact.id, payload) : this.factApi.create(payload)).subscribe({
      next: ({ data }) => {
        this.facts.update(list => list.map(item => item.id === data.id ? data : item));
        this.busyId.set(null); this.editing.set(null); this.creating.set(false); this.loadStats(); this.loadFacts();
      },
      error: error => { this.busyId.set(null); this.errorMsg.set(this.firstValidationError(error) ?? 'Failed to save this fact.'); },
    });
  }

  private firstValidationError(error: unknown): string | null {
    const body = (error as { error?: { errors?: Record<string, string[]>; message?: string } })?.error;
    const first = body?.errors ? Object.values(body.errors)[0]?.[0] : null;

    return first ?? body?.message ?? null;
  }
}
