# Frontend SEO review — 21 October 2026


## Implementation status

The necessary frontend fixes from this review have been implemented. API contracts,
backend tables/controllers, existing English slugs, and admin styling were preserved.

- Metadata waits for translations to load and updates when the interface language changes.
- SSR translations are bundled locally instead of fetched over the network.
- Quiz titles/descriptions and social locale use French, matching the actual question,
  answer, and explanation content. English/Arabic interface preferences remain available.
- Existing quiz URLs remain the canonical URLs. No translated slugs or additional
  language URL variants were introduced; hreflang is deferred until quiz content is translated.
- Blog titles and pagination now use crawlable links, including direct `/blog?page=2` loading.
- `/subjects` provides a crawlable, paginated directory using the existing public API.
  The shared footer links to it; no new API endpoint was added.
- Canonicals retain valid blog/directory page numbers while omitting tracking/filter parameters.
- Trial and blog details reload on parameter changes and cancel obsolete reads.
- Missing pages return 404; missing API records return 404/410; temporary failures return 503.
  Error pages contain useful navigation and are excluded from indexing.
- Auth pages emit noindex. Private user/admin SSR route responses include X-Robots-Tag.
  Authentication-page robots exclusions were removed so crawlers can see their noindex.
- Social card settings are consistent, and static translations/robots files revalidate
  instead of inheriting the frontend server's previous one-year cache lifetime.

Optional translated URLs, additional structured data, content rewrites, backend sitemap
changes, and infrastructure changes were deliberately excluded from this implementation.

Validation passed: 18 SEO regression tests, 32 existing frontend tests, 12 frontend
security tests, the production build, and the offline SSR integration checks.

Verification is documented with `src/app/core/seo/seo.spec.ts` and the offline integration
check `node scripts/check-seo.mjs` (run after a production build). The latter checks
actual SSR output with fixture API responses; it does not contact a backend or launch a browser.

The original audit below records the findings before these fixes. Its live deployment,
Search Console, and Core Web Vitals verification limits still apply.

---

## Original audit

Scope: landing page, public major/subject trials, blog listing and detail pages,
About/FAQ/Help/legal pages, authentication pages, and authenticated user/admin
routes. This is an audit and improvement proposal; application behavior was not
changed.

The project has a useful SEO foundation, but several implementation issues
should be addressed before spending time on smaller optimizations. SEO cannot
be certified as “perfect,” and implementation checks cannot guarantee rankings.

## Evidence and limits

- Reviewed the Angular routes, SSR configuration, metadata services, translation
  loading, public templates, robots file, sitemap implementation, and production
  reverse proxy configuration.
- Exercised the existing production SSR build in process, without browser
  automation. Follow-up checks supplied the real local English translation JSON
  through mocked Node HTTP responses. Other outgoing HTTP requests in those
  follow-up checks received fixture responses, rather than contacting the API.
- With translations successfully loaded, the About/FAQ/Terms headings rendered
  in English, but their title and description still contained translation keys.
  The blog listing showed the same metadata issue.
- An unknown URL returned HTTP 302 to `/` in a local SSR check. `/login` returned
  `index, follow` in its HTML. Source inspection confirms that all routes inherit
  that robots policy unless something outside this repository overrides it.
- The public website, robots file, and sitemap were inaccessible through the web
  inspection tool during this review. That is a verification limit, not proof
  that the site is down. Deployed responses, Search Console data, indexing,
  Core Web Vitals, and search rankings have not been verified.

## What is already in place

- Public routes use server rendering; `/app/**` and `/admin/**` use client rendering
  (`src/app/app.routes.server.ts`).
- Canonicals are maintained centrally and omit query strings/fragments
  (`src/app/app.ts`). This policy should be refined if indexable pagination is added.
- Public pages have title/description/social-tag implementations. The important
  issue below is when translated metadata is populated, rather than absent tags.
- The landing page supplies Organization and WebSite JSON-LD.
- Public templates include main headings, and trial pages contain contextual
  text, catalog statistics, levels, and related-subject anchors.
- HTTPS and www-to-apex redirects are configured in the production proxy.
- The production sitemap is dynamic: Nginx proxies `/sitemap.xml` to Laravel;
  `backend/bootstrap/app.php` registers `SitemapController`. It includes active,
  nonempty major/subject trial URLs and blog detail URLs. The small static
  `public/sitemap.xml` is a separate fallback, not the configured production source.
