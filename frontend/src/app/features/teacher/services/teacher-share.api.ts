import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { OwnedQuiz, QuizShare, ShareResults } from '../../../core/models/teacher';
import { CreatedQuiz, CreateQuestionPayload, CreateQuizPayload, TeacherQuestion } from '../../../core/models/teacher-quiz';


@Injectable({ providedIn: 'root' })
export class TeacherShareApi {
  private readonly http = inject(Http);

  myQuizzes(): Observable<ApiResponse<OwnedQuiz[]>> {
    return this.http.get<ApiResponse<OwnedQuiz[]>>('/teacher/quizzes');
  }

  listShares(): Observable<ApiResponse<QuizShare[]>> {
    return this.http.get<ApiResponse<QuizShare[]>>('/teacher/shares');
  }

  createShare(data: { quiz_id: number; title?: string }): Observable<ApiResponse<QuizShare>> {
    return this.http.post<ApiResponse<QuizShare>>('/teacher/shares', data);
  }

  results(shareId: number): Observable<ApiResponse<ShareResults>> {
    return this.http.get<ApiResponse<ShareResults>>(`/teacher/shares/${shareId}/results`);
  }



createQuiz(data: CreateQuizPayload): Observable<ApiResponse<CreatedQuiz>> {
  return this.http.post<ApiResponse<CreatedQuiz>>('/teacher/quizzes', data);
}

getQuizQuestions(quizId: number): Observable<ApiResponse<TeacherQuestion[]>> {
  return this.http.get<ApiResponse<TeacherQuestion[]>>(`/teacher/quizzes/${quizId}/questions`);
}

createQuestion(data: CreateQuestionPayload): Observable<ApiResponse<TeacherQuestion>> {
  return this.http.post<ApiResponse<TeacherQuestion>>('/teacher/questions', data);
}

subjects(): Observable<ApiResponse<{ id: number; name: string }[]>> {
  return this.http.get<ApiResponse<{ id: number; name: string }[]>>('/teacher/subjects');
}

getQuiz(id: number): Observable<ApiResponse<CreatedQuiz>> {
  return this.http.get<ApiResponse<CreatedQuiz>>(`/teacher/quizzes/${id}`);
}

updateQuiz(id: number, data: CreateQuizPayload): Observable<ApiResponse<CreatedQuiz>> {
  return this.http.put<ApiResponse<CreatedQuiz>>(`/teacher/quizzes/${id}`, data);
}

deleteQuiz(id: number): Observable<ApiResponse<null>> {
  return this.http.delete<ApiResponse<null>>(`/teacher/quizzes/${id}`);
}

updateQuestion(id: number, data: CreateQuestionPayload): Observable<ApiResponse<TeacherQuestion>> {
  return this.http.put<ApiResponse<TeacherQuestion>>(`/teacher/questions/${id}`, data);
}

deleteQuestion(questionId: number): Observable<ApiResponse<null>> {
  return this.http.delete<ApiResponse<null>>(`/teacher/questions/${questionId}`);
}
}