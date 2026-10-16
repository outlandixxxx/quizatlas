#!/usr/bin/env node
/**
 * MaroQuiz — "Le saviez-vous ?" reel renderer (1080×1920, for Reels, Shorts, TikTok, Facebook).
 *
 *   node render.js facts.json                    every fact in the file
 *   node render.js facts.json --day 1            the 3 facts of day 1
 *   node render.js facts.json --day 1 --video 2  one fact
 *   options: --lang fr|en|ar   --draft (no motion blur, ~2× faster)   --fps 30
 *
 * facts.json is a facts file (FR, EN or AR: a list of rows) or a single row.
 * Each reel writes output/<name>.mp4 and output/<name>-cover.jpg.
 *
 * Page timing and sound cues are worked out in js/template.js (setData),
 * from the length of each text, so every fact gets enough reading time.
 */
const fs = require('node:fs');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { spawnSync } = require('node:child_process');
const { chromium } = require('playwright');
const { buildSoundtrack } = require('./audio-mix');

const args = process.argv.slice(2);
const opt = (name, def) => { const i = args.indexOf(`--${name}`); return i >= 0 ? args[i + 1] : def; };
const flag = (name) => args.includes(`--${name}`);
const input = args.find((a) => !a.startsWith('--') && /\.json$/i.test(a));
if (!input) {
  console.log('Usage: node render.js facts.json [--day 1] [--video 1] [--lang fr|en|ar] [--draft]');
  process.exit(1);
}
const FPS = Number(opt('fps', 30));
const BLUR = !flag('draft');
const RENDER_FPS = BLUR ? FPS * 2 : FPS;
const ROOT = __dirname;
const OUT = path.join(ROOT, 'output');
const AUDIO = path.join(ROOT, 'assets', 'audio');
const MUSIC_FILE = path.join(AUDIO, 'music.wav');

const data = JSON.parse(fs.readFileSync(input, 'utf8'));
let rows = Array.isArray(data) ? data : [data];
const DAY = opt('day');
const VIDEO = opt('video');
if (DAY !== undefined) rows = rows.filter((r) => Number(r.jour ?? r.day) === Number(DAY));
if (VIDEO !== undefined) rows = rows.filter((r) => Number(r.video) === Number(VIDEO));
if (!rows.length) { console.error('No fact matches --day / --video in this file.'); process.exit(1); }

const pad = (n, w) => String(n).padStart(w, '0');

async function renderOne(page, row) {
  const tl = await page.evaluate(([r, l]) => window.setData(r, { lang: l }), [row, opt('lang')]);
  const day = row.jour ?? row.day;
  const slug = `fact-j${pad(day ?? 0, 2)}-v${row.video ?? 1}-${tl.theme}-${tl.lang}`;
  const work = fs.mkdtempSync(path.join(require('node:os').tmpdir(), 'reel-'));
  const frames = Math.round(tl.duration * RENDER_FPS);

  // soundtrack first: music + sound effects in one WAV
  const events = tl.cues.map(([time, file, o]) => ({ time, file: typeof file === 'string' ? path.join(AUDIO, `${file}.wav`) : file, ...(o || {}) }));
  const soundtrack = path.join(work, 'soundtrack.wav');
  const levels = buildSoundtrack({
    events, sections: tl.sections, duration: tl.duration, outFile: soundtrack,
    musicFile: fs.existsSync(MUSIC_FILE) ? MUSIC_FILE : null, fadeIn: 0.25, fadeOut: 1.4,
  });
  console.log(`\n${slug}: ${tl.duration.toFixed(1)} s, theme ${tl.theme}, sound peak ${levels.peakDb.toFixed(1)} dB`);

  const started = Date.now();
  for (let f = 0; f < frames; f++) {
    await page.evaluate((t) => window.renderFrame(t), f / RENDER_FPS);
    await page.screenshot({ path: path.join(work, `f${pad(f, 5)}.jpg`), type: 'jpeg', quality: 92 });
    if (f % RENDER_FPS === 0 || f === frames - 1) {
      const left = ((Date.now() - started) / (f + 1)) * (frames - f - 1) / 1000;
      process.stdout.write(`\r  frames ${f + 1}/${frames} · ${Math.ceil(left)} s left   `);
    }
  }
  // cover image (the moment the fact is fully on screen)
  await page.evaluate((t) => window.renderFrame(t), tl.cover);
  const cover = path.join(OUT, `${slug}-cover.jpg`);
  await page.screenshot({ path: cover, type: 'jpeg', quality: 92 });

  const mp4 = path.join(OUT, `${slug}.mp4`);
  const ff = spawnSync('ffmpeg', [
    '-y', '-loglevel', 'error', '-framerate', String(RENDER_FPS), '-i', path.join(work, 'f%05d.jpg'), '-i', soundtrack,
    ...(BLUR ? ['-vf', `tmix=frames=2,fps=${FPS}`] : []),
    '-c:v', 'libx264', '-preset', 'medium', '-crf', '18', '-pix_fmt', 'yuv420p', '-profile:v', 'high',
    '-c:a', 'aac', '-b:a', '192k', '-ar', '48000', '-shortest', '-movflags', '+faststart', mp4,
  ], { stdio: ['ignore', 'ignore', 'pipe'] });
  if (ff.status !== 0) throw new Error(`FFmpeg failed: ${ff.stderr}`);
  fs.rmSync(work, { recursive: true, force: true });
  const probe = spawnSync('ffprobe', ['-v', 'error', '-select_streams', 'a', '-show_entries', 'stream=codec_name', '-of', 'csv=p=0', mp4], { encoding: 'utf8' });
  if (!probe.stdout.trim()) throw new Error('The reel was written without sound.');
  console.log(`\n  ✓ ${path.relative(ROOT, mp4)} (+ cover)`);
}

(async () => {
  fs.mkdirSync(OUT, { recursive: true });
  const browser = await chromium.launch({ headless: true });
  try {
    const page = await browser.newPage({ viewport: { width: 1080, height: 1920 }, deviceScaleFactor: 1 });
    page.on('pageerror', (e) => console.error('Template error:', e.message));
    await page.goto(pathToFileURL(path.join(ROOT, 'template.html')).href);
    console.log(`${rows.length} reel${rows.length > 1 ? 's' : ''} to render${BLUR ? '' : ' (draft)'}`);
    for (const row of rows) await renderOne(page, row);
  } finally {
    await browser.close();
  }
})().catch((e) => { console.error(`\n${e.message}`); process.exit(1); });
