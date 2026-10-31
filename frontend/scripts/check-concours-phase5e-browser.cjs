// Actual local admin API and production UI. No publisher/production requests or app writes.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const root = path.resolve(__dirname, '../..');
const { chromium } = require(
  require.resolve('playwright', { paths: [path.join(root, 'fact-generator')] }),
);
const tokenPath = path.join(root, 'backend/storage/framework/phase5e-admin-token');
const output = path.join(root, 'frontend/artifacts/concours-phase5e');
const apiEvidence = JSON.parse(
  fs.readFileSync(path.join(root, 'backend/artifacts/concours-phase5e/admin-api.json')),
);
const expected = apiEvidence.sources.data.filter((source) =>
  ['alwadifa-maroc', 'dreamjob', 'orientation-chabab'].includes(source.key),
);

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
      const context = await browser.newContext({ viewport: { width, height: 1000 } });
      const requests = [],
        writes = [],
        errors = [];
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
        if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/')) {
          if (request.method() !== 'GET') {
            writes.push(request.method() + ' ' + url.pathname);
            return route.abort();
          }
          const response = await route.fetch({
            url: 'http://localhost:8000' + url.pathname + url.search,
            maxRedirects: 0,
          });
          requests.push({ path: url.pathname + url.search, status: response.status() });
          if (response.status() >= 400)
            errors.push('API ' + response.status() + ' ' + url.pathname);
          return route.fulfill({
            response,
            headers: {
              ...response.headers(),
              'access-control-allow-origin': 'http://localhost:4301',
            },
          });
        }
        if (url.origin === 'http://localhost:4301') return route.continue();
        return route.abort();
      });
      const page = await context.newPage();
      page.on('pageerror', (error) => errors.push(error.message));
      await page.goto('http://localhost:4301/admin/concours-discoveries', {
        waitUntil: 'domcontentloaded',
        timeout: 60000,
      });
      await page
        .getByRole('button', { name: 'Examiner', exact: true })
        .first()
        .waitFor({ timeout: 30000 });
      const listing = page.locator('div.admin-page').first().locator('table').first();
      assert.equal(await listing.locator('tbody tr').count(), 10);
      await page.locator('details.sources > summary').click();
      const sources = page.locator('details.sources');
      const checked = [];
      for (const source of expected) {
        const row = sources.locator('tbody tr').filter({ hasText: source.name });
        assert.equal(await row.count(), 1);
        const cells = row.locator('td');
        assert.ok((await cells.nth(1).innerText()).includes('RSS accessible lors du contrôle'));
        assert.ok((await cells.nth(1).innerText()).includes('HTTP 200'));
        assert.ok((await cells.nth(1).innerText()).includes(source.technical_access.checked_at));
        const eligibility = await cells.nth(2).innerText();
        assert.ok(
          eligibility.includes(
            source.usage_eligible ? 'Base de collecte compatible' : 'Collecte non éligible',
          ),
        );
        assert.ok(eligibility.includes('Collecte automatique inactive'));
        assert.ok(eligibility.includes(source.enabled ? 'Activée' : 'Désactivée'));
        assert.ok((await cells.nth(3).innerText()).includes(source.last_success_at || 'Aucun'));
        assert.equal((await cells.nth(4).innerText()).trim(), source.last_error || '—');
        assert.equal(
          (await cells.nth(5).innerText()).trim(),
          String(source.pending_discoveries_count),
        );
        assert.equal(await row.getByRole('link').getAttribute('href'), source.listing_url);
        if (source.key === 'orientation-chabab')
          assert.ok((await row.innerText()).includes('Dates RSS malformées'));
        checked.push({
          source: source.key,
          technically_accessible_at_recorded_check: true,
          usage_eligible: source.usage_eligible,
          enabled: source.enabled,
          automatic_collection_active: false,
          pending: source.pending_discoveries_count,
        });
      }
      await sources.screenshot({ path: path.join(output, 'sources-' + language + '.png') });
      const container = sources.locator('.table-card');
      await container.evaluate((element) => {
        element.scrollLeft = element.scrollWidth;
      });
      await sources.screenshot({ path: path.join(output, 'sources-counts-' + language + '.png') });
      assert.equal(
        await page.evaluate(() => document.documentElement.scrollWidth > innerWidth + 1),
        false,
      );
      assert.equal(await page.evaluate(() => window.__permissionCalls), 0);
      assert.deepEqual(writes, []);
      assert.deepEqual(errors, []);
      results.push({
        language_preference: language,
        width,
        admin_direction: await page.locator('html').getAttribute('dir'),
        sources: checked,
        requests,
        writes: 0,
        permission_prompts: 0,
      });
      await context.close();
    }
    fs.writeFileSync(
      path.join(output, 'verification.json'),
      JSON.stringify({ actual_local_api: true, mocked_records: false, results }, null, 2) + '\n',
    );
    console.log(
      'Three-source actual admin UI passed: ' +
        results.length +
        ' viewport/language cases; zero writes.',
    );
  } finally {
    if (browser) await browser.close();
    if (fs.existsSync(tokenPath)) fs.unlinkSync(tokenPath);
  }
})().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
