import { Component, OnInit, inject, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule, TranslocoService } from '@jsverse/transloco';
import { TeacherShareApi } from '../../services/teacher-share.api';
import { OwnedQuiz, QuizShare } from '../../../../core/models/teacher';


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
  private readonly cdr = inject(ChangeDetectorRef);
  private readonly transloco = inject(TranslocoService);
  errorMsg = "";
  deletingQuizId: number | null = null;


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
      this.shares = res.data;
      this.isLoading = false;
      this.cdr.markForCheck();
    },
    error: () => { this.isLoading = false; this.errorMsg = 'teacher.dashboard.loadError'; this.cdr.markForCheck(); }
  });
}

  loadMyQuizzes(): void {
    this.teacherApi.myQuizzes().subscribe({
      next: (res) => { this.myQuizzes = res.data; this.cdr.markForCheck(); },
      error: () => { this.errorMsg = 'teacher.dashboard.loadError'; this.cdr.markForCheck(); }
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
      error: () => { this.isCreating = false; this.errorMsg = 'teacher.dashboard.shareError'; this.cdr.markForCheck(); }
    });
  }

  editQuiz(quiz: OwnedQuiz): void {
    this.router.navigate(['/app/teacher/quizzes', quiz.id, 'edit']);
  }

  buildQuestions(quiz: OwnedQuiz): void {
    this.router.navigate(['/app/teacher/quizzes', quiz.id, 'questions']);
  }

  deleteQuiz(quiz: OwnedQuiz): void {
    if (this.deletingQuizId || !window.confirm(this.transloco.translate('teacher.dashboard.deleteConfirm'))) return;
    this.deletingQuizId = quiz.id;
    this.teacherApi.deleteQuiz(quiz.id).subscribe({
      next: () => { this.deletingQuizId = null; this.loadMyQuizzes(); this.loadShares(); this.cdr.markForCheck(); },
      error: () => { this.deletingQuizId = null; this.errorMsg = 'teacher.dashboard.deleteError'; this.cdr.markForCheck(); }
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