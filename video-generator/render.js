/**
 * =====================================================
 * MaroQuiz — Video Renderer (Playwright + FFmpeg)
 * =====================================================
 * Reads a quiz JSON file and renders it to MP4, plus a YouTube thumbnail
 * and a chapters file.
 *
 * Every frame is painted by template.html's window.renderFrame(scene, t, g)
 * and screenshotted. By default frames are rendered at 60 fps and blended
 * in pairs to 30 fps, which gives natural motion blur on fast movements.
 * The soundtrack (original music + sound effects) is built by audio-mix.js.
 *
 * Usage:
 *   node render.js path/to/video.json            best quality (motion blur)
 *   node render.js path/to/video.json --draft    about 2× faster, no motion blur
 *   node render.js path/to/video.json --fps 25   other output frame rate
 *
 * Output (in output/):
 *   <title>.mp4               the video
 *   <title>-thumbnail.png     1280×720 YouTube thumbnail
 *   <title>-chapters.txt      timestamps to paste into the YouTube description
 * =====================================================
 */

const fs = require('node:fs');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { spawnSync } = require('node:child_process');
const { chromium } = require('playwright');
const { buildSoundtrack } = require('./audio-mix');

const ROOT = __dirname;
const args = process.argv.slice(2);
const DATA_FILE = path.resolve(ROOT, args.find((a) => !a.startsWith('--') && !/^\d+$/.test(a)) || 'sample-video.json');
const fpsArg = args.indexOf('--fps');
const FPS = fpsArg >= 0 ? Number(args[fpsArg + 1]) : 30;
const DRAFT = args.includes('--draft');
const BLUR = !DRAFT;                       // motion blur: render 2 frames per output frame
const RENDER_FPS = BLUR ? FPS * 2 : FPS;

// ---- timings (seconds) ----
const INTRO_SECONDS = 4.5;     // clouds part, logo + welcome
const HOOK_SECONDS = 4;        // "Pouvez-vous trouver 20/20 bonnes réponses ?"
const COUNTDOWN_SECONDS = 5;   // per-question timer (05 → 01), after the question is typed
const REVEAL_SECONDS = 3;      // correct answer + "Great Job", no countdown
const HALFWAY_SECONDS = 3;     // "Déjà 10 questions !" card (videos with 6+ questions)
const LAST_SECONDS = 2.6;      // "Dernière question !" card (videos with 3+ questions)
const SCORE_SECONDS = 5.5;     // score scale
const OUTRO_SECONDS = 6;
const WIPE = 0.42;             // green logo wipe between scenes (must match template.js)

// ---- typing ----
const TYPE_START = 0.55;       // first question: card is in place, typing starts
const TYPE_START_WIPE = 0.8;   // after a wipe: a little later
const TYPE_CPS = 15;           // reading pace: ~45 characters → 3 s, ~75+ → 5 s
const TYPE_MIN = 3;            // seconds — every question gets at least 3 s to read
const TYPE_MAX = 5;            // seconds — long questions get up to 5 s

// ---- sounds ----
const AUDIO_DIR = path.join(ROOT, 'assets', 'audio');
const SFX = {
  tick: path.join(AUDIO_DIR, 'tick.wav'),
  tickUrgent: path.join(AUDIO_DIR, 'tick-urgent.wav'),
  chime: path.join(AUDIO_DIR, 'chime.wav'),
  whoosh: path.join(AUDIO_DIR, 'whoosh.wav'),
  sting: path.join(AUDIO_DIR, 'sting.wav'),
  pop: path.join(AUDIO_DIR, 'pop.wav'),
};
// Put your own track here to replace the generated music (it is looped and ducked).
const MUSIC_FILE = path.join(AUDIO_DIR, 'music.wav');

const pad = (n, w) => String(n).padStart(w, '0');

