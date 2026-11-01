export type QcmKind = 'majors' | 'subjects' | 'quizzes';
export interface QcmPage<T> {
  items: T[];
  meta: { current_page: number; last_page: number; per_page: number; total: number };
}
export interface ConcoursQcm {
  id: number;
  title: string;
  subject_name: string;
  questions_count: number;
  duration: number;
  difficulty: string | null;
}
export interface QcmCandidate {
  id: number;
  title: string;
  subject_name?: string | null;
}
export interface QcmLink extends QcmCandidate {
  version: number;
  available: boolean;
  preparation_option_ids: number[];
}
export const emptyQcmPage = <T>(): QcmPage<T> => ({
  items: [],
  meta: { current_page: 1, last_page: 1, per_page: 12, total: 0 },
});

/** Facets cover every quiz linked to the concours (not just the current page). */
export interface ConcoursQcmFilters {
  majors: { id: number; name: string }[];
  subjects: { id: number; major_id: number; name: string }[];
  levels: string[];
}
export interface ConcoursQcmPage extends QcmPage<ConcoursQcm> {
  filters?: ConcoursQcmFilters;
}
export interface ConcoursQcmSelection {
  major_id?: number;
  subject_id?: number;
  difficulty?: string;
  q?: string;
}
