# MaroQuiz Video Renderer (Playwright + FFmpeg)

Turns a quiz JSON file into a finished 1920×1080 YouTube video with
animation, original music and sound effects, plus a thumbnail and a
chapters file. The question and outro pages are rebuilt from the Canva
design "Youtube template", using the MaroQuiz logo and orange (`#f47745`), yellow (`#f2c94c`), charcoal (`#29252f`) and cream (`#f7f5f1`) palette.

## Requirements

- Node.js
- `ffmpeg` on your PATH
- `npm install` (installs Playwright with its Chromium, and Sass)

## Make a video

```bash
npm install
node render.js path/to/your-video.json            # best quality (motion blur)
node render.js path/to/your-video.json --draft    # about 2× faster, for checking
node render.js path/to/your-video.json --fps 25   # other frame rate
```

Each render writes three files to `output/`:

| File | What it is |
|---|---|
| `<title>.mp4` | the video |
| `<title>-thumbnail.png` | 1280×720 YouTube thumbnail (logo, subject icon, subject, number of questions) |
| `<title>-chapters.txt` | timestamps to paste into the YouTube description, one chapter per question |

Rendering takes about 75 ms per frame. Best quality renders 60 frames per
second of video and blends them in pairs into 30 fps, which gives real
motion blur: a 20-question video (about 5 min) takes roughly 30 minutes.
`--draft` takes about 15 minutes. The renderer shows the time left as it
goes.

To check the result, play it in VLC, the Windows media player or a
browser. VS Code's preview shows the picture but plays no sound.

## JSON format

```json
{
  "video": {
    "title": "Programmation — QCM 001",
    "level": "Beginner",
    "qcm_number": 1
  },
  "subject": { "name": "Programmation", "icon": "code" },
  "questions": [
    {
      "id": 1,
      "text": "Quel language est utilisé pour styliser une page web ?",
      "choices": [
        { "label": "A", "text": "Python" },
        { "label": "B", "text": "Html" },
        { "label": "C", "text": "Css" },
        { "label": "D", "text": "Java" }
      ],
      "correct_answer": { "label": "C", "text": "Css" }
    }
  ]
}
```

| Field | Shown as | Notes |
|---|---|---|
| `subject.name` | PROGRAMMATION in the header and thumbnail | Upper-cased automatically |
| `subject.icon` | Icon in the header badge and the thumbnail | See **Subject icons** |
| `video.level` | BEGINNER | Also read from `level` or `subject.level`; hidden if empty |
| `video.qcm_number` | QCM #001 | A number is padded to 3 digits |
| `video.welcome` | Intro word | Optional, default "welcome" |
| `video.hook` | Hook text | Optional object (`line1`, `score`, `line2`, `pill`, `footer`), or `false` to skip the hook |
| `video.texts` | Other on-screen text | Optional, see below |
| `video.thumbnail_badge` | Orange badge on the thumbnail | Optional, default "Testez-vous !" |

Long questions and answers shrink automatically to fit their boxes.

`video.texts` lets you change any of these (all optional):
`halfTitle` ("Déjà {n} questions !", `{n}` is replaced), `halfSubtitle`,
`lastTitle`, `lastSubtitle`, `scoreTitle`, `scoreFooter`, `tierTop`,
`tierMid`, `tierLow`.

## Subject icons

Set `subject.icon` to one of these names (files in `assets/icons/`):

`code` · `math` · `physics` · `chemistry` · `biology` · `geography` ·
`history` · `language` · `literature` · `computer` · `economics` · `law` ·
`medicine` · `art` · `music` · `sport` · `general` · `exam` ·
`philosophy` · `religion`

You can also give a path to your own image (`"assets/icons/my-subject.png"`
or `.svg`), or plain text (`"</>"`, `"π"`). With no icon, `general` (a
light bulb) is used. To edit an icon, open its `.svg` in any vector
editor; the colours are MaroQuiz charcoal, orange and yellow.

## What it renders

1. **Intro** (4.5 s): two clouds roll in over the orange/yellow sunburst and part
   to reveal your logo on a white cloud; "welcome" pops in letter by letter.
