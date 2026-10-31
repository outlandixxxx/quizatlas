const fs = require('node:fs');
const path = require('node:path');
const assert = require('node:assert/strict');
const { chromium } = require('../../video-generator/node_modules/playwright');
const context = JSON.parse(fs.readFileSync('/tmp/maroquiz-revision-context.json', 'utf8'));
const out = path.resolve(__dirname, '../artifacts/revision-generator'); fs.mkdirSync(out, { recursive: true });
const origin = 'http://localhost:4200';
(async () => {
  const browser = await chromium.launch({ headless: true, args: ['--disable-dev-shm-usage'] });
  const results = [];
  try {
    for (const [language, width] of [['en', 1440], ['fr', 820], ['ar', 390]]) {
      console.log('Checking browser', language, width);
      const browserContext = await browser.newContext({ viewport: { width, height: 1000 }, permissions: ['clipboard-read', 'clipboard-write'] });
      await browserContext.addInitScript(({ token, language }) => {
        localStorage.setItem('quizatlas_access_token', token); localStorage.setItem('quizatlas.language', language); localStorage.setItem('quizatlas.theme', 'light');
      }, { token: context.token, language });
      const writes = [], jwtLeaks = [], errors = [], jobStarts = [];
      await browserContext.route('**/*', async route => {
        const request = route.request(), url = new URL(request.url());
        if (!['localhost', '127.0.0.1'].includes(url.hostname) && !url.protocol.startsWith('data')) return route.abort();
        if (url.port === '8000' && request.method() !== 'GET' && !url.pathname.endsWith('/local-render/ticket')) { writes.push(request.method() + ' ' + url.pathname); return route.abort(); }
        if (url.port === '3777') {
          if (request.headers().authorization) jwtLeaks.push(url.pathname);
          if (request.method() === 'POST' && url.pathname === '/jobs') jobStarts.push(JSON.parse(request.postData()).quizzes.length);
        }
        return route.continue();
      });
      const page = await browserContext.newPage(); page.on('pageerror', error => errors.push(error.message));
      await page.goto(origin + '/admin/revision-json', { waitUntil: 'domcontentloaded' });
      await page.waitForSelector('.admin-page[lang][dir]', { timeout: 90000 });
      await page.waitForSelector('#major option[value="7"]', { state: 'attached', timeout: 90000 });
      const majorCount = await page.locator('#major option').count() - 1; assert.ok(majorCount >= 11);
      await page.selectOption('#major', String(context.majorId));
      await page.waitForSelector('#subject option[value="169"]', { state: 'attached' }); await page.selectOption('#subject', String(context.subjectId));
      await page.waitForSelector('#quiz option[value="1599"]', { state: 'attached' }); await page.selectOption('#quiz', '1599');
      await page.waitForFunction(() => document.querySelectorAll('.paragraph-editor').length === 10);
      const preview = page.locator('.notebook'); assert.ok(!(await preview.textContent()).includes('Beginner'));
      assert.equal(await preview.locator('li').count(), 10);
      if (language === 'en') {
        await page.locator('.review-panel > summary').click();
        const json = await page.locator('.json-content').textContent();
        await page.locator('.paragraph-editor input[type=checkbox]').nth(0).check(); await page.locator('.paragraph-editor input[type=checkbox]').nth(1).check();
        await page.getByRole('button', { name: 'Merge selected paragraphs', exact: true }).click();
        assert.equal(await page.locator('.paragraph-editor').count(), 9);
        await page.locator('.paragraph-editor textarea').first().fill('Manual review edit.');
        assert.equal(await page.locator('.json-content').textContent(), json);
        await page.getByRole('button', { name: 'Copy JSON', exact: true }).click();
        assert.equal(await page.evaluate(() => navigator.clipboard.readText()), json);
        await page.selectOption('#subject', ''); await page.selectOption('#subject', String(context.subjectId));
        await page.waitForSelector('#quiz option[value="1599"]', { state: 'attached' }); await page.selectOption('#quiz', '1599');
        await page.waitForFunction(() => document.querySelectorAll('.paragraph-editor').length === 10);
      }
      console.log('Generating selected images', language);
      await page.locator('.generate-images').click();
      await page.waitForFunction(() => Array.from(document.querySelectorAll('.downloads a')).some(a => a.href.includes('/revision/catalogue')), undefined, { timeout: 90000 });
      await page.waitForFunction(() => !document.querySelector('#major').disabled, undefined, { timeout: 90000 });
      assert.equal(jobStarts.length, 1); assert.equal(jobStarts[0], 1);
      const downloadPromise = page.waitForEvent('download');
      await page.locator('.downloads a[href*="image-1599-1"]').click();
      const download = await downloadPromise; await download.saveAs(path.join(out, language + '-image.png'));
      if (language === 'en') {
        await page.selectOption('#subject', ''); await page.selectOption('#subject', String(context.subjectId));
        await page.waitForSelector('.quiz-row');
        for (let i = 0; i < 3; i++) await page.locator('.quiz-row input[type=checkbox]').nth(i).check();
        console.log('Generating selected images', language);
      await page.locator('.generate-images').click();
        await page.waitForFunction(() => !document.querySelector('#major').disabled && document.querySelectorAll('.image-result').length === 3, undefined, { timeout: 90000 });
        await page.selectOption('#subject', ''); await page.selectOption('#subject', String(context.subjectId));
        await page.waitForSelector('.quiz-row');
        await page.getByRole('button', { name: 'Select all eligible quizzes', exact: true }).click();
        await page.waitForFunction(() => document.querySelectorAll('.quiz-row input:checked').length === document.querySelectorAll('.quiz-row').length);
        console.log('Generating selected images', language);
      await page.locator('.generate-images').click();
        await page.waitForFunction(() => !document.querySelector('#major').disabled && document.querySelectorAll('.image-result').length === 10, undefined, { timeout: 90000 });
        assert.deepEqual(jobStarts, [1, 3, 10]);
      }
      if (language === 'ar') {
        assert.equal(await page.locator('.admin-page').getAttribute('dir'), 'rtl');
        assert.equal(await page.locator('.admin-page').getAttribute('lang'), 'ar');
      }
      const overflow = await page.evaluate(() => document.documentElement.scrollWidth > innerWidth + 2);
      if (overflow) console.log('Overflow elements', await page.evaluate(() => [...document.querySelectorAll('body *')].filter(e => e.getBoundingClientRect().right > innerWidth + 2).slice(0, 20).map(e => ({ tag: e.tagName, cls: e.className, right: e.getBoundingClientRect().right, width: e.getBoundingClientRect().width }))));
      await page.screenshot({ path: path.join(out, language + '-admin.png'), fullPage: true });
      assert.equal(overflow, false);
      assert.deepEqual(writes, []); assert.deepEqual(jwtLeaks, []); assert.deepEqual(errors, []);
      results.push({ language, width, majorCount, paragraphs: 10, jobStarts, noApiWritesExceptTickets: true, noJwtToRunner: true, noOverflow: true });
      await browserContext.close();
    }
    fs.writeFileSync(path.join(out, 'browser-results.json'), JSON.stringify(results, null, 2));
    console.log('Browser acceptance passed:', JSON.stringify(results));
  } finally { await browser.close(); }
})().catch(error => { console.error(error.stack); process.exitCode = 1; });
