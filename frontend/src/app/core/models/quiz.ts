import { Subject } from './subject';

export type QuizDifficulty = 'Beginner' | 'Intermediate' | 'Advanced';

export interface Quiz {
  id: number;
  subject_id: number;
  subject: Subject;
  title: string;
  description: string | null;
  duration: number;
  passing_score: number;
  total_marks: number;
  difficulty: QuizDifficulty | null;
  is_active: boolean;
  questions_count: number | null;
}

export interface QuizPayload {
  subject_id: number;
  title: string;
  description?: string | null;
  duration: number;
  passing_score: number;
  difficulty?: QuizDifficulty | null;
  is_active?: boolean;
}