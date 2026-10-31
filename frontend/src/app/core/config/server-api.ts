/** Map a trusted server configuration, never a URL supplied by an incoming request. */
export function serverApi(publicBaseUrl: string, internalBaseUrl?: string) {
  const baseUrl = (internalBaseUrl?.trim() || publicBaseUrl).replace(/\/+$/, '');
  const internal = new URL(baseUrl);
  const browser = new URL(publicBaseUrl);
  if (
    !['http:', 'https:'].includes(internal.protocol) ||
    internal.username ||
    internal.password ||
    internal.search ||
    internal.hash ||
    internal.pathname !== browser.pathname.replace(/\/+$/, '')
  ) {
    throw new Error(
      'SSR_API_URL must be an HTTP(S) API base URL with the same path as the public API.',
    );
  }
  const originMap: Record<string, string> =
    internal.origin === browser.origin ? {} : { [internal.origin]: browser.origin };
  return { baseUrl, originMap };
}