- WebP assets, responsive logo variants, lazy routes, and build-size budgets
  provide a basis for performance work.

## Priority findings

### 1. High: translated metadata can remain translation keys

Observed with successful local translation responses:

| URL | Rendered heading | HTML title | Meta description |
| --- | --- | --- | --- |
| `/about` | About MaroQuiz | `about.seo_title` | `about.seo_description` |
| `/faq` | Frequently Asked Questions | `faq.seo_title` | `faq.seo_description` |
| `/terms` | Terms of Service | `legal.terms.seo_title` | `legal.terms.seo_description` |
| `/blog` | Blog (with its icon) | `blog.seo_title` | `blog.seo_description` |

These pages call `translate()` synchronously before the translation file has
loaded. Their metadata effects track the language signal, rather than translation
readiness, so successful loading does not necessarily update the metadata.
About, FAQ, Help, Terms, Privacy, Data Deletion, and the blog listing share this
pattern. Trial metadata has a similar timing dependency on both translations
and its API response.

Recommendation: use a translation-ready observable/signal for metadata, or load
the initial translation before rendering and keep metadata reactive to language
changes. The landing page's `selectTranslate()` subscription is a useful existing
example. Verify the final HTML title, description, and social tags on direct SSR
requests as well as client navigation.

Evidence: `src/app/features/public/about/about.ts:37`,
`src/app/features/public/blog/blog.ts:100`,
`src/app/features/landing/pages/landing/landing.ts:44`.

### 2. High: blog discovery relies on click handlers

Blog cards are clickable `<div>` elements, and their headings are not links.
Blog pagination and catalog pagination also use buttons. A user can navigate,
but a crawler does not get equivalent destinations from those controls.

Recommendation: make each blog title a real Angular `RouterLink` anchor that
renders an `href`. Give indexable listing pages distinct URLs with sequential
links and direct-request support. Keep search/sort/filter combinations out of
the index unless they provide independently useful content. If pagination
becomes indexable, preserve its page parameter in canonicals instead of
canonicalizing every page to the first page.

