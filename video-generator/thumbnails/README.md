# Automatic MaroQuiz thumbnails

`index.js` exposes `suggest(document)`, `validate(document, spec)`, `renderThumbnail(document, {outputDir, outputBase, browser?})`, and `verifyThumbnail(file, spec)`. `outputBase` is the MP4 basename without its extension. The output is `<outputBase>-thumbnail.jpg` plus a local JSON receipt containing the frozen specification and SHA-256 checksum.

The approved snapshot stores `render_options.thumbnail`. Suggestions use complete original questions or facts of readable length, never educational excerpts or answers. Longer content falls back to the stored Subject/Major and the actual item count. A multi-question selection is explicitly labelled as one question from the video. The admin can edit both text fields, choose one of three compositions, and adjust safe colors before approval. Rendering rejects illegible overflow rather than silently truncating or shrinking below the minimum size.

Three compositions are available for all six implemented families: `focus` (framed hook with side/bottom artwork), `split` (separate illustration and text zones), and `editorial` (landscape headline/band or portrait columns). Landscape outputs are 1920×1080; portrait covers are 1080×1920. Each is a JPEG below 2 MB. These moderate dimensions protect WSL memory; YouTube currently recommends 3840×2160 for videos and 2160×3840 for Shorts. Custom thumbnails for Shorts are supported through YouTube Studio desktop, subject to account eligibility. See [YouTube's official thumbnail instructions](https://support.google.com/youtube/answer/72431?hl=en).

`config.js` maps the thirteen verified Major slugs to palettes and general illustrations. Finance and Economy are separate. Language artwork belongs only to its language Major, regardless of content locale. Unmapped Majors, including the combined Economy/Finance ministry, use the neutral palette and original neutral vector. No Subject-specific illustration is guessed. Existing Facts family accents are retained where established (Mathematics purple, Physics orange, Chemistry cyan, IT blue and SVT green). `Language Day` is a planned, non-selectable definition; no generator is claimed.

All text (including the localized template label), the approved display number or its explicit absence, palette values, layout, associations, content locale, seed, asset ID and SHA-256 digest are frozen. The v1 HTML/CSS layout is the rendering contract; future layout redesigns should introduce a new specification version rather than changing retained v1 output. Arabic uses the licensed local Cairo font and RTL composition; logos and illustrations are never mirrored. Existing Nunito/Montserrat font license files remain in `video-generator/assets/fonts/`.

Chosen source assets are copied individually into `assets/versions/<id>/<sha256>.<ext>` so a retained approved job can reproduce the same artwork after the catalogue changes. Keep these immutable source versions while jobs may still need retries; they are part of the source artwork backup. Missing pinned artwork causes a clear error, never an unrelated substitute. The source originals and manifest stay versioned.

Rendering uses one Playwright page, optional caller-owned browser reuse, no remote requests, bounded memory checks, atomic JPEG/receipt creation and checksum verification. Existing files are never overwritten. The runner tracks video, thumbnail and export outcomes separately: a thumbnail retry does not regenerate an MP4, reserve content or allocate a QCM number. Thumbnail preview capabilities use the backend's existing signed local-render flow with purpose `thumbnail` and no usage reservation.

To review and export from the existing admin:

1. Start the existing local Laravel API and Angular app, then run `bash video-generator/start-local-runner.sh` from the repository root. Restart an already-running runner to load these changes; do not interrupt an active video.
2. Open `/admin/youtube-videos` for quiz videos or `/admin/facts-videos` for Facts. Select the existing Major, content and template as usual; review the questions/facts and any Short display numbers.
3. Select **Prepare and preview thumbnails**. Previews run sequentially. For each video, edit the hook/support, select a layout and relevant illustration, or change the palette. Use **Preview thumbnail** after edits. Restore returns to the deterministic suggested design. Legacy Latin quiz snapshots without a content locale allow explicit French/English confirmation.
4. Approve only after all previews succeed, then use the existing Generate action. Only one preview image is retained in the page at a time; earlier images can be displayed again on demand. The frozen settings for every video remain available.
5. A batch exports `video-name.mp4` and `video-name-thumbnail.jpg` to the existing folder. `VIDEO_EXPORT_DIR`, `QUIZ_SHORT_EXPORT_DIR` and `FACT_VIDEO_EXPORT_DIR` retain their current meanings and defaults. Single jobs offer separate MP4/JPEG download links. A failed thumbnail leaves the MP4 successful and available; use **Retry missing thumbnails only**. The retry reads the retained job input, never fresh suggestions, questions or display numbers.

The normal renderer needs only the existing local Playwright/Chromium, fonts, logo and this catalogue. No API key, external image service, migration or new dependency is required. Source PNGs already have verified cutout alpha: their hidden RGB background is invisible; originals were preserved byte-for-byte. See [artwork provenance and licensing](ASSETS.md) and `assets/provenance.json`. Publishing rights for user-supplied artwork are not independently established here.

| General Major / stable slug | Background | Primary accent | Illustration |
|---|---|---|---|
| Santé / `health-competition` | `#092B2E` | `#58D6C3` | Hospital and equipment |
| Éducation / `teaching-competition` | `#2B2148` | `#C9ADF4` | Books, cap and globe |
| Physique / `physics` | `#3E291C` | `#FFA53A` | Newton's cradle, magnet and prism |
| Mathématiques / `mathematics` | `#2A2041` | `#C27BFF` | Geometry tools and book |
| Sciences & IT / `computer-science-it` | `#111E40` | `#4F8CFF` | Computer and network equipment |
| Chimie / `chemistry` | `#07303C` | `#22D3EE` | Laboratory glassware |
| Finance / `finance` | `#163D2A` | `#9BDEB7` | Calculator and financial records |
| Économie / `economy` | `#46291D` | `#F6B48A` | Globe, industry and commerce |
| SVT / `svt` | `#21331B` | `#A3E635` | Microscope, DNA, leaf and fossil |
| Arabe / `arabic` | `#43243A` | `#F3B0CD` | Arabic book and pen |
| Anglais / `english` | `#19364B` | `#A6D5EB` | English learning materials |
| Espagnol / `spanish` | `#4B281E` | `#F7B28C` | Spanish book and pen |
| Français / `french` | `#352444` | `#D4B2EF` | Typewriter, books and É |
| Unmapped / neutral | `#242123` | `#FFD33D` | Original neutral learning vector |

`config.js` also defines secondary accents, main/muted text and badge colors; all text/background combinations are checked for at least 4.5:1 contrast. The catalogue intentionally contains general-Major artwork only. There are no missing required general assets; no specific Subject or scientific explanation is implied by that artwork. An unmapped Major stays neutral until explicitly configured.

Automatic hooks remain conservative: whole short questions/facts or an existing topic label, with up to three suggestions. Long educational statements are never shortened in a way that loses qualifications. An editor may supply a concise truthful topic hook; the review samples include exact source spans such as “La foudre”. Excessive text produces a clear preview error. There is no external language model and no automatic unsupported success-rate/urgency copy.

Implementation files: this `thumbnails/` folder; `video-generator/{local-runner,quiz-batch,video-export,render}.js`; `fact-generator/{job-schema,job-render}.js`; Laravel `ThumbnailSpecValidator`, `LocalRenderController`, `ContentUsage/Sources` and the Fact exporter; Angular `thumbnail-editor/`, thumbnail models, quiz/Facts studios, local-render API and FR/AR/EN translations. Existing generator logic, uploads and educational data are preserved. New focused checks live in `spec.test.js`, `render.test.js`, `../thumbnail-runner.test.js`, `ThumbnailPreviewTest.php` and the affected Angular specs.

Run focused checks sequentially from the repository root (the browser tests need local Chromium and loopback access):

```bash
taskset -c 0,1 node --max-old-space-size=384 --test --test-concurrency=1 video-generator/thumbnails/spec.test.js video-generator/thumbnails/render.test.js video-generator/thumbnail-runner.test.js fact-generator/facts-video.test.js
docker exec quizatlas-php php vendor/bin/phpunit tests/Feature/ThumbnailPreviewTest.php
cd frontend
NG_BUILD_MAX_WORKERS=1 taskset -c 0,1 node --max-old-space-size=640 node_modules/@angular/cli/bin/ng.js test --watch=false --ts-config=tsconfig.thumbnail-spec.json --include=src/app/features/admin/thumbnail-editor/thumbnail-editor.spec.ts --include=src/app/features/admin/youtube-videos/youtube-videos.spec.ts --include=src/app/features/admin/facts-video/facts-video.spec.ts --include=src/app/features/admin/services/local-render.api.spec.ts --include=src/app/features/admin/services/video-batch.api.spec.ts --runner-config=vitest.style.config.mjs
```

For a thumbnail-only contact sheet without generating videos, prepare a JSON array of `{name, source, layout?}` entries referencing retained per-video JSON snapshots, then run `node --max-old-space-size=384 video-generator/thumbnails/review.js cases.json fresh-output-directory`. Optional review `hook` values must appear verbatim in the source; optional `palette` values pass the same strict validation. This path calls no usage or numbering APIs. It renders one image/page at a time and releases its browser on completion or error. The legacy row-based Facts CLI still retains its original cover behavior; current registered admin generators use the approved-snapshot workflow described here.

Local verification on 2026-11-15: 24 Node/browser checks, 41 Angular checks and seven Laravel checks passed (four thumbnail-capability checks plus three existing usage/numbering regressions, all on isolated SQLite). `git diff --check` and CLI syntax checks passed. The [22-sample contact sheet](../output/thumbnail-review-20261115-ready/contact-sheet.jpg) covers all six families, three layouts, five Majors, FR/EN/AR, portrait/landscape, and dark/light palettes. [Review metadata](../output/thumbnail-review-20261115-ready/review.json) records source IDs, frozen specifications, dimensions and SHA-256 digests. Every JPEG was verified, at 126,779–307,908 bytes. Arabic shaping, unmirrored artwork, layout separation and small-size readability were inspected visually. No full video batch or actual Windows-drive export was performed; retry/export behavior was checked with mocks and temporary directories, including a real JPEG copy. No production data or educational records were changed.
