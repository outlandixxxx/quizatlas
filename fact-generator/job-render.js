/* Facts profiles inside the existing local runner. One browser, one encoder,
 * one scene soundtrack at a time; screenshot bytes flow through backpressure. */
const fs = require('node:fs');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { spawn, spawnSync } = require('node:child_process');
const { once } = require('node:events');
const { chromium } = require('playwright');
const { buildSoundtrack } = require('./audio-mix');
const { validateFactsJob } = require('./job-schema');
const { longCues, encodedScenes, thumbnailTime } = require('./timing');
const ROOT = __dirname;
const FFMPEG = process.env.FFMPEG_PATH || 'ffmpeg';
const FFPROBE = process.env.FFPROBE_PATH || 'ffprobe';
const input = process.argv[2];
const output = process.argv[3]; // set by the runner, never by browser JSON
const work = path.join(output, '.work');
let browser, encoder, cancelled = false;
const progress = data => console.log('FACTS_PROGRESS ' + JSON.stringify(data));
function command(exe, args) {
  const result = spawnSync(exe, args, { encoding: 'utf8', timeout: 120000, maxBuffer: 2 * 1024 * 1024, windowsHide: true });
  if (result.status !== 0) throw new Error(`${path.basename(exe)}: ${result.error?.message || result.stderr?.slice(-2000)}`);
  return result.stdout;
}
async function stop() {
  cancelled = true;
  encoder?.kill('SIGTERM');
  await browser?.close().catch(() => {});
}
process.on('SIGTERM', stop);
process.on('SIGINT', stop);
async function encodeScene(page, scene, config, index, totalFrames, doneFrames) {
  const { doc, width, height, fps, scenes } = config;
  const count = Math.ceil(scene.duration * fps);
  const encodedScene = { ...scene, start: doneFrames / fps, duration: count / fps };
  const thumbnailScene = scene.kind === 'short' ? index === 0 : scene.kind === 'fact' && scene.index === 0 && scene.pageIndex === 0;
  const thumbnailFrame = Math.min(count - 1, Math.ceil(thumbnailTime(scene) * fps));
  let cues;
  if (scene.kind === 'short') {
    const tl = await page.evaluate(([row, lang, last]) => window.setData(row, { lang, last }), [scene.row, doc.language, index === scenes.length - 1]);
    if (Math.abs(tl.duration - scene.duration) > .02) throw new Error('Short timeline and estimate differ.');
    cues = tl.cues.filter(([time]) => time < scene.duration);
  } else {
    await page.evaluate(([data, item, duration]) => window.setLongData(data, item, duration), [doc, encodedScene, totalFrames / fps]);
    cues = longCues(encodedScene);
  }
  const audioRoot = doc.type === 'facts-short' ? path.join(ROOT, 'assets/audio') : path.join(ROOT, '../video-generator/assets/audio');
  const soundtrack = path.join(work, 'soundtrack.wav');
  const audio = doc.render_options.music || doc.render_options.sfx;
  if (audio) {
    progress({ stage: 'audio', message: `Preparing audio · scene ${index + 1}/${scenes.length}`, progress: null });
    buildSoundtrack({ duration: encodedScene.duration, outFile: soundtrack, musicFile: fs.existsSync(path.join(audioRoot, 'music.wav')) ? path.join(audioRoot, 'music.wav') : null,
      sections: [{ start: 0, end: encodedScene.duration, kind: scene.kind === 'short' ? 'hook' : scene.kind === 'fact' ? 'question' : scene.kind === 'chapter' ? 'milestone' : scene.kind, duck: scene.kind === 'fact' ? 'type' : 'reveal' }],
      events: cues.map(([time, file, opts]) => ({ time, file: typeof file === 'string' ? path.join(audioRoot, `${file}.wav`) : file, ...opts })),
      finalFadeOut: scene.kind === 'short' && index === scenes.length - 1 ? .6 : 0,
      musicEnabled: doc.render_options.music, sfxEnabled: doc.render_options.sfx, musicVolume: doc.render_options.musicVolume, fadeIn: .2, fadeOut: scene.kind === 'short' && index === scenes.length - 1 ? .6 : scene.kind === 'outro' ? 1.2 : .4,
    });
  }
  const segment = path.join(work, `segment-${String(index).padStart(5, '0')}.mp4`);
  encoder = spawn(FFMPEG, ['-y', '-loglevel', 'error', '-f', 'image2pipe', '-vcodec', 'mjpeg', '-framerate', String(fps), '-i', 'pipe:0',
    ...(audio ? ['-i', soundtrack] : []), '-c:v', 'libx264', '-threads', doc.type === 'facts-short' ? '1' : '2', '-preset', doc.render_options.quality === 'draft' ? 'ultrafast' : 'medium', '-crf', doc.render_options.quality === 'draft' ? '25' : '18', '-pix_fmt', 'yuv420p',
    ...(audio ? ['-c:a', 'aac', '-b:a', '192k', '-ar', '48000', '-af', 'apad'] : ['-an']), '-t', String(Math.ceil(scene.duration * fps) / fps), '-movflags', '+faststart', segment], { stdio: ['pipe', 'ignore', 'pipe'], shell: false, windowsHide: true });
  let errors = '';
  encoder.stderr.on('data', data => { errors = (errors + data).slice(-4000); });
  encoder.stdin.on('error', () => {});
  const ended = new Promise((resolve, reject) => { encoder.once('error', reject); encoder.once('close', code => code === 0 ? resolve() : reject(new Error(`FFmpeg scene failed: ${errors}`))); });
  // Mark handled while frames are being captured, and await the original below.
  ended.catch(() => {});
  for (let frame = 0; frame < count; frame++) {
    if (cancelled) throw new Error('Render cancelled.');
    if (doc.type === 'facts-short' && frame % fps === 0) require('../video-generator/bounded-process').checkMemory();
    await page.evaluate(([t, short]) => short ? window.renderFrame(t) : window.renderLongFrame(t), [frame / fps, scene.kind === 'short']);
    const buffer = await page.screenshot({ type: 'jpeg', quality: doc.render_options.quality === 'final' ? 92 : 78, scale: 'css', timeout: 60000 });
    if (!encoder.stdin.write(buffer)) await once(encoder.stdin, 'drain');
    if (frame % fps === 0) progress({ stage: 'frames', progress: Math.floor(100 * (doneFrames + frame + 1) / totalFrames), message: `Scene ${index + 1}/${scenes.length} · ${doneFrames + frame + 1}/${totalFrames} frames` });
    if (thumbnailScene && frame === thumbnailFrame) fs.writeFileSync(path.join(output, 'thumbnail.jpg'), buffer);
  }
  encoder.stdin.end();
  await ended;
  encoder = null;
  return { segment, count };
}
(async () => {
  const started = Date.now();
  const config = validateFactsJob(JSON.parse(fs.readFileSync(input, 'utf8')));
  fs.mkdirSync(work, { recursive: true });
  browser = await chromium.launch({ headless: true });
  const horizontal = config.doc.render_options.orientation === 'horizontal';
  const page = await browser.newPage({ viewport: { width: config.width, height: config.height }, deviceScaleFactor: 1 });
  await page.goto(pathToFileURL(path.join(ROOT, config.doc.type === 'facts-short' ? 'template.html' : 'long-template.html')).href);
  // Render the original design at its native layout, scaled to the draft viewport.
  await page.addStyleTag({ content: `html,body{width:${config.width}px;height:${config.height}px}#${config.doc.type === 'facts-short' ? 'reel' : 'stage'}{transform-origin:top left;transform:scale(${config.width / (horizontal ? 1920 : 1080)})}` });
  const totalFrames = config.scenes.reduce((n, s) => n + Math.ceil(s.duration * config.fps), 0);
  let done = 0;
  const segments = [];
  for (const [index, scene] of config.scenes.entries()) {
    const result = await encodeScene(page, scene, config, index, totalFrames, done);
    segments.push(result.segment); done += result.count;
  }
  await browser.close(); browser = null;
  if (cancelled) throw new Error('Render cancelled.');
  progress({ stage: 'encoding', progress: null, message: 'Finalizing MP4 and verifying streams…' });
  // Filenames below are generated locally and contain no user text.
  fs.writeFileSync(path.join(work, 'concat.txt'), segments.map(file => `file '${path.basename(file)}'`).join('\n'));
  const mp4 = path.join(output, 'video.mp4');
  command(FFMPEG, ['-y', '-v', 'error', '-f', 'concat', '-safe', '1', '-i', path.join(work, 'concat.txt'), '-c', 'copy', '-movflags', '+faststart', mp4]);
  const probe = JSON.parse(command(FFPROBE, ['-v', 'error', '-show_format', '-show_streams', '-of', 'json', mp4]));
  const video = probe.streams.find(s => s.codec_type === 'video');
  const audio = probe.streams.find(s => s.codec_type === 'audio');
  const actualDuration = Number(probe.format.duration);
  const expected = totalFrames / config.fps;
  if (fs.statSync(mp4).size < 1000 || video?.codec_name !== 'h264' || video.width !== config.width || video.height !== config.height || !Number.isFinite(actualDuration) || Math.abs(actualDuration - expected) > 1 || ((config.doc.render_options.music || config.doc.render_options.sfx) && audio?.codec_name !== 'aac')) throw new Error('MP4 validation failed.');
  command(FFMPEG, ['-v', 'error', '-i', mp4, '-frames:v', '1', '-f', 'null', '-']);
  const renderedScenes = encodedScenes(config.scenes, config.fps);
  const chapters = renderedScenes.filter(scene => scene.kind === 'chapter' || (scene.kind === 'fact' && scene.pageIndex === 0))
    .map(scene => ({ start: scene.start, startFrame: scene.startFrame, kind: scene.kind, factId: scene.fact.id, index: scene.index }));
  const metadata = { ...config.doc, selectedFactIds: config.doc.facts.map(f => f.id), estimatedDuration: config.estimatedDuration, actualDuration, encodedDuration: expected, chapters, width: video.width, height: video.height, fps: config.fps, audio: audio?.codec_name || null, videoCodec: video.codec_name, createdAt: new Date().toISOString(), renderSeconds: (Date.now() - started) / 1000, peakRssMiB: process.resourceUsage().maxRSS / 1024, timingVersion: config.timingVersion, presentationVersion: 1, scenes: renderedScenes };
  fs.writeFileSync(path.join(output, 'metadata.json'), JSON.stringify(metadata, null, 2));
  if (config.doc.render_options.thumbnail && !cancelled && !process.argv.includes('--skip-thumbnail')) {
    // Browser/encoders are already closed; do not invalidate a completed video
    // when only its separately retriable thumbnail cannot be rendered.
    try {
      await require('../video-generator/thumbnails').renderThumbnail(config.doc, { outputDir: output, outputBase: 'video' });
    } catch (error) {
      console.warn(`Thumbnail pending retry: ${error.message}. The completed video is preserved.`);
    }
  }
  progress({ stage: 'completed', progress: 100, message: 'MP4 verified.', actualDuration });
})().catch(error => { console.error(error.message); process.exitCode = 1; }).finally(async () => { await stop(); fs.rmSync(work, { recursive: true, force: true }); });
