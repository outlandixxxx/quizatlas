import { ThumbnailReview, ThumbnailSpec } from '../../services/thumbnail.models';

/** Previously reviewed image fixture for workflow tests; never a production artwork record. */
export function thumbnailFixture(overrides: Partial<ThumbnailSpec> = {}): ThumbnailReview {
  const spec: ThumbnailSpec = {
    version: 1, format: 'landscape', template: 'quiz-long', template_label: 'Vidéo longue de quiz', locale: 'fr', display_number: null,
    major: { id: 1, slug: 'physics', label: 'Physique' },
    subject: { id: 2, slug: 'forces', label: 'Forces' },
    palette: { id: 'physics', background: '#FFF7E7', primary: '#FFD43B', secondary: '#EC8B33',
      text: '#252132', muted: '#514A61', badge: '#252132', badgeText: '#FFFFFF' },
    asset: { id: 'neutral', sha256: 'a'.repeat(64) }, layout: 'focus',
    hook: 'Une question réelle ?', supporting: 'Une question · MaroQuiz', seed: 'fixture-stable-seed', ...overrides,
  };
  return { spec, ready: true, previewUrl: '', proposal: { spec: JSON.parse(JSON.stringify(spec)),
    suggestions: [{ hook: spec.hook, supporting: spec.supporting }, { hook: 'Forces', supporting: 'Une question' }],
    layouts: [{ id: 'focus' }, { id: 'split' }, { id: 'editorial' }],
    assets: [{ id: 'neutral', label: 'Neutral test fixture', sha256: 'a'.repeat(64), available: true }] } };
}
