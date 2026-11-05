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
  subject_id?: number | null;
  major_id?: number | null;
  concours_id?: number | null;
  document_type?: 'previous_exam' | 'correction' | 'summary' | 'preparation_guide' | null;
  corrects_exam_pdf_id?: number | null;
  preparation_option_ids?: number[];
  specialty?: string | null;
  source_url?: string | null;
  attribution?: string | null;
  is_active?: boolean;
  download_allowed?: boolean;
  published?: boolean;
  verified?: boolean;
  workflow_status?: 'draft' | 'verified' | 'published';
  allowed_actions?: Array<PdfAction | 'preview' | 'edit' | 'delete'>;
  delete_blocked_reason?: string | null;
  version?: number;
}

export type PdfAction = 'verify' | 'publish' | 'verify-publish' | 'unpublish';
export interface PdfBatchResult {
  counts: { succeeded: number; skipped: number; failed: number };
  results: Array<{ id: number; title?: string; status: 'succeeded' | 'skipped' | 'failed'; message?: string }>;
}

export interface AdminExamPdfListMeta {
  current_page: number;
  last_page: number;
  per_page: number;
  total: number;
}
