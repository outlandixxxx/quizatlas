# Public video library

Public route: **`/videos`**. Administration: **`/admin/video-library`** →
**Public video library** in the existing admin menu.

The new `video_library_entries` table contains only the curated YouTube
catalogue. Existing `VideoSet` records describe generation jobs and approved
question snapshots; reusing their status would couple publishing to rendering.
No generator, numbering, usage-registry or educational records were changed.

## Local setup

The additive migration has **not** been applied to the development database.
Apply only this feature's migration when ready; this avoids running unrelated
pending migrations:

```bash
docker exec quizatlas-php php artisan migrate --path=database/migrations/2026_11_13_000000_create_video_library_entries.php
docker exec quizatlas-php php artisan route:clear
```

Optional backend configuration: enable **YouTube Data API v3** for a Google
Cloud project and set `YOUTUBE_API_KEY` in the backend environment. Restrict
the key to that API and the backend's server address where appropriate. Keep
the key out of Angular and Git. After changing it, clear the existing Laravel
configuration cache locally. **Manual title entry works without a key.**

Metadata review sends at most one official `videos.list` request per batch of
50 URLs, with timeouts, no redirects and a six-hour cache. Classification is
always confirmed by the administrator. API-derived duration/embedding status
remain cache-only; titles become administrator-confirmed editorial values.
Reviewing an existing URL refreshes optional metadata without changing the
entry. Thumbnail requests use a fixed YouTube image endpoint through the API,
with size/type limits and caching. No browser thumbnail request contacts Google.

The production Nginx source adds only `https://www.youtube-nocookie.com` to
`frame-src`. This configuration has not been deployed or reloaded.

## Add one video

1. Open **Admin → Public video library**.
2. Paste one YouTube watch, Shorts, embed or `youtu.be` URL.
3. Choose format, Quiz/Facts category, template, content language and publication
   status. The default status is **Unpublished**.
4. Select **Review URLs**, confirm or enter the title, then **Save ready rows**.
5. Use **Publish / Unpublish**, **Edit** or **Remove** in the catalogue below.

## Import several videos

Paste up to **50 URLs, one per line**. Choose shared defaults, then review the
editable table. Each row keeps its original URL, normalized ID and individual
classification. Correct a URL with **Check URL** without losing its title or
overrides. Existing records and same-batch duplicates are identified before
saving. Only ready, unique rows are submitted. Failed rows retain their entered
values; retrying a successful request returns the existing entry rather than
overwriting or publishing it. Database uniqueness also protects concurrent imports.

YouTube identity cannot change during editing. Removal affects only the library
entry, preserving the YouTube video, local media and generation history.

## Consent, playback and catalogue behavior

- Interface and content language are independent. FR/EN/AR labels and Arabic RTL
  are supported. All shows both sections; individual format tabs show one only.
- Each section holds at most 12 cards. Pagination replaces its current page.
  The Shorts carousel uses native touch scrolling, snap points and keyboard
  arrows/Home/End; it does not slide automatically.
- YouTube is a separate optional consent category. Existing saved Analytics or
  advertising choices do not grant video permission. Users can withdraw it in
  the existing cookie preferences. Expiry/withdrawal removes the iframe.
- One privacy-enhanced official iframe loads on demand. Playback uses YouTube's
  native Play button, controls and attribution. Closing or navigation releases it.
  An Open on YouTube fallback remains available. No official view counts are
  inferred from local interactions.
- `/videos` is server-rendered and canonical. Query variations are noindex/follow.
  Private admin routes retain the existing authorization and SEO restrictions.

## Focused verification commands

From the repository root:

```bash
docker exec -e APP_ENV=testing -e DB_CONNECTION=sqlite -e DB_DATABASE=:memory: -e DB_URL= -e CACHE_STORE=array quizatlas-php vendor/bin/phpunit tests/Feature/VideoLibraryTest.php
```

From `frontend/`:

```bash
NG_BUILD_MAX_WORKERS=1 node --max-old-space-size=768 node_modules/@angular/cli/bin/ng.js test --watch=false --ts-config=tsconfig.video-library-spec.json --include=src/app/features/public/video-library/video-library.spec.ts --include=src/app/features/admin/video-library/video-library.spec.ts --include=src/app/core/services/video-library-api.spec.ts --include=src/app/core/services/google-tracking.spec.ts --include=src/app/shared/components/cookie-consent/cookie-consent.spec.ts --runner-config=vitest.style.config.mjs
NG_BUILD_MAX_WORKERS=1 GOMAXPROCS=2 NODE_OPTIONS=--max-old-space-size=768 node node_modules/@angular/cli/bin/ng.js build --configuration production
```

