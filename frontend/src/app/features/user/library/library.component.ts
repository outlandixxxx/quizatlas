import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

import { ExamPdfApi } from '../services/exam-pdf.api';
import { ExamPdf } from '../../../core/models/exam-pdf';

@Component({
  selector: 'app-library',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './library.component.html',
  styleUrl: './library.component.scss'
})
export class LibraryComponent implements OnInit {
  private readonly examPdfApi = inject(ExamPdfApi);

  searchQuery = '';
  pdfList: ExamPdf[] = [];
  isLoading = false;
  private searchTimeout?: ReturnType<typeof setTimeout>;

  ngOnInit(): void {
    this.load();
  }

  load(): void {
    this.isLoading = true;
    this.examPdfApi.list({ search: this.searchQuery }).subscribe({
      next: (res) => {
        this.pdfList = res.data.items;
        this.isLoading = false;
      },
      error: () => { this.isLoading = false; }
    });
  }

  onSearchChange(): void {
    clearTimeout(this.searchTimeout);
    this.searchTimeout = setTimeout(() => this.load(), 350);
  }

  viewPdf(pdf: ExamPdf): void {
    window.open(pdf.view_url, '_blank', 'noopener');
  }
}