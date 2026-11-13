# Short generator review — 2026-11-12

**Niveau sample rejected by the user:** its synthesized audio and subtle entrances
did not meet the reference. The follow-up [Niveau correction](niveau-concours/CORRECTION.md)
supersedes the Niveau audio, animation and sample claims below. Other Short and
numbering results remain historical evidence.

The registered Shorts are **5 Secondes pour Répondre**, **Défi du jour**,
**Niveau concours**, and **Facts Short**. Long videos retain their existing
selection and export behavior.

## Review outputs

All paths below are relative to `video-generator/output/short-review-20261112/`:

- Full French sample: `niveau-full/niveau-concours-revue-shorts.mp4`.
- Matched timestamps: `comparison-sheet.png`; FR/AR fixtures: `language-previews.png`.
- Intro/outro clips: `clips-final/{five-seconds,defi-du-jour,niveau-concours}/intro-outro.mp4`
  and `clips-facts/facts-short/intro-outro.mp4`.
- Measurements: `ffprobe.json`, `exported-audio-checks.json`, `render-resources.jsonl`.
- Numbering identification: `retained-video-candidates.json` and `database-inventory.json`.

The French sample uses the read-only verified export of quiz 22 / question 462,
correct choice ID 1802 in card **2**, with narration and extra motion disabled.
Its manually chosen banner `011` is a review example, **not an applied counter reset**.

## Animation and audio

Existing intro/outro entrances and educational reading holds remain. Quiz Shorts
append a 0.6-second whole-canvas fade; Facts Short fades its final scene without
adding time or fading between facts. Entire mixes, including effects, fade out.
French Five Seconds now says “BONNE CHANCE !”; static labels and difficulty
follow content locale. Arabic retains Cairo, shaping and RTL; no Arabic voice is enabled.

Niveau keeps static decorations and its original heading/reveal animation.
Its original visual timeline remains: logo 0–0.6 s, heading/metadata 1.23 s,
panel 2.1 s, question 2.3–6.7 s, choices 6.833/7.267/7.8/8.133 s,
reading until 13.267 s, answer reveal 13.267 s, website 13.6 s,
message 13.933 s, message exit 16.833–17.1 s. Final canvas fade: 17.1–17.7 s.
Longer content still extends the existing reading sections naturally.

Reference: 1080×1920, 30 fps, 513 video frames, 17.100 s video / 17.125 s container.
Revised: 1080×1920, 30 fps, **531 frames / 17.700 s**, AAC stereo 48 kHz.
Decoded audio: **−16.20 LUFS, −7.55 dBTP**, zero clipped samples;
last 100 ms RMS **−86.37 dB**. Final encoded frame is black.
Niveau uses its retained sample-free CC0 calm bed plus two quiet original
CC0 sine accents; no noisy reference cues, duplicated bed, percussion or loop seams.
Other Shorts retain their existing cues. Audio was measured; audible acceptance
was not independently established through a listening device in this environment.

The supplied Canva link resolves to **DAHaQ09CqoM**. Original design metadata and
seven existing artwork assets were reconfirmed read-only: pattern, blob, dots,
cap, website icon, check and logo. Existing downloaded PNG thumbnails and the
higher-resolution local logo are reused. The connector exposes no original-quality
asset/audio export or font metadata here. Anton/Open Sans remain approximations
of unconfirmed Canva fonts; Arabic uses local Cairo. Thumbnail softness, cap tint,
corner contours, shadows and easing still differ. Dynamic text wrapping and the
correct card naturally differ from the reference's placeholder content.

## Numbering and operation safety

Old banners used `VideoSet.video_number`: `MAX + 1` **per Subject across all
batches**, including unrendered proposals and Long videos. This explains inflated
numbers: there are 38 local proposals, all status `draft`; Subject 279 has 1–35.
That status does not establish whether a file was completed or published.

New `video.display_number` is independent of IDs and filenames. Scope remains
**per Subject, shared across Short templates and languages**. In Admin → YouTube
Videos, prepare proposals, edit **Starting proposed number (per subject)** or each
**Displayed QCM number**, review and approve. Edits invalidate approval. Positive
integers up to 999999 are accepted; existing three-digit padding is retained.
Conflicting numbers are warned about and rejected during final authorization.

Read-only suggestions do not allocate numbers. Normal Short generation uses the
final profile; explicit previews keep the existing internal draft profile without
consuming a banner number. Final authorization stores reservations in existing
`VideoSet.settings`, within the usage transaction, serialized by Subject row locks.
Concurrent stale proposals receive a conflict instead of silent renumbering.
Retries retain their approved number, including failures; a number held for a
failed job is not reassigned behind that retry. Export metadata and frozen JSON
retain the same banner number; filenames keep the existing internal sequence.

Legacy used-source receipts provide a conservative suggestion baseline, including
ambiguous Long/test history. No historical record or counter was reset. Only four
completed Short job snapshots can be identified locally:

| Template | VideoSet | Subject | Captured number |
| --- | ---: | ---: | ---: |
| 5 Secondes | 34 | 291 | 1 |
| Défi du jour | 35 | 291 | 2 |
| Niveau concours | 37 | 279 | 34 |
| Niveau concours | 38 | 279 | 35 |

**Pending:** identify the ten retained videos from the candidate/inventory files
before applying a reset within their actual scopes. Existing completed snapshots
and rendered banners remain unchanged. Content Usage Registry was not reset.

## Verification and resources

- Six focused Laravel feature tests passed; final strengthened numbering subset:
  two tests / 49 assertions, enforced SQLite `:memory:`. No PostgreSQL writes.
- 41 focused Node checks passed across Short templates, audio and mocked batch/
  restart/retry/export behavior. Four affected final checks passed after the
  canvas-background and Facts full-mix fade fixes.
- Twelve video-admin Angular tests passed with one worker and a 512 MB heap.
- FR/EN/AR rendering and all four correct-card positions were checked. FR/AR
  screenshots and matched reference frames were visually inspected.
- No full production batch, production build or real Windows transfer was run.
  Existing export/retry behavior was checked using mocks and temporary directories.
- Heavy work ran sequentially; 256 MB renderer heap, one encoder thread, frames
  on disk, browser closed before full encoding, pressure guard and signal cleanup.
  No pre-existing active runner jobs were found. During the full render, minimum
  available memory was **1299 MiB**, maximum swap used **810 MiB**; largest observed
  process RSS: Node **569 MiB**, FFmpeg **549 MiB**, Chromium **226 MiB**.

To render another bounded offline comparison, use a fresh output directory:

```bash
taskset -c 0,1 node --max-old-space-size=256 video-generator/render.js video-generator/output/short-review-20261112/input.json --draft --output-dir video-generator/output/niveau-next-review
```

For normal generation restart the existing local launcher, select a Short,
confirm source language, prepare/edit numbers, review, approve and generate.
`QUIZ_SHORT_EXPORT_DIR` and all existing Facts/Long export paths are unchanged.

## Visible wording cleanup

As explicitly clarified, visible Draft / Brouillon / مسودة wording was removed
from FR/EN/AR labels, admin messages and generator progress. Internal translation
keys, statuses, rendering profiles, API contracts, records and files remain intact.
All **5166 translation values** were checked for the removed wording.

Exact changed paths are listed in `SHORT_REVIEW_FILES.txt`. No commit, push,
deployment, production access, migration, seeder or educational-data edit occurred.