After building, from the repository root, run these **sequentially**:

```bash
taskset -c 0,1 node --max-old-space-size=256 frontend/scripts/check-video-library-ssr.cjs
taskset -c 0,1 node --max-old-space-size=256 frontend/scripts/check-video-library-browser.cjs
VIDEO_LIBRARY_LIVE_PLAYER=1 taskset -c 0,1 node --max-old-space-size=192 frontend/scripts/check-video-library-live-player.cjs
```

The browser harness uses fixture API responses and never imports application
records. Public screenshots can use `/tmp/maroquiz-video-library-assets/review-catalogue.json`
and matching `{youtube_id}.jpg` files for read-only real-channel examples;
otherwise it explicitly reports synthetic fixtures/logo fallback. Existing Google
font requests are bounded and cached during the check. The optional live-player
check makes one real, consented YouTube attempt and records any network/player
limitation rather than claiming success. Screenshots and JSON evidence are in
`frontend/output/video-library-review/`, excluded from Git.

Official references verified for this implementation:
[videos.list](https://developers.google.com/youtube/v3/docs/videos/list),
[embedded player parameters](https://developers.google.com/youtube/player_parameters),
[privacy-enhanced embedding](https://support.google.com/youtube/answer/171780), and
[player identity, size and controls](https://developers.google.com/youtube/terms/required-minimum-functionality).

## Review results

- Laravel: **13 tests / 159 assertions passed**, exclusively SQLite `:memory:`.
- Angular: **78 tests passed** across the public page, admin manager, API,
  Google consent and cookie controls.
- Production build passed. It reports existing stylesheet-budget warnings in
  unrelated components. SSR checks passed for the base and filtered catalogue,
  including initial cards, canonical/noindex and no external-provider requests.
- Five sequential Chromium scenarios passed: desktop French, mobile French
  (390 px), mobile Arabic (320 px), dark English desktop, and admin bulk review.
  They verify real CSP behavior, touch gestures, RTL keyboard order, bounded
  pagination, consent/withdrawal, modal cleanup, row error preservation,
  publication/editing and explicit removal. All three existing font downloads
  succeeded; no fixture CSS overrides were used.
- The real official YouTube iframe loaded a public MaroQuiz Short after explicit
  consent. A native preview click was attempted, but playback time did not advance
  within the bounded headless check. **Live content playback remains unconfirmed**;
  the fallback link and iframe release work. No official view count is claimed.
- Screenshots: `desktop-fr.png`, `mobile-fr-light-390.png`,
  `mobile-ar-light-320.png`, `desktop-en-dark-1280.png` and
  `admin-bulk-review-fr.png`, all in the ignored review directory above.
  They precede the final navbar-only change moving Videos before About Us.
  That simple reorder was checked without repeating the build or suites.

The new library migration and optional API configuration remain local setup
steps. No existing application database or production service was changed.

## Files

- Backend: `app/Models/VideoLibraryEntry.php`; `app/Http/Controllers/Api/{AdminVideoLibraryController,PublicVideoLibraryController}.php`;
  `app/Http/Controllers/SitemapController.php`; `app/Http/Requests/VideoLibraryIndexRequest.php`;
  `app/Http/Resources/VideoLibraryEntryResource.php`; `app/Services/{VideoLibraryService,YouTubeVideoUrl,YouTubeLibraryMetadata,YouTubeLibraryThumbnail}.php`;
  `routes/api.php`; `config/services.php`; `.env.example`; the one named migration;
  `tests/Feature/VideoLibraryTest.php`.
- Angular: public/admin `features/*/video-library/` components and specs;
  `core/models/video-library.ts`; `core/services/video-library-api.ts` and spec;
  `core/services/google-tracking.ts` and spec; existing cookie-consent TS/HTML/spec;
  `app.routes.ts`; admin menu TS; public header HTML; FR/AR/EN dictionaries;
  `tsconfig.video-library-spec.json`; three `scripts/check-video-library-*.cjs` files;
  `.gitignore`.
- Integration: `infrastructure/docker/nginx/default.prod.conf`; this document.

No commits, pushes, deployments, seeders or application-database operations are
part of this implementation.
