# 5 Secondes pour Répondre

A separate portrait template in the existing quiz renderer. The supplied Canva MP4 is the visual reference, not a video background. Question, choices, answer IDs, metadata, countdown and explanation are independently rendered DOM elements. No Canva runtime or new service is used.

## Reference and measured timeline

Reference: `Copie de 5 secondes pour repondre.mp4`, 1080×1920, 30 FPS. Container duration 24.475 s; the image track has approximately 24.467 s. Measurements use extracted frames, with frame resolution of 1/30 s. Appearance thresholds depend on opacity; the following entrance ranges are approximate, not recovered Canva keyframes.

| Scene | Reference observation / replica timing |
| --- | --- |
| Brand | Logo entrance during 0–0.85 s; header approximately 0.95–1.55 s; repeating 0.9 s pulse reconstructed from 10 FPS border measurements |
| Metadata | Approximately 1.45–1.95 s |
| Question | Card/text entrance from 2 s; complete before first answer |
| Answers | Entrances at 2.733, 3.8, 4.633, 5.233 s; reference badge visibility measured at 2.767, 3.833, 4.667, 5.267 s |
| Timer | Entrance at 6.65 s; five full seconds from 7.067 to 12.067 s, after all choices |
| Reveal | Starts around 12.4 s; gold pixels detected in the reference at frame 380 (12.667 s) |
| Explanation | Black background/card transition from 16.2 s; rotated banner slides in at 16.7–17.1 s; explanation heading enters at 17.02–17.30 s |
| Explanation text | Starts at 16.45 s, approximately 13.33 source characters/s (4.725 s for the sample), then full-text hold |
| Closing CTA | Explanation CTA then website entrance; final hold through 24.467 s |

Measured base rectangles in full-resolution reference frames: question `(129,709,821,222)`, choices approximately `(178,944,724,428)`, metadata approximately `(128,562,832,85)`, timer approximately `(409,1351,263,263)`, explanation card `(142,615,808,734)`. Header bounds vary because the original scales/pulses. `preview.js` records the replica's browser rectangles alongside timestamped comparisons; these manual reference bounds are approximate to a few pixels, not segmentation ground truth.

For longer source text the question card grows within a bounded safe area, and subsequent elements move together. Reading time increases from actual source length. Fonts have readable minimum sizes. Content that cannot fit or exceeds 60 seconds is rejected with a clear error, without omissions or rewriting. The countdown remains five seconds. Arabic uses local Cairo, RTL cards and whole-word explanation reveals.

## Compare one sample

Run from the repository root, using the existing local Node, Playwright and FFmpeg installation:

```bash
node video-generator/five-seconds/preview.js \
  video-generator/five-seconds/sample.json \
  /tmp/maroquiz-five-seconds-preview \
  'Copie de 5 secondes pour repondre.mp4'
node video-generator/render.js video-generator/five-seconds/sample.json \
  --draft --fps 30 --output-dir /tmp/maroquiz-five-seconds-sample
```

Use a fresh output directory for another sample. Existing Short MP4s are never overwritten. Preview output contains original-left / replica-right comparison frames, a labeled contact sheet at the nine reviewed timestamps and `comparison.json`. Sample input is explicitly synthetic and never goes through the usage API. It is not a production question record.

After encoding, pass the generated MP4 as the final argument to compare actual encoded video frames instead of browser stills:

```bash
node video-generator/five-seconds/preview.js video-generator/five-seconds/sample.json \
  /tmp/maroquiz-five-seconds-preview 'Copie de 5 secondes pour repondre.mp4' \
  /tmp/maroquiz-five-seconds-sample/5-secondes-pour-repondre-canva-comparison.mp4
```

The sample's visible category/difficulty intentionally follow the supplied Canva example. Production data uses the actual Major, quiz title, stored difficulty and video number; no sample category is inherited. The supplied explanation ends with a period, which is retained even though the reference video omits that final period.

## Real approved questions and sequential Shorts

1. Choose **5 Secondes pour Répondre (Short)** in existing admin YouTube Video Preparation. Select the source language and the real Major/Subjects.
2. Prepare one question per video. Review each proposal, including the stored explanation; use the existing question replacement action as needed. This template requires exactly four choices, exactly one correct answer and a nonempty stored explanation. Unsupported proposals fail export explicitly rather than inventing choices or explanations.
3. Set `QUIZ_SHORT_EXPORT_DIR` to your chosen absolute local folder **before** starting the normal launcher. No default Windows Short destination is assumed. For example, in WSL use `export QUIZ_SHORT_EXPORT_DIR='/your/chosen/mounted/folder'`, then `bash video-generator/start-local-runner.sh`. Facts and Long Video destinations retain their existing configuration.
4. Approve the proposals and choose **Generate All Videos**. Each Short runs sequentially through the existing quiz batch worker, source authorization, usage receipts, checksummed non-overwriting export and recovery logic. If the existing runner is already active, finish its work before restarting it to load the new code/configuration.

API: existing `GET /api/v1/video-sets/{id}/export-json?template=five-seconds&language=fr|en|ar`. Only this opt-in variant adds `questions[].explanation`, `questions[].quiz_title` and `video.template/language`, using format version 1.1. Default version 1.0 remains unchanged. The existing usage service revalidates the complete snapshot and correct-answer ID against the database. Editing approved JSON cannot fabricate an explanation or answer. The persisted local input freezes the snapshot for render/retry; later source edits require a new review/authorization.

