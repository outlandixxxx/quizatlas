import { Component, OnInit, inject, signal } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpParams } from '@angular/common/http';

import { MajorApi } from '../services/major.api';
import { SubjectApi } from '../services/subject.api';
import {
  AdminQuizApi,
  RevisionJsonResponse,
} from '../services/quiz.api';

import { Major } from '../../../core/models/major';
import { Subject } from '../../../core/models/subject';
import { Quiz } from '../../../core/models/quiz';

@Component({
  selector: 'app-admin-revision-json',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './revision-json.html',
  styleUrl: './revision-json.scss',
})
export class AdminRevisionJson implements OnInit {
  private readonly majorApi = inject(MajorApi);
  private readonly subjectApi = inject(SubjectApi);
  private readonly quizApi = inject(AdminQuizApi);

  readonly majors = signal<Major[]>([]);
  readonly subjects = signal<Subject[]>([]);
  readonly quizzes = signal<Quiz[]>([]);

  readonly selectedMajorId = signal<number | null>(null);
  readonly selectedSubjectId = signal<number | null>(null);
  readonly selectedQuizId = signal<number | null>(null);

  readonly isLoadingMajors = signal(false);
  readonly isLoadingSubjects = signal(false);
  readonly isLoadingQuizzes = signal(false);
  readonly isGenerating = signal(false);

  readonly errorMsg = signal<string | null>(null);
  readonly copied = signal(false);

  readonly revisionData = signal<RevisionJsonResponse | null>(null);

  get formattedJson(): string {
    const data = this.revisionData();

    return data
      ? JSON.stringify(data, null, 2)
      : '';
  }

  ngOnInit(): void {
    this.fetchMajors();
  }

  fetchMajors(): void {
    this.isLoadingMajors.set(true);
    this.errorMsg.set(null);

    this.majorApi.list().subscribe({
      next: (res) => {
        this.majors.set(res.data);
        this.isLoadingMajors.set(false);
      },
      error: () => {
        this.isLoadingMajors.set(false);
        this.errorMsg.set('Failed to load majors.');
      },
    });
  }

  onMajorChange(event: Event): void {
    const value = (event.target as HTMLSelectElement).value;
    const majorId = value ? Number(value) : null;

    this.selectedMajorId.set(majorId);

    // Reset everything below Major.
    this.selectedSubjectId.set(null);
    this.selectedQuizId.set(null);

    this.subjects.set([]);
    this.quizzes.set([]);

    this.revisionData.set(null);
    this.errorMsg.set(null);
    this.copied.set(false);

    if (!majorId) {
      return;
    }

    this.fetchSubjects(majorId);
  }

  fetchSubjects(majorId: number): void {
    this.isLoadingSubjects.set(true);

    this.subjectApi.list().subscribe({
      next: (res) => {
       const filteredSubjects = res.data.filter(
  (subject) => subject.major?.id === majorId
);

        this.subjects.set(filteredSubjects);
        this.isLoadingSubjects.set(false);
      },
      error: () => {
        this.isLoadingSubjects.set(false);
        this.errorMsg.set('Failed to load subjects.');
      },
    });
  }

  onSubjectChange(event: Event): void {
    const value = (event.target as HTMLSelectElement).value;
    const subjectId = value ? Number(value) : null;

    this.selectedSubjectId.set(subjectId);
    this.selectedQuizId.set(null);

    this.quizzes.set([]);
    this.revisionData.set(null);

    this.errorMsg.set(null);
    this.copied.set(false);

    if (!subjectId) {
      return;
    }

    this.fetchQuizzes(subjectId);
  }

  fetchQuizzes(subjectId: number): void {
    this.isLoadingQuizzes.set(true);

    const params = new HttpParams()
      .set('subject_id', subjectId)
      .set('per_page', '100');

    this.quizApi.list(params).subscribe({
      next: (res) => {
        this.quizzes.set(res.data);
        this.isLoadingQuizzes.set(false);
      },
      error: () => {
        this.isLoadingQuizzes.set(false);
        this.errorMsg.set('Failed to load quizzes.');
      },
    });
  }

  onQuizChange(event: Event): void {
    const value = (event.target as HTMLSelectElement).value;
    const quizId = value ? Number(value) : null;

    this.selectedQuizId.set(quizId);
    this.revisionData.set(null);
    this.errorMsg.set(null);
    this.copied.set(false);
  }

  generateJson(): void {
    const quizId = this.selectedQuizId();

    if (!quizId) {
      this.errorMsg.set('Please select a quiz.');
      return;
    }

    this.isGenerating.set(true);
    this.errorMsg.set(null);
    this.revisionData.set(null);
    this.copied.set(false);

    this.quizApi.getRevisionJson(quizId).subscribe({
      next: (res) => {
        this.revisionData.set(res.data);
        this.isGenerating.set(false);
      },
      error: (err) => {
        this.isGenerating.set(false);

        this.errorMsg.set(
          err?.error?.errors?.quiz?.[0]
          || err?.error?.message
          || 'Failed to generate revision JSON.'
        );
      },
    });
  }

  async copyJson(): Promise<void> {
    const json = this.formattedJson;

    if (!json) {
      return;
    }

    try {
      await navigator.clipboard.writeText(json);

      this.copied.set(true);

      setTimeout(() => {
        this.copied.set(false);
      }, 1500);
    } catch {
      this.errorMsg.set('Failed to copy JSON.');
    }
  }
}