// Local production-build SSR/hydration measurement; copied database only, no provider traffic.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { chromium } = require(require.resolve('playwright', { paths: [path.resolve('fact-generator')] }));
const out = path.resolve('backend/artifacts/concours-stabilization');
const log = path.join(out, 'local-api-requests.jsonl');
const rows = () => fs.existsSync(log) ? fs.readFileSync(log, 'utf8').trim().split('\n').filter(Boolean).map(JSON.parse) : [];
(async () => {
  const browser = await chromium.launch({ headless: true, args: ['--no-sandbox', '--disable-dev-shm-usage'] });
  const results = [];
  try {
    const context = await browser.newContext({ viewport: { width: 1440, height: 1000 } });
    await context.route('**/*', async route => {
      const url = new URL(route.request().url());
      if (url.origin === 'http://localhost:4310') return route.continue();
      if (url.origin === 'https://api.maroquiz.com' && url.pathname.startsWith('/api/v1/public/')) {
        const response = await route.fetch({ url: 'http://127.0.0.1:8085' + url.pathname + url.search, headers: { ...route.request().headers(), 'x-stabilization-browser': '1' }, maxRetries: 0, maxRedirects: 0 });
        return route.fulfill({response});
      }
      return route.abort();
    });
    const page = await context.newPage();
    for (const route of ['/concours', '/concours/education-preparation']) {
      const start = rows().length;
      await page.goto('http://localhost:4310' + route, { waitUntil: 'networkidle', timeout: 90000 });
      await page.locator('app-announcement-list [aria-busy=false]').waitFor({ timeout: 60000 });
      const requests = rows().slice(start);
      results.push({ route, requests, server_requests: requests.filter(r => r.phase === 'ssr').length, hydration_requests: requests.filter(r => r.phase === 'browser').length });
      assert.ok(requests.every(r => !r.has_authorization));
      if (!process.argv.includes('--before')) {
        assert.equal(requests.filter(r => r.phase === 'ssr').length, route === '/concours' ? 4 : 3);
        assert.equal(requests.filter(r => r.phase === 'browser').length, 0, 'Hydration must reuse the public SSR response.');
      }
    }
    await page.goto('http://localhost:4310/concours', { waitUntil: 'networkidle', timeout: 90000 });
    const start = rows().length;
    await page.evaluate(() => { history.pushState({}, '', '/concours?ann_page=2'); dispatchEvent(new PopStateEvent('popstate')); });
    await page.waitForResponse(response => response.url().includes('concours-announcements') && response.url().includes('page=2'));
    await page.waitForLoadState('networkidle');
    results.push({ route: 'client-announcement-pagination', requests: rows().slice(start) });
    if (!process.argv.includes('--before')) {
      assert.equal(rows().slice(start).length, 1, 'Announcement pagination must fetch only announcements.');
      assert.ok(rows().slice(start)[0].path.includes('concours-announcements'));
    }
    const name = process.argv.includes('--before') ? 'loading-before.json' : 'loading-after.json';
    fs.writeFileSync(path.join(out, name), JSON.stringify(results, null, 2) + '\n');
    console.log(JSON.stringify(results.map(({route,server_requests,hydration_requests,requests}) => ({route,server_requests,hydration_requests,paths: requests.map(r=>r.phase+': '+r.path)})), null, 2));
  } finally { await browser.close(); }
})().catch(error => { console.error(error.message); process.exitCode = 1; });
