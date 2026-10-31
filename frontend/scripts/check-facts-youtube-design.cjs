// Real source exports and the existing authenticated runner; no database writes.
const fs = require('node:fs');
const path = require('node:path');
const assert = require('node:assert/strict');
const { pathToFileURL } = require('node:url');
const { spawnSync } = require('node:child_process');
const { chromium } = require('../../fact-generator/node_modules/playwright');
const { validateFactsJob } = require('../../fact-generator/job-schema');
const root = path.resolve(__dirname, '../..');
const out = path.join(root, 'frontend/artifacts/facts-youtube-redesign');
fs.mkdirSync(out, { recursive: true });
const token = fs.readFileSync(path.join(root, 'backend/storage/framework/facts-video-acceptance/admin-token'), 'utf8').trim();
const api = 'http://127.0.0.1:8000/api/v1', runner = 'http://127.0.0.1:3777';
async function request(url, data, headers = {}) {
  const res = await fetch(url, { method: data === undefined ? 'GET' : 'POST', headers: { Accept: 'application/json', ...(data === undefined ? {} : { 'Content-Type': 'application/json' }), ...headers }, ...(data === undefined ? {} : { body: JSON.stringify(data) }), signal: AbortSignal.timeout(20000) });
  const body = await res.json(); if (!res.ok) throw Error(`${res.status}: ${JSON.stringify(body)}`); return body.data;
}
async function local(endpoint, doc) {
  const { ticket } = await request(api + '/local-render/ticket', { content: JSON.stringify(doc) }, { Authorization: `Bearer ${token}` });
  return request(runner + '/' + endpoint, doc, { Origin: 'http://localhost:4200', 'X-Maroquiz-Render-Ticket': ticket });
}
async function documents() {
  const options = await request(api + '/facts-video/options', undefined, { Authorization: `Bearer ${token}` });
  fs.writeFileSync(path.join(out, 'options.json'), JSON.stringify(options, null, 2));
  const computer = options.find(m => /computer|inform/i.test(m.name)) || options[0];
  const math = options.find(m => /math/i.test(m.name)) || computer;
  const cases = [
    ['youtube-horizontal-fr', computer.id, 'fr', 'facts-long', 3, 'horizontal', 'draft'],
    ['youtube-vertical-ar', computer.id, 'ar', 'facts-long', 3, 'vertical', 'draft'],
    ['short-original-math', math.id, 'fr', 'facts-short', 1, 'vertical', 'draft'],
    ['youtube-final-fr', computer.id, 'fr', 'facts-long', 1, 'horizontal', 'final'],
  ];
  const docs = [];
  for (const [name, major_id, language, profile, count, orientation, quality] of cases) {
    const doc = await request(api + '/facts-video/export', { major_id, language, profile, count }, { Authorization: `Bearer ${token}` });
    doc.render_options = { orientation, quality, music: true, sfx: true, musicVolume: .6 };
    fs.writeFileSync(path.join(out, name + '-input.json'), JSON.stringify(doc, null, 2));
    docs.push([name, doc]);
  }
  return docs;
}
async function frames(docs) {
  const browser = await chromium.launch({ headless: true });
  try {
    for (const [name, doc] of docs.filter(([name]) => !name.includes('final'))) {
      const plan = validateFactsJob(doc), short = doc.type === 'facts-short';
      const page = await browser.newPage({ viewport: doc.render_options.orientation === 'horizontal' ? { width: 1920, height: 1080 } : { width: 1080, height: 1920 } });
      const errors = []; page.on('pageerror', error => errors.push(error.message));
      await page.goto(pathToFileURL(path.join(root, 'fact-generator', short ? 'template.html' : 'long-template.html')).href);
      if (short) {
        const scene = plan.scenes[0];
        await page.evaluate(([row, lang]) => window.setData(row, { lang }), [scene.row, doc.language]);
        await page.evaluate(t => window.renderFrame(t), scene.timing.p1 - .7);
        const accent = await page.evaluate(() => getComputedStyle(document.documentElement).getPropertyValue('--accent').trim());
        assert.equal(accent, /math/i.test(doc.major.name) ? '#c27bff' : '#4f8cff');
        await page.screenshot({ path: path.join(out, name + '-main.png') });
      } else {
        const scenes = [['intro', plan.scenes[0], 2.5], ...plan.scenes.filter(s => s.kind === 'fact').map((s, i) => [`fact-${i + 1}`, s, 2]), ['transition', plan.scenes.find(s => s.kind === 'fact'), .1], ['outro', plan.scenes.at(-1), 2.8]];
        for (const [label, scene, time] of scenes) {
          await page.evaluate(([doc, scene, total]) => window.setLongData(doc, scene, total), [doc, scene, plan.estimatedDuration]);
          await page.evaluate(t => window.renderLongFrame(t), time);
          await page.screenshot({ path: path.join(out, `${name}-${label}.png`) });
          if (scene.kind === 'fact') assert.equal(await page.locator('#headline').textContent(), scene.text);
        }
      }
      assert.deepEqual(errors, []); await page.close(); console.log('Frame QA passed:', name);
    }
  } finally { await browser.close(); }
}
async function render(docs) {
  for (const [name, doc] of docs) {
    if (fs.existsSync(path.join(out, name + '-result.json'))) continue;
    const estimate = await local('estimate', doc), job = await local('jobs', doc);
    console.log('Rendering', name, job.id, 'estimate', estimate.estimatedDuration.toFixed(3));
    const deadline = Date.now() + 20 * 60 * 1000;
    let current;
    for (;;) {
      current = await request(`${runner}/jobs/${job.id}`, undefined, { 'X-Maroquiz-Job-Key': job.accessKey });
      if (current.status === 'failed') throw Error(current.error);
      if (current.status === 'completed') break;
      if (Date.now() > deadline) throw Error('Bounded design render timed out.');
      await new Promise(resolve => setTimeout(resolve, 2000));
    }
    assert.ok(Math.abs(current.actualDuration - estimate.estimatedDuration) < 1);
    const file = path.join(root, 'video-generator/output', job.id, 'video.mp4');
    const decoded = spawnSync('ffmpeg', ['-v', 'error', '-xerror', '-threads', '2', '-i', file, '-f', 'null', '-'], { timeout: 120000 });
    assert.equal(decoded.status, 0, decoded.stderr?.toString());
    const range = await fetch(runner + current.videoUrl, { headers: { Range: 'bytes=0-1023' } }); assert.equal(range.status, 206);
    const metadata = JSON.parse(fs.readFileSync(path.join(root, 'video-generator/output', job.id, 'metadata.json'), 'utf8'));
    assert.equal(metadata.audio, 'aac');
    fs.writeFileSync(path.join(out, name + '-result.json'), JSON.stringify({ id: job.id, path: file, estimatedDuration: estimate.estimatedDuration, actualDuration: current.actualDuration, width: current.width, height: current.height, renderSeconds: metadata.renderSeconds, nodePeakRssMiB: metadata.peakRssMiB, timingVersion: metadata.timingVersion, decoded: true, audio: metadata.audio }, null, 2));
    console.log('MP4 passed:', name, current.actualDuration, 'seconds');
  }
}
(async () => {
  const docs = await documents();
  if (process.argv.includes('--preview')) {
    const result = JSON.parse(fs.readFileSync(path.join(out, 'youtube-horizontal-fr-result.json'), 'utf8'));
    const saved = JSON.parse(fs.readFileSync(path.join(root, 'video-generator/.local-jobs', result.id + '.state.json'), 'utf8'));
    const browser = await chromium.launch({ headless: true });
    try {
      const context = await browser.newContext({ viewport: { width: 1440, height: 1080 } });
      await context.addInitScript(({ token, id, key }) => {
        localStorage.setItem('quizatlas_access_token', token); localStorage.setItem('quizatlas.language', 'fr');
        sessionStorage.setItem('maroquiz-facts-current-job', id); sessionStorage.setItem('maroquiz-render-' + id, key);
      }, { token, id: result.id, key: saved.key });
      const page = await context.newPage();
      await page.goto('http://localhost:4200/admin/facts-videos', { waitUntil: 'domcontentloaded', timeout: 120000 });
      await page.locator('video').waitFor({ timeout: 60000 });
      await page.locator('video').evaluate(async video => { video.muted = true; video.currentTime = 7; await video.play(); });
      await page.waitForFunction(() => document.querySelector('video').currentTime > 7.1, null, { timeout: 30000 });
      assert.equal(await page.locator('.downloads a').count(), 3);
      await page.screenshot({ path: path.join(out, 'admin-completed.png'), fullPage: true });
      fs.writeFileSync(path.join(out, 'admin-preview-result.json'), JSON.stringify({ id: result.id, restoredCompletedJob: true, actualRenderedPlayback: true, mutedForAutoplay: true, downloadLinks: 3 }, null, 2));
      console.log('Actual redesigned MP4 playback and downloads passed in the unchanged Angular admin page.'); return;
    } finally { await browser.close(); }
  }
  if (process.argv.includes('--admin')) {
    const browser = await chromium.launch({ headless: true });
    try {
      const context = await browser.newContext({ viewport: { width: 1440, height: 1080 } });
      await context.addInitScript(token => { localStorage.setItem('quizatlas_access_token', token); localStorage.setItem('quizatlas.language', 'fr'); }, token);
      const page = await context.newPage();
      page.on('request', req => { if (req.url().startsWith(runner)) assert.ok(!req.headers().authorization); });
      await page.goto('http://localhost:4200/admin/facts-videos', { waitUntil: 'domcontentloaded', timeout: 120000 });
      await page.locator('select[formcontrolname=major_id] option').nth(1).waitFor({ state: 'attached', timeout: 60000 });
      await page.locator('select[formcontrolname=major_id]').selectOption({ label: 'Computer Science & IT' });
      await page.locator('select[formcontrolname=profile]').selectOption('facts-long');
      await page.locator('select[formcontrolname=orientation]').selectOption('horizontal');
      await page.locator('input[formcontrolname=count]').fill('1');
      await page.locator('button.generate').waitFor({ timeout: 60000 });
      await page.waitForFunction(() => !document.querySelector('button.generate').disabled, null, { timeout: 60000 });
      const created = page.waitForResponse(response => response.url() === runner + '/jobs' && response.request().method() === 'POST');
      await page.locator('button.generate').click();
      const creation = await created;
      assert.equal(creation.status(), 202, await creation.text());
      await page.locator('video').waitFor({ timeout: 300000 });
      await page.locator('video').evaluate(video => video.play());
      await page.waitForFunction(() => document.querySelector('video').currentTime > .1, null, { timeout: 30000 });
      assert.equal(await page.locator('.downloads a').count(), 3);
      const duration = await page.locator('video').evaluate(video => video.duration);
      const id = await page.evaluate(() => sessionStorage.getItem('maroquiz-facts-current-job'));
      fs.writeFileSync(path.join(out, 'admin-result.json'), JSON.stringify({ id, duration, profile: 'facts-long', orientation: 'horizontal', playback: true, downloads: 3 }, null, 2));
      await page.screenshot({ path: path.join(out, 'admin-completed.png'), fullPage: true });
      console.log('Actual one-click YouTube Facts admin generation and playback passed:', duration); return;
    } finally { await browser.close(); }
  }

  if (process.argv.includes('--render')) await render(docs); else await frames(docs);
})().catch(error => { console.error(error); process.exitCode = 1; });
