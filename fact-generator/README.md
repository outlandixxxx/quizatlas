# MaroQuiz Fact Generator (Playwright + FFmpeg)

The current admin Facts workflow uses the shared [automatic thumbnail editor](../video-generator/thumbnails/README.md)
and exports a matching JPEG alongside each MP4. Major artwork, editable hooks,
approval snapshots and thumbnail-only retries are shared with quiz generators.
The row-based legacy CLI below retains its existing cover behavior.

Turns your "Le saviez-vous ?" facts (JSON) into finished vertical reels,
1080×1920, ready for Instagram Reels, YouTube Shorts, TikTok and Facebook,
with animation, original music and sound effects, plus a cover image.

Each reel has two pages:

1. **The fact:** "LE SAVIEZ-VOUS ?", the major, the hook and the fact card.
2. **The detail:** "EN PLUS…", the detail card, the source and maroquiz.com.

All 11 majors retain their original individual colors, dark backgrounds, icons and drifting symbols. The YouTube Facts template is separate and follows the YouTube Quiz visual family.
French, English and Arabic (right-to-left) are supported.

## Requirements

- Node.js
- `ffmpeg` on your PATH
- `npm install` (installs Playwright with its Chromium, and Sass)

## Make reels

```bash
npm install
node render.js sample-facts.json                         # every fact in the file
node render.js le-saviez-vous-30-jours.json --day 1      # the 3 facts of day 1
node render.js le-saviez-vous-30-jours.json --day 1 --video 2   # one fact
node render.js did-you-know-30-days-ar.json --day 8      # Arabic file, day 8
node render.js sample-facts.json --draft                 # about 2× faster, for checking
```

Each reel writes two files to `output/`:

| File | What it is |
|---|---|
| `fact-j01-v1-informatique-fr.mp4` | the reel (day 1, video 1, major, language) |
| `fact-j01-v1-informatique-fr-cover.jpg` | cover image: the fact page fully shown |

A reel lasts as long as its actual text and animations require; there is no fixed duration target. Best quality
renders 60 frames per second and blends them in pairs into 30 fps (real
motion blur): about 1–2 minutes per reel. The renderer shows the time left.

To check a reel, play it in VLC, the Windows media player or a browser.
VS Code's preview shows the picture but plays no sound.

## JSON format

Use the facts files as they are (a list of rows), or a single row object.

French file:

```json
{
  "jour": 1,
  "video": 1,
  "matiere": "Informatique",
  "accroche": "Le premier bug était… un vrai insecte ?",
  "fait": "En 1947, l’équipe de Grace Hopper a trouvé un papillon de nuit coincé dans l’ordinateur Harvard Mark II.",
  "detail": "Ils l’ont collé dans le journal de bord avec la note « premier vrai cas de bug trouvé ».",
  "source": "Smithsonian National Museum of American History"
}
```

English and Arabic files use `day`, `video`, `major`, `hook`, `fact`,
`detail`, `source`.

| Field | Shown as |
|---|---|
| `matiere` / `major` | the major label (with its icon) and the whole colour theme |
| `accroche` / `hook` | big coloured text under the major |
| `fait` / `fact` | the white card on page 1 |
| `detail` | the white card on page 2 |
| `source` | the SOURCE box on page 2 |
| `jour` / `day`, `video` | only used to pick facts (`--day`, `--video`) and name the files |
| `theme` (optional) | force a theme, e.g. `"physique"` |

- The language is detected from the file (French keys, or Arabic text);
  force it with `--lang fr`, `--lang en` or `--lang ar`.
- **Highlights:** numbers are highlighted automatically (e.g. **1947**).
  To highlight other words, wrap them in stars: `"le *papillon de nuit*"`.
- Long texts shrink automatically to stay inside the safe area.

## The 11 themes

