import { ChangeDetectorRef, Component, DestroyRef, OnDestroy, OnInit, inject } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { RouterLink } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { Subscription } from 'rxjs';
import {
  PublicMajor,
  PublicSubject,
  PublicPaginationMeta,
} from '../../../core/models/public-catalog';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import { AdSlotComponent } from '../../ad-slot/ad-slot.component';

const EMPTY_META: PublicPaginationMeta = { current_page: 1, last_page: 1, per_page: 6, total: 0 };
export interface MajorSection {
  major: PublicMajor;
  subjects: PublicSubject[];
  meta: PublicPaginationMeta;
  loading: boolean;
  error: boolean;
}

@Component({
  selector: 'app-majors-subjects-browser',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule, AdSlotComponent, RouterLink],
  templateUrl: './majors-subjects-browser.html',
  styleUrl: './majors-subjects-browser.scss',
})
export class MajorsSubjectsBrowser implements OnInit, OnDestroy {
  private readonly catalogApi = inject(PublicCatalogApi);
  private readonly cdr = inject(ChangeDetectorRef);
  private readonly destroyRef = inject(DestroyRef);
  private majorsRequest?: Subscription;
  private subjectsSearchRequest?: Subscription;
  private readonly subjectRequests = new Map<number, Subscription>();
  private majorsSearchTimeout?: ReturnType<typeof setTimeout>;
  private subjectsSearchTimeout?: ReturnType<typeof setTimeout>;

  sections: MajorSection[] = [];
  majorsMeta = { ...EMPTY_META };
  majorsSearch = '';
  subjectsSearch = '';
  majorsLoading = false;
  majorsError = false;
  subjectResults: PublicSubject[] = [];
  subjectsMeta = { ...EMPTY_META };
  subjectsLoading = false;
  subjectsError = false;

  get subjectResultGroups(): { id: number; name: string; subjects: PublicSubject[] }[] {
    const groups = new Map<number, { id: number; name: string; subjects: PublicSubject[] }>();
    for (const subject of this.subjectResults) {
      if (!groups.has(subject.major_id))
        groups.set(subject.major_id, {
          id: subject.major_id,
          name: subject.major_name ?? '',
          subjects: [],
        });
      groups.get(subject.major_id)!.subjects.push(subject);
    }
    return [...groups.values()];
  }

  ngOnInit(): void {
    this.loadMajors(1);
  }

  loadMajors(page: number): void {
    this.majorsRequest?.unsubscribe();
    this.subjectRequests.forEach((request) => request.unsubscribe());
    this.subjectRequests.clear();
    this.majorsLoading = true;
    this.majorsError = false;
    this.sections = [];
    this.majorsRequest = this.catalogApi
      .getMajors({ search: this.majorsSearch, page, per_page: this.majorsMeta.per_page })
      .pipe(takeUntilDestroyed(this.destroyRef))
      .subscribe({
        next: (res) => {
          this.majorsMeta = res.data.meta;
          this.sections = res.data.items.map((major) => ({
            major,
            subjects: [],
            meta: { ...EMPTY_META },
            loading: true,
            error: false,
          }));
          this.majorsLoading = false;
          this.sections.forEach((section) => this.loadSubjects(section, 1));
          this.cdr.markForCheck();
        },
        error: () => {
          this.majorsLoading = false;
          this.majorsError = true;
          this.cdr.markForCheck();
        },
      });
  }

  loadSubjects(section: MajorSection, page: number): void {
    if (page < 1 || page > section.meta.last_page) return;
    this.subjectRequests.get(section.major.id)?.unsubscribe();
    section.loading = true;
    section.error = false;
    const request = this.catalogApi
      .getSubjects({ major_id: section.major.id, page, per_page: section.meta.per_page })
      .pipe(takeUntilDestroyed(this.destroyRef))
      .subscribe({
        next: (res) => {
          section.subjects = res.data.items;
          section.meta = res.data.meta;
          section.loading = false;
          this.cdr.markForCheck();
        },
        error: () => {
          section.loading = false;
          section.error = true;
          this.cdr.markForCheck();
        },
      });
    this.subjectRequests.set(section.major.id, request);
  }

  onMajorsSearchChange(): void {
    this.subjectsSearch = '';
    clearTimeout(this.subjectsSearchTimeout);
    this.subjectsSearchRequest?.unsubscribe();
    clearTimeout(this.majorsSearchTimeout);
    this.majorsSearchTimeout = setTimeout(() => this.loadMajors(1), 350);
  }

  onSubjectsSearchChange(): void {
    clearTimeout(this.subjectsSearchTimeout);
    this.subjectsSearchRequest?.unsubscribe();
    this.subjectResults = [];
    this.subjectsLoading = !!this.subjectsSearch.trim();
    this.subjectsSearchTimeout = setTimeout(() => this.searchAllSubjects(1), 350);
  }

  searchAllSubjects(page: number): void {
    if (
      !this.subjectsSearch.trim() ||
      page < 1 ||
      (page !== 1 && page > this.subjectsMeta.last_page)
    )
      return;
    this.subjectsSearchRequest?.unsubscribe();
    this.subjectsLoading = true;
    this.subjectsError = false;
    this.subjectsSearchRequest = this.catalogApi
      .getSubjects({ search: this.subjectsSearch, page, per_page: this.subjectsMeta.per_page })
      .pipe(takeUntilDestroyed(this.destroyRef))
      .subscribe({
        next: (res) => {
          this.subjectResults = res.data.items;
          this.subjectsMeta = res.data.meta;
          this.subjectsLoading = false;
          this.cdr.markForCheck();
        },
        error: () => {
          this.subjectsLoading = false;
          this.subjectsError = true;
          this.cdr.markForCheck();
        },
      });
    this.cdr.markForCheck();
  }

  goToMajorsPage(page: number): void {
    if (page >= 1 && page <= this.majorsMeta.last_page) this.loadMajors(page);
  }

  ngOnDestroy(): void {
    clearTimeout(this.majorsSearchTimeout);
    clearTimeout(this.subjectsSearchTimeout);
  }
}
