import { Component, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { QuizJoinApi } from '../../services/quiz-join.api';

@Component({
  selector: 'app-quiz-join',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './quiz-join.component.html',
  styleUrl: './quiz-join.component.scss',
})
export class QuizJoinComponent {
  private readonly joinApi = inject(QuizJoinApi);
  private readonly router = inject(Router);

  joinCode = '';
  isJoining = false;
  errorMsg = '';

  join(): void {
    if (!this.joinCode.trim()) return;

    this.isJoining = true;
    this.errorMsg = '';

    this.joinApi.join(this.joinCode.trim()).subscribe({
      next: (res) => {
        this.isJoining = false;
        this.router.navigate(['/app/quiz', res.data.quiz_id]);
      },
      error: () => {
        this.isJoining = false;
        this.errorMsg = 'joinQuiz.error';
      }
    });
  }
}