| Major (FR / EN / AR) | Theme key | Colour | Icon |
|---|---|---|---|
| Informatique / Computer Science / المعلوميات | `informatique` | orange `#f47745` | `</>` |
| Mathématiques / Mathematics / الرياضيات | `mathematiques` | yellow `#f2c94c` | + − × = |
| Physique / Physics / الفيزياء | `physique` | orange `#f47745` | atom |
| Chimie / Chemistry / الكيمياء | `chimie` | yellow `#f2c94c` | flask |
| SVT / Life Sciences / علوم الحياة والأرض | `svt` | orange `#f47745` | DNA |
| Finance / Finance / المالية | `finance` | yellow `#f2c94c` | coins |
| Économie / Economics / الاقتصاد | `economie` | orange `#f47745` | rising chart |
| Arabe / Arabic / اللغة العربية | `arabe` | yellow `#f2c94c` | ض |
| Français / French / اللغة الفرنسية | `francais` | orange `#f47745` | É |
| Anglais / English / اللغة الإنجليزية | `anglais` | yellow `#f2c94c` | Aa |
| Espagnol / Spanish / اللغة الإسبانية | `espagnol` | orange `#f47745` | Ñ |

Backgrounds blend the accent into brand charcoal (`#29252f`); cards use cream (`#f7f5f1`).

To change a theme, edit `THEMES` at the top of `js/template.js`:
`accent` (colour), `icon` (a name from `ICONS`, drawn as SVG) or `glyph`
(a letter, e.g. `'ض'`), and `pattern` (the symbols drifting in the
background). To add a major, add a theme there and its names to
`ALIASES`. To change an icon, edit its SVG path in `ICONS` (64×64 box,
`currentColor`).

All the fixed texts ("LE SAVIEZ-VOUS ?", "LE FAIT", "Attends la suite…",
"EN PLUS…", "SOURCE", the call to action) are in `TEXTS` in
`js/template.js`, for each language.

## What it renders

**Page 1, the fact**
- The logo slides down; "LE SAVIEZ-VOUS" rises letter by letter and the
  coloured "?" bounces in; the underline sweeps across.
- The major label slides in and its icon spins into place.
- The hook pops in word by word.
- The white card tilts up into place with a light shine; "LE FAIT" pops
  on its corner; the fact appears word by word with soft keyboard clicks,
  and highlighted words get a coloured marker stroke.
- "Attends la suite… →" with a nudging arrow.

**Transition:** a panel in the theme colour sweeps up with your logo on
a white card, with a whoosh.

**Page 2, the detail**
- "EN PLUS…" slams in with a small screen shake.
- The detail card tilts up and its text appears word by word; the major
  icon badge spins onto its corner.
- The SOURCE box slides in.
- The yellow maroquiz.com button bounces in with a chime, then breathes,
  shines and sends out pulse rings; the bell next to "Abonne-toi" rings.

All the time: glowing orbs drift, the major's symbols float up with
depth, particles twinkle, a big faint icon turns slowly, and the
progress bar at the top fills page by page, like stories.

Each page stays on screen long enough to read its text (about 3 words
per second), so short facts make short reels and long ones get more time.

Everything important is inside the safe area shared by TikTok, Reels,
Shorts and Facebook: 220 px free at the top, 420 px at the bottom and
140 px on the right (`scss/_variables.scss`).

## Sound

**Music:** `music.js` composes an original, soft lo-fi piece for each
reel (warm pad, piano, bass, light drums), calmer on page 1 and full on
page 2. It is 100% original, so it can't get copyright claims. To use
your own track instead, save it as `assets/audio/music.wav`.

**Sound effects:** `whoosh`, `pop`, `tick` and `chime` in `assets/audio/`
(replace any with your own `.wav` of the same name). The keyboard clicks
are generated. The sound cues are listed in `setData` in
`js/template.js` (`cues`).

`audio-mix.js` builds the whole soundtrack before the frames are
rendered and writes one WAV that FFmpeg attaches to the video. The
renderer checks every reel has sound.

## Edit the design

