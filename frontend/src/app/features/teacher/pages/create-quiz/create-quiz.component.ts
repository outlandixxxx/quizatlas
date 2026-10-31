import { Component, OnInit, inject, ChangeDetectorRef } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { ActivatedRoute, Router } from '@angular/router';
import { TranslocoModule } from '@jsverse/transloco';
import { TeacherShareApi } from '../../services/teacher-share.api';
import { CreateQuizPayload } from '../../../../core/models/teacher-quiz';

@Component({
  selector: 'app-create-quiz',
  standalone: true,
  imports: [CommonModule, FormsModule, TranslocoModule],
  templateUrl: './create-quiz.component.html',
  styleUrl: './create-quiz.component.scss',
})
export class CreateQuizComponent implements OnInit {
  private readonly teacherApi = inject(TeacherShareApi);
  private readonly route = inject(ActivatedRoute);
  private readonly cdr = inject(ChangeDetectorRef);
  quizId = 0;
  private currentSubject?: { id: number; name: string };
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
  isLoadingQuiz = false;
  errorMsg = '';

  ngOnInit(): void {
    this.quizId = Number(this.route.snapshot.paramMap.get('quizId')) || 0;
    this.isLoadingQuiz = this.quizId !== 0;
    this.isLoadingSubjects = true;
    this.teacherApi.subjects().subscribe({
      next: (res) => {
        this.subjects = this.currentSubject && !res.data.some(s => s.id === this.currentSubject!.id)
          ? [...res.data, this.currentSubject] : res.data;
        this.isLoadingSubjects = false;
        this.cdr.markForCheck();
      },
      error: () => {
        this.errorMsg = 'teacher.createQuiz.loadSubjectsError';
        this.isLoadingSubjects = false;
        this.cdr.markForCheck();
      }
    });

    if (this.quizId) {
      this.teacherApi.getQuiz(this.quizId).subscribe({
        next: ({ data }) => {
          this.isLoadingQuiz = false;
          this.form = { subject_id: data.subject_id, title: data.title, description: data.description ?? '',
            duration: data.duration, passing_score: data.passing_score, is_active: data.is_active };
          this.currentSubject = data.subject;
          if (data.subject && !this.subjects.some(s => s.id === data.subject_id)) this.subjects.push(data.subject);
          this.cdr.markForCheck();
        },
        error: () => { this.isLoadingQuiz = false; this.errorMsg = 'teacher.createQuiz.loadQuizError'; this.cdr.markForCheck(); }
      });
    }
  }

  save(): void {
    if (this.isSaving || this.isLoadingQuiz || this.isLoadingSubjects) return;
    if (!this.form.subject_id || !this.form.title || !this.form.duration || this.form.passing_score == null) {
      this.errorMsg = 'teacher.createQuiz.validationError';
      return;
    }

    this.isSaving = true;
    this.errorMsg = '';

    const request = this.quizId ? this.teacherApi.updateQuiz(this.quizId, this.form) : this.teacherApi.createQuiz(this.form);
    request.subscribe({
      next: (res) => {
        this.isSaving = false;
        this.router.navigate(['/app/teacher/quizzes', res.data.id, 'questions']);
      },
      error: () => {
        this.isSaving = false;
        this.errorMsg = 'teacher.createQuiz.createError';
        this.cdr.markForCheck();
      }
    });
  }
}
