// Actual authenticated local admin only. No provider navigation, API writes or publication.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.join(root, 'fact-generator')] }),
);
const evidence = JSON.parse(
  fs.readFileSync(
    path.join(root, 'backend/artifacts/concours-launch-readiness/admin-api.json'),
  ),
);
const source = evidence.sources.find((item) => item.key === 'wadifa-info');
const records = evidence.discoveries.items;
const tokenPath = path.join(root, 'backend/storage/framework/concours-launch-admin-token');
const output = path.join(root, 'frontend/artifacts/concours-launch-readiness/admin');
const origin = 'http://localhost:4301';

(async () => {
  let browser;
  try {
    const token = fs.readFileSync(tokenPath, 'utf8').trim();
    fs.mkdirSync(output, { recursive: true });
    browser = await chromium.launch({
      headless: true,
      args: ['--no-sandbox', '--disable-dev-shm-usage'],
    });
    const results = [];
    for (const [language, width] of [
      ['fr', 1440],
      ['en', 820],
      ['ar', 390],
    ]) {
      const dictionary = JSON.parse(
        fs.readFileSync(path.join(root, 'frontend/src/assets/i18n', language + '.json')),
      );
      const context = await browser.newContext({ viewport: { width, height: 1000 } });
      const requests = [],
        writes = [],
        errors = [],
        providerRequests = [];
      await context.addInitScript(
        ({ token, language }) => {
          localStorage.setItem('quizatlas_access_token', token);
          localStorage.setItem('quizatlas.language', language);
          localStorage.setItem('quizatlas.theme', 'light');
          window.__permissionCalls = 0;
          if ('Notification' in window)
            Notification.requestPermission = async () => {
              window.__permissionCalls++;
              return 'denied';
            };
        },
        { token, language },
      );
      await context.route('**/*', async (route) => {
        const request = route.request(),
          url = new URL(request.url());
        if (url.hostname.includes('wadifa')) {
          providerRequests.push(url.pathname);
          return route.abort();
        }
        if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/')) {
          if (request.method() !== 'GET') {
            writes.push(request.method() + ' ' + url.pathname);
            return route.abort();
          }
          const response = await route.fetch({
            url: 'http://localhost:8000' + url.pathname + url.search,
            maxRedirects: 0,
            maxRetries: 0,
          });
          requests.push({ path: url.pathname + url.search, status: response.status() });
          if (response.status() >= 400)
            errors.push('API ' + response.status() + ' ' + url.pathname);
          return route.fulfill({
            response,
            headers: { ...response.headers(), 'access-control-allow-origin': origin },
          });
        }
        if (url.origin === origin) return route.continue();
        if (
          request.method() === 'GET' &&
          ((url.hostname === 'fonts.gstatic.com' && request.resourceType() === 'font') ||
            (url.hostname === 'fonts.googleapis.com' && request.resourceType() === 'stylesheet'))
        )
          return route.continue();
        return route.abort();
      });
      const page = await context.newPage();
      page.on('pageerror', (error) => errors.push(error.message));
      await page.goto(origin + '/admin/concours-discoveries', {
        waitUntil: 'domcontentloaded',
        timeout: 60000,
      });
      await page.getByRole('heading', { name: 'Annonces détectées', exact: true }).waitFor();
      assert.ok(
        await page.locator('a[href="/admin/concours-discoveries"]').count(),
        'Actual admin navigation is available.',
      );
      await page
        .locator('select[name=source] option')
        .filter({ hasText: 'Wadifa Info' })
        .waitFor({ state: 'attached' });
      await page.locator('select[name=source]').selectOption('');
      await page.getByRole('button', { name: 'Rechercher', exact: true }).click();
      const seen = [];
      const pages = Math.max(1, Math.ceil(records.length / 15));
      for (let number = 1; number <= pages; number++) {
        const expected = records.slice((number - 1) * 15, number * 15);
        await page.waitForFunction(
          ({ number, total }) => {
            const nav = document.querySelector('nav.admin-pagination');
            return (
              nav &&
              nav.textContent.replace(/\s+/g, ' ').includes(`${number} / ${total}`) &&
              !document.querySelector('.admin-page p[role=status]')
            );
          },
          { number, total: pages },
        );
        const rows = page
          .locator('div.admin-page')
          .first()
          .locator('table')
          .first()
          .locator('tbody tr:has(button)');
        assert.equal(await rows.count(), expected.length);
        for (let index = 0; index < expected.length; index++) {
          const item = expected[index],
            row = rows.nth(index),
            text = await row.innerText();
          for (const value of [
            item.institution,
            item.grade,
            item.publication_date,
            item.application_deadline,
          ]) {
            if (value)
              assert.ok(text.includes(value), 'Displayed declared field matches actual API data.');
          }
          assert.ok(text.includes('pending'));
          assert.ok(text.includes('Version 1'));
          assert.ok(await row.locator('a').filter({ hasText: 'Article RSS (tiers)' }).count());
          assert.equal(await row.locator('a').filter({ hasText: 'Article RSS (tiers)' }).getAttribute('href'), item.source_article_url);
          if (item.provider_metadata) {
            const credit = row.locator('a').filter({ hasText: /^Wadifa Info$/ });
            assert.equal(await credit.count(), 1);
            assert.equal(await credit.getAttribute('href'), item.source_article_url);
            assert.ok(!(await credit.getAttribute('rel')).includes('nofollow'));
            if (item.provider_metadata.reported_official_url) {
              const reported = row.locator('a').filter({ hasText: dictionary.announcements.attribution.reportedNotice });
              assert.equal(await reported.getAttribute('href'), item.provider_metadata.reported_official_url);
            }
            assert.equal(item.provider_metadata.official_link_verified, false);
          }
          assert.equal(item.official_url, null);
          assert.equal(item.official_verified_at, null);
          seen.push(item.id);
        }
        if (number === 1) {
          await page.evaluate(() => document.fonts.ready);
          await page.screenshot({
            path: path.join(output, `admin-${language}-${width}.png`),
            fullPage: true,
          });
        }
        if (number < pages)
          await page.getByRole('button', { name: 'Suivant', exact: true }).click();
      }
      assert.deepEqual(
        seen,
        records.map((item) => item.id),
      );
      await page.locator('details.sources > summary').click();
      const sourceRow = page.locator('details.sources tbody tr').filter({ hasText: 'Wadifa Info' });
      assert.ok((await sourceRow.innerText()).includes('Collecte automatique inactive'));
      assert.equal(
        (await sourceRow.locator('td').nth(5).innerText()).trim(),
        String(records.filter((item) => item.source_id === source.id).length),
      );
      assert.equal(
        (await sourceRow.locator('td').nth(4).innerText()).trim(),
        source.last_error || '—',
      );
      await page.screenshot({
        path: path.join(output, `source-${language}-${width}.png`),
        fullPage: true,
      });
      if (records.length) {
        await page
          .locator('div.admin-page')
          .first()
          .getByRole('button', { name: 'Examiner', exact: true })
          .first()
          .click();
        const dialog = page.locator('dialog:visible').first();
        await dialog.locator('input[formcontrolname=verified_title]').waitFor();
        assert.equal(await dialog.locator('input[formcontrolname=official_url]').inputValue(), '');
        assert.equal(
          await dialog.locator('input[formcontrolname=verified_title]').inputValue(),
          '',
        );
        assert.ok((await dialog.innerText()).includes('Non effectuée'));
        await page.screenshot({
          path: path.join(output, `review-${language}-${width}.png`),
          fullPage: true,
        });
      }
      await page.keyboard.press('Escape');
      const alwadifa = evidence.sources.find((item) => item.key === 'alwadifa-maroc');
      for (const [id, status, count, institution] of [[source.id, 'pending', 36, ''], [alwadifa.id, 'pending', 10, ''], ['', 'approved', 0, ''], [source.id, 'pending', 1, 'Bank Al-Maghrib']]) {
        await page.locator('select[name=source]').selectOption(String(id));
        await page.locator('select[name=status]').selectOption(status);
        await page.locator('input[name=institution]').fill(institution);
        await page.getByRole('button', { name: 'Rechercher', exact: true }).click();
        await page.waitForFunction((count) => !document.querySelector('.admin-page p[role=status]') && document.querySelector('nav.admin-pagination span')?.textContent.trim().endsWith('· ' + count), count);
        assert.ok((await page.locator('div.admin-page').first().locator('nav.admin-pagination span').innerText()).trim().endsWith('· ' + count));
      }
      assert.deepEqual(writes, []);
      assert.deepEqual(errors, []);
      assert.deepEqual(providerRequests, []);
      assert.equal(await page.evaluate(() => window.__permissionCalls), 0);
      results.push({
        language,
        width,
        actual_pending_records: records.length,
        all_record_ids_and_fields_checked: true,
        source_status_institution_filters_checked: true,
        pages,
        source_error: source.last_error,
        automatic_collection_active: false,
        direction: await page.locator('html').getAttribute('dir'),
        requests,
        writes: 0,
        provider_requests: 0,
        permission_prompts: 0,
      });
      await context.close();
    }
    fs.writeFileSync(
      path.join(output, 'verification.json'),
      JSON.stringify(
        { actual_local_authenticated_admin: true, fixture_responses: false, results },
        null,
        2,
      ) + '\n',
    );
    console.log(
      `Launch readiness admin verification passed: ${results.length} cases; ${records.length} actual pending records each; all pages/fields checked; zero writes/provider requests/prompts.`,
    );
  } finally {
    if (browser) await browser.close();
    if (fs.existsSync(tokenPath)) fs.unlinkSync(tokenPath);
  }
})().catch((error) => {
  fs.writeFileSync(path.join(output, 'failure.json'), JSON.stringify({ name: error.name, frames: String(error.stack || '').split('\n').filter((line) => line.trim().startsWith('at ')), assertion: error.name === 'AssertionError' ? error.message : null }, null, 2));
  console.error('Launch readiness admin browser verification failed; no provider retry permitted.');
  process.exitCode = 1;
});
