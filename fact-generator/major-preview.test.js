const { test } = require('node:test');
const assert = require('node:assert/strict');
const path = require('node:path');
const { pathToFileURL } = require('node:url');
const { chromium } = require('playwright');
const { validateFactsJob } = require('./job-schema');

test('FR/EN/AR Short and Long previews display the Major, including mixed legacy topics', async () => {
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage', '--disable-gpu'] });
  try {
    for (const [language, name, text] of [['fr', 'Physique', 'La lumière se propage.'], ['en', 'Physics', 'Light travels.'], ['ar', 'الفيزياء', 'ينتشر الضوء.'], ['ar', 'اللغة الفرنسية', 'حقيقة لغوية.'], ['ar', 'اللغة الإنجليزية', 'حقيقة لغوية.']]) {
      for (const type of ['facts-short', 'facts-long']) {
        const doc = { type, language, major: { id: 1, name }, video: { title: name },
          facts: [{ id: 1, text, detail: '', source_url: null }, { id: 2, text: text + ' 2', detail: '', source_url: null,
            subject_id: 99, subject_name: 'OLD SUBJECT MUST NOT APPEAR' }],
          render_options: { quality: 'draft', orientation: 'vertical', music: false, sfx: false, musicVolume: .5 } };
        const config = validateFactsJob(doc);
        const page = await browser.newPage({ viewport: { width: 1080, height: 1920 } });
        await page.goto(pathToFileURL(path.join(__dirname, type === 'facts-short' ? 'template.html' : 'long-template.html')).href);
        if (type === 'facts-short') {
          await page.evaluate(([row, lang]) => window.setData(row, { lang, last: true }), [config.scenes[1].row, language]);
          const chip = await page.locator('#chip').textContent();
          assert.ok(chip.toLocaleLowerCase().includes(name.toLocaleLowerCase()), `${language}: ${chip}`);
        } else {
          for (const scene of config.scenes) {
            await page.evaluate(([doc, scene, duration]) => window.setLongData(doc, scene, duration), [config.doc, scene, config.estimatedDuration]);
            assert.equal(await page.locator('#subject-label').textContent(), name);
            assert.equal(await page.locator('#intro-subject').textContent(), name);
            assert.equal(await page.locator('#illustration-label').textContent(), name);
            assert.ok(!(await page.locator('body').textContent()).includes('OLD SUBJECT'));
          }
          assert.equal(await page.locator('#stage').evaluate(el => el.classList.contains('rtl')), language === 'ar');
          if (name.startsWith('اللغة')) assert.match(await page.locator('#subject-icon').getAttribute('src'), /language\.svg$/);
        }
        await page.close();
      }
    }
  } finally { await browser.close(); }
});
