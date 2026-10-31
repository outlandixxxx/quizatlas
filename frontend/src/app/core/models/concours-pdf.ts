export type ConcoursDocumentType =
  'official_announcement' | 'previous_exam' | 'correction' | 'summary' | 'preparation_guide';
export interface ConcoursPdf {
  id: number;
  title: string;
  document_type: ConcoursDocumentType;
  year: number | null;
  specialty: string | null;
  subject?: string | null;
  corrects_exam_pdf_id?: number | null;
  preparation_option_ids?: number[];
  download_allowed?: boolean;
  file_size: string;
  source_url: string | null;
  attribution: string | null;
  available: boolean;
  view_path: string;
  download_path: string;
}
