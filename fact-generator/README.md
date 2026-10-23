# MaroQuiz Fact Generator (Playwright + FFmpeg)

Turns your "Le saviez-vous ?" facts (JSON) into finished vertical reels,
1080×1920, ready for Instagram Reels, YouTube Shorts, TikTok and Facebook,
with animation, original music and sound effects, plus a cover image.

Each reel has two pages:

1. **The fact:** "LE SAVIEZ-VOUS ?", the major, the hook and the fact card.
2. **The detail:** "EN PLUS…", the detail card, the source and maroquiz.com.

All 11 majors use the MaroQuiz orange/yellow accents on charcoal, with their own icons and background symbols.
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

A reel lasts 13–20 s depending on the length of its texts. Best quality
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
