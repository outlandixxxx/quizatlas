export interface TrialChoice {
  id: number;
  choice_text: string;
}

export interface TrialQuestion {
  id: number;
  question: string;
  marks: number;
  choices: TrialChoice[];
}

export interface TrialData {
  label: string;
  questions: TrialQuestion[];
}

export interface TrialGradeResult {
  question_id: number;
  is_correct: boolean;
  correct_choice_id: number | null;
  explanation: string | null;
}

export interface TrialGradeResponse {
  results: TrialGradeResult[];
  correct_count: number;
  total_questions: number;
  score: number;
  total_marks: number;
  percentage: number;
}