**Superseded:** the user rejected the 17.7-second synthesized-audio sample.
See [CORRECTION.md](CORRECTION.md) for the original-audio restoration and explicit
animated intro/outro. The measurements below are retained history.

# Niveau concours — audio cleanup and original animations

The current revision removes the recently added background movement and extra
animation effects, including saved true settings and retries. The source's
original entrances, question/answer reveals, heading fade, correct-card pulse
and outro timing remain. Corners, dots and the pattern stay static; cap bobbing,
rotation, pattern zoom/parallax, shimmer, check accent and button emphasis are removed.

Audio tracing of the previous preview found eight consecutive reference extracts,
no added music bed, no cue overlap, no actual loop repetition and no detected
full-scale clipping. The unprocessed mix correlates **0.999996** with the source.
The old compressor/normalizer raised the noisy question section by **13.5 dB**.
The reference has silent opening/ending regions and timed effects between them;
a declick/FFT-denoise trial retained the bursts and silent regions.

Current audio is one full-length, locally synthesized calm composition with
smooth 0.9 s / 1.6 s fades. Original effect stems, extra global music and the
aggressive compressor are excluded. Source and commercial-use terms are in
[assets/CALM_BACKGROUND_LICENSE.md](assets/CALM_BACKGROUND_LICENSE.md): the new
composition and its generator are supplied under CC0-1.0, without external samples.

The fresh review input and diagnostic WAVs, source inventory, measurements and
spectra are under `video-generator/output/niveau-concours-clean-review/`.
Audible listening cannot be certified through the available tools; verification
uses isolated tracks, waveform/spectral analysis, continuity checks and decoded
AAC measurements. Existing MP4s and original source assets are preserved.

Revised French review MP4:
`/home/lenovo/Projects/quizatlas/video-generator/output/niveau-concours-clean-review/render/niveau-concours-audio-propre.mp4`.
It was generated through the normal renderer with two CPU cores, a 384 MB Node
heap and no parallel verification work. FFprobe confirms 1080×1920, 30 fps,
513 frames, 17.100 s and 48 kHz stereo AAC. Decoded audio passes the existing
delivery gate at **−16.13 LUFS / −7.55 dBTP**. Matched reference/revised frames
at 0.5, 4.5, 8.3, 13.5 and 16.6 seconds are in `comparison.jpg` in that review
directory. Three focused audio tests passed. Earlier completed template checks
were reused; interrupted final browser/UI test runs are not recorded as passes.

## Historical comparison before this cleanup

Implemented as a separate selectable Short through the existing Laravel export,
admin selection/replacement/approval, signed usage authorization, local browser
renderer, FFmpeg, sequential batches, recovery and configured Shorts export.
No changes to educational records, usage history or existing output files.

## Review artifacts

Final French MP4 (extra animations, narration and added music OFF; source SFX ON):

`/home/lenovo/Projects/quizatlas/video-generator/output/niveau-concours-review-20261111/render-final/niveau-concours-reconnaitre-les-lettres.mp4`

Matched timestamp comparison sheet, extracted from the actual final MP4:

`/home/lenovo/Projects/quizatlas/video-generator/output/niveau-concours-review-20261111/comparison-final/comparison-sheet.png`

Individual full-size frame pairs and geometry/timing metadata are in that same
`comparison-final/` directory. Source measurement/contact sheet and the retained
input are in its parent. Localized previews: `ar.png`, `fr.png`, `en-long.png`,
`en-enhanced.png` in the parent directory. All artifacts remain ignored by Git.
An earlier comparison draft is preserved in `render/` and `comparison/`;
`render-final/` and `comparison-final/` are the review deliverables.

The real retained French source is quiz **22**, question **462**. The correct
stored choice is **1802**, displayed as card **2**, rather than copying the
Canva sample's highlighted card. This is the existing offline renderer/preview
entry point with an unsaved preview VideoSet ID 0, not a live registry operation.
Actual admin generation still requires approval and backend authorization.

## FFprobe and timing

| Property | Original | Final generated |
| --- | --- | --- |
| Resolution | 1080×1920 | 1080×1920 |
| Video | H.264, 30/1 fps | H.264, 30/1 fps |
| Video frames | 513 | 513 |
| Visual duration | 17.100 s | 17.100 s |
| Container duration | 17.125 s | 17.100 s |
| Audio | AAC, stereo, 48 kHz | AAC, stereo, 48 kHz |

The original's extra 25 ms is an audio/container tail, not another visual frame.
Final decoded audio passes the unchanged delivery gate: **−16.54 LUFS,
−2.41 dBTP**. Chapter file begins `0:00 Reconnaître les lettres`.

| Event | Measured original | Generated baseline |
| --- | --- | --- |
| Logo entrance | about 0.067–0.60 | 0–0.60 |
| Heading/cap/subtitle | about 1.23 onward | 1.23 onward |
| Heading opacity breath | about 1.10 s period | 1.10 s, aligned to source phase |
| Metadata | about 1.23–1.90 | 1.23–1.90 |
| Panel / question reveal | about 2.10 / 2.30–6.70 | 2.10 / 2.30–6.70 |
| Choice 1 | 6.833 | 6.833 |
| Choice 2 | 7.267 | 7.267 |
| Choice 3 | 7.800 | 7.800 |
| Choice 4 | 8.133 | 8.133 |
| Fully visible choice reading pause | about 8.433–13.267 | 8.433–13.267 |
| Correct gradient/check | 13.267 | 13.267 |
| Website | about 13.60 | 13.60 |
| Preparation message | about 13.93 | 13.933 |
| Closing message exit | about 16.83 | starts 16.833, finishes 17.10 |
| Last frame | 17.0667 | 17.0667 |

