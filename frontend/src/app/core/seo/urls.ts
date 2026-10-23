export const SITE_ORIGIN = 'https://maroquiz.com';

export function positivePage(value: string | null): number {
  return value && /^[1-9]\d{0,5}$/.test(value) ? Number(value) : 1;
}

export function isPrivatePath(path: string): boolean {
  return /^\/(app|admin)(\/|$)/.test(path)
    || /^\/(login|register|forgot-password|reset-password|email-verified)\/?$/.test(path);
}

export function canonicalUrl(value: string): string {
  const url = new URL(value, SITE_ORIGIN);
  const result = new URL(url.pathname, SITE_ORIGIN);
  const filtered = ['q', 'major_id', 'subject_id', 'sort'].some(key => !!url.searchParams.get(key));
  if (!filtered && ['/blog', '/subjects'].includes(url.pathname)) {
    const page = positivePage(url.searchParams.get('page'));
    if (page > 1) result.searchParams.set('page', String(page));
  }
  return result.href;
}

