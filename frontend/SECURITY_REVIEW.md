# Frontend security audit — local hardening

Reviewed on 2026-10-20. Applied only the browser-side hardening listed below,
which can be verified locally. The existing API endpoints, request payloads,
authentication headers/storage, login redirects, PDF requests, production security
configuration, and locked dependency versions are preserved.

The requested admin refresh correction waits for the same existing `/auth/me`
request before navigation checks the admin role. It does not change that request
or the backend response contract. Admin pages now use English text and LTR
layout; their stylesheets are unchanged. Public/student pages retain their
language options.

## Applied without backend changes

- **Production error logs:** login, Google login, registration, password reset,
  and dashboard error handlers no longer print raw error objects in production.
  Development diagnostics and the existing user-facing validation/error feedback
  remain available. Login request payloads are covered by regression tests.
- **JSON-LD escaping:** structured metadata escapes `<` during JSON serialization,
  preventing closing-script text from breaking out of a script in SSR HTML. A
  malicious-payload round-trip test verifies that the JSON values are preserved.
- **Display preferences:** stored theme/language values are checked against the
  existing supported options. Invalid values fall back to `system`/`en`, and
  blocked browser storage cannot crash optional preference reads/writes.
  Authentication-token storage is unchanged.
- **PDF opener isolation:** the existing admin blob preview opens with `noopener`.
  Its URL, request, response, and file handling are unchanged; the new window has
  no access to the application window through `window.opener`.

## Scope and limits

Reviewed browser authentication/storage, route guards and startup timing, DOM
rendering and JSON-LD, Google/reCAPTCHA loading, PDF previews, application logging,
SSR/static-file behavior, production Nginx headers, package-lock advisories, and
bundled image references. A private-credential pattern scan was also performed.

This is a frontend source/dependency audit, not a backend penetration test.
Backend authorization, token validation/revocation, upload validation, rate
limits, password security, and the live deployed configuration were not verified.
Browser execution was not approved. Real Google authentication, PDFs, and backend
integration must therefore be checked in the existing application before any
recommended security changes are adopted.

## Confirmed risks in the current code

| Priority | Finding | Evidence and impact | Recommendation |
| --- | --- | --- | --- |
| High | Bearer token is added to every Angular HTTP request | `src/app/core/interceptors/auth-interceptor.ts` attaches the application token without checking the destination. This includes asset requests and could include future third-party requests. A third-party server accepting such a request could receive the token. No actual token leak was demonstrated. | Consider restricting automatic token attachment to the configured API origin/path, after checking all existing download/API URLs. |
| Medium | Login token is readable by JavaScript | `src/app/core/services/token.ts` stores the access token in `localStorage`. An injected or compromised script running in the application origin could read it. No exploitable XSS input path was found in this review. | A Secure, HttpOnly cookie/session design can reduce token theft, but requires coordinated backend authentication and CSRF changes. This is not a frontend-only replacement. |
| Medium | Script CSP allows inline JavaScript | `../infrastructure/docker/nginx/default.prod.conf` uses `script-src 'unsafe-inline'`, and lacks explicit `base-uri`/`object-src` restrictions. This weakens defense if HTML injection occurs. | Assess a nonce/hash policy against Angular SSR/hydration, Google sign-in, and reCAPTCHA. Do not remove inline-script support without integration testing. |
| Medium | Static-file location drops inherited security headers | The Nginx asset location declares its own `add_header Cache-Control`, preventing default inheritance of server-level security headers. | Reuse a common security-header include or explicit merging supported by the deployed Nginx version; check actual response headers. |

The token-header and storage findings are source-confirmed behaviors, not proof
of compromise. Angular route guards are navigation controls; backend permission
checks must independently enforce roles and ownership.

