import { fallbackIconUrl, handleIconError, majorIconUrl, subjectIconName, subjectIconUrl } from './catalog-icon';

describe('Catalog icons', () => {
  it('maps canonical major slugs and French display names to existing WebP assets', () => {
    for (const slug of [
      'computer-science-it',
      'finance',
      'economy',
      'mathematics',
      'physics',
      'chemistry',
      'svt',
      'arabic',
      'french',
      'english',
      'spanish',
    ]) {
      expect(majorIconUrl(slug)).toBe(`assets/icons/majors/${slug}.webp`);
    }
    expect(majorIconUrl('Informatique & IT')).toBe(majorIconUrl('computer-science-it'));
    expect(majorIconUrl('Mathématiques')).toBe(majorIconUrl('mathematics'));
    expect(majorIconUrl('Français')).toBe(majorIconUrl('french'));
  });

  it('uses topic-specific subject symbols and resolves French IT aliases consistently', () => {
    expect(subjectIconName('cybersecurity')).toBe('shield');
    expect(subjectIconName('cybersécurité')).toBe('shield');
    expect(subjectIconName('algorithmes-structures-de-donnees')).toBe(
      subjectIconName('algorithms-data-structures'),
    );
    expect(subjectIconName('systemes-dexploitation')).toBe('desktop_windows');
    expect(subjectIconName('laboratory-techniques')).toBe('experiment');
    expect(subjectIconName('reaction-kinetics')).toBe('speed');
    expect(subjectIconName('financial-markets')).toBe('candlestick_chart');
    expect(subjectIconName('reading-comprehension')).toBe('auto_stories');
  });

  it('uses local defaults for missing, unknown or path-like identifiers', () => {
    for (const slug of [
      null,
      undefined,
      '',
      'unlisted-subject',
      '__proto__',
      'https://example.com/icon.svg',
      '../../private',
    ]) {
      expect(majorIconUrl(slug)).toBe(fallbackIconUrl('majors'));
      expect(subjectIconName(slug)).toBe('menu_book');
    }
  });

  it('keeps the legacy subject image export compatible with image callers', () => {
    for (const slug of ['cybersecurity', null, undefined, '../../private']) {
      expect(subjectIconUrl(slug)).toBe('assets/icons/subjects/default.webp');
    }
    expect(subjectIconName('cybersecurity')).toBe('shield');
  });

  it('falls back once if a shipped image cannot load', () => {
    const img = document.createElement('img');
    img.src = majorIconUrl('physics');
    const setSource = vi.spyOn(img, 'src', 'set');
    const event = { target: img } as unknown as Event;
    handleIconError(event, 'majors');
    expect(img.getAttribute('src')).toBe(fallbackIconUrl('majors'));
    handleIconError(event, 'majors');
    expect(setSource).toHaveBeenCalledTimes(1);
  });
});
