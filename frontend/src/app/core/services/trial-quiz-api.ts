import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';
import { ApiResponse } from '../models/api-response';
import { TrialData, TrialGradeResponse } from '../models/trial-quiz';
import { Http } from './http';



@Injectable({ providedIn: 'root' })
export class TrialQuizApi {
  private readonly http = inject(Http);

  getByMajor(slug: string): Observable<ApiResponse<TrialData>> {
    return this.http.get<ApiResponse<TrialData>>(`/trial/major/${slug}`);
  }

  getBySubject(slug: string): Observable<ApiResponse<TrialData>> {
    return this.http.get<ApiResponse<TrialData>>(`/trial/subject/${slug}`);
  }

  grade(answers: Record<number, number>): Observable<ApiResponse<TrialGradeResponse>> {
    return this.http.post<ApiResponse<TrialGradeResponse>>('/trial/grade', { answers });
  }
}