The dynamic sitemap helps discovery but does not replace internal navigation.
Google documents that crawlers generally follow anchor URLs and do not click
pagination buttons: [crawlable links](https://developers.google.com/search/docs/crawling-indexing/links-crawlable),
[pagination](https://developers.google.com/search/docs/specialty/ecommerce/pagination-and-incremental-page-loading).

Evidence: `src/app/features/public/blog/blog.html:38` and `:80`,
`src/app/features/public/majors-subjects-browser/majors-subjects-browser.html:186`.

### 3. High: unknown URLs and unavailable content need correct status handling

The wildcard route redirects every unknown path to the homepage; the local SSR
check returned 302. Trial and blog detail API errors are caught without setting
an HTTP error status for the rendered page. A missing item can consequently
produce a normal-looking HTTP 200 response with empty or fallback content.

Recommendation: render a useful Not Found page with HTTP 404 for nonexistent
URLs and missing records. Distinguish temporary API failures and return an
appropriate temporary server error, rather than treating them as missing records.
Keep those pages out of the sitemap and retain relevant navigation.

This requires frontend/SSR response handling and deployed HTTP verification;
it does not inherently require changing the API contract.
See [Google's JavaScript SEO guidance](https://developers.google.com/search/docs/crawling-indexing/javascript/javascript-seo-basics).

Evidence: `src/app/app.routes.ts` wildcard route,
`src/app/features/public/trial-quiz/trial-quiz.ts:158`,
`src/app/features/public/blog/blog-detail/blog-detail.ts:85`.

### 4. Medium: metadata and content can become stale after route parameter changes

Trial subjects/majors and blog details read route parameters only from the initial
snapshot in `ngOnInit()`. Angular normally reuses a component when only parameters
on the same route change. Following a related-subject link can therefore leave
the old trial/content/metadata while the central canonical updates to the new URL.
This is a source-level finding; browser reproduction was not performed here.

Recommendation: react to `paramMap` changes, cancel obsolete requests, reset quiz
state on subject changes, and update content and metadata from the same result.
Regression-check subject A → subject B and blog item A → item B without refresh.
Angular documents that [snapshots do not reflect future changes](https://angular.dev/guide/routing/read-route-state).

Evidence: `src/app/features/public/trial-quiz/trial-quiz.ts:96`,
`src/app/features/public/blog/blog-detail/blog-detail.ts:63`.

### 5. Medium: indexing policy needs explicit treatment for nonpublic pages

`src/index.html` declares `index, follow` globally, including the rendered login
page. Robots.txt disallows user/admin/auth paths, but that is crawl control,
not an explicit indexing exclusion.

Recommendation: define a route-specific indexing policy and emit `noindex` in
the initial response for pages that should not appear in search. Preserve
authentication and role guards. Coordinate robots rules with that policy:
crawlers must be able to retrieve a `noindex` rule to observe it. Do not simply
add `noindex` to blocked URLs and assume it has taken effect.
See [Google's noindex guidance](https://developers.google.com/search/docs/crawling-indexing/block-indexing).

Evidence: `src/index.html:16`, `public/robots.txt`.

### 6. Medium: French and Arabic are preferences, not separately discoverable versions

The same URL changes language using a browser preference. Server initialization
uses the English default, there are no language-specific route variants, and
there are no hreflang annotations. The default English homepage title also
contains French wording. Open Graph locale remains `en_US` when language changes.

Recommendation: decide whether French/Arabic should be indexed. If so, plan
stable, directly renderable language URLs with reciprocal hreflang entries and
language-specific self-canonicals; update the sitemap accordingly. Only add
hreflang for real alternate pages. If English is the sole search target, keep
that policy explicit and align the English title and default metadata.
See [localized versions](https://developers.google.com/search/docs/specialty/international/localized-versions).

Evidence: `src/app/core/services/language.ts`,
`src/app/app.ts:34`, `src/assets/i18n/en.json:482`, `src/index.html:38`.

## Further improvements

| Area | Suggested action | Verification/scope |
| --- | --- | --- |
| Structured data | Add visible breadcrumbs and matching BreadcrumbList data on useful catalog/detail pages. Consider QAPage for eligible single-question community pages with user-submitted answers. | Frontend work; validate eligibility and markup. Do not apply QAPage to a whole multi-question quiz or promise rich results. |
| Quiz content | Improve each subject's descriptive introduction, learning objectives, available levels, and useful contextual links. Render this content independently of whether a random trial contains questions. | Frontend structure; subject-specific content may need existing admin/backend content entry. |
| Social previews | Keep card settings consistent: the HTML starts with `summary_large_image`, but the SEO service switches to `summary`. Consider a dedicated branded share banner with matching dimensions and useful alt text. | Frontend/assets; test actual platform previews. This is a sharing improvement, not a ranking guarantee. |
| Sitemap accuracy | Preserve the dynamic sitemap; include `/data-deletion` if it is intended to be indexed. Review whether parent `updated_at` values reflect meaningful changes to subject content. Scale to a sitemap index if necessary. | Sitemap changes involve backend/deployment scope; not changed by this audit. |
| Static caching | Review long caching for unhashed translation files and robots.txt. The Express static handler applies a one-year maximum age broadly. Keep immutable caching for versioned assets. | Frontend server/deployment behavior; verify response headers before changing. |
| Performance | Measure production mobile LCP, INP, and CLS. Prioritize fonts, large component styles, layout stability, and API-dependent sections based on measured bottlenecks. | Requires a reachable deployment and preferably Search Console/CrUX field data. No performance score was invented here. |
| Monitoring | Inspect representative home, subject, blog, and utility URLs in Search Console; check chosen canonicals, rendered HTML, sitemap status, and indexing exclusions. | Requires the site's Search Console access; not accessed during this review. |

Google's good Core Web Vitals thresholds are LCP at most 2.5 seconds, INP at most
200 milliseconds, and CLS at most 0.1:
[Core Web Vitals](https://developers.google.com/search/docs/appearance/core-web-vitals).
For community markup, follow the [QAPage requirements](https://developers.google.com/search/docs/appearance/structured-data/qapage).

## Recommended order

1. Fix translation-ready metadata, crawlable blog links, and HTTP error pages.
2. Fix parameter-change updates and the route-specific indexing policy.
3. Decide multilingual URL strategy before introducing hreflang or changing canonicals.
4. Improve subject content and eligible structured data.
5. Verify the deployed sitemap, rendering, indexing, and measured performance.

Most initial improvements can be implemented in the frontend and its SSR layer
without changing API payloads. Sitemap changes and deployment-specific behavior
should remain separate, reviewable work.
