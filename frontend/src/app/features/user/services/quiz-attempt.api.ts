import { Injectable, inject } from '@angular/core';
import { Observable, tap } from 'rxjs';

import { Http } from '../../../core/services/http';
import { ApiResponse } from '../../../core/models/api-response';
import { AuthState } from '../../auth/services/auth-state';

export interface ApiQuizAttempt {
  id: number;
  quiz_id: number;
  mode: 'tutor' | 'exam';
  status: 'in_progress' | 'submitted' | 'expired';
  started_at: string;
  submitted_at: string | null;
  server_time: string;
  deadline_at: string | null;
  remaining_seconds: number | null;
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
  user_answer_keys: string[];
  correct_answer_keys: string[];
  selected_choice_ids: number[];
  correct_choice_ids: number[];
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
  progression: ApiQuizProgression & { xp_earned: number };
}

export interface ApiQuizProgression {
  total_xp: number;
  level: number;
  xp_into_current_level: number;
  xp_for_next_level: number;
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
  progression: ApiQuizProgression;
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
  private readonly auth = inject(AuthState);

  start(quizId: number, mode: 'tutor' | 'exam' = 'exam'): Observable<ApiResponse<ApiQuizAttempt>> {
    return this.http.post<ApiResponse<ApiQuizAttempt>>(`/quizzes/${quizId}/start`, { mode });
  }

  saveAnswer(
    attemptId: number,
    data: { question_id: number; choice_ids: number[] } | { question_id: number; choice_id: number; selected?: boolean }
  ): Observable<ApiResponse<ApiAnswerFeedback | null>> {
    return this.http.post<ApiResponse<ApiAnswerFeedback | null>>(
      `/quiz-attempts/${attemptId}/answer`,
      data
    );
  }

 

  submit(attemptId: number): Observable<ApiSubmitResponse> {
    const userId = this.auth.user()?.id;
    return this.http.post<ApiSubmitResponse>(`/quiz-attempts/${attemptId}/submit`, {}).pipe(tap(res => {
      if (res.data.id === attemptId && res.data.submitted_at && ['submitted', 'expired'].includes(res.data.status)) {
        this.updateProgression(userId, res.rewards?.progression);
      }
    }));
  }

  getResult(attemptId: number): Observable<ApiResponse<ApiQuizResult>> {
    const userId = this.auth.user()?.id;
    return this.http.get<ApiResponse<ApiQuizResult>>(`/quiz-attempts/${attemptId}/result`).pipe(tap(res => {
      if (res.data.id === attemptId && res.data.submitted_at && ['submitted', 'expired'].includes(res.data.status)) {
        this.updateProgression(userId, res.data.progression);
      }
    }));
  }

  private updateProgression(userId: number | undefined, progression?: ApiQuizProgression): void {
    const user = this.auth.user();
    // Keep the existing header/profile in sync without an extra /me request.
    // Late responses must not restore a logged-out user or replace newer XP.
    if (!progression || !user || user.id !== userId || progression.total_xp < (user.xp ?? 0)) return;
    this.auth.setUser({ ...user, xp: progression.total_xp, level: progression.level,
      xp_into_current_level: progression.xp_into_current_level, xp_for_next_level: progression.xp_for_next_level });
  }

  getAttempt(attemptId: number): Observable<ApiResponse<ApiQuizAttempt>> {
    return this.http.get<ApiResponse<ApiQuizAttempt>>(`/quiz-attempts/${attemptId}`);
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
