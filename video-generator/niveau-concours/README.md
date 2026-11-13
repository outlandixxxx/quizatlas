# Niveau concours (Short)

Registered as `niveau-concours` through the existing quiz exporter and local
renderer. One reviewed single-answer question, four stored choice IDs and one
correct ID produce one video. The highlight/check follow that ID in all four
positions. There is no countdown or explanation scene. Source words are never
rewritten, translated or rendered as HTML.

In **Admin → YouTube Videos**, select **Niveau concours (Short)** (localized as
**Exam challenge** / **مستوى المباراة**). Select the Major/Subjects, confirm the
source language, prepare one-question proposals, preview and replace unsuitable
questions, approve, then generate individually or with **Generate all videos**.
Template-specific UI labels follow the global interface language. Video labels
follow the explicit approved question language, independently of that UI.

Existing questions have no locale column. The backend recognizes predominantly
Arabic question text and attaches `questions[0].language` and `video.language`
to preview/export. For Latin text the admin confirms FR or EN. Short Arabic
quotations inside French do not switch the video into Arabic. No database
fields, migrations or educational content changes are required.

Arabic uses Cairo, RTL paragraphs and metadata, right-side badges and right-to-
left grid flow: 1/2 on the first row, 3/4 on the second. The approved array and
stored IDs never reverse. URLs and the existing `QCM #001` reference stay LTR.
Text enters by clipping its original final layout; connected Arabic glyphs are
never split into character spans. Long content borrows panel space, wraps and
fits down to a 32 px floor, then fails clearly if still unreadable. Replace it
through the existing preview flow. Later cues shift with longer reading time.

**Extra animations is disabled**, including previously saved true settings,
single jobs, batches and retries. The pattern, corners and dots are static;
the cap no longer floats or rotates. Original logo/metadata/card entrances,
question reveal, heading opacity breath, correct-card reveal/pulse and outro
timing remain. A dedicated two-second closing card and 0.6-second final fade
follow the original 17.1-second sequence (591 frames / 19.7 seconds).
The added shimmer, check accent and website emphasis are removed.

**Original Canva audio** restores the supplied export's eight consecutive sound
phases (opening, question, four choices, reading, answer), including their original
effects. No synthesized music is mixed in. The checkbox controls the combined
source soundtrack because the export does not expose separate music/effect stems.
Longer reading intervals use pitch-preserving stretching instead of looping
attacks. Delivery attenuates peaks only; it never amplifies quiet source sections
with the previously used aggressive compressor. Explicit mute remains supported.

The first 1.16 seconds now contain a clear branded logo/title entrance, before
the original heading/question sequence. A dedicated animated brand/website
closing card follows the source sequence, then fades. The short-content sample
is 19.7 seconds: original 17.1 seconds, 2 seconds closing hold/entrance, 0.6 seconds
final fade. Existing source reading time and choice/reveal cue times are retained.
See [CORRECTION.md](CORRECTION.md).

## Narration limitation

No local speech engine/model is installed or verified for acceptable voice
quality in this environment. The permitted music/SFX fallback is implemented:
the Voice-over control is disabled with a localized explanation. French/English
saved `narration: true` fails clearly instead of calling an online service.
Arabic always forces narration off at the rendering boundary, including old
settings, batch inputs and retries. No engine/model, recurring service, paid
API, online TTS or dependency was added.

Piper was reviewed as a possible future offline engine: its current engine is
[GPL-3.0-or-later](https://github.com/OHF-Voice/piper1-gpl); every model's dataset
and pretraining chain require separate review. The official
[commercial-use guidance](https://github.com/OHF-Voice/piper1-gpl/blob/main/docs/COMMERCIAL_USE.md)
and [licensing guidance](https://github.com/OHF-Voice/piper1-gpl/blob/main/docs/LICENSING.md)
warn that older checkpoints can inherit noncommercial restrictions. Newer
French SIWIS/hifi_tts_92 chains require CC BY attribution and matching new model
files; a dataset name alone is insufficient. No such models were downloaded.
Providing voice-over later would require initial engine/model downloads,
version and full-chain license verification, attribution and audible quality/
timing review; there is no voice setup needed to use this template now.

## Rendering and export

Restart the existing local launcher to load the added template:

```bash
bash video-generator/start-local-runner.sh
```

Keep the existing `QUIZ_SHORT_EXPORT_DIR` configured to your dedicated Shorts
folder. Long Quiz/Facts export directories remain unchanged. The existing
authenticated approval/Content Usage Registry workflow reserves questions,
verifies successful outputs and resumes remaining jobs sequentially. Frozen
JSON keeps content, locale and settings through retry; export failures retain
the source MP4 and never overwrite an existing file.

For another offline comparison using the retained real French question
(quiz 22, question 462, correct stored choice 1802), choose a fresh directory:

```bash
node video-generator/render.js video-generator/output/niveau-concours-review-20261111/input.json --fps 30 --output-dir video-generator/output/niveau-concours-next-review
node video-generator/niveau-concours/preview.js video-generator/output/niveau-concours-review-20261111/input.json video-generator/output/niveau-concours-next-comparison 'Niveau concours.mp4' video-generator/output/niveau-concours-next-review/niveau-concours-reconnaitre-les-lettres.mp4
```

This is the normal renderer CLI in offline preview mode, using a real retained
read-only export and an unsaved preview video ID 0. It makes no registry claim
or publication record. Actual generation uses the admin approval workflow;
the preview JSON cannot be submitted as a real approved batch. Existing media,
usage records, local database and Windows exports are preserved.

## Focused checks

```bash
node --test --test-concurrency=1 video-generator/niveau-concours/niveau-concours.test.js video-generator/niveau-concours/audio.test.js video-generator/niveau-concours/runner.test.js video-generator/defi-du-jour/defi-du-jour.test.js video-generator/five-seconds/five-seconds.test.js video-generator/quiz-batch.test.js
docker exec quizatlas-php vendor/bin/phpunit tests/Feature/ContentUsageTest.php --filter 'niveau_concours|five_second_short|daily_challenge'
```

From `frontend/`:

```bash
npx ng test --watch=false --include='src/app/features/admin/youtube-videos/youtube-videos.spec.ts' --include='src/app/features/admin/services/video-batch.api.spec.ts' --runner-config=vitest.style.config.mjs
```

Laravel tests enforce in-memory SQLite. Browser tests use synthetic source
fixtures and mocked renders/exports. The single comparison render uses a real
stored snapshot and stays in ignored `output/`. No production operations or
full-length batches are required. See [REFERENCE_TIMELINE.md](REFERENCE_TIMELINE.md)
and [COMPARISON.md](COMPARISON.md) for measured results.

Displayed QCM numbers are editable before approval; see [the Short review](../SHORT_REVIEW.md). Internal filenames and video IDs do not change.
