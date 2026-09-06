export interface AdminExamPdf {
  id: number;
  title: string;
  subject: string | null;
  major: string | null;
  year: number | null;
  file_size: string;
  page_count: number | null;
  questions_count: number | null;
  view_url: string;
}

export interface AdminExamPdfListMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}