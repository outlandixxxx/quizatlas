import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';

export interface ApiMajor {
  id: number;
  name: string;
  description: string | null;
  icon: string;
}

export interface ApiSubject {
  id: number;
  major_id: number;
  name: string;
  year: string;
  code: string | null;
  quizzes_count: number;
  questions_count: number;
}

export interface ApiChapter {
  id: number;
  title: string;
  description: string | null;
  questions_count: number;
}

@Injectable({
  providedIn: 'root',
})
export class PracticeApi {
  private readonly http = inject(Http);

  getMajors(): Observable<ApiResponse<ApiMajor[]>> {
    return this.http.get<ApiResponse<ApiMajor[]>>('/practice/majors');
  }

  getSubjects(majorId: number): Observable<ApiResponse<ApiSubject[]>> {
    return this.http.get<ApiResponse<ApiSubject[]>>(
      `/practice/majors/${majorId}/subjects`
    );
  }

  getChapters(subjectId: number): Observable<ApiResponse<ApiChapter[]>> {
    return this.http.get<ApiResponse<ApiChapter[]>>(
      `/practice/subjects/${subjectId}/chapters`
    );
  }

  getSubjectsWithQuizzes(): Observable<ApiResponse<{ id: number; name: string }[]>> {
    return this.http.get<ApiResponse<{ id: number; name: string }[]>>(
      '/practice/subjects-with-quizzes'
    );
  }
}