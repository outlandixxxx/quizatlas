const { test, before, after } = require('node:test');
const assert = require('node:assert/strict');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const fs = require('node:fs');
const os = require('node:os');
const { chromium } = require('playwright');
const { validate, plan } = require('./model');
const { buildTimeline } = require('../render');
const { initialize, runBatch } = require('../quiz-batch');
const source = require('./sample.json');
const fixture = () => structuredClone(source);
let browser;
before(async () => { browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] }); });
after(async () => { await browser?.close(); });

test('reference timeline counts five full seconds after all four choices and holds the full explanation', () => {
  const timing = plan(fixture());
  assert.equal(timing.countdownEnd - timing.countdown, 5);
  assert.ok(timing.countdown > timing.choices.at(-1) + .6);
  assert.ok(timing.choices[0] < 2.8);
  assert.ok(timing.question + .1 + timing.questionTyping < timing.choices[0]);
  assert.equal(timing.sourceDuration, 734 / 30);
  assert.ok(timing.duration > timing.explanation + timing.explanationTyping + 2);
  const doc = fixture(); doc.questions[0].explanation = 'A complete original explanation. '.repeat(6);
  assert.ok(plan(doc).duration > timing.duration);
  doc.questions[0].explanation = 'Complete source '.repeat(400);
  assert.throws(() => plan(doc), /too long|60 seconds/);
});
test('entrances match the reviewed moments, text pacing and final CTA remain deterministic', async () => {
  const doc = fixture(), scene = buildTimeline(doc).segments[0].scene;
  assert.deepEqual(buildTimeline(doc).segments[0].cues.map(c => c[0]), [.1, 1, 3, 3.8, 4.6, 5.4, ...Array.from({ length: 5 }, (_, i) => scene.timing.countdown + i), 12.4, 16.2, scene.timing.sourceDuration - 2]);
  const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  try {
    await page.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
    await page.evaluate(async scene => { window.prepareFive(scene); await document.fonts.ready; window.prepareFive(scene); }, scene);
    await page.evaluate(scene => window.renderFrame(scene, 2.8), scene);
    const first = await page.locator('#choices li').first().evaluate(n => Number(n.style.opacity));
    assert.ok(first > 0 && first < 1);
    assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
    assert.equal(await page.locator('#timer').evaluate(n => n.style.opacity), '0');
    await page.evaluate(scene => window.renderFrame(scene, 16.9), scene);
    assert.equal(await page.locator('#explanation-card h1').evaluate(n => n.style.opacity), '0');
    const banner = await page.locator('#banner').evaluate(n => ({ opacity: Number(n.style.opacity), x: n.getBoundingClientRect().x, transform: n.style.transform }));
    assert.ok(banner.opacity > .5); assert.ok(banner.x > 500); assert.match(banner.transform, /rotate\(/);
    const firstText = await page.locator('#explanation').textContent();
    assert.ok(firstText.length > 0 && firstText.length < 10); assert.ok(doc.questions[0].explanation.startsWith(firstText));
    await page.evaluate(scene => window.renderFrame(scene, 18.7), scene);
    const middle = await page.locator('#explanation').textContent();
    assert.ok(middle.length >= 28 && middle.length <= 32); assert.ok(doc.questions[0].explanation.startsWith(middle));
    await page.evaluate(scene => window.renderFrame(scene, 23.3), scene);
    assert.equal(await page.locator('#explanation').textContent(), doc.questions[0].explanation);
    assert.equal(await page.locator('#final-website').textContent(), 'maroquiz.com');
    const cta = await page.locator('#final-website').evaluate(n => ({ width: n.getBoundingClientRect().width, overflow: n.scrollWidth > n.clientWidth, globe: parseFloat(getComputedStyle(n, '::before').width) }));
    assert.ok(cta.width > 470 && cta.width < 540); assert.equal(cta.overflow, false); assert.ok(cta.globe < 70);
    const after = await page.screenshot();
    await page.evaluate(scene => { window.renderFrame(scene, 2.8); window.renderFrame(scene, 23.3); }, scene);
    assert.deepEqual(await page.screenshot(), after);
  } finally { await page.close(); }
});
test('strict source mapping rejects missing explanations, wrong correct IDs and non-four-choice questions', () => {
  for (const mutate of [d => d.questions[0].explanation = '', d => d.questions[0].choices.pop(), d => d.questions[0].correct_answer.choice_id = 3,
    d => d.questions[0].correct_answer.text = 'Invented', d => d.questions[0].choices[1].id = 1, d => d.questions.push(d.questions[0])]) {
    const doc = fixture(); mutate(doc); assert.throws(() => validate(doc));
  }
  const legacy = { ...fixture(), video: { title: 'Legacy long' } }; delete legacy.questions[0].explanation;
  assert.equal(buildTimeline(legacy).segments[0].scene.type, 'intro');
});
test('French, English and Arabic preserve exact source text, four choices, correct IDs and RTL placement', async () => {
  for (const language of ['fr', 'en', 'ar']) {
    const doc = fixture(); doc.video.language = language;
    if (language === 'ar') {
      doc.major.name = 'تطوير الويب'; doc.questions[0].text = 'ما اللغة المستخدمة لتنسيق صفحة ويب مع HTML؟';
      doc.questions[0].explanation = 'تُستخدم CSS لتنسيق صفحات الويب مع HTML مع الحفاظ على النص الأصلي.';
    } else if (language === 'en') {
      doc.major.name = 'Web Development'; doc.questions[0].text = 'Which language styles a web page?';
      doc.questions[0].explanation = 'CSS is the language responsible for styling web pages.';
    }
    // Exercise a different stored correct-answer position without changing its mapping.
    if (language === 'en') {
      [doc.questions[0].choices[1].text, doc.questions[0].choices[3].text] = [doc.questions[0].choices[3].text, doc.questions[0].choices[1].text];
      doc.questions[0].correct_answer = { choice_id: 4, label: 'D', text: 'CSS' };
    }
    const scene = buildTimeline(doc).segments[0].scene, page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
    const errors = []; page.on('pageerror', e => errors.push(e.message));
    await page.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
    await page.evaluate(async scene => { window.prepareFive(scene); await document.fonts.ready; window.prepareFive(scene); }, scene);
    for (const t of [0, scene.timing.countdown, scene.timing.countdown + 1.1, scene.timing.countdown + 4.9, scene.timing.reveal + .6, scene.duration - .1]) {
      await page.evaluate(({ scene, t }) => window.renderFrame(scene, t, t), { scene, t });
      if (t === scene.timing.countdown) {
        assert.equal(await page.locator('#count').textContent(), '05');
        assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
        if (language === 'fr') {
          const lines = await page.locator('#question').evaluate(p => {
            const groups = new Map(), node = p.firstChild;
            for (let i = 0; i < node.length; i++) {
              const range = document.createRange(); range.setStart(node, i); range.setEnd(node, i + 1);
              const y = Math.round(range.getBoundingClientRect().top); groups.set(y, (groups.get(y) || '') + node.data[i]);
            }
            return [...groups.values()].map(line => line.trim());
          });
          assert.deepEqual(lines, ['Quel langage est utilisé', 'pour styliser une page web ?']);
          assert.equal(await page.locator('#question-card').evaluate(n => n.getBoundingClientRect().height), 222);
        }
        assert.deepEqual(await page.locator('.choice-text').allTextContents(), doc.questions[0].choices.map(c => c.text));
        const bounds = await page.locator('#choices li').first().evaluate(n => ({ letter: n.querySelector('.letter').getBoundingClientRect().x, text: n.querySelector('.choice-text').getBoundingClientRect().x }));
        assert.equal(bounds.letter > bounds.text, language === 'ar');
      }
      if (t === scene.timing.countdown + 1.1) assert.equal(await page.locator('#count').textContent(), '04');
      if (t === scene.timing.countdown + 4.9) assert.equal(await page.locator('#count').textContent(), '01');
      if (t >= scene.timing.reveal) {
        assert.equal(await page.locator('li.correct').getAttribute('data-choice-id'), String(doc.questions[0].correct_answer.choice_id));
        assert.equal(await page.locator('li.correct').count(), 1);
      }
      if (t > scene.timing.explanation + scene.timing.explanationTyping + 1) assert.equal(await page.locator('#explanation').textContent(), doc.questions[0].explanation);
    }
    assert.equal(await page.locator('#category').textContent(), doc.major.name);
    assert.equal(await page.locator('#more').textContent(), scene.labels.more);
    assert.equal(await page.locator('#more').evaluate(n => n.scrollWidth > n.clientWidth), false);
    if (process.env.FIVE_SECONDS_PREVIEW_DIR) {
      fs.mkdirSync(process.env.FIVE_SECONDS_PREVIEW_DIR, { recursive: true });
      await page.screenshot({ path: path.join(process.env.FIVE_SECONDS_PREVIEW_DIR, language + '-explanation.png') });
      await page.evaluate(scene => window.renderFrame(scene, scene.timing.countdown, 0), scene);
      await page.screenshot({ path: path.join(process.env.FIVE_SECONDS_PREVIEW_DIR, language + '-question.png') });
    }
    assert.deepEqual(errors, []); await page.close();
  }
});
test('long content wraps or fails clearly at readable sizes; markup stays literal text', async () => {
  const doc = fixture(); doc.questions[0].text = 'Which language preserves the complete source question while styling a web page with accessible layouts?';
  doc.questions[0].explanation = 'CSS preserves the original explanation. <script>window.invented = true</script>';
  const scene = buildTimeline(doc).segments[0].scene, page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
  await page.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
  await page.evaluate(async scene => { window.prepareFive(scene); await document.fonts.ready; window.prepareFive(scene); window.renderFrame(scene, scene.duration - .1); }, scene);
  assert.equal(await page.locator('#question').textContent(), doc.questions[0].text);
  assert.equal(await page.locator('#explanation').textContent(), doc.questions[0].explanation);
  assert.equal(await page.evaluate(() => window.invented), undefined);
  const oversized = { ...scene, question: { ...scene.question, text: 'A long source question '.repeat(40) } };
  await assert.rejects(page.evaluate(scene => window.prepareFive(scene), oversized), /does not fit/);
  await page.close();
});
test('Shorts reuse sequential export/retry, retain completed files and require an explicit separate directory', async t => {
  const root = fs.mkdtempSync(path.join(os.tmpdir(), 'maroquiz-short-batch-'));
  t.after(() => fs.rmSync(root, { recursive: true, force: true }));
  const videos = [1, 2].map(id => { const doc = fixture(); doc.video.id = id; doc.video.number = id; doc.questions[0].id = id; return doc; });
  const batch = { type: 'quiz-batch', videos }, job = { id: 'short-test', type: 'quiz-batch', status: 'queued' };
  const previous = process.env.QUIZ_SHORT_EXPORT_DIR; delete process.env.QUIZ_SHORT_EXPORT_DIR;
  try { assert.throws(() => initialize({ ...job }, batch, path.join(root, 'absent')), /QUIZ_SHORT_EXPORT_DIR/); }
  finally { if (previous !== undefined) process.env.QUIZ_SHORT_EXPORT_DIR = previous; }
  const output = path.join(root, 'output'), destination = path.join(root, 'shorts'); initialize(job, batch, output, destination);
  const rendered = [], verifyVideo = file => assert.equal(fs.readFileSync(file, 'utf8'), 'valid media');
  let fail = true;
  const dependencies = { save() {}, verifyVideo, recordProgress: async () => {}, finished: async () => {}, render: async (_job, item) => {
    if (item.sequence === 2 && fail) throw Error('Interrupted');
    rendered.push(item.sequence); const file = path.join(output, item.source); fs.mkdirSync(path.dirname(file), { recursive: true }); fs.writeFileSync(file, 'valid media');
  } };
  await runBatch(job, output, dependencies); assert.equal(job.status, 'failed');
  const first = path.join(destination, job.items[0].filename), timestamp = fs.statSync(first).mtimeMs;
  fail = false; await runBatch(job, output, dependencies);
  assert.equal(job.status, 'completed'); assert.deepEqual(rendered, [1, 2]); assert.equal(fs.statSync(first).mtimeMs, timestamp);
  assert.equal(JSON.parse(fs.readFileSync(path.join(output, 'input.json'))).videos[0].questions[0].explanation, source.questions[0].explanation);
});
