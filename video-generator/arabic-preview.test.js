const test = require('node:test');
const assert = require('node:assert/strict');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { buildTimeline } = require('./render');

test('Arabic Cairo preview, mixed text, right labels and original correct mapping; FR/EN stay LTR', async () => {
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu'] });
  try {
    const page = await browser.newPage({ viewport: { width: 1920, height: 1080 } });
    await page.goto(pathToFileURL(path.join(__dirname, 'template.html')).href);
    await page.evaluate(async () => { await document.fonts.load('700 48px Cairo', 'السؤال'); await document.fonts.ready; });
    for (const language of ['ar', 'fr', 'en']) {
      const question = { text: 'ما دور ECG و HbA1c بنسبة 37,5% في المعادلة x = -2 + 3؟', choices: ['A','B','C','D'].map(label => ({ label, text: 'تخطيط القلب ECG (98%) — شرح طويل للتحقق من التفاف النص وعدم اصطدامه بمؤشر الإجابة' })), correct_answer: { label: 'C' } };
      const data = { language, video: { title: 'Preview', number: 18 }, subject: { name: language === 'ar' ? 'العلوم الصحية' : 'Health' }, questions: Array.from({ length: 6 }, () => question) };
      const { segments } = buildTimeline(data);
      const scene = segments.find(s => s.scene.phase === 'reveal').scene;
      await page.evaluate(scene => window.renderFrame(scene, 1.5, 8), scene);
      const state = await page.evaluate(() => {
        const card = document.querySelector('#ans-A'), disc = card.querySelector('.disc'), txt = card.querySelector('.txt');
        return { language: document.documentElement.lang, font: getComputedStyle(txt).fontFamily, direction: getComputedStyle(txt).direction,
          right: disc.getBoundingClientRect().left > txt.getBoundingClientRect().right,
          labels: [...document.querySelectorAll('.answer .disc')].map(el => el.textContent),
          ids: [...document.querySelectorAll('.answer')].map(el => el.id),
          correct: document.querySelector('#ans-C .fill').style.opacity, wrong: document.querySelector('#ans-A .fill').style.opacity,
          size: getComputedStyle(txt).fontSize, sh: txt.scrollHeight, ch: txt.clientHeight, sw: txt.scrollWidth, cw: txt.clientWidth,
          overflow: txt.scrollHeight > txt.clientHeight || txt.scrollWidth > txt.clientWidth,
          cairo: document.fonts.check('700 48px Cairo', 'السؤال'),
        };
      });
      assert.deepEqual(state.ids, ['ans-A','ans-B','ans-C','ans-D']); assert.equal(state.correct, '1'); assert.equal(state.wrong, '0');
      if (language === 'ar') {
        assert.equal(state.direction, 'rtl'); assert.ok(state.right); assert.match(state.font, /Cairo/); assert.ok(state.cairo);
        assert.deepEqual(state.labels, ['أ','ب','ج','د']); assert.equal(state.overflow, false, JSON.stringify(state));
        assert.equal(await page.locator('#qt-shown').textContent(), question.text);
        assert.ok(await page.locator('#qt-shown bdi[dir=ltr]').count() >= 3);
        const isolated = await page.locator('#qt-shown bdi[dir=ltr]').allTextContents();
        assert.ok(isolated.includes('37,5%')); assert.ok(isolated.includes('x = -2 + 3'));
        await page.screenshot({ path: '/tmp/maroquiz-arabic-reveal.png' });
        for (const phase of ['type', 'countdown']) {
          const frame = segments.find(s => s.scene.phase === phase).scene;
          await page.evaluate(scene => window.renderFrame(scene, scene.duration - .5, 8), frame);
          assert.deepEqual(await page.locator('.answer .disc').allTextContents(), ['أ','ب','ج','د']);
        }
        for (const segment of segments.filter(s => s.scene.type !== 'question')) {
          await page.evaluate(scene => window.renderFrame(scene, 2.5, 3), segment.scene);
          assert.equal(await page.evaluate(() => document.documentElement.lang), 'ar');
        }
        // Arabic welcome must stay joined, never one isolated span per character.
        await page.evaluate(scene => window.renderFrame(scene, 3, 3), segments[0].scene);
        assert.equal(await page.locator('#welcome-front .ch').count(), 1);
        await page.screenshot({ path: '/tmp/maroquiz-arabic-intro.png' });
      } else {
        assert.equal(state.direction, 'ltr'); assert.ok(!state.right); assert.ok(!state.font.includes('Cairo'));
        assert.deepEqual(state.labels, ['A','B','C','D']);
        await page.evaluate(scene => window.renderFrame(scene, 3, 3), segments.at(-1).scene);
        assert.equal(await page.locator('#o-sub .btn').textContent(), 'SUBSCRIBE');
      }
    }
  } finally { await browser.close(); }
});
