import { Component, DestroyRef, OnInit, inject } from '@angular/core';
import { takeUntilDestroyed } from '@angular/core/rxjs-interop';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';
import { Subscription } from 'rxjs';

import { ExamPdfApi } from '../services/exam-pdf.api';
import { ExamPdf, ExamPdfMeta } from '../../../core/models/exam-pdf';

@Component({
  selector: 'app-library',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './library.component.html',
  styleUrl: './library.component.scss',
})
export class LibraryComponent implements OnInit {
  private readonly examPdfApi = inject(ExamPdfApi);
  private readonly destroy = inject(DestroyRef);
  private pdfUrl?: string;
  private listRequest?: Subscription;
  viewingId: number | null = null;
  pdfError = false;

  constructor() {
    this.destroy.onDestroy(() => {
      clearTimeout(this.searchTimeout);
      if (this.pdfUrl) URL.revokeObjectURL(this.pdfUrl);
    });
  }

  searchQuery = '';
  pdfList: ExamPdf[] = [];
  meta: ExamPdfMeta | null = null;
  isLoading = false;
  private searchTimeout?: ReturnType<typeof setTimeout>;

  ngOnInit(): void {
    this.load();
  }

  load(page = 1): void {
    this.listRequest?.unsubscribe();
    this.isLoading = true;
    this.listRequest = this.examPdfApi
      .list({ search: this.searchQuery, page })
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (res) => {
          this.pdfList = res.data.items;
          this.meta = res.data.meta;
          this.isLoading = false;
        },
        error: () => {
          this.isLoading = false;
        },
      });
  }

  goToPage(page: number): void {
    if (this.isLoading || !this.meta || page < 1 || page > this.meta.last_page) return;
    clearTimeout(this.searchTimeout);
    this.load(page);
  }

  onSearchChange(): void {
    clearTimeout(this.searchTimeout);
    this.listRequest?.unsubscribe();
    this.isLoading = true;
    this.meta = null;
    this.searchTimeout = setTimeout(() => this.load(), 350);
  }

  viewPdf(pdf: ExamPdf): void {
    if (this.viewingId !== null) return;
    this.viewingId = pdf.id;
    this.pdfError = false;
    this.examPdfApi
      .view(pdf.id)
      .pipe(takeUntilDestroyed(this.destroy))
      .subscribe({
        next: (blob) => {
          if (this.pdfUrl) URL.revokeObjectURL(this.pdfUrl);
          this.pdfUrl = URL.createObjectURL(blob);
          window.open(this.pdfUrl, '_blank', 'noopener,noreferrer');
          this.viewingId = null;
        },
        error: () => {
          this.pdfError = true;
          this.viewingId = null;
        },
      });
  }
}
