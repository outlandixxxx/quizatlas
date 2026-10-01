const ICON_EXTENSION = 'webp';

export function majorIconUrl(slug: string | null | undefined): string {
  return `assets/icons/majors/${slug || 'default'}.${ICON_EXTENSION}`;
}

export function subjectIconUrl(slug: string | null | undefined): string {
  return `assets/icons/subjects/${slug || 'default'}.${ICON_EXTENSION}`;
}

export function fallbackIconUrl(kind: 'majors' | 'subjects'): string {
  return `assets/icons/${kind}/default.${ICON_EXTENSION}`;
}

/** Swap in the default icon once; the endsWith check prevents an infinite error loop. */
export function handleIconError(event: Event, kind: 'majors' | 'subjects'): void {
  const img = event.target as HTMLImageElement;
  const fallback = fallbackIconUrl(kind);
  if (!img.src.endsWith(fallback)) {
    img.src = fallback;
  }
}