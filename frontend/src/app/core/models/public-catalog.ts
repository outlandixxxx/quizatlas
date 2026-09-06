export interface PublicPaginationMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}

export interface PublicMajor {
  id: number;
  name: string;
  slug: string;
  icon: string;
  description: string | null;
  subjects_count: number;
}

export interface PublicSubject {
  id: number;
  name: string;
  slug: string;
  description: string | null;
  major_id: number;
  major_name: string | null;
  quizzes_count: number;
}

export interface PublicMajorsResponse {
  items: PublicMajor[];
  meta: PublicPaginationMeta;
}

export interface PublicSubjectsResponse {
  items: PublicSubject[];
  meta: PublicPaginationMeta;
}