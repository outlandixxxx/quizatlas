export type ThumbnailLocale = 'fr' | 'ar' | 'en';
export type ThumbnailLayout = 'focus' | 'split' | 'editorial';
export interface ThumbnailPalette {
  id: string; background: string; primary: string; secondary: string;
  text: string; muted: string; badge: string; badgeText: string;
}
export interface ThumbnailSpec {
  version: 1;
  format: 'portrait' | 'landscape';
  template: 'quiz-long' | 'facts-long' | 'facts-short' | 'five-seconds' | 'defi-du-jour' | 'niveau-concours' | 'language-day';
  template_label: string;
  display_number: number | null;
  locale: ThumbnailLocale;
  major: { id: number; slug: string; label: string };
  subject: { id: number; slug: string; label: string } | null;
  palette: ThumbnailPalette;
  asset: { id: string; sha256: string };
  layout: ThumbnailLayout;
  hook: string;
  supporting: string;
  seed: string;
}
export interface ThumbnailProposal {
  spec: ThumbnailSpec;
  suggestions: { hook: string; supporting: string }[];
  layouts: { id: ThumbnailLayout; label?: string }[];
  assets: { id: string; label: string; sha256: string; available: boolean }[];
  palette?: ThumbnailPalette;
}
export interface ThumbnailReview {
  spec: ThumbnailSpec;
  proposal: ThumbnailProposal;
  previewUrl: string;
  ready: boolean;
}

export function thumbnailDocument<T extends { render_options?: object }>(document: T, spec: ThumbnailSpec): T {
  return { ...document, render_options: { ...document.render_options, thumbnail: JSON.parse(JSON.stringify(spec)) } };
}

/** Existing CSP permits data images. Keep one bounded JPEG preview visible per studio. */
export function thumbnailPreviewDataUrl(blob: Blob): Promise<string> {
  if (!blob.size || blob.size > 2 * 1024 * 1024 || blob.type !== 'image/jpeg') return Promise.reject(Error('Invalid thumbnail preview image.'));
  return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onerror = () => reject(Error('Unable to read thumbnail preview.'));
    reader.onload = () => typeof reader.result === 'string' ? resolve(reader.result) : reject(Error('Invalid thumbnail preview.'));
    reader.readAsDataURL(blob);
  });
}
