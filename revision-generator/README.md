# MaroQuiz Revision Generator — PNG sheets and PDF books

A local draft worker hosted by the **existing** video runner. This folder owns notebook templates, measured image/A4 pagination, PNG/PDF/ZIP output and manifests. It reuses `video-generator/node_modules/playwright`, the licensed Patrick Hand/Cairo fonts and MaroQuiz logo. There is no second service, Playwright installation or application copy. PDF integrity verification adds one pinned dependency, PDF.js, in this folder.

## Launch and use

From Windows, run the existing `start-maroquiz-video-renderer.cmd` and leave its console open. It starts the existing Ubuntu project at `/home/lenovo/Projects/quizatlas`, including quiz video, Facts Short/Long, revision images and PDF books on **127.0.0.1:3777**. Laravel and the Angular development app must already be running as usual.

The PDF verifier requires Linux Node 22.13+ (verified with Node 24). Once per Linux checkout, restore its pinned dependency:

```bash
cd /home/lenovo/Projects/quizatlas/revision-generator
npm ci --ignore-scripts
```

Do this in Ubuntu, not Windows. The launcher checks the PDF dependency and both existing Linux Chromium installations; missing dependencies produce a specific error. No duplicate Windows packages are needed.

From Ubuntu, the equivalent is:

```bash
bash video-generator/start-local-runner.sh
```

Check dependencies without starting another runner:

```bash
bash video-generator/start-local-runner.sh --check
```

In `/admin/revision-json`, select a major, subject and one/multiple/all quizzes. Choose **Fiches de révision — explanations only** or **Questions corrigées**, independently choose **Images (PNG)**, **Revision Book (PDF)** or **Images + PDF**, then click the single generation button. Explanations-only and PNG remain the defaults. Document language selects English/French/Arabic furniture and true/false labels independently of the interface; it does not translate educational content. Selection automatically loads the existing exporter with its opt-in correction extension, with at most two requests at a time; generation waits for pending sources. Every initial explanation is exact, in `(order, question_id)` order. No AI or rewriting is involved. Review is optional; approval is **not** required to render or download.

Results show the current phase, cancel/retry controls, direct PDF download/preview, individual PNG downloads, per-quiz image ZIPs and a complete-selection ZIP containing all successful requested formats. PDF preview opens the browser's native viewer when available. All exports remain drafts, including locally reviewed inputs; review never grants publication. No publication, notifications or resource associations occur.

## Print-friendly A4 books