- **Styles:** edit the files in `scss/`, then run `npm run build:css`
  (or `npm run watch:css` while you work). This writes `css/main.css`,
  which `template.html` loads.
- **Themes, texts, animation, timing, sound cues:** `js/template.js`
  (`THEMES`, `TEXTS`, `setData` for the timeline and cues,
  `paintPage1`, `paintPage2`, `paintWipe`, `paintBackground`).
- **Rendering, file names, quality:** `render.js`.
- **Music:** `music.js`.
- **Markup:** `template.html`.

## Files

```
template.html       markup for both pages and the transition
scss/               styles (main.scss imports the partials)
  _variables.scss   canvas size, safe area, fonts, default colours
  _fonts.scss       local @font-face rules
  _base.scss        reset, pages, progress bar, header, white card, highlights
  _background.scss  glow orbs, dot grid, drifting symbols, big icon
  _page1.scss       title, major label, hook, fact card, "Attends la suite"
  _page2.scss       "EN PLUS…", detail card, source, maroquiz.com button
  _transition.scss  colour panel with the logo between the pages
css/main.css        compiled from scss/ (don't edit by hand)
js/template.js      themes, texts and animation: setData(row) + renderFrame(t)
render.js           reads the JSON, renders every frame, encodes with FFmpeg
audio-mix.js        builds the soundtrack (music, sound effects, clicks)
music.js            composes the original background music
sample-facts.json   example input (the 3 facts of day 1)
package.json        npm scripts: render, build:css, watch:css
assets/images/      maroquiz-logo.webp (shared MaroQuiz logo)
assets/fonts/       Anton, Nunito, Cairo (Arabic) + their OFL licences
assets/audio/       sound effects (and your music.wav if you add one)
output/             finished reels and covers
```

## How the animation works

Everything on screen is a pure function of the time, so each screenshot
is exact. `render.js` calls `setData(row)` once (it fills the template and
returns the timeline, the sound cues and the music sections), then
`renderFrame(t)` for every frame, takes a screenshot, and FFmpeg encodes
the image sequence with the soundtrack.

## One-click administration and long-form videos

