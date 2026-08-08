import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';
import { ApiResponse } from '../models/api-response';
import { Http } from './http';



export interface QuizRatingSubmitResponse {
  rating: number;
  comment: string | null;
  average_rating: number;
  ratings_count: number;
}

export interface QuizRatingExisting {
  rating: number;
  comment: string | null;
}

@Injectable({ providedIn: 'root' })
export class QuizRatingApi {
  private readonly http = inject(Http);

  submitRating(
    quizId: number,
    data: { rating: number; comment?: string }
  ): Observable<ApiResponse<QuizRatingSubmitResponse>> {
    return this.http.post<ApiResponse<QuizRatingSubmitResponse>>(
      `/quizzes/${quizId}/ratings`,
      data
    );
  }

  getMyRating(quizId: number): Observable<ApiResponse<QuizRatingExisting | null>> {
    return this.http.get<ApiResponse<QuizRatingExisting | null>>(
      `/quizzes/${quizId}/ratings/me`
    );
  }
}