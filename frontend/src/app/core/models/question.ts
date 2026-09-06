export type QuestionType = 'single_choice' | 'multiple_choice' | 'true_false';

export interface Choice {
  id: number;
  question_id: number;
  choice_text: string;
  is_correct: boolean;
  order: number;
}

export interface ChoicePayload {
  question_id: number;
  choice_text: string;
  is_correct: boolean;
  order: number;
}

export interface Question {
  id: number;
  quiz_id: number;
  question: string;
  type: QuestionType;
  marks: number;
  explanation: string | null;
  order: number;
  choices: Choice[];
}

export interface QuestionPayload {
  quiz_id: number;
  question: string;
  type: QuestionType;
  marks: number;
  explanation?: string | null;
  order: number;
}