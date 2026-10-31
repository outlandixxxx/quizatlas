// Production Angular behavior, using only the loopback restored acceptance database.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { chromium } = require(require.resolve('playwright', { paths: [path.resolve('fact-generator')] }));
const origin = 'http://localhost:4310', api = 'http://127.0.0.1:8085/api/v1';
const output = path.resolve('frontend/artifacts/concours-stabilization');
fs.mkdirSync(output, { recursive: true });
(async () => {
  const response = await fetch(api + '/auth/login', { method: 'POST', headers: { 'content-type': 'application/json', accept: 'application/json' }, body: JSON.stringify({ email: 'launch-readiness-admin@example.test', password: 'AcceptanceFixture42!Only', recaptcha_token: 'ISOLATED_LOCAL_FIXTURE' }) });
  assert.equal(response.status, 200);
  const token = (await response.json()).data.access_token;
  const browser = await chromium.launch({ headless: true, args: ['--no-sandbox', '--disable-dev-shm-usage'] });
  const results = [];
  try {
    for (const scenario of ['protected-401', 'public-errors', 'startup-429']) {
      let forcedStatus = 0;
      const requests = [], blocked = [];
      const context = await browser.newContext({ viewport: { width: scenario === 'public-errors' ? 390 : 1440, height: 1000 } });
      await context.addInitScript(({ token }) => { localStorage.setItem('quizatlas_access_token', token); localStorage.setItem('quizatlas.language', 'en'); }, { token });
      await context.route('**/*', async route => {
        const request = route.request(), url = new URL(request.url());
        const credentials = request.headers().authorization;
        if (url.origin === origin) {
          if (url.pathname.includes('/assets/')) assert.equal(credentials, undefined);
          return route.continue();
        }
        if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/')) {
          const publicRequest = url.pathname.startsWith('/api/v1/public/');
          const status = scenario === 'startup-429' && url.pathname.endsWith('/auth/me') ? 429 : forcedStatus && (scenario === 'public-errors' ? publicRequest : url.pathname.includes('/admin/concours-discovery/discoveries')) ? forcedStatus : 0;
          requests.push({ path: url.pathname + url.search, credential_present: !!credentials, forced_status: status || null });
          if (publicRequest) assert.equal(credentials, undefined);
          else assert.equal(credentials, 'Bearer ' + token);
          if (status) return route.fulfill({ status, contentType: 'application/json', headers: { 'retry-after': '60' }, body: JSON.stringify({ success: false, data: null, message: 'Isolated simulated failure' }) });
          assert.equal(request.method(), 'GET');
          const response = await route.fetch({ url: api + url.pathname.split('/api/v1')[1] + url.search, headers: { ...request.headers(), 'x-stabilization-browser': '1' }, maxRetries: 0, maxRedirects: 0 });
          assert.ok(response.status() < 400, 'Unexpected local acceptance API error: ' + response.status());
          return route.fulfill({ response });
        }
        blocked.push({ host: url.hostname, credential_present: !!credentials });
        assert.equal(credentials, undefined);
        return route.abort();
      });
      const page = await context.newPage();
      await page.goto(origin + (scenario === 'protected-401' ? '/admin/concours-discoveries' : '/concours'), { waitUntil: 'networkidle', timeout: 90000 });
      assert.equal(await page.evaluate(() => !!localStorage.getItem('quizatlas_access_token')), true);
      if (scenario === 'protected-401') {
        await page.locator('.discovery-list tbody tr').first().waitFor();
        assert.ok(requests.some(r => r.path.endsWith('/auth/me') && r.credential_present));
        forcedStatus = 401;
        await page.locator('select[name=status]').selectOption('approved');
        await page.getByRole('button', { name: 'Rechercher', exact: true }).click();
        await page.waitForURL('**/login', { timeout: 30000 });
        assert.equal(await page.evaluate(() => localStorage.getItem('quizatlas_access_token')), null);
      } else if (scenario === 'public-errors') {
        for (const status of [401, 429]) {
          forcedStatus = status;
          if (status === 401) {
            await page.locator('.directory-search input').fill('stabilization-fixture');
            await page.locator('.directory-search button').click();
          } else await page.getByRole('button', { name: 'Retry', exact: true }).first().click();
          await page.locator('app-public-page-error').waitFor();
          await page.waitForLoadState('networkidle');
          assert.equal(await page.evaluate(() => !!localStorage.getItem('quizatlas_access_token')), true);
          assert.ok(!page.url().includes('/login'));
          assert.ok((await page.locator('meta[name=robots]').getAttribute('content')).includes('noindex'));
        }
        await page.screenshot({ path: path.join(output, 'public-429-mobile.png'), fullPage: true });
      } else {
        assert.ok(requests.some(r => r.path.endsWith('/auth/me') && r.forced_status === 429));
        assert.ok(!page.url().includes('/login'));
      }
      results.push({ scenario, passed: true, requests, blocked_external_requests: blocked, writes: 0, provider_requests: 0 });
      await context.close();
    }
    fs.writeFileSync(path.join(output, 'auth-browser.json'), JSON.stringify(results, null, 2) + '\n');
    console.log('Production Angular authentication browser checks passed: authenticated identity/admin, protected 401 logout, public 401/429 isolation, startup 429 token preservation, external/assets credential exclusion.');
  } finally { await browser.close(); }
})().catch(error => { console.error(error.stack); process.exitCode = 1; });
