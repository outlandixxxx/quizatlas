// Production UI + actual local admin GETs. No mocked records and no permitted writes.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(require.resolve('playwright', { paths: [path.join(root, 'fact-generator')] }));
const tokenPath = path.join(root, 'backend/storage/framework/phase5d-admin-token');
const token = fs.readFileSync(tokenPath, 'utf8').trim();
const expected = JSON.parse(fs.readFileSync(path.join(root, 'backend/artifacts/concours-phase5d/admin-api.json'))).checks.all.data.items;
const output = path.join(root, 'frontend/artifacts/concours-phase5d');

(async () => {
  fs.mkdirSync(output, { recursive: true });
  const browser = await chromium.launch({ headless: true, args: ['--no-sandbox', '--disable-dev-shm-usage'] });
  const results = [];
  try {
    for (const [language, width] of [['fr', 1440], ['en', 820], ['ar', 390]]) {
      const context = await browser.newContext({ viewport: { width, height: 1000 } });
      const writes = [], errors = [], requests = [];
      await context.addInitScript(({ token, language }) => {
        localStorage.setItem('quizatlas_access_token', token);
        localStorage.setItem('quizatlas.language', language);
        localStorage.setItem('quizatlas.theme', 'light');
        window.__permissionCalls = 0;
        if ('Notification' in window) Notification.requestPermission = async () => { window.__permissionCalls++; return 'denied'; };
      }, { token, language });
      await context.route('**/*', async route => {
        const request = route.request(), url = new URL(request.url());
        if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/')) {
          if (request.method() !== 'GET') {
            writes.push(request.method() + ' ' + url.pathname);
            return route.abort();
          }
          const target = new URL(url.pathname + url.search, 'http://localhost:8000');
          if (target.pathname.endsWith('/concours-discovery/discoveries')) target.searchParams.set('per_page', '3');
          const response = await route.fetch({ url: target.href, maxRedirects: 0 });
          requests.push({ path: target.pathname + target.search, status: response.status() });
          if (response.status() >= 400) errors.push('API ' + response.status() + ' ' + target.pathname);
          return route.fulfill({ response, headers: { ...response.headers(), 'access-control-allow-origin': 'http://localhost:4301' } });
        }
        if (url.origin === 'http://localhost:4301') return route.continue();
        // No publisher articles, vendor endpoints or production requests leave this test.
        return route.abort();
      });
      const page = await context.newPage();
      page.on('pageerror', error => errors.push(error.message));
      await page.goto('http://localhost:4301/admin/concours-discoveries', { waitUntil: 'domcontentloaded', timeout: 60000 });
      const content = page.locator('div.admin-page').first();
      await page.getByRole('button', { name: 'Examiner', exact: true }).first().waitFor({ timeout: 30000 }).catch(error => {
        console.error(JSON.stringify({ url: page.url(), requests, errors }));
        throw error;
      });
      assert.equal(await content.locator('tbody').first().locator('tr').count(), 3);
      assert.ok((await content.innerText()).includes(expected[0].title));
      assert.ok((await content.innerText()).includes(expected[0].publication_date));
      assert.ok((await content.innerText()).includes('Secteur et type suggérés'));
      const nav = content.locator('nav').first();
      await page.getByRole('button', { name: 'Suivant', exact: true }).first().click();
      await page.waitForFunction(() => document.querySelector('.admin-page nav')?.textContent.includes('2 / 4'));
      await page.getByRole('button', { name: 'Précédent', exact: true }).first().click();
      await page.waitForFunction(() => document.querySelector('.admin-page nav')?.textContent.includes('1 / 4'));
      const search = async (value, expectedRows) => {
        await page.locator('input[name=q]').fill(value);
        const response = page.waitForResponse(r => r.url().includes('/concours-discovery/discoveries?'));
        await page.getByRole('button', { name: 'Rechercher', exact: true }).click();
        const payload = await (await response).json();
        assert.equal(payload.data.items.length, expectedRows);
        await page.waitForFunction(titles => JSON.stringify([...(document.querySelector('div.admin-page table tbody')?.querySelectorAll('bdi') || [])].map(el => el.textContent)) === JSON.stringify(titles), payload.data.items.map(item => item.title));
      };
      await search('23638', 1);
      assert.ok((await content.innerText()).includes('réf. 23638'));
      await page.locator('select[name=candidate_type]').selectOption('results');
      await search('', 1);
      assert.ok((await content.innerText()).includes('Résultats'));
      await page.locator('select[name=candidate_type]').selectOption('amendment');
      await search('', 1);
      assert.ok((await content.innerText()).includes('Modification / report'));
      await page.locator('select[name=candidate_type]').selectOption('');
      await page.locator('select[name=candidate_category]').selectOption('academic');
      await search('', 0);
      assert.ok((await content.innerText()).includes('Aucune'));
      await page.locator('select[name=candidate_category]').selectOption('employment');
      await page.locator('select[name=source]').selectOption('8');
      await search('', 3);
      await page.getByRole('button', { name: 'Examiner', exact: true }).first().click();
      const dialog = page.locator('dialog[aria-labelledby=review-title]');
      await dialog.waitFor({ state: 'visible' });
      assert.equal(await dialog.locator('a[href="' + expected[0].source_article_url + '"]').count(), 1);
      assert.equal(await dialog.locator('[formControlName=official_url]').inputValue(), '');
      assert.equal(await dialog.locator('[formControlName=verified_title]').inputValue(), '');
      assert.equal(await dialog.locator('[formControlName=source_checked]').isChecked(), false);
      assert.equal(await dialog.getByRole('button', { name: 'Enregistrer la vérification officielle' }).count(), 1);
      assert.ok((await dialog.innerText()).includes('Aucun rapprochement confirmé'));
      assert.equal(await page.evaluate(() => window.__permissionCalls), 0);
      await dialog.screenshot({ path: path.join(output, 'review-' + language + '.png') });
      await dialog.getByRole('button', { name: 'Fermer', exact: true }).click();
      await content.screenshot({ path: path.join(output, 'listing-' + language + '.png') });
      const overflow = await page.evaluate(() => document.documentElement.scrollWidth > innerWidth + 1);
      assert.equal(overflow, false);
      assert.equal(await nav.textContent().then(t => t.includes('10')), true);
      assert.deepEqual(writes, []);
      assert.deepEqual(errors, []);
      results.push({ language_preference: language, width, admin_direction: await page.locator('html').getAttribute('dir'), real_records: expected.length,
        checks: ['pagination at actual API page size 3', 'source/category/type/status/search', 'source link and declared dates', 'pending metadata label',
          'official title/URL/confirmation controls', 'empty unverified duplicate suggestions', 'no overflow', 'no writes', 'no permission prompts'], requests });
      await context.close();
    }
    fs.writeFileSync(path.join(output, 'verification.json'), JSON.stringify({ actual_local_api: true, records_mocked: false, results }, null, 2) + '\n');
    console.log('Actual local admin browser checks passed: ' + results.length + ' viewport/language cases, zero writes.');
  } finally {
    await browser.close();
    fs.unlinkSync(tokenPath);
  }
})().catch(error => { console.error(error); process.exitCode = 1; });