`book-template.js`, `book-pagination.js`, `book-render.js` and `book-verify.js` handle PDF output separately from the unchanged PNG template/paginator. Chromium prints real text with embedded fonts, not screenshots: [Playwright PDF API](https://playwright.dev/docs/api/class-page#page-pdf). The worker uses [PDF.js](https://mozilla.github.io/pdf.js/examples/) to parse and verify the result before making it downloadable.

- Actual A4 portrait, white background, faint vector notebook rules/margin, subtle yellow highlights, existing logo and navy text. Patrick Hand body stays at **14 pt**, with a readable **12 pt Cairo** style for RTL paragraphs. Text never shrinks to fit.
- Cover: MaroQuiz, localized title for the chosen content mode, major, subject, quiz/source counts and a discreet draft label. Document language localizes book furniture; it does not translate source material.
- Multiple quizzes get a contents section with original quiz titles and verified internal chapter links. One quiz omits unnecessary contents. A bounded three-pass calculation accounts for contents pages themselves.
- Chapters flow into available space; a quiz does not force a new page. Headings stay with introductory text. In explanations-only mode, long paragraphs continue at grapheme/word boundaries, retain their number and show `↳`; no paragraph titles, difficulty, questions or answer choices appear. Corrected mode uses the question/answer/explanation flow described below.
- **Page convention:** the unnumbered cover is physical PDF page 1; contents and chapter footers use physical page numbers `2 / N`, `3 / N`, etc. Contents references match the PDF viewer's page numbers.
- Exact frozen paragraph reconstruction, DOM text and body/header/footer bounds are checked before printing. Verification then requires a complete PDF, expected A4 page count, nonblank searchable pages, embedded font mappings, correct chapter destinations and each paragraph's normalized extracted text in its measured region. RTL extraction can reorder shaped runs or mirror paired punctuation: those cases additionally require exact DOM source slices/order and matching normalized characters within that same region. Missing text still fails.
- Private `book-layout.json` retains offsets/regions/chapter references; the manifest records source/draft hashes, PDF integrity hash and verification counts. These sidecars and raw source snapshots are excluded from downloads; the catalogue index retains the existing provenance summary.
- Safe book filenames include subject/quiz ID, readable slug and input/renderer signature. PDF and PNG share one immutable snapshot and one sequential browser workload. Failed PDF verification does not discard good PNGs. Retry hash-checks and retains valid unchanged formats; corrupt/missing files are rebuilt.

Limits: **500 A4 pages and 100 MB per PDF**, alongside the existing 2 MB request, 1000-quiz, 10000-paragraph and archive limits. Oversized or unsupported layouts fail with an error; use a smaller selection or review the draft. This is local draft export, with no automated cleanup, publication or shared editorial persistence. Formula content remains plain Unicode; there is no TeX parser or automatic educational correction.

## Typography and pagination

- 1080 × 1350 PNGs; simple local **Patrick Hand Regular**, fixed **28 px** body type, with existing Cairo fallback for Arabic glyphs. This replaces the earlier larger Kalam design study.
- Major → subject → quiz title; existing logo; ruled ivory notebook, restrained highlights, circled paragraph numbers and quiz-local page numbering. No difficulty or paragraph titles.
- Real Chromium measurements after fonts load determine image count. Paragraph breaks are preferred; no fixed six-paragraph or one-image limit.
- A paragraph longer than a page continues at measured character/word boundaries, without changing any characters. Its paragraph number remains the same with `↳` on continuation pages. The next paragraph continues its numbering; the next quiz starts at 01. This is visual continuation, not an editorial rewrite or new summarized paragraph.
- Exact segment reconstruction, DOM text and final image bounds are checked. An impossible header/layout returns an error rather than shrinking or truncating text.
- Highlighting marks a short initial phrase as a visual aid; it does not assert that the phrase is an approved key concept.

Patrick Hand is bundled under its [OFL licence](assets/OFL-PatrickHand.txt), from the [official Google Fonts repository](https://github.com/google/fonts/tree/main/ofl/patrickhand). No runtime font/network download is needed. Formula strings remain plain Unicode/text; this does not introduce TeX parsing.

## Questions corrigées

This is a content branch of the same exporter, editor, worker and download system, with no extra service or dependencies. Each numbered entry contains the original question, **only its correct answer(s)** and its mapped revision explanation. Question/answer text is read-only; explanation edits are draft-only. Incorrect choices are neither exported nor drawn. All stored correct choices are kept in `(order, id)` order, including distinct choices with identical wording. Single-choice requires exactly one correct answer; multiple-choice requires at least one, matching the existing application. True/false requires recognizable opposite stored labels (`True/False`, `Vrai/Faux`, `صحيح/خطأ`), then displays the verified truth value in the document language. Choice positions and explanation wording are never used to infer correctness.

The existing admin-only JSON endpoint accepts `?include=corrected_questions`. Its optional `correction` section has format `corrected-questions-v1`, stable question/choice IDs, quiz ownership, type, order, raw question/correct-answer text, truth semantics and actionable source issues. Default v1.1 export and clipboard output retain their original fields and strings. Legacy jobs default to explanations-only; selected corrected content is frozen as explicit `content_mode: "corrected-questions"`. Mode, language, source, draft and renderer identity all participate in the existing snapshot/cache identity.

Corrected mode needs **one separate nonempty explanation per source question**. An already merged/many-question paragraph remains editable but blocks corrected generation until its mapping is repaired; it is never silently copied to several questions. Switching back to explanations-only preserves consolidation. Missing/contradictory answers, empty questions, unsupported types/media and stale/substituted sources block the affected quiz with an error. Select-all lists exclusions explicitly. Laravel rebuilds and compares the complete correction context before issuing the existing single-use ticket.

`corrected-content.js` normalizes verified entries; `corrected-dom.js` safely draws text; `corrected-pagination.js` shares measured entry flow between `corrected-images.js` and the existing A4 book modules. A complete entry stays together when possible, then question plus answers stay together where practical. Oversized questions, answers or explanations continue at exact grapheme/word slices with the same question number and a localized continuation label. There is no repeated original question, truncation or font shrinking. PNGs remain 1080 × 1350 with 28 px handwriting (26 px Cairo for RTL); PDFs retain 14 pt Patrick Hand / 12 pt Cairo, light print styling, cover, contents and global page numbers. Every question/answer/explanation part is checked for exact reconstruction, order, DOM text and bounds; searchable PDF region/font/A4/contents verification also applies.

Content remains plain text: Unicode mathematics, SQL, code, accents, line breaks and Arabic are preserved safely. There is no TeX or rich-media renderer. Embedded image/video/audio/iframe/object/SVG/Markdown-image references fail explicitly; literal media markup may also be rejected conservatively. Existing major/subject names are used because the current database has no translated name fields. No names, slugs, URLs or original records are rewritten.

## Snapshots, retry and storage

Source JSON is separate from optional edited paragraphs and their stable question-ID mappings. Laravel checks frozen sources against the existing exporter before issuing a content-bound single-use ticket. The browser never sends its API bearer to the runner.

One browser and one page render at a time; existing videos and images share the runner's exclusive active-job guard. Identical submissions from the same admin return the existing job. Each job freezes source/draft versions, order and settings. Source/draft/layout/font/logo changes affect identity; edits during rendering belong to a later batch.

Private files live in `revision-generator/output/<job-id>/`, including `input.json`, an atomic `manifest.json`, quiz folders, PNGs and ZIPs. Existing runner state/capabilities remain in `video-generator/.local-jobs/`. Do not publish these directories. Artifact routes require the job access key and use generated allowlisted paths. Downloads do not expose private input snapshots or credentials.

Cancellation stops new work and the active process tree. Wait for the child to exit before retrying. Retry uses the same immutable input and verifies successful image hashes; unchanged successes are not rendered again. If the runner is interrupted, restart it and retry the saved job. The browser stores the current job capability in session storage for reconnection. Optional unsent review edits are page-local and are lost on reload; submitted snapshots and outputs remain on disk. No shared editorial database/history or automatic retention cleanup is introduced.

The ZIP index records quiz order/titles/IDs, image counts, source IDs/mappings/hashes, draft versions, review issues and output status. Internal metadata stays outside the image body. Partial archives are labelled partial. Limits are explicit: 2 MB request JSON, 1000 quizzes, 10000 paragraphs, 5000 pages per quiz and ZIP files below 4 GB; choose smaller batches if a limit is reached. Missing/empty sources are reported, not silently treated as zero explanations.

## Windows-local wrapper and connectivity checks

The same CMD can be copied unchanged to the Windows Desktop if Explorer refuses execution from the UNC share. In Windows CMD:

```cmd
copy "\\wsl.localhost\Ubuntu\home\lenovo\Projects\quizatlas\start-maroquiz-video-renderer.cmd" "%USERPROFILE%\Desktop\start-maroquiz-video-renderer.cmd"
"%USERPROFILE%\Desktop\start-maroquiz-video-renderer.cmd" --check
"%USERPROFILE%\Desktop\start-maroquiz-video-renderer.cmd"
```

In Windows PowerShell:

```powershell
wsl.exe -d Ubuntu --exec /usr/bin/curl -fsS http://127.0.0.1:3777/health
Invoke-RestMethod -Uri http://127.0.0.1:3777/health -TimeoutSec 10
Invoke-RestMethod -Uri http://localhost:3777/health -TimeoutSec 10
```

The health profiles must include `revision-batch`, `revisionOutputs` must include `png`, `pdf`, `both`, and `revisionContentModes` must include `explanations`, `corrected-questions`. Open `http://localhost:4200/admin/revision-json`, select quiz 1599, choose the content mode and PDF, then generate. If an older runner is detected, stop its console with Ctrl+C and relaunch; the launcher does not start a duplicate.

**Connectivity verification:** The Windows→Ubuntu dependency check and native Windows HTTP access to both `localhost:3777` and `127.0.0.1:3777` passed with the final runner active. An earlier probe failed before this fresh start; no Windows/WSL/firewall configuration change was needed. The runner stays on loopback. Windows GUI browser operation is checked using the exact instructions above; automated UI checks use Linux Chromium. If a future Windows probe fails, first confirm that the runner console is still active, then compare the Ubuntu and Windows health requests before diagnosing forwarding.

## Checks

```bash
node --test revision-generator/revision.test.js
node --test revision-generator/book.test.js
node --test revision-generator/corrected.test.js
docker exec quizatlas-php php vendor/bin/phpunit --filter=RevisionImagesTest
```

Focused Angular checks use `frontend/tsconfig.revision-spec.json`; real-data/API acceptance is in `check-local.cjs`, and admin-browser acceptance in `frontend/scripts/check-revision-images-browser.cjs`. These acceptance scripts need a temporary existing-admin session prepared by the read-only `backend/tests/Support/check_revision_images_local.php` helper. Never save its session token in a report or commit.

Publication integration, shared editorial persistence, final seeders and VPS deployment remain separate work. The security-remediation baseline is linked from the [root README](../README.md#verification-and-release). Phase 2 acceptance artifacts are under `/tmp/maroquiz-revision-book/`; Phase 3 corrected-question scripts, screenshots, samples and logs are under `/tmp/maroquiz-corrected-questions/`. Normal generated jobs remain in the ignored output directory. Historical implementation reports and in-repository acceptance screenshots are preserved in the external archive described in the [root README](../README.md#historical-material).
