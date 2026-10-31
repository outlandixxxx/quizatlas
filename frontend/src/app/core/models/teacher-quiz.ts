export type QuestionType = 'single_choice' | 'multiple_choice' | 'true_false';

export interface CreateQuizPayload {
  subject_id: number;
  title: string;
  description?: string;
  duration: number;
  passing_score: number;
  is_active?: boolean;
}

export interface CreatedQuiz extends CreateQuizPayload {
  id: number;
  subject?: { id: number; name: string };
}

export interface CreateChoicePayload {
  question_id: number;
  choice_text: string;
  is_correct: boolean;
  order: number;
}

export interface CreateQuestionPayload {
  choices: { id?: number; choice_text: string; is_correct: boolean }[];
  quiz_id: number;
  question: string;
  type: QuestionType;
  marks: number;
  explanation?: string;
  order: number;
}

export interface TeacherChoice {
  id: number;
  choice_text: string;
  is_correct: boolean;
  order: number;
}

export interface TeacherQuestion {
  id: number;
  question: string;
  type: QuestionType;
  marks: number;
  explanation: string | null;
  order: number;
  choices: TeacherChoice[];
}