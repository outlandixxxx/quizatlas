// Bounded visual comparison only: never starts the local queue or reserves content.
const fs = require('node:fs');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { spawnSync } = require('node:child_process');
const { chromium } = require('playwright');
const { buildTimeline } = require('../render');
async function preview(input, output, reference, renderedVideo, options = {}) {
  const doc = JSON.parse(fs.readFileSync(input, 'utf8')), scene = buildTimeline(doc).segments[0].scene;
  fs.mkdirSync(output, { recursive: true });
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] });
  const commands = [];
  try {
    const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
    await page.goto(pathToFileURL(options.templateFile || path.join(__dirname, 'template.html')).href);
    await page.evaluate(async scene => { const prepare = scene.type === 'niveau-concours' ? window.prepareNiveau : scene.type === 'defi-du-jour' ? window.prepareDefi : window.prepareFive; prepare(scene); await document.fonts.ready; prepare(scene); await Promise.all([...document.images].map(image => image.decode())); }, scene);
    const timestamps = options.timestamps || [2.8, 5.9, 8.7, 12.8, 14.8, 16.9, 18.7, 21.8, 23.3];
    for (const [i, time] of timestamps.entries()) {
      await page.evaluate(({ scene, time }) => window.renderFrame(scene, time, time), { scene, time });
      const name = String(i).padStart(2, '0'), replica = path.join(output, name + '-replica.png');
      if (renderedVideo) {
        const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-loglevel', 'error', '-y', '-ss', String(time), '-i', renderedVideo, '-frames:v', '1', replica], { encoding: 'utf8' });
        if (result.status !== 0) throw Error(result.stderr);
      } else await page.screenshot({ path: replica });
      if (reference) {
        const original = path.join(output, name + '-original.png'), pair = path.join(output, name + '-comparison.png');
        const timeLabel = Number(time.toFixed(3));
        const comparison = `[0:v][1:v]hstack,pad=iw:ih+80:0:80:color=0xe7e7e7,drawtext=text='Canva t=${timeLabel}s':x=24:y=6:fontsize=64:fontcolor=black,drawtext=text='Replica t=${timeLabel}s':x=1104:y=6:fontsize=64:fontcolor=black,scale=864:800`;
        for (const args of [['-ss', String(time), '-i', reference, '-frames:v', '1', original], ['-i', original, '-i', replica, '-filter_complex', comparison, '-frames:v', '1', pair]]) {
          const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-loglevel', 'error', '-y', ...args], { encoding: 'utf8' });
          if (result.status !== 0) throw Error(result.stderr);
        }
        commands.push({ time, original, replica, comparison: pair });
      }
    }
    await page.evaluate(({ scene, time }) => window.renderFrame(scene, time, time), { scene, time: options.geometryTime ?? scene.timing.countdown });
    const geometry = await page.evaluate(ids => Object.fromEntries(ids.map(id => {
      const { x, y, width, height } = document.getElementById(id).getBoundingClientRect(); return [id, { x, y, width, height }];
    })), options.geometryIds || ['logo', 'banner', 'metadata', 'question-card', 'choices', 'timer']);
    fs.writeFileSync(path.join(output, 'comparison.json'), JSON.stringify({ input, reference, renderedVideo, timing: scene.timing, geometry, frames: commands }, null, 2));
    if (reference) {
      const result = spawnSync(process.env.FFMPEG_PATH || 'ffmpeg', ['-hide_banner', '-loglevel', 'error', '-y', '-framerate', '1', '-i', path.join(output, '%02d-comparison.png'), '-frames:v', '1', '-vf', `scale=432:400,tile=3x${Math.ceil(timestamps.length / 3)}`, path.join(output, 'comparison-sheet.png')], { encoding: 'utf8' });
      if (result.status !== 0) throw Error(result.stderr);
    }
    console.log('Preview:', output);
  } finally { await browser.close(); }
}
if (require.main === module) preview(path.resolve(process.argv[2] || path.join(__dirname, 'sample.json')), path.resolve(process.argv[3] || '/tmp/maroquiz-five-seconds-preview'), process.argv[4] && path.resolve(process.argv[4]), process.argv[5] && path.resolve(process.argv[5])).catch(e => { console.error(e); process.exitCode = 1; });
module.exports = { preview };