The existing runner also serves `/admin/facts-videos`. Both profiles calculate duration automatically from the selected source facts. See [local setup and runner instructions](../README.md#local-generators). The standalone JSON commands above remain available.

For the Ubuntu/WSL Windows launcher, see [Windows connectivity instructions](../revision-generator/README.md#windows-local-wrapper-and-connectivity-checks). Historical YouTube comparison examples and reports are preserved in the external archive described in the [root README](../README.md#historical-material).

## Automatic sequential batches (admin)

Open `/admin/facts-videos`, choose the Major, language and Short/Reel or
Long YouTube profile. Choose **1–60 videos** and the facts per video (default 1;
up to 12 for short or 300 for long). All proposed facts are shown before starting.
Replace unwanted individual facts, review the content and settings, check approval,
then click **Generate All Facts**. Each video retains the existing template, natural
timing, audio options and selected quality. There is no duration target.

The existing local Quiz batch queue runs one video at a time: render, FFprobe,
SHA-256, record verified fact usage, export, then the next video. The approved JSON,
item statuses and errors persist under `video-generator/output/<job-id>/` and
`video-generator/.local-jobs/`. The browser may close; reopen the page in the same
browser to reconnect to the latest Facts batch. Quiz and Facts use independent
saved browser capabilities but share the renderer's exclusive worker lock.

**Stop Remaining** retains completed output. **Resume Batch**, **Retry Failed**
and **Retry Export** use the retained job, never a fresh selection. Verified MP4s
are checked and reused, including after runner restart. Export failures retain the
original MP4; repair the mount/permissions and retry. A filename collision never
overwrites an existing file. A changed/missing previously verified source blocks
resumption until restored. Unfinished facts are released on failure/cancellation;
facts with verified completed videos remain used, including when export fails.
No existing usage history is reset.

### Separate Facts export destination

The WSL launcher defaults to the required folder:

```bash
export FACT_VIDEO_EXPORT_DIR='/mnt/d/MaroQuiz/Maroquiz social media plans/Facts'
bash video-generator/start-local-runner.sh
```

Native Windows uses the equivalent default:

```powershell
$env:FACT_VIDEO_EXPORT_DIR = 'D:\MaroQuiz\Maroquiz social media plans\Facts'
node .\video-generator\local-runner.js
```

Both Facts profiles use this folder. `VIDEO_EXPORT_DIR` and the Quiz default
`D:\MaroQuiz\Maroquiz social media plans\Long video` remain unchanged.
On other Linux systems set `FACT_VIDEO_EXPORT_DIR` to an explicit mounted folder.
The exporter checks a real Windows drive mount before creating its subdirectories,
rejects symlink/traversal paths, probes write access and atomic hard links, verifies
MP4 streams and SHA-256 after copying, and publishes without overwriting.
NTFS/WSL hard-link support is required. Sources and user files are never removed.

An already running runner keeps its loaded code. Finish/stop its work normally,
then relaunch it to enable Facts batches; the implementation does not interrupt it.

## Usage is independent for each language and video type

Each stored Fact has six independent video uses: FR/EN/AR × `facts-short`/`facts-long`.
For example, completing a French Short reserves/uses only that Fact's French Short
variant. Its French Long and all English/Arabic variants stay available. Blank
translations are excluded; no language fallback is used. Within one combination,
both repeated Fact IDs and identical selected-language text remain blocked.

The existing registry stores scoped ID and text claims such as
`fact:video:fr:facts-short:id:321`. No new tables or columns are needed. Preview,
proposal/replacement selection, Major counts and the embedded usage panel all
use the selected language and profile. The panel displays its active combination.
Posts and Quiz tracking retain their existing identities.

Multi-fact long videos claim each included Fact in that same combination. Verified
partial output stays used even if export fails; failed/unrendered facts are released.
Resume uses the scope saved in the original usage items. Updating another language's
translation does not invalidate a retained video's selected-language fingerprint.
The shared runner, FFprobe, sequential queue and Windows export paths are unchanged.

### Repair evidenced legacy usage (local only)

`php artisan content-usage:scope-fact-videos --evidence=/absolute/private/evidence.json --dry-run`
reports affected operations/items/claims and ambiguous or reserved operations that
will be left untouched. Evidence uses format `maroquiz-fact-video-scope-evidence-v1`
and an `operations` array: each entry contains `operation_id`, `documents` (the exact
saved render documents) and `receipts` (output receipts verified against existing
MP4s). Retain SHA-256 evidence of original inputs/metadata and verify their language,
format and source IDs before preparing this file. Never infer the language from a
title or filename alone. A receipt must match the operation's existing output.

After reviewing that dry run, explicitly apply with
`php artisan content-usage:scope-fact-videos --evidence=/absolute/private/evidence.json --apply --expect-database=quizatlas`.
Inside the existing local PHP container, prefix these commands with
`docker exec quizatlas-php` and use the container's private evidence path.

Apply writes and verifies a private backup under
`backend/storage/app/private/fact-video-scope-repairs/` before changing any claims.
Only evidenced terminal Fact-video items and their own claims are reclassified.
Operation IDs, status, timestamps and output references stay intact. Quiz/Post
records, educational text and generated files are never rewritten. Conflicting,
changed, ambiguous or currently reserved records are skipped; rerunning an already
scoped repair makes no further changes. Do not run against production.

### Facts belong directly to Majors

The Fact library, imports, selection and both video profiles use `facts.major_id`.
The additive migration `2026_11_08_200000_associate_facts_with_majors.php` backfills
all rows (including soft-deleted ones) through their existing Subject → Major link.
It stops before schema changes if any Fact cannot be mapped. Back up Facts and the
usage registry before applying it; do not run seeders to convert existing data.
The legacy nullable `subject_id` and its FK remain for historical associations,
with `ON DELETE SET NULL` to prevent Subject deletion from removing Facts. Major
deletion is restricted while Facts reference it. Rollback refuses Major-only or
reassigned Facts instead of inventing Subjects or deleting content.

Admin Add/Edit needs a Major, FR/EN/AR content and optional source URL. JSON imports
accept `major_id` or `major_slug`, or a `default_major_id` for the import. Duplicate
French texts in the same Major are skipped, including retained soft-deleted Facts.
The shared `ImportsFacts` seeder resolves its existing `major_slug` directly; no
educational content arrays were rewritten. New Facts remain unverified initially.

Video options return per-Major `available: {fr, ar, en}` for the requested profile.
New render documents need no Subject fields. Old approved documents are still
accepted, but legacy Subject labels are ignored for ownership and presentation.
Long videos can mix former topics and show the Major throughout. The Short design
is unchanged. Major names use `backend/config/fact_major_labels.php`, following the
renderer's existing FR/EN/AR names; other Majors fall back to their stored name.
The catalogue currently has one name column, so no Major translation columns were
invented. Refresh Laravel's config/routes caches when installing these code changes.

Identity/text claims and source hashes are unchanged for all six video variants.
No usage reset or output rewrite is needed. Quiz → Subject associations, queues,
retries, exports and Windows destinations are unchanged.

### Progressive presentation and exact-span underlines

`presentation.js` is shared by validation, timing and both Chromium templates.
It selects at most two exact expressions per Fact: qualified quantities with known
units, percentages, contextual years/dates, simple intact formulas, and explicitly
introduced quoted terms. Plain numbers, arbitrary capitals and unsupported syntax
are left unstyled. No AI service, rewrite or content inference is involved.
Pagination and sentence/phrase groups preserve the source string, including Arabic
diacritics, formulas, punctuation and whitespace. Groups fade without character
typing or splitting connected words. All existing Major themes remain unchanged.

The common CSS uses theme-colored SVG curves measured from DOM text ranges. Drawing
is driven by render time, begins after the containing group is visible and remains
complete afterward. RTL draws right-to-left. Multiline or visually disjoint bidi
ranges omit their underline, keeping the original text and natural layout intact.

Optional editorial `fact.highlights` accepts up to two `{start,end,text}` objects;
offsets are JavaScript UTF-16 indices into that exact `fact.text`. Mismatches, word
cuts, Arabic combining-mark cuts and overlaps are rejected. `highlights: []` disables
statement highlighting. Existing documents need no new fields or configuration.

Long timing version 4 adds 1.8 seconds to EXPLORER and .75 seconds after each Fact's
last page. Its outgoing wipe now lasts .6 rather than .42 seconds. Reading remains
content-derived, and Shorts retain timing version 1. Music/SFX volume and ducking
rules are unchanged. The current pipeline contains no narration track or word-level
speech timings; this change adds neither. Scene audio, progress and metadata chapter
timestamps use encoded frame boundaries. Long thumbnails wait for complete text and
underlines. Old generated files and usage identities are not rewritten.

Focused checks from the repository root:

```bash
node --test fact-generator/presentation.test.js fact-generator/facts-video.test.js fact-generator/batch.test.js
node --test fact-generator/presentation-preview.test.js fact-generator/major-preview.test.js
```

Browser checks use disposable temporary files. To include read-only exported real
Facts, set `MAROQUIZ_FACT_PREVIEW_INPUT` to an array of `{id,major:{id,name,slug},fr,en,ar,source_url}`
records. `MAROQUIZ_FACT_PREVIEW_CLIP=1` additionally makes a silent, low-resolution
EXPLORER/two-Fact excerpt and checks it with FFprobe. It never starts the runner or
reserves content; it creates no production batch. `MAROQUIZ_FACT_PREVIEW_DIR` can
choose a dedicated preview directory. Successful MP4 previews are never overwritten.
