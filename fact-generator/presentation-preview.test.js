const { test, before, after } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { spawnSync } = require('node:child_process');
const { chromium } = require('playwright');
const P = require('./presentation');
const T = require('./timing');
const { validateFactsJob } = require('./job-schema');
let browser;
const artifacts = process.env.MAROQUIZ_FACT_PREVIEW_DIR || fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-fact-presentation-'));
fs.mkdirSync(artifacts, { recursive: true });
before(async () => { browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu'] }); });
after(async () => { await browser?.close(); });

function document(text, language = 'fr', type = 'facts-long', name = 'Physique') {
  return { type, language, video: { title: name }, major: { id: 1, name },
    facts: [{ id: 1, text, detail: '', source_url: null }],
    render_options: { quality: 'draft', orientation: 'vertical', music: false, sfx: false, musicVolume: .6 } };
}
async function load(doc, sceneIndex = 0) {
  const config = validateFactsJob(doc);
  const scene = config.scenes.filter(s => s.kind === (doc.type === 'facts-long' ? 'fact' : 'short'))[sceneIndex];
  const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  await page.goto(pathToFileURL(path.join(__dirname, doc.type === 'facts-long' ? 'long-template.html' : 'template.html')).href);
  let short;
  if (doc.type === 'facts-long') await page.evaluate(([doc, scene, duration]) => window.setLongData(doc, scene, duration), [config.doc, scene, config.estimatedDuration]);
  else short = await page.evaluate(row => window.setData(row, { lang: row.lang, last: true }), scene.row);
  const paint = async time => page.evaluate(([time, isShort]) => isShort ? window.renderFrame(time) : window.renderLongFrame(time), [time, doc.type === 'facts-short']);
  return { page, config, scene, paint, short, selector: doc.type === 'facts-short' ? '#fact-text' : '#headline',
    complete: doc.type === 'facts-short' ? scene.timing.p1 - .7 : scene.duration - .7 };
}

test('exact spans draw once after their group appears, with stable RTL layout and safe HTML text', async () => {
  for (const [language, name, text] of [
    ['fr', 'Physique', 'La vitesse vaut environ 300 000 km/s. La relation E=mc² est conservée.'],
    ['en', 'Computer Science & IT', 'The rate is at most 2 GB per second. The technique is called “machine learning”.'],
    ['ar', 'المالية', 'تزن العملة 19.7 كيلوغرامًا. تَحْفَظُ الكلماتُ اتصالَها مع Mark II و H₂O.'],
  ]) for (const type of ['facts-short', 'facts-long']) {
    const loaded = await load(document(text, language, type, name));
    const { page, paint, selector, complete } = loaded;
    await paint(0);
    assert.equal(await page.locator(selector).textContent(), text);
    assert.ok((await page.locator(`${selector} .fact-group`).evaluateAll(nodes => nodes.map(n => Number(n.style.opacity)))).every(n => n === 0));
    await paint((type === 'facts-short' ? loaded.scene.timing.fact : loaded.scene.presentation.start) + .16);
    assert.ok((await page.locator(`${selector} path`).evaluateAll(paths => paths.map(p => Number(p.style.strokeDashoffset)))).every(n => n === 1), 'Underlines must wait for fully visible groups.');
    await paint(complete);
    const result = await page.locator(selector).evaluate(el => {
      const originalHeight = el.offsetHeight;
      const control = el.cloneNode(false); control.textContent = el.textContent;
      el.parentNode.appendChild(control); const plainHeight = control.offsetHeight; control.remove();
      return { originalHeight, plainHeight, font: parseFloat(getComputedStyle(el).fontSize),
        groups: [...el.querySelectorAll('.fact-group')].map(n => ({ text: n.textContent, opacity: Number(n.style.opacity) })),
        paths: [...el.querySelectorAll('path')].map(p => ({ text: p.dataset.text, direction: p.dataset.direction, offset: Number(p.style.strokeDashoffset),
          bounds: { width: p.getBBox().width, height: p.getBBox().height }, stroke: getComputedStyle(p).stroke })) };
    });
    assert.ok(result.groups.every(g => g.opacity === 1));
    assert.equal(result.groups.map(g => g.text).join(''), text);
    assert.equal(result.originalHeight, result.plainHeight, 'Group spans must preserve natural shaping and layout.');
    assert.ok(result.font >= 38);
    for (const highlight of result.paths) {
      assert.ok(text.includes(highlight.text)); assert.equal(highlight.offset, 0);
      assert.equal(highlight.direction, language === 'ar' ? 'rtl' : 'ltr');
      assert.ok(highlight.bounds.width > 0); assert.notEqual(highlight.stroke, 'none');
    }
    assert.ok(result.paths.length > 0, `${language} ${type}: expected at least one single-line highlight`);
    await paint(complete + .02);
    assert.ok((await page.locator(`${selector} path`).evaluateAll(paths => paths.map(p => Number(p.style.strokeDashoffset)))).every(n => n === 0));
    await page.close();
  }
  const text = '<img src=x onerror="window.__unsafe=1"> & E=mc².';
  const { page, selector, paint, complete } = await load(document(text));
  await paint(complete); assert.equal(await page.locator(selector).textContent(), text);
  assert.equal(await page.locator(`${selector} img`).count(), 0);
  assert.equal(await page.evaluate(() => window.__unsafe), undefined); await page.close();
});

test('every existing Major theme keeps its original color and visual family', async () => {
  const short = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  await short.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
  for (const [name, key, color] of [
    ['Informatique', 'informatique', '#4f8cff'], ['Mathématiques', 'mathematiques', '#c27bff'],
    ['Physique', 'physique', '#ffa53a'], ['Chimie', 'chimie', '#22d3ee'], ['SVT', 'svt', '#a3e635'],
    ['Finance', 'finance', '#ffd23f'], ['Économie', 'economie', '#ff5d5d'], ['Arabe', 'arabe', '#2ee59d'],
    ['Français', 'francais', '#8b8cff'], ['Anglais', 'anglais', '#ff6bc1'], ['Espagnol', 'espagnol', '#ff7f50'],
  ]) {
    const result = await short.evaluate(name => window.setData({ major: name, hook: 'Le saviez-vous ?', fact: 'Une observation originale.', detail: '' }, { lang: 'fr' }), name);
    assert.equal(result.theme, key);
    assert.equal(await short.evaluate(() => getComputedStyle(document.documentElement).getPropertyValue('--accent').trim()), color);
  }
  await short.close();
  const long = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  await long.goto(pathToFileURL(path.join(__dirname, 'long-template.html')).href);
  for (const [name, color] of [['Informatique', '#4f8cff'], ['Mathématiques', '#c27bff'], ['Physique', '#ffa53a'],
    ['Chimie', '#22d3ee'], ['SVT', '#a3e635'], ['Finance', '#ffd23f'], ['Économie', '#ffd23f'],
    ['Arabe', '#ff6bc1'], ['Français', '#ff6bc1'], ['Anglais', '#ff6bc1'], ['Espagnol', '#f2c94c']]) {
    const doc = document('Une observation originale.', 'fr', 'facts-long', name), config = validateFactsJob(doc);
    await long.evaluate(([doc, scene, total]) => window.setLongData(doc, scene, total), [config.doc, config.scenes[0], config.estimatedDuration]);
    assert.equal(await long.locator('#stage').evaluate(el => el.style.getPropertyValue('--subject')), color);
  }
  await long.close();
});

test('wrapped manual highlights are omitted and a Fact without a reliable span stays complete', async () => {
  const text = 'Cette phrase complète est volontairement assez longue pour occuper plusieurs lignes dans la carte, sans modifier le moindre mot.';
  const doc = document(text); doc.facts[0].highlights = [{ start: 0, end: text.length, text }];
  const loaded = await load(doc); await loaded.paint(loaded.complete);
  assert.equal(await loaded.page.locator('#headline path').count(), 0);
  assert.equal(await loaded.page.locator('#headline').textContent(), text); await loaded.page.close();
  const fallback = await load(document('La matière conserve les détails de son histoire.'));
  await fallback.paint(fallback.complete);
  assert.equal(await fallback.page.locator('#headline path').count(), 0);
  assert.equal(await fallback.page.locator('#headline').textContent(), fallback.scene.text); await fallback.page.close();
});

test('long paragraphs paginate at readable sizes without losing sentences or formulas', async () => {
  for (const [language, name, sentence] of [['en', 'Mathematics', 'A complete statement preserves E=mc² and every qualification. '],
    ['ar', 'الرياضيات', 'تَحْفَظُ هذه العبارةُ الكلماتِ العربيةَ المتصلةَ و H₂O دون تغيير. ']]) {
    const text = sentence.repeat(15), doc = document(text, language, 'facts-long', name);
    const config = validateFactsJob(doc), scenes = config.scenes.filter(s => s.kind === 'fact');
    assert.ok(scenes.length > 1); assert.equal(scenes.map(s => s.text).join(''), text);
    let painted = '';
    for (let index = 0; index < scenes.length; index++) {
      const loaded = await load(doc, index); await loaded.paint(loaded.complete);
      painted += await loaded.page.locator('#headline').textContent();
      assert.ok(await loaded.page.locator('#headline').evaluate(el => parseFloat(getComputedStyle(el).fontSize) >= 38));
      await loaded.page.close();
    }
    assert.equal(painted, text);
  }
});

test('existing real Facts from multiple Majors render unchanged in FR/EN/AR previews', { skip: !process.env.MAROQUIZ_FACT_PREVIEW_INPUT }, async () => {
  const rows = JSON.parse(fs.readFileSync(process.env.MAROQUIZ_FACT_PREVIEW_INPUT, 'utf8'));
  const cases = [
    ['physics', 'fr', 'facts-long', 82], ['finance', 'en', 'facts-short', 52],
    ['computer-science-it', 'ar', 'facts-long', 21], ['mathematics', 'ar', 'facts-long', 71],
    ['svt', 'fr', 'facts-short', 101], ['physics', 'ar', 'facts-short', 81],
    ['computer-science-it', 'en', 'facts-long', 21], ['finance', 'fr', 'facts-short', 52],
  ];
  const results = [];
  for (const [slug, language, type, preferredId] of cases) {
    const row = rows.find(r => r.id === preferredId && r.major.slug === slug) || rows.find(r => r.major.slug === slug);
    assert.ok(row, `Missing real Major ${slug}`);
    const name = { physics: { fr: 'Physique', ar: 'الفيزياء' }, finance: { en: 'Finance', fr: 'Finance' },
      'computer-science-it': { ar: 'المعلوميات', en: 'Computer Science & IT' }, mathematics: { ar: 'الرياضيات' }, svt: { fr: 'SVT' } }[slug][language];
    const doc = document(row[language], language, type, name); doc.facts[0].id = row.id;
    const config = validateFactsJob(doc);
    if (type === 'facts-long') assert.equal(config.scenes.filter(s => s.kind === 'fact').map(s => s.text).join(''), row[language]);
    const loaded = await load(doc); await loaded.paint(loaded.complete);
    assert.equal(await loaded.page.locator(loaded.selector).textContent(), loaded.scene.text || row[language]);
    const filename = `${slug}-${language}-${type}.png`;
    await loaded.page.screenshot({ path: path.join(artifacts, filename) });
    results.push({ factId: row.id, slug, language, type, filename, fullText: row[language], shownText: loaded.scene.text || row[language],
      highlights: await loaded.page.locator(`${loaded.selector} path`).evaluateAll(paths => paths.map(p => p.dataset.text)),
      fontSize: await loaded.page.locator(loaded.selector).evaluate(el => getComputedStyle(el).fontSize) });
    await loaded.page.close();
  }
  fs.writeFileSync(path.join(artifacts, 'results.json'), JSON.stringify(results, null, 2));
  const html = '<!doctype html><meta charset="utf-8"><style>body{background:#29252f;color:#f7f5f1;font:16px sans-serif;margin:20px}.grid{display:grid;grid-template-columns:repeat(4,270px);gap:15px}img{width:270px;display:block;border-radius:10px}p{max-width:270px}</style><div class="grid">'
    + results.map(r => `<article><p>${r.slug} · ${r.language} · #${r.factId}</p><img src="${r.filename}"></article>`).join('') + '</div>';
  fs.writeFileSync(path.join(artifacts, 'index.html'), html);
  const sheet = await browser.newPage({ viewport: { width: 1180, height: 1140 } });
  await sheet.goto(pathToFileURL(path.join(artifacts, 'index.html')).href); await sheet.screenshot({ path: path.join(artifacts, 'contact-sheet.png'), fullPage: true }); await sheet.close();
  console.log('Facts presentation previews:', artifacts);
});

test('two consecutive Facts and EXPLORER encode to accurate preview timestamps', { skip: !process.env.MAROQUIZ_FACT_PREVIEW_CLIP }, async () => {
  const rows = JSON.parse(fs.readFileSync(process.env.MAROQUIZ_FACT_PREVIEW_INPUT, 'utf8'));
  const real = rows.filter(r => r.major.slug === 'physics').slice(0, 8);
  const doc = document(real[0].fr); doc.facts = real.map(row => ({ id: row.id, text: row.fr, detail: '', source_url: row.source_url }));
  const config = validateFactsJob(doc);
  const selected = config.scenes.filter(s => s.kind === 'chapter' || (s.kind === 'fact' && s.index < 2));
  const fps = 8, scenes = T.encodedScenes(selected, fps), total = scenes.reduce((sum, s) => sum + s.frames, 0) / fps;
  const page = await browser.newPage({ viewport: { width: 360, height: 640 } });
  await page.goto(pathToFileURL(path.join(__dirname, 'long-template.html')).href);
  await page.addStyleTag({ content: 'html,body{width:360px;height:640px}#stage{transform-origin:top left;transform:scale(0.3333333333)}' });
  let frame = 0;
  for (const scene of scenes) {
    await page.evaluate(([doc, scene, total]) => window.setLongData(doc, scene, total), [config.doc, scene, total]);
    for (let index = 0; index < scene.frames; index++) {
      await page.evaluate(t => window.renderLongFrame(t), index / fps);
      await page.screenshot({ type: 'jpeg', quality: 76, path: path.join(artifacts, `frame-${String(frame++).padStart(4, '0')}.jpg`) });
    }
  }
  await page.close();
  const clip = path.join(artifacts, 'long-pacing-preview.mp4');
  const encoded = spawnSync('ffmpeg', ['-n', '-v', 'error', '-framerate', String(fps), '-i', path.join(artifacts, 'frame-%04d.jpg'), '-c:v', 'libx264', '-threads', '1', '-preset', 'ultrafast', '-pix_fmt', 'yuv420p', '-movflags', '+faststart', clip], { encoding: 'utf8' });
  assert.equal(encoded.status, 0, encoded.stderr);
  const probe = spawnSync('ffprobe', ['-v', 'error', '-show_entries', 'format=duration:stream=width,height,nb_frames', '-of', 'json', clip], { encoding: 'utf8' });
  assert.equal(probe.status, 0, probe.stderr); const info = JSON.parse(probe.stdout);
  assert.ok(Math.abs(Number(info.format.duration) - total) < .01); assert.equal(Number(info.streams[0].nb_frames), frame);
  fs.writeFileSync(path.join(artifacts, 'pacing.json'), JSON.stringify({ fps, frames: frame, expectedDuration: total, actualDuration: Number(info.format.duration), scenes }, null, 2));
  // These frames were created only for this disposable preview.
  for (let i = 0; i < frame; i++) fs.unlinkSync(path.join(artifacts, `frame-${String(i).padStart(4, '0')}.jpg`));
});