function formatQcm(value) {
  if (value === undefined || value === null || value === '') return '';
  const s = String(value).trim();
  if (/^qcm/i.test(s)) return s.toUpperCase();
  const digits = s.replace(/^#/, '');
  return /^\d+$/.test(digits) ? `QCM #${pad(digits, 3)}` : `QCM ${s}`;
}

function scoreTiers(n, texts) {
  const top = Math.max(1, Math.ceil(n * 0.9));
  const mid = Math.max(1, Math.min(top - 1, Math.ceil(n * 0.6)));
  const range = (a, b) => (a >= b ? `${b}/${n}` : `${a} – ${b}`);
  return [
    { icon: 'trophy', range: range(top, n), label: texts.tierTop || 'Expert !' },
    { icon: 'medal', range: range(mid, top - 1), label: texts.tierMid || 'Très bien !' },
    { icon: 'book', range: range(0, mid - 1), label: texts.tierLow || 'Continuez à réviser' },
  ];
}

/**
 * Turns the quiz JSON into timed scenes. Each segment has:
 *   scene  – what template.js paints
 *   cues   – sounds: [offset, wavPath | {typing}|{heartbeat}|{riser}, {vary, gain}]
 *   music  – arrangement + ducking for this part of the video
 *   chapter – YouTube chapter title (optional)
 */
function buildTimeline(data) {
  const video = data.video || {};
  const subject = data.subject || {};
  const texts = video.texts || {};
  const total = data.questions.length;
  const header = {
    category: subject.name || video.category || 'MaroQuiz',
    level: video.level ?? data.level ?? subject.level ?? '',
    qcm: formatQcm(video.qcm_number ?? data.qcm_number ?? video.number),
    icon: subject.icon || 'general',
    total,
  };
  const half = total >= 6 ? Math.floor(total / 2) : -1;          // halfway card after this many questions
  const lastCard = total >= 3;

  const seg = (scene, cues, music, chapter) => ({ scene, cues, music, chapter });
  const segments = [];

  segments.push(seg({ type: 'intro', duration: INTRO_SECONDS, welcome: video.welcome || 'welcome', total },
    [[0, SFX.whoosh, { vary: true }], [1.0, SFX.whoosh, { vary: true }], [1.15, SFX.sting], [1.9, SFX.pop]],
    { kind: 'intro', duck: 'intro' }, 'Introduction'));

  if (video.hook !== false) {
    segments.push(seg({ type: 'hook', duration: HOOK_SECONDS, total, seconds: COUNTDOWN_SECONDS, hook: video.hook || {} },
      [[0.1, SFX.pop], [0.45, SFX.sting], [0.85, SFX.pop, { vary: true }], [1.3, SFX.pop, { vary: true }],
        [1.5, SFX.tick], [2.0, SFX.tick], [2.5, SFX.tick], [3.0, SFX.tick], [HOOK_SECONDS - 0.45, SFX.whoosh]],
      { kind: 'hook', duck: 'hook' }));
  }

  data.questions.forEach((q, index) => {
    if (!Array.isArray(q.choices) || q.choices.length < 2) {
      throw new Error(`Question ${q.id ?? index + 1} has too few choices.`);
    }
    const correctLabel = q.correct_answer?.label;
    if (!correctLabel) throw new Error(`Question ${q.id ?? index + 1} has no correct answer.`);

    // "Dernière question !" before the last one
    if (lastCard && index === total - 1) {
      segments.push(seg({ type: 'milestone', kind: 'last', duration: LAST_SECONDS, after: index, ...header,
        title: texts.lastTitle || 'Dernière question !', subtitle: texts.lastSubtitle || 'Concentrez-vous bien…',
        wipeIn: true, wipeOut: true },
      [[0.6, SFX.sting], [0.6, { heartbeat: true }], [1.6, { heartbeat: true }], [LAST_SECONDS - WIPE, SFX.whoosh, { vary: true }]],
      { kind: 'milestone', duck: 'milestone' }));
    }

    const base = { type: 'question', index, number: index + 1, text: q.text, choices: q.choices, ...header };
    const wipeIn = index > 0;
    const typeStart = wipeIn ? TYPE_START_WIPE : TYPE_START;

    // typing: the question types out at reading pace, then the answers slide in
    const chars = [...String(q.text)].length;
    const typeDur = Math.min(TYPE_MAX, Math.max(TYPE_MIN, chars / TYPE_CPS));
    const cps = chars / typeDur;
    const answersAt = typeStart + typeDur + 0.05;
    const typeCues = [[typeStart, { typing: { duration: typeDur, cps } }], [answersAt, SFX.whoosh, { vary: true, gain: 0.7 }]];
    if (!wipeIn) typeCues.unshift([0, SFX.whoosh]);
    const shortText = String(q.text).length > 55 ? `${String(q.text).slice(0, 52).trim()}…` : String(q.text);
    segments.push(seg({ ...base, phase: 'type', typeStart, cps, answersAt, wipeIn, duration: +(answersAt + 0.85).toFixed(3) },
      typeCues, { kind: 'question', duck: 'type' }, `Question ${index + 1} – ${shortText}`));

    // countdown: ticks, then heartbeat + rising tension in the last seconds
    const cdCues = [[0, SFX.pop, { vary: true }]];
    for (let s = 0; s < COUNTDOWN_SECONDS; s++) {
      const remaining = COUNTDOWN_SECONDS - s;
      cdCues.push([s, remaining <= 2 ? SFX.tickUrgent : SFX.tick]);
      if (remaining <= 2) cdCues.push([s, { heartbeat: true }]);
    }
    cdCues.push([COUNTDOWN_SECONDS - 1.6, { riser: { duration: 1.6 } }]);
    segments.push(seg({ ...base, phase: 'countdown', duration: COUNTDOWN_SECONDS }, cdCues, { kind: 'question', duck: 'countdown' }));

    // reveal
    segments.push(seg({ ...base, phase: 'reveal', duration: REVEAL_SECONDS, correctLabel, wipeOut: true },
      [[0.05, SFX.chime], [0.2, SFX.pop, { vary: true }], [0.25, SFX.sting], [REVEAL_SECONDS - WIPE, SFX.whoosh, { vary: true }]],
      { kind: 'question', duck: 'reveal' }));

    // "Déjà 10 questions !" halfway card
    if (index + 1 === half && index !== total - 1) {
      segments.push(seg({ type: 'milestone', kind: 'half', duration: HALFWAY_SECONDS, after: index + 1, ...header,
        title: (texts.halfTitle || 'Déjà {n} questions !').replace('{n}', index + 1),
        subtitle: texts.halfSubtitle || 'Combien de bonnes réponses jusqu’ici ?',
        wipeIn: true, wipeOut: true },
      [[0.45, SFX.pop], [0.6, SFX.chime], [HALFWAY_SECONDS - WIPE, SFX.whoosh, { vary: true }]],
      { kind: 'milestone', duck: 'milestone' }));
    }
  });

  segments.push(seg({ type: 'score', duration: SCORE_SECONDS, total, tiers: scoreTiers(total, texts),
    title: texts.scoreTitle || 'Quel est votre score ?', footer: texts.scoreFooter || 'Écrivez votre score en commentaire !',
    wipeIn: true, wipeOut: true },
  [[0.2, SFX.sting], [0.6, SFX.pop, { vary: true }], [0.85, SFX.pop, { vary: true }], [1.1, SFX.pop, { vary: true }],
    [1.9, SFX.chime], [SCORE_SECONDS - WIPE, SFX.whoosh, { vary: true }]],
  { kind: 'score', duck: 'score' }, 'Votre score'));

  segments.push(seg({ type: 'outro', duration: OUTRO_SECONDS, wipeIn: true },
    [[0.25, SFX.sting], [1.0, SFX.pop, { vary: true }], [1.5, SFX.pop, { vary: true }]],
    { kind: 'outro', duck: 'outro' }));

  return { segments, header };
}

const timecode = (sec) => {
  const s = Math.floor(sec);
  const h = Math.floor(s / 3600), m = Math.floor((s % 3600) / 60), r = s % 60;
  return h ? `${h}:${pad(m, 2)}:${pad(r, 2)}` : `${m}:${pad(r, 2)}`;
};

async function main() {
  if (!fs.existsSync(DATA_FILE)) throw new Error(`JSON file not found: ${DATA_FILE}`);
  const data = JSON.parse(fs.readFileSync(DATA_FILE, 'utf8'));
  if (!Array.isArray(data.questions) || data.questions.length === 0) {
    throw new Error('The JSON must contain at least one question.');
  }
  const template = path.join(ROOT, 'template.html');
  if (!fs.existsSync(template)) throw new Error('template.html was not found.');
  for (const [name, file] of Object.entries(SFX)) {
    if (!fs.existsSync(file)) throw new Error(`Missing sound file for "${name}": ${file}`);
  }

  const titleSlug = String(data.video?.title || 'maroquiz-video')
    .normalize('NFD').replace(/[̀-ͯ]/g, '')
    .toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-|-$/g, '').slice(0, 70) || 'maroquiz-video';

  const outputDir = path.join(ROOT, 'output');
  const workDir = path.join(outputDir, `.frames-${Date.now()}`);
  const outputFile = path.join(outputDir, `${titleSlug}.mp4`);
  const thumbFile = path.join(outputDir, `${titleSlug}-thumbnail.png`);
  const chaptersFile = path.join(outputDir, `${titleSlug}-chapters.txt`);
  fs.mkdirSync(workDir, { recursive: true });

  const { segments, header } = buildTimeline(data);
  const framesOf = (s) => Math.round(s.scene.duration * RENDER_FPS);
  const totalFrames = segments.reduce((n, s) => n + framesOf(s), 0);
  const totalDuration = totalFrames / RENDER_FPS;

  // ---- soundtrack first: a sound problem shows up now, not after the frames ----
  const audioEvents = [];
  const sections = [];
  const chapters = [];
  let at = 0;
  for (const s of segments) {
    const len = framesOf(s) / RENDER_FPS;
    for (const [offset, file, opts] of s.cues) audioEvents.push({ time: at + offset, file, ...(opts || {}) });
    sections.push({ start: at, end: at + len, kind: s.music.kind, duck: s.music.duck });
    if (s.chapter) chapters.push(`${timecode(chapters.length ? at : 0)} ${s.chapter}`);
    at += len;
  }

  let browser;
  try {
    const soundtrack = path.join(workDir, 'soundtrack.wav');
    const musicFile = fs.existsSync(MUSIC_FILE) ? MUSIC_FILE : null;
    const levels = buildSoundtrack({ events: audioEvents, sections, musicFile, duration: totalDuration, outFile: soundtrack });
    console.log(`Soundtrack: music ${levels.music}, ${audioEvents.length} sounds, peak ${levels.peakDb.toFixed(1)} dB, average ${levels.rmsDb.toFixed(1)} dB`);
    if (!Number.isFinite(levels.rmsDb) || levels.rmsDb < -60) {
      throw new Error('The soundtrack is silent. Check the .wav files in assets/audio/.');
    }
    console.log(`Video: ${timecode(totalDuration)} long, ${BLUR ? `${FPS} fps with motion blur` : `${FPS} fps (draft)`}, ${totalFrames} frames to render`);

    browser = await chromium.launch({ headless: true });
    const page = await browser.newPage({ viewport: { width: 1920, height: 1080 }, deviceScaleFactor: 1 });
    page.on('pageerror', (e) => console.error('Template error:', e.message));
    await page.goto(pathToFileURL(template).href);
    await page.evaluate(() => document.fonts.ready);

    let frame = 0;
    const started = Date.now();
    for (const s of segments) {
      const frames = framesOf(s);
      for (let f = 0; f < frames; f++) {
        const t = f / RENDER_FPS;
        const g = frame / RENDER_FPS;
        await page.evaluate(({ scene, t, g }) => window.renderFrame(scene, t, g), { scene: s.scene, t, g });
        await page.screenshot({ path: path.join(workDir, `f${pad(frame, 6)}.jpg`), type: 'jpeg', quality: 90 });
        frame++;
        if (frame % (RENDER_FPS * 5) === 0 || frame === totalFrames) {
          const pct = Math.round((frame / totalFrames) * 100);
          const secs = (Date.now() - started) / 1000;
          const left = Math.max(0, secs / frame * (totalFrames - frame));
          process.stdout.write(`\rRendering frames: ${frame}/${totalFrames} (${pct}%) — ${timecode(secs)} elapsed, ~${timecode(left)} left   `);
        }
      }
    }
    process.stdout.write('\n');

    // ---- thumbnail ----
    await page.evaluate((scene) => window.renderFrame(scene, 0, 0), { type: 'thumb', duration: 1, ...header,
      badge: data.video?.thumbnail_badge });
    const thumbRaw = path.join(workDir, 'thumb.png');
    await page.screenshot({ path: thumbRaw, type: 'png' });

    // ---- encode: frames + the finished soundtrack ----
    const ffArgs = [
      '-y',
      '-framerate', String(RENDER_FPS), '-i', path.join(workDir, 'f%06d.jpg'),
      '-i', soundtrack,
      '-map', '0:v:0', '-map', '1:a:0',
      ...(BLUR ? ['-vf', `tmix=frames=2,fps=${FPS}`] : []),
      '-c:v', 'libx264', '-preset', 'medium', '-crf', '18', '-pix_fmt', 'yuv420p', '-r', String(FPS),
      '-c:a', 'aac', '-b:a', '192k', '-ar', '48000', '-ac', '2',
      '-t', totalDuration.toFixed(3),
      '-movflags', '+faststart',
      outputFile,
    ];
    console.log('Encoding with FFmpeg…');
    const result = spawnSync('ffmpeg', ffArgs, { stdio: ['ignore', 'ignore', 'pipe'], maxBuffer: 64 * 1024 * 1024 });
    if (result.error) throw result.error;
    if (result.status !== 0) {
      console.error(String(result.stderr).split('\n').slice(-25).join('\n'));
      throw new Error(`FFmpeg failed with exit code ${result.status}.`);
    }

    spawnSync('ffmpeg', ['-y', '-loglevel', 'error', '-i', thumbRaw, '-vf', 'scale=1280:720:flags=lanczos', thumbFile]);
    fs.writeFileSync(chaptersFile, chapters.join('\n') + '\n');

    // ---- check the finished file really has sound ----
    const probe = spawnSync('ffprobe', ['-v', 'error', '-select_streams', 'a', '-show_entries', 'stream=codec_name,channels', '-of', 'csv=p=0', outputFile], { encoding: 'utf8' });
    const audioInfo = (probe.stdout || '').trim();
    if (!audioInfo) {
      throw new Error(`The video was written without an audio track (${outputFile}). Please send the output of: ffmpeg -version`);
    }
    console.log(`Video created: ${outputFile} (${timecode(totalDuration)}, ${FPS} fps, audio: ${audioInfo.replace(',', ' ')} channels)`);
    console.log(`Thumbnail:     ${thumbFile}`);
    console.log(`Chapters:      ${chaptersFile}`);
  } finally {
    if (browser) await browser.close();
    fs.rmSync(workDir, { recursive: true, force: true });
  }
}

main().catch((error) => {
  console.error('\nVideo generation failed:', error.message);
  process.exitCode = 1;
});
