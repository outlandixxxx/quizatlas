export type DirectoryKind = 'categories' | 'institutions' | 'concours';
export type ConcoursType = 'recruitment' | 'admission' | 'examination';
export type ExamFormat = 'qcm' | 'written' | 'oral' | 'practical';

export interface PreparationOption {
  id: number;
  concours_id: number;
  parent_id: number | null;
  name_fr: string;
  name_en?: string | null;
  name_ar?: string | null;
  display_order: number;
  is_active: boolean;
}

export function preparationOptionName(option: PreparationOption, language: string): string {
  return (
    (language === 'ar' ? option.name_ar : language === 'en' ? option.name_en : null) ||
    option.name_fr
  );
}

/** A flat, stable order with at most one optional parent level. */
export function orderedPreparationOptions(options: PreparationOption[]): PreparationOption[] {
  const ordered = [...options].sort((a, b) => a.display_order - b.display_order || a.id - b.id);
  return ordered
    .filter((option) => option.parent_id === null)
    .flatMap((root) => [root, ...ordered.filter((child) => child.parent_id === root.id)]);
}

export interface DirectoryRecord {
  id: number;
  slug: string;
  name_fr: string;
  name_ar: string;
  is_active: boolean;
  description_fr?: string | null;
  description_ar?: string | null;
  parent_id?: number | null;
  display_order?: number;
  website_url?: string | null;
  category_id?: number;
  institution_id?: number | null;
  category?: DirectoryRecord;
  institution?: DirectoryRecord | null;
  type?: ConcoursType;
  exam_formats?: ExamFormat[];
  resources?: ConcoursPdf[];
  preparation_options?: PreparationOption[];
  preparation_qcm?: QcmPage<ConcoursQcm>;
  session_year?: number | null;
  session_policy?: 'manual' | 'annual';
  session_rollover_on?: string | null;
  session_year_override?: number | null;
  displayed_session_year?: number | null;
  session_announcement_state?: 'published' | 'archived' | 'not_announced';
  current_announcements?: ConcoursAnnouncement[];
}

export interface DirectoryPage {
  items: DirectoryRecord[];
  meta: { current_page: number; last_page: number; per_page: number; total: number };
}

export type DirectoryFilters = Record<string, string | number | boolean | null | undefined>;

/** Editorial language never changes the user's interface preference. */
export function editorial(record: DirectoryRecord, language: string) {
  const lang = language === 'ar' && record.name_ar ? 'ar' : 'fr';
  const descriptionLang =
    lang === 'ar' ? (record.description_ar ? 'ar' : 'fr') : record.description_fr ? 'fr' : 'ar';
  return {
    name: lang === 'ar' ? record.name_ar : record.name_fr,
    lang,
    description: (descriptionLang === 'ar' ? record.description_ar : record.description_fr) ?? '',
    descriptionLang,
  };
}

export function categoryIcon(slug: string): string {
  return (
    (
      {
        education: 'school',
        'security-military': 'shield',
        'health-medicine': 'health_and_safety',
        'public-administration': 'account_balance',
        'finance-economics': 'payments',
        'academic-admissions-examinations': 'history_edu',
      } as Record<string, string>
    )[slug] ?? 'category'
  );
}
import type { ConcoursPdf } from './concours-pdf';
import type { ConcoursQcm, QcmPage } from './concours-qcm';

/** Public selection comes from the server, independent of announcement-feed pagination. */
export function currentAnnouncements(record: DirectoryRecord): ConcoursAnnouncement[] {
  return (record.current_announcements ?? [])
    .filter(
      (notice) =>
        record.displayed_session_year != null &&
        notice.session_year === record.displayed_session_year &&
        notice.verification_status === 'verified' &&
        notice.publication_status === 'published' &&
        !notice.superseded_at,
    )
    .map((notice) => ({ ...notice, concours: record }));
}

/** Mirrors the server's explicit policy for the unsaved admin preview. */
export function sessionYearPreview(
  record: Partial<
    Pick<
      DirectoryRecord,
      | 'session_year'
      | 'session_policy'
      | 'session_rollover_on'
      | 'session_year_override'
      | 'displayed_session_year'
    >
  >,
  today: string,
): number | null {
  if (record.session_year_override != null) return record.session_year_override;
  if (record.session_year == null) return record.displayed_session_year ?? null;
  let year = record.session_year;
  const boundary = record.session_rollover_on;
  if (record.session_policy === 'annual' && boundary && today >= boundary) {
    year +=
      Number(today.slice(0, 4)) -
      Number(boundary.slice(0, 4)) +
      (today.slice(5) >= boundary.slice(5) ? 1 : 0);
  }
  return Math.min(2100, year);
}
import type { ConcoursAnnouncement } from './concours-announcement';
