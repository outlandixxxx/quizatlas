import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { OwnedQuiz, QuizShare, ShareResults } from '../../../core/models/teacher';
import { CreateChoicePayload, CreatedQuiz, CreateQuestionPayload, CreateQuizPayload, TeacherChoice, TeacherQuestion } from '../../../core/models/teacher-quiz';


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
  return this.http.post<ApiResponse<CreatedQuiz>>('/quizzes', data);
}

getQuizQuestions(quizId: number): Observable<ApiResponse<TeacherQuestion[]>> {
  return this.http.get<ApiResponse<TeacherQuestion[]>>(`/teacher/quizzes/${quizId}/questions`);
}

createQuestion(data: CreateQuestionPayload): Observable<ApiResponse<TeacherQuestion>> {
  return this.http.post<ApiResponse<TeacherQuestion>>('/questions', data);
}

createChoice(data: CreateChoicePayload): Observable<ApiResponse<TeacherChoice>> {
  return this.http.post<ApiResponse<TeacherChoice>>('/choices', data);
}

deleteQuestion(questionId: number): Observable<ApiResponse<null>> {
  return this.http.delete<ApiResponse<null>>(`/questions/${questionId}`);
}
}