References: [Angular security](https://angular.dev/best-practices/security),
[OWASP browser storage guidance](https://cheatsheetseries.owasp.org/cheatsheets/HTML5_Security_Cheat_Sheet.html#local-storage),
[Nginx header inheritance](https://nginx.org/en/docs/http/ngx_http_headers_module.html#add_header).

## Locked dependency advisories

The original lockfile audit reports **6 vulnerable package entries: 2 critical
and 4 high**. All six entries are marked as development dependencies. These
results concern build/development tooling; they do not establish a remotely
exploitable vulnerability in the deployed quiz application. Parent-package
entries may reflect the same underlying transitive advisory.

| Package | npm severity | Location |
| --- | --- | --- |
| `@angular/build` | Critical | Development/build tooling |
| `piscina` | Critical | Transitive build dependency |
| `@angular/cli` | High | Development tooling |
| `@modelcontextprotocol/sdk` | High | Transitive CLI dependency |
| `http-cache-semantics` | High | Transitive tooling dependency |
| `vite` | High | Development server/build tooling |

Dependency changes made during the initial implementation were reverted. Adopt
updates in a separate, tested change if desired; avoid a forced Angular major
upgrade as an automatic response to the audit.

Relevant upstream advisories include
[piscina](https://github.com/advisories/GHSA-67c8-pqhq-4rmx),
[HTTP cache semantics](https://github.com/advisories/GHSA-ch52-4w7c-c8xp),
[MCP SDK](https://github.com/advisories/GHSA-6qxp-vccf-f47h), and
[Vite/editor handling](https://github.com/advisories/GHSA-r825-w8mm-5pxw).

## Potential failures to verify against the existing backend

1. **Repeated Google login in the same browser session.**
   `src/app/core/services/google-auth.service.ts` initializes its callback once.
   That callback captures the first observable subscriber, while later
   `renderButton()` calls do not update it. Check login → logout → Google login
   again without a full page reload. This is a source-level lifecycle concern,
   not a claim that the existing backend login endpoint fails.
2. **Student PDF navigation.** The library/dashboard use `window.open(view_url)`;
   the admin page instead downloads with HttpClient and a bearer token. If the
   student PDF endpoint requires that header, normal navigation cannot supply
   it. If the endpoint uses a public/signed URL or another supported session
   mechanism, the existing behavior may be correct. Verify before changing it.
3. **PDF preview memory.** Admin PDF previews create object URLs without revoking
   them, retaining Blob memory after repeated previews.
4. **Temporary identity-request failures.** Existing startup clears the token
   when `/auth/me` fails, including network/server errors. This may sign users out
   during a transient outage. The requested refresh fix preserves this existing
   error behavior.
5. **Browser storage restrictions.** Display preference access now handles blocked
   storage locally. Token storage and social-pack storage still access
   localStorage directly and can throw if it is blocked; those flows are unchanged.

## Rendering and resource checks

- Application templates use Angular text bindings. No direct `innerHTML`,
  `eval`, `new Function`, `srcdoc`, `postMessage`, or sanitizer bypass was found
  in application rendering code by the source scan.
- JSON-LD currently receives static organization/site data. Its serialization
  now escapes `<`, preserving JSON values while preventing script-tag breakouts
  if editable metadata is introduced later.
- No private-key/secret-key pattern matched the scanned frontend source. Google
  client IDs and reCAPTCHA site keys are public browser configuration.
- Google sign-in/reCAPTCHA use fixed HTTPS script origins. They remain external
  trust dependencies, so changes to CSP should include real integration checks.
- Production static resources currently receive a one-year immutable cache even
  when filenames are not content-hashed. Consider shorter/revalidated caching
  for translations and unchanged asset filenames to reduce stale deployments.

## Requested image/performance work

- Active bundled PNG references now use WebP, including the shared logo,
  favicon/social metadata, and missing teacher-avatar fallback.
- The logo has responsive WebP sizes. Existing preset avatars and the dashboard
  illustration are resized/compressed while preserving their aspect ratios.
- PNG/JPEG source originals remain in the repository but are excluded from the
  production asset copy. SVG icons remain vector assets.
- Bundled assets fall from approximately **10.46 MB to 1.62 MB (84.5% smaller)**.
  The optimized avatar/dashboard subset falls from 1,772,026 to 220,856 bytes.
- The public layout and landing feature load lazily. The initial bundle falls
  from 659.00 KB to 451.72 KB (31.5% smaller). API request logic is unchanged.
- Backend-provided/uploaded image URLs retain their existing formats; changing
  them to `.webp` without server conversion would break valid images.

## Validation

Passed on the original locked dependencies:

- `npm run test:style`: 32 tests, including unchanged login payloads and
  production error feedback.
- Frontend-only security suite: 12 tests (44 tests in the current validation run).
- Previous admin refresh/language regression run: 5 tests; that code is unchanged.
- `npm run build`: successful, with style-budget warnings and an existing
  optional-chain warning in the social-pack template.
- No stylesheet changed during this audit; original SCSS checksums match.
- Production asset inventory: no PNG/JPEG files copied to `assets/`.

Run the frontend-only security suite from `frontend/` with:

```sh
npx ng test --watch=false --ts-config=tsconfig.frontend-security-spec.json --runner-config=vitest.style.config.mjs --include=src/app/core/utils/frontend-security.spec.ts
```

Run the admin regression suite from `frontend/` with:

```sh
npx ng test --watch=false --ts-config=tsconfig.admin-spec.json --runner-config=vitest.style.config.mjs --include=src/app/core/initializers/auth.audit.spec.ts --include=src/app/layouts/admin-layout/admin-layout.audit.spec.ts
```

Browser and live backend integration checks were not performed. The remaining
authentication, CSP/deployment, download, and dependency recommendations have not
been applied; they require separate integration review.
