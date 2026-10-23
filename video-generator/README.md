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
