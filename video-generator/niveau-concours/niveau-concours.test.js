const { test, before, after } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { validate, options, plan } = require('./model');
const { buildTimeline } = require('../render');
const { initialize, runBatch } = require('../quiz-batch');
function fixture(language = 'fr') {
  const d = structuredClone(require('../five-seconds/sample.json'));
  d.video.template = 'niveau-concours'; d.video.language = language; d.questions[0].language = language;
  if (language === 'en') d.questions[0].text = 'Which language styles a web page?';
  if (language === 'ar') { d.questions[0].text = 'ما اللغة المستخدمة لتنسيق صفحة ويب باستخدام HTML بنسبة 100%؟'; d.subject.name = 'علوم الحاسوب'; }
  d.render_options = { niveau: { extra_animations: false, narration: false, music: false, sfx: true } };
  return d;
}
let browser;
before(async () => { browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] }); });
after(async () => { await browser?.close(); });
async function pageFor(doc) {
  const scene = buildTimeline(doc).segments[0].scene;
  const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  const external = []; page.on('request', r => { if (/^https?:/.test(r.url())) external.push(r.url()); });
  await page.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
  await page.evaluate(async s => { window.prepareNiveau(s); await document.fonts.ready; window.prepareNiveau(s); await Promise.all([...document.images].map(i => i.decode())); }, scene);
  return { page, scene, external };
}
test('513-frame source sequence plus branded closing card and fade, with original audio cues; longer content extends the reading sections only', () => {
  const d = fixture(), a = plan(d);
  assert.equal(a.duration, 591 / 30); assert.equal(a.sourceDuration, 513 / 30); assert.equal(a.reveal, 398 / 30);
  assert.deepEqual(a.choices, [205 / 30, 218 / 30, 234 / 30, 244 / 30]);
  assert.ok(a.reveal - a.choices[3] - a.choiceEntrance > 4.8);
  assert.equal(a.countdown, undefined); assert.equal(a.explanation, undefined);
  assert.equal(buildTimeline(d).segments[0].cues.filter(c => c[2]?.reference).length, 8);
  assert.equal(a.endCard, a.sourceDuration);
  assert.equal(options(d).original_audio, true); assert.equal(options(d).sfx, true);
  d.questions[0].text = 'An original longer source question without rewriting. '.repeat(4);
  const extended = plan(d); assert.ok(extended.duration > a.duration); assert.equal(extended.title, a.title);
  assert.ok(extended.choices[0] >= extended.question + extended.questionTyping);
});
test('explicit content locale, stored IDs and safe settings are required; Arabic stale narration is always disabled', () => {
  for (const mutate of [d => delete d.questions[0].language, d => d.video.language = 'en', d => d.questions[0].correct_answer.choice_id = 999,
    d => d.questions[0].correct_answer.text = 'Changed', d => d.questions[0].choices[1].id = 1, d => d.questions[0].choices.pop(), d => d.render_options.niveau.extra_animations = 'true']) {
    const d = fixture(); mutate(d); assert.throws(() => validate(d));
  }
  const ar = fixture('ar'); ar.render_options.niveau.narration = true;
  assert.equal(options(ar).narration, false); assert.doesNotThrow(() => validate(ar));
  const en = fixture('en'); en.render_options.niveau.narration = true;
  assert.throws(() => validate(en), /Offline narration/);
  const mixed = fixture(); mixed.questions[0].text = 'Quelle lettre entend-on au début de « بيت » (maison) ?'; assert.doesNotThrow(() => validate(mixed));
  const falseLocale = fixture(); falseLocale.questions[0].text = ar.questions[0].text; assert.throws(() => validate(falseLocale), /language/);
});
test('all four ID-based reveals in French and Arabic preserve ordering and connected source text', async () => {
  for (const language of ['fr', 'ar']) for (let correct = 0; correct < 4; correct++) {
    const doc = fixture(language), c = doc.questions[0].choices[correct];
    doc.questions[0].correct_answer = { choice_id: c.id, label: c.label, text: c.text };
    const before = JSON.stringify(doc), { page, scene, external } = await pageFor(doc);
    try {
      await page.evaluate(s => window.renderFrame(s, s.timing.reveal + .5), scene);
      assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
      assert.deepEqual(await page.locator('#choices > li').evaluateAll(nodes => nodes.map(n => Number(n.dataset.choiceId))), doc.questions[0].choices.map(c => c.id));
      const active = await page.locator('.correct-overlay').evaluateAll(nodes => nodes.filter(n => Number(n.style.opacity) > .9).map(n => Number(n.parentElement.dataset.choiceId)));
      assert.deepEqual(active, [c.id]);
      const boxes = await page.locator('#choices > li').evaluateAll(nodes => nodes.map(n => ({ x: n.getBoundingClientRect().x, y: n.getBoundingClientRect().y, badge: n.querySelector('.badge').getBoundingClientRect().x })));
      assert.equal(boxes[0].x > boxes[1].x, language === 'ar'); assert.ok(boxes[2].y > boxes[0].y);
      assert.equal(boxes[0].badge > boxes[0].x + 200, language === 'ar');
      assert.equal(await page.locator('#question span').count(), 0);
      assert.deepEqual(external, []); assert.equal(JSON.stringify(doc), before);
      if (correct === 3 && process.env.NIVEAU_PREVIEW_DIR) await page.screenshot({ path: path.join(process.env.NIVEAU_PREVIEW_DIR, language + '.png') });
    } finally { await page.close(); }
  }
});
test('English localization, long wrapping and safe literal markup stay inside the panel; saved extra motion is disabled', async () => {
  const d = fixture('en'); d.questions[0].text = 'Which original expression x² + y² = 100% remains unchanged when HTML <script>window.injected=true</script> is shown as literal text and this longer question wraps naturally?';
  d.questions[0].choices[0].text = 'A longer choice with technical terminology and enough words to require readable wrapping.';
  const { page, scene } = await pageFor(d);
  try {
    await page.evaluate(s => window.renderFrame(s, s.timing.reveal + .6), scene);
    assert.equal(await page.locator('#title').textContent(), 'EXAM CHALLENGE');
    assert.equal(await page.locator('#difficulty').textContent(), 'Beginner');
    assert.equal(await page.evaluate(() => window.injected), undefined);
    const bounds = await page.evaluate(() => {
      const q = document.getElementById('question'), choices = document.getElementById('choices'), panel = document.getElementById('question-panel');
      return { qBottom: q.getBoundingClientRect().bottom, gridTop: choices.getBoundingClientRect().top, gridBottom: choices.getBoundingClientRect().bottom, panelBottom: panel.getBoundingClientRect().bottom,
        fits: [...document.querySelectorAll('.choice-text,#question')].every(n => n.scrollHeight <= n.clientHeight + 1 && parseFloat(getComputedStyle(n).fontSize) >= 32) };
    });
    assert.ok(bounds.qBottom < bounds.gridTop); assert.ok(bounds.gridBottom < bounds.panelBottom); assert.ok(bounds.fits);
    if (process.env.NIVEAU_PREVIEW_DIR) await page.screenshot({ path: path.join(process.env.NIVEAU_PREVIEW_DIR, 'en-long.png') });
    const base = plan(d); d.render_options.niveau.extra_animations = true; assert.deepEqual(plan(d), base);
    const restored = buildTimeline(d).segments[0].scene;
    assert.equal(restored.settings.extra_animations, false);
    await page.evaluate(s => { window.prepareNiveau(s); window.renderFrame(s, s.timing.reveal + .6); }, restored);
    assert.equal(await page.locator('.shimmer').count(), 0);
    assert.equal(await page.locator('#question').textContent(), d.questions[0].text);
    if (process.env.NIVEAU_PREVIEW_DIR) await page.screenshot({ path: path.join(process.env.NIVEAU_PREVIEW_DIR, 'en-restored.png') });
  } finally { await page.close(); }
});
test('the repeated source heading fade is dim near 1.7 seconds and strong near 4.5 seconds', async () => {
  const { page, scene } = await pageFor(fixture());
  try {
    await page.evaluate(s => window.renderFrame(s, 1.7), scene);
    const dim = await page.locator('#heading').evaluate(n => Number(n.style.opacity));
    await page.evaluate(s => window.renderFrame(s, 4.5), scene);
    const strong = await page.locator('#heading').evaluate(n => Number(n.style.opacity));
    assert.ok(dim < .4); assert.ok(strong > .95);
  } finally { await page.close(); }
});
test('branded intro and outro have visible coordinated movement and localized text without reducing the source reading hold', async () => {
  for (const language of ['fr', 'en', 'ar']) {
    const {page,scene}=await pageFor(fixture(language));
    try {
      const snapshots=[];
      for(const time of [.15,.5,1.2,scene.timing.endCard+.15,scene.timing.endCard+.7]) {
        await page.evaluate(([scene,time])=>window.renderFrame(scene,time),[scene,time]);
        snapshots.push(await page.evaluate(()=>({intro:document.getElementById('intro-scene').style.transform,introOpacity:Number(document.getElementById('intro-scene').style.opacity),closing:document.getElementById('closing-scene').style.transform,closingOpacity:Number(document.getElementById('closing-scene').style.opacity)})));
      }
      assert.notEqual(snapshots[0].intro,snapshots[1].intro);assert.ok(snapshots[1].introOpacity>.9);assert.equal(snapshots[2].introOpacity,0);
      assert.notEqual(snapshots[3].closing,snapshots[4].closing);assert.ok(snapshots[4].closingOpacity>.99);
      assert.equal(await page.locator('#closing-scene h2').textContent(),scene.labels.title);
      assert.equal(await page.locator('#closing-scene p').textContent(),scene.labels.outro);
      assert.equal(await page.locator('#question-panel').evaluate(e=>Number(e.style.opacity)),0);
      assert.ok(scene.timing.reveal-scene.timing.choices[3]-.3>4.8);
    } finally {await page.close();}
  }
});
test('decorations retain original transforms throughout FR/EN/AR, including stale extra-animation settings', async () => {
  for (const language of ['fr', 'en', 'ar']) {
    const doc = fixture(language); doc.render_options.niveau.extra_animations = true;
    const unchanged = JSON.stringify(doc), { page, scene, external } = await pageFor(doc);
    try {
      const layers = '#pattern,.blob,.dots,#cap';
      const states = [];
      for (const t of [0, 3, 6, 9, 12, 15, scene.duration - 1 / 30]) {
        await page.evaluate(({ s, t }) => window.renderFrame(s, t), { s: scene, t });
        states.push(await page.locator(layers).evaluateAll(nodes => nodes.map(n => ({ transform: getComputedStyle(n).transform, opacity: getComputedStyle(n).opacity }))));
        const coverage = await page.locator('#pattern').boundingBox();
        assert.ok(coverage.x <= 0 && coverage.y <= 0 && coverage.x + coverage.width >= 1080 && coverage.y + coverage.height >= 1920);
      }
      assert.equal(states[0].length, 7);
      states.forEach(state => assert.deepEqual(state, states[0]));
      assert.equal(scene.settings.extra_animations, false);
      assert.equal(await page.locator('.shimmer').count(), 0);
      await page.evaluate(s => window.renderFrame({ ...s, settings: { ...s.settings, extra_animations: true } }, 15), scene);
      assert.equal(await page.locator('.check').first().evaluate(n => getComputedStyle(n).transform), 'none');
      assert.equal(await page.locator('#website').evaluate(n => n.style.transform.includes('scale')), false);
      const contentBounds = [];
      for (const t of [9, 12, 15, scene.duration - 1 / 30]) {
        await page.evaluate(({ s, t }) => window.renderFrame(s, t), { s: scene, t });
        contentBounds.push(await page.locator('#question-panel,#question,#choices').evaluateAll(nodes => nodes.map(n => {
          const r = n.getBoundingClientRect(); return [r.x, r.y, r.width, r.height];
        })));
      }
      contentBounds.forEach(bounds => assert.deepEqual(bounds, contentBounds[0]));
      await page.evaluate(s => window.renderFrame(s, 6), scene);
      const forward = await page.screenshot();
      await page.evaluate(s => { window.renderFrame(s, s.duration - 1 / 30); window.renderFrame(s, 0); window.renderFrame(s, 6); }, scene);
      assert.deepEqual(await page.screenshot(), forward);
      assert.ok(await page.locator(layers).evaluateAll(nodes => nodes.every(n => getComputedStyle(n).pointerEvents === 'none')));
      assert.equal(await page.evaluate(() => document.getAnimations().length), 0);
      assert.deepEqual(external, []); assert.equal(JSON.stringify(doc), unchanged);
    } finally { await page.close(); }
  }
});
test('batch restart/retry keeps locale and options, skips completed exports and ignores stale Arabic narration', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-niveau-')); t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const videos = [1, 2].map(id => { const d = fixture('ar'); d.video.id = id; d.video.number = id; d.questions[0].id = id; d.render_options.niveau.narration = true; d.render_options.niveau.extra_animations = true; return d; });
  const doc = { type: 'quiz-batch', videos }, job = { id: 'exam-test', type: 'quiz-batch', status: 'queued' }, output = path.join(root, 'output'), dest = path.join(root, 'exports');
  initialize(job, doc, output, dest);
  let fail = true; const calls = [];
  const dependencies = { save() {}, verifyVideo: file => assert.equal(fs.readFileSync(file, 'utf8'), 'verified test media'), recordProgress: async () => {}, finished: async () => {},
    render: async (_job, item, document) => {
      assert.deepEqual(document, videos[item.sequence - 1]); assert.equal(buildTimeline(document).segments[0].scene.settings.narration, false);
      assert.equal(buildTimeline(document).segments[0].scene.settings.extra_animations, false);
      assert.equal(buildTimeline(document).segments[0].scene.settings.sfx, true);
      if (item.sequence === 2 && fail) throw Error('Renderer restarted');
      calls.push(item.sequence); const file = path.join(output, item.source); fs.mkdirSync(path.dirname(file), { recursive: true }); fs.writeFileSync(file, 'verified test media');
    } };
  await runBatch(job, output, dependencies); assert.equal(job.status, 'failed');
  const first = path.join(dest, job.items[0].filename), mtime = fs.statSync(first).mtimeMs;
  fail = false; await runBatch(JSON.parse(JSON.stringify(job)), output, dependencies);
  assert.deepEqual(calls, [1, 2]); assert.equal(fs.statSync(first).mtimeMs, mtime);
  assert.deepEqual(JSON.parse(fs.readFileSync(path.join(output, 'input.json'))), doc);
});
