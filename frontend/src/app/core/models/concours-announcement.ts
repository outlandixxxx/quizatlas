import { DirectoryRecord, DirectoryPage } from './concours';
import { ConcoursPdf } from './concours-pdf';

export type RegistrationStatus =
  'upcoming' | 'open' | 'closed' | 'postponed' | 'cancelled' | 'unknown';
export type AnnouncementAction =
  'submit' | 'verify' | 'verify-publish' | 'publish' | 'archive' | 'withdraw';
export interface ConcoursAnnouncement {
  source_attribution?: {
    provider: 'wadifa-info';
    name: string;
    url: string;
    url_ar?: string;
    license: string;
    license_url: string;
    changes: 'selected_verified_adapted';
  } | null;
  id: number;
  concours_id: number;
  institution_id: number | null;
  slug: string;
  title_fr: string | null;
  title_ar: string | null;
  description_fr: string | null;
  description_ar: string | null;
  eligibility_fr: string | null;
  eligibility_ar: string | null;
  required_documents_fr: string | null;
  required_documents_ar: string | null;
  specialties: string[] | null;
  regions: string[] | null;
  positions: number | null;
  official_publication_date: string | null;
  registration_opens_on: string | null;
  registration_deadline: string | null;
  examination_date: string | null;
  application_url: string | null;
  official_source_url: string | null;
  official_decision: 'postponed' | 'cancelled' | null;
  verification_status: 'draft' | 'unverified' | 'verified';
  publication_status: 'draft' | 'published' | 'archived' | 'withdrawn';
  registration_status: RegistrationStatus;
  announcement_status?: RegistrationStatus | 'published' | 'completed' | 'archived' | 'superseded';
  replaces_announcement_id?: number | null;
  superseded_at?: string | null;
  verified_at: string | null;
  published_at: string | null;
  concours: DirectoryRecord;
  institution: DirectoryRecord | null;
  version?: number;
  verified_by?: number | null;
  session_year?: number | null;
  preparation_option_ids?: number[];
  official_pdf?: ConcoursPdf | null;
  official_pdfs?: ConcoursPdf[];
  additional_official_urls?: string[] | null;
}
export interface AnnouncementPage {
  items: ConcoursAnnouncement[];
  meta: DirectoryPage['meta'];
}
export interface AnnouncementRevision {
  id: number;
  version: number;
  action: string;
  actor_id: number | null;
  created_at: string;
  changes: Record<string, { from: unknown; to: unknown }>;
  verified_changes: Record<string, { from: unknown; to: unknown }> | null;
  events: string[];
}

/** Zero marks an invalid URL; never silently index it as the first page. */
export function announcementPageNumber(value: string | null): number {
  if (value === null) return 1;
  return /^[1-9]\d{0,5}$/.test(value) && Number(value) <= 100000 ? Number(value) : 0;
}
export function announcementText(
  record: ConcoursAnnouncement,
  language: string,
  field: 'title' | 'description' | 'eligibility' | 'required_documents' = 'title',
) {
  const preferred = language === 'ar' ? 'ar' : 'fr';
  const other = preferred === 'ar' ? 'fr' : 'ar';
  const lang = record[`${field}_${preferred}`]?.trim() ? preferred : other;
  const text = record[`${field}_${lang}`];
  return { text: text?.trim() ? text : '', lang };
}
/** Format a DATE without browser/server timezone shifts or fabricated clock times. */
export function calendarDate(value: string, language: string): string {
  return new Intl.DateTimeFormat(language, { dateStyle: 'long', timeZone: 'UTC' }).format(
    new Date(value + 'T00:00:00Z'),
  );
}
