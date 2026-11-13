const { test, before, after } = require('node:test');
const assert = require('node:assert/strict');
const fs = require('node:fs');
const os = require('node:os');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { validate, plan } = require('./model');
const { buildTimeline } = require('../render');
const { initialize, runBatch } = require('../quiz-batch');
const { shortTemplate } = require('../quiz-templates');
function fixture() {
  const doc = structuredClone(require('../five-seconds/sample.json'));
  doc.video.template = 'defi-du-jour'; doc.video.title = 'Daily challenge fixture'; delete doc.questions[0].explanation;
  return doc;
}
let browser;
before(async () => { browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] }); });
after(async () => { await browser?.close(); });
async function pageFor(doc) {
  const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  const scene = buildTimeline(doc).segments[0].scene;
  const external = []; page.on('request', r => { if (/^https?:/.test(r.url())) external.push(r.url()); });
  await page.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
  await page.evaluate(async scene => { window.prepareDefi(scene); await document.fonts.ready; window.prepareDefi(scene); await Promise.all([...document.images].map(image => image.decode())); }, scene);
  return { page, scene, external };
}
test('independent 794-frame timeline, source audio and readable extensions; no inherited timer or explanation', () => {
  const doc = fixture(), timing = plan(doc), timeline = buildTimeline(doc);
  assert.equal(timing.sourceDuration, 794 / 30); assert.equal(timing.reveal, 20.2);
  assert.deepEqual(timing.choices, [358 / 30, 12.8, 415 / 30, 445 / 30]);
  assert.equal(timing.countdown, undefined); assert.equal(timing.explanation, undefined);
  assert.ok(timing.reveal - timing.choices[3] > 5);
  assert.equal(timeline.segments[0].music.enabled, false);
  for (const cue of timeline.segments[0].cues) assert.ok(fs.existsSync(cue[1]));
  doc.questions[0].text = 'Complete source text for a longer question. '.repeat(4);
  doc.questions[0].choices[0].text = 'A longer original choice with several words to read comfortably';
  const longer = plan(doc); assert.ok(longer.duration > timing.duration);
  assert.ok(longer.choices[0] >= longer.question + longer.questionTyping - 1e-6);
  assert.ok(longer.reveal - longer.choices.at(-1) > 5);
});
test('stored IDs bind the correct row; unknown templates and unsuitable content fail before rendering', () => {
  for (const mutate of [d => d.questions.push(d.questions[0]), d => d.questions[0].choices.pop(), d => d.questions[0].correct_answer.choice_id = 123,
    d => d.questions[0].correct_answer.text = 'Invented', d => d.questions[0].choices[1].id = 1, d => d.questions[0].choices[1].text = 'Python', d => d.video.language = 'es']) {
    const doc = fixture(); mutate(doc); assert.throws(() => validate(doc));
  }
  assert.throws(() => shortTemplate({ video: { template: '../template' } }), /Unsupported/);
  assert.equal(shortTemplate({ video: {} }), null);
});
test('French, English and Arabic preserve exact source, use ID-based B/D reveals and keep badges on the reading side', async () => {
  for (const language of ['fr', 'en', 'ar']) {
    const doc = fixture(); doc.video.language = language;
    if (language === 'ar') {
      doc.subject.name = 'علوم الحاسوب'; doc.questions[0].text = 'ما اللغة المستخدمة لتنسيق صفحة ويب باستخدام HTML بنسبة 100%؟';
      doc.questions[0].choices[3].text = 'تنسيق صفحات CSS';
      doc.questions[0].correct_answer = { choice_id: 4, label: 'D', text: 'تنسيق صفحات CSS' };
    }
    const original = JSON.stringify(doc), { page, scene, external } = await pageFor(doc);
    try {
      await page.evaluate(scene => window.renderFrame(scene, 16), scene);
      assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
      assert.deepEqual(await page.locator('.choice-text').allTextContents(), doc.questions[0].choices.map(c => c.text));
      assert.equal(await page.locator('#category').textContent(), doc.subject.name.toLocaleUpperCase(language));
      assert.equal(await page.locator('#timer, #explanation').count(), 0);
      const bounds = await page.locator('#choices li').first().evaluate(n => ({ letter: n.querySelector('.letter').getBoundingClientRect().x, text: n.querySelector('.choice-text').getBoundingClientRect().x }));
      assert.equal(bounds.letter > bounds.text, language === 'ar');
      await page.evaluate(scene => window.renderFrame(scene, scene.timing.reveal + .6), scene);
      assert.equal(await page.locator('li.correct').getAttribute('data-choice-id'), String(doc.questions[0].correct_answer.choice_id));
      assert.equal(await page.locator('li.correct').count(), 1);
      const highlights = await page.locator('.highlight').evaluateAll(nodes => nodes.filter(n => Number(n.style.opacity) > 0).length);
      assert.equal(highlights, 1);
      await page.evaluate(scene => window.renderFrame(scene, scene.timing.highlightExit + .3), scene);
      assert.equal(await page.locator('li.correct .highlight').evaluate(n => Number(n.style.opacity)), 0);
      assert.ok(await page.locator('li.correct .answer-check').evaluate(n => Number(n.style.opacity)) > 0);
      assert.deepEqual(external, []); assert.equal(JSON.stringify(doc), original);
      if (process.env.DEFI_PREVIEW_DIR) {
        fs.mkdirSync(process.env.DEFI_PREVIEW_DIR, { recursive: true });
        await page.screenshot({ path: path.join(process.env.DEFI_PREVIEW_DIR, language + '.png') });
      }
      const pixels = await page.screenshot();
      await page.evaluate(scene => { window.renderFrame(scene, 0); window.renderFrame(scene, scene.timing.highlightExit + .3); }, scene);
      assert.deepEqual(await page.screenshot(), pixels);
    } finally { await page.close(); }
  }
});
test('progressive reveal clips the complete original text in fixed geometry; Arabic shaping is never split', async () => {
  const doc = fixture(), { page, scene } = await pageFor(doc);
  try {
    const rects = [];
    for (const t of [3, 6, 12]) {
      await page.evaluate(({ scene, t }) => window.renderFrame(scene, t), { scene, t });
      assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
      rects.push(await page.locator('#text-clip rect').count());
    }
    assert.ok(rects[0] < rects[2]);
    const full = await page.locator('#question').evaluate(n => ({ height: n.clientHeight, scroll: n.scrollHeight, size: parseFloat(getComputedStyle(n).fontSize) }));
    assert.ok(full.height >= full.scroll - 1); assert.ok(full.size >= 32);
  } finally { await page.close(); }
});
test('long source wraps safely, markup stays literal and oversized paragraphs fail visibly', async () => {
  const doc = fixture(); doc.questions[0].text = 'Which original question preserves HTML text <script>window.injected=true</script> and every mathematical expression x² + y² = 100% without losing words?';
  doc.questions[0].choices[0].text = 'This is a longer original choice that must wrap safely.';
  const { page, scene } = await pageFor(doc);
  try {
    await page.evaluate(scene => window.renderFrame(scene, scene.timing.reveal + .5), scene);
    assert.equal(await page.evaluate(() => window.injected), undefined);
    assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
    const dimensions = await page.evaluate(() => {
      const q = document.getElementById('question').getBoundingClientRect(), row = document.querySelector('#choices li').getBoundingClientRect(), cup = document.getElementById('trophy').getBoundingClientRect(), site = document.getElementById('website').getBoundingClientRect(), footer = document.getElementById('footer').getBoundingClientRect();
      return { qBottom: q.bottom, rowTop: row.top, cupBottom: cup.bottom, siteTop: site.top, siteBottom: site.bottom, footerTop: footer.top };
    });
    assert.ok(dimensions.qBottom <= dimensions.rowTop); assert.ok(dimensions.cupBottom <= dimensions.siteTop);
    assert.ok(dimensions.siteBottom < dimensions.footerTop);
    if (process.env.DEFI_PREVIEW_DIR) await page.screenshot({ path: path.join(process.env.DEFI_PREVIEW_DIR, 'long.png') });
    await assert.rejects(page.evaluate(scene => window.prepareDefi({ ...scene, question: { ...scene.question, text: 'A complete long paragraph '.repeat(60) } }), scene), /does not fit/);
  } finally { await page.close(); }
});
test('sequential retry preserves the approved snapshot, finished MP4 and export; templates cannot be mixed', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-defi-batch-')); t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const videos = [1, 2].map(id => { const d = fixture(); d.video.id = id; d.video.number = id; d.questions[0].id = id; return d; });
  const doc = { type: 'quiz-batch', videos }, job = { id: 'daily-test', type: 'quiz-batch', status: 'queued' }, output = path.join(root, 'output'), dest = path.join(root, 'shorts');
  initialize(job, doc, output, dest);
  const mixed = structuredClone(doc); mixed.videos[1].video.template = 'five-seconds'; mixed.videos[1].questions[0].explanation = 'Stored source';
  assert.throws(() => initialize({}, mixed, path.join(root, 'mixed'), dest), /different templates/);
  let fail = true; const calls = [];
  const dependencies = { save() {}, verifyVideo: file => assert.equal(fs.readFileSync(file, 'utf8'), 'verified test media'), recordProgress: async () => {}, finished: async () => {},
    render: async (_job, item, document) => {
      assert.deepEqual(document, videos[item.sequence - 1]);
      if (item.sequence === 2 && fail) throw Error('Interrupted');
      calls.push(item.sequence); const file = path.join(output, item.source); fs.mkdirSync(path.dirname(file), { recursive: true }); fs.writeFileSync(file, 'verified test media');
    } };
  await runBatch(job, output, dependencies); assert.equal(job.status, 'failed');
  const first = path.join(dest, job.items[0].filename), before = fs.statSync(first).mtimeMs;
  fail = false; await runBatch(JSON.parse(JSON.stringify(job)), output, dependencies);
  assert.deepEqual(calls, [1, 2]); assert.equal(fs.statSync(first).mtimeMs, before);
  assert.deepEqual(JSON.parse(fs.readFileSync(path.join(output, 'input.json'))), doc);
});