Reference timing was recorded before implementation in
[REFERENCE_TIMELINE.md](REFERENCE_TIMELINE.md). Longer content extends only
question/reading sections and shifts later events. No narration extension was
implemented. The delivered real question uses the baseline 17.100 s timeline.

Comparison frames: **0.50, 1.70, 4.50, 6.97, 7.43, 7.97, 8.30, 10.50,
13.50, 14.40, 16.60, 17.0667 s**. Full-size frames were visually inspected for
clipping, overlapping cards, failed fonts and highlight placement. Longer real
wording wraps the question and shifts the grid down within the same panel;
comparable one-line wording retains the reference card bounds and short-answer
anchors. Separate Arabic/English previews also passed visual review.

## Remaining fidelity limits

- Canva's supplied shortlink did not resolve through the connector. The
  matching account grid design `DAHaQ09CqoM` was found and its layer bounds
  checked against the supplied coordinates. No Canva changes were saved.
- Large graphics were available only as thumbnail assets. The patterned
  background is softer; blob contours, dots, cap recoloring, shadow, easing and
  the final message fade approximate the source rather than matching every pixel.
- Exact Canva font metadata was unavailable. Existing OFL Anton/Open Sans are
  visual substitutes; Cairo is reused for Arabic. No font/license files changed.
- The neutral existing category icon replaces the placeholder programming
  icon. Real subject names remain exactly as stored, including English names.
- Original cue phases are retained through the existing mixer. Compression and
  normalization change dynamics and volume. Additional Music is the existing
  generator arrangement, not a separated Canva music stem. No speech-quality
  acceptance is claimed; optional offline narration is unavailable.

## Focused verification

- **8 new Node tests:** 6 model/browser/batch checks, 1 decoded-AAC/cue check,
  1 mocked real-HTTP single-runner snapshot check.
- **23 existing Node regressions:** 6 Défi du jour, 6 Five Seconds and 11 shared
  queue/authorization-retry/export checks. Total **31 distinct Node tests pass**.
- **5 Laravel tests / 76 assertions:** new locale/preview/export/source-ticket
  tests plus existing Short regressions; all writes are in enforced SQLite
  `:memory:`. No writes or migrations against the local PostgreSQL database.
- **13 Angular tests:** template selection, API params, global-language labels,
  one-question proposals, explicit approval, double-click prevention, frozen
  settings and single/batch generation; test-bundle compilation passed.
- FR/EN/AR template translation keys and JSON validated; relevant JavaScript
  syntax and `git diff --check` passed. No full catalog/batch render, deployment
  or full production build was run.

Coverage includes all four correct positions in FR/AR, Arabic connected text
and mixed Latin/number content, English labels, long wrapping, literal markup,
original animation preserved in enhanced mode, Arabic narration exclusion in
single and saved batch/retry inputs, preserved successful exports, and sequential
completion with mocked rendering. Windows filesystem delivery is exercised by
the existing temporary-directory export tests; no real Windows output directory
was changed during this review.

## Files added or modified for this task

New `video-generator/niveau-concours/` files:

- `model.js`, `template.html`, `style.css`, `template.js`, `preview.js`, `audio.js`.
- `niveau-concours.test.js`, `audio.test.js`, `runner.test.js`.
- `README.md`, `REFERENCE_TIMELINE.md`, `COMPARISON.md`, `assets/README.md`.
- Eight source-reference PNGs and eight phase WAVs listed in `assets/README.md`.

Shared integration changes (prior unrelated edits in these files preserved):

- `.gitignore`: explicit required WAV exceptions; generated outputs stay ignored.
- `video-generator/quiz-templates.js`: registration.
- `video-generator/local-runner.js`: advertised template and retention of its
  approved single-job settings; existing worker/security boundaries retained.
- `video-generator/render.js`: new preparation hook and intentional optional
  silence handling, retaining strict delivery checks when sound is enabled.
- `video-generator/five-seconds/preview.js`: dispatch to the new preparation hook.
- `video-generator/README.md`: documentation link.
- `backend/app/Services/VideoSetJsonExporter.php`: opt-in template and explicit
  approved question locale without a schema change.
- `backend/app/Http/Controllers/Api/VideoSetController.php`: opt-in export/preview
  parameters; legacy response shapes remain unchanged.
- `backend/tests/Feature/ContentUsageTest.php`: focused locale/source boundaries.
- `frontend/src/app/features/admin/services/video-batch.api.ts` and `.spec.ts`:
  contracts, query parameters and retained render options.
- `frontend/src/app/features/admin/youtube-videos/youtube-videos.ts`, `.html`,
  `.scss`, `.spec.ts`: selector, localized controls/preview, approval and options.
- `frontend/src/assets/i18n/fr.json`, `en.json`, `ar.json`: isolated template labels.

## Generate another video

Restart the existing local launcher, keep `QUIZ_SHORT_EXPORT_DIR` configured,
then select **Niveau concours (Short)** in Admin → YouTube Videos. Confirm the
content language, choose Major/Subjects, prepare, preview/replace, approve and
generate. **Extra animations** remains disabled, including saved settings. Voice-over
is disabled; the clean background and two quiet entrance/closing accents are
controlled by **Music and sounds**. Arabic cannot enable narration through stale settings or retries.

Exact CLI preview, launcher and focused-test commands, along with the reviewed
Piper licensing/setup limitation, are in [README.md](README.md).

No commit, push, deployment, production connection, seeder, usage reset or
educational-data change was performed.

Current 2026-11-12 review: see [SHORT_REVIEW.md](../SHORT_REVIEW.md) for the latest 17.7-second sample, matched frames, bounded resource measurements, audio changes and editable banner numbers. Older samples above are preserved comparison history.