2. **Hook** (4 s): "Pouvez-vous trouver 20/20 bonnes réponses ?", with the
   score slamming in, a "5 secondes par question" stopwatch, and "Comptez
   vos points et donnez votre score en commentaire".
3. **Each question**, with a progress bar at the bottom (7/20):
   - **Typing** (3–5 s, depending on the question's length): the question
     types out at reading pace with a keyboard click per letter, then the
     answers slide in.
   - **Countdown** (5 s): the ring empties smoothly; a tick each second.
     In the last two seconds the numbers turn deep orange, the ring pulses like a
     heartbeat, the screen edges glow orange, and a heartbeat and a soft
     rising swell build the tension.
   - **Reveal** (3 s): the correct answer bounces up, turns warm yellow with a
     glowing pulse, a light sweep and a spinning check mark; confetti
     bursts from it; wrong answers shake and fade; the "Great Job" star
     pops in on rotating rays.
   - An orange/yellow sweep with your logo carries over to the next question.
4. **Halfway card** (videos with 6+ questions): "Déjà 10 questions !
   Combien de bonnes réponses jusqu'ici ?". The music drops its drums for a
   breath here.
5. **"Dernière question !"** card before the last question (3+ questions),
   with a heartbeat.
6. **Score scale** (5.5 s): "18 – 20 Expert ! · 12 – 17 Très bien ! ·
   0 – 11 Continuez à réviser", worked out from the number of questions,
   and "Écrivez votre score en commentaire !".
7. **Outro** (6 s): score call-to-action, Commentaire, Subscribe and
   www.maroquiz.com over animated water ripples, then fade to black.

Cards float gently and the starfield drifts slowly, so nothing on screen
is ever completely still. Scene lengths are constants at the top of
`render.js`.

## Sound

**Music:** `music.js` composes an original, soft lo-fi piece for each
video: warm pad, gentle piano arpeggios, round bass, light brushed drums,
a little vinyl texture and reverb, in A minor at 82 BPM. It follows the
video: calm in the intro, building in the hook, a full groove during the
questions, a pause on the halfway card, brightest on the score scale.
It is 100% original, so it can't get copyright claims.

The music is mixed around the questions: quieter while a question types
and during the countdown, louder on reveals, with a fade in and out.

To use your own track instead, save it as `assets/audio/music.wav`. It is
looped and mixed the same way. The YouTube Audio Library has free
tracks you can use.

**Sound effects:** `tick`, `tick-urgent`, `whoosh`, `chime`, `pop` and
`sting` in `assets/audio/`. Replace any with your own `.wav` of the same
name (any sample rate, mono or stereo, 16/24/32-bit). Whooshes and pops
are slightly re-pitched each time so they don't sound repetitive. The
keyboard clicks, heartbeat and rising swell are generated.

`audio-mix.js` builds the whole soundtrack before the frames are
rendered and writes one stereo WAV that FFmpeg attaches to the video, so
it works with any FFmpeg version. Each render prints the soundtrack level
and confirms the video has an audio track.

## Edit the design

- **Styles:** edit the files in `scss/`, then run `npm run build:css`
  (or `npm run watch:css` while you work). This writes `css/main.css`,
  which `template.html` loads. Colours and fonts are in
  `scss/_variables.scss`.
- **Animation inside a scene:** `js/template.js` (`paintIntro`,
  `paintHook`, `paintQuestion`, `paintMilestone`, `paintScore`,
  `paintOutro`, `paintThumb`, and `paintWipe` for the transition).
- **Scene lengths, typing speed, sound cues:** `render.js`.
- **Music:** `music.js` (chords, tempo, instruments, arrangement, mixing).
- **Markup:** `template.html`.

## Files

```
template.html       markup for every scene
scss/               styles (main.scss imports the partials)
  _variables.scss   colours, fonts, canvas size
  _fonts.scss       local @font-face rules
  _base.scss        reset, stage, scene fade
  _sky.scss         sunburst + clouds (intro, hook, score, thumbnail)
  _intro.scss       logo, clouds, "welcome"
  _hook.scss        "Pouvez-vous trouver 20/20…"
  _question.scss    header, number, question card, answers, timer, reveal
  _outro.scss       score call-to-action, Subscribe, website
  _extras.scss      progress bar, orange glow, wipe, milestone cards, score scale, thumbnail
css/main.css        compiled from scss/ (don't edit by hand)
js/template.js      animation engine: window.renderFrame(scene, t, g)
render.js           reads the JSON, renders every frame, encodes with FFmpeg
audio-mix.js        builds the soundtrack (music, sound effects, clicks, heartbeat)
music.js            composes the original background music
sample-video.json   example input (6 questions)
package.json        npm scripts: render, build:css, watch:css
assets/images/      maroquiz-logo.webp (shared MaroQuiz logo)
assets/icons/       subject icons (SVG)
assets/fonts/       Open Sans, Nunito, Montserrat, Anton + their OFL licences
assets/audio/       sound effects (and your music.wav if you add one)
output/             finished videos, thumbnails, chapters
```

## How the animation works

Everything on screen is a pure function of the scene and the time, so
each screenshot is exact. `render.js` calls `renderFrame(scene, t, g)`
for every frame (`t` = seconds into the scene, `g` = seconds into the
video), takes a screenshot, and FFmpeg encodes the image sequence.
Nothing depends on the browser's own animation clock, which headless
Chromium does not advance reliably between screenshots.

## Artwork

The intro and the wipe use your logo (`assets/images/`). The backgrounds
(sunburst, clouds, starfield, water ripples), icons, hand, Subscribe
button and "Great Job" star are drawn in code, so the video doesn't
depend on any Canva stock files.

## Subjects in the admin video picker

The picker loads every page of `/majors` and `/subjects` through the existing
API, then shows active subjects belonging to the selected major. The default
API page has only 10 records; loading just that page hides later subjects.
“Select all” includes every active subject for that major.

Selecting all subjects does not guarantee a video for every subject: the batch
target limits the total number of videos, and generation skips subjects without
enough eligible, unused questions for the chosen difficulty. The generation
summary lists question shortages. Raise the target to at least the number of
selected subjects to allow one video per eligible subject.

## Shared local runner

From the repository root, start `node video-generator/local-runner.js`, or double-click `start-maroquiz-video-renderer.cmd` on Windows. Quiz and facts jobs share this loopback-only runner. Angular obtains a single-use, content-bound administrator ticket from the local Laravel API; the app JWT is never sent to Node. Outputs are isolated under `output/<job-id>/`. See the [facts generator instructions](../fact-generator/README.md).

On this WSL setup, use `bash video-generator/start-local-runner.sh` from the repository root in Ubuntu, or copy the root CMD wrapper to the Windows Desktop. The wrapper calls `wsl.exe -d Ubuntu` and uses Linux dependencies exclusively. See [Windows connectivity instructions](../revision-generator/README.md#windows-local-wrapper-and-connectivity-checks). Historical acceptance reports and screenshots are preserved in the external archive described in the [root README](../README.md#historical-material).

## Arabic presentation and unattended quiz batches

Arabic uses the bundled SIL Open Font License Cairo font (`assets/fonts/OFL-Cairo.txt`):
question 700, choices 600, supporting text 500. The renderer loads Cairo before
capturing frames. Arabic choice labels are **presentation only**: A/B/C/D remain
the source identifiers and become أ/ب/ج/د on screen. The card coordinates and
correct-answer mapping stay unchanged. Intro text is kept joined for Arabic
shaping. Mixed text has isolated bidi containers; FR/EN retain their original fonts.
Language precedence: document, video or subject `language` metadata (`ar/fr/en`),
then the subject slug suffix, then Arabic text detection for older exports.
The existing JSON exporter omits explanations; this change adds no explanation
scene or extra reading time.

After updating, stop an older renderer console with Ctrl+C once, then restart
the existing launcher from the repository root (the new `/health` lists `quiz-batch`):

```bash
export VIDEO_EXPORT_DIR='/mnt/d/MaroQuiz/Maroquiz social media plans/Long video'
bash video-generator/start-local-runner.sh
```

`start-maroquiz-video-renderer.cmd` still works with its existing WSL launcher.
In WSL the requested D: location is the default; D: must actually be mounted.
On native Windows with the existing Node/FFmpeg/Playwright installation:

```powershell
$env:VIDEO_EXPORT_DIR = 'D:\MaroQuiz\Maroquiz social media plans\Long video'
node .\video-generator\local-runner.js
```

On ordinary Linux, set an absolute `VIDEO_EXPORT_DIR` explicitly. In Docker,
explicitly bind-mount the Windows folder and set `VIDEO_EXPORT_DIR` to that mount
inside the container; no implicit `/mnt/d` access is assumed. This remains a local
service; **do not add rendering services or this setting to the production VPS**.

In the admin YouTube videos page, prepare proposals, review **every video**, make
replacements, then check the approval box and click **Generate All Videos**.
This uses final quality, existing numbering/order/questions and the existing
soundtrack, animations, thumbnail and chapters. The browser submits one authenticated
batch and only observes status. Closing it does not stop the local worker.
Reopening the same browser profile restores the last batch; its local access key
is stored in browser local storage, so use a trusted local browser profile.

Execution: **render → FFprobe video/audio validation → content-usage confirmation
→ destination copy → FFprobe + SHA-256 verification → atomic publication → next**.
Exported names contain subject, stable video sequence, language and a batch suffix.
Publication uses an atomic hard link from a temporary file in the destination,
then removes only that temporary name. This prevents overwriting an existing file;
the destination filesystem must support hard links (NTFS/WSL normally does).
A matching existing file is verified and reused; a different file causes an error.
The original MP4, thumbnail, chapters and per-video `render.log` remain under
`video-generator/output/<batch-id>/<order>/`. Only the existing renderer's private
`.frames-*` work directory is cleaned after that render. Final output directories
and completed videos are never deleted by this queue.

Batch snapshots and item states live in `.local-jobs/<batch-id>.state.json` and
`output/<batch-id>/input.json`. Do not edit/move them or delete outputs during a
batch. Only one local job runs at a time. A batch worker lock also fences another
batch process using the same job directory. Keep one runner instance/port; do not
launch independent CLI renders against its output folders.

Failures pause the batch without automatic retry loops. **Retry failed video /
Resume batch** revalidates retained files and continues the first incomplete item.
An export failure retries its saved MP4 without rendering it again. **Stop remaining
videos** stops the current worker/export and preserves completed files; it can
later be resumed. A service restart requires explicit resume, not automatic work.
A retained renderer PID still alive after a hard service crash blocks new work:
stop that old worker before resuming. WSL also checks the retained process group.
On native Windows after a hard crash, ensure orphaned FFmpeg/Chromium children
have stopped before resuming. This deliberately avoids racing two renderers
or killing an unrelated process whose PID may have been reused.

The Laravel development API must remain reachable for content-usage leases and
partial completion receipts. Verified outputs are recorded before Windows export,
so failed exports and partial retries never make used content available again.
If a service was offline past its lease, use the existing admin Content Usage
recovery action, then resume; changed or newly reserved source content is rejected.
The approved JSON request is limited to 2 MB and 60 videos. A changed/missing
previously verified source MP4 blocks resume until restored; it is never silently
regenerated. Local storage is not a backup: preserve your completed outputs.

Focused verification (from repository root):

```bash
node --test video-generator/quiz-batch.test.js video-generator/content-usage.test.js
node video-generator/arabic-preview.test.js
```

Tests use temporary directories, mocked multi-video rendering, a 0.3-second
real MP4 and a 0.1-second silent clip for rejection. Preview images are written
only to `/tmp/maroquiz-arabic-{intro,reveal}.png`.
No full batch or educational database writes are required.

## Explicit local reset of all quiz-video question usage

This is a one-time administrative reset, including successfully rendered videos.
It is separate from expired-lease recovery. Stop the local runner **and standalone
renders** first; no active render may be reset. Keep it stopped until verification
finishes. When using PHP inside Docker, the PHP container cannot inspect WSL host
processes: `--runner-stopped` explicitly attests that the host check was done.
The command also refuses a reachable loopback renderer on port 3777.

From the repository root, inspect the exact local target and counts:

```bash
docker exec quizatlas-php php artisan content-usage:reset-quiz-videos --dry-run
```

Only after reviewing that report, apply to the exact local database name:

```bash
docker exec quizatlas-php php artisan content-usage:reset-quiz-videos \
  --apply --expect-database=quizatlas --runner-stopped
```

The command refuses production environments and remote database hosts. It locks
the affected PostgreSQL tables for a consistent transaction, writes and verifies
a private JSON backup plus SHA-256 sidecar **before changing rows**, then retires
`quiz-video` and `quiz-json` operations and releases their question claims.
Quiz-JSON roots are included because their claims can also block video selection.
Other generation kinds, facts and revision history are preserved.

Backups default to `backend/storage/app/private/content-usage-resets/` (0700
folder, 0600 files; excluded from Git and public storage). `--backup-dir` accepts
an alternative absolute private directory. The JSON contains original operation,
item, claim and assignment records, with related video/batch context. Verify a
backup from its directory with `sha256sum -c <filename>.json.sha256`. Backups are
never automatically deleted or restored; any restoration needs a separate review
of newer claims while the renderer is stopped.

Historical video assignments retain their question links, ordering, scores and
metadata, with an explicit reset marker so they stop excluding those questions.
Completed timestamps and output receipts remain in operation history. Old render
capabilities are fenced: historical jobs cannot be retried to consume content
again. **Refresh the admin page and create new proposals**, rather than resuming
pre-reset jobs. Existing MP4s, thumbnails, audio, exports and local job files are
untouched; video numbering continues normally.

New proposals and renders still prevent duplicates. Failed/cancelled unverified
quiz outputs release both registry claims and their existing proposal restrictions;
verified partial outputs remain used. New assignments never inherit a reset marker.
A repeated reset with no new usage is a no-op. Normal active-content, question
quality and within-batch similarity checks still apply. Unrelated generation
claims, if present, remain blocking and are disclosed by the dry-run projection.

### Recover a batch after a PC shutdown

Keep the retained job and its approved `output/<job-id>/input.json`; do not create
new proposals. Restart the local runner, reopen the Videos admin screen in the
same browser and click **Retry failed video / Resume batch**. Facts use their
existing **Resume Batch / Retry Failed / Retry Export** action.

Recovery verifies completed source/export MP4s against their recorded SHA-256,
then always asks Laravel to renew/recover the existing usage operation. A local
`reserved` flag is never treated as proof that the server lease is current.
Expired reservations are fenced transactionally; used sources stay used and only
unfinished sources are reclaimed. The backend returns the current attempt and
capability. Invalid capabilities, retired operations, changed sources or content
claimed by another operation remain blocked with the backend's actual reason.

Completed and exported videos are checked and skipped; their MP4s, thumbnails and
metadata are never rendered or copied again. Interrupted and previously cancelled
queued items resume in approved order. Verification can take time for large files;
the Retry button remains pending while the local API allows up to five minutes.

For controlled preparation without starting FFmpeg, the authenticated local
`POST /jobs/<job-id>/retry` also accepts JSON `{ "prepare_only": true }` with the
existing `X-Maroquiz-Job-Key`. This verifies retained files, synchronizes the
reservation and leaves the job paused. It never starts a worker. A later ordinary
Retry rechecks authorization, so another expiry while paused is recoverable.
Keep the job capability private; never paste it into screenshots or reports.
## Canva portrait Short

The separate **5 Secondes pour Répondre** option uses the existing renderer, approved question sets, usage registry and sequential batch recovery. See [five-seconds/README.md](five-seconds/README.md) for reference comparisons, the one-sample command and the required explicit `QUIZ_SHORT_EXPORT_DIR` configuration. Existing Long Quiz and Facts exports keep their current paths.

**Défi du jour** is a separate selectable portrait template with its own Canva-based layout, question/choice reveal, answer highlight and closing sequence. It reuses that same approval, usage, batch/retry and configured Shorts export workflow. See [defi-du-jour/README.md](defi-du-jour/README.md) for the review sample, focused checks and artwork/audio provenance.

**Niveau concours (Short)** adds a separately timed four-card grid template, FR/EN/AR content labels and RTL flow, optional extra animations (off by default), and the same approved snapshots, usage protection and export/retry pipeline. See [niveau-concours/README.md](niveau-concours/README.md) for the comparison sample, focused checks and the offline narration limitation.
