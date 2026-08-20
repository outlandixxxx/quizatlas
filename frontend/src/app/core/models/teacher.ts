export interface OwnedQuiz {
  id: number;
  title: string;
  subject_id: number | null;
}

export interface QuizShare {
  id: number;
  join_code: string;
  title: string;
  quiz_id: number;
  quiz_title: string;
  is_active: boolean;
  enrolled_count: number;
  created_at: string;
}

export interface StudentAttemptResult {
  student_name: string;
  student_avatar: string | null;
  score: number;
  percentage: number;
  passed: boolean;
  submitted_at: string;
}

export interface ShareResults {
  share: QuizShare;
  enrolled_count: number;
  submitted_count: number;
  attempts: StudentAttemptResult[];
}