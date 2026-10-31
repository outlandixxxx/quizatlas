/** Resolve against the document, never against the API (relative assets are not API calls). */
export function apiRequestPath(url: string, apiBase: string, documentBase: string): string | null {
  if (/[\s\\\u0000-\u001f\u007f]/u.test(url) || /%2f|%5c|%2e/i.test(url.split(/[?#]/)[0]))
    return null;
  try {
    const base = new URL(apiBase, documentBase);
    const request = new URL(url, documentBase);
    const path = base.pathname.replace(/\/+$/, '');
    if (
      !['https:', 'http:'].includes(base.protocol) ||
      base.username ||
      base.password ||
      base.search ||
      base.hash ||
      request.username ||
      request.password ||
      request.origin !== base.origin ||
      (request.pathname !== path && !request.pathname.startsWith(path + '/'))
    )
      return null;
    return request.pathname.slice(path.length);
  } catch {
    return null;
  }
}

/** These routes do not authenticate the application session. A 401 there must not log out. */
export function isPublicApiPath(path: string): boolean {
  return (
    /^\/(?:public|trial)(?:\/|$)/.test(path) ||
    path === '/landing' ||
    /^\/auth\/(?:login|register|google|forgot-password|reset-password|email\/(?:verify|resend))(?:\/|$)/.test(
      path,
    )
  );
}
