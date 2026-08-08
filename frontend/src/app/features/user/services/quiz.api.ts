import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';

export interface ApiChoice {
  id: number;
  choice_text: string;
  order: number;
}

/*export interface ApiQuestion {
  id: number;
  question: string;
  type: 'single_choice' | 'multiple_choice' | 'true_false';
  marks: number;
  order: number;
  choices: ApiChoice[];
}

export interface ApiQuizWithQuestions {
  id: number;
  title: string;
  description: string | null;
  duration: number;
  passing_score: number;
  total_marks: number;
  subject_name: string | null;
  questions: ApiQuestion[];
}*/


export interface ApiQuestion {
  id: number;
  question: string;
  type: 'single_choice' | 'multiple_choice' | 'true_false';
  marks: number;
  order: number;
  choices: ApiChoice[];
  selected_choice_ids: number[];
  is_bookmarked: boolean;

}

export interface ApiQuizWithQuestions {
  id: number;
  title: string;
  description: string | null;
  duration: number;
  passing_score: number;
  total_marks: number;
  subject_name: string | null;
  attempt_id: number | null;
  mode: 'tutor' | 'exam' | null;
  questions: ApiQuestion[];
}


export interface ApiQuizListItem {
  id: number;
  title: string;
  subject_name: string | null;
  difficulty: 'Beginner' | 'Intermediate' | 'Advanced' | null;
  questions_count: number;
  status: 'not_started' | 'in_progress' | 'submitted' | 'expired';
  progress_percentage: number;
  latest_attempt_id: number | null;
}

export interface ApiPaginationMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface ApiQuizListResponse {
  data: ApiQuizListItem[];
  meta: ApiPaginationMeta;
}

export interface ApiQuizWithQuestions {
  id: number;
  title: string;
  description: string | null;
  duration: number;
  passing_score: number;
  total_marks: number;
  difficulty: 'Beginner' | 'Intermediate' | 'Advanced' | null;
  subject_name: string | null;
  questions: ApiQuestion[];
}


export interface ApiQuizWithQuestions {
  id: number;
  title: string;
  description: string | null;
  duration: number;
  passing_score: number;
  total_marks: number;
  difficulty: 'Beginner' | 'Intermediate' | 'Advanced' | null;
  subject_name: string | null;
  questions: ApiQuestion[];
}



@Injectable({
  providedIn: 'root',
})
export class QuizApi {
  private readonly http = inject(Http);

  getQuestions(quizId: number): Observable<ApiResponse<ApiQuizWithQuestions>> {
    return this.http.get<ApiResponse<ApiQuizWithQuestions>>(`/quizzes/${quizId}/questions`);
  }

  
getQuizzes(params: {
    search?: string;
    subject_id?: number;
    difficulty?: string;
    status?: string;
    page?: number;
    per_page?: number;
  }): Observable<ApiResponse<ApiQuizListResponse>> {
    const parts: string[] = [];
    if (params.search) parts.push(`search=${encodeURIComponent(params.search)}`);
    if (params.subject_id) parts.push(`subject_id=${params.subject_id}`);
    if (params.difficulty) parts.push(`difficulty=${encodeURIComponent(params.difficulty)}`);
    if (params.status) parts.push(`status=${params.status}`);
    if (params.page) parts.push(`page=${params.page}`);
    if (params.per_page) parts.push(`per_page=${params.per_page}`);
    const query = parts.length ? `?${parts.join('&')}` : '';

    return this.http.get<ApiResponse<ApiQuizListResponse>>(`/user/quizzes${query}`);
  }
 
}