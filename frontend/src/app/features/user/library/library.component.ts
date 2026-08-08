import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { TranslocoModule } from '@jsverse/transloco';

export interface ExamPdf {
  id: string;
  title: string;
  subject: string;
  year: number;
  fileSize: string;
  pageCount: number;
  downloadUrl: string;
  questionsCount: number;
}

@Component({
  selector: 'app-library',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './library.component.html',
  styleUrl: './library.component.scss'
})
export class LibraryComponent {
  searchQuery = '';
  selectedSubject = 'All';

  subjects = ['All', 'Computer Science', 'Mathematics', 'Physics', 'General Knowledge'];

  pdfList: ExamPdf[] = [
    { id: '1', title: '2025 Final Web Development Exam', subject: 'Computer Science', year: 2025, fileSize: '2.4 MB', pageCount: 12, downloadUrl: '#', questionsCount: 40 },
    { id: '2', title: 'Data Structures & Algorithms Mock Paper', subject: 'Computer Science', year: 2024, fileSize: '1.8 MB', pageCount: 8, downloadUrl: '#', questionsCount: 30 },
    { id: '3', title: 'Linear Algebra & Matrices Test', subject: 'Mathematics', year: 2024, fileSize: '3.1 MB', pageCount: 15, downloadUrl: '#', questionsCount: 25 },
    { id: '4', title: 'Quantum Mechanics Fundamentals', subject: 'Physics', year: 2023, fileSize: '4.0 MB', pageCount: 18, downloadUrl: '#', questionsCount: 35 }
  ];
}