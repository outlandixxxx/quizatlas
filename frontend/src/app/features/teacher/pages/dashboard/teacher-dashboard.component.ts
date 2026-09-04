import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { TeacherShareApi } from '../../services/teacher-share.api';
import { OwnedQuiz, QuizShare } from '../../../../core/models/teacher';
import { NgZone } from '@angular/core';


@Component({
  selector: 'app-teacher-dashboard',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './teacher-dashboard.component.html',
  styleUrl: './teacher-dashboard.component.scss',
})
export class TeacherDashboardComponent implements OnInit {
  private readonly teacherApi = inject(TeacherShareApi);
  private readonly router = inject(Router);
  private readonly ngZone = inject(NgZone);


  shares: QuizShare[] = [];
  myQuizzes: OwnedQuiz[] = [];
  isLoading = false;

  showCreateModal = false;
  selectedQuizId: number | null = null;
  shareTitle = '';
  isCreating = false;

  ngOnInit(): void {
    this.loadShares();
    this.loadMyQuizzes();
  }

loadShares(): void {
  this.isLoading = true;
  this.teacherApi.listShares().subscribe({
    next: (res) => {
  console.log('Inside Angular zone?', NgZone.isInAngularZone()); // <-- static call
      this.shares = res.data;
      this.isLoading = false;
    },
    error: () => { this.isLoading = false; }
  });
}

  loadMyQuizzes(): void {
    this.teacherApi.myQuizzes().subscribe({
      next: (res) => { this.myQuizzes = res.data; }
    });
  }

  openCreateModal(): void {
    this.showCreateModal = true;
    this.selectedQuizId = this.myQuizzes[0]?.id ?? null;
    this.shareTitle = '';
  }

  closeCreateModal(): void {
    this.showCreateModal = false;
  }

  createShare(): void {
    if (!this.selectedQuizId) return;

    this.isCreating = true;
    this.teacherApi.createShare({
      quiz_id: this.selectedQuizId,
      title: this.shareTitle || undefined,
    }).subscribe({
      next: () => {
        this.isCreating = false;
        this.closeCreateModal();
        this.loadShares();
      },
      error: () => { this.isCreating = false; }
    });
  }

  copyCode(code: string): void {
    navigator.clipboard?.writeText(code);
  }

  viewResults(share: QuizShare): void {
    this.router.navigate(['/app/teacher/shares', share.id, 'results']);
  }

  createNewQuiz(): void {
    this.router.navigate(['/app/teacher/quizzes/new']);
  }


  
}