For a custom plain website CTA, local JSON may set `render_options.website` (default `maroquiz.com`). Query strings, credentials and personal data are rejected; the renderer makes no request to that website.

## Assets and fidelity limits

`assets/question-background.png` is a clean decorative frame from the user-provided reference **before any question or choices appear**, with the logo removed so it remains independently controllable. `question-shapes.png` keeps only its saturated decorative shapes/dots for the later background fade. `stopwatch.png` and `good-luck.png` are isolated decorative artwork crops from that same reference. They contain no question, answer or explanation. `globe.svg` is a small code-defined icon. The existing repository logo and licensed local Open Sans, Montserrat, Nunito and Cairo fonts are reused, with their existing licenses unchanged.

The polishing pass also matches the roughly 18°/s ring motion, smaller inner ring, rotating explanation-header entrance, two-line localized CTA and smaller pulsing website pill. No Canva project layers, exact font declaration or easing keyframes were supplied. The frame comparison therefore still has differences in typography, subtle pulse/entrance curves, timer stroke/rotation, some decorative geometry, emoji rendering and the closing CTA outline/arrow. Font identities are visual matches using available licensed fonts, not claimed identifications of Canva font metadata. No pixel-perfect percentage is claimed.

The reference audio is stereo AAC, 48 kHz, measured at -13.72 LUFS integrated and +0.16 dBTP. Exact music/effect source assets and licensing were not supplied. The template uses the existing local soundtrack mixer and owned/generated SFX at the reconstructed cue times; it does not redistribute the reference soundtrack or claim identical audio. Short output now uses measured two-pass EBU R128 loudness normalization around -16 LUFS. The normalizer targets -2 dBTP to allow AAC headroom; decoded AAC must measure no higher than -1.5 dBTP and within 0.75 LU of -16 before the MP4 is published. The `<title>-loudness.json` sidecar records input/output measurements. Other generators keep their existing mixing. Sound-event positions are unchanged. There is no new narration or fabricated educational speech. The owner should retain the necessary Canva element rights for the user-supplied decorative artwork.

## Focused checks

```bash
node --test video-generator/five-seconds/five-seconds.test.js video-generator/five-seconds/loudness.test.js
node --test video-generator/quiz-batch.test.js video-generator/batch-recovery.test.js
docker exec quizatlas-php vendor/bin/phpunit --filter 'five_second_short|quiz_batch_reuses_source' tests/Feature/ContentUsageTest.php
cd frontend
npx ng test --watch=false --include='src/app/features/admin/youtube-videos/youtube-videos.spec.ts' --include='src/app/features/admin/services/video-batch.api.spec.ts' --runner-config=vitest.style.config.mjs
```

The Laravel tests enforce in-memory SQLite and do not touch the educational database. Preview/demo commands never reserve or consume educational content. Real renders continue to require the existing admin API and usage authorization.

## Changed files

New template files in this directory: `model.js`, `template.html`, `style.css`, `template.js`, `sample.json`, `preview.js`, `five-seconds.test.js`, this `README.md`, and `assets/{question-background.png,question-shapes.png,stopwatch.png,good-luck.png,globe.svg}`.

Existing integration files modified for this template:

- `video-generator/{render.js,quiz-batch.js,local-runner.js,README.md}`
- `backend/app/Http/Controllers/Api/VideoSetController.php`
- `backend/app/Services/VideoSetJsonExporter.php`
- `backend/app/Services/ContentUsage/Sources.php`
- `backend/tests/Feature/ContentUsageTest.php`
- `frontend/src/app/features/admin/youtube-videos/{youtube-videos.ts,youtube-videos.html,youtube-videos.spec.ts}`
- `frontend/src/app/features/admin/services/video-batch.api.ts`

Additional new integration test: `frontend/src/app/features/admin/services/video-batch.api.spec.ts`. Other pre-existing working-tree changes are outside this task.

## Scope of the final fidelity polish

This pass modifies only `five-seconds/{model.js,template.html,template.js,style.css,preview.js,five-seconds.test.js,README.md}` and the Short-only audio branch of `video-generator/render.js`. New files: `five-seconds/loudness.js` and `five-seconds/loudness.test.js`. Laravel, Angular, source/answer mappings, reservations, queue/export/recovery and other generators are unchanged.

The previous comparison MP4 was in `/tmp` and was no longer available when polishing began. The supplied review sheets and original MP4 were reused; no replacement baseline video was rendered. One new sample and nine encoded-frame comparisons are saved under the ignored `video-generator/output/five-seconds-polish-20261109/` directory. This keeps the review artifacts available in the local project. Existing MP4 files are never overwritten.

Local polish verification: 6 template/browser tests, 2 audio tests and 3 targeted shared-generator regressions passed. The single rendered sample is 1080×1920, 30 FPS, 734 frames, 24.467 seconds, with 48 kHz stereo AAC. Decoded output measures **-16.31 LUFS / -1.56 dBTP**. `ffprobe.json`, the loudness sidecar, `verification.json`, nine labeled comparisons and `comparison-sheet.png` are stored beside the MP4. Font/emoji details and some Canva easing remain approximate; the soundtrack is not claimed equivalent. All original educational strings, including the sample explanation's final period, are retained.
