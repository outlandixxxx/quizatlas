export const VIDEO_FORMATS = ['short', 'long'] as const;
export const VIDEO_CATEGORIES = ['quiz', 'facts'] as const;
export const VIDEO_TEMPLATES = [
  'general', 'five-seconds', 'defi-du-jour', 'niveau-concours', 'language-day',
  'facts-short', 'facts-long', 'quiz-long',
] as const;
export const VIDEO_LANGUAGES = ['fr', 'ar', 'en'] as const;
export const VIDEO_STATUSES = ['draft', 'published'] as const;

export type VideoLibraryFormat = typeof VIDEO_FORMATS[number];
export type VideoLibraryCategory = typeof VIDEO_CATEGORIES[number];
export type VideoLibraryTemplate = typeof VIDEO_TEMPLATES[number];
export type VideoLibraryLanguage = typeof VIDEO_LANGUAGES[number];
export type VideoLibraryStatus = typeof VIDEO_STATUSES[number];
export type VideoLibraryErrors = Record<string, string[] | string>;

export interface VideoLibraryInput {
  url: string;
  title: string;
  format: VideoLibraryFormat;
  category: VideoLibraryCategory;
  template: VideoLibraryTemplate;
  language: VideoLibraryLanguage;
  status: VideoLibraryStatus;
}

export interface VideoLibraryVideo extends VideoLibraryInput {
  id: number;
  youtube_id: string;
  thumbnail_url: string;
  duration_seconds?: number | null;
  embeddable?: boolean | null;
  published_at?: string | null;
}

export interface VideoLibraryFilters {
  q?: string;
  format?: VideoLibraryFormat | '';
  category?: VideoLibraryCategory | '';
  template?: VideoLibraryTemplate | '';
  language?: VideoLibraryLanguage | '';
  status?: VideoLibraryStatus | '';
  page?: number;
  per_page?: number;
}

export interface VideoLibraryPage {
  items: VideoLibraryVideo[];
  meta: { current_page: number; last_page: number; per_page: number; total: number };
}

export interface VideoLibraryReviewRow extends Partial<Omit<VideoLibraryInput, 'url'>> {
  index: number;
  url: string;
  youtube_id?: string | null;
  existing?: VideoLibraryVideo | null;
  duplicate_in_batch?: boolean;
  errors?: VideoLibraryErrors;
  metadata_error?: string | null;
}

export interface VideoLibraryImportResult {
  index: number;
  status: 'created' | 'existing' | 'invalid';
  video?: VideoLibraryVideo;
  errors?: VideoLibraryErrors;
}
