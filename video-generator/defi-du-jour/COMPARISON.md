# Défi du jour comparison

Implemented locally as a separately selectable template. One French comparison MP4 was delivered from stored quiz **22**, question **462**, with correct choice **1802 (B)**. The sample uses the existing renderer CLI and a read-only database snapshot; it creates no proposals, reservations or usage claims. No commit, push, deployment or production operation was performed.

Artifacts under `/home/lenovo/Projects/quizatlas/video-generator/output/defi-du-jour-review-20261110/`:

- MP4: `render/defi-du-jour-reconnaitre-les-lettres.mp4`
- Encoded-video comparison: `comparison/comparison-sheet.png`
- Raw measurements: `measured-timeline.json`, `ffprobe.json`
- Layout/scene plan and frame paths: `comparison/comparison.json`
- Source snapshot: `input.json`
- FR/EN/AR and longer-text previews: `previews/`

Both videos contain **794 frames, 1080 × 1920, H.264, 30 fps**, and **48 kHz stereo AAC**. Original container duration: **26.469 s**; generated: **26.467 s**. Generated decoded audio: **−16.23 LUFS, −2.16 dBTP**. Its first encoding was rejected by the delivery gate; template-specific compression corrected the source's high transient/average ratio while retaining the existing verification limits.

Measured visible timing, in seconds:

| Event | Original onset–end | Generated onset–end |
| --- | --- | --- |
| Logo | Present in opening frame | Present in opening frame |
| Title | 0.667–26.233 | 0.600–26.200 |
| Metadata | 1.967–26.200 | 1.967–26.167 |
| Question text | 2.967–26.200 | 3.133–26.167 |
| Choice A | 11.967–26.267 | 12.000–26.200 |
| Choice B | 12.800–26.267 | 12.867–26.200 |
| Choice C | 13.833–26.100 | 13.900–26.200 |
| Choice D | 14.833–26.267 | 14.900–26.200 |
| Correct gradient | 20.233–25.233 | 20.300–25.133 |
| Trophy | 24.600–26.300 | 24.567–26.167 |
| Footer labels | 24.167–26.167 | 24.233–26.133 |
| Website | 25.033–26.267 | 25.067–26.133 |
| Closing blur/fade | Approximately 26.1–26.467 | 26.1–26.467 |

These are threshold crossings from all 794 frames at quarter resolution, checked against the matching-time images. They indicate visible windows, including entrances/exits, rather than exact Canva easing endpoints. Source correct-row pulses cross the detection threshold repeatedly; the table reports the overall span. The generated scene plan holds all four choices after their entrance until answer reveal for about **5.1 s**, the fully revealed gradient for **4.65 s**, the completed trophy entrance for **1.32 s**, and the completed website entrance for **0.87 s** before closing. The check remains after the gradient exits. No timer or explanation scene is added.

Remaining fidelity differences: Anton substitutes for unverified Canva title-font metadata; Open Sans and Cairo are reused locally. Larger Canva paper assets were available as thumbnails, so their scaled borders/textures are softer. Background/graphic color transforms, title pulse/easing and final blur approximate the export. A neutral existing category icon replaces the source Algorithms symbol. Source audio cues are retained and retimed through the existing mixer, with compression/normalization changing their dynamics and volume. The supplied shortlink was not resolvable; the matching Canva design was located by title and verified against all supplied layer bounds. No Canva changes were saved.

Focused verification completed: **6 Défi presentation/model/batch tests**, **2 Défi audio tests**, **6 existing 5 Secondes tests**, **2 existing loudness tests**, **5 shared queue/retry/export tests**, **4 Laravel tests (46 assertions)**, and **8 Angular tests with test-bundle compilation**. Checks cover B/D mapping, FR/EN/AR, connected Arabic shaping, long text, literal markup, stable snapshots, interrupted sequential jobs, preserved outputs, source authorization and single-use tickets. The final additional browser recheck was interrupted; the preceding complete focused suite and the delivered French MP4 comparison are the recorded evidence. Full production builds and full-length batches were not run.

Files added: `video-generator/quiz-templates.js`; `video-generator/defi-du-jour/` model, HTML/CSS/JS, preview wrapper, audio preparation, focused tests, source PNG/WAV assets and documentation.

Existing files modified:

- `.gitignore` — explicit exceptions for the nine required source WAV stems.
- `backend/app/Http/Controllers/Api/VideoSetController.php`
- `backend/app/Services/VideoSetJsonExporter.php`
- `backend/tests/Feature/ContentUsageTest.php`
- `frontend/src/app/features/admin/services/video-batch.api.ts` and `.spec.ts`
- `frontend/src/app/features/admin/youtube-videos/youtube-videos.ts`, `.html`, `.spec.ts`
- `video-generator/render.js`, `audio-mix.js`, `local-runner.js`, `quiz-batch.js`, `README.md`
- `video-generator/five-seconds/preview.js` and `loudness.js` — shared comparison options and optional peak headroom; existing defaults retained.

Existing questions, choices, generated videos, usage history, export paths and unrelated worktree changes are preserved. Production build contexts continue to exclude generators. See [README.md](README.md) for exact sample commands and the normal admin generation workflow.
