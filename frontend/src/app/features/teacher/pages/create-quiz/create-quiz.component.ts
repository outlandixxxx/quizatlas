import { Component, OnInit, inject } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { TeacherShareApi } from '../../services/teacher-share.api';
import { CreateQuizPayload } from '../../../../core/models/teacher-quiz';
import { PracticeApi } from '../../../user/services/practice.api';

@Component({
  selector: 'app-create-quiz',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './create-quiz.component.html',
  styleUrl: './create-quiz.component.scss',
})
export class CreateQuizComponent implements OnInit {
  private readonly teacherApi = inject(TeacherShareApi);
  private readonly practiceApi = inject(PracticeApi);
  private readonly router = inject(Router);

  form: CreateQuizPayload = {
    subject_id: 0,
    title: '',
    description: '',
    duration: 20,
    passing_score: 50,
    is_active: true,
  };

  subjects: { id: number; name: string }[] = [];
  isSaving = false;
  isLoadingSubjects = false;
  errorMsg = '';

  ngOnInit(): void {
    this.isLoadingSubjects = true;
    this.practiceApi.getSubjectsWithQuizzes().subscribe({
      next: (res) => {
        this.subjects = res.data;
        this.isLoadingSubjects = false;
      },
      error: () => {
        this.errorMsg = 'teacher.createQuiz.loadSubjectsError';
        this.isLoadingSubjects = false;
      }
    });
  }

  save(): void {
    if (!this.form.subject_id || !this.form.title || !this.form.duration || this.form.passing_score == null) {
      this.errorMsg = 'teacher.createQuiz.validationError';
      return;
    }

    this.isSaving = true;
    this.errorMsg = '';

    this.teacherApi.createQuiz(this.form).subscribe({
      next: (res) => {
        this.isSaving = false;
        this.router.navigate(['/app/teacher/quizzes', res.data.id, 'questions']);
      },
      error: () => {
        this.isSaving = false;
        this.errorMsg = 'teacher.createQuiz.createError';
      }
    });
  }
}