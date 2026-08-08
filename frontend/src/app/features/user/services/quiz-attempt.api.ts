import { Injectable, inject } from '@angular/core';
import { Observable } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';

export interface ApiQuizAttempt {
  id: number;
  quiz_id: number;
  mode: 'tutor' | 'exam';
  status: 'in_progress' | 'submitted' | 'expired';
  started_at: string;
  submitted_at: string | null;
  score: number;
  percentage: number;
  passed: boolean;
}

export interface ApiAnswerFeedback {
  question_id: number;
  correct_choice_ids: number[];
  selected_choice_ids: number[];
  is_correct: boolean;
  explanation: string;
}

export interface ApiResultOption {
  key: string;
  label: string;
}

export interface ApiResultQuestion {
  id: number;
  number: number;
  text: string;
  marks: number;
  is_correct: boolean;
  is_answered: boolean;
  options: ApiResultOption[];
  user_answer_key: string | null;
  correct_answer_key: string | null;
  explanation: string;
  is_bookmarked: boolean;
}

export interface ApiSubjectBreakdown {
  subject_id: number;
  subject_name: string;
  percentage: number;
}

export interface ApiQuizResult {
  id: number;
  quiz_id: number;
  quiz_title: string;
  subject_name: string | null;
  mode: 'tutor' | 'exam';
  status: string;
  started_at: string;
  submitted_at: string | null;
  time_spent_seconds: number | null;
  score: number;
  percentage: number;
  passed: boolean;
  total_questions: number;
  total_marks: number;
  correct_count: number;
  incorrect_count: number;
  unanswered_count: number;
  rank: number | null;
  subject_breakdown: ApiSubjectBreakdown[];
  questions: ApiResultQuestion[];
}


export interface ApiHistoryItem {
  id: number;
  session_title: string;
  type: string;
  questions_count: number;
  score_percentage: number;
  submitted_at: string;
}

export interface ApiHistoryMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface ApiUnlockedAchievement {
  title: string;
  description: string;
  icon: string;
  xp_reward: number;
}

export interface ApiQuizRewards {
  xp_earned: number;
  level_before: number;
  level_after: number;
  leveled_up: boolean;
  streak: number;
  streak_increased: boolean;
  newly_unlocked_achievements: ApiUnlockedAchievement[];
}

export interface ApiSubmitResponse extends ApiResponse<ApiQuizAttempt> {
  rewards: ApiQuizRewards;
}

@Injectable({
  providedIn: 'root',
})
export class QuizAttemptApi {
  private readonly http = inject(Http);

  start(quizId: number, mode: 'tutor' | 'exam' = 'exam'): Observable<ApiResponse<ApiQuizAttempt>> {
    return this.http.post<ApiResponse<ApiQuizAttempt>>(`/quizzes/${quizId}/start`, { mode });
  }

  saveAnswer(
    attemptId: number,
    data: { question_id: number; choice_id: number; selected?: boolean }
  ): Observable<ApiResponse<ApiAnswerFeedback | null>> {
    return this.http.post<ApiResponse<ApiAnswerFeedback | null>>(
      `/quiz-attempts/${attemptId}/answer`,
      data
    );
  }

 

  submit(attemptId: number): Observable<ApiSubmitResponse> {
  return this.http.post<ApiSubmitResponse>(`/quiz-attempts/${attemptId}/submit`, {});
}

  getResult(attemptId: number): Observable<ApiResponse<ApiQuizResult>> {
    return this.http.get<ApiResponse<ApiQuizResult>>(`/quiz-attempts/${attemptId}/result`);
  }

  getHistory(perPage: number = 5): Observable<ApiResponse<{ data: ApiHistoryItem[]; meta: ApiHistoryMeta }>> {
    return this.http.get<ApiResponse<{ data: ApiHistoryItem[]; meta: ApiHistoryMeta }>>(
      `/quiz-attempts/history?per_page=${perPage}`
    );
  }
  updateMode(attemptId: number, mode: 'tutor' | 'exam'): Observable<ApiResponse<ApiQuizAttempt>> {
    return this.http.put<ApiResponse<ApiQuizAttempt>>(`/quiz-attempts/${attemptId}/mode`, { mode });
  }
}