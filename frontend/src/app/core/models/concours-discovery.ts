import { DirectoryPage } from './concours';

export interface AnnouncementSource {
  id: number;
  key: string;
  name: string;
  official_url: string;
  source_kind?: 'official' | 'third_party';
  listing_url: string;
  collection_method: 'manual' | 'json_feed' | 'rss_atom';
  enabled: boolean;
  permission_status: 'unknown' | 'allowed' | 'denied';
  permission_evidence: string | null;
  permission_checked_at: string | null;
  check_interval_minutes: number;
  last_attempt_at: string | null;
  last_success_at: string | null;
  last_error: string | null;
  version: number;
  automated_ready: boolean;
  automation_enabled?: boolean;
  transport_format?: string;
  collection_assessment?: string;
  collection_assessment_note?: string;
  collection_scope?: 'facts_only' | 'source_metadata';
  publisher_written_authorization?: boolean | null;
  usage_eligible?: boolean;
  automatic_collection_active?: boolean;
  pending_discoveries_count?: number;
  technical_access?: {
    status:
      'unverified' | 'confirmed_rss' | 'confirmed_json' | 'access_refused' | 'last_attempt_failed';
    checked_at: string | null;
    http_status: number | null;
    format: string | null;
    items: number | null;
    dates: string | null;
  };
}
export interface ConcoursDiscovery {
  id: number;
  source_id: number;
  source: AnnouncementSource;
  provider_metadata?: {
    provider_id: string;
    employer: string | null;
    grade: string | null;
    employer_fr?: string | null;
    employer_ar?: string | null;
    grade_fr?: string | null;
    grade_ar?: string | null;
    arabic_status?: 'available' | 'partial' | 'missing' | 'conflict';
    article_urls?: { fr: string | null; ar: string | null };
    positions: number | null;
    reported_official_url: string | null;
    official_link_verified: false;
    attribution: NonNullable<
      import('./concours-announcement').ConcoursAnnouncement['source_attribution']
    >;
  } | null;
  source_identifier: string | null;
  title: string;
  metadata_scope?: 'facts_only' | 'source_metadata';
  official_url: string | null;
  source_article_url?: string | null;
  candidate_category?: 'unknown' | 'employment' | 'academic' | 'excluded';
  candidate_type?: 'unknown' | 'opening' | 'results' | 'preselection' | 'amendment';
  classification_reason?: string | null;
  official_verified_at?: string | null;
  official_identifier?: string | null;
  verified_identity?: Record<string, string | number | null> | null;
  is_stale?: boolean;
  publication_date: string | null;
  application_deadline: string | null;
  institution: string | null;
  session_year: number | null;
  grade: string | null;
  specialty: string | null;
  status: 'pending' | 'approved' | 'rejected';
  version: number;
  announcement_id: number | null;
  review_note: string | null;
  first_seen_at: string;
  last_seen_at: string;
}
export interface DiscoveryMatch {
  discovery: ConcoursDiscovery;
  reason: string;
  decision: 'confirmed' | 'rejected' | null;
  note: string | null;
}
export interface DiscoveryPage<T = ConcoursDiscovery> {
  items: T[];
  meta: DirectoryPage['meta'];
}
export interface DiscoveryRevision {
  id: number;
  version: number;
  action: string;
  created_at: string;
  snapshot: Record<string, unknown>;
}
