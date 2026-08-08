import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';

import { PublicMajor, PublicSubject, PublicPaginationMeta } from '../../../core/models/public-catalog';
import { PublicCatalogApi } from '../../../core/services/public-catalog-api';
import { AdSlotComponent } from '../../ad-slot/ad-slot.component';

const EMPTY_META: PublicPaginationMeta = { current_page: 1, last_page: 1, per_page: 5, total: 0 };

@Component({
  selector: 'app-majors-subjects-browser',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule, AdSlotComponent],
  templateUrl: './majors-subjects-browser.html',
  styleUrl: './majors-subjects-browser.scss',
})
export class MajorsSubjectsBrowser implements OnInit {
  private readonly catalogApi = inject(PublicCatalogApi);
  private readonly router = inject(Router);

  majors: PublicMajor[] = [];
  majorsMeta: PublicPaginationMeta = { ...EMPTY_META };
  majorsSearch = '';
  majorsLoading = false;
  private majorsSearchTimeout?: ReturnType<typeof setTimeout>;

  subjects: PublicSubject[] = [];
  subjectsMeta: PublicPaginationMeta = { ...EMPTY_META };
  subjectsSearch = '';
  subjectsLoading = false;
  private subjectsSearchTimeout?: ReturnType<typeof setTimeout>;

  ngOnInit(): void {
    this.loadMajors(1);
    this.loadSubjects(1);
  }

  loadMajors(page: number): void {
    this.majorsLoading = true;
    this.catalogApi.getMajors({ search: this.majorsSearch, page, per_page: this.majorsMeta.per_page }).subscribe({
      next: (res) => {
        this.majors = res.data.items;
        this.majorsMeta = res.data.meta;
        this.majorsLoading = false;
      },
      error: () => { this.majorsLoading = false; },
    });
  }

  loadSubjects(page: number): void {
    this.subjectsLoading = true;
    this.catalogApi.getSubjects({ search: this.subjectsSearch, page, per_page: this.subjectsMeta.per_page }).subscribe({
      next: (res) => {
        this.subjects = res.data.items;
        this.subjectsMeta = res.data.meta;
        this.subjectsLoading = false;
      },
      error: () => { this.subjectsLoading = false; },
    });
  }

  onMajorsSearchChange(): void {
    clearTimeout(this.majorsSearchTimeout);
    this.majorsSearchTimeout = setTimeout(() => this.loadMajors(1), 350);
  }

  onSubjectsSearchChange(): void {
    clearTimeout(this.subjectsSearchTimeout);
    this.subjectsSearchTimeout = setTimeout(() => this.loadSubjects(1), 350);
  }

  goToMajorsPage(page: number): void {
    if (page < 1 || page > this.majorsMeta.last_page) return;
    this.loadMajors(page);
  }

  goToSubjectsPage(page: number): void {
    if (page < 1 || page > this.subjectsMeta.last_page) return;
    this.loadSubjects(page);
  }

  selectMajor(major: PublicMajor): void {
    this.router.navigate(['/trial/major', major.slug]);
  }

  selectSubject(subject: PublicSubject): void {
    this.router.navigate(['/trial/subject', subject.slug]);
  }
}